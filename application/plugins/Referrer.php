<?
/**
 * Look for a referral code on every request and save it to the session if found
 */
class Application_Plugin_Referrer extends Zend_Controller_Plugin_Abstract {
	public function preDispatch(Zend_Controller_Request_Abstract $request) {
		$referralCode = $request->getParam('r');
		
		$session = new Application_Model_Session;

		if (!empty($referralCode)) {
			
			$session->setReferralCode($referralCode);
		}
		
		// Debug:
		if (false) {
			$r = $session->getReferralCode();
			if (!empty($r)) {
				pr($r);
			}
		}
	}
}