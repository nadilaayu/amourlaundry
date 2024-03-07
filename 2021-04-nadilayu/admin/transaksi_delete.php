<?php
include "../db/koneksi.php";
$id = $_GET['id'];
$delete = mysqli_query($koneksi, "DELETE FROM transaksi WHERE id_outlet ='$id'");
if ($delete) {
    header('location:index.php?admin=transaksi-list');
}
