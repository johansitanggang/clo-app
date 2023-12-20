<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item ">Program Studi</li>
                        <li class="breadcrumb-item">Jurusan</li>
                    </ol>
                    <h1>
                        <?= $judul; ?>
                    </h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">

            <div class="card-body table-responsive">
                <!-- Start creating your amazing application! -->
                <div class="row mb-3 mt-3">
                    <div class="col-md-6">
                        <!-- Button Modal Tambah -->
                        <button type="button" class="btn text-white" data-toggle="modal" data-target="#modalTambah"
                            style="background-color: #001f3f;">
                            + Tambah
                        </button>

                    </div>
                </div>

                <!-- <div class="input-group input-group-sm" style="width: 150px;float: right;">
                            <input type="text" name="table_search" class="form-control" placeholder="Search">

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div> -->
                <div class="flashdata-jurusan" data-flashdata="<?= $this->session->flashdata('flash'); ?>">
                </div>
                <?php if ($this->session->flashdata('flash')): ?>
                    <!-- <div class="alert alert-success alert-dismissible fade show" role="alert"> Jurusan
                                <strong>Berhasil</strong>
                                <?= $this->session->flashdata('flash'); ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div> -->
                <?php endif; ?>

                <table class="table">
                    <thead>
                        <tr>
                            <th>
                                No
                            </th>
                            <th>
                                Jurusan
                            </th>
                            <th>
                                Jumlah Program Studi
                            </th>
                            <th class="d-flex justify-content-end border-0">
                                Action
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($Jurusan as $row): ?>

                            <tr>
                                <td>
                                    <?= $no; ?>
                                </td>
                                <td>
                                    <?= $row['jurusan']; ?>
                                </td>
                                <td>
                                    <?= $row['jumlah_program_studi']; ?>

                                </td>

                                <td class="d-flex justify-content-end">
                                    <!-- <a class="btn btn-primary btn-sm" href="#">
                                                <i class="fas fa-folder">
                                                </i>
                                                View
                                            </a> -->

                                    <button type="button" class="badge badge-warning text-white" data-toggle="modal"
                                        data-target="#modalEdit<?= $row['id']; ?>">
                                        <i class="fas fa-pen "></i>
                                    </button>
                                    <a type="button" class="btn btn-danger btn-sm ml-1 tombol-delete-jurusan"
                                        class="badge badge-danger rounded-circle"
                                        href="<?= base_url(); ?>Jurusan/delete/<?= $row['id']; ?>">
                                        <i class="fas fa-trash-alt">
                                        </i>
                                    </a>
                                </td>
                            </tr>
                            <?php $no++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>

            </div>
            <!-- /.card-body -->

        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Modal Tambah -->
<div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="modalTambahLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTambahLabel">Tambah Program Studi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-secondary">
                <form action="<?= base_url(); ?>Jurusan/add" method="post">
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <select class="form-control" id="jurusan" name="jurusan" required>
                            <option>Manajemen Bisnis</option>
                            <option>Teknik Elektro</option>
                            <option>Teknik Informatika</option>
                            <option>Teknik Mesin</option>
                        </select>

                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- END Modal Tambah -->

<!-- Modal Edit -->

<?php $no = 0;
foreach ($Jurusan as $row):
    $no++; ?>
    <div class="modal fade" id="modalEdit<?= $row['id']; ?>" tabindex="-1" aria-labelledby="modalEditLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalEditLabel">Edit Program Studi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-secondary">
                    <form action="<?= base_url(); ?>Jurusan/edit" method="post">
                        <input type="hidden" name="id" value="<?= $row['id']; ?>">
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <select class="form-control" id="jurusan" name="jurusan" required>
                                <option>Manajemen Bisnis</option>
                                <option>Teknik Elektro</option>
                                <option>Teknik Informatika</option>
                                <option>Teknik Mesin</option>
                            </select>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<!-- END Modal Edit -->