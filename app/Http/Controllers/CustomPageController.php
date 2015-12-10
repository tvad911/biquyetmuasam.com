<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CustomPageController extends Controller
{
    /**
     * Page Liên hệ
     * @return [type] [description]
     */
    public function contact()
    {
        return view('contact');
    }
    /**
     * Page About us
     * @return [type] [description]
     */
    public function aboutus()
    {
        return view('about-us');
    }
}
