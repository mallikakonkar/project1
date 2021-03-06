

<!DOCTYPE html>
<?php
include "connection.php";
?>
<html lang="en">
  <head>
    <title>Direction One Elements</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
      <style>
          .con1{
/*              margin-left:-300px;*/
              z-index: 100
          }
          
          
          .container1 {
/*  position: inherit;*/
/*  text-align: center;*/
              width: 100%;
  color: white;
              
}    
          
          #id1:hover{color: #77212E;
          transition: .5s ease;}
          a.hover{background-color:darkred;}
          
    .container2 {
 
}
.image1{
  display: block;
}
.container2:hover .overlay1 {
  opacity: 0.8;

}
/*
          .container2:hover .centered1{
           background-color:skyblue;
  color: #77212E ;
}
*/
.mark1 { 
 background-color: RGBA(119,33,46,0.9);
/*   text-shadow: 0 2px 0 black, 0 0 10px black;*/
  color: white;
    width: 100%;
    padding: 0px px;
    text-align: center;
    
}

    .centered1{
/*  color: white;*/
  font-size: 32px;
  width: 400px;
  position:absolute;
 top: -9%;
    
        
font-family: sans-serif;
        line-height: 1;
    font-weight: 500;

}
        
    .sizepic{
            height: 350px;
            width: 450px;
        }
    .overlay1 {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
/*
        height: 275px;
        width: 405px;
*/
/*
  height: 350px;
  width: 350px;
*/
  opacity: 0;
  transition: .5s ease;
  background-color:  #77212E;
}
.text1 {
  color: white;
  
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
  
   
    
}
.flex-container {
  display: flex;
  justify-content:space-around;
  background-color: black;
    
    
}

