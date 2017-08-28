
<!DOCTYPE html>
<html>
<head>
<style>
body {
    background-color: lightblue;
}
</style>
</head>
<body>

<h1>Shopping</h1>
</body>
</html>
<?php foreach ($shop as $product): ?>

    <p><br><b><?= $product->Nameshop ?> <b></p>
    <?php foreach ($product ->getItems() as $items): ?>
   
    <ul>
    <div class="container">
      <div class ="row">
         <div class = "col-md-2">  
        <li> <hr><img src="https://image.spreadshirtmedia.com/image-server/v1/productTypes/1130/views/1/appearances/565,width=150,height=150,backgroundColor=ffffff.jpg" alt="google.com"> <?= $items->category?> </li>
        </div>
         <div class = "col">
        <?= $items->itemname?> 
        </div>
        <div class = "col">
        <?= $items->itemprice?>
        </div>
    </ul>
  
    <?php endforeach; ?>
<?php endforeach; ?>

