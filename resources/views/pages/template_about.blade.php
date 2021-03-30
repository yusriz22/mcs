@extends('layouts.app')

@section('content')
<h1>tentang kami</h1>

{{ $textfield }}
<hr>
{!! $textfield !!}

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