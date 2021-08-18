@extends('web.layouts.master')

@section('content')
<!-- sidebars -->
<img src="{{asset('img/1x/bars-black.svg')}}" fill="black" width="20px" height="" alt="" class="sidebars" onclick="toggleMenu()">

<!-- MAIN FORM -->
<div class="container-fluid text-center adminNDB">
    <div class="row">
<!-- <div class="col-lg-12 ">
<div class="logo">
<img src="{{asset('img/SVG/fab.svg')}}" height="" width="" alt="">
</div>
</div> -->
<div class="col-lg-12">
    <h1>User Profile</h1>
</div>
</div>
<div class="row">
    <!-- Tabs -->
    <div class="col-lg-3">
        <ul class="nav nav-pills nav-stacked mt5">
            <li class="active"><a data-toggle="tab" href="#tab1">Profile</a></li>
            <li><a data-toggle="tab" href="#tab2">Info</a></li>
            <li><a data-toggle="tab" href="#tab3">kicking long snapping coach</a></li>
            <li><a data-toggle="tab"  href="#tab4">STAR RATINGS</a></li>
            <li><a data-toggle="tab" href="#tab5">season stats</a></li>
            <li><a data-toggle="tab" href="#tab6">VIDEOS</a></li>
            <li><a data-toggle="tab" href="#tab7" id="reserLink">Password Reset</a></li>
            <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </ul>
    </div>
    <!-- Fields -->
    <form method="POST" action="{{route('profile_builder', auth()->user()->id)}}" enctype="multipart/form-data">
        @csrf
        <div class="col-lg-9">
            <div class="col-lg-12">
                <div class="tab-content mt5">
                    <!-- Profile -->
                    <div id="tab1" class="tab-pane fade in active">
                        <div class="card">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h2>
                                        Profile
                                    </h2>   
                                </div>
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="form-group col-lg-12">
                                            <i class="fa fa-edit delIcon"></i>
                                            <div class="img-picker"></div>
                                        </div> 
                                    </div>
                                    <!-- rating -->
                                    <div class="row mt1">
        <!-- <div class="rate">
            <input type="radio" id="rating10" name="rating" value="10" {!! ($user->rating * 2 == 10) ? 'checked' : 'asd' !!}/>
            <label for="rating10" title="5 stars"></label>
            
            <input type="radio" id="rating9" name="rating" value="9" {!! ($user->rating * 2 == 9) ? 'checked' : 'asd' !!}/>
            <label class="half" for="rating9" title="4 1/2 stars"></label>
            
            <input type="radio" id="rating8" name="rating" value="8" {!! ($user->rating * 2 == 8) ? 'checked' : 'asd' !!}/>
            <label for="rating8" title="4 stars"></label>
            
            <input type="radio" id="rating7" name="rating" value="7" {!! ($user->rating * 2 == 7) ? 'checked' : 'asd' !!}/>
            <label class="half" for="rating7" title="3 1/2 stars"></label>
            
            <input type="radio" id="rating6" name="rating" value="6" {!! ($user->rating * 2 == 6) ? 'checked' : 'asd' !!}/>
            <label for="rating6" title="3 stars"></label>
            
            <input type="radio" id="rating5" name="rating" value="5" {!! ($user->rating * 2 == 5) ? 'checked' : 'asd' !!}/>
            <label class="half" for="rating5" title="2 1/2 stars"></label>
            
            <input type="radio" id="rating4" name="rating" value="4" {!! ($user->rating * 2 == 4) ? 'checked' : 'asd' !!}/>
            <label for="rating4" title="2 stars"></label>
            
            <input type="radio" id="rating3" name="rating" value="3" {!! ($user->rating * 2 == 3) ? 'checked' : 'asd' !!}/>
            <label class="half" for="rating3" title="1 1/2 stars"></label>
            
            <input type="radio" id="rating2" name="rating" value="2" {!! ($user->rating * 2 == 2) ? 'checked' : 'asd' !!}/>
            <label for="rating2" title="1 star"></label>
            
            <input type="radio" id="rating1" name="rating" value="1" {!! ($user->rating * 2 == 1) ? 'checked' : 'asd' !!}/>
            <label class="half" for="rating1" title="1/2 star"></label>
        </div> -->
        @php $count= 0; @endphp
        @for($i = 0; $i < intval($user->rating); $i++)
        <img src="{{asset('img/1x/starfull-8.png')}}" style="height:20px; width: 20px;" alt="">
        @php $count++; @endphp
        @endfor
        @if(fmod($user->rating, 1) > 0)
        <img src="{{asset('img/1x/dim-starhalf-8.png')}}" style="height:20px; width: 20px;" alt="">
        @php $count++; @endphp
        @endif
        @if($count < 5)
        @for($i = $count; $i < 5; $i++)
        <img src="{{asset('img/1x/dim-starfull-8.png')}}" style="height:20px; width: 20px;" alt="">
        @endfor
        @endif
    </div>
</div>
<div class="col-lg-12 ">
    <div class="row">
        <!-- name -->
        <div class="col-lg-4 mt3">
            <label for="" class="clabel">First Name</label>
            <input type="text" placeholder="First Name" name="name" value="{{$user->name}}">
        </div>
        <!-- last_name -->
        <div class="col-lg-4 mt3">
            <label for="" class="clabel">Last Name</label>
            <input type="text" placeholder="Last Name" name="last_name" value="{{$user->last_name}}">
        </div>
        <!-- Position -->
        <div class="col-lg-4 mt3">
            <label for="" class="clabel">Position</label>
            <input type="text" placeholder="Position" readonly value="{{get_player_types($user->id)}}">
        </div>
    </div> 
    <div class="row ">
        <!-- user_name -->
        <div class="col-lg-4 mt3">
            <label for="" class="clabel">Username</label>
            <input type="text" placeholder="Username" name="user_name" value="{{$user->user_name}}">
        </div>
        <!-- email -->
        <div class="col-lg-4 mt3">
            <label for="" class="clabel">Email</label>
            <input type="email" placeholder="Email" readonly value="{{$user->email}}">
        </div>
        <!-- subscription -->
        <div class="col-lg-4 mt3">
            <label for="" class="clabel">Subcription</label>
            <input type="text" placeholder="Monthly" readonly>
        </div>
    </div>
    <div class="row ">
        <!-- description -->
        <div class="col-lg-12 mt3">
            <label for="" class="clabel">About Me</label>
            <textarea name="description" cols="30" rows="5" placeholder="About Me">{{$user->description}}</textarea>
        </div>
    </div>

