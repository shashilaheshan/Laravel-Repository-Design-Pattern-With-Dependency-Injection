<?php

namespace App\Http\Controllers;

use App\Repositories\User\UserRepository;
use Illuminate\Http\Request;
use App\User as Users;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * @var UserRepository
     */
    private $repository;



    /**
     * HomeController constructor.
     * @param UserRepository $repository
     */
    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;


    }

    public function index()
    {

        if($this->repository->deleteUser(15)){
            if($this->repository->getAll())

            {
               return $this->repository->getAll();
            }else{
              return abort(500);
            }
        }else{
return abort(400);
        }



    }

    function _returnUsers()
    {

        return DB::select(DB::raw("select * from users"));
    }
    //
}
