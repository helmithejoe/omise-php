<?php
require_once dirname(__FILE__).'/OmiseAccessBase.php';
require_once dirname(__FILE__).'/../model/OmiseBalance.php';

class OmiseAccessBalance extends OmiseAccessBase {
	/**
	 * @throws OmiseException
	 * @return OmiseBalance
	 */
	public function retrieve() {
		$array = parent::execute(parent::URLBASE_API.'/balance', parent::REQUEST_GET, $this->_secretkey);
		
		return new OmiseBalance($array);
	}
}
?>