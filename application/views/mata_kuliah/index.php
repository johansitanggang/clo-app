<main id="main" class="main">

    <div class="pagetitle">
        <h1>Kelola Mata Kuliah</h1>
        

    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-body">
                        <div class="row mt-3">

                            <!-- KIRI -->
                            <div class="col-md-6">
                                <div class="row mb-3">
                                    <label for="tahunAjaran" class="col-3">Tahun Ajaran</label>
                                    <div class="col-auto">
                                        <select class="form-select" id="tahunAjaran" name="tahunAjaran">
                                            <option value="2023-2024">2023-2024</option>
                                            <option value="2024-2025">2024-2025</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="semester" class="col-3">Semester</label>
                                    <div class="col-auto">
                                        <select class="form-select" id="semester" name="semester">
                                            <option value="ganjil">Ganjil</option>
                                            <option value="genap">Genap</option>
                                        </select>
                                    </div>
                                </div>
                            </div> <!-- END KIRI -->

                            <!-- KANAN -->
                            <div class="col-md-6">
                                <div class="row mb-3">
                                    <label for="programStudi" class="col-3">Program Studi</label>
                                    <div class="col-auto">
                                        <select class="form-select" id="programStudi" name="programStudi">
                                            <option value="Teknik Informatika">Teknik Informatika</option>
                                            <option value="Rekayasa Keamanan Siber">Rekayasa Keamanan Siber</option>
                                            <option value="Multimedia dan Jaringan">Multimedia dan Jaringan</option>
                                        </select>
                                    </div>
                                </div>

                                <form action="" method="post">
                                    <div class="row mb-3">
                                        <label for="mataKuliah" class="col-3">Mata Kuliah</label>
                                        <div class="col-auto">
                                            <select class="form-select" id="mataKuliah" name="kode_mata_kuliah">
                                                <?php foreach ($pilihData as $pilih): ?>
                                                    <option value="<?= $pilih['kode_mata_kuliah']; ?>">
                                                        <?= $pilih['mata_kuliah']; ?>
                                                    </option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col">
                                            <button type="submit" class="btn btn-primary btn-sm float-end"
                                                name="tombolSubmit">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div> <!-- END KANAN -->

                        </div>

                        <!-- Bordered Table -->
                        
                        <div class="row">
                            
                            <div class="col-md-12">
                            
                                <?php if (!empty($namaMataKuliah)): ?>
                                    <div class="row mb-3 mt-5">
                                        <div class="col">
                                            <!-- tombol tambah -->
                                            <button type="button" class="btn btn-primary btn-sm float-end"
                                                data-bs-toggle="modal" data-bs-target="#modalTambah"
                                                name="tambahCapaianPembelajaran"><i class="bi bi-plus-lg"></i>
                                                Tambah Capaian Pembelajaran</button>
                                        </div>
                                    </div>
                                    <h2>Mata Kuliah:
                                        <?php foreach ($namaMataKuliah as $row): ?>
                                            <?= $row['mata_kuliah']; ?>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </h2>
                                <?php if ($this->session->flashdata('flash')): ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <i class="bi bi-check-circle me-1"></i>
                        Instrumen Asesmen <strong>Berhasil</strong>
                        <?= $this->session->flashdata('flash'); ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>
                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Aksi</th>
                                            <th>No</th>
                                            <th>Capaian Pembelajaran</th>
                                        </tr>

                                    </thead>

                                    <tbody>
                                        <?php if (!empty($capaianPembelajaran)): ?>
                                            <?php foreach ($capaianPembelajaran as $cp): ?>
                                                <tr>
                                                    <td style="display: flex;">
                                                        <button type="button" class="badge text-bg-success"
                                                            style="margin-right: 5px;" data-bs-toggle="modal"
                                                            data-bs-target="#modalEdit<?= $cp['id_capaian_pembelajaran']; ?>"
                                                            name="editCapaianPembelajaran"><i
                                                                class="bi bi-pencil-square"></i></button>
                                                        <a href="<?php base_url() ;?>Mata_Kuliah/hapusCP/<?= $cp['id_capaian_pembelajaran'];?>" type="button" class="badge text-bg-danger" onclick="return confirm('yakin?');"><i class="bi bi-trash"></i></a>

                                                        <!-- <button type="button" class="btn btn-primary btn-sm float-end"
                                                        data-bs-toggle="modal" data-bs-target="#modalTambah"
                                                        name="tambahCapaianPembelajaran"><i class="bi bi-plus-lg"></i>
                                                        Tambah Capaian Pembelajaran</button> -->
                                                    </td>

                                                    <td>
                                                        <?= $cp['no']; ?>
                                                    </td>
                                                    <td>
                                                        <?= $cp['capaian_pembelajaran']; ?>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        <?php endif; ?>

                                    </tbody>
                                </table>
                                <!-- End Bordered Table -->
                            </div>
                        </div>

                    </div>
                </div>

            </div>


        </div>
    </section>

</main><!-- End #main -->

<!-- Modal Tambah Capaian Pembelajaran -->
<div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="modalTambahLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="modalTambahLabel">Tambah Capaian Pembelajaran</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <div class="mb-3">
                        <!-- mata kuliah -->
                        <input type="hidden" class="form-control" id="kode_mata_kuliah" name="kode_mata_kuliah"
                            value="<?= $row['kode_mata_kuliah']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="tambahNoCP" class="form-label">No. Capaian Pembelajaran</label>
                        <input type="text" class="form-control" id="tambahNoCP" name="tambahNoCP" required>
                    </div>
                    <div class="mb-3">
                        <label for="tambahCP" class="form-label">Capaian Pembelajaran</label>
                        <textarea class="form-control" id="tambahCP" name="tambahCP" required></textarea>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="tambahData">Tambah Data</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- End Modal TAMBAH Capaian Pembelajaran-->


<!-- Modal EDIT Capaian Pembelajaran -->
<?php $no = 0;
if (!empty($capaianPembelajaran)): ?>
    <?php foreach ($capaianPembelajaran as $cp):
        $no++; ?>
        <div class="modal fade" id="modalEdit<?= $cp['id_capaian_pembelajaran']; ?>" tabindex="-1"
            aria-labelledby="modalEditLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="modalEditLabel">Edit Capaian Pembelajaran</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post">
                            <div class="mb-3">
                                <!-- mata kuliah -->
                                <input type="hidden" class="form-control" id="id_capaian_pembelajaran"
                                    name="id_capaian_pembelajaran" value="<?= $cp['id_capaian_pembelajaran']; ?>">
                                <input type="hidden" class="form-control" id="kode_mata_kuliah"
                                    name="kode_mata_kuliah" value="<?= $cp['kode_mata_kuliah']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="editNoCP" class="form-label">No. Capaian Pembelajaran</label>
                                <input type="text" class="form-control" id="editNoCP" name="editNoCP"
                                    value="<?= $cp['no']; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="editCP" class="form-label">Capaian Pembelajaran</label>
                                <textarea class="form-control" id="editCP" name="editCP"
                                    value="<?= $cp['capaian_pembelajaran']; ?>"
                                    required><?= $cp['capaian_pembelajaran']; ?></textarea>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="editData">Edit</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
<?php endif; ?>

<!-- End Modal EDIT Capaian Pembelajaran -->