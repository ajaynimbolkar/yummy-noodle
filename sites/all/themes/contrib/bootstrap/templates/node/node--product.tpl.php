<!-- PRODUCT DETAIL -->

<section class="product-detail _1 ">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-4 col-md-4">
        <?php print render($content['product:field_gallary']); ?>
      </div>
      <div class="col-xs-12 col-sm-8 col-md-8">
        <div class="product-text">
          <h1 class="name"><?php print $title; ?></h1>
          <div class="product_fav">
            <ul class="review_text">
              <?php if(user_is_logged_in()) :?>
                <li><span class="wishlist"><?php print flag_create_link('bookmarks', $node->nid); ?></span></li>
              <?php else : ?>
              <?php endif; ?>
            </ul>
          </div>
          <span class="product_sku"><?php print render($content['product:sku']); ?></span></span>
          <div class="hr _1"></div>
          <div class="price-box"> 
            <?php for($i=0; $i < count($node->field_product_ref['und']); $i++) : ?>
                <?php $product = commerce_product_load((int)$node->field_product_ref['und'][$i]['product_id']);	?>
                <div class="product-price">
                    <p class="special-price">
                      <span class = "price-label"> Price: </span>
                      <span class="price">
					  	<?php print commerce_currency_format($product->commerce_price['und'][0]['amount'], $product->commerce_price['und'][0]['currency_code']); ?>
                      </span> 
                    </p> 
                </div>
            <?php endfor; ?>
          </div>

          <div class="short-description">
            <?php print render($content['field_product_short_description']); ?>
          </div>

          <div class="hr _1"></div>

          <?php print render($content['field_product_ref']); ?>

        </div>
      </div>
    </div>
  </div>
</section>
<!-- END PRODUCT DETAIL -->
  