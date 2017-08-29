
<!DOCTYPE html>
<html>
<head>
<style>
body {
    background-color: TEAL ;
}
</style>
</head>
<body>

<h1>Shopping</h1>
</body>
</html>
<?php foreach ($shop as $product): ?>
 
    <p><br><b><?= $product->Nameshop ?> <b></p>
            <div class="container">
            <div class ="row">
    <?php foreach ($product ->getItems() as $items): ?>
   
             <div class="col-md-4">
             <ul>          
                  <hr><img src="https://image.spreadshirtmedia.com/image-server/v1/productTypes/1130/views/1/appearances/565,width=150,height=150,backgroundColor=ffffff.jpg" alt="google.com"> 
                  <?= $items->category?>
                  <?= $items->itemname?> 
                  <?= $items->itemprice?> 

                    <p><form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                    <!-- Display the payment button. -->
                    <input type="image" name="submit"
                    src="https://www.paypalobjects.com/webstatic/en_US/i/btn/png/btn_addtocart_120x26.png"
                    alt="Add to Cart">
                    <img alt="" width="1" height="1"
                    src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif">
                   </form></p>
                 </ul>
              </div>
  
       <?php endforeach; ?>
    </div>

  <?php endforeach; ?>
</div> 


