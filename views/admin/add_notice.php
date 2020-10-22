<?php require('header.php');?>
<style type="text/css">
   .panell{
        background: #ca60d56b;
    border-radius: 10px;
    }
</style>
          <!--               <?php echo "<pre>";
                          print_r($vr);

                          ?>  -->
                         
                                    
                                     
            <!-- Basic Form Start -->
            <div class="basic-form-area mg-b-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sparkline12-list shadow-reset mg-t-30">
                                <div class="sparkline12-hd">
                                    <div class="main-sparkline12-hd">
                                        <h1>Add Notice</h1>
                                        <div class="sparkline12-outline-icon">
                                            <span class="sparkline12-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                            <span><i class="fa fa-wrench"></i></span>
                                            <span class="sparkline12-collapse-close"><i class="fa fa-times"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="sparkline12-graph">
                                    <div class="basic-login-form-ad">
                                        <div class="row ">
                                            <div class="col-lg-12">
                                        <?php  echo form_open_multipart('Main_c/addnotice/', 'class="search_form" id="search_form2"');?>
                                                <div class="all-form-element-inner">
                                                    <div class="form-group-inner panell" >
                                                        <br>
                                                        <h4 class="m-t-2">Select Student or Group of Students</h4>
                                                                            <div class="row">
                                                                            	 <div class="col-lg-4">
              		                                                      <label class="login2">Notice To All</label>
               								    <p>  <input value="all" name="n_cls[]" type="checkbox"> All Students </p>
                                                          				      </div>


                                                                <div class="col-lg-4">
                                                                    <label class="login2 ">Select Class</label><br>
                                                                     <?php foreach ($cls as $cl): ?>
           														  <input value="<?=  $cl->cc_id ?>" name="n_cls[<?=  $cl->cc_id ?>]" type="checkbox"> <?=  $cl->cc_name ?>
																	<?php endforeach; ?>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <label class="login2"> Select Student</label>
                                   <div class="form-group-inner">
                                                      
                                                               
                                                                    <div class="form-select-list">
                                                            

            
                          <select class="form-control custom-select-value" id="categorySelect" name="n_student">
                            <!-- <option value="0">Select Section</option> -->
                          
          
                                
                            
                    
                        </select>   
                        <?php echo form_error('n_student');?>
                                                                    
                                                              
                                                            </div>
                                                        </div>

                                                                </div>

                                                                
                                                             
                                                            </div> 
                                                        </div>

                                                              <div class="form-group-inner">
                                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <label class="login2 ">Notice title</label><br>
                                                                  <input placeholder="Add title" type="text" name="n_title" class="form-control">
                                                                </div>
                                                          

                        <?php
                        date_default_timezone_set('Asia/Kolkata');
                        $date = date( 'd-m-Y h:i:s A', time () );
                        ?>
                        <?php  echo form_hidden('n_date',$date);?>
                        <?php  echo form_hidden('n_addby',$this->session->userdata('user_id'));?>
                        <?php  echo form_hidden('n_status','active');?>

                                                                 <div class="col-lg-6">
                                                                    <label class="login2">Upload file</label>
                                                                <div class="login-btn-inner">
                                                   
                                                                 
                                                                    <div class="col-lg-12">

                                                                                        <div class="file-upload-inner ts-forms">
                                                                        <div class="input prepend-big-btn">
                                                                            <label class="icon-right" for="prepend-big-btn">
                                                                                <i class="fa fa-download"></i>
                                                                            </label>
                                                                            <div class="file-button">
                                                                                Browse

                                <input type="file" name="n_img" onchange="document.getElementById('abc').value = this.value"  />
                                                                                                                     

                                                                            </div>
                                                                            <input type="text" id="abc" placeholder="no file selected">
                                                                        </div>
                                                                
                                                              
                                                        </div>
                                                                

                              
                                                                    </div>
                                                              
                                                            </div>
                                                                </div>
                                                             
                                                            </div> 
                                                        </div>

                                                                    <div class="form-group-inner">
                                                                            <div class="row">
                                                         
                                                                <div class="col-lg-6">
                                                                    <label class="login2">Notice details</label><br>
                                                                 <textarea placeholder="Add details" type="text" name="n_text" class="form-control" rows="4"></textarea>
                                                                </div>


                                                                 <div class="col-lg-4">
                                                                    <label class="login2"> </label>
                                                                <div class="login-btn-inner">
                                                   
                                                                 
                                                                    <div class="col-lg-12">

                                                           
                                                                        <div class="login-horizental cancel-wp pull-left">
                                                                         
                                                                            <button class="btn btn-sm btn-primary login-submit-cs" type="submit">Save Change</button>
                                                                        </div>

                              
                                                                    </div>
                                                              
                                                            </div>
                                                                </div>
                                                             
                                                            </div> 
                                                        </div>
                                                        
                                                    

                                        <?php  echo form_close();?>
                    
                                     <!--    <?php  echo form_open_multipart('Main_c/addas/', 'class="search_form" id="search_form2"');?>
                        
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
                                                     <?php  echo form_close();?> -->
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
   
    
     var subcategory = <?php echo json_encode($stud); ?>;
  

      makeSubmenu(1);
   function makeSubmenu(value) {
            if (value.length == 0) document.getElementById("categorySelect").innerHTML = "<option></option>";
            else {
                var citiesOptions = ""; 
                citiesOptions += "<option value="+0+">" + 'Select Student' + "</option>";
                for (categoryId in subcategory) {

                    JSON.stringify(subcategory[categoryId]);
                   /* if (subcategory[categoryId].cls_id == value){*/



   citiesOptions += "<option value="+ subcategory[categoryId].uid +">" + subcategory[categoryId].lname +" "+ subcategory[categoryId].fname +" "+ subcategory[categoryId].pname +" Class : " + subcategory[categoryId].cc_name + "</option>";
                 //007
          /*  }*/

                 
                }
                document.getElementById("categorySelect").innerHTML = citiesOptions;
            }
        }

           function makeSubmenu2(value) {


 			var subcategory = <?php echo json_encode($sls); ?>;
           	 var citiesOptions = value; 

          document.getElementById("categorySelect2").innerHTML = citiesOptions;
        }


    </script>

