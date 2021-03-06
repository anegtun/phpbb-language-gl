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
	'RECAPTCHA_LANG'				=> 'gl',
	'RECAPTCHA_NOT_AVAILABLE'		=> 'Para poderes empregar o reCaptcha, debes crear unha conta en <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'CAPTCHA_RECAPTCHA'				=> 'reCaptcha',
	'RECAPTCHA_INCORRECT'			=> 'A solución que indicaches non é correcta',
	'RECAPTCHA_NOSCRIPT'			=> 'Por favor habilita JavaScript no teu navegador para poder visualizar a pregunta.',

	'RECAPTCHA_PUBLIC'				=> 'Chave pública reCaptcha (site key)',
	'RECAPTCHA_PUBLIC_EXPLAIN'		=> 'A túa chave pública reCaptcha. As chaves poden obterse en <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'RECAPTCHA_PRIVATE'				=> 'Chave privada reCaptcha (secret key)',
	'RECAPTCHA_PRIVATE_EXPLAIN'		=> 'A túa chave privada reCaptcha. As chaves poden obterse en <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',

	'RECAPTCHA_INVISIBLE'			=> 'Este CAPTCHA está actualmente oculto. Para verificar que funciona, unha icona pequena debera aparecer na esquina inferior dereita desta páxina.',
));
