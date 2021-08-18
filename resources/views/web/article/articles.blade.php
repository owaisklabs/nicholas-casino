@extends('web.layouts.master')

@section('content')
    <!-- sidebars -->
    <img src="{{asset('img/1x/bars.svg')}}" width="20px" height="" alt="" class="sidebars" onclick="toggleMenu()">

    <div class="articlesMain">
        <div class="col-lg-12 text-center">
            <h1 class="wow rollIn" data-wow-delay="0.5s" data-wow-duration="2s">latest new articles</h1>
        </div>
        <div class="grid">
            @foreach($articles as $article)
                <div class="grider wow fadeInLeft" data-wow-delay="0.5s" data-wow-duration="2s">
                    <a href="{{$article->link}}">
                        <div class="imgBox">
                            <img src="{{asset('img/articles') . '/' . $article->image}}" height="100%" width="100%" alt="">
                        </div>
                    </a>
                    <div class="txtBox">
                        {{$article->content}}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection