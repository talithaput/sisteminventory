<?php

include('koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM alat_tulis WHERE id = '$id'";

if($connection->query($query)) {
    header("location: read.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>