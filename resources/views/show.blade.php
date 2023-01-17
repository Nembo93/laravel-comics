@extends('layout')

@section('page_content')
<div>
    <div>
        <img src="{{$comic['thumb']}}" alt="">
    </div>
    <div>
        <h2>{{$comic['series']}}</h2>
    </div>
</div>
@endsection