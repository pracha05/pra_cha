	



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
	   $sql="INSERT INTO contact(name,email,phone_number,company,message)
VALUES('".$_POST['name']."','".$_POST['email']."','".$_POST['phone_number']."','".$_POST['company']."','".$_POST['message']."')";
		//echo '<pre>';print_r($sql);exit;
	 if($conn->query($sql)===true){

            $to = "info@prachatech.com";
         $subject = "Contact request";
         $message = 'Name:'.$_POST['name'].'<br> Email Address :'.$_POST['email'].'<br> Phone :'.$_POST['phone_number'].'<br> Company :'.$_POST['company'].'<br> Message :'.$_POST['message'];
		$headers = "From:'".$_POST['email']."' \r\n";
         $headers .= "MIME-Version: 1.0\r\n";
         $headers .= "Content-type: text/html\r\n";
        //echo'<pre>';print_r($message);exit;
			if(mail($to, $subject, $message, $headers)){
			echo 'Your request successfully sent.';
			header("Location:contact.php?success=1");
			
			} else{
				
			echo  'Technical problem will be occured. please try again.';
			header("Location:contact.php?success=2");
          
			}
		}
			$conn->close();
			}
		

?>
 






       
