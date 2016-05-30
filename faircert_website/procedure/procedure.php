
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
           <li class="selected"><a href="../procedure/procedure.php">Procedure</a></li>   
           <li><a href="../plan_price/plan.php">Plan & Pricing</a></li>  
          <li><a href="../downloads/download.php">Downloads</a></li> 
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
      <h6>Certification Procedure</h6>
      </div>
      <div class="two_third">
        <p class="heading btmspace-20">
        
         <ul class="nospace group" style="margin-left:20px;">
          
           <a href="../images/demo/src/FairCert Certification1.jpg" target="_blank"><img src="../images/demo/src/FairCert Certification1.jpg"  /></a>
           
           </ul>
           
           </p>
           <a style="float:right; color:red; text-decoration:underline" href="server_pro.php?zipname=<?php echo "1"; ?>" ><img src="../images/demo/download.png" /> Download Certification Procedure </a>
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
<?php include("../include_pages/page_footer.php"); ?></body>
</html>