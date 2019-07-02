<?php
namespace  App\Repositories\User;
use App\User;

class EloquentUser implements UserRepository{
    /**
     * @var User
     */
    private $user;


    /**
     * EloquentUser constructor.
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function getAll()
    {

        // TODO: Implement getAll() method.

        return $this->user->all();
    }

    public function deleteUser($id)
    {
        // TODO: Implement deleteUser() method.

        $userObj=$this->user->findOrFail($id);
        if($userObj->delete()){
            return true;
        }else{
            return false;
        }


    }
}