<?php

  $path = dirname(__FILE__);
  include($path.'/header.php');
  ?>
<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
      <a href="#" class="nav-link">Home</a>

      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
      <li>
  <div class="form-inline">
    <div class="input-group" data-widget="sidebar-search">
      <input class="form-control form-control-sidebar" type="search" id="searchInput" placeholder="Search" aria-label="Search">
      <div class="input-group-append">
        <button class="btn btn-sidebar" id="searchButton">
          <i class="fas fa-search fa-fw"></i>
        </button>
      </div>
    </div>
  </div>
</li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

   

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
    <div class="dropdown show">
        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            ADMIN
        </a>

        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="#"><?php echo htmlspecialchars($_SESSION['login_user_id']['name'] ?? ''); ?></a>
            <a class="dropdown-item" href="#">Settings</a>
            <a class="dropdown-item" href="../../../login.php?logout=1">Log out</a>
        </div>
    </div>
</li>

      <!-- Notifications Dropdown Menu -->
     
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    
    </ul>
  </nav>
  <!-- /.navbar -->

  <?php
  include($path.'/script.php');
?>