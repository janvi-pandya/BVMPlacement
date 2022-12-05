<?php include 'sendemail.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr" class="contact">
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
    <!--alert messages start-->
    <?php 
        include("menu.php");
        echo $alert; 
    ?>
    <!--alert messages end-->

    <!--contact section start-->
    <div class="contact-section">
      <div class="contact-info">
        <div><i class="fas fa-map-marker-alt"></i>Birla Vishwakarma Mahavidyalaya,<br/>&emsp;Vallabh Vidyanagar</div>
        <div><i class="fas fa-envelope"></i>bvmtrainingplacementcell@gmail.com</div>
        <div><i class="fas fa-phone"></i>+91-2692-230103</div>
        <div><i class="fas fa-clock"></i>Mon - Fri 10:30 AM to 6:00 PM</div>
      </div>
      <div class="contact-form">
        <h2>Contact Us</h2>
        <form class="contact" action="" method="post">
          <input type="text" name="name" class="text-box" placeholder="Your Name" required>
          <input type="email" name="email" class="text-box" placeholder="Your Email" required>
          <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
          <input type="submit" name="submit" class="send-btn" value="Send">
        </form>
      </div>
    </div>
    <!--contact section end-->

    <script type="text/javascript">
      if(window.history.replaceState)
      {
        window.history.replaceState(null, null, window.location.href);
      }
    </script>
    <?php include("footer.php"); ?>
  </body>
</html>