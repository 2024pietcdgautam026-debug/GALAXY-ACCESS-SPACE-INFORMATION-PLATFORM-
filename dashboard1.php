<?php
session_start();
include "db.php";

if(!isset($_SESSION['user_id'])){
    header("Location: login.html");
    exit();
}

$user_id = $_SESSION['user_id'];
$result = mysqli_query($conn, "SELECT * FROM users WHERE id='$user_id'");
$user = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Galaxy Access | Dashboard</title>
<link rel="stylesheet" href="home.css">
</head>

<body>

<div class="main_container">


<div class="main_header">
    <div class="logo_wrapper">
        <img src="images/logo2.png" width="100" alt="Space Research Logo" />
    </div>

    <div class="navigation_wrapper">
        <a href="dashboard1.php"> Home </a>
        <a href="About.html"> About </a>
        <a href="p.php"> Programmes </a>
        <a href="Exclusive Content.html"> Exclusive Content </a>
        <a href="Space Facts.html"> Space Facts </a>

      
        <a href="#" style="color:#00bfff;">👤 <?php echo $user['name']; ?></a>

        <!-- LOGOUT -->
        <a href="logout.php">Logout</a>
    </div>
</div>


<div class="hero_banner_wrapper">
    <div class="banner_contents">

        <h1 class="sub-heading">🚀 Welcome, <?php echo $user['name']; ?></h1>

        <h1>
            Expand Your Knowledge About Space And Explore The Unknown Facts About Universe
        </h1>

        <p>
            The prime objective of Galaxy Access Organisation is the development and application 
            of space technology for various international needs. You are now logged into the system.
        </p>

       
        <div class="dashboard_stats">
            <div class="stat_card"><h2>🌌 120+</h2><p>Articles</p></div>
            <div class="stat_card"><h2>🚀 25+</h2><p>Programs</p></div>
            <div class="stat_card"><h2>🛰️ Live</h2><p>Updates</p></div>
            <div class="stat_card"><h2>👤 Active</h2><p>Status</p></div>
        </div>

    </div>
</div>

<!-- PROFILE SECTION -->
<div class="sub_banner_wrapper">

    <div class="solar-wind">
        <h2>👤 Your Profile</h2>
        <p><strong>Name:</strong> <?php echo $user['name']; ?></p>
        <p><strong>Email:</strong> <?php echo $user['email']; ?></p>
    </div>

    <div class="geomagnetic-storm">
        <h2>📊 Account Status</h2>
        <p style="color:lightgreen;">🟢 Active User</p>
        <p>Access Level: Standard</p>
    </div>

</div>

<!-- ORIGINAL HOME SECTION (UNCHANGED URLS) -->
<div class="sub_banner_wrapper">

    <div class="solar-wind">
        <h2>solar-wind</h2>
        <p>
            <a href="https://share.google/An4joEgBKnhy7qgaF">
                <h5>learn more</h5>
            </a>
        </p>
    </div>

    <div class="geomagnetic-storm">
        <h2>Geomagnetic Storm</h2>
        <a href="https://www.jpl.nasa.gov/nmp/st5/SCIENCE/disturbances.html">
            <h5>learn more</h5>
        </a>
    </div>

    <div class="image_box">
        <img src="images/Space.png" width="200px" alt="Space Nebula" />
        <p>Space Nebula</p>
    </div>

    <div class="image_box">
        <img src="images/3rd image.png " width="200px" alt="Black Hole Jets in Hercules" />
        <p>Black Hole Jets in Hercules</p>
    </div>

    <div class="image_box">
        <img src="images/3d-space-background-.jpg" width="150px" alt="Space Meteorite" />
        <p>Space Meteorite</p>
    </div>

    <div class="image_box">
        <img src="images/2nd image.png" width="200px" alt="Multiwavelength View of the Milky Way’s Center" />
        <p>A Multiwavelength View of the Milky Way’s Center</p>
    </div>

</div>

<!-- FEATURE SECTION -->
<div class="main_featured_wrapper">
    <div id="featured_image">

        <h1>Space and Universe</h1>

        <img src="images/Space.jpg" alt="Space and Universe Featured Image" />

        <p>
            The universe is everything, including space, matter, energy, time, and all their contents.
        </p>

        <p><strong>Size:</strong> The visible universe is at least 93 billion light years across.</p>
        <p><strong>Expansion:</strong> Expanding since the Big Bang (~13.8 billion years ago).</p>
        <p><strong>Composition:</strong> Radiation, magnetic fields, particles.</p>
        <p><strong>Exploration:</strong> Humans continue to explore despite extreme conditions.</p>
        <p><strong>Theoretical models:</strong> Big Bang, relativity, multiverse.</p>

        <hr>

        <h2 style="color:#00bfff;">Your Account Info</h2>
        <p><strong>Name:</strong> <?php echo $user['name']; ?></p>
        <p><strong>Email:</strong> <?php echo $user['email']; ?></p>

    </div>
</div>

<!-- FOOTER (ORIGINAL LINKS KEPT) -->
<footer>
    <div class="Social_Media">
        <h1>Contacts And Social-Media</h1>

        <img src="images\instagram-logo.png" width="20px" alt=""> 
        <a href="https://www.instagram.com/space_reserch001?igsh=MWpzdGh3M2tyc3l0Nw==" target="_blank"> Instagram </a><br>

        <a href="contact.html"> Contact Us </a>
    </div>

    <p> © 2025 Galaxy Access | Dashboard </p>        
</footer>

</div>

</body>
</html>