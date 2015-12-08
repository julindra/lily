<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class D extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		$this->load->model('diary_model');
	}
	
	public function index($id_diary=NULL)
	{
		if($id_diary == NULL) {
			redirect('', 'refresh');
		}

		if(!empty($this->session->userdata('cur_email')) && !empty($this->session->userdata('cur_id'))) {
			$id = $this->session->userdata('cur_id');
			if(!$this->diary_model->check_this($id_diary)) {
				redirect('', 'refresh');
			} else {
				$data['check'] = $this->diary_model->check_this($id_diary);
				$id_penulis = $data['check']->id_users;
				$data['nama'] = $this->user_model->my_name($id_penulis);
				if($id == $id_penulis) {
					$this->load->view('uv_my', $data);
				} else {
					if($this->diary_model->is_public($id_diary)) {
						$this->load->view('uv_public', $data);
					} else {
						redirect('', 'refresh');	
					}
				}
			}

		} else {
			$data['check'] = $this->diary_model->check_this($id_diary);
			$id_penulis = $data['check']->id_users;
			$data['nama'] = $this->user_model->my_name($id_penulis);
			
			if($this->diary_model->is_public($id_diary)) {
				$this->load->view('pub_view', $data);
			} else {
				redirect('', 'refresh');
			}
		}
	}


}