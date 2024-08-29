<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Mailandsms_m extends MY_Model
{

	protected $_table_name = 'mailandsms';
	protected $_primary_key = 'mailandsmsID';
	protected $_primary_filter = 'intval';
	protected $_order_by = "mailandsmsID desc";

	function __construct()
	{
		parent::__construct();
	}

	function get_mailandsms($array = NULL, $signal = FALSE)
	{
		$query = parent::get($array, $signal);
		return $query;
	}
	// public function get_mailandsms_for_parent($parentUserID)
	// {
	// 	// Pertama, ambil semua student_ids yang terkait dengan parent_user_id
	// 	$this->db->select('studentID');
	// 	$this->db->from('student');
	// 	$this->db->where('parentID', $parentUserID);
	// 	$query = $this->db->get();

	// 	$studentIDs = array_column($query->result_array(), 'studentID');

	// 	if (empty($studentIDs)) {
	// 		return []; // Jika tidak ada student terkait, kembalikan array kosong
	// 	}

	// 	// Sekarang, ambil data dari mailandsms yang sesuai dengan student_ids
	// 	$this->db->where_in('mailandsms.users', $studentIDs);
	// 	$this->db->or_where_in('mailandsms.', $studentIDs);
	// 	$query = $this->db->get('mailandsms');
	// 	// Debugging query result
	// 	echo $this->db->last_query(); // Menampilkan query yang terakhir dijalankan
	// 	echo '<pre>';
	// 	print_r($query->result());
	// 	echo '</pre>';

	// 	return $query->result();
	// }
	public function get_mailandsms_with_student_names($student_names)
	{
		$this->db->select('mailandsms.*');
		$this->db->from('mailandsms');
		$this->db->where_in('mailandsms.users', $student_names);
		$this->db->order_by('mailandsmsID', 'DESC');
		$query = $this->db->get();

		return $query->result();
	}




	function get_order_by_mailandsms($array = NULL)
	{
		$query = parent::get_order_by($array);
		return $query;
	}

	public function get_all_mailandsms()
	{
		$query = $this->db->get('mailandsms');
		return $query->result();
	}


	// Method untuk mendapatkan data yang difilter
	public function get_mailandsms_with_usertypeID($conditions = [])
	{
		$this->db->select('mailandsms.*, usertype.usertypeID, usertype.usertype');
		$this->db->from('mailandsms');
		$this->db->join('usertype', 'usertype.usertypeID = mailandsms.usertypeID', 'LEFT');

		if (!empty($conditions)) {
			if (isset($conditions['OR'])) {
				$this->db->group_start();
				foreach ($conditions['OR'] as $key => $value) {
					$this->db->or_where($key, $value);
				}
				$this->db->group_end();
			} else {
				$this->db->where($conditions);
			}
		}

		$this->db->order_by("mailandsmsID", 'DESC');
		$query = $this->db->get();

		// Debugging query result
		// echo $this->db->last_query(); // Menampilkan query yang terakhir dijalankan
		// echo '<pre>';
		// print_r($query->result());
		// echo '</pre>';
		return $query->result();
	}



	function get_single_mailandsms($array = NULL)
	{
		$query = parent::get_single($array);
		return $query;
	}

	function insert_mailandsms($array)
	{
		$error = parent::insert($array);
		return TRUE;
	}

	function update_mailandsms($data, $id = NULL)
	{
		parent::update($data, $id);
		return $id;
	}

	public function delete_mailandsms($id)
	{
		parent::delete($id);
	}
}

/* End of file mailandsms_m.php */
/* Location: .//D/xampp/htdocs/school/mvc/models/mailandsms_m.php */