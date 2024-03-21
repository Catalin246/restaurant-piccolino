<?php

namespace Repositories;

use PDO;
use PDOException;
use Repositories\Repository;

class UserRepository extends Repository
{
    function getAll($offset = NULL, $limit = NULL)
    {
        try {
            $query = "SELECT * FROM user";
            if (isset ($limit) && isset ($offset)) {
                $query .= " LIMIT :limit OFFSET :offset ";
            }
            $stmt = $this->connection->prepare($query);
            if (isset ($limit) && isset ($offset)) {
                $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
                $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
            }
            $stmt->execute();

            $stmt->setFetchMode(PDO::FETCH_CLASS, 'Models\User');
            $articles = $stmt->fetchAll();

            return $articles;
        } catch (PDOException $e) {
            echo $e;
        }
    }

    function getOne($id)
    {
        // try {
        //     $stmt = $this->connection->prepare("SELECT * FROM user WHERE id = :id");
        //     $stmt->bindParam(':id', $id);
        //     $stmt->execute();

        //     $stmt->setFetchMode(PDO::FETCH_CLASS, 'Models\Product');
        //     $user = $stmt->fetch();

        //     return $user;
        // } catch (PDOException $e) {
        //     echo $e;
        // }
    }

    function insert($user)
    {
        try {
            $stmt = $this->connection->prepare("INSERT into user (username, email, role, password) VALUES (?,?,?,?)");

            $stmt->execute([$user->username, $user->email, $user->role, $user->password]);

            $user->id = $this->connection->lastInsertId();

            return $user;
        } catch (PDOException $e) {
            echo $e;
        }
    }


    function update($user, $id)
    {
        // try {
        //     $stmt = $this->connection->prepare("UPDATE user SET name = ?, price = ?, description = ?, image = ?, category_id = ? WHERE id = ?");

        //     $stmt->execute([$user->name, $user->price, $user->description, $user->image, $user->category_id, $id]);

        //     return $user;
        // } catch (PDOException $e) {
        //     echo $e;
        // }
    }

    function delete($id)
    {
        // try {
        //     $stmt = $this->connection->prepare("DELETE FROM user WHERE id = :id");
        //     $stmt->bindParam(':id', $id);
        //     $stmt->execute();
        //     return;
        // } catch (PDOException $e) {
        //     echo $e;
        // }
        // return true;
    }
}
