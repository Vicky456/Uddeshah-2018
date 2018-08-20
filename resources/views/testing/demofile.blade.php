@extends('layouts.HomePage')

@section('header')

@endsection

@section('content')

    <form id="stu_form" method="POST" action="{{ route('demo.store') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="file" name="profileimg">
        <button type="submit">submit</button>
    </form>

@endsection


@section('footer')

@endsection