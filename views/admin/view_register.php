    <?php require('header.php');?>
            <div class="data-table-area mg-b-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sparkline13-list shadow-reset">
                                <div class="sparkline13-hd">
                                    <div class="main-sparkline13-hd">
                                        <h1>Student <span class="table-project-n">Data</span> Table</h1>
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
                                                   
                                                    <th data-field="First name" >Full name</th>
                                                <!--     <th data-field="Middle name" >Middle name</th>
                                                    <th data-field="Last name" >Last name</th> -->
                                                    <th data-field="email" >Email</th>
                                                    <th data-field="phone" >Phone</th>
                                                    <th data-field="dob" >DOB</th>
                                                    <th data-field="Age" >Age</th>
                                                    <th data-field="Class">Class</th>
                                                     <th data-field="section">Section</th>
                                          <!--             <th data-field="Gender" >Gender</th>
                                                      <th data-field="Address" >Address</th>
                                                    <th data-field="Parents name" >Parents name</th>
                                                    <th data-field="Parents email" >Parents email</th>
                                                    <th data-field="Parents Phone" >Parents Phone</th>
                                                    <th data-field="Status">Status</th> -->
                                                     <th >Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                     <?php if (count($vr)): ?>
                   <!--      <?php echo "<pre>";
                          print_r($vr);?> -->
                              
                                    
                                      <?php foreach ($vr as $v): ?>




                                                <tr>
                                                    <td></td>
                                                   
                                                    <td><?= $v->lname ?> <?= $v->fname ?> <?= $v->pname ?></td>
                                                 
                                                    <td><?= $v->useremail ?></td>
                                                    <td><?= $v->contact ?></td>
                                                    <td><?= $v->dob ?></td>
                                                     <td><?= $v->age ?></td>
                                                    <td ><?= $v->cc_name ?> </td>
                                                    <td ><?= $v->sec_name ?></td>
                                                  <!--    <td><?= $v->gender ?></td>
                                                     <td><?= $v->address ?></td>
                                                    <td><?= $v->parentname ?></td>
                                                    <td><?= $v->parentemail ?></td>
                                                    <td><?= $v->parentcontact ?></td>
                                                    <td class="datatable-ct"> 
                                                        <?php if($v->status == 'active'){?>
                                                        <i class="fa fa-check"></i> 
                                                    <?php } else {?>
                                                        <i class="fa fa-times"></i> 
                                                    <?php } ?>
                                                    </td> -->
                                                     <td><a href='<?=base_url("Main_c/edit_register/".$v->uu_did);?>' class="btn btn-sm btn-primary login-submit-cs" >Edit</a></td>
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