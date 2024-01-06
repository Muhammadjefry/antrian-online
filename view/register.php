<?php 
$page_title = "Register Page";
include ('../includes/header.php');
include ('../controller/cek_register.php');
 ?>
<div class="reg">
    <div class="form-register">
        <h2>Sign Up</h2>
        <?php
      if(isset($message)){
         foreach($message as $message){
            echo '<div class="message2">'.$message.'</div>';
         }
      }
      ?>
        <form method="POST" enctype="multipart/form-data" action="<?php echo $_SERVER["PHP_SELF"];?>">
            <div class="dflex" style="display:flex;">
                <div class="dflex-item item">
                    <div class=" input-box ">
                        <input type="text" name="nik" id="" maxlength="16" required>
                        <label for="">NIK</label>
                        <i class='bx bxs-user-pin'></i>
                    </div>
                    <div class="input-box ">
                        <input type="text" name="name" id="" required>
                        <label for="">Nama Lengkap</label>
                        <i class='bx bxs-user-circle'></i>
                    </div>
                    <div class="input-box ">
                        <!-- <input type="text" name="gender" id="" required> -->
                        <select name="gender" id="">
                            <option value="pria">Pria</option>
                            <option value="wanita">Wanita</option>
                        </select>
                        <label for="">Jenis Kelamin</label>
                        <i class='bx bx-male-female'></i>
                    </div>
                    <div class="input-box ">
                        <input type="date" name="date" id="" required value="2023-12-12">
                        <!-- <input style="color:black;border-bottom:2px solid black;" type="text" name="date"
                        onfocus="(this.type='date')" onblur="if(!this.value) this.type='text'" id="" placeholder=""> -->
                        <label for="">Tanggal Lahir</label>
                        <i class='bx bxs-calendar'></i>
                    </div>
                </div>
                <div class="dflex-item">
                    <div class="input-box ">
                        <input type="text" name="tlp" id="" value="+62" required="+62">
                        <label for="">Telephone</label>
                        <i class='bx bxs-phone'></i>
                    </div>
                    <div class="input-box ">
                        <input type="email" name="username" required>
                        <label for="">Email</label>
                        <i class='bx bxs-user'></i>
                    </div>
                    <div class="input-box ">
                        <input type="password" name="password" id="" required>
                        <label for="">Password</label>
                        <i class='bx bxs-lock-alt'></i>
                    </div>
                </div>
            </div>
            <button type="submit" name="submit" class="btn1" style="margin-top:20px">Sign Up</button>
            <div class="logreg-link ">
                <p>Already have an account ? <a href="login.php" class="login-link">Login </a></p>
            </div>
        </form>
    </div>
</div>


</body>

</html>