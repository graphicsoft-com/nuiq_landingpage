<!-- Navigation bar -->
<nav class="navbar" role="navigation" aria-label="main navigation">
    <!-- Logo and burger menu -->
    <div class="navbar-brand">
        <a class="navbar-item" href="/">
            <img src="img/notes.png">
            <h3>NuIQ</h3>
        </a>
        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
    <span aria-hidden="true"></span>
    <span aria-hidden="true"></span>
    <span aria-hidden="true"></span>
</a>
    </div>

    <!-- Navigation links -->
    <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-start">
            <a href="/page.php?page=about" class="navbar-item">About</a>
            <a href="/#products" class="navbar-item">Suite</a>
            <a href="/#contact" class="navbar-item">Contact</a>
            <a href = "/blog.php" class="navbar-item">Blog</a>
            <a href = "/page.php?page=pricing" class="navbar-item">Pricing</a>
            <!-- More navigation items -->
        </div>
        <div class="navbar-end">
            <a href="/login" class="navbar-item">Login</a>
            <a href="/signup" class="navbar-item">
                <button class="button">Sign Up</button>
            </a>
        </div>
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Get all "navbar-burger" elements
        const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);
        // Check if there are any navbar burgers
        if ($navbarBurgers.length > 0) {
            // Add a click event on each of them
            $navbarBurgers.forEach( el => {
                el.addEventListener('click', () => {
                    // Get the target from the "data-target" attribute
                    const target = el.dataset.target;
                    const $target = document.getElementById(target);

                    // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
                    el.classList.toggle('is-active');
                    $target.classList.toggle('is-active');
                });
            });
        }
    });
</script>
