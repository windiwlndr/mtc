<?= $this->include('templates/header'); ?>
<?= $this->include('templates/sidebar'); ?>
<?= $this->include('templates/navbar'); ?>

<!-- content -->
<div id="main-content">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6">
                    <h3>Dashboard</h3>
                </div>
                <div class="col-12 col-md-6 text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <section class="container mt-4">
            <div class="card shadow-sm">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <button type="button" data-bs-toggle="modal" data-bs-target="#addModal" class="btn btn-success"><i class="fas fa-plus"></i> Tambah</button>
                    <!-- modal add-->
                    <div class="modal fade" id="addModal" aria-labelledby="addModal" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="addModal">User baru</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="<?= site_url('/createUser') ?>" method="POST" enctype="multipart/form-data">
                                    <div class="modal-body">
                                        <!-- <input type="hidden" name="id_user"> -->
                                        <div class="row">

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="nama">Nama</label>
                                                    <input type="text" class="form-control" id="nama" name="nama">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="username">Username</label>
                                                    <input type="text" class="form-control" id="username" name="username">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="email">Email</label>
                                                    <input type="text" class="form-control" id="email" name="email">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="password">Password</label>
                                                    <input type="password" class="form-control" id="password" name="password">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="status">Status</label>
                                                    <select class="form-control" id="status" name="status">

                                                        <option value="aktif">Aktif</option>
                                                        <option value="nonaktif">Nonaktif</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="level">Level</label>
                                                    <select class="form-control" id="level" name="level">
                                                        <option value=""></option>
                                                        <option value="1">Manager</option>
                                                        <option value="2">Admin</option>
                                                        <option value="3">User</option>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-12">
                                            <label for="foto">Foto</label>
                                            <input type="file" class="form-control mt-2" name="foto" id="fotoInput">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- end modal add -->
                    <div class="d-flex mb-3">
                        <form method="GET" action="<?= base_url('/admin'); ?>" class="d-flex w-100">
                            <select class="form-select me-2" name="perPage" onchange="this.form.submit()">
                            <option value="2" <?= ($perPage == 2) ? 'selected' : ''; ?>>2</option>
                                <option value="5" <?= ($perPage == 5) ? 'selected' : ''; ?>>5</option>
                                <option value="10" <?= ($perPage == 10) ? 'selected' : ''; ?>>10</option>
                                <option value="25" <?= ($perPage == 25) ? 'selected' : ''; ?>>25</option>
                                <option value="100" <?= ($perPage == 100) ? 'selected' : ''; ?>>100</option>
                            </select>

                            <input type="text" class="form-control me-2" name="search" value="<?= $search; ?>" placeholder="Search...">
                            <button type="submit" class="btn btn-primary">Cari</button>
                        </form>
                    </div>

                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead class="table-primary">
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Username</th>
                                    <th>Level</th>
                                    <th>status</th>
                                    <th>Tgl Data</th>
                                    <th>Foto</th>
                                    <th>Aksi</th>
                                    <!-- <th> </th> -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1 + ($perPage * ($pager->getCurrentPage() - 1)); 
                                foreach ($admin as $user) :
                                ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $user['nama']; ?></td>
                                        <td><?= $user['username']; ?></td>
                                        <td><?= $user['level']; ?></td>
                                        <td><?= $user['status']; ?></td>
                                        <td><?= $user['created_at']; ?></td>
                                        <td><img src="<?= $user['foto']; ?>" class="rounded-circle" alt="Foto" width="50" height="50"></td>
                                        <td>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-button-action">
                                                        <button type="button" data-bs-toggle="modal" data-bs-target="#detailModal<?= $user['id_user']; ?>" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i> Edit</button>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-button-action">
                                                        <form action="<?= site_url('/deleteUser'); ?>" method="post">
                                                            <input type="hidden" name="id_user" value="<?= $user['id_user']; ?>">
                                                            <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i>Hapus</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- modal update-->
                                            <div class="modal fade" id="detailModal<?= $user['id_user']; ?>" aria-labelledby="detailModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="detailModalLabel">Detail Informasi</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <form action="<?= site_url('/updateUser') ?>" method="POST" enctype="multipart/form-data">
                                                            <div class="modal-body">
                                                                <input type="hidden" name="id_user" value="<?= $user['id_user']; ?>">

                                                                <div class="row">
                                                                    <div class="col-12 text-center">
                                                                        <img src="<?= $user['foto']; ?>" class="rounded-circle" alt="Foto" width="100" height="100" id="previewFoto<?= $user['id_user']; ?>">
                                                                        <input type="file" class="form-control mt-2" name="foto" id="fotoInput<?= $user['id_user']; ?>">
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="nama">Nama</label>
                                                                            <input type="text" class="form-control" id="nama" name="nama" value="<?= $user['nama'] ?>">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="username">Username</label>
                                                                            <input type="text" class="form-control" id="username" name="username" value="<?= $user['username'] ?>">
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="level">Level</label>
                                                                            <select class="form-control" id="level" name="level">
                                                                                <option value="<?= $user['level'] ?>"><?= match ($user['level']) {
                                                                                                                            '1' => 'manager',
                                                                                                                            '2' => 'admin',
                                                                                                                            default => 'kasir'
                                                                                                                        } ?> </option>
                                                                                <option value="1" <?= $user['level'] == 'manager' ? 'selected' : ''; ?>>Manager</option>
                                                                                <option value="2" <?= $user['level'] == 'admin' ? 'selected' : ''; ?>>Admin</option>
                                                                                <option value="3" <?= $user['level'] == 'kasir' ? 'selected' : ''; ?>>Kasir</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="status">Status</label>
                                                                            <select class="form-control" id="status" name="status">
                                                                                <option value="<?= $user['status']; ?>" <?= ($user['status'] == $user['status']) ? 'selected' : ''; ?>>
                                                                                    <?= $user['status']; ?>
                                                                                </option>
                                                                                <option value="aktif" <?= $user['status'] == 'aktif' ? 'selected' : ''; ?>>Aktif</option>
                                                                                <option value="nonaktif" <?= $user['status'] == 'nonaktif' ? 'selected' : ''; ?>>Nonaktif</option>

                                                                            </select>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label for="tgl">Tgl Data</label>
                                                                            <input type="date" class="form-control" id="tgl" name="tgl" value="<?= date('Y-m-d', strtotime($user['created_at'])) ?>">
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                        </td>
                                    </tr>
                            </tbody>
                        </table>
                        <!-- Pagination -->
                        <div class="d-flex justify-content-center">
                            <?= $pager->links(); ?>
                        </div>

                    </div>
                </div>
        </section>
    </div>
</div>

<script>
    document.getElementById('fotoInput').addEventListener('change', function(event) {
        var reader = new FileReader();
        reader.onload = function() {
            var output = document.getElementById('previewFoto');
            output.src = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
    });
</script>
<script>
    <?php if (session()->getFlashdata('success')) : ?>
        Swal.fire({
            icon: 'success',
            title: 'Sukses!',
            text: "<?= session()->getFlashdata('success'); ?>",
            showConfirmButton: false,
            timer: 2000
        });
    <?php endif; ?>

    <?php if (session()->getFlashdata('error')) : ?>
        Swal.fire({
            icon: 'error',
            title: 'Oops!',
            text: "<?= session()->getFlashdata('error'); ?>",
            showConfirmButton: false,
            timer: 2000
        });
    <?php endif; ?>
</script>
<?= $this->include('templates/footer'); ?>