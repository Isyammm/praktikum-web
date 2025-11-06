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
    <h3>Makanan Khas</h3>
    <ul>
        <li>Rendang</li>
        <li>Sate Ayam</li>
        <li>Nasi Goreng</li>
        <li>Gado-Gado</li>
    </ul>
</div>

<?php include 'footer.php'; ?>
