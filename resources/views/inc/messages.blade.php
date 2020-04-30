@extends('layout.navigate')
@section('styling')
<style>
body{
    background:wheat;
}
.alert1{
    width:500px;
    height:100px;
    margin-left:35%;
    margin-top:15%;
   
    font-size:23px;
    border:solid 3px rgb(28, 246, 94);
    border-radius:10px;
    background:rgb(109, 250, 163);
}
.alert1 p{
    margin-left:20%;
    margin-top:7%;
}

</style>
@endsection
@section('contents')
<div class="alert1"><p>{{session('success')}}</p></div>
@endsection