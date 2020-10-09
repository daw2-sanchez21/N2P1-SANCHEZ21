<?php
session_start();

//Check username and password information
if ($_SESSION['authuser'] != 1){
    echo "Sorry, but you don't have permission to view this page!";
    exit();     
}
?>
<html>
 <head>
  <title>My team Site <?php echo $_GET['favteam'];?></title>
 </head>
 <body>
<?php

echo "Welcome to our site, ";
echo $_SESSION["username"];
echo "! <br/>";

echo "My favorite team is ";
echo $_GET['favteam'];
$teamrate = 5;
echo "My rating for this team is: ";
echo $teamrate;
?>
<html>
 <head>
  <title>Find my Favorite TEAM!</title>
 </head>
 <body>
<?php
$myfavteam = urlencode("Betis CF");
echo "<a href='get1.php?favteam=$myfavteam'>";
echo "Click here to see information about my favorite team!"; 
echo "</a>";
?>
 </body>
</html>


