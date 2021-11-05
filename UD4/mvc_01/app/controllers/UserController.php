<?php

/**
*
*/
class UserController
{

    function __construct()
    {
        // echo "En UserController";
    }

    public function index()
    {
        require "/app/views/user.php";

    }
}

