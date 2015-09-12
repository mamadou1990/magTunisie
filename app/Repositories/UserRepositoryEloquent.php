<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\UserRepository;
use App\Entities\User;

/**
 * Class UserRepositoryEloquent
 * @package namespace App\Repositories;
 */
class UserRepositoryEloquent extends BaseRepository implements UserRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return User::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria( app(RequestCriteria::class) );
    }

    public function getAllUsers()
    {
        $users = $this->repository->all();

        return $users;
    }

    public function addUser($User)
    {
        $this->repository->create($User);
    }

    public function getUser($id)
    {
        $User = $this->repository->findByField('User_id',$id);

        return $User;
    }

    public function updateUser($User, $User_id)
    {
         $this->repository->update($User, $User_id );

    }

    public function deleteUsers($ids){
        foreach ($ids as $id) {
            $this->repository->delete($id);
        }}
}