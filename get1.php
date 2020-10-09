<html>
 <head>
  <title>My football team <?php echo $_GET['favteam'];?></title>
 </head>
 <body>
<?php
echo "My favorite football team is ";
echo $_GET['favteam'];
$teamrate = 5;
echo "My rating for this team is: ";
echo $teamrate;
?>
 </body>
</html>

