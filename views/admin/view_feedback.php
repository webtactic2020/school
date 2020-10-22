    <?php require('header.php');?>

<style type="text/css">
.bt{
	    background: #03a9f4;
    height: 45px;
    z-index: -1;
    content: "";
}
.bt:hover{
	color: #23527c;
    text-decoration: underline;
}

.modal-area-button a{
    padding: 13px 13px !important;
}
.modal-adminpro-general .modal-body {
    padding: 10px 20px!important;
}
.modal-area-button a.Danger:before{
    background:#f12b2b!important;
}
.modal-area-button a.Danger2{
    background-color: #5cb85c;
}
.modal-area-button a.Danger2:hover {
    
    color: #fff;
   background-color: black;
    transition: all 0.3s ease 0s;
}
.modal-area-button a.Danger1{
    background-color: #03a9f4;
}
.modal-area-button a.Danger1:hover {
    
    color: #fff;
   background-color: black;
    transition: all 0.3s ease 0s;
}
.modal-area-button a.Danger3{
    background-color: #f12b2b;
}
.modal-area-button a.Danger3:hover {
    
    color: #fff;
   background-color: black;
    transition: all 0.3s ease 0s;
}
.custom-datatable-overright .btn {
    padding: 11px;
}
.modal-area-button a:before {
    width: 90px!important;
}
.modal-area-button a:after {
    width: 90px!important;
}
.sparkline13-graph li{
  display: inline-block;
}

</style>    <!-- modals CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/admin/css/modals.css');?>">
    <!-- tabs CSS
		============================================ -->
    <link rel="stylesheet" href="<?= base_url('assets/admin/css/tabs.css');?>">
    <!-- style CSS
		============================================ -->
            <div class="data-table-area mg-b-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sparkline13-list shadow-reset">
                                <div class="sparkline13-hd">
                                    <div class="main-sparkline13-hd">
                                        <h1>Feedback <span class="table-project-n">Data</span> Table</h1>
                                        <div class="sparkline13-outline-icon">
                                            <span class="sparkline13-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                            <span><i class="fa fa-wrench"></i></span>
                                            <span class="sparkline13-collapse-close"><i class="fa fa-times"></i></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="sparkline13-graph">
                                       <div class="modal-area-button">
                                <span>Evaluation types:</span>
                                <ul>
                                        <li><a data-id="  "
                                       class="identifyingClass Danger2 " 
                                      data-toggle="modal" data-target="#PrimaryModalalert">Completed</a> </li>

                                    <li><a data-id="  "
                                       class="identifyingClass Danger1" 
                                      data-toggle="modal" data-target="#PrimaryModalalert">Incomplete</a> </li>


                                      <li><a data-id="  "
                                       class="identifyingClass Danger3" 
                                      data-toggle="modal" data-target="#PrimaryModalalert">Pending</a> </li>
                                </ul>
                                      


                                  
                                 
      
                                </div>
                             <!--       <span style="color:black;font-weight:bold">Note : In Evaluation</span> 
                                   <span style="padding-left:10px;color:blue;font-weight:bold">Blue Color ,</span>
                                   <span style="padding-left:10px;color:red;font-weight:bold">Red Color ,</span>
                                   <span style="padding-left:10px;color:green;font-weight:bold">Green Color </span> -->
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
                                                   <th data-field="Student name" >Student name</th>
                                                   <th data-field="Roll name" >Roll no</th>
                                                   <th data-field="Class name" >Class</th>
                                                    <th data-field="Section name" >Section</th>
                                                    <th data-field="Feedback name" >Feedback</th>
                                                   <!--  <th data-field="Feedbackc name" >Feedback file</th> -->
                                                    
                                                    <th data-field="Projectcc name" >Project name</th>
                                                    <!-- <th data-field="Descriptionx name" >Description name</th> -->
                                                    <th data-field="Projectss name" >Project File</th>
                                                      <th >Evaluation</th>
                                     <!--            <th>Evaluation Status</th> -->
                                                </tr>
                                            </thead>
                                            <tbody>

                     <?php if (count($pro)): ?>
                     <!--     <?php echo "<pre>";
                          print_r($pro);?> -->
                              
                                    
                                      <?php foreach ($pro as $p): ?>




                                        <tr  >
                                                    <td></td>
                                                 <td><?= $p->fname ?> <?= $p->pname ?> <?= $p->lname ?></td>
                                                 <td><?= $p->uu_rollno ?></td>
                                                 <td><?= $p->cc_name ?></td>
                                                 <td><?= $p->sec_name ?></td>
                                                 <td>
                                                    <a href="<?=base_url('assets/images/feedback/'.$p->reportimg);  ?>" class="btn btn-sm btn-success login-submit-cs" download>Download</a><br>
                                                    <?= $p->preport ?></td>
                                                 <!-- <td></td> -->
                                                 
                                                    <td><?= $p->ppname ?></td>
                                                  <!--   <td><?= $p->pdetail ?></td> -->
                                                    <td><a href="<?=base_url('assets/images/projects/'.$p->pimg);  ?>" class="btn btn-sm btn-success login-submit-cs" download>Download</a></td>
                                                    <td>
                                                   

                                <div class="modal-area-button">
                                    <a data-id="<?= $p->aid ?>"
 <?php if($p->project_status=='Project Completed'){?> 
                                     class="identifyingClass Danger2" 
<?php } else if($p->project_status=='Project Pending'){ ?> 
                                      class="identifyingClass Danger1" 
                                  <?php } else{ ?>      
                                       class="identifyingClass Danger3" 
<?php } ?>

                                     href="#" data-toggle="modal" data-target="#PrimaryModalalert<?= $p->aid ?>">Comment</a>
                                 <!--        <?php if($p->project_status=='Project Completed'){?> <p style="color:#5cb85c!important"  >
                    <?= $p->project_status ?></p> <?php } else if($p->project_status=='Project Pending'){ ?> 
                        <p style="color:blue!important" ><?= $p->project_status ?></p>
                        <?php } else{ ?> <p style="color:red!important" >Evaluation Pending</p> <?php } ?> -->
                        
                           
                                </div>
                               
                                       
                                                   </td>
                                               <!--     <td>
              
                                                   </td> -->
                                                </tr>





