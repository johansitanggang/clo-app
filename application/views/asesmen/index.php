<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item ">Main</li>
                        <li class="breadcrumb-item">Assessment</li>
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
                <div class="row mb-3">
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
                <div class="flashdata-asesmen" data-flashdata="<?= $this->session->flashdata('flash'); ?>">
                </div>
                <?php if($this->session->flashdata('flash')): ?>
                    <!-- <div class="alert alert-success alert-dismissible fade show" role="alert"> Asesmen
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
                                Course Code
                            </th>
                            <th>
                                Course Name
                            </th>
                            <th>
                                Teacher
                            </th>
                            <th>
                                Academic Year
                            </th>
                            <th>
                                Semester
                            </th>
                            <th>
                                Class
                            </th>
                            <th class="d-flex justify-content-end">
                                Action
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($asesmen as $row): ?>
                            <tr>
                                <td>
                                    <?= $row['kode_mata_kuliah']; ?>
                                </td>
                                <td>
                                    <?= $row['nama_mata_kuliah']; ?>
                                </td>
                                <td>
                                    <?= $row['nama_dosen']; ?>
                                </td>
                                <td>
                                    <?= $row['tahun_ajaran']; ?>
                                </td>
                                <td>
                                    <?= $row['semester']; ?>
                                </td>
                                <td>
                                    <?= $row['kelas']; ?>
                                </td>

                                <td class="d-flex justify-content-end">
                                    <!-- <a class="btn btn-primary btn-sm" href="#">
                                                <i class="fas fa-folder">
                                                </i>
                                                View
                                            </a> -->
                                    <a class="btn btn-secondary btn-sm" href="<?= base_url(); ?>asesmen/detail/<?= $row['kode_mata_kuliah'];
                                      ; ?>">
                                        <i class="fas fa-table">
                                        </i>
                                    </a>
                                    <button type="button" class="badge badge-warning text-white ml-1" data-toggle="modal"
                                        data-target="#modalEdit<?= $row['id']; ?>">
                                        <i class="fas fa-pen"></i>
                                    </button>
                                    <a class="btn btn-danger btn-sm ml-1 tombol-delete-asesmen"
                                        href="<?= base_url(); ?>Asesmen/delete/<?= $row['id']; ?>">
                                        <i class="fas fa-trash-alt">
                                        </i>
                                    </a>

                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <?php if(empty($asesmen)): ?>
                    <div class="alert alert-danger text-center mt-3" role="alert">
                        Belum ada data Asesmen!
                    </div>
                <?php endif; ?>

            </div>
            <!-- /.card-body -->

            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Modal Tambah -->

<div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="modalTambahLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTambahLabel">Tambah Program Studi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-secondary">
                <form action="<?= base_url(); ?>Asesmen/add" method="post">
                    <input type="hidden" name="nip_dosen" value="<?= $this->session->userdata('nip_dosen'); ?>">
                    <input type="hidden" name="nama_dosen" value="<?= $this->session->userdata('nama_dosen'); ?>">

                    <div class="form-group">
                        <label for="nama_mata_kuliah">Course Name</label>
                        <select class="form-control" id="nama_mata_kuliah" name="nama_mata_kuliah" required>
                            <?php $no = 0;
                            foreach($Course as $row): ?>
                                <option>
                                    <?= $row['nama_mata_kuliah']; ?>
                                </option>
                            <?php endforeach; ?>

                        </select>

                    </div>



                    <!-- <div class="form-group">
                        <label for="nip_dosen">Teacher NIP</label>
                        <input type="text" class="form-control" id="nip_dosen" name="nip_dosen" required>
                    </div>
                    <div class="form-group">
                        <label for="nama_dosen">Teacher</label>
                        <input type="text" class="form-control" id="nama_dosen" name="nama_dosen" required>
                    </div> -->
                    <div class="form-group">
                        <label for="tahun_ajaran">Academic Year</label>
                        <input type="text" class="form-control" id="tahun_ajaran" name="tahun_ajaran" required>
                    </div>
                    <div class="form-group">
                        <label for="semester">Semester</label>
                        <input type="text" class="form-control" id="semester" name="semester" required>
                    </div>
                    <div class="form-group">
                        <label for="kelas">Class</label>
                        <input type="text" class="form-control" id="kelas" name="kelas" required>
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
foreach($asesmen as $data):
    $no++; ?>
    <div class="modal fade" id="modalEdit<?= $data['id']; ?>" tabindex="-1" aria-labelledby="modalEditLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalEditLabel">Edit Program Studi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-secondary">
                    <form action="<?= base_url(); ?>Asesmen/edit" method="post">
                        <input type="hidden" name="id" value="<?= $data['id']; ?>">

                        <div class="form-group">
                            <label for="nama_mata_kuliah">Course Name</label>
                            <select class="form-control" id="nama_mata_kuliah" name="nama_mata_kuliah" required>
                                <?php $no = 0;
                                foreach($Course as $row): ?>
                                    <option>
                                        <?= $row['nama_mata_kuliah']; ?>
                                    </option>
                                <?php endforeach; ?>

                            </select>

                        </div>
                        <div class="form-group">
                            <label for="nip_dosen">Teacher NIP</label>
                            <input type="text" class="form-control" id="nip_dosen" name="nip_dosen"
                                value="<?= $data['nip_dosen']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="nama_dosen">Teacher</label>
                            <input type="text" class="form-control" id="nama_dosen" name="nama_dosen"
                                value="<?= $data['nama_dosen']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="tahun_ajaran">Academic Year</label>
                            <input type="text" class="form-control" id="tahun_ajaran" name="tahun_ajaran"
                                value="<?= $data['tahun_ajaran']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="semester">Semester</label>
                            <input type="text" class="form-control" id="semester" name="semester"
                                value="<?= $data['semester']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="kelas">Class</label>
                            <input type="text" class="form-control" id="kelas" name="kelas" value="<?= $data['kelas']; ?>"
                                required>
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