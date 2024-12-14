<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShereSpace - Welcome</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="database_folder\Untitled.png">
</head>
<body>

    <!-- Navigation Bar -->
    <?php include 'navbar.php'; ?>


    <!-- Main Content -->
    <header>
        <h1>Welcome to ZeduPlat!</h1>
    </header>

    <div class="search-bar">
        <input type="text" placeholder="Search for services, categories, etc.">
    </div>

    <div class="categories">
        <div class="category">
          <a href=" food.php"> <img src="database_folder\food.jpeg" alt="Food" onclick="redirect()"> </a> 
            <p>Food</p>
        </div>
        <div class="category">
        <a href=" finance.php"> <img src="database_folder\finance.jpeg" alt="Finance" onclick="redirect()"> </a> 
            <p>Finance</p>
        </div>
        <div class="category">
        <a href=" logistics.php">  <img src="database_folder\logistics.jpeg" alt="Logistics" onclick="redirect()"> </a> 
            <p>Logistics</p>
        </div>
        <div class="category">
        <a href=" equpiment.php">  <img src="database_folder\equipment.jpeg" alt="Equipment" onclick="redirect()"> </a> 
            <p>Equipment</p>
        </div>
        <div class="category">
        <a href=" education.php">  <img src="database_folder\education.jpeg" alt="Educational" onclick="redirect()"> </a> 
            <p>Educational</p>
        </div>
        <div class="category">
        <a href=" accessories.php"> <img src="database_folder\accessories.jpeg" alt="Accessories" onclick="redirect()"> </a> 
            <p>Accessories</p>
        </div>
        <div class="category">
        <a href=" technology.php"> <img src="database_folder\technology.jpeg" alt="Technology" onclick="redirect()"> </a> 
            <p>Technology</p>
        </div>
    </div>

    <?php include 'footer.php' ?>
   

    <script>
        function redirect() {
            window.location.href = 'signin.php';
        }
    </script>

</body>
</html>

<!-- Add this script to each page -->
<?php include 'navbar_bottom.php'; ?>
