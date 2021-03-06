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
	'ADMIN_SIG_PREVIEW'		=> 'Previsualización da sinatura',
	'AT_LEAST_ONE_FOUNDER'	=> 'Non podes modificar este fundador a un usuario normal. Ten que haber polo menos un fundador activo. Se desexas cambiar o estado deste usuario fundador, antes deberás estabelecer outro usuario como fundador.',

	'BAN_ALREADY_ENTERED'	=> 'A prohibición xa foi inserida previamente. Non se actualizou a lista de prohibicións.',
	'BAN_SUCCESSFUL'		=> 'Prohibición inserida correctamente',

	'CANNOT_BAN_ANONYMOUS'			=> 'Non podes prohibir a conta anónima. Podes configurar os permisos para usuarios anónimos na lapela de Permisos.',
	'CANNOT_BAN_FOUNDER'			=> 'Non podes prohibir a conta dun fundador.',
	'CANNOT_BAN_YOURSELF'			=> 'Non podes prohibirte a ti mesmo',
	'CANNOT_DEACTIVATE_BOT'			=> 'Non podes prohibir as contas de bot. Por favor, desactiva o bot na páxina de bots no seu lugar.',
	'CANNOT_DEACTIVATE_FOUNDER'		=> 'Non podes desactivar contas de fundador.',
	'CANNOT_DEACTIVATE_YOURSELF'	=> 'Non podes desactivar a túa propia conta.',
	'CANNOT_FORCE_REACT_BOT'		=> 'Non podes forzar a reactivación dunha conta bot. Entanto desactive o bot.',
	'CANNOT_FORCE_REACT_FOUNDER'	=> 'Non podes forzar a reactivación da conta dun fundador.',
	'CANNOT_FORCE_REACT_YOURSELF'	=> 'Non podes forzar a reactivación da túa propia conta.',
	'CANNOT_REMOVE_ANONYMOUS'		=> 'Non podes eliminar a conta de usuario convidado.',
	'CANNOT_REMOVE_FOUNDER'			=> 'Non podes eliminar a conta dun fundador.',
	'CANNOT_REMOVE_YOURSELF'		=> 'Non podes eliminar a túa propia conta.',
	'CANNOT_SET_FOUNDER_IGNORED'	=> 'Non podes estabelecer usuarios ignorados coma fundadores.',
	'CANNOT_SET_FOUNDER_INACTIVE'	=> 'Precisas activar usuario antes de estabelecelos coma fundadores.',
	'CONFIRM_EMAIL_EXPLAIN'			=> 'Só debes especificar isto se estás a mudar o enderezo de correo dos usuarios.',

	'DELETE_POSTS'			=> 'Borrar mensaxes',
	'DELETE_USER'			=> 'Eliminar usuario',
	'DELETE_USER_EXPLAIN'	=> 'Ten en conta que a eliminación dun usuario é definitiva e non se pode recuperar. As mensaxes privadas que este usuario enviou pero que aínda non foron abertas polos seus destinatarios serán tamén borradas.',

	'FORCE_REACTIVATION_SUCCESS'	=> 'Reactivación forzada correctamente',
	'FOUNDER'						=> 'Fundador',
	'FOUNDER_EXPLAIN'				=> 'Os membros fundadores non poden ser prohibidos, eliminados nin modificados por membros non fundadores.',

	'GROUP_APPROVE'					=> 'Aprobar membro',
	'GROUP_DEFAULT'					=> 'Predeterminado',
	'GROUP_DELETE'					=> 'Eliminar',
	'GROUP_DEMOTE'					=> 'Degradar',
	'GROUP_PROMOTE'					=> 'Promocionar',

	'IP_WHOIS_FOR'			=> 'Identidade da IP para %s',

	'LAST_ACTIVE'			=> 'Último activo',

	'MOVE_POSTS_EXPLAIN'	=> 'Selecciona o foro ao que queres mover todas as mensaxes enviadas por este usuario.',

	'NO_SPECIAL_RANK'		=> 'Non se asignou ningún rango especial',
	'NO_WARNINGS'			=> 'Non hai advertencia ningunha.',
	'NOT_MANAGE_FOUNDER'	=> 'O usuario que tentaches xestionar ten status de fundador. Só os fundadores poden xestionar a outros fundadores.',

	'QUICK_TOOLS'			=> 'Ferramentas rápidas',

	'REGISTERED'			=> 'Rexistrado',
	'REGISTERED_IP'			=> 'Rexistrado desde a IP',
	'RETAIN_POSTS'			=> 'Conservar as mensaxes enviadas',

	'SELECT_FORM'			=> 'Seleccionar formulario',
	'SELECT_USER'			=> 'Seleccionar usuario',

	'USER_ADMIN'					=> 'Administración de Usuario',
	'USER_ADMIN_ACTIVATE'			=> 'Activar conta',
	'USER_ADMIN_ACTIVATED'			=> 'Usuario activado correctamente',
	'USER_ADMIN_AVATAR_REMOVED'		=> 'Avatar eliminado da conta de usuario correctamente',
	'USER_ADMIN_BAN_EMAIL'			=> 'Prohibir por correo electrónico',
	'USER_ADMIN_BAN_EMAIL_REASON'	=> 'Enderezo de correo prohibido a través da administración de usuarios',
	'USER_ADMIN_BAN_IP'				=> 'Prohibir por IP',
	'USER_ADMIN_BAN_IP_REASON'		=> 'IP prohibida a través da administración de usuarios',
	'USER_ADMIN_BAN_NAME_REASON'	=> 'Nome de usuario prohibido a través da administración de usuarios',
	'USER_ADMIN_BAN_USER'			=> 'Prohibir por nome de usuario',
	'USER_ADMIN_DEACTIVATE'			=> 'Desactivar conta',
	'USER_ADMIN_DEACTIVED'			=> 'Usuario desactivado correctamente',
	'USER_ADMIN_DEL_ATTACH'			=> 'Eliminar todos os adxuntos',
	'USER_ADMIN_DEL_AVATAR'			=> 'Eliminar avatar',
	'USER_ADMIN_DEL_OUTBOX'			=> 'Caixa de saída de MP baleira',
	'USER_ADMIN_DEL_POSTS'			=> 'Eliminar todas as mensaxes publicadas',
	'USER_ADMIN_DEL_SIG'			=> 'Eliminar sinatura',
	'USER_ADMIN_EXPLAIN'			=> 'Aquí podes mudar a información dos teus usuarios, así como certas opcións específicas.',
	'USER_ADMIN_FORCE'				=> 'Forzar reactivación',
	'USER_ADMIN_LEAVE_NR'			=> 'Eliminar dos Rexistrados Recentemente',
	'USER_ADMIN_MOVE_POSTS'			=> 'Mover todas as mensaxes publicadas',
	'USER_ADMIN_SIG_REMOVED'		=> 'Sinatura eliminada da conta de usuario correctamente',
	'USER_ATTACHMENTS_REMOVED'		=> 'Todos os adxuntos enviados por este usuario foron eliminados correctamente',
	'USER_AVATAR_NOT_ALLOWED'		=> 'Non se pode amosar o avatar xa que se desactivaron os avatares.',
	'USER_AVATAR_UPDATED'			=> 'Actualizados correctamente os detalles dos avatares de usuario',
	'USER_AVATAR_TYPE_NOT_ALLOWED'	=> 'Non se poed amosar o tipo de avatar actual xa que foi desactivado.',
	'USER_CUSTOM_PROFILE_FIELDS'	=> 'Campos de perfil personalizado',
	'USER_DELETED'					=> 'Usuario eliminado correctamente',
	'USER_GROUP_ADD'				=> 'Engadir usuario a grupo',
	'USER_GROUP_NORMAL'				=> 'O usuario de grupos normais é un membro de',
	'USER_GROUP_PENDING'			=> 'O usuario de grupos está en modo pendente',
	'USER_GROUP_SPECIAL'			=> 'O usuario de grupos especiais é un membro de',
	'USER_LIFTED_NR'				=> 'Eliminouse o estado de recentemente rexistrado do usuario de xeito correcto.',
	'USER_NO_ATTACHMENTS'			=> 'Non hai arquivos adxuntos que amosar.',
	'USER_NO_POSTS_TO_DELETE'			=> 'O usuario non ten mensaxes que conservar ou eliminar.',
	'USER_OUTBOX_EMPTIED'			=> 'Caixa de saída de mensaxes privadas do usuario baleirada de xeito correcto.',
	'USER_OUTBOX_EMPTY'				=> 'A caixa de saída de mensaxes privadas do usuario xa estaba baleira.',
	'USER_OVERVIEW_UPDATED'			=> 'Detalles do usuario actualizados',
	'USER_POSTS_DELETED'			=> 'Elimináronse correctamente todas as mensaxes enviadas por este usuario.',
	'USER_POSTS_MOVED'				=> 'Mensaxes publicadas polo usuario movidas correctamente ao foro de destino.',
	'USER_PREFS_UPDATED'			=> 'Preferencias de usuario actualizadas',
	'USER_PROFILE'					=> 'Perfil de usuario',
	'USER_PROFILE_UPDATED'			=> 'Perfil de usuario actualizado',
	'USER_RANK'						=> 'Rango de usuario',
	'USER_RANK_UPDATED'				=> 'Rango de usuario actualizado',
	'USER_SIG_UPDATED'				=> 'Sinatura actualizada correctamente',
	'USER_WARNING_LOG_DELETED'		=> 'Non hai información ningunha dispoñible. Pode que fose eliminada a entrada do rexistro (log).',
	'USER_TOOLS'					=> 'Ferramentas básicas'
));
