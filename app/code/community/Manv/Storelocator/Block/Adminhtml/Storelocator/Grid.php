<?php

class Manv_Storelocator_Block_Adminhtml_Storelocator_Grid extends Mage_Adminhtml_Block_Widget_Grid
{

		public function __construct()
		{
				parent::__construct();
				$this->setId("storelocatorGrid");
				$this->setDefaultSort("id");
				$this->setDefaultDir("ASC");
				$this->setSaveParametersInSession(true);
		}

		protected function _prepareCollection()
		{
				$collection = Mage::getModel("storelocator/storelocator")->getCollection();
				$this->setCollection($collection);
				return parent::_prepareCollection();
		}
		protected function _prepareColumns()
		{
				$this->addColumn("id", array(
				"header" => Mage::helper("storelocator")->__("ID"),
				"align" =>"right",
				"width" => "50px",
			    "type" => "number",
				"index" => "id",
				));
                
				$this->addColumn("name", array(
				"header" => Mage::helper("storelocator")->__("name"),
				"index" => "name",
				));
				$this->addColumn("address", array(
				"header" => Mage::helper("storelocator")->__("address"),
				"index" => "address",
				));
				$this->addColumn("zipcode", array(
				"header" => Mage::helper("storelocator")->__("zipcode"),
				"index" => "zipcode",
				));
				$this->addColumn("city", array(
				"header" => Mage::helper("storelocator")->__("city"),
				"index" => "city",
				));
				$this->addColumn("country_id", array(
				"header" => Mage::helper("storelocator")->__("country_id"),
				"index" => "country_id",
				));
				$this->addColumn("phone", array(
				"header" => Mage::helper("storelocator")->__("phone"),
				"index" => "phone",
				));
				$this->addColumn("fax", array(
				"header" => Mage::helper("storelocator")->__("fax"),
				"index" => "fax",
				));
				$this->addColumn("description", array(
				"header" => Mage::helper("storelocator")->__("description"),
				"index" => "description",
				));
				$this->addColumn("store_url", array(
				"header" => Mage::helper("storelocator")->__("store_url"),
				"index" => "store_url",
				));
				$this->addColumn("lat", array(
				"header" => Mage::helper("storelocator")->__("lat"),
				"index" => "lat",
				));
				$this->addColumn("longt", array(
				"header" => Mage::helper("storelocator")->__("longt"),
				"index" => "longt",
				));
						$this->addColumn('status', array(
						'header' => Mage::helper('storelocator')->__('status'),
						'index' => 'status',
						'type' => 'options',
						'options'=>Manv_Storelocator_Block_Adminhtml_Storelocator_Grid::getOptionArray13(),				
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
			$this->getMassactionBlock()->addItem('remove_storelocator', array(
					 'label'=> Mage::helper('storelocator')->__('Remove Storelocator'),
					 'url'  => $this->getUrl('*/adminhtml_storelocator/massRemove'),
					 'confirm' => Mage::helper('storelocator')->__('Are you sure?')
				));
			return $this;
		}
			
		static public function getOptionArray13()
		{
            $data_array=array(); 
			$data_array[0]='Enable';
			$data_array[1]='Disable';
            return($data_array);
		}
		static public function getValueArray13()
		{
            $data_array=array();
			foreach(Manv_Storelocator_Block_Adminhtml_Storelocator_Grid::getOptionArray13() as $k=>$v){
               $data_array[]=array('value'=>$k,'label'=>$v);		
			}
            return($data_array);

		}
		

}