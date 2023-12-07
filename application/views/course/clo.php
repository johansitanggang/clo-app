<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">

                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item ">Course</li>
                        <li class="breadcrumb-item">Course Learning Outcome</li>
                    </ol>
                    <h1>
                        <?= $judul; ?>
                    </h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body table-responsive">
                            <table>
                                <tr>
                                    <td width="40%"><strong>Kode Mata Kuliah</strong></td>
                                    <td width="5%">:</td>
                                    <td>
                                        <?= $course['kode_mata_kuliah']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="40%"><strong>Nama Mata Kuliah</strong></td>
                                    <td width="5%">:</td>
                                    <td>
                                        <?= $course['nama_mata_kuliah']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="40%"><strong>SKS</strong></td>
                                    <td width="5%">:</td>
                                    <td>
                                        <?= $course['sks']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="40%"><strong>Program Studi</strong></td>
                                    <td width="5%">:</td>
                                    <td>
                                        <?= $course['program_studi']; ?>
                                    </td>
                                </tr>
                            </table>

                        </div>
                    </div>


                </div>

            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="m-0">Course Learning Outcomes (CLOs)</h5>
                        </div>
                        <div class="card-body table-responsive">
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <!-- Button Modal Tambah -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#modalTambah">
                                        + Tambah CLO
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
                            <div class="flashdata-CLO" data-flashdata="<?= $this->session->flashdata('flash'); ?>">
                            </div>
                            <?php if ($this->session->flashdata('flash')): ?>
                                <!-- <div class="alert alert-success alert-dismissible fade show" role="alert"> Course
                                            Learning Outcome
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
                                            Kode
                                        </th>
                                        <th>
                                            Course Learning Outcomes(CLOs)
                                        </th>
                                        <th>
                                            Assessment Method
                                        </th>
                                        <th class="float-right ">
                                            Action
                                        </th>

                                    </tr>
                                </thead>
                                <tbody>

                                    <?php $no = 1; ?>
                                    <?php foreach ($clo as $row): ?>

                                        <tr>
                                            <td>
                                                <?= $row['kode_clo']; ?>
                                            </td>
                                            <td>
                                                <?= $row['course_learning_outcome']; ?>
                                            </td>
                                            <td>
                                                <?= $row['metode_asesmen']; ?>
                                            </td>

                                            <td class="d-flex justify-content-end">
                                                <!-- <a class="btn btn-primary btn-sm" href="#">
                                                <i class="fas fa-folder">
                                                </i>
                                                View
                                            </a> -->

                                                <button type="button" class="badge badge-warning text-white ml-1"
                                                    data-toggle="modal" data-target="#modalEdit<?= $row['id']; ?>">
                                                    <i class="fas fa-pen"></i>
                                                </button>
                                                <a type="button" class="btn btn-danger btn-sm ml-1 tombol-delete-CLO"
                                                    href="<?= base_url(); ?>Course/cloDelete/<?= $row['id']; ?>/<?= $course['kode_mata_kuliah']; ?>">
                                                    <i class="fas fa-trash">
                                                    </i>

                                                </a>
                                            </td>
                                        </tr>
                                        <?php $no++; ?>
                                    <?php endforeach; ?>

                                </tbody>
                            </table>
                            <?php if (empty($clo)): ?>
                                <div class="alert alert-danger text-center mt-3" role="alert">
                                    Belum ada data CLO!
                                </div>
                            <?php endif; ?>
                            <!-- /.card-body -->

                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->


<!-- Modal Tambah -->
<div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="modalTambahLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTambahLabel">Form Course Learning Outcomes (CLOs)</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-secondary">
                <form action="<?= base_url(); ?>Course/cloAdd" method="post">
                    <input type="hidden" name="kode_mata_kuliah" value="<?= $course['kode_mata_kuliah']; ?>">
                    <div class="form-group">
                        <label for="kode_clo">Code CLO</label>
                        <input type="text" class="form-control" id="kode_clo" name="kode_clo" required>
                    </div>

                    <div class="form-group">
                        <label for="course_learning_outcome">Course Learning Outcomes(CLOs)</label>
                        <textarea class="form-control" aria-label="With textarea" name="course_learning_outcome"
                            id="course_learning_outcome"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="metode_asesmen">Assessment Method</label>
                        <select class="form-control" id="metode_asesmen" name="metode_asesmen" required>
                            <option>Written & oral question</option>
                            <option>Performance ratings</option>
                            <option>Product Reviews</option>
                            <option>Journal & portofolios</option>
                            <option>Self-report insruments</option>
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
foreach ($clo as $row):
    $no++; ?>
    <div class="modal fade" id="modalEdit<?= $row['id']; ?>" tabindex="-1" aria-labelledby="modalEditLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalEditLabel">Form Course Learning Outcomes (CLOs)</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-secondary">
                    <form action="<?= base_url(); ?>Course/cloEdit" method="post">
                        <input type="hidden" name="id" value="<?= $row['id']; ?>">
                        <input type="hidden" name="kode_mata_kuliah" value="<?= $course['kode_mata_kuliah']; ?>">
                        <div class="form-group">
                            <label for="kode_clo">Code CLO</label>
                            <input type="text" class="form-control" id="kode_clo" name="kode_clo"
                                value="<?= $row['kode_clo']; ?>" required>
                        </div>

                        <div class="form-group">
                            <label for="course_learning_outcome">Course Learning Outcomes(CLOs)</label>
                            <textarea class="form-control" aria-label="With textarea" name="course_learning_outcome"
                                id="course_learning_outcome"><?= $row['course_learning_outcome']; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="metode_asesmen">Assessment Method</label>
                            <select class="form-control" id="metode_asesmen" name="metode_asesmen" required>
                                <option>Written & oral question</option>
                                <option>Performance ratings</option>
                                <option>Product Reviews</option>
                                <option>Journal & portofolios</option>
                                <option>Self-report insruments</option>
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