@extends('layout.Phar')
@section('content')
<div class='row'>
    <div class='col'>
        <h4>Dagim Profile</h4>
    </div>
</div>
<div class='row'>
    <div class='col-3 col-md-2'>
        <img  src='/image/login.jpg'alt="Docter" style='height:200px; width:180px; border-style:solid; border-width:0.5px'> 
    </div>
    <div class='col-3'>
      
            <p class='info'>Full Name: <span class='info2'>Dagim Tsegaye Damtie </span></p>
            <p class='info'>Card Number: <span class='info2'>AA00123</span></p>
            <p class='info'> Age: <span class='info2'>25</span></p>
            <p class='info'>Sex:<span class='info2'> M</span> </p>
            <p class='info'>Address: <span class='info2'>Addis Aba</span></p>
            <p class='info'>Phone: <span class='info2'>098756432</span></p>
            <p class='info'>status: <span class='info2'>not Visited before</span></p>
           
    </div>
    <div class='col-6'>     
      <p class='info'>Diagnosis: </p>
      <p class='info'>History: </p>
      <p class='info'> sysmptem: </p>
      <p class='info'>Medication: </p>
      <p class='info'>Lab test: </p>
      <p class='info'>Lab Result: </p> 
      <p class='info'>Prescription: </p>   
   </div>
</div>  
<div class='row' style='margin-top:10px;'>
    <div class='col-6'>
        <button class='btn btn-success btn-sm' data-toggle='modal' data-target="#Lab_request">Confirem</button>
    </div>
</div>
@endsection