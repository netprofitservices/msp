<?

class AccessCode {
	protected $file;
	protected $notificationAddress = 'info@mainstreampreppers.com';
	protected $fromAddress = 'info@netprofitservices.com';
	protected $fromName = 'Net Profit Services';
	protected $smtp_settings = array(
		'host' => 'mail.netprofitservices.com',
		'username' => 'news@netprofitservices.com',
		'password' => 'kindness'
	);
	
	
	function __construct() {
		$this->file = dirname(dirname(__FILE__)) . '/access_codes.csv';
	}
	
	public function checkCode($code) {
		$codes = $this->getCodes();
		$name = (!empty($codes[$code])) ? $codes[$code] : false;
		
		
		if ($name) {
			$this->sendNotification($code, $name);
		}
		
		return !empty($name);
	}
	
	protected function sendNotification($code, $name) {
		$date = date('c');
		$subject = "Site Access by: $name";
		$body = "$name accessd the MP site at $date.";

		$Mailer = $this->getMailer();
		
		$Mailer->setSubject($subject);
		$Mailer->setBodyText(strip_tags($body));
		$Mailer->setBodyHtml($body);
		$Mailer->setFrom($this->fromAddress, $this->fromName);

		$Mailer->addTo($this->notificationAddress);
		$Mailer->addTo('kevin@netprofitservices.com');
		
		$Mailer->send();
		
	}
	
	protected function getCodes() {
		$fh = fopen($this->file, 'r');
		
		$codes = array();
		
		while ($row = fgetcsv($fh)) {
			$codes[$row[0]] = $row[1];
		}
		
		return $codes;
	}
	
	protected function getMailer() {
		set_include_path(implode(PATH_SEPARATOR, array(
		    realpath(dirname(__FILE__) . '/beta/library'),
		    get_include_path(),
		)));
		
		require_once 'Zend/Loader/Autoloader.php';
		$autoloader = Zend_Loader_Autoloader::getInstance();
		
		//require_once 'Zend/Mail.php';
		
		$config = array('auth' => 'login',
		                'username' => $this->smtp_settings['username'],
		                'password' => $this->smtp_settings['password']);

		$transport = new Zend_Mail_Transport_Smtp($this->smtp_settings['host'], $config);
		
		$Mailer = new Zend_Mail;
		
		return $Mailer;
	}
}