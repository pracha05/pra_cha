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
                    <h1>Marketing Manager</h1>
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
						<td>Marketing Manager</td>
					</tr>
				
					<tr>
						<th>Qualification</th>
						<td>MBA or any other PG</td>
					</tr>
					<tr>
						<th>Number of positions</th>
						<td>1</td>
					</tr>
					<tr>
						<th>Salary</th>
						<td>3,00,000 – 4,20,000 + Work Incentives per annum</td>
					</tr>
				</tbody>
			</table>
			</div>
			<div class="col-md-6">
				<div class="job-info-box">
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
                            <p>Marketing managers are responsible for developing, implementing and executing strategic marketing plans for an entire organization (or lines of business and brands within an organization) in order to attract potential customers and retain existing ones.</p>
                        </li>
                        <li>
                            <p>Their day-to-day tasks include managing and coordinating marketing and creative staff, leading market research efforts to uncover the viability of current and existing products/services and liaising with media organizations and advertising agencies.</p>
                        </li>
                        <li>
                            <p>Marketing managers must be great business leaders as well as great marketing leaders. That’s because they are responsible for working with executives to determine budgets and targets, and they are often charged with developing pricing strategies for products and services. </p>
                        </li>
						<li>
                            <p> While the marketing department looks to marketing managers for guidance and direction, executives count on marketing managers for profitability and results. Operating at the center of the marketing department, these professionals must have extraordinary communication skills.</p>
                        </li>
                        
                    </ul>
                </div> 
				<hr>
				<div class="job-features-wrapper">
                    <h5>Attributes</h5>
                    <ul class="icon-tik-list">
                        <li>
                            <p>Intimate understanding of traditional and emerging marketing channels</p>
                        </li>
                        <li>
                            <p>Excellent communication skills</p>
                        </li>
                        <li>
                            <p>Ability to think creatively and innovatively</p>
                        </li>
                        <li>
                            <p>Budget-management skills and proficiency</p>
                        </li>
                        <li>
                            <p>Professional judgment and discretion that comes from years of experience in the field </p>
                        </li>
						<li>
                            <p>Analytical skills to forecast and identify trends and challenges</p>
                        </li>	
						<li>
                            <p>Work with sales and account management teams for customer evangelists to create PR, media and marketing opportunities.</p>
                        </li>
						<li>
                            <p>Align campaigns, assets, communications and messaging to corporate branding initiatives.</p>
                        </li>
						<li>
                            <p>Analyzing Client RequirementsDevelop marketing collateral and sales tool like brochures, datasheet, presentations and proposals.</p>
                        </li>
						<li>
                            <p>Determine and coordinate online and onsite events like webinars, tradeshows, seminars and customer events.</p>
                        </li>
						<li>
                            <p>Report on periodic activities, results and ROI for marketing.</p>
                        </li>
						<li>
                            <p>Manage content of marketing sections of websites.</p>
                        </li>
						<li>
                            <p>Manage services & products price book.</p>
                        </li>
						<li>
                            <p>Plan and implement software product launch.</p>
                        </li>
						<li>
                            <p>Manage working relationships with Desktop Sales team members to review needs, prioritize and deliver.</p>
                        </li>
						<li>
                            <p>Implement marketing strategies to meet or exceed demand generation and revenue targets.</p>
                        </li>
						<li>
                            <p>Implement global content and collateral strategy for key partners.</p>
                        </li>
						<li>
                            <p>Establish and manage key partner marketing budgets</p>
                        </li>
						<li>
                            <p>Strategize on marketing for select global partners through analysis and understanding of competitive landscape.</p>
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
                        <h2>Apply for Marketing Manager</h2>
                        <p>Prachatech Software & Marketing solutions is a fast-growing Start-up company, packed with opportunities and rewarding experiences for every member in which you can grow and thrive.</p>
                    </div>
                </div>
                <div class="contact-form-wrapper">
                   <form name="" id="" action="marketingmanager.php" method="post" enctype="multipart/form-data"> 
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