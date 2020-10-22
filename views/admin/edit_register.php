<?php require('header.php');?>
<style>

#hidden_div {
    display: none;
}
</style>

   <?php if (count($vr)): ?>
          <!--               <?php echo "<pre>";
                          print_r($vr);

                          ?>  -->
                         
                                    
                                      <?php foreach ($vr as $v): ?>
            <!-- Basic Form Start -->
            <div class="basic-form-area mg-b-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sparkline12-list shadow-reset mg-t-30">
                                <div class="sparkline12-hd">
                                    <div class="main-sparkline12-hd">
                                        <h1>Update User Registration From</h1>
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
                                                     <?php  echo form_open('Main_c/update_adduser/'.$v->uu_did, 'class="search_form" id="search_form"');?>
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <label class="login2 ">First name</label>
                    <?php echo form_input(['class'=>'form-control','type'=>'text','id'=>'contact_form_name','name'=>'fname','value'=>set_value("fname",$v->fname),'placeholder'=>'First name']); ?> 
                 <?php echo form_error('fname');?>
                                                                     
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <label class="login2">Middle name</label>
             <?php echo form_input(['class'=>'form-control','type'=>'text','id'=>'contact_form_name','name'=>'pname','value'=>set_value("pname",$v->pname),'placeholder'=>'Middle name']); ?> 
                 <?php echo form_error('pname');?>
                                                                </div>

                                                                 <div class="col-lg-4">
                                                                    <label class="login2">Last name</label>
                      <?php echo form_input(['class'=>'form-control','type'=>'text','id'=>'contact_form_name','name'=>'lname','value'=>set_value("lname",$v->lname),'placeholder'=>'Last name']); ?> 
                 <?php echo form_error('lname');?>
                                                                </div>
                                                             
                                                            </div>
                                                        </div>
                                                                   <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <label class="login2 ">Email</label>
                     <?php echo form_input(['class'=>'form-control','onblur'=>'validateEmail(this);','type'=>'email','id'=>'contact_form_email','name'=>'useremail','value'=>set_value("useremail",$v->useremail),'placeholder'=>'Email ID']); ?> 
                 <?php echo form_error('useremail');?>
                                                                     
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <label class="login2">Mobile</label>
            <?php echo form_input(['class'=>'form-control','type'=>'text','id'=>'contact_form_name','name'=>'contact','maxlength'=>'10','pattern'=>'\d{10}','title'=>'Please enter exactly 10 digits','value'=>set_value("contact",$v->contact),'placeholder'=>'Contact']); ?> 
                 <?php echo form_error('contact');?>
                                                                </div>

                                                                 <div class="col-lg-4">
                                                                    <label class="login2">Address</label>
                    <?php echo form_input(['class'=>'form-control','type'=>'text','id'=>'contact_form_name','name'=>'address','value'=>set_value("address",$v->address),'placeholder'=>'Address']); ?> 
                 <?php echo form_error('address');?>
                                                                </div>
                                                             
                                                            </div>
                                                        </div>
                                                                <div class="form-group-inner">
                                                            <div class="row">
                                                                 <div class="col-lg-4">
                                                                    <label class="login2">Gender</label>
                                                                   <div class="bt-df-checkbox">
    <b>  Male </b>      <input <?php if($v->gender == "Male"){?> checked <?php } ?> id="gender" name="gender" type="radio" class="" value="Male" />
                              

   <b style="padding-left: 10px">  Female </b>  <input <?php if($v->gender == "Female"){?> checked <?php } ?>  id="gender2" name="gender" type="radio" class=""  value="Female"  />
                           

                                                                      
                                                                    </div>
                                                                </div>
                                                             
                                                                <div class="col-lg-4">
                                                                    <label class="login2 ">DOB</label>
             <?php echo form_input(['class'=>'form-control','type'=>'date','id'=>'datePickerId','name'=>'dob','value'=>set_value("dob",$v->dob),'placeholder'=>'Address','onblur'=>"getAge(this.value)"]); ?>
                   <?php echo form_error('dob');?>
                                                                     
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <label class="login2">Age</label>
    <?php echo form_input(['class'=>'form-control','type'=>'text','id'=>'age','name'=>'age','value'=>set_value("age",$v->age),'placeholder'=>'Age']); ?> 
                 <?php echo form_error('age');?>
                                                                </div>

                                                              
                                                            </div>
                                                        </div>
                                             
                                                                   
                                                             <div class="form-group-inner">
                                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <label class="login2 ">Parent name</label>
                 <?php echo form_input(['class'=>'form-control','type'=>'text','id'=>'contact_form_name','name'=>'parentname','value'=>set_value("parentname",$v->parentname),'placeholder'=>'Parent name']); ?> 
                         <?php echo form_error('parentname');?>

                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <label class="login2">Parent Mobile</label>
                                <?php echo form_input(['class'=>'form-control','type'=>'text','id'=>'contact_form_name','name'=>'parentcontact','maxlength'=>'10','pattern'=>'\d{10}','title'=>'Please enter exactly 10 digits','value'=>set_value("parentcontact",$v->parentcontact),'placeholder'=>'Parent contact']); ?> 
                         <?php echo form_error('parentcontact');?>
                                                                </div>

                                                                 <div class="col-lg-4">
                                                                    <label class="login2">Parent Email</label>
                         <?php echo form_input(['class'=>'form-control','onblur'=>'validateEmail(this);','type'=>'text','id'=>'contact_form_name','name'=>'parentemail','value'=>set_value("parentemail",$v->parentemail),'placeholder'=>'Parent email']); ?> 
                         <?php echo form_error('parentemail');?>
                                                                </div>
                                                             
                                                            </div> 
                                                        </div>


                                            


                                                     <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro">Select Class</label>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="form-select-list">
                                                            

                  <select class="form-control custom-select-value" name="class_id"  onchange="makeSubmenu(this.value)">
                            <option>Select Class</option>
                            <option selected value="<?= $v->cc_id ?>"><?= $v->cc_name ?></option>
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
                                                                    <label class="login2 pull-right pull-right-pro"> Section</label>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <div class="form-select-list">
                                                            

            
                          <select class="form-control custom-select-value" id="categorySelect" name="sec_id">
                             <option selected value="<?= $v->uu_sec ?>"><?= $v->sec_name ?></option>
                            
                          
          
                                
                            
                    
                        </select>   
                        <?php echo form_error('sec_id');?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                             <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <label class="login2 pull-right pull-right-pro">Roll No.</label>
                                                                </div>
                                                                <div class="col-lg-6">
                  <?php echo form_input(['class'=>'form-control','type'=>'text','id'=>'contact_form_name','name'=>'r_no','value'=>set_value("r_no",$v->uu_rollno),'placeholder'=>'Roll number']); ?> 
                         <?php echo form_error('r_no');?>
                                                                </div>
                                                            </div>
                                                        </div>

                    

                                  <?php  echo form_hidden('uu_uid',$v->uu_uid);?> <!--  student table id -->
                                  <?php  echo form_hidden('uu_did',$v->uu_did);?>  <!-- userdetail table id -->
                                  <?php  echo form_hidden('status','active');?>
                       <?php  echo form_hidden('added_by', $this->session->userdata("user_email"));?>

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
        function showDiv(divId, element)
{
    document.getElementById(divId).style.display = element.value == 's' ? 'block' : 'none';
}




function validateEmail(emailField){
        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

        if (reg.test(emailField.value) == false) 
        {
            alert('Invalid Email Address');
            return false;
        }

        return true;

}


function getAge(DOB) {
    var today = new Date();
    var birthDate = new Date(DOB);
    var age = today.getFullYear() - birthDate.getFullYear();
    var m = today.getMonth() - birthDate.getMonth();
    if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
        age = age - 1;
    }

 document.getElementById("age").value = age;
   /* alert(age);*/
}

 /*       var a="Hello";
        function sel(element)
{
    var val = element.value;
    var $xyz1 = val;
    var jvalue = $xyz1;
    document.getElementById('xyzuvw').value = $xyz1;
     alert($xyz1);
     return $xyz1;
}*/


    /*    var subcategory = {
            1: ["Nokia", "Redmi", "Samsung"],
            2: ["Shirt", "Pant", "T-shirt"]
        }*/
    
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

datePickerId.max = new Date().toISOString().split("T")[0];

    </script>
