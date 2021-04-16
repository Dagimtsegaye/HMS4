@extends('layout.Recp')
@section('content')
<div class='row'>

    <div class='col-1'>
    </div>

    <div clas='col-3'>
        <h3>Patient List</h3>
    </div>
    <div class='col-6'>
    </div>
    <div clas='col-2 '>
       <span><i class='fa fa-search' ></i><span> <input type='text' class='form-control' placeholder='search'>
    </div>   
</div>
<div class = row>
    <div class='col-1'>
    </div>
    <div class='col-12'>
    @if(session()->has('sent'))
                <div class = "alert alert-success">
                  {{ session()->get('sent') }}
                  </div>
                    @endif 
    <table  style='margin-top:30px;'class='table table-bordered table-hover'>
            <thead class='thead-light'>
                <th scope='col'>#</th>
                <th scope='col'>Card No</th>
                <th scope='col'>Name</th>          
                <th scope='col'>Sex</th>
                <th scope='col'>DOB</th>
                <th scope='col'>Phone</th>                 
                <th scope='col'>Address</th>  
                <th scope='col'>Worda</th>   
                <th scope='col'>kebele</th> 
                <th scope='col'>status</th>        
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
                 <td>{{ $Ho->dob }}</td>
                 <td>{{ $Ho->Phone }}</td>
                 <td>{{ $Ho->Address }}</td>
                 <td>{{ $Ho->worda }}</td>
                 <td>{{ $Ho->kebel }}</td>
                 <td> 
                  @php
                   if($Ho->status == 2) 
                        echo 'Confiremed';
                   else
                        echo 'Wating...';     
                  @endphp 
                  </td>
                 <td>
                 @php
                 if($Ho->status == 1)
                  echo "<button class='send  btn btn-primary btn-sm' data-toggle='modal' value=' $Ho->id'  data-target='#asigne'>Send</button>";
                 else
                  echo "<button class='btn btn-success btn-sm' data-toggle='modal' id='senit' data-target='#sent'>Sent</button>";
                 @endphp
                </td>            
            </tr> 
               <?php $i++; ?>
               @endforeach 
            <tbody>
        </table> 

    </div>
</div>    
               <!-- Alerady sent Modal -->
<div class='modal fade' id='sent' tabindex='1' role='dialog' aria-labelledy='expampleCenterTitel' aria-hidden='true'>
            <div class='modal-dialog modal-dialog-centered' role='document'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h5 class='modal-title' id='exampleModalLongTitle'>Error</h5>
                        <button type='button' class='close' data-dismiss='modal' aria-label='close'>
                            <span aria-hidden='true'>&times;</span>
                        </button>  
                    </div> 
                    <div class='modal-body'>
                       <h3>Request alerady Sent</h3>
                     </div>                                                                                                                                   
                    <div class='modal-footer'>
                        <button class='btn btn-secondary' data-dismiss='modal'>Close</button> 
                       
                    </div>
                 
                </div>   
           </div>   
        </div>         
<!-- Request to lab Modal -->
<div class='modal fade' id='asigne' tabindex='1' role='dialog' aria-labelledy='expampleCenterTitel' aria-hidden='true'>
            <div class='modal-dialog modal-dialog-centered' role='document'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h5 class='modal-title' id='exampleModalLongTitle'>Which Docter You Want To asigne?</h5>
                        <button type='button' class='close' data-dismiss='modal' aria-label='close'>
                            <span aria-hidden='true'>&times;</span>
                        </button>  
                    </div> 
                    <div class='modal-body'>
                        <form action="Recp_statusUpdate" method='post' >
                           
                         @csrf
                            <div class=row>                             
                                    <div class='form-group col-12'>
                                       <span><i  class='fa fa-user-md'></i> </span> <input type='text' class='form-control' name='res[]' placeholder='Dr.name'>                                                      
                                   </div>  
                                   <input type="hidden"  class='ID' name='id'  >                                                                                                                  
                            </div> 
                     </div>                                                                                                                                    
                    <div class='modal-footer'>
                        <button class='btn btn-secondary' data-dismiss='modal'>Close</button> 
                        <button type='submit' class='btn btn-primary' >Go</button> 
                    </div>
                    </form>
                </div>   
           </div>   
</div>
        

        
     
 <script>
    jQuery(document).ready(function(){
   $('.send').click(function(){
      $('.ID').val($(this).val()); 
      
  

   });
    }); 

 </script>       
@endsection