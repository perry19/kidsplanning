<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function contactUs(){
        return view(view: 'contact-us');
    }
}
