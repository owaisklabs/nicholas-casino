@extends("web.layouts.master")
@section("content")
<div class="mainDiv my-scrollbar" data-scrollbar>
    <!-- main -->
    <div class="terms-and-condition-main">
        <div class="container-xxl terms-and-condition-content text-center">
            <h1>TERMS AND CONDITIONS</h1>
            {!!$condtion->description !!}
        </div>
    </div>
@endsection
