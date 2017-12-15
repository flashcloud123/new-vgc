<?php 



/**
* 
*/
class HomeModel extends CI_Model
{
	
	public function get($table) {

		$q = $this->db->order_by('created_at','DESC')->get($table);

		if ($q->num_rows()) {
			
			return $q->row();
		}
	}
}