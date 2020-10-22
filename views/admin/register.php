<?php require('header.php');?>
<style>

#hidden_div {
    display: none;
}
hr.style18 { 
  height: 30px; 
  border-style: solid; 
  border-color: #8c8b8b; 
  border-width: 1px 0 0 0; 
  border-radius: 20px; 
} 
hr.style18:before { 
  display: block; 
  content: ""; 
  height: 30px; 
  margin-top: -31px; 
  border-style: solid; 
  border-color: #8c8b8b; 
  border-width: 0 0 1px 0; 
  border-radius: 20px; 
}

</style>
            <!-- Basic Form Start -->
            <div class="basic-form-area mg-b-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sparkline12-list shadow-reset mg-t-30">
                                <div class="sparkline12-hd">
                                    <div class="main-sparkline12-hd">
                                        <h1>Registration From</h1>
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
                                                     <?php  echo form_open('Main_c/adduser', 'class="search_form" id="search_form"');?>
                                                     <div class="form-group-inner" style="background: #ca60d56b; border-radius: 10px;">
                                                        <label class="login2">Select User Type</label>
                                                            <div class="row">

                                                               <div class="col-lg-4">
                                                                  
                                                                   
<!--        <select required class="form-control custom-select-value" name="typee" id="test" onchange="showDiv('hidden_div', this)">
                        <option value="">None</option>
                            <option value="s">Student</option>
                            <option value="p">Parent</option>
                     <?php  if ($this->session->userdata('utype') == 'a'){  ?>  
                            <option value="t">Teacher</option>
                            <option value="a">Admin</option>
                        <?php } ?>  
                      </select> -->

                        <label class="login2 ">Student
                       <input type="radio" name="typee" value="s" onchange="showDiv('hidden_div', this)" >
               </label> 
                     

                    <?php echo form_error('typee');?>    
                                                                </div>
                                                               

                                                        <div class="col-lg-4">
                                                                  
                    <label class="login2 ">Teacher
                      <input type="radio" name="typee" value="t" onchange="showDiv('hidden_div', this)"> </label>
                                                                </div>
                                                               

                                                               <div class="col-lg-4">
                       <label class="login2 ">Admin
                      <input type="radio" name="typee" value="a" onchange="showDiv('hidden_div', this)"> </label>                                       

                                                                </div>
                                                                </div>


                                                        </div>
                                                        <hr class="style18">
                                                        <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <label class="login2 ">First name</label>
                    <?php echo form_input(['class'=>'form-control','type'=>'text','id'=>'contact_form_name','name'=>'fname','value'=>set_value("fname"),'placeholder'=>'First name']); ?> 
                 <?php echo form_error('fname');?>
                                                                     
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <label class="login2">Middle name</label>
             <?php echo form_input(['class'=>'form-control','type'=>'text','id'=>'contact_form_name','name'=>'pname','value'=>set_value("pname"),'placeholder'=>'Middle name']); ?> 
                 <?php echo form_error('pname');?>
                                                                </div>

                                                                 <div class="col-lg-4">
                                                                    <label class="login2">Last name</label>
                      <?php echo form_input(['class'=>'form-control','type'=>'text','id'=>'contact_form_name','name'=>'lname','value'=>set_value("lname"),'placeholder'=>'Last name']); ?> 
                 <?php echo form_error('lname');?>
                                                                </div>
                                                             
                                                            </div>
                                                        </div>
                                                                   <div class="form-group-inner">
                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <label class="login2 ">Email</label>
                     <?php echo form_input(['class'=>'form-control','onblur'=>'validateEmail(this);','type'=>'email','id'=>'contact_form_email','name'=>'useremail','value'=>set_value("useremail"),'placeholder'=>'Email ID']); ?> 
                 <?php echo form_error('useremail');?>
                                                                     
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <label class="login2">Mobile</label>
            <?php echo form_input(['class'=>'form-control','onblur'=>'validatecontact(this);','type'=>'text','id'=>'contact_form_name','name'=>'contact','maxlength'=>'10','pattern'=>'\d{10}','title'=>'Please enter exactly 10 digits','value'=>set_value("contact"),'placeholder'=>'Contact']); ?> 
                 <?php echo form_error('contact');?>
                                                                </div>

                                                                 <div class="col-lg-4">
                                                                    <label class="login2">Address</label>
                    <?php echo form_input(['class'=>'form-control','type'=>'text','id'=>'contact_form_name','name'=>'address','value'=>set_value("address"),'placeholder'=>'Address']); ?> 
                 <?php echo form_error('address');?>
                                                                </div>
                                                             
                                                            </div>
                                                        </div>
                                                                <div class="form-group-inner">
                                                            <div class="row">
      <div class="col-lg-4">
                                                                    <label class="login2">Gender</label>
                                                                   <div class="bt-df-checkbox">
   <label class="login2"> <b>  Male </b>      <input checked id="gender" name="gender" type="radio" class="" value="Male" /></label>
                              

   <label class="login2"><b style="padding-left: 10px">  Female </b>  <input  id="gender2" name="gender" type="radio" class=""  value="Female"  /></label>
                           

                                                                      
                                                                    </div>
                                                                </div>


                                                                <div class="col-lg-4">
                                                                    <label class="login2 ">DOB</label>
             <?php echo form_input(['class'=>'form-control','type'=>'date','id'=>'datePickerId','name'=>'dob','value'=>set_value("dob"),'placeholder'=>'Address','onblur'=>"getAge(this.value)"]); ?>
                   <?php echo form_error('dob');?>
                                                                     
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <label class="login2">Age</label>
    <?php echo form_input(['class'=>'form-control','type'=>'text','id'=>'age','name'=>'age','value'=>set_value("age"),'placeholder'=>'Age']); ?> 
                 <?php echo form_error('age');?>
                                                                </div>

                                                           
                                                             
                                                            </div>
                                                        </div>
                                             
                                                                   
                                                             <div class="form-group-inner">
                                                                            <div class="row">
                                                                <div class="col-lg-4">
                                                                    <label class="login2 ">Parents name</label>
                 <?php echo form_input(['class'=>'form-control','type'=>'text','id'=>'contact_form_name','name'=>'parentname','value'=>set_value("parentname"),'placeholder'=>'Parent name']); ?> 
                         <?php echo form_error('parentname');?>

                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <label class="login2">Parents Mobile</label>
                                <?php echo form_input(['class'=>'form-control','onblur'=>'validatecontact(this);','type'=>'text','id'=>'contact_form_name','name'=>'parentcontact','maxlength'=>'10','pattern'=>'\d{10}','title'=>'Please enter exactly 10 digits','value'=>set_value("parentcontact"),'placeholder'=>'Parent contact']); ?> 
                         <?php echo form_error('parentcontact');?>
                                                                </div>

                                                                 <div class="col-lg-4">
                                                                    <label class="login2">Parents Email</label>
                         <?php echo form_input(['class'=>'form-control','onblur'=>'validateEmail(this);','type'=>'text','id'=>'contact_form_name','name'=>'parentemail','value'=>set_value("parentemail"),'placeholder'=>'Parent email']); ?> 
                         <?php echo form_error('parentemail');?>
                                                                </div>
                                                             
                                                            </div> 
                                                        </div>

                                                                      <div class="form-group-inner">
                                                                            <div class="row">
                                                                <div class="col-lg-4">
                    <label class="login2 ">Password</label>
                  <?php echo form_input(['class'=>'form-control','id'=>'contact_form_password','type'=>'password','name'=>'password','value'=>set_value("password"),'placeholder'=>'Password']); ?> 
                      <?php echo form_error('password');?>

                                                                </div>
                                                                <div class="col-lg-4">
                                      <label class="login2">Confirm Password</label>
               <?php echo form_input(['class'=>'form-control','id'=>'contact_form_password','type'=>'password','name'=>'confirm_password','value'=>set_value("confirm_password"),'placeholder'=>'Confirm Password']); ?> 
                      <?php echo form_error('confirm_password');?>
                                                                </div>

                                                       
                                                             
                                                            </div> 
                                                        </div>
                                            
    <div id="hidden_div">

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
                                                                    <label class="login2 pull-right pull-right-pro">Roll No.</label>
                                                                </div>
                                                                <div class="col-lg-6">
                  <?php echo form_input(['class'=>'form-control','type'=>'text','id'=>'contact_form_name','name'=>'r_no','value'=>set_value("r_no"),'placeholder'=>'Roll number']); ?> 
                         <?php echo form_error('r_no');?>
                                                                </div>
                                                            </div>
                                                        </div>

                    

                                  <?php  echo form_hidden('status','active');?>
                       <?php  echo form_hidden('added_by', $this->session->userdata("user_email"));?>

                        <?php
                        date_default_timezone_set('Asia/Kolkata');
                        $date = date( 'd-m-Y h:i:s A', time () );
                        ?>
                        <?php  echo form_hidden('datee',$date);?>
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

function validatecontact(contactField){
        var reg = /\d{10}/;

        if (reg.test(contactField.value) == false) 
        {
            alert('Invalid Mobile Number');
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
