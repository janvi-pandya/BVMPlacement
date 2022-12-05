<?php
require "phpmailer/PHPMailerAutoload.php";
include('index.php');
?>
<!DOCTYPE html>
<html>
	<head>
	  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	  <meta charset="UTF-8">
	  <script language="javascript" type="text/javascript" src="https://cdn.jsdelivr.net/npm/p5@0.10.2/lib/p5.min.js"></script>
	  <script language="javascript" type="text/javascript" src="timer/sketch.js"></script>
	  <script>
	    $(document).ready(function(){
	      $("#forgot_password_modal2").modal('show');
	    });
	  </script>
	</head>
<body>
	<?php
	//	print_r($_SESSION);
			
		//echo $p['user_id'];
				//if($p['user_id'] != $_SESSION['user_id'])
				//{
				
				$email=$_REQUEST['email'];
				$subject='OTP Verification to Reset Password';
				$otp=rand(111111,999999);
				$body="<b>Your OTP to Reset Password is <h2 style='color:blue;'><b>$otp</b>.</h2></b><p>Please submit this OTP(One-Time-Password) within 2 minutes! <br/>The OTP will be expired after 2 minutes.<br/><h3>DO NOT SHARE THIS <b style='color:blue;'>OTP</b> WITH ANYONE!</h3></p>
					<br/><br/>Thanks for joining us!<br/><b>-Team BVMPlacement</b>";							
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
				   echo 'Message could not be sent.';
				   echo 'Mailer Error: ' . $mail->ErrorInfo;
				   
				  header("location:../index.php");
				}
				else
				{
				//	echo 'The OTP has been sent to given E-Mail ID!<br>';
					echo '<script>
							alert("The OTP has been sent to given E-Mail ID!");
						</script>';
						//header("refresh:1;url=../forgot_password.php");
				?>
		<div class="modal fade in" id="forgot_password_modal2">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h3 class="modal-title" id="loginModalLabel" tabindex="-1">2-Step Verification</h3>
			        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			      </div>
			      <div class="modal-body">
					<form method="post" action="change_password.php">
					<u>The OTP is sent to the E-Mail ID</u> :<b> <?php echo $_POST['email'];?></b>
					<br/><br/>
					<!--<a data-bs-target="menu.php#forgot_password_modal1" data-bs-toggle="modal" data-bs-dismiss="modal" class="btn btn-outline-danger">Entered wrong E-Mail ID?</a>-->
					<input type="hidden" name="email" value=<?php echo $_POST['email']; ?>>
					<div class="mb-3">
						<label for="email"><b>Enter The OTP:</b></label><br/>
						<input class="form-control" type="number"  name="otp1" required>
					</div>
					<div class="mb-3">
						<p id="timer" style="float:right;color:red;"></p>
					</div>
					<input type="hidden" name="otp2" value=<?php echo $otp; ?>>
				</div>
				<div class="modal-footer">
				   <!--<a href="OTP_mail.php?email='<?php// echo $_POST['email'];?>'"><input class="btn btn-primary"
		           name="Resend" value="Resend OTP"></a>-->
		           <input class="btn btn-primary" type="submit" id="register" name="Submit" value="NEXT">
		      	</div>
		       </form>
		      </div>
			</div>
		</div>
	</body>
</html>
<?php } ?>