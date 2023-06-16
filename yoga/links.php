<!-- bootstrap cdn link -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">



<!-- bootstrap icons cdn link -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

<!--starting js for dropdown and popovers and tooltips -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<!--ending  js for dropdown and popovers and tooltips -->


<!-- slick effect for moving effect -->
<!-- Add the slick-theme.css if you want default styling -->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<!-- Add the slick-theme.css if you want default styling -->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />



<!-- starting fontawesome link -->
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<!-- ending fontawesome link -->

<!-- fontawesome links for fa icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />


<!-- starting google font -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Rubik+Wet+Paint&display=swap" rel="stylesheet">
<!-- ending google font -->

<!-- starting ubuntu font and charm font -->
<link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Charm:wght@700&display=swap" rel="stylesheet">

<!-- ending ubuntu font and charm font -->

<!-- typing effect to the text -->
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script src="typed.js"></script>

<!-- ending typing effect js -->




<!-- starting js for active class color to be red -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        // Get the current URL path and assign 'active' class
        var pathname = window.location.pathname;
        $('.nav-link[href="' + pathname + '"]').addClass('active');

        // Add active class to clicked nav-link and remove from others
        $('.nav-link').click(function() {
            $('.nav-link.active').removeClass('active');
            $(this).addClass('active');
        });
    });
</script>



<!-- ending js for active class to be red  -->



<!-- animating the text using animate.css -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

<!-- animating the text using animate.css ends here -->

<!--  starting aos effect -->
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
<!-- ending aos effect -->

<!-- fancy box for gallery and carousel started -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />

<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>

<!-- fancy box for gallery and carousel ended -->


<!-- starting js code for the navbar to be collapse when clicked outside -->
<script>
    document.addEventListener('click', function(event) {
        var target = event.target;
        if (!target.closest('.navbar') && document.querySelector('.navbar-collapse.show')) {
            document.querySelector('.navbar-toggler').click();
        }
    });
</script>
<!-- ending  code for the navbar to be collapse when clicked outside -->