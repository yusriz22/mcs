@extends('layouts.app')

@section('css_vendor')
<link href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css" rel="stylesheet">
@endsection

@push('script_vendor')
<script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

<script>
  $(function() {
      $('#products-table').DataTable({
          processing: true,
          serverSide: true,
          ajax: '{!! route('products.datatables') !!}',
          searchDelay: 500,
          columns: [
              { data: 'id', name: 'id' },
              { data: 'name', name: 'name' },
              { data: 'price', name: 'price' },
              { data: 'actions', name: 'actions', orderable: false, searchable: false },
          ],
          "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]]
      });
  });
  </script>

@endpush

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 ">

            <div class="card">
                <div class="card-header">
                    Senarai Produk
                </div>

                <div class="card-body">

                  <a href="{{ route('products.add') }}" class="btn btn-primary">Tambah Produk</a>

                  <hr>

                  @include('layouts.alerts')

                    <table class="table table-bordered" id="products-table">
                      <thead>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>PRICE</th>
                        <th>ACTION</th>
                      </thead>
                    </table>

                </div>
            </div>

        </div>
    </div>
</div>

@endsection