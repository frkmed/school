<?php 

/**
* 
*/
class MY_Controller extends CI_Controller
{

	public $layout = "template/layout";
	
	function __construct()
	{
		parent::__construct();

		if (! $this->session->login ) {
      redirect('/auth/login', 'refresh', 403);
    }
	}

}
