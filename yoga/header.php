<!-- social icons started -->
<div class="container-fluid" id="social-icons">
    <div class="row social-icons text-center">
        <div class="col-md-6">
            <div class="message mx-auto">
                <i class="fa-solid fa-clock fa-beat-fade"></i>
                Mon - Fri || 8:00 - 18:00 || Sunday : Closed

            </div>
            <div class="col-md-6 socialmedia mx-auto">
                <a href="" target="_blank" class="me-3"><i class="fab fa-facebook-f"></i></a>
                <a href="" target="_blank" class="me-3"><i class="fab fa-twitter"></i></a>
                <a href="" target="_blank" class="me-3"><i class="fab fa-instagram"></i></a>
                <a href="" target="_blank" class="me-3"><i class="fab fa-whatsapp"></i></a>
            </div>
        </div>
    </div>
</div>



<!-- navbar started -->
<nav class="navbar navbar-expand-lg sticky-top">
    <div class="container">
        <div class="navbar-brand d-block d-lg-none" href="#">
            <a href="index.php">
                <h2 class="logo"><strong>Yoga </strong> Fitness </h2>
            </a>
        </div>
        <button class="navbar-toggler navbar_toggle" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
           <ul class="navbar-nav d-flex justify-content-center align-items-center">
    <li class="nav-item mx-3">
        <a class="nav-link <?php if(basename($_SERVER['PHP_SELF'])=='index.php'){echo 'active';}?>" href="index.php">Home</a>
    </li>
    <li class="nav-item mx-3">
        <a class="nav-link <?php if(basename($_SERVER['PHP_SELF'])=='features.php'){echo 'active';}?>" href="features.php">Features</a>
    </li>
    <li class="nav-item mx-3">
        <a class="nav-link <?php if(basename($_SERVER['PHP_SELF'])=='class.php'){echo 'active';}?>" href="class.php">Our Classes</a>
    </li>
</ul>

<div class="navbar-brand d-none d-lg-block" href="#">
    <a href="#">
        <h2 class="logo center-logo"><strong>Yoga </strong> Fitness </h2>
    </a>
</div>

<ul class="navbar-nav d-flex justify-content-center align-items-center">
    <li class="nav-item mx-3">
        <a class="nav-link <?php if(basename($_SERVER['PHP_SELF'])=='services.php'){echo 'active';}?>" href="services.php">Services</a>
    </li>

    <li class="nav-item mx-3">
        <a class="nav-link <?php if(basename($_SERVER['PHP_SELF'])=='about.php'){echo 'active';}?>" href="about.php">About us</a>
    </li>
    <li class="nav-item mx-3">
        <a class="nav-link <?php if(basename($_SERVER['PHP_SELF'])=='contact.php'){echo 'active';}?>" href="contact.php">Contact us</a>
    </li>
</ul>

        </div>
    </div>
</nav>

<!-- navbar ended -->