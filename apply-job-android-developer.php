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
                    <h1>Android Developer </h1>
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
					<td>Android Developer </td>
				</tr>
				<tr>
					<th>Eligibility</th>
					<td>2-3 years of experience</td>
				</tr>
				<tr>
					<th>Qualification</th>
					<td>B.Tech / Any Degree </td>
				</tr>
				<tr>
					<th>Job Type</th>
					<td>Full Time</td>
				</tr>
				<tr>
					<th>Number of positions</th>
					<td>1</td>
				</tr>
				<tr>
					<th>Salary</th>
					<td>2,40,000 – 3,00,000</td>
				</tr>
			</tbody>
		</table>
			
			</div>
			<div class="col-md-6">
				<div class="job-info-box">
					<p>We are looking for an Android Developer who possesses a passion to push mobile apps to another dimension with his/her creative thoughts and technicalities. He / She will work with our team of talented engineers to design and build the next generation mobile applications.</p>	
					<p>Prachatech Software & Marketing solutions is a fast-growing Start-up company, packed with opportunities and rewarding experiences for every member in which you can grow and thrive.
					We are passionate about what we do and about providing the right environment for all our team to succeed together. We strive to exceed the expectations of both our people and our clients.
					At Prachatech, we are looking for people who are concerned about the Clients always. Client centricity is a key tenet of all our processes.
					</p>
				</div>
			</div>
	</div>
</div>
            <div class="container">
              
                <div class="job-features-wrapper">
                    <h5>Responsibilities:</h5>
                    <ul class="icon-tik-list">
                        <li>
                            <p>Design and build advanced applications for the Android platform</p>
                        </li>
                        <li>
                            <p>Collaborate with cross-functional teams to define, design, and ship new features</p>
                        </li>
                        <li>
                            <p>Work with outside data sources and APIs</p>
                        </li>
						<li>
                            <p> Unit-test code for robustness, including edge cases, usability, and general reliability</p>
                        </li>
						<li>
                            <p>Work on bug fixing and improving application performance</p>
                        </li>
						<li>
                            <p>Continuously discover, evaluate, and implement new technologies to maximize development efficiency</p>
                        </li>
						<li>
                            <p>Designing and developing advanced applications for the Android platform</p>
                        </li>	
						<li>
                            <p>Unit-testing code for robustness, including edge cases, usability, and general reliability</p>
                        </li>	
						<li>
                            <p>Bug fixing and improving application performance</p>
                        </li>
                        
                    </ul>
                </div> 
				<hr>
				<div class="job-features-wrapper">
                    <h5>Requirements:</h5>
                    <ul class="icon-tik-list">
                        <li>
                            <p>BS/MS degree in Computer Science, Engineering or a related subject</p>
                        </li>
                        <li>
                            <p>Proven software development experience and Android skills development</p>
                        </li>
                        <li>
                            <p>Proven working experience in Android app development</p>
                        </li>
                        <li>
                            <p>Have published at least one original Android app</p>
                        </li>
                        <li>
                            <p>Experience with Android SDK</p>
                        </li>
						<li>
                            <p>Experience working with remote data via REST and JSON</p>
                        </li>	
						<li>
                            <p>Experience with third-party libraries and APIs</p>
                        </li>
						<li>
                            <p>Working knowledge of the general mobile landscape, architectures, trends, and emerging technologies</p>
                        </li>
						<li>
                            <p>Solid understanding of the full mobile development life cycle</p>
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
                        <h2>Apply for Android Developer</h2>
                        <p>Prachatech Software & Marketing solutions is a fast-growing Start-up company, packed with opportunities and rewarding experiences for every member in which you can grow and thrive.</p>
                    </div>
                </div>
                <div class="contact-form-wrapper">
                    <form name="" id="" action="android.php" method="post" enctype="multipart/form-data"> 
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