</div> 
</div>
</div>
</div>
<!-- Info -->
<div id="tab2" class="tab-pane fade " >
    <div class="card">
        <div class="row">
            <div class="col-lg-12">
                <h2>
                    Info
                </h2>   
            </div>
            <div class="col-lg-12 ">
                <!-- twitter_handle -->
                <div class="col-lg-4 mt3">
                    <label for="" class="clabel">Twitter Handle</label>
                    <input type="text" placeholder="Twitter Handle" name="twitter_handle" value="{{$user->twitter_handle}}">
                </div>
                <!-- instagram_handle -->
                <div class="col-lg-4 mt3">
                    <label for="" class="clabel">Instagram Handle</label>
                    <input type="text" placeholder="Instagram Handle" name="instagram_handle" value="{{$user->instagram_handle}}">
                </div>
                <!-- jersey_number -->
                <div class="col-lg-4 mt3">
                    <label for="" class="clabel">Jersey #</label>
                    <input type="number" placeholder="Jersey #" name="jersey_number" value="{{$user->jersey_number}}">
                </div>
            </div>
            <div class="col-lg-12 ">
                <!-- specialist_position -->
                <div class="col-lg-4 mt3">
                    <label for="" class="clabel">Specialist Position</label>
                    <input type="text" placeholder="Specialist Position" name="specialist_position" value="{{$user->specialist_position}}">
                </div>
                <!-- grad_year -->
                <div class="col-lg-4 mt3">
                    <?php $last= date('Y')-120;?>
                    <label for="" class="clabel">Grad Year</label>
                    <select name="grad_year" id="yearButton">
                        <option value="">Grad Year</option>
                        {{ $last= date('Y')-120 }}
                        {{ $now = date('Y')+15}}
                        @for($i = $now; $i >= $last; $i--)
                        @if($i == $user->grad_year)
                        <option value="{{$i}}" selected>{{$i}}</option>
                        @else
                        <option value="{{$i}}">{{$i}}</option>
                        @endif
                        @endfor
                    </select>
                </div>
                <!-- state -->
                <div class="col-lg-4 mt3">
                    <label for="" class="clabel">State</label>
                    <input type="text" placeholder="State" name="state" value="{{$user->state}}">
                </div>
            </div>
            <div class="col-lg-12 ">
                <!-- high_school -->
                <div class="col-lg-4 mt3">
                    <label for="" class="clabel">High School</label>
                    <input type="text" placeholder="High School" name="high_school" value="{{$user->high_school}}">
                </div>
                <!-- height -->
                <div class="col-lg-4 mt3">
                    <label for="" class="clabel">Height</label>
                    <input type="number" step="0.01" placeholder="Height" name="height" value="{{$user->height}}">
                </div>
                <!-- weight -->
                <div class="col-lg-4 mt3">
                    <label for="" class="clabel">Weight</label>
                    <input type="number" step="0.01" placeholder="Weight" name="weight" value="{{$user->weight}}">
                </div>
            </div>
            <div class="col-lg-12 ">
                <!-- other_fb_positions -->
                <div class="col-lg-4 mt3">
                    <label for="" class="clabel">Other FB Positions</label>
                    <input type="text" placeholder="Other FB Positions" name="other_fb_positions" value="{{$user->other_fb_positions}}">
                </div>
                <!-- other_sports -->
                <div class="col-lg-4 mt3">
                    <label for="" class="clabel">Other Sports</label>
                    <input type="text" placeholder="Other Sports" name="other_sports" value="{{$user->other_sports}}">
                </div>
                <!-- college_degrees_of_interest -->
                <div class="col-lg-4 mt3">
                    <label for="" class="clabel">College Degrees of Interest</label>
                    <input type="text" placeholder="College Degrees of Interest" name="college_degrees_of_interest" value="{{$user->college_degrees_of_interest}}">
                </div>
            </div>
            <div class="col-lg-12 ">
                <!-- gpa -->
                <div class="col-lg-4 mt3">
                    <label for="" class="clabel">GPA</label>
                    <input type="number" step="0.01" placeholder="GPA" name="gpa" value="{{$user->gpa}}">
                </div>
                <!-- act -->
                <div class="col-lg-4 mt3">
                    <label for="" class="clabel">ACT</label>
                    @if($user->act != null)
                    <input type="number" step="0.01" placeholder="ACT" name="act" value="{{$user->act}}">
                    @else
                    <input type="number" step="0.01" placeholder="N/A" name="act" value="N/A">
                    @endif
                </div>
                <!-- sat -->
                <div class="col-lg-4 mt3">
                    <label for="" class="clabel">SAT</label>
                    <input type="number" step="0.01" placeholder="SAT" name="sat" value="{{$user->sat}}">
                </div>
            </div>
            <div class="col-lg-12 ">
                <!-- ncaa_id -->
                <div class="col-lg-4 mt3">
                    <label for="" class="clabel">NCAA ID</label>
                    <input type="text" placeholder="NCAA ID" name="ncaa_id" value="{{$user->ncaa_id}}">
                </div>
                <!-- class_rank -->
                <div class="col-lg-4 mt3">
                    <label for="" class="clabel">Class Rank</label>
                    <input type="number" placeholder="Class Rank" name="class_rank" value="{{$user->class_rank}}">
                </div>
                <!-- class_rank_percentile -->
                <div class="col-lg-4 mt3">
                    <label for="" class="clabel">Class Rank Percentile</label>
                    <input type="number" step="0.01" placeholder="Class Rank Percentile" name="class_rank_percentile" value="{{$user->class_rank_percentile}}">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Kicking Long Snapping Coach -->
<div id="tab3" class="tab-pane fade " >
    <div class="card">
        <div class="row">
            <div class="col-lg-12">
                <h2>
                    Coaches
                </h2>   
            </div>
            <!-- coach1 -->
            <div class="col-lg-12 mt3">
                <label for="" class="clabel">Coach 01</label>
                <input type="text" placeholder="Coach 01" name="coach1" value="{{$user->coach1}}">
            </div>
            <!-- coach2 -->
            <div class="col-lg-12 mt3">
                <label for="" class="clabel">Coach 02</label>
                <input type="text" placeholder="Coach 02"  name="coach2" value="{{$user->coach2}}">
            </div>
            <!-- coach3 -->
            <div class="col-lg-12 mt3">
                <label for="" class="clabel">Coach 03</label>
                <input type="text" placeholder="Coach 03"  name="coach3" value="{{$user->coach3}}">
            </div>
        </div>
    </div>
</div>
<!-- Star Ratings -->
<div id="tab4" class="tab-pane fade " >
    <div class="card">
        <div class="row">
            <div class="col-lg-12 dfl">
                <h2>
                    Average Ratings
                </h2>
                <span class="glyphicon glyphicon-plus" data-toggle="modal" data-target="#starRatingCreateModal"></span>
            </div>
            <div class="col-lg-12 text-left">
                <p class="avgRate">
                    This is an average score of all of your evaluation camp ratings.
                </p>
            </div>
            <div class="col-lg-12 hudlSc" style="overflow: scroll;">
                <table class="table table-striped mt5">
                    <thead>
                        <tr >
                            <th class="text-center" scope="col">List</th>
                            <th class="text-center" scope="col">Evaluation Platforms</th>
                            <th class="text-center" scope="col">Last Attend</th>
                            <th class="text-center" scope="col">Rating</th>
                            <th class="text-center" scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody class="tbody_star_rating">
                        @foreach($user->star_ratings as $star_rating)
                        <tr>
                            <th scope="row">{{$star_rating->id}}</th>
                            <td>
                                {{$star_rating->club_name}}
                            </td>
                            <td>{{$star_rating->last_attended}}</td>
                            <td>
                                @php $count= 0; @endphp
                                @for($i = 0; $i < intval($star_rating->rating); $i++)
                                <img src="{{asset('img/1x/starfull-8.png')}}" style="height:20px; width: 20px;" alt="">
                                @php $count++; @endphp
                                @endfor
                                @if(fmod($star_rating->rating, 1) > 0)
                                <img src="{{asset('img/1x/dim-starhalf-8.png')}}" style="height:20px; width: 20px;" alt="">
                                @php $count++; @endphp
                                @endif
                                @if($count < 5)
                                @for($i = $count; $i < 5; $i++)
                                <img src="{{asset('img/1x/dim-starfull-8.png')}}" style="height:20px; width: 20px;" alt="">
                                @endfor
                                @endif
                            </td>
                            <td>
                                <button type="button" class="btn btn-success btn_edit_star_rating" data-id="{{$star_rating->id}}"><span class="glyphicon glyphicon-edit"></span></button>
                                <button type="button" class="btn btn-danger btn_delete_star_rating" data-id="{{$star_rating->id}}"><span class="glyphicon glyphicon-trash"></span></button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Season Stats -->
