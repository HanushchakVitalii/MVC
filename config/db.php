<?php

/**
 *Инициализация подлючения к БД
 *
 */
  $dblocation = "127.0.0.1";
  $dbname = "myshop";
  $dbuser = "root";
  $dbpasswd = "root";

  // соеденения с БД
  $db = mysqli_connect($dblocation, $dbuser, $dbpasswd, $dbname);

  if (! $db){
    echo "Ошибка подключения к MySql";
    exit();
  }
  //
  // //Устанавливаем кодировку по умолчанию для текущого соеденения.
  if (!mysqli_set_charset($db, 'utf8')){
    printf("Ошибка при загрузке набора символов utf8: %s\n", mysqli_error($link));
    exit();
  }

 // подключения к БД
  // if (!mysqli_select_db($db, $dbname)){
  //   echo "Ошибка доступа к базе данных: {$dbname}";
  //   exit();
  // }
 ?>
