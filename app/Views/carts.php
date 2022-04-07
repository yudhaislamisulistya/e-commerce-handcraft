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
                                    <?php if(session()->getFlashData('status') == "success"){ ?>
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            Berhasil Menghapus Produk Dalam Keranjang Belanja
                                        </div>
                                    <?php }else if(session()->getFlashData('status') == "failed"){ ?>
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            Gagal Menghapus
                                        </div>
                                    <?php }else if(session()->getFlashData('status') == "success_clear"){ ?>
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            Berhasil Menghapus Semua Produk
                                        </div>
                                    <?php }else if(session()->getFlashData('status') == "failed_clear"){ ?>
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            Gagal Menghapus Semua Produk
                                        </div>
                                    <?php }else if(session()->getFlashData('status') == "success_update"){ ?>
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            Berhasil Memperbaharui Keranjang Belanja
                                        </div>
                                    <?php }else if(session()->getFlashData('status') == "failed_update"){ ?>
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            Gagal Memperbaharui Keranjang Belanja
                                        </div>
                                    <?php }?>
                                        <div class="table-content table-responsive">
                                            <table class="table text-center">
                                                <thead>
                                                    <tr>
                                                        <th>&nbsp;</th>
                                                        <th>&nbsp;</th>
                                                        <th class="text-start">Produk</th>
                                                        <th>Harga</th>
                                                        <th>Jumlah</th>
                                                        <th>Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 
                                                        $sub_total = 0;
                                                        foreach ($data as $key => $value) {
                                                        $total = $value->harga * $value->jumlah_beli;
                                                        $sub_total += $total;
                                                    ?>
                                                        <input type="hidden" name="id_keranjang[]" value="<?= $value->id_keranjang ?>">
                                                        <tr>
                                                            <td class="product-remove text-start"><a href="<?= route_to('delete_cart', $value->id_keranjang) ?>"><i class="la la-remove"></i></a></td>
                                                            <td class="product-thumbnail text-start">
                                                                <img height="80" src="assets/img/produk/<?= $value->foto ?>" alt="Product Thumnail">
                                                            </td>
                                                            <td class="product-name text-start wide-column">
                                                                <h3>
                                                                    <a href="<?= route_to('product_detail', $value->slug) ?>"><?= $value->nama_produk ?></a>
                                                                </h3>
                                                            </td>
                                                            <td class="product-price">
                                                                <span class="product-price-wrapper">
                                                                    <span class="money">Rp. <?= format_rupiah($value->harga) ?></span>
                                                                </span>
                                                            </td>
                                                            <td class="product-quantity">
                                                                <div class="quantity">
                                                                    <input type="number" class="quantity-input" name="jumlah_beli[]" id="jumlah_beli-1" value="<?= $value->jumlah_beli ?>" min="1">
                                                                </div>
                                                            </td>
                                                            <td class="product-total-price">
                                                                <span class="product-price-wrapper">
                                                                    <span class="money">Rp. <?= format_rupiah($total) ?></span>
                                                                </span>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>  
                                    </div>
                                </div>
                                <div class="row g-0 border-top pt--20 mt--20">
                                    <div class="col-sm-6">
                                    </div>
                                    <div class="col-sm-6 text-sm-end">
                                        <button type="submit" name="clear_or_update_cart" value="clear_cart" class="cart-form__btn">Clear Cart</button>
                                        <button type="submit" name="clear_or_update_cart" value="update_cart" class="cart-form__btn">Update Cart</button>
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
                                                <span>Rp. <?= format_rupiah($sub_total) ?></span>
                                            </div>
                                        </div>
                                        <div class="cart-calculator__item">
                                            <div class="cart-calculator__item--head">
                                                <span>Shipping</span>
                                            </div>
                                            <div class="cart-calculator__item--value">
                                                <span>Rp. 50.000</span>
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
                                                    <span class="money">Rp. <?= format_rupiah($sub_total+50000) ?></span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button id="pay-button" class="btn btn-size-md btn-shape-square btn-fullwidth">Pay!</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Content Wrapper Start -->
<?= $this->endSection() ?>

<?= $this->section('javascript') ?>
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-hpn8hwMKB5cZ8Unm">
    </script>
    <script type="text/javascript">
        HOST_URL = "http://localhost:8080"
        // result = (<?= $customer_details_json ?>)
        // result['nama_lengkap'] = result
        // console.log(result)
        document.getElementById('pay-button').onclick = function () {
            // SnapToken acquired from previous step
            snap.pay('<?=$snapToken?>', {
                // Optional
                onSuccess: function (result) {
                    /* You may add your own js here, this is just example */
                    // document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                    result['id_keranjang'] = (<?= $id_keranjang_json ?>)
                    result['items'] = (<?= $items_json ?>)
                    result['total_items'] = (<?= $total_items ?>)
                    console.log(result);
                    axios.post(HOST_URL + "/create-transaction", result)
                    .then(res => {
                        console.log(res.data)
                        window.location.href = "/carts";
                    })
                    .catch(err => {
                        console.error(err); 
                    })
                },
                // Optional
                onPending: function (result) {
                    // document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                    console.log('masuk disini');
                    result['id_keranjang'] = (<?= $id_keranjang_json ?>)
                    result['items'] = (<?= $items_json ?>)
                    result['total_items'] = (<?= $total_items ?>)
                    console.log(result);
                    axios.post(HOST_URL + "/create-transaction", result)
                    .then(res => {
                        console.log(res.data)
                        window.location.href = '/carts';
                    })
                    .catch(err => {
                        console.error(err); 
                    })
                },
                // Optional
                onError: function (result) {
                    /* You may add your own js here, this is just example */
                    document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                }
            });
        };
    </script>
<?= $this->endSection() ?>