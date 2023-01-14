@extends('layout')

@section('homepage_content')
    <div class="container comics_page_container">

        <div class="comics_container">
            <div class="row justify-content-around">
                @foreach($comics as $item)
                <div class="col-2 comics_box">
                    <div class="comics_img_box">
                        <img src="{{ $item["thumb"] }}" alt="">
                    </div>
                    <div>
                        <h6>{{ $item["title"] }}</h6>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="load_button_box">
            <button class="button first_button"><strong>LOAD MORE</strong></button>
        </div>
        
    </div>
@endsection