<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_c extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('admin/index');
	}
    public function test()
  {
    $this->load->view('admin/test');
  }


/*     public function view_section()
  {

     $sls = $this->m->secinfo();
    
    $this->load->view('admin/view_section',['sls'=>$sls]);
  }*/

  public function add_section(){

     $cls = $this->m->classinfo();
     $teacher = $this->m->teacherinfo();

     $sls = $this->m->secinfo();

    $this->load->view('admin/add_section',['cls'=>$cls,'teacher'=>$teacher,'sls'=>$sls]);

  }


public function addsection(){

 $this->form_validation->set_rules('sec_name', 'Section name', 'required');

         if($this->form_validation->run()){
         
                    $post = $this->input->post();   //fetch all data from {View} form
                    
                    
                   if($this->m->m_addsection($post)){ // to {model}
                   
                        $this->session->set_flashdata('msg','Updated successfully');
                       $this->session->set_flashdata('msg_class','alert-success');
                            return redirect('Main_c/add_section');
                      
                  }else{  
                          $this->session->set_flashdata('msg','Not updated');
                         $this->session->set_flashdata('msg_class','alert-danger');
                              return redirect('Main_c/add_section');
                    }

             }else{
            
               return redirect('Main_c/add_section');
        }
                    

}


  public function add_class(){


   $cls = $this->m->classinfo();

    $this->load->view('admin/add_class',['cls'=>$cls]);

  }

