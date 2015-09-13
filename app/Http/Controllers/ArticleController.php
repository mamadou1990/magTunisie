<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\ArticleRepository;

use App\Http\Requests;
use App\Http\Controllers\Controller;

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

    }



    public function createArticle($Article)
    {
        $this->repository->createArticle($Article);
    }




    public function article($id)
    {
        return $this->repository->getArticle($id);
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
