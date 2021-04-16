@extends('layout.Doc')
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
    <span><i  class='fa fa-user-o'></i> </span>  <select id='inputState' class='form-control'>
                                                    <option selected>All</option>
                                                    <option>Comfiremed</option>
                                                    <option>Wating</option>                                                                                           
                                                </select>
    </div>
    <div clas='col-2 '>
       <span><i class='fa fa-search' ></i><span> <input type='text' class='form-control' placeholder='search'>
    </div>   
</div>
<div class = row>
    <div class='col-1'>
    </div>
    <div class='col-12'>
    <table  style='margin-top:30px;'class='table table-bordered table-hover'>
            <thead class='thead-light'>
                <th scope='col'>#</th>
                <th scope='col'>Card No</th>
                <th scope='col'>Name</th>
                <th scope='col'>Middel Name</th>
                <th scope='col'>Sex</th>
                <th scope='col'>DOB</th>
                <th scope='col'>Phone</th>
                <th scope='col'>Address</th>
                <th scope='col'>worda</th>
                <th scope='col'>kebele</th>
                <th scope='col'>Action</th>
            </thead>
            <tbody>
            <?php $i = $Pa->perPage() * ($Pa->currentPage() -1); ?>
                     @foreach($Pa as $Ho)
            <tr>
                 <td>{{ $i+1 }}</td>
                 <td>{{ $Ho->C_number }}</td>  
                 <td>{{ $Ho->fname }}</td>
                 <td>{{ $Ho->mname }}</td>
                 <td>{{ $Ho->sex }}</td>
                 <td>{{ $Ho->dob }}</td>
                 <td>{{ $Ho->Phone }}</td>
                 <td>{{ $Ho->Address }}</td> 
                 <td>{{ $Ho->worda }}</td>  
                 <td>{{ $Ho->kebel }}</td>  
                 <td> 
                 @php
                  if ($Ho->status == 0)
                   echo  "  
                       <button class='send btn btn-success btn-sm'  data-toggle='modal'  data-target='#confirem' value='$Ho->id'> Confirm</button>                       
                   ";
                 
                 else
                    echo  "<a class='btn-secondary btn-sm'> Confirmed</a>";
                 
                 @endphp
                 <a class='btn-primary btn-sm' href= "{{ URL::to('/Doc_singlePa/'.$Ho->id) }}" >detail</a>
                 
                  </td>            
            </tr> 
               <?php $i++; ?>
               @endforeach 
            <tbody>
        </table>  
  <div class="d-flex justify-content-right">
    {!! $Pa->links() !!}
</div>      
    </div>
</div>  
<div class='modal fade' id='confirem' tabindex='1' role='dialog' aria-labelledy='expampleCenterTitel' aria-hidden='true'>
            <div class='modal-dialog modal-dialog-centered' role='document'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h5 class='modal-title' id='exampleModalLongTitle'>Message</h5>
                        <button type='button' class='close' data-dismiss='modal' aria-label='close'>
                            <span aria-hidden='true'>&times;</span>
                        </button>  
                    </div> 
                    <div class='modal-body'>
                       <h4>Do You Want to Confirem This Patient?</h4>
                       
                       <form action="{{ route('Doc_PaConfirm') }}" method='post'>
                       @csrf
                       <input type='hidden' name='id' class='ID'>
                    
                     </div>                                                                                                                                   
                    <div class='modal-footer'>
                        <button class='btn btn-secondary' data-dismiss='modal'>Close</button> 
                        <button type='submit' class='btn btn-primary' >yes</button> 
                     </form>  
                    </div>
                 
                </div>   
           </div>   
        </div>  
        <script>
jQuery(document).ready(function(){
   $('.send').click(function(){
      $('.ID').val($(this).val());
      $x = $(this).val(); 
      console.log($x); 
   });
    }); 

 </script>                
@endsection