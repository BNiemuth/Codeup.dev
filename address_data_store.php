<?php

require_once 'filestore.php';
class AddressDataStore extends Filestore {
	public $filename = '';

	function __construct($file_name) {
		$file_name=strtolower($file_name);
		parent::__construct($file_name);
	}


	function add_address($address_book, &$error_message){
		$temp = $_POST;
		if ($temp['customer_name'] == '' || ['customer_address'] == '' || ['customer_city'] == '' ||
		['customer_state'] == '' || ['customer_zip'] == '') {
			$error_message = '** It looks like you left something blank.** :(';

		} else {
			$address_book[] = $temp;
		}
		return $address_book;
	}
}