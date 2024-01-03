<?php  
session_start();
if (isset($_POST['submit'])) {

    $id         = $_POST["id_produk"]; 
    $stok       = intval($_POST['stok']);
    $jumlah     = intval($_POST['quantity']);    
    $id_user    = $_SESSION['id'];

    $ready = $stok - $jumlah;

    include "sql.php";

    $queryPesanan = "INSERT INTO pesanan (tanggal_pesanan, id_user) VALUES (NOW(), '$id_user')";
    $resultPesanan = mysqli_query($con, $queryPesanan);

    if ($resultPesanan) {

        $idPesanan = mysqli_insert_id($con);

        $reset  = "alter table detailpesanan AUTO_INCREMENT = 1";
        $query  = mysqli_query($con,$reset);

        $queryDetailPesanan = "INSERT INTO detailpesanan (jumlah, id_produk, id_pesanan) VALUES ('$jumlah', '$id', '$idPesanan')";
        $resultDetailPesanan = mysqli_query($con, $queryDetailPesanan);
                
        $result = mysqli_query($con, "UPDATE produk SET stok='$ready' WHERE id_produk=$id");

    }
    mysqli_close($con);
    header("Location: index.php?page=cart");
}
else
{
    header("location:index.php");
}
?> 