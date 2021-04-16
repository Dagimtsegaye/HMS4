@extends('layout.Doc')
@section('content')
<div class='row'>
    <div class='col'>
        <h4>{{ $Pa->fname}}  Profile</h4>
    </div>
</div>
@if(session()->has('Doc'))
                <div class = "alert alert-success">
                  {{ session()->get('Doc') }}
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
 @if(session()->has('Update'))
    <div class = "alert alert-success">
    {{ session()->get('Update') }}
     </div>
 @endif
 @if(session()->has('error'))
    <div class = "alert alert-danger">
    {{ session()->get('error') }}
     </div>
 @endif
<div class='row'>
    <div class='col-md-2'>
        <img  src='/image/login.jpg'alt="Docter" style='height:130px; width:130px; border-style:solid; border-width:0.5px'> 
    </div>
    <div class='col-7'>
      
            <p class='in'>Full Name:- <span class='inn'>{{ $Pa->fname}} {{ $Pa->mname }} </span></p>
            <p class='in'>Card Number:-<span class='inn'>{{ $Pa->C_number}}</span></p>
            <p class='in'> Age:- <span class='inn'> {{ $Pa->dob}}</span></p>
            <p class='in'>Sex:-<span class='inn'>{{ $Pa->sex}} </span> </p>
            <p class='in'>Address:-<span class='inn'>{{ $Pa->Address}}</span></p>
            <p class='in'>Phone:- <span class='inn'>{{ $Pa->Phone}}</span></p>
     
    </div>
</div>  
<!-- Diag Tabel -->
<table  style='margin-top:30px;'class='table table-bordered table-hover'>
            <thead class='thead-light'>
                <th scope='col'>Diagnosis</th>
                <th scope='col'>History</th>
                <th scope='col'>Sysmptem</th>
                <th scope='col'>Prescription</th>
                <th scope='col'>Action</th>

            </thead>
            <tbody>
                <tr>
                    <td>                    
                     @php
                        if($Doc == "")
                            echo "empty";
                        else
                            echo $Doc->Dia;    
                    @endphp
                    </td>
                    <td>
                    @php
                        if($Doc == "")
                            echo "empty";
                        else
                            echo $Doc->His;    
                    @endphp
                    </td>  
                    <td>   
                       @php
                         if($Doc == "")
                            echo "empty";
                         else
                            echo $Doc->syp;    
                            @endphp
                     </td>
                      <td>
                            @php
                            if($Doc == "")
                                echo "empty";
                            else
                                echo $Doc->Pre;    
                            @endphp                   
                    </td>
                    <td>
                          <button type="button" class='btn btn-primary btn-sm' data-toggle='modal' data-target="#Update"><span><i class='fa fa-pencil fa_table'></span></i></button>
                          <button class='btn btn-danger btn-sm'><span><i class='fa fa-close fa_table'></span></i></button>
                    </td>
                </tr>
            </tbody>    
</table>
<!-- LAb Table -->
<div class='row' style='margin-top:10px;'>
    <div class='col-6 '>
        <p> 
        <button class='start btn btn-primary btn-sm' data-toggle='modal' data-target="#start"  >Start Diagnosis</button>
        </p>
        <table  style='margin-top:30px;'class='table table-bordered table-hover'>
            <thead class='thead-light'>
                <th scope='col'>Lab Test</th>
                <th scope='col'>Lab Result</th>
                <th scope='col'>Investigeter</th>
                <th scope='col'>Status</th>
                <th scope='col'>Action</th>

            </thead>
            <tbody>
       
            @foreach ($Lab_test as $Ho)
                <tr>
                    <td>
                        {{ $Ho->Lab_test }}                   
                    </td>
                    <td>
                         {{ $Ho->Lab_result }}
                       
                    </td>
                    <td>
                    {{ $Ho->To}}         
                    <td>
                    @php
                     if ($Ho->status == 0)
                       echo  'Not send';
                    elseif ($Ho->status == 1) 
                       echo 'wating..';
                    elseif ($Ho->status == 2)  
                      echo  'Completed';
                    else
                      echo 'no status';  
                    @endphp    
                    </td>
                               
                <td class='form-inline' >
                    <form action="{{ route('Doc_sendToLab') }}"  method='post'>
                    @csrf
                         <input type='hidden' name='id' value='{{ $Ho->id }}' >
                          <button type="submit" class='btn btn-primary btn-sm'><span><i class='fa fa-paper-plane fa_table'></span></i></button>
                    </form>  
                          <button class='btn btn-danger btn-sm' style='margin-left:2px'><span><i class='fa fa-ban fa_table'></span></i></button>
                    </td>
                </tr>
                @endforeach
            </tbody> 
          
