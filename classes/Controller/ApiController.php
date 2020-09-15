<?php

namespace Access\Controller;

use Access\Controller\UserController;

class ApiController
{
    private $userController;

    public function __construct()
    {
        $this->userController = new UserController;
    }

    public function index()
    {
        $users = $this
            ->userController->index(); 
    
        echo json_encode($users);
    }

    public function show(int $id)
    {
        // Show by ID
    }

    public function search(string $login)
    {
        // Show by Login
    }

    public function store(string $login, string $password)
    {
        // New User
    }

    public function update(int $id, string $login, string $password)
    {
        // Update User
    }

    public function destroy(int $id)
    {
        // Delete User
    }
}

