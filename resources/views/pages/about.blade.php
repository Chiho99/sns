<!-- layout.blade.phpを継承 -->
<!-- html雛形が挿入される -->
@extends('layout')

<!-- 'content'は内容を意味する…bodyの中身 -->
@section('content')
    <h1>pagesの中のaboutページです</h1>
    <h1>{{$first_name}} {{$last_name}}</h1>
@endsection
