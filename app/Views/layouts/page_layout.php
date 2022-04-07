<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>CreDifyShop - Jual Hasil Kerajinan Tangan</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicons -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="assets/img/icon.png">

    
    
    <!-- ************************* CSS Files ************************* -->

    <!-- Datatables -->
    <!-- DataTables -->
    <link href="<?= base_url() ?>/assets/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>/assets/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="<?= base_url() ?>/assets/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" /> 

    <!-- Sweet Alert -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/sweetalert2.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/bootstrap.css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/vendor.css">

    <!-- style css -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/main.css">

    <!-- custom css -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/custom.css">

    <!-- style -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/style.css">

</head>

<body>

    <!-- Preloader Start -->
    <div class="ft-preloader active">
        <div class="ft-preloader-inner h-100 d-flex align-items-center justify-content-center">
            <div class="ft-child ft-bounce1"></div>
            <div class="ft-child ft-bounce2"></div>
            <div class="ft-child ft-bounce3"></div>
        </div>
    </div>
    <!-- Preloader End -->

    <!-- Main Wrapper Start -->
    <div class="wrapper">

        <?= $this->include('layouts/menu') ?>

        <?= $this->renderSection('content') ?>

        <!-- Footer Start-->
        <footer class="footer bg-color" data-bg-color="#f4f8fa">
            <div class="footer-top">
                <div class="container-fluid">
                    <div class="row border-bottom pt--70 pb--70">
                        <div class="col-lg-4 col-sm-6 offset-md-1 offset-lg-0 mb-md--45">
                            <div class="footer-widget">
                                <div class="textwidget">
                                    <figure class="footer-logo mb--30">
                                        <h1>CreDifyShop</h1>
                                    </figure>
                                    <p>
                                        Credifiyshop hadir untuk mendorong kemandirian penyandang disabilitas Tunarungu agar mandiri secara finansial dan terinspirasi untuk mendefinsiikan kreativitas mereka kedalam karya yang menghasilkan profit
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-3 offset-lg-1 offset-sm-2 mb-md--45">
                            <div class="footer-widget">
                                <h3 class="widget-title mb--35 mb-sm--20">Company</h3>
                                <div class="footer-widget">
                                    <ul class="footer-menu">
                                        <li><a href="<?= route_to('about-us') ?>">About Us</a></li>
                                        <li><a href="<?= route_to('contact-us') ?>">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-4 offset-md-1 offset-lg-0 mb-xs--45">
                            <div class="footer-widget">
                                <h3 class="widget-title mb--35 mb-sm--20">Produk</h3>
                                <div class="footer-widget">
                                    <ul class="footer-menu">
                                        <li><a href="<?= route_to('search_category', 'hantaran') ?>">Hantaran</a></li>
                                        <li><a href="<?= route_to('search_category', 'busana pakaian') ?>">Busana/Pakaian</a></li>
                                        <li><a href="<?= route_to('search_category', 'kriya kayu') ?>">Kriya Kayu</a></li>
                                        <li><a href="<?= route_to('search_category', 'penyewaan jasa') ?>">Penyewaan Jasa</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-4">
                            <div class="footer-widget">
                                <h3 class="widget-title mb--35 mb-sm--20">Social Network</h3>
                                <div class="footer-widget">
                                    <ul class="footer-menu">
                                        <li><a href="#">Facebook</a></li>
                                        <li><a href="#">Instagram</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container-fluid">
                    <div class="row border-top ptb--20">
                        <div class="col-12 text-center">
                            <p class="copyright-text">&copy; CreDifyShop 2022 Made With <i class="la la-heart"></i> by Fira</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer End-->

        <!-- OffCanvas Menu Start -->
        <div class="offcanvas-menu-wrapper" id="offcanvasMenu">
            <div class="offcanvas-menu-inner">
                <a href="" class="btn-close">
                    <i class="la la-remove"></i>
                </a>
                <nav class="offcanvas-navigation">
                    <ul class="offcanvas-menu">
                        <li class="menu-item-has-children active">
                            <a href="#">Home</a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="index.html">Homepage 01</a>
                                </li>
                                <li>
                                    <a href="index-02.html">Homepage 02</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="shop.html">Shop</a>
                            <ul class="sub-menu">
                                <li class="menu-item-has-children">
                                    <a href="#">
                                        <span class="mm-text">Shop Grid</span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="shop-fullwidth.html">Full Width</a>
                                        </li>
                                        <li>
                                            <a href="shop.html">Left Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="shop-right-sidebar.html">Right Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="shop-three-columns.html">Three Columns</a>
                                        </li>
                                        <li>
                                            <a href="shop-four-columns.html">Four Columns</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Shop List</a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="shop-list.html">Full Width</a>
                                        </li>
                                        <li>
                                            <a href="shop-list-sidebar.html">Left Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="shop-list-right-sidebar.html">Right Sidebar</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Product Details</a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="product-details.html">Tab Style 1</a>
                                        </li>
                                        <li>
                                            <a href="product-details-tab-style-2.html">Tab Style 2</a>
                                        </li>
                                        <li>
                                            <a href="product-details-tab-style-3.html">Tab Style 3</a>
                                        </li>
                                        <li>
                                            <a href="product-details-gallery-left.html">Gallery Left</a>
                                        </li>
                                        <li>
                                            <a href="product-details-gallery-right.html">Gallery Right</a>
                                        </li>
                                        <li>
                                            <a href="product-details-sticky-left.html">Sticky Left</a>
                                        </li>
                                        <li>
                                            <a href="product-details-sticky-right.html">Sticky Right</a>
                                        </li>
                                        <li>
                                            <a href="product-details-slider-box.html">Slider Box</a>
                                        </li>
                                        <li>
                                            <a href="product-details-slider-full-width.html">Slider Box Full Width</a>
                                        </li>
                                        <li>
                                            <a href="product-details-affiliate.html">Affiliate Proudct</a>
                                        </li>
                                        <li>
                                            <a href="product-details-variable.html">Variable Proudct</a>
                                        </li>
                                        <li>
                                            <a href="product-details-group.html">Group Product</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="blog.html">Blog</a>
                            <ul class="sub-menu">
                                <li class="menu-item-has-children">
                                    <a href="#">Blog</a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="blog-left-sidebar.html">Blog Left Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="blog.html">Blog Right Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="blog-01-column.html">Blog 01 column</a>
                                        </li>
                                        <li>
                                            <a href="blog-02-columns.html">Blog 02 columns</a>
                                        </li>
                                        <li>
                                            <a href="blog-03-columns.html">Blog 03 columns</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Blog Details</a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="blog-details-audio.html">Audio Blog Details</a>
                                        </li>
                                        <li>
                                            <a href="blog-details-gallery.html">Gallery Blog Details</a>
                                        </li>
                                        <li>
                                            <a href="blog-details-image.html">image Blog Details</a>
                                        </li>
                                        <li>
                                            <a href="blog-details-video.html">Video Blog Details</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">Pages</a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="my-account.html">My Account</a>
                                </li>
                                <li>
                                    <a href="checkout.html">Checkout</a>
                                </li>
                                <li>
                                    <a href="cart.html">Cart</a>
                                </li>
                                <li>
                                    <a href="compare.html">Compare</a>
                                </li>
                                <li>
                                    <a href="order-tracking.html">Track Order</a>
                                </li>
                                <li>
                                    <a href="wishlist.html">Wishlist</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="contact-us.html">Contact Us</a>
                        </li>
                    </ul>
                    <div class="site-info vertical">
                        <div class="site-info__item">
                            <a href="tel:+01223566678"><strong>+01 2235 666 78</strong></a>
                            <a href="mailto:Support@contixs.com">Support@furtrate.com</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- OffCanvas Menu End -->

        <!-- Mini Cart Start -->
        <aside class="mini-cart" id="miniCart">
            <div class="mini-cart-wrapper">
                <div class="mini-cart__close">
                    <a href="#" class="btn-close"><i class="la la-remove"></i></a>
                </div>
                <div class="mini-cart-inner">
                    <h3 class="mini-cart__heading mb--45">Keranjang Belanja</h3>
                    <div class="mini-cart__content">
                        <ul class="mini-cart__list">
                            <?php 
                                $sub_total = 0;
                                foreach (get_carts() as $key => $value) {
                                $total = $value->harga * $value->jumlah_beli;
                                $sub_total += $total;
                            ?>
                                <li class="mini-cart__product">
                                    <a href="#" class="mini-cart__product-remove">
                                        <i class="la la-remove"></i>
                                    </a>
                                    <div class="mini-cart__product-image">
                                        <img src="https://dash.aprianimagfira.my.id/assets/img/produk/<?= $value->foto ?>" alt="products">
                                    </div>
                                    <div class="mini-cart__product-content">
                                        <a class="mini-cart__product-title" href="product-details.html"><?= $value->nama_produk ?></a>
                                        <span class="mini-cart__product-quantity"><?= $value->jumlah_beli ?> x <?= $value->harga ?></span>
                                    </div>
                                </li>
                            <?php } ?>
                        </ul>
                        <div class="cart-calculator__item--value">
                            <span>Subtotal</span>
                            <span class="">Rp. <?= format_rupiah($sub_total) ?></span>
                        </div>
                        <div class="cart-calculator__item--value">
                            <span>Shipping</span>
                            <span class="">Rp. 50.000</span>
                        </div>
                        <div class="mini-cart__buttons">
                            <a href="<?= route_to('carts') ?>" class="btn btn-fullwidth btn-bg-primary mb--20">View Cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
        <!-- Mini Cart End -->

        <!-- Searchform Popup Start -->
        <div class="searchform__popup" id="searchForm">
            <a href="#" class="btn-close"><i class="la la-remove"></i></a>
            <div class="searchform__body">
                <p>Start typing and press Enter to search</p>
                <form class="searchform" action="<?= route_to('search') ?>" method="get">
                    <input type="text" id="popup-search" class="searchform__input"
                        placeholder="Search Entire Store..." name="pencarian">
                    <button type="submit" class="searchform__submit"><i class="la la-search"></i></button>
                </form>
            </div>
        </div>
        <!-- Searchform Popup End -->

        <!-- Global Overlay Start -->
        <div class="global-overlay"></div>
        <!-- Global Overlay End -->

        <!-- Global Overlay Start -->
        <a class="scroll-to-top" href=""><i class="la la-angle-double-up"></i></a>
        <!-- Global Overlay End -->
    </div>
    <!-- Main Wrapper End -->


    <!-- ************************* JS Files ************************* -->

    <!-- Axios JS -->
    <script src="<?= base_url() ?>/assets/js/axios.js"></script>
    <!-- sweetalert -->
    <script src="<?= base_url() ?>/assets/js/sweetalert2.js"></script>
    <!-- jQuery JS -->
    <script src="<?= base_url() ?>/assets/js/vendor.js"></script>

    <!-- Main JS -->
    <script src="<?= base_url() ?>/assets/js/main.js"></script>

    <!-- Required datatable js -->
    <script src="<?= base_url() ?>/assets/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>/assets/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Buttons examples -->
    <script src="<?= base_url() ?>/assets/datatables/dataTables.buttons.min.js"></script>
    <script src="<?= base_url() ?>/assets/datatables/buttons.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>/assets/datatables/jszip.min.js"></script>
    <script src="<?= base_url() ?>/assets/datatables/pdfmake.min.js"></script>
    <script src="<?= base_url() ?>/assets/datatables/vfs_fonts.js"></script>
    <script src="<?= base_url() ?>/assets/datatables/buttons.html5.min.js"></script>
    <script src="<?= base_url() ?>/assets/datatables/buttons.print.min.js"></script>
    <script src="<?= base_url() ?>/assets/datatables/buttons.colVis.min.js"></script>

    <!-- Responsive examples -->
    <script src="<?= base_url() ?>/assets/datatables/dataTables.responsive.min.js"></script>
    <script src="<?= base_url() ?>/assets/datatables/responsive.bootstrap4.min.js"></script>

    <!-- Datatable init js -->
    <script src="<?= base_url() ?>/assets/datatables/datatables.init.js"></script>  
    <?= $this->renderSection('javascript') ?>
</body>

</html>