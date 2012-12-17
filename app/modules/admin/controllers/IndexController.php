<?php

require_once 'app/modules/admin/Abstract.php';

class Admin_IndexController extends App_Modules_Admin_Abstract
{
	
	function init()
	{
		parent::lock();
		parent::abstractInit();
	}
	
	function indexAction()
	{
		$this->render();
	}
}