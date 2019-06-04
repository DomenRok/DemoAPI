


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="<?= BASE_URL ?>"> Browse songs </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?= BASE_URL . "submit" ?>"> Post your own poem  </a>
      </li>
    
    </ul>
    
    Welcome,  <?= $_SESSION['username'] ?> <br>
    <span> <a href="<?= BASE_URL . "logout"  ?>" class="btn btn-primary"> logout </a></span>
      
  </div>
</nav>

