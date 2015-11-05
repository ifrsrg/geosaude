<?php


class Users_Model extends CI_Model {

	function verify_password($user,$password){

        $user = $this->db->escape($user);
        $password = $this->db->escape($password);

		$this->db->select('name');
		$this->db->where('password', $password);
		$db_user = $this->db->get('users')->row_array();

		if ($user == $db_user){
			$i = 1;
		} else {
			$i = 0;
		}
		
		return $i;
    }
}