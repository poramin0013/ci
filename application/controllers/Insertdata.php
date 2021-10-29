<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Insertdata extends CI_Controller {

	public function index()
	{
		$this->load->view('css');
		$this->load->view('header');
		$this->load->view('banner');
		$this->load->view('navbar');
		$this->load->view('insert_view');
		$this->load->view('footer');
		$this->load->view('js');
		
	}
public function adding()
	{

		//echo '<pre>';
		//print_r($_POST);
		//echo '</pre>';

		//exit;


		$data = array(

			'm_name' => $this->input->post('m_name'),
			'm_lname' => $this->input->post('m_lname')
		);

		$query=$this->db->insert('tbl_member',$data);

		if($query){
			echo 'add ok';
		}else{
			echo 'false';
		}


		
	}

}
