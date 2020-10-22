<?php require('header.php');?>
<style>

</style>
            <!-- Basic Form Start -->
            <div class="basic-form-area mg-b-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sparkline12-list shadow-reset mg-t-30">
                                <div class="sparkline12-hd">
                                    <div class="main-sparkline12-hd">
                                        <h1>Add Project</h1>
                                        <div class="sparkline12-outline-icon">
                                            <span class="sparkline12-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                            <span><i class="fa fa-wrench"></i></span>
                                            <span class="sparkline12-collapse-close"><i class="fa fa-times"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="sparkline12-graph">
                                    <div class="basic-login-form-ad">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="all-form-element-inner">
                                        <?php  echo form_open_multipart('Main_c/addpro', 'class="search_form" id="search_form2"');?>
                                            
                                                             <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro">Project Name</label>
                                                                </div>
                                                                <div class="col-lg-6">


                            <?php echo form_input(['class'=>'form-control','type'=>'text','name'=>'ppname','value'=>set_value("ppname"),'placeholder'=>'Project Name']); ?> 
                            <?php echo form_error('ppname');?>

                                                                </div>
                                                            </div>
                                                        </div>

                                                                <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro">Project Details</label>
                                                                </div>
                                                                <div class="col-lg-6">


                            <?php echo form_input(['class'=>'form-control','type'=>'text','name'=>'pdetail','value'=>set_value("pdetail"),'placeholder'=>'Project Details']); ?> 
                                <?php echo form_error('pdetail');?>

                         
                                                                </div>
                                                            </div>
                                                        </div>

                                                                <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro">Select Image</label>
                                                                </div>
                                                                <div class="col-lg-6">

                                <?php echo form_upload(['name'=>'pimg']);?>
                                <?php if(isset($upload_error)) {echo $upload_error;}?>
                                                                </div>
                                                            </div>
                                                        </div>

                                                             <div class="form-group-inner">
                                                            <div class="login-btn-inner">
                                                                <div class="row">
                                                                    <div class="col-lg-5"></div>
                                                                    <div class="col-lg-7">
                                                                        <div class="login-horizental cancel-wp pull-left">
                                                                         
                                                                            <button class="btn btn-sm btn-primary login-submit-cs" type="submit">Save Change</button>
                                                                        </div>

                              
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                     <?php  echo form_close();?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                       <div class="<?php echo $this->session->flashdata('msg_class'); ?>" style="padding:10px;">
                                   <?php echo $this->session->flashdata('msg'); ?>
                                   <?php echo $this->session->flashdata('Emailmsg'); ?>
                                     </div>
                                </div>
                            </div>
                        </div>
                    </div>
                       </div>
                    </div>

<?php require('footer.php');?>

