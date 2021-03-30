@extends('layouts.app')

@section('content')
<h1>tentang kami</h1>

{{ $textfield }}
<hr>
{!! $textfield !!}


<a href="{{ route('page.home') }}" class="btn btn-primary">
    Kembali Ke Halaman Utama
</a>

{{-- Ini Comment --}}
@endsection

@section('scripts')
<script>
    alert('test');
</script>
@endsection

@push('script2')
<script>
    alert('test');
</script>
@endpush