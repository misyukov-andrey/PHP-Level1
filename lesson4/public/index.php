<?php

include "../config/config.php";


$page = 'index';
if (isset($_GET['page'])) {
    $page = $_GET['page'];
}


$params = [];
switch ($page) {

    case 'index':
        $params['name'] = 'Админ';
        break;

    case 'catalog':
        $params['catalog'] = getCatalog();
        break;
    case 'galery':
        $params['galery'] = getGalery();
        break;

    case 'apicatalog':
        echo json_encode(getCatalog(), JSON_UNESCAPED_UNICODE);
        die();
        break;
}

echo render($page, $params);


function getCatalog() {
    return [
        [
            'name' => 'Пицца',
            'price' => 24
        ],
        [
            'name' => 'Чай',
            'price' => 1
        ],
        [
            'name' => 'Яблоко',
            'price' => 12
        ],
    ];
}

