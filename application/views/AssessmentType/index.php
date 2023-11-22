<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item ">Utility</li>
                        <li class="breadcrumb-item">Grading Category</li>
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
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Code</th>
                            <th>Assessment Type</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>A</td>
                            <td> Assignment</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>P</td>
                            <td> Practice or Project</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Q</td>
                            <td> Quiz</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>MSE</td>
                            <td> Mid-Semester Exam</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>FSE</td>
                            <td> Final-Semester Exam</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>PP</td>
                            <td>Project Presentation, demo, team meeting</td>
                        </tr>

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