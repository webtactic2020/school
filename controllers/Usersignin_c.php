<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usersignin_c extends CI_Controller {

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
		$this->load->view('Usersignin_v');
	}

		public function login()
	{
           		$this->form_validation->set_rules('useremail', 'Name', 'required|valid_email');
                 $this->form_validation->set_rules('password', 'Password', 'required');
                 $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
                if($this->form_validation->run()){
                    
                    
            $useremail = $this->input->post('useremail');
           $password = $this->input->post('password');
           
           
             $this->load->model('loginmodel');
             $uid = $this->loginmodel->isvalidate($useremail,$password);
           
           if(is_array($uid)){
              
                foreach($uid as $row) {
                    $type =  $row->type; // etc blah blah ..
                    $useremail =  $row->useremail;
                     $fname =  $row->fname;
                      $pname =  $row->pname;
                       $lname =  $row->lname;
                     $uid2 =  $row->uid;
                     $status =  $row->status;
                     $address =  $row->address;
                     $prename =  $row->prename;
                     $school_id =  $row->school_id;
                  
                }
  
                   $this->session->set_userdata('user_id',$uid2);
                   $this->session->set_userdata('fname',$fname);
                   $this->session->set_userdata('pname',$pname);
                   $this->session->set_userdata('lname',$lname);
                   $this->session->set_userdata('user_email',$useremail);
                   $this->session->set_userdata('utype',$type);
                   $this->session->set_userdata('status',$status);
                   $this->session->set_userdata('address',$address);
                   $this->session->set_userdata('prename',$prename);
                   $this->session->set_userdata('school_id',$school_id);
                 

                 if($type == 'm'){
 				return redirect('Supadmin_c/index');
          }else if($type == 'a' or $type == 't' ){
 				return redirect('Main_c/index');
          }else{
          	return redirect('folk_c/index');
          }
                   
             
                
                 
             
                }else{
                   $this->session->set_flashdata('msg',$uid);
                       
                 $this->index(); 
      
              }
            
        }else{
            
            $this->index(); 
        }
    }
    
    

     

      public function logout(){
   
     $this->session->sess_destroy();
     return redirect('Usersignin_c');

    } 
}
?>