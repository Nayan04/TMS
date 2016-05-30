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
</div>
<div class="wrapper row3" >
  <main class="container clear">
    <div class="sidebar one_quarter first">
      <h6>About Us</h6>
      <nav class="sdb_holder">
        <ul>
          <li><a href="welcome.php">What We Are</a></li>
          <li  class="selected"><a href="director.php">Director Message</a></li>
          
         <li><a >Policies</a>
                
                   <li style="padding-left:20px;"><a href="quality.php">Quality</a></li>
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
      <h6>Director Message</h6>
      <nav class="sdb_holder" style="padding-top:0px;" >
        <div class="group btmspace-50 demo"  style="padding:20px; margin-top:-25px;">
          <div class="first"> Since
            the foundation of <b>FairCert Certification Services Pvt. Ltd. </b>in
            2013, the company has developed very fast & has taken over a significant
            part in the certification industry.
            <p>We have reached thus far owing to hard work, dedication and determination
              of the team that drives this organization and we are confident,
              that we will grow from strength to strength in our endeavor to
              make this company into one that delivers value and satisfaction
              to our growing base of valued clients</p>
            <p>We bring to our clients much wanted values, integrity, trust and
              an assurance of responsibility all coupled with our expertise in
              inspection & certification.
            <p>Our biggest asset is highly trained team of professional managers
              who are backed by a very able team. We have a clear vision about
              building on our strengths and our achievements while holding dear
              to us our basic principles.
            <p> Our well wishes with clients and FairCert team members for successful
              growth. 
          </div>
          <hr>
        </div>
      </nav>
    </div>
    <div class="clear"></div>
  </main>
</div>
 <?php include("../include_pages/page_footer.php"); ?>
</body>
</html>