<?php 
include "../includes/conn.php";
if (isset($_POST['id'])) {
    // Variabel 'id' ada dalam $_POST
    $id = $_POST['id'];
    $sql = "SELECT * FROM antrian2 WHERE ID='$id'";
    $query = $conn->query($sql);
    $row = $query->fetch_assoc();
    echo json_encode($row); 
    // Lakukan sesuatu dengan nilai 'id' di sini
} else {
    // Variabel 'id' tidak ada dalam $_POST
    echo "ID tidak ditemukan dalam permintaan POST";
}

?>