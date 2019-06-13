<?php
class Smallrig_Testone_Block_Adminhtml_Testone_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{
		public function __construct()
		{
				parent::__construct();
				$this->setId("testone_tabs");
				$this->setDestElementId("edit_form");
				$this->setTitle(Mage::helper("testone")->__("Item Information"));
		}
		protected function _beforeToHtml()
		{
				$this->addTab("form_section", array(
				"label" => Mage::helper("testone")->__("Item Information"),
				"title" => Mage::helper("testone")->__("Item Information"),
				"content" => $this->getLayout()->createBlock("testone/adminhtml_testone_edit_tab_form")->toHtml(),
				));
				return parent::_beforeToHtml();
		}

}
