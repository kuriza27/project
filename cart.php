<?php include_once 'header.php'; ?>
<?php require_once 'controller_cart.php'; ?>

    <div class="container">
        <div class="row">
            <?php $cart = json_decode(getCart(), true); ?>
            <?php if($cart['status']) : ?>
                <table class="table table-bordered table-hover" style="background-color:#FFFFFF;font-size:14px;margin-top:20px;">
                    <thead>
                        <tr style="background-color:#008C94;color:#FFFFFF;font-size:16px;">
                            <th></th>
                            <th>Decription</th>
                            <th class="text-center">Qty</th>
                            <th class="text-center">SubTotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $total = 0; ?>
                        <?php foreach($cart['data'] as $key => $value) : ?>
                        <?php $total += $value['data']['total_price']; ?>
                            <tr>
                                <td class="text-center">
                                    <button class="btn btn-xs btn-danger removeCart" type="button" data-index="<?php echo(trim($key)); ?>" style="font-size:12px;padding:10px;">Remove</button>
                                </td>
                                <td>
                                    <div class="row" style="margin-bottom:5px;">
                                        <strong>
                                            <?php echo(ucwords(strtolower($value['data']['style']))); ?> Wristband
                                        </strong>
                                    </div>
                                    <div class="row" style="margin-bottom:5px;">
                                        <strong>
                                            <?php echo($value['data']['size']); ?> Inch(es)
                                        </strong>
                                    </div>
                                    <div class="row" style="margin-bottom:5px;">
                                        Band Color(s) :
                                        <?php foreach($value['data']['items'] as $ik => $iv) : ?>
                                            <?php foreach($iv['data'] as $ivk => $ivv) : ?>
                                                <div style="margin-bottom:5px;margin-left:20px">
                                                    - Color : <strong><?php echo(ucwords($ivv['name'])); ?></strong>
                                                </div>
                                                <div style="margin-bottom:5px;margin-left:20px">
                                                    &nbsp;&nbsp;Qty : <strong><?php echo($ivv['qty']); ?></strong>
                                                </div>
                                            <?php endforeach; ?>
                                        <?php endforeach; ?>
                                    </div>
                                    <div class="row" style="margin-bottom:5px;">
                                        Font :
                                        <strong>
                                            <?php echo(explode(',', str_replace('"','',$value['data']['font']))[0]); ?>
                                        </strong>
                                    </div>
                                    <?php if($value['data']['text']['type'] == "regular"): ?>
                                        <div class="row" style="margin-bottom:5px;">
                                            Front Message :
                                            <strong>
                                                <?php echo (!empty($value['data']['text']['text_front'])) ? $value['data']['text']['text_front'] : ''; ?>
                                            </strong>
                                        </div>
                                        <div class="row" style="margin-bottom:5px;">
                                            Back Message :
                                            <strong>
                                                <?php echo (!empty($value['data']['text']['text_back'])) ? $value['data']['text']['text_front'] : ''; ?>
                                            </strong>
                                        </div>
                                        <div class="row" style="margin-bottom:5px;">
                                            Clipart Logo :
                                        </div>
                                        <div class="row" style="margin-bottom:5px;margin-left:20px;">
                                            Front Message Start Clipart :
                                            <strong>
                                                <?php echo (!empty($value['data']['icon']['front_start'])) ? strtoupper(str_replace(['assets/images/src/clipart/', '.png'], ['', ''], $value['data']['icon']['front_start'])) : 'none'; ?>
                                            </strong>
                                        </div>
                                        <div class="row" style="margin-bottom:5px;margin-left:20px;">
                                            Front Message End Clipart :
                                            <strong>
                                                <?php echo (!empty($value['data']['icon']['front_end'])) ? strtoupper(str_replace(['assets/images/src/clipart/', '.png'], ['', ''], $value['data']['icon']['front_end'])) : 'none'; ?>
                                            </strong>
                                        </div>
                                        <div class="row" style="margin-bottom:5px;margin-left:20px;">
                                            Back Message Start Clipart :
                                            <strong>
                                                <?php echo (!empty($value['data']['icon']['back_start'])) ? strtoupper(str_replace(['assets/images/src/clipart/', '.png'], ['', ''], $value['data']['icon']['back_start'])) : 'none'; ?>
                                            </strong>
                                        </div>
                                        <div class="row" style="margin-bottom:5px;margin-left:20px;">
                                            Back Message End Clipart :
                                            <strong>
                                                <?php echo (!empty($value['data']['icon']['back_end'])) ? strtoupper(str_replace(['assets/images/src/clipart/', '.png'], ['', ''], $value['data']['icon']['back_end'])) : 'none'; ?>
                                            </strong>
                                        </div>
                                    <?php else: ?>
                                        <div class="row" style="margin-bottom:5px;">
                                            Continous Message :
                                            <strong>
                                                <?php echo (!empty($value['data']['text']['text_continue'])) ? $value['data']['text']['text_continue'] : ''; ?>
                                            </strong>
                                        </div>
                                        <div class="row" style="margin-bottom:5px;margin-left:20px;">
                                            Continous Message Start Clipart :
                                            <strong>
                                                none
                                            </strong>
                                        </div>
                                        <div class="row" style="margin-bottom:5px;margin-left:20px;">
                                            Continous Message End Clipart :
                                            <strong>
                                                none
                                            </strong>
                                        </div>
                                    <?php endif; ?>
                                    <div class="row" style="margin-bottom:5px;">
                                        Inside Message :
                                        <strong>
                                            <?php echo($value['data']['text']['text_inside']); ?>
                                        </strong>
                                    </div>
                                    <div class="row" style="margin-bottom:5px;">
                                        Addons :
                                        <?php if(count($value['data']['add_ons']) > 0): ?>
                                            <?php foreach($value['data']['add_ons'] as $ak => $av) : ?>
                                                <div style="margin-bottom:5px;margin-left:20px">
                                                    <?php if(strtolower($ak)=='key-chain') : ?>
                                                        - <strong><?php echo(ucwords(strtolower($ak))); ?> :</strong> <em><?php echo ($av['all']) ? 'ALL' : $value['data']['total_qty'].' pcs.'; ?></em>
                                                    <?php else : ?>
                                                        - <strong><?php echo(ucwords(strtolower($ak))); ?></strong>
                                                    <?php endif ?>
                                                </div>
                                            <?php endforeach; ?>
                                        <?php else: ?>
                                            <div style="margin-bottom:5px;margin-left:20px">
                                                <strong>none</strong>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="row" style="margin:10px 0;">
                                        <em><u>
                                            NO FREE KEYCHAINS.
                                        </u></em>
                                    </div>
                                    <div class="row" style="margin:10px 0;">
                                        <em><u>
                                            NO FREE WRISTBANDS.
                                        </u></em>
                                    </div>
                                    <div class="row" style="margin-bottom:5px;">
                                        Production Time :
                                        <strong>
                                            <?php echo($value['data']['production_days']); ?> day(s)
                                        </strong>
                                    </div>
                                    <div class="row" style="margin-bottom:5px;">
                                        Shipping Time :
                                        <strong>
                                            <?php echo($value['data']['shipping_days']); ?> day(s)
                                        </strong>
                                    </div>
                                <td class="text-center"><?php echo $value['data']['total_qty']; ?></td>
                                <td class="text-center">$<?php echo number_format($value['data']['total_price'], 2); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr style="background-color:#008C94;color:#FFFFFF;font-size:16px;">
                            <th></th>
                            <th></th>
                            <th></th>
                            <th>
                                <div class="row" style="margin-bottom:5px;">
                                    <div class="col-xs-6" style="padding:0px;">Sub Total :</div>
                                    <div class="col-xs-6" style="padding:0px;">
                                        <strong>
                                            $<?php echo(number_format($total, 2)); ?>
                                        </strong>
                                    </div>
                                </div>
                                <div class="row" style="margin-bottom:5px;">
                                    <div class="col-xs-6" style="padding:0px;">Discount :</div>
                                    <div class="col-xs-6" style="padding:0px;">
                                        <strong>
                                            $0.00
                                        </strong>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6" style="padding:0px;">Grand Total :</div>
                                    <div class="col-xs-6" style="padding:0px;">
                                        <strong>
                                            $<?php echo(number_format($total, 2)); ?>
                                        </strong>
                                    </div>
                                </div>
                            </th>
                        </tr>
                    </tfoot>
                </table>
                <div class="row text-center">
                    <button class="btn btn-xs btn-warning" style="background:#FFC107;">Continue as order</button>
                </div>
            <?php else : ?>
                <div class="container">
                    <div class="row text-center">
                        <!-- <div class="jumbotron"> -->
                            <h1>CART IS EMPTY.</h1>
                            <a href="/homepage.php" class="btn btn-xs btn-danger" style="font-size:14px;padding:10px;">Return to home</a>
                        <!-- </div> -->
                    </div>
                </div>
            <?php endif; ?>
        </div>
        <br/>
        <div class="clearfix"></div>
    </div>
    <!-- end container -->

<?php include_once 'footer.php'; ?>
