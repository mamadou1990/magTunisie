<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\CategorieRepository;
use App\Entities\Categorie;

/**
 * Class CategorieRepositoryEloquent
 * @package namespace App\Repositories;
 */
class CategorieRepositoryEloquent extends BaseRepository implements CategorieRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Categorie::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria( app(RequestCriteria::class) );
    }

    public function getCategories()
    {
        $categories = $this->repository->all();

        return $categories;

    }



    public function addCategorie($Categorie)
    {
        $this->repository->create($Categorie);
    }


    public function getCategorie($cat_id)
    {
        $Categorie = $this->repository->findByField('id',$cat_id);

        return $Categorie;

    }

    public function updateCategories($Categorie, $id)
    {
         $this->repository->update( $Categorie, $id );

    }

    public function deleteCategories($ids){
        foreach ($ids as $id) {
            $this->repository->delete($id);
    }}


    public function getCategoriesWithArticles()
    {
        $Categories = App\Categorie::with('Article')->get();
        return $Categories;
    }

    public function getCategoriesBySection($Sec_id){

        $Categories = $this->repository->findByField('Section_id',$Sec_id);

        return $Categories;
    }

}