.flex-container > div {
/*  background-color:white;*/
  width: 450px;
    height: 350px;
  margin: 15px;
  text-align: center;
  line-height: 15px;
  font-size: 30px;
  padding: 10px;
    justify-content: space-around
}

 .flex-item-left {
  flex: 33%;
}
        .flex-item-center{
  flex: 33%;
}
    .flex-item-right {
  flex: 33%;
}
 @media (max-width: 1200px) {
  .flex-container {flex-direction: column;
    
  }
}
          
          
          
          .align1{text-align: center; font-size: 25px;
    margin-bottom: 0; color: black;}
         
          .a { font-family: 'Enriqueta', arial, serif; line-height: 1.25; margin: 0 0 10px; font-size: 30px; font-weight: bold; }
          
          
          
      </style>
  </head>
  <body>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand"  href="index.php">Direction One Elements</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
	        	<li class="nav-item"><a href="project.php" class="nav-link">Projects</a></li>
	        	<li class="nav-item"><a href="testimonials.php" class="nav-link" style="display:none">Testimonials</a></li>
	        	<li class="nav-item"><a href="blog.php" class="nav-link">Blogs</a></li>
                <li class="nav-item"><a href="reqaquote.php" class="nav-link">Request a Quote</a></li>
                <li class="nav-item"><a href="services.html" class="nav-link">Media Coverage</a></li>
	          <li class="nav-item"><a href="contactus.html" class="nav-link">Contact Us</a></li>
            
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <section class="home-slider js-fullheight owl-carousel">
      <div class="slider-item js-fullheight" style="background-image:url(images/bg_2.jpg);">
      	<div class="overlay"></div>
        <div class="container con1" >
          <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
          <div class="col-md-7 text ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">You Dream <br>We Design</h1>
            <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">We travel, we google and we desire  that  a place where we can <br> truly be ourselves.  Our mission is to make it into reality .</p>
            <p><a href="project.php" class="btn btn-white btn-outline-white px-4 py-3 mt-3">View our works</a></p>
          </div>
        </div>
        </div>
      </div>

      <div class="slider-item js-fullheight" style="background-image:url(images/bg_4.jpg);">
      	<div class="overlay" id="con1"></div>
        <div class="container con1">
          <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
          <div class="col-md-7 text ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">We're Open In<br> The Pandemic</h1>
            <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">During this pandemic, we offer online consultancy <br> and take utmost precaution to avoid contact. Safety<br> of our clients is of immense importance to us</p><p><a href="project.php" class="btn btn-white btn-outline-white px-4 py-3 mt-3">View our works</a></p>
          </div>
        </div>
        </div>
      </div>
        
        <div class="slider-item js-fullheight" style="background-image:url(images/bg_5.jpg);">
      	<div class="overlay" id="con1"></div>
        <div class="container con1">
          <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
          <div class="col-md-7 text ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Home is an extention<br> of your personality</h1>
            <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">We all dream of a beautiful  home and our passion is to<br> design such a  home for you. Every little idea that you may have<br> wanted in your home…share it with us and we will bring<br> it all together.  </p><p><a href="project.php" class="btn btn-white btn-outline-white px-4 py-3 mt-3">View our works</a></p>
          </div>
        </div>
        </div>
      </div>
        
        <div class="slider-item js-fullheight" style="background-image:url(images/bg_1.jpg);">
      	<div class="overlay" id="con1"></div>
        <div class="container con1">
          <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
          <div class="col-md-7 text ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">What you see <br> is what you get.</h1>
            <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Our 3D redention of the design space is so accurate that <br> the final out come is exactly as it has been envisioned.We work <br> with budgets and within stipulated time. No surprises there.</p><p><a href="project.php" class="btn btn-white btn-outline-white px-4 py-3 mt-3">View our works</a></p>
          </div>
        </div>
        </div>
      </div>
    </section>
      
		
		<section class="ftco-services bg-light">
			<div class="container">
				<div class="row">
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-idea"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Perfectly <br>Design</h3>
                <p>We undertake detailed interaction with the end user to understand the exact functional and look n feel  needs of that space thereby creating a user friendly and aesthetically pleasing environment. </p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-compass-symbol"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Carefully Planned</h3>
                <p>Our USP is that we are process driven and very systematic in our approach. We deligently plan every  detail of design  and execution.  Considering there are so many different vendors, contractors, products that we deal with such an approach is extremely productive.</p>
              </div>
            </div>    
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon d-flex justify-content-center align-items-center">
            		<span class="flaticon-layers"></span>
              </div>
              <div class="media-body p-2 mt-3">
                <h3 class="heading">Smartly Executed</h3>
                <p>Thanks to our systematic approach and an experienced team , delays, increased costs  and “surprises “ are  completely avoided. Instead a  well  designed  space exactly as planned is meticulously executed to create “wow” results.</p>
              </div>
            </div>      
          </div>
        </div>
			</div>
            
      </section>
      
      
      
      
      
      <br>
      
      
                                    <a name="1"></a>

<!--      new code -->
      <section class="ftco-section">
			<span class="container">
				<div class="row justify-content-center mb-5 pb-3 no-gutters">
          <div class="col-md-7 heading-section ftco-animate">

            <h2 class="mb-4">Our Services</h2>
            <p><em></em></p>
          </div>
        </div>	
                
				<div class="row no-gutters">
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry">
                <div class ='block-20' style="background-image: url('images/s1.jpg');" >
                <div class ='container2' >
<!--
              <a href="blog-single.html" class='block-20' style="background-image: url('images/image_1.jpg');">
              </a>
-->
                
                <div class ='overlay1'>
                    <div class="text1">We have done designs for various residential projects ranging from bungalows to 4BHK premium residences. We truly good at Creating luxurious interiors that are “value for money “. </div>
                </div>
                    </div>
                    </div>
              <div class="text d-flex py-4">
<!--                <div class="meta mb-3">-->
<!--
                  <div><a href="#">Sep. 20, 2018</a></div>
                  <div><a href="#">Admin</a></div>
-->
<!--                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>-->
<!--                </div>-->
                <div class="desc pl-3">
	                <h3 class="heading1 a" ><a href="project.php">Residential Interiors</a></h3>
	              </div>
              </div>
            </div>
          </div>
        <div class="col-md-4 ftco-animate">
            <div class="blog-entry">
                <div class ='block-20' style="background-image: url('images/s2.jpg');" >
                <div class ='container2' >
<!--
              <a href="blog-single.html" class='block-20' style="background-image: url('images/image_1.jpg');">
              </a>
