<?php

class Smallrig_Testone_Block_Adminhtml_Testone_Grid extends Mage_Adminhtml_Block_Widget_Grid
{

		public function __construct()
		{
				parent::__construct();
				$this->setId("testoneGrid");
				$this->setDefaultSort("id");
				$this->setDefaultDir("DESC");
				$this->setSaveParametersInSession(true);
		}

		protected function _prepareCollection()
		{
				$collection = Mage::getModel("testone/testone")->getCollection();
				$this->setCollection($collection);
				return parent::_prepareCollection();
		}
		protected function _prepareColumns()
		{
				$this->addColumn("id", array(
				"header" => Mage::helper("testone")->__("ID"),
				"align" =>"right",
				"width" => "50px",
			    "type" => "number",
				"index" => "id",
				));
                
				$this->addColumn("email", array(
				"header" => Mage::helper("testone")->__("Email"),
				"index" => "email",
				));
				$this->addColumn("address", array(
				"header" => Mage::helper("testone")->__("Address"),
				"index" => "address",
				));
				$this->addColumn("telephone", array(
				"header" => Mage::helper("testone")->__("Telephone"),
				"index" => "telephone",
				));
				$this->addColumn("company", array(
				"header" => Mage::helper("testone")->__("Company"),
				"index" => "company",
				));
				$this->addColumn("main_product", array(
				"header" => Mage::helper("testone")->__("Main Product"),
				"index" => "main_product",
				));
			$this->addExportType('*/*/exportCsv', Mage::helper('sales')->__('CSV')); 
			$this->addExportType('*/*/exportExcel', Mage::helper('sales')->__('Excel'));

				return parent::_prepareColumns();
		}

		public function getRowUrl($row)
		{
			   return $this->getUrl("*/*/edit", array("id" => $row->getId()));
		}


		
		protected function _prepareMassaction()
		{
			$this->setMassactionIdField('id');
			$this->getMassactionBlock()->setFormFieldName('ids');
			$this->getMassactionBlock()->setUseSelectAll(true);
			$this->getMassactionBlock()->addItem('remove_testone', array(
					 'label'=> Mage::helper('testone')->__('Remove Testone'),
					 'url'  => $this->getUrl('*/adminhtml_testone/massRemove'),
					 'confirm' => Mage::helper('testone')->__('Are you sure?')
				));
			return $this;
		}
			

}