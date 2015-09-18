<?php

namespace App\Http\Controllers;

use Request;

use App\Repositories\ArticleRepository;


use App\Http\Controllers\Controller;
use Swagger\Annotations as SWG;
use App\Entities\Article;
use App\Entities\Media;


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


    public function addArticle()
    {
        $article=new Article();
        $article->title=Request::input('title');
        $article->text=Request::input('text');
        $article->user_id=Request::input('user_id');
        $article->section_id=Request::input('section_id');
        $article->categorie_id=Request::input('categorie_id');

        //var_dump($article);

        var_dump($this->repository->createArticle($article));
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
    public function article($articleId)
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

    public function getArticlesWithMedias()
    {
        return $this->repository->articlesWithMedias();
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
