@extends('layout.Lab')
@section('content')
<div class='row'>
    <div class='col-1'>
    </div>
    <div clas='col-3'>
        <h3>Patient List</h3>
    </div>
    <div class='col-4'>
    </div>
    <div class='col-3 form-inline'> 
    <span><i  class='fa fa-user-o fa_item'></i> </span>  <select id='inputState' class='form-control'>
                                                    <option selected>All</option>
                                                    <option>Comfiremed</option>
                                                    <option>Wating</option>                                                                                           
                                                </select>
    </div>
    <div clas='col-2 '>
       <span><i class='fa fa-search fa_item' ></i><span> <input type='text' class='form-control' placeholder='search'>
    </div>   
</div>
<div class = row>
    <div class='col-1'>
    </div>
    <div class='col-12'>
    @if(session()->has('error'))
    <div class = "alert alert-danger">
    {{ session()->get('error') }}
     </div>
 @endif
 @if(session()->has('Lab_Add'))
    <div class = "alert alert-success">
    {{ session()->get('Lab_Add') }}
     </div>
 @endif
    <table  style='margin-top:30px;'class='table table-bordered table-hover'>
            <thead class='thead-light'>
                <th scope='col'>#</th>
                <th scope='col'>Card No</th>
                <th scope='col'>Name</th>          
                <th scope='col'>Sex</th>
                <th scope='col'>Lab Test</th>  
                <th scope='col'>From</th>  
                <th scope='col'>Time</th> 
                <th scope='col'>Status</th>         
                <th scope='col'>Action</th>

            </thead>
            <tbody>
            <?php $i = $Pa->perPage() * ($Pa->currentPage() -1); ?>
                     @foreach($Pa as $Ho)
            <tr>
                 <td>{{ $i+1 }}</td>
                 <td>{{ $Ho->C_number }}</td>  
                 <td>{{ $Ho->fname }} {{ $Ho->mname }}</td>
                 <td>{{ $Ho->sex }}</td>
                 <td>{{ $Ho->Lab_test }}</td>
                 <td>{{ $Ho->From }}</td>
                 <td>{{ $Ho->created_at->diffForHumans() }}</td>
                 <td> 
                     @php
                       if($Ho->status == 1)
                         echo 'Wating..';
                       else
                         echo 'Completed';  
                      @endphp   
                   </td>
                 <td><button class='Lab_id btn btn-primary btn-sm' data-value="{{ $Ho->From }}" value="{{ $Ho->id }}" data-toggle='modal'  data-target="#insert">Insert</button>
                 <button class='btn btn-success btn-sm'value="{{ $Ho->Pa_id }}" data-toggle='modal'  data-target="#update"><span><i class='fa fa-edit fa_table'></span></i></button>
                 <button type="submit" class='btn btn-primary btn-sm'><span><i class='fa fa-paper-plane fa_table'></span></i></button>            
                 <button class='btn btn-danger btn-sm'><span><i class='fa fa-ban fa_table'></span></i></button>
                 </td>            
            </tr> 
               <?php $i++; ?>
               @endforeach 
            <tbody>
        </table> 
    </div>
</div> 
<!-- Insert Lab Resualt -->
<div class='modal fade' id='insert' tabindex='1' role='dialog' aria-labelledy='expampleCenterTitel' aria-hidden='true'>
            <div class='modal-dialog modal-dialog-centered' role='document'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h5 class='modal-title' id='exampleModalLongTitle'>Insert Labratory Result</h5>
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
                            <div class=row>                             
                                    <div class='form-group col-12'>
                                       <span><i  class='fa fa-user-md'></i> </span> <input type='file' class='form-control' name='res[]' placeholder='Resulet'>                                                      
                                   </div>
                                   <input type='text' name='id'  class='ID'>   
                                                                                                                                        
                               </div> 
                               

                   </div>
                    <div class='modal-footer'>
                        <button class='btn btn-secondary' data-dismiss='modal'>Close</button> 
                        <button type='hidden' class='btn btn-primary' >Insert</button> 
                    </div>
                    </form>
                </div>   
           </div>   
        </div> 
 <!-- update Lab Resualt -->
<div class='modal fade' id='update' tabindex='1' role='dialog' aria-labelledy='expampleCenterTitel' aria-hidden='true'>
            <div class='modal-dialog modal-dialog-centered' role='document'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h5 class='modal-title' id='exampleModalLongTitle'>Update Labratory Result</h5>
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
                            <div class=row>                             
                                    <div class='form-group col-12'>
                                       <span><i  class='fa fa-user-md'></i> </span> <input type='file' class='form-control' name='res[]' placeholder='Resulet'>                                                      
                                   </div>
                                   <input type='hidden' name='id'  class='ID'>                                                                                                            
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
 <script>
    $('.Lab_id').click(function(){
        $('.ID').val($(this).val());  
        
        
        $x  = $(this).val();
        console.log($x);    
      
      
    });

 </script>       
@endsection