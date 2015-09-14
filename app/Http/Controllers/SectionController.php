<?php

namespace App\Http\Controllers;

use App\Repositories\SectionRepository;
use Illuminate\Http\Request;


use App\Http\Requests;
use App\Http\Controllers\Controller;


class SectionController extends Controller
{
    /**
     * Interface ArticleRepository
     * @package namespace App\Repositories;
     */
    public function __construct(SectionRepository $repository){
    $this->repository = $repository;

}


    public function sections()
    {
        return  $this->repository->getAllSections();
    }





    public function addSection($Section)
    {
         $this->repository->addSections($Section);
    }




    public function section($id)
    {
       return $this->repository->getSection($id);

}



    public function updateSections($Section, $Section_id)
    {
         $this->repository->updateSections($Section, $Section_id);

    }




    public function deleteSections($ids)
{

        $this->repository->deleteSections($ids);

}

    public function getSectionsWithCategories()
{
   return $this->repository->getSectionsWithCategories();


    }


}