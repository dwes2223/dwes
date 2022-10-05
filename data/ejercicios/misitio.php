<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <footer>
    <?php  
       
      
       $nombreadmin = "pedro lopez";
       //
       //include_once "footer.php"; 
      // require "footer.php";       
      
      require "footer.php";       
      require_once "footer.php";         
       
       echo "<br> El nombre del admin es :" . $nombreadmin;
       
       
       
     ?>
  </footer>
</body>
</html>