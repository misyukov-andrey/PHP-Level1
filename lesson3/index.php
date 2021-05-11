<!-- Task1 -->
<?php

$i = 0;

while($i <= 100){
    if($i % 3 == 0)
        echo "$i "  ;
    $i++;   
}
?>

<!-- Task2 -->
<?php

$a = 0;

do{
    if($a == 0)
    echo ("<br> $a - это ноль <br>");
    elseif ($a > 0 && $a % 2 == 0)
    echo ("$a - чётное число <br>");
    else 
    echo ("$a - нечётное число <br>");
    $a++;
}while ($a <= 10);

?>


<!-- Task3 -->
<?php

$region = [
    'Московская область' => ['Москва','Зеленоград','Клин'],
    'Нижегородская область' => ['Нижний Новгород','Дзержинск','Кстово'],
    'Ярославская область' => ['Ярославль','Рыбинск','Мышкин'],
];


foreach ($region as $key => $item){
    echo $key . ': <br>';
    foreach($item as $city){
        echo ($city . ','. '<br>');
    }
}


?>


<!-- Task5 -->
<?php

$str = "Функция замены пробелов";

function replace($str){
    return str_replace(' ', '_', $str);
}

echo replace($str);

?>


<!-- Task6 -->
<?php

$menu = [
    'Меню1',
    'Меню2',
    'Меню3',
    'Меню4',
];


include 'main.php';
	
?>

<!-- Task7 -->
<?php

for($i = 0; $i < 10; $i++){}


	
?>




