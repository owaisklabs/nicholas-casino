@extends('web.layouts.master')

@section('content')
<!-- sidebars -->
    <img src="{{asset('img/1x/bars.svg')}}" width="20px" alt="" class="sidebars" onclick="toggleMenu()">

    <div class="kickersListMain">
        <div class="col-lg-12 text-center">
            <h1 class="wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="1.5s">Long Snappers</h1>
        </div>
        <div class="container ">
            <div class="col-lg-12 mt-50">
                <div class="fakeTable">
                    <div class="fthead">
                        <div>Sr No</div>
                        <div>Name</div>
                        <div>State</div>
                        <div>Offers</div>
                        <!-- <div>Committed</div> -->
                        <div>Prospect</div>
                    </div>
                    @php $counter = 0; @endphp
                    @foreach($long_snappers as $long_snapper)
                        <div class="ftbody" >
                            <div>@php echo ++$counter @endphp</div>
                            <div><a href="{{route('profile', ['id' => $long_snapper->id])}}">{{$long_snapper->name . ' ' . $long_snapper->last_name}}</a></div>
                            <div><a href="javascript:void;">{{$long_snapper->state}}</a></div>
                            <div><a href="javascript:void;">{{$long_snapper->offers1 . (($long_snapper->offers2) ? (', ' . $long_snapper->offers2) : '')}}</a></div>
                            <!-- <div><a href="javascript:void;">committed?</a></div> -->
                            <div>
                                @php $count= 0; @endphp
                                @for($i = 0; $i < intval($long_snapper->rating); $i++)
                                    <img src="{{asset('img/1x/starfull-8.png')}}" height="20px" width="" alt="">
                                    @php $count++; @endphp
                                @endfor
                                @if(fmod($long_snapper->rating, 1) > 0)
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