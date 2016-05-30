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
</div>
<div class="wrapper row3" >
<main class="container clear">
  <div class="sidebar one_quarter first">
    <h6>About Us</h6>
    <nav class="sdb_holder">
      <ul>
        <li><a href="welcome.php" >What We Are</a></li>
        <li><a href="director.php">Director Message</a></li>
        
       <li><a >Policies</a>
                
                   <li style="padding-left:20px;"><a href="quality.php" class="selected">Quality</a></li>
                   <li style="padding-left:20px;"><a href="vision.php">Vision & Mission</a></li>
                   <li style="padding-left:20px;"><a href="impartiality.php">Impartiality And Confidentiality</a></li>
                   <li style="padding-left:20px;"><a href="Complaint.php">Complaint and Appeal</a></li>
              
         
          </li>
        
        <li><a href="organizational.php">Organizational Structure</a></li>
        <li><a href="acceditation.php">Accreditation & Collaboration</a></li>
      </ul>
    </nav>
  </div>
  <div class="sidebar one_quarter1 two_third" >
    <h6>Quality Policy</h6>
    <br />
    <h3>Quality Policy :</h3>
    <ul>
      <li> To maintain fairness, transparency, affordability, impartiality in the certification services to the satisfaction of all the stakeholders viz. primary producers, forest gatherers, processors, traders, consumers and all the accreditation bodies. </li>
      <li>To completely detach the gap between affordability and reliability in the organic certification services. </li>
      <li>Make special efforts to reach out to marginal and tribal farmers and Small & Medium Enterprises (SMEs).</li>
      <li>Keep the Quality Management System updated to comply with all the requirements of operations. This would be done at least once in a year.
      </li>
    </ul>
    <h3>Quality Objectives :</h3>
    <ul>
      <li>Instill and sustain confidence in our certification services by taking feedback from all the stakeholders and accreditation bodies and incorporate these inputs in the quality system, periodically.</li>
      <li>Restrict customer complaints to less than 2% of the total operations.</li>
      <li>Training and capacity building inputs to all the relevant staff on the updates. This exercise would be done at least once in a year. </li>
    </ul>
    <hr />
  </div>
  </nav>
  <div class="clear"></div>
</main>
<?php include("../include_pages/page_footer.php"); ?>
</body>
</html>