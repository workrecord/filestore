<?php
class Smallrig_Adjustprice_Adminhtml_PreorderproductbackendController extends Mage_Adminhtml_Controller_Action
{

	protected function _isAllowed()
	{
		//return Mage::getSingleton('admin/session')->isAllowed('adjustprice/preorderproductbackend');
		return true;
	}

	public function indexAction()
    {
       $this->loadLayout();
	   $this->_title($this->__("Backend Page"));
	   $this->renderLayout();
    }
}