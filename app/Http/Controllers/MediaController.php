<?php

namespace App\Http\Controllers;


use App\Repositories\MediaRepository;
use Request;

use App\Http\Controllers\Controller;
use App\Entities\Media;


class MediaController extends Controller
{


    protected $repository;

    public function __construct(MediaRepository $repository)
    {
        $this->repository = $repository;

    }


    public function medias()
    {
        return $this->repository->getAllMedias();

    }


    public function addMedia()
    {
        $media=new Media();
        $media->url=Request::input('url');
        $media->article_id=Request::input('article_id');

        //var_dump($media);

        var_dump($this->repository->createMedia($media));
    }


    public function media($id)
    {
        return $this->repository->getMedia($id);

    }


    public function updateMedias($Media, $id)
    {
        $this->repository->updateMedia($Media, $id);

    }


    public function deleteMedias($ids)
    {

        $this->repository->deleteMedias($ids);

    }
}