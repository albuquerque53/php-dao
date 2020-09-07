<?php

namespace Access\Controller;

use Access\Model\User;

class UserController
{

    public static function index()
    {
        $users = User::all();

        return $users;
    }

    public function show(int $id)
    {
        $user = User::selectById($id);

        return $user;
    }

    public static function search($login)
    {
        $user = User::selectByLogin($login);

        return $user;
    } 

    public function store(string $login, string $password)
    {
        User::insert($login, $password);
    }

    public function update(int $id, string $login, string $password)
    {
        User::update($login, $password, $id);
    }

    public function destroy(int $id)
    {
        User::delete($id);
    }

}

