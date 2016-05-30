
<script type="text/javascript" src="../carousel/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="../carousel/js/carousels.js"></script>
<script>
  	$(document).ready(function(){
						  
$('.owl-carousel').owlCarousel({
	
    loop:false,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
	
});
							   });
  </script>
  <style>
  .box{
	width:170px; 
	height:50px; 
	border:1px solid #B0B0B0; 
	margin:10px;
	padding:10px; 
	float:left; 
	margin-left:45px; 
	text-align:center;
	padding-top:70px;
	font-size:18px;
	font-weight:bold;
	color:#FFF;
	text-shadow:#666;
	text-decoration:blink;

	background-image:url(../images/demo/cornfield.jpg)
	
	  }
.box:hover{
	
	font-size:20px;
	width:175px;
	}	  
  
  
  </style>
<?php include("../include_pages/page_header.php"); ?>

 <div class="clear"></div>
  </div>
</div>
   <div class="wrapper row3" style="min-height:470px;" >
  <div class="wrapper row3" >
  <main class="container clear">
    <div class="sidebar one_quarter first">
		 <nav class="sdb_holder">
        <h6>Quick Links</h6>
         <ul>
         
          <li><a href="" onClick="history.go(-1);">Back</a></li>
            
        </ul>
       </nav>
  </div>    
       <div class="sidebar one_quarter1 " style="width:70%; "  >
      <h6>Downloads</h6>
      </div>
      <div class="two_third" style="padding:20px; font-size:12px">
        
        <a href="download_server.php?zipname=<?php echo "4"; ?>" ><img src="../images/demo/download.png" /> Download Trading Certification </a>
        <br />
        
       <a href="download_server.php?zipname=<?php echo "5"; ?>"><img src="../images/demo/download.png" /> Download Food Processing </a>
       
      </div>
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row4"> </div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="clear">
    <!-- ################################################################################################ -->
    <p class="fl_left"><a href="#0">About Us</a> | <a href="#0">Services</a> | <a href="#0">Certification Procedure</a> | <a href="#0">Download</a> | 
      Career& Subcontract</a> | <a href="#0">Enquiry</a> | <a href="#0">Contact Us</a> </p>
    <p class="fl_right">Developed by <a target="_blank" href="http://www.mollesoftware.in" title="Molle Software Solutions Pvt. Ltd.">Molle Software Solutions</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- JAVASCRIPTS -->
<script src="../layout/scripts/jquery.min.js"></script>
<script src="../layout/scripts/jquery.mobilemenu.js"></script>
<script src="../layout/scripts/owl.carousel.min.js"></script>
<script src="../layout/scripts/jssor.js"></script>
<script src="../layout/scripts/jssor.slider.js"></script>
<script src="../layout/scripts/slider.js"></script>
<script>
            init_jssor_slider1("slider1_container");
        </script>
</body>
</html>