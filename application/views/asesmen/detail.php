<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">

                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item ">Home</li>
                        <li class="breadcrumb-item">Blank Page</li>
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
            <!-- data asesmen start -->
            <div class="row">
                <div class="col-lg">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <table>
                                        <tr>
                                            <td class="pr-5"><strong>Study Program</strong></td>
                                            <td>:</td>
                                            <td>
                                                <?= $asesmen['program_studi']; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>Course Code</strong></td>
                                            <td>:</td>
                                            <td>
                                                <?= $asesmen['kode_mata_kuliah']; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>Course Title</strong></td>
                                            <td>:</td>
                                            <td>
                                                <?= $asesmen['nama_mata_kuliah']; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>Teacher NIP</strong></td>
                                            <td>:</td>
                                            <td>
                                                <?= $asesmen['nip_dosen']; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>Teacher Name</strong></td>
                                            <td>:</td>
                                            <td>
                                                <?= $asesmen['nama_dosen']; ?>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-lg-6">
                                    <table>
                                        <tr>
                                            <td><strong>Semester</strong></td>
                                            <td>:</td>
                                            <td>
                                                <?= $asesmen['semester']; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="pr-5"><strong>Academic Year</strong></td>
                                            <td>:</td>
                                            <td>
                                                <?= $asesmen['tahun_ajaran']; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>Class</strong></td>
                                            <td>:</td>
                                            <td>
                                                <?= $asesmen['kelas']; ?>
                                            </td>
                                        </tr>

                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- data asesmen end -->


            <!-- /.row -->
            <!-- input nilai start -->
            <div class="row">
                <div class="col-lg">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="m-0">Assessment</h5>
                        </div>
                        <div class="card-body table-responsive p-3">
                            <div class="row mb-5">
                                <div class="col-md d-md-flex flex-md-row flex-column">
                                    <!-- Button Modal Tambah -->
                                    <button type="button" class="btn text-white mr-2 mb-2" data-toggle="modal"
                                        data-target="#modalImport" style="background-color: #001f3f;">
                                        <i class="fa fa-file-excel mr-2"></i>
                                        Import Mahasiswa
                                    </button>
                                    <button type="button" class="btn text-white mb-2" data-toggle="modal"
                                        data-target="#modalTambah" style="background-color: #001f3f;">
                                        + Add Mahasiswa
                                    </button>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col">
                                    <!-- <div class="input-group input-group-sm" style="width: 150px;float: right;">
                            <input type="text" name="table_search" class="form-control" placeholder="Search">

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div> -->
                                    <div class="flashdata-detail-success"
                                        data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
                                    <?php if ($this->session->flashdata('flash')): ?>
                                        <!-- <div class="alert alert-success alert-dismissible fade show" role="alert"> Nilai
                                            Mahasiswa
                                            <strong>Berhasil</strong>
                                            <?= $this->session->flashdata('flash'); ?>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div> -->
                                    <?php endif; ?>

                                    <table class="table table-bordered table-striped">
                                        <thead style="background-color: #cbd1d1;">
                                            <tr>
                                                <th rowspan="2" class="text-center align-middle">
                                                    NIM
                                                </th>
                                                <th rowspan="2" class="text-center align-middle">
                                                    Mahasiswa
                                                </th>
                                                <th colspan="2" class="text-center align-middle">
                                                    Quizzes (10%)
                                                </th>
                                                <th colspan="5" class="text-center align-middle">
                                                    Practice or Project (30%)
                                                </th>
                                                <th colspan="5" class="text-center align-middle">
                                                    Assignment (20%)
                                                </th>
                                                <th colspan="2" class="text-center align-middle">
                                                    Exam (30%)
                                                </th>
                                                <th colspan="2" class="text-center align-middle">
                                                    Presentation (10%)
                                                </th>
                                                <th rowspan="2" class="text-center align-middle">
                                                    Nilai Akhir
                                                </th>
                                                <th rowspan="2" class="text-center align-middle">
                                                    Nilai Huruf
                                                </th>
                                                <th rowspan="2" class="text-center align-middle">
                                                    Action
                                                </th>

                                            </tr>
                                            <tr class="text-center">
                                                <th>Q1</th>
                                                <th>Q2</th>
                                                <th>P1</th>
                                                <th>P2</th>
                                                <th>P3</th>
                                                <th>P4</th>
                                                <th>P5</th>
                                                <th>A1</th>
                                                <th>A2</th>
                                                <th>A3</th>
                                                <th>A4</th>
                                                <th>A5</th>
                                                <th>MSE</th>
                                                <th>FSE</th>
                                                <th>PP1</th>
                                                <th>PP2</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($nilai_mahasiswa as $row): ?>
                                                <tr>
                                                    <td>
                                                        <?= $row['nim']; ?>
                                                    </td>
                                                    <td>
                                                        <?= $row['nama_mahasiswa']; ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?= $row['q1']; ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?= $row['q2']; ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?= $row['p1']; ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?= $row['p2']; ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?= $row['p3']; ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?= $row['p4']; ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?= $row['p5']; ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?= $row['a1']; ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?= $row['a2']; ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?= $row['a3']; ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?= $row['a4']; ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?= $row['a5']; ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?= $row['mse']; ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?= $row['fse']; ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?= $row['pp1']; ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?= $row['pp2']; ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?= $row['nilai_akhir']; ?>
                                                    </td>
                                                    <td class="text-center">
                                                        <?= $row['nilai_huruf']; ?>
                                                    </td>

                                                    <td class="d-flex justify-content-center">
                                                        <!-- <a class="btn btn-primary btn-sm" href="#">
                                                <i class="fas fa-folder">
                                                </i>
                                                View
                                            </a> -->
                                                        <button type="button" class="badge badge-warning text-white ml-1"
                                                            data-toggle="modal" data-target="#modalEdit<?= $row['id']; ?>">
                                                            <i class="fas fa-pen"></i>
                                                        </button>
                                                        <a type="button"
                                                            class="btn btn-danger btn-sm ml-1 tombol-delete-detail"
                                                            href="<?= base_url(); ?>Asesmen/deleteNilai/<?= $row['id']; ?>/<?= $row['kode_mata_kuliah']; ?>">
                                                            <i class="fas fa-trash-alt">
                                                            </i>
                                                        </a>
                                                    </td>


                                                </tr>
                                            <?php endforeach; ?>

                                        </tbody>
                                    </table>
                                    <!-- /.card-body -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- input nilai end -->
            <!-- /.row -->

            <!-- /.row -->
            <!-- statistik per metode asesmen start -->
            <div class="row">
                <div class="col-lg">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="m-0">Percentage of Student within each category</h5>
                        </div>
                        <div class="card-body table-responsive p-4">
                            <div class="row mt-3">
                                <div class="col">
                                    <!-- <div class="input-group input-group-sm" style="width: 150px;float: right;">
                            <input type="text" name="table_search" class="form-control" placeholder="Search">

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div> -->
                                    <div class="flashdata-detail"
                                        data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
                                    <?php if ($this->session->flashdata('flash')): ?>
                                        <!-- <div class="alert alert-success alert-dismissible fade show" role="alert"> Nilai
                                            Mahasiswa
                                            <strong>Berhasil</strong>
                                            <?= $this->session->flashdata('flash'); ?>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div> -->
                                    <?php endif; ?>

                                    <table class="table table-bordered">
                                        <thead style="background-color: #cbd1d1;">
                                            <tr>
                                                <th rowspan="2" class="text-center align-middle">
                                                    Category
                                                </th>
                                                <th colspan="2" class="text-center align-middle">
                                                    Quizzes
                                                </th>
                                                <th colspan="5" class="text-center align-middle">
                                                    Practice or Project
                                                </th>
                                                <th colspan="5" class="text-center align-middle">
                                                    Assignment
                                                </th>
                                                <th colspan="2" class="text-center align-middle">
                                                    Exam
                                                </th>
                                                <th colspan="2" class="text-center align-middle">
                                                    Presentation
                                                </th>
                                            </tr>
                                            <tr>
                                                <th>Q1</th>
                                                <th>Q2</th>
                                                <th>P1</th>
                                                <th>P2</th>
                                                <th>P3</th>
                                                <th>P4</th>
                                                <th>P5</th>
                                                <th>A1</th>
                                                <th>A2</th>
                                                <th>A3</th>
                                                <th>A4</th>
                                                <th>A5</th>
                                                <th>MSE</th>
                                                <th>FSE</th>
                                                <th>PP1</th>
                                                <th>PP2</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- excellent start -->
                                            <tr>
                                                <td>Excellent</td>
                                                <td>
                                                    <?= $countExcellent['q1']; ?>
                                                </td>
                                                <td>
                                                    <?= $countExcellent['q2']; ?>
                                                </td>
                                                <td>
                                                    <?= $countExcellent['p1']; ?>
                                                </td>
                                                <td>
                                                    <?= $countExcellent['p2']; ?>
                                                </td>
                                                <td>
                                                    <?= $countExcellent['p3']; ?>
                                                </td>
                                                <td>
                                                    <?= $countExcellent['p4']; ?>
                                                </td>
                                                <td>
                                                    <?= $countExcellent['p5']; ?>
                                                </td>
                                                <td>
                                                    <?= $countExcellent['a1']; ?>
                                                </td>
                                                <td>
                                                    <?= $countExcellent['a2']; ?>
                                                </td>
                                                <td>
                                                    <?= $countExcellent['a3']; ?>
                                                </td>
                                                <td>
                                                    <?= $countExcellent['a4']; ?>
                                                </td>
                                                <td>
                                                    <?= $countExcellent['a5']; ?>
                                                </td>
                                                <td>
                                                    <?= $countExcellent['mse']; ?>
                                                </td>
                                                <td>
                                                    <?= $countExcellent['fse']; ?>
                                                </td>
                                                <td>
                                                    <?= $countExcellent['pp1']; ?>
                                                </td>
                                                <td>
                                                    <?= $countExcellent['pp2']; ?>
                                                </td>
                                            </tr>
                                            <!-- excellent end -->

                                            <!-- very good start -->
                                            <tr>
                                                <td>Very Good</td>
                                                <td>
                                                    <?= $countVeryGood['q1']; ?>
                                                </td>
                                                <td>
                                                    <?= $countVeryGood['q2']; ?>
                                                </td>
                                                <td>
                                                    <?= $countVeryGood['p1']; ?>
                                                </td>
                                                <td>
                                                    <?= $countVeryGood['p2']; ?>
                                                </td>
                                                <td>
                                                    <?= $countVeryGood['p3']; ?>
                                                </td>
                                                <td>
                                                    <?= $countVeryGood['p4']; ?>
                                                </td>
                                                <td>
                                                    <?= $countVeryGood['p5']; ?>
                                                </td>
                                                <td>
                                                    <?= $countVeryGood['a1']; ?>
                                                </td>
                                                <td>
                                                    <?= $countVeryGood['a2']; ?>
                                                </td>
                                                <td>
                                                    <?= $countVeryGood['a3']; ?>
                                                </td>
                                                <td>
                                                    <?= $countVeryGood['a4']; ?>
                                                </td>
                                                <td>
                                                    <?= $countVeryGood['a5']; ?>
                                                </td>
                                                <td>
                                                    <?= $countVeryGood['mse']; ?>
                                                </td>
                                                <td>
                                                    <?= $countVeryGood['fse']; ?>
                                                </td>
                                                <td>
                                                    <?= $countVeryGood['pp1']; ?>
                                                </td>
                                                <td>
                                                    <?= $countExcellent['pp2']; ?>
                                                </td>
                                            </tr>
                                            <!-- very good end -->

                                            <!-- good start -->
                                            <tr>
                                                <td>Good</td>
                                                <td>
                                                    <?= $good['q1']; ?>
                                                </td>
                                                <td>
                                                    <?= $good['q2']; ?>
                                                </td>
                                                <td>
                                                    <?= $good['p1']; ?>
                                                </td>
                                                <td>
                                                    <?= $good['p2']; ?>
                                                </td>
                                                <td>
                                                    <?= $good['p3']; ?>
                                                </td>
                                                <td>
                                                    <?= $good['p4']; ?>
                                                </td>
                                                <td>
                                                    <?= $good['p5']; ?>
                                                </td>
                                                <td>
                                                    <?= $good['a1']; ?>
                                                </td>
                                                <td>
                                                    <?= $good['a2']; ?>
                                                </td>
                                                <td>
                                                    <?= $good['a3']; ?>
                                                </td>
                                                <td>
                                                    <?= $good['a4']; ?>
                                                </td>
                                                <td>
                                                    <?= $good['a5']; ?>
                                                </td>
                                                <td>
                                                    <?= $good['mse']; ?>
                                                </td>
                                                <td>
                                                    <?= $good['fse']; ?>
                                                </td>
                                                <td>
                                                    <?= $good['pp1']; ?>
                                                </td>
                                                <td>
                                                    <?= $good['pp2']; ?>
                                                </td>
                                            </tr>
                                            <!-- good end -->

                                            <!-- fair start -->
                                            <tr>
                                                <td>Fair</td>
                                                <td>
                                                    <?= $fair['q1']; ?>
                                                </td>
                                                <td>
                                                    <?= $fair['q2']; ?>
                                                </td>
                                                <td>
                                                    <?= $fair['p1']; ?>
                                                </td>
                                                <td>
                                                    <?= $fair['p2']; ?>
                                                </td>
                                                <td>
                                                    <?= $fair['p3']; ?>
                                                </td>
                                                <td>
                                                    <?= $fair['p4']; ?>
                                                </td>
                                                <td>
                                                    <?= $fair['p5']; ?>
                                                </td>
                                                <td>
                                                    <?= $fair['a1']; ?>
                                                </td>
                                                <td>
                                                    <?= $fair['a2']; ?>
                                                </td>
                                                <td>
                                                    <?= $fair['a3']; ?>
                                                </td>
                                                <td>
                                                    <?= $fair['a4']; ?>
                                                </td>
                                                <td>
                                                    <?= $fair['a5']; ?>
                                                </td>
                                                <td>
                                                    <?= $fair['mse']; ?>
                                                </td>
                                                <td>
                                                    <?= $fair['fse']; ?>
                                                </td>
                                                <td>
                                                    <?= $fair['pp1']; ?>
                                                </td>
                                                <td>
                                                    <?= $fair['pp2']; ?>
                                                </td>
                                            </tr>
                                            <!-- fair end -->


                                            <!-- poor start -->
                                            <tr>
                                                <td>Poor</td>
                                                <td>
                                                    <?= $poor['q1']; ?>
                                                </td>
                                                <td>
                                                    <?= $poor['q2']; ?>
                                                </td>
                                                <td>
                                                    <?= $poor['p1']; ?>
                                                </td>
                                                <td>
                                                    <?= $poor['p2']; ?>
                                                </td>
                                                <td>
                                                    <?= $poor['p3']; ?>
                                                </td>
                                                <td>
                                                    <?= $poor['p4']; ?>
                                                </td>
                                                <td>
                                                    <?= $poor['p5']; ?>
                                                </td>
                                                <td>
                                                    <?= $poor['a1']; ?>
                                                </td>
                                                <td>
                                                    <?= $poor['a2']; ?>
                                                </td>
                                                <td>
                                                    <?= $poor['a3']; ?>
                                                </td>
                                                <td>
                                                    <?= $poor['a4']; ?>
                                                </td>
                                                <td>
                                                    <?= $poor['a5']; ?>
                                                </td>
                                                <td>
                                                    <?= $poor['mse']; ?>
                                                </td>
                                                <td>
                                                    <?= $poor['fse']; ?>
                                                </td>
                                                <td>
                                                    <?= $poor['pp1']; ?>
                                                </td>
                                                <td>
                                                    <?= $poor['pp2']; ?>
                                                </td>
                                            </tr>
                                            <!-- poor end -->
                                        </tbody>
                                    </table>
                                    <!-- /.card-body -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- statistik per metode asesmen end -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->


