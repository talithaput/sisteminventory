<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id = $_POST['id'];
$jenis_barang           = $_POST['jenis_barang'];
$jumlah = $_POST['jumlah'];
$satuan       = $_POST['satuan'];
$harga       = $_POST['harga'];
$total       = $harga*$jumlah;
$tanggal = $_POST['tanggal'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE consumable SET jenis_barang = '$jenis_barang', jumlah = '$jumlah', satuan='$satuan', harga = '$harga', total='$total', tanggal='$tanggal' WHERE id = '$id'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: read-consum.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>