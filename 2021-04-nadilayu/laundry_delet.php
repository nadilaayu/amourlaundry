<?php 
include "db/koneksi.php";

$id = $_GET['id'];

$query = mysqli_query($koneksi, "DELETE FROM laundry_cucian_masuk WHERE kd_cm='$id'");

if ($query) {
    header("location:laundry_cucian_masuk.php?hapus=berhasil");
}