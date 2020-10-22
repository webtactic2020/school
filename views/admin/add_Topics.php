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
                                        <h1>Add Topics</h1>
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
                                        <?php  echo form_open_multipart('Main_c/addtopicssinfo', 'class="search_form" id="search_form2"');?>
                                            
                          

                                          <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro">Select Subject</label>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="form-select-list">
                                                            

                   <select required class="form-control custom-select-value" name="subt_sub" onchange="makeSubmenu1(this.value)">
                            <option value="">Subject</option>
                        <?php foreach ($sub as $ss): ?>
                        
                                <option value="<?= $ss->sub_id ?>"><?= $ss->sub_name ?></option>
                            
                      <?php endforeach; ?>
                        </select> 
                        <?php echo form_error('subt_sub');?>    
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                                 <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro"><!-- Topics Name --></label>
                                                                </div>
                                                                <div class="col-lg-6" id="categorySelect1">



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

  <script type="text/javascript">

     var subcategory = <?php echo json_encode($unit); ?>;
  


          function makeSubmenu1(value) {
            if (value.length == 0) document.getElementById("categorySelect1").innerHTML = "<h1>No val</h1>";
            else {
                
                var citiesOptions = ""; 
                var i = 1; 
                  for (categoryId in subcategory) {

                    JSON.stringify(subcategory[categoryId]);
                    if (subcategory[categoryId].subu_subid == value){

   citiesOptions += " "+ subcategory[categoryId].subu_name +"<input class='form-control' name= c"+ i +" placeholder="+ subcategory[categoryId].subu_name +"><br>";
                i++; //007
            }

                 
                }
                document.getElementById("categorySelect1").innerHTML = citiesOptions;
            }
        }


    </script>