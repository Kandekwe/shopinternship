<?php foreach ($shop as $product): ?>

    <p><br><b><?= $product->Nameshop ?> <b></p>
    <?php foreach ($product ->getItems() as $items): ?>
        
    <ul>
        <li><hr>><?= $items->itemname ?> </li>
        <li><?= $items->itemprice ?></li>
        <li><?= $items->category?></li>
        
    </ul>
    <?php endforeach; ?>
<?php endforeach; ?>