<div id="tab5" class="tab-pane fade " >
    <div class="card">
        <div class="row">
            <!-- TABS -->
            <div class="staesTabs">
                <!-- tabs -->
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#seniorTab">SENIOR STATS</a></li>
                    <li><a data-toggle="tab" href="#juniorTab">JUNIOR STATS</a></li>
                    <li><a data-toggle="tab" href="#sophomoreTab">SOPHOMORE YEAR</a></li>
                    <li><a data-toggle="tab" href="#freshmanTab">FRESHMAN YEAR</a></li>
                    <li><a data-toggle="tab" href="#juniorDaysTab">JUNIOR DAYS</a></li>
                    <li><a data-toggle="tab" href="#offersTab">OFFERS</a></li>
                </ul>
            </div>
            <!-- FIELDS -->
            <div class="tab-content">
                <!-- SENIOR STATS -->
                <div id="seniorTab" class="tab-pane fade in active">
                    <div class="col-lg-12 dfl">
                        <h2>
                            SENIOR STATS
                        </h2>
                        <span class="glyphicon glyphicon-plus"></span>
                    </div>
                    <div class="col-lg-12">
                        <div class="staeSec">
                            <div class="col-lg-12 mt5 smzp"  >
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
                                            <textarea name="senior_pat_comment" id="" cols="30" rows="3" placeholder="Comments">{{$user->senior_pat_comment}}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 mt-10 smzp" >
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
                                                <div>Longest</div> <input type="number" placeholder="" name="senior_fg_longest" value="{{$user->senior_fg_longest}}">
                                            </div>
                                        </div>
                                        <div class="inpSec mt-10">
                                            <textarea name="senior_fg_comment" id="" cols="30" rows="3" placeholder="Comments">{{$user->senior_fg_comment}}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 mt-10 smzp" >
                                <div class="jnone">
                                    <div class="left">
                                        <h5>KO's :</h5>
                                    </div>
                                    <div class="right">
                                        <div class="xforx">
                                            <div class="xforchild">
                                                <div>No. of Ko's</div> <input type="number" placeholder="" name="senior_kos" value="{{$user->senior_kos}}">
                                            </div>
                                            <div class="xforchild">
                                                <div>Total Yardage</div> <input type="number" placeholder="" name="senior_ko_total_yardage" value="{{$user->senior_ko_total_yardage}}">
                                            </div>
                                            <div class="xforchild">
                                                <div>KO Average</div> <input type="number" placeholder="" name="senior_ko_average" value="{{$user->senior_ko_average}}">
                                            </div>
                                            <div class="xforchild">
                                                <div>Touchbacks</div> <input type="number" placeholder="" name="senior_ko_touchbacks" value="{{$user->senior_ko_touchbacks}}">
                                            </div>
                                        </div>
                                        <div class="inpSec mt-10">
                                            <textarea name="senior_ko_comment" id="" cols="30" rows="3" placeholder="Comments">{{$user->senior_ko_comment}}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 mt-10 smzp" >
                                <div class="jnone">
                                    <div class="left">
                                        <h5>Punts :</h5>
                                    </div>
                                    <div class="right">
                                        <div class="xforx">
                                            <div class="xforchild">
                                                <div>No. of Punts</div> <input type="number" placeholder="" name="senior_punts" value="{{$user->senior_punts}}">
                                            </div>
                                            <div class="xforchild">
                                                <div>Punts Average</div> <input type="number" placeholder="" name="senior_punt_average" value="{{$user->senior_punt_average}}">
                                            </div>
                                            <div class="xforchild">
                                                <div>Longest Punts</div> <input type="number" placeholder="" name="senior_longest_punt" value="{{$user->senior_longest_punt}}">
                                            </div>
                                            <div class="xforchild">
                                                <div>Total Yardage</div> <input type="number" placeholder="" name="senior_punt_total_yardage" value="{{$user->senior_punt_total_yardage}}">
                                            </div>
                                            <div class="xforchild">
                                                <div>1-20</div> <input type="number" placeholder="" name="senior_punt_120" value="{{$user->senior_punt_120}}">
                                            </div>
                                        </div>
                                        <div class="inpSec mt-10">
                                            <textarea name="senior_punt_comment" id="" cols="30" rows="3" placeholder="Comments">{{$user->senior_punt_comment}}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- snaps -->
                            <div class="col-lg-12  mt5 smzp" >
                                <div class="jnone">
                                    <div class="left2">
                                        <h5>40 Yard Dash :</h5>
                                    </div>
                                    <div class="right2">
                                        <div class="xforchild">
                                            <input type="number" placeholder="" name="senior_40_yard_dash" value="{{$user->senior_40_yard_dash}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 mt-10 smzp" >
                                <div class="jnone">
                                    <div class="left2">
                                        <h5>PAT Snaps :</h5>
                                    </div>
                                    <div class="right2">
                                        <div class="xforchild">
                                            <div>No. of Snaps</div> <input type="number" placeholder="" name="senior_pat_snaps" value="{{$user->senior_pat_snaps}}">
                                        </div>
                                        <div class="xforchild">
                                            <div>% of Perfect Snaps</div> <input type="number" placeholder="" name="senior_perfect_pat_snaps" value="{{$user->senior_perfect_pat_snaps}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 mt-10 smzp" >
                                <div class="jnone">
                                    <div class="left2">
                                        <h5>Punt Snaps :</h5>
                                    </div>
                                    <div class="right2">
                                        <div class="xforchild">
                                            <div>No. of Snaps</div> <input type="number" placeholder="" name="senior_punt_snaps" value="{{$user->senior_punt_snaps}}">
                                        </div>
                                        <div class="xforchild">
                                            <div>% of Perfect Snaps</div> <input type="number" placeholder="" name="senior_perfect_punt_snaps" value="{{$user->senior_perfect_punt_snaps}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- JUNIOR STATS -->
                <div id="juniorTab" class="tab-pane fade">
                    <div class="col-lg-12 dfl">
                        <h2>
                            JUNIOR STATS
                        </h2>
                        <span class="glyphicon glyphicon-plus"></span>
                    </div>
                    <div class="col-lg-12">
                        <div class="staeSec">
                            <div class="col-lg-12 mt5 smzp"  >
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
                                            <textarea name="junior_pat_comment" id="" cols="30" rows="3" placeholder="Comments">{{$user->junior_pat_comment}}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 mt-10 smzp" >
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
                                                <div>Longest</div> <input type="number" placeholder="" name="junior_fg_longest" value="{{$user->junior_fg_longest}}">
                                            </div>
                                        </div>
                                        <div class="inpSec mt-10">
                                            <textarea name="junior_fg_comment" id="" cols="30" rows="3" placeholder="Comments">{{$user->junior_fg_comment}}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 mt-10 smzp" >
                                <div class="jnone">
                                    <div class="left">
                                        <h5>KO's :</h5>
                                    </div>
                                    <div class="right">
                                        <div class="xforx">
                                            <div class="xforchild">
                                                <div>No. of Ko's</div> <input type="number" placeholder="" name="junior_kos" value="{{$user->junior_kos}}">
                                            </div>
                                            <div class="xforchild">
                                                <div>Total Yardage</div> <input type="number" placeholder="" name="junior_ko_total_yardage" value="{{$user->junior_ko_total_yardage}}">
                                            </div>
                                            <div class="xforchild">
                                                <div>KO Average</div> <input type="number" placeholder="" name="junior_ko_average" value="{{$user->junior_ko_average}}">
                                            </div>
                                            <div class="xforchild">
                                                <div>Touchbacks</div> <input type="number" placeholder="" name="junior_ko_touchbacks" value="{{$user->junior_ko_touchbacks}}">
                                            </div>
                                        </div>
                                        <div class="inpSec mt-10">
                                            <textarea name="junior_ko_comment" id="" cols="30" rows="3" placeholder="Comments">{{$user->junior_ko_comment}}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 mt-10 smzp" >
                                <div class="jnone">
                                    <div class="left">
                                        <h5>Punts :</h5>
                                    </div>
                                    <div class="right">
                                        <div class="xforx">
                                            <div class="xforchild">
                                                <div>No. of Punts</div> <input type="number" placeholder="" name="junior_punts" value="{{$user->junior_punts}}">
                                            </div>
                                            <div class="xforchild">
                                                <div>Punts Average</div> <input type="number" placeholder="" name="junior_punt_average" value="{{$user->junior_punt_average}}">
                                            </div>
                                            <div class="xforchild">
                                                <div>Longest Punts</div> <input type="number" placeholder="" name="junior_longest_punt" value="{{$user->junior_longest_punt}}">
                                            </div>
                                            <div class="xforchild">
                                                <div>Total Yardage</div> <input type="number" placeholder="" name="junior_punt_total_yardage" value="{{$user->junior_punt_total_yardage}}">
                                            </div>
                                            <div class="xforchild">
                                                <div>1-20</div> <input type="number" placeholder="" name="junior_punt_120" value="{{$user->junior_punt_120}}">
                                            </div>
                                        </div>
                                        <div class="inpSec mt-10">
                                            <textarea name="junior_punt_comment" id="" cols="30" rows="3" placeholder="Comments">{{$user->junior_punt_comment}}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- snaps -->
                            <div class="col-lg-12  mt5 smzp" >
                                <div class="jnone">
                                    <div class="left2">
                                        <h5>40 Yard Dash :</h5>
                                    </div>
                                    <div class="right2">
                                        <div class="xforchild">
                                            <input type="number" placeholder="" name="junior_40_yard_dash" value="{{$user->junior_40_yard_dash}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 mt-10 smzp" >
                                <div class="jnone">
                                    <div class="left2">
                                        <h5>PAT Snaps :</h5>
                                    </div>
                                    <div class="right2">
                                        <div class="xforchild">
                                            <div>No. of Snaps</div> <input type="number" placeholder="" name="junior_pat_snaps" value="{{$user->junior_pat_snaps}}">
                                        </div>
                                        <div class="xforchild">
                                            <div>% of Perfect Snaps</div> <input type="number" placeholder="" name="junior_perfect_pat_snaps" value="{{$user->junior_perfect_pat_snaps}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 mt-10 smzp" >
                                <div class="jnone">
                                    <div class="left2">
                                        <h5>Punt Snaps :</h5>
                                    </div>
                                    <div class="right2">
                                        <div class="xforchild">
                                            <div>No. of Snaps</div> <input type="number" placeholder="" name="junior_punt_snaps" value="{{$user->junior_punt_snaps}}">
                                        </div>
                                        <div class="xforchild">
                                            <div>% of Perfect Snaps</div> <input type="number" placeholder="" name="junior_perfect_punt_snaps" value="{{$user->junior_perfect_punt_snaps}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- SOPHOMORE YEAR -->
                <div id="sophomoreTab" class="tab-pane fade">
                    <div class="col-lg-12 dfl">
                        <h2>
                            SOPHOMORE YEAR
                        </h2>
                        <span class="glyphicon glyphicon-plus"></span>
                    </div>
                    <div class="col-lg-12">
                        <div class="staeSec">
                            <div class="col-lg-12 mt5 smzp"  >
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
                                            <textarea name="sophomore_pat_comment" id="" cols="30" rows="3" placeholder="Comments">{{$user->sophomore_pat_comment}}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 mt-10 smzp" >
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
                                                <div>Longest</div> <input type="number" placeholder="" name="sophomore_fg_longest" value="{{$user->sophomore_fg_longest}}">
                                            </div>
                                        </div>
                                        <div class="inpSec mt-10">
                                            <textarea name="sophomore_fg_comment" id="" cols="30" rows="3" placeholder="Comments">{{$user->sophomore_fg_comment}}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 mt-10 smzp" >
                                <div class="jnone">
                                    <div class="left">
                                        <h5>KO's :</h5>
                                    </div>
                                    <div class="right">
                                        <div class="xforx">
                                            <div class="xforchild">
                                                <div>No. of Ko's</div> <input type="number" placeholder="" name="sophomore_kos" value="{{$user->sophomore_kos}}">
                                            </div>
                                            <div class="xforchild">
                                                <div>Total Yardage</div> <input type="number" placeholder="" name="sophomore_ko_total_yardage" value="{{$user->sophomore_ko_total_yardage}}">
                                            </div>
                                            <div class="xforchild">
                                                <div>KO Average</div> <input type="number" placeholder="" name="sophomore_ko_average" value="{{$user->sophomore_ko_average}}">
                                            </div>
                                            <div class="xforchild">
                                                <div>Touchbacks</div> <input type="number" placeholder="" name="sophomore_ko_touchbacks" value="{{$user->sophomore_ko_touchbacks}}">
                                            </div>
                                        </div>
                                        <div class="inpSec mt-10">
                                            <textarea name="sophomore_ko_comment" id="" cols="30" rows="3" placeholder="Comments">{{$user->sophomore_ko_comment}}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 mt-10 smzp" >
                                <div class="jnone">
                                    <div class="left">
                                        <h5>Punts :</h5>
                                    </div>
                                    <div class="right">
                                        <div class="xforx">
                                            <div class="xforchild">
                                                <div>No. of Punts</div> <input type="number" placeholder="" name="sophomore_punts" value="{{$user->sophomore_punts}}">
                                            </div>
                                            <div class="xforchild">
                                                <div>Punts Average</div> <input type="number" placeholder="" name="sophomore_punt_average" value="{{$user->sophomore_punt_average}}">
                                            </div>
                                            <div class="xforchild">
                                                <div>Longest Punts</div> <input type="number" placeholder="" name="sophomore_longest_punt" value="{{$user->sophomore_longest_punt}}">
                                            </div>
                                            <div class="xforchild">
                                                <div>Total Yardage</div> <input type="number" placeholder="" name="sophomore_punt_total_yardage" value="{{$user->sophomore_punt_total_yardage}}">
                                            </div>
                                            <div class="xforchild">
                                                <div>1-20</div> <input type="number" placeholder="" name="sophomore_punt_120" value="{{$user->sophomore_punt_120}}">
                                            </div>
                                        </div>
                                        <div class="inpSec mt-10">
                                            <textarea name="sophomore_punt_comment" id="" cols="30" rows="3" placeholder="Comments">{{$user->sophomore_punt_comment}}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- snaps -->
                            <div class="col-lg-12  mt5 smzp" >
                                <div class="jnone">
                                    <div class="left2">
                                        <h5>40 Yard Dash :</h5>
                                    </div>
                                    <div class="right2">
                                        <div class="xforchild">
                                            <input type="number" placeholder="" name="sophomore_40_yard_dash" value="{{$user->sophomore_40_yard_dash}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 mt-10 smzp" >
                                <div class="jnone">
                                    <div class="left2">
                                        <h5>PAT Snaps :</h5>
                                    </div>
                                    <div class="right2">
                                        <div class="xforchild">
                                            <div>No. of Snaps</div> <input type="number" placeholder="" name="sophomore_pat_snaps" value="{{$user->sophomore_pat_snaps}}">
                                        </div>
                                        <div class="xforchild">
                                            <div>% of Perfect Snaps</div> <input type="number" placeholder="" name="sophomore_perfect_pat_snaps" value="{{$user->sophomore_perfect_pat_snaps}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 mt-10 smzp" >
                                <div class="jnone">
                                    <div class="left2">
                                        <h5>Punt Snaps :</h5>
                                    </div>
                                    <div class="right2">
                                        <div class="xforchild">
                                            <div>No. of Snaps</div> <input type="number" placeholder="" name="sophomore_punt_snaps" value="{{$user->sophomore_punt_snaps}}">
                                        </div>
                                        <div class="xforchild">
                                            <div>% of Perfect Snaps</div> <input type="number" placeholder="" name="sophomore_perfect_punt_snaps" value="{{$user->sophomore_perfect_punt_snaps}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- FRESHMAN YEAR -->
                <div id="freshmanTab" class="tab-pane fade">
                    <div class="col-lg-12 dfl">
                        <h2>
                            FRESHMAN YEAR
                        </h2>
                        <span class="glyphicon glyphicon-plus"></span>
                    </div>
                    <div class="col-lg-12">
                        <div class="staeSec">
                            <div class="col-lg-12 mt5 smzp"  >
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
                                            <textarea name="freshman_pat_comment" id="" cols="30" rows="3" placeholder="Comments">{{$user->freshman_pat_comment}}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 mt-10 smzp" >
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
                                                <div>Longest</div> <input type="number" placeholder="" name="freshman_fg_longest" value="{{$user->freshman_fg_longest}}">
                                            </div>
                                        </div>
                                        <div class="inpSec mt-10">
                                            <textarea name="freshman_fg_comment" id="" cols="30" rows="3" placeholder="Comments">{{$user->freshman_fg_comment}}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 mt-10 smzp" >
                                <div class="jnone">
                                    <div class="left">
                                        <h5>KO's :</h5>
                                    </div>
                                    <div class="right">
                                        <div class="xforx">
                                            <div class="xforchild">
                                                <div>No. of Ko's</div> <input type="number" placeholder="" name="freshman_kos" value="{{$user->freshman_kos}}">
                                            </div>
                                            <div class="xforchild">
                                                <div>Total Yardage</div> <input type="number" placeholder="" name="freshman_ko_total_yardage" value="{{$user->freshman_ko_total_yardage}}">
                                            </div>
                                            <div class="xforchild">
                                                <div>KO Average</div> <input type="number" placeholder="" name="freshman_ko_average" value="{{$user->freshman_ko_average}}">
                                            </div>
                                            <div class="xforchild">
                                                <div>Touchbacks</div> <input type="number" placeholder="" name="freshman_ko_touchbacks" value="{{$user->freshman_ko_touchbacks}}">
                                            </div>
                                        </div>
                                        <div class="inpSec mt-10">
                                            <textarea name="freshman_ko_comment" id="" cols="30" rows="3" placeholder="Comments">{{$user->freshman_ko_comment}}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 mt-10 smzp" >
                                <div class="jnone">
                                    <div class="left">
                                        <h5>Punts :</h5>
                                    </div>
                                    <div class="right">
                                        <div class="xforx">
                                            <div class="xforchild">
                                                <div>No. of Punts</div> <input type="number" placeholder="" name="freshman_punts" value="{{$user->freshman_punts}}">
                                            </div>
                                            <div class="xforchild">
                                                <div>Punts Average</div> <input type="number" placeholder="" name="freshman_punt_average" value="{{$user->freshman_punt_average}}">
                                            </div>
                                            <div class="xforchild">
                                                <div>Longest Punts</div> <input type="number" placeholder="" name="freshman_longest_punt" value="{{$user->freshman_longest_punt}}">
                                            </div>
                                            <div class="xforchild">
                                                <div>Total Yardage</div> <input type="number" placeholder="" name="freshman_punt_total_yardage" value="{{$user->freshman_punt_total_yardage}}">
                                            </div>
                                            <div class="xforchild">
                                                <div>1-20</div> <input type="number" placeholder="" name="freshman_punt_120" value="{{$user->freshman_punt_120}}">
                                            </div>
                                        </div>
                                        <div class="inpSec mt-10">
                                            <textarea name="freshman_punt_comment" id="" cols="30" rows="3" placeholder="Comments">{{$user->freshman_punt_comment}}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- snaps -->
                            <div class="col-lg-12  mt5 smzp" >
                                <div class="jnone">
                                    <div class="left2">
                                        <h5>40 Yard Dash :</h5>
                                    </div>
                                    <div class="right2">
                                        <div class="xforchild">
                                            <input type="number" placeholder="" name="freshman_40_yard_dash" value="{{$user->freshman_40_yard_dash}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 mt-10 smzp" >
                                <div class="jnone">
                                    <div class="left2">
                                        <h5>PAT Snaps :</h5>
                                    </div>
                                    <div class="right2">
                                        <div class="xforchild">
                                            <div>No. of Snaps</div> <input type="number" placeholder="" name="freshman_pat_snaps" value="{{$user->freshman_pat_snaps}}">
                                        </div>
                                        <div class="xforchild">
                                            <div>% of Perfect Snaps</div> <input type="number" placeholder="" name="freshman_perfect_pat_snaps" value="{{$user->freshman_perfect_pat_snaps}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 mt-10 smzp" >
                                <div class="jnone">
                                    <div class="left2">
                                        <h5>Punt Snaps :</h5>
                                    </div>
                                    <div class="right2">
                                        <div class="xforchild">
                                            <div>No. of Snaps</div> <input type="number" placeholder="" name="freshman_punt_snaps" value="{{$user->freshman_punt_snaps}}">
                                        </div>
                                        <div class="xforchild">
                                            <div>% of Perfect Snaps</div> <input type="number" placeholder="" name="freshman_perfect_punt_snaps" value="{{$user->freshman_perfect_punt_snaps}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- JUNIOR DAYS -->
                <div id="juniorDaysTab" class="tab-pane fade">
                    <div class="col-lg-12 dfl">
                        <h2>
                            JUNIOR DAYS
                        </h2>
                        <span class="glyphicon glyphicon-plus"></span>
                    </div>
                    <div class="col-lg-12">
                        <div class="txtArea mt3" >
                            <textarea name="junior_days1" id="" cols="30" rows="3" class="" placeholder="Played in junior Days If...">{{$user->junior_days1}}</textarea>
                        </div>
                        <div class="txtArea mt2" >
                            <textarea name="junior_days2" id="" cols="30" rows="3" class="" placeholder="Played in junior Days If...">{{$user->junior_days2}}</textarea>
                        </div>
                    </div>
                </div>
                <!-- OFFERS -->
                <div id="offersTab" class="tab-pane fade">
                    <div class="col-lg-12 dfl">
                        <h2>
                            OFFERS
                        </h2>
                        <span class="glyphicon glyphicon-plus"></span>
                    </div>
                    <div class="col-lg-12">
                        <div class="txtArea mt3" >
                            <textarea name="offers1" id="" cols="30" rows="3" class="" placeholder="If got an offer from any state/university">{{$user->offers1}}</textarea>
                        </div>
                        <div class="txtArea mt2" >
                            <textarea name="offers2" id="" cols="30" rows="3" class="" placeholder="If got an offer from any state/university">{{$user->offers2}}</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Videos -->
