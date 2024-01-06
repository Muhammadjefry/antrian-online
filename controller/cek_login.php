<?php
include 'config.php';

if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $select = mysqli_query($conn, "SELECT * FROM `login` WHERE username = '$username' ") or die($conn->error);

    if (mysqli_num_rows($select) > 0) {
        $row = mysqli_fetch_assoc($select);
        $hashed_password_from_database = $row['password'];
			if ( md5($password) == $hashed_password_from_database && $row['level'] == "admin") {
            // Login berhasil
			        $_SESSION['username'] = $username;
			        $_SESSION['level'] = "admin";
			// alihkan ke halaman dashboard poliumum
            header('location:../admin');
            }elseif(md5($password) == $hashed_password_from_database &&  $row['level'] == "Umum"){
                 // Login berhasil
			        $_SESSION['username'] = $username;
			        $_SESSION['level'] = "Umum";
			        // alihkan ke halaman dashboard poliumum
                 header('location:../admin/poli/poli.php');
            }elseif(md5($password) == $hashed_password_from_database &&  $row['level'] == "Gigi"){
                // Login berhasil
                $_SESSION['username'] = $username;
                $_SESSION['level'] = "Gigi";
                 // alihkan ke halaman dashboard poliumum
                 header('location:../admin/poli/poli.php');
            }elseif(md5($password) == $hashed_password_from_database &&  $row['level'] == "Gizi"){
                 // Login berhasil
                $_SESSION['username'] = $username;
                 $_SESSION['level'] = "Gizi";
                // alihkan ke halaman dashboard poliumum
                 header('location:../admin/poli/poli.php');
            }elseif(md5($password) == $hashed_password_from_database &&  $row['level'] == "Batra"){
                // Login berhasil
                $_SESSION['username'] = $username;
                $_SESSION['level'] = "Batra";
                 // alihkan ke halaman dashboard poliumum
                 header('location:../admin/poli/poli.php');
            }elseif(md5($password) == $hashed_password_from_database &&  $row['level'] == "Kia"){
                // Login berhasil
                $_SESSION['username'] = $username;
                $_SESSION['level'] = "Kia";
                // alihkan ke halaman dashboard poliumum
                 header('location:../admin/poli/poli.php');
            }elseif(md5($password) == $hashed_password_from_database &&  $row['level'] == "Lansia"){
                // Login berhasil
                $_SESSION['username'] = $username;
                $_SESSION['level'] = "Lansia";
                // alihkan ke halaman dashboard poliumum
                 header('location:../admin/poli/poli.php');
            }elseif(md5($password) == $hashed_password_from_database &&  $row['level'] == "Psikologi"){
                // Login berhasil
                $_SESSION['username'] = $username;
                $_SESSION['level'] = "Psikologi";
                // alihkan ke halaman dashboard poliumum
                 header('location:../admin/poli/poli.php');
            }elseif(md5($password) == $hashed_password_from_database &&  $row['level'] == "Paru"){
                // Login berhasil
                $_SESSION['username'] = $username;
                $_SESSION['level'] = "Paru";
                // alihkan ke halaman dashboard poliumum
                 header('location:../admin/poli/poli.php');
            }elseif(  md5($password) == $hashed_password_from_database && $row['level'] == "pasien"){
			            // Login berhasil
                    $_SESSION['login_id'] = $row['id'];
                    $_SESSION['nik'] = $row['nik'];
                    $_SESSION['date'] = $row['date'];
                    $_SESSION['gender'] = $row['gender'];
                    $_SESSION['name'] = $row['name'];
                    $_SESSION['tlp'] = $row['tlp'];
			        $_SESSION['username'] = $username;
			        $_SESSION['level'] = "pasien";
			// alihkan ke halaman dashboard poliumum
            header('location:../view/pasien.php');
		    }else {
            // Password salah
            $message[] = "Password Is Incorrect";
        }
    } else {
        // Email tidak ditemukan
        $message[] = "Username Is Incorrect";
    }

}
?>