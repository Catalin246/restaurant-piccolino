<?php

namespace Controllers;

use Services\UserService;

class LoginController extends Controller
{
    private $service;

    // initialize services
    function __construct()
    {
        $this->service = new UserService();
    }

    // log a user by returning the jwt token
    public function login()
    {

    }
}