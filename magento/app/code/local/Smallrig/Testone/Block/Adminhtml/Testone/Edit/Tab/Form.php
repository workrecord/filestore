<?php
class Smallrig_Testone_Block_Adminhtml_Testone_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form
{
		protected function _prepareForm()
		{

				$form = new Varien_Data_Form();
				$this->setForm($form);
				$fieldset = $form->addFieldset("testone_form", array("legend"=>Mage::helper("testone")->__("Item information")));

				
						$fieldset->addField("email", "text", array(
						"label" => Mage::helper("testone")->__("Email"),
						"name" => "email",
						));
					
						$fieldset->addField("address", "text", array(
						"label" => Mage::helper("testone")->__("Address"),
						"name" => "address",
						));
					
						$fieldset->addField("telephone", "text", array(
						"label" => Mage::helper("testone")->__("Telephone"),
						"name" => "telephone",
						));
					
						$fieldset->addField("company", "text", array(
						"label" => Mage::helper("testone")->__("Company"),
						"name" => "company",
						));
					
						$fieldset->addField("main_product", "text", array(
						"label" => Mage::helper("testone")->__("Main Product"),
						"name" => "main_product",
						));
					

				if (Mage::getSingleton("adminhtml/session")->getTestoneData())
				{
					$form->setValues(Mage::getSingleton("adminhtml/session")->getTestoneData());
					Mage::getSingleton("adminhtml/session")->setTestoneData(null);
				} 
				elseif(Mage::registry("testone_data")) {
				    $form->setValues(Mage::registry("testone_data")->getData());
				}
				return parent::_prepareForm();
		}
}
