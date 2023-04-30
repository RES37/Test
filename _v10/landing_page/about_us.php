<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Fonts: Oswald -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">

    <!-- Google Fonts: Lato -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/about-us.css">

    <title>About us</title>
</head>
<body>
    <?php
        // Include the navigation bar
        include 'assets/php/nav_bar.php';
    ?>
    <main>
        <section>
            <div class="title">
                ABOUT US
            </div>
            <div class="line"></div>
            <div class="description">
                This project was started by a dedicated research group consisting of 5 <span onclick="location.href='../main_page/server_side/index.php'" style="text-decoration: none;">members</span> that are currently taking the senior high school course of Information Technology in Mobile App and Web Development. We are conducting and prototyping a web-based system that utilizes QR technology to tabulate data and showcase it with graphical visualizations.
            </div>
        </section>
        <section>
            <div class="vision">
                Vision
                <div class="the-vision">
                    To establish ourselves as highly competent and innovative providers of top-quality products for the industry of information technology. Providing businesses of all shapes and sizes with effective systems while maintaining equal services for all workers and consumers.
                </div>
            </div>
            <div class="mission">
                Mission
                <div class="the-mission">
                    Our mission is to be able to provide authentic, reliable, and user-friendly systems while pursuing our services with the utmost enthusiasm and making use of the latest technology the industry has to offer in order to help everyone achieve their goals.
                </div>
            </div>
        </section>
    </main>
    <footer>
        <!-- Add your footer content here -->
    </footer>
</body>
</html>
