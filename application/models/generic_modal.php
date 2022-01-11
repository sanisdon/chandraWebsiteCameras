<?php
class Generic_modal extends CI_Model 
{
	
	function saverecords($table,$data)
	{
        $this->db->insert($table,$data);
        return true;
	}
	
}

?>