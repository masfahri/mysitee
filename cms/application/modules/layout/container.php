<!doctype html>
<!--[if lte IE 9]> <html class="lte-ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en"> <!--<![endif]-->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Remove Tap Highlight on Windows Phone IE -->
    <meta name="msapplication-tap-highlight" content="no"/>

    <link rel="icon" type="image/png" href="<?= base_url().getConfig()['favicon'] ?>" sizes="16x16">
    <link rel="icon" type="image/png" href="<?= base_url().getConfig()['favicon'] ?>" sizes="32x32">

    <title>Null</title>

    <!-- additional styles for plugins -->
        <!-- weather icons -->
        <link rel="stylesheet" href="<?= config_item('assets') ?>bower_components/weather-icons/css/weather-icons.min.css" media="all">
        <!-- metrics graphics (charts) -->
        <link rel="stylesheet" href="<?= config_item('assets') ?>bower_components/metrics-graphics/dist/metricsgraphics.css">
        <!-- chartist -->
        <link rel="stylesheet" href="<?= config_item('assets') ?>bower_components/chartist/dist/chartist.min.css">
    
    <!-- uikit -->
    <link rel="stylesheet" href="<?= config_item('assets') ?>bower_components/uikit/css/uikit.almost-flat.min.css" media="all">

    <!-- flag icons -->
    <link rel="stylesheet" href="<?= config_item('assets') ?>icons/flags/flags.min.css" media="all">

    <!-- altair admin -->
    <link rel="stylesheet" href="<?= config_item('assets_css') ?>main.min.css" media="all">

    <!-- matchMedia polyfill for testing media queries in JS -->
    <!--[if lte IE 9]>
        <script type="text/javascript" src="bower_components/matchMedia/matchMedia.js"></script>
        <script type="text/javascript" src="bower_components/matchMedia/matchMedia.addListener.js"></script>
    <![endif]-->

