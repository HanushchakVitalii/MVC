<?php

/**
 * Модель для таблицы категорий (categories)
 *
 */
// пдключаем конфигурацию бд
include_once '../config/db.php';
/**
 * Получить  дочернии категории для категории ID
 * @param  integer $categoriesId категории
 * @return array  массив дочерних категорий
 */
function getChildrenForCategories($categoriesId){
  global $db;
  $sql = "SELECT*
          FROM categories
          WHERE parent_id = '{$categoriesId}'";
  $rs = mysqli_query($db, $sql);
  return createRsArray($rs);
}
/**
 * получить главные категории с привязками дочерних
 *
 * @return array массив категорий
 */
function getAllCategoriesWithPerents(){
  global $db;
  $sql = 'SELECT*
          FROM categories
          WHERE parent_id = 0';
  $rs = mysqli_query($db, $sql);
  $rsForViews = array();
  while ($row = mysqli_fetch_assoc($rs)){
      $rsChildren = getChildrenForCategories($row['id']);
      if($rsChildren){
        $row['children'] = $rsChildren;
      }

      $rsForViews[] = $row;
    }
  return $rsForViews;
}


 ?>
