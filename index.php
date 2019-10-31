<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <title>Product Comparison Page</title>

  <?php
  include 'controller.php';
  include 'includes/assets.php';
  include 'includes/header.html';
  ?>

  <?php
  # render product list from database
  function renderProductList()
  {
    $html = 'there is no spoon.';
    $template = '  
        <div class="column">
        <div class="card">
        <input type="checkbox" id="shirt" name="shirt">
        <img src="' . $imgurl . '" alt="shirt" style="width:100%">
        <h1>' . $title . '</h1>
        <p class="price">' . $price . '</p>
        <p>' . $desc . '</p>
        </div>
        </div>';

    return $html;
  }


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