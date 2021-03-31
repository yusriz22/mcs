@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-8 offset-2">

            <form method="POST" action="{{ route('products.save') }}">
                @csrf
            <div class="card">
                <div class="card-header">
                    Tambah Maklumat Produk
                </div>

                <div class="card-body">

                    <div class="form-group">
                        <label>Nama Produk</label>
                        <input type="text" name="name" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Penerangan Produk</label>
                        <textarea name="description" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <label>Harga Produk</label>
                        <input type="number" name="price" class="form-control" min="0.01" step="0.01">
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">Save</button>
                </div>
            </div>
            </form>

        </div>
    </div>
</div>


@endsection