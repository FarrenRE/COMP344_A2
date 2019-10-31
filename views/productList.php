<?php

include '../controller.php';

include '../includes/header.php';

?>



<?php
# render product list from database
function renderProductList()
{
  $html = '';
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
