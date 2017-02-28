
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
                              <button type="button" class="btn btn-success exlink" data-url="<?= base_url('app_blog_category').'/add' ?>"><span class="glyphicon glyphicon-plus"></span> New Entry</button>
                          <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div  id="page-content">          
                      <form action="<?= base_url( $this->app_name ).'/editProfile/' ?>" method="post"  enctype="multipart/form-data">
                        <h5 class="text-info">Form Edit</h5>
                        <hr/>
                        <!-- OUTPUT MESSAGE -->
                        <?= $this->messagecontroll->showMessage() ?>
                        <!-- OUTPUT MESSAGE -->
                        <div class="control-group">
                          <label class="control-label">Image Profile</label>
                          <div class="controls">
                            <div id="result-upload">
                                <ul>
                                    <li>
                                      <?php
                                        if( file_exists( getThumbnailsImage($datadb['image'], $datadb['extention']) ) ){
                                            echo '<img src="'.base_url().getThumbnailsImage($datadb['image'], $datadb['extention']).'"/>';
                                        }else{
                                            echo '<div class="no-image"><span class="glyphicon glyphicon-picture"></span></div>';
                                        }
                                       ?>
                                       </li>
                                </ul>
                            </div> 
                            <input type="file" name="fileupl"  placeholder="Empty"/>
                          </div>
                        </div>
                        <div class="control-group">
                          <label class="control-label">Fullname</label>
                          <div class="controls">
                              <input type="text" name="nickname" value="<?= rebackPost('nickname', $datadb['nickname']) ?>" placeholder="Empty"/>
                          </div>
                        </div>
                        <div class="control-group">
                          <label class="control-label">Username / Email ID</label>
                          <div class="controls">
                            <input type="text" name="username" value="<?= rebackPost('username', $datadb['username']) ?>" placeholder="Empty"/>
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
                          <button type="reset" class="btn">Cancel</button>
                          <button type="submit" class="btn btn-info">Update</button>
                        </div>
                      </form>
                </div>
            </div>
        </div>

    <!-- End Container -->
