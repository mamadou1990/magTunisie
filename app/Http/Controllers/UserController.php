<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use Illuminate\Http\Request;

use App\Http\Requests;
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


    public function addUser($User)
    {
        $this->repository->addUser($User);
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
