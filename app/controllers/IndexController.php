<?php
namespace App\controllers;

use Philo\Blade;
use App\controllers\BaseController;
use Illuminate\Database\Capsule\Manager as Capsule; 

class IndexController extends BaseController
{
    public function show()
    {
        return views('hello');
    }
}