<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use App\Entities\User;
use Request;
use App\Http\Controllers\Controller;
use App\Repositories\CategorieRepository;

class UserController extends Controller
{

    protected $repository;

    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }


    public function users()
    {
        return $this->repository->getAllUsers();


    }


    public function addUser()
    {
        $user=new User();
        $user->name=Request::input('name');
        $user->email=Request::input('email');
        $user->password=Request::input('password');
        $user->media_id=Request::input('media_id');
        //var_dump($section);

        var_dump($this->repository->addUser($user));
    }


public function user($id)
    {
return $this->repository->getUser($id);


}


public function updateUser($User, $User_id)
{
    $this->repository->updateUser($User, $User_id);
}




public function deleteUsers($ids)
    {

        $this->repository->deleteUsers($ids);

    }

}
