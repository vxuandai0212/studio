<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Photo\PhotoRepositoryInterface;
use App\Repositories\Mail\MailRepositoryInterface;


class AdminController extends Controller
{   
    protected $photoRepository;
    protected $mailRepository;

    public function __construct(PhotoRepositoryInterface $photoRepository, MailRepositoryInterface $mailRepository)
    {
        $this->photoRepository = $photoRepository;
        $this->mailRepository = $mailRepository;
    }

    public function renderDashboard()
    {
        return view('admin.dashboard');
    }

    public function renderPhoto()
    {
        $photos = $this->photoRepository->getAll();
        return view('admin.photo', ['photos' => $photos]);
    }

    public function editPhoto($id)
    {
        $photo = $this->photoRepository->find($id);
        return view('admin.modal.photo.edit', ['photo' => $photo]);
    }
    public function updatePhoto($id)
    {
        // dd($id);
        // $photo = $this->photoRepository->find($id);
        // if ($request->image != null) {
        //     $photoName = time().'.'.$request->image->getClientOriginalExtension();
        //     $request->image->move(public_path('assets/img/upload'), $photoName);
        //     $photo->url_image = "assets/img/upload/".$photoName;
        // }
        // $photo->category_id = $request->select;
        // $photo->name = $request->title;
        
        // if($request->slideshow == null){
        //     $photo->is_slide_show = false;
        // }else{
        //     $photo->is_slide_show = true;
        // }
        // $photo->save();
        return "hi";
    }

    public function renderMail()
    {
        $mails = $this->mailRepository->getAll();
        return view('admin.mail', ['mails' => $mails]);
    }
    
    public function renderSlide()
    {
        $photos = $this->photoRepository->getSlidePhotos();
        return view('admin.slide', ['photos' => $photos]);
    }

}
