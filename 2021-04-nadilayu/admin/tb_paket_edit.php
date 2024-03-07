<?php
ob_start();
include_once "../db/koneksi.php";
include "../bot.php";
$id = $_GET['id'];
$edit = mysqli_query($koneksi, "SELECT * FROM tb_paket WHERE  id_paket='$id'");
?>
<?php
while ($data = mysqli_fetch_array($edit)) {
?>
  <!--  -->
  <div class="b2" style=" padding-top: 56px;">
    <center>
      <form action="" method="post">
        <div class="mb-3">
          <h3>Edit Paket</h3>
        </div>
        <label for="exampleFormControlInput1">Id_outlet</label>
        <input type="text" name="id_outlet" class="form-control" value="<?php echo $data['id_outle'] ?>" style="width: 400px;"><br>
        <label for="exampleFormControlInput1">jenis</label>
        <select name="jenis" id="" class="form-control" style="width: 400px;">
          <option value="kiloan">Kiloan</option>
          <option value="selimut">Selimut</option>
          <option value="bed_cover">Bed Cover</option>
          <option value="Kaos">Kaos</option>
          <option value="lain">Lainnya</option>
        </select><br>
        <label for="exampleFormControlInput1">nama paket</label>
        <select name="nama_paket" id="" class="form-control" style="width: 400px;">
          <option value="paket_a">paket a</option>
          <option value="paket_b">paket b</option>
          <option value="paket_c">paket c</option>
        </select><br>
        <label for="exampleInputNama">Harga</label>
        <input type="text" name="harga" class="form-control" value="<?php echo $data['harga'] ?>" style="width: 400px;"><br>
        <div class="hai1">
          <button type="submit" class="btn btn-primary" name="edit" value="edit" style="background-color:  #C1AEFC; width: 90px;"> Edit</button>

        </div>
    </center>
  </div>

<?php
}
if (isset($_POST['edit'])) {

  $id_outlet = $_POST['id_outlet'];
  $jenis = $_POST['jenis'];
  $nama_paket = $_POST['nama_paket'];
  $harga = $_POST['harga'];
  $update = mysqli_query($koneksi, "UPDATE tb_paket SET id_outle='$id_outlet', jenis='$jenis', nama_paket='$nama_paket', harga='$harga' WHERE id_paket='$id'");
  if ($update) {
    header('Location:index.php?admin=tb-paket-list');
    die('default');
  }
}
?>