<!DOCTYPE html>
<html>
<head>
	<title>BVM Placement</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
    crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="Logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="custom_format.css">
    <base target="_self">
</head>
<body>
	<?php include('menu.php');?>
	<script>
		$(window).on('load', function() {
        $('#forgot_password_modal2').modal('show');
	</script>

	<button type="button" data-bs-toggle="modal" data-bs-target="#forgot_password_modal2" data-bs-dismiss="modal">Open Modal</button>
<div class="modal fade hide" id="forgot_password_modal2" aria-labelledby="forgot_password_modalLabel">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h3 class="modal-title" id="loginModalLabel">2-Steps Verification</h3>
			        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			      </div>
			      <div class="modal-body">
					<form method="post">
					<u>The OTP is sent to the E-Mail ID</u> :<b> <?php echo $_POST['email'];?></b>
					<br/><br/>
					<a href="">Entered wrong E-Mail ID?</a>
					<input type="hidden" name="email" value=<?php echo $_POST['email']; ?>>
					<div class="mb-3">
					<label for="email"><b>Enter The OTP:</b></label><br/>
					<input class="form-control" type="number"  name="otp1" required>
					<p id="timer" style="float:right;color:red;"></p>
					</div>
					<input type="hidden" name="otp2" value=<?php echo $otp; ?>>
				</div>
				<div class="modal-footer">
		          <input class="btn btn-primary" type="submit" id="register" name="Submit" value="Next">
		          <a href="phpmailer/OTP_mail.php?email=<?php echo $_POST['email'];?>"><input class="btn btn-primary"
		           name="Resend" value="Resend OTP"></a>
		           </form>
		        </div>
			    </div>
			  </div>
			</div>
		</div></div></div></div></body></html>