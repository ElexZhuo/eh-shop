<?php
/**
 * Created by PhpStorm.
 * User: Elex.Zhuo
 * DateTime: 2018/8/3  17:45
 * By:www.enheng.tech
 */


$this->title = Yii::t('app', 'Cart');

?>
<div class="row">
    <div id="contents" role="main" class="main-page col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="page type-page status-publish hentry">
            <div class="entry-content">
                <div class="entry-summary">
                    <div class="woocommerce">
                        <form action="" method="post">
                            <table class="shop_table shop_table_responsive cart" cellspacing="0">
                                <thead>
                                <tr>
                                    <th class="product-remove">&nbsp;</th>
                                    <th class="product-thumbnail">&nbsp;</th>
                                    <th class="product-name">商品名称</th>
                                    <th class="product-price">价格</th>
                                    <th class="product-quantity">数量</th>
                                    <th class="product-subtotal">合计</th>
                                </tr>
                                </thead>

                                <tbody>
                                <tr class="cart_item">
                                    <td class="product-remove">
                                        <a href="#" class="remove" title="Remove this item"><i class="fa fa-times" aria-hidden="true"></i></a>
                                    </td>

                                    <td class="product-thumbnail">
                                        <a href="simple_product.html">
                                            <img width="180" height="180" src="images/1903/56-180x180.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" alt="" srcset="images/1903/56-180x180.jpg 180w, images/1903/56-150x150.jpg 150w, images/1903/56-300x300.jpg 300w, images/1903/56.jpg 600w" sizes="(max-width: 180px) 100vw, 180px">
                                        </a>
                                    </td>

                                    <td class="product-name" data-title="Product">
                                        <a href="simple_product.html">单反v109</a>
                                    </td>

                                    <td class="product-price" data-title="Price">
                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">¥</span>300.00</span>
                                    </td>

                                    <td class="product-quantity" data-title="Quantity">
                                        <div class="quantity">
                                            <input type="number" step="1" min="0" max="" name="" value="1" title="Qty" class="input-text qty text" size="4" pattern="[0-9]*" inputmode="numeric">
                                        </div>
                                    </td>

                                    <td class="product-subtotal" data-title="Total">
                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">¥</span>300.00</span>
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="6" class="actions">
                                        <div class="coupon">
                                            <label for="coupon_code">优惠码:</label>
                                            <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="Coupon code">
                                            <input type="submit" class="button" name="apply_coupon" value="验证优惠码">
                                        </div>
                                        <input type="submit" class="button" name="update_cart" value="更新购物车">
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </form>

                        <div class="cart-collaterals">
                            <div class="products-wrapper">
                                <div class="cart_totals ">
                                    <h2>总计</h2>

                                    <table cellspacing="0" class="shop_table shop_table_responsive">
                                        <tbody>
                                        <tr class="cart-subtotal">
                                            <th>合计</th>
                                            <td data-title="Subtotal">
                                                <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">¥</span>300.00</span>
                                            </td>
                                        </tr>
                                        <tr class="order-total">
                                            <th>总计</th>
                                            <td data-title="Total">
                                                <strong><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">¥</span>300.00</span></strong>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>

                                    <div class="wc-proceed-to-checkout">
                                        <a href="<?php echo \yii\helpers\Url::to(['check-out/index']) ?>" class="checkout-button button alt wc-forward">下单付款</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>
        </div>
    </div>
</div>

