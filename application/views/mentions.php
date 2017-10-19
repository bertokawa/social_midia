 <div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <?php foreach ($tags as $key => $hashtag) { ?>
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5><?php echo $hashtag['term']; ?></h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-wrench"></i>
                        </a>
                        
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#">Config option 1</a></li>
                            <li><a href="#">Config option 2</a></li>
                        </ul>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>

                <div class="ibox-content">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>
                                    Menção
                                </th>
                                <th>
                                    Data
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                foreach ($nomes as $key => $value) { 
                                    if($hashtag['term'] == $value['hashtag']) {
                                ?>
                            <tr>
                                <td>
                                    <?php echo $value['tweet_content']; ?>
                                </td>
                                <td>
                                    <?php echo $value['created_at']; ?>
                                </td>
                            </tr>
                            <?php }} ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>