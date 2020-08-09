<?php

use Philo\Blade\Blade;

//Dùng để gọi View
function views($path, array $data = [])
{
    $views = REAL_PATH . '/resources/views';
    $cache = REAL_PATH . '/bootstrap/cache';

    $blade = new Blade($views, $cache);
    echo $blade->view()->make($path, $data)->render();
}



//Dùng cho gửi Mail
function make($filename, $data)
{
    extract($data);

    //Turn on output Buffering
    ob_start();
    //include template
    require REAL_PATH.'\resources\views\emails\\'. $filename .'.blade.php';
    //require REAL_PATH.'\resources\views\emails\wellcome.blade.php';
    //get content of file
    $content = ob_get_contents();
    //remove output Buffering
    ob_end_clean();

    return $content;
}