<?php

include 'controller.php';

/**
 * render HTML product list from query
 * TODO: add query...
 */
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

/**
 * render HTML product table from query. Only include products selected by user
 */
function renderProductTable()
{
  # loop through attributes and assign to array
  $titles = [];
  while ($row = mysqli_fetch_array($query)) {
    array_push($titles, $row);
  }

  # loop through each array for values
  $html = '<div class="compare-table">
    <ul class="compare-table__row">
      <li class="key">Title</li>
      ' . renderListItems($titles) . '
    </ul>';

  $html .= '</div>';
  return $html;
}

/**
 * render HTML <li> elements from array of like attributes
 */
function renderListItems($listItems)
{
  $html = '';
  foreach ($listItems as $item) {
    $html .= '<li>' . $item . '</li>';
  }
  return $html;
}
