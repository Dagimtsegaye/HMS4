@extends('layout.app')
@section('content')
        <div class= 'row justify-content-md-center'>
            <div class = 'col col-md-6'>
                <div class = 'alert alert-primary' role='alert' >
                     <h3 >Available Stuffs<h3>
                </div>   
            </div>   
        </div> 
        @if(session()->has('User_created'))
                <div class = "alert alert-success">
                  {{ session()->get('User_created') }}
                  </div>
                  @endif 
        <div class = 'row'>
            <div class='col col-md-2'>
                <div class = 'card' style='width:10rem;'> 
                    <img class='card-img-top' src='image/fdoc.jpg'alt="Docter" style='height:140px'> 
                    <div class='card-body'>
                        <h5 class = 'card-title'>Doctors</h5>
                        <p class='card-text'>WE have 5 doctors</p>
                        <a href="{{ route('viewDoc') }}" class='btn btn-primary btn-sm'>Show</a>
                        <button type='button' class='btn btn-primary btn-sm'  data-toggle='modal' data-target="#AddDoc" >Add</button>
                    </div>
               </div>  
            </div>   
            <div class='col col-md-2'>
                <div class = 'card' style='width:10rem;'> 
                    <img class='card-img-top' src='image/lab.png'alt="Docter" style='height:140px' > 
                    <div class='card-body'>
                        <h5 class = 'card-title'> lab Technician</h5>
                        <p class='card-text'>WE have 4 Technician</p>
                        <a href="{{ route('viewLab') }}" class='btn btn-primary btn-sm'>Show</a>
                        <a  class='btn btn-success btn-sm'  data-toggle='modal' data-target="#AddLab">Add</a>
                    </div>
               </div>  
            </div>   
            <div class='col col-md-2'>
                <div class = 'card' style='width:10rem;'> 
                    <img class='card-img-top' src='image/phar.jpg' alt="Docter" style='height:140px'> 
                    <div class='card-body'>
                        <h5 class = 'card-title'>Pharmacist</h5>
                        <p class='card-text'>WE have 4 Pharmacist </p>
                        <a href="{{ route('viewPhar') }}" class='btn btn-primary btn-sm'>Show</a>
                        <a herf="#" type='button' class='btn btn-success btn-sm' data-toggle='modal' data-target="#AddPhar">Add</a>
                    </div>
               </div>  
            </div>  
            <div class='col col-md-2'>
                <div class = 'card' style='width:10rem;'> 
                    <img class='card-img-top' src='image/recp.png'alt="Docter" style='height:140px'> 
                    <div class='card-body'>
                        <h5 class = 'card-title'>Reception</h5>
                        <p class='card-text'>WE have 5 Reception</p>
                        <a href="{{ route('viewRecp') }}" class='btn btn-primary btn-sm'>Show</a>
                        <a herf="#" type='button' class='btn btn-success btn-sm' data-toggle='modal' data-target="#AddRecp">Add</a>
                    </div>
               </div>  
            </div> 
            <div class='col col-md-2'>
                <div class = 'card' style='width:10rem;'> 
                    <img class='card-img-top' src='image/pe.png'alt="Docter" style='height:140px'> 
                    <div class='card-body'>
                        <h5 class = 'card-title'>Patient</h5>
                        <p class='card-text'>WE have 5 Patient</p>
                        <a href="{{ route('viewPa') }}" class='btn btn-primary btn-sm'>Show</a>
                    
                    </div>
               </div>  
            </div>  
        </div>  
        <!-- Add lab Modal -->
        <div class='modal fade' id='AddLab' tabindex='1' role='dialog' aria-labelledy='expampleCenterTitel' aria-hidden='true'>
            <div class='modal-dialog modal-dialog-centered' role='document'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h5 class='modal-title' id='exampleModalLongTitle'>Add Laboratory techinician</h5>
                        <button type='button' class='close' data-dismiss='modal' aria-label='close'>
                            <span aria-hidden='true'>&times;</span>
                        </button>  
                    </div> 
                    <div class='modal-body'>
                        <form action = "{{ route('store_user') }}"  method='post'>
                           @csrf
                            <div class=row>                             
                                    <div class='form-group col-6'>
                                       <span><i  class='fa fa-user-md'></i> </span> <input type='text' class='form-control' name='name' placeholder='Name'>                                                      
                                    </div>                                                      
                                    <div class='form-group col-6'>
                                       <span><i  class='fa fa-user-o'></i> </span> <input type='text' class='form-control' name='LastName' placeholder='Last Name'>                                                      
                                   </div>                             
                            </div>    
                           <div class='row'>
                                    <div class='col-2'>
                                        <div class='from-check from-check-inline'>
                                            <input class='form-check-input' name='Sex' type='checkbox' id='inlineCheckbox1' value='1'>
                                            <label class='form-check-label' for='inlineCheckbox1'>Male</label>
                                        </div>
                                    </div>  
                                    <div class='col-2 col-md-4'>  
                                        <div class='from-check from-check-inline'>
                                            <input class='form-check-input' name='Sex' type='checkbox' id='inlineCheckbox1' value='1'>
                                            <label class='form-check-label' for='inlineCheckbox1'>Femal</label>
                                        </div>
                                    </div>
                                 
                                    <div class='form-group col-6'>
                                          <span><i  class='fa fa-mobile'></i> </span> <input type='text' class='form-control' name='phone' placeholder='Phone Number'>                                                      
                                     </div>
                                    
                            </div>
                            <div class='row'>                            
                                        <div class='form-group col-6'>
                                            <span><i  class='fa fa-map-marker'></i> </span> <input type='text' class='form-control' name='Address' placeholder='Address'>                                                      
                                        </div>          
                           </div>  
                               <div class='row'>
                                   <div class='form-group col-6'>
                                            <span><i  class='fa fa-calendar-check-o'></i> </span> <input type='date' class='form-control' name='dob' placeholder='Date of Birth'>                                                      
                                   </div> 
                                   <div class='form-group col-6'>
                                            <span><i  class='fa fa-envelope-o'></i> </span> <input type='email' class='form-control' name='email' placeholder='Email'>                                                      
                                   </div> 
                                </div>  
                                <div class='row'>
                                   <div class='form-group col-6'>
                                            <span><i  class='fa fa-user-circle-o'></i> </span> <input type='text' class='form-control' name='UserName' placeholder='User Name'>                                                      
                                   </div>  
                                </div> 
                                <div class='row'>
                                   <div class='form-group col-6'>
                                            <span><i  class='fa fa-key'></i> </span> <input type='password' class='form-control' name='password' placeholder='Password'>                                                      
                                   </div> 
                                   <div class='form-group col-6'>
                                            <span><i  class='fa fa-key'></i> </span> <input type='password' class='form-control' name='password_confimation' placeholder='password Agen'>                                                      
                                   </div> 
                                   <input type="hidden"  name='roll' value='2'>  
                                </div>                                                              
                                       
                    </div>
                    <div class='modal-footer'>
                        <button class='btn btn-secondary' data-dismiss='modal'>Close</button> 
                        <button class='btn btn-primary' >Save</button> 
                    </div>
                    </form>  
                </div>   
           </div>   
        </div> 
       <!-- Add Pharmacy  Modal  -->
        <div class='modal fade' id='AddPhar' tabindex='1' role='dialog' aria-labelledy='expampleCenterTitel' aria-hidden='true'>
            <div class='modal-dialog modal-dialog-centered' role='document'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h5 class='modal-title' id='exampleModalLongTitle'>Add Pharmacist</h5>
                        <button type='button' class='close' data-dismiss='modal' aria-label='close'>
                            <span aria-hidden='true'>&times;</span>
                        </button>  
                    </div> 
                    <div class='modal-body'>
                    <form action="{{ route('store_user') }}"  method='post'>
                       @csrf
                            <div class=row>                             
                                    <div class='form-group col-6'>
                                       <span><i  class='fa fa-user-md'></i> </span> <input type='text' class='form-control' name='name' placeholder='Name'>                                                      
                                    </div>                                                      
                                    <div class='form-group col-6'>
                                       <span><i  class='fa fa-user-o'></i> </span> <input type='text' class='form-control' name='LastName' placeholder='Last Name'>                                                      
                                   </div>                             
                            </div>    
                           <div class='row'>
                                    <div class='col-2'>
                                        <div class='from-check from-check-inline'>
                                            <input class='form-check-input' type='checkbox' id='inlineCheckbox1' value='1'>
                                            <label class='form-check-label' for='inlineCheckbox1'>Male</label>
                                        </div>
                                    </div>  
                                    <div class='col-2 col-md-4'>  
                                        <div class='from-check from-check-inline'>
                                            <input class='form-check-input' name='Sex' type='checkbox' id='inlineCheckbox1' value='1'>
                                            <label class='form-check-label' name='Sex' for='inlineCheckbox1'>Femal</label>
                                        </div>
                                    </div>
                                 
                                    <div class='form-group col-6'>
                                          <span><i  class='fa fa-mobile'></i> </span> <input type='text' class='form-control' name='Phone' placeholder='Phone Number'>                                                      
                                     </div>
                                    
                            </div>
                            <div class='row'>                            
                                        <div class='form-group col-6'>
                                            <span><i  class='fa fa-map-marker'></i> </span> <input type='text' class='form-control' name='Address' placeholder='Address'>                                                      
                                        </div>          
                           </div>  
                               <div class='row'>
                                   <div class='form-group col-6'>
                                            <span><i  class='fa fa-calendar-check-o'></i> </span> <input type='date' class='form-control' name='dob' placeholder='Date of Birth'>                                                      
                                   </div> 
                                   <div class='form-group col-6'>
                                            <span><i  class='fa fa-envelope-o'></i> </span> <input type='email' class='form-control' name='email' placeholder='Email'>                                                      
                                   </div> 
                                </div>  
                                <div class='row'>
                                   <div class='form-group col-6'>
                                            <span><i  class='fa fa-user-circle-o'></i> </span> <input type='text' class='form-control' name='UserName' placeholder='User Name'>                                                      
                                   </div>  
                                </div> 
                                <div class='row'>
                                   <div class='form-group col-6'>
                                            <span><i  class='fa fa-key'></i> </span> <input type='password' class='form-control' name='password' placeholder='Password'>                                                      
                                   </div> 
                                   <div class='form-group col-6'>
                                            <span><i  class='fa fa-key'></i> </span> <input type='password' class='form-control' name='password_confimation' placeholder='password Agen'>                                                      
                                   </div> 
                                   <input type='hidden' name='roll' value='4'>
                                </div>                                                              
                                
                    </div>
                    <div class='modal-footer'>
                        <button class='btn btn-secondary' data-dismiss='modal'>Close</button> 
                        <button type='submit' class='btn btn-primary' >Save</button> 
                   </div>
                   </form>
                </div>   
           </div>   
        </div>       
 
        <!-- Add Doc Modal  -->
        <div class='modal fade' id='AddDoc' tabindex='1' role='dialog' aria-labelledy='expampleCenterTitel' aria-hidden='true'>
            <div class='modal-dialog modal-dialog-centered' role='document'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h5 class='modal-title' id='exampleModalLongTitle'>Add Doctors</h5>
                        <button type='button' class='close' data-dismiss='modal' aria-label='close'>
                            <span aria-hidden='true'>&times;</span>
                        </button>  
                    </div> 
                    <div class='modal-body'>
                        <form action="{{ route('store_user') }}"  method='post'>
                        @csrf
                            <div class=row>
                               
                                    <div class='form-group col-6'>
                                       <span><i  class='fa fa-user-md'></i> </span> <input type='text' class='form-control' name='name' placeholder='Dr.Name'>                                                      
                                    </div>                                                      
                                    <div class='form-group col-6'>
                                       <span><i  class='fa fa-user-o'></i> </span> <input type='text' class='form-control' name='LastName' placeholder='Last Name'>                                                      
                                    </div>
                               
                            </div>    
                                <div class='row'>
                                    <div class='col-2'>
                                        <div class='from-check from-check-inline'>
                                            <input class='form-check-input' type='checkbox' name='Sex' id='inlineCheckbox1' value='1'>
                                            <label class='form-check-label' for='inlineCheckbox1'>Male</label>
                                        </div>
                                    </div>  
                                    <div class='col-2 col-md-4'>  
                                        <div class='from-check from-check-inline'>
                                            <input class='form-check-input'  type='checkbox' name='Sex' id='inlineCheckbox1' value='0'>
                                            <label class='form-check-label' for='inlineCheckbox1'>Femal</label>
                                        </div>
                                    </div>
                                 
                                        <div class='form-group col-6'>
                                          <span><i  class='fa fa-mobile'></i> </span> <input type='text' class='form-control' name='Phone' placeholder='Phone Number'>                                                      
                                        </div>
                                    
                               </div>
                               <div class='row'>                            
                                        <div class='form-group col-6'>
                                            <span><i  class='fa fa-map-marker'></i> </span> <input type='text' class='form-control' name='Address' placeholder='Address'>                                                      
                                        </div> 
                                        <div class='form-group col-6'>
                                            <span><i  class='fa fa-mortar-board'></i> </span>  <select id='inputState' name='Dr_Dep' class='form-control'>
                                                    <option selected>Dr. Departemnet</option>
                                                    <option>None</option>
                                                    <option>Cardiologists</option>
                                                    <option>Endorcrinologists</option>
                                                    <option>Dermatologist</option>
                                                    <option>Ophthalmologists</option>
                                                    <option>Nerphrologist</option>
                                                    <option>Moon</option>
                                                    <option>Brain Specialist</option>                                              
                                                </select>                                 
                                       </div>  
                               </div>  
                               <div class='row'>
                                   <div class='form-group col-6'>
                                            <span><i  class='fa fa-calendar-check-o'></i> </span> <input type='date' class='form-control' name='dob' placeholder='Date of Birth'>                                                      
                                   </div> 
                                   <div class='form-group col-6'>
                                            <span><i  class='fa fa-envelope-o'></i> </span> <input type='email' class='form-control' name='email' placeholder='Email'>                                                      
                                   </div> 
                                </div>  
                                <div class='row'>
                                   <div class='form-group col-6'>
                                            <span><i  class='fa fa-user-circle-o'></i> </span> <input type='text' class='form-control' name='UserName' placeholder='User Name'>                                                      
                                   </div>  
                                </div> 
                                <div class='row'>
                                   <div class='form-group col-6'>
                                            <span><i  class='fa fa-key'></i> </span> <input type='password' class='form-control' name='password' placeholder='Password'>                                                      
                                   </div> 
                                   <div class='form-group col-6'>
                                            <span><i  class='fa fa-key'></i> </span> <input type='password' class='form-control' name='password_confimation' placeholder='password Agen'> 
                                            <input type="hidden"  name='roll' value='3  '>                                                     
                                   </div> 
                                </div>                                                              
                                        
                    </div>
                    <div class='modal-footer'>
                        <button  class='btn btn-secondary' data-dismiss='modal'>Close</button> 
                        <button type='submit' class='btn btn-primary' >Save</button> 
                    </div>  
                 </form>      
                </div>   
           </div>   
        </div>  
        <!--Add Reception modal  -->
        <div class='modal fade' id='AddRecp' tabindex='1' role='dialog' aria-labelledy='expampleCenterTitel' aria-hidden='true'>
            <div class='modal-dialog modal-dialog-centered' role='document'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h5 class='modal-title' id='exampleModalLongTitle'>Add Receprtion</h5>
                        <button type='button' class='close' data-dismiss='modal' aria-label='close'>
                            <span aria-hidden='true'>&times;</span>
                        </button>  
                    </div> 
                    <div class='modal-body'>
                        <form action="{{ route('store_user') }}"  method='post'>
                            @csrf
                            <div class=row>                             
                                    <div class='form-group col-6'>
                                       <span><i  class='fa fa-user-md'></i> </span> <input type='text' class='form-control' name='name' placeholder='Name'>                                                      
                                    </div>                                                      
                                    <div class='form-group col-6'>
                                       <span><i  class='fa fa-user-o'></i> </span> <input type='text' class='form-control' name='LastName' placeholder='Last Name'>                                                      
                                   </div>                             
                            </div>    
                           <div class='row'>
                                    <div class='col-2'>
                                        <div class='from-check from-check-inline'>
                                            <input class='form-check-input'  name='Sex' type='checkbox' id='inlineCheckbox1' value='1'>
                                            <label class='form-check-label' for='inlineCheckbox1'>Male</label>
                                        </div>
                                    </div>  
                                    <div class='col-2 col-md-4'>  
                                        <div class='from-check from-check-inline'>
                                            <input class='form-check-input' name='Sex'  type='checkbox' id='inlineCheckbox1' value='1'>
                                            <label class='form-check-label' for='inlineCheckbox1'>Femal</label>
                                        </div>
                                    </div>
                                 
                                    <div class='form-group col-6'>
                                          <span><i  class='fa fa-mobile'></i> </span> <input type='text' class='form-control' name='Phone' placeholder='Phone Number'>                                                      
                                     </div>
                                    
                            </div>
                            <div class='row'>                            
                                        <div class='form-group col-6'>
                                            <span><i  class='fa fa-map-marker'></i> </span> <input type='text' class='form-control' name='Address' placeholder='Address'>                                                      
                                        </div>          
                           </div>  
                               <div class='row'>
                                   <div class='form-group col-6'>
                                            <span><i  class='fa fa-calendar-check-o'></i> </span> <input type='date' class='form-control' name='dob' placeholder='Date of Birth'>                                                      
                                   </div> 
                                   <div class='form-group col-6'>
                                            <span><i  class='fa fa-envelope-o'></i> </span> <input type='email' class='form-control' name='email' placeholder='Email'>                                                      
                                   </div> 
                                </div>  
                                <div class='row'>
                                   <div class='form-group col-6'>
                                            <span><i  class='fa fa-user-circle-o'></i> </span> <input type='text' class='form-control' name='UserName' placeholder='User Name'>                                                      
                                   </div>  
                                </div> 
                                <div class='row'>
                                   <div class='form-group col-6'>
                                            <span><i  class='fa fa-key'></i> </span> <input type='password' class='form-control' name='password' placeholder='Password'>                                                      
                                   </div> 
                                   <div class='form-group col-6'>
                                            <span><i  class='fa fa-key'></i> </span> <input type='password' class='form-control' name='password_confimation' placeholder='password Agen'>                                                      
                                   </div> 
                                   <input type='hidden' name='roll' value='5'>
                                </div>                                                              
                                      
                    </div>
                    <div class='modal-footer'>
                        <button class='btn btn-secondary' data-dismiss='modal'>Close</button> 
                        <button class='btn btn-primary' >Save</button> 
                    </div>
                    </form>   
                </div>   
           </div>   
        </div>                  
                  

                                 
@endsection