<?php
$ht = "";
if (isset($_REQUEST['action'])){
	$action=$_REQUEST['action']; 
			
	if ($action != ""){ 
		if ($action == "submit"){
			/* message from contact form */
			$name=$_REQUEST['name']; 
			$email=$_REQUEST['email']; 
			$subject=$_REQUEST['subject']; 
			$message=$_REQUEST['message'];
			
			if (($name=="")||($email=="")||($message=="")||($subject==""))
			{ 
				$ht = '<div class="message-success">All fields are required, please fill the form again.</div>'; 
			}
			else
			{         
				$from="From: $name<$email>rnReturn-path: $email"; 
				mail("cyberstelios@gmail.com", $subject, $message, $from); 
				$ht = '<div class="message-success">Email sent!</div>'; 
			} 
		}else{
			/* message from quick contact form */ 
			$name=$_REQUEST['contact-name']; 
			$email=$_REQUEST['contact-email']; 
			$subject='Freelance offer from my website';
			$message=$_REQUEST['contact-message']; 
		
			if (($name=="")||($email=="")||($message=="")) 
			{ 
				echo '{"message":"All fields are required!"}';  
			}else
			{         
				$from="From: $name<$email>rnReturn-path: $email"; 
				mail("cyberstelios@gmail.com", $subject, $message, $from); 
				$response = array('message' => 'Your mail has been sent!');
				//echo '{"message":"Your mail has been sent!"}'; 
				//header('Content-Type: application/json');
				echo json_encode($response);
			} 
		}
	}
} 							
?>

<!---------------------------- CONTACT ------------------------------>
<div style="background-position: 0px -1493.5px;" class="slide" id="slide10" data-slide="10" data-stellar-background-ratio="0.5">
	<div class="container clearfix">
	
		<div id="content" class="grid_12">
			<h2 style="color:#FDC82B;">Contact</h2>
		</div>
		<div class="clear"></div>
		<div class="contact-form-container">
			<?php echo $ht ?> 
			<form action="" method="POST" enctype="multipart/form-data" class="contact-form">
				<input type="text" name="name" id="name" class="form-control required" placeholder="Name" autocomplete="off" required>
				<input type="hidden" name="action" value="submit"> 				
				<input type="email" name="email" id="email" class="form-control required email" placeholder="Email" autocomplete="off" required>				
				<input type="text" name="subject" id="subject" class="form-control required" placeholder="Subject" autocomplete="off" required>				
				<textarea name="message" id="message" class="form-control required" placeholder="Message" required></textarea>				
				<button class="contact-btn" type="submit">Say Hello</button>
			</form>			   
		</div>
		<div class="clear"></div>
		
	</div>
	
	<div id="map_canvas" style="width:100%; height:600px;"></div>

</div>