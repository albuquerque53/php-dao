<?php

namespace Access\Model;

use Access\DAO\Database;

class User
{
    public static function all()
    {
        $sql = new Database();

        $users = $sql->select('select * from users');

        return $users;
    }

    public static function selectById(int $id)
    {
        $sql = new Database();

        $user = $sql->select('select * from users where id = :ID', array(
            ':ID' => $id
        ));

        return $user;
    }

    public static function selectByLogin($login)
    {
        $sql = new Database();

        $user = $sql->select('select * from users where login like :SEARCH order by login', array(
            ':SEARCH' => "%{$login}%"
        ));

        return $user;
    } 

    public static function insert(string $login, string $password)
    {
        $sql = new Database();

        $sql->query('insert into users(login, password) values(:LOGIN, :PASSWORD)', array(
            ':LOGIN' => $login,
            ':PASSWORD' => $password
        ));
    }

    public static function update(string $login, string $password, int $id)
    {
        $sql = new Database();

        $sql->query('update users set login = :LOGIN, password = :PASSWORD where id = :ID', array(
            ':LOGIN' => $login,
            ':PASSWORD' => $password,
            ':ID' => $id
        ));
    }

    public static function delete(int $id)
    {
        $sql = new Database();

        $sql->query('delete from users where id = :ID', array(
            ':ID' => $id
        ));
    }
}

