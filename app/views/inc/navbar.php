<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
 <div class="container">
    <a class="navbar-brand" href="<?php echo URLROOT;?>">Camagru</a>
    <ul class="navbar-nav">
      <li  class="nav-item">
        <a class="nav-link" href="<?php echo URLROOT;?>/posts/index">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo URLROOT;?>/pages/about">About</a>
      </li>
      </ul>
      <ul class="navbar-nav ml-auto">
      <?php if (isset($_SESSION['user_id'])): ?>
      <li class="nav-item">
        <a class="nav-link" href="#">Welcome <?php echo $_SESSION['name']?></a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="<?php echo URLROOT;?>/users/logout">Logout</a>
      </li>
      <?php else :?>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo URLROOT;?>/users/register">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo URLROOT;?>/users/login">Login</a>
      </li>
      <?php endif;?>
    </ul>
  </div> 
</nav>