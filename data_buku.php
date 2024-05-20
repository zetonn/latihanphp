<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <a href="dashboard.php">Home</a>
        <a href="data_buku.php">DataBuku</a>
        <a href="data_pengguna.php">DataPengguna</a>
    </nav>

    <div class="content">
        <?php
        include_once "koneksi.php";
        $data_buku = $db->query("SELECT * FROM buku");
        ?>

        <a href="form_data.php">Tambah Data</a>
        <table border="1">
            <tr style="padding: 0;">
                <th>Id</th>
                <th>Nama Buku</th>
                <th>Tahun Terbit</th>
                <th>Stok</th>
                <th>Action</th>
            </tr>
       
        <?php $i=1; ?>
        <?php  foreach ($data_buku as $item) { ?>
            <tr>
                <td>
                    <?= $i; ?>
                </td>
                <td>
                    <?php echo $item['nama_buku']; ?>
                </td>
                <td>
                    <?php echo $item['tahun_terbit']; ?>
                </td>
                <td>
                    <?php echo $item['stok']; ?>
                </td>
                <td>
                   <a href="edit_buku.php?id=<?php echo $item['id'] ?>"><button>edit</button></a> 
                    <a href="handler_buku.php?delete_id=<?php echo $item['id'] ?>"><button>delete</button></a>
                </td>
            </tr>
        <?php $i++; ?>
        <?php  }; ?>
        </table>
    </div>
</body>
</html>