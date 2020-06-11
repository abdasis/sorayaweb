<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function aboutUs()
    {
        return view('frontend.pages.about-us');
    }

    public function berita()
    {
        $berita = new Berita();
        return view('frontend.pages.berita.berita')->withBerita($berita);
    }
}
