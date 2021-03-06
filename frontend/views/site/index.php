<?php
$this->title = 'Home';

use yii\helpers\Url;

?>

<div class="container">
    <div class="row">
        <div id="contents" role="main" class="main-page  col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="post-6 page type-page status-publish hentry">
                <div class="entry-content">
                    <div class="entry-summary">
                        <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true"
                             class="vc_row wpb_row vc_row-fluid bg-wrap vc_custom_1487642348040 vc_row-no-padding">
                            <div class="container float wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1481518924466">
                                            <div class="wrap-vertical wpb_column vc_column_container vc_col-sm-2">
                                                <div class="vc_column-inner vc_custom_1481518234612">
                                                    <div class="wpb_wrapper">
                                                        <div class="vc_wp_custommenu wpb_content_element wrap-title">
                                                            <div class="mega-left-title">
                                                                <strong>类目</strong>
                                                            </div>

                                                            <div class="wrapper_vertical_menu vertical_megamenu">
                                                                <div class="resmenu-container">
                                                                    <button class="navbar-toggle" type="button"
                                                                            data-toggle="collapse"
                                                                            data-target="#ResMenuvertical_menu">
                                                                        <span class="sr-only">Categories</span>
                                                                        <span class="icon-bar"></span>
                                                                        <span class="icon-bar"></span>
                                                                        <span class="icon-bar"></span>
                                                                    </button>

                                                                    <div id="ResMenuvertical_menu"
                                                                         class="collapse menu-responsive-wrapper">
                                                                        <ul id="menu-vertical-menu"
                                                                            class="etrostore_resmenu">
                                                                            <?php
                                                                            foreach ($this->params['menu'] as $index => $top):
                                                                                ?>
                                                                                <li class="fix-menu res-dropdown menu-smartphones-tablet">
                                                                                    <a class="item-link dropdown-toggle"
                                                                                       href="<?php echo Url::to(['product/category', 'category_id' => $top['id']]) ?>"><?php echo $top['title'] ?></a>
                                                                                    <?php if (count($top['children']) != 0) {
                                                                                        echo '<span class="show-dropdown"></span>';
                                                                                    } ?>
                                                                                    <ul class="dropdown-resmenu">
                                                                                        <?php
                                                                                        foreach ($top['children'] as $child):
                                                                                            ?>
                                                                                            <li class="res-dropdown menu-electronics">
                                                                                                <a class="item-link dropdown-toggle"
                                                                                                   href="<?php echo Url::to(['product/category', 'category_id' => $child['id']]) ?>"><?php echo $child['title'] ?></a>
                                                                                                <?php if (count($child['grandson']) != 0) {
                                                                                                    echo '<span class="show-dropdown"></span>';
                                                                                                } ?>
                                                                                                <ul class="dropdown-resmenu">
                                                                                                    <?php
                                                                                                    foreach ($child['grandson'] as $grandson):
                                                                                                        ?>
                                                                                                        <li class="menu-laptop-desktop-accessories">
                                                                                                            <a href="<?php echo Url::to(['product/category', 'category_id' => $grandson['id']]) ?>"><?php echo $grandson['title'] ?></a>
                                                                                                        </li>
                                                                                                    <?php endforeach; ?>
                                                                                                </ul>
                                                                                            </li>
                                                                                            <?php
                                                                                        endforeach;
                                                                                        ?>

                                                                                    </ul>
                                                                                </li>
                                                                            <?php endforeach; ?>
                                                                        </ul>
                                                                    </div>
                                                                </div>

                                                                <ul id="menu-vertical-menu-1"
                                                                    class="nav vertical-megamenu etrostore-mega etrostore-menures">

                                                                    <?php
                                                                    foreach ($this->params['menu'] as $index => $top):
                                                                        ?>
                                                                        <li class="fix-menu <?php echo $top['children'] == null ? 'dropdown' : '' ?>dropdown etrostore-mega-menu level1">
                                                                            <a href="<?php echo Url::to(['product/category', 'category_id' => $top['id']]) ?>"
                                                                               class="item-link dropdown-toggle">
																					<span class="have-title">
																						<span class="menu-color"
                                                                                              data-color=<?php echo Yii::$app->params['color'][rand(0, 9)]; ?>></span>
																						<span
                                                                                            class="menu-title"><?php echo $top['title'] ?></span>
																					</span>
                                                                            </a>
                                                                            <ul class="dropdown-menu nav-level1 column-3">
                                                                                <?php
                                                                                foreach ($top['children'] as $child):
                                                                                    ?>
                                                                                    <li class="dropdown-submenu column-3 menu-electronics">
                                                                                        <a href="<?php echo Url::to(['product/category', 'category_id' => $child['id']]) ?>">
																							<span class="have-title">
																								<span
                                                                                                    class="menu-title"><?php echo $child['title'] ?></span>
																							</span>
                                                                                        </a>

                                                                                        <ul class="dropdown-sub nav-level2">
                                                                                            <?php
                                                                                            foreach ($child['grandson'] as $grandson):
                                                                                                ?>
                                                                                                <li class="menu-laptop-desktop-accessories">
                                                                                                    <a href="<?php echo Url::to(['product/category', 'category_id' => $grandson['id']]) ?>">
																									<span
                                                                                                        class="have-title">
																										<span
                                                                                                            class="menu-title"><?php echo $grandson['title'] ?></span>
																									</span>
                                                                                                    </a>
                                                                                                </li>
                                                                                                <?php
                                                                                            endforeach;
                                                                                            ?>
                                                                                        </ul>
                                                                                    </li>

                                                                                    <?php
                                                                                endforeach;
                                                                                ?>

                                                                            </ul>
                                                                        </li>
                                                                        <?php
                                                                    endforeach;
                                                                    ?>
                                                                </ul>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="wrap-slider wpb_column vc_column_container vc_col-sm-8">
                                                <div class="vc_column-inner vc_custom_1483000674370">
                                                    <div class="wpb_wrapper">
                                                        <!-- OWL SLIDER -->
                                                        <div
                                                            class="wpb_revslider_element wpb_content_element no-margin">
                                                            <div class="vc_column-inner ">
                                                                <div class="wpb_wrapper">
                                                                    <div
                                                                        class="wpb_revslider_element wpb_content_element">
                                                                        <div id="main-slider"
                                                                             class="fullwidthbanner-container"
                                                                             style="position:relative; width:100%; height:auto; margin-top:0px; margin-bottom:0px">
                                                                            <div class="module slideshow no-margin">
                                                                                <?php foreach ($data['bn_main'] as $bn_main): ?>
                                                                                    <div class="item">
                                                                                        <a href="<?php echo Url::to(['product/promotion', 'promotion_id' => $bn_main['id']]) ?>"><img
                                                                                                src=<?php echo IMG_PROMOTION_SAVE_PATH . $bn_main->pictures ?>
                                                                                                alt=<?php echo $bn_main->title ?>
                                                                                                class="img-responsive"
                                                                                                height="559"></a>
                                                                                    </div>
                                                                                <?php endforeach; ?>
                                                                            </div>
                                                                            <div class="loadeding"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- OWL LIGHT SLIDER -->

                                                        <div class="wpb_raw_code wpb_content_element wpb_raw_html">
                                                            <div class="wpb_wrapper">
                                                                <div class="banner">
                                                                    <?php foreach ($data['bn_bottom'] as $bn_bottom): ?>
                                                                        <a href="<?php echo Url::to(['product/promotion', 'promotion_id' => $bn_bottom['id']]) ?>"
                                                                           class="banner1">
                                                                            <img
                                                                                src=<?php echo IMG_PROMOTION_SAVE_PATH . $bn_bottom->pictures ?> alt=<?php echo $bn_bottom->title ?>
                                                                                title=<?php echo $bn_bottom->title ?>/>
                                                                        </a>
                                                                    <?php endforeach; ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="wrap-banner wpb_column vc_column_container vc_col-sm-2">
                                                <div class="vc_column-inner vc_custom_1483000922579">
                                                    <div class="wpb_wrapper">
                                                        <div
                                                            class="wpb_single_image wpb_content_element vc_align_center vc_custom_1481518385054">
                                                            <figure class="wpb_wrapper vc_figure">
                                                                <a href="<?php echo Url::to(['product/promotion', 'promotion_id' => $data['bn_right'][0]->id]) ?>"
                                                                   target="_self"
                                                                   class="vc_single_image-wrapper vc_box_border_grey">
                                                                    <img class="vc_single_image-img"

                                                                         src=<?php echo IMG_PROMOTION_SAVE_PATH . $data['bn_right'][0]->pictures ?> width="193"
                                                                         height="352"
                                                                         alt=<?php echo $data['bn_right'][0]->title ?> title=<?php echo $data['bn_right'][0]->title ?> />
                                                                </a>
                                                            </figure>
                                                        </div>

                                                        <div
                                                            class="wpb_single_image wpb_content_element vc_align_center">
                                                            <figure class="wpb_wrapper vc_figure">
                                                                <a href="<?php echo Url::to(['product/promotion', 'promotion_id' => $data['bn_right'][1]->id]) ?>"
                                                                   target="_self"
                                                                   class="vc_single_image-wrapper vc_box_border_grey">
                                                                    <img class="vc_single_image-img"
                                                                         src=<?php echo IMG_PROMOTION_SAVE_PATH . $data['bn_right'][1]->pictures ?> width="193"
                                                                         height="175"
                                                                         alt=<?php echo $data['bn_right'][1]->title ?> title=<?php echo $data['bn_right'][1]->title ?> />
                                                                </a>
                                                            </figure>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="vc_row-full-width vc_clearfix"></div>

                        <div class="vc_row wpb_row vc_row-fluid margin-bottom-60">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div id="_sw_countdown_01"
                                             class="sw-woo-container-slider responsive-slider countdown-slider"
                                             data-lg="5" data-md="4" data-sm="2" data-xs="1" data-mobile="1"
                                             data-speed="1000" data-scroll="1" data-interval="5000"
                                             data-autoplay="false" data-circle="false">
                                            <div class="resp-slider-container">
                                                <div class="box-title clearfix">
                                                    <h3>热销商品</h3>

                                                    <a href="#">预留1</a>
                                                </div>

                                                <div class="banner-content clearfix">
                                                    <img width="195" height="354" src="images/1903/image-cd.jpg"
                                                         class="attachment-larges size-larges" alt=""
                                                         srcset="images/1903/image-cd.jpg 195w, images/1903/image-cd-165x300.jpg 165w"
                                                         sizes="(max-width: 195px) 100vw, 195px"/>
                                                </div>

                                                <div class="slider responsive">
                                                    <?php foreach ($data['hot_sale'] as $index => $hot_sale): ?>
                                                        <div class="item-countdown product ">
                                                            <div class="item-wrap">
                                                                <div class="item-detail">
                                                                    <div class="item-content">
                                                                        <!-- rating  -->
                                                                        <div class="reviews-content">
                                                                            <div class="star">
                                                                                <span style="width:35px"></span>
                                                                            </div>

                                                                            <div class="item-number-rating">2 Review(s)
                                                                            </div>
                                                                        </div>
                                                                        <!-- end rating  -->

                                                                        <h4>
                                                                            <a href="<?php echo Url::to(['product/simple', 'product_id' => $hot_sale['id']]) ?>"
                                                                               title=<?php echo $hot_sale['product_title'] ?>><?php echo $hot_sale['product_title'] ?></a>
                                                                        </h4>

                                                                        <!-- Price -->
                                                                        <div class="item-price">
																				<span>
																					<ins>
																						<span
                                                                                            class="woocommerce-Price-amount amount">
																							<span
                                                                                                class="woocommerce-Price-currencySymbol">¥</span><?php echo $data['hot_sale_attr'][$index]['price'] ?>
																						</span>
																					</ins>
																				</span>
                                                                        </div>

                                                                        <div
                                                                            class="sale-off"><?php echo $hot_sale['id'] ?></div>

                                                                        <div class="product-countdown"
                                                                             data-date="1519776000" data-price="$250"
                                                                             data-starttime="1483747200"
                                                                             data-cdtime="1519776000"
                                                                             data-id="product_sw_countdown_02"></div>
                                                                    </div>

                                                                    <div class="item-image-countdown">
                                                                        <span class="onsale">Sale!</span>

                                                                        <a href="<?php echo Url::to(['product/simple', 'product_id' => $hot_sale['id']]) ?>">
                                                                            <div class="product-thumb-hover">
                                                                                <img width="300" height="300"
                                                                                     src=<?php echo $data['hot_sale_attr'][$index]['image'] ?>
                                                                                     class="attachment-shop_catalog
                                                                                     size-shop_catalog wp-post-image"
                                                                                alt=""/>
                                                                            </div>
                                                                        </a>

                                                                        <!-- add to cart, wishlist, compare -->
                                                                        <div class="item-bottom clearfix">
                                                                            <a rel="nofollow"
                                                                               href="<?php echo Url::to(['cart/add', 'product_id' => $hot_sale['id']]) ?>"
                                                                               class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                               title="Add to Cart">Add to cart</a>

                                                                            <a href="javascript:void(0)"
                                                                               class="compare button" rel="nofollow"
                                                                               title="Add to Compare(Coming Soon)">Compare</a>

                                                                            <div
                                                                                class="yith-wcwl-add-to-wishlist add-to-wishlist-248">
                                                                                <div class="yith-wcwl-add-button show"
                                                                                     style="display:block">
                                                                                    <a href="#" rel="nofollow"
                                                                                       class="add_to_wishlist">Add to
                                                                                        Wishlist(Coming Soon)</a>
                                                                                    <img src="images/wpspin_light.gif"
                                                                                         class="ajax-loading"
                                                                                         alt="loading"
                                                                                         width="16" height="16"
                                                                                         style="visibility:hidden"/>
                                                                                </div>

                                                                                <div
                                                                                    class="yith-wcwl-wishlistaddedbrowse hide"
                                                                                    style="display:none;">
                                                                                <span
                                                                                    class="feedback">Product added!</span>
                                                                                    <a href="#" rel="nofollow">Browse
                                                                                        Wishlist</a>
                                                                                </div>

                                                                                <div
                                                                                    class="yith-wcwl-wishlistexistsbrowse hide"
                                                                                    style="display:none">
                                                                                    <span class="feedback">The product is already in the wishlist!</span>
                                                                                    <a href="#" rel="nofollow">Browse
                                                                                        Wishlist</a>
                                                                                </div>

                                                                                <div style="clear:both"></div>
                                                                                <div
                                                                                    class="yith-wcwl-wishlistaddresponse"></div>
                                                                            </div>

                                                                            <div class="clear"></div>
                                                                            <a href="#" data-fancybox-type="ajax"
                                                                               class="sm_quickview_handler-list fancybox fancybox.ajax">Quick
                                                                                View(Coming Soon) </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php endforeach; ?>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="vc_row wpb_row vc_row-fluid margin-bottom-60">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div id="slider_sw_woo_slider_widget_1"
                                             class="responsive-slider woo-slider-default sw-child-cat clearfix"
                                             data-lg="3" data-md="3" data-sm="2" data-xs="2" data-mobile="1"
                                             data-speed="1000" data-scroll="1" data-interval="5000"
                                             data-autoplay="false">
                                            <div class="child-top clearfix" data-color="#ff9901">
                                                <div class="box-title pull-left">
                                                    <h3>推荐商品</h3>

                                                    <button class="navbar-toggle" type="button" data-toggle="collapse"
                                                            data-target="#child_sw_woo_slider_widget_1"
                                                            aria-expanded="false">
                                                        <span class="icon-bar"></span>
                                                        <span class="icon-bar"></span>
                                                        <span class="icon-bar"></span>
                                                    </button>
                                                </div>

                                                <div class="box-title-right clearfix">
                                                    <div class="childcat-content pull-left"
                                                         id="child_sw_woo_slider_widget_1">
                                                        <ul>
                                                            <li><a href="#">分类1</a></li>
                                                            <li><a href="#">分类2</a></li>
                                                            <li><a href="#">分类3</a></li>
                                                            <li><a href="#">分类4</a></li>
                                                            <li><a href="#">分类5</a></li>
                                                            <li><a href="#">See All<i
                                                                        class="fa  fa-caret-right"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="view-all">
                                                        <a href="#">See All<i class="fa  fa-caret-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="content-slider">
                                                <div class="childcat-slider-content clearfix">
                                                    <!-- Brand -->
                                                    <div class="child-cat-brand pull-left">
                                                        <div class="item-brand">
                                                            <a href="#">
                                                                <img width="170" height="87"
                                                                     src="images/1903/Brand_1.jpg"
                                                                     class="attachment-170x90 size-170x90" alt=""/>
                                                            </a>
                                                        </div>

                                                        <div class="item-brand">
                                                            <a href="#">
                                                                <img width="170" height="90" src="images/1903/br5.jpg"
                                                                     class="attachment-170x90 size-170x90" alt=""/>
                                                            </a>
                                                        </div>

                                                        <div class="item-brand">
                                                            <a href="#">
                                                                <img width="170" height="90" src="images/1903/br2.jpg"
                                                                     class="attachment-170x90 size-170x90" alt=""/>
                                                            </a>
                                                        </div>

                                                        <div class="item-brand">
                                                            <a href="#">
                                                                <img width="170" height="90" src="images/1903/br3.jpg"
                                                                     class="attachment-170x90 size-170x90" alt=""/>
                                                            </a>
                                                        </div>
                                                    </div>

                                                    <!-- slider content -->
                                                    <div class="resp-slider-container">
                                                        <div class="slider responsive">
                                                            <?php for ($i = 0; $i < count($data['recommend']); $i += 2): ?>
                                                                <div class="item product">
                                                                    <div class="item-wrap">
                                                                        <div class="item-detail">
                                                                            <div class="item-content">
                                                                                <!-- rating  -->
                                                                                <div class="reviews-content">
                                                                                    <div class="star"></div>
                                                                                    <div class="item-number-rating">888
                                                                                        Review(s)
                                                                                    </div>
                                                                                </div>
                                                                                <!-- end rating  -->

                                                                                <h4>
                                                                                    <a href="<?php echo Url::to(['product/simple', 'product_id' => $data['recommend'][$i]['id']]) ?>"
                                                                                       title="<?php echo $data['recommend'][$i]['product_title'] ?>"><?php echo $data['recommend'][$i]['product_title'] ?></a>
                                                                                </h4>

                                                                                <!-- Price -->
                                                                                <div class="item-price">
																						<span>
																							<span
                                                                                                class="woocommerce-Price-amount amount">
																								<span
                                                                                                    class="woocommerce-Price-currencySymbol">¥</span><?php echo $data['recommend_attr'][$i]['price'] ?>
																							</span>
																						</span>
                                                                                </div>
                                                                            </div>

                                                                            <div class="item-img products-thumb">
                                                                                <a href="<?php echo Url::to(['product/simple', 'product_id' => $data['recommend'][$i]['id']]) ?>">
                                                                                    <div class="product-thumb-hover">
                                                                                        <img width="300" height="300"
                                                                                             src="<?php echo $data['recommend_attr'][$i]['image'] ?>"
                                                                                             class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                                             alt=""/>
                                                                                    </div>
                                                                                </a>

                                                                                <!-- add to cart, wishlist, compare -->
                                                                                <div class="item-bottom clearfix">
                                                                                    <a rel="nofollow"
                                                                                       href="<?php echo Url::to(['cart/add', 'product_id' => $data['recommend'][$i]['id']]) ?>"
                                                                                       class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                                       title="Add to Cart">Add to
                                                                                        cart</a>

                                                                                    <a href="javascript:void(0)"
                                                                                       class="compare button"
                                                                                       rel="nofollow"
                                                                                       title="Add to Compare(Coming Soon)">Compare</a>

                                                                                    <div
                                                                                        class="yith-wcwl-add-to-wishlist add-to-wishlist-248">
                                                                                        <div
                                                                                            class="yith-wcwl-add-button show"
                                                                                            style="display:block">
                                                                                            <a href="#" rel="nofollow"
                                                                                               class="add_to_wishlist">Add
                                                                                                to Wishlist(Coming
                                                                                                Soon)</a>
                                                                                            <img
                                                                                                src="images/wpspin_light.gif"
                                                                                                class="ajax-loading"
                                                                                                alt="loading" width="16"
                                                                                                height="16"
                                                                                                style="visibility:hidden"/>
                                                                                        </div>

                                                                                        <div
                                                                                            class="yith-wcwl-wishlistaddedbrowse hide"
                                                                                            style="display:none;">
                                                                                            <span class="feedback">Product added!</span>
                                                                                            <a href="#" rel="nofollow">Browse
                                                                                                Wishlist</a>
                                                                                        </div>

                                                                                        <div
                                                                                            class="yith-wcwl-wishlistexistsbrowse hide"
                                                                                            style="display:none">
                                                                                            <span class="feedback">The product is already in the wishlist!</span>
                                                                                            <a href="#" rel="nofollow">Browse
                                                                                                Wishlist</a>
                                                                                        </div>

                                                                                        <div style="clear:both"></div>
                                                                                        <div
                                                                                            class="yith-wcwl-wishlistaddresponse"></div>
                                                                                    </div>

                                                                                    <div class="clear"></div>
                                                                                    <a href="#"
                                                                                       data-fancybox-type="ajax"
                                                                                       class="sm_quickview_handler-list fancybox fancybox.ajax">Quick
                                                                                        View (Coming Soon)</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="item-wrap">
                                                                        <div class="item-detail">
                                                                            <div class="item-content">
                                                                                <!-- rating  -->
                                                                                <div class="reviews-content">
                                                                                    <div class="star"></div>
                                                                                    <div class="item-number-rating">0
                                                                                        Review(s)
                                                                                    </div>
                                                                                </div>
                                                                                <!-- end rating  -->

                                                                                <h4>
                                                                                    <a href="<?php echo Url::to(['product/simple']) ?>"
                                                                                       title="veniam dolore"><?php echo $data['recommend'][$i + 1]['product_title'] ?></a>
                                                                                </h4>

                                                                                <!-- Price -->
                                                                                <div class="item-price">
																						<span>
																							<span
                                                                                                class="woocommerce-Price-amount amount">
																								<span
                                                                                                    class="woocommerce-Price-currencySymbol">¥</span><?php echo $data['recommend_attr'][$i + 1]['price'] ?></a>
																							</span>
																						</span>
                                                                                </div>
                                                                            </div>

                                                                            <div class="item-img products-thumb">
                                                                                <a href="<?php echo Url::to(['product/simple', 'product_id' => $data['recommend'][$i + 1]['id']]) ?>">
                                                                                    <div class="product-thumb-hover">
                                                                                        <img width="300" height="300"
                                                                                             src="<?php echo $data['recommend_attr'][$i + 1]['image'] ?>"
                                                                                             class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                                             alt=""/>
                                                                                    </div>
                                                                                </a>

                                                                                <!-- add to cart, wishlist, compare -->
                                                                                <div class="item-bottom clearfix">
                                                                                    <a rel="nofollow"
                                                                                       href="<?php echo Url::to(['cart/add', 'product_id' => $data['recommend'][$i + 1]['id']]) ?>"
                                                                                       class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                                       title="Add to Cart">Add to
                                                                                        cart</a>

                                                                                    <a href="javascript:void(0)"
                                                                                       class="compare button"
                                                                                       rel="nofollow"
                                                                                       title="Add to Compare (Coming Soon)">Compare</a>

                                                                                    <div
                                                                                        class="yith-wcwl-add-to-wishlist add-to-wishlist-248">
                                                                                        <div
                                                                                            class="yith-wcwl-add-button show"
                                                                                            style="display:block">
                                                                                            <a href="#" rel="nofollow"
                                                                                               class="add_to_wishlist">Add
                                                                                                to Wishlist(Coming
                                                                                                Soon)</a>
                                                                                            <img
                                                                                                src="images/wpspin_light.gif"
                                                                                                class="ajax-loading"
                                                                                                alt="loading" width="16"
                                                                                                height="16"
                                                                                                style="visibility:hidden"/>
                                                                                        </div>

                                                                                        <div
                                                                                            class="yith-wcwl-wishlistaddedbrowse hide"
                                                                                            style="display:none;">
                                                                                            <span class="feedback">Product added!</span>
                                                                                            <a href="#" rel="nofollow">Browse
                                                                                                Wishlist</a>
                                                                                        </div>

                                                                                        <div
                                                                                            class="yith-wcwl-wishlistexistsbrowse hide"
                                                                                            style="display:none">
                                                                                            <span class="feedback">The product is already in the wishlist!</span>
                                                                                            <a href="#" rel="nofollow">Browse
                                                                                                Wishlist</a>
                                                                                        </div>

                                                                                        <div style="clear:both"></div>
                                                                                        <div
                                                                                            class="yith-wcwl-wishlistaddresponse"></div>
                                                                                    </div>

                                                                                    <div class="clear"></div>
                                                                                    <a href="#"
                                                                                       data-fancybox-type="ajax"
                                                                                       class="sm_quickview_handler-list fancybox fancybox.ajax">Quick
                                                                                        View (Coming Soon)</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            <?php endfor; ?>
                                                            <div class="item product">
                                                                <div class="item-wrap">
                                                                    <div class="item-detail">
                                                                        <div class="item-content">
                                                                            <!-- rating  -->
                                                                            <div class="reviews-content">
                                                                                <div class="star">
                                                                                    <span style="width:63px"></span>
                                                                                </div>

                                                                                <div class="item-number-rating">2
                                                                                    Review(s)
                                                                                </div>
                                                                            </div>
                                                                            <!-- end rating  -->

                                                                            <h4>
                                                                                <a href="simple_product.html"
                                                                                   title="Cleaner with bag">Cleaner with
                                                                                    bag</a>
                                                                            </h4>

                                                                            <!-- Price -->
                                                                            <div class="item-price">
																						<span>
																							<del>
																								<span
                                                                                                    class="woocommerce-Price-amount amount">
																									<span
                                                                                                        class="woocommerce-Price-currencySymbol">¥</span>390.00
																								</span>
																							</del>

																							<ins>
																								<span
                                                                                                    class="woocommerce-Price-amount amount">
																									<span
                                                                                                        class="woocommerce-Price-currencySymbol">¥</span>350.00
																								</span>
																							</ins>
																						</span>
                                                                            </div>

                                                                            <div class="sale-off">-10%</div>
                                                                        </div>

                                                                        <div class="item-img products-thumb">
                                                                            <span class="onsale">Sale!</span>

                                                                            <a href="simple_product.html">
                                                                                <div class="product-thumb-hover">
                                                                                    <img width="300" height="300"
                                                                                         src="images/1903/22-300x300.jpg"
                                                                                         class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                                         alt=""
                                                                                         srcset="images/1903/22-300x300.jpg 300w, images/1903/22-150x150.jpg 150w, images/1903/22-180x180.jpg 180w, images/1903/22.jpg 600w"
                                                                                         sizes="(max-width: 300px) 100vw, 300px"/>
                                                                                </div>
                                                                            </a>

                                                                            <!-- add to cart, wishlist, compare -->
                                                                            <div class="item-bottom clearfix">
                                                                                <a rel="nofollow" href="#"
                                                                                   class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                                   title="Add to Cart">Add to cart</a>

                                                                                <a href="javascript:void(0)"
                                                                                   class="compare button" rel="nofollow"
                                                                                   title="Add to Compare">Compare</a>

                                                                                <div
                                                                                    class="yith-wcwl-add-to-wishlist add-to-wishlist-248">
                                                                                    <div
                                                                                        class="yith-wcwl-add-button show"
                                                                                        style="display:block">
                                                                                        <a href="#" rel="nofollow"
                                                                                           class="add_to_wishlist">Add
                                                                                            to Wishlist</a>
                                                                                        <img
                                                                                            src="images/wpspin_light.gif"
                                                                                            class="ajax-loading"
                                                                                            alt="loading" width="16"
                                                                                            height="16"
                                                                                            style="visibility:hidden"/>
                                                                                    </div>

                                                                                    <div
                                                                                        class="yith-wcwl-wishlistaddedbrowse hide"
                                                                                        style="display:none;">
                                                                                        <span class="feedback">Product added!</span>
                                                                                        <a href="#" rel="nofollow">Browse
                                                                                            Wishlist</a>
                                                                                    </div>

                                                                                    <div
                                                                                        class="yith-wcwl-wishlistexistsbrowse hide"
                                                                                        style="display:none">
                                                                                        <span class="feedback">The product is already in the wishlist!</span>
                                                                                        <a href="#" rel="nofollow">Browse
                                                                                            Wishlist</a>
                                                                                    </div>

                                                                                    <div style="clear:both"></div>
                                                                                    <div
                                                                                        class="yith-wcwl-wishlistaddresponse"></div>
                                                                                </div>

                                                                                <div class="clear"></div>

                                                                                <a href="#" data-fancybox-type="ajax"
                                                                                   class="sm_quickview_handler-list fancybox fancybox.ajax">Quick
                                                                                    View </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="item-wrap">
                                                                    <div class="item-detail">
                                                                        <div class="item-content">
                                                                            <!-- rating  -->
                                                                            <div class="reviews-content">
                                                                                <div class="star"></div>
                                                                                <div class="item-number-rating">0
                                                                                    Review(s)
                                                                                </div>
                                                                            </div>
                                                                            <!-- end rating  -->

                                                                            <h4>
                                                                                <a href="simple_product.html"
                                                                                   title="Sony BRAVIA 4K">Sony BRAVIA
                                                                                    4K</a>
                                                                            </h4>

                                                                            <!-- Price -->
                                                                            <div class="item-price">
																						<span>
																							<span
                                                                                                class="woocommerce-Price-amount amount">
																								<span
                                                                                                    class="woocommerce-Price-currencySymbol">¥</span>600.00
																							</span>
																						</span>
                                                                            </div>
                                                                        </div>

                                                                        <div class="item-img products-thumb">
                                                                            <a href="simple_product.html">
                                                                                <div class="product-thumb-hover">
                                                                                    <img width="300" height="300"
                                                                                         src="images/1903/6-300x300.jpg"
                                                                                         class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                                         alt=""
                                                                                         srcset="images/1903/6-300x300.jpg 300w, images/1903/6-150x150.jpg 150w, images/1903/6-180x180.jpg 180w, images/1903/6.jpg 600w"
                                                                                         sizes="(max-width: 300px) 100vw, 300px"/>
                                                                                </div>
                                                                            </a>

                                                                            <!-- add to cart, wishlist, compare -->
                                                                            <div class="item-bottom clearfix">
                                                                                <a rel="nofollow" href="#"
                                                                                   class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                                   title="Add to Cart">Add to cart</a>

                                                                                <a href="javascript:void(0)"
                                                                                   class="compare button" rel="nofollow"
                                                                                   title="Add to Compare">Compare</a>

                                                                                <div
                                                                                    class="yith-wcwl-add-to-wishlist add-to-wishlist-248">
                                                                                    <div
                                                                                        class="yith-wcwl-add-button show"
                                                                                        style="display:block">
                                                                                        <a href="#" rel="nofollow"
                                                                                           class="add_to_wishlist">Add
                                                                                            to Wishlist</a>
                                                                                        <img
                                                                                            src="images/wpspin_light.gif"
                                                                                            class="ajax-loading"
                                                                                            alt="loading" width="16"
                                                                                            height="16"
                                                                                            style="visibility:hidden"/>
                                                                                    </div>

                                                                                    <div
                                                                                        class="yith-wcwl-wishlistaddedbrowse hide"
                                                                                        style="display:none;">
                                                                                        <span class="feedback">Product added!</span>
                                                                                        <a href="#" rel="nofollow">Browse
                                                                                            Wishlist</a>
                                                                                    </div>

                                                                                    <div
                                                                                        class="yith-wcwl-wishlistexistsbrowse hide"
                                                                                        style="display:none">
                                                                                        <span class="feedback">The product is already in the wishlist!</span>
                                                                                        <a href="#" rel="nofollow">Browse
                                                                                            Wishlist</a>
                                                                                    </div>

                                                                                    <div style="clear:both"></div>
                                                                                    <div
                                                                                        class="yith-wcwl-wishlistaddresponse"></div>
                                                                                </div>

                                                                                <div class="clear"></div>
                                                                                <a href="#" data-fancybox-type="ajax"
                                                                                   class="sm_quickview_handler-list fancybox fancybox.ajax">Quick
                                                                                    View </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="item product">
                                                                <div class="item-wrap">
                                                                    <div class="item-detail">
                                                                        <div class="item-content">
                                                                            <!-- rating  -->
                                                                            <div class="reviews-content">
                                                                                <div class="star"></div>
                                                                                <div class="item-number-rating">0
                                                                                    Review(s)
                                                                                </div>
                                                                            </div>
                                                                            <!-- end rating  -->

                                                                            <h4>
                                                                                <a href="simple_product.html"
                                                                                   title="Samsung SUHD">Samsung SUHD</a>
                                                                            </h4>

                                                                            <!-- Price -->
                                                                            <div class="item-price">
																						<span>
																							<span
                                                                                                class="woocommerce-Price-amount amount">
																								<span
                                                                                                    class="woocommerce-Price-currencySymbol">¥</span>500.00
																							</span>
																						</span>
                                                                            </div>
                                                                        </div>

                                                                        <div class="item-img products-thumb">
                                                                            <a href="simple_product.html">
                                                                                <div class="product-thumb-hover">
                                                                                    <img width="300" height="300"
                                                                                         src="images/1903/3-300x300.jpg"
                                                                                         class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                                         alt=""
                                                                                         srcset="images/1903/3-300x300.jpg 300w, images/1903/3-150x150.jpg 150w, images/1903/3-180x180.jpg 180w, images/1903/3.jpg 600w"
                                                                                         sizes="(max-width: 300px) 100vw, 300px"/>
                                                                                </div>
                                                                            </a>

                                                                            <!-- add to cart, wishlist, compare -->
                                                                            <div class="item-bottom clearfix">
                                                                                <a rel="nofollow" href="#"
                                                                                   class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                                   title="Add to Cart">Add to cart</a>

                                                                                <a href="javascript:void(0)"
                                                                                   class="compare button" rel="nofollow"
                                                                                   title="Add to Compare">Compare</a>

                                                                                <div
                                                                                    class="yith-wcwl-add-to-wishlist add-to-wishlist-248">
                                                                                    <div
                                                                                        class="yith-wcwl-add-button show"
                                                                                        style="display:block">
                                                                                        <a href="#" rel="nofollow"
                                                                                           class="add_to_wishlist">Add
                                                                                            to Wishlist</a>
                                                                                        <img
                                                                                            src="images/wpspin_light.gif"
                                                                                            class="ajax-loading"
                                                                                            alt="loading" width="16"
                                                                                            height="16"
                                                                                            style="visibility:hidden"/>
                                                                                    </div>

                                                                                    <div
                                                                                        class="yith-wcwl-wishlistaddedbrowse hide"
                                                                                        style="display:none;">
                                                                                        <span class="feedback">Product added!</span>
                                                                                        <a href="#" rel="nofollow">Browse
                                                                                            Wishlist</a>
                                                                                    </div>

                                                                                    <div
                                                                                        class="yith-wcwl-wishlistexistsbrowse hide"
                                                                                        style="display:none">
                                                                                        <span class="feedback">The product is already in the wishlist!</span>
                                                                                        <a href="#" rel="nofollow">Browse
                                                                                            Wishlist</a>
                                                                                    </div>

                                                                                    <div style="clear:both"></div>
                                                                                    <div
                                                                                        class="yith-wcwl-wishlistaddresponse"></div>
                                                                                </div>

                                                                                <div class="clear"></div>
                                                                                <a href="#" data-fancybox-type="ajax"
                                                                                   class="sm_quickview_handler-list fancybox fancybox.ajax">Quick
                                                                                    View </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="item-wrap">
                                                                    <div class="item-detail">
                                                                        <div class="item-content">
                                                                            <!-- rating  -->
                                                                            <div class="reviews-content">
                                                                                <div class="star"></div>
                                                                                <div class="item-number-rating">0
                                                                                    Review(s)
                                                                                </div>
                                                                            </div>
                                                                            <!-- end rating  -->

                                                                            <h4>
                                                                                <a href="simple_product.html"
                                                                                   title="nisi ball tip">nisi ball
                                                                                    tip</a>
                                                                            </h4>

                                                                            <!-- Price -->
                                                                            <div class="item-price">
																						<span>
																							<del>
																								<span
                                                                                                    class="woocommerce-Price-amount amount">
																									<span
                                                                                                        class="woocommerce-Price-currencySymbol">¥</span>460.00
																								</span>
																							</del>

																							<ins>
																								<span
                                                                                                    class="woocommerce-Price-amount amount">
																									<span
                                                                                                        class="woocommerce-Price-currencySymbol">¥</span>400.00
																								</span>
																							</ins>
																						</span>
                                                                            </div>

                                                                            <div class="sale-off">-13%</div>
                                                                        </div>

                                                                        <div class="item-img products-thumb">
                                                                            <span class="onsale">Sale!</span>

                                                                            <a href="simple_product.html">
                                                                                <div class="product-thumb-hover">
                                                                                    <img width="300" height="300"
                                                                                         src="images/1903/11-300x300.jpg"
                                                                                         class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                                         alt=""
                                                                                         srcset="images/1903/11-300x300.jpg 300w, images/1903/11-150x150.jpg 150w, images/1903/11-180x180.jpg 180w, images/1903/11.jpg 600w"
                                                                                         sizes="(max-width: 300px) 100vw, 300px"/>
                                                                                </div>
                                                                            </a>

                                                                            <!-- add to cart, wishlist, compare -->
                                                                            <div class="item-bottom clearfix">
                                                                                <a rel="nofollow" href="#"
                                                                                   class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                                   title="Add to Cart">Add to cart</a>

                                                                                <a href="javascript:void(0)"
                                                                                   class="compare button" rel="nofollow"
                                                                                   title="Add to Compare">Compare</a>

                                                                                <div
                                                                                    class="yith-wcwl-add-to-wishlist add-to-wishlist-248">
                                                                                    <div
                                                                                        class="yith-wcwl-add-button show"
                                                                                        style="display:block">
                                                                                        <a href="#" rel="nofollow"
                                                                                           class="add_to_wishlist">Add
                                                                                            to Wishlist</a>
                                                                                        <img
                                                                                            src="images/wpspin_light.gif"
                                                                                            class="ajax-loading"
                                                                                            alt="loading" width="16"
                                                                                            height="16"
                                                                                            style="visibility:hidden"/>
                                                                                    </div>

                                                                                    <div
                                                                                        class="yith-wcwl-wishlistaddedbrowse hide"
                                                                                        style="display:none;">
                                                                                        <span class="feedback">Product added!</span>
                                                                                        <a href="#" rel="nofollow">Browse
                                                                                            Wishlist</a>
                                                                                    </div>

                                                                                    <div
                                                                                        class="yith-wcwl-wishlistexistsbrowse hide"
                                                                                        style="display:none">
                                                                                        <span class="feedback">The product is already in the wishlist!</span>
                                                                                        <a href="#" rel="nofollow">Browse
                                                                                            Wishlist</a>
                                                                                    </div>

                                                                                    <div style="clear:both"></div>
                                                                                    <div
                                                                                        class="yith-wcwl-wishlistaddresponse"></div>
                                                                                </div>

                                                                                <div class="clear"></div>
                                                                                <a href="#" data-fancybox-type="ajax"
                                                                                   class="sm_quickview_handler-list fancybox fancybox.ajax">Quick
                                                                                    View </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="best-seller-product">
                                                    <div class="box-slider-title">
                                                        <h2 class="page-title-slider">Best sellers</h2>
                                                    </div>

                                                    <div class="wrap-content">
                                                        <div class="item">
                                                            <div class="item-inner">
                                                                <div class="item-img">
                                                                    <a href="simple_product.html"
                                                                       title="Sony BRAVIA 4K">
                                                                        <img width="180" height="180"
                                                                             src="images/1903/6-180x180.jpg"
                                                                             class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image"
                                                                             alt=""
                                                                             srcset="images/1903/6-180x180.jpg 180w, images/1903/6-150x150.jpg 150w, images/1903/6-300x300.jpg 300w, images/1903/6.jpg 600w"
                                                                             sizes="(max-width: 180px) 100vw, 180px"/>
                                                                    </a>
                                                                </div>

                                                                <div class="item-sl pull-left">1</div>

                                                                <div class="item-content">
                                                                    <!-- rating  -->
                                                                    <div class="reviews-content">
                                                                        <div class="star"></div>
                                                                        <div class="item-number-rating">0 Review(s)
                                                                        </div>
                                                                    </div>
                                                                    <!-- end rating  -->

                                                                    <h4>
                                                                        <a href="simple_product.html"
                                                                           title="Sony BRAVIA 4K">Sony BRAVIA 4K</a>
                                                                    </h4>

                                                                    <div class="item-price">
																				<span
                                                                                    class="woocommerce-Price-amount amount">
																					<span
                                                                                        class="woocommerce-Price-currencySymbol">¥</span>600.00
																				</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="item">
                                                            <div class="item-inner">
                                                                <div class="item-img">
                                                                    <a href="simple_product.html"
                                                                       title="iPad Mini 2 Retina">
                                                                        <img width="180" height="180"
                                                                             src="images/1903/39-180x180.jpg"
                                                                             class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image"
                                                                             alt=""
                                                                             srcset="images/1903/39-180x180.jpg 180w, images/1903/39-150x150.jpg 150w, images/1903/39-300x300.jpg 300w, images/1903/39.jpg 600w"
                                                                             sizes="(max-width: 180px) 100vw, 180px"/>
                                                                    </a>
                                                                </div>

                                                                <div class="item-sl pull-left">2</div>

                                                                <div class="item-content">
                                                                    <!-- rating  -->
                                                                    <div class="reviews-content">
                                                                        <div class="star"></div>
                                                                        <div class="item-number-rating">0 Review(s)
                                                                        </div>
                                                                    </div>
                                                                    <!-- end rating  -->

                                                                    <h4>
                                                                        <a href="simple_product.html"
                                                                           title="iPad Mini 2 Retina">iPad Mini 2
                                                                            Retina</a>
                                                                    </h4>

                                                                    <div class="item-price">
                                                                        <del>
																					<span
                                                                                        class="woocommerce-Price-amount amount">
																						<span
                                                                                            class="woocommerce-Price-currencySymbol">¥</span>300.00
																					</span>
                                                                        </del>

                                                                        <ins>
																					<span
                                                                                        class="woocommerce-Price-amount amount">
																						<span
                                                                                            class="woocommerce-Price-currencySymbol">¥</span>290.00
																					</span>
                                                                        </ins>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="item">
                                                            <div class="item-inner">
                                                                <div class="item-img">
                                                                    <a href="simple_product.html" title="ipsum fugiat">
                                                                        <img width="180" height="180"
                                                                             src="images/1903/66-180x180.jpg"
                                                                             class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image"
                                                                             alt=""
                                                                             srcset="images/1903/66-180x180.jpg 180w, images/1903/66-150x150.jpg 150w, images/1903/66-300x300.jpg 300w, images/1903/66.jpg 600w"
                                                                             sizes="(max-width: 180px) 100vw, 180px"/>
                                                                    </a>
                                                                </div>

                                                                <div class="item-sl pull-left">3</div>

                                                                <div class="item-content">
                                                                    <!-- rating  -->
                                                                    <div class="reviews-content">
                                                                        <div class="star"></div>
                                                                        <div class="item-number-rating">0 Review(s)
                                                                        </div>
                                                                    </div>
                                                                    <!-- end rating  -->

                                                                    <h4>
                                                                        <a href="simple_product.html"
                                                                           title="ipsum fugiat">ipsum fugiat</a>
                                                                    </h4>

                                                                    <div class="item-price">
																				<span
                                                                                    class="woocommerce-Price-amount amount">
																					<span
                                                                                        class="woocommerce-Price-currencySymbol">¥</span>250.00
																				</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="item">
                                                            <div class="item-inner">
                                                                <div class="item-img">
                                                                    <a href="simple_product.html" title="veniam dolore">
                                                                        <img width="180" height="180"
                                                                             src="images/1903/50-180x180.jpg"
                                                                             class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image"
                                                                             alt=""
                                                                             srcset="images/1903/50-180x180.jpg 180w, images/1903/50-150x150.jpg 150w, images/1903/50-300x300.jpg 300w, images/1903/50.jpg 600w"
                                                                             sizes="(max-width: 180px) 100vw, 180px"/>
                                                                    </a>
                                                                </div>

                                                                <div class="item-sl pull-left">4</div>

                                                                <div class="item-content">
                                                                    <!-- rating  -->
                                                                    <div class="reviews-content">
                                                                        <div class="star"></div>
                                                                        <div class="item-number-rating">0 Review(s)
                                                                        </div>
                                                                    </div>
                                                                    <!-- end rating  -->

                                                                    <h4>
                                                                        <a href="simple_product.html"
                                                                           title="veniam dolore">Veniam dolore</a>
                                                                    </h4>

                                                                    <div class="item-price">
																				<span
                                                                                    class="woocommerce-Price-amount amount">
																					<span
                                                                                        class="woocommerce-Price-currencySymbol">¥</span>450.00
																				</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="item">
                                                            <div class="item-inner">
                                                                <div class="item-img">
                                                                    <a href="simple_product.html"
                                                                       title="voluptate ipsum">
                                                                        <img width="180" height="180"
                                                                             src="images/1903/52-180x180.jpg"
                                                                             class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image"
                                                                             alt=""
                                                                             srcset="images/1903/52-180x180.jpg 180w, images/1903/52-150x150.jpg 150w, images/1903/52-300x300.jpg 300w, images/1903/52.jpg 600w"
                                                                             sizes="(max-width: 180px) 100vw, 180px"/>
                                                                    </a>
                                                                </div>

                                                                <div class="item-sl pull-left">5</div>

                                                                <div class="item-content">
                                                                    <!-- rating  -->
                                                                    <div class="reviews-content">
                                                                        <div class="star"></div>
                                                                        <div class="item-number-rating">0 Review(s)
                                                                        </div>
                                                                    </div>
                                                                    <!-- end rating  -->

                                                                    <h4>
                                                                        <a href="simple_product.html"
                                                                           title="voluptate ipsum">voluptate ipsum</a>
                                                                    </h4>

                                                                    <div class="item-price">
																				<span
                                                                                    class="woocommerce-Price-amount amount">
																					<span
                                                                                        class="woocommerce-Price-currencySymbol">¥</span>550.00
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
                            </div>
                        </div>

                        <div class="vc_row wpb_row vc_row-fluid margin-bottom-60">
                            <div class="wpb_column vc_column_container vc_col-sm-6">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="wpb_single_image wpb_content_element vc_align_center">
                                            <figure class="wpb_wrapper vc_figure">
                                                <a href="#" target="_self"
                                                   class="vc_single_image-wrapper vc_box_border_grey">
                                                    <img class="vc_single_image-img" src="images/1903/banner6-1.jpg"
                                                         width="570" height="220" alt="banner6" title="banner6"/>
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="wpb_column vc_column_container vc_col-sm-6">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="wpb_single_image wpb_content_element vc_align_center banner-none">
                                            <figure class="wpb_wrapper vc_figure">
                                                <a href="#" target="_self"
                                                   class="vc_single_image-wrapper vc_box_border_grey">
                                                    <img class="vc_single_image-img" src="images/1903/banner7-1.jpg"
                                                         width="570" height="220" alt="banner7" title="banner7"/>
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="vc_row wpb_row vc_row-fluid margin-bottom-60">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div id="slider_sw_woo_slider_widget_2"
                                             class="responsive-slider woo-slider-default sw-child-cat clearfix"
                                             data-lg="3" data-md="3" data-sm="2" data-xs="2" data-mobile="1"
                                             data-speed="1000" data-scroll="1" data-interval="5000"
                                             data-autoplay="false">
                                            <div class="child-top clearfix" data-color="#7ac143">
                                                <div class="box-title pull-left">
                                                    <h3>Computers</h3>

                                                    <button class="navbar-toggle" type="button" data-toggle="collapse"
                                                            data-target="#child_sw_woo_slider_widget_2"
                                                            aria-expanded="false">
                                                        <span class="icon-bar"></span>
                                                        <span class="icon-bar"></span>
                                                        <span class="icon-bar"></span>
                                                    </button>
                                                </div>

                                                <div class="box-title-right clearfix">
                                                    <div class="childcat-content pull-left"
                                                         id="child_sw_woo_slider_widget_2">
                                                        <ul>
                                                            <li><a href="#">Laptop Dell</a></li>
                                                            <li><a href="#">Macbook</a></li>
                                                            <li><a href="#">Laptop HP</a></li>
                                                            <li><a href="#">Laptop MSI</a></li>
                                                            <li><a href="#">Laptop Asus</a></li>
                                                            <li><a href="#">Accessories</a></li>
                                                        </ul>
                                                    </div>

                                                    <div class="view-all">
                                                        <a href="#">
                                                            See All<i class="fa fa-caret-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="content-slider">
                                                <div class="childcat-slider-content clearfix">
                                                    <!-- Brand -->
                                                    <div class="child-cat-brand pull-left">
                                                        <div class="item-brand">
                                                            <a href="#">
                                                                <img width="170" height="90" src="images/1903/br4.jpg"
                                                                     class="attachment-170x90 size-170x90" alt=""/>
                                                            </a>
                                                        </div>

                                                        <div class="item-brand">
                                                            <a href="#">
                                                                <img width="170" height="90" src="images/1903/br2.jpg"
                                                                     class="attachment-170x90 size-170x90" alt=""/>
                                                            </a>
                                                        </div>

                                                        <div class="item-brand">
                                                            <a href="#">
                                                                <img width="170" height="90" src="images/1903/br3.jpg"
                                                                     class="attachment-170x90 size-170x90" alt=""/>
                                                            </a>
                                                        </div>

                                                        <div class="item-brand">
                                                            <a href="#">
                                                                <img width="170" height="90" src="images/1903/br5.jpg"
                                                                     class="attachment-170x90 size-170x90" alt=""/>
                                                            </a>
                                                        </div>

                                                        <div class="item-brand">
                                                            <a href="#">
                                                                <img width="170" height="87"
                                                                     src="images/1903/Brand_1.jpg"
                                                                     class="attachment-170x90 size-170x90" alt=""/>
                                                            </a>
                                                        </div>
                                                    </div>

                                                    <!-- slider content -->
                                                    <div class="resp-slider-container">
                                                        <div class="slider responsive">
                                                            <div class="item product">
                                                                <div class="item-wrap">
                                                                    <div class="item-detail">
                                                                        <div class="item-content">
                                                                            <!-- rating  -->
                                                                            <div class="reviews-content">
                                                                                <div class="star"></div>
                                                                                <div class="item-number-rating">0
                                                                                    Review(s)
                                                                                </div>
                                                                            </div>
                                                                            <!-- end rating  -->

                                                                            <h4>
                                                                                <a href="simple_product.html"
                                                                                   title="voluptate ipsum">Voluptate
                                                                                    ipsum</a>
                                                                            </h4>

                                                                            <!-- Price -->
                                                                            <div class="item-price">
																						<span>
																							<span
                                                                                                class="woocommerce-Price-amount amount">
																								<span
                                                                                                    class="woocommerce-Price-currencySymbol">¥</span>550.00
																							</span>
																						</span>
                                                                            </div>
                                                                        </div>

                                                                        <div class="item-img products-thumb">
                                                                            <a href="simple_product.html">
                                                                                <div class="product-thumb-hover">
                                                                                    <img width="300" height="300"
                                                                                         src="images/1903/52-300x300.jpg"
                                                                                         class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                                         alt=""
                                                                                         srcset="images/1903/52-300x300.jpg 300w, images/1903/52-150x150.jpg 150w, images/1903/52-180x180.jpg 180w, images/1903/52.jpg 600w"
                                                                                         sizes="(max-width: 300px) 100vw, 300px"/>
                                                                                </div>
                                                                            </a>

                                                                            <!-- add to cart, wishlist, compare -->
                                                                            <div class="item-bottom clearfix">
                                                                                <a rel="nofollow" href="#"
                                                                                   class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                                   title="Add to Cart">Add to cart</a>

                                                                                <a href="javascript:void(0)"
                                                                                   class="compare button" rel="nofollow"
                                                                                   title="Add to Compare">Compare</a>

                                                                                <div
                                                                                    class="yith-wcwl-add-to-wishlist add-to-wishlist-248">
                                                                                    <div
                                                                                        class="yith-wcwl-add-button show"
                                                                                        style="display:block">
                                                                                        <a href="#" rel="nofollow"
                                                                                           class="add_to_wishlist">Add
                                                                                            to Wishlist</a>
                                                                                        <img
                                                                                            src="images/wpspin_light.gif"
                                                                                            class="ajax-loading"
                                                                                            alt="loading" width="16"
                                                                                            height="16"
                                                                                            style="visibility:hidden"/>
                                                                                    </div>

                                                                                    <div
                                                                                        class="yith-wcwl-wishlistaddedbrowse hide"
                                                                                        style="display:none;">
                                                                                        <span class="feedback">Product added!</span>
                                                                                        <a href="#" rel="nofollow">Browse
                                                                                            Wishlist</a>
                                                                                    </div>

                                                                                    <div
                                                                                        class="yith-wcwl-wishlistexistsbrowse hide"
                                                                                        style="display:none">
                                                                                        <span class="feedback">The product is already in the wishlist!</span>
                                                                                        <a href="#" rel="nofollow">Browse
                                                                                            Wishlist</a>
                                                                                    </div>

                                                                                    <div style="clear:both"></div>
                                                                                    <div
                                                                                        class="yith-wcwl-wishlistaddresponse"></div>
                                                                                </div>

                                                                                <div class="clear"></div>
                                                                                <a href="#" data-fancybox-type="ajax"
                                                                                   class="sm_quickview_handler-list fancybox fancybox.ajax">Quick
                                                                                    View </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="item-wrap">
                                                                    <div class="item-detail">
                                                                        <div class="item-content">
                                                                            <!-- rating  -->
                                                                            <div class="reviews-content">
                                                                                <div class="star"></div>
                                                                                <div class="item-number-rating">0
                                                                                    Review(s)
                                                                                </div>
                                                                            </div>
                                                                            <!-- end rating  -->

                                                                            <h4>
                                                                                <a href="simple_product.html"
                                                                                   title="veniam dolore">Veniam
                                                                                    dolore</a>
                                                                            </h4>

                                                                            <!-- Price -->
                                                                            <div class="item-price">
																						<span>
																							<span
                                                                                                class="woocommerce-Price-amount amount">
																								<span
                                                                                                    class="woocommerce-Price-currencySymbol">¥</span>450.00
																							</span>
																						</span>
                                                                            </div>
                                                                        </div>

                                                                        <div class="item-img products-thumb">
                                                                            <a href="simple_product.html">
                                                                                <div class="product-thumb-hover">
                                                                                    <img width="300" height="300"
                                                                                         src="images/1903/50-300x300.jpg"
                                                                                         class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                                         alt=""
                                                                                         srcset="images/1903/50-300x300.jpg 300w, images/1903/50-150x150.jpg 150w, images/1903/50-180x180.jpg 180w, images/1903/50.jpg 600w"
                                                                                         sizes="(max-width: 300px) 100vw, 300px"/>
                                                                                </div>
                                                                            </a>

                                                                            <!-- add to cart, wishlist, compare -->
                                                                            <div class="item-bottom clearfix">
                                                                                <a rel="nofollow" href="#"
                                                                                   class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                                   title="Add to Cart">Add to cart</a>

                                                                                <a href="javascript:void(0)"
                                                                                   class="compare button" rel="nofollow"
                                                                                   title="Add to Compare">Compare</a>

                                                                                <div
                                                                                    class="yith-wcwl-add-to-wishlist add-to-wishlist-248">
                                                                                    <div
                                                                                        class="yith-wcwl-add-button show"
                                                                                        style="display:block">
                                                                                        <a href="#" rel="nofollow"
                                                                                           class="add_to_wishlist">Add
                                                                                            to Wishlist</a>
                                                                                        <img
                                                                                            src="images/wpspin_light.gif"
                                                                                            class="ajax-loading"
                                                                                            alt="loading" width="16"
                                                                                            height="16"
                                                                                            style="visibility:hidden"/>
                                                                                    </div>

                                                                                    <div
                                                                                        class="yith-wcwl-wishlistaddedbrowse hide"
                                                                                        style="display:none;">
                                                                                        <span class="feedback">Product added!</span>
                                                                                        <a href="#" rel="nofollow">Browse
                                                                                            Wishlist</a>
                                                                                    </div>

                                                                                    <div
                                                                                        class="yith-wcwl-wishlistexistsbrowse hide"
                                                                                        style="display:none">
                                                                                        <span class="feedback">The product is already in the wishlist!</span>
                                                                                        <a href="#" rel="nofollow">Browse
                                                                                            Wishlist</a>
                                                                                    </div>

                                                                                    <div style="clear:both"></div>
                                                                                    <div
                                                                                        class="yith-wcwl-wishlistaddresponse"></div>
                                                                                </div>

                                                                                <div class="clear"></div>
                                                                                <a href="#" data-fancybox-type="ajax"
                                                                                   class="sm_quickview_handler-list fancybox fancybox.ajax">Quick
                                                                                    View </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="item product">
                                                                <div class="item-wrap">
                                                                    <div class="item-detail">
                                                                        <div class="item-content">
                                                                            <!-- rating  -->
                                                                            <div class="reviews-content">
                                                                                <div class="star">
                                                                                    <span style="width:63px"></span>
                                                                                </div>

                                                                                <div class="item-number-rating">2
                                                                                    Review(s)
                                                                                </div>
                                                                            </div>
                                                                            <!-- end rating  -->

                                                                            <h4>
                                                                                <a href="simple_product.html"
                                                                                   title="Cleaner with bag">Cleaner with
                                                                                    bag</a>
                                                                            </h4>

                                                                            <!-- Price -->
                                                                            <div class="item-price">
																						<span>
																							<del>
																								<span
                                                                                                    class="woocommerce-Price-amount amount">
																									<span
                                                                                                        class="woocommerce-Price-currencySymbol">¥</span>390.00
																								</span>
																							</del>

																							<ins>
																								<span
                                                                                                    class="woocommerce-Price-amount amount">
																									<span
                                                                                                        class="woocommerce-Price-currencySymbol">¥</span>350.00
																								</span>
																							</ins>
																						</span>
                                                                            </div>

                                                                            <div class="sale-off">-10%</div>
                                                                        </div>

                                                                        <div class="item-img products-thumb">
                                                                            <span class="onsale">Sale!</span>

                                                                            <a href="simple_product.html">
                                                                                <div class="product-thumb-hover">
                                                                                    <img width="300" height="300"
                                                                                         src="images/1903/22-300x300.jpg"
                                                                                         class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                                         alt=""
                                                                                         srcset="images/1903/22-300x300.jpg 300w, images/1903/22-150x150.jpg 150w, images/1903/22-180x180.jpg 180w, images/1903/22.jpg 600w"
                                                                                         sizes="(max-width: 300px) 100vw, 300px"/>
                                                                                </div>
                                                                            </a>

                                                                            <!-- add to cart, wishlist, compare -->
                                                                            <div class="item-bottom clearfix">
                                                                                <a rel="nofollow" href="#"
                                                                                   class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                                   title="Add to Cart">Add to cart</a>

                                                                                <a href="javascript:void(0)"
                                                                                   class="compare button" rel="nofollow"
                                                                                   title="Add to Compare">Compare</a>

                                                                                <div
                                                                                    class="yith-wcwl-add-to-wishlist add-to-wishlist-248">
                                                                                    <div
                                                                                        class="yith-wcwl-add-button show"
                                                                                        style="display:block">
                                                                                        <a href="#" rel="nofollow"
                                                                                           class="add_to_wishlist">Add
                                                                                            to Wishlist</a>
                                                                                        <img
                                                                                            src="images/wpspin_light.gif"
                                                                                            class="ajax-loading"
                                                                                            alt="loading" width="16"
                                                                                            height="16"
                                                                                            style="visibility:hidden"/>
                                                                                    </div>

                                                                                    <div
                                                                                        class="yith-wcwl-wishlistaddedbrowse hide"
                                                                                        style="display:none;">
                                                                                        <span class="feedback">Product added!</span>
                                                                                        <a href="#" rel="nofollow">Browse
                                                                                            Wishlist</a>
                                                                                    </div>

                                                                                    <div
                                                                                        class="yith-wcwl-wishlistexistsbrowse hide"
                                                                                        style="display:none">
                                                                                        <span class="feedback">The product is already in the wishlist!</span>
                                                                                        <a href="#" rel="nofollow">Browse
                                                                                            Wishlist</a>
                                                                                    </div>

                                                                                    <div style="clear:both"></div>
                                                                                    <div
                                                                                        class="yith-wcwl-wishlistaddresponse"></div>
                                                                                </div>

                                                                                <div class="clear"></div>

                                                                                <a href="#" data-fancybox-type="ajax"
                                                                                   class="sm_quickview_handler-list fancybox fancybox.ajax">Quick
                                                                                    View </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="item-wrap">
                                                                    <div class="item-detail">
                                                                        <div class="item-content">
                                                                            <!-- rating  -->
                                                                            <div class="reviews-content">
                                                                                <div class="star"></div>
                                                                                <div class="item-number-rating">0
                                                                                    Review(s)
                                                                                </div>
                                                                            </div>
                                                                            <!-- end rating  -->

                                                                            <h4>
                                                                                <a href="simple_product.html"
                                                                                   title="Sony BRAVIA 4K">Sony BRAVIA
                                                                                    4K</a>
                                                                            </h4>

                                                                            <!-- Price -->
                                                                            <div class="item-price">
																						<span>
																							<span
                                                                                                class="woocommerce-Price-amount amount">
																								<span
                                                                                                    class="woocommerce-Price-currencySymbol">¥</span>600.00
																							</span>
																						</span>
                                                                            </div>
                                                                        </div>

                                                                        <div class="item-img products-thumb">
                                                                            <a href="simple_product.html">
                                                                                <div class="product-thumb-hover">
                                                                                    <img width="300" height="300"
                                                                                         src="images/1903/6-300x300.jpg"
                                                                                         class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                                         alt=""
                                                                                         srcset="images/1903/6-300x300.jpg 300w, images/1903/6-150x150.jpg 150w, images/1903/6-180x180.jpg 180w, images/1903/6.jpg 600w"
                                                                                         sizes="(max-width: 300px) 100vw, 300px"/>
                                                                                </div>
                                                                            </a>

                                                                            <!-- add to cart, wishlist, compare -->
                                                                            <div class="item-bottom clearfix">
                                                                                <a rel="nofollow" href="#"
                                                                                   class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                                   title="Add to Cart">Add to cart</a>

                                                                                <a href="javascript:void(0)"
                                                                                   class="compare button" rel="nofollow"
                                                                                   title="Add to Compare">Compare</a>

                                                                                <div
                                                                                    class="yith-wcwl-add-to-wishlist add-to-wishlist-248">
                                                                                    <div
                                                                                        class="yith-wcwl-add-button show"
                                                                                        style="display:block">
                                                                                        <a href="#" rel="nofollow"
                                                                                           class="add_to_wishlist">Add
                                                                                            to Wishlist</a>
                                                                                        <img
                                                                                            src="images/wpspin_light.gif"
                                                                                            class="ajax-loading"
                                                                                            alt="loading" width="16"
                                                                                            height="16"
                                                                                            style="visibility:hidden"/>
                                                                                    </div>

                                                                                    <div
                                                                                        class="yith-wcwl-wishlistaddedbrowse hide"
                                                                                        style="display:none;">
                                                                                        <span class="feedback">Product added!</span>
                                                                                        <a href="#" rel="nofollow">Browse
                                                                                            Wishlist</a>
                                                                                    </div>

                                                                                    <div
                                                                                        class="yith-wcwl-wishlistexistsbrowse hide"
                                                                                        style="display:none">
                                                                                        <span class="feedback">The product is already in the wishlist!</span>
                                                                                        <a href="#" rel="nofollow">Browse
                                                                                            Wishlist</a>
                                                                                    </div>

                                                                                    <div style="clear:both"></div>
                                                                                    <div
                                                                                        class="yith-wcwl-wishlistaddresponse"></div>
                                                                                </div>

                                                                                <div class="clear"></div>
                                                                                <a href="#" data-fancybox-type="ajax"
                                                                                   class="sm_quickview_handler-list fancybox fancybox.ajax">Quick
                                                                                    View </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="item product">
                                                                <div class="item-wrap">
                                                                    <div class="item-detail">
                                                                        <div class="item-content">
                                                                            <!-- rating  -->
                                                                            <div class="reviews-content">
                                                                                <div class="star"></div>
                                                                                <div class="item-number-rating">0
                                                                                    Review(s)
                                                                                </div>
                                                                            </div>
                                                                            <!-- end rating  -->

                                                                            <h4>
                                                                                <a href="simple_product.html"
                                                                                   title="Samsung SUHD">Samsung SUHD</a>
                                                                            </h4>

                                                                            <!-- Price -->
                                                                            <div class="item-price">
																						<span>
																							<span
                                                                                                class="woocommerce-Price-amount amount">
																								<span
                                                                                                    class="woocommerce-Price-currencySymbol">¥</span>500.00
																							</span>
																						</span>
                                                                            </div>
                                                                        </div>

                                                                        <div class="item-img products-thumb">
                                                                            <a href="simple_product.html">
                                                                                <div class="product-thumb-hover">
                                                                                    <img width="300" height="300"
                                                                                         src="images/1903/3-300x300.jpg"
                                                                                         class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                                         alt=""
                                                                                         srcset="images/1903/3-300x300.jpg 300w, images/1903/3-150x150.jpg 150w, images/1903/3-180x180.jpg 180w, images/1903/3.jpg 600w"
                                                                                         sizes="(max-width: 300px) 100vw, 300px"/>
                                                                                </div>
                                                                            </a>

                                                                            <!-- add to cart, wishlist, compare -->
                                                                            <div class="item-bottom clearfix">
                                                                                <a rel="nofollow" href="#"
                                                                                   class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                                   title="Add to Cart">Add to cart</a>

                                                                                <a href="javascript:void(0)"
                                                                                   class="compare button" rel="nofollow"
                                                                                   title="Add to Compare">Compare</a>

                                                                                <div
                                                                                    class="yith-wcwl-add-to-wishlist add-to-wishlist-248">
                                                                                    <div
                                                                                        class="yith-wcwl-add-button show"
                                                                                        style="display:block">
                                                                                        <a href="#" rel="nofollow"
                                                                                           class="add_to_wishlist">Add
                                                                                            to Wishlist</a>
                                                                                        <img
                                                                                            src="images/wpspin_light.gif"
                                                                                            class="ajax-loading"
                                                                                            alt="loading" width="16"
                                                                                            height="16"
                                                                                            style="visibility:hidden"/>
                                                                                    </div>

                                                                                    <div
                                                                                        class="yith-wcwl-wishlistaddedbrowse hide"
                                                                                        style="display:none;">
                                                                                        <span class="feedback">Product added!</span>
                                                                                        <a href="#" rel="nofollow">Browse
                                                                                            Wishlist</a>
                                                                                    </div>

                                                                                    <div
                                                                                        class="yith-wcwl-wishlistexistsbrowse hide"
                                                                                        style="display:none">
                                                                                        <span class="feedback">The product is already in the wishlist!</span>
                                                                                        <a href="#" rel="nofollow">Browse
                                                                                            Wishlist</a>
                                                                                    </div>

                                                                                    <div style="clear:both"></div>
                                                                                    <div
                                                                                        class="yith-wcwl-wishlistaddresponse"></div>
                                                                                </div>

                                                                                <div class="clear"></div>
                                                                                <a href="#" data-fancybox-type="ajax"
                                                                                   class="sm_quickview_handler-list fancybox fancybox.ajax">Quick
                                                                                    View </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="item-wrap">
                                                                    <div class="item-detail">
                                                                        <div class="item-content">
                                                                            <!-- rating  -->
                                                                            <div class="reviews-content">
                                                                                <div class="star"></div>
                                                                                <div class="item-number-rating">0
                                                                                    Review(s)
                                                                                </div>
                                                                            </div>
                                                                            <!-- end rating  -->

                                                                            <h4>
                                                                                <a href="simple_product.html"
                                                                                   title="nisi ball tip">nisi ball
                                                                                    tip</a>
                                                                            </h4>

                                                                            <!-- Price -->
                                                                            <div class="item-price">
																						<span>
																							<del>
																								<span
                                                                                                    class="woocommerce-Price-amount amount">
																									<span
                                                                                                        class="woocommerce-Price-currencySymbol">¥</span>460.00
																								</span>
																							</del>

																							<ins>
																								<span
                                                                                                    class="woocommerce-Price-amount amount">
																									<span
                                                                                                        class="woocommerce-Price-currencySymbol">¥</span>400.00
																								</span>
																							</ins>
																						</span>
                                                                            </div>

                                                                            <div class="sale-off">-13%</div>
                                                                        </div>

                                                                        <div class="item-img products-thumb">
                                                                            <span class="onsale">Sale!</span>

                                                                            <a href="simple_product.html">
                                                                                <div class="product-thumb-hover">
                                                                                    <img width="300" height="300"
                                                                                         src="images/1903/11-300x300.jpg"
                                                                                         class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                                         alt=""
                                                                                         srcset="images/1903/11-300x300.jpg 300w, images/1903/11-150x150.jpg 150w, images/1903/11-180x180.jpg 180w, images/1903/11.jpg 600w"
                                                                                         sizes="(max-width: 300px) 100vw, 300px"/>
                                                                                </div>
                                                                            </a>

                                                                            <!-- add to cart, wishlist, compare -->
                                                                            <div class="item-bottom clearfix">
                                                                                <a rel="nofollow" href="#"
                                                                                   class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                                   title="Add to Cart">Add to cart</a>

                                                                                <a href="javascript:void(0)"
                                                                                   class="compare button" rel="nofollow"
                                                                                   title="Add to Compare">Compare</a>

                                                                                <div
                                                                                    class="yith-wcwl-add-to-wishlist add-to-wishlist-248">
                                                                                    <div
                                                                                        class="yith-wcwl-add-button show"
                                                                                        style="display:block">
                                                                                        <a href="#" rel="nofollow"
                                                                                           class="add_to_wishlist">Add
                                                                                            to Wishlist</a>
                                                                                        <img
                                                                                            src="images/wpspin_light.gif"
                                                                                            class="ajax-loading"
                                                                                            alt="loading" width="16"
                                                                                            height="16"
                                                                                            style="visibility:hidden"/>
                                                                                    </div>

                                                                                    <div
                                                                                        class="yith-wcwl-wishlistaddedbrowse hide"
                                                                                        style="display:none;">
                                                                                        <span class="feedback">Product added!</span>
                                                                                        <a href="#" rel="nofollow">Browse
                                                                                            Wishlist</a>
                                                                                    </div>

                                                                                    <div
                                                                                        class="yith-wcwl-wishlistexistsbrowse hide"
                                                                                        style="display:none">
                                                                                        <span class="feedback">The product is already in the wishlist!</span>
                                                                                        <a href="#" rel="nofollow">Browse
                                                                                            Wishlist</a>
                                                                                    </div>

                                                                                    <div style="clear:both"></div>
                                                                                    <div
                                                                                        class="yith-wcwl-wishlistaddresponse"></div>
                                                                                </div>

                                                                                <div class="clear"></div>
                                                                                <a href="#" data-fancybox-type="ajax"
                                                                                   class="sm_quickview_handler-list fancybox fancybox.ajax">Quick
                                                                                    View </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="best-seller-product">
                                                    <div class="box-slider-title">
                                                        <h2 class="page-title-slider">Best sellers</h2>
                                                    </div>

                                                    <div class="wrap-content">
                                                        <div class="item">
                                                            <div class="item-inner">
                                                                <div class="item-img">
                                                                    <a href="simple_product.html"
                                                                       title="corned beef enim">
                                                                        <img width="180" height="180"
                                                                             src="images/1903/65-180x180.jpg"
                                                                             class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image"
                                                                             alt=""
                                                                             srcset="images/1903/65-180x180.jpg 180w, images/1903/65-150x150.jpg 150w, images/1903/65-300x300.jpg 300w, images/1903/65.jpg 600w"
                                                                             sizes="(max-width: 180px) 100vw, 180px"/>
                                                                    </a>
                                                                </div>

                                                                <div class="item-sl pull-left">1</div>

                                                                <div class="item-content">
                                                                    <!-- rating  -->
                                                                    <div class="reviews-content">
                                                                        <div class="star"></div>
                                                                        <div class="item-number-rating">0 Review(s)
                                                                        </div>
                                                                    </div>
                                                                    <!-- end rating  -->

                                                                    <h4>
                                                                        <a href="simple_product.html"
                                                                           title="corned beef enim">corned beef enim</a>
                                                                    </h4>

                                                                    <div class="item-price">
																				<span
                                                                                    class="woocommerce-Price-amount amount">
																					<span
                                                                                        class="woocommerce-Price-currencySymbol">¥</span>400.00
																				</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="item">
                                                            <div class="item-inner">
                                                                <div class="item-img">
                                                                    <a href="simple_product.html" title="veniam dolore">
                                                                        <img width="180" height="180"
                                                                             src="images/1903/45-180x180.jpg"
                                                                             class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image"
                                                                             alt=""
                                                                             srcset="images/1903/45-180x180.jpg 180w, images/1903/45-150x150.jpg 150w, images/1903/45-300x300.jpg 300w, images/1903/45.jpg 600w"
                                                                             sizes="(max-width: 180px) 100vw, 180px"/>
                                                                    </a>
                                                                </div>

                                                                <div class="item-sl pull-left">2</div>

                                                                <div class="item-content">
                                                                    <!-- rating  -->
                                                                    <div class="reviews-content">
                                                                        <div class="star"></div>
                                                                        <div class="item-number-rating">0 Review(s)
                                                                        </div>
                                                                    </div>
                                                                    <!-- end rating  -->

                                                                    <h4>
                                                                        <a href="simple_product.html"
                                                                           title="veniam dolore">veniam dolore</a>
                                                                    </h4>

                                                                    <div class="item-price">
                                                                        <del>
																					<span
                                                                                        class="woocommerce-Price-amount amount">
																						<span
                                                                                            class="woocommerce-Price-currencySymbol">¥</span>250.00
																					</span>
                                                                        </del>

                                                                        <ins>
																					<span
                                                                                        class="woocommerce-Price-amount amount">
																						<span
                                                                                            class="woocommerce-Price-currencySymbol">¥</span>190.00
																					</span>
                                                                        </ins>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="item">
                                                            <div class="item-inner">
                                                                <div class="item-img">
                                                                    <a href="simple_product.html" title="MacBook Air">
                                                                        <img width="180" height="180"
                                                                             src="images/1903/50-180x180.jpg"
                                                                             class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image"
                                                                             alt=""
                                                                             srcset="images/1903/50-180x180.jpg 180w, images/1903/50-150x150.jpg 150w, images/1903/50-300x300.jpg 300w, images/1903/50.jpg 600w"
                                                                             sizes="(max-width: 180px) 100vw, 180px"/>
                                                                    </a>
                                                                </div>

                                                                <div class="item-sl pull-left">3</div>

                                                                <div class="item-content">
                                                                    <!-- rating  -->
                                                                    <div class="reviews-content">
                                                                        <div class="star"></div>
                                                                        <div class="item-number-rating">0 Review(s)
                                                                        </div>
                                                                    </div>
                                                                    <!-- end rating  -->

                                                                    <h4>
                                                                        <a href="simple_product.html"
                                                                           title="MacBook Air">MacBook Air</a>
                                                                    </h4>

                                                                    <div class="item-price">
                                                                        <del>
																					<span
                                                                                        class="woocommerce-Price-amount amount">
																						<span
                                                                                            class="woocommerce-Price-currencySymbol">¥</span>800.00
																					</span>
                                                                        </del>

                                                                        <ins>
																					<span
                                                                                        class="woocommerce-Price-amount amount">
																						<span
                                                                                            class="woocommerce-Price-currencySymbol">¥</span>700.00
																					</span>
                                                                        </ins>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="item">
                                                            <div class="item-inner">
                                                                <div class="item-img">
                                                                    <a href="simple_product.html"
                                                                       title="ipsum esse nisi">
                                                                        <img width="180" height="180"
                                                                             src="images/1903/51-180x180.jpg"
                                                                             class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image"
                                                                             alt=""
                                                                             srcset="images/1903/51-180x180.jpg 180w, images/1903/51-150x150.jpg 150w, images/1903/51-300x300.jpg 300w, images/1903/51.jpg 600w"
                                                                             sizes="(max-width: 180px) 100vw, 180px"/>
                                                                    </a>
                                                                </div>

                                                                <div class="item-sl pull-left">4</div>

                                                                <div class="item-content">
                                                                    <!-- rating  -->
                                                                    <div class="reviews-content">
                                                                        <div class="star"></div>
                                                                        <div class="item-number-rating">0 Review(s)
                                                                        </div>
                                                                    </div>
                                                                    <!-- end rating  -->

                                                                    <h4>
                                                                        <a href="simple_product.html"
                                                                           title="ipsum esse nisi">ipsum esse nisi</a>
                                                                    </h4>

                                                                    <div class="item-price">
                                                                        <del>
																					<span
                                                                                        class="woocommerce-Price-amount amount">
																						<span
                                                                                            class="woocommerce-Price-currencySymbol">¥</span>600.00
																					</span>
                                                                        </del>

                                                                        <ins>
																					<span
                                                                                        class="woocommerce-Price-amount amount">
																						<span
                                                                                            class="woocommerce-Price-currencySymbol">¥</span>550.00
																					</span>
                                                                        </ins>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="item">
                                                            <div class="item-inner">
                                                                <div class="item-img">
                                                                    <a href="simple_product.html" title="turkey qui">
                                                                        <img width="180" height="180"
                                                                             src="images/1903/49-180x180.jpg"
                                                                             class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image"
                                                                             alt=""
                                                                             srcset="images/1903/49-180x180.jpg 180w, images/1903/49-150x150.jpg 150w, images/1903/49-300x300.jpg 300w, images/1903/49.jpg 600w"
                                                                             sizes="(max-width: 180px) 100vw, 180px"/>
                                                                    </a>
                                                                </div>

                                                                <div class="item-sl pull-left">5</div>

                                                                <div class="item-content">
                                                                    <!-- rating  -->
                                                                    <div class="reviews-content">
                                                                        <div class="star"></div>
                                                                        <div class="item-number-rating">0 Review(s)
                                                                        </div>
                                                                    </div>
                                                                    <!-- end rating  -->

                                                                    <h4>
                                                                        <a href="simple_product.html"
                                                                           title="turkey qui">turkey qui</a>
                                                                    </h4>

                                                                    <div class="item-price">
																				<span
                                                                                    class="woocommerce-Price-amount amount">
																					<span
                                                                                        class="woocommerce-Price-currencySymbol">¥</span>300.00
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
                            </div>
                        </div>

                        <div class="vc_row wpb_row vc_row-fluid margin-bottom-60">
                            <div class="wpb_column vc_column_container vc_col-sm-6">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="wpb_single_image wpb_content_element vc_align_center">
                                            <figure class="wpb_wrapper vc_figure">
                                                <a href="#" target="_self"
                                                   class="vc_single_image-wrapper vc_box_border_grey">
                                                    <img class="vc_single_image-img" src="images/1903/banner8-1.jpg"
                                                         width="570" height="220" alt="banner8" title="banner8"/>
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="wpb_column vc_column_container vc_col-sm-6">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div class="wpb_single_image wpb_content_element vc_align_center banner-none">
                                            <figure class="wpb_wrapper vc_figure">
                                                <a href="#" target="_self"
                                                   class="vc_single_image-wrapper vc_box_border_grey">
                                                    <img class="vc_single_image-img" src="images/1903/banner9-1.jpg"
                                                         width="570" height="220" alt="banner9" title="banner9"/>
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="vc_row wpb_row vc_row-fluid margin-bottom-60">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <div id="slider_sw_woo_slider_widget_3"
                                             class="responsive-slider woo-slider-default sw-child-cat clearfix"
                                             data-lg="3" data-md="3" data-sm="2" data-xs="2" data-mobile="1"
                                             data-speed="1000" data-scroll="1" data-interval="5000"
                                             data-autoplay="false">
                                            <div class="child-top clearfix" data-color="#356acb">
                                                <div class="box-title pull-left">
                                                    <h3>Appliances</h3>
                                                    <button class="navbar-toggle" type="button" data-toggle="collapse"
                                                            data-target="#child_sw_woo_slider_widget_3"
                                                            aria-expanded="false">
                                                        <span class="icon-bar"></span>
                                                        <span class="icon-bar"></span>
                                                        <span class="icon-bar"></span>
                                                    </button>
                                                </div>

                                                <div class="box-title-right clearfix">
                                                    <div class="childcat-content pull-left"
                                                         id="child_sw_woo_slider_widget_3">
                                                        <ul>
                                                            <li><a href="#">Blender</a></li>
                                                            <li><a href="#">Mixer</a></li>
                                                            <li><a href="#">Microwave</a></li>
                                                            <li><a href="#">Sponge</a></li>
                                                            <li><a href="#">Paper Towel</a></li>
                                                            <li><a href="#">Vacuum Cleaner</a></li>
                                                        </ul>
                                                    </div>

                                                    <div class="view-all">
                                                        <a href="#">
                                                            See All<i class="fa  fa-caret-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="content-slider">
                                                <div class="childcat-slider-content clearfix">
                                                    <!-- Brand -->
                                                    <div class="child-cat-brand pull-left">
                                                        <div class="item-brand">
                                                            <a href="#">
                                                                <img width="170" height="90" src="images/1903/br2.jpg"
                                                                     class="attachment-170x90 size-170x90" alt=""/>
                                                            </a>
                                                        </div>

                                                        <div class="item-brand">
                                                            <a href="#">
                                                                <img width="170" height="90" src="images/1903/br5.jpg"
                                                                     class="attachment-170x90 size-170x90" alt=""/>
                                                            </a>
                                                        </div>

                                                        <div class="item-brand">
                                                            <a href="#">
                                                                <img width="170" height="90" src="images/1903/br4.jpg"
                                                                     class="attachment-170x90 size-170x90" alt=""/>
                                                            </a>
                                                        </div>

                                                        <div class="item-brand">
                                                            <a href="#">
                                                                <img width="170" height="90" src="images/1903/br3.jpg"
                                                                     class="attachment-170x90 size-170x90" alt=""/>
                                                            </a>
                                                        </div>

                                                        <div class="item-brand">
                                                            <a href="#">
                                                                <img width="170" height="87"
                                                                     src="images/1903/Brand_1.jpg"
                                                                     class="attachment-170x90 size-170x90" alt=""/>
                                                            </a>
                                                        </div>
                                                    </div>

                                                    <!-- slider content -->
                                                    <div class="resp-slider-container">
                                                        <div class="slider responsive">
                                                            <div class="item product">
                                                                <div class="item-wrap">
                                                                    <div class="item-detail">
                                                                        <div class="item-content">
                                                                            <!-- rating  -->
                                                                            <div class="reviews-content">
                                                                                <div class="star">
                                                                                    <span style="width:63px"></span>
                                                                                </div>

                                                                                <div class="item-number-rating">2
                                                                                    Review(s)
                                                                                </div>
                                                                            </div>
                                                                            <!-- end rating  -->

                                                                            <h4>
                                                                                <a href="simple_product.html"
                                                                                   title="Cleaner with bag">Cleaner with
                                                                                    bag</a>
                                                                            </h4>

                                                                            <!-- Price -->
                                                                            <div class="item-price">
																						<span>
																							<del>
																								<span
                                                                                                    class="woocommerce-Price-amount amount">
																									<span
                                                                                                        class="woocommerce-Price-currencySymbol">¥</span>390.00
																								</span>
																							</del>

																							<ins>
																								<span
                                                                                                    class="woocommerce-Price-amount amount">
																									<span
                                                                                                        class="woocommerce-Price-currencySymbol">¥</span>350.00
																								</span>
																							</ins>
																						</span>
                                                                            </div>

                                                                            <div class="sale-off">-10%</div>
                                                                        </div>

                                                                        <div class="item-img products-thumb">
                                                                            <span class="onsale">Sale!</span>

                                                                            <a href="simple_product.html">
                                                                                <div class="product-thumb-hover">
                                                                                    <img width="300" height="300"
                                                                                         src="images/1903/22-300x300.jpg"
                                                                                         class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                                         alt=""
                                                                                         srcset="images/1903/22-300x300.jpg 300w, images/1903/22-150x150.jpg 150w, images/1903/22-180x180.jpg 180w, images/1903/22.jpg 600w"
                                                                                         sizes="(max-width: 300px) 100vw, 300px"/>
                                                                                </div>
                                                                            </a>

                                                                            <!-- add to cart, wishlist, compare -->
                                                                            <div class="item-bottom clearfix">
                                                                                <a rel="nofollow" href="#"
                                                                                   class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                                   title="Add to Cart">Add to cart</a>

                                                                                <a href="javascript:void(0)"
                                                                                   class="compare button" rel="nofollow"
                                                                                   title="Add to Compare">Compare</a>

                                                                                <div
                                                                                    class="yith-wcwl-add-to-wishlist add-to-wishlist-248">
                                                                                    <div
                                                                                        class="yith-wcwl-add-button show"
                                                                                        style="display:block">
                                                                                        <a href="#" rel="nofollow"
                                                                                           class="add_to_wishlist">Add
                                                                                            to Wishlist</a>
                                                                                        <img
                                                                                            src="images/wpspin_light.gif"
                                                                                            class="ajax-loading"
                                                                                            alt="loading" width="16"
                                                                                            height="16"
                                                                                            style="visibility:hidden"/>
                                                                                    </div>

                                                                                    <div
                                                                                        class="yith-wcwl-wishlistaddedbrowse hide"
                                                                                        style="display:none;">
                                                                                        <span class="feedback">Product added!</span>
                                                                                        <a href="#" rel="nofollow">Browse
                                                                                            Wishlist</a>
                                                                                    </div>

                                                                                    <div
                                                                                        class="yith-wcwl-wishlistexistsbrowse hide"
                                                                                        style="display:none">
                                                                                        <span class="feedback">The product is already in the wishlist!</span>
                                                                                        <a href="#" rel="nofollow">Browse
                                                                                            Wishlist</a>
                                                                                    </div>

                                                                                    <div style="clear:both"></div>
                                                                                    <div
                                                                                        class="yith-wcwl-wishlistaddresponse"></div>
                                                                                </div>

                                                                                <div class="clear"></div>
                                                                                <a href="#" data-fancybox-type="ajax"
                                                                                   class="sm_quickview_handler-list fancybox fancybox.ajax">Quick
                                                                                    View </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="item-wrap">
                                                                    <div class="item-detail">
                                                                        <div class="item-content">
                                                                            <!-- rating  -->
                                                                            <div class="reviews-content">
                                                                                <div class="star">
                                                                                    <span style="width:63px"></span>
                                                                                </div>

                                                                                <div class="item-number-rating">2
                                                                                    Review(s)
                                                                                </div>
                                                                            </div>
                                                                            <!-- end rating  -->

                                                                            <h4>
                                                                                <a href="simple_product.html"
                                                                                   title="sint turkey">Sint turkey</a>
                                                                            </h4>

                                                                            <!-- Price -->
                                                                            <div class="item-price">
																						<span>
																							<span
                                                                                                class="woocommerce-Price-amount amount">
																								<span
                                                                                                    class="woocommerce-Price-currencySymbol">¥</span>300.00
																							</span>
																						</span>
                                                                            </div>
                                                                        </div>

                                                                        <div class="item-img products-thumb">
                                                                            <a href="simple_product.html">
                                                                                <div class="product-thumb-hover">
                                                                                    <img width="300" height="300"
                                                                                         src="images/1903/60-300x300.jpg"
                                                                                         class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                                         alt=""
                                                                                         srcset="images/1903/60-300x300.jpg 300w, images/1903/60-150x150.jpg 150w, images/1903/60-180x180.jpg 180w, images/1903/60.jpg 600w"
                                                                                         sizes="(max-width: 300px) 100vw, 300px"/>
                                                                                </div>
                                                                            </a>

                                                                            <!-- add to cart, wishlist, compare -->
                                                                            <div class="item-bottom clearfix">
                                                                                <a rel="nofollow" href="#"
                                                                                   class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                                   title="Add to Cart">Add to cart</a>

                                                                                <a href="javascript:void(0)"
                                                                                   class="compare button" rel="nofollow"
                                                                                   title="Add to Compare">Compare</a>

                                                                                <div
                                                                                    class="yith-wcwl-add-to-wishlist add-to-wishlist-248">
                                                                                    <div
                                                                                        class="yith-wcwl-add-button show"
                                                                                        style="display:block">
                                                                                        <a href="#" rel="nofollow"
                                                                                           class="add_to_wishlist">Add
                                                                                            to Wishlist</a>
                                                                                        <img
                                                                                            src="images/wpspin_light.gif"
                                                                                            class="ajax-loading"
                                                                                            alt="loading" width="16"
                                                                                            height="16"
                                                                                            style="visibility:hidden"/>
                                                                                    </div>

                                                                                    <div
                                                                                        class="yith-wcwl-wishlistaddedbrowse hide"
                                                                                        style="display:none;">
                                                                                        <span class="feedback">Product added!</span>
                                                                                        <a href="#" rel="nofollow">Browse
                                                                                            Wishlist</a>
                                                                                    </div>

                                                                                    <div
                                                                                        class="yith-wcwl-wishlistexistsbrowse hide"
                                                                                        style="display:none">
                                                                                        <span class="feedback">The product is already in the wishlist!</span>
                                                                                        <a href="#" rel="nofollow">Browse
                                                                                            Wishlist</a>
                                                                                    </div>

                                                                                    <div style="clear:both"></div>
                                                                                    <div
                                                                                        class="yith-wcwl-wishlistaddresponse"></div>
                                                                                </div>

                                                                                <div class="clear"></div>
                                                                                <a href="#" data-fancybox-type="ajax"
                                                                                   class="sm_quickview_handler-list fancybox fancybox.ajax">Quick
                                                                                    View </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="item product">
                                                                <div class="item-wrap">
                                                                    <div class="item-detail">
                                                                        <div class="item-content">
                                                                            <!-- rating  -->
                                                                            <div class="reviews-content">
                                                                                <div class="star">
                                                                                    <span style="width:63px"></span>
                                                                                </div>

                                                                                <div class="item-number-rating">2
                                                                                    Review(s)
                                                                                </div>
                                                                            </div>
                                                                            <!-- end rating  -->

                                                                            <h4>
                                                                                <a href="simple_product.html"
                                                                                   title="philips stand">Philips
                                                                                    stand</a>
                                                                            </h4>

                                                                            <!-- Price -->
                                                                            <div class="item-price">
																						<span>
																							<del>
																								<span
                                                                                                    class="woocommerce-Price-amount amount">
																									<span
                                                                                                        class="woocommerce-Price-currencySymbol">¥</span>300.00
																								</span>
																							</del>

																							<ins>
																								<span
                                                                                                    class="woocommerce-Price-amount amount">
																									<span
                                                                                                        class="woocommerce-Price-currencySymbol">¥</span>250.00
																								</span>
																							</ins>
																						</span>
                                                                            </div>

                                                                            <div class="sale-off">-17%</div>
                                                                        </div>

                                                                        <div class="item-img products-thumb">
                                                                            <span class="onsale">Sale!</span>

                                                                            <a href="simple_product.html">
                                                                                <div class="product-thumb-hover">
                                                                                    <img width="300" height="300"
                                                                                         src="images/1903/62-300x300.jpg"
                                                                                         class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                                         alt=""
                                                                                         srcset="images/1903/62-300x300.jpg 300w, images/1903/62-150x150.jpg 150w, images/1903/62-180x180.jpg 180w, images/1903/62.jpg 600w"
                                                                                         sizes="(max-width: 300px) 100vw, 300px"/>
                                                                                </div>
                                                                            </a>

                                                                            <!-- add to cart, wishlist, compare -->
                                                                            <div class="item-bottom clearfix">
                                                                                <a rel="nofollow" href="#"
                                                                                   class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                                   title="Add to Cart">Add to cart</a>

                                                                                <a href="javascript:void(0)"
                                                                                   class="compare button" rel="nofollow"
                                                                                   title="Add to Compare">Compare</a>

                                                                                <div
                                                                                    class="yith-wcwl-add-to-wishlist add-to-wishlist-248">
                                                                                    <div
                                                                                        class="yith-wcwl-add-button show"
                                                                                        style="display:block">
                                                                                        <a href="#" rel="nofollow"
                                                                                           class="add_to_wishlist">Add
                                                                                            to Wishlist</a>
                                                                                        <img
                                                                                            src="images/wpspin_light.gif"
                                                                                            class="ajax-loading"
                                                                                            alt="loading" width="16"
                                                                                            height="16"
                                                                                            style="visibility:hidden"/>
                                                                                    </div>

                                                                                    <div
                                                                                        class="yith-wcwl-wishlistaddedbrowse hide"
                                                                                        style="display:none;">
                                                                                        <span class="feedback">Product added!</span>
                                                                                        <a href="#" rel="nofollow">Browse
                                                                                            Wishlist</a>
                                                                                    </div>

                                                                                    <div
                                                                                        class="yith-wcwl-wishlistexistsbrowse hide"
                                                                                        style="display:none">
                                                                                        <span class="feedback">The product is already in the wishlist!</span>
                                                                                        <a href="#" rel="nofollow">Browse
                                                                                            Wishlist</a>
                                                                                    </div>

                                                                                    <div style="clear:both"></div>
                                                                                    <div
                                                                                        class="yith-wcwl-wishlistaddresponse"></div>
                                                                                </div>

                                                                                <div class="clear"></div>
                                                                                <a href="#" data-fancybox-type="ajax"
                                                                                   class="sm_quickview_handler-list fancybox fancybox.ajax">Quick
                                                                                    View </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="item-wrap">
                                                                    <div class="item-detail">
                                                                        <div class="item-content">
                                                                            <!-- rating  -->
                                                                            <div class="reviews-content">
                                                                                <div class="star">
                                                                                    <span style="width:63px"></span>
                                                                                </div>

                                                                                <div class="item-number-rating">2
                                                                                    Review(s)
                                                                                </div>
                                                                            </div>
                                                                            <!-- end rating  -->

                                                                            <h4>
                                                                                <a href="simple_product.html"
                                                                                   title="Vacuum cleaner">Vacuum
                                                                                    cleaner</a>
                                                                            </h4>

                                                                            <!-- Price -->
                                                                            <div class="item-price">
																						<span>
																							<del>
																								<span
                                                                                                    class="woocommerce-Price-amount amount">
																									<span
                                                                                                        class="woocommerce-Price-currencySymbol">¥</span>350.00
																								</span>
																							</del>

																							<ins>
																								<span
                                                                                                    class="woocommerce-Price-amount amount">
																									<span
                                                                                                        class="woocommerce-Price-currencySymbol">¥</span>260.00
																								</span>
																							</ins>
																						</span>
                                                                            </div>
                                                                            <div class="sale-off">-26%</div>
                                                                        </div>

                                                                        <div class="item-img products-thumb">
                                                                            <span class="onsale">Sale!</span>

                                                                            <a href="simple_product.html">
                                                                                <div class="product-thumb-hover">
                                                                                    <img width="300" height="300"
                                                                                         src="images/1903/26-300x300.jpg"
                                                                                         class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                                         alt=""
                                                                                         srcset="images/1903/26-300x300.jpg 300w, images/1903/26-150x150.jpg 150w, images/1903/26-180x180.jpg 180w, images/1903/26.jpg 600w"
                                                                                         sizes="(max-width: 300px) 100vw, 300px"/>
                                                                                </div>
                                                                            </a>

                                                                            <!-- add to cart, wishlist, compare -->
                                                                            <div class="item-bottom clearfix">
                                                                                <a rel="nofollow" href="#"
                                                                                   class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                                   title="Add to Cart">Add to cart</a>

                                                                                <a href="javascript:void(0)"
                                                                                   class="compare button" rel="nofollow"
                                                                                   title="Add to Compare">Compare</a>

                                                                                <div
                                                                                    class="yith-wcwl-add-to-wishlist add-to-wishlist-248">
                                                                                    <div
                                                                                        class="yith-wcwl-add-button show"
                                                                                        style="display:block">
                                                                                        <a href="#" rel="nofollow"
                                                                                           class="add_to_wishlist">Add
                                                                                            to Wishlist</a>
                                                                                        <img
                                                                                            src="images/wpspin_light.gif"
                                                                                            class="ajax-loading"
                                                                                            alt="loading" width="16"
                                                                                            height="16"
                                                                                            style="visibility:hidden"/>
                                                                                    </div>

                                                                                    <div
                                                                                        class="yith-wcwl-wishlistaddedbrowse hide"
                                                                                        style="display:none;">
                                                                                        <span class="feedback">Product added!</span>
                                                                                        <a href="#" rel="nofollow">Browse
                                                                                            Wishlist</a>
                                                                                    </div>

                                                                                    <div
                                                                                        class="yith-wcwl-wishlistexistsbrowse hide"
                                                                                        style="display:none">
                                                                                        <span class="feedback">The product is already in the wishlist!</span>
                                                                                        <a href="#" rel="nofollow">Browse
                                                                                            Wishlist</a>
                                                                                    </div>

                                                                                    <div style="clear:both"></div>
                                                                                    <div
                                                                                        class="yith-wcwl-wishlistaddresponse"></div>
                                                                                </div>

                                                                                <div class="clear"></div>
                                                                                <a href="#" data-fancybox-type="ajax"
                                                                                   class="sm_quickview_handler-list fancybox fancybox.ajax">Quick
                                                                                    View </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="item product">
                                                                <div class="item-wrap">
                                                                    <div class="item-detail">
                                                                        <div class="item-content">
                                                                            <!-- rating  -->
                                                                            <div class="reviews-content">
                                                                                <div class="star">
                                                                                    <span style="width:63px"></span>
                                                                                </div>

                                                                                <div class="item-number-rating">2
                                                                                    Review(s)
                                                                                </div>
                                                                            </div>
                                                                            <!-- end rating  -->

                                                                            <h4>
                                                                                <a href="simple_product.html"
                                                                                   title="nisi ball tip">Nisi ball
                                                                                    tip</a>
                                                                            </h4>

                                                                            <!-- Price -->
                                                                            <div class="item-price">
																						<span>
																							<del>
																								<span
                                                                                                    class="woocommerce-Price-amount amount">
																									<span
                                                                                                        class="woocommerce-Price-currencySymbol">¥</span>460.00
																								</span>
																							</del>

																							<ins>
																								<span
                                                                                                    class="woocommerce-Price-amount amount">
																									<span
                                                                                                        class="woocommerce-Price-currencySymbol">¥</span>400.00
																								</span>
																							</ins>
																						</span>
                                                                            </div>

                                                                            <div class="sale-off">-13%</div>
                                                                        </div>

                                                                        <div class="item-img products-thumb">
                                                                            <span class="onsale">Sale!</span>

                                                                            <a href="simple_product.html">
                                                                                <div class="product-thumb-hover">
                                                                                    <img width="300" height="300"
                                                                                         src="images/1903/11-300x300.jpg"
                                                                                         class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                                         alt=""
                                                                                         srcset="images/1903/11-300x300.jpg 300w, images/1903/11-150x150.jpg 150w, images/1903/11-180x180.jpg 180w, images/1903/11.jpg 600w"
                                                                                         sizes="(max-width: 300px) 100vw, 300px"/>
                                                                                </div>
                                                                            </a>

                                                                            <!-- add to cart, wishlist, compare -->
                                                                            <div class="item-bottom clearfix">
                                                                                <a rel="nofollow" href="#"
                                                                                   class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                                   title="Add to Cart">Add to cart</a>

                                                                                <a href="javascript:void(0)"
                                                                                   class="compare button" rel="nofollow"
                                                                                   title="Add to Compare">Compare</a>

                                                                                <div
                                                                                    class="yith-wcwl-add-to-wishlist add-to-wishlist-248">
                                                                                    <div
                                                                                        class="yith-wcwl-add-button show"
                                                                                        style="display:block">
                                                                                        <a href="#" rel="nofollow"
                                                                                           class="add_to_wishlist">Add
                                                                                            to Wishlist</a>
                                                                                        <img
                                                                                            src="images/wpspin_light.gif"
                                                                                            class="ajax-loading"
                                                                                            alt="loading" width="16"
                                                                                            height="16"
                                                                                            style="visibility:hidden"/>
                                                                                    </div>

                                                                                    <div
                                                                                        class="yith-wcwl-wishlistaddedbrowse hide"
                                                                                        style="display:none;">
                                                                                        <span class="feedback">Product added!</span>
                                                                                        <a href="#" rel="nofollow">Browse
                                                                                            Wishlist</a>
                                                                                    </div>

                                                                                    <div
                                                                                        class="yith-wcwl-wishlistexistsbrowse hide"
                                                                                        style="display:none">
                                                                                        <span class="feedback">The product is already in the wishlist!</span>
                                                                                        <a href="#" rel="nofollow">Browse
                                                                                            Wishlist</a>
                                                                                    </div>

                                                                                    <div style="clear:both"></div>
                                                                                    <div
                                                                                        class="yith-wcwl-wishlistaddresponse"></div>
                                                                                </div>

                                                                                <div class="clear"></div>
                                                                                <a href="#" data-fancybox-type="ajax"
                                                                                   class="sm_quickview_handler-list fancybox fancybox.ajax">Quick
                                                                                    View </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="item-wrap">
                                                                    <div class="item-detail">
                                                                        <div class="item-content">
                                                                            <!-- rating  -->
                                                                            <div class="reviews-content">
                                                                                <div class="star">
                                                                                    <span style="width:63px"></span>
                                                                                </div>

                                                                                <div class="item-number-rating">2
                                                                                    Review(s)
                                                                                </div>
                                                                            </div>
                                                                            <!-- end rating  -->

                                                                            <h4>
                                                                                <a href="simple_product.html"
                                                                                   title="exercitation jerky">Exercitation
                                                                                    jerky</a>
                                                                            </h4>

                                                                            <!-- Price -->
                                                                            <div class="item-price">
																						<span>
																							<span
                                                                                                class="woocommerce-Price-amount amount">
																								<span
                                                                                                    class="woocommerce-Price-currencySymbol">¥</span>260.00
																							</span>
																						</span>
                                                                            </div>
                                                                        </div>

                                                                        <div class="item-img products-thumb">
                                                                            <a href="simple_product.html">
                                                                                <div class="product-thumb-hover">
                                                                                    <img width="300" height="300"
                                                                                         src="images/1903/61-300x300.jpg"
                                                                                         class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                                         alt=""
                                                                                         srcset="images/1903/61-300x300.jpg 300w, images/1903/61-150x150.jpg 150w, images/1903/61-180x180.jpg 180w, images/1903/61.jpg 600w"
                                                                                         sizes="(max-width: 300px) 100vw, 300px"/>
                                                                                </div>
                                                                            </a>

                                                                            <!-- add to cart, wishlist, compare -->
                                                                            <div class="item-bottom clearfix">
                                                                                <a rel="nofollow" href="#"
                                                                                   class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                                                   title="Add to Cart">Add to cart</a>

                                                                                <a href="javascript:void(0)"
                                                                                   class="compare button" rel="nofollow"
                                                                                   title="Add to Compare">Compare</a>

                                                                                <div
                                                                                    class="yith-wcwl-add-to-wishlist add-to-wishlist-248">
                                                                                    <div
                                                                                        class="yith-wcwl-add-button show"
                                                                                        style="display:block">
                                                                                        <a href="#" rel="nofollow"
                                                                                           class="add_to_wishlist">Add
                                                                                            to Wishlist</a>
                                                                                        <img
                                                                                            src="images/wpspin_light.gif"
                                                                                            class="ajax-loading"
                                                                                            alt="loading" width="16"
                                                                                            height="16"
                                                                                            style="visibility:hidden"/>
                                                                                    </div>

                                                                                    <div
                                                                                        class="yith-wcwl-wishlistaddedbrowse hide"
                                                                                        style="display:none;">
                                                                                        <span class="feedback">Product added!</span>
                                                                                        <a href="#" rel="nofollow">Browse
                                                                                            Wishlist</a>
                                                                                    </div>

                                                                                    <div
                                                                                        class="yith-wcwl-wishlistexistsbrowse hide"
                                                                                        style="display:none">
                                                                                        <span class="feedback">The product is already in the wishlist!</span>
                                                                                        <a href="#" rel="nofollow">Browse
                                                                                            Wishlist</a>
                                                                                    </div>

                                                                                    <div style="clear:both"></div>
                                                                                    <div
                                                                                        class="yith-wcwl-wishlistaddresponse"></div>
                                                                                </div>

                                                                                <div class="clear"></div>
                                                                                <a href="#" data-fancybox-type="ajax"
                                                                                   class="sm_quickview_handler-list fancybox fancybox.ajax">Quick
                                                                                    View </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="best-seller-product">
                                                    <div class="box-slider-title">
                                                        <h2 class="page-title-slider">Best sellers</h2>
                                                    </div>

                                                    <div class="wrap-content">
                                                        <div class="item">
                                                            <div class="item-inner">
                                                                <div class="item-img">
                                                                    <a href="simple_product.html"
                                                                       title="Vacuum cleaner">
                                                                        <img width="180" height="180"
                                                                             src="images/1903/26-180x180.jpg"
                                                                             class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image"
                                                                             alt=""
                                                                             srcset="images/1903/26-180x180.jpg 180w, images/1903/26-150x150.jpg 150w, images/1903/26-300x300.jpg 300w, images/1903/26.jpg 600w"
                                                                             sizes="(max-width: 180px) 100vw, 180px"/>
                                                                    </a>
                                                                </div>

                                                                <div class="item-sl pull-left">1</div>

                                                                <div class="item-content">
                                                                    <!-- rating  -->
                                                                    <div class="reviews-content">
                                                                        <div class="star">
                                                                            <span style="width:52.5px"></span>
                                                                        </div>

                                                                        <div class="item-number-rating">
                                                                            4 Review(s)
                                                                        </div>
                                                                    </div>
                                                                    <!-- end rating  -->

                                                                    <h4>
                                                                        <a href="simple_product.html"
                                                                           title="Vacuum cleaner">Vacuum cleaner</a>
                                                                    </h4>

                                                                    <div class="item-price">
                                                                        <del>
																					<span
                                                                                        class="woocommerce-Price-amount amount">
																						<span
                                                                                            class="woocommerce-Price-currencySymbol">¥</span>350.00
																					</span>
                                                                        </del>

                                                                        <ins>
																					<span
                                                                                        class="woocommerce-Price-amount amount">
																						<span
                                                                                            class="woocommerce-Price-currencySymbol">¥</span>260.00
																					</span>
                                                                        </ins>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="item">
                                                            <div class="item-inner">
                                                                <div class="item-img">
                                                                    <a href="simple_product.html" title="philips stand">
                                                                        <img width="180" height="180"
                                                                             src="images/1903/62-180x180.jpg"
                                                                             class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image"
                                                                             alt=""
                                                                             srcset="images/1903/62-180x180.jpg 180w, images/1903/62-150x150.jpg 150w, images/1903/62-300x300.jpg 300w, images/1903/62.jpg 600w"
                                                                             sizes="(max-width: 180px) 100vw, 180px"/>
                                                                    </a>
                                                                </div>

                                                                <div class="item-sl pull-left">2</div>

                                                                <div class="item-content">
                                                                    <!-- rating  -->
                                                                    <div class="reviews-content">
                                                                        <div class="star"></div>

                                                                        <div class="item-number-rating">
                                                                            0 Review(s)
                                                                        </div>
                                                                    </div>
                                                                    <!-- end rating  -->

                                                                    <h4>
                                                                        <a href="simple_product.html"
                                                                           title="philips stand">philips stand</a>
                                                                    </h4>

                                                                    <div class="item-price">
                                                                        <del>
																					<span
                                                                                        class="woocommerce-Price-amount amount">
																						<span
                                                                                            class="woocommerce-Price-currencySymbol">¥</span>300.00
																					</span>
                                                                        </del>

                                                                        <ins>
																					<span
                                                                                        class="woocommerce-Price-amount amount">
																						<span
                                                                                            class="woocommerce-Price-currencySymbol">¥</span>250.00
																					</span>
                                                                        </ins>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="item">
                                                            <div class="item-inner">
                                                                <div class="item-img">
                                                                    <a href="simple_product.html"
                                                                       title="exercitation jerky">
                                                                        <img width="180" height="180"
                                                                             src="images/1903/61-180x180.jpg"
                                                                             class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image"
                                                                             alt=""
                                                                             srcset="images/1903/61-180x180.jpg 180w, images/1903/61-150x150.jpg 150w, images/1903/61-300x300.jpg 300w, images/1903/61.jpg 600w"
                                                                             sizes="(max-width: 180px) 100vw, 180px"/>
                                                                    </a>
                                                                </div>

                                                                <div class="item-sl pull-left">3</div>

                                                                <div class="item-content">
                                                                    <!-- rating  -->
                                                                    <div class="reviews-content">
                                                                        <div class="star">
                                                                            <span style="width:35px"></span>
                                                                        </div>

                                                                        <div class="item-number-rating">
                                                                            2 Review(s)
                                                                        </div>
                                                                    </div>
                                                                    <!-- end rating  -->

                                                                    <h4>
                                                                        <a href="simple_product.html"
                                                                           title="exercitation jerky">Exercitation
                                                                            jerky</a>
                                                                    </h4>

                                                                    <div class="item-price">
																				<span
                                                                                    class="woocommerce-Price-amount amount">
																					<span
                                                                                        class="woocommerce-Price-currencySymbol">¥</span>260.00
																				</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="item">
                                                            <div class="item-inner">
                                                                <div class="item-img">
                                                                    <a href="simple_product.html" title="nisi ball tip">
                                                                        <img width="180" height="180"
                                                                             src="images/1903/11-180x180.jpg"
                                                                             class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image"
                                                                             alt=""
                                                                             srcset="images/1903/11-180x180.jpg 180w, images/1903/11-150x150.jpg 150w, images/1903/11-300x300.jpg 300w, images/1903/11.jpg 600w"
                                                                             sizes="(max-width: 180px) 100vw, 180px"/>
                                                                    </a>
                                                                </div>

                                                                <div class="item-sl pull-left">4</div>

                                                                <div class="item-content">
                                                                    <!-- rating  -->
                                                                    <div class="reviews-content">
                                                                        <div class="star"></div>

                                                                        <div class="item-number-rating">
                                                                            0 Review(s)
                                                                        </div>
                                                                    </div>
                                                                    <!-- end rating  -->

                                                                    <h4>
                                                                        <a href="simple_product.html"
                                                                           title="nisi ball tip">Nisi ball tip</a>
                                                                    </h4>

                                                                    <div class="item-price">
                                                                        <del>
																					<span
                                                                                        class="woocommerce-Price-amount amount">
																						<span
                                                                                            class="woocommerce-Price-currencySymbol">¥</span>460.00
																					</span>
                                                                        </del>

                                                                        <ins>
																					<span
                                                                                        class="woocommerce-Price-amount amount">
																						<span
                                                                                            class="woocommerce-Price-currencySymbol">¥</span>400.00
																					</span>
                                                                        </ins>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="item">
                                                            <div class="item-inner">
                                                                <div class="item-img">
                                                                    <a href="simple_product.html"
                                                                       title="Cleaner with bag">
                                                                        <img width="180" height="180"
                                                                             src="images/1903/22-180x180.jpg"
                                                                             class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image"
                                                                             alt=""
                                                                             srcset="images/1903/22-180x180.jpg 180w, images/1903/22-150x150.jpg 150w, images/1903/22-300x300.jpg 300w, images/1903/22.jpg 600w"
                                                                             sizes="(max-width: 180px) 100vw, 180px"/>
                                                                    </a>
                                                                </div>

                                                                <div class="item-sl pull-left">5</div>

                                                                <div class="item-content">
                                                                    <!-- rating  -->
                                                                    <div class="reviews-content">
                                                                        <div class="star">
                                                                            <span style="width:63px"></span>
                                                                        </div>

                                                                        <div class="item-number-rating">
                                                                            2 Review(s)
                                                                        </div>
                                                                    </div>
                                                                    <!-- end rating  -->

                                                                    <h4>
                                                                        <a href="simple_product.html"
                                                                           title="Cleaner with bag">Cleaner with bag</a>
                                                                    </h4>

                                                                    <div class="item-price">
                                                                        <del>
																					<span
                                                                                        class="woocommerce-Price-amount amount">
																						<span
                                                                                            class="woocommerce-Price-currencySymbol">¥</span>390.00
																					</span>
                                                                        </del>

                                                                        <ins>
																					<span
                                                                                        class="woocommerce-Price-amount amount">
																						<span
                                                                                            class="woocommerce-Price-currencySymbol">¥</span>350.00
																					</span>
                                                                        </ins>
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
                            </div>
                        </div>

                        <div class="vc_row wpb_row vc_row-fluid">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
