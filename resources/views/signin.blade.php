<?php
// Database connection
$con = mysqli_connect('localhost', 'root', '', 'zeduplat');

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Start session
session_start();

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form inputs
    $email = $_POST['email_address'];
    $password = $_POST['password'];

    // Use prepared statement for security
    $stmt = $con->prepare("SELECT * FROM students WHERE email_address = ?");
    $stmt->bind_param("s", $email); // "s" specifies the type (string) of the parameter
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if user exists
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Verify the hashed password
        if (password_verify($password, $user['password'])) {
            // Successful login: store user info in session
            $_SESSION['user_id'] = $user['student_id']; // Example: storing user ID
            $_SESSION['email'] = $user['email_address'];

            // Redirect to index.php
            header("Location: index.php");
            exit();
        } else {
            echo "Incorrect password.";
        }
    } else {
        echo "No account found with that email address.";
    }

    // Close statement
    $stmt->close();
}

// Close database connection
mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="icon" type="image/x-icon" href="../database_folder/Untitled.png">
    <link rel="stylesheet" href="../style_sheets/style.css">

</head>
<body>

<div class="form-container">
    <header>
        <div class="img-container">
            <img src="../database_folder/Untitled.png" alt="Unilus Logo" id="logo">
        </div>
        <h1>Sign In</h1>
        <form action="signin.php" method="POST">
            <input type="email" name="email_address" placeholder="Enter your email" required>
            
            <div class="password-container">
                <input type="password" name="password" placeholder="Enter your password" id="password" required>
                <span class="toggle-password" onclick="togglePassword()">👁️</span>
            </div>
            
            <div><button type="submit">Sign In</button></div>
            <br/>
            <button type="button" onclick="window.location.href='signup.php'">Sign Up</button>
        </form>
    </header>
</div>

<script>
    function togglePassword() {
        const passwordField = document.getElementById('password');
        const toggleIcon = document.querySelector('.toggle-password');
        if (passwordField.type === 'password') {
            passwordField.type = 'text';
            toggleIcon.textContent = '🙈';
        } else {
            passwordField.type = 'password';
            toggleIcon.textContent = '👁️';
        }
    }
</script>

</body>
</html>

