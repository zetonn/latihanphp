<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    session_start();
    
    if(!isset($_SESSION['users'])){
        header('Location:login_page.php');
    }
    
    ?>
    <nav>
        <a href="dashboard.php">Home</a>
        <a href="data_buku.php">DataBuku</a>
        <a href="data_pengguna.php">DataPengguna</a>
    </nav>
    
    <div class="content">
        Halo,<?php echo $_SESSION['users']['username'] ?>
    </div>
    
</body>
</html>