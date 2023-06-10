<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

  <?php if ($_SESSION['login']==TRUE): ?>
    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
      <i class="fa fa-bars"></i>
    </button>
  <?php endif ?>

  <?php if ($_SESSION['login']==FALSE): ?>
    <!-- USER -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" style="color:#000;font-weight: bold;" href="index.php">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color:#000;font-weight: bold;" href="petunjuk.php">PETUNJUK</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color:#000;font-weight: bold;" href="kuesioner.php">KUESIONER</a>
      </li>
    </ul>
  <?php endif ?>

  <?php if ($_SESSION['login']==TRUE): ?>
    <!-- LOGOUT -->
    <ul class="navbar-nav ml-auto">
      <div class="topbar-divider d-none d-sm-block"></div>
      <li class="nav-item">
        <a class="nav-link" style="color:#000;font-weight: bold;" href="index.php?data=logout">LOGOUT</a>
      </li>
    </ul>
  <?php elseif ($_SESSION['login']==FALSE): ?>
    <!-- LOGIN -->
    <ul class="navbar-nav ml-auto">
      <div class="topbar-divider d-none d-sm-block"></div>
      <li class="nav-item">
        <a class="nav-link" style="color:#000;font-weight: bold;" href="login.php">LOGIN</a>
      </li>
    </ul>
  <?php endif ?>
  
</nav>