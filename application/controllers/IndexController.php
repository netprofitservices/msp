<?php

class IndexController extends Zend_Controller_Action
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
		$this->view->metaTitle = "Mainstream Preppers - Thriving in Good Times and Bad";
		$this->view->metaKeywords = "prepper, prepardeness, prepper training, prepper groups, preparedness training, intentional community";
		$this->view->metaDescription = "Mainstream Preppers offers advanced skill building in preparedness, a network for forming preparedness groups, and more.";
		/*$this->view->showHomepageContentInHeader = true;*/
    }
    public function index2Action()
    {
        // action body
		$this->view->metaTitle = "Mainstream Preppers - Thriving in Good Times and Bad";
		$this->view->metaKeywords = "prepper, prepardeness, prepper training, prepper groups, preparedness training, intentional community";
		$this->view->metaDescription = "Mainstream Preppers offers advanced skill building in preparedness, a network for forming preparedness groups, and more.";
    }
    public function insideAction()
    {
        // action body
    }

    public function plansAction()
    {
        // action body
    }

    public function aboutAction()
    {
        // action body
    }

    public function blazeAction()
    {
        // action body
    }

    public function blogAction()
    {
        // action body
    }

    public function businessAction()
    {
        // action body
    }

    public function businessinvestAction()
    {
        // action body
    }
    public function comingsoonAction()
    {
        // action body
		$this->_helper->layout->setLayout('overlay');
    }

    public function customersAction()
    {
        // action body
    }
    public function expoqrAction()
    {
        // action body
    }
    public function faqAction()
    {
        // action body
    }
    public function hiringAction()
    {
        // action body
		$this->_helper->layout->setLayout('overlay');
    }
    public function howthemoneyworksAction()
    {
        // action body
    }
    public function ifyoubuilditAction()
    {
        // action body
		$this->_helper->layout->setLayout('overlay');
    }
    public function instructorpreviewAction()
    {
        // action body
    }
    public function instructorpreview2Action()
    {
        // action body
    }
    public function instructorbioAction()
    {
        // action body
    }
    public function instructorsAction()
    {
        // action body
    }
    public function instructorsprivateAction()
    {
        // action body
    }
    public function instructorsprivatekeyAction()
    {
        // action body
    }
	
    public function instructorrevenueestimatorAction()
    {
        // action body
    }

    public function instructorrevenueestimateAction()
    {
        // action body
    }



    public function missionAction()
    {
        // action body
    }
    public function managementAction()
    {
        // action body
    }
    public function marketingexampleAction()
    {
        // action body
		$this->_helper->layout->setLayout('overlay');
    }
    public function networkAction()
    {
        // action body
    }
    
	public function overlayAction()
    {
        // action body
		$this->_helper->layout->setLayout('overlay');
    }
    public function partnershipsAction()
    {
        // action body
	}
    public function prepschool2Action()
    {
        // action body
	}
	
  public function prepschoolAction()
    {
       // action body
		$this->view->metaTitle = "Preparedness School - We Teach Self Reliance";
		$this->view->metaKeywords = "prepardeness school, preparedness training, prep school, self reliance, self sufficiency, self defense, intentional community";
		$this->view->metaDescription = "Mainstream Preppers offers advanced skill building in preparedness.";
    	   }
   
    public function retreatfaqAction()
    {
        // action body
		
    }
    public function retreatmaterialAction()
    {
        // action body
		
    }
    public function retreatprosAction()
    {
        // action body
		
    }
    public function retreatgroupAction()
    {
        // action body
		
    }
    public function retreatidealAction()
    {
        // action body
		
    }
        public function retreatcostsAction()
    {
        // action body
		
    }
        public function retreatlocationsAction()
    {
        // action body
		
    }
    public function retreatpaceAction()
    {
        // action body
		$this->_helper->layout->setLayout('overlay');
    }
    public function retreatpricingAction()
    {
        // action body
		$this->_helper->layout->setLayout('overlay');
    }
    

    public function retreatsAction()
    {
        // action body
		$this->view->metaTitle = "Mainstream Preppers | Bug Out Locations (BOL) | Bug Out Retreats";
		$this->view->metaKeywords = "bug out retreat, bug out location, bol, prepper retreat";
		$this->view->metaDescription = "Mainstream Preppers offers professionally designed bug out retreats.  Don't be a lone wolf in your bug out location.  There's no 'I' in Prepared.";

    }

    public function paradiseAction()
    {
        // action body
    }

    public function quizAction()
    {
        // action body
    }
    public function termsofserviceAction()
    {
        // action body
		$this->_helper->layout->setLayout('overlay');
    }
    public function whyprepareAction()
    {
        // action body
    }
	
    public function privacypolicyAction()
    {
        // action body
    }

    public function blankAction()
    {
        // action body
    }

    public function contactAction()
    {
        // action body
		$this->_helper->layout->setLayout('overlay');
		
		//require_once('models/Mail.php');
		//$Mail = new Mail;
		//$Mail->send('personman2@gmail.com', 'test', 'test6', array('danny@netprofitservices.com', 'Test email'));
		
		
		if ($this->getRequest()->isPost()) {
			$configOptions = new Zend_Config($this->getInvokeArg('bootstrap')->getOptions());
			$emailTo = $configOptions->email->to;
			
			$firstname = $this->_getParam('firstname');
			$lastname = $this->_getParam('lastname');
			$email = $this->_getParam('emailaddress');
			$phone = $this->_getParam('phone');
			$comments = $this->_getParam('comments');
			$name = "$firstname $lastname";
			
			$subject = "Contact message from $name";
			
			$body = "New contact message from $name.<br />\n";
			$body .= "Phone: $phone<br />\n";
			$body .= "$comments";
			
			require_once('models/Mail.php');
			$Mail = new Mail;
			$Mail->send($emailTo, $subject, $body, array($email, $name), 'kevin@netprofitservices.com');
			//echo "email: $emailTo, subject: $subject, body: $body, from: $email, $name";
			echo 'ok';
			die;
		}
		
    }

    public function introAction()
    {
        // action body
    }
    public function donharroldAction()
    {
        // action body
		$this->_helper->layout->setLayout('overlay');
    }
    public function doomandbloomAction()
    {
        // action body
		$this->_helper->layout->setLayout('overlay');
    }
    public function invictusAction()
    {
        // action body
		$this->_helper->layout->setLayout('overlay');
    }
    public function joefoxAction()
    {
        // action body
		$this->_helper->layout->setLayout('overlay');
    }
    public function billstillAction()
    {
        // action body
		$this->_helper->layout->setLayout('overlay');
    }
    public function zacbauerAction()
    {
        // action body
		$this->_helper->layout->setLayout('overlay');
    }
    public function garywilliamsAction()
    {
        // action body
		$this->_helper->layout->setLayout('overlay');
    }
  	public function paulrangeAction()
    {
        // action body
		$this->_helper->layout->setLayout('overlay');
    }
	
	
	
	// AIDA ad pages
	
	public function selfrelianceAction()
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
			//$secondary = $this->_getParam('secondary');
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

	public function preparednessAction()
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
			//$secondary = $this->_getParam('secondary');
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

	public function preppernetworkAction()
    {
		// Form processing is handled by the newsletter/signup action
    }
	


}


