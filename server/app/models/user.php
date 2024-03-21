<?php
namespace Models;

enum Role
{
    case CUSTOMER;
    case ADMIN;
}

class User
{
    public int $id;
    public string $username;
    public string $email;
    public Role $role;
    public string $password;
}
