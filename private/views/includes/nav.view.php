<nav class="navbar navbar-expand-lg bg-light shadow-sm">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><?=Auth::getSchool_name();?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?=ROOT?>/">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=ROOT?>/profile">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=ROOT?>/schools">Schools</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=ROOT?>/users">Staff</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Tests</a>
        </li>
        </ul>
        <ul class="navbar-nav ms-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?=Auth::getFirstname();?>
          </a>
          <ul class="dropdown-menu dropdown-menu-end">
              <li><a class="dropdown-item" href="<?=ROOT?>/logout">Logout</a></li>
              <li><a class="dropdown-item" href="<?=ROOT?>/signup">Signup</a></li>
              <li><a class="dropdown-item" href="<?=ROOT?>/login">Login</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
