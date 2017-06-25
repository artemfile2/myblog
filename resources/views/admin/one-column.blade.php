@extends('admin.baseAdmin')

@section('header')
    @include('admin.parts.headerAdmin')
@endsection

@section('content')
    <section id="content">
        <div class="wrap">
        @yield('center-column')
        </div>>
    </section>
@endsection

