<?php
$uploads_dir = 'data/';
$name = $_FILES['userfile']['name'];
if (is_uploaded_file($_FILES['userfile']['tmp_name']))
{       
	if((strpos($_FILES['userfile']['type'], "image") !== false) && $_FILES['userfile']['size'] <= 100000) {
    //все ок
     move_uploaded_file($_FILES['userfile']['tmp_name'], $uploads_dir.$name);
     echo 'Изображение успешно загружено';		
	} else {
		echo "Please check your file";
		exit;
	}

}
//<br>input type=\"button\" onclick=\"history.back();\" value=\"Назад\"/>
echo "<br><br><a href=\"#\" onclick=\"history.back();\">Назад</a><br><br>";

//var_dump($_FILES)
?>
