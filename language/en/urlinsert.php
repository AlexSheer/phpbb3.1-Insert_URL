<?php
/**
*
* @package phpBB Extension - Insert URL
* @copyright (c) 2015 Sheer
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'URL_PATTERN'	=> 'Insert link',
	'LINK'			=> 'Link description',
	'LINK_EXPLAIN'	=> 'Type a description of the link, such as Russian support forum phpBB3',
	'URL'			=> 'URL-address',
	'URL_EXPLAIN'	=> 'Enter here the full URL-address, including http: //',
));
