
<div id='wrapper' >
            <section class='main-section' >
                <div class='main-bg' style='background-image:url("<?= base_url() ?>/assets/img/bg-main.jpg");' ></div>
                <div class='v-align' >
                    <div class='inner' >
                        <div class='container-fluid' >
                            <div class='intro-text text-center' >
                                <h1>
                                    I'm 
                                    <!--your name-->
                                    <span id='typed' >Fakhrizal</span>
                                </h1>
                                <!--typed strings-->
                                <div id='typed-strings'>
                                    <p>a Adventurer</p>
                                    <!--your name-->
                                    <p>Fakhrizal</p>
                                </div>
                                <p>A Junior Web Developer From Indonesia</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class='section about-section' id='about' >
                <div class='bg' style='background-image:url("<?= base_url() ?>/assets/img/bg-about.jpg");' ></div>
                <div class='content' >
                    <div class='block-header' >
                        <h2>About</h2>
                        <p>
                            Some basic information about me
                        </p>
                    </div>
                    <div class='section-block info-block' >
                        <div class='person-info' >
                            <p>
                                <?= $datadb['deskripsi'] ?>
                            </p>
                            <ul class='info-list clearfix' >
                                <li>
                                    <h4>Name:</h4>
                                    <span><?= $datadb['name'] ?></span>
                                </li>
                                <li>
                                    <h4>Age:</h4>
                                    <span><?= $datadb['age'] ?></span>
                                </li>
                                <li>
                                    <h4>Citizenship:</h4>
                                    <span><?= $datadb['citizenship'] ?></span>
                                </li>
                                <li>
                                    <h4>Job:</h4>
                                    <span><?= $datadb['job'] ?></span>
                                </li>
                                <li>
                                    <h4>Residence:</h4>
                                    <span><?= $datadb['residence'] ?></span>
                                </li>
                                <li>
                                    <h4>Hometown:</h4>
                                    <span><?= $datadb['hometown'] ?></span>
                                </li>
                            </ul>
                            <div class='btns' >
                                <a href='#' class='btn-custom' >
                                    Download Resume
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class='section-block funfacts-block' >
                        <div class='row' >
                            <div class='col-sm-3 col-xs-6' >
                                <div class='funfact' >
                                    <h4><?= $datadb['projects'] ?></h4>
                                    <p>Projects Done</p>
                                </div>
                            </div>
                            <div class='col-sm-4 col-xs-6' >
                                <div class='funfact' >
                                    <h4><?= $datadb['any'] ?></h4>
                                    <p>Cities Visited </p>
                                </div>
                            </div>
                            <div class='col-sm-5 col-xs-6' >
                                <div class='funfact' >
                                    <h4><?= $datadb['anyy'] ?>+</h4>
                                    <p>Minutes Futsal Played days</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class='section-block services-block' >
                        <div class='block-header' >
                            <h2>My Services</h2>
                            <p>I'll provide high quality services</p>
                        </div>
                        <div class='row' >
                            <div class='col-sm-6' >
                                <div class='service' >
                                    <div class='icon' >
                                        <i class='icon-basic-keyboard' ></i>
                                    </div>
                                    <h4><?= $datadb['servicea'] ?></h4>
                                    <p>
                                       <?= $datadb['deskripsia'] ?>
                                    </p>
                                </div>
                            </div>
                            <div class='col-sm-6' >
                                <div class='service' >
                                    <div class='icon' >
                                        <i class='icon-basic-magnifier' ></i>
                                    </div>
                                    <h4><?= $datadb['serviceb'] ?></h4>
                                    <p>
                                        <?= $datadb['deskripsib'] ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class='row' >
                            <div class='col-sm-6' >
                                <div class='service' >
                                    <div class='icon' >
                                        <i class='icon-basic-lightbulb' ></i>
                                    </div>
                                    <h4><?= $datadb['servicec'] ?></h4>
                                    <p>
                                        <?= $datadb['deskripsic'] ?>
                                    </p>
                                </div>
                            </div>
                            <div class='col-sm-6' >
                                <div class='service' >
                                    <div class='icon' >
                                        <i class='icon-ecommerce-graph1' ></i>
                                    </div>
                                    <h4><?= $datadb['serviced'] ?></h4>
                                    <p>
                                        <?= $datadb['deskripsid'] ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class='section resume-section' id='resume' >
                <div class='bg' style='background-image:url("<?= base_url() ?>/assets/img/bg-resume.jpg");' ></div>
                <div class='content' >
                    <div class='block-header' >
                        <h2>Resume</h2>
                        <p>My academic information</p>
                    </div>
                    <div class='section-block education-block' >
                        <h4 class='timeline-header' >Education</h4>
                        <ul class='timeline' >
                        <?php
                         if( $datadb2 > 0 ){
                            foreach($datadb2 as $row){
                                echo'
                                <li>
                                    <div class="timeline-content" >
                                        <h4>'.$row['school'].'</h4>
                                        <em>'.$row['angkatan'].'</em>
                                        <p>
                                            '.$row['deskripsia'].'
                                        </p>
                                    </div>
                                </li>';
                            }
                        }
                        ?>
                        </ul>
                    </div>
                    <div class='section-block experience-block' >
                        <h4 class='timeline-header' >Experience</h4>
                        <ul class='timeline' >
                        <?php
                         if( $datadb6 > 0 ){
                            foreach($datadb6 as $row){
                                echo'
                                <li>
                                    <div class="timeline-content" >
                                        <h4>'.$row['experience'].'</h4>
                                        <em>'.$row['date'].'</em>
                                        <p>
                                            '.$row['deskripsi'].'
                                        </p>
                                    </div>
                                </li>';
                            }
                        }
                        ?>
                        </ul>
                    </div>
                    <div class='section-block skills-block' >
                        <div class='block-header' >
                            <h2>My Skills</h2>
                            <p>I've got really amazing skills</p>
                        </div>
                        <div class='skill' data-percent='94' >
                            <h4>HTML/CSS</h4>
                        </div>
                        <div class='skill' data-percent='85' >
                            <h4>Php</h4>
                        </div>
                        <div class='skill' data-percent='98' >
                            <h4>jQuery</h4>
                        </div>
                    </div>
                </div>
            </section>
            <section class='section portfolio-section' id='portfolio' >
                <div class='bg' style='background-image:url("<?= base_url() ?>/assets/img/bg-portfolio.jpg")' ></div>
                <div class='content' >
                <div class='section-block blog-block' >
                    <div class='block-header' >
                        <h2>Portfolio</h2>
                        <p>Some of my most recent works</p>
                    </div>
                    <ul class="portfolio-items" >
                    <?php
                     if( $datadb3 > 0 ){
                        foreach($datadb3 as $row){
                            echo '
                                    <li>
                                        <div class="inner" >
                                            <figure>
                                                <img src="'.base_url().'/cms/'.$row['file'].'" alt>
                                                <a href="#popup-1'.$row['portfolio_id'].'" class="has-popup view-project" >
                                                    <i class="icon-basic-magnifier-plus" ></i>
                                                </a>
                                                <div id="popup-1'.$row['portfolio_id'].'" class="popup-box zoom-anim-dialog mfp-hide" >
                                                    <figure>
                                                        <img src="'.base_url().'/cms/'.$row['file'].'" alt>
                                                    </figure>
                                                    <div class="content" >
                                                        <a href="http://www.miniinc.id"><h4>'.$row['title'].'</h4></a>
                                                        <p>
                                                            '.$row['deskripsi'].'
                                                        </p>
                                                    </div>
                                                </div>
                                            </figure>
                                            <div class="content" >
                                                <a href="http://www.miniinc.id"><h4>'.$row['name'].'</h4></a>
                                                <p>'.$row['title'].' / Branding</p>
                                            </div>
                                        </div>
                                    </li>
                                ';
                            }
                        }
                    ?> 
                        </ul>     
                   </div>
                </div>
            </section>
            <section class='section blog-section' id='blog' >
                <div class='bg' style='background-image:url("<?= base_url() ?>/assets/img/bg-blog.jpg");' ></div>
                <div class='content' >
                    <div class='section-block blog-block' >
                        <div class='block-header' >
                            <h2>My Blog</h2>
                            <p>Check out my latest posts</p>
                        </div>
                        <div class='blog-posts' >
                            <?php if (count($datadb4) > 0) {
                                    foreach ($datadb4 as $row) {
                            ?>        
                            <article class='blog-post' >
                                <div class='inner' >
                                    <figure>
                                        <img src="<?php echo base_url().'/cms/'.$row['file'] ?>" alt>
                                    </figure>
                                    <div class='content' >
                                        <h4>
                                            <a href='blog-post.html' ><?php echo $row['judul']; ?></a>
                                        </h4>
                                        <ul class='post-icons' >
                                            <li>
                                                <i class='icon-basic-clock' ></i>
                                                <span><?php echo $row['date']; ?></span>
                                            </li>
                                            <li>
                                                <i class='icon-basic-book-pencil' ></i>
                                                <span>Admin</span>
                                            </li>
                                        </ul>
                                        <p>
                                            <?php echo $row['isi_blog']; ?>
                                        </p>
                                        <a href='#' class='read-more' >
                                            Read More
                                        </a>
                                    </div>
                                </div>
                            </article>
                            <?php 
                                    }
                            } ?>
                        </div>
                        <div class='text-center view-more' >
                            <a href='#' class='btn-custom light' >
                                View More Posts
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <section class='section contact-section' id='contact' >
                <div class='bg' style='background-image:url("<?= base_url() ?>/assets/img/s.jpg");' ></div>
                <div class='content' >
                    <div class='section-block contact-block' >
                        <div class='block-header' >
                            <h2>Contact Me</h2>
                            <p>I'll be happy to hear from you</p>
                        </div>
                        <div class='row contact-infos' >
                            <div class='col-sm-4 col-xs-6' >
                                <div class='contact-info' >
                                    <i class='ion-ios-location-outline' ></i>
                                    <h4>Address</h4>
                                    <p>
                                        Pondok Kacang Prima<br>
                                        Blok H5 Nomor 3<br>
                                        Pondok Aren, Tangerang Selatan
                                    </p>
                                </div>
                            </div>
                            <div class='col-sm-4 col-xs-6' >
                                <div class='contact-info' >
                                    <i class='ion-ios-telephone-outline' ></i>
                                    <h4>Phone</h4>
                                    <p>
                                        +62 878-8749-6695<br>
                                    </p>
                                </div>
                            </div>
                            <div class='col-sm-4 col-xs-12' >
                                <div class='contact-info' >
                                    <i class='ion-ios-email-outline' ></i>
                                    <h4>Email</h4>
                                    <p>
                                        hsevfakhri@gmail.com<br>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <form data-toggle='validator' id='contact-form' action='http://nas.musemaster.net/mari/mail.php' method='post' class='contact-form' >
                            <div id='contact-form-result' ></div>
                            <div class='form-group' >
                                <input class='form-control' type='text' placeholder='Name' name='name' required>
                                <div class='help-block with-errors' ></div>
                            </div>
                            <div class='form-group' >
                                <input class='form-control' type='email' placeholder='Email' name='email' required>
                                <div class='help-block with-errors' ></div>
                            </div>
                            <div class='form-group' >
                                <input class='form-control' type='text' placeholder='Subject' name='subject' required>
                                <div class='help-block with-errors' ></div>
                            </div>
                            <div class='form-group' >
                                <textarea class='form-control' placeholder='Message' rows='7' name='message' required></textarea>
                                <div class='help-block with-errors' ></div>
                            </div>
                            <div class='form-group' >
                                <button type='submit' class='btn-custom light' >Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>