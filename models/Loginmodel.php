<?php 
class Loginmodel extends CI_Model{
    public function isvalidate($name,$password){

        $q = $this->db->where(['useremail'=>$name])
        ->get('users');
        /* echo "<pre>";
        print_r($q);
        print_r($q->result());
        exit();*/ 
        
        /* $password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);   use this while registration*/

        if($q->num_rows()){

               $hash = $q->row()->password;
         
            if (password_verify($password, $hash)) {
                return $q->result();
            } else {
                  return $msg_error =  'Invalid password';
            }
        }else{
               return   $msg_error = 'Invalid User Id';
        }
    }
}
?>