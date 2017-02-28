
    <!-- Page Content -->
  
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6 text-left">
                       <h4><?= $this->initialPage ?></h4>
                    </div>
                    <div class="col-md-6 text-right">
                       <div class="btn-group" role="group" aria-label="...">
                          <?php if( $this->uri->segment(2) == 'data' ): ?>
                              <button type="button" class="btn btn-success exlink" data-url="<?= base_url($this->app_name).'/add' ?>"><span class="glyphicon glyphicon-plus"></span> New Entry</button>
                          <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div  id="page-content">          
                    <?php if( $this->initial_template == 'data' ): ?>
                        <form action="<?= base_url($this->app_name).'/removeAll' ?>" method="post">
                            <h4 class="text-info">Master Data</h4>
                          <hr/>
                           <!-- OUTPUT MESSAGE -->
                           <?= $this->messagecontroll->showMessage() ?>
                           <!-- OUTPUT MESSAGE -->
                           <table class="table table-condensed table-striped table-bordered table-hover no-margin">
                                <thead>
                                  <tr>
                                    <th width="1%" valign="center"><span class="glyphicon glyphicon-ok" onclick="globalChecked()"></span></th>
                                    <th style="width:7%">Image Profile <a href="javascript:;"><span class="glyphicon glyphicon-sort"></span></a></th>
                                    <th style="width:15%">Charter Name<a href="javascript:;"><span class="glyphicon glyphicon-sort"></span></a></th>
                                    <th style="width:30%"> Comment <a href="javascript:;"><span class="glyphicon glyphicon-sort"></span></a></th>
                                    <th style="width:10%">Create Date <a href="javascript:;"><span class="glyphicon glyphicon-sort"></span></a></th>
                                    <th style="width:15%">Author <a href="javascript:;"><span class="glyphicon glyphicon-sort"></span></a></th>
                                    <th style="width:5%">Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                <?php 
                                if( count($datadb) > 0 ){
                                    
                                    foreach($datadb as $row){
            
                                        $initTable = $row['tc_id'];
                                        # lock category
                                        $initCheckbox = '
                                        <div class="checkbox check-default">
                                            <input name="id_table[]" type="checkbox" name="tableid[]" value="'.$initTable.'" id="checkbox'.$initTable.'">
                                        </div>';
                                        
                                        # charter 
                                        $dataCharter = getDataCharter($row['charter_id']);
                                        
                                        echo '
                                        <tr>
                                            <td valign="middle">
                                               '.$initCheckbox.'
                                            </td>
                                            <td><div class="img-table-mini"><img src="'.base_url().getThumbnailsImage( $row['file'], $row['extention'] ).'"/></div></td>
                                            <td>'.$dataCharter['product_name'].'</td>
                                            <td>'.word_limiter($row['comment'], 50).'</td>
                                            <td>'.$row['date'].'</td>
                                            <td>'.$row['user'].'</td>
                                            <td>
                                             <div class="tools-table">
                                                <a href="'.base_url($this->app_name).'/edit/'.$initTable.'" title="Edit"><span class="glyphicon glyphicon-edit"></span></a>
                                                &nbsp;&nbsp;
                                                <a href="javascript:;" class="act-remove-table" data-url="'.base_url($this->app_name).'/remove/'.$initTable.'" title="Remove"><span class="glyphicon glyphicon-trash"></span></a>
                                            </div>
                                            </td>
                                         </tr>';
                                    }
                                }
                                ?>
                                </tbody>
                              </table>
                        </form>
                        <div class="col-md-6">Result  <?= count($datadb) ?> - <?= $result_all?></div>
                        <div class="col-md-6"><div class="cs-pagination"><?=  $this->pagination->create_links() ?></div></div>
                    <?php elseif( $this->initial_template == 'add' ): ?>
                         <form action="<?= base_url($this->app_name).'/add' ?>" method="post" enctype="multipart/form-data">
                            <h4 class="text-info">Form Input</h4>
                            <hr/>
                            <!-- OUTPUT MESSAGE -->
                            <?= $this->messagecontroll->showMessage() ?>
                            <!-- OUTPUT MESSAGE -->
                            <div class="control-group">
                              <label class="control-label">Chater Name</label>
                              <div class="controls">
                                 <select name="charter_id">
                                    <option value="">-- Select Vendor --</option>
                                    <?php
                                    $dataCharter = getGroupProduct();
                                    if(count($dataCharter) > 0){
                                  
                                        foreach($dataCharter as  $row){
                                            
                                            $childCat = getDataProductPerCategory($row['product_category']);
                                            if(count($childCat) > 0){
                                                
                                                $output_child = '';
                                                foreach($childCat as $childRow){
                                                    
                                                    if(set_value('charter_id') == $childRow['product_id'])$sel = 'selected';
                                                    else $sel = "";
                                                    
                                                    $output_child .= '<option value="'.$childRow['product_id'].'" '.$sel.'>'.$childRow['product_name'].'</option>';
                                                }
                                            }
                                            
                                            echo '
                                            <optgroup label="'.$row['product_category'].'">
                                            '.$output_child.'
                                            </optgroup>';
                                        }
                                    }
                                    ?>
                                </select>
                              </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">User Image</label>
                                <div class="controls">
                                    <!-- Generate result image upload -->
                                    <div id="result-upload-edit">
                                        <ul>
                                            <li>
                                                <div class="no-image"><span class="glyphicon glyphicon-picture"></span></div>
                                                <div class="input-file"><input type="file" name="fileupl"/></div>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- ========================= -->
                                </div>
                            </div>
                            <div class="control-group">
                              <label class="control-label">User Name</label>
                              <div class="controls">
                                  <input type="text" name="user" style="width:100%;" value="<?= set_value('user') ?>" placeholder="Empty"/>
                              </div>
                            </div>
                            <div class="control-group">
                              <label class="control-label">Comment</label>
                              <div class="controls">
                                    <textarea name="comment" cols="10" rows="5"><?= set_value('comment') ?></textarea>
                              </div>
                            </div>
                            <div class="form-actions no-margin">
                              <button type="reset" class="btn">Cancel</button>
                              <button type="submit" class="btn btn-info">Save</button>
                            </div>
                          </form>     
                    <?php elseif( $this->initial_template == 'edit' ): ?>
                          <form action="<?= base_url( $this->app_name ).'/edit/'.$this->initial_id ?>" method="post"  enctype="multipart/form-data">
                            <h5 class="text-info">Form Edit</h5>
                            <hr/>
                            <!-- OUTPUT MESSAGE -->
                            <?= $this->messagecontroll->showMessage() ?>
                            <!-- OUTPUT MESSAGE -->
                            <div class="control-group">
                              <label class="control-label">Chater Name</label>
                              <div class="controls">
                                 <select name="charter_id">
                                    <option value="">-- Select Vendor --</option>
                                    <?php
                                    $dataCharter = getGroupProduct();
                                    if(count($dataCharter) > 0){
                                       
                                        foreach($dataCharter as  $row){
                                            
                                            $childCat = getDataProductPerCategory($row['product_category']);
                                            if(count($childCat) > 0){
                                                
                                                $output_child = '';
                                                foreach($childCat as $childRow){
                                                    
                                                    if(rebackPost('charter_id', $datadb['charter_id']) == $childRow['product_id'])$sel = 'selected';
                                                    else $sel = "";
                                                    
                                                    $output_child .= '<option value="'.$childRow['product_id'].'" '.$sel.'>'.$childRow['product_name'].'</option>';
                                                }
                                            }
                                            
                                            echo '
                                            <optgroup label="'.$row['product_category'].'">
                                            '.$output_child.'
                                            </optgroup>';
                                        }
                                    }
                                    ?>
                                </select>
                              </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">User Image</label>
                                <div class="controls">
                                    <!-- Generate result image upload -->
                                    <div id="result-upload-edit">
                                        <ul>
                                            <li>
                                                <div class="img"><img src="<?= base_url().getThumbnailsImage( $datadb['file'], $datadb['extention'] ) ?>"/></div>
                                                <div class="input-file"><input type="file" name="fileupl"/></div>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- ========================= -->
                                </div>
                            </div>
                            <div class="control-group">
                              <label class="control-label">User Name</label>
                              <div class="controls">
                                  <input type="text" name="user" style="width:100%;" value="<?= rebackPost('user', $datadb['user']) ?>" placeholder="Empty"/>
                              </div>
                            </div>
                            <div class="control-group">
                              <label class="control-label">Comment</label>
                              <div class="controls">
                                    <textarea name="comment" cols="10" rows="5"><?= rebackPost('comment', $datadb['comment']) ?></textarea>
                              </div>
                            </div>
                            <div class="form-actions no-margin">
                              <button type="reset" class="btn">Cancel</button>
                              <button type="submit" class="btn btn-info">Save</button>
                            </div>
                          </form>
                    <?php endif; ?>
                </div>
            </div>
        </div>

    <!-- End Container -->
