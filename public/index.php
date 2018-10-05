<?php

error_reporting(E_ALL);

// Подключаем Twig
require_once '../lib/Twig/Autoloader.php';
Twig_Autoloader::register();

// Запускаем автоподлкючение классов
require_once '../classes/Db.class.php';
require_once '../classes/Config.class.php';

// Установим подключение с БД
Db::getInstance()->Connect(Config::get('db_user'), Config::get('db_password'), Config::get('db_base'));

// Соберем все GET и POST запросы
$requestResult=
[
  'id' => (isset($_GET['id']) ? $_GET['id'] : 0),

  'path' => (isset($_GET['path']) ? $_GET['path'] : 0),

  'ajaxStartFrom' => (isset($_POST['startFrom']) ? $_POST['startFrom'] : 0)
];

/**
 * Возвращает данные из БД для списка товаров
 *
 * @param int $startFrom - начиная c какого элемента делать выборку
 *
 * @return array
 */
 function getGoodList($startFrom)
   {
   $sql = 'SELECT * FROM `goods` LIMIT :startFrom , 1 ';
   return Db::getInstance()->Select($sql,['startFrom'=>$startFrom]);  
   };

  /**
   * Возращает данные о конкретном товаре по его ИД
   *
   * @param int $id  - ИД товара
   *
   * @return array
   */
  function getGoodCard($id)
   {
    $sql = 'SELECT * FROM `goods` WHERE `id` =:id ';
    return Db::getInstance()->Select($sql,['id'=>$id]); 
   };

// Пронализируем запросы:

// Если есть GET запрос - значит нужно открыть карточку товара
if ($requestResult['id'])
{
  $data = ['content_data' => getGoodCard($requestResult['id'])];

  $view = 'good.html';
// Если пришел POST запрос от AJAX - подготовим данные для рендера
}elseif ($requestResult['ajaxStartFrom'])
{
  $data = ['content_data' => getGoodList($requestResult['ajaxStartFrom'])];

  $view = 'AJAXgoods.html';
// Иначе просто готовим данные для рендера по умолчанию
}else {

  $data = ['content_data' => getGoodList(0)];

  $view = 'goods.html';
};

// Выполняем рендер. В случае AJAX - echo направит ему сразу результат рендера

  $loader = new Twig_Loader_Filesystem(Config::get('path_templates'));
  
  $twig = new Twig_Environment($loader);

  $template = $twig->loadTemplate($view);
 
  echo $template->render($data);