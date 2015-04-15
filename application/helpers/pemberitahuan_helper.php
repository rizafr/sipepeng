<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	if ( ! function_exists('pemberitahuan'))
	
	{
		
		function status(){
			#jumlah status menu
			#drainase
		   $data['jumDrainaseVerifikasi'] = $this->home_model->getJumlahDrainaseVerifikasi();
		   $data['jumDrainaseBelumDilaksanakan'] = $this->home_model->getJumlahDrainaseBelumDilaksanakan();
		   $data['jumDrainaseBelumSelesai'] = $this->home_model->getJumlahDrainaseBelumSelesai();
		   $data['jumStatusDrainase']=  $data['jumDrainaseVerifikasi'] +  $data['jumDrainaseBelumDilaksanakan'] +  $data['jumDrainaseBelumSelesai'];
			
		}
		
	}
	
?>