public function addclass(){

 $this->form_validation->set_rules('cc_name', 'Class name', 'required');

         if($this->form_validation->run()){
         
                    $post = $this->input->post();   //fetch all data from {View} form
                    
                    
                   if($this->m->m_addclass($post)){ // to {model}
                   
                        $this->session->set_flashdata('msg','Updated successfully');
                       $this->session->set_flashdata('msg_class','alert-success');
                            return redirect('Main_c/add_class');
                      
                  }else{  
                          $this->session->set_flashdata('msg','Not updated');
                         $this->session->set_flashdata('msg_class','alert-danger');
                              return redirect('Main_c/add_class');
                    }

             }else{
            
               return redirect('Main_c/add_class');
        }
                    

}

	public function register()
	{

    $sls = $this->m->secinfo();
    $cls = $this->m->classinfo();
    
		$this->load->view('admin/register',['cls'=>$cls,'sls'=>$sls]);
	}

   public function view_register_teacher()
  {

    $teacher = $this->m->teacherinfo();
    
    $this->load->view('admin/view_register_teacher',['teacher'=>$teacher]);
  }

   public function edit_register_teacher($uid)
  {

    $tch = $this->m->view_register_teacherd($uid);
   
    
    $this->load->view('admin/edit_register_teacher',['tch'=>$tch]);
  }


    public function update_addteacher($uuid)
  {

 
        $this->form_validation->set_rules('fname', 'Fullname', 'required');
         $this->form_validation->set_rules('lname', 'Lastname', 'required');
          $this->form_validation->set_rules('pname', 'Middle', 'required');
        $this->form_validation->set_rules('contact', 'Contact', 'required|exact_length[10]');
       $this->form_validation->set_rules('useremail', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('parentname', 'Parent name', 'required');
        $this->form_validation->set_rules('parentcontact', 'Parent contact', 'required|exact_length[10]');
        $this->form_validation->set_rules('parentemail', 'Parent email', 'required|valid_email');
        $this->form_validation->set_rules('address', 'address', 'required');
     
      
  

        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

       
                if($this->form_validation->run()){
         
                    $post = $this->input->post();   //fetch all data from {View} form
                    
                    
                   if($this->m->update_addteacher($post)){ // to {model}
                   
                        $this->session->set_flashdata('msg','Updated successfully');
                       $this->session->set_flashdata('msg_class','alert-success');
                            return redirect('Main_c/edit_register_teacher/'.$uuid);
                      
                  }else{  
                          $this->session->set_flashdata('msg','Not updated');
                         $this->session->set_flashdata('msg_class','alert-danger');
                              return redirect('Main_c/edit_register_teacher/'.$uuid);
                    }
                    
        
                    
                
                 
                   
           

            
            
        }else{
            
               return redirect('Main_c/edit_register_teacher/'.$uuid);
        }
    }



    public function view_register()
  {

    $vr = $this->m->view_register();
    
    $this->load->view('admin/view_register',['vr'=>$vr]);
  }

  public function edit_register($uuid)
  {

     $sls = $this->m->secinfo();
    $cls = $this->m->classinfo();

    $vr = $this->m->view_register_userd($uuid);
   
    
    $this->load->view('admin/edit_register',['vr'=>$vr,'cls'=>$cls,'sls'=>$sls]);
  }

    public function update_adduser($uuid)
  {

 
        $this->form_validation->set_rules('fname', 'Fullname', 'required');
         $this->form_validation->set_rules('lname', 'Lastname', 'required');
          $this->form_validation->set_rules('pname', 'Middle', 'required');
        $this->form_validation->set_rules('contact', 'Contact', 'required|exact_length[10]');
       $this->form_validation->set_rules('useremail', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('parentname', 'Parent name', 'required');
        $this->form_validation->set_rules('parentcontact', 'Parent contact', 'required|exact_length[10]');
        $this->form_validation->set_rules('parentemail', 'Parent email', 'required|valid_email');
        $this->form_validation->set_rules('address', 'address', 'required');
     
      
  

        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

       
                if($this->form_validation->run()){
         
                    $post = $this->input->post();   //fetch all data from {View} form
                    
                    
                   if($this->m->update_adduser($post)){ // to {model}
                   
                        $this->session->set_flashdata('msg','Updated successfully');
                       $this->session->set_flashdata('msg_class','alert-success');
                            return redirect('Main_c/edit_register/'.$uuid);
                      
                  }else{  
                          $this->session->set_flashdata('msg','Not updated');
                         $this->session->set_flashdata('msg_class','alert-danger');
                              return redirect('Main_c/edit_register/'.$uuid);
                    }
                    
        
                    
                
                 
                   
           

            
            
        }else{
            
               return redirect('Main_c/edit_register/'.$uuid);
        }
    }

 

		public function adduser()
	{


		    $this->form_validation->set_rules('fname', 'Fullname', 'required');
         $this->form_validation->set_rules('lname', 'Lastname', 'required');
          $this->form_validation->set_rules('pname', 'Middle', 'required');
        $this->form_validation->set_rules('contact', 'Contact', 'required|exact_length[10]');
        $this->form_validation->set_rules('useremail', 'Email', 'required|valid_email|is_unique[users.useremail]');
         $this->form_validation->set_rules('parentname', 'Parent name', 'required');
        $this->form_validation->set_rules('parentcontact', 'Parent contact', 'required|exact_length[10]');
        $this->form_validation->set_rules('parentemail', 'Parent email', 'required|valid_email');
        $this->form_validation->set_rules('address', 'address', 'required');
       $this->form_validation->set_rules('password', 'Password', 'required');
       $this->form_validation->set_rules('confirm_password', 'Confirmation Password', 'required|matches[password]');  
      $this->form_validation->set_rules('typee','Type','required');
      
    

        $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');

        
                if($this->form_validation->run()){
                    
                    $post = $this->input->post();   //fetch all data from {View} form
                    
                    
                   if($this->m->m_insertuser($post)){ // to {model}
                   
                        $this->session->set_flashdata('msg','Updated successfully');
                       $this->session->set_flashdata('msg_class','alert-success');
                      
                  }else{  
                          $this->session->set_flashdata('msg','Not updated');
                         $this->session->set_flashdata('msg_class','alert-danger');
                    }
                    
                  $message = "This is your User Id :  ".$this->input->post('useremail')."  and  This is your password :  ".$this->input->post('password');
                    $this->email->from('developer@webtactic.in',set_value('fname'));
                    $this->email->to(set_value('useremail'));
                    $this->email->subject("Registration Greetings..");
                    $this->email->message($message);
                    $this->email->set_newline("\r\n");
                    
                      if(!$this->email->send()){
                        show_error($this->email->print_debugger());
                    }else{  
                        $this->session->set_flashdata('Emailmsg','Email is been sent!');
                        
                         return redirect('Main_c/register');
                    }
                 
                   
           

            
            
        }else{
            
           $this->register();  
        }
    }



   // Below function is called for validating select option field.
function select_validate($abcd)
{
// 'none' is the first option that is default "-------Choose City-------"
if($abcd=="none"){
$this->form_validation->set_message('typee', 'Please Select Your type.');
return false;
} else{
// User picked something.
return true;
}
}

  public function update_feedback(){
    
              $aid = $this->input->post('aid');   //fetch all data from {View} form
              
                  
$post = $this->input->post();
                if($aid){
         

                    
                   if($this->m->updateass($aid,$post)){ // to {model}
                   
                        $this->session->set_flashdata('msg','Updated successfully');
                       $this->session->set_flashdata('msg_class','alert-success');
                            return redirect('Main_c/view_feedback');
                      
                  }else{  
                          $this->session->set_flashdata('msg','Not updated');
                         $this->session->set_flashdata('msg_class','alert-danger');
                              return redirect('Main_c/view_feedback');
                    }

        }else{
            
                return redirect('Main_c/view_feedback');
        }
  
             
     }

  public function view_feedback(){

   

           $pro = $this->m->view_feedback();
            
            $this->load->view('admin/view_feedback',['pro'=>$pro]);
             
     }

      public function feedback_details(){
           

           $st = $this->m->view_feedback();
       
    
            $this->load->view('admin/feedback_details',['stu'=>$st]);
             
     }

      public function view_pending(){

   

           $pro = $this->m->view_pending();
            
            $this->load->view('admin/view_pending',['pro'=>$pro]);
             
     }
 
     public function project(){

        
            $this->load->view('admin/add_project');
             
     }
       public function view_project(){

           $st = $this->m->studentli();
            $pr = $this->m->projectli();
            $this->load->view('admin/view_project',['pro'=>$pr,'stu'=>$st]);
             
     }


          public function addpro(){
              
               $this->form_validation->set_rules('ppname', 'Project Name', 'required');
                $this->form_validation->set_rules('pdetail', 'Project Detail', 'required');
               
                $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
                
                
           $new_name=Date('Ymdhis');
            
             $config=[
                    'upload_path'=>'./assets/images/projects/',
                    'allowed_types'=>'gif|jpg|png|mp4|flv|pdf|doc|docx|txt|mp3|wav|zip|tar|rar',
                     'file_name'=>$new_name,
                    ];
            
           
              
                 $this->load->library('upload',$config);
                 
         
                 
                     if($this->form_validation->run() && $this->upload->do_upload('pimg')){
                        $post= $this->input->post();
                         $data =  $this->upload->data();
                        $post['pimg']=$data['file_name'];
                        
                   
                      
                   if($this->m->add_pro($post)){
                      $this->session->set_flashdata('msg',' Added successfully');
                       $this->session->set_flashdata('msg_class','alert-success');
                  }else{
                       $this->session->set_flashdata('msg',' Not Added');
                       $this->session->set_flashdata('msg_class','alert-danger');
                  }
                     $this->project();
                    
               }else{
                      $upload_error = $this->upload->display_errors('<p>', '</p>');

                    /* $cate = $this->Users_m->catlist();*/
                   
                    
          /*$this->load->view('project',compact('upload_error'));*/
           $this->project(compact('upload_error'));
        /*  $this->addcat();*/
              }
            
     }
     

      public function edit_project($uuid)
  {

    $pro = $this->m->edit_project($uuid);
   
    
    $this->load->view('admin/edit_project',['pro'=>$pro]);
  }

      public function update_project($pid){
                $this->form_validation->set_rules('ppname', 'Project Name', 'required');
                $this->form_validation->set_rules('pdetail', 'Project Detail', 'required');
               
                $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');


         $new_name=Date('Ymdhis');
     $config=[
            'upload_path'=>'./assets/images/projects/',
            'allowed_types'=>'gif|jpg|png|mp4|flv|pdf|doc|docx|txt|mp3|wav|zip|tar|rar',
             'file_name'=>$new_name,
            ];
               $this->load->library('upload',$config);
               $this->upload->do_upload('pimg');
              $data =  $this->upload->data();
          $oldname =  $this->input->post('oldname');
           if($data['file_ext']!=''){
                $post['pimg']=$data['file_name'];
                $path = $config['upload_path'].$oldname;
                 unlink($path);
           }else{
                $post['pimg']= $oldname;
       
           }
              if($this->form_validation->run()){
                 $data2['ppname']  =  $this->input->post('ppname');
                  $data2['pdetail']  =  $this->input->post('pdetail');
                $data2['pimg'] = $post['pimg'];
     
                  if($this->m->update_project($pid,$data2)){
                      $this->session->set_flashdata('msg','Project updated successfully');
                       $this->session->set_flashdata('msg_class','alert-success');
                  }else{
                       $this->session->set_flashdata('msg','Project Not updated');
                       $this->session->set_flashdata('msg_class','alert-danger');
                  }
                    return redirect('Main_c/edit_project/'.$pid);
              }else{
                
                   $upload_error = $this->upload->display_errors('<p>', '</p>');

              print_r(compact('upload_error'));
              exit;
     return redirect('Main_c/edit_project/'.$pid,compact('upload_error'));
        
              }
         
     }

           public function assign_project($uuid)
  {

    $pro = $this->m->edit_project($uuid);
     $sls = $this->m->secinfo();
    $cls = $this->m->classinfo();
     $teacher = $this->m->teacherinfo();
    
    $this->load->view('admin/assign_project',['pro'=>$pro,'cls'=>$cls,'sls'=>$sls,'teacher'=>$teacher]);
  }

         public function addas($uuid){
          
          $post= $this->input->post();
          
                if($this->m->add_as($post)){
                      $this->session->set_flashdata('msg',' Assigned successfully');
                       $this->session->set_flashdata('msg_class','alert-success');
                       
                       
                  }else{
                       $this->session->set_flashdata('msg',' Not Assigned');
                       $this->session->set_flashdata('msg_class','alert-danger');
                  }
                  
                 
                   return redirect('Main_c/assign_project/'.$uuid);
          
          
      }
     

         public function add_notice()
  {
     
     $sls = $this->m->secinfo();
    $cls = $this->m->classinfo();
     $teacher = $this->m->teacherinfo();
     $stud = $this->m->view_register();
    
    $this->load->view('admin/add_notice',['stud'=>$stud,'cls'=>$cls,'sls'=>$sls,'teacher'=>$teacher]);

  
  }

       public function addnotice()
  {


 $post= $this->input->post();
            $new_name=Date('Ymdhis');
     $config=[
            'upload_path'=>'./assets/images/notice/',
            'allowed_types'=>'gif|jpg|png|mp4|flv|pdf|doc|docx|txt|mp3|wav|zip|tar|rar',
             'file_name'=>$new_name,
            ];
               $this->load->library('upload',$config);
               $this->upload->do_upload('n_img');
              $data =  $this->upload->data();
               if($data['file_ext']!=''){
                $post['n_img']=$data['file_name'];
           }else{
                $post['n_img']= '';
       
           }

    if($post['n_cls']!=''){
 $post['n_cls'] = implode(",",$post['n_cls']);
    }
   

                if($this->m->add_notice($post)){
                      $this->session->set_flashdata('msg',' Posted successfully');
                       $this->session->set_flashdata('msg_class','alert-success');
                       
                       
                  }else{
                       $this->session->set_flashdata('msg',' Not Posted');
                       $this->session->set_flashdata('msg_class','alert-danger');
                  }
                  
                 
                   return redirect('Main_c/add_notice/'.$uuid);
  }


    public function view_notice()
  {

    $pro = $this->m->view_notice();
   
    
    $this->load->view('admin/view_notice',['pro'=>$pro]);
  }

          

     public function add_Subjects()
  {
      $sub = $this->m->Subjectinfo();
    
    $this->load->view('admin/add_Subjects',['sub'=>$sub]);

  
  }

   public function addSubjects()
  {
     
              $post= $this->input->post();
                if($this->m->addSubjects($post)){
                      $this->session->set_flashdata('msg',' Posted successfully');
                       $this->session->set_flashdata('msg_class','alert-success');
                       
                       
                  }else{
                       $this->session->set_flashdata('msg',' Not Posted');
                       $this->session->set_flashdata('msg_class','alert-danger');
                  }
                  
                 
                   return redirect('Main_c/add_Subjects');

  
  }


      public function add_Subjectsunits()
  {
     
     $sub = $this->m->Subjectinfo();
    $this->load->view('admin/add_Subjectsunits',['sub'=>$sub]);

  
  }

   public function addSubjectsunits()
  {
     
              $post= $this->input->post();
                if($this->m->addSubjectsunits($post)){
                      $this->session->set_flashdata('msg',' Posted successfully');
                       $this->session->set_flashdata('msg_class','alert-success');
                       
                       
                  }else{
                       $this->session->set_flashdata('msg',' Not Posted');
                       $this->session->set_flashdata('msg_class','alert-danger');
                  }
                  
                 
                   return redirect('Main_c/add_Subjectsunits');

  
  }

      public function add_Topics()
  {
     
     $sub = $this->m->Subjectinfo();
     $unit = $this->m->Subjectsunitsinfo();
    $this->load->view('admin/add_Topics',['sub'=>$sub,'unit'=>$unit]);

  
  }

   public function addtopicssinfo()
  {

  	
  	$post = $this->input->post($post);
     
      /* foreach ($post as $key => $value) {
       	$cc = $key;
       		 $c2 = $value;
       		 if($c2!=''){
       		 	$post[$cc] = str_replace("~","<br>-",$c2,$i);
       		 }


     }*/


                if($this->m->addtopicssinfo($post)){
                      $this->session->set_flashdata('msg',' Posted successfully');
                       $this->session->set_flashdata('msg_class','alert-success');
                       
                       
                  }else{
                       $this->session->set_flashdata('msg',' Not Posted');
                       $this->session->set_flashdata('msg_class','alert-danger');
                  }
                  
                 
                   return redirect('Main_c/add_Topics');

  
  }

      public function view_curriculum()
  {
     
     $sub = $this->m->Subjectinfo();
     $unit = $this->m->Subjectsunitsinfo();
    $this->load->view('admin/view_curriculum',['sub'=>$sub,'unit'=>$unit]);

  
  }

    public function cirriculumdata()
  {
     $post = $this->input->post('subu_subid');

      $data = $this->m->cirriculumdata($post);
      echo json_encode($data);
  
  }

public function cirriculumdata1()
  {
     $post = $this->input->post('subu_subid');

      $data = $this->m->cirriculumdata1($post);
      echo json_encode($data);
  
  }

/*   public function view_Subjects()
  {

    $sub = $this->m->Subjectinfo();

    
    $this->load->view('admin/view_Subjects',['sub'=>$sub]);
  }*/

     public function view_Subjectsunits()
  {
    $sub = $this->m->Subjectinfo();
    $post = $this->input->post('subu_subid');
    $unit ="";
    if($post!=''){

        $unit = $this->m->cirriculumdata1($post);

    }

    $this->load->view('admin/view_Subjectsunits',['sub'=>$sub,'unit'=>$unit]);
  }

     public function addcir_pro()
  {
    
   $cir_id = $this->uri->segment(3);

    $unit = $this->m->cirriculum_pro($cir_id);
  
   $topic = $this->uri->segment(4);


    $this->load->view('admin/addcir_pro',['topic'=>$topic,'sub'=>$unit]);
  }



	     public function __construct(){
        parent::__construct();
      $this->load->model('User_m', 'm');
     
      if (! $this->session->userdata('utype'))
         return redirect('Usersignin_c');
         
      
      if ($this->session->userdata('utype')=='s')
         return redirect('Usersignin_c');
         
      }


}
?>