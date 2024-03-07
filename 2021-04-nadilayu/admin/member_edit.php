<?php
ob_start();
include_once "../db/koneksi.php";
include "../bot.php";
$id = $_GET['id'];
$edit = mysqli_query($koneksi, "SELECT * FROM member WHERE  id_member='$id'");
?>
<?php
while ($data = mysqli_fetch_array($edit)) {
?>
  <!--  -->
  <div class="b2" style=" padding-top: 56px;">
    <center>
      <form action="" method="post">
        <div class="mb-3">

          <h3>Edit data member</h3>
        </div>
        <label for="exampleFormControlInput1">Nama</label>
        <input type="text" name="nama" class="form-control" value="<?php echo $data['nama'] ?>" style="width: 400px;">
        <label for="exampleInputNama">Alamat</label>
        <input type="text" name="alamat" class="form-control" value="<?php echo $data['alamat'] ?>" style="width: 400px;">
        <label for="exampleInputNama">Jenis kelamin</label>
        <select name="jenis_kelamin" id="" class="form-control" value="<?php echo $data['jenis_kelamin'] ?>" style="width: 400px;">
          <option value="L">L</option>
          <option value="P">P</option>
        </select>
        <label for="exampleInputNama">telepon</label>
        <input type="text" name="telepon" class="form-control" value="<?php echo $data['telepon'] ?>" style="width: 400px;"><br>
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
  $jenis_kelamin = $_POST['jenis_kelamin'];
  $tlp = $_POST['telepon'];
  $update = mysqli_query($koneksi, "UPDATE member SET nama='$nama', alamat='$alamat', jenis_kelamin='$jenis_kelamin', telepon='$tlp' WHERE id_member='$id'");
  if ($update) {
    header('Location:index.php?admin=member-list');
    die('default');
  }
}
?>