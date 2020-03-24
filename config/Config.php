<?php

class Config{
	private $config;

	public function ListConfig() {
		$config = array();
		
		// Config Url use
		$config['base_url'] = "http://test_flip.apps/";

		// config use xampp or wampp
		// $config['base_url'] = "http://localhost/flip_test/";

		$config['base_flip_url'] = "https://nextar.flip.id";
		$config['flip_key'] = "HyzioY7LP6ZoO7nTYKbG8O4ISkyWnX1JvAEVAhtWKZumooCzqp41";

		return $config;
	}
	
}

?>