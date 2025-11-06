<?php
session_start();
include 'users.php';

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (isset($users[$username])) {
        if ($users[$username] == $password) {
            $_SESSION['username'] = $username;
            header("Location: dashboard.php");
            exit();
        } else {
            $error = "Password yang dimasukkan salah.";
        }
    } else {
        $error = "Username tidak terdaftar.";
    }
}

include 'header.php';
?>

<div class="login-box">
    <h3>Login</h3>
    <form method="POST" action="">
        <label>Username:</label><br>
        <input type="text" name="username" required><br>
        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>
        <input type="submit" value="Login">
    </form>
    <p class="error"><?= $error; ?></p>
</div>

<?php include 'footer.php'; ?>
