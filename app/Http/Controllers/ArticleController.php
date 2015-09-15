<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\ArticleRepository;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Swagger\Annotations as SWG;



class ArticleController extends Controller
{

    /**
     * @var PostRepository
     */
    protected $repository;

    public function __construct(ArticleRepository $repository){
        $this->repository = $repository;
    }

    public function articles()
    {
        return $this->repository->getAllArticles();

        return $articles;
    }


    public function addArticle($Article)
    {
        $this->repository->createArticle($Article);
    }



    /**
     *   @SWG\Get(
     *     path="/public/article/{articleId}",
     *     summary="Find article by ID",
     *     @SWG\Parameter(
     *       name="articleId",
     *       description="ID of article that needs to be fetched",
     *       required=true,
     *       type="integer",
     *       format="int64",
     *       in ="path"
     *     ),
     *      @SWG\Response(
     *     response=200,
     *     description="A list of articles"
     *   ),
     * )
     */
    public function getArticleById($articleId)
    {
        return $this->repository->getArticle($articleId);
    }




    public function updateArticles($Article, $id)
{
        $this->repository->Updatearticles($Article, $id);
}



    public function deleteArticle($id)
    {
        $this->repository->deleteArticle($id);
    }



    public function getActiclesByCategorie($cat_id)
    {
        return $this->repository->getActicleByCategorie($cat_id);
    }


    public function getActiclesBySection($sec_id)
    {
       return $this->repository->getActiclesBySection($sec_id);

    }


}
