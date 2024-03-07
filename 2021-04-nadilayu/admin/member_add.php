<?php
include "../bot.php";
?>
<div class="b2" style=" padding-top: 56px;">
  <center>
    <form action="" name="add" method="post">
      <div class="mb-3">
        <div class="ui" style="text-align: center;">
        </div>
        <div class="ui" style="text-align: center;">
          <h2>Tambah Member</h2>
        </div>
        <p style="text-align: center;">Tambah Member Disini</p>
        <input type="text" name="nama" id="name1" class="form-control" placeholder="Nama" style="width: 400px;"><br>
        <input type="text" name="alamat" id="alamat1" class="form-control" placeholder="alamat" style="width: 400px;"><br>
        <select name="jenis_kelamin" id="" class="form-control" style="width: 400px;">
          <option value="L">L</option>
          <option value="P">P</option>
        </select><br>



        <input type="text" name="tlp" id="tlp1" class="form-control" placeholder="tlp" style="width: 400px;"><br>

      </div>
      <div class="hai1">
        <button type="submit" class="btn " style="width: 400px; background-color: #C1AEFC;" name="add-acun" onclick="checkForm()"><b>Add member</b></button>
      </div>
  </center>
</div>

<?php
if (isset($_POST['add-acun'])) {
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $jenis_kelamin = $_POST['jenis_kelamin'];
  $tlp = $_POST['tlp'];

  if ($nama != '' && $alamat != '') {
    $_add = $koneksi->query("INSERT INTO member VALUES ('','$nama','$alamat','$jenis_kelamin','$tlp')");
  }
}

?>
<script>
  function checkForm() {

    //mengambil nilai form
    var name = document.getElementById("name1").value;
    var alamat = document.getElementById("alamat1").value;
    var jenis_kelamin = document.getElementById("jenis_kelamin1").value;
    var tlp = document.getElementById("tlp1").value;


    if (name == '' || password == '' || username == '') {
      alert("Form tidak boleh kosong");
    } else {
      var name = document.getElementById("name1").value;
      var alamat = document.getElementById("alamat1").value;
      var jenis_kelamin = document.getElementById("jenis_kelamin1").value;
      var tlp = document.getElementById("tlp1").value;



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