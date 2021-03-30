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
        $request->validate([
            //'name' => 'required'
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email'],
            'phone' => ['required', 'regex:/^(\+?6?01)[0|1|2|3|4|6|7|8|9]\-*[0-9]{7,8}$/']
        ]);

        //return $request->input('phone');
        $data = $request->all();

        return redirect()->route('page.contact')
        ->with('mesej-berjaya', 'Data Telah Berjaya Dihantar');
    }

    public function about()
    {

        $textfield = '<input type="text" name="test" value="test data">';
        
        return view('pages.template_about', compact('textfield'));
    }


}
