<?php

namespace App\Repositories;

use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Interface UserRepository
 * @package namespace App\Repositories;
 */
interface UserRepository extends RepositoryInterface
{
    public function getAllUsers();
    public function addUser($User);
    public function getUser($id);
    public function updateUser($User, $User_id);
    public function deleteUsers($ids);





}
