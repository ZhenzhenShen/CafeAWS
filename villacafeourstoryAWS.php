<?php
$host = 'securecipher.cg3i8aewd36j.ap-southeast-2.rds.amazonaws.com';
$dbname = 'cafe-Schema';
$user = '******';
$password = '*****';

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
            <!-- <li><a class="active" href="index.php">MENU</a></li>
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

    <section id="ourstory">
        <h1 class="heading1">
            NAIGO'S TOP CAFE
        </h1>
        <h2 class="heading1">
            A memorable dining experience
        </h2>
        <p>Situated at 61 Ottawa Road in the heart of Ngaio, Wellington, our café, Cafe Villa, specializes in serving delectable classic café-style cuisine. Our menu features a variety of options, ranging from hearty breakfasts to delightful brunches and satisfying lunches. As you step into Cafe Villa, you'll be greeted by a warm and inviting atmosphere, setting the stage for an enjoyable dining experience.</p>
        <p>From the first moment you enter, the testimonies of our loyal customers stand as the best testament to our culinary offerings. They consistently praise our food for its delicious flavors and generous portions, creating a reputation that has made Cafe Villa one of the most sought-after cafes in Wellington. Our kitchen operates daily until approximately 2:45 pm, ensuring that you can indulge in our offerings throughout the morning and early afternoon.</p>
        <p>In addition to our extensive breakfast and lunch menu, Cafe Villa takes pride in offering a delightful selection of biscuits and cakes, all made in-house. We are committed to using free-range eggs in all our recipes and menu items, reflecting our dedication to quality and ethical sourcing. Come experience the unique charm of Cafe Villa, where great food meets a welcoming ambiance.</p>
    </section>
    <section id="businesshour">
        <h1 class="heading1">Opening Hours</h1>
      <table>
        <tr>
            <th>Day</th>
            <th>Opening Time</th>
            <th>Closing Time</th>
        </tr>
        <tr>
            <td>Monday</td>
            <td>8:30 AM</td>
            <td>3:30 PM</td>
        </tr>
        <tr>
            <td>Tuesday</td>
            <td>8:30 AM</td>
            <td>3:30 PM</td>
        </tr>
        <tr>
            <td>Wednesday</td>
            <td>8:30 AM</td>
            <td>4:00 PM</td>
        </tr>
        <tr>
            <td>Thursday</td>
            <td>8:30 AM</td>
            <td>4:00 PM</td>
        </tr>
        <tr>
            <td>Friday</td>
            <td>8:30 AM</td>
            <td>4:00 PM</td>
        </tr>
        <tr>
            <td>Saturday</td>
            <td>9:30 AM</td>
            <td>4:00 PM</td>
        </tr>
        <tr>
            <td>Sunday</td>
            <td>9:30 AM</td>
            <td>4:00 PM</td>
       </table>

    </section>
  
    <script src="js/villacafe.js"></script>
</body>
</html>