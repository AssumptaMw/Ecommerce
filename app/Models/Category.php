<?php

namespace App\Models;
use CodeIgniter\Model;
use Exception;

class Category extends Model{

    protected $table = 'tbl_categories';
    protected $primaryKey = 'category_id';
    protected $allowedFields = [
        'category_name'
    ];
}
