<head>
    <script>
        document.location='../../../faircert_admin/enquiry/views/web_enq_from.php?from=web';
    </script>
<?php

include_once("../config/connect.php");
include_once("../include/structure.php");
include_once("../config/db.php");
$obj=new database();
$obj_struct=new structure();
?>
    
  <script type="text/javascript" src="../carousel/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="../carousel/js/carousels.js"></script>
  <script src="../../../SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
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
<link href="../../../SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<?php include("../include_pages/page_header.php"); ?>

<div class="clear"></div>
  </div>
</div>
<div class="wrapper row3" >
  <main class="container clear">
    <div class="sidebar one_quarter first">
		 <nav class="sdb_holder">
        <h6>Quick Links</h6>
         <ul>
          <li ><a href="../../index.php">Home</a></li>
          <li><a href="../about_us/welcome.php">About Us</a></li>
          <li><a href="../services/services.php">Services</a></li>
           <li><a href="../procedure/procedure.php">Procedure</a></li>   
         <li><a href="../plan_price/plan.php">Plan & Pricing</a></li>  
          <li><a href="../downloads/download.php">Downloads</a></li> 
          <li><a href="../clients/client.php">Clients</a></li>
          <li><a href="../career/career.php">Career</a></li>
          <li><a href="../news/news_detail.php">News & Event</a></li>
          <li class="selected"><a href="../enquiry/enquiry.php">Enquiry Form</a></li>
          <li><a href="../training/training.php">Training</a></li>
          <li><a href="../contact/contact.php">Contact</a></li>
            
        </ul>
       </nav>
  </div>    
    <div class="sidebar one_quarter1" style="width:60%;" >
      <!-- ################################################################################################ -->
      <h6>Enquiry Form</h6>
      
      <nav class="sdb_holder" style="padding-top:0px;" >
      <div class="group btmspace-50 demo" style="  padding-left:40px;">
        <div class="first sdb_holder" style="padding-top:20px;padding-left:10px;padding-right:10px; background:#F1f1f1" id="comments">
	<div class="">
      <label for="name">Name <span>*</span></label>
      <input type="text" name="name" id="name" value="" size="" />
      <span class="textfieldRequiredMsg">A value is required.</span>
      <div class="">
    <label for="email">Contact <span>*</span></label>
            <input type="text" name="contact" id="contact" value="" size="22">
      </div>
          <div class="">
            <label for="url">Email</label>
            <input type="email" name="email" id="email" value="" size="22">
      </div>
          <div class="">
            <label for="city">City</label>
            <input type="text" name="city" id="city" value="" size="22">
          </div>
          <div class="">
            <label for="state">State</label>
            <input type="text" name="state" id="state" value="" size="22">
          </div>
          <div>
          <label for="informed_from">Informed From</label>
            <select name="informed_from" id="informed_from" style="width:100%; height:40px;">
            	    <option value="">---Select---</option>
            		<option value="friend">Friend</option>
            		<option value="website">Website</option>
            		<option value="advertisment">Advertisment</option>
            	
            </select>
      </div>
          <div class="" >
           <label for="enquiry_for">Enquiry For</label>
            <select name="enquiry_for" id="enquiry_for" style="width:100%; height:40px;">
            		 <option>---Enquiry For--</option>
              <option value="Organic Certification">Organic Certification</option>
              <option value="Textile Certification">Textile Certification</option>
              <option value="Quality And Safety Certification">Quality And Safety Certification</option>
              <option value="Halal Certification">Halal Certification</option>
              <option value="Global Gap Certification">Global Gap Certification</option>
              <option value="Fair Trade Certification">Fair Trade Certification</option>
            </select>
          </div>
          
            <input type="button" style="display:       inline-block;
padding:       9px 19px;
background:    #073763 url('http://dabuttonfactory.com/button.png?w=1&h=37&bgt=gradient&bgc=3d85c6&ebgc=073763') repeat-x;
background:    -moz-linear-gradient(#3d85c6, #073763);
background:    -o-linear-gradient(#3d85c6, #073763);
background:    -webkit-linear-gradient(#3d85c6, #073763);
background:    linear-gradient(#3d85c6, #073763);
border:        1px solid #9fc5e8;
border-radius: 5px;
color:         #fff;
font:          normal 700 16px/1 Tahoma, Geneva, sans-serif ;
margin:10px 60px;
text-align:    center;
width:200px;
margin-left:240px;
text-shadow:   1px 1px 0 #000; border-radius:6px;" value="Submit" onclick="addenquiry();" >
       
        <hr>
      </div>

        
      </nav>
      <!-- ################################################################################################ -->
    </div>
    
   
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>

<div class="wrapper row4">
  
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
<?php include("../include_pages/page_footer.php"); ?>
<!-- JAVASCRIPTS -->

<script src="../layout/scripts/jquery.min.js"></script>
<script src="enquiry.js" type="text/javascript"></script>
<script src="../layout/scripts/jquery.mobilemenu.js"></script>
<script src="../layout/scripts/owl.carousel.min.js"></script>
<script src="../layout/scripts/jssor.js"></script>
<script src="../layout/scripts/jssor.slider.js"></script>
<script src="../layout/scripts/slider.js"></script>
<script>
init_jssor_slider1("slider1_container");
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
</script>
</body>
</html>