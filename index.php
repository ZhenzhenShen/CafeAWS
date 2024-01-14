<?php
$host = 'securecipher.cg3i8aewd36j.ap-southeast-2.rds.amazonaws.com';
$dbname = 'cafe-Schema';
$user = '*****';
$password = '************';

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



        </div>
    </section>

  <section class="slideshow-container">
    <div class="mySlides">
        <div class="text-overlay"><h1>Most Popular Dishes</h1></div>
        <img class="slideImg" src="imgVillaMenu/ss1.jpg" style="width:100%">
        <div class="dish_name">Milk Coffee</div>
    </div>

    <div class="mySlides">
        <div class="text-overlay"><h1>Most Popular Dishes</h1></div>
        <img class="slideImg" src="imgVillaMenu/ss2.jpg" style="width:100%">
        <div class="dish_name">Beef and Brie Burger</div>
    </div>

    <div class="mySlides">
    <div class="text-overlay"><h1>Most Popular Dishes</h1></div>
        <img class="slideImg" src="imgVillaMenu/lambsfry2.png" style="width:100%;">
        <div class="dish_name">Lambs Fry</div>
    </div>

    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </section>

  <section class="menu">
    <a href="#" class="button" onclick="showMenu('kidsmenucontainer')">KIDS</a>
    <a href="#" class="button" id="mainsbutton" onclick="showMenu('mainsmenucontainer')">MAINS</a>
    <a href="#" class="button" onclick="showMenu('drinksmenucontainer')">DRINKS</a>
   </section>

 
     <div class="menucontainer" id="kidsmenucontainer">
       <?php
       //Assuming $conn is your database connection
       $result = $conn->query("SELECT villa_menu.Name AS name, villa_menu.Price AS price, villa_menu.Description AS description,villa_menu.Img AS img FROM villa_menu
       WHERE villa_menu.Type= 'KIDS';"  );
     ?>
     <?php
        foreach ($result as $row) {
     ?>
        <div class="eachdish">
            <img class="dishphoto" src="imgVillaMenu/<?=$row['img']?>" alt="<?=$row['name']?>">
            <p class="dishname"><?= $row['name']?></p>
            <p class="dishprice">$ <?= $row['price']?></p>
            <p class="dishdescription"><?= $row['description']?></p>
        </div>
    <?php
        }
    ?>
     </div>

    <div class="menucontainer active" id="mainsmenucontainer">
      <?php
      // Assuming $conn is your database connection
      $result = $conn->query("SELECT villa_menu.Name AS name, villa_menu.Price AS price, villa_menu.Description AS description,villa_menu.Img AS img FROM villa_menu 
      WHERE villa_menu.Type= 'MAINS';"  );
      ?>
      <?php
          foreach ($result as $row) {
      ?>
      <div class="eachdish">
          <img class="dishphoto" src="imgVillaMenu/<?=$row['img']?>" alt="<?=$row['name']?>">
          <p class="dishname"><?= $row['name']?></p>
          <p class="dishprice">$ <?= $row['price']?></p>
          <p class="dishdescription"><?= $row['description']?></p>
      </div>
      <?php
         }
      ?>
    </div>

    <div class="menucontainer" id="drinkssmenucontainer">
    <?php
    // Assuming $conn is your database connection
    $result = $conn->query("SELECT villa_menu.Name AS name, villa_menu.Price AS price, villa_menu.Description AS description,villa_menu.Img AS img FROM villa_menu
     WHERE villa_menu.Type= 'DRINKS';"  );
    ?>
    <?php
        foreach ($result as $row) {
    ?>
      <div class="eachdish">
          <img class="dishphoto" src="imgVillaMenu/<?=$row['img']?>" alt="<?=$row['name']?>">
          <p class="dishname"><?= $row['name']?></p>
          <p class="dishprice">$ <?= $row['price']?></p>
          <p class="dishdescription"><?= $row['description']?></p>
      </div>
    <?php
       }
    ?>
    </div>

    <script src="js/villacafe.js"></script>
</body>
</html>