-->
                
                <div class ='overlay1'>
                <div class="text1">We are great at office interiors for small, and medium projects where a good design is valued.. We have handled projects starting from 500 sqft and are currently handling projects ranging from 3500 sqft to 80,000 sqft. </div>
                </div>
                    </div>
                    </div>
              <div class="text d-flex py-4">
<!--
                <div class="meta mb-3">
                  <div><a href="#">Sep. 20, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
-->     
                  
                <div class="desc pl-3">
	                <h3 class="heading1 a"><a href="project.php"><i></i>Office Interiors</a></h3>
	              </div>
              </div>
            </div>
          </div>
      <div class="col-md-4 ftco-animate">
            <div class="blog-entry">
                <div class ='block-20' style="background-image: url('images/s3.jpg');" >
                <div class ='container2' >
<!--
              <a href="blog-single.html" class='block-20' style="background-image: url('images/image_1.jpg');">
              </a>
-->
                
                <div class ='overlay1'>
                     <div class="text1">We provide consultancy services in the field of Architecture and have designed farmhouses. With 15 years of experience in this field our work speaks for itself </div>
                </div>
                    </div>
                    </div>
              <div class="text d-flex py-4">
<!--
                <div class="meta mb-3">
                  <div><a href="#">Sep. 20, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
-->
                <div class="desc pl-3">
	                <h3 class="heading1 a"><a href="project.php">Architectural designs </a></h3>
	              </div>
              </div>
            </div>
          </div>
        </div>
			</span>
		</section>
      <br><br>
      
      
      
      
      
      
      
      
      
<!--      old code-->
<!--
  <section class="ftco-section">
			<div class="container">
				<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate">
            <h2 class="mb-4">Our Services</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
          </div>
        </div>	
				<div class="row">
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry container2 block-20" >
                <a href="blog-single.html" class="block-20" style="background-image: url('images/s1.jpg');">
              </a>
                           <div class="overlayxy">
    <div class="text1">Hello World</div>
        </div>
               
              
                
              <div class="text d-flex py-4">
-->
<!--                <div class="meta mb-3">-->
<!--
                  <div><a href="#">Sep. 20, 2018</a></div>
                  <div><a href="#">Admin</a></div>
-->
<!--                  <div><a href="#" class="meta-chat"><span class="icon-chat">class="desc pl-3"</span> 3</a></div>-->
<!--                </div>-->
                
<!--
	                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
	              
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry container2 block-20" data-aos-delay="100">
              <a href="blog-single.html" class="block-20" id="id1"; style="background-image: url('images/s2.jpg');">
              </a>
                <div class="overlayxy">
                <div class="text1">Hello World</div>
                </div>
              <div class="text d-flex py-4">
-->
<!--                <div class="meta mb-3">-->
<!--
                  <div><a href="#">Sep. 20, 2018</a></div>
                  <div><a href="#">Admin</a></div>
-->
<!--                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>-->
<!--                </div>-->
<!--                <div class="desc pl-3">-->
<!--
	                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
	              </div>
              </div>
            </div>
          </div>
                    
                
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry container2 block-20" data-aos-delay="200">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/s3.jpg');">
              </a><div class="overlayxy">
                <div class="text1">Hello World</div>
                </div>
                
              <div class="text d-flex py-4 ">
                <div class="meta mb-3">
                  <div><a href="#">Sep. 20, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <div class="desc pl-3">
	                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
	              </div>
                  
                  ]
              </div>
            </div>
          </div>
        </div>
			</div>
		</section>
      
-->
      
<!--      end of old code -->
      
      
      
      
      
      
      
      
      
      
      
      
      
