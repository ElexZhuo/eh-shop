<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1 , maximum-scale=1.0, user-scalable=no">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="page page-id-6 home-style1 woocommerce-account">
<?php $this->beginBody() ?>
<div class="body-wrapper theme-clearfix">
    <header id="header" class="header header-style1">
        <div class="header-top clearfix">
            <div class="container">
                <div class="rows">
                    <!-- SIDEBAR TOP MENU -->
                    <div class="pull-left top1">
                        <div class="widget text-2 widget_text pull-left">
                            <div class="widget-inner">
                                <div class="textwidget">
                                    <div class="call-us"><span>如需定制，</span>欢迎咨询</div>
                                </div>
                            </div>
                        </div>

                        <div class="widget text-3 widget_text pull-left">
                            <div class="widget-inner">
                                <div class="textwidget">
                                    <div class="textwidget">

                                        <div class="call-us"><span>微信: </span>yes204</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="wrap-myacc pull-right">
                        <div class="sidebar-account pull-left">
                            <div class="account-title">我的</div>

                            <div id="my-account" class="my-account">
                                <div class="widget-1 widget-first widget nav_menu-4 widget_nav_menu">
                                    <div class="widget-inner">
                                        <ul id="menu-my-account" class="menu">
                                            <li class="menu-my-account">
                                                <a class="item-link" href="<?php echo \yii\helpers\Url::to(['account/index']) ?>">
                                                    <span class="menu-title">账户信息</span>
                                                </a>
                                            </li>

                                            <li class="menu-cart">
                                                <a class="item-link" href="<?php echo \yii\helpers\Url::to(['cart/index']) ?>">
                                                    <span class="menu-title">购物车</span>
                                                </a>
                                            </li>

                                            <li class="menu-checkout">
                                                <a class="item-link" href="<?php echo \yii\helpers\Url::to(['check-out/index']) ?>">
                                                    <span class="menu-title">订单</span>
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>

                                <div class="widget-2 widget-last widget sw_top-4 sw_top">
                                    <div class="widget-inner">
                                        <div class="top-login">
                                            <div class="div-logined">
                                                <ul>
                                                    <li>
                                                        <a href="javascript:void(0);" data-toggle="modal"
                                                           data-target="#login_form">
                                                            <span>登陆</span>
                                                        </a>
                                                        <span class="wg">欢迎您</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="pull-left top2">
                            <div class="widget-1 widget-first widget nav_menu-2 widget_nav_menu">
                                <div class="widget-inner">
                                    <ul id="menu-checkout" class="menu">
                                        <li class="menu-checkout">
                                            <a class="item-link" href="#">
                                                <span class="menu-title">预留</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="header-mid clearfix">
            <div class="container">
                <div class="rows">
                    <!-- LOGO -->
                    <div class="etrostore-logo pull-left">
                        <a href="<?php echo \yii\helpers\Url::to(['site/index'])?>">
                            <img src="images/icons/logo-orange.png" alt="Shoopy">
                        </a>
                    </div>

                    <div class="mid-header pull-right">
                        <div class="widget-1 widget-first widget sw_top-2 sw_top">
                            <div class="widget-inner">
                                <div class="top-form top-search">
                                    <div class="topsearch-entry">
                                        <form method="get" action="">
                                            <div>
                                                <input type="text" value="" name="s"
                                                       placeholder="请输入你要的关键字">
                                                <div class="cat-wrapper">
                                                    <label class="label-search">
                                                        <select name="search_category" class="s1_option">
                                                            <option value="">所有</option>
                                                            <option value="8">家用电器</option>
                                                            <option value="13">数码</option>
                                                            <option value="14">男装</option>
                                                            <option value="15">女装</option>
                                                            <option value="16">汽车</option>
                                                            <option value="17">食品</option>
                                                            <option value="18">......</option>
                                                        </select>
                                                    </label>
                                                </div>

                                                <button type="submit" title="Search"
                                                        class="fa fa-search button-search-pro form-button"></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="widget sw_top-3 sw_top pull-left">
                            <div class="widget-inner">
                                <div class="top-form top-form-minicart etrostore-minicart pull-right">
                                    <div class="top-minicart-icon pull-right">
                                        <i class="fa fa-shopping-cart"></i>
                                        <a class="cart-contents" href="<?php echo yii\helpers\Url::to(['cart/index']) ?>" title="View your shopping cart">
                                            <span class="minicart-number">2</span>
                                        </a>
                                    </div>

                                    <div class="wrapp-minicart">
                                        <div class="minicart-padding">
                                            <div class="number-item">
                                                购物车包含2件商品
                                            </div>

                                            <ul class="minicart-content">
                                                <li>
                                                    <a href="#" class="product-image">
                                                        <img width="100" height="100" src="images/1903/45-150x150.jpg"
                                                             class="attachment-100x100 size-100x100 wp-post-image"
                                                             alt=""
                                                             srcset="images/1903/45-150x150.jpg 150w, images/1903/45-300x300.jpg 300w, images/1903/45-180x180.jpg 180w, images/1903/45.jpg 600w"
                                                             sizes="(max-width: 100px) 100vw, 100px"/>
                                                    </a>

                                                    <div class="detail-item">
                                                        <div class="product-details">
                                                            <h4>
                                                                <a class="title-item" href="#">耳机</a>
                                                            </h4>

                                                            <div class="product-price">
																	<span class="price">
																		<span class="woocommerce-Price-amount amount">
																			<span
                                                                                class="woocommerce-Price-currencySymbol">¥</span>190.00
																		</span>
																	</span>

                                                                <div class="qty">
                                                                    <span class="qty-number">1</span>
                                                                </div>
                                                            </div>

                                                            <div class="product-action clearfix">
                                                                <a href="#" class="btn-remove" title="Remove this item">
                                                                    <span class="fa fa-trash-o"></span>
                                                                </a>

                                                                <a class="btn-edit" href="<?php echo yii\helpers\Url::to(['cart/index']) ?>"
                                                                   title="View your shopping cart">
                                                                    <span class="fa fa-pencil"></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li>
                                                    <a href="#" class="product-image">
                                                        <img width="100" height="100" src="images/1903/22-150x150.jpg"
                                                             class="attachment-100x100 size-100x100 wp-post-image"
                                                             alt=""
                                                             srcset="images/1903/22-150x150.jpg 150w, images/1903/22-300x300.jpg 300w, images/1903/22-180x180.jpg 180w, images/1903/22.jpg 600w"
                                                             sizes="(max-width: 100px) 100vw, 100px"/>
                                                    </a>

                                                    <div class="detail-item">
                                                        <div class="product-details">
                                                            <h4>
                                                                <a class="title-item" href="#">吸尘器</a>
                                                            </h4>

                                                            <div class="product-price">
																	<span class="price">
																		<span class="woocommerce-Price-amount amount">
																			<span
                                                                                class="woocommerce-Price-currencySymbol">¥</span>350.00
																		</span>
																	</span>

                                                                <div class="qty">
                                                                    <span class="qty-number">1</span>
                                                                </div>
                                                            </div>

                                                            <div class="product-action clearfix">
                                                                <a href="#" class="btn-remove" title="Remove this item">
                                                                    <span class="fa fa-trash-o"></span>
                                                                </a>

                                                                <a class="btn-edit" href="<?php echo yii\helpers\Url::to(['cart/index']) ?>"
                                                                   title="View your shopping cart">
                                                                    <span class="fa fa-pencil"></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>

                                            <div class="cart-checkout">
                                                <div class="price-total">
                                                    <span class="label-price-total">总共</span>

                                                    <span class="price-total-w">
															<span class="price">
																<span class="woocommerce-Price-amount amount">
																	<span
                                                                        class="woocommerce-Price-currencySymbol">¥</span>540.00
																</span>
															</span>
														</span>
                                                </div>

                                                <div class="cart-links clearfix">
                                                    <div class="cart-link">
                                                        <a href="<?php echo yii\helpers\Url::to(['cart/index']) ?>" title="Cart">查看购物车</a>
                                                    </div>

                                                    <div class="checkout-link">
                                                        <a href="<?php echo yii\helpers\Url::to(['check-out/index']) ?>" title="Check Out">结算</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="widget nav_menu-3 widget_nav_menu pull-left">
                            <div class="widget-inner">
                                <ul id="menu-wishlist" class="menu">
                                    <li class="menu-wishlist">
                                        <a class="item-link" href="#">
                                            <span class="menu-title">Wishlist</span>
                                        </a>
                                    </li>

                                    <li class="yith-woocompare-open menu-compare">
                                        <a class="item-link compare" href="#">
                                            <span class="menu-title">Compare</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="header-bottom clearfix">
            <div class="container">
                <div class="rows">
                    <!-- Primary navbar -->
                    <div id="main-menu" class="main-menu">
                        <nav id="primary-menu" class="primary-menu">
                            <div class="navbar-inner navbar-inverse">
                                <div class="resmenu-container">
                                    <button class="navbar-toggle" type="button" data-toggle="collapse"
                                            data-target="#ResMenuprimary_menu">
                                        <span class="sr-only">Categories</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>

                                    <div id="ResMenuprimary_menu" class="collapse menu-responsive-wrapper">
                                        <ul id="menu-primary-menu" class="etrostore_resmenu">
                                            <li><a href="<?php echo yii\helpers\Url::to(['site/index']) ?>">首页</a></li>
                                            <li><a href="<?php echo str_replace('frontend','backend',Yii::$app->homeUrl) ?>">后台管理</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <ul id="menu-primary-menu-1"
                                    class="nav nav-pills nav-mega etrostore-mega etrostore-menures">
                                    <li><a href="<?php echo yii\helpers\Url::to(['site/index']) ?>">首页</a></li>
                                    <li><a href="<?php echo str_replace('frontend','backend',Yii::$app->homeUrl) ?>">后台管理</a></li>

                                </ul>
                            </div>
                        </nav>
                    </div>
                    <!-- /Primary navbar -->

                    <div class="top-form top-form-minicart etrostore-minicart pull-right">
                        <div class="top-minicart-icon pull-right">
                            <i class="fa fa-shopping-cart"></i>
                            <a class="cart-contents" href="cart.html" title="View your shopping cart">
                                <span class="minicart-number">2</span>
                            </a>
                        </div>

                        <div class="wrapp-minicart">
                            <div class="minicart-padding">
                                <div class="number-item">
                                    There are <span>items</span> in your cart
                                </div>

                                <ul class="minicart-content">
                                    <li>
                                        <a href="simple_product.html" class="product-image">
                                            <img width="100" height="100" src="images/1903/45-150x150.jpg"
                                                 class="attachment-100x100 size-100x100 wp-post-image" alt=""
                                                 srcset="images/1903/45-150x150.jpg 150w, images/1903/45-300x300.jpg 300w, images/1903/45-180x180.jpg 180w, images/1903/45.jpg 600w"
                                                 sizes="(max-width: 100px) 100vw, 100px"/>
                                        </a>

                                        <div class="detail-item">
                                            <div class="product-details">
                                                <h4>
                                                    <a class="title-item" href="simple_product.html">Veniam Dolore</a>
                                                </h4>

                                                <div class="product-price">
														<span class="price">
															<span class="woocommerce-Price-amount amount">
																<span class="woocommerce-Price-currencySymbol">¥</span>190.00
															</span>
														</span>

                                                    <div class="qty">
                                                        <span class="qty-number">1</span>
                                                    </div>
                                                </div>

                                                <div class="product-action clearfix">
                                                    <a href="#" class="btn-remove" title="Remove this item">
                                                        <span class="fa fa-trash-o"></span>
                                                    </a>

                                                    <a class="btn-edit" href="cart.html"
                                                       title="View your shopping cart">
                                                        <span class="fa fa-pencil"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <a href="simple_product.html" class="product-image">
                                            <img width="100" height="100" src="images/1903/22-150x150.jpg"
                                                 class="attachment-100x100 size-100x100 wp-post-image" alt=""
                                                 srcset="images/1903/22-150x150.jpg 150w, images/1903/22-300x300.jpg 300w, images/1903/22-180x180.jpg 180w, images/1903/22.jpg 600w"
                                                 sizes="(max-width: 100px) 100vw, 100px"/>
                                        </a>

                                        <div class="detail-item">
                                            <div class="product-details">
                                                <h4>
                                                    <a class="title-item" href="simple_product.html">Cleaner with
                                                        bag</a>
                                                </h4>

                                                <div class="product-price">
														<span class="price">
															<span class="woocommerce-Price-amount amount">
																<span class="woocommerce-Price-currencySymbol">¥</span>350.00
															</span>
														</span>

                                                    <div class="qty">
                                                        <span class="qty-number">1</span>
                                                    </div>
                                                </div>

                                                <div class="product-action clearfix">
                                                    <a href="#" class="btn-remove" title="Remove this item">
                                                        <span class="fa fa-trash-o"></span>
                                                    </a>

                                                    <a class="btn-edit" href="cart.html"
                                                       title="View your shopping cart">
                                                        <span class="fa fa-pencil"></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>

                                <div class="cart-checkout">
                                    <div class="price-total">
                                        <span class="label-price-total">Total</span>

                                        <span class="price-total-w">
												<span class="price">
													<span class="woocommerce-Price-amount amount">
														<span class="woocommerce-Price-currencySymbol">¥</span>540.00
													</span>
												</span>
											</span>
                                    </div>

                                    <div class="cart-links clearfix">
                                        <div class="cart-link">
                                            <a href="cart.html" title="Cart">查看购物车</a>
                                        </div>

                                        <div class="checkout-link">
                                            <a href="#" title="Check Out">结算</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mid-header pull-right">
                        <div class="widget sw_top">
								<span class="stick-sr">
									<i class="fa fa-search" aria-hidden="true"></i>
								</span>

                            <div class="top-form top-search">
                                <div class="topsearch-entry">
                                    <form role="search" method="get" class="form-search searchform" action="">
                                        <label class="hide"></label>
                                        <input type="text" value="" name="s" class="search-query"
                                               placeholder="Keyword here..."/>
                                        <button type="submit" class="button-search-pro form-button">Search</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="listings-title">
        <div class="container">
            <div class="wrap-title">
                <h1>Home</h1>

                <div class="bread">
                    <div class="breadcrumbs theme-clearfix">
                        <div class="container">
                            <ul class="breadcrumb">
                                <li>
                                    <a href="#">Home</a>
                                    <span class="go-page"></span>
                                </li>

                                <li class="active">
                                    <span>Home</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <p></p>
        <p></p>
        <?= $content ?>
    </div>

    <footer id="footer" class="footer default theme-clearfix">
        <!-- Content footer -->
        <div class="container">


            <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true"
                 class="vc_row wpb_row vc_row-fluid footer-style1 vc_row-no-padding">
                <div class="container float wpb_column vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner ">
                        <div class="wpb_wrapper">
                            <div class="vc_row wpb_row vc_inner vc_row-fluid footer-top">
                                <div class="wpb_column vc_column_container vc_col-sm-8">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div class="wpb_text_column wpb_content_element ">
                                                <div class="wpb_wrapper">
                                                    <div class="wrap-newletter">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="wpb_column vc_column_container vc_col-sm-4">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div class="wpb_raw_code wpb_content_element wpb_raw_html">
                                                <div class="wpb_wrapper">
                                                    <div class="shop-social">
                                                        <ul>
                                                            <li>
                                                                <a href="#">
                                                                    <i class="fa fa-facebook"></i>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href="#">
                                                                    <i class="fa fa-twitter"></i>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href="#">
                                                                    <i class="fa fa-google-plus"></i>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href="#">
                                                                    <i class="fa fa-linkedin"></i>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a href="#">
                                                                    <i class="fa fa-pinterest-p"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="vc_row wpb_row vc_inner vc_row-fluid footer-bottom">
                                <div
                                    class="item-res wpb_column vc_column_container vc_col-sm-6 vc_col-lg-4 vc_col-md-4 vc_col-xs-12">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div class="wpb_text_column wpb_content_element ">
                                                <div class="wpb_wrapper">
                                                    <div class="ya-logo">
                                                        <a href="#">
                                                            <img src="images/icons/logo-footer.png" alt="logo"/>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="wpb_raw_code wpb_content_element wpb_raw_html">
                                                <div class="wpb_wrapper">
                                                    <div class="infomation">
                                                        <p>
                                                            嗯哼科技成立于2017.12.12。
                                                        </p>

                                                        <div class="info-support">
                                                            <ul>
                                                                <li>广东省深圳市龙华区</li>
                                                                <li>微信 ：yes204</li>
                                                                <li><a href="mailto:469251369@qq.com">469251369@qq.com</a>
                                                                </li>
                                                            </ul>
                                                        </div>

                                                        <div class="store">
                                                            <a href="#">
                                                                <img src="images/1903/app-store.png" alt="store"
                                                                     title="store"/>
                                                            </a>

                                                            <a href="#">
                                                                <img src="images/1903/google-store.png" alt="store"
                                                                     title="store"/>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="item-res wpb_column vc_column_container vc_col-sm-6 vc_col-lg-2 vc_col-md-2 vc_col-xs-12">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div class="vc_wp_custommenu wpb_content_element">
                                                <div class="widget widget_nav_menu">
                                                    <h2 class="widgettitle">技术支持</h2>

                                                    <ul id="menu-support" class="menu">
                                                        <li class="menu-product-support">
                                                            <a class="item-link" href="#">
                                                                <span class="menu-title">XXXXXXX</span>
                                                            </a>
                                                        </li>

                                                        <li class="menu-pc-setup-support-services">
                                                            <a class="item-link" href="#">
                                                                <span
                                                                    class="menu-title">XXXXXXX & XXXXXXX XXXXXXX</span>
                                                            </a>
                                                        </li>

                                                        <li class="menu-extended-service-plans">
                                                            <a class="item-link" href="#">
                                                                <span class="menu-title">XXXXXXX XXXXXXX XXXXXXX</span>
                                                            </a>
                                                        </li>

                                                        <li class="menu-community">
                                                            <a class="item-link" href="#">
                                                                <span class="menu-title">XXXXXXX</span>
                                                            </a>
                                                        </li>

                                                        <li class="menu-product-manuals">
                                                            <a class="item-link" href="#">
                                                                <span class="menu-title">XXXXXXX XXXXXXX</span>
                                                            </a>
                                                        </li>

                                                        <li class="menu-product-registration">
                                                            <a class="item-link" href="#">
                                                                <span class="menu-title">XXXXXXX XXXXXXX</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="item-res wpb_column vc_column_container vc_col-sm-6 vc_col-lg-2 vc_col-md-2 vc_col-xs-12">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div class="vc_wp_custommenu wpb_content_element">
                                                <div class="widget widget_nav_menu">
                                                    <h2 class="widgettitle">友情链接</h2>

                                                    <ul id="menu-your-links" class="menu">
                                                        <li class="menu-my-account">
                                                            <a class="item-link" href="my_account.html">
                                                                <span class="menu-title">XXXXXXX </span>
                                                            </a>
                                                        </li>

                                                        <li class="menu-order-tracking">
                                                            <a class="item-link" href="#">
                                                                <span class="menu-title">XXXXXXX XXXXXXX</span>
                                                            </a>
                                                        </li>

                                                        <li class="menu-watch-list">
                                                            <a class="item-link" href="#">
                                                                <span class="menu-title">XXXXXXX XXXXXXX</span>
                                                            </a>
                                                        </li>

                                                        <li class="menu-customer-service">
                                                            <a class="item-link" href="#">
                                                                <span class="menu-title">XXXXXXX XXXXXXX</span>
                                                            </a>
                                                        </li>

                                                        <li class="menu-returns-exchanges">
                                                            <a class="item-link" href="#">
                                                                <span class="menu-title">XXXXXXX / XXXXXXX</span>
                                                            </a>
                                                        </li>

                                                        <li class="menu-faqs">
                                                            <a class="item-link" href="#">
                                                                <span class="menu-title">XXXXXXX</span>
                                                            </a>
                                                        </li>

                                                        <li class="menu-financing">
                                                            <a class="item-link" href="#">
                                                                <span class="menu-title">XXXXXXX</span>
                                                            </a>
                                                        </li>

                                                        <li class="menu-card">
                                                            <a class="item-link" href="#">
                                                                <span class="menu-title">XXXXXXX</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="item-res wpb_column vc_column_container vc_col-sm-6 vc_col-lg-4 vc_col-md-4 vc_col-xs-12">
                                    <div class="vc_column-inner ">
                                        <div class="wpb_wrapper">
                                            <div class="wpb_raw_code wpb_content_element wpb_raw_html">
                                                <div class="wpb_wrapper">
                                                    <div class="sp-map">
                                                        <div class="title">
                                                            <h2>XXXXXXX XXXXXXX</h2>
                                                        </div>

                                                        <img src="images/1903/map.jpg" alt="map" title="map"/>

                                                        <a href="#" class="link-map">XXXXXXX XXXXXXX</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="vc_wp_custommenu wpb_content_element wrap-cus">
                                <div class="widget widget_nav_menu">
                                    <ul id="menu-infomation" class="menu">
                                        <li class="menu-about-us">
                                            <a class="item-link" href="#">
                                                <span class="menu-title">关于我们</span>
                                            </a>
                                        </li>

                                        <li class="menu-customer-service">
                                            <a class="item-link" href="#">
                                                <span class="menu-title">定制服务</span>
                                            </a>
                                        </li>

                                        <li class="menu-privacy-policy">
                                            <a class="item-link" href="#">
                                                <span class="menu-title">隐私声明</span>
                                            </a>
                                        </li>

                                        <li class="menu-site-map">
                                            <a class="item-link" href="#">
                                                <span class="menu-title">网站地图</span>
                                            </a>
                                        </li>

                                        <li class="menu-orders-and-returns">
                                            <a class="item-link" href="#">
                                                <span class="menu-title">售后服务</span>
                                            </a>
                                        </li>

                                        <li class="menu-contact-us">
                                            <a class="item-link" href="">
                                                <span class="menu-title">联系我们</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vc_row-full-width vc_clearfix"></div>
        </div>

        <div class="footer-copyright style1">
            <div class="container">
                <!-- Copyright text -->
                <div class="copyright-text pull-left">
                    <p>Copyright &copy; 2018.Enheng All rights reserved.<a target="_blank"
                                                                                 href="http://www.enheng.tech/"></a>
                    </p>
                </div>

                <div class="sidebar-copyright pull-right">
                    <div class="widget-1 widget-first widget text-4 widget_text">
                        <div class="widget-inner">
                            <div class="textwidget">
                                <div class="payment">
                                    <a href="#">
                                        <img src="images/1903/paypal.png" alt="payment" title="payment"/>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<!-- DIALOGS -->
