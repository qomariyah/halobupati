<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title><?= $title ?></title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="<?= base_url()?>asset/be/favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <!-- elFinder CSS (REQUIRED) -->
        <link rel="stylesheet" type="text/css" media="screen" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/themes/smoothness/jquery-ui.css">
        <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url() ?>asset/be/css/elfinder.min.css">
        <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url() ?>asset/be/css/theme.css">
        <link rel="stylesheet" type="text/css" id="theme" href="<?= base_url()?>asset/be/css/theme-blue.css"/>
        <!-- EOF CSS INCLUDE -->                                    
    </head>
    <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            
            <!-- START PAGE SIDEBAR -->
            <?php $this->load->view('view_admin/sidebar') ?>
            <!-- END PAGE SIDEBAR -->
            
            <!-- PAGE CONTENT -->
             <div class="page-content">
                
                <!-- START X-NAVIGATION VERTICAL -->
                <?php $this->load->view('view_admin/nav_vertical'); ?>
                <!-- END X-NAVIGATION VERTICAL -->                     

                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="<?= site_url('hbadmin')?>">Home</a></li>                    
                    <li class="active"><?= $breadcrumb ?></li>
                </ul>
                <!-- END BREADCRUMB -->                       
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                     
                    <?php
                        if($content=='dashboard'){
                            $this->load->view('view_admin/dashboard');
                        }else if($content=="administrator"){
                            $this->load->view('view_admin/card');
                        }else if($content=="tambah-administrator"){
                            $this->load->view('view_admin/form');
                        }else if($content=="edit-administrator"){
                            $this->load->view('view_admin/form');
                        }else if($content=="opd"){
                            $this->load->view('view_admin/card');
                        }else if($content=="tambah-opd"){
                            $this->load->view('view_admin/form');
                        }else if($content=="sektor"){
                            $this->load->view('view_admin/table');
                        }else if($content=="tambah-sektor"){
                            $this->load->view('view_admin/form');
                        }else if($content=="edit-sektor"){
                            $this->load->view('view_admin/form');
                        }else if($content=="aduan-hari-ini"){
                            $this->load->view('view_admin/list');
                        }else if($content=="filemanager"){
                            $this->load->view('view_admin/elfinder');
                        }
                    ?>                   
                    
                </div>
                <!-- END PAGE CONTENT WRAPPER -->                                
            </div>       
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->

        <!-- MESSAGE BOX-->
        <?php $this->load->view('view_admin/messagebox'); ?>
        <!-- END MESSAGE BOX-->

        <!-- START PRELOADS -->
        <audio id="audio-alert" src="<?= base_url()?>asset/be/audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="<?= base_url()?>asset/be/audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->                  
        
    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="<?= base_url()?>asset/be/js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="<?= base_url()?>asset/be/js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="<?= base_url()?>asset/be/js/plugins/bootstrap/bootstrap.min.js"></script>        
        <!-- END PLUGINS -->
        
        <!-- elFinder JS (REQUIRED) -->
        <script type="text/javascript" src="<?php echo base_url() ?>asset/be/js/elfinder.full.js"></script>

        <!-- elFinder translation (OPTIONAL) -->
        <script type="text/javascript" src="<?php echo base_url() ?>asset/be/js/i18n/elfinder.id.js"></script>

        <!-- elFinder initialization (REQUIRED) -->
        <script type="text/javascript" charset="utf-8">
            $().ready(function() {
                var elf = $('#elfinder').elfinder({
                    url : '<?= base_url(); ?>hbadmin/elfinder_init',  // connector URL (REQUIRED)
                    lang: 'id'             // language (OPTIONAL)
                }).elfinder('instance');
            });
        </script>

        <!-- START THIS PAGE PLUGINS-->        
        <script type='text/javascript' src='<?= base_url()?>asset/be/js/plugins/icheck/icheck.min.js'></script>        
        <script type="text/javascript" src="<?= base_url()?>asset/be/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type="text/javascript" src="<?= base_url()?>asset/be/js/plugins/scrolltotop/scrolltopcontrol.js"></script>
        

        <script type="text/javascript" src="<?= base_url()?>asset/be/js/plugins/morris/raphael-min.js"></script>
        <script type="text/javascript" src="<?= base_url()?>asset/be/js/plugins/morris/morris.min.js"></script>       
        <script type="text/javascript" src="<?= base_url()?>asset/be/js/plugins/rickshaw/d3.v3.js"></script>
        <script type="text/javascript" src="<?= base_url()?>asset/be/js/plugins/rickshaw/rickshaw.min.js"></script>
        <script type='text/javascript' src='<?= base_url()?>asset/be/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'></script>
        <script type='text/javascript' src='<?= base_url()?>asset/be/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'></script>                
        <script type='text/javascript' src='<?= base_url()?>asset/be/js/plugins/bootstrap/bootstrap-datepicker.js'></script>                
        <script type="text/javascript" src="<?= base_url()?>asset/be/js/plugins/owl/owl.carousel.min.js"></script>                 
        
        <script type="text/javascript" src="<?= base_url()?>asset/be/js/plugins/moment.min.js"></script>
        <script type="text/javascript" src="<?= base_url()?>asset/be/js/plugins/daterangepicker/daterangepicker.js"></script>
        <script type="text/javascript" src="<?= base_url()?>asset/be/js/plugins/datatables/jquery.dataTables.min.js"></script>

        
        <script type="text/javascript" src="<?= base_url()?>asset/be/js/plugins/dropzone/dropzone.min.js"></script>
        <script type="text/javascript" src="<?= base_url()?>asset/be/js/plugins/fileinput/fileinput.min.js"></script>        
        <script type="text/javascript" src="<?= base_url()?>asset/be/js/plugins/filetree/jqueryFileTree.js"></script>


        <script type="text/javascript" src="<?= base_url()?>asset/be/js/plugins/bootstrap/bootstrap-select.js"></script>
        <!-- END THIS PAGE PLUGINS-->        

        <!-- START TEMPLATE -->
        
        <script type="text/javascript" src="<?= base_url()?>asset/be/js/plugins.js"></script>        
        <script type="text/javascript" src="<?= base_url()?>asset/be/js/actions.js"></script>
        
        <script type="text/javascript" src="<?= base_url()?>asset/be/js/demo_dashboard.js"></script>
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->         
    </body>
</html>






