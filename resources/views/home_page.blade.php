<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShereSpace - Welcome</title>
    <link rel="stylesheet" href="../style_sheets/style.css">
    <link rel="icon" type="image/x-icon" href="../database_folder/Untitled.png">

</head>

<body>
    <div>
        <div>
    <h1>Welcome to ShereSpace!</h1>
        <p>A groundbreaking all-inclusive community for resource sharing.</p>
        <p>Shaping a world where resources are shared equitably, opportunities are accessible to all, and the future is co-created through collaboration and innovation.</p>
        <p>Implementing sustainable practices at a global scale and ensuring equitable access to resources and opportunities.</p>
</div>
        <div class="search-bar">
            <input type="text" placeholder="Search for services, categories, etc.">
        </div>
        
        <div class="categories">
            <div class="category">
                <img src="database_folder\food.jpeg" alt="Food" onclick="redirect()">
                <p>Food</p>
            </div>
            <div class="category">
                <img src="database_folder\finance.jpeg" alt="Finance" onclick="redirect()">
                <p>Finance</p>
            </div>
            <div class="category">
                <img src="database_folder\logistics.jpeg" alt="Logistics" onclick="redirect()">
                <p>Logistics</p>
            </div>
            <div class="category">
                <img src="database_folder\equipment.jpeg" alt="Equipment" onclick="redirect()">
                <p>Equipment</p>
            </div>
            <div class="category">
                <img src="database_folder\education.jpeg" alt="Educational" onclick="redirect()">
                <p>Educational</p>
            </div>
            <div class="category">
                <img src="database_folder\accessories.jpeg" alt="Accessories" onclick="redirect()">
                <p>Accessories</p>
            </div>
            <div class="category">
                <img src="database_folder\technology.jpeg" alt="Technology" onclick="redirect()">
                <p>Technology</p>
            </div>
        </div>

        <div>
        <nav>
                <button onclick="window.location.href='signin.php'">Sign In</button>
                <button onclick="window.location.href='signup.php'">Sign Up</button>
            </nav>
            </div>
            <?php include 'footer.php' ?>
</div>

        <script>
            function redirect() {
                window.location.href = 'signin.php';
            }
        </script>
        
        </body>
        </html>
        
