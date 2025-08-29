<?php 
    session_start();

    if(isset($_SESSION['ticket'])){
        header("Location: http://localhost:3000");
    }


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouTube-Themed Sign-Up Form</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <?php include './boostrap.php' ?>
    <style>
    body {
        font-family: 'Roboto', Arial, sans-serif;
        background-color: #f9f9f9;
        color: #030303;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        transition: all 0.3s ease;
    }

    body.dark-mode {
        background-color: #0f0f0f;
        color: #ffffff;
    }

    .container {
        background-color: #ffffff;
        padding: 24px;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        width: 100%;
        max-width: 400px;
        transition: all 0.3s ease;
    }

    body.dark-mode .container {
        background-color: #181818;
        box-shadow: 0 2px 8px rgba(255, 255, 255, 0.1);
    }

    h2 {
        font-size: 24px;
        font-weight: 500;
        margin-bottom: 16px;
        text-align: center;
        color: #030303;
    }

    body.dark-mode h2 {
        color: #ffffff;
    }

    .form-group {
        margin-bottom: 16px;
    }

    label {
        display: block;
        font-size: 14px;
        font-weight: 500;
        margin-bottom: 8px;
        color: #606060;
    }

    body.dark-mode label {
        color: #aaaaaa;
    }

    input {
        width: 100%;
        padding: 10px;
        font-size: 14px;
        border: 1px solid #d3d3d3;
        border-radius: 4px;
        box-sizing: border-box;
        transition: border-color 0.3s ease;
    }

    body.dark-mode input {
        background-color: #282828;
        border-color: #3d3d3d;
        color: #ffffff;
    }

    input:focus {
        outline: none;
        border-color: #ff0000;
    }

    button {
        width: 100%;
        padding: 12px;
        background-color: #ff0000;
        color: #ffffff;
        font-size: 16px;
        font-weight: 500;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    button:hover {
        background-color: #cc0000;
    }

    .error {
        color: #ff0000;
        font-size: 12px;
        margin-top: 4px;
        display: none;
    }

    .theme-toggle {
        position: absolute;
        top: 20px;
        right: 20px;
        background: none;
        border: none;
        font-size: 24px;
        cursor: pointer;
    }

    body.dark-mode .theme-toggle::before {
        content: '☀️';
    }

    .theme-toggle::before {
        content: '🌙';
    }

    .success-message {
        display: none;
        color: #00cc00;
        font-size: 14px;
        text-align: center;
        margin-top: 16px;
    }
    </style>
</head>

<body>
    <button class="theme-toggle"></button>
    <div class="container">
        <h2>Sign Up</h2>
        <form id="signupForm" method="POST" action="./log-user.php">

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
                <div class="error" id="emailError">Please enter a valid email address</div>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
                <div class="error" id="passwordError">Password must be at least 6 characters long</div>
            </div>

            <?php 
                if(isset($_SESSION['invalid'])){
                    echo "<p class='text-danger fw-semibold'>
                        Invalid Credetials
                    </p>";
                }
                unset($_SESSION['invalid']);
            ?>

            <a href="./sign-up.php" class="text-primary text-end d-block text-decoration-none">
                <span class="text-secondary">New to the app? </span> Signup
            </a>
            <button type="submit">Sign Up</button>
            <div class="success-message" id="successMessage">Sign-up successful!</div>
        </form>
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', () => {
        const form = document.getElementById('signupForm');
        const usernameInput = document.getElementById('username');
        const emailInput = document.getElementById('email');
        const passwordInput = document.getElementById('password');
        const confirmPasswordInput = document.getElementById('confirmPassword');
        const successMessage = document.getElementById('successMessage');
        const themeToggle = document.querySelector('.theme-toggle');

        // Theme toggle functionality
        themeToggle.addEventListener('click', () => {
            document.body.classList.toggle('dark-mode');
        });

        // Form validation
        // form.addEventListener('submit', (e) => {
        //     let isValid = true;

        //     // Reset error messages
        //     document.querySelectorAll('.error').forEach(error => error.style.display = 'none');
        //     successMessage.style.display = 'none';

        //     // Username validation
        //     if (usernameInput.value.length < 3) {
        //         document.getElementById('usernameError').style.display = 'block';
        //         isValid = false;
        //     }

        //     // Email validation
        //     const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        //     if (!emailPattern.test(emailInput.value)) {
        //         document.getElementById('emailError').style.display = 'block';
        //         isValid = false;
        //     }

        //     // Password validation
        //     if (passwordInput.value.length < 6) {
        //         document.getElementById('passwordError').style.display = 'block';
        //         isValid = false;
        //     }

        //     // Confirm password validation
        //     if (passwordInput.value !== confirmPasswordInput.value) {
        //         document.getElementById('confirmPasswordError').style.display = 'block';
        //         isValid = false;
        //     }

        //     // If valid, show success message
        //     if (isValid) {
        //         successMessage.style.display = 'block';
        //         form.reset();
        //     }
        // });
    });
    </script>
</body>

</html>