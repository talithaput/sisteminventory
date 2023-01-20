<?php

include('koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM consumable WHERE id = '$id'";

if($connection->query($query)) {
    header("location: read-consum.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>