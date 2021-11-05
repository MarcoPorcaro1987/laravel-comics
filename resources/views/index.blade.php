@extends('layout.base')
@section('pageContent')
<div class="contents-cont">
    <div class="jumbo-cont">
        <div class="btn-current-series">CURRENT SERIES</div>
    </div>
    <div class="bg-cont">
        <div class="container books-cont">
            @foreach ($comics as $comic)
            <div class="book">
                <img src="{{$comic["thumb"]}}" alt="{{$comic["title"]}}" />
                <p>{{$comic["series"]}}</p>
            </div>
            @endforeach
            <div class="btn-load-more">LOAD MORE</div>
        </div>
    </div>
</div>
@endsection