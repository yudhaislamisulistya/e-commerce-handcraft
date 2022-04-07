<?= $this->extend('layouts/page_layout') ?>


<?= $this->section('content') ?>
        <!-- Main Content Wrapper Start -->
        <main class="main-content-wrapper">
            <!-- Slider area Start -->
            <section class="homepage-slider mb--75 mb-md--55">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="element-carousel slick-right-bottom" data-slick-options='{
                                "slidesToShow": 1, 
                                "arrows": true,
                                "prevArrow": {"buttonClass": "slick-btn slick-prev", "iconClass": "la la-arrow-left" },
                                "nextArrow": {"buttonClass": "slick-btn slick-next", "iconClass": "la la-arrow-right" }
                            }' data-slick-responsive='[{"breakpoint": 768, "settings": {"arrows": false}}]'>
                                <div class="item">
                                    <div class="single-slide d-flex align-items-center bg-color"
                                        data-bg-color="#dbf3f2">
                                        <div class="row align-items-center g-0 w-100">
                                            <div class="col-xl-7 col-md-6 mb-sm--50">
                                                <figure data-animation="fadeInUp" data-duration=".3s" data-delay=".3s"
                                                    class="plr--15">
                                                    <img height="350px" src="assets/img/penyandang_disabilitas.webp"
                                                        alt="Slider O1 image" class="mx-auto">
                                                </figure>
                                            </div>
                                            <div class="col-md-6 col-lg-5 offset-lg-1 offset-xl-0">
                                                <div class="slider-content">
                                                    <div class="slider-content__text mb--40 mb-md--30">
                                                        <p class="mb--15" data-animation="fadeInUp" data-duration=".3s"
                                                            data-delay=".3s">Credifiyshop hadir untuk mendorong kemandirian penyandang disabilitas Tunarungu agar mandiri secara finansial dan terinspirasi untuk mendefinsiikan kreativitas mereka kedalam karya yang menghasilkan profit</p>
                                                        <h1 class="heading__primary lh-pt10" data-animation="fadeInUp"
                                                            data-duration=".3s" data-delay=".3s">Support person with disabilities towards financial indepedences</h1>
                                                    </div>
                                                    <div class="slider-content__btn">
                                                        <a href="<?= route_to('produk') ?>" class="btn btn-outline btn-brw-2"
                                                            data-animation="fadeInUp" data-duration=".3s"
                                                            data-delay=".6s">Shop Now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="single-slide d-flex align-items-center bg-color"
                                        data-bg-color="#dbf3f2">
                                        <div class="row align-items-center g-0 w-100">
                                            <div class="col-xl-6 col-md-6 mb-sm--50 order-md-2">
                                                <figure data-animation="fadeInUp" data-duration=".3s" data-delay=".3s"
                                                    class="pl-15 pr--60">
                                                    <img height="400px" src="assets/img/kerajinan_tangan.png"
                                                        alt="Slider O1 image" class="mx-auto">
                                                </figure>
                                            </div>
                                            <div class="col-md-5 col-lg-5 offset-md-1 order-md-1">
                                                <div class="slider-content">
                                                    <div class="slider-content__text border-color-2 mb--40 mb-md--30">
                                                        <p class="mb--15" data-animation="fadeInUp" data-duration=".3s"
                                                            data-delay=".3s"><i>e-commerce</i> kerajinan tangan lokal berbasis website dari penyandang disabilitas yang dapat membantu meningkatkan promosi dan penjualan hasil karya kelompok tunarungu</p>
                                                        <h1 class="heading__primary lh-pt10" data-animation="fadeInUp"
                                                            data-duration=".3s" data-delay=".3s">School Handcraft</h1>
                                                    </div>
                                                    <div class="slider-content__btn">
                                                        <a href="<?= route_to('produk') ?>" class="btn btn-outline btn-brw-2 btn-brc-2"
                                                            data-animation="fadeInUp" data-duration=".3s"
                                                            data-delay=".6s">Shop Now</a>
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
            </section>
            <!-- Slider area End -->

            <!-- Feature Product Area Start -->
            <section class="feature-product-area mb--75 mb-md--55">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="feature-product bg-color" data-bg-color="#d7fbf9" id="produk-terbaru">

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Feature Product Area End -->

            <!-- Product Tab Area Start -->
            <section class="product-tab-area mb--30 mb-md--10">
                <div class="container">
                    <div class="row mb--28 mb-md--18 mb-sm--33">
                        <div class="col-md-2 text-md-start text-center">
                            <h2>Layanan</h2>
                        </div>
                        <div class="col-md-10">
                            <div class="tab-style-1">
                                <div class="nav nav-tabs justify-content-md-end justify-content-center" id="product-tab"
                                    role="tablist">
                                    <button type="button" class="nav-item nav-link active" id="new-all-tab"
                                        data-bs-toggle="tab" data-bs-target="#new-all" role="tab"
                                        aria-controls="new-all" aria-selected="true">
                                        <span class="nav-text">All</span>
                                    </button>
                                    <button type="button" class="nav-item nav-link" id="hantaran-tab"
                                        data-bs-toggle="tab" data-bs-target="#hantaran" role="tab"
                                        aria-controls="hantaran" aria-selected="false">
                                        <span class="nav-text">Hantaran</span>
                                    </button>
                                    <button type="button" class="nav-item nav-link" id="busana-pakaian-tab"
                                        data-bs-toggle="tab" data-bs-target="#busana-pakaian" role="tab"
                                        aria-controls="busana-pakaian" aria-selected="false">
                                        <span class="nav-text">Busana/Pakaian</span>
                                    </button>
                                    <button type="button" class="nav-item nav-link" id="kriya-kayu-tab"
                                        data-bs-toggle="tab" data-bs-target="#kriya-kayu" role="tab"
                                        aria-controls="kriya-kayu" aria-selected="false">
                                        <span class="nav-text">Kriya Kayu</span>
                                    </button>
                                    <button type="button" class="nav-item nav-link" id="penyewaan-jasa-tab"
                                        data-bs-toggle="tab" data-bs-target="#penyewaan-jasa" role="tab"
                                        aria-controls="penyewaaan-jasa" aria-selected="false">
                                        <span class="nav-text">Penyewaan Jasa</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="tab-content" id="product-tab-content">
                                <div class="tab-pane fade show active" id="new-all" role="tabpanel"
                                    aria-labelledby="new-all-tab">
                                    <div class="row" id="layanan-new-all">
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="busana-pakaian" role="tabpanel"
                                    aria-labelledby="busana-pakaian-tab">
                                    <div class="row" id="layanan-busana-pakaian">
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="hantaran" role="tabpanel"
                                    aria-labelledby="hantaran-tab">
                                    <div class="row" id="layanan-hantaran">
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="kriya-kayu" role="tabpanel"
                                    aria-labelledby="kriya-kayu-tab">
                                    <div class="row" id="layanan-kriya-kayu">
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="penyewaan-jasa" role="tabpanel"
                                    aria-labelledby="penyewaan-jasa-tab">
                                    <div class="row" id="layanan-penyewaan-jasa">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Product Tab Area End -->

            <!-- Brand Logo Area Start -->
            <div class="brand-logo-area mb--80 mb-md--60">
                <div class="container">
                    <div class="row justify-content-center">
                        <h1>Partner</h1>
                        <div class="col-xl-12">
                            <div class="brand-log-wrapper bg-color ptb--75" data-bg-color="#e9fefd">
                                <div class="element-carousel" data-slick-options='{
                                    "slidesToShow": 5,
                                    "autoplay": true
                                }' data-slick-responsive='[
                                    {"breakpoint": 1200, "settings": {"slidesToShow": 4}},
                                    {"breakpoint": 992, "settings": {"slidesToShow": 3}},
                                    {"breakpoint": 768, "settings": {"slidesToShow": 2}},
                                    {"breakpoint": 480, "settings": {"slidesToShow": 1}}
                                ]'>
                                    <div class="item">
                                        <figure>
                                            <img height="100px" src="assets/img/sulsel.png" alt="Brand" class="mx-auto">
                                        </figure>
                                    </div>
                                    <div class="item">
                                        <figure>
                                            <img height="100px" src="assets/img/tut_wuri_handayani.png" alt="Brand" class="mx-auto">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Brand Logo Area End -->
            <section class="home-testimonial">
                <div class="container-fluid">
                    <div class="row d-flex justify-content-center testimonial-pos">
                        <div class="col-md-12 pt-4 d-flex justify-content-center">
                            <h3>Bukti Konsumen</h3>
                        </div>
                        <div class="col-md-12 d-flex justify-content-center">
                            <h2>Jelajahi kepuasan dari pembeli</h2>
                        </div>
                    </div>
                    <section class="home-testimonial-bottom">
                        <div class="container testimonial-inner">
                            <div class="row d-flex justify-content-center">
                                <?php foreach ($data as $key => $value) { ?>
                                    <div class="col-md-4 style-3">
                                        <div class="tour-item ">
                                            <div class="tour-desc bg-white">
                                                <div class="tour-text color-grey-3 text-center">“<?= $value->isi ?>”</div>
                                                <div class="d-flex justify-content-center pt-2 pb-2"><img class="tm-people" src="assets/img/others/comment-1.jpg" alt=""></div>
                                                <div class="link-name d-flex justify-content-center"><?= get_nama_lengkap_by_id_user($value->id_user) ?></div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                    </section>
            </section>
        </main>
        <!-- Main Content Wrapper End -->
<?= $this->endSection() ?>

<?= $this->section('javascript') ?>
<script>
    HOST_URL = "http://localhost:8080"
    $('#tekan').click(function (e) { 
        e.preventDefault();
        status = $(this).attr("data-id");
        if (status == "false") {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Anda Belum Login, Silahkan Login Untuk Menambahkan ke Keranjang Belanja',
                footer: '<a href="">Login</a>'
            })
        }
    });

    $(document).ready(function () {
        axios.get(HOST_URL + '/get-product-one-new')
            .then(function(response){
                console.log(response.data.data['nama_produk']);
                $('#produk-terbaru').html(
                    `
                    <div class="feature-product__inner bg-color" data-bg-color="#e9fefd">
                        <div class="feature-product__info">
                            <p class="hastag">#Produk Terbaru</p>
                            <h2 class="feature-product__title"><a href="`+response.data.data['slug']+`">`+response.data.data['nama_produk']+`</a>
                            </h2>
                            <a href="shop.html" class="feature-product__btn">Beli Sekarang</a>
                        </div>
                        <figure class="feature-product__image mb-sm--30">
                            <a href="`+response.data.data['slug']+`">
                                <img src="https://dash.aprianimagfira.my.id/assets/img/produk/`+response.data.data['foto']+`" alt="Feature Product">
                            </a>
                        </figure>
                    </div>
                    `
                );
            })
            .catch(function(error){
                console.log(error);
            })
        axios.get(HOST_URL + '/get-product-with-type')
            .then(function (response){
                data = response.data
                for (let index = 0; index < data.row; index++) {
                    $('#layanan-new-all').append(
                        `
                        <div class="col-lg-3 col-sm-6 mb--45">
                            <div class="ft-product HTfadeInUp">
                                <div class="product-inner">
                                    <div class="product-image">
                                        <figure class="product-image--holder roundedn ">
                                            <img src="https://dash.aprianimagfira.my.id/assets/img/produk/`+data.data[index].foto+`"
                                                alt="Product">
                                        </figure>
                                        <a href="`+data.data[index].slug+`" class="product-overlay"></a>
                                        <div class="product-action">
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <div class="product-category">
                                            <a href="`+data.data[index].slug+`"></a>
                                        </div>
                                        <h3 class="product-title"><a href="`+data.data[index].slug+`">`+data.data[index].nama_produk+`</a></h3>
                                        <div class="product-info-bottom">
                                            <div class="product-price-wrapper">
                                                <span class="money">`+formatRupiah(data.data[index].harga, 'Rp. ')+`</span>
                                            </div>
                                            <a href="`+data.data[index].slug+`" class="add-to-cart pr--15">
                                                <i class="la la-plus"></i>
                                                <span>Tambahakan</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        `
                    );
                }
            })
            .catch(function(error){
                console.log(error);
            })

    });

    $('#new-all-tab').click(function (e) { 
        e.preventDefault();
        $('#layanan-new-all').html('');
        axios.get(HOST_URL + '/get-product-with-type/')
            .then(function (response){
                data = response.data
                console.log(data.row);
                if(data.row == undefined){
                    $('#layanan-new-all').append('<h2 style="text-align: center;">Produk Belum Tersedia...</h2>');
                }
                for (let index = 0; index < data.row; index++) {
                    $('#layanan-new-all').append(
                        `
                        <div class="col-lg-3 col-sm-6 mb--45">
                            <div class="ft-product HTfadeInUp">
                                <div class="product-inner">
                                    <div class="product-image">
                                        <figure class="product-image--holder roundedn ">
                                            <img src="https://dash.aprianimagfira.my.id/assets/img/produk/`+data.data[index].foto+`"
                                                alt="Product">
                                        </figure>
                                        <a href="`+data.data[index].slug+`" class="product-overlay"></a>
                                        <div class="product-action">
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <div class="product-category">
                                            <a href="`+data.data[index].slug+`"></a>
                                        </div>
                                        <h3 class="product-title"><a href="`+data.data[index].slug+`">`+data.data[index].nama_produk+`</a></h3>
                                        <div class="product-info-bottom">
                                            <div class="product-price-wrapper">
                                                <span class="money">`+formatRupiah(data.data[index].harga, 'Rp. ')+`</span>
                                            </div>
                                            <a href="`+data.data[index].slug+`" class="add-to-cart pr--15">
                                                <i class="la la-plus"></i>
                                                <span>Tambahakan</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        `
                    );
                }
            })
            .catch(function(error){
                console.log(error);
            })
    });

    $('#hantaran-tab').click(function (e) { 
        e.preventDefault();
        $('#layanan-hantaran').html('');
        axios.get(HOST_URL + '/get-product-with-type/1')
            .then(function (response){
                data = response.data
                console.log(data.row);
                if(data.row == undefined){
                    $('#layanan-hantaran').append('<h2 style="text-align: center;">Produk Belum Tersedia...</h2>');
                }
                for (let index = 0; index < data.row; index++) {
                    $('#layanan-hantaran').append(
                        `
                        <div class="col-lg-3 col-sm-6 mb--45">
                            <div class="ft-product HTfadeInUp">
                                <div class="product-inner">
                                    <div class="product-image">
                                        <figure class="product-image--holder roundedn ">
                                            <img src="https://dash.aprianimagfira.my.id/assets/img/produk/`+data.data[index].foto+`"
                                                alt="Product">
                                        </figure>
                                        <a href="`+data.data[index].slug+`" class="product-overlay"></a>
                                        <div class="product-action">
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <div class="product-category">
                                            <a href="`+data.data[index].slug+`"></a>
                                        </div>
                                        <h3 class="product-title"><a href="`+data.data[index].slug+`">`+data.data[index].nama_produk+`</a></h3>
                                        <div class="product-info-bottom">
                                            <div class="product-price-wrapper">
                                                <span class="money">`+formatRupiah(data.data[index].harga, 'Rp. ')+`</span>
                                            </div>
                                            <a href="`+data.data[index].slug+`" class="add-to-cart pr--15">
                                                <i class="la la-plus"></i>
                                                <span>Tambahakan</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        `
                    );
                }
            })
            .catch(function(error){
                console.log(error);
            })
    });

    $('#busana-pakaian-tab').click(function (e) { 
        e.preventDefault();
        $('#layanan-busana-pakaian').html('');
        axios.get(HOST_URL + '/get-product-with-type/2')
            .then(function (response){
                data = response.data
                console.log(data.row);
                if(data.row == undefined){
                    $('#layanan-busana-pakaian').append('<h2 style="text-align: center;">Produk Belum Tersedia...</h2>');
                }
                for (let index = 0; index < data.row; index++) {
                    $('#layanan-busana-pakaian').append(
                        `
                        <div class="col-lg-3 col-sm-6 mb--45">
                            <div class="ft-product HTfadeInUp">
                                <div class="product-inner">
                                    <div class="product-image">
                                        <figure class="product-image--holder roundedn ">
                                            <img src="https://dash.aprianimagfira.my.id/assets/img/produk/`+data.data[index].foto+`"
                                                alt="Product">
                                        </figure>
                                        <a href="`+data.data[index].slug+`" class="product-overlay"></a>
                                        <div class="product-action">
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <div class="product-category">
                                            <a href="`+data.data[index].slug+`"></a>
                                        </div>
                                        <h3 class="product-title"><a href="`+data.data[index].slug+`">`+data.data[index].nama_produk+`</a></h3>
                                        <div class="product-info-bottom">
                                            <div class="product-price-wrapper">
                                                <span class="money">`+formatRupiah(data.data[index].harga, 'Rp. ')+`</span>
                                            </div>
                                            <a href="`+data.data[index].slug+`" class="add-to-cart pr--15">
                                                <i class="la la-plus"></i>
                                                <span>Tambahakan</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        `
                    );
                }
            })
            .catch(function(error){
                console.log(error);
            })
    });

    $('#kriya-kayu-tab').click(function (e) { 
        e.preventDefault();
        $('#layanan-kriya-kayu').html('');
        axios.get(HOST_URL + '/get-product-with-type/3')
            .then(function (response){
                data = response.data
                console.log(data.row);
                if(data.row == undefined){
                    $('#layanan-kriya-kayu').append('<h2 style="text-align: center;">Produk Belum Tersedia...</h2>');
                }
                for (let index = 0; index < data.row; index++) {
                    $('#layanan-kriya-kayu').append(
                        `
                        <div class="col-lg-3 col-sm-6 mb--45">
                            <div class="ft-product HTfadeInUp">
                                <div class="product-inner">
                                    <div class="product-image">
                                        <figure class="product-image--holder roundedn ">
                                            <img src="https://dash.aprianimagfira.my.id/assets/img/produk/`+data.data[index].foto+`"
                                                alt="Product">
                                        </figure>
                                        <a href="product-details.html" class="product-overlay"></a>
                                        <div class="product-action">
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <div class="product-category">
                                            <a href="product-details.html"></a>
                                        </div>
                                        <h3 class="product-title"><a href="product-details.html">`+data.data[index].nama_produk+`</a></h3>
                                        <div class="product-info-bottom">
                                            <div class="product-price-wrapper">
                                                <span class="money">`+formatRupiah(data.data[index].harga, 'Rp. ')+`</span>
                                            </div>
                                            <a href="`+data.data[index].slug+`" class="add-to-cart pr--15">
                                                <i class="la la-plus"></i>
                                                <span>Tambahakan</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        `
                    );
                }
            })
            .catch(function(error){
                console.log(error);
            })
    });

    $('#penyewaan-jasa-tab').click(function (e) { 
        e.preventDefault();
        $('#layanan-penyewaan-jasa').html('');
        axios.get(HOST_URL + '/get-product-with-type/4')
            .then(function (response){
                data = response.data
                console.log(data.row);
                if(data.row == undefined){
                    $('#layanan-penyewaan-jasa').append('<h2 style="text-align: center;">Produk Belum Tersedia...</h2>');
                }
                for (let index = 0; index < data.row; index++) {
                    $('#layanan-penyewaan-jasa').append(
                        `
                        <div class="col-lg-3 col-sm-6 mb--45">
                            <div class="ft-product HTfadeInUp">
                                <div class="product-inner">
                                    <div class="product-image">
                                        <figure class="product-image--holder roundedn ">
                                            <img src="https://dash.aprianimagfira.my.id/assets/img/produk/`+data.data[index].foto+`"
                                                alt="Product">
                                        </figure>
                                        <a href="`+data.data[index].slug+`" class="product-overlay"></a>
                                        <div class="product-action">
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <div class="product-category">
                                            <a href="`+data.data[index].slug+`"></a>
                                        </div>
                                        <h3 class="product-title"><a href="`+data.data[index].slug+`">`+data.data[index].nama_produk+`</a></h3>
                                        <div class="product-info-bottom">
                                            <div class="product-price-wrapper">
                                                <span class="money">`+formatRupiah(data.data[index].harga, 'Rp. ')+`</span>
                                            </div>
                                            <a href="`+data.data[index].slug+`" class="add-to-cart pr--15">
                                                <i class="la la-plus"></i>
                                                <span>Tambahakan</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        `
                    );
                }
            })
            .catch(function(error){
                console.log(error);
            })
    });

    function formatRupiah(angka, prefix){
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
        split   		= number_string.split(','),
        sisa     		= split[0].length % 3,
        rupiah     		= split[0].substr(0, sisa),
        ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);

        // tambahkan titik jika yang di input sudah menjadi angka ribuan
        if(ribuan){
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }

        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
	}
</script>
<?= $this->endSection() ?>