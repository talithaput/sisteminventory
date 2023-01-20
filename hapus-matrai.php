<?php

include('koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM materai WHERE id = '$id'";

if($connection->query($query)) {
    header("location: read-matrai.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>