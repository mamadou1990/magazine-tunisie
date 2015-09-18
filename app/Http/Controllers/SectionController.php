<?php

namespace App\Http\Controllers;

use App\Entities\Section;
use App\Entities\Categorie;
use App\Repositories\SectionRepository;
use Request;
use App\Http\Controllers\Controller;


class SectionController extends Controller
{
    /**
     * Interface ArticleRepository
     * @package namespace App\Repositories;
     */
    public function __construct(SectionRepository $repository){
    $this->repository = $repository;

}


    public function sections()
    {
        return  $this->repository->getAllSections();
    }






    public function addSection()
    {

       $section=new Section();
        $section->title=Request::input('title');

       //var_dump($section);

        var_dump($this->repository->addSections($section));


    }




    public function section($id)
    {


        return $this->repository->getSection($id);


    }



    public function updateSections($Section, $Section_id)
    {
         $this->repository->updateSections($Section, $Section_id);

    }




    public function deleteSections()
{

       // $this->repository->deleteSections($ids);
var_dump('llnl');
}

    public function getSectionsWithCategories()
{
   return $this->repository->getSectionsWithCategories();
//var_dump('lkhkh');

    }


}