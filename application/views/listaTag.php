<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>
                        Sua tabela de Hastags #
                    </h5>
                
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                                        
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-wrench"></i>
                        </a>

                        <ul class="dropdown-menu dropdown-user">
                            <li>
                                <a href="#">
                                    Config option 1
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    Config option 2
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <div class="ibox-content">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover dataTables-example" >
                            <thead>
                                <tr>
                                    <th>#</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php 
                                    foreach ($tags as $key => $value) {
                                    # code...
                                ?>
                                <tr class="gradeX">
                                    <td><?php echo $value['term'] ?></td>

                                </tr>

                                <?php
                                    }
                                ?>   
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        