<?php

namespace App\Models;
use CodeIgniter\Model;
use Exception;

class ProductModel extends Model{

    protected $table = 'tbl_products';
    protected $primaryKey = 'product_id';
    protected $allowedFields = [
        'product_name',
        'product_description',
        'product_image',
        'unit_price',
        'available_quantity',
        'subcategory_id',
        'created_at',
        'updated_at',
        'added_by',
        'is_deleted'
    ];

    public function subCategory(): BelongsTo {
        return $this->belongsTo(SubCategory::class)->with('category');
    }

}

