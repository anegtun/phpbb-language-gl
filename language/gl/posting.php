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
	'ADD_ATTACHMENT'			=> 'Subir adxunto',
	'ADD_ATTACHMENT_EXPLAIN'	=> 'Se queres engadir un ou varios arquivos, insire os detalles debaixo.',
	'ADD_FILE'					=> 'Engadir o arquivo',
	'ADD_POLL'					=> 'Creación dunha enquisa',
	'ADD_POLL_EXPLAIN'			=> 'Se non queres engadir unha enquisa ao teu tema, deixa os campos en branco',
	'ALREADY_DELETED'			=> 'Esta mensaxe xa foi eliminada.',
	'ATTACH_COMMENT_NO_EMOJIS'	=> 'O comentario do adxunto contén caracteres prohibidos (Emoji).',
	'ATTACH_DISK_FULL'			=> 'Non queda espazo no disco para anexar este ficheiro.',
	'ATTACH_QUOTA_REACHED'		=> 'Acadouse o límite para anexos golbal.',
	'ATTACH_SIG'				=> 'Xuntar unha sinatura (as sinaturas pódense alterar no teu panel de control de usuario)',

	'BBCODE_A_HELP'				=> 'Adxunto en liña subido: [attachment=]nomedearquivo.ext[/attachment]',
	'BBCODE_B_HELP'				=> 'Texto resaltado: [b]texto[/b]',
	'BBCODE_C_HELP'				=> 'Amosar código: [code]código[/code]',
	'BBCODE_D_HELP'				=> 'Flash: [flash=width,height]http://url[/flash]',
	'BBCODE_F_HELP'				=> 'Tamaño de fonte: [size=85]texto pequeno[/size]',
	'BBCODE_IS_OFF'				=> '%sBBCode%s <em>INACTIVO</em>',
	'BBCODE_IS_ON'				=> '%sBBCode%s <em>ACTIVO</em>',
	'BBCODE_I_HELP'				=> 'Texto en cursiva: [i]texto[/i]',
	'BBCODE_L_HELP'				=> 'Lista: [*]texto[/list]',
	'BBCODE_LISTITEM_HELP'		=> 'Elemento de lista: [*]texto',
	'BBCODE_O_HELP'				=> 'Lista ordenada: p.e. [list=1][*]Elemento 1[/list] ou [list=a][*]Elemento "a"[/list]',
	'BBCODE_P_HELP'				=> 'Inserir imaxe: [img]http://url_da_imaxe[/img]',
	'BBCODE_Q_HELP'				=> 'Cita: [quote]texto[/quote]',
	'BBCODE_S_HELP'				=> 'Cor da fonte: [color=red]texto[/color] ou [color=#FF0000]texto[/color]',
	'BBCODE_U_HELP'				=> 'Subliñar texto: [u]texto[/u]',
	'BBCODE_W_HELP'				=> 'Inserir URL: [url]http://url[/url] ou [url=http://url]Texto URL[/url] (alt+w)',
	'BBCODE_Y_HELP'				=> 'Lista: Engadir elementos na lista',
	'BUMP_ERROR'				=> 'Non podes reactivar este tema tan cedo logo da última mensaxe.',

	'CANNOT_DELETE_REPLIED'		=> 'Sentímolo, pero só podes eliminar mensaxes que non teñan respostas.',
	'CANNOT_EDIT_POST_LOCKED'	=> 'Esta mensaxe foi bloqueada. A partires de agora xa non a poderás editar.',
	'CANNOT_EDIT_TIME'			=> 'Xa non podes editar ou eliminar esa mensaxe.',
	'CANNOT_POST_ANNOUNCE'		=> 'Non podes publicar anuncios.',
	'CANNOT_POST_STICKY'		=> 'Non podes publicar temas destacados.',
	'CHANGE_TOPIC_TO'			=> 'Mudar o tipo do tema a',
	'CHARS_POST_CONTAINS'		=> array(
		1	=> 'A túa mensaxe contén %1$d carácter.',
		2	=> 'A túa mensaxe contén %1$d caracteres.',
	),
	'CHARS_SIG_CONTAINS'		=> array(
		1	=> 'A túa firma contén %1$d carácter.',
		2	=> 'A túa firma contén %1$d caracteres.',
	),
	'CLOSE_TAGS'				=> 'Pechar etiquetas',
	'CURRENT_TOPIC'				=> 'Tema actual',

	'DELETE_FILE'				=> 'Eliminar arquivo',
	'DELETE_MESSAGE'			=> 'Eliminar mensaxe',
	'DELETE_MESSAGE_CONFIRM'	=> 'Estás seguro de querer eliminar esta mensaxe?',
	'DELETE_OWN_POSTS'			=> 'Só podes eliminar as túas propias mensaxes.',
	'DELETE_PERMANENTLY'		=> 'Eliminar permanentemente',
	'DELETE_POST_CONFIRM'		=> 'Estás seguro de querer eliminar esta mensaxe?',
	'DELETE_POST_PERMANENTLY_CONFIRM'	=> 'Estás seguro de querer eliminar <strong>permanentemente</strong> esta mensaxe?',
	'DELETE_POST_PERMANENTLY'	=> array(
		1	=> 'Eliminada permanentemente esta mensaxe, polo que xa non se poden recuperar',
		2	=> 'Eliminadas permanentemente %1$d mensaxes, polo que xa non se poden recuperar',
	),
	'DELETE_POSTS_CONFIRM'		=> 'Estás seguro de querer eliminar estas mensaxes?',
	'DELETE_POSTS_PERMANENTLY_CONFIRM'	=> 'Estás seguro de querer eliminar <strong>permanentemente</strong> estas mensaxes?',
	'DELETE_REASON'				=> 'Razón de borrado',
	'DELETE_REASON_EXPLAIN'		=> 'A razón especificada será visible para os moderadores.',
	'DELETE_POST_WARN'			=> 'Eliminar esta publicación',
	'DELETE_TOPIC_CONFIRM'		=> 'Estás seguro de querer eliminar este tema?',
	'DELETE_TOPIC_PERMANENTLY'	=> array(
		1	=> 'Eliminado permanentemente este tema, polo que xa non pode ser recuperado',
		2	=> 'Eliminados permanentemente %1$d temas, polo que xa non poden ser recuperados',
	),
	'DELETE_TOPIC_PERMANENTLY_CONFIRM'	=> 'Estás seguro de querer eliminar <strong>permanentemente</strong> este tema?',
	'DELETE_TOPICS_CONFIRM'		=> 'Estás seguro de querer eliminar estes temas?',
	'DELETE_TOPICS_PERMANENTLY_CONFIRM'	=> 'Estás seguro de querer eliminar <strong>permanentemente</strong> estes temas?',
	'DISABLE_BBCODE'			=> 'Desactivar BBCode',
	'DISABLE_MAGIC_URL'			=> 'Non procesar URLs de xeito automático',
	'DISABLE_SMILIES'			=> 'Desactivar emoticonas',
	'DISALLOWED_CONTENT'		=> 'A subida foi rexeitada por mor da identificación do arquivo subido coma un posible vector de ataque.',
	'DISALLOWED_EXTENSION'		=> 'Non se permite a extensión %s',
	'DRAFT_LOADED'				=> 'Borrador cargado na área de publicación. Podes rematar coa publicación agora se queres.<br />O teu borrador eliminarase despois de que publiques esta mensaxe.',
	'DRAFT_LOADED_PM'			=> 'Borrador cargado na área de mensaxería. Podes rematar a túa mensaxe privada agora se queres.<br />O teu borrador eliminarase logo de enviar esta mensaxe privada.',
	'DRAFT_SAVED'				=> 'O borrador gardouse correctamente.',
	'DRAFT_TITLE'				=> 'Título do borrador',

	'EDIT_REASON'				=> 'Motivo da edición desta mensaxe',
	'EMPTY_FILEUPLOAD'			=> 'O arquivo subido está baleiro',
	'EMPTY_MESSAGE'				=> 'Debes inserir unha mensaxe para a poder publicar.',
	'EMPTY_REMOTE_DATA'			=> 'O arquivo non se puido subir, tenta cargalo manualmente.',

	'FLASH_IS_OFF'				=> '[flash] está <em>DESACTIVADO</em>',
	'FLASH_IS_ON'				=> '[flash] está <em>ACTIVADO</em>',
	'FLOOD_ERROR'				=> 'Non podes publicar outra mensaxe tan cedo logo da última publicada.',
	'FONT_COLOR'				=> 'Cor da fonte',
	'FONT_COLOR_HIDE'			=> 'Agochar cor da fonte',
	'FONT_HUGE'					=> 'Enorme',
	'FONT_LARGE'				=> 'Grande',
	'FONT_NORMAL'				=> 'Normal',
	'FONT_SIZE'					=> 'Tamaño da fonte',
	'FONT_SMALL'				=> 'Pequeno',
	'FONT_TINY'					=> 'Pequerrechiño',

	'GENERAL_UPLOAD_ERROR'		=> 'Non se puido subir o anexo a %s',

	'IMAGES_ARE_OFF'			=> '[img] está <em>DESACTIVADO</em>',
	'IMAGES_ARE_ON'				=> '[img] está <em>ACTIVADO</em>',
	'INVALID_FILENAME'			=> 'O nome de arquivo %s non é válido',

	'LOAD'						=> 'Cargar',
	'LOAD_DRAFT'				=> 'Cargar borrador',
	'LOAD_DRAFT_EXPLAIN'		=> 'Aquí podes seleccionar o borrador no que queres continuar a escribir. A túa mensaxe actual cancelarase e o seu contido será eliminado. Podes ver, editar e eliminar borradores co teu Panel de Control de Usuario',
	'LOGIN_EXPLAIN_BUMP'		=> 'Debes iniciar sesión para poder reactivar temas neste foro.',
	'LOGIN_EXPLAIN_DELETE'		=> 'Debes iniciar sesión para poder eliminar temas neste foro.',
	'LOGIN_EXPLAIN_SOFT_DELETE'	=> 'Debes iniciar sesión para poder eliminar temas neste foro.',
	'LOGIN_EXPLAIN_POST'		=> 'Debes iniciar sesión para publicar mensaxes neste foro',
	'LOGIN_EXPLAIN_QUOTE'		=> 'Debes iniciar sesión para poder citar mensaxes neste foro.',
	'LOGIN_EXPLAIN_REPLY'		=> 'Debes iniciar sesión para responder aos temas deste foro',

	'MAX_FONT_SIZE_EXCEEDED'	=> 'Só podes usar fontes ata un tamaño máximo de %1$d.',
	'MAX_FLASH_HEIGHT_EXCEEDED'	=> array(
		1	=> 'Os teus arquivos só poden ser de %d píxel de alto como máximo.',
		2	=> 'Os teus arquivos só poden ser de %d píxeles de alto como máximo.',
	),
	'MAX_FLASH_WIDTH_EXCEEDED'	=> array(
		1	=> 'Os teus arquivos só poden ser de %d píxel de largo como máximo.',
		2	=> 'Os teus arquivos só poden ser de %d píxeles de largo como máximo.',
	),
	'MAX_IMG_HEIGHT_EXCEEDED'	=> array(
		1	=> 'As túas imaxes só poden ser de %1$d píxel de alto como máximo.',
		2	=> 'As túas imaxes só poden ser de %1$d píxeles de alto como máximo.',
	),
	'MAX_IMG_WIDTH_EXCEEDED'	=> array(
		1	=> 'As túas imaxes só poden ser de %d píxel de largo como máximo.',
		2	=> 'As túas imaxes só poden ser de %d píxeles de largo como máximo.',
	),

	'MESSAGE_BODY_EXPLAIN'		=> array(
		0	=> '', // zero means no limit, so we don't view a message here.
		1	=> 'Insire aquí a túa mensaxe, que non poderá conter máis de <strong>%d</strong> carácter.',
		2	=> 'Insire aquí a túa mensaxe, que non poderá conter máis de <strong>%d</strong> caracteres.',
	),
	'MESSAGE_DELETED'			=> 'A túa mensaxe foi eliminada correctamente',
	'MORE_SMILIES'				=> 'Ver máis emoticonos',

	'NOTIFY_REPLY'				=> 'Enviarme un correo cando se publique unha resposta',
	'NOT_UPLOADED'				=> 'Non se puido subir o arquivo.',
	'NO_DELETE_POLL_OPTIONS'	=> 'Non podes eliminar opcións de enquisas existentes.',
	'NO_PM_ICON'				=> 'Non hai icona ningunha de MP',
	'NO_POLL_TITLE'				=> 'Tes que inserir un título para a enquisa',
	'NO_POST'					=> 'A mensaxe solicitada non existe.',
	'NO_POST_MODE'				=> 'Non se especificou modo de publicación ningún',
	'NO_TEMP_DIR'				=> 'Non se atopou o directorio temporal ou non se pode escribir nel.',

	'PARTIAL_UPLOAD'			=> 'O arquivo foi subido só parcialmente',
	'PHP_UPLOAD_STOPPED'		=> 'Unha extensión PHP parou de subir o ficheiro.',
	'PHP_SIZE_NA'				=> 'O tamaño do arquivo adxunto é grande de máis.<br />Non se pode determinar o tamaño máximo definido polo PHP no php.ini.',
	'PHP_SIZE_OVERRUN'			=> 'O tamaño do arquivo adxunto é grande de máis. O máximo tamaño permitido é de %1$d %2$s.<br />Ten en conta que isto vén estabelecido no php.ini e non pode ser anulado con outro valor.',
	'PLACE_INLINE'				=> 'Inserir embebido',
	'POLL_DELETE'				=> 'Eliminar enquisa',
	'POLL_FOR'					=> 'Iniciar unha enquisa durante',
	'POLL_FOR_EXPLAIN'			=> 'Insire 0 ou déixao en branco para que a enquisa non remate',
	'POLL_MAX_OPTIONS'			=> 'Opcións por usuario',
	'POLL_MAX_OPTIONS_EXPLAIN'	=> 'Este é o número de opcións que cada usuario pode seleccionar cando vote.',
	'POLL_OPTIONS'				=> 'Opcións da enquisa',
	'POLL_OPTIONS_EXPLAIN'		=> array(
		1	=> 'Pon cada opción en liñas diferentes. Podes indicar ata <strong>%d</strong> opción.',
		2	=> 'Pon cada opción en liñas diferentes. Podes indicar ata <strong>%d</strong> opcións.',
	),
	'POLL_OPTIONS_EDIT_EXPLAIN'		=> array(
		1	=> 'Pon cada opción en liñas diferentes. Podes indicar ata <strong>%d</strong> opción. Se eliminas ou engades opcións, restaurarase o número de votos anteriores a cero.',
		2	=> 'Pon cada opción en liñas diferentes. Podes indicar ata <strong>%d</strong> opcións. Se eliminas ou engades opcións, restaurarase o número de votos anteriores a cero.',
	),
	'POLL_QUESTION'				=> 'Pregunta da enquisa',
	'POLL_TITLE_TOO_LONG'		=> 'O título da enquisa debe conter menos de 100 caracteres.',
	'POLL_TITLE_COMP_TOO_LONG'	=> 'O tamaño procesado do título da túa enquisa é longo de máis, revisa se podes eliminar BBCodes ou emoticonas.',
	'POLL_VOTE_CHANGE'			=> 'Permitir votar máis dunha vez',
	'POLL_VOTE_CHANGE_EXPLAIN'	=> 'Se o activas os usuarios poden mudar o seu voto.',
	'POSTED_ATTACHMENTS'		=> 'Arquivos anexos enviados',
	'POST_APPROVAL_NOTIFY'		=> 'Cando a túa mensaxe sexa aprobada recibirás unha notificación.',
	'POST_CONFIRMATION'			=> 'Confirmación do envío',
	'POST_CONFIRM_EXPLAIN'		=> 'Para evitar a publicación automatizada de mensaxes,pídeseche que insiras un código de confirmación. Este código amósase na imaxe que deberías ver embaixo. Se tes algún tipo de deficiencia visual ou por calquera motivo non podes ler o código, ponte en contacto co %sAdministrador%S.',
	'POST_DELETED'				=> 'A túa mensaxe foi eliminada correctamente',
	'POST_EDITED'				=> 'A túa mensaxe foi editada correctamente',
	'POST_EDITED_MOD'			=> 'A túa mensaxe foi editada pero require aprobación',
	'POST_GLOBAL'				=> 'Global',
	'POST_ICON'					=> 'Icona da mensaxe',
	'POST_NORMAL'				=> 'Normal',
	'POST_REVIEW'				=> 'Revisión de mensaxe',
	'POST_REVIEW_EDIT'			=> 'Revisión de mensaxe',
	'POST_REVIEW_EDIT_EXPLAIN'	=> 'Esta mensaxe publicada foi alterada por outro usuario mentres estabas a editala. Pode que queiras revisar a versión actual e axustar o que editaches.',
	'POST_REVIEW_EXPLAIN'		=> 'Hai como mínimo unha mensaxe nova neste tema. En vista disto pode que queiras revisar a túa mensaxe.',
	'POST_STORED'				=> 'A túa mensaxe foi enviada correctamente',
	'POST_STORED_MOD'			=> 'A túa mensaxe foi gardada pero require aprobación',
	'POST_TOPIC_AS'				=> 'Publicar tema como',
	'PROGRESS_BAR'				=> 'Barra de progreso',

	'QUOTE_DEPTH_EXCEEDED'		=> array(
		1	=> 'Só podes incluír %d cita dentro doutras.',
		2	=> 'Só podes incluír %d citas dentro doutras.',
	),
	'QUOTE_NO_NESTING'			=> 'Non podes incluír citas dentro doutras.',

	'REMOTE_UPLOAD_TIMEOUT'		=> 'O ficheiro especificado non se puido subir porque a petición caducou.',
	'SAVE'						=> 'Gardar',
	'SAVE_DATE'					=> 'Gardar en ',
	'SAVE_DRAFT'				=> 'Gardar borrador',
	'SAVE_DRAFT_CONFIRM'		=> 'Ten en conta que os borradores gardados só inclúen o asunto e a mensaxe. Calquera outro elemento será eliminado. Queres gardar agora o teu borrador agora?',
	'SMILIES'					=> 'Emoticonas',
	'SMILIES_ARE_OFF'			=> 'As emoticonas están <em>DESACTIVADAS</em>',
	'SMILIES_ARE_ON'			=> 'As emoticonas están <em>ACTIVADAS</em>',
	'STICKY_ANNOUNCE_TIME_LIMIT'=> 'Tempo límite para converter en Destacado/Anuncio',
	'STICK_TOPIC_FOR'			=> 'Destacar tema durante',
	'STICK_TOPIC_FOR_EXPLAIN'	=> 'Insire 0 ou déixao en branco para destacar/anunciar de xeito indefinido. Ten en conta que este número é relativo á data da mensaxe publicada.',
	'STYLES_TIP'				=> 'Consello: Os estilos poden ser aplicados rapidamente ao texto seleccionado.',

	'TOO_FEW_CHARS'				=> 'A túa mensaxe ten poucos caracteres.',
	'TOO_FEW_CHARS_LIMIT'		=> array(
		1	=> 'Deber inserir polo menos %1$d carácter.',
		2	=> 'Deber inserir polo menos %1$d caracteres.',
	),
	'TOO_FEW_POLL_OPTIONS'		=> 'Debes inserir, como mínimo, dúas opcións a votar',
	'TOO_MANY_ATTACHMENTS'		=> 'Non podes engadir outro arquivo anexo, %d é o máximo.',
	'TOO_MANY_CHARS'			=> 'A túa mensaxe ten demasiados caracteres.',
	'TOO_MANY_CHARS_LIMIT'		=> array(
		2	=> 'Debes inserir como máximo %1$d caracteres.',
	),
	'TOO_MANY_POLL_OPTIONS'		=> 'Tentaches inserir demasiadas opcións na enquisa',
	'TOO_MANY_SMILIES'			=> 'A túa mensaxe contén demasiadas emoticonas. Está permitido un máximo de %d emoticonas.',
	'TOO_MANY_URLS'				=> 'A túa mensaxe contén demasiadas URLs. Está permitido un máximo de %d URLs.',
	'TOO_MANY_USER_OPTIONS'		=> 'Non podes especificar máis opcións por usuario das que existen na enquisa',
	'TOPIC_BUMPED'				=> 'O tema foi reactivado correctamente',

	'UNAUTHORISED_BBCODE'		=> 'Non podes usar determinados BBCodes: ',
	'UNSUPPORTED_CHARACTERS_MESSAGE'	=> 'A túa mensaxe contén os seguintes caracteres inválidos:<br />%s',
	'UNSUPPORTED_CHARACTERS_SUBJECT'	=> 'O teu asunto contén os seguintes caracteres inválidos:<br />%s',
	'UPDATE_COMMENT'			=> 'Actualizar comentario',
	'URL_INVALID'				=> 'A URL que especificaches non é válida.',
	'URL_NOT_FOUND'				=> 'O arquivo que especificaches non foi atopado.',
	'URL_IS_OFF'				=> '[url] está <em>DESACTIVADO</em>',
	'URL_IS_ON'					=> '[url] está <em>ACTIVADO</em>',
	'USER_CANNOT_BUMP'			=> 'Non podes reactivar temas neste foro',
	'USER_CANNOT_DELETE'		=> 'Non podes eliminar mensaxes neste foro',
	'USER_CANNOT_EDIT'			=> 'Non podes editar mensaxes neste foro',
	'USER_CANNOT_REPLY'			=> 'Non podes contestar neste foro',
	'USER_CANNOT_FORUM_POST'	=> 'Non podes publicar mensaxes neste foro debido a que o tipo de foro non as acepta.',

	'VIEW_MESSAGE'				=> '%sVer a mensaxe que enviaches%s',
	'VIEW_PRIVATE_MESSAGE'		=> '%sVer as mensaxes privadas que enviaches%s',

	'WRONG_FILESIZE'			=> 'O arquivo é grande de máis. O tamaño máximo permitido é de %1$d %2$s.',
	'WRONG_SIZE'				=> 'A imaxe debe ser cando menos de %1$s x %2$s píxeles e como máximo de %3$s x %4$s píxeles. A imaxe enviada é de %5$s x %6$s píxeles.',
));
