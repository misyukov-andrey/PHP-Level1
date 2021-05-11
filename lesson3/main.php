<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <ul>
    <?php foreach($menu as $item):?>
    <li><a href='#'><?=$item?></a></li>
    <?php endforeach;?>
    </ul>
</body>
</html>