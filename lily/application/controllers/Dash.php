<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dash extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		$this->load->model('diary_model');
	}
	
	public function index()
	{
		if(($this->session->userdata('cur_email')) && ($this->session->userdata('cur_id'))) {
			$data['my_name'] = $this->user_model->my_name($this->session->userdata('cur_id'));
			$id = $this->session->userdata('cur_id');
			if(!$this->diary_model->today_diary($id)) {
				$this->load->view('u_header');
				$this->load->view('u_home', $data);
				$this->load->view('u_footer');	
			} else {
				$data['diary'] = $this->diary_model->today_diary($id);
				$this->load->view('u_header');
				$this->load->view('u_home', $data);
				$this->load->view('u_footer');
			}
		} else {
			redirect('', 'refresh');
		}
	}

	public function save()
	{
		if(($this->session->userdata('cur_email')) && ($this->session->userdata('cur_id'))) {
			$data['my_name'] = $this->user_model->my_name($this->session->userdata('cur_id'));
			$id = $this->session->userdata('cur_id');
			if(isset($_POST['save'])) {
				$this->form_validation->set_rules('diary', 'Diary', 'required');
				$this->form_validation->set_rules('txt_title', 'Title', 'required');
				
				if($this->form_validation->run() == FALSE) {
					$this->load->view('u_header');
					$this->load->view('u_home', $data);
					$this->load->view('u_footer');
				} else {
					if($this->diary_model->save($id)) {
						redirect('dash', 'refresh');
					}
				}
			} else {
				redirect('dash', 'refresh');
			}
		} else {
			redirect('dash', 'refresh');
		}
	}

	public function update()
	{
		if(($this->session->userdata('cur_email')) && ($this->session->userdata('cur_id'))) {
			$id = $this->session->userdata('cur_id');
			if($id_diary = $this->diary_model->update($id)) {
				redirect('d/'.$id_diary, 'refresh');
			}
		} else {
			redirect('dash', 'refresh');
		}	
	}

	public function my($index=NULL)
	{
		if(($this->session->userdata('cur_email')) && ($this->session->userdata('cur_id'))) {
			$data['my_name'] = $this->user_model->my_name($this->session->userdata('cur_id'));
			$id = $this->session->userdata('cur_id');

			$data['all'] = $this->diary_model->get_all($id);
			
			$config['base_url'] = base_url() . 'dash/my/';
			$config['total_rows'] = count($data['all']);
			$config['per_page'] = 10; 

			$this->pagination->initialize($config); 

			$data['paging'] = $this->pagination->create_links();
			$data['query'] = $this->diary_model->get_my($id, $config['per_page'], $index);

			$this->load->view('my_header');
			$this->load->view('my_home', $data);
			$this->load->view('my_footer');
		} else {
			redirect('dash', 'refresh');
		}
	}

	public function explore($index=NULL) 
	{
		if(($this->session->userdata('cur_email')) && ($this->session->userdata('cur_id'))) {
			$id = $this->session->userdata('cur_id');

			$config['base_url'] = base_url() . 'dash/explore/';
			$config['total_rows'] = $this->diary_model->count_public();
			$config['per_page'] = 12; 

			$this->pagination->initialize($config); 

			$data['paging'] = $this->pagination->create_links();
			$data['query'] = $this->diary_model->get_public($config['per_page'], $index);

			$this->load->view('u_explore', $data);
		} else {
			$config['base_url'] = base_url() . 'dash/explore/';
			$config['total_rows'] = $this->diary_model->count_public();
			$config['per_page'] = 12; 

			$this->pagination->initialize($config); 

			$data['paging'] = $this->pagination->create_links();
			$data['query'] = $this->diary_model->get_public($config['per_page'], $index);

			$this->load->view('pub_explore', $data);
		}
	}
}