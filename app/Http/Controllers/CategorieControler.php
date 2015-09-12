<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\CategorieRepository;

class CategorieControler extends Controller
{
    protected $repository;

    public function __construct(CategorieRepository $repository){
        $this->repository = $repository;
    }


    public function categories()
    {
        return $this->repository->getAllCategories();
    }




    public function createCategorie($Categorie)
    {
        $this->repository->addCategorie($Categorie);
    }





    public function categorie($cat_id)
    {
        return $this->repository->getCategorie($cat_id);

    }






    public function updateCategories($Categorie, $id)
    {
       $this->repository->updateCategories($Categorie, $id);

    }





    public function deleteCategorie($ids){
            $this->repository->deleteCategories($ids);
    }



        public function getCategoriesWithArticles()
    {
       return $this->repository->getCategoriesWithArticles();

    }

    public function getCategoriesBySection($Sec_id){

        return $this->repository->getCategoriesBySection($Sec_id);
    }

}
