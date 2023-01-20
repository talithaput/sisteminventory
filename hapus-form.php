<?php

include('koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM formulir WHERE id = '$id'";

if($connection->query($query)) {
    header("location: read-form.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>