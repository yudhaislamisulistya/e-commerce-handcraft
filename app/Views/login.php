<?= $this->extend('layouts/page_layout') ?>

<?= $this->section('content') ?>

<!-- Breadcrumb area Start -->
<section class="page-title-area bg-image ptb--80" data-bg-image="assets/img/001.png">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="page-title">Login &amp; Register</h1>
                <ul class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="current"><span>Login &amp; Register</span></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb area End -->

<!-- Main Content Wrapper Start -->
<div class="main-content-wrapper">
    <div class="page-content-inner pt--75 pb--80">
        <div class="container">
            <?php if(session()->getFlashData('status') == "success"){ ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Berhasil Mendaftar, Silahkan Login
                </div>
            <?php }else if(session()->getFlashData('status') == "failed"){ ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Gagal Mendaftar
                </div>
            <?php }?>
            <div class="row">
                <div class="col-md-6 mb-sm--50">
                    <div class="login-box">
                        <h3 class="heading__tertiary mb--30">Login</h3>
                        <?php if(isset($validation)) : ?>
                            <div class=col-12>
                                <div class="alert alert-danger" role="alert">
                                    <?= $validation->listErrors() ?>
                                </div>
                            </div>
                        <?php endif; ?>
                        <form class="form form--login" action="<?= route_to('login') ?>" method="post">
                            <div class="form__group mb--20">
                                <label class="form__label" for="email">Username or email address <span
                                        class="required">*</span></label>
                                <input type="text" require class="form__input" autocomplete="false" id="email" name="email">
                            </div>
                            <div class="form__group mb--20">
                                <label class="form__label" for="password">Password <span
                                        class="required">*</span></label>
                                <input type="password" class="form__input" autocomplete="false" id="password" name="password">
                            </div>
                            <div class="d-flex align-items-center mb--20">
                                <div class="form__group mr--30">
                                    <input type="submit" value="Login" class="btn btn-size-sm">
                                </div>
                            </div>
                            <a class="forgot-pass" href="#">Lost your password?</a>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="register-box">
                        <h4 class="heading__tertiary mb--30">Register</h4>
                        <form class="form form--login" action="<?= route_to('register') ?>" method="post">
                            <div class="form__group mb--20">
                                <label class="form__label" for="email_register">Email address <span
                                        class="required">*</span></label>
                                <input type="email" require class="form__input" id="email_register" name="email_register">
                            </div>
                            <div class="form__group mb--20">
                                <label class="form__label" for="nama_depan_register">Nama Depan<span
                                        class="required">*</span></label>
                                <input type="text" require class="form__input" id="nama_depan_register" name="nama_depan_register">
                            </div>
                            <div class="form__group mb--20">
                                <label class="form__label" for="nama_belakang_register">Nama Belakang<span
                                        class="required">*</span></label>
                                <input type="text" require class="form__input" id="nama_belakang_register" name="nama_belakang_register">
                            </div>
                            <div class="form__group mb--20">
                                <label class="form__label" for="nama_lengkap_register">Nama Lengkap <span
                                        class="required">*</span></label>
                                <input type="text" require class="form__input" id="nama_lengkap_register" name="nama_lengkap_register">
                            </div>
                            <div class="form__group mb--20">
                                <label class="form__label" for="no_hp_register">Nomor Handphone <span
                                        class="required">*</span></label>
                                <input type="text" require class="form__input" id="no_hp_register" name="no_hp_register">
                            </div>
                            <div class="form__group mb--20">
                                <label class="form__label" for="alamat_register">Alamat<span
                                        class="required">*</span></label>
                                <input type="text" require class="form__input" id="alamat_register" name="alamat_register">
                            </div>
                            <div class="form__group mb--20">
                                <label class="form__label" for="password_register">Password <span
                                        class="required">*</span></label>
                                <input type="password" require class="form__input" id="password_register"
                                    name="password_register">
                            </div>
                            <div class="form__group mb--20">
                                <label class="form__label" for="konfirmasi_register_password">Konfirmasi Password <span
                                        class="required">*</span></label>
                                <input type="password" require class="form__input" id="konfirmasi_register_password"
                                    name="konfirmasi_register_password">
                            </div>
                            <div class="form__group">
                                <input type="submit" value="Register" class="btn btn-size-sm">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main Content Wrapper Start -->

<?= $this->endSection() ?>