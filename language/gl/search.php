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
	'ALL_AVAILABLE'			=> 'Todos os dispoñibles',
	'ALL_RESULTS'			=> 'Todos os resultados',

	'DISPLAY_RESULTS'		=> 'Amosar resultados como',

	'FOUND_SEARCH_MATCHES'		=> array(
		1	=> 'A procura atopou %d coincidencia',
		2	=> 'A procura atopou %d coincidencias',
	),
	'FOUND_MORE_SEARCH_MATCHES'		=> array(
		1	=> 'A procura atopou máis de %d coincidencia',
		2	=> 'A procura atopou máis de %d coincidencias',
	),

	'GLOBAL'				=> 'Anuncio global',

	'IGNORED_TERMS'			=> 'ignorado',
	'IGNORED_TERMS_EXPLAIN'	=> 'Foron ignoradas as seguintes palabras da túa procura porque se consideran palabras comúns: <b>%s</b>',

	'JUMP_TO_POST'			=> 'Ir á mensaxe',

	'LOGIN_EXPLAIN_EGOSEARCH'	=> 'Debes iniciar sesión para poder ver as túas propias mensaxes.',
	'LOGIN_EXPLAIN_UNREADSEARCH'=> 'Debes iniciar sesión para poder ver as túas mensaxes non lidas.',
	'LOGIN_EXPLAIN_NEWPOSTS'	=> 'Debes iniciar sesión para poder ver as novas mensaxes publicadas desde a túa última visita.',

	'MAX_NUM_SEARCH_KEYWORDS_REFINE'	=> array(
		1	=> 'Inseriches palabras de máis polas que procurar. Non podes escribir máis de %1$d palabra.',
		2	=> 'Inseriches palabras de máis polas que procurar. Non podes escribir máis de %1$d palabras.',
	),

	'NO_KEYWORDS'			=> 'Tes que especificar cando menos unha palabra a procurar. Cada palabra debe ter polo menos %s caracteres e non pode ter máis de %s, excluíndo comodíns. ',
	'NO_RECENT_SEARCHES'	=> 'Non se levaron a cabo procuras recentemente.',
	'NO_SEARCH'				=> 'Sentímolo, mais non tes permiso para empregar o sistema de procura.',
	'NO_SEARCH_RESULTS'		=> 'Non se atoparon resultados axeitados.',
	'NO_SEARCH_LOAD'		=> 'Sentímolo, mais non podes utilizar a procura agora. O servidor está moi cargado. Téntao de novo dentro dun chisco.',
	'NO_SEARCH_TIME'		=> array(
		1	=> 'Sentímolo, mais non podes utilizar a procura agora. Téntao de novo en %d segundo.',
		2	=> 'Sentímolo, mais non podes utilizar a procura agora. Téntao de novo en %d segundos.',
	),
	'NO_SEARCH_UNREADS'		=> 'Sentímolo, mais a procura por mensaxes non lidas foi desactivada.',
	'WORD_IN_NO_POST'		=> 'Non se atoparon mensaxes xa que a palabra <strong>%s</strong> non apareceu en ningunha delas.',
	'WORDS_IN_NO_POST'		=> 'Non se atoparon mensaxes xa que as palabras <strong>%s</strong> non apareceron en ningunha delas.',

	'POST_CHARACTERS'		=> 'caracteres das mensaxes',
	'PHRASE_SEARCH_DISABLED'	=> 'A procura por frase exacta non está soportada.',

	'RECENT_SEARCHES'		=> 'Procuras recentes',
	'RESULT_DAYS'			=> 'Limitar os resultados aos anteriores',
	'RESULT_SORT'			=> 'Ordenar os resultados por',
	'RETURN_FIRST'			=> 'Volver ao primeiro',
	'GO_TO_SEARCH_ADV'	=> 'Ir á procura avanzada',

	'SEARCHED_FOR'				=> 'Procurar termo usado',
	'SEARCHED_TOPIC'			=> 'Tema procurado',
	'SEARCHED_QUERY'			=> 'Texto a procurar',
	'SEARCH_ALL_TERMS'			=> 'Procurar todos os termos ou usar a consulta tal e como se inseriu',
	'SEARCH_ANY_TERMS'			=> 'Procurar por calquera termo',
	'SEARCH_AUTHOR'				=> 'Procurar por autor',
	'SEARCH_AUTHOR_EXPLAIN'		=> 'Utilizar * como comodín.',
	'SEARCH_FIRST_POST'			=> 'Só primeira mensaxe dos temas',
	'SEARCH_FORUMS'				=> 'Procurar nos foros',
	'SEARCH_FORUMS_EXPLAIN'		=> 'Selecciona o foro ou foros nos que queres procurar. Por defecto procurarase tamén nos subforos se non deshabilitas a opción.',
	'SEARCH_IN_RESULTS'			=> 'Procurar estes resultados',
	'SEARCH_KEYWORDS_EXPLAIN'	=> 'Pon <strong>+</strong> diante dunha palabra que debe ser atopada e <strong>-</strong> diante dunha palabra que non debe ser atopada. Se pos <strong>|</strong> diante das palabras, cada resultado deberá conter polo menos unha destas palabras. Utiliza * como comodín.',
	'SEARCH_MSG_ONLY'			=> 'Só texto da mensaxe',
	'SEARCH_OPTIONS'			=> 'Opcións da procura',
	'SEARCH_QUERY'				=> 'Petición de procura',
	'SEARCH_SUBFORUMS'			=> 'Procurar nos subforos',
	'SEARCH_TITLE_MSG'			=> 'Asuntos e texto das mensaxe publicadas',
	'SEARCH_TITLE_ONLY'			=> 'Só títulos de tema',
	'SEARCH_WITHIN'				=> 'Procurar dentro de',
	'SORT_ASCENDING'			=> 'Ascendente',
	'SORT_AUTHOR'				=> 'Autor',
	'SORT_DESCENDING'			=> 'Descendente',
	'SORT_FORUM'				=> 'Foro',
	'SORT_POST_SUBJECT'			=> 'Asunto da mensaxe',
	'SORT_TIME'					=> 'Data de publicación',
	'SPHINX_SEARCH_FAILED'		=> 'A procura fallou: %s',
	'SPHINX_SEARCH_FAILED_LOG'	=> 'Sentímolo, non se puido facer a procura. Para máis información, este erro foi rexistrado no rexistro de erros.',

	'TOO_FEW_AUTHOR_CHARS'	=> array(
		1	=> 'Debes especificar polo menos %d caracter do nome do autor.',
		2	=> 'Debes especificar polo menos %d caracteres do nome do autor.',
	),
));
