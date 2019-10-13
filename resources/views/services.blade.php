@extends('templates.indexServices')

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
    @include('templates.header2')
@endsection

@section('services')
    @include('templates.services')    
@endsection

@section('lab')
    @include('templates.lab')
@endsection

@section('cards')
    @include('templates.servicesCard')
@endsection

@section('newsletter')
    @include('templates.newsletter')
@endsection

@section('contact')
    @include('templates.contact')
@endsection

@section('footer')
    @include('templates.footer')
@endsection