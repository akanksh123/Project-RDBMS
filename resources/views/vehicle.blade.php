@extends('layout.navigate')
@section('styling')
<style>

.container1{
    float:right;
    margin-right:100px;
    margin-top:2%;
    border:solid 3px #55d6aa;
    width:500px;
    font-size:18px;

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
    height:550px;
    width:670px;
    margin-left:30px;
    margin-top:30px;
}
</style>
<script>
function populate(s1,s2){
var s1=document.getElementById(s1);
var s2=document.getElementById(s2);
s2.innerHTML="";
if(s1.value=="2wheeler"){
    var optionarr= ["|","hero|Hero","honda|Honda","tvs|TVS"];
}else if(s1.value=="4wheeler"){
    var optionarr= ["|","suzuki|Suzuki","toyota|Toyota","mahindra|Mahindra"];
}

for(var option in optionarr){
    var pair=optionarr[option].split("|");
    var newoption=document.createElement("option");
    newoption.value=pair[0];
    newoption.innerHTML=pair[1];
    s2.options.add(newoption);
}
}
function populate2(s1,s2){
var s1=document.getElementById(s1);
var s2=document.getElementById(s2);
s2.innerHTML="";
if(s1.value=="hero"){
    var optionarr= ["splender|Splender","karizma|Karizma","passion|Passion","pleasure|Pleasure"];
}else if(s1.value=="honda"){
    var optionarr= ["cbr|CBR","activa|Activa","unicorn|Unicorn","hornet|Hornet"];
}else if(s1.value=="tvs"){
    var optionarr= ["apache|Apache","jupiter|Jupiter","radeon|Radeon","victor|Victor"];
}
else if(s1.value=="suzuki"){
    var optionarr= ["dzire|Dzire","baleno|Baleno","brezza|Brezza","swift|Swift"];
}
else if(s1.value=="toyota"){
    var optionarr= ["innova|Innova","ciaz|Ciazr","christa|Christa","fortuner|Fortuner"];
}
else if(s1.value=="mahindra"){
    var optionarr= ["xuv500|XUV500","scorpio|Scorpio","xylo|Xylo","marazzo|Marazzo"];
}

for(var option in optionarr){
    var pair=optionarr[option].split("|");
    var newoption=document.createElement("option");
    newoption.value=pair[0];
    newoption.innerHTML=pair[1];
    s2.options.add(newoption);
}
}
</script>
@endsection
@section('contents')
<div class="container1">

      <form method="POST" action="{{ route('vehicleregistration.store')}}">
        @csrf
        <h1>Vehicle Registration</h1>
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
        <div class="vtype">
          <label for="vtype">{{ __("Vehicle Type") }}</label>

          <div>
            <select id="vtype" name="vtype"  onchange="populate(this.id,'vcompany')" required>
            <option value=""></option>
            <option value="2wheeler">2 Wheeler</option>
            <option value="4wheeler">4 Wheeler</option>
            </select>
          </div>
        </div>
        <div class="vcompany">
          <label for="vcompany">{{ __("Company") }}</label>

          <div>
            <select id="vcompany" name="vcompany" onchange="populate2(this.id,'vmodel')" required ></select>
          </div>
        </div>
        <div class="vmodel">
          <label for="vmodel">{{ __("Model") }}</label>

          <div>
            <select id="vmodel" name="vmodel" required ></select>
          </div>
        </div>
        <div class="eno">
          <label for="engineno">{{ __("Engine No") }}</label>

          <div>
            <input id="engineno" type="text" name="engineno" required />
          </div>
        </div>


        <div class="register">
          <button type="submit">
            {{ __("Register") }}
          </button>
        </div>
      </form>
      </div>
    </div>
    <div class="images">
<img src="{{asset('images/vehiclereg.jpg')}}"/>
</div>
@endsection