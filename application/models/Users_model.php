<?php


class Users_Model extends CI_Model {

	function verify_password($user,$password){

        // $user = $this->db->escape($user);
        // $password = $this->db->escape($password);

		$this->db->select('name');
		$this->db->where('password', $password);
		$query = $this->db->get('usr');
        $array = $query->result_array();
        // $db_user = $query->row_array('name');
        if ($row = @$array[0]) {
            return $row['name'] === $user ? 1 : 0;
        }
		return 0;    
    }
}