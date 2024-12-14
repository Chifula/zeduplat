
document.getElementById('regForm').addEventListener('submit', function(event) {
    event.preventDefault();
    
    let valid = true;

    // Password Validation
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirm_password').value;
    const passwordError = document.getElementById('passwordError');
    const confirmPasswordError = document.getElementById('confirmPasswordError');
    
    if (password.length < 8) {
        passwordError.textContent = "Password must be at least 8 characters long.";
        valid = false;
    } else {
        passwordError.textContent = "";
    }

    if (password !== confirmPassword) {
        confirmPasswordError.textContent = "Passwords do not match.";
        valid = false;
    } else {
        confirmPasswordError.textContent = "";
    }

    // If all validations pass, submit the form
    if (valid) {
        alert("Form submitted successfully!");
        // Form submission logic here (e.g., send data to backend)
    }
});

