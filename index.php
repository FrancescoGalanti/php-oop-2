<?php include_once __DIR__ . "/classes/Ecomerce.php" ?>
<?php include_once __DIR__ . "/classes/Product.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      <!-- header -->
      <header>
        <?php
         // testing first class
      /*   $Ecomerce = new Ecomerce("computer","8,70","2","Francesco");
        var_dump($Ecomerce); */
         
         // testic class with extension
          
        $Product = new Product("computer","8,70","2","Francesco","ax");
        var_dump($Product); 
        // testing Function
        echo $Product->PrintName();
        echo $Product->PrintPrice();
        echo $Product->PrintLasting();
        echo $Product->PrintUser();

        ?>
      </header>
     <!-- main -->
      <main>
      
      </main>
       <!-- footer -->
      <footer>
      
      </footer>
</body>
</html>