</table>        
        <p>
           <button type='submit' class='btn test btn-primary btn-sm' data-toggle='modal' data-target="#lab">Lab Requiest</button>   
        <p>
        <button class='btn btn-success btn-sm' data-toggle='modal' data-target="#Lab_Phar">Send To Pharmacy</button>
      
    </div>
</div>

<!-- Start modal -->
<div class='modal fade' id='start' tabindex='1' role='dialog' aria-labelledy='expampleCenterTitel' aria-hidden='true'>
            <div class='modal-dialog modal-dialog-centered modal-lg' role='document'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h5 class='modal-title' id='exampleModalLongTitle'>Add Information</h5>
                        <button type='button' class='close' data-dismiss='modal' aria-label='close'>
                            <span aria-hidden='true'>&times;</span>
                        </button>  
                    </div> 
                    <div class='modal-body'>
                        <form action="{{ route('Doc_store') }}" id="fc" method='post'>
                                    @csrf
                            <div class=row>                             
                                    <div class='form-group col-6'>
                                       <span><i  class='fa fa-user-md fa_item'></i> </span> <input type='text' class='form-control' id="Dia" name='Dia' placeholder='Diagnosis'>                                                      
                                   </div>                                                                                                                    
                            </div> 
                            <div class='row'>
                                <div class='col'>
                                   <span><i  class='fa fa-user-o fa_item'></i> </span> <textarea type='text' class='form-control' id="His" name='His' placeholder='History'></textarea>                                                                                      
                                </div>
                            </div> 
                            <div class=row>                             
                                    <div class='form-group col-12'>
                                       <span><i  class='fa fa-user-md fa_item'></i> </span> <input type='text' class='form-control' id='Syp' name='Syp[]' placeholder='sysmptems'>                                                      
                                   </div>                                                                                                                    
                            </div> 
                            <div class='row'>
                                <div class='col-3'>
                                            <div class='from-check from-check-inline'>
                                                <input class='form-check-input' type='checkbox' name='Syp[]' id='inlineCheckbox1' value='tekusat'>
                                                <label class='form-check-label' for='inlineCheckbox1'>Tekusat</label>
                                            </div>
                                </div>  
                                <div class='col-3'>  
                                        <div class='from-check from-check-inline'>
                                                <input class='form-check-input' type='checkbox' name='Syp[]' id='inlineCheckbox1' value='Maketeket'>
                                                <label class='form-check-label' for='inlineCheckbox1'>Maketeket</label>
                                            </div>
                                </div> 
                                <div class='col-3'>
                                            <div class='from-check from-check-inline'>
                                                <input class='form-check-input' type='checkbox'  name='Syp[]' id='inlineCheckbox1' value='1'>
                                                <label class='form-check-label' for='inlineCheckbox1'>sale</label>
                                            </div>
                                </div>  
                                <div class='col-3'>  
                                        <div class='from-check from-check-inline'>
                                                <input class='form-check-input' type='checkbox' name='Syp[]' id='inlineCheckbox1' value='1'>
                                                <label class='form-check-label' for='inlineCheckbox1'>mashenat</label>
                                        </div>
                                </div> 
                                <div class='col-3'>  
                                        <div class='from-check from-check-inline'>
                                                <input class='form-check-input' type='checkbox' name='Syp[]' id='inlineCheckbox1' value='1'>
                                                <label class='form-check-label' for='inlineCheckbox1'>Masemeles</label>
                                       </div>
                                </div>
                                <div class='col-3'>  
                                        <div class='from-check from-check-inline'>
                                                <input class='form-check-input' type='checkbox' name='Syp[]' id='inlineCheckbox1' value='1'>
                                                <label class='form-check-label' for='inlineCheckbox1'>sekuar</label>
                                       </div>
                                </div>
                            </div>
                            <div class='row'>
                                   <div class='form-group col-12'>
                                       <span><i  class='fa fa-user-md fa_item'></i> </span> <input type='text' class='form-control' name='Pre[]' placeholder='Prescription'>                                                      
                                   </div>
                            </div>
                            <div class='row'>
                                <div class='col-3'>
                                            <div class='from-check from-check-inline'>
                                                <input class='form-check-input' type='checkbox' name='Pre[]' id='inlineCheckbox1' value='tekusat'>
                                                <label class='form-check-label' for='inlineCheckbox1'>Paracitamol</label>
                                            </div>
                                </div>  
                                <div class='col-3'>  
                                        <div class='from-check from-check-inline'>
                                                <input class='form-check-input' type='checkbox' name='Pre[]' id='inlineCheckbox1' value='Maketeket'>
                                                <label class='form-check-label' for='inlineCheckbox1'>Adol</label>
                                            </div>
                                </div> 
                                <div class='col-3'>
                                            <div class='from-check from-check-inline'>
                                                <input class='form-check-input' type='checkbox'  name='Pre[]' id='inlineCheckbox1' value='1'>
                                                <label class='form-check-label' for='inlineCheckbox1'>Amoxa</label>
                                            </div>
                                </div>  
                                <div class='col-3'>  
                                        <div class='from-check from-check-inline'>
                                                <input class='form-check-input' type='checkbox' name='Pre[]' id='inlineCheckbox1' value='1'>
                                                <label class='form-check-label' for='inlineCheckbox1'>Sringe</label>
                                        </div>
                                </div> 
                                <div class='col-3'>  
                                        <div class='from-check from-check-inline'>
                                                <input class='form-check-input' type='checkbox' name='Pre[]' id='inlineCheckbox1' value='1'>
                                                <label class='form-check-label' for='inlineCheckbox1'>Postpill</label>
                                       </div>
                                </div>
                                <div class='col-3'>  
                                        <div class='from-check from-check-inline'>
                                                <input class='form-check-input' type='checkbox' name='Pre[]' id='inlineCheckbox1' value='1'>
                                                <label class='form-check-label' for='inlineCheckbox1'>Medanit</label>
                                       </div>    
                                </div>
                                <input type='hidden' name='Pa_id' value=" {{ $Pa->id }}">
                            </div>                                                                                                                                                        
                    </div>
                    <div class='modal-footer'>
                        <button  type='submit' class='btn btn-secondary' data-dismiss='modal'>Close</button> 
                        <button class='btn btn-primary' >Save</button> 
                    </div>
                    </form> 
                </div>   
           </div>   
        </div>  


