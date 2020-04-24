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
* Código fonte: https://sourceforge.net/projects/phpbb3-language-pack-gl/
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

$lang = array_merge($lang, array(
	'ACP_VIGLINK_SETTINGS'			=> 'Axustes de VigLink',
	'ACP_VIGLINK_SETTINGS_EXPLAIN'	=> 'VigLink é un servizo de terceiros que discretamente monetiza enlaces publicados polos usuarios sen impacto na experiencia de usuario. Cuando os usuarios premen nunha ligazón externa, a produtos ou servizos e mercan algo, os comerciantes pagan a VigLink unha comisión, da cual unha parte vai ao proxecto phpBB. Ao elexir activar VigLink e donar os ingresos ao proxecto phpBB, estás apoiando á organización de código aberto e asegurando a súa seguridade financiera.',
	'ACP_VIGLINK_SETTINGS_CHANGE'	=> 'Podes mudar estes axustes en calquera momento dende o panel de “<a href="%1$s">Axustes de VigLink</a>”.',
	'ACP_VIGLINK_SUPPORT_EXPLAIN'	=> 'Xa no serás redirixido a esta página unha vez que envíes as túas opcións preferidas, premento no botón Enviar.',
	'ACP_VIGLINK_ENABLE'			=> 'Habilitar VigLink',
	'ACP_VIGLINK_ENABLE_EXPLAIN'	=> 'Permite o uso dos servizos de VigLink.',
	'ACP_VIGLINK_EARNINGS'			=> 'Reclamar os teus propios ingresos (opcional)',
	'ACP_VIGLINK_EARNINGS_EXPLAIN'  => 'Podes reclamar os teus propios ingresos inscribíndote nunha conta Convertir VigLink.',
	'ACP_VIGLINK_DISABLED_PHPBB'	=> 'Os servizos de VigLink foron desactivados por phpBB.',
	'ACP_VIGLINK_CLAIM'				=> 'Reclamar as túas gañancias',
	'ACP_VIGLINK_CLAIM_EXPLAIN'		=> 'Podes reclamar as gañancias do teu foro dos enlaces monetarios VigLink, en lugar de doar as gañancias ao proxecto phpBB. Para xestionar a configuración da túa conta, rexístrate premento en “Convertir Conta”.',
	'ACP_VIGLINK_CONVERT_ACCOUNT'	=> 'Convertir conta',
	'ACP_VIGLINK_NO_CONVERT_LINK'	=> 'Non se puido recuperar a ligazión de conta de conversión de VigLink.',
));
