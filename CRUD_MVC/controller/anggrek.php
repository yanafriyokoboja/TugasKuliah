<?php
include "model/model.php";
class controller{

	var $view = "anggrek";
	var $nama = "Anggrek";
	var $jenis ="jenis_bunga";
	var $tabel ="input_bunga";

	function __construct(){
			$this->model = new model(); 
	}
	function index(){
		$data = $this->model->selectdetail($this->tabel, $this->jenis, $this->nama);
		include "view/$this->view/view.php";
	}
}