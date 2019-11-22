<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
*/

namespace phpbb\db\migration\data\v330;

class add_captcha_permission extends \phpbb\db\migration\migration
{
	public function update_data()
	{
		return array(
			// Add permission
			// only whitelisted users can post without captcha
			array('permission.add', array('u_no_captcha_posting')),

			// Set permission
			// let registered users post without captcha so as to not break expected behavior
			array('permission.permission_set', array('REGISTERED', 'u_no_captcha_posting')),
		);
	}
}
