
    <!-- Page Content -->
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6 text-left">
                       <h4>Manage Users</h4>
                    </div>
                    <div class="col-md-6 text-right">
                       <div class="btn-group" role="group" aria-label="...">
                          <?php if( $this->uri->segment(2) == 'data' ): ?>
                              <button type="button" class="btn btn-success exlink" data-url="<?= base_url('app_manageuser').'/add' ?>"><span class="glyphicon glyphicon-plus"></span> New Entry</button>
                          <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div  id="page-content">          
                    <?php if( $this->initial_template == 'data' ): ?>
                       <form action="<?= base_url('app_manageuser').'/removeAll' ?>" method="post" id="form1">
                          <h4 class="text-info">Master Data</h4>
                          <hr/>
                           <!-- OUTPUT MESSAGE -->
                           <?= $this->messagecontroll->showMessage() ?>
                           <!-- OUTPUT MESSAGE -->
                          <table class="table table-condensed table-striped table-bordered table-hover no-margin">
                            <thead>
                              <tr>
                                <th style="width:3%;"><span class="glyphicon glyphicon-ok" onclick="globalChecked()"></span></th>
                                <th style="width:7%">Images <a href="javascript:;"><span class="glyphicon glyphicon-sort"></span></a></th>
                                <th style="width:15%">Nickname <a href="javascript:;"><span class="glyphicon glyphicon-sort"></span></a></th>
                                <th>Join Date <a href="javascript:;"><span class="glyphicon glyphicon-sort"></span></a></th>
                                <th style="width:5%">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php 
                            if( count($datadb) > 0 ){
                                foreach($datadb as $row){
        
                                    $initTable = $row['id_administrator'];
                                    
                                    # default image profile
                                    if( $row['image'] == "" )$defaultImage = config_item('assets_img').'/default/avatar.png';
                                    else $defaultImage = base_url().getThumbnailsImage($row['image'], $row['extention']);
                                    
                                    echo '
                                    <tr>
                                        <td valign="middle">
                                            <div class="checkbox check-default">
                                                <input name="id_table[]" type="checkbox" name="tableid[]" value="'.$initTable.'" id="checkbox'.$initTable.'">
                                            </div>
                                        </td>
                                        <td><div class="img-table-mini"><img src="'.$defaultImage.'"/></div></td>
                                        <td>'.$row['nickname'].'</td>
                                        <td>'.$row['create_date'].'</td>
                                        <td>
                                            <div class="tools-table">
                                                 <a href="javascript:;" class="act-remove-table" data-url="'.base_url($this->app_name).'/remove/'.$initTable.'" title="Remove"><span class="glyphicon glyphicon-trash"></span></a><yphicon glyphicon-edit"></span></a>
                                            </div>
                                        </td>
                                     </tr>';
                                }
                            }else{
                                echo '<tr><td colspan="5"><span class="gray-text">Data is Empty</span></td></tr>';
                            }
                            ?>
                            </tbody>
                          </table>
                        </form>
                       <div class="col-md-6">Result  <?= count($datadb) ?> - <?= $result_all?></div>
                       <div class="col-md-6"><div class="cs-pagination"><?=  $this->pagination->create_links() ?></div></div>
                    <?php elseif( $this->initial_template == 'add' ): ?>
                        <form action="<?= base_url('app_manageuser').'/add' ?>" method="post" enctype="multipart/form-data">
                             <h4 class="text-info">Form Input</h4>
                            <hr/>
                            <!-- OUTPUT MESSAGE -->
                            <?= $this->messagecontroll->showMessage() ?>
                            <!-- OUTPUT MESSAGE -->
                            <div class="control-group">
                              <label class="control-label">Image Profile</label>
                              <div class="controls">
                                  <input type="file" name="file"  placeholder="Empty"/>
                              </div>
                            </div>
                            <div class="control-group">
                              <label class="control-label">Nickname</label>
                              <div class="controls">
                                  <input type="text" name="nickname" value="<?= set_value('nickname') ?>" placeholder="Empty"/>
                              </div>
                            </div>
                            <div class="control-group">
                              <label class="control-label">Username</label>
                              <div class="controls">
                                <input type="text" name="username" value="<?= set_value('username') ?>" placeholder="Empty"/>
                              </div>
                            </div>
                            <div class="control-group">
                              <label class="control-label">Password</label>
                              <div class="controls">
                                <input type="password" name="password" value="" placeholder="Empty"/>
                              </div>
                            </div>
                            <div class="control-group">
                              <label class="control-label">Confirm Password</label>
                              <div class="controls">
                                <input type="password" name="repassword" value="" placeholder="Empty"/>
                              </div>
                            </div>
                            <div class="form-actions no-margin">
                              <button type="button" class="btn">Cancel</button>
                              <button type="submit" class="btn btn-info">Save</button>
                            </div>
                          </form> 
                    <?php endif; ?>
                </div>
            </div>
        </div>
    <!-- End Container -->
