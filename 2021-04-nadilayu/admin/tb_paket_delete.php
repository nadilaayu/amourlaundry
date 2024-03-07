<?php
include "../db/koneksi.php";
$id = $_GET['id'];
$delete = mysqli_query($koneksi, "DELETE FROM tb_paket WHERE id_paket ='$id'");
if ($delete) {
    header('location:index.php?admin=tb-paket-list');
}
