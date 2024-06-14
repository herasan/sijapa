<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SIJAPA - <?= $title ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="<?= base_url() ?>assets/template/back-end/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?= base_url() ?>assets/template/back-end/css/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?= base_url() ?>assets/template/back-end/css/startmin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?= base_url() ?>assets/template/back-end/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body>

    <!-- jQuery -->
    <script src="<?= base_url() ?>assets/template/back-end/js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?= base_url() ?>assets/template/back-end/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?= base_url() ?>assets/template/back-end/js/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?= base_url() ?>assets/template/back-end/js/startmin.js"></script>

    <div class="container">

        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h1 class="text-center">Login</h1>
                        <h2 class="panel-title text-center">Masuk Untuk Melanjutkan</h2>
                    </div>
                    <div class="panel-body">
                        <?php
                        echo form_open('login');
                        if ($this->session->flashdata('pesan')) {
                            echo '<div class="alert alert-success alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
                            echo $this->session->flashdata('pesan');
                            echo '</div>';
                        }

                        ?>



                        <form role="form">
                            <fieldset>
                                <div class="form-group">
                                    Email
                                    <input class="form-control" name="email" type="email" autofocus required>
                                </div>
                                <div class="form-group">
                                    Password
                                    <input class="form-control" name="password" type="password" required>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <div>
                                    <div class="col-sm-12 text-center">
                                        <button type="submit" class="btn btn-success">Login</button>
                                    </div>


                                    <div class="col-sm-12 text-center">
                                        <a href="<? base_url() ?> ">Belum Punya Akun? Buat Akun
                                    </div>

                                </div>
                            </fieldset>

                            <? echo form_close() ?>;
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>