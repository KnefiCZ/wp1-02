<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lol</title>
  </head>
  <body>
    <h1>Početní úkony</h1>
      <?php
          $a = 9 ;
          $b = 9 ;
          $soucin = $a*$b ;
          $podil = $a/$b ;
          $soucet = $a+$b ;
          $rozdil = $a-$b ;


       ?>

       <p>  a = <?php echo"$a"
          ?>
       </p>

       <p> b = <?php echo"$b"
          ?>
       </p>
       <p>  <?php  echo"Součin : $a * $b = $soucin"
            ?>
       </p>

       <p>  <?php echo"Podíl : $a / $b = $podil"
          ?>
       </p>

       <p>  <?php echo"Součet : $a + $b = $soucet"
          ?>
       </p>

       <p>  <?php echo"Rozdíl : $a - $b = $rozdil"
          ?>
       </p>






  </body>
</html>
