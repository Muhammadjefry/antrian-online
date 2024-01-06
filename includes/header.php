<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="bootstrap-5/css/bootstrap.min.css" />
    <link rel="stylesheet" href="bootstrap-5/icons/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="../bootstrap-5/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../bootstrap-5/icons/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="assets/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../assets/responsive.css" />
    <link rel="stylesheet" href="assets/responsive.css" />
    <link rel="stylesheet" href="../assets/style.css">
    <link rel="stylesheet" href="../assets/login.css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>
        <?php if(isset($page_title)){ echo "$page_title"; } ?>
    </title>
    <link rel="icon" type="image/png" href="../assets/img/kesmas.png" sizes="16x16" />
    <!-- <script type="text/javascript">
    window.$crisp = [];
    window.CRISP_WEBSITE_ID = "d214d659-19f5-45ca-a0e8-12be7de20163";
    (function() {
        d = document;
        s = d.createElement("script");
        s.src = "../../client.crisp.chat/l.js";
        s.async = 1;
        d.getElementsByTagName("head")[0].appendChild(s);
    })();
    </script> -->
</head>

<body>