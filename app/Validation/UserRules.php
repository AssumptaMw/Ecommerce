<?php

namespace App\Validation;

use App\Models\UserModel;
use Exception;

class UserRules
{
    public function validate_user(string $str, string $fields, array $data): bool
    {
        dd($str);
        try {
            $model = new UserModel();
            $user = $model->findByEmail($data['email']);
            return password_verify($data['password'], $user['password']);
        } catch (Exception $e) {
            return false;
        }
    }
}