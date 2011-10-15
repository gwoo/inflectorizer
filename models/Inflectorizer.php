<?php

namespace app\models;

use lithium\util\Inflector;

class Inflectorizer extends \lithium\data\Model {

	public $validates = array();
	
	public static function methods() {
		$list = array(
			'pluralize', 'singularize', 'camelize', 'underscore', 'slug', 'humanize', 'tableize', 'classify'
		);
		return array_combine($list, $list);
	}
	
	public static function get($method, $text) {
		return Inflector::$method($text);
	}
}

?>