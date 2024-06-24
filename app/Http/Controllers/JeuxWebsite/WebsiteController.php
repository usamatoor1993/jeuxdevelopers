<?php

namespace App\Http\Controllers\JeuxWebsite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function homePage(){
        $page = 'homePage';
        $subpage = 'homePageAll';
        return view('pages.home-page', compact('page', 'subpage'));
    }
}