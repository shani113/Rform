<?php
class Authmodel extends CI_Model{
    public function create($formArray){
         $this->db->insert('user4',$formArray);
    }
    //return row array based on entered email
    public function checkuser($email)
    {
      $this->db->where('email',$email);
       return $row =$this->db->get('user4')->row_array();
    }
}
?>