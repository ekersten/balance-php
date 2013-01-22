<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container-fluid">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <a class="brand" href="#">Balance</a>
      <div class="btn-group pull-right">
        <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
          <i class="icon-user"></i> <?php echo $active_user->firstname; ?>
          <span class="caret"></span>
        </a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo Kohana::$base_url; ?>login/logout">Salir</a></li>
        </ul>
      </div>
      <div class="nav-collapse">
        <ul class="nav">
          <li class="active">
            <a href="<?php echo Kohana::$base_url; ?>main">Home</a>
          </li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div>
</div>