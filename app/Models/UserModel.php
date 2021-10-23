<?php 

namespace App\Models;  
use CodeIgniter\Model;

  
class UserModel extends Model{

    protected $table = 'users';
    
    protected $allowedFields = [
        'firstname',
        'lastname',
        'username',
        'gender',
        'email',
        'password',
        'created_at'
    ];

}