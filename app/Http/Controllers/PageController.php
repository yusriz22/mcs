<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    
    public function welcome()
    {
        return view('pages.welcome');
    }

    public function contact(Request $request)
    {
        $ref = $request->input('ref', 'none');
        return view('pages.contact_form', compact('ref'));
    }

    public function simpanContact(Request $request)
    {
        //return $request->input('phone');
        return $request->all();
    }

    public function about()
    {

        $textfield = '<input type="text" name="test" value="test data">';
        
        return view('pages.template_about', compact('textfield'));
    }


}
