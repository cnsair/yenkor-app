<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yenkor Ride</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <div class="container">
        <h1>Yenkor Ride</h1>

        <div id="signup-form" class="form active">
            <h2>Sign Up</h2>
            <input type="text" placeholder="Name" required>
            <input type="email" placeholder="Email" required>
            <input type="password" placeholder="Password" required>
            <input type="submit" value="Sign Up">
            <button class="toggle-btn" onclick="toggleForms()">Already have an account? Login</button>
        </div>

        <div id="login-form" class="form">
            <h2>Login</h2>
            <input type="text" placeholder="Username" required>
            <input type="password" placeholder="Password" required>
            <input type="submit" value="Login">
            <button class="toggle-btn" onclick="toggleForms()">Don't have an account? Sign Up</button>
        </div>
    </div>

    <script>
        function toggleForms() {
            const loginForm = document.getElementById('login-form');
            const signupForm = document.getElementById('signup-form');
            loginForm.classList.toggle('active');
            signupForm.classList.toggle('active');
        }
    </script>

</body>
</html>

/* styles.css */
body {
    font-family: Arial, sans-serif;
    background-color: yellow; /* Yellow background */
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.container {
    width: 300px;
    padding: 20px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

h1 {
    text-align: center;
    color: #333;
}

h2 {
    text-align: center;
    color: #555;
}

input[type="text"], input[type="email"], input[type="password"] {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
}

input[type="submit"] {
    width: 100%;
    padding: 10px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #45a049;
}

button.toggle-btn {
    width: 100%;
    padding: 10px;
    background-color: transparent;
    color: #333;
    border: none;
    cursor: pointer;
    text-decoration: underline;
}

button.toggle-btn:hover {
    color: #000;
}

.form {
    display: none;
}

.form.active {
    display: block;
}

