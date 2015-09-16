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

    public function getAllCategories()
    {
        $categories = $this->all();

        return $categories;

    }



    public function addCategorie($categorie)
    {
        return $categorie->save();
    }


    public function getCategorie($cat_id)
    {
        $Categorie = $this->findByField('id',$cat_id);

        return $Categorie;

    }

    public function updateCategories($Categorie, $id)
    {
         $this->update( $Categorie, $id );

    }

    public function deleteCategories($ids){
        foreach ($ids as $id) {
            $this->delete($id);
    }}


    public function getCategoriesWithArticles()
    {
        $Categories = Categorie::with('Article')->get();
        return $Categories;
    }

    public function getCategoriesBySection($Sec_id){

        $Categories = $this->findByField('Section_id',$Sec_id);

        return $Categories;
    }

}