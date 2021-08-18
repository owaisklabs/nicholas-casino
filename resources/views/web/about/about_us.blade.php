@extends('web.layouts.master')

@section('content')

 <div class="about-main">
    <div class="about-banner">
        <h1>About</h1>
    </div>
    <div class="container-xxl about-content text-center">
        {!! $about->description !!}
    </div>
</div>
@endsection
