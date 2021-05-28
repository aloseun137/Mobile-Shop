<?php
    require '../functions.php';

  if(isset($_POST['itemid'])) {
    $result = $product->getProduct($_POST['itemid']);
      echo json_encode($result);
  }
?>