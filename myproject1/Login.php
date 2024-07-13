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
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $username = $conn->real_escape_string($username);
    $password = $conn->real_escape_string($password);//

    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['username'] = $username;
        header("Location: index.php");
    } else {
        echo "Invalid username or password";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href='https://unpkg.com/css.gg@2.0.0/icons/css/home-alt.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>login</title>
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
    <body>
        <div class="Welcome">
            <h2>Welcome Back</h2>
        </div>
        <div class="loginbox">
            <div class="loginform">
                <h2>Login</h2>
                <form action="login.php" method="post">
                    <div class="text_field">
                        <p>Username:</p>
                        <input type="text" name="username" placeholder="Enter Username" required>
                    </div>
                    <div class="text_field">
                        <p>Password:</p>
                        <input type="password" name="password" placeholder="Enter password" required>
                    </div>
                <input type="submit" id="login_button" value="Login">
                </form>
                <div class="signup_q">
                    <a href="#">Forgot Password</a>
                    <form action="signup.php">
                        <button>Sign Up</button>
                    </form>
                </div>
            </div>
        </div>
        
    </body>
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
</html>