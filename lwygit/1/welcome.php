<?php

class Api_Welcome extends PhalApi_Api {

	public function say() {
		$rs = array();
		$rs['title'] = 'Hello World!123';

		return $rs;
	}
}