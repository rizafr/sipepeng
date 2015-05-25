<?php
	
	if (!defined('BASEPATH'))
    exit('No direct script access allowed');
	
	class Home_model extends CI_Model {
		
		public function __construct() {
			parent::__construct();
		}
		
		#jumlah user
		
		public function getJumlahPengguna() {
			return $this->db->count_all('pengguna');
		}
		
		#jumlah artesis
		
		#data usulan
		public function artesis_awal() {
			$this->db->where('status_data_awal', '1');
			$this->db->from('artesis');
			return $this->db->get();
		}
		
				
		# selesai
		public function artesis_dilaksanakan() {
			$this->db->where('status_sudah_dilaksanakan', '1');
			$this->db->where('status_tidak_dilaksanakan', '0');
			$this->db->from('artesis');
			return $this->db->get();
		}	
		
		# tidak terlaksana
		public function artesis_tidak_dilaksanakan() {
			$this->db->where('status_tidak_dilaksanakan', '1');
			$this->db->from('artesis');
			return $this->db->get();
		}
		
		/////////////// DRAINASE /////////////////////////////
		#jumlah drainase
		
		#data usulan
		public function drainase_awal() {
			$this->db->where('status_data_awal', '1');
			$this->db->from('drainase');
			return $this->db->get(); 
		}
		
		#data verifikasi
		public function getJumlahDrainaseVerifikasi() {
			$this->db->where('status_data_awal', '1');
			$this->db->where('status_verifikasi', '0');
			$this->db->where('status_tidak_dilaksanakan', '0');
			$this->db->from('drainase');
			return count($this->db->get()->result()); 
		}
		
		#data verifikasi
		public function getJumlahDrainaseBelumDilaksanakan() {
			$this->db->where('status_data_awal', '1');
			$this->db->where('status_verifikasi', '1');
			$this->db->where('status_sedang_dilaksanakan', '0');
			$this->db->where('status_tidak_dilaksanakan', '0');
			$this->db->from('drainase');
				return count($this->db->get()->result()); 
		}
		
		#data verifikasi
		public function getJumlahDrainaseBelumSelesai() {
			$this->db->where('status_data_awal', '1');
			$this->db->where('status_verifikasi', '1');
			$this->db->where('status_sedang_dilaksanakan', '1');
			$this->db->where('status_sudah_dilaksanakan', '0');
			$this->db->where('status_tidak_dilaksanakan', '0');
			$this->db->from('drainase');
				return count($this->db->get()->result()); 
		}
		
				
		# selesai
		public function drainase_dilaksanakan() {
			$this->db->where('status_sudah_dilaksanakan', '1');
			$this->db->where('status_tidak_dilaksanakan', '0');
			$this->db->from('drainase');
			return $this->db->get();
		}	
		
		# tidak terlaksana
		public function drainase_tidak_dilaksanakan() {
			$this->db->where('status_tidak_dilaksanakan', '1');
			$this->db->from('drainase');
			return $this->db->get(); 
		}
		/////////////// END DRAINASE /////////////////////////////
		
		/////////////// JALAN /////////////////////////////
		#jumlah jalan
		
			
		#data usulan
		public function jalan_awal() {
			$this->db->where('status_data_awal', '1');
			$this->db->from('jalan');
			return $this->db->get();
		}
		
				
		# selesai
		public function jalan_dilaksanakan() {
			$this->db->where('status_sudah_dilaksanakan', '1');
			$this->db->where('status_tidak_dilaksanakan', '0');
			$this->db->from('jalan');
			return $this->db->get();
		}	
		
		# tidak terlaksana
		public function jalan_tidak_dilaksanakan() {
			$this->db->where('status_tidak_dilaksanakan', '1');
			$this->db->from('jalan');
			return $this->db->get();
		}
		/////////////// END JALAN /////////////////////////////
		
		
		
		/////////////// KIRMIR /////////////////////////////
		#jumlah kirmir
		
		
		
		#data usulan
		public function kirmir_awal() {
			$this->db->where('status_data_awal', '1');
			$this->db->from('kirmir');
			return $this->db->get();
		}
		
				
		# selesai
		public function kirmir_dilaksanakan() {
			$this->db->where('status_sudah_dilaksanakan', '1');
			$this->db->where('status_tidak_dilaksanakan', '0');
			$this->db->from('kirmir');
			return $this->db->get();
		}	
		
		# tidak terlaksana
		public function kirmir_tidak_dilaksanakan() {
			$this->db->where('status_tidak_dilaksanakan', '1');
			$this->db->from('kirmir');
			return $this->db->get();
		}
		/////////////// END KIRMIR /////////////////////////////
		
		/////////////// MCK /////////////////////////////
		
		#jumlah mck
		
		#data usulan
		public function mck_awal() {
			$this->db->where('status_data_awal', '1');
			$this->db->from('mck');
			return $this->db->get();
		}
		
				
		# selesai
		public function mck_dilaksanakan() {
			$this->db->where('status_sudah_dilaksanakan', '1');
			$this->db->where('status_tidak_dilaksanakan', '0');
			$this->db->from('mck');
			return $this->db->get();
		}	
		
		# tidak terlaksana
		public function mck_tidak_dilaksanakan() {
			$this->db->where('status_tidak_dilaksanakan', '1');
			$this->db->from('mck');
			return $this->db->get();
		}	
		/////////////// END MCK /////////////////////////////
		
		/////////////// SEPTICTANK /////////////////////////////
		
		#data usulan
		public function septictank_awal() {
			$this->db->where('status_data_awal', '1');
			$this->db->from('septictank');
			return $this->db->get();
		}
		
				
		# selesai
		public function septictank_dilaksanakan() {
			$this->db->where('status_sudah_dilaksanakan', '1');
			$this->db->where('status_tidak_dilaksanakan', '0');
			$this->db->from('septictank');
			return $this->db->get();
		}	
		
		# tidak terlaksana
		public function septictank_tidak_dilaksanakan() {
			$this->db->where('status_tidak_dilaksanakan', '1');
			$this->db->from('septictank');
			return $this->db->get();
		}
		/////////////// END SEPTICTANK /////////////////////////////
		
		#jumlah septictank_komunal
		
		#data usulan
		public function septictank_komunal_awal() {
			$this->db->where('status_data_awal', '1');
			$this->db->from('septictank_komunal');
			return $this->db->get();
		}
		
				
		# selesai
		public function septictank_komunal_dilaksanakan() {
			$this->db->where('status_sudah_dilaksanakan', '1');
			$this->db->where('status_tidak_dilaksanakan', '0');
			$this->db->from('septictank_komunal');
			return $this->db->get();
		}	
		
		# tidak terlaksana
		public function septictank_komunal_tidak_dilaksanakan() {
			$this->db->where('status_tidak_dilaksanakan', '1');
			$this->db->from('septictank_komunal');
			return $this->db->get();
		}
		
		#jumlah sumur_dangkal
		
		#data usulan
		public function sumur_dangkal_awal() {
			$this->db->where('status_data_awal', '1');
			$this->db->from('sumur_dangkal');
			return $this->db->get();
		}
		
				
		# selesai
		public function sumur_dangkal_dilaksanakan() {
			$this->db->where('status_sudah_dilaksanakan', '1');
			$this->db->where('status_tidak_dilaksanakan', '0');
			$this->db->from('sumur_dangkal');
			return $this->db->get();
		}	
		
		# tidak terlaksana
		public function sumur_dangkal_tidak_dilaksanakan() {
			$this->db->where('status_tidak_dilaksanakan', '1');
			$this->db->from('sumur_dangkal');
			return $this->db->get();
		}
		
		/////////////// SUMUR RESAPAN /////////////////////////////
		#jumlah jalan
		
			
		#data usulan
		public function sumur_resapan_awal() {
			$this->db->where('status_data_awal', '1');
			$this->db->from('sumur_resapan');
			return $this->db->get();
		}
		
				
		# selesai
		public function sumur_resapan_dilaksanakan() {
			$this->db->where('status_sudah_dilaksanakan', '1');
			$this->db->where('status_tidak_dilaksanakan', '0');
			$this->db->from('sumur_resapan');
			return $this->db->get();
		}	
		
		# tidak terlaksana
		public function sumur_resapan_tidak_dilaksanakan() {
			$this->db->where('status_tidak_dilaksanakan', '1');
			$this->db->from('sumur_resapan');
			return $this->db->get();
		}
		/////////////// END sumur_resapan /////////////////////////////
                
                /////////////// SUMUR LAIN LAIN /////////////////////////////
		#jumlah jalan
		
			
		#data usulan
		public function lain_awal() {
			$this->db->where('status_data_awal', '1');
			$this->db->from('lain');
			return $this->db->get();
		}
		
				
		# selesai
		public function lain_dilaksanakan() {
			$this->db->where('status_sudah_dilaksanakan', '1');
			$this->db->where('status_tidak_dilaksanakan', '0');
			$this->db->from('lain');
			return $this->db->get();
		}	
		
		# tidak terlaksana
		public function lain_tidak_dilaksanakan() {
			$this->db->where('status_tidak_dilaksanakan', '1');
			$this->db->from('lain');
			return $this->db->get();
		}
		/////////////// END lain /////////////////////////////
		
		
		#getJumlahJenisKelamin
		public function getJumlahJenisKelamin() {
			$sql = "SELECT jk_pengusaha, count(jk_pengusaha) as jumlah FROM `ekonomi_umkm` group by jk_pengusaha";
			return $this->db->query($sql);
		}
		
		#getJumlahKlasifikasiPerusahaan
		public function getJumlahKlasifikasiPerusahaan() {
			$sql = "SELECT klasifikasi_perusahaan, count(klasifikasi_perusahaan) as jumlah FROM `ekonomi_umkm` group by klasifikasi_perusahaan";
			return $this->db->query($sql);
		}
		
		//select
		public function select_all() {
			$sql = "select * from product_categories";
			return $this->db->query($sql);
		}
		
		
		
		function getCategories() {
			$sql = "SELECT * FROM product_categories";
			$data = $this->db->query($sql);
			return $data;
		}
		
		public function getCategoryById($id_category) {
			$this->db->select('*');
			$this->db->where('id_category', $id_category);
			$query = $this->db->get($this->table, 1);
			
			if ($query->num_rows() == 1) {
				return $query->row_array();
			}
		}
		
		public function get_dropdown_list() {
			$this->db->from($this->table);
			$this->db->order_by('category_name', 'asc');
			$result = $this->db->get();
			$return = array();
			if ($result->num_rows() > 0) {
				$return[''] = "--Select a Category--";
				foreach ($result->result_array() as $row) {
					$return[$row['id_category']] = $row['category_name'];
				}
			}
			return $return;
		}
		
	}
	
?>
