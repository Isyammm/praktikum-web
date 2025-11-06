<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}
include 'header.php';
?>

<nav>
    <a href="dashboard.php">Dashboard</a>
    <a href="makanan.php">Makanan Khas</a>
    <a href="logout.php">Keluar</a>
</nav>

<div class="content">
    <h3>Dashboard</h3>
    <p>Anda telah berhasil login.</p>
</div>

<?php include 'footer.php'; ?>
