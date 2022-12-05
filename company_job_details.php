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
	<?php include("company_menu.php"); ?>
   <body>
      <?php
          $con=mysqli_connect("localhost","root","HkQFz53V31ghE3DF");
          $db=mysqli_select_db($con,"BVMPlacement");
          $jid=$_REQUEST['jid'];
          $sql="SELECT * FROM job where `job_id`='$jid';";
          $query=mysqli_query($con,$sql);
          if($query)
          {
            $row=mysqli_fetch_array($query);
          }
          else
            echo die(mysqli_error($con));
        ?>
      <table id="tb">
        <tr>
          <th>Job Id</th>
          <td><b><?php echo $row['job_id']; ?></b></td>
        </tr>
        <tr>
          <th>Post</th>
          <td><?php echo $row['post']; ?></td>
        <tr>
          <th>Salary</th>
          <td><?php echo $row['salary']; ?></td>
        </tr>
        <tr>
          <th>Vacancy</th>
          <td><?php echo $row['vacancy']; ?></td>
        </tr>
        <tr>
          <th>Recruiting Criteria</th>
          <td><?php echo "<a target='_blank' href='recruitment_criteria.php?job_id=".$row['job_id']."'>".$row['file_name']."</a>";?></td>
        </tr>
      </table>
      <?php include('footer.php');?>
</body>
</html>