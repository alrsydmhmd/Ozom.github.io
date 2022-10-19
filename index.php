<?php
include 'templates/header.php';
include 'templates/navbar.php';

?>

<main>
    <?php
    if (isset($_GET['page'])) {
        $page = $_GET['page'];

        switch ($page) {
            case 'home':
                include 'halaman/home.php';
                break;
            case 'about':
                include 'halaman/about.php';
                break;
            case 'gallery':
                include 'halaman/gallery.php';
                break;
            case 'contact':
                include 'halaman/contact.php';
                break;
            default:
                echo "<center><h1>Maaf halaman tidak di temukan !</h1></center>";
                break;
        }
    } else {
        include 'halaman/home.php';
    }
    ?>

    <!-- FOOTER -->
    <footer class="container">
        <p class="float-end"><a href="#">Back to top</a></p>
        <p>&copy; 2017–2022 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </footer>
</main>

<?php
include 'templates/footer.php';
?>