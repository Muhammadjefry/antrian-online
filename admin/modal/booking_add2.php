<?php 
include "../includes/conn.php";
session_start();

if(isset($_POST['submit'])){
    $login_id  = $_POST['login_id'];
    $tanggal  = $_POST['tanggal'];
    $keluhan  = $_POST['keluhan'];
    $diagnosis  = $_POST['diagnosis'];
    $tindakan  = $_POST['tindakan'];
    $obat  = $_POST['obat'];
    $dosis  = $_POST['dosis'];
    $frekuensi  = $_POST['frekuensi'];
    $poli1  = $_POST['poli1'];
    $poli2  = $_POST['poli2'];
    $sql = "INSERT INTO pasienT (login_id,tanggal,keluhan,diagnosis,tindakan,obat,dosis,frekuensi,poli1,poli2)
    VALUES('$login_id','$tanggal','$keluhan','
    $diagnosis','$tindakan','$obat','$dosis','$frekuensi','$poli1','$poli2')";
    if($conn->query($sql)){
        $_SESSION['success'] = "Record has been successfully";
    }else{
        $_SESSION['error'] =  $conn->error;
    }
    }else{
        $_SESSION['success'] = "Please select first the record to delete";
    }

    header("location:../pasien/pasien_name.php?name=$login_id");
    ?>