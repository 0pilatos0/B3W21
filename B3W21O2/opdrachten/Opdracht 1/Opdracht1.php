<?php
   echo '<div class="tijdstip">';
   date_default_timezone_set("Europe/Amsterdam");
   echo "The time is " . date("h:i:s");   
   $tijd =  date("h:i:s");
   echo "<br>";
   if ($tijd > "06:00:00" && $tijd < "12:00:00"){
      $profpic = "morning.png";
   }
   elseif ($tijd > "12:00:00" && $tijd < "18:00:00"){
      $profpic = "afternoon.png";
   }
   elseif ($tijd > "18:00:00" && $tijd < "24:00:00"){
      $profpic = "evening.png";
   }
   elseif ($tijd > "00:00:00" && $tijd < "06:00:00"){
      $profpic = "night.png";
   }
   echo "</div>";
?>
<html>
 <head>
  <title>PHP Test</title>
   <link rel="stylesheet" href="style.css">
   <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet"> 
  <style type="text/css">
      body {
         background-image: url('<?php echo $profpic;?>');
      }
</style>
 </head>
 <body>
 </body>
</html>