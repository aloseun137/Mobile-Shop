<?php
// cart functionality
class Cart {
  public $db = null;
  public function __construct(DBController $db) {
    if (!isset($db->con)) return null;
    $this->db = $db;
  }
// fetch product from db
  public function insertIntoCart($param = null, $table = 'cart') {
      if($this->db->con != null) {
        if($param != null) {
            // insert into cart table

            // get column values
            $column = implode(',', array_keys($param));
            $values = implode(',', array_values($param));
            $query = sprintf('INSERT INTO %s(%s)VALUES(%s)', $table,$column,$values);
            $result = $this->db->con->query($query);
            return $result;

        }
      }
  }

  public function addToCart($userid, $itemid) {
    if(isset($userid) && isset($itemid)) {
        $param = array(
            'user_id' => $userid,
            'item_id' => $itemid
        );
        $result = $this->insertIntoCart($param);
        if($result) {
            header("Location: " . $_SERVER['PHP_SELF']);
        }
    }
  }

  public function getSum($arr) {
    if(isset($arr)) {
        $sum = 0;
        foreach($arr as $item){
            $sum += floatval($item[0]);
        }
        return sprintf('%.2f', $sum);
    }
  }

  public function deleteCart($item_id = null, $table = 'cart') {
    if($item_id != null) {
    $result = $this->db->con->query("DELETE FROM {$table} WHERE item_id={$item_id}");
    if($result) {
        header("Location:" . $_SERVER['PHP_SELF']);
    }
    return $result;
    }
  }

  public function getItemid($arrVal) {
      if(isset($arrVal)) {
        $result = array_map(function($item){
            return $item['item_id'];
        }, $arrVal);
        return $result;
      }
  }

  public function saveForLater($item_id = null, $saveTable = 'wishlist', $fromTable = 'cart') {
    if($item_id != null) {
        $query = "INSERT INTO {$saveTable} SELECT * FROM {$fromTable} WHERE item_id={$item_id};";
        $query .= "DELETE FROM {$fromTable} WHERE item_id={$item_id};";
        $result = $this->db->con->multi_query($query);
        if($result) {
            header("Location: cart.php");
        }

    }
}


}

?>