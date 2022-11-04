<header class="main-header">
  <!-- Logo -->
  <div class="logo" style="width: 320px;">

      <img src="../aset/foto/undip.png" class="img-circle" alt="Logo" height="50" width="50">
      <b> Universitas Diponegoro </b>


  </div>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top" role="navigation" style="margin-left: 320px;">
    
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">

        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
    <!--<img src="../aset/foto/<?php echo "".$_SESSION["Foto"]."" ?>" class="user-image" alt="Foto">-->
    <span class="hidden-xs" style="text-transform:capitalize;"><?php echo "".$_SESSION["Username"]."" ?></span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header" style="height: 100px;">
    
              <!--<h3><p>Akademik</p></h3>-->
              <br>
    <p style="text-transform:capitalize;">Hi, <?php echo "".$_SESSION["nama_lengkap"]."" ?> </p>
            </li>
            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="pull-right">
                <a href="../logout.php" class="btn btn-primary">Sign out <i class="fa fa-sign-out"></i></a>
              </div>
            </li>
        </li>
      </ul>
    </div>
  </nav>
</header>
