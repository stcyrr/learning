<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    //
    public function about()
    {
        return view('pages.about')->with([
                'first' => 'Richard',
                'last'  => 'St-Cyr'
        ]);
    }

    public function contact()
    {
        return view('pages.contact');
    }

}
