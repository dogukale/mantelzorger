@extends('default')

@section('title')
    {{$huis->name}}
@endsection

@section('content')
@include('huizen.components.huisCard--show')
@endsection