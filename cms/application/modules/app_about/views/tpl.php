<div class="md-card">
    <div class="md-card-content">
        <form action="<?= base_url( $this->app_name )?>" method="post" enctype="multipart/form-data">
            <?php if( $this->initial_template == '' ): ?>
                <label>Description</label>
                <textarea cols="30" rows="4" class="md-input selecize_init"  name="deskripsi" value="" style="overflow-x: hidden; word-wrap: break-word; height: 169px;"><?= $datadb['deskripsi'] ?></textarea>
                <div class="uk-grid">
                    <div class="uk-width-1-2">
                        <label>Name</label>
                        <input type="text" class="input-count md-input"  value="<?= $datadb['name'] ?>" maxlength="60" name="name">
                        <label>Citizenship</label>
                        <input type="text" class="input-count md-input"  value="<?= $datadb['citizenship'] ?>" maxlength="60" name="citizenship">
                        <label>Residence</label>
                        <input type="text" class="input-count md-input"  value="<?= $datadb['residence'] ?>" maxlength="60" name="residence">  
                    </div>    
                    <div class="uk-width-1-2">
                        <label>Age</label>
                        <input type="text" class="input-count md-input"  value="<?= $datadb['age'] ?>" maxlength="60" name="age">
                        <label>Job</label>
                        <input type="text" class="input-count md-input"  value="<?= $datadb['job'] ?>" maxlength="60" name="job">
                        <label>Hometown</label>
                        <input type="text" class="input-count md-input"  value="<?= $datadb['hometown'] ?>" maxlength="60" name="hometown">
                    </div>
                </div><br>
                    <div id="file_upload-drop" class="uk-file-upload">
                        <p class="uk-text">Drop file to upload</p>
                        <p class="uk-text-muted uk-text-small uk-margin-small-bottom">or</p>
                        <a class="uk-form-file md-btn">choose file<input id="file_upload-select" type="file"></a>
                    </div>
                    <div id="file_upload-progressbar" class="uk-progress uk-hidden">
                        <div class="uk-progress-bar" style="width:0">0%</div>
                    </div><br>
                <div class="uk-grid">
                    <div class="uk-width-1-3">
                        <label>Projects </label>
                        <input type="text" class="input-count md-input"  value="<?= $datadb['projects'] ?>" maxlength="60" name="projects">
                    </div>
                    <div class="uk-width-1-3">
                        <label>Any </label>
                        <input type="text" class="input-count md-input"  value="<?= $datadb['any'] ?>" maxlength="60" name="any">
                    </div>
                    <div class="uk-width-1-3">
                        <label>Any </label>
                        <input type="text" class="input-count md-input"  value="<?= $datadb['anyy'] ?>" maxlength="60" name="anyy">
                    </div>
                </div>
                <div class="uk-grid uk-grid-width-small-1-3 uk-grid-width-large-1-2 uk-grid-width-xlarge-2-6 uk-text-center uk-sortable sortable-handler" id="dashboard_sortable_cards" data-uk-sortable data-uk-grid-margin>
                <div>
                    <div class="md-card">
                        <div class="md-card-toolbar">
                            <div class="md-card-toolbar-actions">
                                <i class="md-icon material-icons md-card-fullscreen-activate">&#xE5D0;</i>
                                <i class="md-icon material-icons md-card-toggle">&#xE316;</i>
                            </div>
                            <h3 class="md-card-toolbar-heading-text">
                                <?= $datadb['servicea'] ?>
                            </h3>
                        </div>
                        <div class="md-card-content">
                            <label>Title Service</label>
                            <input name="servicea" value="<?= $datadb['servicea'] ?>" class="md-input"><span class="md-input-bar"></span>
                            <br/>
                            <label>Description Service</label>
                            <textarea cols="30" rows="4" class="md-input selecize_init"  name="deskripsia" value="" style="overflow-x: hidden; word-wrap: break-word; height: 169px;"><?= $datadb['deskripsia'] ?></textarea>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="md-card">
                        <div class="md-card-toolbar">
                            <div class="md-card-toolbar-actions">
                                <i class="md-icon material-icons md-card-fullscreen-activate">&#xE5D0;</i>
                                <i class="md-icon material-icons md-card-toggle">&#xE316;</i>
                            </div>
                            <h3 class="md-card-toolbar-heading-text">
                                <?= $datadb['serviceb'] ?>
                            </h3>
                        </div>
                        <div class="md-card-content">
                            <label>Title Service</label>
                            <input name="serviceb" value="<?= $datadb['serviceb'] ?>" class="md-input"><span class="md-input-bar"></span>
                            <br/>
                            <label>Description Service</label>
                            <textarea cols="30" rows="4" class="md-input selecize_init"  name="deskripsib" value="" style="overflow-x: hidden; word-wrap: break-word; height: 169px;"><?= $datadb['deskripsib'] ?></textarea>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="md-card">
                        <div class="md-card-toolbar">
                            <div class="md-card-toolbar-actions">
                                <i class="md-icon material-icons md-card-fullscreen-activate">&#xE5D0;</i>
                                <i class="md-icon material-icons md-card-toggle">&#xE316;</i>
                            </div>
                            <h3 class="md-card-toolbar-heading-text">
                                <?= $datadb['servicec'] ?>
                            </h3>
                        </div>
                        <div class="md-card-content">
                            <label>Title Service</label>
                            <input name="servicec" value="<?= $datadb['servicec'] ?>" class="md-input"><span class="md-input-bar"></span>
                            <br/>
                            <label>Description Service</label>
                            <textarea cols="30" rows="4" class="md-input selecize_init"  name="deskripsic" value="" style="overflow-x: hidden; word-wrap: break-word; height: 169px;"><?= $datadb['deskripsic'] ?></textarea>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="md-card">
                        <div class="md-card-toolbar">
                            <div class="md-card-toolbar-actions">
                                <i class="md-icon material-icons md-card-fullscreen-activate">&#xE5D0;</i>
                                <i class="md-icon material-icons md-card-toggle">&#xE316;</i>
                            </div>
                            <h3 class="md-card-toolbar-heading-text">
                                <?= $datadb['serviced'] ?>
                            </h3>
                        </div>
                        <div class="md-card-content">
                            <label>Title Service</label>
                            <input name="serviced" value="<?= $datadb['serviced'] ?>" class="md-input"><span class="md-input-bar"></span>
                            <br/>
                            <label>Description Service</label>
                            <textarea cols="30" rows="4" class="md-input selecize_init"  name="deskripsid" value="" style="overflow-x: hidden; word-wrap: break-word; height: 169px;"><?= $datadb['deskripsid'] ?></textarea>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="md-card">
                        <div class="md-card-toolbar">
                            <div class="md-card-toolbar-actions">
                                <i class="md-icon material-icons md-card-fullscreen-activate">&#xE5D0;</i>
                                <i class="md-icon material-icons md-card-toggle">&#xE316;</i>
                            </div>
                            <h3 class="md-card-toolbar-heading-text">
                                <?= $datadb['servicee'] ?>
                            </h3>
                        </div>
                        <div class="md-card-content">
                            <label>Title Service</label>
                            <input name="servicee" value="<?= $datadb['servicee'] ?>" class="md-input"><span class="md-input-bar"></span>
                            <br/>
                            <label>Description Service</label>
                            <textarea cols="30" rows="4" class="md-input selecize_init"  name="deskripsie" value="" style="overflow-x: hidden; word-wrap: break-word; height: 169px;"><?= $datadb['deskripsie'] ?></textarea>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="md-card">
                        <div class="md-card-toolbar">
                            <div class="md-card-toolbar-actions">
                                <i class="md-icon material-icons md-card-fullscreen-activate">&#xE5D0;</i>
                                <i class="md-icon material-icons md-card-toggle">&#xE316;</i>
                            </div>
                            <h3 class="md-card-toolbar-heading-text">
                                <?= $datadb['servicef'] ?>
                            </h3>
                        </div>
                        <div class="md-card-content">
                            <label>Title Service</label>
                            <input name="servicef" value="<?= $datadb['servicef'] ?>" class="md-input"><span class="md-input-bar"></span>
                            <br/>
                            <label>Description Service</label>
                            <textarea cols="30" rows="4" class="md-input selecize_init"  name="deskripsif" value="" style="overflow-x: hidden; word-wrap: break-word; height: 169px;"><?= $datadb['deskripsif'] ?></textarea>
                        </div>
                    </div>
                </div>
            </div>
                <div class="uk-grid">
                    <div class="kanan">
                        <button type="submit" class="md-btn md-btn-primary md-btn-wave-light waves-effect waves-button waves-light">Primarry</button> 
                    </div>
                </div>
        </form>
        <?php endif; ?>
        </div>

	</div>
</div>
