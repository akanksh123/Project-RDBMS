@extends('layout.navigate')
@section('styling')

<style>
html,
body {
    background-color: wheat;
}
#container {
    width: 100%;

    margin-top: 1vh;
    border-top: #55d6aa solid 30px;
    border-bottom: #55d6aa solid 30px;
}
#slider {
    overflow: hidden;
}
#slider img {
    width: 20%;
    height: 450px;
    float: left;
}
#slider figure {
    position: relative;
    width: 500%;
    margin: 0;
    left: 0;
    animation-name: slider;
    animation-duration: 15s;
    animation-iteration-count: infinite;
}

@keyframes slider {
    0% {
        left: 0%;
    }
    20% {
        left: 0%;
    }
    25% {
        left: -100%;
    }
    45% {
        left: -100%;
    }

    50% {
        left: -200%;
    }
    70% {
        left: -200%;
    }
    75% {
        left: -300%;
    }
    95% {
        left: -300%;
    }
    100% {
        left: -400%;
    }
}
#about {
    font-family: Arial, Helvetica, sans-serif;
    font-size: 150%;
    color: #444;
    text-align: center;
}
.reduce {
    width: 50%;
    margin-left: 0;
}
</style>
@endsection
@section('name')
<div class="logo"style="margin-left:20px;height:170px;width:100%;margin-top:15px;">
        <div style="width:0;float:left;"><img src="{{asset('images/logo.png')}}" style="height:150px;"/></div >
        <div style="margin-top:30px;margin-left:150px;float:left;">
        <p style="font-size: 50px;text-align:center;letter-spacing:10px;"><b>RTO</b></p>
        <p style="font-size: 40px;">Government Of India</p></div>
        <div style="width:170px;float:right;margin-right:50px;"><img src="{{asset('images/india3.jpg ')}}" style="wdith:150px;height:150px;border-radius:100%;"/></div >
      </div>
@endsection
@section('contents')
   <div id="container">
      <div id="slider"class="sliding">
        <figure>
          <img src="{{asset('images/rto6.jpg')}}" />
          <img src="{{asset('images/rto5.jpg')}}" />
          <img src="{{asset('images/rto9.jpg')}}" />
          <img src="{{asset('images/rto11.jpg')}}" />
          <img src="{{asset('images/rto6.jpg')}}" />
        </figure>
      </div>
    </div>
   
@endsection
@section('footer')
<div class="initiatives"style="margin-top:30px;">
      <div class="first">
      <div style="float:left;"><img src="{{asset('images/aadhar.png')}}" /></div >
      <div style="float:left;"><img src="{{asset('images/swachhbharat.png')}}" /></div >
      <div style="float:left;"><img src="{{asset('images/make.jpg')}}" /></div >
      <div style="float:left;"><img src="{{asset('images/digitalindia.jpg')}}" /></div >
      <div  style="float:right;" ><img src="{{asset('images/skill-india.jpg')}}" /></div >
      
      </div>
      </div>
@endsection