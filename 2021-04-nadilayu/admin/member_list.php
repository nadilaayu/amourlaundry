<form action="" method="post" style="width: 300px;">
    <div class="form-group">
        <input type="text" name="cari2" style="background-color: #C1AEFC;" placeholder="Search here...">

        <button class="btn" type="submit"><i class='bx bx-search-alt icon'></i> </button>
    </div>
</form><br>

<table class="table">
    <thead>
        <tr>
            <th>Nama</th>
            <th>alamat</th>
            <th>Jenis Kelamin</th>
            <th>telepon</th>
            <th style="width:150px;">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        @$sql = "SELECT * FROM member where nama like '%$_POST[cari2]%' ";
        $result = $koneksi->query($sql);
        while ($row = $result->fetch_assoc()) {
        ?>

            <tr>
                <td><?php echo $row['nama'] ?></td>
                <td><?php echo $row['alamat'] ?></td>
                <td><?php echo $row['jenis_kelamin'] ?></td>
                <td><?php echo $row['telepon'] ?></td>
                <td><a href="index.php?admin=member-edit&id=<?php echo $row['id_member'] ?>"><i class="bx bx-edit icons"></i></a>
                    <a href="index.php?admin=member-delete&id=<?php echo $row['id_member'] ?>"><i class="bx bxs-trash icons"></i></a>
                    <a href="index.php?admin=transaksi-add&id=<?php echo $row['id_member'] ?>"><i class='bx bx-money-withdraw icons'></i></i></a>

                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>
<a href="index.php?admin=member-add"><button type="submit" class="btn " style="width: 200px; background-color: #C1AEFC;"><b>Tambah Member</b></button>

    <style>
        .table-wrapper {
            width: 700px;
            margin: 30px auto;
            background: #fff;
            padding: 20px;
            box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
        }

        .table-title {
            padding-bottom: 10px;
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