@extends('layout.app')
@section('content')
<div class='row'>
    <div class='col-6 col-md-9'>
        <h4 style='margin-top:30px; margin-bottom:10px'>Doctors</h4>
    </div>  
    <div class='col-3'>
    <span><i style='margin-top:10px'  class='fa fa-search'></i> </span><input type='text' class='form-control' style='margin-top:10px' name='Doc_search' placeholder='Search'>  
    </div>    
</div>    
<div class='row'>
    <div class='col-12'>
        <table class='table table-bordered table-hover'>
            <thead class='thead-light'>
                <th scope='col'>#</th>
                <th scope='col'>Name</th>
                <th scope='col'>Address</th>
                <th scope='col'>Phone</th>
                <th scope='col'>Email</th>
                <th scope='col'>Departemnet</th>
                <th scope='col'>Action</th>
            </thead>
            <tbody>
                 <tr>
                    <th scope='row'>1</th>   
                    <th>Dagim</th> 
                    <th>Addiss</th>
                    <th>0983977323</th>
                    <th>dagimtsegaye77@gamil.com</th>
                    <th>Electrical</th>
                    <th>Edit</th>
                 </tr>  
                 <tr>
                    <th>2</th>   
                    <th>Dagim</th> 
                    <th>Addiss</th>
                    <th>0983977323</th>
                    <th>dagimtsegaye77@gamil.com</th>
                    <th>Electrical</th>
                    <th>Edit</th>
                 </tr> 
                 <tr>
                    <th>2</th>   
                    <th>Dagim</th> 
                    <th>Addiss</th>
                    <th>0983977323</th>
                    <th>dagimtsegaye77@gamil.com</th>
                    <th>Electrical</th>
                    <th>Edit</th>
                 </tr> 
                 <tr>
                    <th>4</th>   
                    <th>Dagim</th> 
                    <th>Addiss</th>
                    <th>0983977323</th>
                    <th>dagimtsegaye77@gamil.com</th>
                    <th>Electrical</th>
                    <th>Edit</th>
                 </tr> 
                 <tr>
                    <th>5</th>   
                    <th>Dagim</th> 
                    <th>Addiss</th>
                    <th>0983977323</th>
                    <th>dagimtsegaye77@gamil.com</th>
                    <th>Electrical</th>
                    <th>Edit</th>
                 </tr> 
                 <tr>
                    <th>6</th>   
                    <th>Dagim</th> 
                    <th>Addiss</th>
                    <th>0983977323</th>
                    <th>dagimtsegaye77@gamil.com</th>
                    <th>Electrical</th>
                    <th>Edit</th>
                 </tr> 
                 <tr>
                    <th>7</th>   
                    <th>Dagim</th> 
                    <th>Addiss</th>
                    <th>0983977323</th>
                    <th>dagimtsegaye77@gamil.com</th>
                    <th>Electrical</th>
                    <th>Edit</th>
                 </tr> 
            <tbody>
        </table>        

    </div>
</div>
@endsection