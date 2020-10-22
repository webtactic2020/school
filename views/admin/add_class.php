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
                                        <h1>Add class</h1>
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
                                                     <?php  echo form_open('Main_c/addclass', 'class="search_form" id="search_form"');?>
                        

                                                             <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro">Class name</label>
                                                                </div>
                                                                <div class="col-lg-6">
                  <?php echo form_input(['class'=>'form-control','type'=>'text','id'=>'contact_form_name','name'=>'cc_name','value'=>set_value("cc_name"),'placeholder'=>'Class Std']); ?> 
                         <?php echo form_error('cc_name');?>
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

                                <div class="data-table-area mg-b-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sparkline13-list shadow-reset">
                                <div class="sparkline13-hd">
                                    <div class="main-sparkline13-hd">
                                        <h1>Class <span class="table-project-n">Data</span> Table</h1>
                                        <div class="sparkline13-outline-icon">
                                            <span class="sparkline13-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                            <span><i class="fa fa-wrench"></i></span>
                                            <span class="sparkline13-collapse-close"><i class="fa fa-times"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="sparkline13-graph">
                                    <div class="datatable-dashv1-list custom-datatable-overright">
                                        <div id="toolbar">
                                            <select class="form-control">
                                                <option value="">Export Basic</option>
                                                <option value="all">Export All</option>
                                                <option value="selected">Export Selected</option>
                                            </select>
                                        </div>
                                        <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true"  data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                            <thead>
                                                <tr>
                                                    <th data-field="state" data-checkbox="true" ></th>
                                                   <!--  <th >Action</th> -->
                                                    <th data-field="First name" >Class name</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>

                     <?php if (count($cls)): ?>
                   <!--      <?php echo "<pre>";
                          print_r($vr);?> -->
                              
                                    
                                      <?php foreach ($cls as $c): ?>




                                                <tr>
                                                    <td></td>
                                                   <!--  <td><a href='<?=base_url("Main_c/edit_register/".$c->cc_id);?>' class="btn btn-sm btn-primary login-submit-cs" >Edit</a></td> -->
                                                    <td><?= $c->cc_name ?></td>
                                                   
                                                </tr>


                                  
                                     <?php endforeach; ?>
                                                                    
                                

                      <?php    endif;  ?>
                                             
                     
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Static Table End -->

<?php require('footer.php');?>

