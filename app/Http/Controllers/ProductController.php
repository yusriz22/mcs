<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

        $senarai_products = [
            ['id' => 1, 'name' => 'Produk A', 'harga' => 10.00],
            ['id' => 2, 'name' => 'Produk B', 'harga' => 15.00],
            ['id' => 3, 'name' => 'Produk C', 'harga' => 20.00]
        ];

        //return view('pages.template_products');
        // return view('pages.template_products')
        // ->with('page_title', $page_title);
        // ->with('senarai_products', $senarai_products);

        // return view('pages.template_products', [
        //     'page_title' => $page_title,
        //     'senarai_products' => $senarai_products
        // ]);

        return view('pages.template_products', compact('page_title', 'senarai_products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