</head>
<body onload="startTime()" app-url="<?= base_url() ?>" class=" sidebar_main_open sidebar_main_swipe">
    <!-- main header -->
    <header id="header_main">
        <div class="header_main_content">
            <nav class="uk-navbar">
                                
                <!-- main sidebar switch -->
                <a href="#" id="sidebar_main_toggle" class="sSwitch sSwitch_left">
                    <span class="sSwitchIcon"></span>
                </a>
                
                <!-- secondary sidebar switch -->
                <a href="#" id="sidebar_secondary_toggle" class="sSwitch sSwitch_right sidebar_secondary_check">
                    <span class="sSwitchIcon"></span>
                </a>
                
                    <div id="menu_top_dropdown" class="uk-float-left uk-hidden-small">
                        <div class="uk-button-dropdown" data-uk-dropdown="{mode:'click'}">
                            <a href="#" class="top_menu_toggle"><i class="material-icons md-24">&#xE8F0;</i></a>
                            <div class="uk-dropdown uk-dropdown-width-3">
                                <div class="uk-grid uk-dropdown-grid" data-uk-grid-margin>
                                    <div class="uk-width-2-3">
                                        <div class="uk-grid uk-grid-width-medium-1-3 uk-margin-top uk-margin-bottom uk-text-center" data-uk-grid-margin>
                                            <a href="page_mailbox.html">
                                                <i class="material-icons md-36">&#xE158;</i>
                                                <span class="uk-text-muted uk-display-block">Mailbox</span>
                                            </a>
                                            <a href="page_invoices.html">
                                                <i class="material-icons md-36">&#xE53E;</i>
                                                <span class="uk-text-muted uk-display-block">Invoices</span>
                                            </a>
                                            <a href="page_chat.html">
                                                <i class="material-icons md-36 md-color-red-600">&#xE0B9;</i>
                                                <span class="uk-text-muted uk-display-block">Chat</span>
                                            </a>
                                            <a href="page_scrum_board.html">
                                                <i class="material-icons md-36">&#xE85C;</i>
                                                <span class="uk-text-muted uk-display-block">Scrum Board</span>
                                            </a>
                                            <a href="page_snippets.html">
                                                <i class="material-icons md-36">&#xE86F;</i>
                                                <span class="uk-text-muted uk-display-block">Snippets</span>
                                            </a>
                                            <a href="page_user_profile.html">
                                                <i class="material-icons md-36">&#xE87C;</i>
                                                <span class="uk-text-muted uk-display-block">User profile</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="uk-width-1-3">
                                        <ul class="uk-nav uk-nav-dropdown uk-panel">
                                            <li class="uk-nav-header">Components</li>
                                            <li><a href="components_accordion.html">Accordions</a></li>
                                            <li><a href="components_buttons.html">Buttons</a></li>
                                            <li><a href="components_notifications.html">Notifications</a></li>
                                            <li><a href="components_sortable.html">Sortable</a></li>
                                            <li><a href="components_tabs.html">Tabs</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                
                <div class="uk-navbar-flip">
                    <ul class="uk-navbar-nav user_actions">
                        <li><a href="#" id="full_screen_toggle" class="user_action_icon uk-visible-large"><i class="material-icons md-24 md-light">&#xE5D0;</i></a></li>
                        <li data-uk-dropdown="{mode:'click',pos:'bottom-right'}">
                            <a href="#" class="user_action_image"><img class="md-user-image" src="<?= base_url().$this->session->userdata('sys_administrator_image') ?>" alt=""/></a>
                            <div class="uk-dropdown uk-dropdown-small">
                                <ul class="uk-nav js-uk-prevent">
                                    <li><a href="<?= base_url('app_myaccount/editProfile') ?>">My profile</a></li>
                                    <li><a href="<?= base_url('app_login').'/logout' ?>">Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header><!-- main header end -->
    <!-- main sidebar -->
    <aside id="sidebar_main">
        
        <div class="sidebar_main_header">
            <div class="sidebar_logo">
                <a href="<?= base_url('app_dashboard') ?>" class="sSidebar_hide"><img src="<?= config_item('assets_img').'logo_main.png' ?>" alt="" height="15" width="71"/></a>
                <a href="<?= base_url('app_dashboard') ?>" class="sSidebar_show"><img src="<?= config_item('assets_img').'logo_main.png' ?>" alt="" height="32" width="32"/></a>
            </div>
            <div class="sidebar_actions">
                <select id="lang_switcher" name="lang_switcher">
                    <option value="gb" selected>English</option>
                </select>
            </div>
        </div>
        
        <div class="menu_section">
            <ul>
                <li class="<?php if($this->uri->segment(1)=="app_dashboard"){echo "current_section";}?>" title="Dashboard">
                    <a href="<?= base_url('app_dashboard') ?>">
                        <span class="menu_icon"><i class="material-icons">&#xE871;</i></span>
                        <span class="menu_title">Dashboard</span>
                    </a>
                </li>
                <li class="<?php if($this->uri->segment(1)=="app_about"){echo "current_section";}?>" title="About">
                    <a href="<?= base_url('app_about') ?>">
                        <span class="menu_icon"><i class="material-icons">&#xE859;</i></span>
                        <span class="menu_title">About</span>
                    </a>
                </li>     
                
                <li class="<?php if($this->uri->segment(1)=="app_resume"){echo "current_section";}?>" title="Gallery">
                    <a href="<?= base_url('app_resume') ?>">
                        <span class="menu_icon"><i class="material-icons">&#xE80C;</i></span>
                        <span class="menu_title">Resume</span>
                    </a>
                </li>
                <li class="<?php if($this->uri->segment(1)=="app_portfolio"){echo "current_section";}?>" title="Portfolio">
                    <a href="<?= base_url('app_portfolio') ?>">
                        <span class="menu_icon"><i class="material-icons">&#xEB3F;</i></span>
                        <span class="menu_title">Portfolio</span>
                    </a>
                </li>
                <li class="<?php if($this->uri->segment(1)=="app_blog"){echo "current_section";}?>" title="Shop">
                    <a href="<?= base_url('app_blog') ?>">
                        <span class="menu_icon"><i class="material-icons">&#xE322;</i></span>
                        <span class="menu_title">Blog</span>
                    </a>
                </li>
                <li class="<?php if($this->uri->segment(1)=="app_shop"){echo "current_section";}?>" title="Shop">
                    <a href="<?= base_url('app_shop') ?>">
                        <span class="menu_icon"><i class="material-icons">&#xE8CA;</i></span>
                        <span class="menu_title">Shop</span>
                    </a>
                </li>
                <li class="<?php if($this->uri->segment(1)=="app_ads"){echo "current_section";}?>" title="Ads">
                    <a href="<?= base_url('app_ads') ?>">
                        <span class="menu_icon"><i class="material-icons">&#xE89A;</i></span>
                        <span class="menu_title">Ads</span>
                    </a>
                </li>                                     
                <li class="<?php if($this->uri->segment(1)=="app_manageuser"){echo "current_section";}?>" title="Manage User">
                    <a href="<?= base_url('app_manageuser').'/data' ?>">
                        <span class="menu_icon"><i class="material-icons">&#xE87C;</i></span>
                        <span class="menu_title">Manage User</span>
                    </a>
                </li>
                <li class="<?php if($this->uri->segment(1)=="app_websetup" || $this->uri->segment(1)=="app_contact" || $this->uri->segment(1)=="app_socmed"){echo "current_section";}?>" title="Settings">
                    <a href="#">
                        <span class="menu_icon"><i class="material-icons">&#xE8B9;</i></span>
                        <span class="menu_title">Settings</span>
                    </a>
                    <ul>
                            <li><a href="<?= base_url('app_websetup').'/edit' ?>">General Config</a></li>
                            <li><a href="<?= base_url('app_contact').'/edit' ?>">Web Contact</a></li>
                            <li><a href="<?= base_url('app_socmed').'/data' ?>">Social Media</a></li>
                    </ul>
                </li>                
            </ul>
        </div>
    </aside><!-- main sidebar end -->    
