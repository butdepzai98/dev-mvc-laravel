<?php
namespace App\controllers\admin;

use App\classes\Request;
use App\classes\Session;
use App\controllers\BaseController;

class DashBoadController extends BaseController
{
    public function show()
    {
        //Tạo session
        Session::add('admin', 'Chào mừng user');
        Session::remove('admin');

        if(Session::has('admin'))
        {
            $msg = Session::get('admin');
        }
        else
        {
            $msg = 'Not define';
        }
        //$users = Capsule::table('users')->where('id', '>', 1)->get();
        return views('admin/pages/dashboad', ['admin' => $msg]);
    }

    public function create()
    {
        if(Request::has('posting'))
        {
            $request = Request::get('posting');
            var_dump($request->image->name);
        }
    }
}