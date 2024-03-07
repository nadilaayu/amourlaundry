<?php
ob_start();
include_once "../db/koneksi.php";
include "../bot.php";
$id = $_GET['id'];
$edit = mysqli_query($koneksi, "SELECT * FROM transaksi WHERE  id_outlet='$id'");
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
        <label for="exampleInputNama">id outlet</label>
        <select name="id_outlet" id="" class="form-control" placeholder="id_outlet" style="width: 400px;">
          <?php
          $sql = "SELECT * FROM tb_outlet";
          $result = $koneksi->query($sql);
          while ($row = $result->fetch_assoc()) {
          ?>
            <option value="<?php echo $row['id_outlet'] ?>"><?php echo $row['nama'] ?></option>
          <?php
          }
          ?>
        </select><br>
        <label for="exampleInputNama">id member</label>
        <select name="id_member" id="" class="form-control" style="width: 400px;">
          <?php $idmember = $koneksi->query("SELECT * FROM tb_member") ?>
          <?php while ($member = $idmember->fetch_array()) : ?>
            <option value="<?php echo $member['id'] ?>"> <?php echo $member["nama"] ?> </option>
          <?php endwhile ?>
        </select><br>

        <label for="exampleInputNama">Paket</label>
        <select name="id_paket" id="" class="form-control" style="width: 400px;">
          <?php $idpaket = $koneksi->query("SELECT * FROM tb_paket") ?>
          <?php while ($paket = $idpaket->fetch_array()) : ?>
            <option value="<?php echo $paket['id'] ?>"> <?php echo $paket["jenis"] ?> </option>
          <?php endwhile ?>
        </select><br>

        <label for="exampleInputNama">tanggal transaksi</label>
        <input type="datetime-local" name="tgl" id="tgl1" class="form-control" placeholder="tgl" style="width: 400px;"><br>
        <label for="exampleInputNama">batas waktu</label>
        <input type="datetime-local" name="batas_waktu" id="batas_waktu1" class="form-control" placeholder="batas_waktu" style="width: 400px;"><br>
        <label for="exampleInputNama">tanggal bayar</label>
        <input type="datetime-local" name="tgl_bayar" id="tgl_bayar1" class="form-control" placeholder="tgl_bayar" style="width: 400px;"><br>
        <label for="exampleInputNama">bayar</label>
        <select name="id_paket" id="" class="form-control" style="width: 400px;">
          <?php $idpaket = $koneksi->query("SELECT * FROM tb_paket") ?>
          <?php while ($paket = $idpaket->fetch_array()) : ?>
            <option value="<?php echo $paket['id'] ?>"> <?php echo $paket["harga"] ?> </option>
          <?php endwhile ?>
        </select><br>
        <label for="exampleInputNama">status</label>
        <select name="status" id="" class="form-control" style="width: 400px;">
          <option value="baru">baru</option>
          <option value="proses">proses</option>
          <option value="selesai">selesai</option>
          <option value="diambil">diambil</option>
        </select><br>
        <label for="exampleInputNama">proses perbayaran</label>
        <select name="dibayar" id="" class="form-control" style="width: 400px;">
          <option value="dibayar">dibayar</option>
          <option value="belum_dibayar">belum biaya</option>
        </select>
  </div><br>
  <div class="hai1">
    <center> <button type="submit" class="btn btn-primary" name="edit" value="edit" style="background-color:  #C1AEFC; width: 90px;"> Edit</button></center>

  </div>
  </center>
  </div>

<?php
}
if (isset($_POST['edit'])) {
  $id_outlet = $_POST['id_outlet'];
  $id_member = $_POST['id_member'];
  $tgl = $_POST['tgl'];
  $batas_waktu = $_POST['batas_waktu'];
  $tgl_bayar = $_POST['tgl_bayar'];
  $diskon = $_POST['diskon'];
  $status = $_POST['status'];
  $dibayar = $_POST['dibayar'];
  $update = mysqli_query($koneksi, "UPDATE transaksi SET id_outlet='$id_outlet', id_member='$id_member', tgl='$tgl', batas_waktu='$batas_waktu', tgl_bayar='$tgl_bayar', diskon='$diskon', status='$status', dibayar='$dibayar' WHERE id='$id'");
  if ($update) {
    header('Location:index.php?admin=tb-paket-list');
    die('default');
  }
}
?>