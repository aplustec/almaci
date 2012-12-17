<?php

/**
 * @see Zend_View_Helper_Abstract
 */
require_once 'Zend/View/Helper/Abstract.php';

/**
 * The View Helper for import assets in view
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

class Helper_Asset extends Zend_View_Helper_Abstract
{
	/**
	 * Method to import assets
	 * 
	 * @param string $filename
	 * @param string $folder
	 */
	function asset( $filename , $folder )
	{
		echo $this->view->assetUrl . $this->view->currentModule . '/' . $folder . '/' . $filename;
	}
}