<div id="tab6" class="tab-pane fade " >
    <div class="card videost">
        <div class="row">
            <div class="col-lg-12 dfl">
                <h2>
                    VIDEOS
                </h2>
                <span class="glyphicon glyphicon-plus" data-toggle="modal" data-target="#userVideoCreateModal"></span>
            </div>
            <div class="col-lg-12 hudlSc" style="overflow: scroll;">
                <table class="table table-striped mt5">
                    <thead>
                        <tr >
                            <th class="text-center" scope="col">ID</th>
                            <th class="text-center" scope="col">Title</th>
                            <th class="text-center" scope="col">Category</th>
                            <th class="text-center" scope="col">Link</th>
                            <th class="text-center" scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody class="tbody_user_video">
                        @foreach($user->user_videos as $user_video)
                        <tr>
                            <th scope="row">{{$user_video->id}}</th>
                            <td width="22%">
                                {{$user_video->title}}
                            </td>
                            <td width="8%">{{$user_video->category}}</td>
                            <td width="33%">
                                <a href="{{$user_video->link}}" target="_blank">
                                    {{$user_video->link}}
                                </a>
                            </td>
                            <td>
                                <button type="button" class="btn btn-success btn_edit_user_video" data-id="{{$user_video->id}}"><span class="glyphicon glyphicon-edit"></span></button>
                                <button type="button" class="btn btn-danger btn_delete_user_video" data-id="{{$user_video->id}}"><span class="glyphicon glyphicon-trash"></span></button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<!-- <div class="btnDiv">
