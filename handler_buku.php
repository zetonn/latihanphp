<?php
include_once "koneksi.php";

if(isset($_POST['add_buku'])) {
    $nama_buku = $_POST['nama_buku'];
    $tahun_terbit = $_POST['tahun_terbit'];
    $stok = $_POST['stok'];

    $insert = $db->query(
        "INSERT INTO buku
        (nama_buku,tahun_terbit,stok)
        values
        ('$nama_buku','$tahun_terbit',$stok)"
    );

    if($insert) {
        header('Location:data_buku.php');
    }else {
        echo "data gagal dimasukan";
    }
}

if(isset($_POST['edit_buku'])) {
    $id = $_POST['id'];
    $nama_buku = $_POST['nama_buku'];
    $tahun_terbit = $_POST['tahun_terbit'];
    $stok = $_POST['stok'];

    $insert = $db->query(
        "UPDATE buku set nama_buku = '$nama_buku', tahun_terbit= '$tahun_terbit', stok = $stok WHERE id = $id"
    );

    if($insert) {
        header('Location:data_buku.php');
    }else {
        echo "data gagal dimasukan";
    }
}

if(isset($_GET['delete_id'])){
    $id = $_GET['delete_id'];
    $delete = $db->query("DELETE FROM buku WHERE id = $id");
    
    if($delete){
        header('Location:data_buku.php');
    }else {
        echo "data gagal di hapus";
    }
}