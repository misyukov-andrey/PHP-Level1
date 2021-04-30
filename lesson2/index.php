<?php

// $a = rand(-5,5);
// $b = rand(-5,5);
// $c = rand(0,15);


// $sum = function($a,$c){
//     return $a + $c;
// };

// $dif = function($a,$c){
//     return $a - $c;
// };

// $div = function($a,$c){ 
//     if ($c === 0){
//         return "На ноль делить нельзя!";
//     }else{
//         return $a / $c; 
//     }
     
// };

// $mul = function($a,$c){
//     return $a * $c;
// };


// if ($a >= 0 && $b >= 0){
//     echo "Разность чисел <br/>";
// } elseif ($a < 0 && $b < 0){
//     echo "Произведение чисел <br/>";
// }else {
//     echo "Сумма чисел <br/>";
// };



// switch ($c) {
//     case '0':
//         echo " 0";
//     case '1':
//         echo " 1";
//     case '2':
//         echo " 2";
//     case '3':
//         echo " 3";
//     case '4':
//         echo " 4";
//     case '5':
//         echo " 5";
//     case '6':
//         echo " 6";
//     case '7':
//         echo " 7";
//     case '8':
//         echo " 8";
//     case '9':
//         echo " 9";
//     case '10':
//         echo " 10";
//     case '11':
//         echo " 11";
//     case '12':
//         echo " 12";
//     case '13':
//         echo " 13";
//     case '14':   
//         echo " 14";   
//     case '15':   
//         echo " 15";       
//     break;
// }


// echo "<br/> Сумма числа а и с = " . $sum($a,$c);
// echo "<br/> Разность чисел а и с = " . $dif($a,$c);
// echo "<br/> Деление числа а на с = " . $div($a,$c);
// echo "<br/> Умножение числа а на с = " . $mul($a,$c);

// function mathOperation($a,$c,$operation){
//     $operation = rend(1,4);
//         switch ($operation) {
//             case '1':
//                 echo $sum($a,$c);
//                 break;
//             case '2':
//                 echo $dif($a,$c);
//                 break;
//             case '3':
//                 echo $div($a,$c);
//                 break;
//             case '4':
//                 echo $mul($a,$c);
//                 break;
//         }
// };
//      mathOperation($a,$c,$operation);


$menu = renderTemplate('menu');
$content = renderTemplate('content');

echo renderTemplate('layout',$menu,$content);

function renderTemplate($page, $menu = '', $content = ''){
    ob_start();
    include $page . ".php";
    return ob_get_clean();
}
