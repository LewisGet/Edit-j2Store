<?php
/*------------------------------------------------------------------------
 # com_j2store - J2Store
# ------------------------------------------------------------------------
# author    Sasi varna kumar - Weblogicx India http://www.weblogicxindia.com
# copyright Copyright (C) 2014 - 19 Weblogicxindia.com. All Rights Reserved.
# @license - http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
# Websites: http://j2store.org
# Technical Support:  Forum - http://j2store.org/forum/index.html
-------------------------------------------------------------------------*/


// no direct access
defined('_JEXEC') or die('Restricted access');

jimport('joomla.application.component.view');


class J2StoreViewOrders extends J2StoreView
{

	function display($tpl = null) {

		$data = array();
		require_once(JPATH_ADMINISTRATOR.'/components/com_j2store/models/orders.php');
		$model = new J2StoreModelOrders();
		$model->export($data, true);
		JFactory::getApplication()->close();

	}

}