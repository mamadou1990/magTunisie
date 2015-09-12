<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\MediaRepository;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MediaController extends Controller
{


    protected $repository;

    public function __construct(MediaRepository $repository)
    {
        $this->repository = $repository;

    }


    public function medias()
    {
        return $this->repository->getAllMedias();

    }


    public function createMedias($Media)
    {
        $this->repository->createMedia($Media);
    }


    public function media($id)
    {
        return $this->repository->getMedia($id);

    }


    public function updateMedias($Media, $id)
    {
        $this->repository->updateMedia($Media, $id);

    }


    public function deleteMedias($ids)
    {

        $this->repository->deleteMedias($ids);

    }
}