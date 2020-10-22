<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class User_m extends CI_Model{


      public function teacherinfo(){
     
         $query = $this->db->where('type','t')
          ->order_by('uid','DESC')
         ->get('users');
         return $query->result();
    }

  public function view_register_teacherd($id){
     
         $query = $this->db->where('uid',$id)
         ->get('users');
         return $query->result();
    }


    public function m_addsection($post_data){

  return  $affected_rows = $this->db->insert('section',$post_data);

}

public function m_addclass($post_data){

  return  $affected_rows = $this->db->insert('class',$post_data);

}

public function m_insertuser($array){


$fname = $array['fname'];
$lname = $array['lname'];
$pname = $array['pname'];
$r_no = $array['r_no'];
$contact  = $array['contact'];
$useremail  = $array['useremail'];
$address  = $array['address'];
$typee  = $array['typee'];
$status  = $array['status'];
$pass  = $array['password'];
$added_by  = $array['added_by'];
$datee  = $array['datee'];
$dob  = $array['dob'];
$age  = $array['age'];
$sec_id  = $array['sec_id'];
$parentemail  = $array['parentemail'];
$parentname  = $array['parentname'];
$parentcontact  = $array['parentcontact'];
$class_id  = $array['class_id'];
$gender  = $array['gender'];
if($gender == 'Male'){
$prename = 'Master';
}else{
  $prename = 'Miss';
}
$password = $password = password_hash($pass, PASSWORD_DEFAULT); 




  
  $data = array(
      'fname'=>$fname,
      'lname'=>$lname,
      'pname'=>$pname,
       'prename'=>$prename,
      'gender'=>$gender,
      'useremail'=>$useremail,
      'address'=>$address,
      'type'=>$typee,
        'status'=>$status,
        'parentemail'=>$parentemail,
        'parentname'=>$parentname,
        'parentcontact'=>$parentcontact,
        'password'=>$password,
        'added_by'=>$added_by,
        'datee'=>$datee,
        'dob'=>$dob,
        'age'=>$age,
        'contact'=>$contact
    );
         
     $affected_rows =  $this->db->insert('users',$data);
      $insert_id = $this->db->insert_id();

if($typee == 's'){

   $post_data = array(
        'uu_class'=>$class_id,
      'uu_uid'=>$insert_id,
      'uu_rollno'=>$r_no,
      'uu_sec'=>$sec_id,

);
     return  $affected_rows =   $this->db->insert('userdetail',$post_data);

}else{

    $data2 = array(
      't_uid'=>$insert_id,
      't_fname'=>$fname,
      't_lname'=>$lname,
      't_pname'=>$pname,
       't_prename'=>$prename,
      't_gender'=>$gender,
      't_useremail'=>$useremail,
      't_address'=>$address,
      't_type'=>$typee,
        't_status'=>$status,
        't_parentemail'=>$parentemail,
        't_parentname'=>$parentname,
        't_parentcontact'=>$parentcontact,
        't_password'=>$password,
        't_added_by'=>$added_by,
        't_datee'=>$datee,
        't_dob'=>$dob,
        't_age'=>$age,
        't_contact'=>$contact
    );


  return  $affected_rows =   $this->db->insert('teachers',$data2);
}

   return  $affected_rows;
          
      }


public function update_addteacher($array){
   
$uid = $array['uid'];
$fname = $array['fname'];
$lname = $array['lname'];
$pname = $array['pname'];
$contact  = $array['contact'];
$useremail  = $array['useremail'];
$address  = $array['address'];
$status  = $array['status'];
$added_by  = $array['added_by'];
$datee  = $array['datee'];
$dob  = $array['dob'];
$age  = $array['age'];
$parentemail  = $array['parentemail'];
$parentname  = $array['parentname'];
$parentcontact  = $array['parentcontact'];
$gender  = $array['gender'];
if($gender == 'Male'){
$prename = 'Master';
}else{
  $prename = 'Miss';
}




  
  $data = array(
      'fname'=>$fname,
      'lname'=>$lname,
      'pname'=>$pname,
       'prename'=>$prename,
      'gender'=>$gender,
      'useremail'=>$useremail,
      'address'=>$address,
        'status'=>$status,
        'parentemail'=>$parentemail,
        'parentname'=>$parentname,
        'parentcontact'=>$parentcontact,
        'added_by'=>$added_by,
        'datee'=>$datee,
        'dob'=>$dob,
        'age'=>$age,
        'contact'=>$contact
    );
         
     $affected_rows =  $this->db->where('uid',$uid)
                          ->update('users',$data);


      $data2 = array(
      't_fname'=>$fname,
      't_lname'=>$lname,
      't_pname'=>$pname,
       't_prename'=>$prename,
      't_gender'=>$gender,
      't_useremail'=>$useremail,
      't_address'=>$address,
        't_status'=>$status,
        't_parentemail'=>$parentemail,
        't_parentname'=>$parentname,
        't_parentcontact'=>$parentcontact,
        't_added_by'=>$added_by,
        't_datee'=>$datee,
        't_dob'=>$dob,
        't_age'=>$age,
        't_contact'=>$contact
    );

     $affected_rows =  $this->db->where('t_uid',$uid)
                          ->update('teachers',$data2);


   return  $affected_rows;
          
      }

public function update_adduser($array){
   

$uu_uid = $array['uu_uid'];
$uu_did = $array['uu_did'];
$fname = $array['fname'];
$lname = $array['lname'];
$pname = $array['pname'];
$r_no = $array['r_no'];
$contact  = $array['contact'];
$useremail  = $array['useremail'];
$address  = $array['address'];
$status  = $array['status'];
$added_by  = $array['added_by'];
$datee  = $array['datee'];
$dob  = $array['dob'];
$age  = $array['age'];
$sec_id  = $array['sec_id'];
$parentemail  = $array['parentemail'];
$parentname  = $array['parentname'];
$parentcontact  = $array['parentcontact'];
$class_id  = $array['class_id'];
$gender  = $array['gender'];
if($gender == 'Male'){
$prename = 'Master';
}else{
  $prename = 'Miss';
}




  
  $data = array(
      'fname'=>$fname,
      'lname'=>$lname,
      'pname'=>$pname,
       'prename'=>$prename,
      'gender'=>$gender,
      'useremail'=>$useremail,
      'address'=>$address,
        'status'=>$status,
        'parentemail'=>$parentemail,
        'parentname'=>$parentname,
        'parentcontact'=>$parentcontact,
        'added_by'=>$added_by,
        'datee'=>$datee,
        'dob'=>$dob,
        'age'=>$age,
        'contact'=>$contact
    );
         
     $affected_rows =  $this->db->where('uid',$uu_uid)
                          ->update('users',$data);
    

   $post_data = array(
        'uu_class'=>$class_id,
      'uu_rollno'=>$r_no,
      'uu_sec'=>$sec_id,
);
     return  $affected_rows =   $this->db->where('uu_uid',$uu_uid)
                          ->update('userdetail',$post_data);


   return  $affected_rows;
          
      }


                public function view_register(){
    
                      $subcat = $this->db->select('users.*, userdetail.*,class.*,section.*')
                         ->from('userdetail')
                        
                         ->join('class', 'userdetail.uu_class = class.cc_id')
                         ->join('users', 'userdetail.uu_uid = users.uid')
                          ->join('section', 'userdetail.uu_sec = section.sec_id')
                         ->order_by('uu_did','DESC')
                         ->get();
                    return  $subcat->result();
    }


                 public function view_register_userd($id){
     

       
             $subcat = $this->db->select('users.*, userdetail.*,class.*,section.*')
                         ->from('userdetail')
                         ->where('uu_did',$id)
                         ->join('class', 'userdetail.uu_class = class.cc_id')
                         ->join('users', 'userdetail.uu_uid = users.uid')
                          ->join('section', 'userdetail.uu_sec = section.sec_id')
                         ->order_by('uu_did','DESC')
                         ->get();
                    return  $subcat->result();
    }



       public function add_pro($array){
          
            return $this->db->insert('project',$array);
          
      }


  public function edit_project($id){
     
         $query = $this->db->where('pid',$id)
         ->get('project');
         return $query->result();
    }

     public function update_project($id,Array $cat){
          return $this->db->where('pid',$id)
                          ->update('project',$cat);
          
      }

        public function classinfo(){
     
         $query = $this->db->get('class');
         return $query->result();
    }


        public function secinfo(){
     
        $subcat = $this->db->select('users.*, section.*,class.*')
                         ->from('section')
                        
                         ->join('class', 'section.cls_id = class.cc_id')
                         ->join('users', 'section.tea_id = users.uid')
                        /* ->order_by('sec_id','DESC')*/
                         ->get();
                    return  $subcat->result();


         $query = $this->db->get('section');
         return $query->result();
    }

          public function studentli(){
     
         $query = $this->db->where('type','s')
         ->get('users');
         return $query->result();
    }
    
        public function projectli(){
     
         $query = $this->db->order_by('pid', 'desc')
         ->get('project');
         return $query->result();
    }
    
           public function add_as($array){

$class_id = $array['class_id'];
$sec_id = $array['sec_id'];
$tea_id = $array['tea_id'];
$a_pid = $array['a_pid'];
$datee = $array['datee'];
$as_read = 'unread';
  $subcat = $this->db->select('users.*, userdetail.*,class.*')
                         ->from('userdetail')
                         ->where('uu_class',$class_id)
                         ->where('uu_sec',$sec_id)
                         ->join('class', 'userdetail.uu_class = class.cc_id')
                         ->join('users', 'userdetail.uu_uid = users.uid')
                         ->order_by('uu_did','DESC')
                         ->get();
$data  = $subcat->result();


$sql = array(); 
foreach( $data as $row ) {
    $sql[] = '("'.$row->uid.'", "'.$a_pid.'", "'.$tea_id.'", "'.$as_read.'", "'.$datee.'")';
}
       return  $affected_rows = $this->db->query('INSERT INTO assignment (a_sid, a_pid, a_tid, as_read, datee) VALUES '.implode(',', $sql));
  
          
      }
   
    
                  public function review_pro($id){
     

       
                      $subcat = $this->db->select('assignment.*, project.*, users.*')
                         ->from('assignment')
                         ->where('a_tid',$id)
                         ->join('project', 'assignment.a_pid = project.pid')
                         ->join('users', 'assignment.a_sid = users.uid')
                         ->order_by('aid','DESC')
                         ->get();
                    return  $subcat->result();
    }

                  public function view_feedback(){

                    if($this->session->userdata('utype')=='t'){
                      $tid = $this->session->userdata('user_id');


                        $subcat = $this->db->select('assignment.*, project.*, users.*, userdetail.*,section.*, class.*')
                         ->from('assignment')
                          ->where('a_tid',$tid)
                          ->where_not_in('preport','')
                         ->join('project', 'assignment.a_pid = project.pid')
                          ->join('userdetail', 'assignment.a_sid  = userdetail.uu_uid')
                           ->join('class', 'userdetail.uu_class = class.cc_id')
                           ->join('section', 'userdetail.uu_sec = section.sec_id')
                         ->join('users', 'assignment.a_sid = users.uid')
                         ->order_by('aid','DESC')
                         ->get();
                    }else{

                         $subcat = $this->db->select('assignment.*, project.*, users.*, userdetail.*,section.*, class.*')
                         ->from('assignment')
                          ->where_not_in('preport','')
                         ->join('project', 'assignment.a_pid = project.pid')
                          ->join('userdetail', 'assignment.a_sid  = userdetail.uu_uid')
                           ->join('class', 'userdetail.uu_class = class.cc_id')
                           ->join('section', 'userdetail.uu_sec = section.sec_id')
                         ->join('users', 'assignment.a_sid = users.uid')
                         ->order_by('aid','DESC')
                         ->get();

                    }
     
                    
                     

                  return  $subcat->result();
    }


             public function view_pending(){

                    if($this->session->userdata('utype')=='t'){
                      $tid = $this->session->userdata('user_id');


                        $subcat = $this->db->select('assignment.*, project.*, users.*, userdetail.*, class.*')
                         ->from('assignment')
                          ->where('a_tid',$tid)
                         ->join('project', 'assignment.a_pid = project.pid')
                          ->join('userdetail', 'assignment.a_sid  = userdetail.uu_uid')
                           ->join('class', 'userdetail.uu_class = class.cc_id')
                         ->join('users', 'assignment.a_sid = users.uid')
                         ->order_by('aid','DESC')
                         ->get();
                    }else{

                         $subcat = $this->db->select('assignment.*, project.*, users.*, userdetail.*, class.*')
                         ->from('assignment')
                         ->join('project', 'assignment.a_pid = project.pid')
                          ->join('userdetail', 'assignment.a_sid  = userdetail.uu_uid')
                           ->join('class', 'userdetail.uu_class = class.cc_id')
                         ->join('users', 'assignment.a_sid = users.uid')
                         ->order_by('aid','DESC')
                         ->get();

                    }
     
                    
                     

                  return  $subcat->result();
    }
    
          public function updateass($id,Array $cat){
          return $this->db->where('aid',$id)
                          ->update('assignment',$cat);
          
      }



      public function add_notice($post_data){
      

  return  $affected_rows = $this->db->insert('notice',$post_data);

}

  public function view_notice(){
 

   $subcat = $this->db->select('notice.*, users.*')
                         ->from('notice')                        
                         ->join('users', 'notice.n_addby = users.uid')
                         ->order_by('n_id','DESC')
                         ->get();

                         return  $subcat->result();
     

}



   public function addSubjects($array){
          
            return $this->db->insert('subjects',$array);
          
      }


         public function Subjectinfo(){
     
         $query = $this->db->get('subjects');
         return $query->result();
    }


public function addSubjectsunits($array){
          
            return $this->db->insert('subjectunits',$array);
          
      }

               public function Subjectsunitsinfo(){
     
         $query = $this->db->get('subjectunits');
         return $query->result();
    }

      public function addtopicssinfo($array){
          
            return $this->db->insert('subtopics',$array);
          
      }

              public function cirriculumdata($id){

                 $subcat = $this->db->select(' subjects.*, subtopics.*')
                         ->from('subtopics')
                          ->where('subt_sub',$id)
                  
                         ->join('subjects', 'subtopics.subt_sub = subjects.sub_id')
         
                         ->get();

                          return  $subcat->result();
    }
                  public function cirriculumdata1($id){

                 $subcat = $this->db->select('subjectunits.*, subjects.*')
                         ->from('subjectunits')
                          ->where('subu_subid',$id)
                  
                         ->join('subjects', 'subjectunits.subu_subid = subjects.sub_id')
                        

                         ->get();

                          return  $subcat->result();
    }

    public function cirriculum_pro($id){
 

   $subcat = $this->db->select('subtopics.*, subjects.*')
                         ->from('subtopics')
                          ->where('subt_id',$id)                        
                         ->join('subjects', 'subtopics.subt_sub = subjects.sub_id')
                         
                         ->get();

                         return  $subcat->result();
     

}

}/*print_r($this->db->last_query()); */
?>