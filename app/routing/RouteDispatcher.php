<?php
namespace App\routing;

use AltoRouter;

class RouteDispatcher
{
    protected $match;
    protected $controller;
    protected $method;

    public function __construct(AltoRouter $router)
    {
        $this->match = $router->match();

        //Kiểm tra xem request đúng hay sai
        if($this->match){

            //biến đổi để lấy ra Controller & method
            $url =  $this->match['target'];
            $url = explode("@", $url);

            list($controller, $method) = $url;

            //Gán 
            $this->controller = $controller;
            $this->method = $method;
        
            # Nếu Controller có method đó...
            if (is_callable(array(new $this->controller, $this->method))) {
                call_user_func_array(array(new $this->controller, $this->method), array());

            }
            else 
            {
                echo 'Method : '. $this->method .' is not define !';
            }
        }
        else
        {
            return views('errors/404');
        }
    }
}