<?php
include 'config.php';
$message = [];
if (isset($_POST['submit'])) {
    $nik = mysqli_real_escape_string($conn, $_POST['nik']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $date = $_POST['date'];  // Tipe data DATE tidak perlu di-MYSQLI_REAL_ESCAPE_STRING
    $tlp = mysqli_real_escape_string($conn, $_POST['tlp']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    // $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $password = md5($_POST['password']);

    // Periksa apakah username sudah ada
    $select = mysqli_query($conn, "SELECT * FROM login WHERE nik = '$nik'") or die('salah woi');

    if (mysqli_num_rows($select) > 0) {
        $message[] = 'The user has registered';
    } else {
        // Tidak menyimpan data gambar ke server
        $insert = mysqli_prepare($conn, "INSERT INTO `login` (nik, name, gender, date, tlp, username, password) VALUES (?, ?, ?, ?, ?, ?, ?)");
        mysqli_stmt_bind_param($insert, 'sssssss', $nik, $name, $gender, $date,  $tlp, $username, $password);

        // Tambahkan eksekusi pernyataan
        mysqli_stmt_execute($insert);

        // Pindahkan pengecekan kesalahan ke sini
        if (!$insert) {
            die('Error: ' . mysqli_error($conn));
        }

        if (mysqli_stmt_affected_rows($insert)) {
            // $message[] = mysqli_stmt_affected_rows($insert);
            $message[] = 'Registered successfully!';
            // header("location:login.php");
        } else {
            $message[] = 'Registration failed!';
        }
    }
}
?>