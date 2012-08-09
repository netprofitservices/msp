<?

class MailChimp {
	protected $config;
	protected $api;
	
	public function __construct($config) {
		$this->config = $config;
	}
	
	protected function getApi() {
		if (empty($this->api)) {
			$apiKey = $this->config->mailchimp->apiKey;

			require_once('MCAPI.class.php');
		
			$this->api = new MCAPI($apiKey);
		}
		
		return $this->api;
	}
	
	public function subscribeOrUpdate($email, $merge_vars) {
		$listId = $this->config->mailchimp->listId;
		
		$retval = $this->getApi()->listSubscribe($listId, $email, $merge_vars);	
		
		if ($this->getApi()->errorCode) {
			if ($this->getApi()->errorCode == 214) {
				// Duplicate email. We'll try to just update them
				// First get the member info so we don't drop them from any groups
				$results = $this->getApi()->listMemberInfo($listId, array($email));
				$oldGroups = explode(',', $results['data'][0]['merges']['GROUPINGS'][0]['groups']);
				$newGroups = explode(',', $merge_vars['GROUPINGS'][0]['groups']);
				$merged = array_merge($oldGroups, $newGroups);
				$merged = array_unique($merged);
				$merge_vars['GROUPINGS'][0]['groups'] = implode(',', $merged);
				
				
				// Now send the update
				$this->getApi()->listUpdateMember($listId, $email, $merge_vars);
				
				if ($this->getApi()->errorCode) {
					$mailchimpStatus = "MailChimp API returned the following error when attempting to update the list member:<br />\n";
					$mailchimpStatus .= "Code=" . $this->getApi()->errorCode . "<br />\n";
					$mailchimpStatus .= "Msg=" . $this->getApi()->errorMessage . "<br />\n";
				} else {
					$mailchimpStatus .= "MailChimp API update successful.";
				}
			} else {
				// All other errors.
				$mailchimpStatus = "MailChimp API returned the following error:<br />\n";
				$mailchimpStatus .= "Code=" . $this->getApi()->errorCode . "<br />\n";
				$mailchimpStatus .= "Msg=".$this->getApi()->errorMessage."<br />\n";
			}
		} else {
			$mailchimpStatus .= "MailChimp API subscription successful.";
		}
		
		return $mailchimpStatus;
	}
}