<?php
include "../db/koneksi.php";
$id = $_GET['id'];
$delete = mysqli_query($koneksi, "DELETE FROM member WHERE id_member='$id'");
if ($delete) {
    header('location:index.php?admin=member-list');
}
