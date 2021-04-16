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
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

   
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script
  src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"
  integrity="sha256-T0Vest3yCU7pafRw9r+settMBX6JkKN06dqBnpQ8d30="
  crossorigin="anonymous"></script>



 
 <style>
 body {
   background-color: 	white;
 }
 .sidenav {
  width: 191px; /* 0 width - change this with JavaScript */
  position: fixed; /* Stay in place */
  z-index: 1; /* Stay on top */
  
  background-color:white; 
  overflow-y: hidden; /* Disable horizontal scroll */
  padding-top:0px; /* Place content 60px from the top */
  transition: 0.5s; /* 0.5 second transition effect to slide in the sidenav */
}

/* The navigation menu links */
.sidenav a{
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 15px;
  color: black;
  display: block;
  border: none;
  background: white;
  width:100%;
  text-align: left;
  cursor: pointer;
  outline: none;
  transition: max-height 0.5s;
}
.hii {
    color: red;
}
.fa {
  position:absolute;
  margin-left: 2px;
  height: 35px;
  display: flex;
  align-items: center;
  color:  #4169E1;  
}
.fa:hover{
    font-size: 30px;
} 


.sidbar_border {
    border-style: solid;
    border-width: 1px;
    border-color: 	#FFEBCD;
   
}
.dashbord {
    margin-left:10px;
    margin-top: 1px;
}
a.zlink {
    font-size: 19px;
}
a.zlink:hover {
    color: #4169E1;
}
.hms {
    margin-left : 25px;
    margin-top: 0px;
}
.hmss {
  
    margin-left : 17px;
    margin-top: 0px; 
    margin-right: 12px;
    font-size: 13px;
    width:18px;
    height:18px;
    padding-left: 5px;
    color: white;
    background-color: red;
    border-radius: 50%;
    
}
.hmss:hover {
    font-size: 20px;
    width:28px;
    height:28px;
}

.sideshow {
    width: 0px;
}
.znav {
    font-size: 25px;
    font-family:verdana;
    color:  #4169E1; 
    
}
.stuff {
    font-size: 17px;
    margin-right: 12px;
}
.main_content {
    margin-left: 195px;
    transition: 0.5s;
}
.main_slid {
    margin-left: 0px;
    transition: 0.5s;
}
.badgee{
  position:absolute;
  top: 0;
  right: -5px;
  display: inline-block;
  width: 8px;
  height: 18px;
  margin-left: 20px;
  border-radius: 50%;
  background-color: red;
}

 </style>   
</head>
<body>
<div class='container-fluid'>
   <div class = 'sidbar_border'>
        <nav class='navbar navebar-light bg-light justify-content-between'> 
            <h1 class='navbar-brand'> 
            <span class='form-inline'>
            <i  id = 'open' class='fa fa-bars'></i>
           
            </span>
            <div class='hms'>  HMS  </div> </h1>          
                 <p class= 'znav'>Hospital Managemnt System</p>
                      <span class='form-inline'>                 
            <i  id = 'show_notfy' class='btnn4 fa fa-bell'></i>
            <div  class='hmss'> 5 </div>       
                          <p class="stuff">Reception</p>
                              <a href='logout'><img src='image/final.png' width='30', height='30', style= "border-radius:60%"></a>
                        </span>
        </nav>
    </div>
    <div class ='ccc4'>
    <div class= 'row justify-content-md-center'>
            <div class = 'col col-md-6'>
                <div class = 'alert alert-primary' role='alert' >
                    You have an appointemnt with dagim on monday
                </div>  
                <div class = 'alert alert-success' role='alert' >
                    You have an appointemnt with Abi on Tuday
                </div> 
                <div class = 'alert alert-success' role='alert' >
                  There is a New notice from manager
                </div> 
            </div>   
        </div> 
</div> 

 <div id="mySidenav" class="sidenav">
    <div class = 'sidbar_border'>
              <button class='btnn dropdown-toggle'><span><i  class='fa fa-user-md'></i> </span>Manu</button>
                        <div class='ccc'>
                            <div class='cc' > <a class='cc' href="{{ route('viewRecpPa') }}">View</a></div>
                            <div class='cc'> <a class='cc' href="{{ route('AddPa') }}">Add</a></div>
                       </div>                                                     
        </div>
    </div>
    <div class="main_content">
        <main class="container-fluid">
            @yield('content')
        </main>
    </div>

</div>
</body>
<script>

$(document).ready(function(){   
    $('.btnn').click(function(){
        $('.ccc').toggleClass("hii");  
    });
    $('.btnn4').click(function(){
        $('.ccc4').toggleClass("item3");  
    });

    $('#open').click(function(){
        $('.sidenav').toggleClass('sideshow'); 
        $('.main_content').toggleClass('main_slid');         
    });
    $('#show_notfy').click(function(){
        $('.notifications').toggleClass('show.notifications');
    });
   
});
</script>

</html>