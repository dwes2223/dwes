<?php

/**
*
*/
class LoginController
{

    function __construct()
    {
        // echo "En LoginController";
    }

    public function index()
    {
        require "../app/views/login.php";
    }
}

