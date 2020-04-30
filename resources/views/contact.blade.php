@extends('layout.navigate')
@section('styling')
<style>
body{
    background-image:url("{{asset('images/rto.jpg')}}");
    background-size:100% 700px;
}
.main{
    margin-left:50%;
    margin-top:10%;
    border:solid 3px white;
    width:600px;
    height:300px;
    color:white;

}
.main h1{text-align:center;
margin-top:30px;
}
.whatsapp{
    margin-top:20px;
    width:100%;
}
.mail{
    margin-top:40px;
    width:100%;
}
.contactimg img{
    width:90px;
    height:80px;
    
    margin-left:40px;
    float:left;
    
}
.mailimg img{
    width:90px;
    height:80px;
   float:left;
    margin-left:40px;
   
    
    

}
.contact p{
    font-size:30px;
    padding-left:30px;
    padding-top:20px;
    
}
.email p{
    font-size:30px;
     margin-left:30px;
     padding-top:20px;
    
}

</style>
@endsection
@section('contents')
<div class="main">
<h1 style="margin-bottom:30px;letter-spacing: 3px;text-decoration: underline;text-transform: uppercase;font-family: Georgia, 'Times New Roman', Times, serif; " ><b>Contact</b></h1>

<div class="whatsapp">
<div class="contactimg"><img src="{{asset('images/whatsapplogo.jpg')}}"/></div>
<div class="contact"><p><b>Contact :</b>9845352320 </p></div>
</div>
<div class="mail">
<div class="mailimg"><img src="{{asset('images/mail.png')}}"/></div>
<div class="email"><p><b>Email-id :</b>rtoindia@gmail.com</p></div>
</div>
</div>

@endsection