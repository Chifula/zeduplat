<?php
// Database connection code
if (isset($_POST['fname'])) {
    // Connect to the database
    $con = mysqli_connect('localhost', 'root', '', 'zeduplat');

    // Check connection
    // if (!$con) {
    //     die("Connection failed: " . mysqli_connect_error());
    // }

    // Get the POST records
$txtFName = $_POST['fname'];
$txtLName = $_POST['lname'];
$txtNrc = $_POST['nrc_number'];
$txtAge = $_POST['age'];
$txtGender = $_POST['gender'];
$txtPhoneNumber = $_POST['phone_number'];
$txtYearOfStudy = $_POST['year_of_study'];
$txtProgramOfStudy = $_POST['program_of_study'];
$txtPhysicalAddress = $_POST['physical_address'];
$txtEmail = $_POST['email_address'];
$txtPreferredModeOfCommunication = $_POST['preferred_mode_of_communication'];
$txtPassword = $_POST['password'];

// Hash the password for security (assuming there's a password field)
$hashedPassword = password_hash($txtPassword, PASSWORD_DEFAULT);

// Database insert SQL code
$sql = "INSERT INTO `students` (`student_id`, `fname`, `lname`, `nrc_number`, `age`, `gender`,`phone_number`, `year_of_study`, `program_of_study`, `physical_address`, `email_address`, `preferred_mode_of_communication`, `password`) 
        VALUES (0, '$txtFName', '$txtLName', '$txtNrc', '$txtAge', '$txtGender','$txtPhoneNumber', '$txtYearOfStudy','$txtProgramOfStudy', '$txtPhysicalAddress', '$txtEmail', '$txtPreferredModeOfCommunication', '$hashedPassword')";

// Insert into database

    $rs = mysqli_query($con, $sql);
    if($rs)
    {
        header("Location: ../webpages/signin.php");
    }
    }
    else
    { 
        echo "Failed";
        
    }
?>
