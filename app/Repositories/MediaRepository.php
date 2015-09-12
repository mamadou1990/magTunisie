<?php

namespace App\Repositories;

use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Interface MediaRepository
 * @package namespace App\Repositories;
 */
interface MediaRepository extends RepositoryInterface
{
    public function getAllMedias();
    public function createMedia($Media);
    public function getMedia($id);
    public function updateMedia($Media, $id);
    public function deleteMedias($ids);







}
