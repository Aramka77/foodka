<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
    die();
use Bitrix\Main\Page\Asset;
?>

<title></title>
<!DOCTYPE html>
<html lang="zxx">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?$APPLICATION->ShowTitle()?></title>
    <!--fivicon icon-->
    <link rel="icon" href="<?=SITE_TEMPLATE_PATH?>/assets/img/fevicon.png">

    <!-- Stylesheet -->

    <!--Google Fonts-->

    <?
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/animate.min.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/bootstrap.min.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/magnific.min.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/jquery-ui.min.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/nice-select.min.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/owl.min.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/slick-slide.min.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/fontawesome.min.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/remixicon/remixicon.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/style.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/css/responsive.css');

    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/jquery.3.6.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/bootstrap.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/imageloded.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/counterup.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/waypoint.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/magnific.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/isotope.pkgd.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/nice-select.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/fontawesome.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/owl.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/slick-slider.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/wow.min.js');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/tweenmax.min.js');

    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/main.js');

    Asset::getInstance()->addString('<link href="https://fonts.googleapis.com/css2?family=Barlow:wght@300;400;500;600;700;800&family=Bebas+Neue&family=Satisfy&family=Quattrocento:wght@400;700&display=swap" rel="stylesheet">')

    ?>

    <?$APPLICATION->ShowHead()?>
</head>

<body class='sc5'>
<div id="panel">
    <?$APPLICATION->ShowPanel(); ?>
</div>
<!-- preloader area start -->
<div class="preloader" id="preloader">
    <div class="preloader-inner">
        <div id="wave1">
        </div>
        <div class="spinner">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>
    </div>
</div>
<!-- preloader area end-->
<!-- search popup area start -->
<div class="body-overlay" id="body-overlay"></div>
<div class="td-search-popup" id="td-search-popup">
    <form action="index.html" class="search-form">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Search.....">
        </div>
        <button type="submit" class="submit-btn"><i class="fa fa-search"></i></button>
    </form>
</div>
<!-- //. search Popup -->

<!-- navbar start -->
<header class="navbar-area">
    <nav class="navbar navbar-expand-lg">
        <div class="container nav-container">
            <div class="responsive-mobile-menu">
                <button class="menu toggle-btn d-block d-lg-none" data-target="#themefie_main_menu"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-left"></span>
                    <span class="icon-right"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="themefie_main_menu">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "top_menu",
                    array(
                        "ALLOW_MULTI_SELECT" => "N",
                        "CHILD_MENU_TYPE" => "left",
                        "DELAY" => "N",
                        "MAX_LEVEL" => "2",
                        "MENU_CACHE_GET_VARS" => array(
                        ),
                        "MENU_CACHE_TIME" => "3600",
                        "MENU_CACHE_TYPE" => "N",
                        "MENU_CACHE_USE_GROUPS" => "N",
                        "ROOT_MENU_TYPE" => "top",
                        "USE_EXT" => "N",
                        "COMPONENT_TEMPLATE" => "top_menu"
                    ),
                    false
                );?>
            </div>
            <div class="logo">
                <a class="main-logo" href="home-1.html"><img src="<?=SITE_TEMPLATE_PATH?>/assets/img/logo.png" alt="img"></a>
            </div>
            <div class="nav-right-part nav-right-part-mobile">
                <ul>
                    <li><a class="search" href="#"><i class="ri-search-line"></i></a>
                    </li>
                    <li class="phone-contact d-md-block d-none"><i class="ri-phone-fill float-start"></i>
                        +997 509 153 849
                    </li>
                    <li class="menu-cart"><a href="cart.html">CART <span>1</span></a></li>
                    <li>49.50 $</li>
                </ul>
            </div>
            <div class="nav-right-part nav-right-part-desktop">
                <ul>
                    <li><a class="search" href="#"><i class="ri-search-line"></i></a>
                    </li>
                    <li class="phone-contact"><i class="ri-phone-fill float-start"></i>
                        +997 509 153 849
                    </li>
                    <li class="menu-cart"><a href="cart.html">CART <span>1</span></a></li>
                    <li>49.50 $</li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<!-- navbar end -->
<?
if ($APPLICATION->GetCurPage()=="/"):
    $APPLICATION->IncludeComponent('bitrix:news.list', 'mainpage_banner', []);
    $APPLICATION->IncludeComponent('aram:brother', 'lol', [
            'CACHE_TYPE' => 'Y'
    ]);
