@extends('layouts.base')

@section('header')
    @include('parts.header')
@endsection

@section('content')
    <section id="content">
        @yield('center-column')
    </section>
@endsection