<?php

$title = "Главная страница - страница обо мне";
$text = "Информация обо мне";
$year = "2018";

$content = file_get_contents("site.php");

$content = str_replace("{{ title }}", $title, $content);
$content = str_replace("{{ text }}", $text, $content);
$content = str_replace("{{ year }}", $year, $content);

echo $content;
