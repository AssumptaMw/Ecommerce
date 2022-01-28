<?php 

namespace App\Models;  
use CodeIgniter\Model;
use Exception;


class UserModel extends Model{

    protected $table = 'tbl_users';
    protected $primaryKey = 'user_id';
    protected $allowedFields = [
        'first_name',
        'last_name',
        'gender',
        'email',
        'password',
        'role'
    ];

    /**
     * @throws Exception
     */
    public function findByEmail(string $email): object|array
    {
        $user = $this->asArray()->where(['email' => $email])->first();

        if (!$user)
            throw new Exception('User does not exist for specified email address');

        return $user;
    }
}