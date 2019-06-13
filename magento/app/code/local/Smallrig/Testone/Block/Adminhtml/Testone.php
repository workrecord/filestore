<?php


class Smallrig_Testone_Block_Adminhtml_Testone extends Mage_Adminhtml_Block_Widget_Grid_Container{

	public function __construct()
	{

	$this->_controller = "adminhtml_testone";
	$this->_blockGroup = "testone";
	$this->_headerText = Mage::helper("testone")->__("Testone Manager");
	$this->_addButtonLabel = Mage::helper("testone")->__("Add New Item");
	parent::__construct();
	
	}

}