<!--
      <div class="container">
    		<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-7 heading-section ftco-animate">
            <h1 class="mb-4">Our Services</h1>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences</p>
          </div>
        </div>
    	</div>
      
      <div class="flex-container">
  <div class="flex-item-left" >        <div class="container2 ftco-animate" >
           <div class='container1' >
                    <img src="images/s1.jpg" alt="Snow" class='sizepic' >
                    <div class="centered1" ><div class="mark1" >Residential Interiors</div> </div> 
                    </div>
                     <div class="overlay1">
    <div class="text1">Hello World</div>
        </div>
            </div> </div>
  <div class="flex-item-center" >         <div class="container2 ftco-animate" >
           <div class='container1'>
                    <img src="images/s2.jpg" alt="Snow" class='sizepic' >
                    <div class="centered1" ><span class="mark1">Office Interiors</span></div> 
                    </div>
                     <div class="overlay1">
    <div class="text1">Hello World</div>
        </div>
            </div> </div>
  <div class="flex-item-right" >        <div class="container2 ftco-animate" >
           <div class='container1'>
                    <img src="images/s3.jpg" alt="Snow" class='sizepic' >
               <div class="centered1" ><span class="mark1">  Architectural designs  </span> </div> 
                    </div>
                     <div class="overlay1">
    <div class="text1">Hello World</div>
        </div>
            </div> </div>  
</div>
-->
      
      <!--<section>
        <div class="row">
                <div class="column">
                    <div class='container'>
                    <img src="img_snow.jpg" alt="Snow" style="width:100%">
                    
                    </div>
                </div>
        <div class="column">
            <img src="img_forest.jpg" alt="Forest" style="width:100%">
        </div>
        <div class="column">
            <img src="img_mountains.jpg" alt="Mountains" style="width:100%">
                </div>
          </div>
      
      </section>-->

		<section class="ftco-section ftc-no-pb">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-md-5 p-md-5 img img-2" style="background-image: url(images/about.jpg);">
					</div>
					<div class="col-md-7 wrap-about pb-md-5 ftco-animate">
	          <div class="heading-section mb-5 pl-md-5 heading-section-with-line">
	          	<div class="pl-md-5 ml-md-5">
		          	<span class="subheading">About</span>
<!--                    &amp; Architect Consultant in Italy-->
		            <h2 class="mb-4">Direction One Elements </h2>
	            </div>
	          </div>
	          <div class="pl-md-5 ml-md-5 mb-5">
							<p>Established in May 2015 by the husband and wife team of Ar Rupali Inamdar and Maneesh Konkar.  We specialize in residential &amp; office interiors and Architecture. I firmly believe in cost effective sustainable architecture and interior design and like to create efficient functional spaces which are pleasing to the eye. We undertake detailed interaction with the end user to understand the exact functional needs of that space thereby creating a user friendly and aesthetically pleasing environment. Minimalism in design appeals to us as such for us " less is more". Our USP is that we are very process driven and have a defined process for every activity of the job. This ensures control over the entire project in terms of design budgets execution quality and timelines. Our superior work processes ensure that the design that is envisioned is very smoothly executed into reality . What you see (in the modeling stage) is what you get.  No surprises there.</p>
							<p>  We offer three types of services: <br>
1. Online Consultancy<br>
We provide online consultancy in these pandemic times. We can design any room/ home/ work place and connect via the online medium. No contact required and your design is ready to be executed by you.<br>
2. Design consultancy:<br>
We understand your requirement, prepare layout plans, do 3D modeling, create technical drawings, estimate, contractor finalization and site supervision<br>
3. Design and Build. <br>
We design and execute the project. As such the contractors and vendors are our own. If you have little time to devote to the design and execution process it is advisable to opt for this option.
</p>
<!--							<p><a href="#" class="btn-custom">Learn More <span class="ion-ios-arrow-forward"></span></a></p>-->
						</div>
					</div>
				</div>
			</div>
      </section>
      
      <!--<section>
     
              
        <div class="flex-container">
                <div >
                 <div class="container2 " >
                    <div class='container1'>
                    <img src="images/staff-1.jpg " alt="Snow"  class="sizepic" >
                    <div class="centered1" >Centered</div></div> 
               <div class="overlay1">
    <div class="text1">Hello World</div>
  </div>
                    
                    </div>
                </div>
            
        <div >
            
       <div class="container2" >
           <div class='container1'>
                    <img src="images/staff-1.jpg" alt="Snow" class='sizepic'>
                    <div class="centered1" >Centered</div> 
                 </div>
           <div class="overlay1">
    <div classx="text1">Hello World</div>
  </div>
</div>
                    </div>        
        
            
        <div >
        <div class="container2">
           <div class='container1'>
                    <img src="images/staff-1.jpg" alt="Snow" class='sizepic' >
                    <div class="centered1" >Centered</div> 
                    </div>
                     <div class="overlay1">
    <div class="text1">Hello World</div>
        </div>
            </div>      
                  
                </div>
            
            </div>
      
      </section> -->
