  <?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Folk_m extends CI_Model{
                 public function view_pro($id){
     

       
                      $subcat = $this->db->select('assignment.*, project.*, users.*,assignment.datee as dt')
                         ->from('assignment')
                         ->where('a_sid',$id)
                         ->join('project', 'assignment.a_pid = project.pid')
                         ->join('users', 'assignment.a_sid = users.uid')
                         ->order_by('aid','DESC')
                         ->get();
                   
                       /*  print_r($this->db->last_query());*/
                    return  $subcat->result();
    }

                     public function view_pro_completed(){
     

                      $id = $this->session->userdata('user_id');
                      $subcat = $this->db->select('assignment.*, project.*, users.*,assignment.datee as dt')
                         ->from('assignment')
                         ->where('a_sid',$id)
                          ->where_not_in('preport','')
                         ->join('project', 'assignment.a_pid = project.pid')
                         ->join('users', 'assignment.a_sid = users.uid')
                         ->order_by('aid','DESC')
                         ->get();

                      /*   print_r($this->db->last_query());*/
                    return  $subcat->result();
    }

                     public function view_pro_pending(){
     
                      $id = $this->session->userdata('user_id');
                      $subcat = $this->db->select('assignment.*, project.*, users.*,assignment.datee as dt')
                         ->from('assignment')
                         ->where('a_sid',$id)
                         ->where('preport','')
                         ->join('project', 'assignment.a_pid = project.pid')
                         ->join('users', 'assignment.a_sid = users.uid')
                         ->order_by('aid','DESC')
                         ->get();

                   
                    return  $subcat->result();
    }


     public function view_notice(){
 
                      
                      $subcat = $this->db->select('notice.*, users.*')
                         ->from('notice')    
                         ->join('users', 'notice.n_addby = users.uid')
                         ->order_by('n_id','DESC')
                         ->get();

                         return  $subcat->result();
}
   public function user_details(){

                         $uu_uid = $this->session->userdata('user_id');

                         $subcat = $this->db->select('users.*, userdetail.*, class.*, section.*')
                         ->from('userdetail')
                          ->where('uu_uid',$uu_uid)
                           ->join('class', 'userdetail.uu_class = class.cc_id')
                         ->join('users', 'userdetail.uu_uid = users.uid')
                         ->join('section', 'userdetail.uu_sec = section.sec_id')
                         ->get();

                          return  $subcat->result();
     

}

              public function updateass($id,Array $cat){
               return $this->db->where('aid',$id)
                          ->update('assignment',$cat);
          
      }

      public function m_addapp($post_data){

  return  $affected_rows = $this->db->insert('application',$post_data);

}


   public function notification(){


      $id = $this->session->userdata('user_id');
     $data3 = array(
    
        'as_read'=> 'unread',
        'a_sid'=>$id
    );

           $notification = $this->db->select('assignment.*, project.*, users.*,assignment.datee as dt')
                         ->from('assignment')
                         ->where($data3)
                         ->join('project', 'assignment.a_pid = project.pid')
                         ->join('users', 'assignment.a_sid = users.uid')
                         ->order_by('aid','DESC')
                         ->get();
   
                          return  $notification->result();

      }     


       public function update_notification($id){
        
        $data3 = array(
          
              'as_read'=>'read'
          );

        $query = $this->db->where('a_sid', $id)
                          ->update('assignment', $data3);

                           return $query;
      }

    }

    /*   print_r($this->db->last_query());*/
?>

