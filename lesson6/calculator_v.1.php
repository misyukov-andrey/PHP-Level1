<?php


$a = $_GET['arg1'];
$c = $_GET['arg2'];
$result = 0;
$operation = $_GET['operation'];


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
        case 'sum':
            $result += $sum($a,$c);
        break;
        case 'dif':
            $result += $dif($a,$c);
        break;
        case 'mul':
            $result += $mul($a,$c);
        break;
        case 'div':
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
    <select name="operation">
    <option value="sum" <?php if($_GET['operation'] == 'sum') echo 'selected' ;?>>+</option>
    <option value="dif" <?php if($_GET['operation'] == 'dif') echo 'selected' ;?>>-</option>
    <option value="mul" <?php if($_GET['operation'] == 'mul') echo 'selected' ;?>>*</option>
    <option value="div" <?php if($_GET['operation'] == 'div') echo 'selected' ;?>>/</option>
    </select>
    <input type="text" value="<?=$_GET['arg2']?>" name="arg2"> 
    <input type="submit" value= "=">
    <input type="text" readonly value="<?=$result?>" name="result" >
    </form>
</body>
</html>
