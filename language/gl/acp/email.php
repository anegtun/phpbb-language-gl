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

// Email settings
$lang = array_merge($lang, array(
	'ACP_MASS_EMAIL_EXPLAIN'		=> 'Aquí poderás enviar un correo electrónico a todos os teus usuarios ou aos dun grupo determinado <strong>que teñan activada a opción para recibir correos electrónicos masivos</strong>. Para isto, enviarase un correo ao enderezo de administración configurado, engadindo os destinatarios en copia oculta (BCC). A configuración predeterminada permite 20 destinatarios por correo, se hai máis destinatarios enviaranse máis correos. Se estás a enviar correos a un grupo numeroso de xente, ten paciencia logo de envialo e non deteñas a páxina no medio do proceso. É normal que os envíos masivos de correos demoren moito tempo, e de todos os xeitos o script indicarache cando remate de facelo.',
	'ALL_USERS'						=> 'Todos os usuarios',

	'COMPOSE'				=> 'Compoñer',

	'EMAIL_SEND_ERROR'		=> 'Houbo algún erro ao tentar enviar o correo. Comproba o %sRexistro de erros (log)%s para ver as mensaxes de erros polo miúdo.',
	'EMAIL_SENT'			=> 'A túa mensaxe foi enviada.',
	'EMAIL_SENT_QUEUE'		=> 'A túa mensaxe foi posta na cola de envío.',

	'LOG_SESSION'			=> 'Rexistrar a sesión de correo no rexistro (log) crítico',

	'SEND_IMMEDIATELY'		=> 'Enviar xa',
	'SEND_TO_GROUP'			=> 'Enviar ao grupo',
	'SEND_TO_USERS'			=> 'Enviar a usuarios',
	'SEND_TO_USERS_EXPLAIN'	=> 'Inserindo nomes aquí pasarase por alto calquera grupo seleccionado enriba. Insire cada nome de usuario nunha nova liña.',
	
	'MAIL_BANNED'			=> 'Enviar correo a usuarios bloqueados',
	'MAIL_BANNED_EXPLAIN'	=> 'Cando envías un correo en masa a un grupo, podes escoller aquí se o recibirán tamén os usuarios bloqueados.',
	'MAIL_HIGH_PRIORITY'	=> 'Alta',
	'MAIL_LOW_PRIORITY'		=> 'Baixa',
	'MAIL_NORMAL_PRIORITY'	=> 'Normal',
	'MAIL_PRIORITY'			=> 'Prioridade do correo',
	'MASS_MESSAGE'			=> 'A túa mensaxe',
	'MASS_MESSAGE_EXPLAIN'	=> 'Ten en conta que só podes usar texto plano. Calquera etiqueta ou marcador será suprimido antes de enviar a mensaxe.',

	'NO_EMAIL_MESSAGE'		=> 'Debes escribir unha mensaxe.',
	'NO_EMAIL_SUBJECT'		=> 'Debes especificar un asunto para a túa mensaxe.',
));