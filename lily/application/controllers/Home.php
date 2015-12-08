<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}
	
	public function index()
	{
		if(!empty($this->session->userdata('cur_email')) && !empty($this->session->userdata('cur_id'))) {
			redirect('dash', 'refresh');
		} else {
			$this->load->view('header');
			$this->load->view('home');
			$this->load->view('footer');
		}
	}

	public function signup()
	{
		if(!empty($this->session->userdata('cur_email')) && !empty($this->session->userdata('cur_id'))) {
			redirect('dash', 'refresh');
		} else {
			$this->form_validation->set_rules('txt_name', 'Name', 'required');
			$this->form_validation->set_rules('txt_email', 'Email', 'required|valid_email|is_unique[users.email]');
			$this->form_validation->set_rules('txt_pass_confirmation', 'Password', 'required|min_length[8]');
			$this->form_validation->set_rules('txt_pass', 'Password Confirmation', 'required|matches[txt_pass_confirmation]');
			
			if($this->form_validation->run() == FALSE) {
				echo validation_errors();
			} else {
				if($this->user_model->signup()) {
					echo 200;
				}
			}
		}
	}

	public function signin()
	{
		if(!empty($this->session->userdata('cur_email')) && !empty($this->session->userdata('cur_id'))) {
			redirect('dash', 'refresh');
		} else {
			$this->form_validation->set_rules('txt_email', 'Email', 'required|valid_email');
			$this->form_validation->set_rules('txt_pass', 'Password Confirmation', 'required');
			
			if($this->form_validation->run() == FALSE) {
				echo validation_errors();
			} else {
				$ses = $this->user_model->signin();
				if(!$ses) {
					echo 404;
				} else {
					$this->session->set_userdata($ses);
					echo 200;
				}
			}
		}
	}

	public function forgot()
	{
		if(!empty($this->session->userdata('cur_email')) && !empty($this->session->userdata('cur_id'))) {
			redirect('dash', 'refresh');
		} else {
			$this->form_validation->set_rules('txt_email', 'Email', 'required|valid_email');
			
			if($this->form_validation->run() == FALSE) {
				echo validation_errors();
			} else {
				if($forgot = $this->user_model->forgot()) {
					$this->load->library('email');

					$subject = 'Reset your password';
					$body = '<p><b>Hi, '. $forgot['name'] .'!</b></p><br>Click this <a href="'. base_url() .'reset/?restok='. $forgot['forgot_token'] .'&resem='. $forgot['email'] .'&ref=email">link</a> to reset your password.<br><br>Have a nice day!';	

					if($this->email
	                ->from('renhard.net@gmail.com', 'Lily Forgot Password')
	                ->to($forgot['email'])
	                ->subject($subject)
	                ->message($body)
	                ->send()) {
						echo 200;
	                } else {
	                	echo "Sorry. You can't reset your password.";
	                }
				} else {
					echo 404;
				}
			}
		}
	}

	public function reset()
	{
		if(!empty($this->session->userdata('cur_email')) && !empty($this->session->userdata('cur_id'))) {
			redirect('dash', 'refresh');
		} else {
			if(isset($_GET['restok']) && isset($_GET['resem']) && isset($_GET['ref'])) {
				if($_GET['ref'] == "email") {
					if($this->user_model->tosem($_GET['restok'], $_GET['resem'])) {
						$data['restok'] = $_GET['restok'];
						$data['resem'] = $_GET['resem'];
						$this->load->view('reset', $data);
					} else {
						redirect('', 'refresh');
					}
				}
			} else {
				redirect('', 'refresh');	
			}
		}
	}

	public function resetpass()
	{
		if(!empty($this->session->userdata('cur_email')) && !empty($this->session->userdata('cur_id'))) {
			redirect('', 'refresh');
		} else {
			$this->form_validation->set_rules('txt_pass_confirmation', 'Password', 'required|min_length[8]');
			$this->form_validation->set_rules('txt_pass', 'Password Confirmation', 'required|matches[txt_pass_confirmation]');
			
			if($this->form_validation->run() == FALSE) {
				echo validation_errors();
			} else {
				if($this->user_model->resetpass()) {
					echo 200;
				} else {
					echo 404;
				}
			}
		}
	}

	public function signout()
	{
		if(!empty($this->session->userdata('cur_email')) && !empty($this->session->userdata('cur_id'))) {
			$this->session->unset_userdata('cur_email');
			$this->session->unset_userdata('cur_id');
			$this->session->sess_destroy();
			redirect('', 'refresh');
		} else {
			redirect('', 'refresh');
		}
	}
}
