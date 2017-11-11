<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Register</title>

    <link href = "<?php echo base_url ("assets/css/bootstrap.min.css")?>" rel="stylesheet">
    <link href = "<?php echo base_url ("assets/font-awesome/css/font-awesome.css")?>" rel="stylesheet">
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href = "<?php echo base_url ("assets/css/animate.css")?>" rel="stylesheet">
    <link href = "<?php echo base_url ("assets/css/style.css")?>" rel="stylesheet">

<script type="text/javascript" src="http://ff.kis.v2.scr.kaspersky-labs.com/C364007F-6EFF-684E-B3DA-F6C7F5256E37/main.js" charset="UTF-8"></script><link rel="stylesheet" crossorigin="anonymous" href="http://ff.kis.v2.scr.kaspersky-labs.com/52014237-01FD-3745-AAE2-10A5B75EA5FD/abn/main.css"/></head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen   animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">SM+</h1>

            </div>
            <h3>Register to SM+</h3>
            <p>Create account to see it in action.</p>
            <form class="m-t" role="form" method="post" action="<?php echo base_url('index.php/');?>register/criar_user" >
                <div class="form-group">
                    <input name="name" type="text" class="form-control" placeholder="Name" required="">
                </div>
                <div class="form-group">
                    <input name="email" type="email" class="form-control" placeholder="Email" required="">
                </div>
                <div class="form-group">
                    <input name="password" type="password" class="form-control" placeholder="Password" required="">
                </div>
                <div class="form-group">
                        <div class="checkbox i-checks"><label> <input type="checkbox"><i></i> Agree the terms and policy </label></div>
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Register</button>

                <p class="text-muted text-center"><small>Already have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="<?php echo base_url('index.php/');?>welcome/login">Login</a>
            </form>
            <p class="m-t"> <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small> </p>
        </div>
    </div>


    <!-- Mainly scripts -->
    <script src="<?php echo base_url("assets/js/jquery-3.1.1.min.js") ?>" ></script>
    <script src="<?php echo base_url("assets/js/bootstrap.min.js") ?>"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url("assets/js/plugins/iCheck/icheck.min.js") ?>"></script>
    <script>
        $(document).ready(function(){
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });
    </script>
</body>

</html>
