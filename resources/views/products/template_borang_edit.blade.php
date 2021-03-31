@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-8 offset-2">

            @include('layouts.alerts')

            <form method="POST" action="{{ route('products.update', [$product->id]) }}">
                @csrf
                @method('PATCH')
            <div class="card">
                <div class="card-header">
                    Edit Maklumat Produk
                </div>

                <div class="card-body">

                    <div class="form-group">
                        <label>Nama Produk</label>
                        <input type="text" name="name" class="form-control" value="{{ $product->name }}">
                    </div>

                    <div class="form-group">
                        <label>Penerangan Produk</label>
                        <textarea name="description" class="form-control">{{ $product->description }}</textarea>
                    </div>

                    <div class="form-group">
                        <label>Harga Produk</label>
                        <input type="number" name="price" class="form-control" min="0.01" step="0.01" value="{{ $product->price }}">
                    </div>

                    <a href="{{ route('products.list') }}" class="btn btn-success">BACK</a>
                    <button type="submit" class="btn btn-primary">SAVE</button>
                </div>
            </div>
            </form>

        </div>
    </div>
</div>


@endsection