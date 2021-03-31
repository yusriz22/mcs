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

                  @include('layouts.alerts')

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
                          <td>{{ number_format($product->price , 2,",",".") }}</td>
                          <td>
                            <a href="{{ route('products.edit', [$product->id]) }}" class="btn btn-sm btn-info">EDIT</a>

                              <form method="POST" action="{{ route('products.delete', [$product->id]) }}">
                                @csrf
                                @method('DELETE')
                                
                                <!-- Button trigger modal -->
<button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modal-delete-{{ $product->id }}">
  DELETE
</button>

<!-- Modal -->
<div class="modal fade" id="modal-delete-{{ $product->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">PENGESAHAN DELETE</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Adakah anda bersetuju untuk menghapuskan data {{ $product->name }}?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-danger">OK DELETE!</button>
      </div>
    </div>
  </div>
</div>

                              </form>
                            
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