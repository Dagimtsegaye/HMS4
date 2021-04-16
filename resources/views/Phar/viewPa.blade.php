@extends('layout.Phar')
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
    <div class='col-10'>
    <table  style='margin-top:30px;'class='table table-bordered table-hover'>
            <thead class='thead-light'>
                <th scope='col'>#</th>
                <th scope='col'>Card No</th>
                <th scope='col'>Name</th>          
                <th scope='col'>Sex</th>          
                <th scope='col'>Time</th>  
                <th scope='col'>Prescription</th>         
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
                 <td>{{ $Ho->created_at->diffForHumans() }}</td>
                 <td>{{ $Ho->Pre }}</td>
                 <td><button class='Lab_id btn btn-primary btn-sm' value="{{ $Ho->Pa_id }}" data-toggle='modal'  data-target="#insert">Accept</button>
                 </td>            
            </tr> 
               <?php $i++; ?>
               @endforeach 
            <tbody>
      </table> 
    </div>
</div>  
@endsection