<a onclick="changeTab('tab5','tab6')"><button>Previous</button></a>
<a ><button>Finish</button></a>
</div> -->
</div>
<!-- Password Reset -->
<div id="tab7" class="tab-pane fade ">
    <div class="card">
        <div class="row">
            <div class="col-lg-4 col-lg-offset-4 ">
                <div class="row">
                    <div class="reserPass">
                        <div class="col-lg-12">
                            <h2>
                                Reset Password
                            </h2>   
                        </div>
                        <div class="">
                            <!-- <form action=""> -->
                                <div class="col-lg-12 mt3"><input type="password" placeholder="New Password" name="password"/></div>
                                <button type="submit" class="btn btnReset mt2">Save</button>
                                <!-- </form> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Save Button -->
    <!-- <label>Agreement</label>
    <input type="checkbox" name="" id="" class="checkbox_save_profile"> -->
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12">
        <div class="col-lg-6" style="float: right; margin-right: -12%;  margin-top: 3px;">
        <div style="display: flex;align-items: center; text-align:right">
         <input type="checkbox"  id="checkbox_aggere" class="checkbox_save_profile" style="margin: 0; position: relative;left: 3%;" value="{{$user->agreement_value}}" name="agreement_value"<?php
            if($user->agreement_value == 1){
                $check = isset($user->agreement_value) ? "checked" : "checked";
                    echo $check;
            }else{
                
            }
             ?>>
             <a style="color: #000; font-size: 14px;padding-right: 10px;margin: 0;text-decoration: underline; " data-toggle="modal" data-target="#Aggere">I have read and agree to the Terms & Conditions</a>
        </div>
        </div>
        </div>
    </div>
    <div class="btnDiv mainSave">
        <a><button type="submit" id="save_submit">Save</button></a>

    </div>