<div class="login-form-area adminpro-pd">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                         
                            <div id="PrimaryModalalert<?= $p->aid ?>" class="modal modal-adminpro-general default-popup-PrimaryModal fade" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-close-area modal-close-df">
                                            <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                        </div>
                                        <div class="modal-body">
                                            <i class="fa fa-check modal-check-pro"></i>
                                            
                                            <h2>Update Feedback!</h2>
                                             <?php  echo form_open_multipart('Main_c/update_feedback', 'class="" id="myform"');?>
                                              <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro">Select Status</label>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="form-select-list">
                                                            

                  <select class="form-control custom-select-value" name="project_status" required>
                            <option value="">Select Status</option>
                            <option <?php if($p->project_status=='Project Completed'){?> selected <?php } ?> value="Project Completed">Project Completed</option>
                            <option <?php if($p->project_status=='Project Pending'){?> selected <?php } ?> value="Project Pending">Project Pending</option>
                         
                        </select> 
                        <?php echo form_error('class_id');?>    
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                               <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro">Comment</label>
                                                                </div>
                                                                <div class="col-lg-6">
                                                         <p><textarea placeholder="<?= $p->re_preport ?>" rows="4" cols="35"  type="text" name="re_preport"></textarea></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                              <input type="hidden" name="aid" id="hiddenValue" value="" />
                                           
                                        </div>  
                                        <div class="modal-footer">
                                            <button class="btn btn-sm btn-warning login-submit-cs" data-dismiss="modal" href="#">Cancel</button>
                                            <button class="btn btn-sm btn-success login-submit-cs" value="submit" type="submit" >Process</button> 

                                            <?= form_close(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                                  
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

<!-- 
<div class="login-form-area adminpro-pd mg-b-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                         
                            <div id="PrimaryModalalert" class="modal modal-adminpro-general default-popup-PrimaryModal fade" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-close-area modal-close-df">
                                            <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                        </div>
                                        <div class="modal-body">
                                            <i class="fa fa-check modal-check-pro"></i>
                                            
                                            <h2>Update Feedback!</h2>
                                             <?php  echo form_open_multipart('Main_c/update_feedback', 'class="" id="myform"');?>
                                              <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro">Select Status</label>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="form-select-list">
                                                            

                  <select class="form-control custom-select-value" name="project_status" required>
                            <option value="">Select Status</option>
                            <option value="Project Completed">Project Completed</option>
                            <option value="Project Pending">Project Pending</option>
                         
                        </select> 
                        <?php echo form_error('class_id');?>    
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                               <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro">Comment</label>
                                                                </div>
                                                                <div class="col-lg-3">
                                                         <p><textarea rows="4" columns="490" placeholder="comment" type="text" name="re_preport"></textarea></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                              <input type="hidden" name="aid" id="hiddenValue" value="" />
                                           
                                        </div>  
                                        <div class="modal-footer">
                                            <button class="btn btn-sm btn-warning login-submit-cs" data-dismiss="modal" href="#">Cancel</button>
                                            <button class="btn btn-sm btn-success login-submit-cs" value="submit" type="submit" >Process</button> 

                                            <?= form_close(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
 									</div>
                                    </div>
                                </div>
                            </div> -->
  <?php require('footer.php');?>
     <!-- modal JS
		============================================ -->
    <script src="<?= base_url('assets/admin/js/modal-active.js');?>"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

  
 <script type="text/javascript">
    $(function () {
        $(".identifyingClass").click(function () {
            var my_id_value = $(this).data('id');
            $(".modal-body #hiddenValue").val(my_id_value);
        })
    });
</script>