<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
		$this->view->metaTitle = "Mainstream Preppers - Thriving in Good Times and Bad";
		$this->view->metaKeywords = "prepper, prepardeness, prepper training, prepper groups, preparedness training, intentional community";
		$this->view->metaDescription = "Mainstream Preppers offers advanced skill building in preparedness, a network for forming preparedness groups, and more.";
		
		$this->view->baseUrl = 'http://mainstreampreppers.com/';
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

    public function howthemoneyworksAction()
    {
        // action body
    }
    public function ifyoubuilditAction()
    {
        // action body
		$this->_helper->layout->setLayout('overlay');
    }
    public function instructorsAction()
    {
        // action body
    }
    public function instructorsprivateAction()
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

    public function whyprepareAction()
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


}





