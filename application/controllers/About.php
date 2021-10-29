<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function index()
	{
		echo "About Page Index";
		$this->load->model('Users_model');

		$this->load->datebase();

		$result = $this->Users_model->get_lists();

		echo "<br><Br><br>";
		echo "<pre>";
		print_r($result);
		echo "</pre>";
		echo "<br><Br><br>";
		echo $result[0]["username"];

		$this->db->close();
	}

    public function social() {

		$date = array();
		$date['facebook_page'] = "Wantana.com";
		$date['twitter'] = "@Wantana";
		$date['youtube'] = "Wantana";

		$this->load->view('about_social', $date);
    }

}