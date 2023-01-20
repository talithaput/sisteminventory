<?php

//deklasrasi variabel
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "inventory";    

$connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

$join           = "select * from alat_tulis join user on user.id = alat_tulis.id_user";
$select         = mysqli_query($connection, $join);
?>