@extends('layout.navigate')
@section('styling')
<style>
body{
    background-image:url("{{asset('images/rto.jpg')}}");
    background-size:100% 900px;
}
.container1{
    
    margin-left:50%;
    margin-top:2%;
    border:solid 3px #55d6aa;
    width:450px;
    font-size:18px;

}
.container1 h1{
    text-transform: uppercase;
    letter-spacing:3px;
    margin-left:20%;
    margin-top:4%;
    color:white;
    
}
.card-body{
    margin-left:10%;
    margin-top:4%;
    margin-bottom:5%;
    color:white;
}
.container1 input{
    height:30px;
    width:80%;
}
.card-body div{
    
    margin-top:2%;
}
.card-body button{
    width:140px;
    height:40px;
    font-size:20px;
    text-transform:uppercase;
    background-color:#55d6aa;
    font-weight: bold;
    letter-spacing:0.5px;

}

.card-body button:hover{
    background-color:#66a6bb;
}
</style>
@endsection
@section('contents')
<div class="container1">
    
                <h1>{{ __('Register') }}</h1>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="name">
                            <label for="name">{{ __('Name') }}</label>

                            <div >
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="ano">
                            <label for="aadharno">{{ __('Aadhar No') }}</label>

                            <div>
                                <input id="aadharno" type="text" pattern="\d*"class="form-control @error('aadharno') is-invalid @enderror" name="aadharno" value="{{ old('aadharno') }}" minlength="12"required >
                                @error('aadharno')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                               
                            </div>
                        </div>


                        <div class="mail">
                            <label for="email">{{ __('E-Mail Address') }}</label>

                            <div>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="bdate">
                            <label for="bdate">{{ __('Birth date') }}</label>

                            <div>
                                <input id="bdate" type="date"  name="bdate" required>

                            </div>
                        </div>
                        <div class="address">
                            <label for="address">{{ __('Address') }}</label>

                            <div >
                                <input id="address" type="text" name="address" required autofocus>  
                            </div>
                        </div>

                        <div class="pass">
                            <label for="password">{{ __('Password') }}</label>

                            <div>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="pass">
                            <label for="password-confirm" >{{ __('Confirm Password') }}</label>

                            <div>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>


                        <div class="register">
                                <button type="submit" >
                                    {{ __('Register') }}
                                </button>
                    
                        </div>
                        <div style="font-size:22px;">
                            <p>Already have an account ? <a href="{{route('login')}}" style="color:blue;letter-spacing:1.5px;font-family: Arial, Helvetica, sans-serif;">Login</a></p>
                        </div>
                    </form>
                </div>
           
</div>

@endsection