?>


    <!-- Banner Area Start-->
    <section class="banner-area">
        <div class="banner-thumb">
            <img src="/local/templates/books/assets/img/banner/banner.png" alt="img">
        </div>
        <div class="banner-bg-img"></div>
        <div class="banner-shape-1">
            <img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/banner/shape-1.png" alt="img"/>
        </div>
        <div class="banner-shape-2"><img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/banner/shape-2.png" alt="img"/></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 align-self-center">
                    <div class="banner-inner text-center">
                        <h3>Do not miss it!</h3>
                        <h1>Pizza tastes better than skinny feels.</h1>
                        <a class="btn btn-secondary" href="shop.html">GET IT NOW</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Area End -->



    <!-- category Area Start-->
    <section class="category-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 align-self-center">
                    <ul class="category-menu">
                        <li class="category-wrap"><a href="shop.html"><img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/category/1.png" alt="category">Ramen</a>

                        </li>
                        <li class="category-wrap"><a href="#"><img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/category/2.png" alt="category">Pizza</a>
                            <div class="category-sub-menu">
                                <div class="row">
                                    <div class="col-md-3 col-6">
                                        <div class="single-item-wrap text-center">
                                            <div class="thumb">
                                                <img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/product/pizza/1.png" alt="img">
                                            </div>
                                            <div class="wrap-details">
                                                <h6><a href="shop.html">Margherita Pizza</a></h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <div class="single-item-wrap text-center">
                                            <div class="thumb">
                                                <img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/product/pizza/2.png" alt="img">
                                            </div>
                                            <div class="wrap-details">
                                                <h6><a href="shop.html">Maxican Pizza Test Better</a></h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <div class="single-item-wrap text-center">
                                            <div class="thumb">
                                                <img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/product/pizza/3.png" alt="img">
                                            </div>
                                            <div class="wrap-details">
                                                <h6><a href="shop.html">Margherita Pizza</a></h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <a href="#"><img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/ad.png" alt="img"></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="category-wrap"><a href="#"><img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/category/3.png" alt="category">Burger</a>
                            <div class="category-sub-menu">
                                <div class="row">
                                    <div class="col-md-3 col-6">
                                        <div class="single-item-wrap text-center">
                                            <div class="thumb">
                                                <img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/product/burger/1.png" alt="img">
                                            </div>
                                            <div class="wrap-details">
                                                <h6><a href="shop.html">Patty Buns Burgers</a></h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <div class="single-item-wrap text-center">
                                            <div class="thumb">
                                                <img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/product/burger/1.png" alt="img">
                                            </div>
                                            <div class="wrap-details">
                                                <h6><a href="shop.html">Maxican Pizza Test Better</a></h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <div class="single-item-wrap text-center">
                                            <div class="thumb">
                                                <img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/product/burger/1.png" alt="img">
                                            </div>
                                            <div class="wrap-details">
                                                <h6><a href="shop.html">Margherita Pizza</a></h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-6">
                                        <a href="#"><img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/ad.png" alt="img"></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="category-wrap"><a href="shop.html"><img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/category/4.png" alt="category">French fries</a>

                        </li>
                        <li class="category-wrap"><a href="shop.html"><img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/category/5.png" alt="category">Fast food</a>

                        </li>
                        <li class="category-wrap"><a href="shop.html"><img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/category/6.png" alt="category">Soft drinks</a>

                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- category Area End -->

    <!-- offer Area Start-->
    <section class="offer-area pd-top-120 pd-bottom-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 align-self-center d-contents">
                    <div class="single-offer-wrap" style="background-color: var(--main-color);">
                        <img class="bg-img" src="<?=SITE_TEMPLATE_PATH;?>/assets/img/offer/1.png" alt="img">
                        <div class="wrap-details">
                            <h2>Special Deliciaus </h2>
                            <h5>Maxican Pizza Testes Better</h5>
                            <a class="btn btn-white" href="shop.html">ORDER NOW</a>
                        </div>
                        <div class="offer-sticker">
                            <img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/offer/offer.png" alt="img">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 align-self-center">
                    <div class="single-offer-wrap" style="background-color: var(--heading-color);">
                        <img class="bg-img" src="<?=SITE_TEMPLATE_PATH;?>/assets/img/offer/2.png" alt="img">
                        <div class="wrap-details">
                            <h3>Enjoy Our Delicious Item</h3>
                            <a class="btn btn-white" href="shop.html">ORDER NOW</a>
                        </div>
                    </div>
                    <div class="single-offer-wrap" style="background-color: #FFEECC">
                        <div class="animated-img"><img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/offer/03.png" alt="img"></div>
                        <div class="animated-img animated-img-2"><img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/offer/03.png" alt="img"></div>
                        <div class="overlay-gradient"></div>
                        <div class="wrap-details">
                            <h3 class="text-heading">The Fastest In Delivery <span>Food</span></h3>
                            <a class="btn btn-white" href="shop.html">ORDER NOW</a>
                        </div>
                        <img class="bg-img-2" src="<?=SITE_TEMPLATE_PATH;?>/assets/img/offer/3.png" alt="img">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- offer Area End -->

    <!-- populer Area Start-->
    <section class="populer-area pd-bottom-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h3 class="sub-title">Our signature</h3>
                        <h2 class="title">Popular Dishes</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="single-item-wrap">
                        <div class="thumb">
                            <img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/product/pizza/1.png" alt="img">
                            <a class="fav-btn" href="#"><i class="ri-heart-line"></i></a>
                        </div>
                        <div class="wrap-details">
                            <h5><a href="single-product.html">Margherita Pizza</a></h5>
                            <div class="wrap-footer">
                                <div class="rating">
                                    4.9
                                    <span class="rating-inner">
                                        <i class="ri-star-fill ps-0"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-half-line pe-0"></i>
                                    </span>
                                    (200)
                                </div>
                                <h6 class="price">$17.00</h6>
                            </div>
                        </div>
                        <div class="btn-area">
                            <a class="btn btn-secondary" href="single-product.html">CHOOSE OPTIONS </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-item-wrap">
                        <div class="thumb">
                            <img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/product/pizza/2.png" alt="img">
                            <a class="fav-btn" href="#"><i class="ri-heart-line"></i></a>
                        </div>
                        <div class="wrap-details">
                            <h5><a href="single-product.html">Maxican Pizza Test Better</a></h5>
                            <div class="wrap-footer">
                                <div class="rating">
                                    4.9
                                    <span class="rating-inner">
                                        <i class="ri-star-fill ps-0"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-half-line pe-0"></i>
                                    </span>
                                    (928)
                                </div>
                                <h6 class="price">$29.00</h6>
                            </div>
                            <div class="btn-area">
                                <a class="btn btn-secondary" href="single-product.html">CHOOSE OPTIONS </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-item-wrap">
                        <div class="thumb">
                            <img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/product/burger/1.png" alt="img">
                            <a class="fav-btn" href="#"><i class="ri-heart-line"></i></a>
                        </div>
                        <div class="wrap-details">
                            <h5><a href="single-product.html">Patty Buns Burgers</a></h5>
                            <div class="wrap-footer">
                                <div class="rating">
                                    4.9
                                    <span class="rating-inner">
                                        <i class="ri-star-fill ps-0"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-half-line pe-0"></i>
                                    </span>
                                    (462)
                                </div>
                                <h6 class="price">$27.00</h6>
                            </div>
                        </div>
                        <div class="btn-area">
                            <a class="btn btn-secondary" href="single-product.html">CHOOSE OPTIONS </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- populer Area End -->

    <!-- featured Area Start-->
    <section class="featured-area pd-bottom-150" style="background-image: url(assets/img/other/featured.png);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center">
                        <h3 class="sub-title text-secondary">Tasty how The new</h3>
                        <h2 class="title text-white">Meet Your New Lunchtime Faves</h2>
                        <a class="btn btn-base" href="menu.html">SEE ALL MENU</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- featured Area End -->

    <!-- about Area Start-->
    <section class="about-area pd-top-120 pd-bottom-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="thumb mb-lg-0 mb-4">
                        <img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/other/about.png" alt="img">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-title text-lg-start text-center">
                        <h3 class="sub-title">Why choose us</h3>
                        <h2 class="title">Why we are the best</h2>
                        <p>A, blandit euismod ullamcorper vestibulum enim habitasse. Ultrices tincidunt scelerisque elit enim. A neque malesuada in tortor eget justo mauris nec dolor. Consequat risus vitae, ac ac et preparation. He wanted to serve burgers, fries and beverages that tasted .</p>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="single-about-wrap">
                                <img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/icon/1.png" alt="img">
                                Fresh food
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="single-about-wrap">
                                <img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/icon/2.png" alt="img">
                                Fast Delivery
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="single-about-wrap">
                                <img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/icon/3.png" alt="img">
                                Quality Maintain
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="single-about-wrap">
                                <img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/icon/4.png" alt="img">
                                24/7 Service
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about Area End -->

    <!-- product Area Start-->
    <section class="product-area pd-bottom-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h3 class="sub-title">Our signature</h3>
                        <h2 class="title">Delicious Deals for Delicious Meals</h2>
                    </div>
                    <ul class="product-nav nav nav-pills" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-ramen-tab" data-bs-toggle="pill" data-bs-target="#pills-ramen" type="button" role="tab" aria-controls="pills-ramen" aria-selected="true"><img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/category/1.png" alt="img">Ramen</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-pizza-tab" data-bs-toggle="pill" data-bs-target="#pills-pizza" type="button" role="tab" aria-controls="pills-pizza" aria-selected="false"><img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/category/2.png" alt="img">Pizza</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-burger-tab" data-bs-toggle="pill" data-bs-target="#pills-burger" type="button" role="tab" aria-controls="pills-burger" aria-selected="false"><img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/category/3.png" alt="img">Burger</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-french-fry-tab" data-bs-toggle="pill" data-bs-target="#pills-french-fry" type="button" role="tab" aria-controls="pills-french-fry" aria-selected="false"><img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/category/4.png" alt="img">French fries</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-fast-food-tab" data-bs-toggle="pill" data-bs-target="#pills-fast-food" type="button" role="tab" aria-controls="pills-fast-food" aria-selected="false"><img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/category/5.png" alt="img">Fast food</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-drinks-tab" data-bs-toggle="pill" data-bs-target="#pills-drinks" type="button" role="tab" aria-controls="pills-drinks" aria-selected="false"><img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/category/6.png" alt="img">Soft drinks</button>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-ramen" role="tabpanel" aria-labelledby="pills-ramen-tab">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6">
                            <div class="single-item-wrap">
                                <div class="thumb">
                                    <img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/product/pizza/1.png" alt="img">
                                    <a class="fav-btn" href="#"><i class="ri-heart-line"></i></a>
                                </div>
                                <div class="wrap-details">
                                    <h5><a href="single-product.html">Margherita Pizza</a></h5>
                                    <div class="wrap-footer">
                                        <div class="rating">
                                            4.9
                                            <span class="rating-inner">
                                                <i class="ri-star-fill ps-0"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-half-line pe-0"></i>
                                            </span>
                                            (200)
                                        </div>
                                        <h6 class="price">$17.00</h6>
                                    </div>
                                </div>
                                <div class="btn-area">
                                    <a class="btn btn-secondary" href="single-product.html">CHOOSE OPTIONS </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-item-wrap">
                                <div class="thumb">
                                    <img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/product/pizza/2.png" alt="img">
                                    <a class="fav-btn" href="#"><i class="ri-heart-line"></i></a>
                                </div>
                                <div class="wrap-details">
                                    <h5><a href="single-product.html">Maxican Pizza Test Better</a></h5>
                                    <div class="wrap-footer">
                                        <div class="rating">
                                            4.9
                                            <span class="rating-inner">
                                                <i class="ri-star-fill ps-0"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-half-line pe-0"></i>
                                            </span>
                                            (928)
                                        </div>
                                        <h6 class="price">$29.00</h6>
                                    </div>
                                    <div class="btn-area">
                                        <a class="btn btn-secondary" href="single-product.html">CHOOSE OPTIONS </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-item-wrap">
                                <div class="thumb">
                                    <img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/product/burger/1.png" alt="img">
                                    <a class="fav-btn" href="#"><i class="ri-heart-line"></i></a>
                                </div>
                                <div class="wrap-details">
                                    <h5><a href="single-product.html">Patty Buns Burgers</a></h5>
                                    <div class="wrap-footer">
                                        <div class="rating">
                                            4.9
                                            <span class="rating-inner">
                                                <i class="ri-star-fill ps-0"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-half-line pe-0"></i>
                                            </span>
                                            (462)
                                        </div>
                                        <h6 class="price">$27.00</h6>
                                    </div>
                                </div>
                                <div class="btn-area">
                                    <a class="btn btn-secondary" href="single-product.html">CHOOSE OPTIONS </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-pizza" role="tabpanel" aria-labelledby="pills-pizza-tab">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6">
                            <div class="single-item-wrap">
                                <div class="thumb">
                                    <img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/product/pizza/1.png" alt="img">
                                    <a class="fav-btn" href="#"><i class="ri-heart-line"></i></a>
                                </div>
                                <div class="wrap-details">
                                    <h5><a href="single-product.html">Margherita Pizza</a></h5>
                                    <div class="wrap-footer">
                                        <div class="rating">
                                            4.9
                                            <span class="rating-inner">
                                                <i class="ri-star-fill ps-0"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-half-line pe-0"></i>
                                            </span>
                                            (200)
                                        </div>
                                        <h6 class="price">$17.00</h6>
                                    </div>
                                </div>
                                <div class="btn-area">
                                    <a class="btn btn-secondary" href="single-product.html">CHOOSE OPTIONS </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-item-wrap">
                                <div class="thumb">
                                    <img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/product/pizza/2.png" alt="img">
                                    <a class="fav-btn" href="#"><i class="ri-heart-line"></i></a>
                                </div>
                                <div class="wrap-details">
                                    <h5><a href="single-product.html">Maxican Pizza Test Better</a></h5>
                                    <div class="wrap-footer">
                                        <div class="rating">
                                            4.9
                                            <span class="rating-inner">
                                                <i class="ri-star-fill ps-0"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-half-line pe-0"></i>
                                            </span>
                                            (928)
                                        </div>
                                        <h6 class="price">$29.00</h6>
                                    </div>
                                    <div class="btn-area">
                                        <a class="btn btn-secondary" href="single-product.html">CHOOSE OPTIONS </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-item-wrap">
                                <div class="thumb">
                                    <img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/product/pizza/3.png" alt="img">
                                    <a class="fav-btn" href="#"><i class="ri-heart-line"></i></a>
                                </div>
                                <div class="wrap-details">
                                    <h5><a href="single-product.html">Roasted Garlic Chicken Pizza </a></h5>
                                    <div class="wrap-footer">
                                        <div class="rating">
                                            4.9
                                            <span class="rating-inner">
                                                <i class="ri-star-fill ps-0"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-half-line pe-0"></i>
                                            </span>
                                            (462)
                                        </div>
                                        <h6 class="price">$27.00</h6>
                                    </div>
                                </div>
                                <div class="btn-area">
                                    <a class="btn btn-secondary" href="single-product.html">CHOOSE OPTIONS </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-item-wrap">
                                <div class="thumb">
                                    <img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/product/pizza/4.png" alt="img">
                                    <a class="fav-btn" href="#"><i class="ri-heart-line"></i></a>
                                </div>
                                <div class="wrap-details">
                                    <h5><a href="single-product.html">All Season Gulliver Pizza </a></h5>
                                    <div class="wrap-footer">
                                        <div class="rating">
                                            4.9
                                            <span class="rating-inner">
                                                <i class="ri-star-fill ps-0"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-half-line pe-0"></i>
                                            </span>
                                            (462)
                                        </div>
                                        <h6 class="price">$27.00</h6>
                                    </div>
                                </div>
                                <div class="btn-area">
                                    <a class="btn btn-secondary" href="single-product.html">CHOOSE OPTIONS </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-item-wrap">
                                <div class="thumb">
                                    <img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/product/pizza/5.png" alt="img">
                                    <a class="fav-btn" href="#"><i class="ri-heart-line"></i></a>
                                </div>
                                <div class="wrap-details">
                                    <h5><a href="single-product.html">Chicken Fajita Pizza Large </a></h5>
                                    <div class="wrap-footer">
                                        <div class="rating">
                                            4.9
                                            <span class="rating-inner">
                                                <i class="ri-star-fill ps-0"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-half-line pe-0"></i>
                                            </span>
                                            (200)
                                        </div>
                                        <h6 class="price">$37.00</h6>
                                    </div>
                                </div>
                                <div class="btn-area">
                                    <a class="btn btn-secondary" href="single-product.html">CHOOSE OPTIONS </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-item-wrap">
                                <div class="thumb">
                                    <img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/product/pizza/6.png" alt="img">
                                    <a class="fav-btn" href="#"><i class="ri-heart-line"></i></a>
                                </div>
                                <div class="wrap-details">
                                    <h5><a href="single-product.html">BBQ Chicken Classic Pizza Large </a></h5>
                                    <div class="wrap-footer">
                                        <div class="rating">
                                            4.9
                                            <span class="rating-inner">
                                                <i class="ri-star-fill ps-0"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-half-line pe-0"></i>
                                            </span>
                                            (928)
                                        </div>
                                        <h6 class="price">$35.00</h6>
                                    </div>
                                </div>
                                <div class="btn-area">
                                    <a class="btn btn-secondary" href="single-product.html">CHOOSE OPTIONS </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-burger" role="tabpanel" aria-labelledby="pills-burger-tab">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6">
                            <div class="single-item-wrap">
                                <div class="thumb">
                                    <img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/product/pizza/1.png" alt="img">
                                    <a class="fav-btn" href="#"><i class="ri-heart-line"></i></a>
                                </div>
                                <div class="wrap-details">
                                    <h5><a href="single-product.html">Margherita Pizza</a></h5>
                                    <div class="wrap-footer">
                                        <div class="rating">
                                            4.9
                                            <span class="rating-inner">
                                                <i class="ri-star-fill ps-0"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-half-line pe-0"></i>
                                            </span>
                                            (200)
                                        </div>
                                        <h6 class="price">$17.00</h6>
                                    </div>
                                </div>
                                <div class="btn-area">
                                    <a class="btn btn-secondary" href="single-product.html">CHOOSE OPTIONS </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-item-wrap">
                                <div class="thumb">
                                    <img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/product/pizza/2.png" alt="img">
                                    <a class="fav-btn" href="#"><i class="ri-heart-line"></i></a>
                                </div>
                                <div class="wrap-details">
                                    <h5><a href="single-product.html">Maxican Pizza Test Better</a></h5>
                                    <div class="wrap-footer">
                                        <div class="rating">
                                            4.9
                                            <span class="rating-inner">
                                                <i class="ri-star-fill ps-0"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-half-line pe-0"></i>
                                            </span>
                                            (928)
                                        </div>
                                        <h6 class="price">$29.00</h6>
                                    </div>
                                    <div class="btn-area">
                                        <a class="btn btn-secondary" href="single-product.html">CHOOSE OPTIONS </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-item-wrap">
                                <div class="thumb">
                                    <img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/product/burger/1.png" alt="img">
                                    <a class="fav-btn" href="#"><i class="ri-heart-line"></i></a>
                                </div>
                                <div class="wrap-details">
                                    <h5><a href="single-product.html">Patty Buns Burgers</a></h5>
                                    <div class="wrap-footer">
                                        <div class="rating">
                                            4.9
                                            <span class="rating-inner">
                                                <i class="ri-star-fill ps-0"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-half-line pe-0"></i>
                                            </span>
                                            (462)
                                        </div>
                                        <h6 class="price">$27.00</h6>
                                    </div>
                                </div>
                                <div class="btn-area">
                                    <a class="btn btn-secondary" href="single-product.html">CHOOSE OPTIONS </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-french-fry" role="tabpanel" aria-labelledby="pills-french-fry-tab">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6">
                            <div class="single-item-wrap">
                                <div class="thumb">
                                    <img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/product/pizza/1.png" alt="img">
                                    <a class="fav-btn" href="#"><i class="ri-heart-line"></i></a>
                                </div>
                                <div class="wrap-details">
                                    <h5><a href="single-product.html">Margherita Pizza</a></h5>
                                    <div class="wrap-footer">
                                        <div class="rating">
                                            4.9
                                            <span class="rating-inner">
                                                <i class="ri-star-fill ps-0"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-half-line pe-0"></i>
                                            </span>
                                            (200)
                                        </div>
                                        <h6 class="price">$17.00</h6>
                                    </div>
                                </div>
                                <div class="btn-area">
                                    <a class="btn btn-secondary" href="single-product.html">CHOOSE OPTIONS </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-item-wrap">
                                <div class="thumb">
                                    <img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/product/pizza/2.png" alt="img">
                                    <a class="fav-btn" href="#"><i class="ri-heart-line"></i></a>
                                </div>
                                <div class="wrap-details">
                                    <h5><a href="single-product.html">Maxican Pizza Test Better</a></h5>
                                    <div class="wrap-footer">
                                        <div class="rating">
                                            4.9
                                            <span class="rating-inner">
                                                <i class="ri-star-fill ps-0"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-half-line pe-0"></i>
                                            </span>
                                            (928)
                                        </div>
                                        <h6 class="price">$29.00</h6>
                                    </div>
                                    <div class="btn-area">
                                        <a class="btn btn-secondary" href="single-product.html">CHOOSE OPTIONS </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-item-wrap">
                                <div class="thumb">
                                    <img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/product/burger/1.png" alt="img">
                                    <a class="fav-btn" href="#"><i class="ri-heart-line"></i></a>
                                </div>
                                <div class="wrap-details">
                                    <h5><a href="single-product.html">Patty Buns Burgers</a></h5>
                                    <div class="wrap-footer">
                                        <div class="rating">
                                            4.9
                                            <span class="rating-inner">
                                                <i class="ri-star-fill ps-0"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-half-line pe-0"></i>
                                            </span>
                                            (462)
                                        </div>
                                        <h6 class="price">$27.00</h6>
                                    </div>
                                </div>
                                <div class="btn-area">
                                    <a class="btn btn-secondary" href="single-product.html">CHOOSE OPTIONS </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-fast-food" role="tabpanel" aria-labelledby="pills-fast-food-tab">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6">
                            <div class="single-item-wrap">
                                <div class="thumb">
                                    <img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/product/pizza/1.png" alt="img">
                                    <a class="fav-btn" href="#"><i class="ri-heart-line"></i></a>
                                </div>
                                <div class="wrap-details">
                                    <h5><a href="single-product.html">Margherita Pizza</a></h5>
                                    <div class="wrap-footer">
                                        <div class="rating">
                                            4.9
                                            <span class="rating-inner">
                                                <i class="ri-star-fill ps-0"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-half-line pe-0"></i>
                                            </span>
                                            (200)
                                        </div>
                                        <h6 class="price">$17.00</h6>
                                    </div>
                                </div>
                                <div class="btn-area">
                                    <a class="btn btn-secondary" href="single-product.html">CHOOSE OPTIONS </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-item-wrap">
                                <div class="thumb">
                                    <img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/product/pizza/2.png" alt="img">
                                    <a class="fav-btn" href="#"><i class="ri-heart-line"></i></a>
                                </div>
                                <div class="wrap-details">
                                    <h5><a href="single-product.html">Maxican Pizza Test Better</a></h5>
                                    <div class="wrap-footer">
                                        <div class="rating">
                                            4.9
                                            <span class="rating-inner">
                                                <i class="ri-star-fill ps-0"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-half-line pe-0"></i>
                                            </span>
                                            (928)
                                        </div>
                                        <h6 class="price">$29.00</h6>
                                    </div>
                                    <div class="btn-area">
                                        <a class="btn btn-secondary" href="single-product.html">CHOOSE OPTIONS </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-item-wrap">
                                <div class="thumb">
                                    <img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/product/burger/1.png" alt="img">
                                    <a class="fav-btn" href="#"><i class="ri-heart-line"></i></a>
                                </div>
                                <div class="wrap-details">
                                    <h5><a href="single-product.html">Patty Buns Burgers</a></h5>
                                    <div class="wrap-footer">
                                        <div class="rating">
                                            4.9
                                            <span class="rating-inner">
                                                <i class="ri-star-fill ps-0"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-half-line pe-0"></i>
                                            </span>
                                            (462)
                                        </div>
                                        <h6 class="price">$27.00</h6>
                                    </div>
                                </div>
                                <div class="btn-area">
                                    <a class="btn btn-secondary" href="single-product.html">CHOOSE OPTIONS </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-drinks" role="tabpanel" aria-labelledby="pills-drinks-tab">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6">
                            <div class="single-item-wrap">
                                <div class="thumb">
                                    <img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/product/pizza/1.png" alt="img">
                                    <a class="fav-btn" href="#"><i class="ri-heart-line"></i></a>
                                </div>
                                <div class="wrap-details">
                                    <h5><a href="single-product.html">Margherita Pizza</a></h5>
                                    <div class="wrap-footer">
                                        <div class="rating">
                                            4.9
                                            <span class="rating-inner">
                                                <i class="ri-star-fill ps-0"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-half-line pe-0"></i>
                                            </span>
                                            (200)
                                        </div>
                                        <h6 class="price">$17.00</h6>
                                    </div>
                                </div>
                                <div class="btn-area">
                                    <a class="btn btn-secondary" href="single-product.html">CHOOSE OPTIONS </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-item-wrap">
                                <div class="thumb">
                                    <img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/product/pizza/2.png" alt="img">
                                    <a class="fav-btn" href="#"><i class="ri-heart-line"></i></a>
                                </div>
                                <div class="wrap-details">
                                    <h5><a href="single-product.html">Maxican Pizza Test Better</a></h5>
                                    <div class="wrap-footer">
                                        <div class="rating">
                                            4.9
                                            <span class="rating-inner">
                                                <i class="ri-star-fill ps-0"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-half-line pe-0"></i>
                                            </span>
                                            (928)
                                        </div>
                                        <h6 class="price">$29.00</h6>
                                    </div>
                                    <div class="btn-area">
                                        <a class="btn btn-secondary" href="single-product.html">CHOOSE OPTIONS </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-item-wrap">
                                <div class="thumb">
                                    <img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/product/burger/1.png" alt="img">
                                    <a class="fav-btn" href="#"><i class="ri-heart-line"></i></a>
                                </div>
                                <div class="wrap-details">
                                    <h5><a href="single-product.html">Patty Buns Burgers</a></h5>
                                    <div class="wrap-footer">
                                        <div class="rating">
                                            4.9
                                            <span class="rating-inner">
                                                <i class="ri-star-fill ps-0"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-fill"></i>
                                                <i class="ri-star-half-line pe-0"></i>
                                            </span>
                                            (462)
                                        </div>
                                        <h6 class="price">$27.00</h6>
                                    </div>
                                </div>
                                <div class="btn-area">
                                    <a class="btn btn-secondary" href="single-product.html">CHOOSE OPTIONS </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product Area End -->

    <!-- subscribe Area Start-->
    <section class="subscribe-area pd-bottom-150" style="background-image: url(assets/img/other/location.png);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-9 col-md-10">
                    <div class="section-title text-center">
                        <h3 class="sub-title text-secondary">Our Location</h3>
                        <h2 class="title text-white">Find foodka stores in your area</h2>
                        <form>
                            <div class="single-input-wrap mb-0 with-btn">
                                <input type="email" placeholder="Zip code or state providence">
                                <button class="btn btn-base">SEE LOCATION</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- subscribe Area End -->

    <!-- testimonial Area Start-->
    <section class="testimonial-area text-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-10">
                    <div class="testimonial-slider owl-carousel">
                        <div class="item">
                            <div class="testimonial-wrap">
                                <p>“We have no regrets! I don't know what else to say. It really saves me time and effort. Food is exactly what our business has been lacking”</p>
                                <h3>Julia R. Davis
                                </h3>
                                <h6>Food Bloger</h6>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-wrap">
                                <p>“We have no regrets! I don't know what else to say. It really saves me time and effort. Food is exactly what our business has been lacking”</p>
                                <h3>Davis J. Rulia
                                </h3>
                                <h6>Food Bloger</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial Area End -->

    <!-- blog Area Start-->
    <section class="blog-area pd-bottom-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-7">
                    <div class="section-title text-center">
                        <h3 class="sub-title">News & Blog</h3>
                        <h2 class="title">Celebrating the awesomeness of food.</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog-wrap">
                        <div class="thumb">
                            <img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/blog/1.png" alt="img">
                        </div>
                        <div class="wrap-details">
                            <span class="cat">
                                <span class="date">
                                    <i class="ri-calendar-todo-fill"></i>July 14, 2021
                                </span>
                                <a href="#" class="tag me-0">
                                    <i class="ri-price-tag-3-fill"></i>Burgar
                                </a>
                            </span>
                            <h5><a href="blog-details.html">Greek yogurt breakfast bowls with toppings</a></h5>
                            <div class="wrap-hover-area">
                                <p> It with just a touch of sauce. saucy riff, more in the style of takeout American Chinese kung pao. The sauce makes it perfect for eating with rice.
                                </p>
                                <a class="link-btn" href="blog-details.html">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog-wrap">
                        <div class="thumb">
                            <img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/blog/2.png" alt="img">
                        </div>
                        <div class="wrap-details">
                            <span class="cat">
                                <span class="date">
                                    <i class="ri-calendar-todo-fill"></i>July 05, 2021
                                </span>
                                <a href="#" class="tag me-0">
                                    <i class="ri-price-tag-3-fill"></i>Pizza
                                </a>
                            </span>
                            <h5><a href="blog-details.html">Broad beans, tomato, garlic & cheese bruschetta
                                </a></h5>
                            <div class="wrap-hover-area">
                                <p> It with just a touch of sauce. saucy riff, more in the style of takeout American Chinese kung pao. The sauce makes it perfect for eating with rice.
                                </p>
                                <a class="link-btn" href="blog-details.html">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog-wrap">
                        <div class="thumb">
                            <img src="<?=SITE_TEMPLATE_PATH;?>/assets/img/blog/3.png" alt="img">
                        </div>
                        <div class="wrap-details">
                            <span class="cat">
                                <span class="date">
                                    <i class="ri-calendar-todo-fill"></i>August 14, 2021
                                </span>
                                <a href="#" class="tag me-0">
                                    <i class="ri-price-tag-3-fill"></i>Pizza
                                </a>
                            </span>
                            <h5><a href="blog-details.html">Make authentic Italian margherita pizza at home
                                </a></h5>
                            <div class="wrap-hover-area">
                                <p> It with just a touch of sauce. saucy riff, more in the style of takeout American Chinese kung pao. The sauce makes it perfect for eating with rice.
                                </p>
                                <a class="link-btn" href="blog-details.html">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog Area End -->

<?
endif;
?>