</div>
</div>
</div>
</form>
</div>
</div>


<!-- aggrement -->
<div id="Aggere" class="modal fade" role="dialog">
  <div class="modal-dialog" style="margin-top:13%;">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style="background-color: rgb(0, 0, 0); color:white">
        <!-- <button type="button" class="close" data-dismiss="modal" style="color: white;">&times;</button> -->
        <h4 class="modal-title">Agreement</h4>
      </div>
      <div class="modal-body">
        <p>I hereby acknowledge that all information listed on my player profile is accurate to the best of my knowledge. I will actively update any and all data points on my profile if they change over time to keep it current in order to not mis-represent information to the public and college coach personnel.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color: #0a0ae5; color:white;">Close</button>
      </div>
    </div>

  </div>
</div>

<!-- userVideoCreateModal -->
<div class="modal fade adminNDB" id="userVideoCreateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12 mhed">
                        <div style="flex:50%">
                            <h5 class="modal-title" id="exampleModalLabel">Add Videos</h5>
                        </div>
                        <div>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                    <!-- user_id -->
                    <input type="hidden" value="{{auth()->user()->id}}" name="user_id" class="user_id">
                    <!-- title -->
                    <div class="col-lg-6 mt3">
                        <input type="text" name="" id="" placeholder="Title" class="title">
                    </div>
                    <!-- category -->
                    <div class="col-lg-6 mt3">
                        <select name="" id="" class="category">
                            <option value="HUDL">HUDL</option>
                            <option value="CAMP">CAMP</option>
                            <option value="TRAINING">TRAINING</option>
                        </select>
                    </div>
                    <!-- link -->
                    <div class="col-lg-12 mt3">
                        <input type="text" name="" id="" placeholder="Video Link" class="link">
                    </div>
                    <div class="col-lg-12 mt1">
                        <h4 style="color:red; font-weight: bold;">NOTE*</h4>
                        <p>How to add video link?</p>
                        <ul>
                            <li>Step 1: Go to your hudl video</li>
                            <li>Step 2: Click on share video icon(<i class="fas fa-share"></i>) and click embed</li>
                            <li>Step 3: Copy only highlighted url from embed link for example:<img src="{{asset('img/1x/link.png')}}" width="100%"></li>
                            <li>Step 4: Paste in to video link.</li>
                        </ul>
                    </div>
                    <!-- thumbnail -->
                    <div class="col-lg-12 mt3">
                        <input type="hidden" accept="image/*" onchange="loadFile(event)" id="thumbnailInp" class="thumbnail">
                    </div>
                </div>
                <button class="saveBtn mt1 btn_insert_user_video">Save</button>
            </div>
        </div>
    </div>
</div>

<!-- userVideoEditModal -->
<div class="modal fade adminNDB" id="userVideoEditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12 mhed">
                        <div style="flex:50%">
                            <h5 class="modal-title" id="exampleModalLabel">Add Videos</h5>
                        </div>
                        <div>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                    <!-- user_id -->
                    <input type="hidden" value="{{auth()->user()->id}}" name="user_id" class="user_id">
                    <!-- title -->
                    <div class="col-lg-6 mt3">
                        <input type="text" name="" id="" placeholder="Title" class="title">
                    </div>
                    <!-- category -->
                    <div class="col-lg-6 mt3">
                        <select name="" id="" class="category">
                            <option value="HUDL">HUDL</option>
                            <option value="CAMP">CAMP</option>
                            <option value="TRAINING">TRAINING</option>
                        </select>
                    </div>
                    <!-- link -->
                    <div class="col-lg-12 mt3">
                        <input type="text" name="" id="" placeholder="Video Link" class="link">
                    </div>
                    <!-- thumbnail -->
                    <div class="col-lg-12 mt3">
                        <input type="hidden" accept="image/*" onchange="loadFile(event)" id="thumbnailInp" name="thumbnail">
<!-- <div class="fakeInpthum">
<p>No File Chosen</p>
<button class="btn">Upload</button>
</div> -->
<!-- <img id="output" width="100%" height=""/> -->
</div>
</div>
<button class="saveBtn mt1 btn_update_user_video">Save</button>
</div>
</div>
</div>
</div>
</div>

<!-- starRatingCreateModal -->
<div class="modal fade adminNDB" id="starRatingCreateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12 mhed">
                        <div style="flex:50%">
                            <h5 class="modal-title" id="exampleModalLabel">Star Rating</h5>
                        </div>
                        <div>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-12 ">
                        <div class="row" id="clubrating">
                            <div class="col-lg-12">
                                <!-- user_id -->
                                <input type="hidden" value="{{auth()->user()->id}}" name="user_id" class="user_id">
                                <!-- club_name -->
                                <div class="col-lg-12 mt3"><input type="text" placeholder="Club Name" name="club_name" class="club_name"></div>
                                <!-- rating -->
                                <div class="col-lg-12 mt3">
                                    <div class="ratingInp">
                                        <label>Rating</label>
                                        <div class="rate">
                                            <input type="radio" id="rating10D" name="rating" class="rating" value="10" /><label for="rating10D" title="5 stars"></label>
                                            <input type="radio" id="rating9D" name="rating" class="rating" value="9" /><label class="half" for="rating9D" title="4 1/2 stars"></label>
                                            <input type="radio" id="rating8D" name="rating" class="rating" value="8" /><label for="rating8D" title="4 stars"></label>
                                            <input type="radio" id="rating7D" name="rating" class="rating" value="7" /><label class="half" for="rating7D" title="3 1/2 stars"></label>
                                            <input type="radio" id="rating6D" name="rating" class="rating" value="6" /><label for="rating6D" title="3 stars"></label>
                                            <input type="radio" id="rating5D" name="rating" class="rating" value="5" /><label class="half" for="rating5D" title="2 1/2 stars"></label>
                                            <input type="radio" id="rating4D" name="rating" class="rating" value="4" /><label for="rating4D" title="2 stars"></label>
                                            <input type="radio" id="rating3D" name="rating" class="rating" value="3" /><label class="half" for="rating3D" title="1 1/2 stars"></label>
                                            <input type="radio" id="rating2D" name="rating" class="rating" value="2" /><label for="rating2D" title="1 star"></label>
                                            <input type="radio" id="rating1D" name="rating" class="rating" value="1" /><label class="half" for="rating1D" title="1/2 star"></label>
                                        </div>
                                    </div>
                                </div>
                                <!-- last_attended -->
                                <div class="col-lg-12 mt3"><input type="date" placeholder="Last attended" name="last_attended" class="last_attended"></div>
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-12">
                            <button class="saveBtn mt1 btn_insert_star_rating">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- starRatingEditModal -->
