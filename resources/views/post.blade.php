@extends('templates.indexPost')

@section('head')
    @include('templates.head')
@endsection

@section('preloader')
    @include('templates.preloader')
@endsection

@section('nav')
    @include('templates.header')
@endsection

@section('header')
    @include('templates.headerBlog')
@endsection

@section('post')
    @include('templates.post')
@endsection

@section('sidebar')
    @include('templates.sidebar')
@endsection

@section('newsletter')
    @include('templates.newsletter')
@endsection

@section('footer')
    @include('templates.footer')
@endsection