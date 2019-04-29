 <html>
<body>	
 <?php


		if(isset($_POST['submit']) && $_POST['submit']=!''){ 
//echo "<pre>";print_r($_POST);exit;

		$servername="43.255.154.8";
		$username="roles_user";
		$password="roles_user@123";
		$dbname="psaaket_roles";

		//create connection
		$conn=new mysqli($servername, $username,$password,$dbname);
		//check connection
		if($conn->connect_error){
		die("connection failed:" .$conn->connect_error);	
		}

		//echo "<pre>";print_r($_POST);
		move_uploaded_file($_FILES['myfile']["tmp_name"],"assets/graphic_designer/" . $_FILES['myfile']["name"]);

		$sql="INSERT INTO graphic_designer(f_name,l_name,email,phone,location,link_profile,website,message,myfile)
VALUES('".$_POST['f_name']."','".$_POST['l_name']."','".$_POST['email']."','".$_POST['phone']."','".$_POST['location']."','".$_POST['link_profile']."','".$_POST['website']."','".$_POST['message']."','".$_FILES['myfile']["name"]."')";
		//echo '<pre>';print_r($sql);exit;
			if($conn->query($sql)===true){

            $to = "hr@prachatech.com";
         $subject = "Apply Job";
         $message = 'First Name:'.$_POST['f_name'].'<br> Last Name :'.$_POST['l_name'].'<br> Email :'.$_POST['email'].'<br> Phone :'.$_POST['phone'].'<br> Location :'.$_POST['location'].'<br> Linkedin Profile :'.$_POST['link_profile'].'<br>  Website :'.$_POST['website'].'<br> File :'.$_FILES['myfile']["name"].'<br>  Message :'.$_POST['message'];
		$headers = "From:'".$_POST['email']."' \r\n";
         $headers .= "MIME-Version: 1.0\r\n";
         $headers .= "Content-type: text/html\r\n";
        //echo'<pre>';print_r($message);exit;
			if(mail($to, $subject, $message, $headers)){
			echo 'Your mail has been sent successfully.';
			header("Location:apply-job.php?success=1");
			
			} else{
				
			echo  'Unable to send email. Please try again.';
			header("Location:apply-job.php?success=2");
          
			}
		}
			$conn->close();
			}
		

?>
 

 
<?php include("footer.php"); ?>



  </body>
  </html>