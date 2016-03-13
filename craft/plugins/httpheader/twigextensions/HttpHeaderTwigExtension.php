<?php

/**
 * HttpHeader Twig Extension
 *
 * @package httpheader
 * @author TJ Draper <tj@buzzingpixel.com>
 * @link https://buzzingpixel.com
 * @copyright Copyright (c) 2016, BuzzingPixel, LLC
 */

namespace Craft;

class HttpHeaderTwigExtension extends \Twig_Extension
{
	protected $opt = array();

	/**
	 * Get Twig Extension name
	 *
	 * @return string
	 */
	public function getName()
	{
		return 'Http Header';
	}

	/**
	 * Get array of Twig Functions
	 *
	 * @return array
	 */
	public function getFunctions()
	{
		return array(
			'httpHeader' => new \Twig_Function_Method($this, 'httpHeader')
		);
	}

	/**
	 * httpHeader Twig Function
	 *
	 * @param array $opt array of options
	 */
	public function httpHeader($opt = array())
	{
		$this->opt = $opt;

		if (($devMode = $this->checkItem('devMode')) !== null) {
			craft()->config->set('devMode', $devMode === true);
		}

		if (($status = $this->checkItem('status')) !== null) {
			http_response_code($status);
		}

		if (($contentType = $this->checkItem('contentType')) !== null) {
			header("Content-type: {$contentType}");
		}

		if (($disposition = $this->checkItem('disposition')) !== null) {
			if (($filename = $this->checkItem('fileName')) === null) {
				$fileName = 'download.txt';
			}

			header("Content-Disposition: {$disposition}; filename={$fileName}");
		}

		if (($lang = $this->checkItem('lang')) !== null) {
			header("Content-Language: {$lang}");
		}

		if (($accessOrigin = $this->checkItem('accessOrigin')) !== null) {
			header("Access-Control-Allow-Origin: {$accessOrigin}");
		}
	}

	/**
	 * Check array item
	 *
	 * @param string $item
	 * @return mixed
	 */
	private function checkItem($item)
	{
		if (! isset($this->opt[$item])) {
			return null;
		}

		return $this->opt[$item];
	}
}
