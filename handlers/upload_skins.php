<?php
$uploaddir = '/var/www/udochudo.ru/skins/';
// это папка, в которую будет загружаться картинка
$apend=$_POST['nickname'].'.png'; 
// это имя, которое будет присвоенно изображению 
$uploadfile = "$uploaddir$apend"; 
$uploadedfile = "$apend";
//в переменную $uploadfile будет входить папка и имя изображения

// В данной строке самое важное - проверяем загружается ли изображение (а может вредоносный код?)
// И проходит ли изображение по весу. В нашем случае до 512 Кб
if(($_FILES['userfile']['type'] == 'image/png') && ($_FILES['userfile']['size'] != 0 and $_FILES['userfile']['size']<=512000)) 
{ 
// Указываем максимальный вес загружаемого файла. Сейчас до 512 Кб 
  if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) 
   { 
   //Здесь идет процесс загрузки изображения 
   $size = getimagesize($uploadfile); 
   // с помощью этой функции мы можем получить размер пикселей изображения 
     if ($size[0] < 65 && $size[1]<65) 
     { 
     // если размер изображения не более 500 пикселей по ширине и не более 1500 по  высоте 
     echo " <link href=\"css/main.css\" rel=\"stylesheet\">
            <div class=\"skin-sucess\" >
                <div class=\"skin-sucess-notif\">
                    <p>Скин успешно загружен</p>
                </div>
            </div>";
     header("refresh: 10; url=https://udochudo.ru/index.php");
     } else {
     echo "Загружаемое изображение превышает допустимые нормы (ширина не более - 64; высота не более 64)"; 
     unlink($uploadfile); 
     // удаление файла 
     } 
   } else {
   echo "Файл не загружен, вернитеcь и попробуйте еще раз";
   } 
} else { 
echo "Расширение файла должно быть формата .png и размер файла не должен превышать 512Кб";
}
?>
