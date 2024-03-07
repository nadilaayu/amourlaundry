<?php include "db/koneksi.php"; ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <h1>laundry_cucian_masuk</h1>
    <?php
    if (isset($_GET['aksi'])){
      if ($_GET['aksi'] == "hapus-berhsil") { 
        echo "
        <div class='alert alert-primary' role='alert'>
           Data Berhasil Dihapus!
        </div>
        ";
 }


      if ($_GET['aksi'] == "add-berhasil") {
        echo "
        </div class='alert alert-success' role='alert'>
            Data Berhasil Ditambahkan!
       </div>
       ";
      }
}
?>
    <table class="table">
        <tr>
            <td>KD_CM</td>
            <td>KD_KONSUMEN</td>
            <td>TANGGAL_CM</td>
            <td>JENIS_LAUNDRY</td>
            <td>AKSI</  <td>
        </tr>
        <?php
        $query = mysqli_query($koneksi, "SELECT * FROM laundry_cucian_masuk");
        while ($data = mysqli_fetch_array($query)){
        ?>
           <tr>
               <td><?php echo $data['kd_cm'] ?></td>
               <td><?php echo $data['kd_konsumen'] ?></td>
               <td><?php echo $data['tanggal_cm'] ?></td>
               <td><?php echo $data['jenis_laundry'] ?></td>
            <td>
              <a href="laundry_delet.php?id=<?php echo $data['kd_cm'] ?>">hapus</a>
            </td>
           </tr>
           <?php } ?>
        

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>