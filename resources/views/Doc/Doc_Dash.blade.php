@extends('layout.Doc')
@section('content')
<div class='row'>
           <div class='col col-md-2'>
                <div class = 'card' style='width:10rem;'> 
                    <img class='card-img-top' src='image/pe.png'alt="Docter" style='height:140px'> 
                    <div class='zbody card-body'>
                        <h5 class = 'card-title'>Patient infromation </h5>
                        <p class='card-text'>You Have Visted 5 Patient and 3 Wating</p>
                       
                        <a href="{{ route('Doc_viewPa') }}" class='btn btn-primary btn-sm'>Detail</a>
                    
                    </div>
               </div>  
            </div> 
            <div class='col col-md-2'>
                <div class = 'card' style='width:10rem;'> 
                    <img class='card-img-top' src='image/apo.png'alt="Docter" style='height:140px'> 
                    <div class='zbody card-body'>
                        <h5 class = 'card-title'> Apointemnts </h5>
                        <p class='card-text'> You have 5 appointemntes</p>
                        <p>.</p>
                     
                        <a href="{{ route('viewPa') }}" class='btn btn-primary btn-sm'>Detail</a>
                    
                    </div>
               </div>  
            </div> 
            <div class='col col-md-2'>
                <div class = 'card' style='width:10rem;'> 
                    <img class='card-img-top' src='image/requ.png'alt="Docter" style='height:140px'> 
                    <div class='zbody card-body'>
                        <h5 class = 'card-title'> Requestes </h5>
                        <p class='card-text'> You have 5 lab and 6 medicne Request</p>
                        <p>.</p>
                        <a href="{{ route('viewPa') }}" class='btn btn-primary btn-sm'>Detail</a>
                    
                    </div>
               </div>  
            </div> 
            <div class='col col-md-2'>
                <div class = 'card' style='width:10rem;'> 
                    <img class='card-img-top' src='image/conn.jpg'alt="Docter" style='height:140px'> 
                    <div class='zbody card-body'>
                        <h5 class = 'card-title'> Confiremed Requestes </h5>
                        <p class='card-text'>  15 lab and 16 medicne Requestes are Confiremed</p>
                      
                        <a href="{{ route('viewPa') }}" class='btn btn-primary btn-sm'>Detail</a>                 
                    </div>
               </div>  
            </div> 
    
</div>

@endsection