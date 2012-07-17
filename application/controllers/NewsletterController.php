<?php

class NewsletterController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
		$this->view->metaTitle = "Default title here.";
		$this->view->metaKeywords = "Default keywords here.";
		$this->view->metaDescription = "Default description here.";

		$this->view->baseUrl = 'http://mainstreampreppers.com/';
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
			
			$date = date('Y-m-d H:i:s'); 
			
			$line = "$email,$name,$zip,$date\n";


			$fh = fopen($file, 'a');
			if (fwrite($fh, $line)) {
				echo 'ok';
			}
			
			die;
		}
		
    }


}



