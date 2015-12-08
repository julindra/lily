<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function signup()
	{
		date_default_timezone_set('Asia/Jakarta');

		$data = array(
			'name' => $this->input->post('txt_name'),
			'email' => $this->input->post('txt_email'),
			'password' => hash("sha256", $this->input->post('txt_pass')),
			'signup_time' => date("Y-m-d H:i:s")
		);

		if($this->db->insert('users', $data)) {
			return true;	
		}
		return false;
	}

	public function signin()
	{
		date_default_timezone_set('Asia/Jakarta');

		$email = $this->input->post('txt_email');
		$pass = hash("sha256", $this->input->post('txt_pass'));

		$this->db->select('id');
		$this->db->where('email', $email);
		$this->db->where('password', $pass);
		$query = $this->db->get('users');

		if($query->num_rows() == 1) {
			$row = $query->row();
			$id = $row->id;

			$data = array(
				'last_login' => date("Y-m-d H:i:s")
			);

			$this->db->where('id', $id);
			$this->db->update('users', $data);

			$data = array(
				'cur_email' => $email,
				'cur_id' => $id,
			);

			return $data;
		}
		return false;
	}

	public function forgot()
	{
		$email = $this->input->post('txt_email');
		
		$this->db->select('id, name');
		$this->db->where('email', $email);
		$query = $this->db->get('users');

		if($query->num_rows() == 1) {
			$row = $query->row();
			$id = $row->id;
			$name = $row->name;

			$data = array(
				'forgot_token' => bin2hex(openssl_random_pseudo_bytes(16))
			);
			
			$this->db->where('id', $id);
			$this->db->update('users', $data); 

			$data['name'] = $name;
			$data['email'] = $email;
			return $data;
		}
		return false;
	}

	public function tosem($restok, $resem)
	{
		$this->db->select('id');
		$this->db->where('email', $resem);
		$this->db->where('forgot_token', $restok);
		$query = $this->db->get('users');

		if($query->num_rows() == 1) {
			return true;
		}
		return false;
	}

	public function resetpass() 
	{
		if($this->tosem($this->input->post('restok'), $this->input->post('resem'))) {
			$data = array(
				'password' => hash("sha256", $this->input->post('txt_pass')),
				'forgot_token' => ''
			);

			$this->db->where('email', $this->input->post('resem'));
			$this->db->where('forgot_token', $this->input->post('restok'));
			$this->db->update('users', $data);

			return true; 
		}
		return false;
	}

	public function my_name($id)
	{
		$this->db->select('name');
		$this->db->where('id', $id);
		$query = $this->db->get('users');
		$row = $query->row();
		$name = $row->name;

		return $name;
	}
}
