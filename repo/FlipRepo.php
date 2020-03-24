<?php 
require_once('config/Database.php');
include_once('model/FlipModel.php');

class FlipRepo { 

	public function __construct()  
    {  
        $this->db = new Database();
        $this->FlipModel = new FlipModel();
    } 

	public function insertResponse($param){

		$result = "";
		$value = "";
		if($param != null || !empty($param)){

			foreach($param as $key => $item){
				$value .= "'".$item."'";
				$value .= ",";
			}

			$dateTime = date("Y-m-d H:i:s");
			$value .= "'".$dateTime."'"; //Add value created_at

			$result = $this->db->insert($this->FlipModel->table, $this->FlipModel->fillable, $value);

		}
		
		return $result;
	}

	public function updateResponse($id, $param){

		$result = "";
		$value = "";

		if($param != null || !empty($param)){

			foreach($param as $key => $item){
				if($key == 'status' || $key == 'receipt' || $key == 'time_served'){
					$value .=  $key." = '".$item."', ";
				}
			}

			$value = rtrim($value, ", ");

			$result = $this->db->update($this->FlipModel->table, $value,$id);

		}
		
		return $result;
	}

	public function showAllData(){
		$result = $this->db->showAllData($this->FlipModel->table);

		return $result;
	}

}
