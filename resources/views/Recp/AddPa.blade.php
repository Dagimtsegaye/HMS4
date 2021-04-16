@extends('layout.Recp')
@section('content')
<div class='row'>
    <div class='col-2'>
    </div>
    <div clas='col-3'>
        <h3>Register New Patient</h3>
    </div>   
</div>

@if(session()->has('Pa_Created'))
                <div class = "alert alert-success">
                  {{ session()->get('Pa_Created') }}
                  </div>
                  @endif 
<div class = row> 
<div class='col-2'>
</div>
    <div class='col-8'>
    <form action="{{ route('Phar_store') }}" method='post'>
         @csrf
                       <div class=row>                             
                                    <div class='form-group col-6'>
                                       <span><i  class='fa fa-user-md'></i> </span> <input type='text' class='form-control' name='fname' placeholder='Name'>                                                      
                                    </div>                                                      
                                    <div class='form-group col-6'>
                                       <span><i  class='fa fa-user-o'></i> </span> <input type='text' class='form-control' name='mname' placeholder='Last Name'>                                                      
                                   </div>                             
                            </div>    
                           <div class='row'>
                                    <div class='col-2'>
                                        <div class='from-check from-check-inline'>
                                            <input class='form-check-input' type='checkbox' name='sex' id='inlineCheckbox1' value='1'>
                                            <label class='form-check-label' for='inlineCheckbox1'>Male</label>
                                        </div>
                                    </div>  
                                    <div class='col-2 col-md-4'>  
                                        <div class='from-check from-check-inline'>
                                            <input class='form-check-input' type='checkbox' name='sex' id='inlineCheckbox1' value='0'>
                                            <label class='form-check-label' for='inlineCheckbox1'>Femal</label>
                                        </div>
                                    </div>
                                 
                                    <div class='form-group col-6'>
                                          <span><i  class='fa fa-mobile'></i> </span> <input type='text' class='form-control' name='Phone' placeholder='Phone Number'>                                                      
                                     </div>
                                    
                            </div>
                            <div class='row'>                            
                                        <div class='form-group col-6'>
                                            <span><i  class='fa fa-map-marker'></i> </span> <input type='text' class='form-control' name='worda' placeholder='Worda'>                                                      
                                        </div>  
                                        <div class='form-group col-3'>
                                            <span><i  class='fa fa-map-marker'></i> </span> <input type='text' class='form-control' name='kebel' placeholder='Kebele'>                                                      
                                        </div> 
                                        <div class='form-group col-3'>
                                            <span><i  class='fa fa-map-marker'></i> </span> <input type='text' class='form-control' name='Address' placeholder='Address'>                                                      
                                        </div>        
                           </div>  
                               <div class='row'>
                                   <div class='form-group col-6'>
                                            <span><i  class='fa fa-calendar-check-o'></i> </span> <input type='date' class='form-control' name='dob' placeholder='Date of Birth'>                                                      
                                   </div> 
                                   <div class='form-group col-6'>
                                            <span><i  class='fa fa-list-ol'></i> </span> <input type='text' class='form-control' name='C_number' placeholder='Card Number'>                                                      
                                   </div> 
                                  
                                </div>   
                            <button  type='submit' class='btn btn-primary btn-sm' >Register</button>  
                            <button   class='btn btn-success btn-sm' >Clear</button>                                                                                                                   
                       </form> 
    </div>
</div>

@endsection