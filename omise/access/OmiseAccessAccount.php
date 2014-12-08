<?php
require_once dirname(__FILE__).'/OmiseAccessBase.php';
require_once dirname(__FILE__).'/../model/OmiseAccount.php';

class OmiseAccessAccount extends OmiseAccessBase {
	/**
	 * @throws OmiseException
	 * @return OmiseAccount
	 */
	public function retrieve() {
		$array = parent::execute(parent::URLBASE_API.'/account', parent::REQUEST_GET, $this->_secretkey);
		
		return new OmiseAccount($array);
	}
}
?>