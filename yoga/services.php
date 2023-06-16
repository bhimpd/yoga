<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Features</title>

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
                    <img src="images/service1.jpg" alt="Picture" class="img-fluid">

                    <div class="overlay">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <h1 class="animate__animated animate__fadeInLeftBig animate__delay-1s"> Practise Yoga </h1>

                                    <h2 class="automation animate__animated animate__fadeInLeftBig animate__delay-2s">
                                        Find your inner balance through the practice of yoga.
                                    </h2>


                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="carousel-item" data-bs-interval="8000">
                <section class="showcase">
                    <img src="images/service2.jpg" alt="Picture" class="img-fluid">

                    <div class="overlay">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <h1 class="animate__animated animate__fadeInLeftBig animate__delay-1s"> Power of Yoga</h1>

                                    <h2 class="automation animate__animated animate__fadeInLeftBig animate__delay-2s">
                                        Unleash your potential with the transformative power of yoga.
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



    <!-- starting popular services of  the yoga -->
    <div class="container-fluid bg-light" id="experience">

        <div class="container py-5 text-center">
            <h1>Popular Services of Yoga</h1>
            <div class="divider mb-3"></div>
            <h6>Some of the main services of yoga include improving flexibility, balance, and strength. Through various poses and stretches, yoga helps to increase range of motion and enhance physical performance.
                Furthermore, yoga can also improve overall health by boosting the immune system, lowering blood pressure, and improving digestion.
            </h6>
        </div>
    </div>
    <!-- ending popular services of  the yoga -->


    <!-- cards codepen for different types of yoga -->

    <div class="container-fluid bg-light">
        <div class="container">
            <div class="employee-container">
                <div class="row">
                    <div class="col-md-4 employee-1">
                        <div class="employee">
                            <div class="employee-image">
                                <img src="images/card3.jpg" class="img-fluid d-block m-auto" alt="employee-image">
                            </div>
                            <div class="employee-details">
                                <div class="employee-name">
                                    <h1 class="text-center">ASTANGA YOGA<br></h1>
                                    <p>Ashtanga Yoga is a form of traditional yoga that follows a set sequence of poses, which are designed to be practiced in a specific order.</p>

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 employee-1">
                        <div class="employee">
                            <div class="employee-image">
                                <img src="images/card6.jpg" class="img-fluid d-block m-auto" alt="employee-image">
                            </div>
                            <div class="employee-details">
                                <div class="employee-name">
                                    <h1 class="text-center">HATHA YOGA<br></h1>
                                    <p> The word "Hatha" is derived from two Sanskrit words, "Ha" meaning "sun," and "Tha" meaning "moon," which represents the balance of opposing energies within the body.</p>

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 employee-1">
                        <div class="employee">
                            <div class="employee-image">
                                <img src="images/card5.jpg" class="img-fluid d-block m-auto" alt="employee-image">
                            </div>
                            <div class="employee-details">
                                <div class="employee-name">
                                    <h1 class="text-center">KUNDALININ YOGA<br></h1>
                                    <p>Kundalini Yoga involves a combination of physical postures (asanas), breathing techniques (pranayama), chanting (mantra), and meditation to activate and move the Kundalini energy through the body.</p>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cards codepen endeddd  for different types of yoga-->



    <!-- whats new on services started -->


    <div class="container-fluid bg-light" id="experience">

        <div class="container py-5 text-center">
            <h1>New Services of Yoga</h1>
            <div class="divider mb-3"></div>

        </div>
    </div>
    <!-- whats new on services ended -->

    <!-- timeline started for services of the yoga -->

    <div class="container-fluid bg-light">
        <div class="timeline-container">
            <ul class="vertical-scrollable-timeline" id="vertical-scrollable-timeline">
                <div class="list-progress">
                    <div class="inner">
                    </div>
                </div>
                <li>
                    <h2>Modern Technology</h2>
                    <p>Modern technology has had a significant impact on the practice and accessibility of yoga. Here are a few examples:Online Yoga Classes,Yoga Apps,Wearable Technology,Yoga Mats etc...</p>
                    <div class="icon-holder">
                        <i class="fa-solid fa-microchip fa-2x"></i>
                    </div>
                </li>
                <li>
                    <h2>NATURAL PRODUCTS</h2>
                    <p>Using natural products in yoga practice can have many benefits for both the body and the environment. Here are a few examples:Essential Oils,Natural Fabrics,Herbal Teas,Natural Yoga Mats,Organic Food etc...

                    </p>
                    <div class="icon-holder">
                        <i class="fa-solid fa-leaf fa-2x"></i>
                    </div>
                </li>
                <li>
                    <h2>QUALIFIED STAFFS</h2>
                    <p>In yoga practice, the use of staffs, also known as "yoga props," can be helpful in achieving proper alignment, improving flexibility, and enhancing the benefits of the poses. Here are a few examples of how staffs can be used in yoga practice:Yoga Straps, Yoga Blankets, Yoga Bolsters,Yoga Blocks etc...</p>
                    <div class="icon-holder">
                        <i class="fa-solid fa-user fa-2x"></i>
                    </div>
                </li>
                <li>
                    <h2>ULTIMATE LIFE CARRER</h2>
                    <p>Yoga can have a positive impact on various aspects of life, including career success. Here are some ways in which practicing yoga can benefit your career:Improved Focus and Concentration,Increased Energy and Productivity, Enhanced Creativity etc...</p>
                    <div class="icon-holder">
                        <i class="fa-sharp fa-solid fa-lightbulb fa-2x"></i>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <!-- timeline started for  the services of the yoga -->




    <!-- yoga pic with lesson started -->
    <div class="container-fluid" id="train">
        <div class="text-center bg-image" style="background-image: url('images/yogaback2.jpg');background-size:cover;">
            <div class="mask py-5" style="background-color: rgba(0, 0, 0, 0.5);">
                <div class="d-flex justify-content-center align-items-center">
                    <div class="text-white">
                        <h1 class="mb-3">Center Your Body and Mind</h1>
                        <h3 class="mb-3" style="color:#19a7ce;">Stretch the Possibilities</h3>
                        <p> <i class="fa-sharp fa-solid fa-dash"></i> - Mary Sheldon. Kundalini Trainer</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- yoga pic with lesson ended -->




    <!-- director started  -->
    <div class="container-fluid bg-light" id="yoga_testimonial">
        <div class="container py-5 text-center">
            <div class="yogatesti py-5">
                <h1> Creative & most complete yoga </h1>
                <div class="divider"></div>
                <p>Creative and complete yoga is a practice that goes beyond the traditional physical postures, or asanas, to encompass a holistic approach to health and wellness. It incorporates breathing exercises, meditation, and mindful movement to cultivate a deep connection between the body, mind, and spirit.This type of yoga encourages creativity in the practice, allowing practitioners to explore new movements and sequences that feel nourishing and healing to their individual needs. </p>
                <button> Join Us <i class="fa-solid fa-arrow-right"></i> </button>
            </div>

        </div>
    </div>

    <!-- director ended  -->



    <!-- fancybox gallery started -->

    <div class="container-fluid bg-light" id="yoga-gallery">
        <div class="container text-center">
            <h1>Yoga Gallery</h1>
            <div class="divider mb-3"></div>

            <a data-fancybox="gallery" data-src="images/gallery1.jpg">
                <img src="images/gallery1.jpg" width="200" height="200" alt="" />
            </a>


            <a data-fancybox="gallery" data-src="images/gallery2.jpg">
                <img src="images/gallery2.jpg" width="200" height="200" alt="" />
            </a>
            <a data-fancybox="gallery" data-src="images/gallery3.jpg">
                <img src="images/gallery3.jpg" width="200" height="200" alt="" />
            </a>
            <a data-fancybox="gallery" data-src="images/gallery4.jpg">
                <img src="images/gallery4.jpg" width="200" height="200" alt="" />
            </a>
            <a data-fancybox="gallery" data-src="images/gallery5.jpg">
                <img src="images/gallery5.jpg" width="200" height="200" alt="" />
            </a>
            <a data-fancybox="gallery" data-src="images/gallery6.jpg">
                <img src="images/gallery6.jpg" width="200" height="200" alt="" />
            </a>
            <a data-fancybox="gallery" data-src="images/gallery7.jpg">
                <img src="images/gallery7.jpg" width="200" height="200" alt="" />
            </a>

        </div>
    </div>
    <!-- ending fancy box gallery -->




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



    <?php
    include "footer.php"
    ?>




    <!-- js for fancybox -->

    <script>
        Fancybox.bind('[data-fancybox="gallery"]', {
            // Your custom options
        });
    </script>
    <!-- ending jf for fancy box -->


    <!-- js for timeline  -->

    <script>
        $(window).on('scroll', function() {
            function isScrollIntoView(elem, index) {
                var docViewTop = $(window).scrollTop();
                var docViewBottom = docViewTop + $(window).height();
                var elemTop = $(elem).offset().top;
                var elemBottom = elemTop + $(window).height() * .5;
                if (elemBottom <= docViewBottom && elemTop >= docViewTop) {
                    $(elem).addClass('active');
                }
                if (!(elemBottom <= docViewBottom)) {
                    $(elem).removeClass('active');
                }
                var MainTimelineContainer = $('#vertical-scrollable-timeline')[0];
                var MainTimelineContainerBottom = MainTimelineContainer.getBoundingClientRect().bottom - $(window).height() * .5;
                $(MainTimelineContainer).find('.inner').css('height', MainTimelineContainerBottom + 'px');
            }
            var timeline = $('#vertical-scrollable-timeline li');
            Array.from(timeline).forEach(isScrollIntoView);
        });
    </script>




    <!-- js for timeline ended here -->


</body>

</html>