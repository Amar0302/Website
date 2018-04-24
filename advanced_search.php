<?php
  require_once('globals.php');

  $product_name=$_POST["title_AS"];
  $category=$_POST["category_AS"];
  $description=$_POST["description_AS"];
  $min_price= $_POST["price-min"];
  $max_price=$_POST["price-max"];
  $postage=$_POST["postage_AS"];

  $seach_for=$_POST["search_for"];

  switch($seach_for) {
    case "Product Name":

      break;
    case 'Category':
        // code...
      break;

    case 'Description':
      // code...
      break;

    case 'Postage':
      // code...
      break;

    case 'Price':
      // code...
      break;

?>
