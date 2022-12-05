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
    <base target="_self">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
</head>
<body>
 <?php include('tpcmember_menu.php'); if(isset($_SESSION['email'])){;?> 
  <table id="tb">
    <tr>
      <th>Company's Name</th>
      <th>Email</th>
      <th>Recruiter's Name</th>
      <th>Contact Number</th>
      <th>Know More</th>
      <th>Action</th>
    </tr>
     <?php
        $con=mysqli_connect("localhost","root","HkQFz53V31ghE3DF");
        $db=mysqli_select_db($con,"BVMPlacement");
        $sql="SELECT * FROM `company` where `approval_status`='Y';";
        $result=(mysqli_query($con,$sql));
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['company_name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['recruiter_name'] . "</td>";
                echo "<td>" . $row['phone_no'] . "</td>";
                echo "<td><a target='_blank' href='" . $row['website'] . "'>About ". $row['company_name'] ."</a></td>";
                echo "<td><a class='btn btn-danger' href='company_access_revoke.php?c_id=".$row['c_id']."'>Revoke Access</a></td>";
            echo "</tr>";
        }
        echo "</tr></table>";
        include('footer.php');
      }
      else
        header("location:index.php");
      ?>
</body>
</html>