<?php
namespace App\classes;

class Redirect
{
    public static function to($page)
    {
        header("location: $page");
    }

    public static function back()
    {
        //Trang hiện đang đứng
        $uri = $_SERVER['REQUEST_URI'];

        header("location: $uri");
    }
}