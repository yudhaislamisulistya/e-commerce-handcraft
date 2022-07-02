<?= $this->extend('layouts/page_layout') ?>

<?= $this->section('content') ?>
        <!-- Breadcrumb area Start -->
        <section class="page-title-area bg-image ptb--80" data-bg-image="../assets/img/001.png">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="page-title">Product Details</h1>
                        <ul class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li class="current"><span>Product Details</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- Breadcrumb area End -->

        <!-- Main Content Wrapper Start -->
        <div class="main-content-wrapper">
            <div class="page-content-inner pt--80 pt-md--60">
                <div class="container">
                    <?php if(session()->getFlashData('status') == "success"){ ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            Berhasil Menambahkan Ke Keranjang Belanja, <h3><a href="<?= route_to('carts') ?>">Cart 😋😋😋</a></h3>
                        </div>
                    <?php }else if(session()->getFlashData('status') == "failed"){ ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            Gagal Menambahkan Ke Keranjang Belanja
                        </div>
                    <?php }?>
                    <div class="row g-0 mb--80 mb-md--57">
                        <div class="col-lg-7 product-main-image">
                            <div class="product-image">
                                <div class="product-gallery vertical-slide-nav">
                                    <div class="product-gallery__large-image mb-sm--30">
                                        <div class="product-gallery__wrapper">
                                            <div class="element-carousel main-slider image-popup"
                                            data-slick-options='{
                                                "slidesToShow": 1,
                                                "slidesToScroll": 1,
                                                "infinite": true,
                                                "arrows": false, 
                                                "asNavFor": ".nav-slider"
                                            }'>
                                                <figure class="product-gallery__image zoom">
                                                    <img style="border-radius: 10px" src="https://dash.aprianimagfira.my.id/assets/img/produk/<?= $data['foto'] ?>" alt="Product">
                                                    <span class="product-badge sale">Sale</span>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 offset-xl-1 col-lg-5 product-main-details mt-md--50">
                            <div class="product-summary pl-lg--30 pl-md--0">
                                <h3 class="product-title mb--20"><?= $data['nama_produk'] ?></h3>
                                <p class="product-short-description mb--20"><?= $data['deskripsi'] ?></p>
                                <div class="product-price-wrapper mb--25">
                                    <span class="money"><?= format_rupiah($data['harga']) ?></span>
                                </div>
                                <form action="<?= route_to('add_update_cart') ?>" method="post">
                                    <?= csrf_field() ?>
                                    <input type="hidden" name="id_user" value="<?= get_id_user() ?>">
                                    <input type="hidden" name="id_produk" value="<?= $data['id_produk'] ?>">
                                    <input type="hidden" name="url" value="<?= $data['slug'] ?>">
                                    <div class="product-action d-flex flex-sm-row align-items-sm-center flex-column align-items-start mb--30">
                                        <?php if (!check_add_product($data['id_produk'])) { ?>
                                            <div class="quantity-wrapper d-flex align-items-center mr--30 mr-xs--0 mb-xs--30">
                                                <label class="quantity-label" for="qty">Jumlah:</label>
                                                <div class="quantity">
                                                    <input type="number" class="quantity-input" name="jumlah" id="jumlah" value="1" min="1">
                                                </div>
                                            </div>
                                        <?php } ?>   

                                        <?php if (check_add_product($data['id_produk'])) { ?>
                                            <a href="<?= route_to('carts') ?>" class="btn btn-shape-square btn-size-sm">Cek Keranjang Belanja</a>
                                        <?php }else{ ?>
                                            <input type="submit" value="Tambahakan" class="btn btn-shape-square btn-size-sm">
                                        <?php } ?>   
                                    </div>  
                                </form>
                                <div class="product-footer-meta">
                                    <p><span>Category:</span> 
                                        <a href="<?= route_to('search_category', get_jenis_produk($data['id_jenis_produk'])) ?>"><?= get_jenis_produk($data['id_jenis_produk']) ?></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center mb--77 mb-md--57">
                        <div class="col-12">
                            <div class="tab-style-2">
                                <div class="nav nav-tabs mb--35 mb-sm--25" id="product-tab" role="tablist">
                                    <button type="button" class="nav-link" id="nav-reviews-tab" data-bs-toggle="tab" data-bs-target="#nav-reviews" role="tab" aria-selected="true">
                                        <span>Reviews(<?= count(get_feedback_by_product($data['id_produk'])) ?>)</span>
                                    </button>
                                </div>
                                <div class="tab-content" id="product-tabContent">
                                    <div class="tab-pane fade show active" id="nav-reviews" role="tabpanel" aria-labelledby="nav-reviews-tab">
                                        <div class="product-reviews">
                                            <h3 class="review__title"><?= count(get_feedback_by_product($data['id_produk'])) ?> ulasan untuk <?= $data['nama_produk'] ?></h3>
                                            <?php foreach (get_feedback_by_product($data['id_produk']) as $key => $value) { ?>
                                            <?php
                                                $star = "";
                                                if($value->bintang == 5){
                                                    $star = "star-five";
                                                }else if($value->bintang == 4){
                                                    $star = "star-four";
                                                }else if($value->bintang == 3){
                                                    $star = "star-three";
                                                }else if($value->bintang == 2){
                                                    $star = "star-two";
                                                }else if($value->bintang == 1){
                                                    $star = "star-one";
                                                }
                                            ?>
                                            <ul class="review__list">
                                                <li class="review__item">
                                                    <div class="review__container">
                                                        <img src="../assets/img/others/comment-1.jpg" alt="Review Avatar" class="review__avatar">
                                                        <div class="review__text">
                                                            <div class="d-flex flex-sm-row flex-column justify-content-between">
                                                                <div class="review__meta">
                                                                    <strong class="review__author"><?= get_nama_lengkap_by_id_user($value->id_user) ?></strong>
                                                                    <span class="review__dash">-</span>
                                                                    <span class="review__published-date"><?= format_tanggal($value->created_at) ?></span>
                                                                </div>
                                                                <div class="product-rating">
                                                                    <div class="star-rating <?= $star ?>">
                                                                        <span>Rated <strong class="rating">5.00</strong> out of 5</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <p class="review__description"><?= $value->isi ?></p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Content Wrapper End -->
<?= $this->endSection() ?>