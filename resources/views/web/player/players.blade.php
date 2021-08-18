@extends('web.layouts.master')

@section('content')
<!-- sidebars -->
    <img src="{{asset('img/1x/bars.svg')}}" width="20px" alt="" class="sidebars" onclick="toggleMenu()">

    <div class="kickersListMain">
        <div class="col-lg-12 text-center">
            <h1 class="wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="1.5s">Players</h1>
        </div>
        <div class="container ">
            <div class="col-lg-12 mt-50">
                <div class="fakeTable">
                    <div class="fthead">
                        <div>Rank</div>
                        <div>Name</div>
                        <div>State</div>
                        <div>Offers</div>
                        <div>Committed</div>
                        <div>Prospect</div>
                    </div>
                    @foreach($players as $player)
                        <div class="ftbody" >
                            <div><a href="javascript:void;">{{$player->class_rank}}</a></div>
                            <div><a href="{{route('profile', ['id' => $player->id])}}">{{$player->name . ' ' . $player->last_name}}</a></div>
                            <div><a href="javascript:void;">{{$player->state}}</a></div>
                            <div><a href="javascript:void;">{{$player->offers1 . (($player->offers2) ? (', ' . $player->offers2) : '')}}</a></div>
                            <div><a href="javascript:void;">committed?</a></div>
                            <div>
                                @php $count= 0; @endphp
                                @for($i = 0; $i < intval($player->rating); $i++)
                                    <img src="{{asset('img/1x/starfull-8.png')}}" height="20px" width="" alt="">
                                    @php $count++; @endphp
                                @endfor
                                @if(fmod($player->rating, 1) > 0)
                                    <img src="{{asset('img/1x/dim-starhalf-8.png')}}" height="20px" width="" alt="">
                                    @php $count++; @endphp
                                @endif
                                @if($count < 5)
                                    @for($i = $count; $i < 5; $i++)
                                        <img src="{{asset('img/1x/dim-starfull-8.png')}}" height="20px" width="" alt="">
                                    @endfor
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection