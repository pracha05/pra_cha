<?php include("header.php"); ?>
<head>
	<title>Prachatech | Contactus</title>
       <style>
		.opt5 {
    position: fixed;
    top: 0px;
    background: #233059;
    border-bottom: 1px #12192f solid;
    box-shadow: 0 3px 2px rgba(0, 0, 0, 0.04);
}
	   </style>
</head>
	   <?php if(isset($_GET['success']) && $_GET['success']==1){ ?>
	   <script>alert('Your request successfully sent');</script>
	   <?php }else if(isset($_GET['success'])&& $_GET['success']==2){?>
	   <script>alert('Technical problem will be occured. please try again');</script>
	   <?php }?>
		 <section class="inner-banner py-4">
            <div class="container">
                <div class="contents">
                    <h1 class="pt-4">Get in Touch</h1>
                    <p>Pracha Technologies Pvt. Ltd. is a web designing company located in Hyderabad, providing top-notch web designs, eCommerce websites, digital marketing services and mobile app development services especially for individuals, startups and mid-level companies.</span></p>
                </div>
            </div>
        </section>

<!-- ==============================================
**Contact**
=================================================== -->
        <section class="contact-wrapper-outer">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 form-area">
                        <div class="contact-form-wrapper padding-lg">
                            <form name="defaultForm" id="defaultForm2" action="contactus.php" method="post" enctype="multipart/form-data"> 
                                <div class="row">
                                    <div class="col-md-6 input-col">
									<div class="form-group">
                                        <label>Your Name</label>
                                        <input name="name" placeholder="" type="text" required>
                                    </div>
									</div>
                                    <div class="col-md-6 input-col">
                                        <label>Email Address</label>
                                        <input name="email" placeholder="" type="email" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 input-col">
                                        <label>Phone</label>
                                        <input name="phone_number" pattern="[1-9]{1}[0-9]{9}" maxlength="10"  placeholder="" type="text" required>
                                    </div>
                                    <div class="col-md-6 input-col">
                                        <label>Company</label>
                                        <input name="company" placeholder="" type="text" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>Message</label>
                                        <textarea name="message" placeholder="" required></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <button type="submit" name="submit" class="btn submit">Submit</button>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="msg"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contact-info-wrapper py-4">
                            <div class="contact-info">
                               
                                <ul class="info-contact-box">
                                    <li>
                                        <h5>Prachatech Software Solutions</h5>
                                        <p>MIG-68, 1st Floor, Road No:1, Near YSR Statue, KPHB, Hyderabad,   Telangana-500072,INDIA</p>
                                    </li>
                                    <li>
                                        <h5>040-48541273</h5>
                                    </li>
                                    <li> <a href="mailto:info@prachatech.com">info@prachatech.com</a> </li>
                                </ul>
                            </div>
                            <div class="social-media-box">
                                <h6><span style="color:#000;font-weight:500">Connect with</span></h6>
                                <ul>
                                    <li><a target="_blank" href="https://www.facebook.com/prachatechnologiespvt.ltd/"><i class="fa fa-facebook"></i></a></li>
                                    <li><a target="_blank" href="https://twitter.com/Prachatech"><i class="fa fa-twitter"></i></a></li>
                                    <li><a target="_blank" href="https://plus.google.com/103803990699303943827/"><i class="fa fa-google-plus"></i></a></li>
									
									<li><a target="_blank" href="https://www.linkedin.com/company/10006577/admin/updates/"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<!-- ==============================================
**Contact Map**
=================================================== -->
        <section class="">
           
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15220.805702566095!2d78.3900965!3d17.4978956!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe33ae6c3ea74c04e!2sPrachaTech+Software+Solutions!5e0!3m2!1sen!2sin!4v1556609916796!5m2!1sen!2sin" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
        </section>
 
<?php include("footer.php"); ?>
<script type="text/javascript">
   $(document).ready(function() {
     
      $('#defaultForm').bootstrapValidator({
   //      
          fields: {
   		
   		name:{
   		   validators: {
   				notEmpty: {
   					message: ' Name is required'
   				}
   			    }
              },
   		
			  
   		company:{
   		   validators: {
   				notEmpty: {
   					message: 'Company is required'
   				}
   			   }
              },
   		message:{
   		   validators: {
   				notEmpty: {
   					message: 'Message is required'
   				}
   			   }
              },
   		
   		
   				
				email: {
				validators: {
				  notEmpty: {
					  message: 'Email is required'
				  },
				  regexp: {
				  regexp: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
				  message: 'Please enter a valid email address. For example johndoe@domain.com.'
				  }
				}
				},
   				
   				
   		
   		phone_number:{
   		  validators: {
   				notEmpty: {
   					message:'Phone Number is required'
   				},
   				regexp: {
   				regexp:  /^[0-9]{10}$/,
   				message:'Phone Number must be 10 digits'
   				}
   			   }
              }
   		
   		
   		
   		
          }
      });
   
   });
</script>
<script>
	
   $(function () {
     $("#example1").DataTable();
     $('#example2').DataTable({
       "paging": true,
       "lengthChange": false,
       "searching": false,
       "ordering": true,
       "info": true,
       "autoWidth": false
     });
   });
</script>

<script>
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100,
        callback:     function(box) {
          console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
      }
    );
    wow.init();
    
  </script>