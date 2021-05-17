<?php


$a = $_GET['arg1'];
$c = $_GET['arg2'];
$result = 0;

$operation = $_GET['math'];
var_dump($_GET);

$sum = function($a,$c){
    return $a + $c;
};

$dif = function($a,$c){
    return $a - $c;
};

$div = function($a,$c){ 
    if ($c === 0){
        return "На ноль делить нельзя!";
    }else{
        return $a / $c; 
    }
     
};

$mul = function($a,$c){
    return $a * $c;
};

if(!empty($_GET)){
    switch($operation){
        case '+':
            $result += $sum($a,$c);
        break;
        case '-':
            $result += $dif($a,$c);
        break;
        case '*':
            $result += $mul($a,$c);
        break;
        case '/':
            $result += $div($a,$c);
        break;

    }
}





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
<form action=""><br>
    <input type="text" value="<?=$_GET['arg1']?>" name="arg1">
    <input type="submit" value="+" name='math'>
    <input type="submit" value="-" name='math'>
    <input type="submit" value="*" name='math'>
    <input type="submit" value="/" name='math'>
    <input type="text" value="<?=$_GET['arg2']?>" name="arg2"> 
    <input type="submit" value= "=">
    <input type="text" readonly value="<?=$result?>" name="result" >
    </form>
</body>
</html>
