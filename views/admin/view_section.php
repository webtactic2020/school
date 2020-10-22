    <?php require('header.php');?>
            <div class="data-table-area mg-b-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sparkline13-list shadow-reset">
                                <div class="sparkline13-hd">
                                    <div class="main-sparkline13-hd">
                                        <h1>Section <span class="table-project-n">Data</span> Table</h1>
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
                                                    <th data-field="Section name" >Section name</th>
                                                    <th data-field="Class name" >Class name</th>
                                                    <th data-field="Teacher name" >Teacher name</th>
                                                    
                                                
                                                </tr>
                                            </thead>
                                            <tbody>

                     <?php if (count($sls)): ?>
                   <!--      <?php echo "<pre>";
                          print_r($vr);?> -->
                              
                                    
                                      <?php foreach ($sls as $s): ?>




                                                <tr>
                                                    <td></td>
                                                   <!--  <td><a href='<?=base_url("Main_c/edit_register/".$v->uu_did);?>' class="btn btn-sm btn-primary login-submit-cs" >Edit</a></td> -->
                                                    <td><?= $s->sec_name ?></td>
                                                    <td><?= $s->cc_name ?></td>
                                                    <td><?= $s->fname ?> <?= $s->pname ?> <?= $s->lname ?></td>
                                                  
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