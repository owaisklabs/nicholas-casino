@extends('web.layouts.master')
@section('content')
<div class="mainDiv my-scrollbar" data-scrollbar>
    <!-- main -->
    <div class="privacy-and-policy-main">
        <div class="container-xxl privacy-and-policy-content text-center">
            <h1>PRIVACY AND POLICY</h1>
            {!! $policy->description!!}
        </div>
    </div>
@endsection
