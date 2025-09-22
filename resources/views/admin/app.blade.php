@extends('adminlte::page')
@section('title', $title ?? 'Dashboard')

@section('content_header')
    <h1>@yield('page-title', 'Admin Panel2')</h1>
@stop

@section('content')
    {{-- konten dinamis akan ditampilkan di sini --}}
    @yield('content')
@stop

{{-- @section('css')
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/dist/css/adminlte.css') }}">
    @stack('styles')
@stop

@section('js')
    @stack('scripts')
@stop --}}

@section('css')
    <link rel="stylesheet" href="{{ asset('css/admin-custom.css') }}">
    @stack('styles')
@stop

{{-- @push('styles')
    <link rel="stylesheet" href="{{ asset('css/some-feature.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('js/some-feature.js') }}"></script>
@endpush --}}
