<?php

$title = "Главная страница - страница обо мне";
$text = "Информация обо мне";
$year = "2018";

?>


<!DOCTYPE html>
<html>

<head>
	<title><?= $title ?></title>
	<meta charset="UTF-8">
</head>

<body>
	<h1><?= $text ?></h1>
	Краткая биография обо мне
	Родился в 1985 году в городе Москва. Закончил в 2008 году МАИ.
	На данный момент работаю ведущим инженером в крупной авиакомпании.
	Поскольку я люблю авиацию, то хотел бы поделиться несколькими интересными
	фотографиями на эту тему
	<br><br>
	Тут можете поместить картинку
	<br><br>
	<br><br>
	<b>Просто пример жирного текста</b>
	<br><br>
	<?= $year ?>
</body>

</html>