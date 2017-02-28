<div class="md-card">
    <div class="md-card-content">
        <?php if( $this->initial_template == '' ): ?>
        <div class="uk-grid">
            <div class="uk-width-medium">
                <h3 class="heading_a uk-margin-bottom">My Blog</h3>
            </div>
        </div>
        <div class="uk-grid">
            <div class="uk-width-medium-2-6 uk-push-1-6">
                <a class="md-btn md-btn-primary" href="<?= base_url($this->app_name) ?>/addCat"><span class="uk-icon-plus" style="color: #fff; !important"> Tambah Kategori Blog</span></a>
            </div>
            <div class="uk-width-medium-2-6 uk-push-1-6">
                <a class="md-btn md-btn-primary" href="<?= base_url($this->app_name) ?>/add"><span class="uk-icon-plus" style="color: #fff; !important"> Tambah Blog</span></a>
            </div>
        </div>
        <div class="gap"></div>
        <table class="uk-table uk-table-align-vertical uk-table-nowrap tablesorter tablesorter-altair" id="ts_issues">
            <thead>
                <tr>
                    <th class="uk-text-center">ID</th>
                    <th>Title</th>
                    <th>Kategori</th>
                    <th>Description</th>
                    <th>image</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>aksi</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th class="uk-text-center">ID</th>
                    <th>Title</th>
                    <th>Kategori</th>
                    <th>Description</th>
                    <th>image</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>aksi</th>
                </tr>
            </tfoot>
            <tbody>
                <?php 
                        if( count($datadb3) > 0 ){
                            foreach($datadb3 as $row){  
                                echo '                    
                                    <tr>
                                        <td class="uk-text-center"><span class="uk-text-small uk-text-muted uk-text-nowrap">'.$row['blog_id'].'</span>
                                        </td>
                                        <td>
                                            <a href="'.base_url($this->app_name).'/edit/'.$row['blog_id'].'">'.$row['judul'].'</a>
                                        </td>
                                        <td>
                                            '.$row['blog_category_name'].'
                                        </td>
                                        <td>
                                            '.$row['isi_blog'].'
                                        </td>
                                        <td>
                                            <img src="'.$row['file'].'"/>
                                        </td>
                                        <td>
                                            '.$row['date'].'
                                        </td>
                                        <td>
                                            '.$row['status'].'
                                        </td>
                                        <td>
                                         <a href="'.base_url($this->app_name).'/remove/'.$row['blog_id'].'"> <i class="md-icon material-icons">&#xE146;</i> </a>
                                        <td>
                                    </tr>';
                            }
                        }else{
                                echo '
                                    <tr>
                                        <td class="uk-text-center"><span class="uk-text-small uk-text-muted uk-text-nowrap"></span></td>
                                        <td>
                                           
                                        </td>
                                        <td><span class="uk-text-danger">Tidak ada Album</span></td>
                                        <td></td>                                        
                                    </tr>';
                            }
                        ?>
            </tbody>
        </table>
        <?php elseif( $this->initial_template == 'add' ): ?>
        <div id="md-card">
            <h1 id="product_edit_name">Tambah Blog</h1>
        </div>
        <form action="<?= base_url('app_blog/add' ) ?>" method="post" enctype="multipart/form-data">
            <div class="uk-grid" data-uk-grid-margin data-uk-grid-match="{target:'.md-card'}">
                <div class="uk-width-medium-8-10">
                    <div class="md-card">
                        <div class="md-card-content">
                            <label>Judul Blog</label>
                            <input type="text" name="judul" class="md-input">
                        </div>
                    </div>
                </div>
                <div class="uk-width-medium-2-10">
                    <div class="md-card">
                        <div class="md-card-content">
                            <div class="uk-float-right">
                                <input type="checkbox" name="status" value="publish" data-switchery checked id="product_edit_active_control" />
                            </div>
                            <label class="uk-display-block uk-margin-small-top" for="product_edit_active_control">Publish</label>
                        </div>
                    </div>
                </div>
                <?php
                    if(isset($_POST['name']) && 
                    $_POST['name'] == 'publish') 
                    
                ?>
            </div>
            <div class="uk-grid" data-uk-grid-margin data-uk-grid-match="{target:'.md-card'}">
                <div class="uk-width-xLarge-8-10  uk-width-large-7-10">
                    <div class="md-card">
                        <div class="md-card-content">
                            <div class="uk-grid" data-uk-grid-margin>
                                <div class="uk-width-medium-1-3 uk-width-large-1-2">
                                    <select id="select_demo_1" name="blog_category_id" data-md-selectize>
                                        <option value="">-- Pilih Kategori --</option>
                                        <optgroup label="Group 1">
                                        <?php 
                                            if( count($datadb2) > 0 ){
                                                foreach($datadb2 as $row){  
                                                    echo '<option value="'.$row['blog_category_id'].'">'.$row['blog_category_name'].'</option>';
                                                }
                                            }else{echo "salah";}
                                        ?>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <div class="uk-grid">
                                <div class="uk-width-medium">
                                    <label>Description</label>
                                    <textarea cols="30" rows="4" class="md-input" name="isi_blog"></textarea>
                                </div>
                            </div>
                            <div class="uk-grid">
                                <div class="uk-width-large-1-2 uk-width-medium-1-1">
                                    <div class="uk-input-group">
                                        <span class="uk-input-group-addon"><i class="uk-input-group-icon uk-icon-calendar"></i></span>
                                        <label for="uk_dp_1">Select date</label>
                                        <input name="date" class="md-input" type="text" id="uk_dp_1" data-uk-datepicker="{format:'YYYY.MM.DD'}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-width-xLarge-2-10 uk-width-large-3-10 ">
                    <div class="md-card">
                        <div class="md-card-content">
                            <div class="md-card-toolbar">
                                <div class="md-card-toolbar-actions">
                                    <i class="md-icon material-icons">&#xE146;</i>
                                </div>
                                <h3 class="md-card-toolbar-heading-text">
                                Photos
                            </h3>
                            </div>
                            <div class="md-card-content uk-input-group">
                                <input type="file" id="input-file-b" class="md-input" name="file" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-grid">
                <div class="uk-width-medium-1-6 uk-push-2-6">
                    <a class="md-btn md-btn-danger" href="#">Delete</a>
                </div>
                <div class="uk-width-medium-1-6 uk-push-2-6">
                    <button href="<?= base_url('app_blog/add' ) ?>" type="submit" class="md-btn md-btn-primary" style="margin-left: -90px;">Save</button>
                </div>
            </div>
        </form>

        <?php elseif( $this->initial_template == 'edit' ): ?>
        <div id="md-card">
            <h1 id="product_edit_name">Edit Blog</h1>
        </div>
        <form action="<?= base_url( $this->app_name ).'/edit/'.$this->initial_id ?>" method="post" enctype="multipart/form-data">
            <div class="uk-grid" data-uk-grid-margin data-uk-grid-match="{target:'.md-card'}">
                <div class="uk-width-medium-8-10">
                    <div class="md-card">
                        <div class="md-card-content">
                            <label>Judul Blog</label>
                            <input type="text" name="judul" class="md-input" value="<?= $datadb15['judul'] ?>">
                        </div>
                    </div>
                </div>
                <div class="uk-width-medium-2-10">
                    <div class="md-card">
                        <div class="md-card-content">
                            <div class="uk-float-right">
                                <input type="checkbox" name="status" data-switchery  id="product_edit_active_control"
                                <?php if ($datadb15['status'] == 'publish') 
                                    {
                                        echo "checked";
                                    }
                                ?>
                                     
                                  />
                            </div>
                            <label class="uk-display-block uk-margin-small-top" for="product_edit_active_control">Publish</label>
                        </div>
                    </div>
                </div>
                <?php
                    if(isset($_POST['name']) && 
                    $_POST['name'] == 'publish') 
                    
                ?>
            </div>
            <div class="uk-grid" data-uk-grid-margin data-uk-grid-match="{target:'.md-card'}">
                <div class="uk-width-xLarge-8-10  uk-width-large-7-10">
                    <div class="md-card">
                        <div class="md-card-content">
                            <div class="uk-grid" data-uk-grid-margin>
                                <div class="uk-width-medium-1-3 uk-width-large-1-2">
                                    <select id="select_demo_1" name="blog_category_id"  data-md-selectize>
                                        <option value="<?= $datadb15['blog_category_id'] ?>" ><?= $datadb15['blog_category_name'] ?></option>
                                        <?php 
                                            if( count($datadb2) > 0 ){
                                                foreach($datadb2 as $row){  
                                                    echo '<option value="'.$row['blog_category_id'].'">'.$row['blog_category_name'].'</option>';
                                                }
                                            }else{echo "salah";}
                                        ?>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <div class="uk-grid">
                                <div class="uk-width-medium">
                                    <label>Description</label>
                                    <textarea cols="30" rows="4" class="md-input" name="isi_blog" value=""><?= $datadb15['isi_blog'] ?></textarea>
                                </div>
                            </div>
                            <div class="uk-grid">
                                <div class="uk-width-large-1-2 uk-width-medium-1-1">
                                    <div class="uk-input-group">
                                        <span class="uk-input-group-addon"><i class="uk-input-group-icon uk-icon-calendar"></i></span>
                                        <label for="uk_dp_1">Select date</label>
                                        <input name="date" class="md-input" type="text" id="uk_dp_1" data-uk-datepicker="{format:'YYYY.MM.DD'}" value="<?= $datadb15['date'] ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-width-xLarge-2-10 uk-width-large-3-10 ">
                    <div class="md-card">
                        <div class="md-card-content">
                            <div class="md-card-toolbar">
                                <div class="md-card-toolbar-actions">
                                    <i class="md-icon material-icons">&#xE146;</i>
                                </div>
                                <h3 class="md-card-toolbar-heading-text">
                                Photos
                            </h3>
                            </div>
                            <div class="md-card-content">
                                <div class="uk-margin-bottom uk-text-center uk-position-relative">
                                    <button type="button" class="uk-modal-close uk-close uk-close-alt uk-position-absolute"></button>
                                    <img name="file" src="<?= base_url( $datadb15['file'] ) ?>" alt="" class="img_medium"/>
                                    <input type="file">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-grid">
                <div class="uk-width-medium-1-6 uk-push-2-6">
                    <a class="md-btn md-btn-danger" href="#">Delete</a>
                </div>
                <div class="uk-width-medium-1-6 uk-push-2-6">
                    <button href="<?= base_url('app_blog/edit' ) ?>" type="submit" class="md-btn md-btn-primary" style="margin-left: -90px;">Save</button>
                </div>
            </div>
        </form>

        <div class="md-card">
            <!-- Kategori -->
            <?php elseif( $this->initial_template == 'indexCat' ): ?>
            <table class="uk-table uk-table-align-vertical uk-table-nowrap tablesorter tablesorter-altair" id="ts_issues">
                <thead>
                    <tr>
                        <th class="uk-text-center">ID</th>
                        <th>Kategori</th>
                        <th>Banyak Kategori</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th class="uk-text-center">ID</th>
                        <th>Kategori</th>
                        <th>Banyak Kategori</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php 
                        if( count($datadb) > 0 ){
                            foreach($datadb as $row){  
                                echo '                    
                                    <tr>
                                        <td class="uk-text-center"><span class="uk-text-small uk-text-muted uk-text-nowrap">'.$row['blog_category_id'].'</span>
                                        </td>
                                        <td>
                                            <a href="'.base_url($this->app_name).'/editCat/'.$row['blog_category_id'].'">'.$row['blog_category_name'].'</a>
                                        </td>
                                        <td>
                                            
                                        </td>
                                        <td>
                                         <a href="'.base_url($this->app_name).'/remove/'.$row['blog_category_id'].'"> <i class="md-icon material-icons">&#xE146;</i> </a>
                                        <td>
                                    </tr>';
                            }
                        }else{
                                echo '
                                    <tr>
                                        <td class="uk-text-center"><span class="uk-text-small uk-text-muted uk-text-nowrap"></span></td>
                                        <td>
                                           
                                        </td>
                                        <td><span class="uk-text-danger">Tidak ada Album</span></td>
                                        <td></td>                                        
                                    </tr>';
                            }
                        ?>
                </tbody>
            </table>
            <?php elseif( $this->initial_template == 'addCat' ): ?>
            <div id="page_heading">
                <h1 id="product_edit_name">Tambah Kategori</h1>
            </div>
            <div id="page_content_inner">
                <form action="<?= base_url('app_blog/addCat' ) ?>" method="post" enctype="multipart/form-data">
                    <div class="uk-form-row">
                        <label>Kategori</label>
                        <input type="text" class="md-input" required name="blog_category_name" />
                    </div>
                    <br>
                    <div class="uk-grid">
                        <div class="uk-width-medium-1-6 uk-push-5-6">
                            <a class="md-btn md-btn-danger" href="#">Delete</a>
                        </div>
                        <div class="uk-width-medium-1-6 uk-push-5-6">
                            <button href="<?= base_url('app_portfolio/add') ?>" type="submit" class="md-btn md-btn-primary" style="margin-left: -80px;">Save</button>
                        </div>
                    </div>
                </form>
            </div>
            <?php elseif( $this->initial_template == 'editCat' ): ?>
            <div id="page_heading">
                <h1 id="product_edit_name">Tambah Kategori</h1>
            </div>
            <div id="page_content_inner">
                <form action="<?= base_url('app_blog/editCat' ) ?>" method="post" enctype="multipart/form-data">
                    <div class="uk-form-row">
                        <label>Kategori</label>
                        <input type="text" class="md-input" required name="blog_category_name" value="<?= $datadb['blog_category_name']?>" />
                    </div>
                    <br>
                    <div class="uk-grid">
                        <div class="uk-width-medium-1-6 uk-push-5-6">
                            <a class="md-btn md-btn-danger" href="#">Delete</a>
                        </div>
                        <div class="uk-width-medium-1-6 uk-push-5-6">
                            <button href="<?= base_url('app_blog/editCat') ?>" type="submit" class="md-btn md-btn-primary" style="margin-left: -80px;">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
