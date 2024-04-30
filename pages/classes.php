<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css" />
  <title>classes</title>
</head>

<body>
  <header>
    <?php require_once('../boilerplate/nav.php') ?>
  </header>
  <main>
    <div class="container">
      <div class="card">
        <div class="card-body">
          <h3>You are currently at the Classes page!</h3>
          <p>Sign up for classes or head over to our members blog!</p>
        </div>
      </div>
      <?php require_once('../includes/classes.inc.php') ?>
      <br>
      <a class="btn btn-secondary" href="blog.php" role="button"> To Blog</a>
    </div>
  </main>
  <footer>
    <?php require_once('../boilerplate/footer.php') ?>
  </footer>
  <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
</body>

</html>