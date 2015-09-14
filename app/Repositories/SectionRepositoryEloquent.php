<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\SectionRepository;
use App\Entities\Section;

/**
 * Class SectionRepositoryEloquent
 * @package namespace App\Repositories;
 */
class SectionRepositoryEloquent extends BaseRepository implements SectionRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Section::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria( app(RequestCriteria::class) );
    }

    public function getAllSections()
    {
        $sections = $this->all();

        return $sections;

    }

    public function addSections($Section)
    {
        $post = $this->create($Section);
    }

    public function getSection($id)
    {
        $Section = $this->findByField('Section_id', $id);

        return $Section;
    }

    public function updateSections($Section, $Section_id)
    {
        $this->update($Section, $Section_id);

    }

    public function deleteSections($ids)
    {
        foreach ($ids as $id) {
            $this->delete($id);
    }}

        public function getSectionsWithCategories()
    {
        $Sections = Section::with('Categorie')->get();
        return $Sections;

    }

}