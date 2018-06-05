<?php
namespace App\Repositories\Photo;

interface PhotoRepositoryInterface
{
    /**
     * Get all slide photos
     * @return mixed
     */
    public function getSlidePhotos();

}