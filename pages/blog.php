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
        <a class="navbar-brand" href="/index.php">High Street Gym</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/index.php"">Home</a>
              </li>
              <li class=" nav-item">
                <a class="nav-link" href="pages/blog.php">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="pages/classes.php">Classes</a>
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
          <h3>You are currently at the Blog page!</h3>
          <p>Interact with other members or checkout our classes page!</p>
        </div>
      </div>
      <a class="btn btn-secondary" href="/pages/classes.php" role="button"> To Classes</a> <!--Remember to link buttons!!!-->
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