<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="footer.css">

    <?php
    include "links.php"
    ?>
</head>

<body>
    <?php
    include "header.php"
    ?>



    <!-- starting carousel background image with some texts onit -->

    <div id="carouselExampleCrossfade" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="5000">
                <section class="showcase">
                    <img src="images/contact1.jpg" alt="Picture" class="img-fluid">

                    <div class="overlay">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <h1 class="animate__animated animate__fadeInLeftBig animate__delay-1s"> Contact Us </h1>

                                    <h2 class="automation animate__animated animate__fadeInLeftBig animate__delay-2s">
                                        Get in touch and find your inner Peace with our Yoga Experts.
                                    </h2>


                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>


        </div>

    </div>

    <!-- ending carousel background image with the inputs tags -->



    <!-- starting contact us of  the yoga -->
    <div class="container-fluid bg-light" id="experience">

        <div class="container pt-5 text-center contact_form_all">
            <h1>Contact Us</h1>
            <div class="divider mb-3"></div>
            <div class="row">

                <div class="col-md-6 cont_info">
                    <div class="contactus">
                        <div class="contact_icon">
                            <i class="fa-sharp fa-solid fa-location fa-2xl"></i>
                        </div>
                        <div class="contact_info">
                            <h6>Kathmandu, Basundhara</h6>
                            <h6>Pokhara, Zero K.M</h6>

                        </div>

                    </div>
                    <hr>

                    <div class="contactus">
                        <div class="contact_icon">
                            <i class="fa-sharp fa-solid fa-phone fa-2xl"></i>
                        </div>
                        <div class="contact_info">
                            <h6>+977 9814495123</h6>
                            <h6>+977 9804454452</h6>

                        </div>
                    </div>
                    <hr>
                    <div class="contactus">
                        <div class="contact_icon">
                            <i class="fa-sharp fa-solid fa-envelope fa-2xl"></i>
                        </div>
                        <div class="contact_info">
                            <h6>yoga@123gmail.com</h6>
                            <h6>yogamedication23@gmail.com</h6>

                        </div>
                    </div>
                    <hr>

                    <h4> Namaste and thank you for choosing to practice with us. </h4>

                    <hr>
                </div>
                <div class="col-md-6">
                    <form>
                        <!-- 2 column grid layout with text inputs for the first and last names -->

                        <div class="col">
                            <div class="form-outline">
                                <input type="text" id="form6Example1" class="form-control" placeholder="First Name" />
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-outline">
                                <input type="text" id="form6Example2" class="form-control" placeholder="Last Name" />
                            </div>
                        </div>



                        <div class="col">
                            <div class="form-outline">
                                <input type="text" id="form6Example1" class="form-control" placeholder="Your Email" />
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-outline">
                                <input type="number" id="form6Example2" class="form-control" placeholder="Mobile Number" />

                            </div>

                        </div>
                        <div class="form-outline mb-4">
                            <textarea class="form-control" id="form6Example7" rows="6" placeholder="Your Message..."></textarea>
                        </div>


                        <!-- Submit button -->
                        <button type="submit" class="btn  mb-4">Contact Us</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- ending contact us of  the yoga -->






    <!-- starting Achievement text -->
    <div class="container-fluid bg-light" id="experience">

        <div class="container pt-5 pb-2 text-center">
            <h1>Achievements</h1>
            <div class="divider mb-2"></div>

        </div>
    </div>
    <!-- ending Achievement text -->


    <!-- starting achievements icons numbers and description -->
    <div class="container-fluid bg-light" id="achievement">
        <div class="container  pt-2 pb-5">
            <div class="row text-center d-flex justify-content-center">
                <div class="col-md-2 col-6 achievements my-2">
                    <i class="fa-solid fa-face-smile fa-bounce"></i>
                    <h4 class="num my-2"> 100 % </h4>
                    <h5>Quality</h5>
                </div>
                <div class="col-md-2 col-6 achievements my-2">
                    <i class="fa-solid fa-calendar-days fa-beat-fade"></i>
                    <h4 class="num my-2"> 2+ Years </h4>
                    <h5>Experience</h5>
                </div>
                <div class="col-md-2 col-6 achievements my-2">
                    <i class="fa-solid fa-user-tie fa-beat"></i>
                    <h4 class="num my-2"> 10 </h4>
                    <h5> Trainners</h5>
                </div>
                <div class="col-md-2 col-6 achievements my-2">
                    <i class="fa-solid fa-star fa-spin"></i>
                    <h4 class="num my-2"> 12 </h4>
                    <h5>Classes</h5>
                </div>
                <div class="col-md-2 col-6 achievements my-2">
                    <i class="fa-solid fa-users fa-fade"></i>
                    <h4 class="num my-2"> 340+ </h4>
                    <h5>Members</h5>
                </div>
            </div>
        </div>


    </div>


    <!-- ending achievements icons numbers and description -->



    <!-- demo featured card.................... -->

    <div class="serbox">
        <div class="container" id="serbox">
            <div class="serviceBox">
                <div class="icon" style="--i: #4eb7ff">
                    <i class="fa-solid fa-heart-circle-bolt"></i>
                </div>
                <div class="content">
                    <h2>Design</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis
                        eos facilis beatae dicta perferendis. Similique.
                    </p>
                </div>
            </div>
            <div class="serviceBox">
                <div class="icon" style="--i: #fd6494">
                    <i class="fas fa-code"></i>
                </div>
                <div class="content">
                    <h2>Development</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis
                        eos facilis beatae dicta perferendis. Similique.
                    </p>
                </div>
            </div>
            <div class="serviceBox">
                <div class="icon" style="--i: #43f390">
                    <i class="fas fa-search"></i>
                </div>
                <div class="content">
                    <h2>SEO</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis
                        eos facilis beatae dicta perferendis. Similique.
                    </p>
                </div>
            </div>
            <div class="serviceBox">
                <div class="icon" style="--i: #ffb508">
                    <i class="fas fa-chart-bar"></i>
                </div>
                <div class="content">
                    <h2>Digital Marketing</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis
                        eos facilis beatae dicta perferendis. Similique.
                    </p>
                </div>
            </div>
            <div class="serviceBox">
                <div class="icon" style="--i: #37ba82">
                    <i class="fas fa-video"></i>
                </div>
                <div class="content">
                    <h2>Video Editing</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis
                        eos facilis beatae dicta perferendis. Similique.
                    </p>
                </div>
            </div>
            <div class="serviceBox">
                <div class="icon" style="--i: #cd57ff">
                    <i class="fas fa-gamepad"></i>
                </div>
                <div class="content">
                    <h2>Games Development</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis
                        eos facilis beatae dicta perferendis. Similique.
                    </p>
                </div>
            </div>
        </div>
    </div>




    <?php
    include "footer.php"
    ?>



    <script>

    </script>


</body>

</html>