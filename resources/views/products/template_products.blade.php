@extends('layouts.app')

@section('css_vendor')
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css" rel="stylesheet">

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
                  <a href="{{ route('products.export') }}" class="btn btn-success">Export Produk</a>
                 
                        
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-import">
                    Import Produk
                </button>

                  <form method="POST" action="{{ route('products.import') }}" enctype="multipart/form-data">
                    @csrf
                    
                    <!-- Modal -->
                    <div class="modal fade" id="modal-import" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Muat Naik File Excel</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <input type="file" name="file_import">
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">OK UPLOAD!</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    </form>

                  <hr>

                  @include('layouts.alerts')

                    <table class="table table-bordered table-sm" id="products-table">
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