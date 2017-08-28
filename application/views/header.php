<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<!DOCTYPE html>
<html>

	<head>

	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">

	    <title>INSPINIA | Dashboard</title>

	    <link href="<?php echo base_url("assets/css/bootstrap.min.css")?>" rel="stylesheet">
	    <link href="<?php echo base_url("assets/css/font-awesome.css")?>" rel="stylesheet">

	    <!-- Toastr style -->
	    <link href="<?php echo base_url("assets/css/plugins/toastr/toastr.min.css")?>" rel="stylesheet">

	    <!-- Gritter -->
	    <link href="<?php echo base_url("assets/js/plugins/gritter/jquery.gritter.css")?>" rel="stylesheet">

	    <link href="<?php echo base_url("assets/css/animate.css")?>" rel="stylesheet">
	    <link href="<?php echo base_url("assets/css/style.css")?>" rel="stylesheet">

	</head>

	<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="<?php echo base_url("assets/img/profile_small.jpg")?>" />
                             </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">David Williams</strong>
                             </span> <span class="text-muted text-xs block">Art Director <b class="caret"></b></span> </span> </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="">Profile</a></li>
                                <li><a href="contacts.html">Contacts</a></li>
                                <li><a href="mailbox.html">Mailbox</a></li>
                                <li class="divider"></li>
                                <li><a href="login.html">Logout</a></li>
                            </ul>
                        </div>
                        <div class="logo-element">
                            IN+
                        </div>
                    </li>
                    <li class="active">
                        <a href="dashboard_3.html"><i class="fa fa-line-chart"></i> <span class="nav-label">Dashboards</span></a>
                    </li>

					<li class="active">
                        <a href="<?php echo base_url("index.php/welcome/cadastro")?>"><i class="fa fa-line-chart"></i> <span class="nav-label">Cadastro</span></a>
                    </li>

                    <!--lista das hastags-->

                    <li class="active">
                        <a href="<?php echo base_url("index.php/welcome/lista")?>"><i class="fa fa-line-chart"></i> <span class="nav-label">Lista de #</span></a>
                    </li>

                    <!--finanças-->
					<li class="active">
                        <a href="<?php echo base_url("index.php/welcome/cadastro")?>"><i class="fa fa-line-chart"></i> <span class="nav-label">Finanças</span></a>
                    </li>

                </ul>
            </div>
        </nav>
    </div>
    <!--</body>
</html>
-->
