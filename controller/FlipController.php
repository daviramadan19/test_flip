<?php

require_once('config/Config.php');
require_once('service/FlipService.php');

class FlipController { 

	private $views;

	public function __construct()  
    {  
        $this->config = new Config();
        $this->FlipService = new FlipService();
		$this->views = "flips";
    } 

	public function index(){

		$listData = $this->FlipService->showAllData();
		$view = 'view/'.$this->views.'/index.php';

		return require_once('view/layouts/app.php');
	}

	public function notFound(){
		return require_once('view/layouts/404.php');
	}

	public function postData(){

		if(!isset($_POST['submit'])) {
			return $this->index();
		}

		$param = [
			"bank_code" => $_POST['bank_code'],
			"account_number" =>$_POST['account_number'],
			"amount" =>$_POST['amount'],
			"remark" =>$_POST['remark'],
		];

		$doPost = $this->FlipService->doPost($param);

		return $this->index();
	}

	public function checkData($id = null, $transactions_id = null){

		$doCheck = $this->FlipService->doCheck($id, $transactions_id);

		return $this->index();
	}

}

?>