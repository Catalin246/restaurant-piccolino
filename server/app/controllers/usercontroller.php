<?php

namespace Controllers;

use Exception;
use Services\UserService;

class UserController extends Controller
{
    private $service;

    // initialize services
    public function __construct()
    {
        $this->service = new UserService();
    }

    // get all user objects
    public function getAll()
    {
        $offset = NULL;
        $limit = NULL;

        if (isset ($_GET['offset']) && is_numeric($_GET['offset'])) {
            $offset = $_GET['offset'];
        }

        if (isset ($_GET['limit']) && is_numeric($_GET['limit'])) {
            $limit = $_GET['limit'];
        }

        $users = $this->service->getAll($offset, $limit);

        $this->respond($users);
    }

    // create a user object
    public function create()
    {
        try {
            $user = $this->createObjectFromPostedJson("Models\\User");
            $user = $this->service->insert($user);
        } catch (Exception $e) {
            $this->respondWithError(500, $e->getMessage());
        }

        $this->respond($user);
    }
}