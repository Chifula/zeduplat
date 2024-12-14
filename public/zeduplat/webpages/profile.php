<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sherespace";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get user ID from URL or session
$user_id = isset($_GET['id']) ? $_GET['id'] : 1; // Default user ID = 1 for demonstration

// Fetch user information
$sql = "SELECT * FROM users WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Fetch user data
    $user = $result->fetch_assoc();
} else {
    echo "User not found.";
    exit;
}

$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile - <?php echo htmlspecialchars($user['username']); ?></title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="database_folder\Untitled.png">
    <style>
        /* Basic styles for the user profile */
        .profile-container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #f8f9fa;
            text-align: center;
        }

        .profile-container img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 20px;
        }

        .profile-container h2 {
            margin: 0;
            font-size: 2em;
            color: #333;
        }

        .profile-container p {
            font-size: 1.2em;
            color: #666;
        }

        .profile-container .bio {
            margin-top: 20px;
            font-size: 1em;
            color: #444;
        }
    </style>
</head>
<body>
<?php include 'navbar.php'; ?>
    <div class="profile-container">
        <!-- <img src="uploads/<?php echo htmlspecialchars($user['profile_picture']); ?>" alt="Profile Picture"> -->
        <h2><?php echo htmlspecialchars($user['first_name']) . ' ' . htmlspecialchars($user['last_name']); ?></h2>
        <!-- <p>Username: <?php echo htmlspecialchars($user['username']); ?></p> -->
        <p>Email: <?php echo htmlspecialchars($user['email']); ?></p>
        <div class="bio">
            <h3>About Me</h3>
            <!-- <p><?php echo nl2br(htmlspecialchars($user['bio'])); ?></p> -->
        </div>
    </div>
</body>
</html>

<?php include 'navbar_bottom.php'; ?>
