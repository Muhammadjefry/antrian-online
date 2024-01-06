<?php 
$page_title = "Login Page";
include ('../includes/header.php');
include ('../controller/cek_login.php');
 ?>
<div class="log">
    <div class="form-login ">
        <h2 class="">Login</h2>
        <?php
      if(isset($message)){
         foreach($message as $message){
            echo '<div class="message">'.$message.'</div>';
         }
      }
      ?>
        <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST" enctype="multipart/form-data">
            <div class="input-box ">
                <input type="Email" name="username" id="" required>
                <label for="">Email</label>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box ">
                <input type="password" name="password" id="" required>
                <label for="">Password</label>
                <i class='bx bxs-lock-alt'></i>
            </div>
            <button type="submit" name="submit" class="btn1 ">Login</button>
            <div class="logreg-link ">
                <p>Don't have an account ? <a href="register.php" class="register-link">Sign In</a></p>
            </div>
        </form>
    </div>
    <div class="info-text login ">
        <!-- <h2>Welcome To Al Azhar Medical Center</h2>
        <img src="../assets/img/orga.png" alt=""> -->
    </div>
</div>
</body>

</html>