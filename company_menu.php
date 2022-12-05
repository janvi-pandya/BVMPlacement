<?php
  session_start();
  $con=mysqli_connect("localhost","root","HkQFz53V31ghE3DF");
  $db=mysqli_select_db($con,"BVMPlacement");
  if(isset($_SESSION['email']))
  {
    $email=$_SESSION['email'];
    $sql="select password,company_name,recruiter_name,website,phone_no,email from company where email="."'$email'"."";
    $result=(mysqli_query($con,$sql));

    while($row=mysqli_fetch_array($result))
    {
      $pwd=$row['password'];
      $name=$row['company_name'];
      $recruiter_name=$row['recruiter_name'];
      $website=$row['website'];
      $phone=$row['phone_no'];
      $email=$row['email'];
    }
?>
<head>
  <link href="pid/pidie-0.0.8.css" rel="stylesheet">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-info">
      <div class="container-fluid">
        <a class="navbar-brand" href="/">
          <img src="Logo.png" alt="..." class="logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="font-weight: bold;">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="company_user_page.php" target="_self">Home</a>
            </li>
            <li class="nav-item">
              <div class="btn-group dropend">
                <a  class="btn btn-outline-dark me-2 dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Profile</a>
              <ul class="dropdown-menu">
                  <li><a class="dropdown-item" data-bs-toggle="modal" href="#modal1" role="button">Update Profile</a></li>
                  <li><a class="dropdown-item" data-bs-toggle="modal" href="delete_company.php?email=<?php echo $email; ?>" role="button" name="delete">Delete Profile</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="company_student_applications.php">Student Applications</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="modal" data-bs-target="#modal3" role="button">Job Details</a>
            </li>
          </ul>
        </div>
    <a href="logout.php" class="btn btn-outline-dark" role="button">Logout</a>
    <a href="apply_for_placememt.html" class="btn btn-danger btn-lg">Apply Now</a></button>
      <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-warning bi bi-search" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
            <path
              d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
            </svg></button>
      </form>
      <div class="bd-example">
      <div class="modal fade" id="modal1" aria-labelledby="exampleModalToggleLabel" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title" id="exampleModalToggleLabel">Company Registration</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                  <form name="company_register">
              <div class="mb-3">
                <h3 class="modal-title center" id="exampleModalToggleLabel">Company Details</h3>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Company's Name</label>
                  <input type="text" class="form-control" id="signUpInputCompanyName1" name="name" required>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Recruiter's Name</label>
                  <input type="text" class="form-control" id="signUpInputRecruiterName1" name="recruiter_name" required>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Recruitment Criteria</label>
                  <input type="file" class="form-control" name="recruitment_criteria" id="signUpInputRecruiterName1" name="recruitment_criteria" required>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Official Website</label>
                  <input type="text" class="form-control" id="signUpInputWebsiteLocation1" name="website" required>
                </div>
              </form>
                  </div>
            <div class="modal-footer">
              <input type="submit" name="submit1" class="btn btn-primary" value="NEXT">
            </div>
          </div>
        </div>
      </div>
      <?php 
      if(isset($_REQUEST['submit1']))
          {
            $name = $_REQUEST['name'];
            $rname = $_REQUEST['recruiter_name'];
            $website = $_REQUEST['website'];
            echo "<script type='text/javascript'>
          $(document).ready(function()
          {
            $('#modal6').modal('hide'); 
            $('#modal7').modal('show');
          });
          </script>";
          }
      ?>
      <div class="modal fade" id="modal2" aria-labelledby="exampleModalToggleLabel2" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title" id="exampleModalToggleLabel">Company Registration</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="" method="POST" onsubmit="return validate_form();">
            <div class="mb-3">
            <h3 class="modal-title center" id="exampleModalToggleLabel">Authentication Details</h3>
              <label for="loginInputEmail1" class="form-label">Official Email-ID</label>
              <input type="email" class="form-control" id="signUpCompanyEmail" name="email" required>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Official Contact Number</label>
              <div class="pd-telephone-input">
            <input class="form-control" type="tel" name="phonenumber" required>
            </div>
            <script src="pid/pidie-0.0.8.js"></script>
            <script>
              new Pidie();
            </script>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="signUpCompanyPassword" name="pwd" required>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Confirmation Password</label>
              <input type="password" class="form-control" id="signUpCompanyConfirmPassword" name="cpwd" required>
            </div>
          </form>
        </div>
            <div class="modal-footer">
              <button class="btn btn-secondary" data-bs-target="#modal8" data-bs-toggle="modal" data-bs-dismiss="modal">BACK</button>
              <input type="submit" class="btn btn-primary" name="submit2" value="Submit">
            </div>
          </div>
        </div>
      </div>
      <script type="text/javascript">
      function validate_form()
      {
        var password=document.forms["company_register"]["pwd"].value;
        var confirm_password=document.forms["company_register"]["cpwd"].value;
        var mobile_number=document.forms["company_register"]["phonenumber"].value;
        var flag=true;
        if(!password.match(/[0-9a-zA-Z\W]/) || password.length<8)
        {
          if(!password.match(/[0-9]/))
            alert("Password must contain atleast one digit[0-9]!");
          if(!password.match(/[a-z]/))
            alert("Password must contain atleast one lowercase letter[a-z]!");
          if(!password.match(/[A-Z]/))
            alert("Password must contain atleast one uppercase letter[A-Z]!");
          if(!password.match(/[\W]/))
            alert("Password must contain atleast one special character[@,#,$,!,...]!");
          if(password.length<8)
            alert("Password must be atleast 8 characters long!");
          flag=false;
        }
        else if(password!=confirm_password)
        {
          alert("The Password must match with the Confirm Password!");
          flag=false;
        }
        else if(!mobile_number.match(/^[789]\d{9,9}$/))
        {
          alert("Enter Valid Mobile Number!");
          flag=false;
        }
        if(flag==true)
        {
          alert("Your Profile has been Updated Successfully!");
          return true;
        }
        else
          return false;
      }
    </script>
      <!-- job modal-->
      <div class="bd-example">
      <div class="modal fade" id="modal3" aria-labelledby="exampleModalToggleLabel" tabindex="-1" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title" id="exampleModalToggleLabel">New Job Opening</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                  <form name="job_register" action="job.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Job ID</label>
                  <input type="text" class="form-control" id="job_id1" name="jid" required>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Post</label>
                  <input type="text" class="form-control" id="post1" name="post" required>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Vacancy</label>
                  <input type="text" class="form-control" name="vacancy" id="vacancy1" required>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Salary</label>
                  <input type="text" class="form-control" id="salary1" name="salary" required>
                </div>
                <div class="mb-3">
                    <label for="loginInputEmail1" class="form-label">Recruiting Criteria</label>
                    <input type="file" class="form-control" name="file_data" accept=".pdf,.doc,image/*" id="resume" required><br/>
                </div>
                  </div>
            <div class="modal-footer">
              <input type="submit" class="btn btn-primary" name="submit4">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 </nav>
</body>
<?php }else{header("location:index.php");}