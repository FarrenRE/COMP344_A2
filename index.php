<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <title>Product Comparison Page</title>

  <?php
  include 'functions.php';
  include 'includes/assets.php';
  include 'includes/header.html';
  ?>

</head>

<body>
  <main>

    <section class="container">
      <?php echo renderProductList(); ?>
    </section>

  </main>
  <?php include 'includes/footer.html' ?>
</body>

</html>