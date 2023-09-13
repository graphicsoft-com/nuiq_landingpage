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
        style="background-image: url('img/nuiq_banner.png'); background-size: 100% auto; background-repeat: no-repeat; background-position: center; max-height:200px">
        <div class="hero-body">
        </div>
    </section>

    <div class="container">
        <div class="section article">
            <?php
            require 'vendor/autoload.php';

            $Parsedown = new Parsedown();

            $articlesDir = 'articles/';

            // Get all .md files in the articles directory
            $articles = glob($articlesDir . '*.md');

            // Loop through each article
            foreach($articles as $article) {
                // Get the filename without the .md extension
                $articleName = basename($article, '.md');

                // Get the article content and convert it to HTML
                $articleContent = file_get_contents($article);
                $articleHtml = $Parsedown->text($articleContent);

                // Extract the first two paragraphs
                $paragraphs = explode('</p>', $articleHtml, 3);

                $intro = $paragraphs[0] . '</p>' . $paragraphs[1] . '</p>';

                
                echo $intro;
                echo "<a href=\"article.php?article={$articleName}\">Read more</a>";
                echo '<hr>';
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
