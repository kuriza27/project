<?php include_once 'header.php'; ?>
<?php require_once 'controller_cart.php'; ?>

    <div class="container">
        <div class="row">
            <?php $cart = json_decode(getCart(), true); ?>
            <?php if($cart['status']) : ?>
                <?php foreach($cart['data'] as $key => $value) : ?>
                    <?php print_r($value['data']); ?>
                    <button class="removeCart" type="button" data-index="<?php echo(trim($key)); ?>">Remove from cart?</button>
                    <hr/>
                <?php endforeach; ?>
            <?php else : ?>
                CART IS EMPTY.
            <?php endif; ?>
        </div>
        <div class="clearfix"></div>
    </div>
    <!-- end container -->

<?php include_once 'footer.php'; ?>
