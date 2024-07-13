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
    <script src="https://smtpjs.com/v3/smtp.js"></script>
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

    <body>
        <div class="slider">
            <div class="slider_img">
                <img src="images/img1.jpg" class="sliderimg" alt="slider image 1">
                <img src="images/img2.jpg" class="sliderimg" alt="slider image 2">
                <img src="images/img3.jpg" class="sliderimg" alt="slider image 3">
            </div>
            <button class="prev" onclick="prevSlide()">&#10094;</button>
            <button class="next" onclick="nextSlide()">&#10095;</button>
        </div>

        <div class="bestsellercatagory">
            <h2>OUR BEST SELLERS</h2>
            <ul class="productlist_bestseller">
                <li>
                    <div>
                        <img src="images/ba1.jpg" alt="Product"></img>
                        <p>Product</p>
                        <button>Buy Now</button>
                    </div>
                </li>
                <li>
                    <div>
                        <img src="images/ba1.jpg" alt="Product"></img>
                        <p>Product</p>
                        <button>Buy Now</button>
                    </div>
                </li>
                <li>
                    <div>
                        <img src="images/ba1.jpg" alt="Product"></img>
                        <p>Product</p>
                        <button>Buy Now</button>
                    </div>
                </li>
                <li>
                    <div>
                        <img src="images/ba1.jpg" alt="Product"></img>
                        <p>Product</p>
                        <button>Buy Now</button>
                    </div>
                </li>
                <li>
                    <div>
                        <img src="images/ba1.jpg" alt="Product"></img>
                        <p>Product</p>
                        <button>Buy Now</button>
                    </div>
                </li>
            </ul>
        </div>
        <div class="catalog1">
            <h2 class="CatahgoryName">CatahgoryName</h2>
            <p class="catagorydiscription">Consequat dolor eiusmod mollit minim voluptate voluptate labore enim
                voluptate ullamco minim consectetur incididunt duis. Anim ipsum proident esse veniam. Veniam consequat
                nulla commodo minim ipsum commodo eiusmod irure labore officia quis consequat ullamco. Voluptate ad id
                non mollit exercitation in laborum. Esse irure laboris pariatur proident exercitation nisi est amet.
                Consequat ad do sunt laborum tempor laborum veniam pariatur adipisicing officia. Esse id laborum nulla
                est magna magna laboris cillum dolor pariatur irure dolore aliquip et.</p>
            <ul class="caltalog1_products">
                <li>
                    <img src="images/img2.jpg" alt="Product"></img>
                    <p>Product</p>
                    <button>Buy Now</button>
                </li>
                <li>
                    <img src="images/img2.jpg" alt="Product"></img>
                    <p>Product</p>
                    <button>Buy Now</button>
                </li>
                <li>
                    <img src="images/img2.jpg" alt="Product"></img>
                    <p>Product</p>
                    <button>Buy Now</button>
                </li>
                <li>
                    <img src="images/img2.jpg" alt="Product"></img>
                    <p>Product</p>
                    <button>Buy Now</button>
                </li>
                <li>
                    <img src="images/img2.jpg" alt="Product"></img>
                    <p>Product</p>
                    <button>Buy Now</button>
                </li>
            </ul>
        </div>
        <div class="bannerimg">
            <img src="images/img1.jpg" alt="Banner">
            <h2 class="brandname">Name</h2>
            <h3 class="tagline">Et adipisicing minim labore anim irure enim ut.</h3>
            <button>Buy Now</button>
        </div>
        <div class="brandawareness">
            <h2 class="brandname_inpara">Brand Name</h2>
            <h4 class="tag_line">Do laborum culpa dolor consectetur elit mollit exercitation reprehenderit. Irure esse
                reprehenderit sint veniam do deserunt cillum nisi dolore. Deserunt sint amet deserunt labore aliquip
                pariatur voluptate aute est cillum in. Enim culpa est qui qui consequat laborum. In nulla aliquip qui
                sit deserunt quis amet aliquip mollit. Laboris velit duis nostrud ut sit veniam amet excepteur occaecat
                est excepteur id. Do cupidatat do ea tempor id ad voluptate ad incididunt dolor consectetur.</h4>
        </div>
        <div class="allcatalogs">
            <h2>Check Our Catalogs</h2>
            <ul class="catalogs_list">
                <li class="catagorypack">
                    <img src="images/pd1.jpg" alt="catagory">
                    <p>catagory</p>
                    <button>Buy Now</button>
                </li>
                <li>
                    <img src="images/pd1.jpg" alt="catagory">
                    <p>catagory</p>
                    <button>Buy Now</button>
                </li>
                <li>
                    <img src="images/pd1.jpg" alt="catagory">
                    <p>catagory</p>
                    <button>Buy Now</button>
                </li>
                <li>
                    <img src="images/pd1.jpg" alt="catagory">
                    <p>catagory</p>
                    <button>Buy Now</button>
                </li>
                <li>
                    <img src="images/pd1.jpg" alt="catagory">
                    <p>catagory</p>
                    <button>Buy Now</button>
                </li>
            </ul>
        </div>
        <div class="mapframe">
            <p><iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d897952.736225874!2d76.32174082654473!3d28.460632000000015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d1939ee0b5733%3A0x2b709b3cb840c0d6!2sGoogle%20Signature%20Tower%20A!5e0!3m2!1sen!2s!4v1719596513834!5m2!1sen!2s"
                    width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe></p>
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
<script src="js/script.js"></script>

</html>