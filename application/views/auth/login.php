<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?= base_url('assets/dist/img/logo-polibatam123.png'); ?>">
    <title>Login</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets//dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-navy">
            <div class="card-header d-flex justify-content-center p-3">
                <!-- <a href="" class="h1"><b>Admin</b>LTE</a> -->
                <!-- <img src="<?= base_url('assets/dist/img/logo-polibatam.jpg'); ?>" alt="" width="90" class="d-block"> -->
                <img src="<?= base_url(); ?>assets/dist/img/logo-polibatam123.png" alt="AdminLTE Logo"
                    class="brand-image img-circle d-block text-center" width="100">

            </div>
            <div class="card-body">
                <p class="login-box-msg">Sign in to start your session</p>
                <?php if($this->session->flashdata('flash')): ?>
                    <?= $this->session->flashdata('flash'); ?>
                <?php endif; ?>

                <form action="<?= base_url('Auth'); ?>" method="post">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="NIP" name="nip_dosen"
                            value="<?= set_value('nip_dosen'); ?>" autocomplete="off">
                    </div>
                    <div class="form-text text-danger text-small">
                        <?= form_error('nip_dosen'); ?>
                    </div>
                    <div class="input-group mt-3">
                        <input type="password" class="form-control" placeholder="Password" name="password">
                    </div>
                    <div class="form-text text-danger text-small">
                        <?= form_error('password'); ?>
                    </div>

                    <div class="social-auth-links text-center mt-2 mb-3 mt-4">
                        <button type="submit" class="btn btn-block bg-navy">
                            Login
                        </button>

                    </div>
                </form>
                <!-- /.social-auth-links -->


            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="<?= base_url(); ?>assets//plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url(); ?>assets/dist/js/adminlte.min.js"></script>
</body>

</html>