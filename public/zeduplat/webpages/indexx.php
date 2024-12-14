<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zeduplat - Homepage</title>
    <link rel="stylesheet" href="../style_sheets/style.css">
    <link rel="icon" type="image/x-icon" href="../database_folder/Untitled.png">
</head>
<body>
    <!-- Contact Information -->
     <div>
    <div class="contact-info">
        <p>Email: <a href="mailto:info@zeduplat.com">info@zeduplat.com</a></p>
        <p>Phone: <a href="tel:+260968324447">+260 968 324 447</a></p>
        <p>Website: <a href="https://www.zeduplat.com" target="_blank">www.zeduplat.com</a></p>
        <p>For more Info: <a href="https://www.unilus.ac.zm" target="_blank">www.unilus.ac.zm</a></p>
    </div>

    <!-- Navigation Bar -->
    <?php include 'navbar.php'; ?>

    <!-- Zeduplat Logo -->
    <header>
        <div class="img-container">
            <img src="../database_folder/unnamed.jpg" alt="Zeduplat Logo" id="logo">
        </div>
        <h1>Welcome to Zeduplat!</h1>
    </header>

    <!-- Categories Section -->
    <section class="categories">
        <!-- Individual Categories -->
        <div class="category">
            <a href="food.php">
                <img src="database_folder/food.jpeg" alt="Food">
            </a>
            <p>Food</p>
        </div>
        <div class="category">
            <a href="finance.php">
                <img src="database_folder/finance.jpeg" alt="Finance">
            </a>
            <p>Finance</p>
        </div>
        <div class="category">
            <a href="logistics.php">
                <img src="database_folder/logistics.jpeg" alt="Logistics">
            </a>
            <p>Logistics</p>
        </div>
        <div class="category">
            <a href="equipment.php">
                <img src="database_folder/equipment.jpeg" alt="Equipment">
            </a>
            <p>Equipment</p>
        </div>
        <div class="category">
            <a href="education.php">
                <img src="database_folder/education.jpeg" alt="Educational">
            </a>
            <p>Educational</p>
        </div>
        <div class="category">
            <a href="accessories.php">
                <img src="database_folder/accessories.jpeg" alt="Accessories">
            </a>
            <p>Accessories</p>
        </div>
        <div class="category">
            <a href="technology.php">
                <img src="database_folder/technology.jpeg" alt="Technology">
            </a>
            <p>Technology</p>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'footer.php'; ?>
    </div>
    <!-- JavaScript -->
    <script>

</body>
</html>

<!-- Include Navbar Bottom -->
<?php include 'navbar_bottom.php'; ?>


