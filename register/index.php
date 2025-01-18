<?php
include('db/db.php'); // Include the database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form inputs
    $username = $_POST['usr'];
    $password = $_POST['pwd'];

    // Simple validation
    if (!empty($username) && !empty($password)) {
        // Check if the username already exists
        $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $error_message = "Username already exists.";
        } else {
            // Hash the password and insert the user into the database
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
            $stmt->bind_param("ss", $username, $hashed_password);
            if ($stmt->execute()) {
                $success_message = "Registration successful! You can now log in.";
            } else {
                $error_message = "Error registering user.";
            }
        }
    } else {
        $error_message = "Please enter both username and password.";
    }
}
?>

<!-- Registration Form HTML -->
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Register - Arcenix</title>
    <link href="http://www.arcenix.fun/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <script src="https://unpkg.com/htmx.org@1.9.10"></script>
</head>
<body>
    <div class="container mt-5">
        <?php if (isset($error_message)): ?>
            <div class="alert alert-danger"><?= $error_message ?></div>
        <?php endif; ?>
        <?php if (isset($success_message)): ?>
            <div class="alert alert-success"><?= $success_message ?></div>
        <?php endif; ?>

        <div class="card" style="max-width: 20em;">
            <div class="card-body">
                <h5 class="card-title">Register for Arcenix</h5>
                <form method="POST" action="">
                    <input type="text" class="form-control my-2" id="usr" name="usr" placeholder="Username" required>
                    <input type="password" class="form-control my-2" id="pwd" name="pwd" placeholder="Password" required>
                    <button type="submit" class="btn btn-primary w-100 mt-3">Register</button>
                </form>
                <a href="login.php" class="btn btn-secondary w-100 mt-2">Login</a>
            </div>
        </div>
    </div>
</body>
</html>
