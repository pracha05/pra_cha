<?php include("header.php"); ?>
       <style>
		.opt5 {
    position: fixed;
    top: 0px;
    background: #233059;
    border-bottom: 1px #12192f solid;
    box-shadow: 0 3px 2px rgba(0, 0, 0, 0.04);
}
	   </style>
	   <?php
	   if(isset($_GET['success']) && $_GET['success']==1){ ?>
	   <script>alert('your request successfully sent');</script>
	   
	   <?php }else if(isset($_GET['success']) && $_GET['success']==2){ ?>
	   <script>alert('Technical problem will be occured. please try again');</script>
	   <?php } ?>
 <section class="inner-banner career-banner apply-job">
            <div class="container">
                <div class="contents">
                    <h1>Business Development Executives</h1>
                    <p><span class="icon-map-marker"></span>Hyderabad</p>
                    <a href="#apply-job" class="btn orange scroll-link">Apply Now</a> </div>
            </div>
        </section>
		<section class="job-apply-wrapper padding-lg">
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <th>Designation</th>
                                            <td>Business Development Executives</td>
                                        </tr>
                                        <tr>
                                            <th>Eligibility</th>
                                            <td> Fresher or Experienced</td>
                                        </tr>
                                        <tr>
                                            <th>Qualification</th>
                                            <td>MBA or any other PG</td>
                                        </tr>
                                        <tr>
                                            <th>Number of positions</th>
                                            <td>3</td>
                                        </tr>
                                        <tr>
                                            <th>Salary</th>
                                            <td>12-15k + Work Incentives</td>
                                        </tr>
                                    </tbody>
                                </table>
			</div>
			<div class="col-md-6">
				<div class="job-info-box">
					<p>Prachatech Software & Marketing solutions is a fast-growing Start-up company, packed with opportunities and rewarding experiences for every member in which you can grow and thrive.
					We are passionate about what we do and about providing the right environment for all our team to succeed together. We strive to exceed the expectations of both our people and our clients.
					At Prachatech, we are looking for people who are concerned about the Clients always. Client centricity is a key tenet of all our processes.
					We value creativity, hard work, initiative and radical ideas. We’re always looking for talented individuals to join our team.
					If you think you could be our next hire, drop your details below with a cover note detailing your skills and experience ASAP.</p>
				</div>
			</div>
	</div>
</div>
            <div class="container">
              
                <div class="job-features-wrapper">
                    <h5>Attributes</h5>
                    <ul class="icon-tik-list">
                        <li>
                            <p>Lead generation and prospecting</p>
                        </li>
                        <li>
                            <p>Strong Communication & IT Fluency</p>
                        </li>
                        <li>
                            <p>Identifying new sales leads</p>
                        </li>
                        <li>
                            <p>Generating leads for software products through cold calls</p>
                        </li>
                        <li>
                            <p>Maintaining healthy relationships with existing customers </p>
                        </li>
						<li>
                            <p>Negotiating & Re-Negotiating by phone, e-mail or in person, Sending quotation</p>
                        </li>	
						<li>
                            <p>Excellent time management & organization skills.</p>
                        </li>
						<li>
                            <p>Planning and overseeing new marketing initiatives</p>
                        </li>
						<li>
                            <p>Analyzing Client Requirements</p>
                        </li>
						<li>
                            <p>Meeting customers (companies, B-B)</p>
                        </li>
						<li>
                            <p>Demonstration of the software at client place</p>
                        </li>
						<li>
                            <p>Finalization and closing of the sale</p>
                        </li>
                    </ul>
                </div>
       
                
            </div>
        </section>
        <div class="call-action-bar bg ">
                <div class="container">
                    <h4>Interested candidates can forward their resume to<br> <span class="text-warning"><strong>hr@prachatech.com</strong></span></h4>
                </div>
            </div>
<!-- ==============================================
**Job Apply**
=================================================== -->
        <section class="apply-for-job-outer padding-lg" id="apply-job">
            <div class="container">
                <div class="row justify-content-center top-intro">
                    <div class="col-md-10">
                        <h2>Apply for Business Development Executives</h2>
                        <p>Prachatech Software & Marketing solutions is a fast-growing Start-up company, packed with opportunities and rewarding experiences for every member in which you can grow and thrive.</p>
                    </div>
                </div>
                <div class="contact-form-wrapper">
                    <form name="" id="" action="send.php" method="post" enctype="multipart/form-data"> 
                        <div class="row">
                            <div class="col-md-6">
                                <label>First Name</label>
                                <input name="f_name" placeholder="" type="text" required>
                            </div>
                            <div class="col-md-6">
                                <label>Last Name</label>
                                <input name="l_name" placeholder="" type="text"  required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Email</label>
                                <input name="email" placeholder="" type="email" required>
                            </div>
                            <div class="col-md-6">
                                <label>Phone</label>
                                <input name="phone" placeholder="" pattern="[1-9]{1}[0-9]{9}" maxlength="10" type="text" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Location</label>
                                <textarea  name="location" placeholder="" class="large" required></textarea>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>Linkedin Profile</label>
                                        <input name="link_profile" placeholder="" type="text" >
                                    </div>
                                    <div class="col-md-12">
                                        <label>Website</label>
                                        <input name="website" placeholder="https://example.com" pattern="https://.*" type="text" >
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label>Upload Resume</label>
                                <div class="browse-doc">
                                    <input type="text" id="browse-path" />
                                    <label class="browse-icon"><span class="icon-file-upload"></span><span>
                                        <input type="file" id="browse-file" name="myfile" />
                                        </span> </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label>Message</label>
                                <textarea name="message" placeholder="" required></textarea>
                            </div>
							
						<div class="col-md-12 text-center ">
                                <button type="submit" name="submit" class="btn  btn-sm text-center">Submit </button>
                            </div>
						
                        </div>
                    </form>
                </div>
            </div>
        </section>



<?php include("footer.php"); ?>

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