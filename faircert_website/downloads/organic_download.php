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
.box {
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
.box:hover {
	font-size:20px;
	width:175px;
}
</style>
<?php include("../include_pages/page_header.php"); ?>
<div class="clear"></div>
</div>
</div>
<div class="wrapper row3" >
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
          <li class="selected"><a href="../downloads/download.php">Downloads</a></li>
          <li><a href="../clients/client.php">Clients</a></li>
          <li><a href="../career/career.php">Career</a></li>
          <li><a href="../news/news_detail.php">News & Event</a></li>
          <li><a href="../enquiry/enquiry.php">Enquiry Form</a></li>
          <li><a href="../training/training.php">Training</a></li>
          <li><a href="../contact/contact.php">Contact</a></li>
        </ul>
      </nav>
    </div>
    <div class="sidebar one_quarter1 " style="width:70%;"  >
      <h6>Downloads</h6>
    </div>
    <div class="two_third" style="padding:20px; font-size:12px"> 
    
      <b>Application Packets for NPOP:</b>
      <ol>
        <li> <a href="npop.php?zipname=<?php echo "7"; ?>"><img src="../images/demo/download.png" /> Crop Production <?php echo "-";?> Individual Operator</a></li>
        <li> <a href="npop.php?zipname=<?php echo "8"; ?>"><img src="../images/demo/download.png" /> Grower Group</a></li>
      </ol>
      <p></p>
      <b> Application Packet for EEC 834/2007:</b>
      <ol>
        <li><a href="npop.php?zipname=<?php echo "9"; ?>"><img src="../images/demo/download.png" /> Plant Product</a> </li>
        <li> <a href="npop.php?zipname=<?php echo "10"; ?>"><img src="../images/demo/download.png" /> Producer Group</a> </li>
        <li><a href="npop.php?zipname=<?php echo "11"; ?>"><img src="../images/demo/download.png" /> Preparation of Product </a> </li>
        <li><a href="npop.php?zipname=<?php echo "12"; ?>"><img src="../images/demo/download.png" /> Livestock & Product </a> </li>
        <li><a href="npop.php?zipname=<?php echo "13"; ?>"><img src="../images/demo/download.png" /> Animal feed </a> </li>
        <li><a href="npop.php?zipname=<?php echo "14"; ?>"><img src="../images/demo/download.png" /> Wild Harvest </a> </li>
      </ol>
      <b> Organic Standards:</b>
      <ol>
        <li><a href="npop.php?zipname=<?php echo "15"; ?>"><img src="../images/demo/download.png" /> NPOP Standards</a> </li>
        <li><a href="npop.php?zipname=<?php echo "16"; ?>"><img src="../images/demo/download.png" /> EU Standards (EEC 834/2007 & EEC 889/2008,)</a> </li>
        <li> <a href="npop.php?zipname=<?php echo "17"; ?>"><img src="../images/demo/download.png" /> IACB Standard for EEC 834/2007 Certification</a> </li>
      </ol>
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
</body></html>