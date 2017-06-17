@extends('layouts.base')

@section('header')
    @include('parts.header')
@endsection

@section('content')
    <section id="content">
        <div class="wrap">
        @yield('center-column')
        </div>>
    </section>
@endsection

@section('footer-copyrights')
    @include('parts.footer-copyrights')
@endsection