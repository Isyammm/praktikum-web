<?php
// Mulai session hanya jika belum aktif
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Modul 5 - Session & Cookie</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
        }
        header {
            background-color: #333;
            color: white;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        header h2 {
            margin: 0;
        }
        header .hi {
            font-weight: bold;
        }
        nav {
            background-color: #f0f0f0;
            width: 200px;
            height: calc(100vh - 140px);
            float: left;
            border-right: 1px solid #ccc;
            box-sizing: border-box;
        }
        nav a {
            display: block;
            padding: 12px;
            text-decoration: none;
            color: black;
            border-bottom: 1px solid #ccc;
        }
        nav a:hover {
            background-color: #ddd;
        }
        .content {
            margin-left: 200px;
            padding: 40px;
            background-color: white;
            min-height: calc(100vh - 140px);
        }
        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
            position: relative;
            clear: both;
        }
        .login-box {
            width: 300px;
            margin: 60px auto;
            background: white;
            padding: 25px;
            border: 1px solid #ccc;
            border-radius: 8px;
            text-align: center;
        }
        .login-box input {
            width: 90%;
            padding: 8px;
            margin: 8px 0;
        }
        .login-box input[type="submit"] {
            cursor: pointer;
            background-color: #f0f0f0;
            border: 1px solid #ccc;
            font-weight: bold;
        }
        .login-box input[type="submit"]:hover {
            background-color: #ddd;
        }
        .error {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
<header>
    <h2>Website Praktikum Modul 5</h2>
    <?php if (isset($_SESSION['username'])): ?>
        <div class="hi">Hi, <?= $_SESSION['username']; ?></div>
    <?php endif; ?>
</header>
