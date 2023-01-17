@extends('layout')

@section('page_content')
<section class="my_bg_color">
    <div class="container comics_page_container">

        <div class="homepage_target">
            <h4>CURRENT SERIES</h4>
        </div>

        <div class="comics_container">
            <div class="row justify-content-around">
                @foreach($comics as $item)
                <div class="col-2 comics_box">
                    <div class="comics_img_box">
                        <img src="{{ $item["thumb"] }}" alt="">
                    </div>
                    <div>
                        <h6>{{ $item["series"] }}</h6>
                        <button class="info_button"><a href="{{route('show', $loop->index)}}">Show details</a></button>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="load_button_box">
            <button class="button first_button"><strong>LOAD MORE</strong></button>
        </div>
        
    </div>
</section>
@endsection