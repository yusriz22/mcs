@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 ">

            <div class="card">
                <div class="card-header">
                    Senarai Produk
                </div>

                <div class="card-body">

                    <table class="table table-bordered">
                      <thead>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>PRICE</th>
                        <th>ACTION</th>
                      </thead>

                      
                      <tbody>

                          @foreach($senarai_products AS $product)
                          <tr>
                          <td>{{ $product->id }}</td>
                          <td>{{ $product->name }}</td>
                          <td>{{ $product->price }}</td>
                          <td>
                            <a href="" class="btn btn-sm btn-info">EDIT</a>
                            <button type="submit" class="btn btn-sm btn-danger">DELETE</button>
                          </td>
                        </tr>
                          @endforeach

                      </tbody>

                    </table>

                    {{ $senarai_products->links() }}

                </div>
            </div>

        </div>
    </div>
</div>


@endsection