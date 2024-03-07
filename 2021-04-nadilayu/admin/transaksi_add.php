<?php
include "../bot.php";
?>
<div class="b2" style=" padding-top: 56px;">
  <center>
    <form action="" name="add" method="post">
      <div class="mb-3">
        <div class="ui" style="text-align: center;">
          <h3>sweet Laundry</h3>
        </div>
        <div class="ui" style="text-align: center;">
          <h2>Tambah paket</h2>
        </div>
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
        <select name="jenis" id="" class="form-control" style="width: 400px;">
          <option value="kiloan">Kiloan</option>
          <option value="selimut">Selimut</option>
          <option value="bed_cover">Bed Cover</option>
          <option value="Kaos">Kaos</option>
          <option value="lain">Lainnya</option>
        </select><br>
        <select name="nama_paket" id="" class="form-control" style="width: 400px;">
          <option value="paket_a">paket a</option>
          <option value="paket_b">paket b</option>
          <option value="paket_c">paket c</option>
        </select><br>
        <input type="text" name="harga" id="harga1" class="form-control" placeholder="harga" style="width: 400px;"><br>

      </div>
      <div class="hai1">
        <button type="submit" class="btn " style="width: 400px; background-color: #C1AEFC;" name="add-acun" onclick="checkForm()"><b>Tambah Paket</b></button>
      </div>
  </center>
</div>

<?php
if (isset($_POST['add-acun'])) {
  $id_outlet = $_POST['id_outlet'];
  $jenis = $_POST['jenis'];
  $nama_paket = $_POST['nama_paket'];
  $harga = $_POST['harga'];
  if ($id_outlet != '' && $jenis != '') {
    $_add = $koneksi->query("INSERT INTO transaksi VALUES ('$id_outlet','$jenis','$nama_paket','$harga')");
  }
}

?>
<script>
  function checkForm() {

    //mengambil nilai form
    var id_outlet = document.getElementById("id_outlet1").value;
    var jenis = document.getElementById("jenis1").value;
    var nama_paket = document.getElementById("nama_paket1").value;
    var harga = document.getElementById("harga1").value;



    if (id_outlet == '' || jenis == '' || nama_paket == '' || harga == '') {
      alert("Form tidak boleh kosong");
    } else {
      var id_outlet = document.getElementById("id_outlet1").value;
      var jenis = document.getElementById("jenis1").value;
      var nama_paket = document.getElementById("nama_paket1").value;
      var harga = document.getElementById("harga1").value;



      //Check value form
      if (name.innerHTML == 'Harus Lebih dari 3 Huruf' || password.innerHTML == 'Password terlalu pendek' || username.innerHTML == 'username terlalu pendek') {
        alert('Informasi harus valid!!');
      } else {
        document.getElementById("add").submit();
      }
    }
  }

  function validate(field, query) {
    var xmlhttp;
    if (window.XMLHttpRequest) {
      xmlhttp = new XMLHttpRequest();
    } else {
      xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }

    xmlhttp.onreadystatechange = function() {
      if (xmlhttp.readyState != 4 && xmlhttp.status == 200) {
        document.getElementById(field).innerHTML = "Cek Validasi..";
      } else if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById(field).innerHTML = xmlhttp.responseText;
      } else {
        document.getElementById(field).innerHTML = "Error Occurred. <a href='index.php'>Reload Or Try Again</a> the page.";
      }
    }
    xmlhttp.open("GET", "validation.php?field=" + field + "&query=" + query, false);
    xmlhttp.send();
  }
</script>