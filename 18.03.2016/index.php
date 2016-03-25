<?php

    $dir = 'uploads/';
    $cols = 5;
    $files = scandir($dir);



    if(move_uploaded_file($_FILES['userfile']['tmp_name'], $dir. $_FILES['userfile']['name'])){
        print "Ваш файл был успешно загружен";
        }else{
        print "Возникла ошибка при загрузке файла!";
    }

include 'form.phtml';

