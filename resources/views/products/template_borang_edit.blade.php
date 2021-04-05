@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-8 offset-2">

            @include('layouts.alerts')

            {!! Form::model($product, ['route' => ['products.update', $product->id]]) !!}
            @method('PATCH')
            <div class="card">
                <div class="card-header">
                    Edit Maklumat Produk
                </div>

                <div class="card-body">

                    <div class="form-group">
                        <label>Nama Produk</label>
                        {!! Form::text('name', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        <label>Penerangan Produk</label>
                        {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        <label>Harga Produk</label>
                        {!! Form::number('price', null, ['class' => 'form-control', 'min' => '0.01', 'step' => '0.01']) !!}
                    </div>

                    <a href="{{ route('products.list') }}" class="btn btn-success">BACK</a>
                    <button type="submit" class="btn btn-primary">SAVE</button>
                </div>
            </div>
            {!! Form::close() !!}

        </div>
    </div>
</div>


@endsection