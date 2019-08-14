<?php
class Manv_Storelocator_Block_Adminhtml_Storelocator_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form
{
		protected function _prepareForm()
		{

				$form = new Varien_Data_Form();
				$this->setForm($form);
				$fieldset = $form->addFieldset("storelocator_form", array("legend"=>Mage::helper("storelocator")->__("Item information")));

				
						$fieldset->addField("name", "text", array(
						"label" => Mage::helper("storelocator")->__("name"),
						"name" => "name",
						));
					
						$fieldset->addField("address", "text", array(
						"label" => Mage::helper("storelocator")->__("address"),
						"name" => "address",
						));
					
						$fieldset->addField("zipcode", "text", array(
						"label" => Mage::helper("storelocator")->__("zipcode"),
						"name" => "zipcode",
						));
					
						$fieldset->addField("city", "text", array(
						"label" => Mage::helper("storelocator")->__("city"),
						"name" => "city",
						));
					
						$fieldset->addField("country_id", "text", array(
						"label" => Mage::helper("storelocator")->__("country_id"),
						"name" => "country_id",
						));
					
						$fieldset->addField("phone", "text", array(
						"label" => Mage::helper("storelocator")->__("phone"),
						"name" => "phone",
						));
					
						$fieldset->addField("fax", "text", array(
						"label" => Mage::helper("storelocator")->__("fax"),
						"name" => "fax",
						));
					
						$fieldset->addField("description", "text", array(
						"label" => Mage::helper("storelocator")->__("description"),
						"name" => "description",
						));
					
						$fieldset->addField("store_url", "text", array(
						"label" => Mage::helper("storelocator")->__("store_url"),
						"name" => "store_url",
						));
									
						$fieldset->addField('image', 'image', array(
						'label' => Mage::helper('storelocator')->__('image'),
						'name' => 'image',
						'note' => '(*.jpg, *.png, *.gif)',
						));				
						$fieldset->addField('marker', 'image', array(
						'label' => Mage::helper('storelocator')->__('marker'),
						'name' => 'marker',
						'note' => '(*.jpg, *.png, *.gif)',
						));
						$fieldset->addField("lat", "text", array(
						"label" => Mage::helper("storelocator")->__("lat"),
						"name" => "lat",
						));
					
						$fieldset->addField("longt", "text", array(
						"label" => Mage::helper("storelocator")->__("longt"),
						"name" => "longt",
						));
									
						 $fieldset->addField('status', 'select', array(
						'label'     => Mage::helper('storelocator')->__('status'),
						'values'   => Manv_Storelocator_Block_Adminhtml_Storelocator_Grid::getValueArray13(),
						'name' => 'status',
						));

				if (Mage::getSingleton("adminhtml/session")->getStorelocatorData())
				{
					$form->setValues(Mage::getSingleton("adminhtml/session")->getStorelocatorData());
					Mage::getSingleton("adminhtml/session")->setStorelocatorData(null);
				} 
				elseif(Mage::registry("storelocator_data")) {
				    $form->setValues(Mage::registry("storelocator_data")->getData());
				}
				return parent::_prepareForm();
		}
}
