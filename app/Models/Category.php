<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    const CREATED_AT = 'category_created_at';
    const UPDATED_AT = 'category_updated_at';
    protected $fillable = [
        'category_name',
        'category_slug',
        'category_description',
        'category_status',
        'category_is_deleted',
        'category_added_by',
        'category_updated_by',
        'category_deleted_by',
        'category_created_at',
        'category_updated_at',
        'category_deleted_at',
    ];    
}
