<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$jenis_barang           = $_POST['jenis_barang'];
$jumlah = $_POST['jumlah'];
$satuan       = $_POST['satuan'];
$harga       = $_POST['harga'];
$total       = $harga*$jumlah;
$tanggal = $_POST['tanggal'];

//query insert data ke dalam database
$query = "INSERT INTO materai (jenis_barang, jumlah, satuan, harga, total, tanggal) VALUES ('$jenis_barang', '$jumlah', '$satuan', '$harga', '$total', '$tanggal')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman read.php 
    header("location: read-matrai.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>