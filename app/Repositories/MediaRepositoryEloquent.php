<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\MediaRepository;
use App\Entities\Media;

/**
 * Class MediaRepositoryEloquent
 * @package namespace App\Repositories;
 */
class MediaRepositoryEloquent extends BaseRepository implements MediaRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Media::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

    public function getAllMedias()
    {
        $medias = $this->all();

        return $medias;

    }

    public function createMedia($Media)
    {
        $this->repository->create($Media);
    }

    public function getMedia($id)
    {
        $Media = $this->repository->findByField('Media_id', $id);

        return $Media;
    }

    public function updateMedia($Media, $id)
    {
        $post = $this->repository->update($Media, $id);

    }

    public function deleteMedias($ids)
    {
        foreach ($ids as $id) {
            $this->repository->delete($id);
        }
    }
}