<div id="page_content">
        <div id="top_bar">
            <ul id="breadcrumbs">                
                    <li><a href="<?= base_url('app_dashboard') ?>">Home</a></li>
                  <?php if( $this->uri->segment(1) == 'app_event' ):?>
                   <li><span>Event</span></li>
                  <?php elseif( $this->uri->segment(1) == 'app_gallery' ):?> 
                   <li><span>Gallery</span></li>
                  <?php elseif( $this->uri->segment(1) == 'app_membership' ):?> 
                   <li><span>Membership</span></li> 
                  <?php elseif( $this->uri->segment(1) == 'app_merchant' ):?> 
                   <li><span>Merchant</span></li>
                  <?php elseif( $this->uri->segment(1) == 'app_shop' ):?> 
                   <li><span>Shop</span></li>
                  <?php elseif( $this->uri->segment(1) == 'app_ads' ):?> 
                   <li><span>Ads</span></li>
                  <?php elseif( $this->uri->segment(1) == 'app_about' ):?> 
                   <li><span>About</span></li>
                  <?php elseif( $this->uri->segment(1) == 'app_manageuser' ):?> 
                   <li><span>Manage Users</span></li>
                  <?php elseif( $this->uri->segment(1) == 'app_websetup' && $this->uri->segment(2) == 'edit' ):?> 
                   <li><a href="#">Settings</a></li>
                   <li><span>Web Config</span></li>
                  <?php elseif( $this->uri->segment(1) == 'app_contact' && $this->uri->segment(2) == 'edit' ):?>        
                   <li><a href="#">Settings</a></li>
                   <li><span>Contact</span></li>
				  <?php elseif( $this->uri->segment(1) == 'app_socmed' && $this->uri->segment(2) == 'data' ):?>  
                   <li><a href="#">Settings</a></li>
                   <li><span>Social Media</span></li>				  	                                   
                  <?php else: ?>                  	
                   <?= showBreadCrumb($this->uri->segment(1), $this->uri->segment(2)) ?>
                  <?php endif; ?>                
            </ul>
        </div>
    
		<div id="page_content_inner">
			<?= $contents; ?>
        </div>
