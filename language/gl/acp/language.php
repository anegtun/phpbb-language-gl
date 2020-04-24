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
	'ACP_FILES'						=> 'Administración de paquetes de idioma',
	'ACP_LANGUAGE_PACKS_EXPLAIN'	=> 'Dende aquí podes instalar ou eliminar paquetes de idiomas. O paquete de idioma predeterminado márcase cun asterisco (*).',

	'DELETE_LANGUAGE_CONFIRM'		=> 'Estás seguro de querer eliminar “%s”?',

	'INSTALLED_LANGUAGE_PACKS'		=> 'Paquetes de idioma instalados',

	'LANGUAGE_DETAILS_UPDATED'			=> 'Detalles de idioma actualizados correctamente.',
	'LANGUAGE_PACK_ALREADY_INSTALLED'	=> 'Este paquete de idioma xa está instalado.',
	'LANGUAGE_PACK_DELETED'				=> 'O paquete de idioma <b>%s</b> foi eliminado correctamente. Todos os usuarios que o estaban a empregar pasan a usar o idioma por defecto.',
	'LANGUAGE_PACK_DETAILS'				=> 'Detalles do paquete de idioma',
	'LANGUAGE_PACK_INSTALLED'			=> 'O paquete de idioma <b>%s</b> foi instalado correctamente.',
	'LANGUAGE_PACK_CPF_UPDATE'			=> 'As cadeas de idioma dos campos de perfil personalizados foron copiados dende o idioma padrón. Por favor, múdaos se fose preciso.',
	'LANGUAGE_PACK_ISO'					=> 'ISO',
	'LANGUAGE_PACK_LOCALNAME'			=> 'Nome local',
	'LANGUAGE_PACK_NAME'				=> 'Nome',
	'LANGUAGE_PACK_NOT_EXIST'			=> 'O paquete de idioma seleccionado non existe.',
	'LANGUAGE_PACK_USED_BY'				=> 'Utilizado por (incluíndo robots)',
	'LANGUAGE_VARIABLE'					=> 'Variable de idioma',
	'LANG_AUTHOR'						=> 'Autor do paquete de idioma',
	'LANG_ENGLISH_NAME'					=> 'Nome en inglés',
	'LANG_ISO_CODE'						=> 'Código ISO',
	'LANG_LOCAL_NAME'					=> 'Nome local',

	'MISSING_LANG_FILES'		=> 'Ficheiros de idioma non atopados',
	'MISSING_LANG_VARIABLES'	=> 'Variables de idioma non atopadas',

	'NO_FILE_SELECTED'				=> 'Non especificaches un arquivo de idioma.',
	'NO_LANG_ID'					=> 'Non especificaches un paquete de idioma.',
	'NO_REMOVE_DEFAULT_LANG'		=> 'Non podes eliminar o paquete de idioma por defecto.<br />Se queres eliminar este paquete de idioma, muda primeiro o idioma por defecto.',
	'NO_UNINSTALLED_LANGUAGE_PACKS'	=> 'Non se desinstalou paquete de idioma ningún',

	'THOSE_MISSING_LANG_FILES'			=> 'Os seguintes ficheiros de idioma faltan da carpeta de idiomas “%s”',
	'THOSE_MISSING_LANG_VARIABLES'		=> 'As seguintes variables de idioma faltan no paquete de idioma “%s”',
	'UNINSTALLED_LANGUAGE_PACKS'	=> 'Paquetes de idioma sen instalar',

	'BROWSE_LANGUAGE_PACKS_DATABASE'	=> 'Consulta a base de datos de paquetes de idioma',
));