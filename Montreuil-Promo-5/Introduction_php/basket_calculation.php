<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewreport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <?php
      if (isset($_GET["choice"])) {
        $food=$_GET["choice"];
        $c= count($food);
        $priceExVat= 10;
        $vatRate = 20;
        $vatComponent = ($priceExVat / 100) * $vatRate;
        $endPrice = $priceExVat + $vatComponent;

        for($i=0; $i<$c; $i++) {
          if($food[$i]==1) {
              $endPrice= $endPrice+5;
            echo "You have selected chicken<br>";
          }
          if($food[$i]==2) {
              $endPrice= $endPrice+12;
            echo "You have selected meat<br>";
          }
          if($food[$i]==3) {
              $endPrice= $endPrice+3.99;
            echo "You have selected potato<br>";
          }
        }
        echo "Final Price is:" .number_format($endPrice, 2);
      }
      else {
        echo "Please choose something!";
      }
    ?>
    <h1>Select what you want to buy</h1>
    <form action="" method="get"/>
      <input type="checkbox" name="choice[]" value="1" />Chicken, Price: 5 euros per kg<br/>
      <input type="checkbox" name="choice[]" value="2" />Meat, Price: 12 euros per kg<br/>
      <input type="checkbox" name="choice[]" value="3" />Potato, Price: 3.99 euros per 5kg<br/>

      <input type="submit" value="Order">
    </form>
  </body>
</html>
