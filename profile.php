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
    <title>Profile</title>
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
    <div class="content">
      <div class="box">
        <tbody>
          <table
            border="0"
            width="100%"
            style="
              padding-left: 55px;
              padding-right: 0px;
              padding-top: 15px;
              padding-bottom: 15px;
            "
          >
            <tr>
              <th rowspan="8">
                <img
                  src="2141720023.jpg"
                  alt="fotoku"
                  width="110px"
                  height="160px"
                />
              </th>
            </tr>
            <tr>
              <td width="28%">Nama</td>
              <td width="2%">:</td>
              <td style="font-weight: bold">Serli Putri Maharani</td>
            </tr>
            <tr>
              <td>NIM</td>
              <td>:</td>
              <td>2141720023</td>
            </tr>
            <tr>
              <td>Jenis Kelamin</td>
              <td>:</td>
              <td>Perempuan</td>
            </tr>
            <tr>
              <td>Tempat, Tanggal Lahir</td>
              <td>:</td>
              <td>Malang, 30 Januari 2023</td>
            </tr>
            <tr>
              <td>Prodi</td>
              <td>:</td>
              <td>D-IV Teknik Informatika</td>
            </tr>
            <tr>
              <td>Jurusan</td>
              <td>:</td>
              <td>Teknologi Informasi</td>
            </tr>
          </table>
        </tbody>
      </div>
      <br />
      <br />
    </div>
    <div class="footer">
      <h3>Copyright © 2024 Serli P</h3>
    </div>
</body>
</html>
