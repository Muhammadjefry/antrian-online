<?php 
if(isset($_POST['submit'])){
        $message = $_POST['massage'];
        $no_wa = $_POST['tlp'];
        header("location:https://api.whatsapp.com/send?phone=$no_wa&text=Pesan:%20$message");
}else{
    echo "<script>window.location-history.go(-1);</script>";
}

?>