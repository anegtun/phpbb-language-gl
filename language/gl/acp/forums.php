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

// Forum Admin
$lang = array_merge($lang, array(
	'AUTO_PRUNE_DAYS'			=> 'Idade da mensaxe para o auto-purgado',
	'AUTO_PRUNE_DAYS_EXPLAIN'	=> 'Número de días dende a última mensaxe publicada a partir dos cales o tema é eliminado.',
	'AUTO_PRUNE_FREQ'			=> 'Frecuencia de auto-purgado',
	'AUTO_PRUNE_FREQ_EXPLAIN'	=> 'Tempo en días entre eventos de purgado.',
	'AUTO_PRUNE_VIEWED'			=> 'Antigüidade da última visualización para o auto-purgado',
	'AUTO_PRUNE_VIEWED_EXPLAIN'	=> 'Número de días dende que o tema foi visto a partir dos cales é eliminado.',
	'AUTO_PRUNE_SHADOW_FREQ'	=> 'Frecuencia de auto-purgado de temas ocultos',
	'AUTO_PRUNE_SHADOW_DAYS'	=> 'Antigüidade de auto-purgado de temas ocultos',
	'AUTO_PRUNE_SHADOW_DAYS_EXPLAIN'	=> 'Número de días para que o tema oculto se elimine.',
	'AUTO_PRUNE_SHADOW_FREQ_EXPLAIN'	=> 'Tempo en días entre os eventos de purgado.',

	'CONTINUE'						=> 'Seguir',
	'COPY_PERMISSIONS'				=> 'Copiar permisos dende',
	'COPY_PERMISSIONS_EXPLAIN'		=> 'Para facilitarche a configuración de permisos do teu novo foro, podes copiar os permisos dalgún dos foros existentes.',
	'COPY_PERMISSIONS_ADD_EXPLAIN'	=> 'Unha vez creado, o foro terá os mesmos permisos que o que acabas de escoller. Se non escolles ningún foro, o novo foro non será visible até que se configuren os permisos.',
	'COPY_PERMISSIONS_EDIT_EXPLAIN'	=> 'Se ti escolles copiar permisos, o foro terá os mesmos permisos que selecciones aquí. Isto sobrescribirá calquera configuración de permisos previa para ese foro. Se non escolliches ningún foro, manteranse os permisos actuais.',
	'COPY_TO_ACL'					=> 'De xeito alternativo, tamén podes %sconfigurar novos permisos%s para este foro.',
	'CREATE_FORUM'					=> 'Crear un novo foro',

	'DECIDE_MOVE_DELETE_CONTENT'		=> 'Eliminar contido ou mover ao foro',
	'DECIDE_MOVE_DELETE_SUBFORUMS'		=> 'Borrar subforos ou mover a foro',
	'DEFAULT_STYLE'						=> 'Estilo por defecto',
	'DELETE_ALL_POSTS'					=> 'Borrar mensaxes',
	'DELETE_SUBFORUMS'					=> 'Eliminar subforos e mensaxes publicadas',
	'DISPLAY_ACTIVE_TOPICS'				=> 'Habilitar temas activos',
	'DISPLAY_ACTIVE_TOPICS_EXPLAIN'		=> 'Se escolles "Si" os temas activos nos subforos seleccionados serán despregados baixo esta categoría.',

	'EDIT_FORUM'					=> 'Editar foro',
	'ENABLE_INDEXING'				=> 'Habilitar indexado de procura',
	'ENABLE_INDEXING_EXPLAIN'		=> 'Se escolles "SI" as mensaxes enviadas a este foro serán indexadas para a pescuda.',
	'ENABLE_POST_REVIEW'			=> 'Permitir revisar mensaxes',
	'ENABLE_POST_REVIEW_EXPLAIN'	=> 'Se escolles "SI" os usuarios poderán revisar as súas mensaxes se mentras as estaban a escribir alguén publicou outra mensaxe. Debería desactivarse para foros de chat.',
	'ENABLE_QUICK_REPLY'			=> 'Activar resposta rápida',
	'ENABLE_QUICK_REPLY_EXPLAIN'	=> 'Activa a resposta rápida neste foro. Se a opción global para a resposta rápida estiver desactivada non se terá en conta este axuste. A resposta rápida só se amosará aos usuarios que teñan permisos para publicar neste foro.',
	'ENABLE_RECENT'					=> 'Amosar temas activos',
	'ENABLE_RECENT_EXPLAIN'			=> 'Se escolles "SI" os temas deste foro serán amosados na listaxe de temas activos.',
	'ENABLE_TOPIC_ICONS'			=> 'Permitir iconas dos temas',

	'FORUM_ADMIN'						=> 'Administración do Foro',
	'FORUM_ADMIN_EXPLAIN'				=> 'En pHpBB3 todo está baseado en foros. Unha categoría é un tipo especial de foro. Cada foro pode ter un número ilimitado de subforos e ti podes determinar cales admiten mensaxes ou non (p.e. se actúa como unha categoría antiga). Aquí podes engadir, editar, eliminar, bloquear e desbloquear foros individuais así como axustar certos controis adicionais. Se as túas mensaxes e temas non están sincronizados tamén podes sincronizar un foro de novo. <strong>Precisas copiar ou estabelecer os permisos axeitados para os foros recén creados para que se poidan amosar.</strong>',
	'FORUM_AUTO_PRUNE'					=> 'Permitir auto-purgado',
	'FORUM_AUTO_PRUNE_EXPLAIN'			=> 'Purga temas do foro, axusta os parámetros de frecuencia/idade embaixo.',
	'FORUM_CREATED'						=> 'O foro foi creado correctamente.',
	'FORUM_DATA_NEGATIVE'				=> 'Os parámetros de purgado non poden ser negativos',
	'FORUM_DESC_TOO_LONG'				=> 'A descrición do foro é longa de máis, debe ser inferior a 4000 caracteres.',
	'FORUM_DELETE'						=> 'Borrar foro',
	'FORUM_DELETE_EXPLAIN'				=> 'O formulario de embaixo permitirache eliminar un foro. Se o foro contén mensaxes podes decidir onde queres poñer os temas (ou foros) que contiña.',
	'FORUM_DELETED'						=> 'O foro foi eliminado correctamente',
	'FORUM_DESC'						=> 'Descrición',
	'FORUM_DESC_EXPLAIN'				=> 'Calquera etiqueta HTML inserida amosarase tal cual. Se o tipo de foro escollido é unha categoría, non se usará a descrición.',
	'FORUM_EDIT_EXPLAIN'				=> 'O formulario de abaixo permitirache personalizar este foro. Ten en conta que a moderación e os controis de contabilización dos posts son configurables mediante os permisos do foro por cada usuario ou grupo.',
	'FORUM_IMAGE'						=> 'Imaxe do foro',
	'FORUM_IMAGE_EXPLAIN'				=> 'A ubicación, relativa ao directorio raíz de pHpBB, dunha imaxe adicional para asociar a este foro.',
	'FORUM_IMAGE_NO_EXIST'				=> 'A imaxe de foro especificada non existe',
	'FORUM_LINK_EXPLAIN'				=> 'URL completa (incluído o protocolo, por exemplo <samp>http://</samp>) á que se dirixirá ao usuario cando prema nela., p.e. <samp>http://www.phpbb.com/</samp>.',
	'FORUM_LINK_TRACK'					=> 'A ligazón de rastreo redirecciona',
	'FORUM_LINK_TRACK_EXPLAIN'			=> 'Rexistra o número de veces que a ligazón a un foro foi premida.',
	'FORUM_NAME'						=> 'Nome do foro',
	'FORUM_NAME_EMPTY'					=> 'Debes inserir un nome para este foro.',
	'FORUM_NAME_EMOJI'					=> 'O nome do foro que inseriches non é válido.<br>Contén os seguintes caracteres non válidos:<br>%s',
	'FORUM_PARENT'						=> 'Foro pai',
	'FORUM_PASSWORD'					=> 'Contrasinal do foro',
	'FORUM_PASSWORD_CONFIRM'			=> 'Confirmar contrasinal do foro',
	'FORUM_PASSWORD_CONFIRM_EXPLAIN'	=> 'Só necesita ser configurado se o contrasinal do foro foi inserido.',
	'FORUM_PASSWORD_EXPLAIN'			=> 'Define un contrasinal para este foro, aínda que recomendámosche que uses preferentemente o sistema de permisos.',
	'FORUM_PASSWORD_UNSET'				=> 'Eliminar contrasinal do foro',
	'FORUM_PASSWORD_UNSET_EXPLAIN'		=> 'Marca isto se queres eliminar o contrasinal do foro.',
	'FORUM_PASSWORD_OLD'				=> 'O contrasinal do foro emprega un método antigo de escurecemento e debe ser mudado.',
	'FORUM_PASSWORD_MISMATCH'			=> 'Os contrasinais que inseriches non coinciden.',
	'FORUM_PRUNE_SETTINGS'				=> 'Axustes do purgado de foro',
	'FORUM_PRUNE_SHADOW'				=> 'Activar auto-purgado de temas ocultos',
	'FORUM_PRUNE_SHADOW_EXPLAIN'			=> 'Elimina do foro os temas ocultos, establecendo embaixo os parámetros de frecuencia e antigüidade.',
	'FORUM_RESYNCED'					=> 'Foro "%s" sincronizado correctamente',
	'FORUM_RULES_EXPLAIN'				=> 'As regras do foro amosaranse en todas as páxinas de dito foro.',
	'FORUM_RULES_LINK'					=> 'Ligazón ás regras do foro',
	'FORUM_RULES_LINK_EXPLAIN'			=> 'Aquí podes inserir o URL da páxina/mensaxe que contén as regras do teu foro. Esta opción anula o texto coas regras do foro especificado.',
	'FORUM_RULES_PREVIEW'				=> 'Previsualización das regras do foro',
	'FORUM_RULES_TOO_LONG'				=> 'As normas do foro deben ser dunha lonxitude inferior a 4000 caracteres.',
	'FORUM_SETTINGS'					=> 'Configuración do foro',
	'FORUM_STATUS'						=> 'Estado do foro',
	'FORUM_STYLE'						=> 'Estilo do foro',
	'FORUM_TOPICS_PAGE'					=> 'Temas por páxina',
	'FORUM_TOPICS_PAGE_EXPLAIN'			=> 'Se é diferente a cero este valor anulará o valor xeral predeterminado.',
	'FORUM_TYPE'						=> 'Tipo de foro',
	'FORUM_UPDATED'						=> 'Información do foro actualizada correctamente.',

	'FORUM_WITH_SUBFORUMS_NOT_TO_LINK'		=> 'Queres mudar un foro con subforos no que se pode publicar a unha ligazón. Por favor, move todos os subforos fóra do mesmo antes de proceder, xa que logo de mudar a unha ligazón non poderás ver máis os subforos conectados actualmente co mesmo.',

	'GENERAL_FORUM_SETTINGS'	=> 'Configuración xeral do foro',

	'LINK'						=> 'Ligazón',
	'LIMIT_SUBFORUMS'			=> 'Limita a lenda directa a subforos-fillo',
	'LIMIT_SUBFORUMS_EXPLAIN'	=> 'Limita a visualización dos subforos só aos descendentes directos (fillos) do foro actual. Deshabiltiando esta opción amosaranse todos os subforos.',
	'LIST_INDEX'				=> 'Listar o foro nos listados dos subforos',
	'LIST_INDEX_EXPLAIN'		=> 'Visualiza unha ligazón a este foro segundo a listaxe de subforos de foros matriz, se existe algunha.',
	'LIST_SUBFORUMS'			=> 'Listar subforos na lenda',
	'LIST_SUBFORUMS_EXPLAIN'	=> 'Amosa os subforos deste foro no índice e calquera outro lugar como unha ligazón dentro da lenda se a súa opción “Listar subforo na lenda no foro-pai” está activada.',
	'LOCKED'					=> 'Bloqueado',

	'MOVE_POSTS_NO_POSTABLE_FORUM'	=> 'Non se poden publicar mensaxes no foro que seleccionaches para mover as mensaxes. Selecciona un foro que si permita publicar mensaxes.',
	'MOVE_POSTS_TO'					=> 'Mover mensaxes a',
	'MOVE_SUBFORUMS_TO'				=> 'Mover subforos a',

	'NO_DESTINATION_FORUM'			=> 'Non especificaches un foro ao que mover o contido',
	'NO_FORUM_ACTION'				=> 'Non hai acción definida para realizar co contido do foro.',
	'NO_PARENT'						=> 'Sen pai',
	'NO_PERMISSIONS'				=> 'Non copiar permisos',
	'NO_PERMISSION_FORUM_ADD'		=> 'Non tes os permisos axeitados para engadir foros',
	'NO_PERMISSION_FORUM_DELETE'	=> 'Non tes os permisos axeitados para eliminar foros',

	'PARENT_IS_LINK_FORUM'		=> 'O pai que especificaches é unha ligazón de foro. Os foros ligazón non poden conter outros foros. Selecciona unha categoría ou foro como foro pai.',
	'PARENT_NOT_EXIST'			=> 'Non existe o pai',
	'PRUNE_ANNOUNCEMENTS'		=> 'Purgar anuncios',
	'PRUNE_STICKY'				=> 'Purgar destacados',
	'PRUNE_OLD_POLLS'			=> 'Purgar enquisas vellas',
	'PRUNE_OLD_POLLS_EXPLAIN'	=> 'Eliminar temas con enquisas nas que non se tivera votado no tempo indicado.',
	
	'REDIRECT_ACL'	=> 'Agora podes %sconfigurar os permisos%s para este foro.',

	'SYNC_IN_PROGRESS'			=> 'Foro sincronizándose',
	'SYNC_IN_PROGRESS_EXPLAIN'	=> 'Agora mesmo sincronizando rango de temas %1$d/%2$d.',

	'TYPE_CAT'			=> 'Categoría',
	'TYPE_FORUM'		=> 'Foro',
	'TYPE_LINK'			=> 'Ligazón',

	'UNLOCKED'			=> 'Desbloqueado',
));