<?php
require_once 'includes/login_view.inc.php';
require_once 'includes/config_session.inc.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css" />
</head>

<body>
  <header>
    <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">High Street Gym</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/blog.php">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/classes.php">Classes</a>
            </li>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <main>
    <div class="container">
      <div class="card">
        <div class="card-body">
          <h3>Welcome to High Street Gym!</h3>
          <h5>We offer a wide range of classes and blog to commuincate with your peers.</h5>
          <p>Login or continue as a guest</p>
        </div>
        <div class="card">
          <div class="card-body">
            <h3>Class List</h3>
            <ul>
              <li>Yoga</li>
              <li>Pilates</li>
              <li>Abs</li>
              <li>HIIT</li>
              <li>Indoor cycling</li>
              <li>Boxing</li>
              <li>Zumba</li>
            </ul>
            <p>Use links below to enter the blog or sign up for classes!</p>
          </div>
        </div>
        <a class="btn btn-secondary" href="../High-Street-Gym/pages/blog.php" role="button"> To Blog</a>
        <a class="btn btn-secondary" href="../High-Street-Gym/pages/classes.php" role="button"> To Classes</a>
      </div>
      <?php
      if (!isset($_SESSION["user_id"])) { ?>
        <h3>Login</h3>

        <form action="includes/login.inc.php" method="post">
          <input type="text" name="username" placeholder="Username">
          <input type="password" name="password" placeholder="Password">
          <button>Login</button>
        </form>
      <?php } ?>
      <?php
      output_username();
      ?>
      <?php
      check_login_errors();
      ?>


      <h3>Logout</h3>

      <form action="includes/logout.inc.php" method="post">
        <button>Logout</button>
      </form>
      <?php include_once('includes/admin_xml_button.php') ?>
  </main>
  <footer>
    <div class="card" <div class="card-body">
      <p class="card-text">
        Join High Street Gym today!
      </p>
    </div>
    </div>
  </footer>
  <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
</body>

</html>