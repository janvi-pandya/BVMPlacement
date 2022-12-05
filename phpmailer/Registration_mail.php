<?php


require "PHPMailerAutoload.php";
		
		
	//	print_r($_SESSION);
			
		//echo $p['user_id'];
				//if($p['user_id'] != $_SESSION['user_id'])
				//{
				$email=$_REQUEST['email'];
				$sql="select `student_name` from student where `email`='$email';";
				$query=mysqli_query($con,$sql);
				if($query)
				{
					$row=mysqli_fetch_array($query);
					$name=$row['student_name'];
				}
				$subject='Welcome to BVMPlacement.com!!!';
				$body="<center><b>Welcome $name ! It's great to have you on board! <br/>You are now successfully connected to our Placementsite!</b></center>
						<p>Stay updated and don't miss out the latest Job openings.</p><br/><br/>Thank you for joining us!<br/><b>-BVM Training & Placement Cell</b>";							
				$mail = new PHPMailer();
				//$mail->SMTPDebug = 3;
				$mail->isSMTP();                                      // Set mailer to use SMTP
				$mail->Host = 'smtp.gmail.com';  // Specify main and backup server
				$mail->SMTPAuth = true;                               // Enable SMTP authentication
				$mail->Username = 'bvmtrainingplacementcell@gmail.com';                            // SMTP username
				$mail->Password = 'BVM@tpc01';                           // SMTP password
				$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted
				$mail->Port = 587; 
				
				$mail->From = 'bvmtrainingplacementcell@gmail.com'; 
				$mail->FromName = 'BVM Training & Placement Cell';
				//$mail->addAddress('josh@example.net', 'Josh Adams');  // Add a recipient
				$mail->addAddress($email);               // Name is optional
				//$mail->addReplyTo('info@example.com', 'Information');
				//$mail->addCC('cc@example.com');
				//$mail->addBCC('bcc@example.com');
				
				$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
				//$mail->addAttachment('../charisma-master/img/gallery/2.jpg');         // Add attachments
				//$mail->addAttachment('', '');    // Optional name
				$mail->isHTML(true);                                  // Set email format to HTML
				
				$mail->Subject = $subject;
				$mail->Body    = $body;
				//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
				
				if(!$mail->send()) {
				   //echo 'Message could not be sent.';
				  // echo 'Mailer Error: ' . $mail->ErrorInfo;
				   echo '<script type="text/javascript">
							alert("You Have Registered Successfully!");
						</script>';
				    header("refresh:1;url=index.php");
				}
				else
				{
					echo '<script type="text/javascript">
							alert("You Have Registered Successfully!");
						</script>';
				   header("refresh:1;url=index.php");
				}
?>