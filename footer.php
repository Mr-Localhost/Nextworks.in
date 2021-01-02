 <footer class="main-footer" style="background-image:url(images/1.jpg)">
        <div class="container">
        
            <!--Widgets Section-->
            <div class="widgets-section">
                <div class="row clearfix">                            
                    <!--Footer Column-->
                    <div class="footer-column col-lg-3 col-md-6">
                        <div class="footer-widget about-widget">
                            <!--<div class="footer-logo">
                                <figure>
                                    <a href="index.html"><img src="images/footer-logo.png" alt=""></a>
                                </figure>
                            </div>-->
                             <h4 class="widget-title">About Us</h4>
                            <div class="widget-content">
                                <div class="text">
                                    <p>NEXTWORKS is the most trusted training on various CCNP, CCIE, CCNA Tracks including Routing & Switching, Security, Data Center and Collaboration.</p>
									<div class="social-links float-left pt-2">
									<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>								
									<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
									<a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
									<a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
									<a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
								  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End column -->                    
                    <!--Footer Column-->
                    <div class="footer-column col-lg-3 col-md-6">
                        <div class="footer-widget contact-info-widget">
                            <h4 class="widget-title">Trainings</h4>
                            <ul class="contact-info-lists pl-3">
                                <li><a href="public-limited-company.php">CCNA R & S </a></li>
                                <li><a href="CCNA-CCNP-Security.php">CCNA & CCNP SECURITY</a></li>
                                <li><a href="Voice-Collaboration.php">CCNA COLLABORATION</a></li>
                                <li><a href="CCNP-Routing-Switching.php">CCNP R & S </a></li>
                                <li><a href="CCNA-CCNP-Security.php">CCNP SECURITY</a></li>
                                <li><a href="CCNA-Service-Provider.php">CCNA SERVICE PROVIDER</a></li>
                                <li><a href="CCNP-Service-Provider.php">CCNP SERVICE PROVIDER</a></li> 
                            </ul>                          
                        </div>
                    </div>
                    <!-- End column -->
                    <!--Footer Column-->
                    <div class="footer-column col-lg-3 col-md-6">
                        <div class="footer-widget contact-info-widget">
                            <h4 class="widget-title">Trainings</h4>
                            <ul class="contact-info-lists pl-3">
                                <li><a href="CCIE-Service-Provider.php">CCIE SERVICE PROVIDER</a></li> 
                                <li><a href="Voice-Collaboration.php">CCNP COLLABORATION</a></li>
                                <li><a href="CCIE-Routing-Switching.php">CCIE R & S </a></li>
                                <li><a href="Fortigate.php">Fortigate</a></li>
                                <li><a href="Checkpoint.php">Checkpoint</a></li>
                                <li><a href="PaloAlto.php">Palo Alto</a></li>
                                <li><a href="Cisco-ASA.php">Cisco ASA</a></li>
                            </ul>                          
                        </div>
                    </div>
                    <!--Footer Column-->
                    <div class="footer-column col-lg-3 col-md-6">
                        <div class="footer-widget contact-info-widget">
                            <h4 class="widget-title">Contact Info</h4>
                            
                            <ul class="contact-info-list pl-3">
                                <li>Lectures colony, Hayathnagar, Hyderabad - Telangana</li>
                                <li>+91 9989335367</li>
                                <li>info@nextworks.in</li>
                            </ul>
                                                       
                        </div>
                    </div>
                    <!-- End column -->
                </div>
            </div>
        </div>
        
        <!--Footer Bottom-->
         <div class="footer-bottom">
            <div class="container">
                <div class="clearfix">
                    <div class="float-sm-left">
                        <div class="copyright-text">
                            <p> © 2019 Next Works. All Right Reserved <a href="index.html"></a></p>
                        </div>
                    </div>
                    <div class="float-sm-right">
                        <ul>
                            <li><a href="#">Terms of Service</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>   
            </div>
        </div>
    </footer>


  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="js/popover.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/magnific-popup/magnific-popup.min.js"></script>
  <script src="lib/sticky/sticky.js"></script>

  <!-- Contact Form JavaScript File -->

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
 </script>
<script>
$('.floating-labels').on({
  'focus': function(){
    if( $(this).val() === "" ){
      $(this).parent().find('label').addClass('field-active');
    }
  },
  'blur': function(){
    if( $(this).val() === "" ){
      $(this).parent().find('label').removeClass('field-active');
    }
  }
});
</script>
<script>
$(document).ready(function(){
    $(".sendmailform").submit(function(e){
            e.preventDefault();
                var str = $( ".sendmailform" ).serialize();
               $.post("sendmails.php?"+str, function(data, status){
                   if(data == 1)
                    $(".sendmailform").html("<span class='messagesuccess' style='color:green'>Message Sent Successfully</span>");
                       else
                    $(".sendmailform").html("<span class='messagefailed' style='color:red' >Message Could not be sent, Please try again later</span>");

                });
                
            });
    });
   
</script>
<script>
if ($('.single-item-carousel').length) {
		$('.single-item-carousel').owlCarousel({
			loop:true,
			margin:0,
			nav:true,
			smartSpeed: 500,
			autoplay: 5000,
			navText: [ '<span class="fa fa-angle-left"></span>', '<span class="fa fa-angle-right"></span>' ],
			responsive:{
				0:{
					items:1
				},
				600:{
					items:1
				},
				800:{
					items:1
				},
				1024:{
					items:1
				},
				1200:{
					items:1
				}
			}
		});  		
	}
</script>

</body>
</html>
