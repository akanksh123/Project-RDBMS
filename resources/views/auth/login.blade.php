@extends('layout.navigate')
@section('styling')
<style>
body{
    background-image:url("{{asset('images/rto.jpg')}}");
    background-size:100% 700px;
}
.container1{
    margin-top:5%;
    margin-left:50%;
    border:solid 3px #55d6aa;
    width:450px;
    font-size:25px;
    
}
.container1 h1{
    text-transform: uppercase;
    letter-spacing:3px;
    margin-left:32%;
    margin-top:5%;
    color:white;
}
.card-body{
    margin-left:10%;
    margin-top:5%;
    margin-bottom:8%;
    color:white;
}
.container1 input{
    height:30px;
    width:80%;
}
.card-body div{
    
    margin-top:3%;
}
.card-body button{
    width:100px;
    height:40px;
    font-size:20px;
    text-transform:uppercase;
    background-color:#55d6aa;
    font-weight: bold;
    letter-spacing:1px;
}

.card-body button:hover{
    background-color:#66a6bb;
}

</style>

@endsection
@section('contents')
<div class="container1">
        <h1>Login</h1>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mail ">
                            <label for="email" >{{ __('E-Mail Address') }}</label>

                            <div >
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="pass">
                            <label for="password" >{{ __('Password') }}</label>

                            <div >
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="remember">
                                    <input type="checkbox" style="width:7%;height:20px;"name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label style="font-size:22px;margin-left:10px;" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                               
                        </div>

                        <div >
                            
                                <button type="submit" >
                                    {{ __('Login') }}
                                </button>  
                            
                        </div>
                        <div style="font-size:22px;">
                            <p>Dont have an account ? <a href="{{route('register')}}" style="color:blue;letter-spacing:1.5px;font-family: Arial, Helvetica, sans-serif;">Register</a></p>
                        </div>
                    </form>
                </div>
</div>

@endsection
