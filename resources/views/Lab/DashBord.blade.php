@extends('layout.Lab')
@section('content')
<div class='row'>
            <div class='col col-md-2'>
                <div class = 'card' style='width:10rem;'> 
                    <img class='card-img-top' src='image/requ.png'alt="Docter" style='height:140px'> 
                    <div class='zbody card-body'>
                        <h5 class = 'card-title'> Requestes </h5>
                        <p class='card-text'> You have 5 Confiremd  and 6 Wating Request</p>
                        <a href="{{ route('Lab_viewPa') }}" class='btn btn-primary btn-sm'>Detail</a>
                    
                    </div>
               </div>  
            </div>    
</div>
@endsection