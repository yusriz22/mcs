@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-8 offset-2">

            @include('layouts.alerts')

            {!! Form::open(['route' => 'products.save']) !!}
            <div class="card">
                <div class="card-header">
                    Tambah Maklumat Produk
                </div>

                <div class="card-body">

                    <div class="form-group">
                        <label>Nama Produk</label>
                        {!! Form::text('name', null, ['class' => 'form-control', 'id' => 'nama_produk']) !!}
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
            {!! Form::close() !!}

        </div>
    </div>
</div>


@endsection