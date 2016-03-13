<?php

/**
 * HttpHeader Plugin
 *
 * @package httpheader
 * @author TJ Draper <tj@buzzingpixel.com>
 * @link https://buzzingpixel.com
 * @copyright Copyright (c) 2016, BuzzingPixel, LLC
 */

namespace Craft;

class HttpHeaderPlugin extends BasePlugin
{
	/**
	 * Get plugin name
	 *
	 * @return string
	 */
	public function getName()
	{
		return Craft::t('HTTP Header');
	}

	/**
	 * Get plugin version
	 *
	 * @return string
	 */
	public function getVersion()
	{
		return '1.0.0';
	}

	/**
	 * Get plugin developer
	 *
	 * @return string
	 */
	public function getDeveloper()
	{
		return 'BuzzingPixel, LLC';
	}

	/**
	 * Get plugin developer URL
	 *
	 * @return string
	 */
	public function getDeveloperUrl()
	{
		return 'https://buzzingpixel.com';
	}

	/**
	 * Add HTTP Header Twig extension
	 */
	public function addTwigExtension()
	{
		Craft::import('plugins.httpheader.twigextensions.HttpHeaderTwigExtension');

		return new HttpHeaderTwigExtension();
	}
}
