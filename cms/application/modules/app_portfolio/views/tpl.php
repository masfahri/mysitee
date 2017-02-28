<div class="md-card">
    <div class="md-card-content">
        <?php if( $this->initial_template == '' ): ?>
        <div class="uk-grid">
            <div class="uk-width-medium">
                <h3 class="heading_a uk-margin-bottom">My Portfolio</h3>
            </div>
        </div>
        <div class="uk-grid">
            <div class="uk-width-medium-2-6 uk-push-5-6">
                <a class="md-btn md-btn-primary" href="<?= base_url($this->app_name) ?>/add"><span class="uk-icon-plus" style="color: #fff; !important"> Tambah</span></a>
            </div>
        </div>
        <div class="gap"></div>
        <table class="uk-table uk-table-align-vertical uk-table-nowrap tablesorter tablesorter-altair" id="ts_issues">
            <thead>
                <tr>
                    <th class="uk-text-center">ID</th>
                    <th>Title</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>image</th>
                    <th>Date</th>
                    <th>aksi</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th class="uk-text-center">ID</th>
                    <th>Title</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>image</th>
                    <th>Date</th>
                    <th>aksi</th>
                </tr>
            </tfoot>
            <tbody>
                <?php 
                    if( count($datadb) > 0 ){
                        foreach($datadb as $row){  
                            echo '                    
                                <tr>
                                    <td class="uk-text-center"><span class="uk-text-small uk-text-muted uk-text-nowrap">'.$row['portfolio_id'].'</span>
                                    </td>
                                    <td>
                                        <a href="'.base_url($this->app_name).'/edit/'.$row['portfolio_id'].'">'.$row['title'].'</a>
                                    </td>
                                    <td>
                                        '.character_limiter($row['name'], 20).'
                                    </td>
                                    <td>
                                        '.character_limiter($row['deskripsi'], 20).'
                                    </td>
                                    <td>
                                        <img src="'.$row['file'].'" class="img_medium"></td>
                                    
                                    <td>'.date ("d-M-Y",strtotime($row['tanggal'])).'</td>
                                    <td>
                                     <a href="'.base_url($this->app_name).'/remove/'.$row['portfolio_id'].'"> <i class="md-icon material-icons">&#xE146;</i> </a>
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
        <div id="page_heading">
            <h1 id="product_edit_name">Add Portfolio</h1>
            <span class="uk-text-muted uk-text-upper uk-text-small" id="product_edit_sn"></span>
        </div>
        <div id="page_content_inner">
            <form action="<?= base_url('app_portfolio/add' ) ?>" method="post" enctype="multipart/form-data">
                <div class="uk-grid uk-grid-medium" data-uk-grid-margin>
                    <div class="uk-width-xLarge-2-10 uk-width-large-3-10">
                        <div class="md-card">
                            <div class="md-card-content">
                                <div class="uk-float-right">
                                    <input type="checkbox" data-switchery checked id="product_edit_active_control" />
                                </div>
                                <label class="uk-display-block uk-margin-small-top" for="product_edit_active_control">Active</label>
                            </div>
                        </div>
                        <div class="md-card">
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
                        <div class="md-card">
                            <div class="md-card-toolbar">
                                <h3 class="md-card-toolbar-heading-text">
                                    Data
                                </h3>
                            </div>
                            <div class="md-card-content">
                                <div class="uk-form-row">
                                    <div class="uk-input-group">
                                        <span class="uk-input-group-addon">
                                            <i class="uk-icon-usd"></i>
                                        </span>
                                        <label for="product_edit_price_control">Price</label>
                                        <input type="text" class="md-input" id="product_edit_price_control" value="540.00" />
                                    </div>
                                </div>
                                <div class="uk-form-row">
                                    <div class="uk-input-group">
                                        <span class="uk-input-group-addon">%</span>
                                        <label for="product_edit_tax_control">Tax</label>
                                        <input type="text" class="md-input" id="product_edit_tax_control" value="18" />
                                    </div>
                                </div>
                                <div class="uk-form-row">
                                    <div class="uk-input-group">
                                        <span class="uk-input-group-addon">
                                            <i class="uk-icon-cubes"></i>
                                        </span>
                                        <label for="product_edit_quantity_control">Quantity</label>
                                        <input type="text" class="md-input" id="product_edit_quantity_control" value="120" />
                                    </div>
                                </div>
                                <div class="uk-form-row">
                                    <div class="uk-input-group">
                                        <span class="uk-input-group-addon">
                                            <i class="uk-icon-barcode"></i>
                                        </span>
                                        <label for="product_edit_sku_control">SKU</label>
                                        <input type="text" class="md-input" id="product_edit_sku_control" value="4319572394" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-xLarge-8-10  uk-width-large-7-10">
                        <div class="md-card">
                            <div class="md-card-toolbar">
                                <h3 class="md-card-toolbar-heading-text">
                                    Details
                                </h3>
                            </div>
                            <div class="md-card-content large-padding">
                                <div class="uk-grid uk-grid-divider uk-grid-medium" data-uk-grid-margin>
                                    <div class="uk-width-large-1-2">
                                        <div class="uk-form-row">
                                            <label for="product_edit_name_control">Product Type</label>
                                            <input type="text" value="" class="md-input" id="product_edit_name_control" name="title" value="Galaxy S6 edge"/>
                                        </div>
                                        <div class="uk-form-row">
                                            <label for="product_edit_manufacturer_control">Product Name</label>
                                            <input value="" type="text" class="md-input" id="product_edit_manufacturer_control" name="name"/>
                                        </div>
                                        <div class="uk-form-row">
                                            <div class="md-input-wrapper"><label for="uk_dp_1">Select date</label><input class="md-input" type="text" data-uk-datepicker="{format:'YYYY-MM-DD'}" value="" name="tanggal"><span class="md-input-bar" name="tanggal" ></span></div>
                                        </div>
                                    </div>
                                    <div class="uk-width-large-1-2">
                                        <div class="uk-form-row">
                                            <label for="product_edit_description_control">Description</label>
                                            <textarea class="md-input" id="product_edit_description_control" name="deskripsi" cols="30" rows="4"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="md-card">
                <div class="uk-grid">
                    <div class="uk-width-medium-1-6 uk-push-2-6">
                        <a class="md-btn md-btn-danger" href="#">Delete</a>
                    </div>
                    <div class="uk-width-medium-1-6 uk-push-2-6">
                        <button href="<?= base_url('app_portfolio/add') ?>" type="submit" class="md-btn md-btn-primary" style="margin-left: -90px;">Save</button>
                    </div>
                </div>
                </div>

            </form>
        </div>

    <?php elseif( $this->initial_template == 'edit' ): ?>
        <div id="page_heading">
            <h1 id="product_edit_name"><?= $datadb['title']?></h1>
            <span class="uk-text-muted uk-text-small" id="product_edit_sn"><?= $datadb['name']?></span>
        </div>
        <div id="page_content_inner">
            <form action="<?= base_url( $this->app_name ).'/edit/'.$this->initial_id ?>" method="post" enctype="multipart/form-data">
                <div class="uk-grid uk-grid-medium" data-uk-grid-margin>
                    <div class="uk-width-xLarge-2-10 uk-width-large-3-10">
                        <div class="md-card">
                            <div class="md-card-content">
                                <div class="uk-float-right">
                                    <input type="checkbox" data-switchery checked id="product_edit_active_control" />
                                </div>
                                <label class="uk-display-block uk-margin-small-top" for="product_edit_active_control">Active</label>
                            </div>
                        </div>
                        <div class="md-card">
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
                                    <img name="file" src="<?= base_url( $datadb['file'] ) ?>" alt="" class="img_medium"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-xLarge-8-10  uk-width-large-7-10">
                        <div class="md-card">
                            <div class="md-card-toolbar">
                                <h3 class="md-card-toolbar-heading-text">
                                    Details
                                </h3>
                            </div>
                            <div class="md-card-content large-padding">
                                <div class="uk-grid uk-grid-divider uk-grid-medium" data-uk-grid-margin>
                                    <div class="uk-width-large-1-2">
                                        <div class="uk-form-row">
                                            <label for="product_edit_name_control">Product Type</label>
                                            <input type="text" value="<?= $datadb['title'] ?>" class="md-input" id="product_edit_name_control" name="title" value="Galaxy S6 edge"/>
                                        </div>
                                        <div class="uk-form-row">
                                            <label for="product_edit_manufacturer_control">Product Name</label>
                                            <input value="<?= $datadb['name'] ?>" type="text" class="md-input" id="product_edit_manufacturer_control" name="name"/>
                                        </div>
                                        <div class="uk-form-row">
                                            <label for="uk_dp_1">Select date</label><input class="md-input" type="text" data-uk-datepicker="{format:'YYYY-MM-DD'}" value="<?= $datadb['tanggal'] ?>" name="tanggal"><span class="md-input-bar" name="tanggal" ></span>
                                        </div>
                                    </div>
                                    <div class="uk-width-large-1-2">
                                        <div class="uk-form-row">
                                            <label for="product_edit_description_control">Description</label>
                                            <textarea class="md-input" id="product_edit_description_control" name="deskripsi" cols="30" rows="4"><?= $datadb['deskripsi'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="uk-grid">
                    <div class="uk-width-medium-3-6 uk-push-3-6">
                        <!-- <button class="md-btn md-btn-primary md-btn-wave-light waves-effect waves-button waves-light">Save</button> -->
                        <button href="<?= base_url('app_portfolio/edit') ?>" type="submit" class="md-btn md-btn-primary" style="margin-left: -80px;" >Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php endif; ?>

