<?php
class Cammino_Prelogin_LoginController extends Mage_Core_Controller_Front_Action
{
	public function checkemailAction() {
		$email = $this->getRequest()->getParam('email');
		$customer = Mage::getModel('customer/customer')->setWebsiteId(Mage::app()->getWebsite()->getId())->loadByEmail($email);
		echo json_encode(array('registered' => $customer->getId() ? true : false ));
	}
}
?>