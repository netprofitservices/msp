<?php

class NewsletterController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
		$this->view->metaTitle = "Default title here.";
		$this->view->metaKeywords = "Default keywords here.";
		$this->view->metaDescription = "Default description here.";

		$configOptions = new Zend_Config($this->getInvokeArg('bootstrap')->getOptions());
		$this->view->baseUrl = $configOptions->baseUrl;
    }

    public function indexAction()
    {
        // action body
    }

    public function signupAction()
    {
        // action body
		$this->_helper->layout->setLayout('overlay');
			
		if ($this->getRequest()->isPost()) {
			$configOptions = new Zend_Config($this->getInvokeArg('bootstrap')->getOptions());
			$file = $configOptions->newsletter->file;
			
			$name = $this->_getParam('firstname');
			$email = $this->_getParam('emailaddress');
			$zip = $this->_getParam('zip');
			
			
			// Sign them up on MailChimp
			$merge_vars = array(
				'ZIPCODE' => $zip,
				'GROUPINGS' => array(
					array(
						'name' => 'MSP Contacts', 
						'groups' => 'FREE Network'
					)
				)
			);
			
			// Optional variables (don't overwrite with null)
			if (!empty($name)) {
				$merge_vars['FIRST'] = $name;
			}
			
			require_once('models/MailChimp.php');
			$MailChimp = new MailChimp($configOptions);
			
			$mailchimpStatus = $MailChimp->subscribeOrUpdate($email, $merge_vars);
			
			
			// Write to csv file
			$date = date('Y-m-d H:i:s'); 
			
			$line = array(
				$email,
				$name,
				$zip,
				$date,
				$mailchimpStatus,
				$this->getReferralCode()
			);


			$fh = fopen($file, 'a');
			if (fputcsv($fh, $line)) {
				echo 'ok';
			}
			
			die;
		}
		
    }
	
	protected function getReferralCode() {
		$session = new Application_Model_Session;
		
		return $session->getReferralCode();
	}
	
}



