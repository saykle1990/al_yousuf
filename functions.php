<?php


$link = mysqli_connect(
    'localhost',  /* Хост, к которому мы подключаемся */
    'root',       /* Имя пользователя */
    '',   /* Используемый пароль */
    'al_yousuf');     /* База данных для запросов по умолчанию */

if (!$link) {
    printf("Невозможно подключиться к базе данных. Код ошибки: %s\n", mysqli_connect_error());
    exit;
}


function top_menu(){


    global $link;
    $result=$link->query("SELECT * FROM top_menu");
    return $result;

}
$menu = top_menu();

function social(){


    global $link;
    $result=$link->query("SELECT * FROM social");
    return $result;

}
$social_menu = social();

/*print_r($social_menu);*/
