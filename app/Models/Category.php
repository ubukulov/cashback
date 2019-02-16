<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $table = 'categories';

    public $fillable = [
        'id', 'title', 'parent_id', 'created_at', 'updated_at'
    ];

    public static function exists($title)
    {
        $result = Category::whereTitle($title)->first();
        return (!$result) ? true : false;
    }
}
