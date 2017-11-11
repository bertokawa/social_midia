<body class="fixed-navigation">
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element">
                            <span>
                                <img alt="image" class="img-circle" src="<?php echo base_url("assets/img/profile_small.jpg")?>" />
                            </span>
                        
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear">
                                    <span class="block m-t-xs">
                                        <strong class="font-bold">
                                            <?php echo $this->session->userdata('name'); ?>
                                        </strong>
                                    </span>

                                    <span class="text-muted text-xs block">
                                        <?php echo $this->session->userdata('username'); ?>
                                    </span>
                                </span>
                            </a>
                        </div>
                        
                        <div class="<?php echo base_url("assets/img/logo-element")?>">
                            IN+
                        </div>
                    </li>
                </ui>

                <li class="active">
                    <a href="<?php echo base_url("index.php/");?>findtweets/searchone/">
                        <i class="fa fa-twitter">
                        </i>

                        <span class="nav-label">
                            Crawler
                        </span>
                    </a>
                </li>

                <li class="active">
                    <a href="<?php echo base_url("index.php/");?>welcome/dashboard/">
                        <i class="fa fa-line-chart">
                        </i>

                        <span class="nav-label">
                            Dashboards
                        </span>
                    </a>
                </li>

                <li class="active">
                    <a href="<?php echo base_url("index.php/");?>welcome/cadastro/">
                        <i class="fa fa-pencil">
                        </i>

                        <span class="nav-label">
                            Cadastro
                        </span>
                    </a>
                </li>

                <li class="active">
                    <a href="<?php echo base_url("index.php/");?>welcome/listaTag/">
                        <i class="fa fa-hashtag">
                        </i>

                        <span class="nav-label">
                            Lista de #
                        </span>
                    </a>
                </li>

                <li class="active">
                    <a href="<?php echo base_url("index.php/");?>welcome/financas/">
                        <i class="fa fa-dollar">
                        </i>

                        <span class="nav-label">
                            Me Pague
                        </span>
                    </a>
                </li>
            </div>
        </nav>
    </div>
    <nav>
        <div id="page-wrapper" class="gray-bg sidebar-content">
            <div class="row border-bottom">
                <nav    class="navbar navbar-static-top white-bg" 
                        role="navigation" 
                        style="margin-bottom: 0"
                        >
                    <div class="navbar-header">
                        <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#">
                            <i class="fa fa-bars">
                            </i> 
                        </a>
            
                        <form role="search" class="navbar-form-custom" action="search_results.html">
                            <div class="form-group">
                                <input 
                                    type="text" 
                                    placeholder="Search for something..." 
                                    class="form-control" 
                                    name="top-search" 
                                    id="top-search">
                            </div>
                        </form>
                    </div>
                    <ul class="nav navbar-top-links navbar-right">
                        <li>
                            <span class="m-r-sm text-muted welcome-message">
                                Welcome to Social Midia
                            </span>
                        </li>

                        <li>
                             <a href="<?php echo base_url("index.php/");?>welcome/logout_session/">
                                <i class="fa fa-sign-out">
                                </i> 
                                Log out
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
       

        

