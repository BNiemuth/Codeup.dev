<?php

class AddressDataStore {
	public $filename = '';

	function __construct($name) {
		$this->filename = $name;
	}

	function read_csv() {
		$handle = fopen($this->filename, 'r');
		$filesize = filesize($this->filename);
		if ($filesize > 0) {
			while(($data = fgetcsv($handle)) !==FALSE) {
				$contents[] = $data;
			}

		} else {
			$contents = [];
		}
		fclose($handle);
		return $contents;
	}

	function save_csv($array){
		$handle = fopen($this->filename, 'w');

		foreach ($array as $fields) {
		    fputcsv($handle, $fields);
		}

		fclose($handle);
	}
}