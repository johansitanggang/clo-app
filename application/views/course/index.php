<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item ">Setup</li>
                        <li class="breadcrumb-item">Course</li>
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
        <div class="row">
            <div class="col-md-12">
                <div class="card">

                    <div class="card-body table-responsive">
                        <!-- Start creating your amazing application! -->
                        <div class="row mb-3 mt-3">
                            <div class="col-md-6">
                                <!-- Button Modal Tambah -->
                                <button type="button" class="btn text-white" data-toggle="modal"
                                    data-target="#modalTambah" style="background-color: #001f3f;">
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
                        <div class="flashdata-course" data-flashdata="<?= $this->session->flashdata('flash'); ?>">
                        </div>
                        <?php if ($this->session->flashdata('flash')): ?>
                            <!-- <div class="alert alert-success alert-dismissible fade show" role="alert"> Course
                                <strong>Berhasil</strong>
                                <?= $this->session->flashdata('flash'); ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div> -->
                        <?php endif; ?>

                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>
                                        No
                                    </th>
                                    <th>
                                        Code
                                    </th>
                                    <th>
                                        Course
                                    </th>
                                    <th>
                                        Program Studi
                                    </th>
                                    <th>
                                        SKS
                                    </th>
                                    <th>
                                        Total CLO
                                    </th>
                                    <th class="" style="">
                                        Action
                                    </th>

                                </tr>
                            </thead>
                            <tbody>

                                <?php $no = 1; ?>
                                <?php foreach ($Course as $row): ?>

                                    <tr>
                                        <td>
                                            <?= $no; ?>
                                        </td>
                                        <td>
                                            <?= $row['kode_mata_kuliah']; ?>
                                        </td>
                                        <td>
                                            <?= $row['nama_mata_kuliah']; ?>

                                        </td>
                                        <td>
                                            <?= $row['program_studi']; ?>

                                        </td>
                                        <td>
                                            <?= $row['sks']; ?>

                                        </td>
                                        <td>
                                            <?= $row['total_clo']; ?>
                                        </td>
                                        <td class="d-flex">
                                            <!-- <a class="btn btn-primary btn-sm" href="#">
                                    <i class="fas fa-folder">
                                    </i>
                                    View
                                </a> -->


                                            <a type="button" class="btn btn-info btn-sm"
                                                href="<?= base_url(); ?>Course/clo/<?= $row['kode_mata_kuliah']; ?>">
                                                <i class="fas fa-book">
                                                </i>
                                            </a>
                                            <button type="button" class="badge badge-warning text-white ml-1"
                                                data-toggle="modal" data-target="#modalEdit<?= $row['id']; ?>">
                                                <i class="fas fa-pen "></i>
                                            </button>
                                            <a type="button" class="btn btn-danger btn-sm ml-1 tombol-delete-course"
                                                href="<?= base_url(); ?>Course/delete/<?= $row['id']; ?>/<?= $row['kode_mata_kuliah']; ?>">
                                                <i class="fas fa-trash-alt">
                                                </i>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php $no++; ?>
                                <?php endforeach; ?>

                            </tbody>

                        </table>
                        <?php if (empty($Course)): ?>
                            <div class="alert alert-danger text-center mt-3" role="alert">
                                Belum ada data Course!
                            </div>
                        <?php endif; ?>

                    </div>
                    <!-- /.card-body -->

                </div>
                <!-- /.card -->
            </div>
        </div>

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->


