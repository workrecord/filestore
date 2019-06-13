<?php
class Smallrig_Adjustprice_Adminhtml_AdjustpricebackendController extends Mage_Adminhtml_Controller_Action
{

	protected function _isAllowed()
	{
		//return Mage::getSingleton('admin/session')->isAllowed('adjustprice/adjustpricebackend');
		return true;
	}

	public function indexAction()
    {
       $this->loadLayout();
	   // $this->_title($this->__("Backend Page Title AdjustpriceA"));
	   $this->renderLayout();
    }
}