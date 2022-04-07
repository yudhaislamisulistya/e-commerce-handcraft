<?= $this->extend('layouts/page_layout') ?>

<?= $this->section('content') ?>
<!-- Breadcrumb area Start -->
<section class="page-title-area bg-image ptb--80" data-bg-image="../assets/img/penyandang_disabilitas.jpeg">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="page-title">Invoices</h1>
                        <ul class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li class="current"><span>Invoices</span></li>
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
                    <?php if(session()->getFlashData('status') == "success"){ ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            Proses Berhasil
                        </div>
                    <?php }else if(session()->getFlashData('status') == "failed"){ ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            Proses Gagal
                        </div>
                    <?php }?>
                    <div class="row">
                        <div class="col-lg-8 mb-md--50">
                            <form class="cart-form" action="<?= route_to('clear_or_update_cart') ?>" method="post">
                            <?= csrf_field() ?>
                                <div class="row g-0">
                                    <div class="col-12">
                                        <div class="table-content table-responsive">
                                            <table class="table text-center">
                                                <thead>
                                                    <tr>
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
                                                        <tr>
                                                            <td class="product-thumbnail text-start">
                                                                <img height="80" src="../https://dash.aprianimagfira.my.id/assets/img/produk/<?= $value->foto ?>" alt="Product Thumnail">
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
                                                            <td class="product-price">
                                                                    <h3><?= $value->jumlah_beli ?> Item</h3>
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
                            </form>
                        </div>
                        <div class="col-lg-4">
                            <div class="cart-collaterals">
                                <div class="cart-totals">
                                    <h5 class="font-size-14 font-bold mb--15">Total Total Belanja</h5>
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
                                        <div class="cart-calculator__item">
                                            <div class="cart-calculator__item--head">
                                                <span>Status</span>
                                            </div>
                                            <div class="cart-calculator__item--value">
                                                <?php
                                                    $status = '';
                                                    if($value->transaction_status == "pending"){
                                                        $status = "<span class='badge badge-warning'>Pending (Menunggu Pembayaran)</span>";
                                                    }else if($value->transaction_status == "settlement"){
                                                        $status = "<span class='badge badge-success'>Success (Berhasil)</span>";
                                                    }else if($value->transaction_status == "cancel"){
                                                        $status = "<span class='badge badge-danger'>Cancel (Pembayaran Dibatalkan)</span>";
                                                    }else if($value->transaction_status == "expire"){
                                                        $status = "<span class='badge badge-warning'>Expired (Waktu Pembayaran Berakhir)</span>";
                                                    }else{
                                                        $status = "<span>Alasan lain...</span>";
                                                    }
                                                    echo $status;
                                                ?>
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
                                    <form action="<?= route_to('add_feedback') ?>" method="post" class="form form--account">
                                    <?= csrf_field() ?>
                                        <input type="hidden" name="id_user" value="<?= get_id_user() ?>">
                                        <input type="hidden" name="id_produk" value="<?= $data[0]->id_produk ?>">
                                        <fieldset class="form__fieldset mb--20">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form__group">
                                                        <label class="form__label" for="isi">Isi Feedback<span class="required">*</span></label>
                                                        <textarea name="isi" id="isi" class="form__input"  placeholder="Masukkan Alma Lengkap Anda"><?= get_alamat_pengiriman() ?></textarea>
                                                    </div>
                                                    <div class="form__group">
                                                        <label class="form__label" for="isi">Bintang<span class="required">*</span></label>
                                                        <select name="bintang" class="form__input">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 mt-2">
                                                    <div class="form__group">
                                                        <input type="submit" value="Berikan Feedback" class="btn btn-size-md">
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Content Wrapper Start -->
<?= $this->endSection() ?>