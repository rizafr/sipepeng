<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Access_lib{

	function __construct()
	{
		$this->CI =& get_instance();
		$this->level = $this->CI->session->userdata('level');
	}
	
	#menampilkan menu sesuai hak akses
	function hak_akses($akses){
		if ($akses == 1) {
		$data['menu_list'] = $this->CI->menu_model->select_all()->result();
		}
		#dkp
		if ($akses == 2) {
			$data['menu_list'] = $this->CI->menu_model->select_dkp()->result();
		}
		#pu
		if ($akses == 3) {
			$data['menu_list'] = $this->CI->menu_model->select_pu()->result();
		}
		return $data['menu_list'];
	}
	
	
}

# End of file access_lib.php
# Location: ./applicaion/libraries/access_lib.php