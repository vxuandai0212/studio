<?php
namespace App\Repositories\Mail;

use App\Repositories\EloquentRepository;

class MailEloquentRepository extends EloquentRepository implements MailRepositoryInterface
{

    /**
     * get model
     * @return string
     */
    public function getModel()
    {
        return \App\Mail::class;
    }

}