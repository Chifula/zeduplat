<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learner Registration Form</title>
    <link rel="stylesheet" href="../style_sheets/style.css">
    <link rel="icon" type="image/x-icon" href="../database_folder/unilus logo 3.jpg">
</head>
<body>
    <div>
        <div class="container">
            <header>
                <img src="../database_folder/Untitled.png" alt="Unilus Logo" id="logo">
                <h1>Sign Up</h1>
                <div class="content"></div>
            </header>
            <!-- Corrected form tag -->
            <form method="post" id="regForm" name="regForm" action="register.php" onsubmit="return validate()">
                <div>
                    <label for="fname">First Name:</label>
                    <input type="text" id="fname" name="fname" required>
                </div>
                <div>
                    <label for="lname">Last Name:</label>
                    <input type="text" id="lname" name="lname" required>
                </div>
                <div>
                    <label for="nrc_number">NRC Number:</label>
                    <input type="text" id="nrc_number" name="nrc_number" maxlength="20" required>
                    <small class="error" id="nrcError"></small>
                </div>
                <div>
                    <label for="age">Age:</label>
                    <input type="number" id="age" name="age" min="0" max="120">
                    <small class="error" id="ageError"></small>
                </div>
                <div>
                    <label for="gender">Gender:</label>
                    <select id="gender" name="gender" required>
                        <option value="">Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
                <div>
                    <label for="phone_number">Phone Number:</label>
                    <input type="text" id="phone_number" name="phone_number">
                    <small class="error" id="phoneError"></small>
                </div>
                <div>
                    <label for="year_of_study">Year of Study:</label>
                    <input type="number" id="year_of_study" name="year_of_study" min="1" max="4">
                </div>
                <div>
                    <label for="program_of_study">Program of Study:</label>
                    <select id="program_of_study" name="program_of_study" required>
                        <option value="law">Law</option>
                        <option value="technology">Technology</option>
                        <option value="medicine">Medicine</option>
                        <option value="social_sciences">Social Sciences</option>
                        <option value="public_health">Public Health</option>
                        <option value="education">Education</option>
                    </select>
                </div>
                <div>
                    <label for="physical_address">Physical Address:</label>
                    <textarea id="physical_address" name="physical_address"></textarea>
                </div>
                <div>
                    <label for="email_address">Email Address:</label>
                    <input type="email" id="email_address" name="email_address" required>
                    <small class="error" id="emailError"></small>
                </div>
                <div>
                    <label for="preferred_mode_of_communication">Preferred Mode of Communication:</label>
                    <select id="preferred_mode_of_communication" name="preferred_mode_of_communication">
                        <option value="Email">Email</option>
                        <option value="Phone">Phone</option>
                        <option value="SMS">SMS</option>
                    </select>
                </div>
                <!-- Password Fields -->
                <div>
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                    <small class="error" id="passwordError"></small>
                </div>
                <div>
                    <label for="confirm_password">Retype Password:</label>
                    <input type="password" id="confirm_password" name="confirm_password" required>
                    <small class="error" id="confirmPasswordError"></small>
                </div>
                <button type="submit">Register</button>
            </form>
            <?php include 'footer.php'; ?>
        </div>
    </div>
    <!-- <script src="script.js"></script> -->
</body>
</html>
