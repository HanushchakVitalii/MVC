<?php


/**
 *Модель для таблицы продукции (products)
 *
 */
//подключаем конфигурацию бд
include_once '../config/db.php';
/**
 * [getLastProducts description]
 * @param  int $limit
 * @return array массив товаров
 */
function getLastProducts($limit = null){
    global $db;
    $sql = "SELECT*
          FROM products
          ORDER BY id DESC";
          if ($limit){
    $sql .= " LIMIT {$limit}";
    }
    $rs = mysqli_query($db, $sql);
  return createRsArray($rs);
}





 ?>
