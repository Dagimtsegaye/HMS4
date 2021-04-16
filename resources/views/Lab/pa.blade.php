@extends('layout.Lab')
@section('content')
<div class='row'>
    <div class='col'>
        <h4>Dagim Profile</h4>
    </div>
</div>
@if(session()->has('Lab_Add'))
    <div class = "alert alert-success">
    {{ session()->get('Lab_Add') }}
     </div>
 @endif 
 @if(session()->has('Doc_send'))
    <div class = "alert alert-success">
    {{ session()->get('Doc_send') }}
     </div>
 @endif 
 @if(session()->has('Docc_send'))
    <div class = "alert alert-danger">
    {{ session()->get('Docc_send') }}
     </div>
 @endif 
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
    <div class='col-6 form-inline' >
        <button class='btn btn-primary btn-sm' data-toggle='modal' data-target="#start">Insert Lab Result</button>
                <form action="{{ route('Lab_send') }}" method='post'>
                @csrf
                    <input type='hidden' name=id value='3'> 
        <button class='btn btn-success btn-sm' data-toggle='modal' data-target="#Lab_request">Send</button>
               </form>
    </div>
</div>
               
                
<!-- Request to lab Modal -->
<div class='modal fade' id='start' tabindex='1' role='dialog' aria-labelledy='expampleCenterTitel' aria-hidden='true'>
            <div class='modal-dialog modal-dialog-centered' role='document'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h5 class='modal-title' id='exampleModalLongTitle'>Labratory Result</h5>
                        <button type='button' class='close' data-dismiss='modal' aria-label='close'>
                            <span aria-hidden='true'>&times;</span>
                        </button>  
                    </div> 
                    <div class='modal-body'>
                        <form action="{{ route('Lab_resultstore') }}" method='post' >
                           
                         @csrf
                            <div class=row>                             
                                    <div class='form-group col-12'>
                                       <span><i  class='fa fa-user-md'></i> </span> <input type='text' class='form-control' name='res[]' placeholder='Resulet'>                                                      
                                   </div>                                                                                                                    
                            </div> 
                            <div class='row'>
                                <div class='col-3'>
                                            <div class='from-check from-check-inline'>
                                                <input class='form-check-input' type='checkbox' name='res[]' id='inlineCheckbox1' value='1'>
                                                <label class='form-check-label' for='inlineCheckbox1'>Urine</label>
                                            </div>
                                </div>  
                                <div class='col-3'>  
                                        <div class='from-check from-check-inline'>
                                                <input class='form-check-input' type='checkbox' name='res[]' id='inlineCheckbox1' value='1'>
                                                <label class='form-check-label' for='inlineCheckbox1'>Maketeket</label>
                                            </div>
                                </div> 
                                <div class='col-3'>
                                            <div class='from-check from-check-inline'>
                                                <input class='form-check-input' type='checkbox' name='res[]' id='inlineCheckbox1' value='1'>
                                                <label class='form-check-label' for='inlineCheckbox1'>sale</label>
                                            </div>
                                </div>  
                                <div class='col-3'>  
                                        <div class='from-check from-check-inline'>
                                                <input class='form-check-input' type='checkbox' name='res[]' id='inlineCheckbox1' value='1'>
                                                <label class='form-check-label' for='inlineCheckbox1'>mashenat</label>
                                        </div>
                                </div> 
                                <div class='col-3'>  
                                        <div class='from-check from-check-inline'>
                                                <input class='form-check-input' type='checkbox' name='res[]' id='inlineCheckbox1' value='1'>
                                                <label class='form-check-label' for='inlineCheckbox1'>Masemeles</label>
                                       </div>
                                </div>
                                <div class='col-3'>  
                                        <div class='from-check from-check-inline'>
                                                <input class='form-check-input' type='checkbox' name='res[]' id='inlineCheckbox1' value='1'>
                                                <label class='form-check-label' for='inlineCheckbox1'>sekuar</label>
                                       </div>
                                </div>
                            </div>                         
                                                                                          
                                          
                    </div>
                    <div class='modal-footer'>
                        <button class='btn btn-secondary' data-dismiss='modal'>Close</button> 
                        <button type='submit' class='btn btn-primary' >Insert</button> 
                    </div>
                    </form>
                </div>   
           </div>   
        </div> 

<!-- Request to Pharmacy -->
<div class='modal fade' id='Lab_Phar' tabindex='1' role='dialog' aria-labelledy='expampleCenterTitel' aria-hidden='true'>
@endsection