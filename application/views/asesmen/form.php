<main id="main" class="main">

    <div class="pagetitle">
        <h1>Form Instrumen Asesmen</h1>
        <div class="row mt-3">
            <div class="col-lg-12">
                <?php if ($this->session->flashdata('flash')): ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <i class="bi bi-check-circle me-1"></i>
                        Instrumen Asesmen <strong>Berhasil</strong>
                        <?= $this->session->flashdata('flash'); ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php endif; ?>
            </div>
        </div>

    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <form action="<?= base_url(); ?>Asesmen/tambahInstrumenAsesmen" method="post">
                        <div class="card-body row g-3 mt-2">
                            <!-- <h5 class="card-title">Multi Columns Form</h5> -->

                            <!-- Multi Columns Form -->
                            <div class="col-12">
                                <label for="mata_kuliah" class="form-label">Mata Kuliah</label>
                                <select class="form-select" id="mata_kuliah" name="mata_kuliah">
                                    <?php foreach ($pilihData as $data): ?>
                                        <option value="<?= $data['kode_mata_kuliah']; ?>">
                                            <?= $data['mata_kuliah']; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-md-12">
                                <label for="minggu" class="form-label">Minggu</label>
                                <select class="form-select" id="minggu" name="minggu">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                </select>
                            </div>

                            <div class="col-12">
                                <label for="capaian_pembelajaran" class="form-label">Capaian Pembelajaran</label>
                                <select class="form-select" id="capaian_pembelajaran" name="capaian_pembelajaran">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                </select>
                            </div>

                            <div class="col-md-12">
                                <label for="metode_asesmen" class="form-label">Metode Asesmen</label>
                                <select id="metode_asesmen" class="form-select" name="metode_asesmen">
                                    <option value="T1">T1</option>
                                    <option value="T2">T2</option>
                                    <option value="T3">T3</option>
                                    <option value="T4">T4</option>
                                    <option value="T5">T5</option>
                                    <option value="P1">P1</option>
                                    <option value="P2">P2</option>
                                    <option value="P3">P3</option>
                                    <option value="P4">P4</option>
                                    <option value="P5">P5</option>
                                    <option value="PP1">PP1</option>
                                    <option value="PP2">PP2</option>
                                    <option value="ATS">ATS</option>
                                    <option value="AAS">AAS</option>
                                </select>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                            </div>
                            <!-- End Multi Columns Form -->
                        </div>
                    </form>
                </div>

            </div>


        </div>
    </section>

</main><!-- End #main -->