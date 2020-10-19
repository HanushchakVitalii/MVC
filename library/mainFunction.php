<?php
/**
*
*Основные   функции
*
*/
/**
 * [loadPage description]
 * @param  string $controllerName названия контролера
 * @param  string $actionName     названия функции обработки страницы
 */
function loadPage ($controllerName = 'index', $actionName = 'index'){
    include_once PathPrefix . $controllerName . PathPostfix;
    $function = $actionName . 'Action';
    $function();
}

/**
 * [d description]
 * @param  [type]  $value [description]
 * @param  integer $die   [description]
 */
function d($value = null, $die = 1){
  echo 'DEBUG: <br /><pre>';
  print_r($value);
  echo '</pre>';

  if($die) die;
}
/**
 * преобразования результата работы функции выборки в ассоциативный масссив
 * @param  [type] $request [description]
 * @return [type]          [description]
 */
function createRsArray($rs){
  if (! $rs) return false;
  $rsArray = array();
  while ($row = mysqli_fetch_assoc($rs)) {
    $rsArray[] = $row;
  }
  return $rsArray;
}


?>
