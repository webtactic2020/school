    <?php require('header.php');?>
    <style type="text/css">
    	.custom-datatable-overright .btn-primary {
    padding: 5px 19px;
}

.anch:hover{
    color: #fff;
    padding: 3px;
    background: linear-gradient(to bottom, #9f5bdc 0%, #fe66cc 100%);
    outline: none;
}
    </style>


     <div class="basic-form-area mg-b-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sparkline12-list shadow-reset mg-t-30">
                                <div class="sparkline12-hd">
                                    <div class="main-sparkline12-hd">
                                        <h1>Select Subject</h1>
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
                                        <?php  echo form_open_multipart('Main_c/addSubjects', 'class="search_form" id="search_form2"');?>
                                            
                                                <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro">Subject</label>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="form-select-list">
                                                            

                  <select required class="form-control custom-select-value" name="subu_subid" id="cep" >
                            <option value="">Select Subject</option>
                        <?php foreach ($sub as $ss): ?>
                        
                                <option value="<?= $ss->sub_id ?>"><?= $ss->sub_name ?></option>
                            
                      <?php endforeach; ?>
                        </select> 
                        <?php echo form_error('subu_subid');?>    
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
                                        <h1>Curriculum <span class="table-project-n">Data</span> Table</h1>
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
                                            <thead id="showdata1">
                                           
                                            </thead>
                                            <tbody  id="showdata">

               

                     
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
<script type="text/javascript">



	    $("#cep").on("change", function() {

    $.ajax({ // create an AJAX call...
        data: $("#search_form2").serialize(), // get the form data
        type: 'POST', // GET or POST
        url: 'cirriculumdata1', // the file to call
        dataType:"json",
        success: function (data) { // on success..
            
           var html='';
           var i;
           html+='<tr>';
           for(i in data){
            html+='<th>'+data[i].subu_name+'</th>';
           }
           html+='</tr>';
           $('#showdata1').html(html);
        }

    });

        });

    $("#cep").on("change", function() {

    $.ajax({ // create an AJAX call...
        data: $("#search_form2").serialize(), // get the form data
        type: 'POST', // GET or POST
        url: 'cirriculumdata', // the file to call
        dataType:"json",
        success: function (data) { // on success..
            
           var html='';
           var i;
            const hr = [];
            const ni = [];
           html+='';
           for(i in data){
         /*   console.log(data[i].subt_id);*/
for (const [key, value] of Object.entries(data[i])) {
  /*console.log(key, value);*/
    var cc = key;   
    var str = value;
  
            
           
                  

  
        var res1 = str.split("~");  //seperate values 
        for(var v=0;v<res1.length;v++){

                res1[v] = '<a class="anch" href="addcir_pro/'+data[i].subt_id+'/'+res1[v]+'/'+'">'+res1[v]+'</a><br>';     //add a tag to values 
        }
       
               
        hr[cc] =  res1.join("");   //combine again values 

            
         /*console.log(hr[cc]);*/
           
    
           
}
/*
console.log(hr.c2);*/


/*foreach ($post as $key => $value) {
        $cc = $key;
             $c2 = $value;
             if($c2!=''){
                $post[$cc] = str_replace("~","<br>-",$c2,$i);
             }


     }*/
          

            html+='<tr><td>'+hr.c1+'</td><td>'+hr.c2+'</td><td>'+hr.c3+'</td><td>'+hr.c4+'</td><td>'+hr.c5+'</td></tr>';
           }
           html+='';
           $('#showdata').html(html);
        }

    });

        });
    






</script>
 