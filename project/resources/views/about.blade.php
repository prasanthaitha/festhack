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
<body>

<div class="row">
         <div class="brand-logo left"><img src="{{asset('/img/al1.jpg')}}" style="height:60px;width:100px; "></div>
         <div class="brand-logo right"><img src="{{asset('/img/ar1.jpg')}}" style="height:60px;width:100px; "></div>
         <div class="brand-logo center"><h4 style="font-family:Georgia, serif;color:#c6ff00 lime accent-32;">Swachh Bharat Abhiyan</h4></div>
    </div>
    
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
    
    <div class="container">
    <div class="card hoverable">
        <h3 class="center-align" style="font-family:Georgia;">About Swachh Bharat Abhiyan</h3>
        <br>
        <div style="padding:20px;">
        <h3>Swachh Bharat Abhiyan</h3>
        <div>Swachh Bharat Abhiyan is a campaign by the Government of India to clean the streets,roads and infrastructure of the country's 4,041 statutory cities and towns.
        The campaign was officially launched on 2 October 2014 at Rajghat, New Delhi, by Prime Minister Narendra Modi. It is India's largest ever cleanliness drive with 3 million government employees, and especially school and college students from all parts of India, participating in the campaign. The objectives of Swachh Bharat are to reduce or eliminate open defecation through construction of individual, cluster and community toilets. The Swachh Bharat mission will also make an initiative of establishing an accountable mechanism of monitoring latrine use.
        </div>
        <h3>Background</h3>
        <div>Officially starting as of 1 April 1999, the Government of India restructured the Comprehensive Rural Sanitation            Programme and launched the Total Sanitation Campaign which was later renamed Nirmal Bharat Abhiyan by Prime Minister        Manmohan Singh.Nirmal Bharat Abhiyan was restructured by Cabinet approval on 24 September 2014 as Swachh Bharat            Abhiyan.

             Swachh Bharat Abhiyan was launched on 2nd October 2014, and aims to eradicate open defecation by 2019,Swachh Bharat Abhiyan is a national campaign, covering 4,041 statutory cities and towns.
        </div>
        <h3>Finance</h3>
        <div>
            The programme has also received funds and technical support from the World Bank, corporations as part of corporate social responsibility initiatives, and by state governments under the Sarva Shiksha Abhiyan and Rashtriya Madhyamik Shiksha Abhiyan schemes.[2] Swachh Bharat Abhiyan is expected to cost over ₹620 billion (US$9.2 billion).[5][6] The government provides an incentive of ₹15,000 (US$220) for each toilet constructed by a BPL family.[1] Total fund mobilised under Swachh Bharat Kosh (SBK) as of 31 January 2016 stood at ₹3.69 billion (US$55 million).[7] An amount of ₹90 billion (US$1.3 billion) was allocated for the mission in the 2016 Union budget of India.[8]

           
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