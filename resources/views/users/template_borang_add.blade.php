@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-8 offset-2">

            @include('layouts.alerts')

            <form method="POST" action="{{ route('users.store') }}">
                @csrf
            <div class="card">
                <div class="card-header">
                    Tambah Maklumat User
                </div>

                <div class="card-body">

                    <div class="form-group">
                        <label>Nama User</label>
                        <input type="text" name="name" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Email User</label>
                        <input type="text" name="email" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>MyKAD User</label>
                        <input type="text" name="mykad" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Password User</label>
                        <input type="password" name="password" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">Save</button>
                </div>
            </div>
            </form>

        </div>
    </div>
</div>


@endsection