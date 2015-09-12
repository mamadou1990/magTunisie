<?php

namespace App\Repositories;

use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Interface CategorieRepository
 * @package namespace App\Repositories;
 */
interface CategorieRepository extends RepositoryInterface
{
    public function getCategories();
    public function addCategorie($Categorie);
    public function getCategorie($cat_id);
    public function updateCategories($Categorie, $id);
    public function deleteCategories($ids);
    public function getCategoriesWithArticles();
    public function getCategoriesBySection($Sec_id);






}
