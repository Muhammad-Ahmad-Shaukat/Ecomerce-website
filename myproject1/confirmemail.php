<?php
include 'php/connection.php';

// Fetch data from database
$sql = "SELECT Brand_Name, Instagram_Link, Facebook_Link, Youtube_link, tictok_link FROM homepage WHERE id=1";
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

// Function to generate OTP
function generateotp() {
    return rand(1000, 9999);
}

// Function to send OTP via email
function sendOTP($to, $subject, $message, $brand) {
    $headers = "From: ahmadshaukat328@gmail.com\r\n";
    if (mail($to, $subject, $message, $headers)) {
        echo "<script>alert('Mail sent successfully');</script>";
        return true;
    } else {
        echo "ERROR sending email"; // Handle error here
        return false;
    }
}

// Function to check OTP
function checkotp($userotp, $otp) {
    if ($userotp == $otp) {
        echo "<script>alert('Email confirmed successfully');</script>";
    } else {
        echo "<script>alert('Incorrect Code Please try again');</script>";
    }
}

// Process form submissions
$emailValue = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['code'])) {
        // Validate email input
        $to = isset($_POST['email']) ? $_POST['email'] : '';
        if (!filter_var($to, FILTER_VALIDATE_EMAIL)) {
            echo "Invalid email address";
            exit; // Exit or handle error accordingly
        }

        $subject = 'Your Verification OTP';
        $otp = generateotp(); // Generate OTP
        $message = "Your OTP is $otp \nDo not share it with anyone else \nRegards, \n$brand";
        
        // Store OTP in session for validation later
        session_start();
        $_SESSION['otp'] = $otp;
        
        // Send OTP via email
        if (sendOTP($to, $subject, $message, $brand)) {
            $emailValue = $to; // Preserve email value on success
        }
    } elseif (isset($_POST['submit'])) {
        // Check OTP entered by user
        session_start();
        $userotp = isset($_POST['codeentered']) ? $_POST['codeentered'] : '';
        $otp = $_SESSION['otp']; // Retrieve OTP from session
        
        // Check OTP validity
        checkotp($userotp, $otp);
        
        // Clear OTP from session after validation
        unset($_SESSION['otp']);
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
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <title>Sign Up</title>
</head>
<body>
<header>
    <h3><?php echo $brand; ?></h3>
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
<div class="emailconfirmationbox">
    <div class="confirmemail">
        <h2>Please Confirm Your Email</h2>
        <form action="" method="post">
            <div class="text_field">
                <p>Email</p>
                <input type="email" id="email" name="email" value="<?php echo $emailValue; ?>" placeholder="Enter Your Email" required>
            </div>
            <button type="submit" name="code">Send Code</button>
        </form>
        <form method="post" action="">
            <div class="text_field">
                <p>Code</p>
                <input type="text" name="codeentered" id="codeentered" placeholder="Enter Your Code" required>
            </div>
            <button type="submit" name="submit">Confirm</button>
        </form>
    </div>
</div>
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
<script src="js/script.js"></script>
</body>
</html>