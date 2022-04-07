<?= $this->extend('layouts/page_layout') ?>


<?= $this->section('content') ?>
<!-- Breadcrumb area Start -->
<section class="page-title-area bg-image ptb--80" data-bg-image="../assets/img/penyandang_disabilitas.jpeg">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="page-title">Produk</h1>
                <ul class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="current"><span>Produk</span></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb area End -->

<!-- Main Content Wrapper Start -->
<div class="main-content-wrapper">
    <div class="shop-page-wrapper shop-fullwidth ptb--80">
        <div class="container-fluid">
            <!-- end page title end breadcrumb -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card m-b-30">
                        <div class="card-body">

                            <h1 class="mt-0">Pencarian : <?= $search ?></h1>

                            <table id="datatable-search" class="table table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                                <thead>
                                    <tr>
                                        <th>Gambar</th>
                                        <th>Nama</th>
                                        <th>Kategori</th>
                                        <th>Harga</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data as $key => $value) { ?>
                                        <tr>
                                            <td><img style="border-radius: 20px" height="300" src="//<?= $value->foto ?>" alt=""></td>
                                            <td><h4><?= $value->nama_produk ?></h4></td>
                                            <td><?= get_jenis_produk($value->id_produk) ?></td>
                                            <td>Rp. <?= format_rupiah($value->harga) ?></td>
                                            <td>
                                                <a href="<?= $value->slug ?>" style="padding: 10px; border-radius: 10px" class="btn-info">Detail</a>
                                                <a href="<?= $value->slug ?>" style="padding: 10px; border-radius: 10px" class="btn-danger">Tambahkan</a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div>
    </div>
</div>
<!-- Main Content Wrapper Start -->
<?= $this->endSection() ?>

<?= $this->section('javascript') ?>
<script>
    $(document).ready(function() {
        $('#datatable-search').DataTable({
            "search": {
                "search": "<?= $search ?>"
            }
        });
    } );
</script>
<?= $this->endSection() ?>