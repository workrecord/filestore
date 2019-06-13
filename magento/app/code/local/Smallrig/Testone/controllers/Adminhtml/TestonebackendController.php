<?php
class Smallrig_Testone_Adminhtml_TestonebackendController extends Mage_Adminhtml_Controller_Action
{

	protected function _isAllowed()
	{
		//return Mage::getSingleton('admin/session')->isAllowed('testone/testonebackend');
		return true;
	}

	public function indexAction()
    {
       $this->loadLayout();
	   $this->_title($this->__("Backend Page Title TestoneA"));
	   $this->renderLayout();
    }
}