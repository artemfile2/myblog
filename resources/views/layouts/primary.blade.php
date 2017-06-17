@extends('layouts.two-column')

@section('headContent')
    @include('parts.threeLink')
@endsection

@section('left-column')
    @include('forms.newsContent')
@endsection

@section('right-column')
    @include('forms.posts')
@endsection