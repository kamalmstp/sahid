<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['page'] = 'home';
		$data['title'] = 'Home';
		$this->load->view('index', $data);
	}

	public function hitung()
	{
		$data['page'] = 'hitung';
		$data['title'] = 'Operasi Hitung';
		$this->load->view('index', $data);
	}

	public function mengurutkan()
	{
		$data['page'] = 'mengurutkan';
		$data['title'] = 'Membandingkan dan Mengurutkan Bilangan';
		$this->load->view('index', $data);
	}

	public function perkalian()
	{
		$data['page'] = 'perkalian';
		$data['title'] = 'Operasi Perkalian dan Pembagian';
		$this->load->view('index', $data);
	}

	public function hitung_campuran()
	{
		$data['page'] = 'hitung_campuran';
		$data['title'] = 'Operasi Hitung Campuran';
		$this->load->view('index', $data);
	}

	public function pembulatan()
	{
		$data['page'] = 'pembulatan';
		$data['title'] = 'Penaksiran dan Pembulatan';
		$this->load->view('index', $data);
	}

	public function faktor()
	{
		$data['page'] = 'faktor';
		$data['title'] = 'Faktor dan Kelipatan';
		$this->load->view('index', $data);
	}

	public function pengukuran()
	{
		$data['page'] = 'pengukuran';
		$data['title'] = 'Pengukuran';
		$this->load->view('index', $data);
	}

	public function bangun_datar()
	{
		$data['page'] = 'bangun_datar';
		$data['title'] = 'Bangun Datar';
		$this->load->view('index', $data);
	}

	public function bil_bulat()
	{
		$data['page'] = 'bil_bulat';
		$data['title'] = 'Bilangan Bulat';
		$this->load->view('index', $data);
	}

	public function pecahan()
	{
		$data['page'] = 'pecahan';
		$data['title'] = 'Pecahan';
		$this->load->view('index', $data);
	}

	public function bil_romawi()
	{
		$data['page'] = 'bil_romawi';
		$data['title'] = 'Bilangan Romawi';
		$this->load->view('index', $data);
	}

	public function bangun_ruang()
	{
		$data['page'] = 'bangun_ruang';
		$data['title'] = 'Bangun Ruang dan Datar';
		$this->load->view('index', $data);
	}
}
