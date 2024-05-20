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

    <?php
        include_once "koneksi.php";
        $data_siswa = $db->query("SELECT * FROM siswa");
    ?>

    <table border="1">
    <tr style="padding: 0;">
                <th>No</th>
                <th>Username</th>
                <th>Password</th>
                <th>Email</th>
                <th>NISN</th>
    </tr>

        <?php $i=1; ?>
        <?php  foreach ($data_siswa as $siswa) { ?>
            <tr>
                <td>
                    <?= $i; ?>
                </td>
                <td>
                    <?php echo $siswa['username']; ?>
                </td>
                <td>
                    <?php echo $siswa['password']; ?>
                </td>
                <td>
                    <?php echo $siswa['email']; ?>
                </td>
                <td>
                    <?php echo $siswa['nisn']; ?>
                </td>
        <?php $i++; ?>
        <?php  }; ?>
        </table>


</body>
</html>