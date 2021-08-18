@extends('web.layouts.master')
@section('content')


<div class="faq-main">
    <div class="faq-banner">
        <h1>FAQ's</h1>
    </div>
  <div class="container-xxl faq-content text-center">


    @foreach ($faqs as $faq )
    <div class="accordion" id="accordionPanelsStayOpenExample">

     <div class="accordion-item rounded">
    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
     <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne{{$faq->id}}" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
      {{$faq->question}}
    </button>
   </h2>
   <div div id="panelsStayOpen-collapseOne{{$faq->id}}" class="accordion-collapse collapse {{$loop->index == 0 ? 'show' : ''}}" aria-labelledby="panelsStayOpen-headingOne">
  <div class="accordion-body">
      {{$faq->answer}}
  </div>
   </div>
   </div>
      </div>
      @endforeach



</div>

</div>
@endsection
