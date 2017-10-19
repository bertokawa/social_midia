<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>
                    Cadastro de TAGs
                </h5>
            </div>
            
            <div class="ibox-content">
                <form method="post" class="form-horizontal" 
                        action="<?=base_url('index.php/');?>welcome/tagsCadastradas/">
                    <div class="form-group">
                        <label class="col-sm-2 control-label">
                            TAGs
                        </label>

                        <div class="col-sm-10">
                            <input
                                name="tag"
                                type="text"
                                class="form-control"
                                placeholder="#Tag"
                                required=""
                            >
                        </div>
                    </div>

                    <div class="hr-line-dashed">
                        
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4 col-sm-offset-2">
                            <button class="btn btn-white" type="submit">
                                Cancel
                            </button>
                            
                            <button class="btn btn-primary" type="submit">
                                Save
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
        