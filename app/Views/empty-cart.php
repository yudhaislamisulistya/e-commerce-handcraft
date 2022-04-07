<?= $this->extend('layouts/page_layout') ?>

<?= $this->section('content') ?>
<!-- Breadcrumb area Start -->
<section class="page-title-area bg-image ptb--80" data-bg-image="assets/img/penyandang_disabilitas.jpeg">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="page-title">Keranjang Belanja</h1>
                        <ul class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li class="current"><span>Keranjang Belanja</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- Breadcrumb area End -->

        <!-- Main Content Wrapper Start -->
        <div class="main-content-wrapper">
            <div class="page-content-inner ptb--80 pt-md--40 pb-md--60">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mb-md--50">
                            <form class="cart-form" action="<?= route_to('clear_or_update_cart') ?>" method="post">
                            <?= csrf_field() ?>
                                <div class="row g-0">
                                    <div class="col-12">
                                        <h1 class="text-center">Keranjang Belanja Masuk Kosong, Cek <a href="<?= route_to('produk') ?>">Produk</a></h1>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-4">
                            <div class="cart-collaterals">
                                <div class="cart-totals">
                                    <h5 class="font-size-14 font-bold mb--15">Total Keranjang Belanja</h5>
                                    <div class="cart-calculator">
                                        <div class="cart-calculator__item">
                                            <div class="cart-calculator__item--head">
                                                <span>Subtotal</span>
                                            </div>
                                            <div class="cart-calculator__item--value">
                                                <span>Rp. 0</span>
                                            </div>
                                        </div>
                                        <div class="cart-calculator__item">
                                            <div class="cart-calculator__item--head">
                                                <span>Shipping</span>
                                            </div>
                                            <div class="cart-calculator__item--value">
                                                <span>Rp. 0</span>
                                            </div>
                                        </div>
                                        <div class="cart-calculator__item">
                                            <div class="cart-calculator__item--head">
                                                <span>Address</span>
                                            </div>
                                            <div class="cart-calculator__item--value">
                                                <span><?= get_alamat_pengiriman() ?></span>
                                            </div>
                                        </div>
                                        <div class="cart-calculator__item order-total">
                                            <div class="cart-calculator__item--head">
                                                <span>Total</span>
                                            </div>
                                            <div class="cart-calculator__item--value">
                                                <span class="product-price-wrapper">
                                                    <span class="money">Rp. 0</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button disabled id="pay-button" class="btn btn-size-md btn-shape-square btn-fullwidth">Pay!</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Content Wrapper Start -->
<?= $this->endSection() ?>
