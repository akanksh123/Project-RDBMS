<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>RTO India</title>
    <link rel="icon" type="image/png"href="{{asset('images/flag.png')}}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('external/main.css')}}" />
    {{-- <script src="main.js"></script> --}}
    <style>
    .first div{
     width:20%; 
      background-color: #55d6aa;
    }
    .first div img{
      height:130px;
      
      margin-right:4%;
      margin-top:20px;
      margin-bottom:20px;
      width:97%;
    }
    </style>
      @yield('styling')
    
  </head>
  <body>
   
  <div >
  <nav style="justify-content: flex-end;">
     
      <ul class="nav-links">
      @guest
        <li style="margin-left:100px;"><a href="/home">Home</a></li>

        <li style="margin-left:60px;">
          <a href="#"
            >Services
            <span class="arrow">&#x25BC; </span>
          </a>
          <ul class="submenu">
            <li><a href="{{ route('login') }}">Vehicle Registration</a></li>
            <li><a href="{{ route('login') }}">License Services</a></li>
          </ul>
        </li>

        <li style="margin-left:60px;"><a href="/contact">Contact</a></li>
        <li style="margin-left:60px;margin-right: 80px;"><a href="/about">About</a></li>

        
        <li style="margin-right:30px;margin-left:0;">
        <a class="nav-link" href="{{ route('login') }}">{{ __('Login/Register') }}</a>
        </li>
        {{-- @if (Route::has('register'))
        <li class="nav-item">
        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
        </li>
        @endif --}}
         @else
         <li style="margin-left:100px;"><a href="/home1">Home</a></li>

        <li style="margin-left:60px;">
          <a href="#"
            >Services
            <span class="arrow">&#x25BC; </span>
          </a>
          <ul class="submenu">
            <li><a href="/vehicle">Vehicle Registration</a></li>
            <li><a href="/license">License Services</a></li>
          </ul>
        </li>

        <li style="margin-left:60px;"><a href="/contact">Contact</a></li>
        <li style="margin-left:60px;margin-right: 80px;"><a href="/about">About</a></li>
        <li class="" style="float:left;border:solid 1px #333;border-radius:8px;">
         
         <a  href="#" style="color:#111;"><b>
         {{ Auth::user()->name }}</b> <span class="caret"></span>
         </a>
        <ul class="submenu">
        <li> <a href="{{ route('logout') }}"
         onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
           {{ __('Logout') }}
           </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
           @csrf
         </form>
         </li>
         </ul>
          </li>
          @endguest
      </ul>

      <div class="burger">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
      </div>
  
    </nav>
    
     @yield('name')
      
    @yield('contents')</div>
      @yield('footer')
    <script src="{{asset('external/app.js')}}"></script>
  </body>
</html>
