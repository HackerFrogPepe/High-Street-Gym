<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css" />
</head>

<body>
  <header>
    <?php require_once('../boilerplate/nav.php') ?>
  </header>
  <main>
    <div class="container">
      <div class="card">
        <div class="card-body">
          <h3>You are currently at the Blog page!</h3>
          <p>Interact with other members or checkout our classes page!</p>
        </div>
        <?php include_once('../includes/blog.inc.php') ?>
      </div>
      <a class="btn btn-secondary" href="classes.php" role="button"> To Classes</a>
    </div>
  </main>
  <footer>
    <?php require_once('../boilerplate/footer.php') ?>
  </footer>
  <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
</body>

</html>