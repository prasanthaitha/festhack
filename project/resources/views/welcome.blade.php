
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
                        <li style="font-size:20px"><a href="/about">About</a></li>
                           
                       <li style="font-size:20px;"><a href="/contact">Contact us</a></li>
                       
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
        <div class="container">
        <form  role="search" action="{{URL::to('/citysearch')}}" method="post">
        <div class="input-field"> {{ csrf_field() }}
          <input id="search" type="search" name="search"  placeholder="Search what's happening in ur city" required>
          <label class="label-icon" for="search"><i class="material-icons">search</i></label>
          <i class="material-icons">close</i>
        </div>
      </form>
        
        </div>
    <!-- search end -->
        
        <div class="row">
        <div class="col s12 m2">
          <div class="card hoverable blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title">Recent Activities</span>
                <marquee direction="up" scrollamount="2px">
                <p>Cleanliness drive in Jabalpur.</p> 
                <p>Survey for municipal waste management system </p>
                <p>Plantation drive</p>
                <p> Modi Rally for awareness in NewDelhi </p>
                
                </marquee>
            </div>
          </div>
        </div>
            
            
            <div class="col s12 m8">
          <div class="card hoverable">
            <div class="card-content">
           <center> <h3 style="color:#29b6f6 light-blue lighten-1;font-family:Georgia, serif;"> Swachh Bharat Abhiyan - At a Glance</h3></center>
             
      <div class="row">
        <div class="col s12 m4">
          <a href="details"><div class="card hoverable #f3e5f5 purple lighten-5">
            <div class="card-content white-text">
                 <h4 class="center-align" style="color:gray;"> 3,67,39,469</h4>
                 <h5 class="center-align" style="color:gray;"> Toilets Built</h5>
                 <p class="center-align" style="color:gray;">Since 2nd Oct 2014</p>
            </div>
              </div></a>
        </div>
        <div class="col s12 m4">
          <a href="details"> <div class="card hoverable  #f3e5f5 purple lighten-5">
            <div class="card-content white-text">
              
              <h4 class="center-align" style="color:gray;"> 1,17,356</h4>
                 <h5 class="center-align" style="color:gray;"> Open Defecation Free Village</h5>
            </div>
              </div></a>
        </div>
          <div class="col s12 m4">
           <a href="details"><div class="card hoverable #f3e5f5 purple lighten-5">
            <div class="card-content white-text">
            <h4 class="center-align" style="color:gray;"> 119</h4>
                 <h5 class="center-align" style="color:gray;"> Open Defecation Free District</h5>
            </div>
               </div></a>
        </div>
      </div>
                
            </div>
          </div>
        </div>
            
        <div class="col s12 m2">
          <div class="card hoverable blue-grey darken-1">
            <div class="card-content white-text">
              <span class="card-title">Upcoming Events</span>
                <marquee direction="up" scrollamount="2px">
                <p>Cleanliness drive in Jabalpur.</p> 
                <p>Survey for municipal waste management system </p>
                <p>Plantation drive</p>
                <p> Modi Rally for awareness in NewDelhi</p>
                <p>require little markup to </p>
                
                </marquee>
            </div>
          </div>
        </div>
      </div>
        
       <div class="container">
    <div class="row">    
    <div class="col m7 m7 ">
    <div class="card hoverable" style="background-color:gray; align:center;">
    <div class="card-image waves-effect waves-block waves-light">
        <a href="reports/create"> <img class="activator" src="{{asset('/img/f1.png')}}" style="height:30%;"></a>
    </div>
    
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
      <p>Here is some more information about this product that is only revealed once clicked on.</p>
    <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Placeholder" id="first_name" type="text" class="validate">
          <label for="first_name">Name</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Email</label>
        </div>
      </div>
       <div class="row">
        <div class="input-field col s5">
          <input placeholder="Placeholder" id="first_name" type="text" class="validate">
          <label for="first_name">City</label>
        </div>
        <div class="input-field col s5">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">State</label>
        </div>
        <div class="input-field col s2">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Zip code</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <textarea id="textarea1" class="materialize-textarea"></textarea>
          <label for="textarea1">Complaint/Problem Description</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <textarea id="textarea1" class="materialize-textarea"></textarea>
          <label for="textarea1">Suggestion</label>
        </div>
      </div>
        <button class="btn waves-effect waves-light" type="submit" name="action">Submit
    
  </button>
    </form>
  </div>
    </div>
  </div>
        </div>
        
        <div class="col m4 m4">
          <div class="card #f3e5f5 purple lighten-5">
            <div class="card-content black-text">
              <form  role="search" action="{{URL::to('/rstatus')}}" method="post">
              {{ csrf_field() }}
                <input Placeholder="Ticket no" name="rstatus" id="rstatus" type="text" class="validate">
                
                <input Placeholder="Email" name="rmail" id="rmail" type="text" class="validate">
                
                <button class="btn waves-effect waves-light" type="submit" name="action">Check Status
  </button></form>
            </div>
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
                    
                   </div>
               </div>
        </footer>