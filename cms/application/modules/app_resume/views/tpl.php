<?php if( $this->initial_template == '' ): ?>
<div class="md-card uk-margin-medium-bottom">
    <div class="md-card-content">
        <div class="uk-grid" data-uk-grid-margin>
            <div class="uk-width-medium-1-2">
                <div class="md-card">
                    <div class="md-card-content">
                        <table id="dt_scroll" class="uk-table" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th class="uk-text-center">ID</th>
                                    <th>School</th>
                                    <th>Angkatan</th>
                                    <th>Deskripsi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th class="uk-text-center">ID</th>
                                    <th>School</th>
                                    <th>Angkatan</th>
                                    <th>Deskripsi</th>
                                    <th>Aksi</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php 
                                    if( count($datadb) > 0 ){
                                        foreach($datadb as $row){  
                                            echo '                    
                                                <tr>
                                                    <td class="uk-text-center"><span class="uk-text-small uk-text-muted uk-text-nowrap">'.$row['resume_id'].'</span>
                                                    </td>
                                                    <td>
                                                        <a href="'.base_url($this->app_name).'/edit/'.$row['resume_id'].'">'.$row['school'].'</a>
                                                    </td>
                                                    <td>
                                                        '.character_limiter($row['angkatan'], 10).'
                                                    </td>
                                                    <td>
                                                        '.character_limiter($row['deskripsia'], 10).'
                                                    </td>
                                                    <td>
                                                        <a href="'.base_url($this->app_name).'/remove/'.$row['resume_id'].'">remove</a> | <a href="'.base_url($this->app_name).'/edit/'.$row['resume_id'].'">Edit</a>
                                                    </td>
                                                    
                                                </tr>';
                                        }
                                    }else{
                                            echo '
                                                <tr>
                                                    <td class="uk-text-center"><span class="uk-text-small uk-text-muted uk-text-nowrap"></span></td>
                                                    <td></td> 
                                                    <td><span class="uk-text-danger">Null</span></td>  
                                                    <td></td>   
                                                </tr>';
                                        }
                                    ?>
                            </tbody>
                        </table>
                        <a class="md-btn md-btn-primary" style="margin-top: 10px" href="<?= base_url('app_resume/addSchool') ?>">Add</a>
                    </div>
                </div>
            </div>
            <div class="uk-width-medium-1-2">
                <div class="md-card">
                    <div class="md-card-content">
                        <table id="dt_scroll" class="uk-table" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th class="uk-text-center">ID</th>
                                    <th>Experience</th>
                                    <th>date</th>
                                    <th>Deskripsi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th class="uk-text-center">ID</th>
                                    <th>Experience</th>
                                    <th>date</th>
                                    <th>Deskripsi</th>
                                    <th>Aksi</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php 
                                    if( count($datadb2) > 0 ){
                                        foreach($datadb2 as $row){  
                                            echo '                    
                                                <tr>
                                                    <td class="uk-text-center"><span class="uk-text-small uk-text-muted uk-text-nowrap">'.$row['resumee_id'].'</span>
                                                    </td>
                                                    <td>
                                                        <a href="'.base_url($this->app_name).'/edit/'.$row['resumee_id'].'">'.$row['experience'].'</a>
                                                    </td>
                                                    <td>
                                                        '.character_limiter($row['date'], 10).'
                                                    </td>
                                                    <td>
                                                        '.character_limiter($row['deskripsi'], 10).'
                                                    </td>
                                                    <td>
                                                        <a href="'.base_url($this->app_name).'/removeExperience/'.$row['resumee_id'].'">remove</a> | <a href="'.base_url($this->app_name).'/editExperience/'.$row['resumee_id'].'">Edit</a>
                                                    </td>
                                                    
                                                </tr>';
                                        }
                                    }else{
                                            echo '
                                                <tr>
                                                    <td class="uk-text-center"><span class="uk-text-small uk-text-muted uk-text-nowrap"></span></td>
                                                    <td></td> 
                                                    <td><span class="uk-text-danger">Null</span></td>  
                                                    <td></td>   
                                                </tr>';
                                        }
                                ?>
                            </tbody>
                        </table>
                        <a class="md-btn md-btn-primary" style="margin-top: 10px" href="<?= base_url('app_resume/addExperience') ?>">Add</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- add -->
        <?php elseif( $this->initial_template == 'addSchool' ): ?>
        <div class="md-card">
            <div class="md-card-content">
                <form action="<?= base_url( $this->app_name ).'/addSchool/'.$this->initial_id ?>" method="post" enctype="multipart/form-data">
                    <h3>SCHOOL</h3>
                    <label>SCHOOL</label>
                    <input type="text" class="input-count md-input" value="" maxlength="60" name="school" required>
                    <label>ANGKATAN</label>
                    <input type="text" class="input-count md-input" value="" maxlength="60" name="angkatan" required>
                    <label>DESKRIPSI</label>
                    <textarea class="md-input" id="product_edit_description_control" name="deskripsia" cols="30" rows="1" required></textarea>
                    <button type="submit" class="md-btn md-btn-primary">Save</button>
                    <br>
                </form>
            </div>
        </div>
        <?php elseif( $this->initial_template == 'addExperience' ): ?>
        <div class="md-card">
            <div class="md-card-content">
                <form action="<?= base_url( $this->app_name ).'/addExperience/'.$this->initial_id ?>" method="post" enctype="multipart/form-data">
                    <h3>SCHOOL</h3>
                    <label>SCHOOL</label>
                    <input type="text" class="input-count md-input" value="" maxlength="60" name="experience" required>
                    <label>ANGKATAN</label>
                    <input type="text" class="input-count md-input" value="" maxlength="60" name="date" required>
                    <label>DESKRIPSI</label>
                    <textarea class="md-input" id="product_edit_description_control" name="deskripsi" cols="30" rows="1" required></textarea>
                    <button type="submit" class="md-btn md-btn-primary">Save</button>
                    <br>
                </form>
            </div>
        </div>
        <!-- edit -->
        <?php elseif( $this->initial_template == 'edit' ): ?>
        <div class="md-card">
            <div class="md-card-content">
                <?php if( $this->initial_template == '' || $this->initial_template == 'edit'   ): ?>
                <form action="<?= base_url( $this->app_name ).'/edit/'.$this->initial_id ?>" method="post" class="uk-form-stacked" enctype="multipart/form-data">
                    <h3>SCHOOL</h3>
                    <label>SCHOOL</label>
                    <input type="text" class="input-count md-input" value="<?= $datadb['school'] ?>" maxlength="60" name="school">
                    <label>ANGKATAN</label>
                    <input type="text" class="input-count md-input" value="<?= $datadb['angkatan'] ?>" maxlength="60" name="angkatan">
                    <label>DESKRIPSI</label>
                    <textarea class="md-input" id="product_edit_description_control" name="deskripsia" cols="30" rows="1"><?= $datadb['deskripsia'] ?>
                    </textarea>
                    <button href="<?= base_url('app_resume/edit') ?>" type="submit" class="md-btn md-btn-primary">Save</button>
                </form>
                <?php endif;?>
            </div>
        </div>
        <?php elseif( $this->initial_template == 'editExperience' ): ?>
        <div class="md-card">
            <div class="md-card-content">
                <?php if( $this->initial_template == '' || $this->initial_template == 'editExperience'   ): ?>
                <form action="<?= base_url( $this->app_name ).'/editExperience/'.$this->initial_id ?>" method="post" class="uk-form-stacked" enctype="multipart/form-data">
                    <h3>SCHOOL</h3>
                    <label>SCHOOL</label>
                    <input type="text" class="input-count md-input" value="<?= $datadb2['experience'] ?>" maxlength="60" name="experience">
                    <label>ANGKATAN</label>
                    <input type="text" class="input-count md-input" value="<?= $datadb2['date'] ?>" maxlength="60" name="date">
                    <label>DESKRIPSI</label>
                    <textarea class="md-input" id="product_edit_description_control" name="deskripsi" cols="30" rows="1"><?= $datadb2['deskripsi'] ?></textarea>
                    <button href="<?= base_url('app_resume/editExperience') ?>" type="submit" class="md-btn md-btn-primary">Save</button>
                </form>
                <?php endif;?>
            </div>
        </div>
        <?php endif ?>
    </div>
</div>
