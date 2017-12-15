<?php 

defined('BASEPATH') OR exit('No direct script access allowed');


/**
* 
*/
class Home extends CI_Controller
{
	
	public function __construct() {

		parent::__construct();
		$this->load->model('homeModel');
	}
	
	public function index() {
	
		$ether = json_decode($this->get_current_data());

		$data['ether'] = $ether[0]->price_usd;

		$data['main_content'] = 'home';


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

	private function get_current_data() {


		$url = 'https://api.coinmarketcap.com/v1/ticker/ethereum/?convert=USD';
			 if(!function_exists("curl_init")) return "cURL extension is not installed";
			    if (trim($url) == "") die("@ERROR@");
			    $curl = curl_init($url);
			    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 
			    // curl_setopt($curl, CURLOPT_POST, 1);                        
			    // curl_setopt($curl, CURLOPT_USERPWD, 'username:password');
			    curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_ANY);                    
			    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);                          
			    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);                       
			    $response = curl_exec($curl);                                          
			    $resultStatus = curl_getinfo($curl);                                   
			   	
			    if($resultStatus['http_code'] == 200) {
			       
			        // All Ok
			    
			    } else {

			        return json_encode($resultStatus);                            
				}

			    $curl = null;
			    return utf8_encode($response);      
	}

	




}

