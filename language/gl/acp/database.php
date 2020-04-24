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

// Database Backup/Restore
$lang = array_merge($lang, array(
	'ACP_BACKUP_EXPLAIN'	=> 'Dende aquí podes realizar copias de respaldo de todos os teus datos relacionados con phpBB. O arquivo resultante gardarase no directorio <samp>store/</samp>. Dependendo da configuración do teu servidor poderás comprimilo en diversos formatos.',
	'ACP_RESTORE_EXPLAIN'	=> 'Isto restaurará por completo todas as táboas de phpBB a partir dun arquivo gardado. Se o teu servidor o soporta, podes usar ficheiros comprimidos en gzip ou bzip2, que o sistema os descomprimirá por ti. <strong>ADVERTENCIA</strong> Este proceso sobreescribirá todos os datos existentes. O proceso de restauración pode levar un chisco, polo que non debes saír desta páxina até que remate. As copias de respaldo gárdanse no directorio <samp>store/</samp> e suponse que foron xerados con phpBB. A restauración de copias de respaldo que non foron creadas co sistema integrado de phpBB pode que non funcionen.',

	'BACKUP_DELETE'			=> 'O ficheiro coa copia de respaldo eliminouse correctamente',
	'BACKUP_INVALID'		=> 'O arquivo escollido como copia de respaldo é inválido',
	'BACKUP_NOT_SUPPORTED'	=> 'A copia de respaldo escollida non está soportada',
	'BACKUP_OPTIONS'		=> 'Opcións da copia de respaldo',
	'BACKUP_SUCCESS'		=> 'Creouse o ficheiro coa copia de respaldo correctamente',
	'BACKUP_TYPE'			=> 'Tipo de copia de respaldo',

	'DATABASE'			=> 'Utilidades de base de datos',
	'DATA_ONLY'			=> 'Só datos',
	'DELETE_BACKUP'		=> 'Eliminar copia de respaldo',
	'DELETE_SELECTED_BACKUP'	=> 'Estás seguro de querer eliminar a copia de respaldo seleccionada?',
	'DESELECT_ALL'		=> 'Deseleccionar todo',
	'DOWNLOAD_BACKUP'	=> 'Descargar copia de respaldo',

	'FILE_TYPE'			=> 'Tipo de arquivo',
	'FILE_WRITE_FAIL'	=> 'Non se puido escribir o arquivo no directorio de almacenamento.',
	'FULL_BACKUP'		=> 'Completo',

	'RESTORE_FAILURE'		=> 'Pode que o arquivo de copia de respaldo estea corrupto.',
	'RESTORE_OPTIONS'		=> 'Opcións de restauración',
	'RESTORE_SELECTED_BACKUP'	=> 'Estás seguro de querer restaurar a copia de respaldo escollida?',
	'RESTORE_SUCCESS'		=> 'Restaurouse correctamente a base de datos.<br /><br />O teu sistema debera ter volto ao estado no que estaba cando se fixo a copia de respaldo.',

	'SELECT_ALL'			=> 'Seleccionar todo',
	'SELECT_FILE'			=> 'Seleccionar un arquivo',
	'START_BACKUP'			=> 'Comezar coa copia de respaldo',
	'START_RESTORE'			=> 'Comezar coa restauración',
	'STORE_AND_DOWNLOAD'	=> 'Gardar e descargar',
	'STORE_LOCAL'			=> 'Gardar arquivo localmente',
	'STRUCTURE_ONLY'		=> 'Só a estrutura',

	'TABLE_SELECT'		=> 'Selección da táboa',
	'TABLE_SELECT_ERROR'=> 'Debes seleccionar unha táboa polo menos.',
));