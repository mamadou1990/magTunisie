<?php

namespace App\Http\Controllers;

use App\Repositories\SectionRepository;
use Illuminate\Http\Request;


use App\Http\Requests;
use App\Http\Controllers\Controller;


class SectionController extends Controller
{
    public function __construct(SectionRepository $repository){
        $this->repository = $repository;

    }


    public function Sections()
    {
        return  $this->repository->getAllSections();
    }





    public function addSections($Section)
    {
         $this->repository->addSections($Section);
    }




    public function Section($id)
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