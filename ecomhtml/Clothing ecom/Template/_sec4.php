
    <!--4th section - featured products - men-->

<?php

$product = "";

// $product_shuffle = $product->getData();



?>


    <section id="featured" class="my-5 pb-5">


      <div class="container text-center mt-5 py-5">
        <h3>Men's Collection</h3>
        <hr class="mx-auto">
        <p>Check out our new trending items</p>
      </div>

      <div class="row mx-auto container-fluid">

      <?php foreach($product_shuffle as $item)  {?>

        <div class="product text-center col-lg-3 col-md-4 col-12">
          <img class="img-fluid mb-3" src= "<?php echo $item['item_img']?? "eimages/f4.jpg";  ?>"  alt="">
          <h5 class="p-name"><?php echo $item['item_name']?? 'Unknown'; ?></h5>
          <h4 class="p-price">$<?php echo $item['item_price']?? 'O'; ?></h4>
          <button class="buy-button">Buy Now</button>
        </div>

        

        


      <?php }?>

      </div>
    </section>