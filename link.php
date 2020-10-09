<html>
 <head>
  <title>Find my Favorite Team!</title>
 </head>
 <body>
<?php
$myfavteam= urlencode("Betis CF");  
echo "<a href='get1.php?favteam=$myfavteam'>";
echo "Click here to see information about my favorite team!"; 
echo "</a>";
?>
 </body>
</html>
