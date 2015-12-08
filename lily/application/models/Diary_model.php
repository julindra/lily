<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Diary_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function today_diary($id)
	{
		date_default_timezone_set('Asia/Jakarta');

		$this->db->where('id_users', $id);
		$this->db->where('date', date("Y-m-d"));
		$query = $this->db->get('diary');
		
		if($query->num_rows() == 1) {
			return $query->row();
		}
		return false;
	}

	public function get_all($id)
	{
		date_default_timezone_set('Asia/Jakarta');

		$this->db->where('id_users', $id);
		$this->db->order_by('date', 'desc');
		$this->db->order_by('time', 'desc');
		$query = $this->db->get('diary');
		
		if($query->num_rows() > 0) {
			return $query->result();
		}
		
		return false;	
	}

	public function count_public()
	{
		$this->db->where('share', 'Public');
		$query = $this->db->get('diary');
		
		return $query->num_rows();	
	}

	public function get_public($num, $offset)
	{
		date_default_timezone_set('Asia/Jakarta');

		$this->db->select('diary.id, diary.id_users, title, feel, share, diary, date, time, name');
		$this->db->where('share', 'Public');
		$this->db->order_by('date', 'desc');
		$this->db->order_by('time', 'desc');
		$this->db->from('diary');
		$this->db->join('users', 'users.id = diary.id_users');
		$this->db->limit($num, $offset);
		$query = $this->db->get();
		
		if($query->num_rows() > 0) {
			return $query->result();
		}
		
		return false;	
	}	

	public function get_my($id, $num, $offset)
	{
		date_default_timezone_set('Asia/Jakarta');

		$this->db->where('id_users', $id);
		$this->db->order_by('date', 'desc');
		$this->db->order_by('time', 'desc');
		$query = $this->db->get('diary', $num, $offset);
		
		if($query->num_rows() > 0) {
			return $query->result();
		}
		
		return false;	
	}

	public function check_this($id_diary)
	{
		$this->db->where('id', $id_diary);
		$query = $this->db->get('diary');
		
		if($query->num_rows() == 1) {
			return $query->row();
		}
		
		return false;	
	}

	public function is_public($id_diary)
	{
		$this->db->select('share');
		$this->db->where('id', $id_diary);
		$query = $this->db->get('diary');
		
		if($query->num_rows() == 1) {
			$row = $query->row();
			if($row->share == "Public") {
				return true;
			}
		}
		
		return false;	
	}

	public function save($id)
	{
		date_default_timezone_set('Asia/Jakarta');

		if(!$this->today_diary($id)) {
			$share = "Private";
			if($this->input->post('txt_share')) {
				$share = "Public";
			}

			$data = array(
				'id_users' => $id,
				'title' => $this->input->post('txt_title'), 
				'feel' => $this->input->post('txt_feel'),
				'share' => $share,
				'diary' => $this->input->post('diary'),
				'date' => date("Y-m-d", strtotime($this->input->post('txt_date'))),
				'time' => date("H:i:s")
			);

			if($this->db->insert('diary', $data)) {
				return true;	
			}
		} else {
			$this_diary = $this->today_diary($id);
			$id_diary = $this_diary->id;

			$share = "Private";
			if($this->input->post('txt_share')) {
				$share = "Public";
			}

			$data = array(
				'title' => $this->input->post('txt_title'), 
				'feel' => $this->input->post('txt_feel'),
				'share' => $share,
				'diary' => $this->input->post('diary'),
				'time' => date("H:i:s")
			);

			$this->db->where('id', $id_diary);
			$this->db->where('id_users', $id);
			$this->db->update('diary', $data); 
			
			return true;		
		} 
	}

	public function update($id) {
		$share = "Private";
		if($this->input->post('txt_share')) {
			$share = "Public";
		}

		$data = array(
			'share' => $share
		);

		$id_diary = $this->input->post('id_diary');

		$this->db->where('id', $id_diary);
		$this->db->where('id_users', $id);
		if($this->db->update('diary', $data)) {
			return $this->input->post('id_diary');
		} 
		return false;
	}
}
