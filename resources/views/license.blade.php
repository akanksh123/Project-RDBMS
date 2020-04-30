@extends('layout.navigate')
@section('styling')
<style>
.container1{
    float:right;
    margin-right:100px;
    margin-top:6%;
    border:solid 3px #55d6aa;
    width:500px;
    font-size:17px;

}
.container1 h1{
    text-transform: uppercase;
    letter-spacing:3px;
    margin-left:30px;
    margin-top:4%;
    color:#333;
    
}
.card-body{
    margin-left:10%;
    margin-top:4%;
    margin-bottom:5%;
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
.card-body select{
    width:120px;
    height:30px;
    font-size:15px;
}
.images{
    float:left;
}
.images img{
    height:500px;
    width:680px;
    margin-left:50px;
    margin-top:20px;
}
</style>
@endsection
@section('contents')
<div class="container1">

      <form method="POST" action="{{ route('licenseservice.store') }}">
        @csrf
        <h1>License Creation</h1>
        <div class="card-body">
        <div class="ano">
          <label for="aadharno">{{ __("Aadhar No") }}</label>

          <div>
            <input
              id="aadharno"
              type="text"
              pattern="\d*"
              name="aadharno"
              minlength="12"
              required
            />
          </div>
        </div>
        
          <div class="bname">
          <label for="bname">{{ __("Branch Name") }}</label>

          <div>
            <select id="bname" name="bname"   required>
            <option value=""></option>
            <option value="udupi">Udupi</option>
            <option value="manglore">Manglore</option>
            <option value="manglore">Banglore</option>
            <option value="manglore">Delhi</option>
            </select>
          </div>
        </div>
        <div class="ltype">
          <label for="ltype">{{ __("License Type") }}</label>

          <div>
            <select id="ltype" name="ltype" required >
            <option value=""></option>
            <option value="2wheeler">2 Wheeler</option>
            <option value="4wheeler">4 Wheeler</option></select>
          </div>
        </div>

        <div class="submit">
          <button type="submit">
            {{ __("Submit") }}
          </button>
        </div>
        </div>
      </form>
      
    </div>
    <div class="images">
<img src="{{asset('images/license.png')}}"/>
</div>
@endsection