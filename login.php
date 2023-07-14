<?php
include "./Controller/koneksi.php";
if (!isset($_GET['register']) && !isset($_GET['login'])) {
    // Redirect ke login.php?login
    header("Location: login.php?login");
    exit();
  }
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<?php if(isset($_GET['register'])){?>
  <title>Register | Cuits.com</title>
<?php }else if(isset($_GET['login'])) {?>
  <title>Login | Cuits.com</title>
<?php }?>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background-color:#191825;font-family: 'VT323', monospace">
<!-- halaman register -->
<?php if(isset($_GET['register'])){?>
<div class="container d-flex justify-content-center align-items-center" style="height:100vh;">
    <div class="card" style="padding:85px 15px 85px 15px;background-color:black;color:white;">
      <div class="card-body">
        <h1 class="card-title">Bergabung dengan Cuits😊</h1>
        <form method="post" action="./Controller/validation.php">
          <!-- Form fields go here -->
          <div class="form-group">
            <label for="name">Username:</label>
            <input required style="background-color:transparent;padding:30px;" type="text" class="form-control" id="name" name="username" placeholder="Enter your Username">
            <?php if(isset($_GET['user'])){?><b style="color:red"><?= htmlspecialchars($_GET['user'])?></b> <?php }?>
          </div>
          <div class="form-group">
            <label for="password">Password:</label>
            <input required type="password" style="background-color:transparent;padding:30px;" class="form-control" id="password" name="password" placeholder="Enter your Password">
            <?php if(isset($_GET['pass'])){?><b style="color:red"><?= htmlspecialchars($_GET['pass'])?></b> <?php }?>
          </div>
          <div class="form-group">
            <label for="number">Whatsapp:</label>
            <input required type="number" style="background-color:transparent;padding:30px;" class="form-control" id="number" name="whatsapp" placeholder="Enter your Whatsapp">
          </div>
          <button type="submit" name="daftar" class="btn btn-outline-warning" style="padding:5px 30px 5px 30px">Register</button>
          <?php if(isset($_GET['code']) && $_GET['code'] == "success"){ ?><b>Berhasil Daftar , <a href="login.php?login">Login!</a></b> <?php } ?>
        </form>
      </div>
    </div>
  </div>
<!-- halaman register -->
<!-- Mengatur untuk Halaman Login -->
  <?php }else if (isset($_GET['login'])){?>
  <div class="container d-flex justify-content-center align-items-center" style="height:100vh;">
    <div class="card" style="border-radius:12px;padding:85px 15px 85px 15px;background-color:black;color:white;">
      <div class="card-body">
        <h1 class="card-title">Login | Welcome✌️</h1>
        <form method="post" action="Controller/validation.php">
          <!-- Form fields go here -->
          <div class="form-group">
            <label for="name">Username:</label>
            <input style="background-color:transparent;padding:30px;" type="text" class="form-control" id="name" name="username" placeholder="Enter your Username">
          </div>
          <div class="form-group">
            <label for="email">Password:</label>
            <input type="password" style="background-color:transparent;padding:30px;" class="form-control" id="email" name="password" placeholder="Enter your Password">
          </div>
          <button type="submit" class="btn btn-outline-warning" name="login" style="padding:5px 30px 5px 30px">Masuk</button>
        </form>
        <a href="login.php?register" style="margin-top:10px;">Belum punya account? Daftar disini</a>
      </div>
    </div>
  </div>
  <?php } ?>
  <!-- end halman login -->
  <!-- Include Bootstrap JS -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
