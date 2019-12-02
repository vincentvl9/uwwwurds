<?php


class RouteController
{

	public function __construct()
	{

		
	}

	public function __destruct()
	{ }
	public function handleRequest()
	{
		try {
			$op = isset($_REQUEST['op']) ? $_REQUEST['op'] : NULL;
			switch ($op) {



				// DEFAULT
				default:
					$this->collectDefault();
					break;
			}
		} catch (ValidationException $e) {
			$errors = $e->getErrors();
        }

	}
	
	

	public function collectDefault(){
		//landings page
		include 'view/Landingspage/Landingspage.php';
    }
    
}