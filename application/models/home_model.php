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
		
		public function getJumlahArtesis() {
			return $this->db->count_all('artesis');
		}
		
		/////////////// DRAINASE /////////////////////////////
		#jumlah drainase
		
		public function getJumlahDrainase() {
			return $this->db->count_all('drainase');
		}
		
		#data usulan
		public function getJumlahDrainaseAwal() {
			$this->db->where('status_data_awal', '1');
			$this->db->where('status_tidak_dilaksanakan', '0');
			$this->db->from('drainase');
			return $this->db->count_all_results();
		}
		
		#belum diverifikasi
		public function getJumlahDrainaseVerifikasi() {
			$this->db->where('status_verifikasi', '0');
			$this->db->where('status_tidak_dilaksanakan', '0');
			$this->db->from('drainase');
			return $this->db->count_all_results();
		}
		
		#belum dilaksanakan
		public function getJumlahDrainaseBelumDilaksanakan() {
			$this->db->where('status_sedang_dilaksanakan', '0');
			$this->db->where('status_tidak_dilaksanakan', '0');
			$this->db->from('drainase');
			return $this->db->count_all_results();
		}
		
		#belum selesai
		public function getJumlahDrainaseBelumSelesai() {
			$this->db->where('status_sudah_dilaksanakan', '0');
			$this->db->where('status_tidak_dilaksanakan', '0');
			$this->db->from('drainase');
			return $this->db->count_all_results();
		}	
		
		# selesai
		public function getJumlahDrainaseSelesai() {
			$this->db->where('status_sudah_dilaksanakan', '1');
			$this->db->where('status_tidak_dilaksanakan', '0');
			$this->db->from('drainase');
			return $this->db->count_all_results();
		}	
		
		# tidak terlaksana
		public function getJumlahDrainaseTidakDilaksanakan() {
			$this->db->where('status_tidak_dilaksanakan', '1');
			$this->db->from('drainase');
			return $this->db->count_all_results();
		}	
		/////////////// END DRAINASE /////////////////////////////
		
		/////////////// JALAN /////////////////////////////
		#jumlah jalan
		
		public function getJumlahJalan() {
			return $this->db->count_all('jalan');
		}
		
		#data usulan
		public function getJumlahJalanAwal() {
			$this->db->where('status_data_awal', '1');
			$this->db->where('status_tidak_dilaksanakan', '0');
			$this->db->from('jalan');
			return $this->db->count_all_results();
		}
		
		#belum diverifikasi
		public function getJumlahJalanVerifikasi() {
			$this->db->where('status_verifikasi', '0');
			$this->db->where('status_tidak_dilaksanakan', '0');
			$this->db->from('jalan');
			return $this->db->count_all_results();
		}
		
		#belum dilaksanakan
		public function getJumlahJalanBelumDilaksanakan() {
			$this->db->where('status_sedang_dilaksanakan', '0');
			$this->db->where('status_tidak_dilaksanakan', '0');
			$this->db->from('jalan');
			return $this->db->count_all_results();
		}
		
		#belum selesai
		public function getJumlahJalanBelumSelesai() {
			$this->db->where('status_sudah_dilaksanakan', '0');
			$this->db->where('status_tidak_dilaksanakan', '0');
			$this->db->from('jalan');
			return $this->db->count_all_results();
		}		
		
		# selesai
		public function getJumlahJalanSelesai() {
			$this->db->where('status_sudah_dilaksanakan', '1');
			$this->db->where('status_tidak_dilaksanakan', '0');
			$this->db->from('jalan');
			return $this->db->count_all_results();
		}	
		
		# tidak terlaksana
		public function getJumlahJalanTidakDilaksanakan() {
			$this->db->where('status_tidak_dilaksanakan', '1');
			$this->db->from('jalan');
			return $this->db->count_all_results();
		}
		/////////////// END JALAN /////////////////////////////
		
		
		
		/////////////// KIRMIR /////////////////////////////
		#jumlah kirmir
		
		public function getJumlahKirmir() {
			return $this->db->count_all('kirmir');
		}
		
		#belum diverifikasi
		public function getJumlahKirmirVerifikasi() {
			$this->db->where('status_verifikasi', '0');
			$this->db->where('status_tidak_dilaksanakan', '0');
			$this->db->from('kirmir');
			return $this->db->count_all_results();
		}
		
		#belum dilaksanakan
		public function getJumlahKirmirBelumDilaksanakan() {
			$this->db->where('status_sedang_dilaksanakan', '0');
			$this->db->where('status_tidak_dilaksanakan', '0');
			$this->db->from('kirmir');
			return $this->db->count_all_results();
		}
		
		#belum selesai
		public function getJumlahKirmirBelumSelesai() {
			$this->db->where('status_sudah_dilaksanakan', '0');
			$this->db->where('status_tidak_dilaksanakan', '0');
			$this->db->from('kirmir');
			return $this->db->count_all_results();
		}		
		
		# selesai
		public function getJumlahKirmirSelesai() {
			$this->db->where('status_sudah_dilaksanakan', '1');
			$this->db->where('status_tidak_dilaksanakan', '0');
			$this->db->from('kirmir');
			return $this->db->count_all_results();
		}	
		
		# tidak terlaksana
		public function getJumlahKirmirTidakDilaksanakan() {
			$this->db->where('status_tidak_dilaksanakan', '1');
			$this->db->from('kirmir');
			return $this->db->count_all_results();
		}
		/////////////// END KIRMIR /////////////////////////////
		
		/////////////// MCK /////////////////////////////
		
		#jumlah mck
		
		public function getJumlahMck() {
			return $this->db->count_all('mck');
		}
		
		#belum diverifikasi
		public function getJumlahMckVerifikasi() {
			$this->db->where('status_verifikasi', '0');
			$this->db->where('status_tidak_dilaksanakan', '0');
			$this->db->from('mck');
			return $this->db->count_all_results();
		}
		
		#belum dilaksanakan
		public function getJumlahMckBelumDilaksanakan() {
			$this->db->where('status_sedang_dilaksanakan', '0');
			$this->db->where('status_tidak_dilaksanakan', '0');
			$this->db->from('mck');
			return $this->db->count_all_results();
		}
		
		#belum selesai
		public function getJumlahMckBelumSelesai() {
			$this->db->where('status_sudah_dilaksanakan', '0');
			$this->db->where('status_tidak_dilaksanakan', '0');
			$this->db->from('mck');
			return $this->db->count_all_results();
		}		
		/////////////// END MCK /////////////////////////////
		
		/////////////// SEPTICTANK /////////////////////////////
		
		#jumlah septictank
		
		public function getJumlahSeptictank() {
			return $this->db->count_all('septictank');
		}
		#belum diverifikasi
		public function getJumlahSeptictankVerifikasi() {
			$this->db->where('status_verifikasi', '0');
			$this->db->where('status_tidak_dilaksanakan', '0');
			$this->db->from('septictank');
			return $this->db->count_all_results();
		}
		
		#belum dilaksanakan
		public function getJumlahSeptictankBelumDilaksanakan() {
			$this->db->where('status_sedang_dilaksanakan', '0');
			$this->db->where('status_tidak_dilaksanakan', '0');
			$this->db->from('septictank');
			return $this->db->count_all_results();
		}
		
		#belum selesai
		public function getJumlahSeptictankBelumSelesai() {
			$this->db->where('status_sudah_dilaksanakan', '0');
			$this->db->where('status_tidak_dilaksanakan', '0');
			$this->db->from('septictank');
			return $this->db->count_all_results();
		}		
		/////////////// END SEPTICTANK /////////////////////////////
		
		#jumlah septictank_komunal
		
		public function getJumlahSeptictankKomunal() {
			return $this->db->count_all('septictank_komunal');
		}
		
		#jumlah sumur_dangkal
		
		public function getJumlahSumurDangkal() {
			return $this->db->count_all('sumur_dangkal');
		}
		
		#jumlah sumur_resapan
		
		public function getJumlahSumurResapan() {
			return $this->db->count_all('sumur_resapan');
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
