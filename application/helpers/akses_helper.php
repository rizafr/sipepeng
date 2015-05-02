<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
if ( ! function_exists('akses'))
{
	function hak_akses($session)
	{
		 #menampilkan menu sesuai hak ases
            #admin
            if ($session == 1) {
                $data['menu_list'] = $this->menu_model->select_all()->result();
            }
            #dkp
            if ($session == 2) {
                $data['menu_list'] = $this->menu_model->select_dkp()->result();
            }
            #pu
            if ($session == 3) {
                $data['menu_list'] = $this->menu_model->select_pu()->result();
            }
		return $data['menu_list'];
	}		
}