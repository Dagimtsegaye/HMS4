<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
   
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<style>
span{
    position:absolute;
    margin-left: 2px;
    height: 35px;
    display: flex;
    align-items: center;   
}
.fa {
    color: blue;
}
.sidbar_border {
    border-style: solid;
    border-width: 1px;
    border-color: 	#FFEBCD;
   
}
.znav {
    font-size: 25px;
    font-family:verdana;
    color:  #4169E1; 
    
}

</style>
</head>
<body>
<div class="container">
<div class = 'sidbar_border'>
        <nav class='navbar navebar-light bg-light justify-content-between'> 
        <p class= 'znav' ></p>
                 <p class= 'znav' >Hospital Managemnt System</p>
                 <p class= 'znav' ></p>
                 <p class= 'znav' ></p>
        </nav>
    </div>
<div class="row">
    <div class = "col-md-4">
    <img src = "image/final.png" style = 'height:470px; width:370px'>   
    </div> 
    <div class = "col-md-4">
        <div class="card text-center bg-light text-black">
            <div class="card-header">
            <img src = "image/login2.jpg" style = "height:150px; width:150px; border-radius:60%" alt="Login to the System" > 
            </div>   
            @if(session('status'))
                <div class="alet alert-danger" roll="alert">
                         {{ session('status') }}
                 </div>
              @endif     
         <div class="card-body"  style='margin-left:00px'; >
                               
                    @error('UserName')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                   <form action="login" method='post'>  
                            @csrf                      
                            <div class="form-group">  
                                <span>
                                   <i  class='fa fa-user-o'>  </i>
                                </span>
                                                                                     
                             <input type='text'  class= "form-control" name="UserName" placeholder="UserName">                                                           
                            </div>  
                                        @error('password')
                                            <div class="text-danger">
                                            {{ $message }}
                                            </div>
                                        @enderror
                                <div class="form-group">    
                                <span>
                                   <i  class='fa fa-key'>  </i>
                                </span>                                                                         
                                       <input type="password" class="form-control" name="password" placeholder="Password">                                                                                              
                                 </div>
                            <div class="form-group">                            
                                     <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name='roll' value="1" id="defaultCheck1">
                                                <label class="form-check-label" for="defaultCheck1">
                                                <h6> Remeber Me </h6>
                                                </label>
                                     </div>
                                    <button type="submit" class="btn btn-primary btn-sm">Login In</button>
                                    <a href="#"> Forgot Password?</a>                                                       
                            </div>
                      </form>
    </div>
    <div class="card-footer text-muted">
    Dani  | Web App Developer
    </div>
    </div>  
    </div>
    </div>

</div>     
</body>

</html>