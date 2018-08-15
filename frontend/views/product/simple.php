<?php
/**
 * Created by PhpStorm.
 * User: Elex.Zhuo
 * DateTime: 2018/8/3  18:58
 * By:www.enheng.tech
 */
$this->title = Yii::t('app', 'Simple');

?>

<?php
$routeUrl = <<< js
    function addtocart() {
        alert("cc");
      // document.add.action = "{:U('cart/add')}";
      // document.add.submit();
    }
    function addtoorder() {
         alert("cc");
      // document.add.action = "product/addtoorder";
      // document.add.submit();
    }
js;
$this->registerJs($routeUrl);
?>

<div class="row">
    <div id="contents-detail" class="content col-lg-12 col-md-12 col-sm-12" role="main">
        <div id="container">
            <div id="content" role="main">
                <div class="single-product clearfix">
                    <div id="product-01" class="product type-product status-publish has-post-thumbnail product_cat-accessories product_brand-global-voices first outofstock featured shipping-taxable purchasable product-type-simple">
                        <div class="product_detail row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 clear_xs">
                                <div class="slider_img_productd">
                                    <!-- woocommerce_show_product_images -->
                                    <div id="product_img_01" class="product-images loading" data-rtl="false">
                                        <div class="product-images-container clearfix thumbnail-bottom">
                                            <!-- Image Slider -->
                                            <div class="slider product-responsive">
                                                <?php
                                                $array = json_decode($model_attr[0]->pictures);

                                                foreach ($array as $item):
                                                    ?>
                                                <div class="item-img-slider">
                                                    <div class="images">

                                                        <a href="<?php echo IMG_PRODUCT_SAVE_PATH.$item; ?>" data-rel="prettyPhoto[product-gallery]" class="zoom">
                                                            <img width="600" height="600" src="<?php echo IMG_PRODUCT_SAVE_PATH.$item; ?>" class="attachment-shop_single size-shop_single" alt="" >
                                                        </a>
                                                    </div>
                                                </div>
                                                <?php endforeach; ?>
                                             </div>

                                            <!-- Thumbnail Slider -->
                                            <div class="slider product-responsive-thumbnail" id="product_thumbnail_247">
                                                <?php
                                                foreach ($array as $item):
                                                ?>
                                                <div class="item-thumbnail-product">
                                                    <div class="thumbnail-wrapper">
                                                        <img width="180" height="180" src="<?php echo IMG_PRODUCT_SAVE_PATH.$item; ?>" class="attachment-shop_thumbnail size-shop_thumbnail" alt="" >
                                                    </div>
                                                </div>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 clear_xs">
                                <form name="add" method="post" enctype="multipart/form-data">
                                <div class="content_product_detail">
                                    <h1 class="product_title entry-title"><?= $model->product_title ?></h1>

                                    <div class="reviews-content">
                                        <div class="star"></div>
                                        <a href="#reviews" class="woocommerce-review-link" rel="nofollow"><span class="count">0</span> 评论 </a>
                                    </div>

                                    <div>
                                        <p class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol"></span><?= $model_attr[0]->price ?></span></p>
                                    </div>

                                    <div class="product-info clearfix">
                                        <div class="product-stock pull-left out-stock">
                                            <span>范围</span>
                                        </div>
                                    </div>

                                    <div class="description" itemprop="description">
                                        <p>送货范围仅限汕头、云浮、汕尾、揭阳、中山、珠海、东莞、梅州、茂名、清远、广州、湛江、惠州、深圳、佛山、阳江、河源、肇庆、韶关、江门、潮州地区(生鲜类别仅限部分地区).</p>
                                    </div>

                                    <div class="social-share">
                                        <div class="title-share">属性</div>
                                        <div class="wrap-content">
                                            <a href="#" onClick="" class="active">XX</a>
                                            <a href="#" onClick="">XX</a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <a href="<?php echo yii\helpers\Url::to(['cart/index']) ?>" class="btn btn-primary" >加入购物车</a>
                                        <a href="<?php echo yii\helpers\Url::to(['check-out/index']) ?>" class="btn btn-primary" >直接购买</a>
                                    </div>
                                    <div class="social-share">
                                        <div class="title-share">分享</div>
                                        <div class="wrap-content">
                                            <a href="#" onClick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-facebook"></i></a>
                                            <a href="http://twitter.com/" onClick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-twitter"></i></a>
                                            <a href="#" onClick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-google-plus"></i></a>
                                            <a href="#"><i class="fa fa-dribbble"></i></a>
                                            <a href="#"><i class="fa fa-instagram"></i></a>
                                        </div>
                                    </div>

                                </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="tabs clearfix">
                        <div class="tabbable">
                            <ul class="nav nav-tabs">
                                <li class="description_tab active">
                                    <a href="#tab-description" data-toggle="tab">商品描述</a>
                                </li>

                                <li class="reviews_tab ">
                                    <a href="#tab-reviews" data-toggle="tab">评论(0)</a>
                                </li>
                            </ul>

                            <div class="clear"></div>

                            <div class=" tab-content">
                                <div class="tab-pane active" id="tab-description">
                                    <h2>商品描述</h2>
                                    <?= $model->product_desc ?>
                                </div>

                                <div class="tab-pane " id="tab-reviews">
                                    <div id="reviews">
                                        <div id="comments">
                                            <h2>评论</h2>
                                            <p class="woocommerce-noreviews">暂无评论.</p>
                                        </div>

                                        <div id="review_form_wrapper">
                                            <div id="review_form">
                                                <div id="respond" class="comment-respond">
                                                    <h3 id="reply-title" class="comment-reply-title">

                                                        <small><a rel="nofollow" id="cancel-comment-reply-link" href="#" style="display:none;">取消评论</a></small>
                                                    </h3>

                                                    <form action="" method="post" id="commentform" class="comment-form">
                                                        <p class="comment-form-rating">
                                                            <label for="rating">分数</label>
                                                            <select name="rating" id="rating">
                                                                <option value="">评分..</option>
                                                                <option value="5">非常满意</option>
                                                                <option value="4">满意</option>
                                                                <option value="3">一般</option>
                                                                <option value="2">不满意</option>
                                                                <option value="1">非常不满意</option>
                                                            </select>
                                                        </p>

                                                        <p class="comment-form-comment">
                                                            <label for="comment">评论</label>
                                                            <textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>
                                                        </p>

                                                        <p class="form-submit">
                                                            <input name="submit" type="submit" id="submit" class="submit" value="提交">
                                                        </p>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bottom-single-product theme-clearfix">
                        <div class="widget-1 widget-first widget sw_related_upsell_widget-2 sw_related_upsell_widget" data-scroll-reveal="enter bottom move 20px wait 0.2s">
                            <div class="widget-inner">
                                <div id="slider_sw_related_upsell_widget-2" class="sw-woo-container-slider related-products responsive-slider clearfix loading" data-lg="4" data-md="3" data-sm="2" data-xs="2" data-mobile="1" data-speed="1000" data-scroll="1" data-interval="5000" data-autoplay="false">
                                    <div class="resp-slider-container">
                                        <div class="box-slider-title">
                                            <h2><span>相似商品推荐</span></h2>
                                        </div>

                                        <div class="slider responsive">
                                            <div class="item ">
                                                <div class="item-wrap">
                                                    <div class="item-detail">
                                                        <div class="item-img products-thumb">
                                                            <a href="simple_product.html">
                                                                <div class="product-thumb-hover">
                                                                    <img width="300" height="300" src="images/1903/49-300x300.jpg" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" srcset="images/1903/49-300x300.jpg 300w, images/1903/49-150x150.jpg 150w, images/1903/49-180x180.jpg 180w, images/1903/49.jpg 600w" sizes="(max-width: 300px) 100vw, 300px">
                                                                </div>
                                                            </a>

                                                            <!-- add to cart, wishlist, compare -->
                                                            <div class="item-bottom clearfix">
                                                                <a rel="nofollow" href="#" class="button product_type_simple add_to_cart_button ajax_add_to_cart" title="Add to Cart">Add to cart</a>

                                                                <a href="javascript:void(0)" class="compare button" rel="nofollow" title="Add to Compare">Compare</a>

                                                                <div class="yith-wcwl-add-to-wishlist add-to-wishlist-248">
                                                                    <div class="yith-wcwl-add-button show" style="display:block">
                                                                        <a href="#" rel="nofollow" class="add_to_wishlist">Add to Wishlist</a>
                                                                        <img src="images/wpspin_light.gif" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden" />
                                                                    </div>

                                                                    <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
                                                                        <span class="feedback">Product added!</span>
                                                                        <a href="#" rel="nofollow">Browse Wishlist</a>
                                                                    </div>

                                                                    <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
                                                                        <span class="feedback">The product is already in the wishlist!</span>
                                                                        <a href="#" rel="nofollow">Browse Wishlist</a>
                                                                    </div>

                                                                    <div style="clear:both"></div>
                                                                    <div class="yith-wcwl-wishlistaddresponse"></div>
                                                                </div>

                                                                <div class="clear"></div>
                                                                <a href="#" data-fancybox-type="ajax" class="sm_quickview_handler-list fancybox fancybox.ajax">Quick View </a>
                                                            </div>
                                                        </div>

                                                        <div class="item-content">
                                                            <!-- rating  -->
                                                            <div class="reviews-content">
                                                                <div class="star"></div>
                                                                <div class="item-number-rating">
                                                                    0 Review(s)
                                                                </div>
                                                            </div>
                                                            <!-- end rating  -->

                                                            <h4><a href="simple_product.html" title="turkey qui">Turkey Qui</a></h4>

                                                            <!-- price -->
                                                            <div class="item-price">
																			<span>
																				<span class="woocommerce-Price-amount amount">
																					<span class="woocommerce-Price-currencySymbol">¥</span>300.00
																				</span>
																			</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="item ">
                                                <div class="item-wrap">
                                                    <div class="item-detail">
                                                        <div class="item-img products-thumb">
                                                            <span class="onsale">Sale!</span>
                                                            <a href="simple_product.html">
                                                                <div class="product-thumb-hover">
                                                                    <img width="300" height="300" src="images/1903/39-300x300.jpg" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" srcset="images/1903/39-300x300.jpg 300w, images/1903/39-150x150.jpg 150w, images/1903/39-180x180.jpg 180w, images/1903/39.jpg 600w" sizes="(max-width: 300px) 100vw, 300px">
                                                                </div>
                                                            </a>

                                                            <!-- add to cart, wishlist, compare -->
                                                            <div class="item-bottom clearfix">
                                                                <a rel="nofollow" href="#" class="button product_type_simple add_to_cart_button ajax_add_to_cart" title="Add to Cart">Add to cart</a>

                                                                <a href="javascript:void(0)" class="compare button" rel="nofollow" title="Add to Compare">Compare</a>

                                                                <div class="yith-wcwl-add-to-wishlist add-to-wishlist-248">
                                                                    <div class="yith-wcwl-add-button show" style="display:block">
                                                                        <a href="#" rel="nofollow" class="add_to_wishlist">Add to Wishlist</a>
                                                                        <img src="images/wpspin_light.gif" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden" />
                                                                    </div>

                                                                    <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
                                                                        <span class="feedback">Product added!</span>
                                                                        <a href="#" rel="nofollow">Browse Wishlist</a>
                                                                    </div>

                                                                    <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
                                                                        <span class="feedback">The product is already in the wishlist!</span>
                                                                        <a href="#" rel="nofollow">Browse Wishlist</a>
                                                                    </div>

                                                                    <div style="clear:both"></div>
                                                                    <div class="yith-wcwl-wishlistaddresponse"></div>
                                                                </div>

                                                                <div class="clear"></div>
                                                                <a href="#" data-fancybox-type="ajax" class="sm_quickview_handler-list fancybox fancybox.ajax">Quick View </a>
                                                            </div>
                                                        </div>

                                                        <div class="item-content">
                                                            <!-- rating  -->
                                                            <div class="reviews-content">
                                                                <div class="star"></div>
                                                                <div class="item-number-rating">
                                                                    0 Review(s)
                                                                </div>
                                                            </div>
                                                            <!-- end rating  -->

                                                            <h4><a href="simple_product.html" title="iPad Mini 2 Retina">iPad Mini 2 Retina</a></h4>

                                                            <!-- price -->
                                                            <div class="item-price">
																			<span>
																				<del>
																					<span class="woocommerce-Price-amount amount">
																						<span class="woocommerce-Price-currencySymbol">¥</span>300.00
																					</span>
																				</del>

																				<ins>
																					<span class="woocommerce-Price-amount amount">
																						<span class="woocommerce-Price-currencySymbol">¥</span>290.00
																					</span>
																				</ins>
																			</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="item ">
                                                <div class="item-wrap">
                                                    <div class="item-detail">
                                                        <div class="item-img products-thumb">
                                                            <a href="simple_product.html">
                                                                <div class="product-thumb-hover">
                                                                    <img width="300" height="300" src="images/1903/22-300x300.jpg" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" srcset="images/1903/22-300x300.jpg 300w, images/1903/22-150x150.jpg 150w, images/1903/22-180x180.jpg 180w, images/1903/22.jpg 600w" sizes="(max-width: 300px) 100vw, 300px">
                                                                </div>
                                                            </a>

                                                            <!-- add to cart, wishlist, compare -->
                                                            <div class="item-bottom clearfix">
                                                                <a rel="nofollow" href="#" class="button product_type_simple add_to_cart_button ajax_add_to_cart" title="Add to Cart">Add to cart</a>

                                                                <a href="javascript:void(0)" class="compare button" rel="nofollow" title="Add to Compare">Compare</a>

                                                                <div class="yith-wcwl-add-to-wishlist add-to-wishlist-248">
                                                                    <div class="yith-wcwl-add-button show" style="display:block">
                                                                        <a href="#" rel="nofollow" class="add_to_wishlist">Add to Wishlist</a>
                                                                        <img src="images/wpspin_light.gif" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden" />
                                                                    </div>

                                                                    <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
                                                                        <span class="feedback">Product added!</span>
                                                                        <a href="#" rel="nofollow">Browse Wishlist</a>
                                                                    </div>

                                                                    <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
                                                                        <span class="feedback">The product is already in the wishlist!</span>
                                                                        <a href="#" rel="nofollow">Browse Wishlist</a>
                                                                    </div>

                                                                    <div style="clear:both"></div>
                                                                    <div class="yith-wcwl-wishlistaddresponse"></div>
                                                                </div>

                                                                <div class="clear"></div>
                                                                <a href="#" data-fancybox-type="ajax" class="sm_quickview_handler-list fancybox fancybox.ajax">Quick View </a>
                                                            </div>
                                                        </div>

                                                        <div class="item-content">
                                                            <!-- rating  -->
                                                            <div class="reviews-content">
                                                                <div class="star"></div>
                                                                <div class="item-number-rating">
                                                                    0 Review(s)
                                                                </div>
                                                            </div>
                                                            <!-- end rating  -->

                                                            <h4><a href="simple_product.html" title="Philips HR2195">Philips HR2195</a></h4>

                                                            <!-- price -->
                                                            <div class="item-price">
																			<span>
																				<span class="woocommerce-Price-amount amount">
																					<span class="woocommerce-Price-currencySymbol">¥</span>200.00
																				</span>
																			</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="item ">
                                                <div class="item-wrap">
                                                    <div class="item-detail">
                                                        <div class="item-img products-thumb">
                                                            <a href="simple_product.html">
                                                                <div class="product-thumb-hover">
                                                                    <img width="300" height="300" src="images/1903/14-300x300.jpg" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" srcset="images/1903/14-300x300.jpg 300w, images/1903/14-150x150.jpg 150w, images/1903/14-180x180.jpg 180w, images/1903/14.jpg 600w" sizes="(max-width: 300px) 100vw, 300px">
                                                                </div>
                                                            </a>

                                                            <!-- add to cart, wishlist, compare -->
                                                            <div class="item-bottom clearfix">
                                                                <a rel="nofollow" href="#" class="button product_type_simple add_to_cart_button ajax_add_to_cart" title="Add to Cart">Add to cart</a>

                                                                <a href="javascript:void(0)" class="compare button" rel="nofollow" title="Add to Compare">Compare</a>

                                                                <div class="yith-wcwl-add-to-wishlist add-to-wishlist-248">
                                                                    <div class="yith-wcwl-add-button show" style="display:block">
                                                                        <a href="#" rel="nofollow" class="add_to_wishlist">Add to Wishlist</a>
                                                                        <img src="images/wpspin_light.gif" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden" />
                                                                    </div>

                                                                    <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
                                                                        <span class="feedback">Product added!</span>
                                                                        <a href="#" rel="nofollow">Browse Wishlist</a>
                                                                    </div>

                                                                    <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
                                                                        <span class="feedback">The product is already in the wishlist!</span>
                                                                        <a href="#" rel="nofollow">Browse Wishlist</a>
                                                                    </div>

                                                                    <div style="clear:both"></div>
                                                                    <div class="yith-wcwl-wishlistaddresponse"></div>
                                                                </div>

                                                                <div class="clear"></div>
                                                                <a href="#" data-fancybox-type="ajax" class="sm_quickview_handler-list fancybox fancybox.ajax">Quick View </a>
                                                            </div>
                                                        </div>

                                                        <div class="item-content">
                                                            <!-- rating  -->
                                                            <div class="reviews-content">
                                                                <div class="star"></div>
                                                                <div class="item-number-rating">
                                                                    0 Review(s)
                                                                </div>
                                                            </div>
                                                            <!-- end rating  -->

                                                            <h4><a href="simple_product.html" title="sony xperia s">sony xperia s</a></h4>

                                                            <!-- price -->
                                                            <div class="item-price">
																			<span>
																				<span class="woocommerce-Price-amount amount">
																					<span class="woocommerce-Price-currencySymbol">¥</span>300.00
																				</span>
																			</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="item ">
                                                <div class="item-wrap">
                                                    <div class="item-detail">
                                                        <div class="item-img products-thumb">
                                                            <a href="simple_product.html">
                                                                <div class="product-thumb-hover">
                                                                    <img width="300" height="300" src="images/1903/58-300x300.jpg" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" srcset="images/1903/58-300x300.jpg 300w, images/1903/58-150x150.jpg 150w, images/1903/58-180x180.jpg 180w, images/1903/58.jpg 600w" sizes="(max-width: 300px) 100vw, 300px">
                                                                </div>
                                                            </a>

                                                            <!-- add to cart, wishlist, compare -->
                                                            <div class="item-bottom clearfix">
                                                                <a rel="nofollow" href="#" class="button product_type_simple add_to_cart_button ajax_add_to_cart" title="Add to Cart">Add to cart</a>

                                                                <a href="javascript:void(0)" class="compare button" rel="nofollow" title="Add to Compare">Compare</a>

                                                                <div class="yith-wcwl-add-to-wishlist add-to-wishlist-248">
                                                                    <div class="yith-wcwl-add-button show" style="display:block">
                                                                        <a href="#" rel="nofollow" class="add_to_wishlist">Add to Wishlist</a>
                                                                        <img src="images/wpspin_light.gif" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden" />
                                                                    </div>

                                                                    <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
                                                                        <span class="feedback">Product added!</span>
                                                                        <a href="#" rel="nofollow">Browse Wishlist</a>
                                                                    </div>

                                                                    <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
                                                                        <span class="feedback">The product is already in the wishlist!</span>
                                                                        <a href="#" rel="nofollow">Browse Wishlist</a>
                                                                    </div>

                                                                    <div style="clear:both"></div>
                                                                    <div class="yith-wcwl-wishlistaddresponse"></div>
                                                                </div>

                                                                <div class="clear"></div>
                                                                <a href="#" data-fancybox-type="ajax" class="sm_quickview_handler-list fancybox fancybox.ajax">Quick View </a>
                                                            </div>
                                                        </div>

                                                        <div class="item-content">
                                                            <!-- rating  -->
                                                            <div class="reviews-content">
                                                                <div class="star"></div>
                                                                <div class="item-number-rating">
                                                                    0 Review(s)
                                                                </div>
                                                            </div>
                                                            <!-- end rating  -->

                                                            <h4><a href="simple_product.html" title="nikon d7000">nikon d7000</a></h4>

                                                            <!-- price -->
                                                            <div class="item-price">
																			<span>
																				<span class="woocommerce-Price-amount amount">
																					<span class="woocommerce-Price-currencySymbol">¥</span>300.00
																				</span>
																			</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="widget-2 widget-last widget sw_related_upsell_widget-3 sw_related_upsell_widget" data-scroll-reveal="enter bottom move 20px wait 0.2s">
                            <div class="widget-inner"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

