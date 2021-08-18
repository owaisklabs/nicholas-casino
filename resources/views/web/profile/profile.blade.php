@extends('web.layouts.master')

@section('content')
<!-- sidebars -->
<img src="{{asset('img/1x/bars.svg')}}" width="20px" height="" alt="" class="sidebars" onclick="toggleMenu()">

<div class="profileMain text-center">
    <!-- top pic section -->
    <div class="imgSec">
        <div class="image wow zoomIn" data-wow-delay="0.5s" data-wow-duration="1.5s">
            @if($user->image != null)
            <img src="{{($user->image) ? (asset('img/users'). '/' . $user->image) : ('')}}" height="" width="" class="img-circle" alt="">
            @else
            <img src="{{asset('dist/img/profile_logo.jpg')}}" height="200px" width="200px" class="img-circle" alt="">
            @endif
        </div>
        <div class="name">
            <h1 class="mt-30 wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="1.5s">
                {{$user->name . ' ' . $user->last_name}}
            </h1>
        </div>
        <div class="type wow fadeInDown" data-wow-delay="1s" data-wow-duration="1s" >
            <h4 class="mt-20">
                {{get_player_types($user->id)}}
            </h4>
        </div>
        <div class="rating wow fadeInDown" data-wow-delay="1s" data-wow-duration="1s">
            @php $count= 0; @endphp
            @for($i = 0; $i < intval($user->rating); $i++)
            <img src="{{asset('img/1x/starfull-8.png')}}" height="20px" width="" alt="">
            @php $count++; @endphp
            @endfor
            @if(fmod($user->rating, 1) > 0)
            <img src="{{asset('img/1x/dim-starhalf-8.png')}}" height="20px" width="" alt="">
            @php $count++; @endphp
            @endif
            @if($count < 5)
            @for($i = $count; $i < 5; $i++)
            <img src="{{asset('img/1x/dim-starfull-8.png')}}" height="20px" width="" alt="">
            @endfor
            @endif
        </div>
        <p class="desc mt-50 wow fadeInUp" data-wow-delay="1s" data-wow-duration="1.5s">
            {{$user->description}}
        </p>
    </div>

    <!-- info section -->
    <div class="infoSection mt-20">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="infoSecHeading mt-60 wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1s">INFO</h2>
            </div>
            <!-- info -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="infos">
                        <div class="col-lg-4 col-md-4 col-sm-4  text-left mt-40" data-wow-delay="0.5s" data-wow-duration="1.5s">
                            <div class="infosHead">
                                <a href="javascript:void(0);">Twitter Handle</a>
                            </div>
                            <div class="infosLink">
                                <a href="javascript:void(0);">{{$user->twitter_handle ? ('@' . $user->twitter_handle) : 'N/A'}}</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4  text-left mt-40" data-wow-delay="0.5s" data-wow-duration="1.5s">
                            <div class="infosHead">
                                <a href="javascript:void(0);">Instagram Handle</a>
                            </div>
                            <div class="infosLink">
                                <a href="javascript:void(0);">{{$user->instagram_handle ? ($user->instagram_handle) : 'N/A'}}</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4  text-left mt-40" data-wow-delay="0.5s" data-wow-duration="1.5s">
                            <div class="infosHead">
                                <a href="javascript:void(0);">Jersey #</a>
                            </div>
                            <div class="infosLink">
                                <a href="javascript:void(0);">{{$user->jersey_number ? ($user->jersey_number) : 'N/A'}}</a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4  text-left mt-40" data-wow-delay="0.5s" data-wow-duration="1.5s">
                            <div class="infosHead">
                                <a href="javascript:void(0);">Specialist Position</a>
                            </div>
                            <div class="infosLink">
                                <a href="javascript:void(0);">{{$user->specialist_position ? ($user->specialist_position) : 'N/A'}}</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4  text-left mt-40" data-wow-delay="0.5s" data-wow-duration="1.5s">
                            <div class="infosHead">
                                <a href="javascript:void(0);">Grad Year</a>
                            </div>
                            <div class="infosLink">
                                <a href="javascript:void(0);">{{$user->grad_year ? ($user->grad_year) : 'N/A'}}</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4  text-left mt-40" data-wow-delay="0.5s" data-wow-duration="1.5s">
                            <div class="infosHead">
                                <a href="javascript:void(0);">State</a>
                            </div>
                            <div class="infosLink">
                                <a href="javascript:void(0);">{{$user->state ? ($user->state) : 'N/A'}}</a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4  text-left mt-40" data-wow-delay="0.5s" data-wow-duration="1.5s">
                            <div class="infosHead">
                                <a href="javascript:void(0);">High School</a>
                            </div>
                            <div class="infosLink">
                                <a href="javascript:void(0);">{{$user->high_school ? ($user->high_school) : 'N/A'}}</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4  text-left mt-40" data-wow-delay="0.5s" data-wow-duration="1.5s">
                            <div class="infosHead">
                                <a href="javascript:void(0);">Height</a>
                            </div>
                            <div class="infosLink">
                                <a href="javascript:void(0);">{{$user->height ? ($user->height) : 'N/A'}}</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4  text-left mt-40" data-wow-delay="0.5s" data-wow-duration="1.5s">
                            <div class="infosHead">
                                <a href="javascript:void(0);">Weight</a>
                            </div>
                            <div class="infosLink">
                                <a href="javascript:void(0);">{{$user->weight ? ($user->weight . ' lbs') : 'N/A'}}</a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4  text-left mt-40" data-wow-delay="0.5s" data-wow-duration="1.5s">
                            <div class="infosHead">
                                <a href="javascript:void(0);">Other FB Positions</a>
                            </div>
                            <div class="infosLink">
                                <a href="javascript:void(0);">{{$user->other_fb_positions ? ($user->other_fb_positions) : 'N/A'}}</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4  text-left mt-40" data-wow-delay="0.5s" data-wow-duration="1.5s">
                            <div class="infosHead">
                                <a href="javascript:void(0);">Other Sports</a>
                            </div>
                            <div class="infosLink">
                                <a href="javascript:void(0);">{{$user->other_sports ? ($user->other_sports) : 'N/A'}}</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4  text-left mt-40" data-wow-delay="0.5s" data-wow-duration="1.5s">
                            <div class="infosHead">
                                <a href="javascript:void(0);">College Degrees of Interest</a>
                            </div>
                            <div class="infosLink">
                                <a href="javascript:void(0);">{{$user->college_degrees_of_interest ? ($user->college_degrees_of_interest) : 'N/A'}}</a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4  text-left mt-40" data-wow-delay="0.5s" data-wow-duration="1.5s">
                            <div class="infosHead">
                                <a href="javascript:void(0);">GPA</a>
                            </div>
                            <div class="infosLink">
                                <a href="javascript:void(0);">{{$user->gpa ? ($user->gpa) : 'N/A'}}</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4  text-left mt-40" data-wow-delay="0.5s" data-wow-duration="1.5s">
                            <div class="infosHead">
                                <a href="javascript:void(0);">ACT</a>
                            </div>
                            <div class="infosLink">
                                <a href="javascript:void(0);">{{$user->act ? ($user->act) : 'N/A'}}</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4  text-left mt-40" data-wow-delay="0.5s" data-wow-duration="1.5s">
                            <div class="infosHead">
                                <a href="javascript:void(0);">SAT</a>
                            </div>
                            <div class="infosLink">
                                <a href="javascript:void(0);">{{$user->sat ? ($user->sat) : 'N/A'}}</a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-4  text-left mt-40" data-wow-delay="0.5s" data-wow-duration="1.5s">
                            <div class="infosHead">
                                <a href="javascript:void(0);">NCAA ID</a>
                            </div>
                            <div class="infosLink">
                                <a href="javascript:void(0);">{{$user->ncaa_id ? ($user->ncaa_id) : 'N/A'}}</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4  text-left mt-40" data-wow-delay="0.5s" data-wow-duration="1.5s">
                            <div class="infosHead">
                                <a href="javascript:void(0);">Class Rank</a>
                            </div>
                            <div class="infosLink">
                                <a href="javascript:void(0);">{{$user->class_rank ? ($user->class_rank) : 'N/A'}}</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4  text-left mt-40" data-wow-delay="0.5s" data-wow-duration="1.5s">
                            <div class="infosHead">
                                <a href="javascript:void(0);">Class Rank Percentile</a>
                            </div>
                            <div class="infosLink">
                                <a href="javascript:void(0);">{{$user->class_rank_percentile ? ($user->class_rank_percentile) : 'N/A'}}</a>
                            </div>
                        </div>
                    </div>        
                </div>
            </div>
            <!-- kickig long snapping coach  -->
            <div class="col-lg-12 text-center">
                <h2 class="infoSecHeading2 mt-60 wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1s">kicking long snapping coach</h2>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="infos">
                        <div class="col-lg-4 col-md-4 col-sm-4  text-left mt-40" data-wow-delay="0.5s" data-wow-duration="1.5s">
                            <div class="infosHead">
                                <a href="javascript:void(0);">Coach 01</a>
                            </div>
                            <div class="infosLink">
                                <a href="javascript:void(0);">{{$user->coach1 ? ($user->coach1) : 'N/A'}}</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4  text-left mt-40" data-wow-delay="0.5s" data-wow-duration="1.5s">
                            <div class="infosHead">
                                <a href="javascript:void(0);">Coach 02</a>
                            </div>
                            <div class="infosLink">
                                <a href="javascript:void(0);">{{$user->coach2 ? ($user->coach2) : 'N/A'}}</a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4  text-left mt-40" data-wow-delay="0.5s" data-wow-duration="1.5s">
                            <div class="infosHead">
                                <a href="javascript:void(0);">Coach 03</a>
                            </div>
                            <div class="infosLink">
                                <a href="javascript:void(0);">{{$user->coach3 ? ($user->coach3) : 'N/A'}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- star ratings  -->
            <div class="col-lg-12">
                <div class="col-lg-12 text-left ">
                    <h2 class="infoSecHeading2 starrate mt-70 padding-x20 wow fadeInLeft" data-wow-delay="0.2s" data-wow-duration="1">star ratings</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="infos">
                        @foreach($user->star_ratings as $star_rating)
                        <div class="col-lg-4 col-md-4 col-sm-4  text-left mt-40" data-wow-delay="0.5s" data-wow-duration="1.5s">
                            <div class="infosHead">
                                <a href="javascript:void(0);">{{$star_rating->club_name}}</a>
                            </div>
                            <div class="infoRating">
                                @php $count= 0; @endphp
                                @for($i = 0; $i < intval($star_rating->rating); $i++)
                                <img src="{{asset('img/1x/starfull-8.png')}}" height="20px" width="" alt="">
                                @php $count++; @endphp
                                @endfor
                                @if(fmod($star_rating->rating, 1) > 0)
                                <img src="{{asset('img/1x/dim-starhalf-8.png')}}" height="20px" width="" alt="">
                                @php $count++; @endphp
                                @endif
                                @if($count < 5)
                                @for($i = $count; $i < 5; $i++)
                                <img src="{{asset('img/1x/dim-starfull-8.png')}}" height="20px" width="" alt="">
                                @endfor
                                @endif
                            </div>
                            <div class="infosDate">
                                <a href="javascript:void(0);">{{($star_rating->last_attended) ? ('Last attended : ' . \Carbon\Carbon::parse($star_rating->last_attended)->format('m/d/Y')) : 'N/A'}}</a>
                                <!-- <a href="javascript:void(0);">{{'Last attended : 02/02/2020'}}</a> -->
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- season stats   -->
            <div class="col-lg-12 text-center">
                <h2 class="infoSecHeading2 mt-60 wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1s">season stats</h2>
            </div>

            <!-- Senior Stats   -->
            <div class="col-lg-12">
                <div class="col-lg-12 text-left">
                    <h2 class="infoSecHeading2 starrate mt-70 padding-x20 wow fadeInLeft" data-wow-delay="0.2s" data-wow-duration="1s">Senior Stats</h2>
                </div>
            </div>
            <div class="staeSec">
                <div class="col-lg-12 mt-30" data-wow-delay="0.5s" data-wow-duration="1.5s">
                    <div class="jnone">
                        <div class="left">
                            <h5>PAT’s :</h5>
                        </div>
                        <div class="right">
                            <div class="xforx">
                                <div class="xforchild">
                                    X For X
                                </div>
                            </div>
                            <div class="inpSec mt-10">
                                <textarea name="" id="" cols="30" rows="3" placeholder="Comments">{{$user->senior_pat_comment ? $user->senior_pat_comment : 'N/A'}}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mt-10" data-wow-delay="0.5s" data-wow-duration="1.5s">
                    <div class="jnone">
                        <div class="left">
                            <h5>FG :</h5>
                        </div>
                        <div class="right">
                            <div class="xforx">
                                <div class="xforchild">
                                    X For X
                                </div>
                                <div class="xforchild">
                                    <div>Longest</div> <u>{{$user->senior_fg_longest ? $user->senior_fg_longest : 'N/A'}}</u>
                                </div>
                            </div>
                            <div class="inpSec mt-10">
                                <textarea name="" id="" cols="30" rows="3" placeholder="Comments">{{$user->senior_fg_comment ? $user->senior_fg_comment : 'N/A'}}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mt-10" data-wow-delay="0.5s" data-wow-duration="1.5s">
                    <div class="jnone">
                        <div class="left">
                            <h5>KO's :</h5>
                        </div>
                        <div class="right">
                            <div class="xforx">
                                <div class="xforchild">
                                    <div>No. of Ko's</div> <u>{{$user->senior_kos ? $user->senior_kos : 'N/A'}}</u>
                                </div>
                                <div class="xforchild">
                                    <div>Total Yardage</div> <u>{{$user->senior_ko_total_yardage ? $user->senior_ko_total_yardage : 'N/A'}}</u>
                                </div>
                                <div class="xforchild">
                                    <div>KO Average</div> <u>{{$user->senior_ko_average ? $user->senior_ko_average : 'N/A'}}</u>
                                </div>
                                <div class="xforchild">
                                    <div>Touchbacks</div> <u>{{$user->senior_ko_touchbacks ? $user->senior_ko_touchbacks : 'N/A'}}</u>
                                </div>
                            </div>
                            <div class="inpSec mt-10">
                                <textarea name="" id="" cols="30" rows="3" placeholder="Comments">{{$user->senior_ko_comment ? $user->senior_ko_comment : 'N/A'}}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mt-10" data-wow-delay="0.5s" data-wow-duration="1.5s">
                    <div class="jnone">
                        <div class="left">
                            <h5>Punts :</h5>
                        </div>
                        <div class="right">
                            <div class="xforx">
                                <div class="xforchild">
                                    <div>No. of Punts</div> <u>{{$user->senior_punts ? $user->senior_punts : 'N/A'}}</u>
                                </div>
                                <div class="xforchild">
                                    <div>Punts Average</div> <u>{{$user->senior_punt_average ? $user->senior_punt_average : 'N/A'}}</u>
                                </div>
                                <div class="xforchild">
                                    <div>Longest Punts</div> <u>{{$user->senior_longest_punt ? $user->senior_longest_punt : 'N/A'}}</u>
                                </div>
                                <div class="xforchild">
                                    <div>Total Yardage</div> <u>{{$user->senior_punt_total_yardage ? $user->senior_punt_total_yardage : 'N/A'}}</u>
                                </div>
                                <div class="xforchild">
                                    <div>1-20</div> <u>{{$user->senior_punt_120 ? $user->senior_punt_120 : 'N/A'}}</u>
                                </div>
                            </div>
                            <div class="inpSec mt-10">
                                <textarea name="" id="" cols="30" rows="3" placeholder="Comments">{{$user->senior_punt_comment ? $user->senior_punt_comment : 'N/A'}}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- snaps -->
                <div class="col-lg-12 mt-10" data-wow-delay="0.5s" data-wow-duration="1.5s">
                    <div class="jnone">
                        <div class="left2">
                            <h5>40 Yard Dash :</h5>
                        </div>
                        <div class="right2">
                            <div class="xforchild">
                                <u>{{$user->senior_40_yard_dash ? $user->senior_40_yard_dash : 'N/A'}}</u>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mt-10" data-wow-delay="0.5s" data-wow-duration="1.5s">
                    <div class="jnone">
                        <div class="left2">
                            <h5>PAT Snaps :</h5>
                        </div>
                        <div class="right2">
                            <div class="xforchild">
                                <div>No. of Snaps</div> <u>{{$user->senior_pat_snaps ? $user->senior_pat_snaps : 'N/A'}}</u>
                            </div>
                            <div class="xforchild">
                                <div>% of Perfect Snaps</div> <u>{{$user->senior_perfect_pat_snaps ? $user->senior_perfect_pat_snaps : 'N/A'}}</u>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mt-10" data-wow-delay="0.5s" data-wow-duration="1.5s">
                    <div class="jnone">
                        <div class="left2">
                            <h5>Punt Snaps :</h5>
                        </div>
                        <div class="right2">
                            <div class="xforchild">
                                <div>No. of Snaps</div> <u>{{$user->senior_punt_snaps ? $user->senior_punt_snaps : 'N/A'}}</u>
                            </div>
                            <div class="xforchild">
                                <div>% of Perfect Snaps</div> <u>{{$user->senior_perfect_punt_snaps ? $user->senior_perfect_punt_snaps : 'N/A'}}</u>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Junior Stats   -->
            <div class="col-lg-12">
                <div class="col-lg-12 text-left">
                    <h2 class="infoSecHeading2 starrate mt-70 padding-x20 wow fadeInLeft" data-wow-delay="0.2s" data-wow-duration="1s">Junior Stats</h2>
                </div>
            </div>
            <div class="staeSec">
                <div class="col-lg-12 mt-30" data-wow-delay="0.5s" data-wow-duration="1.5s">
                    <div class="jnone">
                        <div class="left">
                            <h5>PAT’s :</h5>
                        </div>
                        <div class="right">
                            <div class="xforx">
                                <div class="xforchild">
                                    X For X
                                </div>
                            </div>
                            <div class="inpSec mt-10">
                                <textarea name="" id="" cols="30" rows="3" placeholder="Comments">{{$user->junior_pat_comment ? $user->junior_pat_comment : 'N/A'}}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mt-10" data-wow-delay="0.5s" data-wow-duration="1.5s">
                    <div class="jnone">
                        <div class="left">
                            <h5>FG :</h5>
                        </div>
                        <div class="right">
                            <div class="xforx">
                                <div class="xforchild">
                                    X For X
                                </div>
                                <div class="xforchild">
                                    <div>Longest</div> <u>{{$user->junior_fg_longest ? $user->junior_fg_longest : 'N/A'}}</u>
                                </div>
                            </div>
                            <div class="inpSec mt-10">
                                <textarea name="" id="" cols="30" rows="3" placeholder="Comments">{{$user->junior_fg_comment ? $user->junior_fg_comment : 'N/A'}}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mt-10" data-wow-delay="0.5s" data-wow-duration="1.5s">
                    <div class="jnone">
                        <div class="left">
                            <h5>KO's :</h5>
                        </div>
                        <div class="right">
                            <div class="xforx">
                                <div class="xforchild">
                                    <div>No. of Ko's</div> <u>{{$user->junior_kos ? $user->junior_kos : 'N/A'}}</u>
                                </div>
                                <div class="xforchild">
                                    <div>Total Yardage</div> <u>{{$user->junior_ko_total_yardage ? $user->junior_ko_total_yardage : 'N/A'}}</u>
                                </div>
                                <div class="xforchild">
                                    <div>KO Average</div> <u>{{$user->junior_ko_average ? $user->junior_ko_average : 'N/A'}}</u>
                                </div>
                                <div class="xforchild">
                                    <div>Touchbacks</div> <u>{{$user->junior_ko_touchbacks ? $user->junior_ko_touchbacks : 'N/A'}}</u>
                                </div>
                            </div>
                            <div class="inpSec mt-10">
                                <textarea name="" id="" cols="30" rows="3" placeholder="Comments">{{$user->junior_ko_comment ? $user->junior_ko_comment : 'N/A'}}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mt-10" data-wow-delay="0.5s" data-wow-duration="1.5s">
                    <div class="jnone">
                        <div class="left">
                            <h5>Punts :</h5>
                        </div>
                        <div class="right">
                            <div class="xforx">
                                <div class="xforchild">
                                    <div>No. of Punts</div> <u>{{$user->junior_punts ? $user->junior_punts : 'N/A'}}</u>
                                </div>
                                <div class="xforchild">
                                    <div>Punts Average</div> <u>{{$user->junior_punt_average ? $user->junior_punt_average : 'N/A'}}</u>
                                </div>
                                <div class="xforchild">
                                    <div>Longest Punts</div> <u>{{$user->junior_longest_punt ? $user->junior_longest_punt : 'N/A'}}</u>
                                </div>
                                <div class="xforchild">
                                    <div>Total Yardage</div> <u>{{$user->junior_punt_total_yardage ? $user->junior_punt_total_yardage : 'N/A'}}</u>
                                </div>
                                <div class="xforchild">
                                    <div>1-20</div> <u>{{$user->junior_punt_120 ? $user->junior_punt_120 : 'N/A'}}</u>
                                </div>
                            </div>
                            <div class="inpSec mt-10">
                                <textarea name="" id="" cols="30" rows="3" placeholder="Comments">{{$user->junior_punt_comment ? $user->junior_punt_comment : 'N/A'}}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- snaps -->
                <div class="col-lg-12 mt-10" data-wow-delay="0.5s" data-wow-duration="1.5s">
                    <div class="jnone">
                        <div class="left2">
                            <h5>40 Yard Dash :</h5>
                        </div>
                        <div class="right2">
                            <div class="xforchild">
                                <u>{{$user->junior_40_yard_dash ? $user->junior_40_yard_dash : 'N/A'}}</u>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mt-10" data-wow-delay="0.5s" data-wow-duration="1.5s">
                    <div class="jnone">
                        <div class="left2">
                            <h5>PAT Snaps :</h5>
                        </div>
                        <div class="right2">
                            <div class="xforchild">
                                <div>No. of Snaps</div> <u>{{$user->junior_pat_snaps ? $user->junior_pat_snaps : 'N/A'}}</u>
                            </div>
                            <div class="xforchild">
                                <div>% of Perfect Snaps</div> <u>{{$user->junior_perfect_pat_snaps ? $user->junior_perfect_pat_snaps : 'N/A'}}</u>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mt-10" data-wow-delay="0.5s" data-wow-duration="1.5s">
                    <div class="jnone">
                        <div class="left2">
                            <h5>Punt Snaps :</h5>
                        </div>
                        <div class="right2">
                            <div class="xforchild">
                                <div>No. of Snaps</div> <u>{{$user->junior_punt_snaps ? $user->junior_punt_snaps : 'N/A'}}</u>
                            </div>
                            <div class="xforchild">
                                <div>% of Perfect Snaps</div> <u>{{$user->junior_perfect_punt_snaps ? $user->junior_perfect_punt_snaps : 'N/A'}}</u>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sophomore Year   -->
            <div class="col-lg-12">
                <div class="col-lg-12 text-left">
                    <h2 class="infoSecHeading2 starrate mt-70 padding-x20 wow fadeInLeft" data-wow-delay="0.2s" data-wow-duration="1s">Sophomore Year</h2>
                </div>
            </div>
            <div class="staeSec">
                <div class="col-lg-12 mt-30" data-wow-delay="0.5s" data-wow-duration="1.5s">
                    <div class="jnone">
                        <div class="left">
                            <h5>PAT’s :</h5>
                        </div>
                        <div class="right">
                            <div class="xforx">
                                <div class="xforchild">
                                    X For X
                                </div>
                            </div>
                            <div class="inpSec mt-10">
                                <textarea name="" id="" cols="30" rows="3" placeholder="Comments">{{$user->sophomore_pat_comment ? $user->sophomore_pat_comment : 'N/A'}}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mt-10" data-wow-delay="0.5s" data-wow-duration="1.5s">
                    <div class="jnone">
                        <div class="left">
                            <h5>FG :</h5>
                        </div>
                        <div class="right">
                            <div class="xforx">
                                <div class="xforchild">
                                    X For X
                                </div>
                                <div class="xforchild">
                                    <div>Longest</div> <u>{{$user->sophomore_fg_longest ? $user->sophomore_fg_longest : 'N/A'}}</u>
                                </div>
                            </div>
                            <div class="inpSec mt-10">
                                <textarea name="" id="" cols="30" rows="3" placeholder="Comments">{{$user->sophomore_fg_comment ? $user->sophomore_fg_comment : 'N/A'}}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mt-10" data-wow-delay="0.5s" data-wow-duration="1.5s">
                    <div class="jnone">
                        <div class="left">
                            <h5>KO's :</h5>
                        </div>
                        <div class="right">
                            <div class="xforx">
                                <div class="xforchild">
                                    <div>No. of Ko's</div> <u>{{$user->sophomore_kos ? $user->sophomore_kos : 'N/A'}}</u>
                                </div>
                                <div class="xforchild">
                                    <div>Total Yardage</div> <u>{{$user->sophomore_ko_total_yardage ? $user->sophomore_ko_total_yardage : 'N/A'}}</u>
                                </div>
                                <div class="xforchild">
                                    <div>KO Average</div> <u>{{$user->sophomore_ko_average ? $user->sophomore_ko_average : 'N/A'}}</u>
                                </div>
                                <div class="xforchild">
                                    <div>Touchbacks</div> <u>{{$user->sophomore_ko_touchbacks ? $user->sophomore_ko_touchbacks : 'N/A'}}</u>
                                </div>
                            </div>
                            <div class="inpSec mt-10">
                                <textarea name="" id="" cols="30" rows="3" placeholder="Comments">{{$user->sophomore_ko_comment ? $user->sophomore_ko_comment : 'N/A'}}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mt-10" data-wow-delay="0.5s" data-wow-duration="1.5s">
                    <div class="jnone">
                        <div class="left">
                            <h5>Punts :</h5>
                        </div>
                        <div class="right">
                            <div class="xforx">
                                <div class="xforchild">
                                    <div>No. of Punts</div> <u>{{$user->sophomore_punts ? $user->sophomore_punts : 'N/A'}}</u>
                                </div>
                                <div class="xforchild">
                                    <div>Punts Average</div> <u>{{$user->sophomore_punt_average ? $user->sophomore_punt_average : 'N/A'}}</u>
                                </div>
                                <div class="xforchild">
                                    <div>Longest Punts</div> <u>{{$user->sophomore_longest_punt ? $user->sophomore_longest_punt : 'N/A'}}</u>
                                </div>
                                <div class="xforchild">
                                    <div>Total Yardage</div> <u>{{$user->sophomore_punt_total_yardage ? $user->sophomore_punt_total_yardage : 'N/A'}}</u>
                                </div>
                                <div class="xforchild">
                                    <div>1-20</div> <u>{{$user->sophomore_punt_120 ? $user->sophomore_punt_120 : 'N/A'}}</u>
                                </div>
                            </div>
                            <div class="inpSec mt-10">
                                <textarea name="" id="" cols="30" rows="3" placeholder="Comments">{{$user->sophomore_punt_comment ? $user->sophomore_punt_comment : 'N/A'}}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- snaps -->
                <div class="col-lg-12 mt-10" data-wow-delay="0.5s" data-wow-duration="1.5s">
                    <div class="jnone">
                        <div class="left2">
                            <h5>40 Yard Dash :</h5>
                        </div>
                        <div class="right2">
                            <div class="xforchild">
                                <u>{{$user->sophomore_40_yard_dash ? $user->sophomore_40_yard_dash : 'N/A'}}</u>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mt-10" data-wow-delay="0.5s" data-wow-duration="1.5s">
                    <div class="jnone">
                        <div class="left2">
                            <h5>PAT Snaps :</h5>
                        </div>
                        <div class="right2">
                            <div class="xforchild">
                                <div>No. of Snaps</div> <u>{{$user->sophomore_pat_snaps ? $user->sophomore_pat_snaps : 'N/A'}}</u>
                            </div>
                            <div class="xforchild">
                                <div>% of Perfect Snaps</div> <u>{{$user->sophomore_perfect_pat_snaps ? $user->sophomore_perfect_pat_snaps : 'N/A'}}</u>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mt-10" data-wow-delay="0.5s" data-wow-duration="1.5s">
                    <div class="jnone">
                        <div class="left2">
                            <h5>Punt Snaps :</h5>
                        </div>
                        <div class="right2">
                            <div class="xforchild">
                                <div>No. of Snaps</div> <u>{{$user->sophomore_punt_snaps ? $user->sophomore_punt_snaps : 'N/A'}}</u>
                            </div>
                            <div class="xforchild">
                                <div>% of Perfect Snaps</div> <u>{{$user->sophomore_perfect_punt_snaps ? $user->sophomore_perfect_punt_snaps : 'N/A'}}</u>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- FRESHMAN Year   -->
            <div class="col-lg-12">
                <div class="col-lg-12 text-left">
                    <h2 class="infoSecHeading2 starrate mt-70 padding-x20 wow fadeInLeft" data-wow-delay="0.2s" data-wow-duration="1s">FRESHMAN Year</h2>
                </div>
            </div>
            <div class="staeSec">
                <div class="col-lg-12 mt-30" data-wow-delay="0.5s" data-wow-duration="1.5s">
                    <div class="jnone">
                        <div class="left">
                            <h5>PAT’s :</h5>
                        </div>
                        <div class="right">
                            <div class="xforx">
                                <div class="xforchild">
                                    X For X
                                </div>
                            </div>
                            <div class="inpSec mt-10">
                                <textarea name="" id="" cols="30" rows="3" placeholder="Comments">{{$user->freshman_pat_comment ? $user->freshman_pat_comment : 'N/A'}}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mt-10" data-wow-delay="0.5s" data-wow-duration="1.5s">
                    <div class="jnone">
                        <div class="left">
                            <h5>FG :</h5>
                        </div>
                        <div class="right">
                            <div class="xforx">
                                <div class="xforchild">
                                    X For X
                                </div>
                                <div class="xforchild">
                                    <div>Longest</div> <u>{{$user->freshman_fg_longest ? $user->freshman_fg_longest : 'N/A'}}</u>
                                </div>
                            </div>
                            <div class="inpSec mt-10">
                                <textarea name="" id="" cols="30" rows="3" placeholder="Comments">{{$user->freshman_fg_comment ? $user->freshman_fg_comment : 'N/A'}}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mt-10" data-wow-delay="0.5s" data-wow-duration="1.5s">
                    <div class="jnone">
                        <div class="left">
                            <h5>KO's :</h5>
                        </div>
                        <div class="right">
                            <div class="xforx">
                                <div class="xforchild">
                                    <div>No. of Ko's</div> <u>{{$user->freshman_kos ? $user->freshman_kos : 'N/A'}}</u>
                                </div>
                                <div class="xforchild">
                                    <div>Total Yardage</div> <u>{{$user->freshman_ko_total_yardage ? $user->freshman_ko_total_yardage : 'N/A'}}</u>
                                </div>
                                <div class="xforchild">
                                    <div>KO Average</div> <u>{{$user->freshman_ko_average ? $user->freshman_ko_average : 'N/A'}}</u>
                                </div>
                                <div class="xforchild">
                                    <div>Touchbacks</div> <u>{{$user->freshman_ko_touchbacks ? $user->freshman_ko_touchbacks : 'N/A'}}</u>
                                </div>
                            </div>
                            <div class="inpSec mt-10">
                                <textarea name="" id="" cols="30" rows="3" placeholder="Comments">{{$user->freshman_ko_comment ? $user->freshman_ko_comment : 'N/A'}}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mt-10" data-wow-delay="0.5s" data-wow-duration="1.5s">
                    <div class="jnone">
                        <div class="left">
                            <h5>Punts :</h5>
                        </div>
                        <div class="right">
                            <div class="xforx">
                                <div class="xforchild">
                                    <div>No. of Punts</div> <u>{{$user->freshman_punts ? $user->freshman_punts : 'N/A'}}</u>
                                </div>
                                <div class="xforchild">
                                    <div>Punts Average</div> <u>{{$user->freshman_punt_average ? $user->freshman_punt_average : 'N/A'}}</u>
                                </div>
                                <div class="xforchild">
                                    <div>Longest Punts</div> <u>{{$user->freshman_longest_punt ? $user->freshman_longest_punt : 'N/A'}}</u>
                                </div>
                                <div class="xforchild">
                                    <div>Total Yardage</div> <u>{{$user->freshman_punt_total_yardage ? $user->freshman_punt_total_yardage : 'N/A'}}</u>
                                </div>
                                <div class="xforchild">
                                    <div>1-20</div> <u>{{$user->freshman_punt_120 ? $user->freshman_punt_120 : 'N/A'}}</u>
                                </div>
                            </div>
                            <div class="inpSec mt-10">
                                <textarea name="" id="" cols="30" rows="3" placeholder="Comments">{{$user->freshman_punt_comment ? $user->freshman_punt_comment : 'N/A'}}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- snaps -->
                <div class="col-lg-12 mt-10" data-wow-delay="0.5s" data-wow-duration="1.5s">
                    <div class="jnone">
                        <div class="left2">
                            <h5>40 Yard Dash :</h5>
                        </div>
                        <div class="right2">
                            <div class="xforchild">
                                <u>{{$user->freshman_40_yard_dash ? $user->freshman_40_yard_dash : 'N/A'}}</u>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mt-10" data-wow-delay="0.5s" data-wow-duration="1.5s">
                    <div class="jnone">
                        <div class="left2">
                            <h5>PAT Snaps :</h5>
                        </div>
                        <div class="right2">
                            <div class="xforchild">
                                <div>No. of Snaps</div> <u>{{$user->freshman_pat_snaps ? $user->freshman_pat_snaps : 'N/A'}}</u>
                            </div>
                            <div class="xforchild">
                                <div>% of Perfect Snaps</div> <u>{{$user->freshman_perfect_pat_snaps ? $user->freshman_perfect_pat_snaps : 'N/A'}}</u>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mt-10" data-wow-delay="0.5s" data-wow-duration="1.5s">
                    <div class="jnone">
                        <div class="left2">
                            <h5>Punt Snaps :</h5>
                        </div>
                        <div class="right2">
                            <div class="xforchild">
                                <div>No. of Snaps</div> <u>{{$user->freshman_punt_snaps ? $user->freshman_punt_snaps : 'N/A'}}</u>
                            </div>
                            <div class="xforchild">
                                <div>% of Perfect Snaps</div> <u>{{$user->freshman_perfect_punt_snaps ? $user->freshman_perfect_punt_snaps : 'N/A'}}</u>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Junior Days -->
            <div class="col-lg-12">
                <div class="col-lg-12 text-left jdays">
                    <h2 class="infoSecHeading2 starrate mt-70 padding-x20 wow fadeInLeft" data-wow-delay="0.2s" data-wow-duration="1s">Junior Days</h2>
                </div>
            </div>
            <div class="staesec">
                <div class="col-lg-12 mt-30">
                    <div class="txtArea" data-wow-delay="0.5s" data-wow-duration="1.5s">
                        <textarea name="" id="" cols="30" rows="3" class="" placeholder="Played in junior Days If...">{{$user->junior_days1 ? $user->junior_days1 : 'N/A'}}</textarea>
                    </div>
                    <div class="txtArea mt-30" data-wow-delay="0.5s" data-wow-duration="1.5s">
                        <textarea name="" id="" cols="30" rows="3" class="" placeholder="Played in junior Days If...">{{$user->junior_days2 ? $user->junior_days2 : 'N/A'}}</textarea>
                    </div>
                </div>
            </div>

            <!-- Offers -->
            <div class="col-lg-12">
                <div class="col-lg-12 text-left jdays">
                    <h2 class="infoSecHeading2 starrate mt-70 padding-x20 wow fadeInLeft" data-wow-delay="0.2s" data-wow-duration="1s">Offers</h2>
                </div>
            </div>
            <div class="staesec">
                <div class="col-lg-12 mt-30">
                    <div class="txtArea" data-wow-delay="0.5s" data-wow-duration="1.5s">
                        <textarea name="" id="" cols="30" rows="3" class="" placeholder="If got an offer from any state/university">{{$user->offers1 ? $user->offers1 : 'N/A'}}</textarea>
                    </div>
                    <div class="txtArea mt-30" data-wow-delay="0.5s" data-wow-duration="1.5s">
                        <textarea name="" id="" cols="30" rows="3" class="" placeholder="If got an offer from any state/university">{{$user->offers2 ? $user->offers2 : 'N/A'}}</textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Videos -->
    <div class="hydlVideos">
        <!-- Hudl -->
        <div class="col-lg-12 text-center mt-50">
            <h5 class="wow fadeInDown" data-wow-delay="0.5s" data-wow-duration="1.5s">Hudl Videos</h5>
        </div>
        <div class="col-lg-12 mt-50">
            <div class="carousalDiv wow zoomIn" data-wow-delay="0.5s" data-wow-duration="1.5s">
                <div class="owl-carousel owl-theme">
                    @foreach($user->hudl_user_videos as $hudl_user_video)
                    <!-- <a href="{{$hudl_user_video->link ? $hudl_user_video->link : '#'}}" target="_blank"> -->
                        <div class="item " >
                            <div class="img">
                                <iframe src="{{$hudl_user_video->link ? $hudl_user_video->link : '#'}}" width='100%' height='210' frameborder='0' allowfullscreen></iframe>
                                <!-- <img src="{{($hudl_user_video->thumbnail) ? (asset('img/thumbnails') . '/' . $hudl_user_video->thumbnail) : ('')}}" height="" width="" alt=""> -->
                            </div>
                            <div class="name">
                                {{$hudl_user_video->title ? $hudl_user_video->title : 'N/A'}}
                            </div>
                        </div>
                        <!-- </a> -->
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- camp -->
            <div class="col-lg-12 text-center mt-50">
                <h5 class="wow fadeInDown" data-wow-delay="0.5s" data-wow-duration="1.5s">Camp Videos</h5>
            </div>
            <div class="col-lg-12 mt-50">
                <div class="carousalDiv wow zoomIn" data-wow-delay="0.5s" data-wow-duration="1.5s">
                    <div class="owl-carousel owl-theme">
                        @foreach($user->camp_user_videos as $camp_user_video)
                        <!-- a href="{{$camp_user_video->link ? $camp_user_video->link : '#'}}" target="_blank"> -->
                        <div class="item " >
                            <div class="img">
                                <iframe src="{{$camp_user_video->link ? $camp_user_video->link : '#'}}" width='100%' height='300' frameborder='0' allowfullscreen></iframe>
                                <!-- <img src="{{($camp_user_video->thumbnail) ? (asset('img/thumbnails') . '/' . $camp_user_video->thumbnail) : ('')}}" height="" width="" alt=""> -->
                                <!--  <iframe width="100%" height="100%" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                            </div>
                            <div class="name">
                                {{$camp_user_video->title ? $camp_user_video->title : 'N/A'}}
                            </div>
                        </div>
                        <!-- </a> -->
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- TRAINING  -->
            <div class="col-lg-12 text-center mt-50">
                <h5 class="wow fadeInDown" data-wow-delay="0.5s" data-wow-duration="1.5s">TRAINING  Videos</h5>
            </div>
            <div class="col-lg-12 mt-50">
                <div class="carousalDiv wow zoomIn" data-wow-delay="0.5s" data-wow-duration="1.5s">
                    <div class="owl-carousel owl-theme">
                        @foreach($user->training_user_videos as $training_user_video)
                        <!-- <a href="{{$training_user_video->link ? $training_user_video->link : '#'}}" target="_blank"> -->
                            <div class="item " >
                                <div class="img">
                                    <iframe src="{{$training_user_video->link ? $training_user_video->link : '#'}}" width='640' height='360' frameborder='0' allowfullscreen></iframe>
                                    <!-- <img src="{{($training_user_video->thumbnail) ? (asset('img/thumbnails') . '/' . $training_user_video->thumbnail) : ('')}}" height="" width="" alt=""> -->
                                </div>
                                <div class="name">
                                    {{$training_user_video->title ? $training_user_video->title : 'N/A'}}
                                </div>
                            </div>
                            <!-- </a> -->
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection