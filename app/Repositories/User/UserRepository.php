<?php
namespace App\Repositories\User;

interface UserRepository{

    public function getAll();

    public function deleteUser($id);


}