<?php
/**
*
* @package phpBB Extension - Insert URL
* @copyright (c) 2013 phpBB Group
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace sheer\urlinsert\controller;

use Symfony\Component\HttpFoundation\Response;

class urlinsert
{
	protected $template;
	protected $user;

	public function __construct(
		\phpbb\template\template $template,
		\phpbb\user $user
	)
	{
		$this->template = $template;
		$this->user = $user;
	}

	public function main()
	{


		page_header($this->user->lang('URL_PATTERN'));
		$this->template->set_filenames(array(
			'body' => 'pattern.html'));

		page_footer();
		return new Response($this->template->return_display('body'), 200);
	}
}
