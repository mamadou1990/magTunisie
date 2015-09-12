<?php

namespace App\Repositories;

use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Interface ArticleRepository
 * @package namespace App\Repositories;
 */
interface ArticleRepository extends RepositoryInterface
{
    public function getAllArticles();
    public function createArticle($Article);
    public function getArticle($id);
    public function updateArticles($Article, $id);
    public function deleteArticle($id);
    public function getActiclesByCategorie($cat_id);
    public function getActiclesBySection($sec_id);



}
