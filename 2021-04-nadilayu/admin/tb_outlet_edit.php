<?php
ob_start();
include_once "../db/koneksi.php";
include "../bot.php";
$id = $_GET['id'];
$edit = mysqli_query($koneksi, "SELECT * FROM tb_outlet WHERE  id_outlet='$id'");
?>
<?php
while ($data = mysqli_fetch_array($edit)) {
?>
  <!--  -->
  <div class="b2" style=" padding-top: 56px;">
    <center>
      <form action="" method="post">
        <div class="mb-3">
          <h3>Edit Outlet Disini</h3>
        </div>
        <label for="exampleFormControlInput1">Nama</label>
        <input type="text" name="nama" class="form-control" value="<?php echo $data['nama'] ?>" style="width: 400px;">
        <label for="exampleInputNama">Alamat</label>
        <input type="text" name="alamat" class="form-control" value="<?php echo $data['alamat'] ?>" style="width: 400px;">
        <label for="exampleInputNama">tlp</label>
        <input type="text" name="tlp" class="form-control" value="<?php echo $data['tlp'] ?>" style="width: 400px;"><br>
        <div class="hai1">
          <button type="submit" class="btn btn-primary" name="edit" value="edit" style="background-color:  #C1AEFC; width: 90px;"> Edit</button>

        </div>
    </center>
  </div>

<?php
}
if (isset($_POST['edit'])) {
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $tlp = $_POST['tlp'];
  $update = mysqli_query($koneksi, "UPDATE tb_outlet SET nama='$nama', alamat='$alamat', tlp='$tlp' WHERE id_outlet='$id'");
  if ($update) {
    header('Location:index.php?admin=tb-outlet-list');
    die('default');
  }
}
?>