<br>
      <br>
      <br>

		<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_3.jpg);" data-stellar-background-ratio="0.5">
    	<div class="container">
    		<div class="row d-md-flex align-items-center justify-content-center">
    			<div class="col-lg-4">
    				<div class="heading-section pl-md-5 heading-section-white">
	          	<div class="pl-md-5 ml-md-5 ftco-animate">
		          	<span class="subheading">Some</span>
		            <h2 class="mb-4">Interesting Facts</h2>
	            </div>
	          </div>
    			</div>
    			<div class="col-lg-8">
    				<div class="row d-md-flex align-items-center">
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="2015">0</strong>
		                <span>Celebrating Creativity Since</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="18">0</strong>
		                <span>Happy Clients</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="52">0</strong>
		                <span>Finished Projects</span>
		              </div>
		            </div>
		          </div>


<!--
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="300">0</strong>
		                <span>Working Days</span>
		              </div>
		            </div>
		          </div>
-->
	          </div>
          </div>
        </div>
    	</div>
    </section>
      
      <br>
      <br>
      <br>
      <br>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-7 heading-section ftco-animate">
            <h2 class="mb-4">Our Main Projects</h2>
            <p>We have done work in the field of residential interiors -home for clients such as the Dinesh Jain and many more.

Our expertise also extends to the field of corporate office interiors where we have done works for Hershey's, ICA Pidillite, Marsh, Bluestar and more. 

 
</p>
          </div>
        </div>
    	</div>
    	<div class="container-wrap">
    		<div class="row no-gutters">
                
    			
    			
                
    			
                
    			<div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="project">
                     <a href="project-list.php?id=<?php echo 7 ?>">

	    				<img  src="images/p48.jpg" style="width:100%;" class="img-fluid" alt="Colorlib Template">
                        </a>
	    				<div class="text">
	    					<h3>A RESIDENCE IN JUHU</h3>
	    				</div>
	    				<a href="images/Po4.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
    				</div>
    			</div>
                
                <div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="project">
	    				     <a href="project-list.php?id=<?php echo 6 ?>">
                        <img src="images/p3.jpg" style="width:100%;" class="img-fluid" alt="Colorlib Template">
                        </a>
	    				<div class="text">
	    					<h3>Dinesh Jain Residence</h3>
	    				</div>
	    				<a href="images/Po3.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
    				</div>
    			</div>
                
                <div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="project">
                        <a href="project-list.php?id=<?php echo 5 ?>">

	    				<img src="images/p2.jpg" style="width:100%;" class="img-fluid" alt="Colorlib Template">
                        </a>
	    				<div class="text">
	    					<h3>ICA Pidillite Experience Center</h3>
	    				</div>
	    				<a href="images/Po2.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
    				</div>
    			</div>
                
                <div class="col-md-6 col-lg-3 ftco-animate">
    				<div class="project">
                        
                        <a href="project-list.php?id=<?php echo 4 ?>">

	    				<img src="images/p1.jpg" style="width:100%;" class="img-fluid" alt="Colorlib Template">
                        </a>
	    				<div class="text">
	    					<h3>Hershey's Main Office</h3>
	    				</div>
	    				<a href="images/Po1.jpg" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="icon-expand"></span>
	    				</a>
    				</div>
    			</div>
                
                
    		</div>
    	</div>
    </section>
    
      <br>
      <br>
      <br>
      <br>
    	<section class="ftco-section ftc-no-pb">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-md-5 p-md-5 img img-2 order-md-last" style="background-image: url(images/img.jpg);">
					</div>
					<div class="col-md-7 wrap-about pb-md-5 ftco-animate">
	          <div class="heading-section mb-md-5 pl-md-5 heading-section-with-line">
	          	<div class="pr-md-5 mr-md-5">
		          	<span class="subheading">Leadership team</span>
		            <h2 class="mb-4">Our Team</h2>
	            </div>
	          </div>
	          <div class="pr-md-5 mr-md-5">
							<p><b>Principal Architect - Rupali Inamdar</b> is an alumni of  Rachana Sansad Academy of Architecture – 1994. She has worked with prominent Architects in Mumbai and Pune for over 15 years in the field of Architecture Design and worked on mulptiple Architecture and commercial interior projects. She also taught as a visiting faculty at various colleges & was a  consultant to architectural firms. She believes in simple elegant and economical designs that appear luxurious and grand without having to spend as much.
