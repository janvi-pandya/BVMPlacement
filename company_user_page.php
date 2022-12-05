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
<body>
  <?php include('company_menu.php'); if(isset($_SESSION['email'])){ ?>
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
      <div class="carousel-item active">
    <img src="BVM.jpg" class="w-100 h-50" alt="...">
      <div class="carousel-caption">
        <h1>BVM Campus Placement</h1>
        <h1 class="font" style="color: #FBFCF8;">We guide you to the best path to begin your journey as an Employee!</h1>
      </div>
    </div>
  </div>
  </div>
  <div class="cardContainer">
    <center><h1 class="font">Our Top Recruiters</h1></center>
    <div class="card">
      <div class="card-body">
      <img src="amazon.jpg" class="card-img-top cardImg" alt="...">
        <div class="card-body">
          <h5 class="card-title">Amazon</h5>
          <p class="card-text">Work Hard.Have Fun.Make History.</p>
          <a href="https://www.amazon.jobs" class="btn btn-primary">Know More</a>
        </div>
    </div>
  </div>
  <div class="card">
      <div class="card-body">
      <img src="dell.png" class="card-img-top cardImg" alt="...">
        <div class="card-body">
          <h5 class="card-title">Dell</h5>
          <p class="card-text">Dell. Purely You.</p>
          <a href="https://www.delltechnologies.com" class="btn btn-primary">Know More</a>
       </div>
    </div>
  </div>
    <div class="card">
      <div class="card-body">
      <img src="hp.png" class="card-img-top cardImg" alt="...">
        <div class="card-body">
          <h5 class="card-title">HP</h5>
          <p class="card-text">Keep reinventing.</p>
          <a href="https://www.hp.com" class="btn btn-primary">Know More</a>
        </div>
    </div>
  </div>
  <div class="card" style="border-right: none;">
      <div class="card-body">
      <img src="infosys.png" class="card-img-top cardImg" alt="...">
        <div class="card-body">
          <h5 class="card-title">Infosys</h5>
          <p class="card-text">Powered by intellect.Driven by values.</p>
          <a href="https://www.infosys.com" class="btn btn-primary">Know More</a>
       </div>
    </div>
</div>
</div>
    <?php
          include("footer.php");
        }
        else {
          header("location:index.php");
        }
      ?>
</body>
</html>