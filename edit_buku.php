<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    include_once 'koneksi.php';
    $id = $_GET['id'];
    $buku = $db->query("SELECT * FROM buku WHERE id = $id ")->fetch_assoc();
    
    ?>
    <form action="handler_buku.php" method="post">
        <input type="hiden" name="edit_buku" value="1" style="display: none;">
        <input type="hiden" name="id" value="1" style="display: none;">

        <div>
            <label for="">Nama Buku</label>
            <input type="text" name="nama_buku" value="<?php echo $buku['nama_buku'] ?>" placeholder="nama buku">
        </div>
        <div>
            <label for="">Tahun Terbit</label>
            <input type="text" name="tahun_terbit"  value="<?php echo $buku['tahun_terbit'] ?>" placeholder="tahun terbit">
        </div>
        <div>
            <label for="">stok</label>
            <input type="text" name="stok"  value="<?php echo $buku['stok'] ?>" placeholder="stok">
        </div>
        <button type="submit">edit</button>

    </form>
</body>
</html>
