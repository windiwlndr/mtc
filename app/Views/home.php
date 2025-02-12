<?= $this->include('templates/header'); ?>
<?= $this->include('templates/sidebar'); ?>
<?= $this->include('templates/navbar'); ?>

<!-- content -->
<div id="main-content">

    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Dashboard</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dashboard
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="container">
            <div class="row justify-content-between mb-1">
                <div class="col-md-3">
                    <div class="card d-flex flex-row align-items-center p-3 shadow-sm w-100">
                        <i class="fas fa-money-bill-wave text-info fs-3 me-3"></i>
                        <div>
                            <div class="card-title text-muted">Total Transaksi</div>
                            <div class="fw-bold fs-5">183.000</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card d-flex flex-row align-items-center p-3 shadow-sm w-100">
                        <i class="fas fa-box text-success fs-3 me-3"></i>
                        <div>
                            <div class="card-title text-muted">Jumlah Produk</div>
                            <div class="fw-bold fs-5">80.000</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card d-flex flex-row align-items-center p-3 shadow-sm w-100">
                        <i class="fas fa-users text-danger fs-3 me-3"></i>
                        <div>
                            <div class="card-title text-muted">Jumlah Member</div>
                            <div class="fw-bold fs-5">112</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card d-flex flex-row align-items-center p-3 shadow-sm w-100">
                        <i class="fas fa-eye text-primary fs-3 me-3"></i>
                        <div>
                            <div class="card-title text-muted">Profile Views</div>
                            <div class="fw-bold fs-5">112.000</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="col-md-3">
                    <div class="card d-flex flex-row align-items-center p-3 shadow-sm w-100">
                        <i class="fas fa-shopping-cart text-warning fs-3 me-3"></i>
                        <div>
                            <div class="card-title text-muted">Transaksi Hari Ini</div>
                            <div class="fw-bold fs-5">5.000</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card d-flex flex-row align-items-center p-3 shadow-sm w-100">
                        <i class="fas fa-dollar-sign text-secondary fs-3 me-3"></i>
                        <div>
                            <div class="card-title text-muted">Modal Harga Beli</div>
                            <div class="fw-bold fs-5">50.000</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card d-flex flex-row align-items-center p-3 shadow-sm w-100">
                        <i class="fas fa-chart-line text-danger fs-3 me-3"></i>
                        <div>
                            <div class="card-title text-muted">Rugi Hari Ini</div>
                            <div class="fw-bold fs-5">1.000</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card d-flex flex-row align-items-center p-3 shadow-sm w-100">
                        <i class="fas fa-coins text-success fs-3 me-3"></i>
                        <div>
                            <div class="card-title text-muted">Komisi Harian</div>
                            <div class="fw-bold fs-5">3.000</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div>
</div>

<?= $this->include('templates/footer'); ?>