<div class="modal fade adminNDB" id="starRatingEditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12 mhed">
                        <div style="flex:50%">
                            <h5 class="modal-title" id="exampleModalLabel">Star Rating</h5>
                        </div>
                        <div>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <!-- user_id -->
                        <input type="hidden" value="{{auth()->user()->id}}" name="user_id" class="user_id">
                        <!-- club_name -->
                        <div class="col-lg-12 mt3"><input type="text" placeholder="Club Name" name="club_name" class="club_name"></div>
                        <!-- rating -->
                        <div class="col-lg-12 mt3">
                            <div class="ratingInp">
                                <label>Rating</label>
                                <div class="rate">
                                    <input type="radio" id="rating10D2" name="rating" class="rating" value="10" /><label for="rating10D2" title="5 stars"></label>
                                    <input type="radio" id="rating9D2" name="rating" class="rating" value="9" /><label class="half" for="rating9D2" title="4 1/2 stars"></label>
                                    <input type="radio" id="rating8D2" name="rating" class="rating" value="8" /><label for="rating8D2" title="4 stars"></label>
                                    <input type="radio" id="rating7D2" name="rating" class="rating" value="7" /><label class="half" for="rating7D2" title="3 1/2 stars"></label>
                                    <input type="radio" id="rating6D2" name="rating" class="rating" value="6" /><label for="rating6D2" title="3 stars"></label>
                                    <input type="radio" id="rating5D2" name="rating" class="rating" value="5" /><label class="half" for="rating5D2" title="2 1/2 stars"></label>
                                    <input type="radio" id="rating4D2" name="rating" class="rating" value="4" /><label for="rating4D2" title="2 stars"></label>
                                    <input type="radio" id="rating3D2" name="rating" class="rating" value="3" /><label class="half" for="rating3D2" title="1 1/2 stars"></label>
                                    <input type="radio" id="rating2D2" name="rating" class="rating" value="2" /><label for="rating2D2" title="1 star"></label>
                                    <input type="radio" id="rating1D2" name="rating" class="rating" value="1" /><label class="half" for="rating1D2" title="1/2 star"></label>
                                </div>
                            </div>
                        </div>
                        <!-- last_attended -->
                        <div class="col-lg-12 mt3"><input type="date" placeholder="Last attended" name="last_attended" class="last_attended"></div>
                    </div>
                </div> 
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-12">
                            <button class="saveBtn mt1 btn_update_star_rating">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- GLOBAL VARS -->
<script>
    var star_rating = "";
    var user_video = "";
    var etr = "";
    var b64 = "";
</script>

<!-- BLOB TO BASE64 -->
<script>
    function readFile(el) {
        if (el[0].files && el[0].files[0]) {

            var FR= new FileReader();

            FR.addEventListener("load", function(e) {
                b64 = e.target.result;
            }); 

            FR.readAsDataURL( el[0].files[0] );
        }
    }
    $('#userVideoCreateModal .thumbnail').on('change', function(){
        readFile($(this));
    });
    $('#userVideoEditModal .thumbnail').on('change', function(){
        readFile($(this));
    });
</script>

<!-- FETCH STAR RATING -->
<script>
    function fetch_star_rating(id){
// fetch star_rating
$.ajax({
    url: "<?php echo(route('star_rating.show', 1)); ?>",
    type: 'GET',
    async: false,
    data: {id: id},
    dataType: 'JSON',
    success: function (data) {
        star_rating = data.star_rating;
    }
});
}
</script>

<!-- FETCH USER VIDEO -->
<script>
    function fetch_user_video(id){
// fetch user_video
$.ajax({
    url: "<?php echo(route('user_video.show', 1)); ?>",
    type: 'GET',
    async: false,
    data: {id: id},
    dataType: 'JSON',
    success: function (data) {
        user_video = data.user_video;
    }
});
}
</script>

<!-- INSERT STAR RATING -->
<script>
    $('.btn_insert_star_rating').on('click', function(){
        var user_id = $('#starRatingCreateModal .user_id').val();
        var club_name = $('#starRatingCreateModal .club_name').val();
        var rating = "";
        $('#starRatingCreateModal .rating').each(function(i){
            if($(this).is(':checked')){
                rating = $(this).val() / 2;
            }
        });
        var last_attended = $('#starRatingCreateModal .last_attended').val();

        $.ajax({
            url: "<?php echo(route('star_rating.store')); ?>",
            type: 'POST',
            async: false,
            data: {
                "_token": "{{ csrf_token() }}",
                user_id: user_id,
                club_name: club_name,
                rating: rating,
                last_attended: last_attended
            },
            dataType: 'JSON',
            success: function (data) {
                var rating_div = "";
                var count = 0;
                for(var i = 0; i < parseInt(data.rating); i++){
                    rating_div += `<img src="{{asset('img/1x/starfull-8.png')}}" style="height:20px; width: 20px;" alt="">`;
                    count += 1;
                }
                if(parseFloat(data.rating % 1) > 0){
                    rating_div += `<img src="{{asset('img/1x/dim-starhalf-8.png')}}" style="height:20px; width: 20px;" alt="">`;
                    count += 1;
                }
                if(count < 5){
                    for(var i = count; i < 5; i++){
                        rating_div += `<img src="{{asset('img/1x/dim-starfull-8.png')}}" style="height:20px; width: 20px;" alt="">`;
                    }
                }

                $('.tbody_star_rating').append(
                    `<tr>
                    <th scope="row">`+data.id+`</th>
                    <td>
                    `+data.club_name+`
                    </td>
                    <td>`+data.last_attended+`</td>
                    <td>
                    `+rating_div+`
                    </td>
                    <td>
                    <button type="button" class="btn btn-success btn_edit_star_rating" data-id="`+data.id+`"><span class="glyphicon glyphicon-edit"></span></button>
                    <button type="button" class="btn btn-danger btn_delete_star_rating" data-id="`+data.id+`"><span class="glyphicon glyphicon-trash"></span></button>
                    </td>
                    </tr>`
                    );
                $('#starRatingCreateModal .club_name').val('');
                $('#starRatingCreateModal .last_attended').val('');
                $('#starRatingCreateModal .rating').each(function(i){
                    $(this).prop('checked', false);
                });
                $('#starRatingCreateModal').modal('hide');
            }
        });
    });
</script>

<!-- INSERT USER VIDEO -->
<script>
    $('.btn_insert_user_video').on('click', function(){
        var user_id = $('#userVideoCreateModal .user_id').val();
        var title = $('#userVideoCreateModal .title').val();
        var category = $('#userVideoCreateModal .category').val();
        var link = $('#userVideoCreateModal .link').val();
        var thumbnail = (b64 != "") ? b64 : "";

        $.ajax({
            url: "<?php echo(route('user_video.store')); ?>",
            type: 'POST',
            async: false,
            data: {
                "_token": "{{ csrf_token() }}",
                user_id: user_id,
                title: title,
                category: category,
                link: link,
                thumbnail: thumbnail
            },
            dataType: 'JSON',
            success: function (data) {
                var url = `<?php echo(asset('img/thumbnails') . '/temp'); ?>`;
                if(data.thumbnail){
                    url = url.replace('temp', data.thumbnail);
                }
                else{
                    url = `<?php echo(asset('img/noimg.jpg')); ?>`;
                }

                $('.tbody_user_video').append(
                    `<tr>
                    <th scope="row">`+data.id+`</th>
                    <td width="22%">
                    `+data.title+`
                    </td>
                    <td width="8%">`+data.category+`</td>
                    <td>
                    <a href="`+data.link+`" target="_blank">
                    `+data.link+`
                    </a>
                    </td>
                    <td width="33%">
                    <div class="img">
                    <img src="`+url+`" height="" width="" alt="">
                    </div>
                    </td>
                    <td width="22%">
                    <button type="button" class="btn btn-success btn_edit_user_video" data-id="`+data.id+`"><span class="glyphicon glyphicon-edit"></span></button>
                    <button type="button" class="btn btn-danger btn_delete_user_video" data-id="`+data.id+`"><span class="glyphicon glyphicon-trash"></span></button>
                    </td>
                    </tr>`
                    );
                $('#userVideoCreateModal .title').val('');
                $('#userVideoCreateModal .category').val('');
                $('#userVideoCreateModal .link').val('');
                $('#userVideoCreateModal .thumbnail').val('');
                $('#userVideoCreateModal').modal('hide');
            }
        });
    });
