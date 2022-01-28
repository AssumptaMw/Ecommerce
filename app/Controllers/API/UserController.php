<?php

namespace App\Controllers\API;

use App\Controllers\BaseController;
use App\Models\UserModel;
use CodeIgniter\HTTP\ResponseInterface;

class UserController extends BaseController
{
    public function __construct(public $user = new UserModel()) { }

    public function index(): ResponseInterface
    {
        return $this->getResponse(['message' => 'Users successfully retrieved.', 'users' => $this->user->findAll()]);
    }

    public function show($id): ResponseInterface
    {
        return $this->getResponse(['message' => 'User retrieved successfully', 'user' => $this->user->find($id)]);
    }
}
