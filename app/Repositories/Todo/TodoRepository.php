<?php

namespace App\Repositories\Todo;

interface TodoRepository{

    public function getAllTodos();
    public function getSingleTodo($id);
    public function updateTodo($id);
    public function deleteTodo($id);
}