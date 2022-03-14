<?php

try {

    $db=new PDO("mysql: host=localhost; dbname=example;charset=utf8",'root','');

    echo "Veritanbanı Bağlantısı Başarılı";


} catch (PDOExpception $e) {

    echo $e->getMessage();

}