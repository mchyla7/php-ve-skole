<!DOCTYPE html>
<html lang='cs'>
  <head>
    <title></title>
    <meta charset='utf-8'>
    <link rel="stylesheet" href="sipka.css" type="text/css">
  </head>
  <body>
    <div class="obal">
      <div class="hlavicka">
        Mužeš si změnit hlavičku!
      </div> 
      <!--KONEC HLAVIČKA -->
      
      <div class="pas">
        <div class="levy">
          <?php  require("menu.php");   ?>
        </div> <!-- KONEC LEVY-->
      
      
        <?php
          if (isset($_GET['stranka']))    // Testuju zda jde o prvni zobrazeni, bez kliknutí na menu 
          {
            require($_GET['stranka'].".php"); //  @require($_GET['stranka'].".php"); // Potlačí výpis chyby 
          }
          else
          {
            require("uvod.php");
          }
        ?>
        <div class="obsah">

        </div> <!-- KONEC OBSAH-->
      </div> <!-- KONEC PAS -->

      <div class="paticka">
        A toto je patička
      </div> <!-- KONEC PATIČKA-->
    </div> <!-- KONEC OBAL -->
  </body>
</html>