<!-- LAb modal -->
<div class='modal fade' id='lab' tabindex='1' role='dialog' aria-labelledy='expampleCenterTitel' aria-hidden='true'>
            <div class='modal-dialog modal-dialog-centered modal-lg' role='document'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h5 class='modal-title' id='exampleModalLongTitle'>Add Information</h5>
                        <button type='button' class='close' data-dismiss='modal' aria-label='close'>
                            <span aria-hidden='true'>&times;</span>
                        </button>  
                    </div> 
                    <div class='modal-body'>
                        <form action="{{ route('Doc_storeLab') }}" id="fc" method='post'>
                                    @csrf
                            <div class='row'>
                                <div class='col-3'>
                                            <div class='from-check from-check-inline'>
                                                <input class='form-check-input' type='checkbox' name='lab_test[]' id='inlineCheckbox1' value='tekusat'>
                                                <label class='form-check-label' for='inlineCheckbox1'>blood</label>
                                            </div>
                                </div>  
                                <div class='col-3'>  
                                        <div class='from-check from-check-inline'>
                                                <input class='form-check-input' type='checkbox' name='lab_test[]' id='inlineCheckbox1' value='Maketeket'>
                                                <label class='form-check-label' for='inlineCheckbox1'>Urine</label>
                                            </div>
                                </div> 
                                <div class='col-3'>
                                            <div class='from-check from-check-inline'>
                                                <input class='form-check-input' type='checkbox'  name='lab_test[]' id='inlineCheckbox1' value='1'>
                                                <label class='form-check-label' for='inlineCheckbox1'>Excration</label>
                                            </div>
                                </div>  
                                <div class='col-3'>  
                                        <div class='from-check from-check-inline'>
                                                <input class='form-check-input' type='checkbox' name='lab_test[]' id='inlineCheckbox1' value='1'>
                                                <label class='form-check-label' for='inlineCheckbox1'>Stomach</label>
                                        </div>
                                </div> 
                                <div class='col-3'>  
                                        <div class='from-check from-check-inline'>
                                                <input class='form-check-input' type='checkbox' name='lab_test[]' id='inlineCheckbox1' value='1'>
                                                <label class='form-check-label' for='inlineCheckbox1'>Xray</label>
                                       </div>
                                </div>
                                <div class='col-3'>  
                                        <div class='from-check from-check-inline'>
                                                <input class='form-check-input' type='checkbox' name='lab_test[]' id='inlineCheckbox1' value='1'>
                                                <label class='form-check-label' for='inlineCheckbox1'>Brain</label>
                                       </div>
                                </div>
                            </div>   
                            <div class='row'>
                                <div class='col-6'>
                                   <span><i class='fa fa-paper-plane fa_item'></i></span> <input type='text' class='form-control' name='to' placeholder='To'>
                                   <input type='hidden' name='Pa_id' value='{{ $Pa->id }}'>
                                   <input type='hidden' name='from' value='OPD1' >
                                </div>
                            </div>                                                                                                                              
                    </div>
                    <div class='modal-footer'>
                        <button  type='submit' class='btn btn-secondary' data-dismiss='modal'>Close</button> 
                        <button class='btn btn-primary' >Save</button> 
                    </div>
                    </form> 
                </div>   
           </div>   
        </div>  


