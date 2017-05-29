@extends('layouts.base')

@section('header')
    @include('parts.header')
@endsection

@section('content')
    <section id="content">
        <div>
            <div class="wrap">
                <div class="col-1 border-2">
                    @yield('left-column')
                </div>

                <div class="col-2">
                    @yield('right-column')
                </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('footer-copyrights')
    @include('parts.footer-copyrights')
@endsection
