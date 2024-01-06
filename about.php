<?php 
$page_title = "About Page";
include ('includes/header.php'); 
?>
<!-- Loading -->
<!-- <div id="sphere-container">
    <div class="sphere sphere1"></div>
    <div class="sphere sphere2"></div>
    <div class="sphere sphere3"></div>
</div> -->
<!-- navbar -->
<nav id="navbar" class="navbar navbar-expand-lg"
    style="background-color:  rgba(0, 183, 179, 0.6);backdrop-filter:blur(15px);position:absolute;top:0;">
    <div class="container w-100">
        <a class="navbar-brand" href="index.php" style="display: inline; margin: right 0;">
            <strong>
                <img src="assets/img/kesmas.png" style="width: 70px; height: 70px" alt="" />
                <span style="font-size: 1.5em; font-family: sans-serif; color: #fff">Al-Azhar
                </span>
                <small style="
                color: #ffc801;
                position: relative;
                top: 20px;
                right: 155px;
              ">Medical Center</small>
            </strong>
        </a>
        <a class="navbar-toggler btnn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon "><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                    style="border-radius: 5px; font: size 2em;" fill="currentColor" class="bi bi-list"
                    viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                </svg></span>
        </a>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link fw-bold text-white" aria-current="page" href="index.php">Home
                        &nbsp;&nbsp;</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold text-white" href="about.php">About us&nbsp;&nbsp;</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold text-white" href="services.php">Services &nbsp;&nbsp;</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold text-white" href="doctors.php">Doctors &nbsp;&nbsp;</a>
                </li>
                <li class="nav-item">
                    <a href="contact.php" class="btn btn-warning shadow">Contact us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- end navbar -->
<div class="con">
    <div class="bot1">
        <div class="bot2">
            <h1>About Us</h1>
            <h6><a href="about.php">About |</a><span><a href="index.php"> Home</a></span></h6>
        </div>
    </div>
</div>
<div class="content">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" id="svg6">
        <path fill="#00a7a2" fill-opacity="1"
            d="M0,224L80,240C160,256,320,288,480,277.3C640,267,800,213,960,181.3C1120,149,1280,139,1360,133.3L1440,128L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">
        </path>
    </svg>
    <div class="content2">
        <img src="assets/img/docabout.png" alt="">
    </div>
    <div class="content3">
        <h2>Al Azhar Medical Center</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet esse, delectus rerum voluptate doloremque
            obcaecati odio repellendus repellat doloribus, sint vero animi, iste cumque praesentium maxime dolorem
            asperiores! Nostrum, maxime!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat, adipisci nemo aut consectetur, nihil porro
            illo veniam quos incidunt minima odio, maxime rerum labore ducimus quibusdam laudantium ex quam corrupti.
        </p>
    </div>
</div>
<footer id="footer">
    <hr class="mb-4 col-md-12 col-lg-12 col-sm-12 ">
    <div class="container-fluid">
        <div class="row align-items-center" style="text-align: center;">
            <div class="col-md-6 col-lg-6 col-sm-12 text-center">
                <p>Copyright 2023 All right reserved by :
                    <a href="#" style="text-decoration: none;"><strong class="text-warning">Muhammad
                            Jefry</strong></a>
                </p>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-12" style="text-align: center;">
                <div class="text-center text-md-right">
                    <ul class="list-unstyled list-inline">
                        <li class="list-inline-item">
                            <a href="#" class="btn-floating btn-sm text-warning" style="font-size:23px;">
                                <i class="fab fa-facebook"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="btn-floating btn-sm text-warning" style="font-size:23px;"><i
                                    class="fab fa-twitter"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="btn-floating btn-sm text-warning" style="font-size:23px;"><i
                                    class="fab fa-google-plus"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="btn-floating btn-sm text-warning" style="font-size:23px;"><i
                                    class="fab fa-linkedin-in"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#" class="btn-floating btn-sm text-warning" style="font-size:23px;"><i
                                    class="fab fa-youtube"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
</footer>
<!-- <iframe width="560" height="100vh" src="https://www.youtube.com/embed/OhXBGC3mm74" title="You tube video player "
    frameborder="0" allow="acceleromentor; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
    allowfullscreen></iframe>
<script>
var loader = document.getElementById("sphere-container");

window.addEventListener("load", function() {
    loader.style.display = "none";
})
</script> -->
<script src="bootstrap-5/js/bootstrap.min.js"></script>
<script src="assets/script.js"></script>
</body>

</html>