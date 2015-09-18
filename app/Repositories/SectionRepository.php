<?php

namespace App\Repositories;

use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Interface SectionRepository
 * @package namespace App\Repositories;
 */
interface SectionRepository extends RepositoryInterface
{
    public function getAllSections();
    public function addSections($Section);
    public function getSection($id);
    public function updateSection($section, $section_id);
    public function deleteSections($ids);
    public function getSectionsWithCategories();






}
