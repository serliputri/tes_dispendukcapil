<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link
      rel="stylesheet"
      href="styleWelcome.css"
      media="screen"
      title="no title"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css"
    />
  </head>
<body>
    <header>
      <div class="left_area">
        <h3>Pemrograman <span>Web</span></h3>
      </div>
    </header>
    <div class="sidebar">
      <center>
        <img src="profile.png" class="profile_image" alt="user" />
        <?php echo "<h4>Welcome " . $_SESSION['username'] . "</h4>"; ?>
      </center>
      <a href="profile.php"
        ><i class="fas fa-sign-out-alt"></i><span>Profile</span></a
      >
      <a href="index.php"
        ><i class="fas fa-sign-out-alt"></i><span>Keluar</span></a
      >
    </div>
    
    <div class="footer">
      <h3>Copyright © 2024 Serli P</h3>
    </div>
</body>
</html>