<!-- Modal Tambah -->
<div class="modal fade bd-example-modal-lg" id="modalTambah" tabindex="-1" aria-labelledby="modalTambahLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTambahLabel">Form Course</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-secondary">
                <form action="<?= base_url(); ?>Course/add" method="post">
                    <input type="hidden" name="nip_dosen" value="<?= $this->session->userdata('nip_dosen'); ?>">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="program_studi">Program Studi</label>
                                <select class="form-control" id="program_studi" name="program_studi" required>
                                    <option>Sarjana Terapan Akuntansi Manajerial</option>
                                    <option>Sarjana Terapan Logistik Perdagangan Internasional</option>
                                    <option>Sarjana Terapan Administrasi Bisnis Terapan (International Class)</option>
                                    <option>Program Studi D2 Jalur Cepat Distribusi Barang</option>
                                    <option> Diploma 3 Akuntansi</option>
                                    <option> Sarjana Terapan Administrasi Bisnis Terapan</option>
                                    <option>Sarjana Terapan Teknologi Rekayasa Elektronika</option>
                                    <option>Diploma 3 Teknik Instrumentasi</option>
                                    <option>Sarjana Terapan Teknik Mekatronika</option>
                                    <option>Sarjana Terapan Teknologi Rekayasa Pembangkit Energi</option>
                                    <option>Diploma 3 Teknik Elektronika Manufaktur</option>
                                    <option>Sarjana Terapan Teknik Robotika</option>
                                    <option>Diploma 3 Teknologi Geomatika</option>
                                    <option>Diploma 3 Teknik Informatika</option>
                                    <option>Sarjana Terapan Animasi</option>
                                    <option>Sarjana Terapan Teknologi Rekayasa Multimedia</option>
                                    <option> Sarjana Terapan Rekayasa Keamanan Siber</option>
                                    <option>Sarjana Terapan Rekayasa Perangkat Lunak</option>
                                    <option>Diploma 3 Teknik Perawatan Pesawat Udara</option>
                                    <option> Sarjana Terapan Teknologi Rekayasa Konstruksi Perkapalan</option>
                                    <option>Sarjana Terapan Teknologi Rekayasa Pengelasan dan Fabrikasi</option>
                                    <option>Program Profesi Insinyur (PSPPI)</option>
                                    <option>Diploma 3 Teknik Mesin</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="nama_mata_kuliah">Nama Mata Kuliah</label>
                                <input type="text" class="form-control" id="nama_mata_kuliah" name="nama_mata_kuliah"
                                    autocomplete="off" required>
                            </div>

                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="kode_mata_kuliah">Kode Mata Kuliah</label>
                                <input type="text" class="form-control" id="kode_mata_kuliah" name="kode_mata_kuliah"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="sks">SKS</label>
                                <input type="number" class="form-control" id="sks" name="sks" min="1" max="4" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="total_clo">Total CLO</label>
                                <input type="number" class="form-control" id="total_clo" name="total_clo" min="1"
                                    max="10" required>
                            </div>
                        </div>
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
foreach ($Course as $row):
    $no++; ?>
    <div class="modal fade bd-example-modal-lg" id="modalEdit<?= $row['id']; ?>" tabindex="-1"
        aria-labelledby="modalEditLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalEditLabel">Form Course</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-secondary">
                    <form action="<?= base_url(); ?>Course/edit" method="post">
                        <input type="hidden" name="id" value="<?= $row['id']; ?>">
                        <input type="hidden" name="kode_mata_kuliah" value="<?= $row['kode_mata_kuliah']; ?>">

                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="program_studi">Program Studi</label>
                                    <select class="form-control" id="program_studi" name="program_studi" required>
                                        <option>Sarjana Terapan Akuntansi Manajerial</option>
                                        <option>Sarjana Terapan Logistik Perdagangan Internasional</option>
                                        <option>Sarjana Terapan Administrasi Bisnis Terapan (International Class)</option>
                                        <option>Program Studi D2 Jalur Cepat Distribusi Barang</option>
                                        <option> Diploma 3 Akuntansi</option>
                                        <option> Sarjana Terapan Administrasi Bisnis Terapan</option>
                                        <option>Sarjana Terapan Teknologi Rekayasa Elektronika</option>
                                        <option>Diploma 3 Teknik Instrumentasi</option>
                                        <option>Sarjana Terapan Teknik Mekatronika</option>
                                        <option>Sarjana Terapan Teknologi Rekayasa Pembangkit Energi</option>
                                        <option>Diploma 3 Teknik Elektronika Manufaktur</option>
                                        <option>Sarjana Terapan Teknik Robotika</option>
                                        <option>Diploma 3 Teknologi Geomatika</option>
                                        <option>Diploma 3 Teknik Informatika</option>
                                        <option>Sarjana Terapan Animasi</option>
                                        <option>Sarjana Terapan Teknologi Rekayasa Multimedia</option>
                                        <option> Sarjana Terapan Rekayasa Keamanan Siber</option>
                                        <option>Sarjana Terapan Rekayasa Perangkat Lunak</option>
                                        <option>Diploma 3 Teknik Perawatan Pesawat Udara</option>
                                        <option> Sarjana Terapan Teknologi Rekayasa Konstruksi Perkapalan</option>
                                        <option>Sarjana Terapan Teknologi Rekayasa Pengelasan dan Fabrikasi</option>
                                        <option>Program Profesi Insinyur (PSPPI)</option>
                                        <option>Diploma 3 Teknik Mesin</option>
                                    </select>

                                </div>
                                <div class="form-group">
                                    <label for="nama_mata_kuliah">Nama Mata Kuliah</label>
                                    <input type="text" class="form-control" id="nama_mata_kuliah" name="nama_mata_kuliah"
                                        value="<?= $row['nama_mata_kuliah']; ?>" required>
                                </div>

                            </div>
                            <div class="col-6">

                                <div class="form-group">
                                    <label for="total_clo">Total CLO</label>
                                    <input type="number" class="form-control" id="total_clo" name="total_clo" min="1"
                                        max="10" value="<?= $row['total_clo']; ?>" required>
                                </div>

                                <div class="form-group">
                                    <label for="sks">SKS</label>
                                    <input type="number" class="form-control" id="sks" name="sks"
                                        value="<?= $row['sks']; ?>" min="1" max="4" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">

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

<!-- END Modal Edit-->