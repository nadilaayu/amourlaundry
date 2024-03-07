<?php
include "../bot.php";
?>
<div class="b2" style=" padding-top: 56px;">
<center>
<form action="" name="add" method="post">
  <div class="mb-3">
  <div class="ui" style="text-align: center;">
<h3>Tambah Outlet</h3>
  </div>
  <div class="ui" style="text-align: center;">
  </div>
  <p style="text-align: center;">Tambah Outlet Disini</p>
    <input type="text" name="nama" id="name1" class="form-control" placeholder="Nama" style="width: 400px;"><br>
    <input type="text" name="alamat" id="alamat1" class="form-control" placeholder="alamat" style="width: 400px;"><br>
    <input type="text" name="tlp" id="tlp1" class="form-control" placeholder="tlp" style="width: 400px;"><br>
    
  </div>
  <div class="hai1">
  <button type="submit" class="btn " style="width: 400px; background-color: #C1AEFC;" name="add-acun" onclick="checkForm()"><b>Tambah Outlet</b></button>
</div>
</center>
</div>

<?php
if(isset($_POST['add-acun'])) {
  $nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
  $tlp = $_POST['tlp'];
  if($nama != '' && $username != ''){
  $_add= $koneksi->query("INSERT INTO tb_outlet VALUES ('', '$nama','$alamat','$tlp')");
}
} 

?>
<script>
function checkForm(){
 
 //mengambil nilai form
 var name = document.getElementById("name1").value;
 var alamat = document.getElementById("alamat1").value;
 var tlp = document.getElementById("tlp1").value;


 if(name == '' || alamat == '' || tlp == '' ){
   alert("Form tidak boleh kosong");
 } else {
  var name = document.getElementById("name1").value;
 var alamat = document.getElementById("alamat1").value;
 var tlp = document.getElementById("tlp1").value;
  

   //Check value form
   if(name.innerHTML == 'Harus Lebih dari 3 Huruf' || alamat.innerHTML == ' alamat tidak boleh sama ' || tlp.innerHTML == ' tlp ini sudah terdaftar' ){
     alert('Informasi harus valid!!');
   } else {
     document.getElementById("add").submit();
   }
 }
}

function validate(field, query){
 var xmlhttp;
 if(window.XMLHttpRequest) {
   xmlhttp = new XMLHttpRequest();
 } else {
   xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
 }

 xmlhttp.onreadystatechange = function(){
   if(xmlhttp.readyState != 4 && xmlhttp.status == 200){
     document.getElementById(field).innerHTML = "Cek Validasi..";
   } else if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
     document.getElementById(field).innerHTML = xmlhttp.responseText;
   } else {
     document.getElementById(field).innerHTML = "Error Occurred. <a href='index.php'>Reload Or Try Again</a> the page.";
   }
 }
 xmlhttp.open("GET","validation.php?field=" + field + "&query=" + query, false);
 xmlhttp.send();
}
</script>