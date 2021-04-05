<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Product;
use DataTables;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_title = 'Senarai Produk Popular';

        //$senarai_products = DB::table('products')->paginate(2);
        // $senarai_products = Product::paginate(2);

        return view('products.template_products', compact('page_title'));
    }

    public function datatables()
    {
        $query = Product::query();

        return DataTables::of($query)
        ->addColumn('actions', function ($product) {
            return view('products.actions', compact('product'));
        })
        ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        return view('products.template_borang_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {

        // Validate Data Daripada Borang
        $request->validate([
            'name' => ['required', 'min:5'],
            'description' => ['required', 'min:5']
        ]);
        // Dapatkan data yang ingin disimpan ke dalam table products
        $data = $request->all();

        // Jika nama field pada form lain dengan column di table database
        // $data = [
        //     'name' => $request->input('nama_produk'),
        //     'price' => $request->input('harga'),
        // ];

        // Simpan data ke table products
        // DB::table('products')->insert($data);
        Product::create($data);

        // Selepas selesai simpan data, redirect user ke senarai products
        return redirect()->route('products.list');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Dapatkan rekod produk berdasarkan ID
        // $product = DB::table('products')->where('id', '=', $id)->first();
        $product = Product::findOrFail($id);
        // Paparkan template borang edit produk
        return view('products.template_borang_edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validate Data Daripada Borang
        $request->validate([
            'name' => ['required', 'min:5'],
            'description' => ['required', 'min:5']
        ]);
        // Dapatkan data yang ingin disimpan ke dalam table products
        $data = $request->all();

        // DB::table('products')->where('id', '=', $id)->update($data);
        $product = Product::find($id);
        $product->update($data);

        // Selepas selesai update data, redirect user ke senarai products
        return redirect()->route('products.edit', $id)
        ->with('mesej-berjaya', 'Rekod telah berjaya dikemaskini');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //DB::table('products')->where('id', '=', $id)->delete();
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('products.list')
        ->with('mesej-berjaya', 'Rekod telah berjaya dipadam');
    }
}
