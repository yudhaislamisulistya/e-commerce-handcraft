<?= $this->extend('layouts/page_layout') ?>


<?= $this->section('content') ?>

<!-- Breadcrumb area Start -->
<section class="page-title-area bg-image ptb--80" data-bg-image="assets/img/penyandang_disabilitas.jpeg">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="page-title">My Account</h1>
                        <ul class="breadcrumb">
                            <li><a href="<?= route_to('home') ?>">Home</a></li>
                            <li class="current"><span>My Account</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- Breadcrumb area End -->

        <!-- Main Content Wrapper Start -->
        <div class="main-content-wrapper">
            <div class="page-content-inner ptb--80 ptb-md--60 pb-sm--55">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                        <?php if(session()->getFlashData('status') == "success"){ ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                Berhasil Terupdate
                            </div>
                        <?php }else if(session()->getFlashData('status') == "failed"){ ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                Gagal Terupdate
                            </div>
                        <?php }else if(session()->getFlashData('status') == "pass_failed"){ ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                Password Tidak Sama, Perhatikan Baik-Baik Inputan Anda
                            </div>
                        <?php }?>
                            <div class="user-dashboard-tab flex-column flex-md-row">
                                <div class="user-dashboard-tab__head nav flex-md-column" role="tablist" aria-orientation="vertical">
                                    <button type="button" class="nav-link active" data-bs-toggle="tab" role="tab" data-bs-target="#dashboard" aria-controls="dashboard" aria-selected="true">Dashboard</button>
                                    <button type="button" class="nav-link" data-bs-toggle="tab" role="tab" data-bs-target="#orders" aria-controls="orders" aria-selected="true">Orders</button>
                                    <button type="button" class="nav-link" data-bs-toggle="tab" role="tab" data-bs-target="#addresses" aria-controls="addresses" aria-selected="true">Addresses</button>
                                    <button type="button" class="nav-link" data-bs-toggle="tab" role="tab" data-bs-target="#accountdetails" aria-controls="accountdetails" aria-selected="true">Account Details</button>
                                    <a type="button" class="nav-link" href="<?= route_to('logout') ?>">Logout</a>
                                </div>
                                
                                <div class="user-dashboard-tab__content tab-content">
                                    <div class="tab-pane fade show active" id="dashboard">
                                        <p>Selamat Datang <strong><?= get_nama_lengkap() ?></strong>? (<a href="<?= route_to('logout') ?>">Log out</a>)</p>
                                        <p>Dari dasbor akun Anda. Anda dapat dengan mudah memeriksa & melihat pesanan terbaru Anda, mengelola alamat pengiriman dan penagihan, serta mengedit kata sandi dan detail akun Anda.</p>
                                    </div>
                                    <div class="tab-pane fade" id="orders">
                                        <div class="message-box mb--30 d-none">
                                            <p><i class="fa fa-check-circle"></i>No order has been made yet.</p>
                                            <a href="shop.html">Go Shop</a>
                                        </div>
                                        <div class="table-content table-responsive">
                                            <table class="table text-center">
                                                <thead>
                                                    <tr>
                                                        <th>Order</th>
                                                        <th>Tanggal</th>
                                                        <th>Status</th>
                                                        <th>Total</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($data as $key => $value) { ?>
                                                        <tr>
                                                            <td><?= ++$key ?></td>
                                                            <td class="wide-column"><?= $value->transaction_time ?></td>
                                                            <td>
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

                                                            </td>
                                                            <td class="wide-column">Rp. <?= format_rupiah($value->gross_amount) ?> - <?= count(get_purcheses_by_id_transction($value->transaction_id)) ?> Item</td>
                                                            <td>
                                                                <a href="<?= base_url('/invoices/'.$value->transaction_id.'')  ?>" class="btn-success" style="margin-right: 5px; padding:10px; border-radius: 5px;">
                                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                                                    <span class="svg-icon svg-icon-3">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                            <path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="currentColor" />
                                                                            <path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </a>
                                                                <?php if($value->transaction_status == "settlement") {?>
                                                                <?php }else if($value->transaction_status == "pending"){ ?>
                                                                    <a href="#" data-id-transaksi="<?= $value->id_transaksi ?>" data-order-id="<?= $value->order_id ?>" id="cek-status-transaksi" class="btn-warning" style="padding:10px; border-radius: 5px;">
                                                                        <span class="svg-icon svg-icon-3">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                                                <path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
                                                                                <path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
                                                                            </svg>
                                                                        </span>
                                                                    </a>
                                                                <?php }?>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="addresses">
                                        <p class="mb--20">Alamat berikut akan digunakan pada halaman checkout secara default.</p>
                                        <form action="<?= route_to('change_address') ?>" method="post" class="form form--account">
                                        <?= csrf_field() ?>
                                            <input type="hidden" name="id_user" value="<?= get_id_user() ?>">
                                            <fieldset class="form__fieldset mb--20">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form__group">
                                                            <label class="form__label" for="alamat_pengiriman">Alamat Pengiriman<span class="required">*</span></label>
                                                            <textarea name="alamat_pengiriman" id="alamat_pengiriman" class="form__input"  placeholder="Masukkan Alma Lengkap Anda"><?= get_alamat_pengiriman() ?></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 mt-2">
                                                        <div class="form__group">
                                                            <input type="submit" value="Ubah Alamat" class="btn btn-size-md">
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="accountdetails">

                                        <form action="<?= route_to('change_profil') ?>" method="post" class="form form--account">
                                        <?= csrf_field() ?>
                                            <input type="hidden" name="id_user" value="<?= get_id_user() ?>">
                                            <fieldset class="form__fieldset mb--20">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form__group">
                                                            <label class="form__label" for="nama_lengkap">Nama Lengkap<span class="required">*</span></label>
                                                            <input type="text" name="nama_lengkap" id="nama_lengkap" class="form__input" value="<?= get_nama_lengkap() ?>">
                                                            <span class="form__notes"><em>Ini akan menjadi bagaimana nama Anda akan ditampilkan di bagian akun dan di ulasan</em></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb--20">
                                                    <div class="col-12">
                                                        <div class="form__group">
                                                            <label class="form__label" for="email">Email Address <span class="required">*</span></label>
                                                            <input type="email" name="email" id="email" class="form__input" disabled value="<?= get_email() ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mb--20">
                                                    <div class="col-12">
                                                        <div class="form__group">
                                                            <label class="form__label" for="email">Nomor Handphone <span class="required">*</span></label>
                                                            <input type="nomor_handphone" name="nomor_handphone" id="nomor_handphone" class="form__input" placeholder="+62" value="<?= get_nomor_handphone() ?>">
                                                            <span class="form__notes"><em>Wajib menambahkan +62XXXXXXXXXXX</em></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 mt-2">
                                                        <div class="form__group">
                                                            <input type="submit" value="Ubah Profil" class="btn btn-size-md">
                                                        </div>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </form>
                                        <form action="<?= route_to('change_password') ?>" method="post" class="form form--account">
                                            <?= csrf_field() ?>
                                            <input type="hidden" name="id_user" value="<?= get_id_user() ?>">
                                            <fieldset class="form__fieldset mb--20">
                                                <legend class="form__legend">Password change</legend>
                                                <div class="row mb--20">
                                                    <div class="col-12">
                                                        <div class="form__group">
                                                            <label class="form__label" for="password_baru">Password Baru</label>
                                                            <input type="password" name="password_baru" id="password_baru" class="form__input">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form__group">
                                                            <label class="form__label" for="konfirmasi_password_baru">Konfirmasi Password Baru</label>
                                                            <input type="password" name="konfirmasi_password_baru" id="konfirmasi_password_baru" class="form__input">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 mt-2">
                                                        <div class="form__group">
                                                            <input type="submit" value="Ubah Password" class="btn btn-size-md">
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
        </div>
        <!-- Main Content Wrapper Start -->

<?= $this->endSection() ?>
<?= $this->section('javascript')?>
<script>
    HOST_URL = "http://localhost:8080/"
    $('#cek-status-transaksi').click(function (e) { 
        e.preventDefault();
        order_id = $(this).attr("data-order-id");
        id_transaksi = $(this).attr('data-id-transaksi');

        axios.get(HOST_URL + 'check-transaction-status/' + id_transaksi + '/' + order_id)
        .then(res => {
            console.log(res.data);
            if(res.data.data.transaction_status == "settlement"){
                Swal.fire({
                    title: "Wow!",
                    text: "Pembayaran Berhasil Terkonformasi...!",
                    icon: "success"
                }).then(function() {
                    window.location.href = '/my-profile';
                });
            }else if(res.data.data.transaction_status == "pending"){
                Swal.fire({
                    title: "Waiting!",
                    text: "Menunggu Konfirmasi Pembayaran!",
                    icon: 'warning',
                }).then(function() {
                    window.location.href = '/my-profile';
                });
            }
        })
        .catch(err => {
            console.error(err); 
        })
    });
</script>
<?= $this->endSection() ?>