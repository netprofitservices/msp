<?

class Mail {
	protected $mailer;
	protected $fromAddress = 'danny@netprofitservices.com';
	protected $fromName = 'Mainstream Preppers';
	protected $smtp_settings = array(
		'host' => 'mail.netprofitservices.com',
		'username' => 'news@netprofitservices.com',
		'password' => 'kindness'
	);
	
	
	/**
	 * $to can be a string or an array
	 */
	public function send($to, $subject, $body, $from = null, $bcc = null) {
		$mail = $this->getMailer();
		
		if (!is_array($to)) $to = array($to);
		
		$mail->setSubject($subject);
		$mail->setBodyText(strip_tags($body));
		$mail->setBodyHtml($body);
		
		if (empty($from) || empty($from[0]) || empty($from[1])) {
			$mail->setFrom($this->fromAddress, $this->fromName);
		} else {
			$mail->setFrom($from[0], $from[1]);
		}
		
		foreach ($to as $address) {
			$mail->addTo($address);
		}
		
		if (!empty($bcc)) {
			$mail->addBcc($bcc);
		}
		
		$mail->send();
		
	}
		
	protected function getMailer() {
		if (empty($this->mailer)) {
			$config = array('auth' => 'login',
			                'username' => $this->smtp_settings['username'],
			                'password' => $this->smtp_settings['password']);

			$transport = new Zend_Mail_Transport_Smtp($this->smtp_settings['host'], $config);
			
			$this->mailer = new Zend_Mail;
		}
		
		return $this->mailer;
	}
}