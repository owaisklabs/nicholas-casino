@extends('web.layouts.master')

@section('content')
<!-- sidebars -->
<img src="{{asset('img/1x/bars.svg')}}" width="20px" height="" alt="" class="sidebars" onclick="toggleMenu()">

<!-- subcription -->
<div class="subscriptionMain text-center">
    <h1 class="wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="1.5s">Subscription Fee for Players</h1>
    <div class="grid mt-50">
        @foreach($packages as $package)
        <div class="gbox wow zoomIn {{($loop->first) ? 'hovblue' : ''}} " id="{{($loop->first) ? 'hovBlue' : ''}}" onmouseover="document.getElementById('hovBlue').classList.remove('hovblue')" data-wow-delay="0.5s" data-wow-duration="1.5s">
            <div class="month">{{$package->title}}</div>
            <div class="price" >$ {{intval($package->amount)}}</div>
            <input type="hidden" class="package_amount"value="<?php echo $package->amount?>">
            <input type="hidden" class="package_id" value="<?php echo $package->id?>">
            <div class="permonth">Per month</div>
        </div>
        @endforeach
        <div class="gbox wow zoomIn" data-wow-delay="0.5s" onmouseover="document.getElementById('hovBlue').classList.remove('hovblue')" data-wow-duration="1.5s">
            <div class="tryUs">
                Try us out<br> for <br> 1 month
            </div>
        </div>
        
    </div>
</div>
@endsection
