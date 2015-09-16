<?php

namespace App\Http\Controllers;

use App\Entities\Categorie;
use Request;
use App\Http\Controllers\Controller;
use App\Repositories\CategorieRepository;

class CategorieController extends Controller
{
    protected $repository;

    public function __construct(CategorieRepository $repository){
      $this->repository = $repository;
}


public function categories()
{
    return $this->repository->getAllCategories();
}




public function addCategorie()
    {

        $categorie=new Categorie();
        $categorie->title=Request::input('title');
        $categorie->section_id=Request::input('section_id');

        //var_dump($section);

        var_dump($this->repository->addCategorie($categorie));
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
