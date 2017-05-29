@extends('layouts.two-column')

@section('left-column')
    @include('pages.news')
@endsection

@section('right-column')
    @include('pages.posts')
@endsection