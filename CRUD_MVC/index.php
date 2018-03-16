<?php
	
include "view/header.php";
	if(isset($_GET['page'])){	
		include "controller/".$_GET['page'].".php";
		$main = new controller();
		if(isset($_GET['e'])){
			$id = $_GET['e'];
			$main->viewEdit($id);
		}else if(isset($_GET['d'])){
			$id = $_GET['d'];
			$main->delete($id);
		}else if(isset($_GET['db'])){
			$main->view_data();
		}
		else if(isset($_GET['ib'])){
			$main->view_add();
		}
		else{
			$main->index();
		}
	}else{
		header("location:index.php?page=home");
	}

include "view/footer.php";

?>
