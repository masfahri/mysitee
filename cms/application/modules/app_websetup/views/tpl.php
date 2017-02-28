
    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6 text-left">
                       <h4>General Config</h4>
                    </div>
                    <div class="col-md-6 text-right">
                       <div class="btn-group" role="group" aria-label="...">
                         
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div  id="page-content">              
                    <?php if( $this->initial_template == 'edit' ): ?>
                          <form action="<?= base_url('app_websetup').'/edit/' ?>" method="post"  enctype="multipart/form-data">
                            <h5 class="text-info">Form Edit</h5>
                            <hr/>
                            <!-- OUTPUT MESSAGE -->
                            <?= $this->messagecontroll->showMessage() ?>
                            <!-- OUTPUT MESSAGE -->
                            <div class="control-group">
                              <label class="control-label">Website Status</label>
                              <div class="controls">
                               <select name="status" onchange="websiteReboot(this)">
                                <?php
                                $dataStatus =  array('enable', 'disable');
                                foreach($dataStatus as $row){
                                    if( $row == rebackPost('status', $datadb['status']) )$sel = 'selected';
                                    else $sel = '';
                                    
                                    echo '<option value="'.$row.'">'.$row.'</option>';
                                }
                                ?>
                                </select>
                              </div>
                            </div>
                            <div class="control-group">
                              <label class="control-label"><br/>Default Active Language</label>
                              <div class="controls">
                                <div class="notif-info">
                                    <p>Setting activate language will changes default currency</p>
                                </div>
                                   <select name="active_lang" >
                                        <option value="">-- CHOOSE LANGUAGE --</option>
                                        <?php
                                        foreach($datadb_lang as $row){
                                            
                                            if( $row['countries_id'] == $datadb['active_lang'] )$sel = 'selected';
                                            else $sel = '';
                                            
                                            echo '<option value="'.$row['countries_id'].'" '.$sel.'>'.$row['countries_name_flag'].'</option>';
                                        }
                                        ?>
                                    </select>
                              </div>
                            </div>
                            
                            <div class="control-group">
                              <label class="control-label">Site Logo</label>
                              <div class="controls">
                                <div id="result-upload">
                                    <ul>
                                        <li>
                                            <?php
                                            if( file_exists( getThumbnailsImage($datadb['file'], $datadb['extention']) ) ){
                                                echo '<img src="'.base_url().getThumbnailsImage($datadb['file'], $datadb['extention']).'"/>';
                                            }else{
                                                echo '<div class="no-image"><span class="glyphicon glyphicon-picture"></span></div>';
                                            }
                                            ?>
                                        </li>
                                    </ul>
                                </div>
                                  <input type="file" name="fileupl"/>
                                  <div class="notif-info">
                                    <p>File image must be in extention <b>(JPG, JPEG, PNG)</b> </p>
                                    <p>File image must be in size <b>( 110 x  94 )</b> </p>
                                  </div>
                              </div>
                            </div>
                            <div class="control-group">
                              <label class="control-label">Site Favicon</label>
                              <div class="controls">
                                <div id="result-upload">
                                    <ul>
                                        <li>
                                            <?php
                                            if( file_exists( $datadb['favicon'] ) ){
                                                echo '<img src="'.base_url().$datadb['favicon'].'"/>';
                                            }else{
                                                echo '<div class="no-image"><span class="glyphicon glyphicon-picture"></span></div>';
                                            }
                                            ?>
                                        </li>
                                    </ul>
                                </div>
                                  <input type="file" name="fileico"/>
                                  <div class="notif-info">
                                    <p>File image must be in extention <b>(png)</b> </p>
                                    <p>File image must be in size <b>( 32 x  32 )</b> </p>
                                  </div>
                              </div>
                            </div>
                      
                            <div class="control-group">
                              <label class="control-label">Google Analytics</label>
                              <div class="controls">
                                <textarea rows="10" name="google_analytics"><?= $datadb['google_analytics'] ?></textarea>
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
    </div>
    <!-- End Container -->
