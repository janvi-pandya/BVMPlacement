<?php
	//require "phpmailer/PHPMailerAutoload.php";
	include('index.php');
	if($_POST['otp1']!=$_POST['otp2'])
	{
		echo '<script type="text/javascript">
							alert("You Have Entered Wrong OTP!");
						</script>';
		header("refresh:1;url=index.php");
		exit("");
	}
?>
<!DOCTYPE html>
<html>
	<head>
	  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	  <script>
	    $(document).ready(function(){
	      $("#forgot_password_modal3").modal('show');
	    });
	  </script>
	</head>
	<body>
		<div class="modal fade in" id="forgot_password_modal3">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h3 class="modal-title" id="loginModalLabel" tabindex="-1">Reset Password</h3>
				        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				      </div>
				      	<div class="modal-body">
							<form method="post" action="change_password2.php">	
									<div class="mb-3">
										<label for="password"><b>Password:</b></label>
										<input  class="form-control" type="password" name="password" required> <br>
									</div>
									<div class="mb-3">
										<input type="hidden" name="email" value=<?php echo $_POST['email']; ?>>
										<label for="confirmpassword"><b>Confirm Password:</b></label>
										<input  class="form-control" type="password" name="confirmpassword" required> <br>
									</div>
						</div>
						<div class="modal-footer">
								<input class="btn btn-primary" type="submit" id="register" name="Submit" value="Submit">
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>	
	</body>
</html>