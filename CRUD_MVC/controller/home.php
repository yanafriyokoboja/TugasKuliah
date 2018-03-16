<?php
include "model/model.php";
class controller{

	var $view = "home";
	var $nama_file ="home";
	var $tabel ="input_bunga";
	var $pk ="id_bunga";

	function __construct(){
			$this->model = new model(); 
	}
	function index(){
		$data = $this->model->selectAll($this->tabel);
		include "view/$this->view/view.php";
	}
	function cart(){
		$id =$_POST['id_bunga'];
		$nama_bunga=$_POST['nama_bunga'];
		$harga=$_POST['harga_bunga'];
		$jumlah =$_POST['jumlah_bunga'];
		$jenis_bunga =$_POST['jenis_bunga'];

	}

}