</div>



   <!-- google web fonts -->
    <script>
        WebFontConfig = {
            google: {
                families: [
                    'Source+Code+Pro:400,700:latin',
                    'Roboto:400,300,500,700,400italic:latin'
                ]
            }
        };
        (function() {
            var wf = document.createElement('script');
            wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
            '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
            wf.type = 'text/javascript';
            wf.async = 'true';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(wf, s);
        })();
    </script>

    <!-- common functions -->
    <script src="<?= config_item('assets_js') ?>common.min.js"></script>
    <!-- uikit functions -->
    <script src="<?= config_item('assets_js') ?>uikit_custom.min.js"></script>
    <!-- common functions/helpers -->
    <script src="<?= config_item('assets_js') ?>altair_admin_common.min.js"></script>

    <!-- page specific plugins -->
        <!-- d3 -->
        <script src="<?= config_item('assets') ?>bower_components/d3/d3.min.js"></script>
        <!-- metrics graphics (charts) -->
        <script src="<?= config_item('assets') ?>bower_components/metrics-graphics/dist/metricsgraphics.min.js"></script>
        <!-- chartist (charts) -->
        <script src="<?= config_item('assets') ?>bower_components/chartist/dist/chartist.min.js"></script>
        <!-- maplace (google maps) -->
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="<?= config_item('assets') ?>bower_components/maplace-js/dist/maplace.min.js"></script>
        <!-- peity (small charts) -->
        <script src="<?= config_item('assets') ?>bower_components/peity/jquery.peity.min.js"></script>
        <!-- easy-pie-chart (circular statistics) -->
        <script src="<?= config_item('assets') ?>bower_components/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
        <!-- countUp -->
        <script src="<?= config_item('assets') ?>bower_components/countUp.js/countUp.min.js"></script>
        <!-- handlebars.js -->
        <script src="<?= config_item('assets') ?>bower_components/handlebars/handlebars.min.js"></script>
        <script src="<?= config_item('assets_js') ?>custom/handlebars_helpers.min.js"></script>
        <!-- CLNDR -->
        <script src="<?= config_item('assets') ?>bower_components/clndr/src/clndr.js"></script>
        <!-- fitvids -->
        <script src="<?= config_item('assets') ?>bower_components/fitvids/jquery.fitvids.js"></script>

        <!--  dashbord functions -->
        <script src="<?= config_item('assets_js') ?>pages/dashboard.min.js"></script>
    
    <script>
        $(function() {
            // enable hires images
            altair_helpers.retina_images();
            // fastClick (touch devices)
            if(Modernizr.touch) {
                FastClick.attach(document.body);
            }
        });
    </script>

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-65191727-1', 'auto');
        ga('send', 'pageview');
    </script>

    <script>
        $(function() {
            var $switcher = $('#style_switcher'),
                $switcher_toggle = $('#style_switcher_toggle'),
                $theme_switcher = $('#theme_switcher'),
                $mini_sidebar_toggle = $('#style_sidebar_mini'),
                $boxed_layout_toggle = $('#style_layout_boxed'),
                $accordion_mode_toggle = $('#accordion_mode_main_menu'),
                $body = $('body');


            $switcher_toggle.click(function(e) {
                e.preventDefault();
                $switcher.toggleClass('switcher_active');
            });

            $theme_switcher.children('li').click(function(e) {
                e.preventDefault();
                var $this = $(this),
                    this_theme = $this.attr('data-app-theme');

                $theme_switcher.children('li').removeClass('active_theme');
                $(this).addClass('active_theme');
                $body
                    .removeClass('app_theme_a app_theme_b app_theme_c app_theme_d app_theme_e app_theme_f app_theme_g app_theme_h app_theme_i')
                    .addClass(this_theme);

                if(this_theme == '') {
                    localStorage.removeItem('altair_theme');
                } else {
                    localStorage.setItem("altair_theme", this_theme);
                }

            });

            // hide style switcher
            $document.on('click keyup', function(e) {
                if( $switcher.hasClass('switcher_active') ) {
                    if (
                        ( !$(e.target).closest($switcher).length )
                        || ( e.keyCode == 27 )
                    ) {
                        $switcher.removeClass('switcher_active');
                    }
                }
            });

            // get theme from local storage
            if(localStorage.getItem("altair_theme") !== null) {
                $theme_switcher.children('li[data-app-theme='+localStorage.getItem("altair_theme")+']').click();
            }


        // toggle mini sidebar

            // change input's state to checked if mini sidebar is active
            if((localStorage.getItem("altair_sidebar_mini") !== null && localStorage.getItem("altair_sidebar_mini") == '1') || $body.hasClass('sidebar_mini')) {
                $mini_sidebar_toggle.iCheck('check');
            }

            $mini_sidebar_toggle
                .on('ifChecked', function(event){
                    $switcher.removeClass('switcher_active');
                    localStorage.setItem("altair_sidebar_mini", '1');
                    location.reload(true);
                })
                .on('ifUnchecked', function(event){
                    $switcher.removeClass('switcher_active');
                    localStorage.removeItem('altair_sidebar_mini');
                    location.reload(true);
                });


        // toggle boxed layout

            if((localStorage.getItem("altair_layout") !== null && localStorage.getItem("altair_layout") == 'boxed') || $body.hasClass('boxed_layout')) {
                $boxed_layout_toggle.iCheck('check');
                $body.addClass('boxed_layout');
                $(window).resize();
            }

            $boxed_layout_toggle
                .on('ifChecked', function(event){
                    $switcher.removeClass('switcher_active');
                    localStorage.setItem("altair_layout", 'boxed');
                    location.reload(true);
                })
                .on('ifUnchecked', function(event){
                    $switcher.removeClass('switcher_active');
                    localStorage.removeItem('altair_layout');
                    location.reload(true);
                });

        // main menu accordion mode
            if($sidebar_main.hasClass('accordion_mode')) {
                $accordion_mode_toggle.iCheck('check');
            }

            $accordion_mode_toggle
                .on('ifChecked', function(){
                    $sidebar_main.addClass('accordion_mode');
                })
                .on('ifUnchecked', function(){
                    $sidebar_main.removeClass('accordion_mode');
                });


        });
    </script>
</body>
</html>