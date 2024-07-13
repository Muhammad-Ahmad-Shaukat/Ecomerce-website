<?php
include 'php/connection.php';

$sql = "SELECT Brand_Name, Instagram_Link, Facebook_Link,Youtube_link,tictok_link FROM homepage WHERE id=1";
$result = mysqli_query($conn, $sql);

if ($row = mysqli_fetch_assoc($result)) {
    $brand = $row['Brand_Name'];
    $instagramlink = $row['Instagram_Link'];
    $facebooklink = $row['Facebook_Link'];
    $youtube = $row['Youtube_link'];
    $tictok = $row['tictok_link'];
} else {
    $brand = "Default Brand"; // Fallback value
    $instagramlink = "#"; // Fallback URL
    $facebooklink = "#"; // Fallback URL
    $youtube = "#"; // Fallback URL
    $tictok = "#"; // Fallback URL
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/home-alt.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Homepage</title>
</head>

<body>
    <header>
        <h3><?php echo"$brand" ?></h3>
        <div class="logo">
            <img src="#" alt="logo">
        </div>
        <div class="searchbar">
            <input type="text" placeholder="Search">
            <button>Search</button>
        </div>
        <nav class="navbar">
            <ul class="navbarlist">
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Products</a></li>
                <li><a href="#">About</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="#">Cart</a></li>
            </ul>
        </nav>
    </header>
    <footer class="footer">
        <div class="footersociallinks">
            <ul class="socialmedia_links">
                <li><a href="<?php echo $instagramlink; ?>" aria-label="Instagram"><i class="fab fa-instagram"></i></a></li>
                <li><a href="<?php echo $facebooklink; ?>" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="<?php echo $youtube; ?>" aria-label="YouTube"><i class="fab fa-youtube"></i></a></li>
                <li><a href="<?php echo $tictok; ?>" aria-label="TikTok"><i class="fab fa-tiktok"></i></a></li>
            </ul>
        </div>
        <button class="footershopnow">Shop Now</button>
        <nav class="menulink">
            <ul class="footermenu">
                <li><a href="#">Home</a></li>
                <li><a href="#">Privacy</a></li>
                <li><a href="#">Return And Refund</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </nav>
        <p class="copyright">Copyright &copy; 2022</p>
    </footer>
</body>
<script src="js/script.js"></script>

</html>