<b>Director – Maneesh Konkar</b> is a  PGDM from Indian Institute of Management Bangalore 1995 and is a Business Growth Consultant & Faculty at SPJIMR & Great Lakes. He handles the business aspect of the firm that is marketing and finance.
</p>
<!--							<p><a href="contactus.html" class="btn-custom">Learn More <span class="ion-ios-arrow-forward"></span></a></p>-->
						</div>
					</div>
				</div>
			</div>
		</section>  
      
      
<!--
    <section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate">
            <h2 class="mb-4">Our Clients</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel" items="4" style="z-index: 150">
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/c1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5 pl-4 line">Pidilite</p>
-->
<!--                    <p class="name">Pidilite</p>-->
<!--                    <span class="position">Marketing Manager</span>-->
<!--
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/c2.jpg)">
-->
<!--
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
-->
<!--                  </div>-->
<!--
                  <div class="text">
                    <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Garreth Smith</p>
                    <span class="position">Interface Designer</span>
                  </div>
-->
<!--
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/person_3.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Garreth Smith</p>
                    <span class="position">UI Designer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Garreth Smith</p>
                    <span class="position">Web Developer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Garreth Smith</p>
                    <span class="position">System Analyst</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
-->
			
<!--
		<section class="ftco-section">
			<div class="container">
				<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate">
            <h2 class="mb-4">Our Architect Team</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
          </div>
        </div>	
				<div class="row">
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img" style="background-image: url(images/staff-1.jpg);"></div>
							<div class="text pt-4">
								<h3>David Smith</h3>
								<span class="position mb-2">Achitect</span>
								<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
								<ul class="ftco-social d-flex">
	                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
	                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
	                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
	                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
	              </ul>
							</div>
						</div>
					</div>
-->
<!--
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img" style="background-image: url(images/staff-2.jpg);"></div>
							<div class="text pt-4">
								<h3>David Smith</h3>
								<span class="position mb-2">Achitect</span>
								<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
								<ul class="ftco-social d-flex">
	                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
	                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
	                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
	                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
	              </ul>
							</div>
						</div>
					</div>
-->
<!--
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img" style="background-image: url(images/staff-3.jpg);"></div>
							<div class="text pt-4">
								<h3>David Smith</h3>
								<span class="position mb-2">Achitect</span>
								<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
								<ul class="ftco-social d-flex">
	                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
	                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
	                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
	                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
	              </ul>
							</div>
						</div>
					</div>
-->
<!--
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img" style="background-image: url(images/staff-4.jpg);"></div>
							<div class="text pt-4">
								<h3>David Smith</h3>
								<span class="position mb-2">Achitect</span>
								<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
								<ul class="ftco-social d-flex">
	                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
	                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
	                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
	                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
	              </ul>
							</div>
						</div>
					</div>
-->
<!--
				</div>
			</div>
		</section>
-->
    <br>
    <br>
      <br>
      <br>
      <section>
              <div class="row justify-content-center mb-5 pb-3 no-gutters">
          <div class="col-md-7 heading-section ftco-animate ">
            <h2 class="mb-4">Our Clients</h2>
            <p></p>
          </div>
        </div>
      <div class="rowlogo">
  <div class="columnlogo ftco-animate">
    <img src="images/c1.jpg">
    <img src="images/c2.jpg">
    
  </div>
  <div class="columnlogo ftco-animate">
    <img src="images/c3">
    <img src="images/c4.jpg">
   
  </div>
  <div class="columnlogo ftco-animate">
    <img src="images/c5.jpg">
    <img src="images/c6.png">
   
  </div>
  <div class="columnlogo ftco-animate">
    <img src="images/c7.jpg"s>
    <img src="images/c8.jpg"s>
    
  </div>
