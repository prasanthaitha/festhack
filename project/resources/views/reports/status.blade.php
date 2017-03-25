
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport"  content="width=device-width ,initial-scale=1.0">
     <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/css/materialize.min.css">
<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
     <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
        <link rel="stylesheet" href="startcss.css">
        <link rel="stylesheet" href="./css/default.css">
        <link rel="stylesheet" href="./css/component.css">
        <script src="js/modernizr.custom.js"></script>

        <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>           
              <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script>
              <script src="startjs.js"></script>
    
    <script>
    $(document).ready(function(){
  $('.slider').slider({
    full_width: false,
    interval:5000,
    transition:800,
      height:400,
  });
       
});</script> 
    
</head>
    
    
    <!-- head end -->
    
    <!-- body start -->
    <body>
        
     <div class="row">
         <div class="brand-logo left"><img src="{{asset('/img/al1.jpg')}}" style="height:60px;width:100px; "></div>
         <div class="brand-logo right"><img src="{{asset('/img/ar1.jpg')}}" style="height:60px;width:100px; "></div>
         <div class="brand-logo center"><h4 style="font-family:Georgia, serif;color:#c6ff00 lime accent-32;">Swachh Bharat Abhiyan</h4></div>
    </div>
        
        <!-- nav bar start -->   
               <nav class="#4db6ac teal lighten-2">
                   
                  <div class="nav-wrapper">
                     <a href="/" class="brand-logo" style="color:white;">&emsp;Home</a>
                       <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                       <ul class="right hide-on-med-and-down">
                        <li class="active"><a href="/about">About</a></li>
                           
                       <li><a href="/contact">Contact us</a></li>
                       
                        </ul>
                      
                       <ul class="side-nav" id="mobile-demo">
                        <li><a href="sass.html">Sass</a></li>
                        <li><a href="badges.html">Components</a></li>
                           <!-- Dropdown Trigger -->
                       <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Dropdown<i class="material-icons right">arrow_drop_down</i></a></li>

                        <li><a href="collapsible.html">Javascript</a></li>
                        <li><a href="mobile.html">Mobile</a></li>
                    </ul>
                  </div>
               </nav>
              <!-- navbar ends -->
        
    <!-- Carousel starts -->          
        <div class="container-fluid">
                    
                     <div class="slider">
           
            
    <ul class="slides" style="height:540px;">
      <li>
        <img src="{{asset('/img/1.png')}}">
       
      </li>
      <li>
        <img src="{{asset('/img/2.png')}}">
        <div class="caption right-align">
         
         
        </div>
      </li>
        <li>
        <img src="{{asset('/img/3.jpg')}}">
        <div class="caption left-align">
          
          
        </div>
      </li>
        <li>
        <img src="{{asset('/img/4.jpg')}}">
        <div class="caption left-align">
        
            
        </div>
      </li>
       
  </ul>
             
</div>
              </div>
    
        <!-- Carousel end -->
       
    <!-- search end -->
        
        <div class="row">
        <div class="col s12 m2">
          <div class="card hoverable blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title">Recent Activities</span>
                <marquee direction="up" scrollamount="2px">
                <p>I am a very simple card.</p> 
                <p>I am good at containing </p>
                <p>small bits of information</p>
                <p> I am convenient because I</p>
                <p>require little markup to </p>
                
                </marquee>
            </div>
          </div>
        </div>
        


        <div class="col s12 m8">
          <div class="card hoverable blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title"></span>
               
                <h4>Your problem/ complaint status:{{$b}}<h4>
            </div>
          </div>
        </div>
                
           <div class="col s12 m2">
          <div class="card hoverable blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title">Recent Activities</span>
                <marquee direction="up" scrollamount="2px">
                <p>I am a very simple card.</p> 
                <p>I am good at containing </p>
                <p>small bits of information</p>
                <p> I am convenient because I</p>
                <p>require little markup to </p>
                
                </marquee>
            </div>
          </div>     
        
      </div>
        </div>


        
        
        <!-- footer -->
        
        <footer class="footer" style="background-color:darkgreen">
                        
                        <div class="container">
                    <div class="row">      
                            
                          <div class="col m1  pull-m1">
			             	<a href="#">
                                
				           </a>
		 	           </div>

			<div class="col m3 push-m1">
				<h5>SBM</h5><br>
				<p> Registered Office: 8/3, Asaf Ali Road,<br> 
					New Delhi-110002</p>
			</div>

			<div class="col m3 push-m2">
				<h5>Contact Number</h5><br>
				<p> Telephone No.: 0120-3962100<br> 
					Fax No. 0120-4374935</p>
			</div>

			<div class="col m3 push-m3">
				<p8><a href="https://www.facebook.com/" target="_blank">
        <img src="{{asset('/img/pic2.png')}}" alt= "link" width=50px height=50px style="padding:7px; position:relative; top:0px; margin:0px;"></a></p8>
    <p9><a href="https://twitter.com/login" target="_blank">
    <img src="{{asset('/img/pic3.png')}}" alt= "link" width=50px height=50px style="padding:7px; position:relative; top:0px; margin:0px;">
        </a></p9
			</div>
                                
                                
                         </div>
                        </div>
                        
                    
                        
                 <div class="footer-copyright">
                     <div class="container">
                       © 2014 Copyright All right reserved - Government of India
                    <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
                   </div>
               </div>
        </footer>