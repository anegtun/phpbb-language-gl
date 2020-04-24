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
* Traducido por: https://gaelicogalego.gal/ Asociación Galega de Fútbol Gaélico
* Baseado no traballo da CiberIrmandade da Fala
* Código fonte: https://github.com/anegtun/phpbb-language-gl
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

$lang = array_merge($lang, array(
	'ACTIVE_TOPICS'			=> 'Temas activos',
	'ANNOUNCEMENTS'			=> 'Anuncios',

	'FORUM_PERMISSIONS'		=> 'Permisos do foro',

	'ICON_ANNOUNCEMENT'		=> 'Anuncio',
	'ICON_STICKY'			=> 'Destacado',

	'LOGIN_NOTIFY_FORUM'	=> 'Envióuseche unha notificación sobre este foro, por favor, inicia sesión para vela.',

	'MARK_TOPICS_READ'		=> 'Marcar temas como lidos',

	'NEW_POSTS_HOT'			=> 'Novas mensaxes [ Popular ]',	// Not used anymore
	'NEW_POSTS_LOCKED'		=> 'Novas mensaxes [ Bloqueado ]',	// Not used anymore
	'NO_NEW_POSTS_HOT'		=> 'Non hai novas mensaxes [ Popular ]',	// Not used anymore
	'NO_NEW_POSTS_LOCKED'	=> 'Non hai novas mensaxes [ Bloqueado ]',	// Not used anymore
	'NO_READ_ACCESS'		=> 'Non dispós dos permisos precisos para ler temas incluídos neste foro.',
	'NO_FORUMS_IN_CATEGORY'	=> 'Non hai foro ningún nesta categoría.',
	'NO_UNREAD_POSTS_HOT'		=> 'Non hai mensaxes sen ler [ Popular ]',
	'NO_UNREAD_POSTS_LOCKED'	=> 'Non hai mensaxes sen ler [ Bloqueado ]',

	'POST_FORUM_LOCKED'		=> 'O foro está bloqueado',

	'TOPICS_MARKED'			=> 'Os temas deste foro foron marcados como lidos.',

	'UNREAD_POSTS_HOT'		=> 'Mensaxes sen ler [ Popular ]',
	'UNREAD_POSTS_LOCKED'	=> 'Mensaxes sen ler [ Bloqueado ]',

	'VIEW_FORUM'			=> 'Ver foro',
	'VIEW_FORUM_TOPICS'		=> array(
		1	=> '%d tema',
		2	=> '%d temas',
	),
));
