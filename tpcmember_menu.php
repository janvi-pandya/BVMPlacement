<?php
  session_start();
  if(isset($_SESSION['email']))
  {
    $email=$_SESSION['email'];
    $con=mysqli_connect("localhost","root","HkQFz53V31ghE3DF");
    $db=mysqli_select_db($con,"BVMPlacement");
    $sql="select * from tpc_member where email="."'$email'"."";
    $result=(mysqli_query($con,$sql));

    while($row=mysqli_fetch_array($result))
    {
      $id=$row['m_id'];
      $name=$row['name'];
      $phone=$row['phone_no'];
      $email=$row['email'];
      $role=$row['role'];
      $pwd=$row['password'];
    }
?>
<head>
    <title>BVM Placement</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
    crossorigin="anonymous"></script>
    <link rel="shortcut icon" type="image/x-icon" href="Logo.png">
    <link rel="stylesheet" type="text/css" href="custom_format.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <base target="_self">
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
              <a class="nav-link active" aria-current="page" href="tpcmember_user_page.php" target="_self">Home</a>
            </li>
            <li class="nav-item">
              <div class="btn-group dropend">
                <a  class="btn btn-outline-dark me-2 dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Profile</a>
              <ul class="dropdown-menu">
                  <li><a class="dropdown-item" data-bs-toggle="modal" href="#modal1" role="button">Update Profile</a></li>
                  <li><a class="dropdown-item" data-bs-toggle="modal" href="delete_tpc_member.php?email=<?php echo $email; ?>" role="button" name="delete">Delete Profile</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="student_registrations.php">Student Registrations</a>
            </li>
          <li class="nav-item">
              <a class="nav-link" href="tpcmember_recruiting_companies.php" target="_self">Our Reqruiters</a>
            </li>
          </ul>
        </div>
        
      <div class="bd-example">
        <div class="modal fade" id="modal6" aria-labelledby="exampleModalToggleLabel" tabindex="-1" style="display: none;" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title" id="exampleModalToggleLabel">TPC Member Registration</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                    <form method="POST" id="form5" name="tpcmember_register">
                <div class="mb-3">
                  <h3 class="modal-title center" id="exampleModalToggleLabel">Personal Details</h3>
                    <label for="loginInputEmail1" class="form-label">TPC Member ID Number</label>
                    <input type="text" name="id" class="form-control" id="id" required>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Full Name</label>
                    <input type="text" name="name" class="form-control" id="name" required>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Role</label>
                    <select class="form-control" name="role" required>
                      <option value="T & P Professor In-Charge">T & P Professor In-Charge</option>
                      <option value="T & P Officer">T & P Officer</option>
                      <option value="Assistant T & P Officer">Assistant T & P Officer</option>
                      <option value="T & P Faculty">T & P Faculty</option>
                      <option value="T & P Team Member">T & P Team Member</option>
                  </select>
                  </div>
          </div>
              <div class="modal-footer">
                <input type="submit" name="submit5" class="btn btn-primary" value="NEXT">
                </form>
              </div>
            </div>
          </div>
        </div>
         <?php 
      if(isset($_REQUEST['submit5']))
          {
            $id = $_REQUEST['id'];
            $name = $_REQUEST['name'];
            $role = $_REQUEST['role'];
            echo "<script type='text/javascript'>
          $(document).ready(function()
          {
            $('#modal6').modal('hide'); 
            $('#modal7').modal('show');
          });
          </script>";
          }
      ?>
        <div class="modal fade" id="modal7" aria-labelledby="exampleModalToggleLabel2" tabindex="-1" style="display: none;" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title" id="exampleModalToggleLabel">TPC Member Registration</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form method="POST" id="form6" action="tpcmember_signup.php">
                  <input type="hidden" name="id" value="<?php echo $id;?>">
                  <input type="hidden" name="name" value="<?php echo $name;?>">
                  <input type="hidden" name="role" value="<?php echo $role;?>">
              <div class="mb-3">
              <h3 class="modal-title center" id="exampleModalToggleLabel">Authentication Details</h3>
                <label for="loginInputEmail1" class="form-label">Email-ID</label>
                <input type="email" class="form-control" name="email" id="email" required>
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Mobile Number</label>
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
                <input type="password" class="form-control" name="pwd" id="password" required>
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" name="cpwd" id="confirm_password" required>
              </div>
          </div>
              <div class="modal-footer">
                <button class="btn btn-secondary" data-bs-target="#modal6" data-bs-toggle="modal" data-bs-dismiss="modal">BACK</button>
                <input type="submit" name="submit6" class="btn btn-primary" value="NEXT">
                </form>
              </div>
            </div>
          </div>
        </div>
    </div>
    <script type="text/javascript">
      function validate_form()
      {
        var password=document.forms["tpcmember_register"]["pwd"].value;
        var confirm_password=document.forms["tpcmember_register"]["cpwd"].value;
        var mobile_number=document.forms["tpcmember_register"]["phonenumber"].value;
        var flag=true;
        if(password=="")
        {
          alert("Enter the Password!");
          flag=false;
        }
        else if(!password.match(/[0-9a-zA-Z\W]/) || password.length<8)
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
        else if(confirm_password=="")
        {
          alert("Enter the Confirm Password!");
          flag=false;
        }
        else if(password!=confirm_password)
        {
          alert("The Password must match with the Confirm Password!");
          flag=false;
        }
        else if(mobile_number=="")
        {
          alert("Enter Your Mobile Number!");
          flag=false;
        }
        else if(!mobile_number.match(/^[789]\d{9,9}$/))
        {
          alert("Enter Valid Mobile Number!");
          flag=false;
        }
        if(flag==true)
        {
          alert("Sign Up Successfull!");
          return true;
        }
        else
          return false;
      }
    </script>
    <a href="logout.php" class="btn btn-outline-dark" role="button">Logout</a>
    <a href="apply_for_placememt.html" class="btn btn-danger btn-lg">Apply Now</a></button>
      <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-warning bi bi-search" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
            <path
              d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
            </svg></button>
      </form>
    </div>
  </div>
 </nav>
</body>
<?php } else header("location:index.php"); ?>