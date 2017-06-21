<?php

class Magestore_Magenotification_Model_Observer
{
	public function controllerActionPredispatch($observer)
	{
		return;
		/*
		try{
			Mage::getModel('magenotification/magenotification')->checkUpdate();
		}catch(Exception $e){
		
		}
		*/
	}
	
}
