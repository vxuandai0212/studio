<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Photo\PhotoRepositoryInterface;


class PageController extends Controller
{   
    protected $photoRepository;

    public function __construct(PhotoRepositoryInterface $photoRepository)
    {
        $this->photoRepository = $photoRepository;
    }

    public function renderHomePage()
    {
        $photos = $this->photoRepository->getSlidePhotos();
        return view('guest.home', ['photos' => $photos]);
    }

    public function renderAboutPage()
    {
        return view('guest.about');
    }
    
    public function renderPortfolioPage()
    {
        $photos = $this->photoRepository->getAll();
        return view('guest.portfolio', ['photos' => $photos]);
    }

    public function renderContactPage()
    {
        return view('guest.contact');
    }
}
