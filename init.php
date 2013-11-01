<?php defined('SYSPATH') or die('No direct script access.');

Route::set('media', 'media/<file>', array(
		'file' => '.+', // Pattern to match the file path
	))
	->defaults(array(
		'controller' => 'Media',
		'action'     => 'get',
	));