<?php 
class Main_model extends CI_model{
	//return the specific user with id
	public function getUser($user_id){
		return $this->db->select('user_id,full_name')->where('user_id', $user_id)->get('users')->row_array();
	}

	//delete record from the table
	public function delete($id){
		$this->db->where('user_id',$id)->delete('sessions');
	}
}
?>