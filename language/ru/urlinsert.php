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
	'URL_PATTERN'	=> 'Вставить ссылку',
	'LINK'			=> 'Описание ссылки',
	'LINK_EXPLAIN'	=> 'Укажите здесь описание ссылки, например Русская поддержка форума phpBB3',
	'URL'			=> 'URL-адрес',
	'URL_EXPLAIN'	=> 'Укажите здесь полный URL-адрес, включая http://',
));
