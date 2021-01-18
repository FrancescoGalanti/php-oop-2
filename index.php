<?php include_once __DIR__ . "/classes/Ecomerce.php" ?>
<?php include_once __DIR__ . "/classes/Product.php" ?>
<?php include_once __DIR__ . "/classes/Result.php" ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
      <!-- header -->
      <header>
        <?php
         // testing first class
      /*   $Ecomerce = new Ecomerce("computer","8,70","2","Francesco");
        var_dump($Ecomerce); */
         
         // testic class with extension
          
        $Product = new Product("computer","9","6","Francesco","ax");
       /*  var_dump($Product);  */
        // testing Function
      /*   echo $Product->PrintName();
        echo $Product->PrintPrice();
        echo $Product->PrintLasting();
        echo $Product->PrintUser(); */

       /*  echo $Product->Discount(); */
       

       // testing Function protected
        $Result = new Result("computer","9","4","Francesco",);
       

      /*  echo $Result->GetOut();  */
        ?>

        <div>
           <ul>
              <li>name: <?php  echo $Product->PrintName(); ?></li>
           </ul>
           <ul>
              <li>Price: <?php  echo $Product->PrintPrice(); ?></li>
           </ul>
           <ul>
              <li>Lasting : <?php  echo $Product->PrintLasting(); ?></li>
           </ul>
           <ul>
              <li>User : <?php  echo $Product->PrintUser(); ?></li>
           </ul>
           <ul>
             <li>Product: <?php  echo $Product->PrintProduct(); ?></li>
           </ul>
        </div>
      </header>
     <!-- main -->
      <main>
         <div>
            Il prezzo finale e scontato perche il prodotto dura poco : <?php echo $Result->GetOut(); ?>
         </div>
      </main>
       <!-- footer -->
      <footer>
      
      </footer>
</body>
</html>