</div>
          </section>
      <br>
      <br>
      <br>
      <br>
      
      <?php
      
      $query1="SELECT * FROM `blog` order by id desc LIMIT 3;";

      $result=mysqli_query($conn , $query1);

  
    
      ?>
      
      
		<section class="ftco-section" >
			<div class="container">
				<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate no-gutters">
         <a href="blog.php"> <h2 class="mb-4">Recent Blog</h2>  </a>
<!--            <p>Check out recent blogs here</p>-->
          </div>
        </div>	
				<div class="row">
         
                    
                    <?php
                                      
                    
                           while ($row = mysqli_fetch_assoc($result)) 
                         {
                              
                              $id=$row['id']
               
                    ?>
                    
                    
                    
        <div class="col-md-4 ftco-animate">
            <div class="blog-entry">
                

                         
                              <a href="blog-single.php?id=<?php echo $id ?>" 
><?php  echo '<img class="block-20" style="width:100%" src="data:image/jpeg;base64, '.base64_encode($row['image'] ).'" />';
 ?></a>
                    
              <div class="text d-flex py-4">
<!--
                <div class="meta mb-3">
                  <div><a href="#">Sep. 20, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
-->
<!--                <div class="desc pl-3">-->
	                <h3 class="heading" style="text-align:center;"><a href="blog-single.php?id=<?php echo $id ?>"><?php  echo $row['name']; ?></a></h3>
<!--	              </div>-->
              </div>
            </div>
          </div>
                    
                      <?php
                           }
                    ?>
                    
                    
      
        </div>
			</div>
		</section>

<!--
		<section class="ftco-section ftc-no-pb">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-md-5 p-md-5 img img-2 order-md-last" style="background-image: url(images/img.jpg);">
					</div>
					<div class="col-md-7 wrap-about pb-md-5 ftco-animate">
	          <div class="heading-section mb-md-5 pl-md-5 heading-section-with-line">
	          	<div class="pr-md-5 mr-md-5">
		          	<span class="subheading">Perfect</span>
		            <h2 class="mb-4">We Make Perfection</h2>
	            </div>
	          </div>
	          <div class="pr-md-5 mr-md-5">
							<p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
							<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
							<p><a href="#" class="btn-custom">Learn More <span class="ion-ios-arrow-forward"></span></a></p>
						</div>
					</div>
				</div>
			</div>
		</section>
-->
      <br>
      <br>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Direction One Elements</h2>
              <p>Feel free to contact us<br> <br>Check our social media pages</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="https://www.linkedin.com/in/rupali-inamdar-aa965499/"><span class="icon-linkedin"></span></a></li>
                <li class="ftco-animate"><a href="https://www.facebook.com/directiononeelements/"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="https://www.instagram.com/directiononeelements_/"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Links</h2>
              <ul class="list-unstyled">
                <li><a href="index.php">Home</a></li>
<!--                <li><a href="#">About</a></li>-->
                <li><a href="project.php">Projects</a></li>
                <!-- <li><a href="testimonials.php">Testimonials</a></li> -->
                <li><a href="blog.php">Blogs</a></li>
                  <li><a href="reqaquote.php">Request a Quote</a></li>
                  <li><a href="services.html">Media Coverage</a></li>
                  <li><a href="contactus.html">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Services</h2>
              <ul class="list-unstyled">
                
                <li><a href="#1">Residential Interiors </a></li>
                <li><a href="#1">Office Interiors</a></li>
                  <li><a href="#1">Architectural Design</a></li>
                
                
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
                      <li><a href="https://www.google.com/maps/place/Parimal+Heights/@19.1156258,72.8343243,17z/data=!3m1!4b1!4m5!3m4!1s0x3be7c96926df69fb:0x6e25e8606021faa2!8m2!3d19.1156258!4d72.836513"><span class="icon icon-map-marker"></span><span class="text">201,Parimal Heights, Gulmohar Road,Off Juhu Lane,Andheri West, Mumbai</span></a></li>
	                <li><a href="tel://+919819803710"><span class="icon icon-phone"></span><span class="text">+91 9819803710</span></a></li>
	                <li><a href="mailto:rupali@directiononeonline.com"><span class="icon icon-envelope"></span><span class="text">rupali@directiononeonline.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p style="visibility: hidden"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>

  </body>
</html>