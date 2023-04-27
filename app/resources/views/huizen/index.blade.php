@extends('default')

@section('title')
    {{"Alle Huizen"}}
@endsection

@section('content')
<ul class="u-grid-12 u-grid-gap-2">
    @foreach($huis as $huis)
        @include('huizen.components.huisCard--index')
    @endforeach
</ul>
@endsection