<!-- Modal Tambah -->
<div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="modalTambahLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTambahLabel">Form Assessment</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-secondary">
                <form action="<?= base_url(); ?>Asesmen/addNilai" method="post">
                    <input type="hidden" name="kode_mata_kuliah" value="<?= $asesmen['kode_mata_kuliah']; ?>">
                    <div class="form-group">
                        <label for="nim">NIM</label>
                        <input type="text" class="form-control" id="nim" name="nim" required>
                    </div>
                    <div class="form-group">
                        <label for="nama_mahasiswa">Nama Mahasiswa</label>
                        <input type="text" class="form-control" id="nama_mahasiswa" name="nama_mahasiswa" required>
                    </div>

                    <!-- quizzes -->
                    <div class="form-group mb-5 border p-3">
                        <h5><span class="badge badge-dark">Quizzes</span></h5>
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="q1">Quizzes 1</label>
                                <input type="number" class="form-control" id="q1" name="q1" min="0" max="100" required>
                            </div>
                            <div class="col-lg-6">
                                <label for="q2">Quizzes 2</label>
                                <input type="number" class="form-control" id="q2" name="q2" min="0" max="100" required>
                            </div>
                        </div>
                    </div>

                    <!-- practice or project -->
                    <div class="form-group mb-5 border p-3">
                        <h5><span class="badge badge-dark">Practice or Project</span></h5>
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="p1">Practice or Project 1</label>
                                <input type="number" class="form-control" id="p1" name="p1" min="0" max="100" required>
                            </div>
                            <div class="col-lg-6">
                                <label for="p2">Practice or Project 2</label>
                                <input type="number" class="form-control" id="p2" name="p2" min="0" max="100" required>
                            </div>
                            <div class="col-lg-6">
                                <label for="p3">Practice or Project 3</label>
                                <input type="number" class="form-control" id="p3" name="p3" min="0" max="100" required>
                            </div>
                            <div class="col-lg-6">
                                <label for="p4">Practice or Project 4</label>
                                <input type="number" class="form-control" id="p4" name="p4" min="0" max="100" required>
                            </div>
                            <div class="col-lg-6">
                                <label for="p5">Practice or Project 5</label>
                                <input type="number" class="form-control" id="p5" name="p5" min="0" max="100" required>
                            </div>
                        </div>
                    </div>

                    <!-- assignment -->
                    <div class="form-group mb-5 border p-3">
                        <h5><span class="badge badge-dark">Assignment</span></h5>
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="a1">Assignment 1</label>
                                <input type="number" class="form-control" id="a1" name="a1" min="0" max="100" required>
                            </div>
                            <div class="col-lg-6">
                                <label for="a2">Assignment 2</label>
                                <input type="number" class="form-control" id="a2" name="a2" min="0" max="100" required>
                            </div>
                            <div class="col-lg-6">
                                <label for="a3">Assignment 3</label>
                                <input type="number" class="form-control" id="a3" name="a3" min="0" max="100" required>
                            </div>
                            <div class="col-lg-6">
                                <label for="a4">Assignment 4</label>
                                <input type="number" class="form-control" id="a4" name="a4" min="0" max="100" required>
                            </div>
                            <div class="col-lg-6">
                                <label for="a5">Assignment 5</label>
                                <input type="number" class="form-control" id="a5" name="a5" min="0" max="100" required>
                            </div>
                        </div>
                    </div>

                    <!-- Exam -->
                    <div class="form-group mb-5 border p-3">
                        <h5><span class="badge badge-dark">Exam</span></h5>
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="mse">Mid Semester</label>
                                <input type="number" class="form-control" id="mse" name="mse" min="0" max="100"
                                    required>
                            </div>
                            <div class="col-lg-6">
                                <label for="fse">Final Semester</label>
                                <input type="number" class="form-control" id="fse" name="fse" min="0" max="100"
                                    required>
                            </div>
                        </div>
                    </div>

                    <!-- presentation -->
                    <div class="form-group border p-3">
                        <h5><span class="badge badge-dark">Presentation</span></h5>
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="pp1">Presentation 1</label>
                                <input type="number" class="form-control" id="pp1" name="pp1" min="0" max="100"
                                    required>
                            </div>
                            <div class="col-lg-6">
                                <label for="pp2">Presentation 2</label>
                                <input type="number" class="form-control" id="pp2" name="pp2" min="0" max="100"
                                    required>
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
foreach ($nilai_mahasiswa as $row):
    $no++; ?>
    <div class="modal fade" id="modalEdit<?= $row['id']; ?>" tabindex="-1" aria-labelledby="modalEditLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalEditLabel">Form Assessment</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-secondary">
                    <form action="<?= base_url(); ?>Asesmen/editNilai" method="post">
                        <input type="hidden" name="id" value="<?= $row['id']; ?>">
                        <input type="hidden" name="kode_mata_kuliah" value="<?= $row['kode_mata_kuliah']; ?>">
                        <div class="form-group">
                            <label for="nim">NIM</label>
                            <input type="text" class="form-control" id="nim" name="nim" value="<?= $row['nim']; ?>"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="nama_mahasiswa">Nama Mahasiswa</label>
                            <input type="text" class="form-control" id="nama_mahasiswa" name="nama_mahasiswa"
                                value="<?= $row['nama_mahasiswa']; ?>" required>
                        </div>

                        <!-- quizzes -->
                        <div class="form-group mb-5 border p-3">
                            <h5><span class="badge badge-dark">Quizzes</span></h5>
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="q1">Quizzes 1</label>
                                    <input type="number" class="form-control" id="q1" name="q1" value="<?= $row['q1']; ?>"
                                        min="0" max="100" required>
                                </div>
                                <div class="col-lg-6">
                                    <label for="q2">Quizzes 2</label>
                                    <input type="number" class="form-control" id="q2" name="q2" value="<?= $row['q2']; ?>"
                                        min="0" max="100" required>
                                </div>
                            </div>
                        </div>

                        <!-- practice or project -->
                        <div class="form-group mb-5 border p-3">
                            <h5><span class="badge badge-dark">Practice or Project</span></h5>
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="p1">Practice or Project 1</label>
                                    <input type="number" class="form-control" id="p1" name="p1" value="<?= $row['p1']; ?>"
                                        min="0" max="100" required>
                                </div>
                                <div class="col-lg-6">
                                    <label for="p2">Practice or Project 2</label>
                                    <input type="number" class="form-control" id="p2" name="p2" value="<?= $row['p2']; ?>"
                                        min="0" max="100" required>
                                </div>
                                <div class="col-lg-6">
                                    <label for="p3">Practice or Project 3</label>
                                    <input type="number" class="form-control" id="p3" name="p3" value="<?= $row['p3']; ?>"
                                        min="0" max="100" required>
                                </div>
                                <div class="col-lg-6">
                                    <label for="p4">Practice or Project 4</label>
                                    <input type="number" class="form-control" id="p4" name="p4" value="<?= $row['p4']; ?>"
                                        min="0" max="100" required>
                                </div>
                                <div class="col-lg-6">
                                    <label for="p5">Practice or Project 5</label>
                                    <input type="number" class="form-control" id="p5" name="p5" value="<?= $row['p5']; ?>"
                                        min="0" max="100" required>
                                </div>
                            </div>
                        </div>

                        <!-- assignment -->
                        <div class="form-group mb-5 border p-3">
                            <h5><span class="badge badge-dark">Assignment</span></h5>
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="a1">Assignment 1</label>
                                    <input type="number" class="form-control" id="a1" name="a1" value="<?= $row['a1']; ?>"
                                        min="0" max="100" required>
                                </div>
                                <div class="col-lg-6">
                                    <label for="a2">Assignment 2</label>
                                    <input type="number" class="form-control" id="a2" name="a2" value="<?= $row['a2']; ?>"
                                        min="0" max="100" required>
                                </div>
                                <div class="col-lg-6">
                                    <label for="a3">Assignment 3</label>
                                    <input type="number" class="form-control" id="a3" name="a3" value="<?= $row['a3']; ?>"
                                        min="0" max="100" required>
                                </div>
                                <div class="col-lg-6">
                                    <label for="a4">Assignment 4</label>
                                    <input type="number" class="form-control" id="a4" name="a4" value="<?= $row['a4']; ?>"
                                        min="0" max="100" required>
                                </div>
                                <div class="col-lg-6">
                                    <label for="a5">Assignment 5</label>
                                    <input type="number" class="form-control" id="a5" name="a5" value="<?= $row['a5']; ?>"
                                        min="0" max="100" required>
                                </div>
                            </div>
                        </div>

                        <!-- Exam -->
                        <div class="form-group mb-5 border p-3">
                            <h5><span class="badge badge-dark">Exam</span></h5>
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="mse">Mid Semester</label>
                                    <input type="number" class="form-control" id="mse" name="mse"
                                        value="<?= $row['mse']; ?>" min="0" max="100" required>
                                </div>
                                <div class="col-lg-6">
                                    <label for="fse">Final Semester</label>
                                    <input type="number" class="form-control" id="fse" name="fse"
                                        value="<?= $row['fse']; ?>" min="0" max="100" required>
                                </div>
                            </div>
                        </div>

                        <!-- presentation -->
                        <div class="form-group border p-3">
                            <h5><span class="badge badge-dark">Presentation</span></h5>
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="pp1">Presentation 1</label>
                                    <input type="number" class="form-control" id="pp1" name="pp1"
                                        value="<?= $row['pp1']; ?>" min="0" max="100" required>
                                </div>
                                <div class="col-lg-6">
                                    <label for="pp2">Presentation 2</label>
                                    <input type="number" class="form-control" id="pp2" name="pp2"
                                        value="<?= $row['pp2']; ?>" min="0" max="100" required>
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
<?php endforeach; ?>
<!-- END Modal Edit -->

<!-- Modal Import-->
<div class="modal fade" id="modalImport" tabindex="-1" aria-labelledby="modalImportLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalImportLabel">Form Import Nilai Mahasiswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post"
                    action="<?= base_url(); ?>asesmen/spreadsheet_import/<?= $row['kode_mata_kuliah']; ?>"
                    enctype="multipart/form-data">
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupFile01">Upload</label>
                        <input type="file" name="upload_file" class="form-control" id="inputGroupFile01">
                    </div>
            </div>
            <div class="modal-footer">
                <a class="btn btn-success btn-light" href="<?= base_url(); ?>asesmen/spreadsheet_format_download"
                    target="_blank">Download Excel Header</a>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn text-white" style="background-color: #001f3f;">Submit</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- modal Import End -->