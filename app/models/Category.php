<?php
namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    //chỉ dùng sortDelete khi có cột deleted_at
    use SoftDeletes;

    protected $timestamp = true;
    protected $fillable = ['name', 'slug'];
    protected $date = ['deleted_at'];
}