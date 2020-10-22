<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Folk_c extends CI_Controller {

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

     $not = $this->m->view_notice();
      $use = $this->m->user_details();

foreach($use as $row) {
                    $class =  $row->uu_class; // etc blah blah ..
                    $sec =  $row->uu_sec;
                    $rolno =  $row->uu_rollno;
                    $classname =  $row->cc_name; 
                    $tea_id =  $row->tea_id;
                }
  
                   $this->session->set_userdata('classid',$class);
                   $this->session->set_userdata('sec',$sec);
                   $this->session->set_userdata('rolno',$rolno);
                   $this->session->set_userdata('classname',$classname);
                   $this->session->set_userdata('tea_id',$tea_id);

		$this->load->view('index',['not'=>$not,'use'=>$use]);


	}
	
	     public function viewass(){


         
         $id = $this->session->userdata('user_id');

          $this->m->update_notification($id);
       
          $pr = $this->m->view_pro($id);
          $pr1 = $this->m->view_pro_completed();
          $pr2 = $this->m->view_pro_pending();
           $this->load->view('viewas',['pro'=>$pr,'pro1'=>$pr1,'pro2'=>$pr2]);
          
     }

                 public function addrepo(){

             
                $this->form_validation->set_rules('preport', 'Project Report', 'required');
               
                $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
                
                
           $new_name=Date('Ymdhis');
            
             $config=[
                    'upload_path'=>'./assets/images/feedback/',
                    'allowed_types'=>'gif|jpg|png|mp4|flv|pdf|doc|docx|txt|mp3|wav|zip|tar|rar',
                     'file_name'=>$new_name,
                    ];
            
           
              
                 $this->load->library('upload',$config);
                 

                 
                     if($this->form_validation->run() && $this->upload->do_upload('reportimg')){
  
                       $id= $this->input->post('ass_id');
                         $data =  $this->upload->data();
                          $post['preport']= $this->input->post('preport');
                          
                           $post['reportimg']=$data['file_name'];
                        
             
                      
                   if($this->m->updateass($id,$post)){
                      $this->session->set_flashdata('msg',' Added successfully');
                       $this->session->set_flashdata('msg_class','alert-success');
                  }else{
                       $this->session->set_flashdata('msg',' Not Added');
                       $this->session->set_flashdata('msg_class','alert-danger');
                  }
                     $this->viewass();
                    
               }else{
                      $upload_error = $this->upload->display_errors('<p>', '</p>');

                    /* $cate = $this->Users_m->catlist();*/
                   
                    
          /*$this->load->view('project',compact('upload_error'));*/
           $this->viewass(compact('upload_error'));
        /*  $this->addcat();*/
              }
            
          
     }


	     public function app_v(){
         
           $this->load->view('app_v');
          
     }


       public function addapp(){
         
         $post = $this->input->post();
     
         if($post){
         
                 
                    
                    
                   if($this->m->m_addapp($post)){ // to {model}
                   
                        $this->session->set_flashdata('msg','Updated successfully');
                       $this->session->set_flashdata('msg_class','alert-success');
                            return redirect('Folk_c/app_v');
                      
                  }else{  
                          $this->session->set_flashdata('msg','Not updated');
                         $this->session->set_flashdata('msg_class','alert-danger');
                              return redirect('Folk_c/app_v');
                    }

             }else{
            
               return redirect('Folk_c/app_v');
        }
          
     }



       public function about(){
         
           $this->load->view('about');
          
     }

	     public function __construct(){
        parent::__construct();
      $this->load->model('Folk_m', 'm');
     
      if (! $this->session->userdata('utype'))
         return redirect('Usersignin_c');

       if ($this->session->userdata('utype')=='a' or $this->session->userdata('utype')=='t')
         return redirect('Usersignin_c');

     $notification = $this->m->notification();
    $this->load->view('Head');
    $this->load->view('Header',['notification'=>$notification]);
         
      }


}
?>
