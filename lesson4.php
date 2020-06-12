<!DOCTYPE HTML>
<html lang="ru">
  <head>
  <meta charset="utf-8"/> 
  <title>Галерея Подпругина</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
  	<h1>Галерея</h1>
  </header>
 <?php
/*1. Создать галерею фотографий. Она должна состоять всего из одной странички, на которой пользователь видит все картинки в уменьшенном виде и форму для загрузки нового изображения. При клике на фотографию она должна открыться в браузере в новой вкладке. Размер картинок можно ограничивать с помощью свойства width. При загрузке изображения необходимо делать проверку на тип и размер файла.*/
/*echo "<a target=\"_blank\" rel=\"noopener noreferrer\" href=\"/data/s1200.webp\"><img src=\"/data/s1200.webp\" width=\"400\" alt=\"img\"></a> ";
echo "<a target=\"_blank\" rel=\"noopener noreferrer\" href=\"/data/s12002.webp\" ><img src=\"/data/s12002.webp\" width=\"400\" alt=\"img\"></a> <br>";
echo "<a target=\"_blank\" rel=\"noopener noreferrer\" href=\"/data/s12003.webp\" ><img src=\"/data/s12003.webp\" width=\"400\" alt=\"img\"></a> ";
echo "<a target=\"_blank\" rel=\"noopener noreferrer\" href=\"/data/s12004.webp\" ><img src=\"/data/s12004.webp\" width=\"400\" alt=\"img\"></a> <br>";
echo "<a target=\"_blank\" rel=\"noopener noreferrer\" href=\"/data/s12005.webp\" ><img src=\"/data/s12005.webp\" width=\"400\" alt=\"img\"></a> ";
echo "<a target=\"_blank\" rel=\"noopener noreferrer\" href=\"/data/s12006.webp\" ><img src=\"/data/s12006.webp\" width=\"400\" alt=\"img\"></a> <br>";*/
define ('SITE_ROOT', realpath(dirname(__FILE__)));
include SITE_ROOT . '/photobuilder.php';


/*
2. *Строить фотогалерею, не указывая статичные ссылки к файлам, а просто передавая в функцию построения адрес папки с изображениями. Функция сама должна считать список файлов и построить фотогалерею со ссылками в ней.
3. *[ для тех, кто изучал JS-1 ] При клике по миниатюре нужно показывать полноразмерное изображение в модальном окне (материал в помощь: http://dontforget.pro/javascript/prostoe-modalnoe-okno-na-jquery-i-css-bez-plaginov/)
Дополнительно
1* - Создать функцию, которая будет при каждом запросе файла index.php сохранять в файл log.txt данные о времени запроса.
2* - Доработать логирование таким образом, чтобы после каждой 10 записи в файл log.txt, он пересохранялся с новым именем. Например logX.txt (под Х понимаются числа от 0 до бесконечности). А новые записи снова записывались в файл log.txt. Таким образом должен формироваться архив логирований. В каждом файле не более 10 записей.
Подробности в записе урока)
3* - Написать функцию получения всех папок и файлов директории.
4* - Написать рекурсивную функцию для вывода меню из массива*/

?>
<br>
<h3>Загрузить изображение</h3>
<form  action='upload.php' method='post' enctype='multipart/form-data'>
  Выберите файл для загрузки
  <input type='file' name='userfile' style="display:block" >
  <br>
  <input class="button" type='submit' value='submit'></form>
<br>
<br>  
</body>
</html>

