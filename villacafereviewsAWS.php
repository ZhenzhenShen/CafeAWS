<?php
$host = 'securecipher.cg3i8aewd36j.ap-southeast-2.rds.amazonaws.com';
$dbname = 'cafe-Schema';
$user = '*****';
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


<section id="reviewmain">
      <div id="showreview" >
         <h1 class="heading1">Reviews from our dear customers</h1>
         <ul>
            <li>
                <p class="left">
                Extensive menu - and between us we had a variety of dishes - all that were good quality and decent size - cafe classics really. Coffee drinkers happy with their brew. Warren and team provided good service.
                </p>
                <p class="right">
                    -Jenny
                </p>
            </li>
            <li>
                <p class="left">
                A really good suburban cafe that has great service and wonderful food. There is an outstanding selection from the cabinet or kitchen menu.
Popular with locals and makes a great cup of coffee. Can eat inside or out. Can recommend avocado and feta, and the salmon and scrabbled eggs
                </p>
                <p class="right">
                    -Mike
                </p>
            </li>
         </ul>
      </div>

<div id="leavereview">
    <h1 class="heading1">Leave a review</h1>
    <form id="reviewForm" action="sendEmail.php" method="post">
        <div class="review-section">
            <label for="name">Name:</label>
            <br>
            <input type="text" id="name" name="name" placeholder="Enter your name">
        </div>
        
        <div class="review-section">
            <label for="phonenumber">Phone Number:</label>
            <br>
            <input type="text" id="phonenumber" name="phonenumber" placeholder="Enter your phone number">
        </div>
        
        <div class="review-section">
            <label for="email">Email:</label>
            <br>
            <input type="text" id="email" name="email" placeholder="Enter your email">
        </div>

        <div class="review-section">
            <label for="reviewbox">Review:</label>
            <br>
            <textarea id="reviewbox" name="reviewbox" placeholder="We value your reviews"></textarea>
        </div>

        <button type="submit" class="button">Submit</button>
    </form>
</div>

</section>
    <script>
    document.getElementById('reviewForm').onsubmit = function(event) {
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var phoneNumber = document.getElementById('phonenumber').value;
    var review = document.getElementById('reviewbox').value;

    var errors = [];

    if (name === '') {
        errors.push("Name is required.");
    }

    if (!validateEmail(email)) {
        errors.push("Invalid email format.");
    }

    if (!/^\d{1,15}$/.test(phoneNumber)) {
        errors.push("Invalid phone number. Phone number should be up to 15 digits.");
    }    
    
    if (review === '') {
        errors.push("Review cannot be empty.");
    }

    if (errors.length > 0) {
        var errorMessages = errors.join('\n');
        alert(errorMessages);
        return false; // 阻止表单提交
    }

    alert('Thank you for your review');
    return true; // 允许表单提交
};

function validateEmail(email) {
    var pattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return pattern.test(email);
}
    </script>
    <script src="js/villacafe.js"></script>
</body>
</html>