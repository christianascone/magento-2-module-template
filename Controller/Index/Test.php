<?php

namespace Christianascone\HelloWorld\Controller\Index;

class Test extends \Magento\Framework\App\Action\Action
{

	public function execute()
	{
		$textDisplay = new \Magento\Framework\DataObject(array('text' => 'Christianascone'));
		$this->_eventManager->dispatch('christianascone_helloworld_display_text', ['mp_text' => $textDisplay]);
		echo $textDisplay->getText();
		exit;
	}
}