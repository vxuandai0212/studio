<?php
namespace App\Repositories\Photo;

use App\Repositories\EloquentRepository;

class PhotoEloquentRepository extends EloquentRepository implements PhotoRepositoryInterface
{

    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return \App\Photo::class;
    }

    /**
     * Get all slide photos for home page
     * @return mixed
     */
    public function getSlidePhotos()
    {
        $result = $this->_model->where('is_slide_show', 1)->get();

        return $result;
    }

}