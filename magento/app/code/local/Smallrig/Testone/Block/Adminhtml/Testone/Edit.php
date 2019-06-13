<?php
	
class Smallrig_Testone_Block_Adminhtml_Testone_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
		public function __construct()
		{

				parent::__construct();
				$this->_objectId = "id";
				$this->_blockGroup = "testone";
				$this->_controller = "adminhtml_testone";
				$this->_updateButton("save", "label", Mage::helper("testone")->__("Save Item"));
				$this->_updateButton("delete", "label", Mage::helper("testone")->__("Delete Item"));

				$this->_addButton("saveandcontinue", array(
					"label"     => Mage::helper("testone")->__("Save And Continue Edit"),
					"onclick"   => "saveAndContinueEdit()",
					"class"     => "save",
				), -100);



				$this->_formScripts[] = "

							function saveAndContinueEdit(){
								editForm.submit($('edit_form').action+'back/edit/');
							}
						";
		}

		public function getHeaderText()
		{
				if( Mage::registry("testone_data") && Mage::registry("testone_data")->getId() ){

				    return Mage::helper("testone")->__("Edit Item '%s'", $this->htmlEscape(Mage::registry("testone_data")->getId()));

				} 
				else{

				     return Mage::helper("testone")->__("Add Item");

				}
		}
}