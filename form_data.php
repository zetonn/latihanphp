<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="handler_buku.php" method="post">
        <input type="hiden" name="add_buku" value="1" style="display: none;">

        <div>
            <label for="">Nama Buku</label>
            <input type="text" name="nama_buku" placeholder="nama buku">
        </div>
        <div>
            <label for="">Tahun Terbit</label>
            <input type="text" name="tahun_terbit" placeholder="tahun terbit">
        </div>
        <div>
            <label for="">stok</label>
            <input type="text" name="stok" placeholder="stok">
        </div>
        <button type="submit">kirim</button>

    </form>
</body>
</html>