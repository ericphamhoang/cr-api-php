<?php

namespace crapi\models;

class Profile {

	var $tag;

	public function __construct( $code = null ) {

		$this->tag = rand(0, 10);
	}
}