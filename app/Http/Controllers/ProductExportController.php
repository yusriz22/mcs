<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Exports\ProductExport;
use Maatwebsite\Excel\Facades\Excel;

class ProductExportController extends Controller
{
    public function export ()
    {
        return Excel::download(new ProductExport, 'products.xlsx');
    }
}
