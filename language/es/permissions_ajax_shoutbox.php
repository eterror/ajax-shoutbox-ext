<?php
/**
 *
 * Ajax Shoutbox extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2014 Paul Sohier <http://www.ajax-shoutbox.com>
 * @license       GNU General Public License, version 2 (GPL-2.0)
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

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge(
	$lang, array(
		'ACL_U_SHOUTBOX_VIEW'   => 'Puede ver el Cuadro de Charla Ajax',
		'ACL_U_SHOUTBOX_POST'   => 'Puede publicar en el Cuadro de Charla Ajax',
		'ACL_U_SHOUTBOX_QUOTE'  => 'Puede citar en el Cuadro de Charla Ajax',
		'ACL_U_SHOUTBOX_BBCODE' => 'Puede usar BBCode en el Cuadro de Charla Ajax',
		'ACL_U_SHOUTBOX_DELETE' => 'Puede borrar sus propios mensajes en el Cuadro de Charla Ajax',
		'ACL_M_SHOUTBOX_DELETE' => 'Puede borrar mensajes en el Cuadro de Charla Ajax',
	)
);
