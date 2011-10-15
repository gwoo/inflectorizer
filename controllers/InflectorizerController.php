<?php

namespace app\controllers;

use app\models\Inflectorizer;
use lithium\action\DispatchException;

class InflectorizerController extends \lithium\action\Controller {

	public function index() {
		return $this->display();
	}

	public function display($method = null, $text = null) {
		$this->_render['template'] = 'index';
		$methods = Inflectorizer::methods();
		$result = null;

		if ($this->request->data) {
			$method = $this->request->data['method'];
			$text = $this->request->data['text'];
		}
		if ($method && $text) {
			$result = Inflectorizer::get($method, $text);
		}
		return compact('result', 'methods', 'method', 'text');
	}

	public function show($text = null) {
		$results = array();
		if ($this->request->data) {
			$text = $this->request->data['text'];
		}
		if ($text) {
			foreach (Inflectorizer::methods() as $method) {
				$results[$method] = Inflectorizer::get($method, $text);
			}
		}
		return compact('results', 'text');
	}
}

?>