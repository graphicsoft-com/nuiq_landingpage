<!DOCTYPE html>
<html>
<head>
    <?php include 'sections/head.php'; ?>
</head>
<body style="background-color:#FAF0E6">
    <?php 
    include 'sections/navbar.php';
    include 'sections/hero.php';
    ?>

    <div class="container">
        <?php include 'sections/home.php'; ?>
    </div>

    <?php include 'sections/footer.php'; ?>
    

    <!-- Adding jQuery and Slick JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.testimonial-carousel').slick({
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 4500,
            });
        });
    </script>
</body>
</html>