<div class="modal fade" id="search_form" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog block-popup-search-form">
        <form role="search" method="get" class="form-search searchform" action="">
            <input type="text" value="" name="s" class="search-query" placeholder="Enter your keyword..." />

            <button type="submit" class="fa fa-search button-search-pro form-button"></button>

            <a href="javascript:void(0)" title="Close" class="close close-search" data-dismiss="modal">X</a>
        </form>
    </div>
</div>

<div class="modal fade" id="login_form" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog block-popup-login">
        <a href="javascript:void(0)" title="Close" class="close close-login" data-dismiss="modal">Close</a>

        <div class="tt_popup_login">
            <strong>登陆</strong>
        </div>

        <form action="" method="post" class="login">
            <div class="block-content">
                <div class="col-reg registered-account">
                    <div class="email-input">
                        <input type="text" class="form-control input-text username" name="username" id="username" placeholder="用户名" />
                    </div>

                    <div class="pass-input">
                        <input class="form-control input-text password" type="password" placeholder="Password" name="password" id="密码" />
                    </div>

                    <div class="ft-link-p">
                        <a href="#" title="Forgot your password">忘记密码?</a>
                    </div>

                    <div class="actions">
                        <div class="submit-login">
                            <input type="submit" class="button btn-submit-login" name="login" value="Login" />
                        </div>
                    </div>
                </div>

                <div class="col-reg login-customer">
                    <h2>NEW HERE?</h2>

                    <p class="note-reg">Registration is free and easy!</p>

                    <ul class="list-log">
                        <li>Faster checkout</li>

                        <li>Save multiple shipping addresses</li>

                        <li>View and track orders and more</li>
                    </ul>

                    <a href="create_account.html" title="Register" class="btn-reg-popup">Create an account</a>
                </div>
            </div>
        </form>
        <div class="clear"></div>
    </div>
