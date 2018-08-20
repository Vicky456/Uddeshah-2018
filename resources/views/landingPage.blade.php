@extends('layouts.HomePage')

@section('header')
    @include('home.headderPage')
@endsection

@section('content')
    @include('home.pageUI1')
    @include('home.page2')
    @include('home.page4')

    @include('home.page7')

    @include('home.page8')
    @include('home.page9')
    @include('home.page7')
    @include('home.page11')
@endsection


@section('footer')
    @include('home.fooder')
@endsection