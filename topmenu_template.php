<?php
  session_start();

  include 'db/koneksi.php';
  $query = mysqli_query($link, "SELECT * FROM tb_user WHERE username='$_SESSION[nama]'");
  $data = mysqli_fetch_array($query);

  $avatar = $data['foto'];
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Perpustakaan | UNISKA</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <!-- font awesome -->
  <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
  folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../assets/css/_all-skins.min.css">
  <!-- Date Picker -->
  <!-- <link rel="stylesheet" href="../assets/css/datepicker3.css"> -->
  <link rel="icon" href="../assets/image/logo-uniska.png" type="image/gif" sizes="16x16">
</head>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <header class="main-header">
      <!-- Logo -->
      <a href="home.php" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>P</b>U</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>PERPUS</b> UNISKA</span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">

            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <?php
                    if ($avatar) {
                      echo "<img src='../assets/image/$data[foto]' class='user-image' alt='User Image'>";
                    } else{ 
                      echo "<img src='https://ui-avatars.com/api/?name=$_SESSION[nama];' class='user-image' alt='User Image'>";
                    }
                  ?>
                <span class="hidden-xs"><?php echo $_SESSION['nama']; ?></span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <?php
                    if ($avatar) {
                      echo "<img src='../assets/image/$data[foto]' class='user-image' alt='User Image'>";
                    } else{ 
                      echo "<img src='https://ui-avatars.com/api/?name=$_SESSION[nama];' class='user-image' alt='User Image'>";
                    }
                  ?>
                  <p>
                    <?php echo $_SESSION['nama']; ?> -
                    Web Developer
                    <small>Member since Nov. 2014</small>
                  </p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="#" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
            <!-- Control Sidebar Toggle Button -->
            <li>
              <a href="#" data-toggle="control-sidebar"><i class="fa
                  fa-gears"></i></a>
            </li>
          </ul>
        </div>
      </nav>
    </header>