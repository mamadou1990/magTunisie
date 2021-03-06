<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\ArticleRepository;
use App\Entities\Article;

/**
 * Class ArticleRepositoryEloquent
 * @package namespace App\Repositories;
 */
class ArticleRepositoryEloquent extends BaseRepository implements ArticleRepository
    {


    /**
     * Specify Model class name
     *
     * @return string
     */

    public function model()
    {
        return Article::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria( app(RequestCriteria::class) );
    }

    public function getAllArticles()
{
    $articles = $this->all();

    return $articles;
}

    public function createArticle($Article)
    {
         $this->create($Article);
    }


    public function getArticle($id)
    {
        $Article = $this->findByField('id',$id);

        return $Article;
    }

    public function updateArticles($Article, $id)
    {
        $post = $this->update( $Article, $id );
    }

    public function deleteArticle($id)
    {
        $this->delete($id);
    }

    public function getActiclesByCategorie($cat_id)
    {
        $articles = $this->findByField('categorie_id',$cat_id);

        return $articles;
    }

    public function getActiclesBySection($sec_id)
    {
        $articles = $this->findByField('section_id',$sec_id);

        return $articles;
    }

}