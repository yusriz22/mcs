<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\ProductImport;
use Maatwebsite\Excel\Facades\Excel;

class ProductImportController extends Controller
{
    public function import(Request $request) 
    {
        $request->validate([
            'file_import' => 'mimetypes:csv,xls,xlsx'
        ]);
        
        $file = $request->file('file_import');

        Excel::import(new ProductImport, $file);
        
        return redirect()->route('products.list')->with('mesej-berjaya', 'Data telah diimport');
    }
}
