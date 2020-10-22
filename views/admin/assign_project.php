<?php require('header.php');?>
<?php if (count($pro)): ?>
          <!--               <?php echo "<pre>";
                          print_r($vr);

                          ?>  -->
                         
                                    
                                      <?php foreach ($pro as $p): ?>
            <!-- Basic Form Start -->
            <div class="basic-form-area mg-b-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sparkline12-list shadow-reset mg-t-30">
                                <div class="sparkline12-hd">
                                    <div class="main-sparkline12-hd">
                                        <h1>Assign Project</h1>
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
        <div class="form-group-inner">
                                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <label class="login2 ">Project name</label>
                <p><?=$p->ppname;?></p>

                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <label class="login2">Project Description</label>
                                <p><?=$p->pdetail;?></p>
                                                                </div>

                                                                 <div class="col-lg-4">
                                                                    <label class="login2">Project file</label>
                   <p><a href="<?=base_url('assets/images/projects/'.$p->pimg);  ?>" class="btn btn-sm btn-success login-submit-cs" download>File</a></p>
                                                                </div>
                                                             
                                                            </div> 
                                                        </div>


                                        <?php  echo form_open_multipart('Main_c/addas/'.$p->pid, 'class="search_form" id="search_form2"');?>
                        
                                    <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro">Select Class</label>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="form-select-list">
                                                            

                  <select class="form-control custom-select-value" name="class_id"  onchange="makeSubmenu(this.value)">
                            <option>Select Class</option>
                        <?php foreach ($cls as $cl): ?>
                        
                                <option value="<?= $cl->cc_id ?>"><?= $cl->cc_name ?></option>
                            
                      <?php endforeach; ?>
                        </select> 
                        <?php echo form_error('class_id');?>    
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                         <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro">Select Section</label>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="form-select-list">
                                                            

            
                          <select class="form-control custom-select-value" id="categorySelect" name="sec_id">
                            <option value="0">Select Section</option>
                          
          
                                
                            
                    
                        </select>   
                        <?php echo form_error('sec_id');?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                  <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro">Select Teacher</label>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="form-select-list">
                                                            

                  <select class="form-control custom-select-value" name="tea_id"  required >
                            <option value="">Assign Teacher</option>
                        <?php foreach ($teacher as $te): ?>
                        
                                <option value="<?= $te->uid ?>"><?= $te->fname ?> <?= $te->pname ?> <?= $te->lname ?></option>
                            
                      <?php endforeach; ?>
                        </select> 
                        <?php echo form_error('tea_id');?>    
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>                          
                              

                        <?php
                        date_default_timezone_set('Asia/Kolkata');
                        $date = date( 'd-m-Y h:i:s A', time () );
                        ?>
                        <?php  echo form_hidden('datee',$date);?>

                         <?php  echo form_hidden('a_pid',$p->pid);?>

                             

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


                                   <?php endforeach; ?>
                                                                    
                                

                      <?php    endif;  ?>

<?php require('footer.php');?>

   <script type="text/javascript">
   
    
     var subcategory = <?php echo json_encode($sls); ?>;
  


   function makeSubmenu(value) {
            if (value.length == 0) document.getElementById("categorySelect").innerHTML = "<option></option>";
            else {
                var citiesOptions = ""; 
                for (categoryId in subcategory) {

                    JSON.stringify(subcategory[categoryId]);
                    if (subcategory[categoryId].cls_id == value){

   citiesOptions += "<option value="+ subcategory[categoryId].sec_id +">" + subcategory[categoryId].sec_name + "</option>";
                 //007
            }

                 
                }
                document.getElementById("categorySelect").innerHTML = citiesOptions;
            }
        }


    </script>

