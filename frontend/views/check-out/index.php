<?php
/**
 * Created by PhpStorm.
 * User: Elex.Zhuo
 * DateTime: 2018/8/3  17:58
 * By:www.enheng.tech
 */

$this->title = Yii::t('app', 'CheckOut');

?>

<div class="row">
    <div id="contents" role="main" class="main-page  col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="page type-page status-publish hentry">
            <div class="entry-content">
                <div class="woocommerce">

                    <form name="checkout" method="post" class="checkout woocommerce-checkout" action="" enctype="multipart/form-data">

                        <div id="payment" class="woocommerce-checkout-payment">
                            <ul class="wc_payment_methods payment_methods methods">
                                <li class="wc_payment_method payment_method_cheque">
                                    <input id="payment_method_cheque" type="radio" class="input-radio" name="payment_method" value="cheque" checked="checked" data-order_button_text="">
                                    <label for="payment_method_cheque">广东省 深圳市 福田区 嗯哼大厦A座 777 <code>周杰伦 137 2424 8787</code></label>

                                </li>

                                <li class="wc_payment_method payment_method_cod">
                                    <input id="payment_method_cod" type="radio" class="input-radio" name="payment_method" value="cod" data-order_button_text="">
                                    <label for="payment_method_cod">上海市 虹桥机场 A区 客服部 <code>于文文 137 2424 8383</code></label>
                                </li>

                                <li class="wc_payment_method payment_method_paypal">
                                    <input id="payment_method_paypal" type="radio" class="input-radio" name="payment_method" value="paypal" data-order_button_text="Proceed to PayPal">
                                    <label for="payment_method_paypal">广东省 珠海市 香洲区 香宁花园 18栋 888 <code>方文山 137 1212 8787</code>
                                    </label>
                                </li>
                            </ul>
                        </div>

                        <p></p>
                        <h3 id="order_review_heading">订单</h3>

                        <div id="order_review" class="woocommerce-checkout-review-order">
                            <table class="shop_table woocommerce-checkout-review-order-table">
                                <thead>
                                <tr>
                                    <th class="product-name">商品</th>
                                    <th class="product-total">合计</th>
                                </tr>
                                </thead>

                                <tbody>
                                <tr class="cart_item">
                                    <td class="product-name">
                                        单反&nbsp;<strong class="product-quantity">&#215; 1</strong>
                                    </td>

                                    <td class="product-total">
                                        <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">¥</span>300.00</span>
                                    </td>
                                </tr>

                                <tr class="cart_item">
                                    <td class="product-name">
                                        运费&nbsp;<strong class="product-quantity"></strong>
                                    </td>

                                    <td class="product-total">
														<span class="woocommerce-Price-amount amount">
															<span class="woocommerce-Price-currencySymbol">¥</span>5.00
														</span>
                                    </td>
                                </tr>
                                </tbody>

                                <tfoot>
                                <tr class="cart-subtotal">
                                    <th>小计</th>

                                    <td>
														<span class="woocommerce-Price-amount amount">
															<span class="woocommerce-Price-currencySymbol">¥</span>305.00
														</span>
                                    </td>
                                </tr>

                                <tr class="order-total">
                                    <th>总计</th>

                                    <td>
                                        <strong>
															<span class="woocommerce-Price-amount amount">
																<span class="woocommerce-Price-currencySymbol">¥</span>305.00
															</span>
                                        </strong>
                                    </td>
                                </tr>
                                </tfoot>
                            </table>

                            <div id="payment" class="woocommerce-checkout-payment">
                                <ul class="wc_payment_methods payment_methods methods">
                                    <li class="wc_payment_method payment_method_cheque">
                                        <input id="payment_method_cheque" type="radio" class="input-radio" name="payment_method" value="cheque" checked="checked" data-order_button_text="">
                                        <label for="payment_method_cheque">银行卡支付</label>
                                        <div class="payment_box payment_method_cheque">
                                            <p>中国银行，工商银行，建设银行，农业银行，邮政储蓄银行</p>
                                        </div>
                                    </li>

                                    <li class="wc_payment_method payment_method_cod">
                                        <input id="payment_method_cod" type="radio" class="input-radio" name="payment_method" value="cod" data-order_button_text="">
                                        <label for="payment_method_cod">微信支付</label>
                                        <div class="payment_box payment_method_cod" style="display:none;">
                                            <p>扫码</p>
                                        </div>
                                    </li>
                                    <li class="wc_payment_method payment_method_cod">
                                        <input id="payment_method_cod" type="radio" class="input-radio" name="payment_method" value="cod" data-order_button_text="">
                                        <label for="payment_method_cod">支付宝</label>
                                        <div class="payment_box payment_method_cod" style="display:none;">
                                            <p>扫码</p>
                                        </div>
                                    </li>

                                    <li class="wc_payment_method payment_method_paypal">
                                        <input id="payment_method_paypal" type="radio" class="input-radio" name="payment_method" value="paypal" data-order_button_text="Proceed to PayPal">

                                        <label for="payment_method_paypal">
                                            PayPal <img src="images/2003/AM_mc_vs_dc_ae.jpg" alt="PayPal Acceptance Mark">
                                            <a href="https://www.paypal.com/us/webapps/mpp/paypal-popup" class="about_paypal" onClick="javascript:window.open('https://www.paypal.com/us/webapps/mpp/paypal-popup','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;" title="What is PayPal?">什么是PayPal?</a>
                                        </label>

                                        <div class="payment_box payment_method_paypal" style="display:none;">
                                            <p>Pay via PayPal; you can pay with your credit card if you don't have a PayPal account.</p>
                                        </div>
                                    </li>
                                </ul>

                                <div class="form-row place-order">
                                    <noscript>
                                        Since your browser does not support JavaScript, or it is disabled, please ensure you click the &lt;em&gt;Update Totals&lt;/em&gt; button before placing your order. You may be charged more than the amount stated above if you fail to do so.			&lt;br/&gt;&lt;input type="submit" class="button alt" name="woocommerce_checkout_update_totals" value="Update totals" /&gt;
                                    </noscript>
                                    <input type="submit" class="button alt" name="woocommerce_checkout_place_order" id="place_order" value="Place order" data-value="Place order">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

