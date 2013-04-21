<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class General_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function view_item($data)
	{
		if(isset($data['where'])) { // si hay condicion
			$query = $this->db->get_where($data['table'], $data['where']);
			if($query->num_rows() > 0) {
				if($query->num_rows() == 1){
					return $query->row_array();
				} else {
					return $query->result_array();
				}
			} else { //no hay datos
				return null;
			}
		} else {
			$query = $this->db->get($data['table']);
			if($query->num_rows() > 0) {
				return $query->result_array();
			} else {
				return null;
			}
		}
	}

	function insert_item($data)
	{
		if($this->db->insert($data['table'], $data['valores'])) {
			return $this->db->insert_id();
		} else {
			return null;
		}
	}

	function edit_item($data)
	{
		if(isset($data['where'])) {
			// var_dump($data['where'])
			$query = $this->db->where($data['id'], $data['where']);
			if($this->db->update($data['table'], $data['cambios'])) {
				return true;
			}
		} else {	
			return null;
		}
	}

	function kill_item($data)
	{
		$this->db->where('id', $data['where']);
		if($this->db->delete($data['tabla'])) {
			return true;
		} else {
			return null;
		}
	}
}