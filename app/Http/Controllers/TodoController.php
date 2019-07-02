<?php

namespace App\Http\Controllers;

use App\Repositories\Todo\TodoRepository;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * @var \TodoRepository
     */
    private $repository;

    /**
     * TodoController constructor.
     * @param \TodoRepository $repository
     */
    public function __construct(TodoRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getAllTodos(){

        return $this->repository->getAllTodos();
    }

    public function getSingleTodo($id){
        return $this->repository->getSingleTodo($id);
    }
}
