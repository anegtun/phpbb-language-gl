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

$lang = array_merge($lang, array(
	'ABOUT_USER'			=> 'Perfil',
	'ACTIVE_IN_FORUM'		=> 'Foro máis activo',
	'ACTIVE_IN_TOPIC'		=> 'Tema máis activo',
	'ADD_FOE'				=> 'Engadir inimigo',
	'ADD_FRIEND'			=> 'Engadir amigo',
	'AFTER'					=> 'Despois',

	'ALL'					=> 'Todos',

	'BEFORE'				=> 'Antes',

	'CC_SENDER'				=> 'Enviarche unha copia deste correo a ti mesmo',
	'CONTACT_ADMIN'			=> 'Contacta cun Administrador',

	'DEST_LANG'				=> 'Idioma',
	'DEST_LANG_EXPLAIN'		=> 'Selecciona un idioma axeitado (se está dispoñible) para o destinatario desta mensaxe.',

	'EDIT_PROFILE'			=> 'Editar perfil',

	'EMAIL_BODY_EXPLAIN'	=> 'Esta mensaxe enviarase como texto plano, polo que non debes incluír HTML ou BBCode. O enderezo de resposta para esta mensaxe será o teu enderezo de correo.',
	'EMAIL_DISABLED'		=> 'Sentímolo, pero todas as funcións relacionadas co correo foron desactivadas.',
	'EMAIL_SENT'			=> 'O correo foi enviado.',
	'EMAIL_TOPIC_EXPLAIN'	=> 'Esta mensaxe enviarase como texto plano, polo que non debes incluír HTML ou BBCode. Ten en conta que a información do tema está xa incluída na mensaxe. O enderezo de resposta para esta mensaxe será o teu enderezo de correo.',
	'EMPTY_ADDRESS_EMAIL'	=> 'Tes que proporcionar un enderezo de correo válido para o destinatario.',
	'EMPTY_MESSAGE_EMAIL'	=> 'Tes que inserir unha mensaxe para enviar por correo.',
	'EMPTY_MESSAGE_IM'		=> 'Tes que inserir unha mensaxe para enviar.',
	'EMPTY_NAME_EMAIL'		=> 'Tes que inserir o nome verdadeiro do destinatario.',
	'EMPTY_SENDER_EMAIL'	=> 'Tes que inserir un enderezo de correo electrónico válido.',
	'EMPTY_SENDER_NAME'		=> 'Tes que inserir un nome.',
	'EMPTY_SUBJECT_EMAIL'	=> 'Debes especificar un asunto para o correo.',
	'EQUAL_TO'				=> 'Igual a',

	'FIND_USERNAME_EXPLAIN'	=> 'Utiliza este formulario para procurar membros concretos. Non é preciso que cubras todos os campos. Podes usar * coma comodín. Cando insiras datas usa o formato aaaa-mm-dd, p.e. 2002-01-01. Marca as caixas correspondentes para seleccionar un ou máis nomes de usuario (pode que sexan aceptados varios nomes de usuario dependendo do propio formulario). De xeito alternativo podes marcar os usuarios requiridos e premer no botón Inserir Marcados.',
	'FLOOD_EMAIL_LIMIT'		=> 'Non podes enviar outro correo-e nestes intres. Téntao de novo máis tarde.',

	'GROUP_LEADER'			=> 'Líder do grupo',

	'HIDE_MEMBER_SEARCH'	=> 'Ocultar procura de usuarios',

	'IM_ADD_CONTACT'		=> 'Engadir Contacto',
	'IM_DOWNLOAD_APP'		=> 'Descargar aplicación',
	'IM_JABBER'				=> 'Ten en conta que os usuarios poden ter seleccionado non recibir mensaxes instantáneas non solicitadas.',
	'IM_JABBER_SUBJECT'		=> 'Esta é unha mensaxe automática, non respondas á mesma! Mensaxe do usuario %1$s en %2$s.',
	'IM_MESSAGE'			=> 'A túa mensaxe',
	'IM_NAME'				=> 'O teu Nome',
	'IM_NO_DATA'			=> 'Non hai información de contacto axeitada para este usuario.',
	'IM_NO_JABBER'			=> 'Sentímolo, pero este sistema non soporta mensaxería directa con Jabber. Precisas ter un cliente Jabber instalado no teu sistema para contactar co destinatario anterior.',
	'IM_RECIPIENT'			=> 'Destinatario',
	'IM_SEND'				=> 'Enviar mensaxe',
	'IM_SEND_MESSAGE'		=> 'Enviar mensaxe',
	'IM_SENT_JABBER'		=> 'A túa mensaxe para %1$s enviouse correctamente.',
	'IM_USER'				=> 'Enviar unha mensaxe instantánea',

	'LAST_ACTIVE'				=> 'Último activo',
	'LESS_THAN'					=> 'Menos de',
	'LIST_USERS'				=> array(
		1	=> '%d usuario',
		2	=> '%d usuarios',
	),
	'LOGIN_EXPLAIN_TEAM'		=> 'Tes que estar e iniciar sesión para poder ver o listado do equipo.',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> 'Tes que estar e iniciar sesión para poder acceder á lista de membros.',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> 'Tes que estar e iniciar sesión para poder procurar outros usuarios.',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'Tes que estar e iniciar sesión para poder ver perfís doutros usuarios.',

	'MANAGE_GROUP'			=> 'Xestionar Grupo',
	'MORE_THAN'				=> 'Máis de',

	'NO_CONTACT_FORM'		=> 'Deshabilitouse o formulario de contacto co Administrador.',
	'NO_CONTACT_PAGE'		=> 'Deshabilitouse a páxina de contacto co Administrador.',
	'NO_EMAIL'				=> 'Non se che permite enviar correos a este usuario.',
	'NO_VIEW_USERS'			=> 'Non estás autorizado a ver a lista de membros ou os seus perfís.',

	'ORDER'					=> 'Ordenar',
	'OTHER'					=> 'Outros',

	'POST_IP'				=> 'Publicado dende a IP/dominio',

	'REAL_NAME'				=> 'Nome do destinatario',
	'RECIPIENT'				=> 'Destinatario',
	'REMOVE_FOE'			=> 'Eliminar inimigo',
	'REMOVE_FRIEND'			=> 'Eliminar amigo',

	'SELECT_MARKED'			=> 'Seleccionar marcado(s)',
	'SELECT_SORT_METHOD'	=> 'Seleccionar método de ordenación',
	'SENDER_EMAIL_ADDRESS'	=> 'O teu enderezo de correo electrónico',
	'SENDER_NAME'			=> 'O teu nome',
	'SEND_ICQ_MESSAGE'		=> 'Enviar mensaxe ICQ',
	'SEND_IM'				=> 'Mensaxería instantánea',
	'SEND_JABBER_MESSAGE'	=> 'Enviar mensaxe Jabber',
	'SEND_MESSAGE'			=> 'Mensaxe',
	'SEND_YIM_MESSAGE'		=> 'Enviar mensaxe YIM',
	'SORT_EMAIL'			=> 'Correo',
	'SORT_LAST_ACTIVE'		=> 'Último activo',
	'SORT_POST_COUNT'		=> 'Conta de mensaxes',

	'USERNAME_BEGINS_WITH'	=> 'O nome de usuario comeza por',
	'USER_ADMIN'			=> 'Xestionar usuario',
	'USER_BAN'				=> 'Prohibindo',
	'USER_FORUM'			=> 'Estatísticas de usuario',
	'USER_LAST_REMINDED'	=> array(
		0		=> 'Non se enviou recordatorio ningún até agora',
		1		=> '%1$d recordatorio enviado<br />» %2$s',
		2		=> '%1$d recordatorios enviados<br />» %2$s',
	),
	'USER_ONLINE'			=> 'Conectado',
	'USER_PRESENCE'			=> 'Presenza',
	'USERS_PER_PAGE'		=> 'Usuarios por páxina',

	'VIEWING_PROFILE'		=> 'Visualizando perfil - %s',
	'VIEW_FACEBOOK_PROFILE'	=> 'Visualizando perfil de Facebook',
	'VIEW_SKYPE_PROFILE'	=> 'Visualizando perfil de Skype',
	'VIEW_TWITTER_PROFILE'	=> 'Visualizando perfil de Twitter',
	'VIEW_YOUTUBE_CHANNEL'	=> 'Visualizando canal de YouTube',
	'VIEW_GOOGLEPLUS_PROFILE' => 'Visualizando perfil de Google+',
));
