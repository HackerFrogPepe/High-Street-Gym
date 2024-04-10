<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css" />
</head>

<body>
  <header>
    <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="/index.php">High Street Gym</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="blog.php">Blog</a> <!--WORKS COPY SYNTAX-->
            </li>
            <li class="nav-item">
              <a class="nav-link" href="classes.php">Classes</a>
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
          <h3>You are currently at the Classes page!</h3>
          <p>Sign up for classes or head over to our members blog!</p>
        </div>
      </div>
      <a class="btn btn-secondary" href="High-Street-Gym/pages/blog.php" role="button"> To Blog</a> <!--Remember to link buttons!!!-->
    </div>
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