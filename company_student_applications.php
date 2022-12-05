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
</head>
	<?php include("company_menu.php"); if(isset($_SESSION['email'])){ ?>
   <body>
      <table id="tb">
        <tr>
          <th>JOB ID</th>
          <th>STUDENT NAME</th>
          <th colspan="2" style="text-align: center;">See More</th>
          <th colspan="2" style="text-align: center;">ACTION</th>
        </tr>
        
        <?php
          $con=mysqli_connect("localhost","root","HkQFz53V31ghE3DF");
          $db=mysqli_select_db($con,"BVMPlacement");
          $email=$_SESSION['email'];
          $sql_id="SELECT `c_id` FROM `company` where `email`='$email';";
          $query_id=mysqli_query($con,$sql_id);
          if($query_id)
          {
            $row_id=mysqli_fetch_array($query_id);
            $cid=$row_id['c_id'];
            $sql="SELECT * FROM `stu_job` where `application_status`='P' && `job_id` in (select `job_id` from `job` where `c_id` = '$cid');";
          //$sql="SELECT * FROM stu_job where `application_status`='P';";
          $query=mysqli_query($con,$sql);
          if($query)
          {
            while ($row=mysqli_fetch_array($query))
            {
              $jid=$row['job_id'];
              $rollno=$row['std_id'];
              $query_Std=mysqli_query($con,"select * from `Student` where `id`='$rollno';");
              if($query_Std)
              {
                
                $row_Std=mysqli_fetch_array($query_Std);
        ?>
        <tr>
          <td><?php echo $row['job_id']; ?></td>
          <td><?php echo $row_Std['student_name']; ?></td>
          <td><a href="company_job_details.php?jid=<?php echo $jid; ?>">Job Details</a></td>
          <td><a href="student_details.php?email=<?php echo $row_Std['email']; ?>&jid=<?php echo $jid; ?>">Student Details</a></td>
          <td><a class="btn btn-success" href="student_job_approval.php?sid=<?php echo $row_Std['id'] ; ?>&jid=<?php echo $jid; ?>">APPROVE</a></td>
          <td><a class="btn btn-danger" href="reject_student_jobs.php?sid=<?php echo $row_Std['id']; ?>&jid=<?php echo $jid; ?>">REJECT</a></td>
        </tr>
          <?php }}}//else echo die(mysqli_error($con));//else echo die(mysqli_error($con));?>
      </table>
      <div style="margin-bottom: 30%;"></div>
      <?php
          include("footer.php");
        }
        else {
          header("location:index.php");
        }}
      ?>
   </body>
</html>