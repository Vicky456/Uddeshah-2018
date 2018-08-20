@extends('layouts.adminPage')

@section('header')
    @include('admin.header')
@endsection

@section('navbar')
    @include('admin.navBar')
@endsection

@section('content')
    @include('admin.events.edit')
@endsection


@section('footer')

@endsection