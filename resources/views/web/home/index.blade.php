@extends('web.layouts.master')

@section('content')
<div class="mainDiv my-scrollbar"  data-scrollbar>
    <!-- main -->

    <div class="homeMain">
      <div class="banner" style>
          <div class="csBackI wow bounceIn" data-wow-delay="1s" data-wow-duration="1s">
              <img src="{{asset('img/SVG/playAfterBack.svg')}}" height="" width="100%" alt="">
          </div>
          <div class="msLadyTab glowing" >

              <svg id="Layer_2" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" height="100%" width="100%" viewBox="0 0 1516.455 718.839">
                <g id="Layer_1" data-name="Layer 1">
                  <path id="Path_9"  class="wow bounceIn" data-name="Path 9" d="M202.85,4.21q56.49-.56,86.86,6.21A186.72,186.72,0,0,1,347.26,33.9q44.48,26.58,72,80.33A253.65,253.65,0,0,1,447.42,229q.49,51.35-15.25,94.47t-45.33,74.52a203.731,203.731,0,0,1-70.77,48.57q-41.18,17.19-90.31,17.66l-18.42.18L207,426.69l16.79-.17q41.55-.4,76.41-14.76a172.111,172.111,0,0,0,60-40.82,179.63,179.63,0,0,0,38.38-62.5q13.26-36.06,12.85-79a217.451,217.451,0,0,0-11-65.91,199.912,199.912,0,0,0-29.73-58.06q-19.1-25.5-44-40.41a167,167,0,0,0-49.32-19.58q-25.86-5.67-74.16-5.21L36.38,41.86l5.09,522.37-36,.35L0,6.19Zm3.77,386.45-.33-34.39q37.86-.36,68.42-15.4a112.25,112.25,0,0,0,47.69-43.46Q339.52,269,339.14,230.1A133.779,133.779,0,0,0,324,169.25q-14.82-28.73-39.52-43.42-27.18-15.7-80.6-15.19l-96.41,1,4.41,451.95-36,.36L71.12,77.55l132.43-1.29q41.55-.41,63,3.58a109.69,109.69,0,0,1,38.73,14.87A131,131,0,0,1,342,128.85a162.83,162.83,0,0,1,24.42,47.56,178.489,178.489,0,0,1,8.71,53.34q.48,49.54-21.17,85.88T293.7,371.08q-38.57,19.11-87.08,19.58ZM182.3,562.86l-34.39.33-4-415.93,60.38-.59q42.57-.42,71.35,21.52t29.18,63.89q.41,42.57-27.92,65.16t-70.92,23l-.35-36q32.34-.32,47.06-12.76T267.12,234q-.28-28.5-12.88-40.07T204.59,182.7l-26,.25Z" fill="#f5a801"/>
                  <path id="Path_10" class="wow bounceIn" data-name="Path 10" d="M516,559.6l-31.11.3L479.39,1.51,510.5,1.2ZM541.61.9,571.7.61,577.15,559l-30.09.3Zm61-.6L633.72,0l5.45,558.4-31.11.3Z" fill="#f5a801"/>
                  <path id="Path_11" class="wow bounceIn" data-name="Path 11" d="M1066.57,554.23,1065,394.16q-.37-38.9-3.37-63.43t-9.76-42q-6.8-17.44-20-37a181,181,0,0,0-90.45-69.74,161.84,161.84,0,0,0-55.26-9.29,173,173,0,0,0-90.33,25.86,184.86,184.86,0,0,0-88.21,159.51,179.72,179.72,0,0,0,91.49,155.4q41.88,23.65,92.24,23.15,8.6-.08,26-5.37l.29,29.48q-8.37,3.35-26,3.53-57.72.55-107.22-26.69T706,463.17a197.61,197.61,0,0,1-29.46-103.09A212.357,212.357,0,0,1,804.61,162.41a205.521,205.521,0,0,1,81.3-17.27q50-.49,95.94,23.78A208.63,208.63,0,0,1,1056.9,235q16.61,23.37,24.48,43.13t11.11,47.67q3.24,27.89,3.69,73.92l1.5,154.23Zm-31.73.31-31.11.3L1002,381.37q-.37-38.65-5-57.33t-17-37.17A115.739,115.739,0,0,0,938.37,250a110.64,110.64,0,0,0-111.43,3.44,119.77,119.77,0,0,0-42.11,44.28,118.51,118.51,0,0,0-15.17,59.87Q770,389.75,786,416.07a113.69,113.69,0,0,0,43.39,41.3A119.92,119.92,0,0,0,889.1,472a14.72,14.72,0,0,1,7.39,1.77q13.49-3.21,20.21-5.34l.32,32q-11.22,4.21-27.6,4.37a146.27,146.27,0,0,1-74.9-19.23,149,149,0,0,1-55.08-53.71,143.771,143.771,0,0,1-20.89-74A150.419,150.419,0,0,1,758,281.39a152.26,152.26,0,0,1,53.9-56.21,142.9,142.9,0,0,1,74.62-21.3q34-.33,66.9,17.16t52.66,47q16.4,23.58,21.54,46.77t5.62,72.92Zm-63.66.62-27.63.27-1.74-178.49q-.42-42.37-12.67-60.47t-41.73-17.82q-25,.25-40.47,16.47t-15.26,41.81q.24,24.15,16.26,39.55t40.57,15.16a20,20,0,0,1,9.23,1.74,178.121,178.121,0,0,0,18.37-5.28l.29,29.09q-10.83,3-21.85,5.32a7.63,7.63,0,0,0-3.2-1.31,18.005,18.005,0,0,0-2.56-.29q-35.91.36-61.89-24.23t-26.33-59.56q-.36-37,24.69-63.11t59.9-26.45q47.76-.46,65.76,27.81t18.49,77.82Z" fill="#f5a801"/>
                  <path id="Path_12" class="wow bounceIn" data-name="Path 12" d="M1173.38,150.72l2,208q.67,69.6,40.71,112.81T1324.52,514q25.8-.24,39-2.31t28-10.14q.42,43.79-13,68.35t-37.43,34.22q-24.08,9.65-60.09,10-48.51.48-78.08-8.45l-.28-28.45q43.93,12.87,72.18,12.6,39.72-.39,59.87-12.15t26-39.87q-12.46,5.25-39.29,5.51-53.07.51-93.25-21.82t-61.75-61q-21.59-38.68-22-85.56L1142.27,151Zm276.74-2.7,3.16,323.62q.53,53.83-10.47,91.3T1410.13,623q-21.68,22.63-54.43,33.09T1279.14,667q-43.4.42-75.6-6l-.27-27.64q35.91,8.86,78.08,8.45,90.27-.87,119.42-54.8a137.931,137.931,0,0,0,17.44-49q4.33-27,3.76-86.94-14.19,15.81-41.23,23.79a193.279,193.279,0,0,1-53,8.25q-55.47.54-87.64-34.38t-32.83-102.09l-1.92-196.22,31.12-.3,1.86,191.18q1.1,111.56,87.27,110.72,96.4-.94,95.5-93.26l-2-210.42Zm31.73-.31,31.11-.3,3.48,356.37q.48,48.72-14.7,88.06a188.1,188.1,0,0,1-44.27,67.79q-29.1,28.43-69.58,43.56t-90.64,15.63q-42.16.4-93.22-7.49l-.25-26q34.44,8.05,83.12,7.58,94.71-.93,147-51.08t51.27-153.73Zm-93.75.92,2,199.57q.71,72.06-63,72.67-31.52.31-44.52-21.06t-13.4-62.3l-1.84-187.7,31.12-.31,1.85,189.55q.3,30.49,6.34,41.59t21.81,10.95q16.77-.16,23.73-12.21t6.68-39.27L1357,148.93Z" fill="#f5a801"/>
                </g>
              </svg>
              <img src="{{asset('img/SVG/with.svg')}}" height=" " width="100% " alt=" " >
              <img src="{{get_main_logo()}}" height="" width="100%" alt="" >
          </div>
      </div>
      <div class="container-xxl playWin text-center ">
        <h1 class="wow fadeInUp" data-wow-delay="1s" data-wow-duration="0.5s">PLAY AND WIN !</h1>
        <h6 class="wow fadeInDown" data-wow-delay="1s" data-wow-duration="0.5s">
          JUST FOLLOW<br/>
          THESE EASY STEPS
        </h6>
      </div>

      <div class="scrollSec mt2 ">
          <div class="stepDiv step1 wow fadeInUp" data-wow-delay="1s" data-wow-duration="1s">
            <div class="container-xxl ">
              <div class="row d-flex ">
                <div class=" fl-30 ">
                  <div class="imgNo mb6 ">
                    <img src="{{asset('img/1x/one.png')}}" height="100% " width="100% "alt=" " >
                    <div class="stepp">
                      <span class="wow fadeInLeft"  data-wow-delay="1s" data-wow-duration="1s">STEP</span>
                    </div>
                  </div>
                </div>
                <div class=" fl-70 ">
                  <div class="sThro ">
                    <h1 class="wow fadeInUp" data-wow-delay="1s" data-wow-duration="1s">{{$banners[0]->title}}</h1>
                  </div>
                  <div class="sctImg text-right ">
                    <img src="{{asset('img/banners').'/'.$banners[0]->image }}" height=" " width=" " alt=" " class="wow flipInY" data-wow-delay="0.75s" data-wow-duration="1s">
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="stepDiv step2 wow fadeInUp" data-wow-delay="1s" data-wow-duration="1s">
            <div class="container-xxl ">
              <div class="row d-flex ">
                <div class=" fl-30 ">
                  <div class="imgNo mb6 ">
                    <img src="{{asset('img/1x/two.png')}}" height="100% " width="100% " alt=" " class="wow fadeInLeft"  data-wow-delay="1s" data-wow-duration="1s">
                    <div class="stepp">
                      <span class="wow fadeInLeft"  data-wow-delay="1s" data-wow-duration="1s">STEP</span>
                    </div>
                  </div>
                </div>
                <div class=" fl-70 ">
                  <div class="sThro ">
                    <h1 class="wow fadeInUp" data-wow-delay="1s" data-wow-duration="1s">{{$banners[1]->title}}</h1>
                  </div>
                  <div class="sctImg text-right ">
                    <img src="{{asset('img/banners').'/'.$banners[1]->image }}" height=" " width=" " alt=" " class="wow flipInY" data-wow-delay="0.75s" data-wow-duration="1s">
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="stepDiv step3 wow fadeInUp" data-wow-delay="1s" data-wow-duration="1s">
            <div class="container-xxl ">
              <div class="row d-flex ">
                <div class=" fl-30 ">
                  <div class="imgNo mb6 ">
                    <img src="{{asset('img/1x/three.png')}}" height="100% " width="100% "alt=" " class="wow fadeInLeft"  data-wow-delay="1s" data-wow-duration="1s">
                    <div class="stepp">
                      <span class="wow fadeInLeft"  data-wow-delay="1s" data-wow-duration="1s">STEP</span>
                    </div>
                  </div>
                </div>
                <div class=" fl-70 ">
                  <div class="sThro ">
                    <h1 class="wow fadeInUp" data-wow-delay="1s" data-wow-duration="1s">{{$banners[2]->title}}</h1>
                  </div>
                  <div class="sctImg text-right ">
                    <img src="{{asset('img/banners').'/'.$banners[2]->image }}" height=" " width=" " alt="" class="wow flipInY" data-wow-delay="0.75s" data-wow-duration="1s">
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="stepDiv step4 wow fadeInUp" data-wow-delay="1s" data-wow-duration="1s">
            <div class="container-xxl ">
              <div class="row d-flex ">
                <div class=" fl-30 ">
                  <div class="imgNo mb6 ">
                    <img src="{{asset('img/1x/four.png')}}" height="100% " width="100% "alt=" " class="wow fadeInLeft"  data-wow-delay="1s" data-wow-duration="1s">
                    <div class="stepp">
                      <span class="wow fadeInLeft"  data-wow-delay="1s" data-wow-duration="1s">STEP</span>
                    </div>
                  </div>
                </div>
                <div class=" fl-70 ">
                  <div class="sThro ">
                    <h1 class="wow fadeInUp" data-wow-delay="1s" data-wow-duration="1s">{{$banners[3]->title}}</h1>
                  </div>
                  <div class="sctImg text-right ">
                    <img src="{{asset('img/banners').'/'.$banners[3]->image }}" height=" " width=" " alt=" " class="wow flipInY" data-wow-delay="0.75s" data-wow-duration="1s">
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="stepDiv step5 wow fadeInUp" data-wow-delay="1s" data-wow-duration="1s">
            <div class="container-xxl ">
              <div class="row d-flex ">
                <div class=" fl-30 ">
                  <div class="imgNo mb6 ">
                    <img src="{{asset('img/1x/five.png')}}" height="100% " width="100% "alt=" " class="wow fadeInLeft"  data-wow-delay="1s" data-wow-duration="1s">
                    <div class="stepp">
                      <span class="wow fadeInLeft"  data-wow-delay="1s" data-wow-duration="1s">STEP</span>
                    </div>
                  </div>
                </div>
                <div class=" fl-70 ">
                  <div class="sThro ">
                    <h1 class="wow fadeInUp" data-wow-delay="1s" data-wow-duration="1s">{{$banners[4]->title}}</h1>
                  </div>
                  <div class="sctImg text-right ">
                    <img src="{{asset('img/banners').'/'.$banners[4]->image }}" height=" " width=" " alt=" " class="wow flipInY" data-wow-delay="0.75s" data-wow-duration="1s">
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>

    <!-- mainEnd -->

@endsection
