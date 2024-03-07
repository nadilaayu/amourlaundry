<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title></title>
    <?php
    include "../db/koneksi.php";

    ?>

    </div>
    </form><br>
    <style>
        .card {
            margin-right: 30%;
        }
    </style>
</head>

<body>
    <form action="" method="post" style="width: 300px;">
        <div class="form-group">
            <input type="text" name="cari2" style="background-color: #C1AEFC;" placeholder="Search here...">

            <button class="btn" type="submit"><i class='bx bx-search-alt icon'></i> </button>
        </div>
    </form><br>

    <!-- print -->
    <button class="btn btn-primary mx-2 mt-5" onclick="printDiv('print')" type="submit" data-toggle="print" data-placement="right" title="print"><span class="material-icons">print</span></button>
    <a href="index.php?admin=transaksi-add" class="btn btn-success"> Tambah Transaksi</a><br><br>
    <div class="container" id="print">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id Outlet</th>
                    <th scope="col">Jenis</th>
                    <th scope="col">Nama Paket</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <?php
            @$sql = "SELECT * FROM transaksi";
            $result = $koneksi->query($sql);
            while ($row = $result->fetch_assoc()) {
            }
            ?>
            <tbody>
                <?php
                $query = "SELECT * FROM transaksi";
                $select = $koneksi->query($query);
                while ($data = mysqli_fetch_array($select)) {
                ?>
                    <tr>
                        <td>Rp.<?php echo $data["id_outlet"] ?></td>
                        <td>Rp.<?php echo $data["jenis"] ?></td>
                        <td>Rp.<?php echo $data["nama_paket"] ?></td>
                        <td>Rp.<?php echo $data["harga"] ?></td>
                        <td><a href="index.php?admin=transaksi-edit&id=<?php echo $data['id_outlet'] ?>"><button type="submit" class="btn "><i class="bx bxs-edit icons"></i></button></a></br>
                            <a href="transaksi_delete.php?id=<?php echo $data['id_outlet'] ?>"><button type="submit" class="btn "><i class="bx bxs-trash icons"></i></button></a>

                        </td>

                        <!-- Button trigger modal -->
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

    <script type="text/javascript">
        function printDiv(el) {
            var a = document.body.innerHTML;
            var b = document.getElementById(el).innerHTML;

            document.body.innerHTML = b;
            window.print();
            dokument.body.innerHTML = a;
        }
    </script>
</body>

</html>
<style>
    .table-wrapper {
        width: 700px;
        margin: 30px auto;
        background: #fff;
        padding: 20px;
        box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
    }

    .table-title {
        padding-bottom: 20px;
        margin: 0 0 10px;
    }

    .table-title h2 {
        margin: 6px 0 0;
        font-size: 22px;
    }

    .table-title .add-new {
        float: right;
        height: 30px;
        font-weight: bold;
        font-size: 12px;
        text-shadow: none;
        min-width: 100px;
        border-radius: 50px;
        line-height: 13px;
    }

    .table-title .add-new i {
        margin-right: 4px;
    }

    table.table {
        table-layout: fixed;
    }

    table.table tr th,
    table.table tr td {
        border-color: #e9e9e9;
    }

    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    }

    table.table th:last-child {
        width: 100px;
    }

    table.table td a {
        cursor: pointer;
        display: inline-block;
        margin: 0 5px;
        min-width: 24px;
    }

    table.table td a.add {
        color: #27C46B;
    }

    table.table td a.edit {
        color: #FFC107;
    }

    table.table td a.delete {
        color: #E34724;
    }

    table.table td i {
        font-size: 19px;
    }

    table.table td a.add i {
        font-size: 24px;
        margin-right: -1px;
        position: relative;
        top: 3px;
    }

    table.table .form-control {
        height: 32px;
        line-height: 32px;
        box-shadow: none;
        border-radius: 2px;
    }

    table.table .form-control.error {
        border-color: #f50000;
    }

    table.table td .add {
        display: none;
    }


    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td,
    th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
</style>