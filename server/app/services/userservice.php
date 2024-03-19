<?php
namespace Services;

use Repositories\UserRepository;

class UserService
{

    private $repository;

    function __construct()
    {
        $this->repository = new UserRepository();
    }

    public function getAll($offset = NULL, $limit = NULL)
    {
        // return $this->repository->getAll($offset, $limit);
    }

    public function getOne($id)
    {
        // return $this->repository->getOne($id);
    }

    public function insert($item)
    {
        // return $this->repository->insert($item);
    }

    public function update($item, $id)
    {
        // return $this->repository->update($item, $id);
    }

    public function delete($item)
    {
        // return $this->repository->delete($item);
    }
}

?>