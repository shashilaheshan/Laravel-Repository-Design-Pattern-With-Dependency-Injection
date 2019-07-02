<?php

namespace App\Repositories\Todo;

class EloquentTodo implements TodoRepository{
    /**
     * @var \App\Todo
     */
    private $todo;


    /**
     * EloquentTodo constructor.
     * @param \App\Todo $todo
     */
    public function __construct(\App\Todo $todo)
    {
        $this->todo = $todo;
    }

    public function getAllTodos()
    {
        // TODO: Implement getAllTodos() method.
        return $this->todo->all();
    }

    public function getSingleTodo($id)
    {
        // TODO: Implement getSingleTodo() method.
        return $this->todo->findOrFail($id);
    }

    public function updateTodo($id)
    {
        // TODO: Implement updateTodo() method.
    }

    public function deleteTodo($id)
    {
        // TODO: Implement deleteTodo() method.
    }
}