</script>

<!-- EDIT STAR RATING -->
<script>
    $('.tbody_star_rating').on('click', '.btn_edit_star_rating', function(){
        var id = $(this).data('id');
        fetch_star_rating(id);
// $('#starRatingEditModal .user_id').val('');
$('#starRatingEditModal .club_name').val(star_rating.club_name);
$('#starRatingEditModal .last_attended').val(star_rating.last_attended);
$('#starRatingEditModal .rating').each(function(i){
    if($(this).val() == star_rating.rating * 2){
        $(this).prop('checked', true);
    }
});
etr = $(this).parent().parent();
$('#starRatingEditModal').modal('show');

});
</script>

<!-- EDIT USER VIDEO -->
<script>
    $('.tbody_user_video').on('click', '.btn_edit_user_video', function(){
        var id = $(this).data('id');
        fetch_user_video(id);
// $('#userVideoEditModal .user_id').val('');
$('#userVideoEditModal .title').val(user_video.title);
$('#userVideoEditModal .category [value='+user_video.category+']').prop('selected', true);
$('#userVideoEditModal .link').val(user_video.link);
etr = $(this).parent().parent();
$('#userVideoEditModal').modal('show');

});
</script>

<!-- UPDATE STAR RATING -->
<script>
    $('.btn_update_star_rating').on('click', function(){
        var user_id = $('#starRatingEditModal .user_id').val();
        var club_name = $('#starRatingEditModal .club_name').val();
        var rating = "";
        $('#starRatingEditModal .rating').each(function(i){
            if($(this).is(':checked')){
                rating = $(this).val() / 2;
            }
        });
        var last_attended = $('#starRatingEditModal .last_attended').val();

        var url = `<?php echo(route('star_rating.update', 'temp')); ?>`;
        url = url.replace('temp', star_rating.id);
        $.ajax({
            url: url,
            type: 'PUT',
            async: false,
            data: {
                "_token": "{{ csrf_token() }}",
                user_id: user_id,
                club_name: club_name,
                rating: rating,
                last_attended: last_attended
            },
            dataType: 'JSON',
            success: function (data) {
                etr.remove();
                var rating_div = "";
                var count = 0;
                for(var i = 0; i < parseInt(data.rating); i++){
                    rating_div += `<img src="{{asset('img/1x/starfull-8.png')}}" style="height:20px; width: 20px;" alt="">`;
                    count += 1;
                }
                if(parseFloat(data.rating % 1) > 0){
                    rating_div += `<img src="{{asset('img/1x/dim-starhalf-8.png')}}" style="height:20px; width: 20px;" alt="">`;
                    count += 1;
                }
                if(count < 5){
                    for(var i = count; i < 5; i++){
                        rating_div += `<img src="{{asset('img/1x/dim-starfull-8.png')}}" style="height:20px; width: 20px;" alt="">`;
                    }
                }

                $('.tbody_star_rating').append(
                    `<tr>
                    <th scope="row">`+data.id+`</th>
                    <td>
                    `+data.club_name+`
                    </td>
                    <td>`+data.last_attended+`</td>
                    <td>
                    `+rating_div+`
                    </td>
                    <td>
                    <button type="button" class="btn btn-success btn_edit_star_rating" data-id="`+data.id+`"><span class="glyphicon glyphicon-edit"></span></button>
                    <button type="button" class="btn btn-danger btn_delete_star_rating" data-id="`+data.id+`"><span class="glyphicon glyphicon-trash"></span></button>
                    </td>
                    </tr>`
                    );
                $('#starRatingEditModal').modal('hide');
            }
        });

    });
</script>

<!-- UPDATE USER VIDEO -->
<script>
    $('.btn_update_user_video').on('click', function(){
        var user_id = $('#userVideoEditModal .user_id').val();
        var title = $('#userVideoEditModal .title').val();
        var category = $('#userVideoEditModal .category').val();
        var link = $('#userVideoEditModal .link').val();
        var rating = "";
        var thumbnail = (b64 != "") ? b64 : "";

        var url = `<?php echo(route('user_video.update', 'temp')); ?>`;
        url = url.replace('temp', user_video.id);
        $.ajax({
            url: url,
            type: 'PUT',
            async: false,
            data: {
                "_token": "{{ csrf_token() }}",
                user_id: user_id,
                title: title,
                category: category,
                link: link,
                thumbnail: thumbnail,
            },
            dataType: 'JSON',
            success: function (data) {
                etr.remove();
                var url = `<?php echo(asset('img/thumbnails') . '/temp'); ?>`;
                if(data.thumbnail){
                    url = url.replace('temp', data.thumbnail);
                }
                else{
                    url = `<?php echo(asset('img/noimg.jpg')); ?>`;
                }

                $('.tbody_user_video').append(
                    `<tr>
                    <th scope="row">`+data.id+`</th>
                    <td width="22%">
                    `+data.title+`
                    </td>
                    <td width="8%">`+data.category+`</td>
                    <td>
                    <a href="`+data.link+`" target="_blank">
                    `+data.link+`
                    </a>
                    </td>
                    <td width="33%">
                    <div class="img">
                    <img src="`+url+`" height="" width="" alt="">
                    </div>
                    </td>
                    <td width="22%">
                    <button type="button" class="btn btn-success btn_edit_user_video" data-id="`+data.id+`"><span class="glyphicon glyphicon-edit"></span></button>
                    <button type="button" class="btn btn-danger btn_delete_user_video" data-id="`+data.id+`"><span class="glyphicon glyphicon-trash"></span></button>
                    </td>
                    </tr>`
                    );
                $('#userVideoEditModal .title').val('');
                $('#userVideoEditModal .category').val('');
                $('#userVideoEditModal .link').val('');
                $('#userVideoEditModal .thumbnail').val('');
                $('#userVideoEditModal').modal('hide');
            }
        });

    });
</script>

<!-- DELETE STAR RATING -->
<script>
    $('.tbody_star_rating').on('click', '.btn_delete_star_rating', function(){
        var id = $(this).data('id');
        var url = `<?php echo(route('star_rating.destroy', 'temp')); ?>`;
        url = url.replace('temp', id);
        var element_to_remove = $(this).parent().parent();

        $.ajax({
            url: url,
            type: 'DELETE',
            data: {
                "_token": "{{ csrf_token() }}"
            },
            dataType: 'JSON',
            async: false,
            success: function (data) {
                element_to_remove.remove();
            },
            error: function (data) {
                element_to_remove.remove();
            }
        });
    });
</script>

<!-- DELETE USER VIDEO -->
<script>
    $('.tbody_user_video').on('click', '.btn_delete_user_video', function(){
        var id = $(this).data('id');
        var url = `<?php echo(route('user_video.destroy', 'temp')); ?>`;
        url = url.replace('temp', id);
        var element_to_remove = $(this).parent().parent();

        $.ajax({
            url: url,
            type: 'DELETE',
            data: {
                "_token": "{{ csrf_token() }}"
            },
            dataType: 'JSON',
            async: false,
            success: function (data) {
                element_to_remove.remove();
            },
            error: function (data) {
                element_to_remove.remove();
            }
        });
    });
</script>

<script>
    $(document).ready(function(){
        var src = {!!json_encode($user)!!};
        console.log(src);
        if(src.image != '' || src.image != null){
//
setTimeout(() => {
    $('.img-upload-btn').css({
        'background':`url(public/img/users/${src.image})`,
        'background-position-x': '-15px',
        'background-size': 'cover',
    })
}, 100);
}
})
</script>
@endsection