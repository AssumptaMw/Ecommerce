<?php

namespace App\Controllers\API;

use App\Controllers\BaseController;
use App\Models\UserModel;
use CodeIgniter\HTTP\Response;
use CodeIgniter\HTTP\ResponseInterface;
use Exception;
use ReflectionException;

class AuthController extends BaseController
{
    /**
     * Authenticate Existing User
     *
     * @return Response
     * @throws Exception
     */
    public function login(): ResponseInterface|Response
    {
        $rules = [
            'email'    => 'required|min_length[6]|max_length[50]|valid_email',
            'password' => 'required|min_length[8]|max_length[255]'
        ];

        $input = $this->request->getVar();

        if(!$this->validate($rules)) {
            return $this->getResponse($this->validator->getErrors(), ResponseInterface::HTTP_BAD_REQUEST);
        }

        $model = new UserModel();
        $user = $model->findByEmail($input['email']);

        if(!password_verify($input['password'], $user['password']))
            return $this->getResponse(['error' => 'Invalid credentials'], ResponseInterface::HTTP_BAD_REQUEST);

        return $this->getJWTForUser($input['email']);
    }

    /**
     * Register a new user
     *
     * @throws ReflectionException
     */
    public function register(): ResponseInterface
    {
        $rules = [
            'name'     => 'required',
            'email'    => 'required|min_length[6]|max_length[50]|valid_email|is_unique[tbl_users.email]',
            'password' => 'required|min_length[8]|max_length[255]'
        ];

        $input = $this->request->getVar();
        if(!$this->validate($rules)) {
            return $this->getResponse($this->validator->getErrors(), ResponseInterface::HTTP_BAD_REQUEST);
        }

        $userModel = new UserModel();
        $input['password'] = password_hash($input['password'], PASSWORD_DEFAULT);
        $userModel->save($input);

        return $this->getJWTForUser($input['email'], ResponseInterface::HTTP_CREATED);

    }

    private function getJWTForUser(string $email, int $responseCode = ResponseInterface::HTTP_OK): ResponseInterface
    {
        try {
            $model = new UserModel();
            $user = $model->findByEmail($email);
            unset($user['password']);

            helper('jwt');

            return $this->getResponse([
                'message'      => 'User authenticated successfully',
                'user'         => $user,
                'access_token' => getSignedJWTForUser($email)
            ]);
        } catch (Exception $exception) {
            return $this->getResponse(['error' => $exception->getMessage(),], $responseCode);
        }
    }
}
