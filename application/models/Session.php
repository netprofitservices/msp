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
	
	public function setValue($key, $value) {
		$this->getSession()->$key = $value;
	}
	
	public function getValue($key) {
		return $this->getSession()->$key;
	}
	
}