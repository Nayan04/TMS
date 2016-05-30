
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
</div>
<div class="clear"></div>
  </div>
</div>
<div class="wrapper row3" >
  <main class="container clear">
    <div class="sidebar one_quarter first">
      <h6>About Us</h6>
      <nav class="sdb_holder">
        <ul>
          <li><a href="welcome.php" class="active1">What We Are</a></li>
          <li><a href="director.php">Director Message</a></li>
           <li><a href="why_us.php">Why Us?</a></li>
          <li><a >Policies</a>
         
          <li><a href="quality.php">Quality</a></li>
            <li><a href="vision.php">Vision & Mission</a></li>
              <li><a href="impartiality.php">Impartiality And Confidentiality</a></li>
          
          </li>
          <li class="selected"><a href="crs.php">CRS Policy</a></li>
           <li><a href="organizational.php">Organizational Structure</a></li>
          <li><a href="acceditation.php">Acceditation & Collaboration</a></li>
        </ul>
      </nav>
      </div>
    <div class="sidebar one_quarter1 two_third" >
      <!-- ################################################################################################ -->
      <h6>CRS Policy</h6>
      <nav class="sdb_holder" style="padding-top:0px;" >
      <div class="group btmspace-50 demo" style="margin-top:20px;">
        <div class="first" align="center">
<img src="../images/demo/uc.png" />

  </div>
       
        <hr>
      </div>

        
      </nav>
     </div>
    <div class="clear"></div>
  </main>
</div>
<div class="wrapper row4">
  
</div>
 <?php include("../include_pages/page_footer.php"); ?>
<!-- JAVASCRIPTS -->
</body>
</html>