</div>
<a id="etrostore-totop" href="#"></a>
<?php
$script = <<< js
var sticky_navigation_offset_top = $("#header .header-bottom").offset().top;
    var sticky_navigation = function () {
        var scroll_top = $(window).scrollTop();
        if (scroll_top > sticky_navigation_offset_top) {
            $("#header .header-bottom").addClass("sticky-menu");
            $("#header .header-bottom").css({"top": 0, "left": 0, "right": 0});
        } else {
            $("#header .header-bottom").removeClass("sticky-menu");
        }
    };
    sticky_navigation();
    $(window).scroll(function () {
        sticky_navigation();
    });

    $(document).ready(function () {
        $(".show-dropdown").each(function () {
            $(this).on("click", function () {
                $(this).toggleClass("show");
                var element = $(this).parent().find("> ul");
                element.toggle(300);
            });
        });
    });
js;
$this->registerJs($script);
?>
<!--[if gte IE 9]><!-->
<script type="text/javascript">
    var request, b = document.body, c = 'className', cs = 'customize-support', rcs = new RegExp('(^|\\s+)(no-)?' + cs + '(\\s+|$)');
    request = true;

    b[c] = b[c].replace(rcs, ' ');
    // The customizer requires postMessage and CORS (if the site is cross domain)
    b[c] += ( window.postMessage && request ? ' ' : ' no-' ) + cs;
</script>
<!--<![endif]-->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
