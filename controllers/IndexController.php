<?php
/**
*
*   Контроллер главной страницы
*
*/

// подключаем модели
include_once '../models/CategoriesModel.php';
include_once '../models/ProductsModel.php';


//открытия страницы
function indexAction(){
    $rsCategories = getAllCategoriesWithPerents();
    $rsProducts = getLastProducts(16);
    d($rsProducts);
    echo 'IndexController.php > testAction';
}

//получаем модель
function getModel(){
    $rsCategories = getAllCategoriesWithPerents();
}

//отдаем в вюху
function giveModel(){

}
?>
