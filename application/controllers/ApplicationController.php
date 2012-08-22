<?php

class ApplicationController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
		$this->view->metaTitle = "Mainstream Preppers - Thriving in Good Times and Bad";
		$this->view->metaKeywords = "prepper, prepardeness, prepper training, prepper groups, preparedness training, intentional community";
		$this->view->metaDescription = "Mainstream Preppers offers advanced skill building in preparedness, a network for forming preparedness groups, and more.";

		$configOptions = new Zend_Config($this->getInvokeArg('bootstrap')->getOptions());
		$this->view->baseUrl = $configOptions->baseUrl;
    }

    public function indexAction()
    {
        // action body
    }

    public function requestAction()
    {
        // action body
		$this->_helper->layout->setLayout('overlay');
		
		if ($this->getRequest()->isPost()) {
			$configOptions = new Zend_Config($this->getInvokeArg('bootstrap')->getOptions());
			$emailTo = $configOptions->email->to;
			
			$firstname = $this->_getParam('firstname');
			$lastname = $this->_getParam('lastname');
			$email = $this->_getParam('emailaddress');
			$phone = $this->_getParam('phone');
			$comments = $this->_getParam('comments');
			$zip = $this->_getParam('zip');
			$primary = $this->_getParam('primary');
			$secondary = $this->_getParam('secondary');
			$name = "$firstname $lastname";
			
			$secondaryList = implode(', ', $secondary);
			
			$subject = "MSP Retreat Inquiry from $name";
			
			$body = "New application request from $name.<br />\n";
			$body .= "Phone: $phone<br />\n";
			$body .= "Email: $email<br />\n";
			$body .= "Zip code: $zip<br />\n";
			$body .= "Primary motivation: $primary<br />\n";
			$body .= "Secondary motivation: $secondaryList<br />\n";
			$body .= "<br />\n$comments";
			
			require_once('models/Mail.php');
			$Mail = new Mail;
			$Mail->send($emailTo, $subject, $body, array($email, $name));
			
			// Now log it to a csv file
			$configOptions = new Zend_Config($this->getInvokeArg('bootstrap')->getOptions());
			$file = $configOptions->inqueries->file;
			
			
			$date = date('Y-m-d H:i:s'); 
			
			$line = array(
				$date,
				$lastname,
				$firstname,
				$email,
				$phone,
				$zip,
				$primary,
				$secondaryList,
				$comments
			);


			$fh = fopen($file, 'a');
			if (fputcsv($fh, $line)) {
			}
			
			
			
			echo 'ok';
			die;
		}
    }
 	
	public function signupAction()
    {
        // action body
		$this->_helper->layout->setLayout('overlay');
		
		if ($this->getRequest()->isPost()) {
			$configOptions = new Zend_Config($this->getInvokeArg('bootstrap')->getOptions());
			$emailTo = $configOptions->email->to;
			
			$firstname = $this->_getParam('firstname');
			$lastname = $this->_getParam('lastname');
			$email = $this->_getParam('emailaddress');
			$phone = $this->_getParam('phone');
			$comments = $this->_getParam('comments');
			$zip = $this->_getParam('zip');
			$primary = $this->_getParam('primary');
			$secondary = $this->_getParam('secondary');
			$name = "$firstname $lastname";
			
			//$secondaryList = implode(', ', $secondary);
			$secondaryList = '';
			
			$subject = "Prep School Enrollment from $name";
			
			$body = "New application request from $name.<br />\n";
			$body .= "Phone: $phone<br />\n";
			$body .= "Email: $email<br />\n";
			$body .= "Zip code: $zip<br />\n";
			$body .= "Primary motivation: $primary<br />\n";
			$body .= "Secondary motivation: $secondaryList<br />\n";
			$body .= "<br />\n$comments";
			
			require_once('models/Mail.php');
			$Mail = new Mail;
			$Mail->send($emailTo, $subject, $body, array($email, $name));
			
			
			// Now log it to a csv file
			$configOptions = new Zend_Config($this->getInvokeArg('bootstrap')->getOptions());
			$file = $configOptions->signups->file;
			
			
			$date = date('Y-m-d H:i:s'); 
			
			$line = array(
				$date,
				$lastname,
				$firstname,
				$email,
				$phone,
				$zip,
				$primary,
				$secondaryList,
				$comments
			);


			$fh = fopen($file, 'a');
			if (fputcsv($fh, $line)) {
			}
			
			echo 'ok';
			die;
		}
    }
	
	public function expospecialAction()
    {
        // action body
		
		if ($this->getRequest()->isPost()) {
			$configOptions = new Zend_Config($this->getInvokeArg('bootstrap')->getOptions());
			$emailTo = $configOptions->email->to;
			
			$firstname = $this->_getParam('firstname');
			$lastname = $this->_getParam('lastname');
			$email = $this->_getParam('emailaddress');
			$phone = $this->_getParam('phone');
			$comments = $this->_getParam('comments');
			$zip = $this->_getParam('zip');
			$primary = $this->_getParam('primary');
			$secondary = $this->_getParam('secondary');
			$name = "$firstname $lastname";
			
			//$secondaryList = implode(', ', $secondary);
			$secondaryList = '';
			
			$subject = "Prep School Enrollment from $name";
			
			$body = "New application request from $name.<br />\n";
			$body .= "Phone: $phone<br />\n";
			$body .= "Email: $email<br />\n";
			$body .= "Zip code: $zip<br />\n";
			$body .= "Primary motivation: $primary<br />\n";
			//$body .= "Secondary motivation: $secondaryList<br />\n";
			$body .= "<br />\n$comments";
			
			require_once('models/Mail.php');
			$Mail = new Mail;
			$Mail->send($emailTo, $subject, $body, array($email, $name));
			
			// Now log it to a csv file
			$file = $configOptions->signups->file;
			
			
			$date = date('Y-m-d H:i:s'); 
			
			$line = array(
				$date,
				$lastname,
				$firstname,
				$email,
				$phone,
				$zip,
				$primary,
				$secondaryList,
				$comments
			);


			$fh = fopen($file, 'a');
			if (fputcsv($fh, $line)) {
			}
			
			echo 'ok';
			die;
		}
    }
	
	public function prepschoolAction()
    {
        // action body
		
		if ($this->getRequest()->isPost()) {
			// Load configuration
			$configOptions = new Zend_Config($this->getInvokeArg('bootstrap')->getOptions());
			$emailTo = $configOptions->email->to;
			$listId = $configOptions->mailchimp->listId;
			$newsletterFile = $configOptions->newsletter->file;
			$file = $configOptions->signups->file;
			
			// Form fields
			$firstname = $this->_getParam('firstname');
			$lastname = $this->_getParam('lastname');
			$email = $this->_getParam('emailaddress');
			$phone = $this->_getParam('phone');
			$comments = $this->_getParam('comments');
			$zip = $this->_getParam('zip');
			$primary = $this->_getParam('primary');
			$secondary = $this->_getParam('secondary');
			$name = "$firstname $lastname";
			
			// Sign them up on MailChimp
			$merge_vars = array(
				'FIRST' => $firstname, 
				'LAST' => $lastname,
				'ZIPCODE' => $zip,
				'GROUPINGS' => array(
					array(
						'name' => 'MSP Contacts', 
						'groups' => 'Prep School,FREE Network'
					)
				)
			);
			
			require_once('models/MailChimp.php');
			$MailChimp = new MailChimp($configOptions);
			
			$mailchimpStatus = $MailChimp->subscribeOrUpdate($email, $merge_vars);
			
			
			//$secondaryList = implode(', ', $secondary);
			$secondaryList = '';
			
			$subject = "Prep School Enrollment from $name";
			
			$body = "New application request from $name.<br />\n";
			$body .= "Phone: $phone<br />\n";
			$body .= "Email: $email<br />\n";
			$body .= "Zip code: $zip<br />\n";
			$body .= "Primary motivation: $primary<br />\n";
			//$body .= "Secondary motivation: $secondaryList<br />\n";
			$body .= "<br />\n$comments<br />\n";
			$body .= "<br />\n$mailchimpStatus";
			
			require_once('models/Mail.php');
			$Mail = new Mail;
			$Mail->send($emailTo, $subject, $body, array($email, $name));
			
			
			// Now log it to a csv file
			$date = date('Y-m-d H:i:s'); 
			
			$line = array(
				$date,
				$lastname,
				$firstname,
				$email,
				$phone,
				$zip,
				$primary,
				$secondaryList,
				$comments
			);


			$fh = fopen($file, 'a');
			if (fputcsv($fh, $line)) {
			}
			fclose($fh);
			
			// Also add them to the newsletter csv
			$line = array(
				$email,
				$name,
				$zip,
				$date,
				$mailchimpStatus
			);

			$fh = fopen($newsletterFile, 'a');
			if (fputcsv($fh, $line)) {
			}
			
			
			echo 'ok';
			die;
		}
    }

	
	public function prepschoolsignupAction()
    {
        // action body
		
		if ($this->getRequest()->isPost()) {
			$configOptions = new Zend_Config($this->getInvokeArg('bootstrap')->getOptions());
			$emailTo = $configOptions->email->to;
			
			$firstname = $this->_getParam('firstname');
			$lastname = $this->_getParam('lastname');
			$email = $this->_getParam('emailaddress');
			$phone = $this->_getParam('phone');
			$comments = $this->_getParam('comments');
			$zip = $this->_getParam('zip');
			$primary = $this->_getParam('primary');
			$secondary = $this->_getParam('secondary');
			$name = "$firstname $lastname";
			
			//$secondaryList = implode(', ', $secondary);
			$secondaryList = '';
			
			$subject = "Prep School Enrollment from $name";
			
			$body = "New application request from $name.<br />\n";
			$body .= "Phone: $phone<br />\n";
			$body .= "Email: $email<br />\n";
			$body .= "Zip code: $zip<br />\n";
			$body .= "Primary motivation: $primary<br />\n";
			//$body .= "Secondary motivation: $secondaryList<br />\n";
			$body .= "<br />\n$comments";
			
			require_once('models/Mail.php');
			$Mail = new Mail;
			$Mail->send($emailTo, $subject, $body, array($email, $name));
			
			// Now log it to a csv file
			$file = $configOptions->signups->file;
			$date = date('Y-m-d H:i:s'); 
			
			$line = array(
				$date,
				$lastname,
				$firstname,
				$email,
				$phone,
				$zip,
				$primary,
				$secondaryList,
				$comments
			);


			$fh = fopen($file, 'a');
			if (fputcsv($fh, $line)) {
			}
			
			echo 'ok';
			die;
		}
    }
	
	public function instructorAction() {
		$this->_helper->layout->setLayout('overlay');
		
		if ($this->getRequest()->isPost()) {
			$configOptions = new Zend_Config($this->getInvokeArg('bootstrap')->getOptions());
			$emailTo = $configOptions->email->to;
			
			$firstname = $this->_getParam('firstname');
			$lastname = $this->_getParam('lastname');
			$company = $this->_getParam('company');
			$email = $this->_getParam('emailaddress');
			$phone = $this->_getParam('phone');
			$comments = $this->_getParam('comments');
			$zip = $this->_getParam('zip');
			$training_url = $this->_getParam('training_url');
			$youtube_url = $this->_getParam('youtube_url');
			$other_url = $this->_getParam('other_url');
			$experience = $this->_getParam('experience');
			$what_teach = $this->_getParam('what_teach');
			$willing_submit_video = $this->_getParam('willing_submit_video');
			$name = "$firstname $lastname";
			
			$subject = "Instructor Inquiry from $name";
			if (!empty($company)) $subject .= ", $company";
			
			$body = "Instructor Inquiry from $name.<br />\n";
			$body .= "Company: $company<br />\n";
			$body .= "Phone: $phone<br />\n";
			$body .= "Email: $email<br />\n";
			$body .= "Zip code: $zip<br />\n";
			$body .= "Training Website: $training_url<br />\n";
			$body .= "YouTube Channel: $youtube_url<br />\n";
			$body .= "Other Website: $other_url<br />\n";
			$body .= "Instructing Experience: $experience<br />\n";
			$body .= "What You'd Like to Teach: $what_teach<br />\n";
			$body .= "Willing to Submit Sample Training: $willing_submit_video<br />\n";
			$body .= "<br />\n$comments";
			
			//$bcc = 'kevin@netprofitservices.com';
			
			require_once('models/Mail.php');
			$Mail = new Mail;
			$Mail->send($emailTo, $subject, $body, array($email, $name));
			
			/*
			// Now log it to a csv file
			$configOptions = new Zend_Config($this->getInvokeArg('bootstrap')->getOptions());
			$file = $configOptions->signups->file;
			
			
			$date = date('Y-m-d H:i:s'); 
			
			$line = array(
				$date,
				$lastname,
				$firstname,
				$email,
				$phone,
				$zip,
				$primary,
				$secondaryList,
				$comments
			);


			$fh = fopen($file, 'a');
			if (fputcsv($fh, $line)) {
			}
			*/
			echo 'ok';
			die;
		}
		
	}

	public function instructorsignupAction() {
		$this->_helper->layout->setLayout('overlay');
		
		if ($this->getRequest()->isPost()) {
			$configOptions = new Zend_Config($this->getInvokeArg('bootstrap')->getOptions());
			$emailTo = $configOptions->email->to;
			
			$firstname = $this->_getParam('firstname');
			$lastname = $this->_getParam('lastname');
			$company = $this->_getParam('company');
			$email = $this->_getParam('emailaddress');
			$phone = $this->_getParam('phone');
			$comments = $this->_getParam('comments');
			$zip = $this->_getParam('zip');
			$name = "$firstname $lastname";
			
			$subject = "Instructor Inquiry from $name";
			if (!empty($company)) $subject .= ", $company";
			
			$body = "Instructor Inquiry from $name.<br />\n";
			$body .= "Company: $company<br />\n";
			$body .= "Phone: $phone<br />\n";
			$body .= "Email: $email<br />\n";
			$body .= "Zip code: $zip<br />\n";
			$body .= "<br />\n$comments";
			
			//$bcc = 'kevin@netprofitservices.com';
			
			require_once('models/Mail.php');
			$Mail = new Mail;
			$Mail->send($emailTo, $subject, $body, array($email, $name));
			
			/*
			// Now log it to a csv file
			$configOptions = new Zend_Config($this->getInvokeArg('bootstrap')->getOptions());
			$file = $configOptions->signups->file;
			
			
			$date = date('Y-m-d H:i:s'); 
			
			$line = array(
				$date,
				$lastname,
				$firstname,
				$email,
				$phone,
				$zip,
				$primary,
				$secondaryList,
				$comments
			);


			$fh = fopen($file, 'a');
			if (fputcsv($fh, $line)) {
			}
			*/
			echo 'ok';
			die;
		}
		
	}
		
	public function mctestAction() {
	}

}



