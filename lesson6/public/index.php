<?php

include $_SERVER['DOCUMENT_ROOT'] . "/../config/config.php";


$url_array = explode('/', $_SERVER['REQUEST_URI']);

if ($url_array[1] == "") {
    $page = 'index';
} else {
    $page = $url_array[1];
}


$params = [];
$layout = 'main';
switch ($page) {

    case 'index':
        $params['name'] = 'Админ';
    break;

    case 'catalog':
        $layout = 'galery';
        $params['goods'] = getGoods();
    break;

    case 'catalogone':
        $layout = 'galery';
        $params['file'] = getGoodsOne($_GET['id']);
    break;
    
    case 'galery':
        $params['galery'] = getGalery();
        $layout = 'galery';
    break;

    case 'galeryone':
        $layout = 'galery';
        getLikes($_GET['id']);
        $params['file'] = getGaleryOne($_GET['id']);
    break;

    case 'apicatalog':
        echo json_encode(getCatalog(), JSON_UNESCAPED_UNICODE);
        die();
    break;
}



echo render($page, $params,$layout);



