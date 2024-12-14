document.addEventListener("DOMContentLoaded", function() {
    const usernameField = document.getElementById('username');
    const emailField = document.getElementById('email');
    const passwordField1 = document.getElementById('password1');
    const passwordField2 = document.getElementById('password2');
    const usernameError = document.getElementById('usernameError');
    const emailError = document.getElementById('emailError');
    const passwordError = document.getElementById('passwordError');
    const passwordMatchError = document.getElementById('passwordMatchError');
    
    let isUsernameValid = false;
    let isEmailValid = false;
    let isPasswordValid = false;
    let isPasswordMatchValid = false;

    // Live validation for username
    usernameField.addEventListener('input', function() {
        let username = usernameField.value;
        username = username.replace(/\s+/g, ''); // Remove spaces
        usernameField.value = username;

        const usernameRegex = /^[a-zA-Z0-9_]{1,30}$/;
        if (!usernameRegex.test(username)) {
            isUsernameValid = false;
        } else {
            isUsernameValid = true;
        }
    });

    // Live validation for email
    emailField.addEventListener('input', function() {
        let email = emailField.value;
        
        // Convert email to lowercase and remove spaces
        email = email.toLowerCase().replace(/\s+/g, '');
        emailField.value = email;

        // Regex for validating email
        const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        if (!emailRegex.test(email)) {
            isEmailValid = false;
        } else {
            isEmailValid = true;
        }
    });

    // Live validation for password
    passwordField1.addEventListener('input', function() {
        const password = passwordField1.value;
        const passwordRegex = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;

        if (!passwordRegex.test(password)) {
            isPasswordValid = false;
        } else {
            isPasswordValid = true;
        }
    });

    // Check if passwords match
    passwordField2.addEventListener('input', function() {
        const password1 = passwordField1.value;
        const password2 = passwordField2.value;

        if (password1 !== password2) {
            isPasswordMatchValid = false;
        } else {
            isPasswordMatchValid = true;
        }
    });

//     // Optional: Add submit form validation (if needed)
//     const registerForm = document.getElementById('registerForm');
//     registerForm.addEventListener('submit', function(e) {
//         // Prevent submission if there are validation errors
//         if (!isUsernameValid || !isEmailValid || !isPasswordValid || !isPasswordMatchValid) {
//             e.preventDefault();
//             alert('Please fix the errors before submitting the form.');
//         }
//     });
// });
})