<header>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
      </ul>
      <?php 
        if (!isset($_SESSION['userName'])) {
          echo '
          <form class="d-flex" action="./user/login.php" method="POST">
            <input class="form-control me-2" type="text" placeholder="username" aria-label="username" name="userName">
            <input class="form-control me-2" type="password" placeholder="password" aria-label="password" name="password">
            <input class="btn btn-success" type="submit" value="LogIn">
          </form>
          ';
        }
        else {
          echo '
          <form action="logout.php">
            <input class="btn btn-danger" type="submit" value="LogOut">
          </form>
          ';
        }
      ?>
    </div>
  </div>
</nav>
</header>