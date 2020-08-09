<?php
namespace App\classes;

use App\classes\Session;

class CSRFToken
{
    /*
     * Generate Token
     * @return mixed
     */
    public static function _token()
    {
        $randomToken = base64_encode(openssl_random_pseudo_bytes(32));
        if(!Session::has('token'))
        {
            Session::add('token', $randomToken);
        }

        return Session::get('token');
    }

    /*
     * Verify Token
     * @param $requestToken
     * @return bool
     */
    public static function verifyCSRFToken($requestToken)
    {
        if(Session::has('token') && Session::get('token') === $requestToken)
        {
            Session::remove('token');
            return true;
        }
        return false;
    }
}