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
	'ACP_MODULE_MANAGEMENT_EXPLAIN'	=> 'Aquí podes xestionar todo tipo de módulos. Ten en conta que o Panel de Control de Administración ten unha estrutura de menús de tres niveis (Categoría -> Categoría -> Módulo) mentres que os outros teñen unha estrutura de menú de dous niveis (Categoría -> Módulo) que debe ser mantida. Ten en conta tamén que podes bloquearte a ti mesmo se desactivas ou eliminas os módulos responsables da propia xestión de módulos.',
	'ADD_MODULE'					=> 'Engadir módulo',
	'ADD_MODULE_CONFIRM'			=> 'Estás seguro de querer engadir o módulo escollido no modo seleccionado?',
	'ADD_MODULE_TITLE'				=> 'Engadir módulo',

	'CANNOT_REMOVE_MODULE'	=> 'Non é posíbel eliminar o módulo, xa que ten asignados fillos. Elimina ou move todos os fillos antes de executar esta acción.',
	'CATEGORY'				=> 'Categoría',
	'CHOOSE_MODE'			=> 'Escoller modo do módulo',
	'CHOOSE_MODE_EXPLAIN'	=> 'Escolle o modo no que o módulo será utilizado.',
	'CHOOSE_MODULE'			=> 'Escolle módulo',
	'CHOOSE_MODULE_EXPLAIN'	=> 'Escolle o ficheiro a ser chamado por este módulo.',
	'CREATE_MODULE'			=> 'Crear novo módulo',

	'DEACTIVATED_MODULE'	=> 'Módulo desactivado',
	'DELETE_MODULE'			=> 'Módulo eliminado',
	'DELETE_MODULE_CONFIRM'	=> 'Estás seguro de querer eliminar este módulo?',

	'EDIT_MODULE'			=> 'Editar módulo',
	'EDIT_MODULE_EXPLAIN'	=> 'Aquí podes inserir os parámetros específicos do módulo',

	'HIDDEN_MODULE'			=> 'Módulo oculto',

	'MODULE'					=> 'Módulo',
	'MODULE_ADDED'				=> 'Módulo engadido con éxito',
	'MODULE_DELETED'			=> 'Módulo eliminado con éxito',
	'MODULE_DISPLAYED'			=> 'Módulo visualizado',
	'MODULE_DISPLAYED_EXPLAIN'	=> 'Se non desexas visualizar este módulo, pero queres utilizalo, activa a opción non.',
	'MODULE_EDITED'				=> 'Módulo editado correctamente.',
	'MODULE_ENABLED'			=> 'Módulo activado',
	'MODULE_LANGNAME'			=> 'Nome do idioma do módulo',
	'MODULE_LANGNAME_EXPLAIN'	=> 'Introducir o nome do módulo visualizado. Usa unha constante de idioma se o nome vaise coller dende un ficheiro de idioma.',
	'MODULE_TYPE'				=> 'Tipo de módulo',

	'NO_CATEGORY_TO_MODULE'	=> 'Imposíbel converter a categoría en módulo. Elimina ou move todos os fillos antes de executar esta acción.',
	'NO_MODULE'				=> 'Non se atopou ningún módulo.',
	'NO_MODULE_ID'			=> 'Non se especificou ningún módulo.',
	'NO_MODULE_LANGNAME'	=> 'Non se especificou ningún nome de idioma de módulo.',
	'NO_PARENT'				=> 'Sen pai',

	'PARENT'				=> 'Pai',
	'PARENT_NO_EXIST'		=> 'Non existe o pai',

	'SELECT_MODULE'			=> 'Escolle un módulo',
));