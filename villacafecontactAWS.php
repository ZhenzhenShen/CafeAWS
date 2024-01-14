<?php
$host = 'securecipher.cg3i8aewd36j.ap-southeast-2.rds.amazonaws.com';
$dbname = 'cafe-Schema';
$user = 'admin';
$password = 'brian20181031';

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="villacafe.css" type="text/css"/>
    <title>Cafe Villa</title>
</head>
<body>
    <section id="header">
        <a href="#"><img src="imgVillaMenu/logo1.png" class="logo" alt="logo"></a>

        <h1 class = "shopname">Cafe Villa</h1>

        <div>

        <ul id="navbar">
          <li><a id="menuBtn" class="buttonNav" href="index.php">MENU</a></li>
          <li><a id="ourStoryBtn" class="buttonNav" href="villacafeourstoryAWS.php">OUR STORY</a></li>
          <li><a id="contactBtn" class="buttonNav" href="villacafecontactAWS.php">CONTACT</a></li>
          <li><a id="reviewsBtn" class="buttonNav" href="villacafereviewsAWS.php">REVIEWS</a></li>
       </ul>
            <!-- <ul id="navbar">
                <li><a class="active" href="index.php">MENU</a></li>
                <li><a href="villacafeourstoryAWS.php">OUR STORY</a></li>
                <li><a href="villacafecontactAWS.php">CONTACT</a></li>
                <li><a href="villacafereviewsAWS.php">REVIEWS</a></li>
            </ul> -->
        </div>
    </section>

    <section class="toppicture">   
        <img src="imgVillaMenu/ss1.jpg" style="width:100%">
        <a href="index.php" class="button">CHECK OUT OUR MENU</a>
    </section>

    <section class="contactmain">
    <div id="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11999.178561794462!2d174.774423!3d-41.248031!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d38ae021e9fde63%3A0x7e428be96eb1f47f!2sCafe%20Villa!5e0!3m2!1sen!2snz!4v1701472387839!5m2!1sen!2snz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <div id="contactdetails">
    <h1 class="heading1">Contact Us</h1>
    <p><em>61, Ottawa Road Ngaio, Wellington</em></p>
    <p>wojo@cafevilla.co.nz</p>
    <p>Tel：04 479 5707</p>
    </div>
   
</section>
  
    <script src="js/villacafe.js"></script>
</body>
</html>