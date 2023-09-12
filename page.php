<!DOCTYPE html>
<html>
<head>
    <?php include 'sections/head.php'; ?>
</head>
<body style="background-color:#FAF0E6">
    <?php 
    include 'sections/navbar.php';
    ?>

    <section class="hero"
        style="background-image: url('img/nuiq_banner5.png'); background-size: 100% auto; background-repeat: no-repeat; background-position: center; max-height:200px">
        <div class="hero-body">
        </div>
    </section>

    <div class="container">
        <div class="section">
            <?php
            require 'vendor/autoload.php';

            $Parsedown = new Parsedown();

            // Check if the 'article' GET parameter is set
            if(isset($_GET['page'])) {
                // Sanitize the input to remove any potential harmful data
                $page = $_GET['page'] ?? '';
                // Remove .md extension if it was included in the URL
                $page = str_replace('.md', '', $page);
                // Allow only alphanumeric, dash, and underscore
                $page = preg_replace('/[^a-zA-Z0-9-_]/', '', $page);


                $filePath = "pages/{$page}.md"; // assuming the articles are stored in an 'articles' directory

                // Check if the file exists
                if(file_exists($filePath)) {
                    echo $Parsedown->text(file_get_contents($filePath));
                } else {
                    echo "The requested page could not be found.";
                }
            } else {
                echo "No page specified.";
            }
            ?>
        </div>
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
