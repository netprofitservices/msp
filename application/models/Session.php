<?

class Application_Model_Session {
	protected $session;
	protected $namespace = 'MSP';
	
	public function setReferralCode($code) {
		$this->getSession()->referralCode = $code;
	}
	
	public function getReferralCode() {
		return $this->getSession()->referralCode;
	}
	
	protected function getSession() {
		if (empty($this->session)) {
			$this->session = new Zend_Session_Namespace($this->namespace);
		}
		
		return $this->session;
	}
}