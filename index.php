<?php 
	//load controller
	require_once 'controller/FlipController.php';

	$viewFlips = new FlipController();

	if(!isset($_GET['page']))
	{
		$view->index();
	}
	else
	{
		switch($_GET['page'])
		{
			case 'flips_index' :
				$viewFlips->index();
				break;

			case 'flips_postData' :
				$viewFlips->postData();
				break;

			case 'flips_checkData' :
				$viewFlips->checkData($_GET['id'],$_GET['transactions_id']);
				break;

			default :
				$viewFlips->notFound();
				break;
		}
	}

?>