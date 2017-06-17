@extends('layouts.two-column')

@section('headContent')
    @include('parts.threeLink')
@endsection

@section('left-column')
    @include('forms.about')
@endsection

@section('right-column')
    @include('parts.infoContact')
@endsection