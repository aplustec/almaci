<?php

/**
 * @see Zend_View_Helper_Abstract
 */
require_once 'Zend/View/Helper/Abstract.php';

/**
 * The View Helper for show alerts stored in FlashMessenger Action Helper
 * 
 * @category Helpers
 * @package App/Plugins
 * @subpackage Helpers
 * @author Lucas Mendes de Freitas (devsdmf)
 * @since 2012
 * @copyright Aplus Tecnologia e Engenharia LTDA
 * @license http://www.devsdmf.net/license/general.txt
 *
 */

class Helper_Alerts extends Zend_View_Helper_Abstract
{
	/**
	 * The script generated by object
	 * 
	 * @var string
	 */
	protected $_script = null;
	/**
	 * Method to show alerts
	 * 
	 * @return string
	 */
	function alerts()
	{
		if($this->view->flashMessengerAlerts != null)
		{
			$this->_script = '<script type="text/javascript">' . PHP_EOL;
			foreach($this->view->flashMessengerAlerts as $alert)
			{
				$this->_script .= 'alert("' . $alert . '");' . PHP_EOL;
			}
			$this->_script = '</script>' . PHP_EOL;
		}
		
		return $this->_script;
	}
}