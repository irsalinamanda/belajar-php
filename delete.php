<?php
//tangkap data dari form submit
if (isset($_GET["id"])){
    $id = $_GET['id'];

//1. buat koneksi dg mysql
$con = mysqli_connect("localhost","root","","fakultas");

//2. Cek koneksi dg mysql
if(mysqli_connect_errno()){
    echo "Koneksi gagal". mysqli_connect_error();
} else{
    echo "Koneksi berhasil<br>";
}

//buat sql query untuk insert ke database
//buat query untuk delete
$sql = "DELETE FROM mahasiswa where id=$id";

//jalankan query
if (mysqli_query($con, $sql)){
    echo "Data berhasil dihapus";
} else {
    echo "Ada Error ". mysqli_error($con);
}

mysqli_close($con);
}

?>