<!-- Update modal -->
<div class='modal fade' id='Update' tabindex='1' role='dialog' aria-labelledy='expampleCenterTitel' aria-hidden='true'>
            <div class='modal-dialog modal-dialog-centered modal-lg' role='document'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h5 class='modal-title' id='exampleModalLongTitle'>Update Information</h5>
                        <button type='button' class='close' data-dismiss='modal' aria-label='close'>
                            <span aria-hidden='true'>&times;</span>
                        </button>  
                    </div> 
                    <div class='modal-body'>
                        <form action="{{ route('Doc_update') }}" id="fc" method='post'>
                                    @csrf
                            <div class=row>                             
                                    <div class='form-group col-6'>
                                       <span><i  class='fa fa-user-md fa_item'></i> </span> <input type='text' class='form-control' id="Dia" name='Dia' placeholder='Diagnosis' value="@php if($Doc == !'')echo $Doc->Dia  @endphp">                                                      
                                   </div>                                                                                                                    
                            </div> 
                            <div class='row'>
                                <div class='col'>
                                   <span><i  class='fa fa-user-o fa_item'></i> </span> <textarea type='text' class='form-control' id="His" name='His' placeholder='History' >@php if($Doc == !'')echo $Doc->His  @endphp</textarea>                                                                                      
                                </div>
                            </div> 
                            <div class=row>                             
                                    <div class='form-group col-12'>
                                       <span><i  class='fa fa-user-md fa_item'></i> </span> <input type='text' class='form-control' id='Syp' name='Syp[]' placeholder='sysmptems' value="@php if($Doc == !'')echo $Doc->syp  @endphp">                                                      
                                   </div>                                                                                                                    
                            </div> 
                            <div class='row'>
                                <div class='col-3'>
                                            <div class='from-check from-check-inline'>
                                                <input class='form-check-input' type='checkbox' name='Syp[]' id='inlineCheckbox1' value='tekusat'>
                                                <label class='form-check-label' for='inlineCheckbox1'>Tekusat</label>
                                            </div>
                                </div>  
                                <div class='col-3'>  
                                        <div class='from-check from-check-inline'>
                                                <input class='form-check-input' type='checkbox' name='Syp[]' id='inlineCheckbox1' value='Maketeket'>
                                                <label class='form-check-label' for='inlineCheckbox1'>Maketeket</label>
                                            </div>
                                </div> 
                                <div class='col-3'>
                                            <div class='from-check from-check-inline'>
                                                <input class='form-check-input' type='checkbox'  name='Syp[]' id='inlineCheckbox1' value='1'>
                                                <label class='form-check-label' for='inlineCheckbox1'>sale</label>
                                            </div>
                                </div>  
                                <div class='col-3'>  
                                        <div class='from-check from-check-inline'>
                                                <input class='form-check-input' type='checkbox' name='Syp[]' id='inlineCheckbox1' value='1'>
                                                <label class='form-check-label' for='inlineCheckbox1'>mashenat</label>
                                        </div>
                                </div> 
                                <div class='col-3'>  
                                        <div class='from-check from-check-inline'>
                                                <input class='form-check-input' type='checkbox' name='Syp[]' id='inlineCheckbox1' value='1'>
                                                <label class='form-check-label' for='inlineCheckbox1'>Masemeles</label>
                                       </div>
                                </div>
                                <div class='col-3'>  
                                        <div class='from-check from-check-inline'>
                                                <input class='form-check-input' type='checkbox' name='Syp[]' id='inlineCheckbox1' value='1'>
                                                <label class='form-check-label' for='inlineCheckbox1'>sekuar</label>
                                       </div>
                                </div>
                            </div>
                            <div class='row'>
                                   <div class='form-group col-12'>
                                       <span><i  class='fa fa-user-md fa_item' ></i> </span> <input type='text' class='form-control' name='Pre[]' placeholder='Prescription' value="@php if($Doc == !'')echo $Doc->Pre  @endphp">                                                      
                                   </div>
                            </div>
                            <div class='row'>
                                <div class='col-3'>
                                            <div class='from-check from-check-inline'>
                                                <input class='form-check-input' type='checkbox' name='Pre[]' id='inlineCheckbox1' value='tekusat'>
                                                <label class='form-check-label' for='inlineCheckbox1'>Paracitamol</label>
                                            </div>
                                </div>  
                                <div class='col-3'>  
                                        <div class='from-check from-check-inline'>
                                                <input class='form-check-input' type='checkbox' name='Pre[]' id='inlineCheckbox1' value='Maketeket'>
                                                <label class='form-check-label' for='inlineCheckbox1'>Adol</label>
                                            </div>
                                </div> 
                                <div class='col-3'>
                                            <div class='from-check from-check-inline'>
                                                <input class='form-check-input' type='checkbox'  name='Pre[]' id='inlineCheckbox1' value='1'>
                                                <label class='form-check-label' for='inlineCheckbox1'>Amoxa</label>
                                            </div>
                                </div>  
                                <div class='col-3'>  
                                        <div class='from-check from-check-inline'>
                                                <input class='form-check-input' type='checkbox' name='Pre[]' id='inlineCheckbox1' value='1'>
                                                <label class='form-check-label' for='inlineCheckbox1'>Sringe</label>
                                        </div>
                                </div> 
                                <div class='col-3'>  
                                        <div class='from-check from-check-inline'>
                                                <input class='form-check-input' type='checkbox' name='Pre[]' id='inlineCheckbox1' value='1'>
                                                <label class='form-check-label' for='inlineCheckbox1'>Postpill</label>
                                       </div>
                                </div>
                                <div class='col-3'>  
                                        <div class='from-check from-check-inline'>
                                                <input class='form-check-input' type='checkbox' name='Pre[]' id='inlineCheckbox1' value='1'>
                                                <label class='form-check-label' for='inlineCheckbox1'>Medanit</label>
                                       </div>
                                </div>
                                <input type='hidden' name='DocPa_id' value="@php if($Doc == '') echo ''; else echo $Doc->id; @endphp">
                            </div>
                                                                      
                    </div>
                    <div class='modal-footer'>
                        <button  type='submit' class='btn btn-secondary' data-dismiss='modal'>Close</button> 
                        <button class='btn btn-primary' >Save</button> 
                    </div>
                    </form> 
                </div>   
           </div>   
        </div>                                      
<script>
    $('.test').click(function(){
         $('#lab').css('color', 'black');
    });
  
  
</script>
@endsection