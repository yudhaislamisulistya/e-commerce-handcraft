<?php if(cekUser()){?>

<!-- Header Start -->
<header class="header">
    <div class="header__inner fixed-header">
        <div class="header__main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="header__main-inner">
                            <div class="header__main-left">
                                <div class="logo">
                                    <a href="<?= route_to('home') ?>" class="logo--normal">
                                        <h1>CreDifyShop</h1>
                                    </a>
                                </div>
                            </div>
                            <div class="header__main-center">
                                <nav class="main-navigation text-center d-none d-lg-block">
                                    <ul class="mainmenu">
                                        <li class="mainmenu__item">
                                            <a href="<?= route_to('home') ?>" class="mainmenu__link">
                                                <span class="mm-text">Home</span>
                                            </a>
                                        </li>
                                        <li class="mainmenu__item">
                                            <a href="<?= route_to('produk') ?>" class="mainmenu__link">
                                                <span class="mm-text">Produk</span>
                                            </a>
                                        </li>
                                        <li class="mainmenu__item">
                                            <a href="<?= route_to('contact-us') ?>" class="mainmenu__link">
                                                <span class="mm-text">Contact</span>
                                            </a>
                                        </li>
                                        <li class="mainmenu__item">
                                            <a href="<?= route_to('about-us') ?>" class="mainmenu__link">
                                                <span class="mm-text">About Us</span>
                                            </a>
                                        </li>
                                        <li class="mainmenu__item">
                                            <a href="<?= route_to('profile') ?>" class="mainmenu__link">
                                                <span class="mm-text">Profile</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="header__main-right">
                                <div class="header-toolbar-wrap">
                                    <div class="header-toolbar">
                                        <div class="header-toolbar__item header-toolbar--search-btn">
                                            <a href="#searchForm" class="header-toolbar__btn toolbar-btn">
                                                <i class="la la-search"></i>
                                            </a>
                                        </div>
                                        <div class="header-toolbar__item header-toolbar--minicart-btn">
                                            <a href="#miniCart" class="header-toolbar__btn toolbar-btn">
                                                <i class="la la-shopping-cart"></i>
                                                <span class="bg-danger text-white" style="font-size: 20px;"><?= total_get_cart() ?></span>
                                            </a>
                                        </div>
                                        <div class="header-toolbar__item d-block d-lg-none">
                                            <a href="#offcanvasMenu"
                                                class="header-toolbar__btn toolbar-btn menu-btn">
                                                <div class="hamburger-icon">
                                                    <span></span>
                                                    <span></span>
                                                    <span></span>
                                                    <span></span>
                                                    <span></span>
                                                    <span></span>
                                                </div>
                                            </a>
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
</header>
<!-- Header End -->

<?php }else{ ?>

<!-- Header Start -->
<header class="header">
    <div class="header__inner fixed-header">
        <div class="header__main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="header__main-inner">
                            <div class="header__main-left">
                                <div class="logo">
                                    <a href="<?= route_to('home') ?>" class="logo--normal">
                                        <h1>CreDifyShop</h1>
                                    </a>
                                </div>
                            </div>
                            <div class="header__main-center">
                                <nav class="main-navigation text-center d-none d-lg-block">
                                    <ul class="mainmenu">
                                        <li class="mainmenu__item">
                                            <a href="<?= route_to('home') ?>" class="mainmenu__link">
                                                <span class="mm-text">Home</span>
                                            </a>
                                        </li>
                                        <li class="mainmenu__item">
                                            <a href="<?= route_to('login') ?>" class="mainmenu__link">
                                                <span class="mm-text">Customer</span>
                                            </a>
                                        </li>
                                        <li class="mainmenu__item">
                                            <a href="https://dash.aprianimagfira.my.id/" class="mainmenu__link">
                                                <span class="mm-text">Merchant</span>
                                            </a>
                                        </li>
                                        <li class="mainmenu__item">
                                            <a href="<?= route_to('contact-us') ?>" class="mainmenu__link">
                                                <span class="mm-text">Contact</span>
                                            </a>
                                        </li>
                                        <li class="mainmenu__item">
                                            <a href="<?= route_to('about-us') ?>" class="mainmenu__link">
                                                <span class="mm-text">About Us</span>
                                            </a>
                                        </li>
                                        
                                    </ul>
                                </nav>
                            </div>
                            <div class="header__main-right">
                                <div class="header-toolbar-wrap">
                                    <div class="header-toolbar">
                                        <div class="header-toolbar__item header-toolbar--search-btn">
                                            <a href="#searchForm" class="header-toolbar__btn toolbar-btn">
                                                <i class="la la-search"></i>
                                            </a>
                                        </div>
                                        <div class="header-toolbar__item header-toolbar--minicart-btn">
                                            <a href="#miniCart" class="header-toolbar__btn toolbar-btn">
                                                <i class="la la-shopping-cart"></i>
                                            </a>
                                        </div>
                                        <div class="header-toolbar__item d-block d-lg-none">
                                            <a href="#offcanvasMenu"
                                                class="header-toolbar__btn toolbar-btn menu-btn">
                                                <div class="hamburger-icon">
                                                    <span></span>
                                                    <span></span>
                                                    <span></span>
                                                    <span></span>
                                                    <span></span>
                                                    <span></span>
                                                </div>
                                            </a>
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
</header>
<!-- Header End -->

<?php  } ?>