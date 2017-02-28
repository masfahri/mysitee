
    <!-- Page Content -->
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6 text-left">
                       <h4>Social Media Link</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div  id="page-content">          
                    <?php if( $this->initial_template == 'data' ): ?>  
                      <h4 class="text-info">Master Data</h4>
                      <hr/>
                       <!-- OUTPUT MESSAGE -->
                       <?= $this->messagecontroll->showMessage() ?>
                       <!-- OUTPUT MESSAGE -->
                      <table class="table table-condensed table-striped table-bordered table-hover no-margin">
                        <thead>
                          <tr>
                            <th style="width:15%">Social Media Name</th>
                            <th>Link</th>
                            <th style="width:5%">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php 
                        if( count($datadb) > 0 ){
                            foreach($datadb as $row){
    
                                $initTable = $row['socmed_id'];
                                echo '
                                <tr>
                                    <td>'.$row['socmed_name'].'</td>
                                    <td>'.$row['socmed_link'].'</td>
                                    <td>  
                                        <div class="tools-table">
                                            <a href="'.base_url($this->app_name).'/edit/'.$initTable.'" title="Edit"><span class="glyphicon glyphicon-edit"></span></a>
                                        </div>
                                    </td>
                                 </tr>';
                            }
                        }
                        ?>
                        </tbody>
                      </table>
                    <?php elseif( $this->initial_template == 'edit' ): ?>
                       <form action="<?= base_url('app_socmed').'/edit/'.$this->initial_id ?>" method="post" enctype="multipart/form-data">
                           <h4 class="text-info">Form Input</h4>
                            <hr/>
                            <!-- OUTPUT MESSAGE -->
                            <?= $this->messagecontroll->showMessage() ?>
                            <!-- OUTPUT MESSAGE -->
                            <div class="control-group">
                              <label class="control-label">  <?= $datadb['socmed_name'] ?></label>
                            </div>
                            <div class="control-group">
                              <label class="control-label">Social Media Link</label>
                              <div class="controls" >
                                <input type="text" name="socmed_link" style="width: 100%;" value="<?= rebackPost('socmed_link', $datadb['socmed_link']) ?>" placeholder="Empty"/>
                              </div>
                            </div>
                            <div class="form-actions no-margin">
                              <button type="reset" class="btn">Cancel</button>
                              <button type="submit" class="btn btn-info">Update</button>
                            </div>
                      </form>   
                    <?php endif; ?>
                </div>
            </div>
        </div>
    <!-- End Container -->
