<?php

class User
{
    const USERS = [
        array(1, 'Juan'),
        array(2, 'Ana'),
        array(3, 'Pepa'),
        array(4, 'Toni')
    ];
    
    public function __construct()
    {
        // echo "en el modelo User<br>";
    }

    public static function all()
    {
        return User::USERS;
    }
    public function find($id)
    {
        return User::USERS[$id];
    }
}

