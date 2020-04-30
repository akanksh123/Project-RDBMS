@extends('layout.navigate')
@section('styling')
<style>
body{background-color: rgb(230, 167, 62);
}
#about{
  color: black;
  font-size:18px;
  width:80%;
  margin-top:10px;
  margin-left:70px;
  margin-right:70px;
  font-family: sans-serif;
}
</style>
@endsection

@section('contents')
 <div id="about">
      <h1 style="margin-bottom:30px;letter-spacing: 3px;text-decoration: underline;text-transform: uppercase;color: #222;font-family: Georgia, 'Times New Roman', Times, serif; " ><b>About</b></h1>
      <p >
        The Regional Transport Office or Regional Transport Authority (RTO /
        RTA) is the organisation of the Indian government responsible for
        maintaining a database of drivers and a database of vehicles for various
        states of India. The RTO issues driving licences, organises collection
        of vehicle excise duty (also known as road tax and road fund licence)
        and sells personalised registrations.
        <br>
        <br>
        <h3 style="margin-bottom:15px;letter-spacing: 2px;text-decoration: underline;text-transform: uppercase;color: #222;"><b>Our Vision</b></h3>
        To improve the quality of service delivery to the citizen and the quality of work environment of the RTOs.
        <br>
        <br>
        <h3 style="margin-bottom:15px;letter-spacing: 2px;text-decoration: underline;text-transform: uppercase;color: #222;"><b>Our Mission</b></h3>
        To automate all Vehicle Registration and Driving License related activities in transport authorities of country with introduction of smart card technology to handle issues like inter state transport vehicle movement and to create state and national level registers of vehicles/DL information
        <br>
        <br>
        <h3 style="margin-bottom:15px;letter-spacing: 2px;text-decoration: underline;text-transform: uppercase;color: #222;"><b>Our Objectives</b></h3>
        <b>To provide :</b>
        <br>
        <br>
        <ul>
        <li>Better services to Transport Department as well as citizen</li>
        <li>Quick implementation of government policies from time to time</li>
        <li>Improved image of Government & Department</li>
        <li>Instant access of Vehicle/DL information to other government departments</li>
        </ul>
      </p>
    </div>
    @endsection