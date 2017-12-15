<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


/**
* 
*/

class Login extends CI_Controller
{
	
	public function __construct() {


		parent::__construct();
		
		$this->checkLogin();
		$this->load->model('loginModel');
		$this->load->model('homeModel');


	}


	public function checkLogin() {

		if ($this->session->userdata('is_logged_in')) {
			
			return redirect('dashboard');
		}
	}


	public function index() {

		$data['main_content'] = 'login';


		$data['banner']      = $this->homeModel->get('home');
		$data['terms']       = $this->homeModel->get('terms');
		$data['logo']        = $this->homeModel->get('logo');
		$data['paper']       = $this->homeModel->get('paper');
		$data['token_info']  = $this->homeModel->get('token_info');
		$data['how_to_mew']  = $this->homeModel->get('contribute_mew');
		$data['how_to_meta'] = $this->homeModel->get('contribute_metamask');
		$data['contribute']  = $this->homeModel->get('contribute');
		$data['note']        = $this->homeModel->get('note');
		
	
		
		$this->load->view('includes/template',$data);

	}


	public function login() {

		if ($this->input->post()) {

			$user = $this->loginModel->login();
			  
			echo json_encode($user);

				
		} else {

			return redirect('shop');
		}

	}


	public function check_password() {

		if ($this->input->post()) {
				
			$output = $this->validate_password($this->input->post('password'));

			echo $output ? 'success' : 'false';
					
		} else {

			return redirect('signup');
		}

	}

	private function validate_password($password) {

		   $r1='/[A-Z]/';  //Uppercase
		   $r2='/[a-z]/';  //lowercase
		   $r3='/[!@#$%^&*()\-_=+{};:,<.>]/';  // whatever you mean by 'special char'
		   $r4='/[0-9]/';  //numbers

		   if(preg_match_all($r1,$password, $o)<1) return FALSE;

		   if(preg_match_all($r2,$password, $o)<1) return FALSE;

		   if(preg_match_all($r3,$password, $o)<1) return FALSE;

		   if(preg_match_all($r4,$password, $o)<1) return FALSE;

		   if(strlen($password)<8) return FALSE;

		   return TRUE;
	}


	public function verify_login() {

		if (!$this->session->userdata('otp')) {
			
			return redirect('wallet');
		}
		$data['main_content'] = 'public/wallet/otp_form';
		$this->load->view('includes/template',$data);

	}

	public function check_otp(){

		if ($this->input->post()) {
				
				$output = $this->check_sent_otp($this->input->post('otp'),$this->session->userdata('phone'));

				$result = json_decode($output);

				if ($result->type=='success') {
					
					$this->session->set_userdata('is_logged_in',1);
					$this->session->unset_userdata('otp');

					echo 'success';

				} else {
					echo 'error';
				}
		} else {

			return redirect('login');
		}
	}


	public function check_otp_forgot(){



		if ($this->input->post()) {
				
				$output = $this->check_sent_otp($this->input->post('otp'),$this->session->userdata('fphone'));

				$outmsg ='';
				$result = json_decode($output);
				if ($result->type=='success') {
					
					
					$this->session->unset_userdata('fphone');
					$this->session->unset_userdata('femail');
					

					$outmsg = 'success';

				} else {
					$outmsg = 'incorrect OTP';
					
				}

				echo $outmsg;
		} else {

			return redirect('login');
		}
	}


	


	public function destroy(){

		$this->session->sess_destroy();
	}

	public function forgot_password() {

		$data['main_content'] = 'public/wallet/forgot_password';
		$this->load->view('includes/template',$data);

	}

	public function check_forgotUser() {

		if ($this->input->post()) {
				
			$output = $this->dashboardModel->check_forgotUser();

			echo $output;

		} else {

			return redirect('dashboard');
		}
	}

	public function otp_form() {

		if (!$this->session->userdata('fphone') || !$this->session->userdata('femail')) {
			
			return redirect('login');
		}
		$data['main_content'] = 'public/wallet/otp_form';
		$this->load->view('includes/template',$data);

	}

	public function change_password() {

		if ($this->input->post()) {
				
			$output = $this->dashboardModel->change_password();

			echo $output;

		} else {

			return redirect('dashboard');
		}
	}
}