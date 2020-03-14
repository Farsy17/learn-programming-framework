<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{

		

		$this->load->model('HomeModel'); //memanggil HomeModels di folder models
		$this->load->view('Home');
		//menampung fungsi dari getData()
		$tampilkanData = $this->HomeModel->getData();

		echo "Nama		: ". $tampilkanData['Nama']."<br>";
		echo "Kampus	: ". $tampilkanData['Kampus']."<br>";
		echo "Website	: ". $tampilkanData['Website']."<br>";

	}
}