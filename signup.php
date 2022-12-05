<!DOCTYPE html>
<html>
<head>
	<title>BVM Placement</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
    crossorigin="anonymous"></script>
    <link rel="shortcut icon" type="image/x-icon" href="Logo.png">
    <link rel="stylesheet" type="text/css" href="custom_format.css">
    <base target="_blank">
</head>
<body>
  <?php include('menu.php');?>
  <div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h3 class="modal-title" id="loginModalLabel">Signup</h3>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form>
            <div class="mb-3">
              <a href="student_signup.php" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Student</a>
            </div>
            <div class="mb-3">
              <a href="tpc_member_signup.php" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">TPC Member</a>
            </div>
            <div class="mb-3">
              <a href="company_signup.php" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Company</a>
            </div>
            <button type="submit" class="btn btn-primary">Sign-Up</button>
          </form><br/>
            </div>
          </div>
        </div>
      </div>
</body>
</html>