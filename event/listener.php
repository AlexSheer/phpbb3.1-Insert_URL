<?php
/**
*
* @package phpBB Extension - Insert URL
* @copyright (c) 2015 Sheer
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/
namespace sheer\urlinsert\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
* Event listener
*/
class listener implements EventSubscriberInterface
{
/**
* Assign functions defined in this class to event listeners in the core
*
* @return array
* @static
* @access public
*/
	static public function getSubscribedEvents()
	{
		return array(
			'core.user_setup'					=> 'load_language_on_setup',
		);
	}

	/** @var \phpbb	emplate	emplate */
	protected $template;

	/**
	* Constructor
	*/
	public function __construct(
		\phpbb\template\template $template
	)
	{
		$this->template = $template;
	}

	public function load_language_on_setup($event)
	{
		$lang_set_ext = $event['lang_set_ext'];
		$lang_set_ext[] = array(
			'ext_name' => 'sheer/urlinsert',
			'lang_set' => 'urlinsert',
		);
		$event['lang_set_ext'] = $lang_set_ext;
	}
}
