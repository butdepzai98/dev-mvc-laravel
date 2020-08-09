<?php
namespace App\controllers\admin;

use App\models\Category;

class CategoryController
{
    function show()
    {
        $categories = Category::all();
        return views('admin/pages/category/index', compact('categories'));
    }

    function create()
    {
        return views('admin/pages/category/createOrEdit');
    }

    function store()
    {
        
    }
}