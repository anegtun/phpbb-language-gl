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
	'APPROVE'								=> 'Aprobar',
	'ATTACHMENT'						=> 'Adxunto',
	'ATTACHMENT_FUNCTIONALITY_DISABLED'	=> 'A funcionalidade de anexos desactivouse.',

	'BOOKMARK_ADDED'		=> 'Tema marcado como favorito.',
	'BOOKMARK_ERR'			=> 'Non se puido marcar o tema como favorito. Téntao de novo.',
	'BOOKMARK_REMOVED'		=> 'Tema desmarcado como favorito.',
	'BOOKMARK_TOPIC'		=> 'Marcar tema como favorito',
	'BOOKMARK_TOPIC_REMOVE'	=> 'Eliminar dos favoritos',
	'BUMPED_BY'				=> 'Última reactivación feita por %1$s o %2$s.',
	'BUMP_TOPIC'			=> 'Reactivar tema',

	'CODE'					=> 'Código',

	'DELETE_TOPIC'			=> 'Eliminar tema',
	'DELETED_INFORMATION'	=> 'Eliminado por %1$s o %2$s',
	'DISAPPROVE'					=> 'Rexeitar',
	'DOWNLOAD_NOTICE'		=> 'Non tes os permisos necesarios para ver os arquivos anexos a esta mensaxe.',

	'EDITED_TIMES_TOTAL'	=> array(
		1	=> 'Última edición por %2$s o %3$s, editado %1$d vez en total.',
		2	=> 'Última edición por %2$s o %3$s, editado %1$d veces en total.',
	),
	'EMAIL_TOPIC'			=> 'Enviar tema por correo',
	'ERROR_NO_ATTACHMENT'	=> 'O anexo seleccionado xa non existe.',

	'FILE_NOT_FOUND_404'	=> 'O arquivo <strong>%s</strong> non existe.',
	'FORK_TOPIC'			=> 'Copiar tema',
	'FULL_EDITOR'			=> 'Editor Completo e Previsualización',

	'LINKAGE_FORBIDDEN'		=> 'Non estás autorizado a ver, descargar ou poñer ligazóns dende/a este sitio.',
	'LOGIN_NOTIFY_TOPIC'	=> 'Envióuseche unha notificación sobre este tema, por favor inicia sesión para velo.',
	'LOGIN_VIEWTOPIC'		=> 'Debes iniciar sesión para poder ver este tema.',

	'MAKE_ANNOUNCE'				=> 'Mudar a “Anuncio”',
	'MAKE_GLOBAL'				=> 'Mudar a “Global”',
	'MAKE_NORMAL'				=> 'Mudar a “Tema Normal”',
	'MAKE_STICKY'				=> 'Mudar a “Destacado”',
	'MAX_OPTIONS_SELECT'		=> array(
		1	=> 'Podes seleccionar <strong>%d</strong> opción',
		2	=> 'Podes seleccionar ata <strong>%d</strong> opcións',
	),
	'MISSING_INLINE_ATTACHMENT'	=> 'O anexo <strong>%s</strong> xa non está dispoñible',
	'MOVE_TOPIC'				=> 'Mover tema',

	'NO_ATTACHMENT_SELECTED'=> 'Non seleccionaches o adxunto que queres descargar ou ver.',
	'NO_NEWER_TOPICS'		=> 'Non hai temas máis novos neste foro.',
	'NO_OLDER_TOPICS'		=> 'Non hai temas máis vellos neste foro.',
	'NO_UNREAD_POSTS'		=> 'Non hai novas mensaxes sen ler para este tema.',
	'NO_VOTE_OPTION'		=> 'Debes especificar unha opción cando votes.',
	'NO_VOTES'				=> 'Sen votos',
	'NO_AUTH_PRINT_TOPIC'	=> 'Non estás autorizado a imprimir temas.',

	'POLL_ENDED_AT'			=> 'Enquisa rematada o %s',
	'POLL_RUN_TILL'			=> 'A enquisa estará activa ata o %s',
	'POLL_VOTED_OPTION'		=> 'Votaches por esta opción',
	'POST_DELETED_RESTORE'	=> 'Esta mensaxe foi eliminada. Pode ser restaurada.',
	'PRINT_TOPIC'			=> 'Vista de impresión',

	'QUICK_MOD'				=> 'Ferramentas Quick-mod',
	'QUICKREPLY'			=> 'Resposta Rápida',
	'QUOTE'					=> 'Cita',

	'REPLY_TO_TOPIC'		=> 'Responder ao tema',
	'RESTORE'				=> 'Restaurar',
	'RESTORE_TOPIC'			=> 'Restaurar tema',
	'RETURN_POST'			=> '%sVolver á mensaxe%s',

	'SUBMIT_VOTE'			=> 'Votar',

	'TOPIC_TOOLS'			=> 'Ferramentas de temas',
	'TOTAL_VOTES'			=> 'Votos totáis',

	'UNLOCK_TOPIC'			=> 'Desbloquear tema',

	'VIEW_INFO'				=> 'Detalles da mensaxe',
	'VIEW_NEXT_TOPIC'		=> 'Seguinte tema',
	'VIEW_PREVIOUS_TOPIC'	=> 'Tema anterior',
	'VIEW_RESULTS'			=> 'Ver resultados',
	'VIEW_TOPIC_POSTS'		=> array(
		1	=> '%d mensaxe',
		2	=> '%d mensaxes',
	),
	'VIEW_UNREAD_POST'		=> 'Primeira mensaxe sen ler',
	'VOTE_SUBMITTED'		=> 'O teu voto foi contabilizado.',
	'VOTE_CONVERTED'		=> 'Non se permite o troco de votos para as enquisas convertidas.',

));
