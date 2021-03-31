@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-8 offset-2">

            @include('layouts.alerts')

            <form method="POST" action="{{ route('users.update', [$user->id]) }}">
                @csrf
                @method('PATCH')
            <div class="card">
                <div class="card-header">
                    Edit Maklumat User
                </div>

                <div class="card-body">

                    <div class="form-group">
                        <label>Nama User</label>
                        <input type="text" name="name" class="form-control" value="{{ $user->name }}">
                    </div>

                    <div class="form-group">
                        <label>Email User</label>
                        <input type="text" name="email" class="form-control" value="{{ $user->email }}">
                    </div>

                    <div class="form-group">
                        <label>MyKAD User</label>
                        <input type="text" name="mykad" class="form-control" value="{{ $user->mykad }}">
                    </div>

                    <div class="form-group">
                        <label>Password User</label>
                        <input type="password" name="password" class="form-control">
                        <span>Biarkan kosong jika tidak mahu tukar password</span>
                    </div>

                    <a href="{{ route('users.index') }}" class="btn btn-success">BACK</a>
                    <button type="submit" class="btn btn-primary">SAVE</button>
                </div>
            </div>
            </form>

        </div>
    </div>
</div>


@endsection