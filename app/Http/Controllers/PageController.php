<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    
    public function welcome()
    {
        return view('pages.welcome');
    }

    public function contact()
    {
        return view('pages.contact_form');
    }

    public function about()
    {

        $textfield = '<input type="text" name="test" value="test data">';
        
        return view('pages.template_about', compact('textfield'));
    }


}
