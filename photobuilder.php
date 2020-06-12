<?php
/*Строить фотогалерею, не указывая статичные ссылки к файлам, а просто передавая в функцию построения адрес папки с изображениями. Функция сама должна считать список файлов и построить фотогалерею со ссылками в ней.*/
function buildGallery($folder) {
	//define ('SITE_ROOT', realpath(dirname(__FILE__)));
	$imgPath = SITE_ROOT . $folder;
	$filesList = scandir($imgPath);
	foreach ($filesList as $myImg) {
		if(strpos($myImg, "webp") || strpos($myImg, "jpeg") || strpos($myImg, "jpg") || strpos($myImg, "gif") || strpos($myImg, "tiff") !== false) {
			echo "<a target=\"_blank\" rel=\"noopener noreferrer\" href=\"$folder/$myImg\">";
			echo "<img src=\"$folder/$myImg\" width=\"400\" alt=\"img\"></a>  ";
		}
	}
}

buildGallery("/data");

//|| "jpeg" || "jpg" || "gif" || "tiff" || "gif" || "bmp")
?>