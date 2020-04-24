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

// BBCodes
// Note to translators: you can translate everything but what's between { and }
$lang = array_merge($lang, array(
	'ACP_BBCODES_EXPLAIN'		=> 'BBCode é unha linguaxe semellante a HTML que ofrece máis control sobre que se amosa e como se amosa algo. Dende esta páxina poderás engadir, eliminar e editar BBCodes á medida.',
	'ADD_BBCODE'				=> 'Engadir novo BBCode',

	'BBCODE_DANGER'				=> 'O BBCode que estás tentando engadir semella empregar o token {TEXT} nun contexto sensible, trata de usar un tipo máis restrictivo. Procede únicamente se entendes os riscos que conleva.',
	'BBCODE_DANGER_PROCEED'		=> 'Proseguir', //'I understand the risk',

	'BBCODE_ADDED'				=> 'BBCode engadido de xeito correcto.',
	'BBCODE_EDITED'				=> 'BBCode editado de xeito correcto.',
	'BBCODE_DELETED'			=> 'O BBCode eliminado correctamente.',
	'BBCODE_NOT_EXIST'			=> 'O BBCode que seleccionaches non existe.',
	'BBCODE_HELPLINE'			=> 'Liña de axuda',
	'BBCODE_HELPLINE_EXPLAIN'	=> 'Este campo contén o texto "mouseover" de BBCode',
	'BBCODE_HELPLINE_TEXT'		=> 'Texto de axuda.',
	'BBCODE_HELPLINE_TOO_LONG'	=> 'A liña de axuda que inseriches é longa de máis.',

	'BBCODE_INVALID_TAG_NAME'	=> 'O nome da etiqueta BBCode que seleccionaches xa existe.',
	'BBCODE_INVALID'			=> 'O teu BBCode está definido dun xeito incorrecto.',
	'BBCODE_INVALID_TEMPLATE'	=> 'O teu modelo de BBCode non é válido.',
	'BBCODE_TAG'				=> 'Etiqueta',
	'BBCODE_TAG_TOO_LONG'		=> 'A definición da etiqueta BBCode que inseriches é demasiado longa, reduce a súa lonxitude.',
	'BBCODE_TAG_DEF_TOO_LONG'	=> 'A definición de etiqueta que inseriches é longa de máis, reduce a súa lonxitude.',
	'BBCODE_USAGE'				=> 'Uso de BBCode',
	'BBCODE_USAGE_EXAMPLE'		=> '[highlight={COLOR}]{TEXT}[/highlight]<br /><br />[font={SIMPLETEXT1}]{SIMPLETEXT2}[/font]',
	'BBCODE_USAGE_EXPLAIN'		=> 'Aquí defines como usar o BBCode. Substitúe calquera variable inserida polo elemento correspondente (%sver abaixo%s)',

	'EXAMPLE'						=> 'Exemplo:',
	'EXAMPLES'						=> 'Exemplos:',

	'HTML_REPLACEMENT'				=> 'Substitución HTML',
	'HTML_REPLACEMENT_EXAMPLE'		=> '&lt;span style="background-color: {COLOR};"&gt;{TEXT}&lt;/span&gt;<br /><br />&lt;span style="font-family: {SIMPLETEXT1};"&gt;{SIMPLETEXT2}&lt;/span&gt;',
	'HTML_REPLACEMENT_EXPLAIN'		=> 'Aquí podes definir a substitución por HTML predeterminado. Non esquezas colocar no seu sitio os tokens que usaches enriba!',

	'TOKEN'					=> 'Mostra',
	'TOKENS'				=> 'Mostras',
	'TOKENS_EXPLAIN'		=> 'As mostras son marcadores de posición para a entrada de datos de usuario. A entrada validarase só se coincide coa definición correspondente. Se así o precisas, podes numeralos engadindo un número como o derradeiro carácter no medio das chaves, p.e. {TEXTO1}, {TEXTO2}.<br /><br />Coa substitución HTML tamén podes empregar calquera cadea de idioma presente no teu directorio language/ do seguinte xeito: {L_<em>&lt;NOMEDACADEA&gt;</em>} onde <em>&lt;NOMEDACADEA&gt;</em> é o nome da cadea traducida que queres engadir. Por exemplo, {L_WROTE} será amosado como “escribiu” ou a súa tradución de acordo co locale do usuario.<br /><br /><strong>Ten en conta que só as mostras listadas embaixo poden ser empregadas con BBCodes á medida.</strong>',
	'TOKEN_DEFINITION'		=> 'Que pode ser?',
	'TOO_MANY_BBCODES'		=> 'Non podes crear máis códigos BBC. Elimina algún código BBC e téntao de novo.',

	'tokens'	=>	array(
		'TEXT'			=> 'Calquera texto, incluídos caracteres especiais, números etc.',
		'SIMPLETEXT'	=> 'Caracteres do alfabeto latino (A-Z), números, espazos, comas, puntos, menos, máis, trazo e subliñado',
		'INTTEXT'		=> 'Caracteres de letras unicode, números, espazos, comas, puntos, menos, máis, trazo, subliñado and espazos en branco.',
		'IDENTIFIER'	=> 'Caracteres do alfabeto latino (A-Z), números, trazo e subliñado',
		'NUMBER'		=> 'Calquera serie de díxitos',
		'EMAIL'			=> 'Un enderezo de correo válido',
		'URL'			=> 'Unha URL válida usando calquera protocolo (http, ftp etc. non pode ser usado por exploits de javascript). Se non se proporciona ningún, engadirase “http://” por defecto.',
		'LOCAL_URL'		=> 'Unha URL local. A URL debe ser relativa á páxina do tema e non debe conter un nome de servidor ou protocolo, xa que as ligazóns prefixaranse con “%s”',
		'RELATIVE_URL'	=> 'URL relativa. Podes usala para facer coincidir partes dunha URL, pero ollo: unha URL absoluta é unha URL relativa válida. Cando queiras usar URLs relativas no teu foro, usa o token "LOCAL_URL".',
		'COLOR'			=> 'Unha cor HTML pode ser inserida ou ben de xeito numérico <samp>#FF1234</samp> ou ben mediante unha <a href="http://www.w3.org/TR/CSS21/syndata.html#value-def-color">claves de cor CSS</a> como <samp>fuchsia</samp> ou <samp>InactiveBorder</samp>'
	),
));

// Smilies and topic icons
$lang = array_merge($lang, array(
	'ACP_ICONS_EXPLAIN'		=> 'Dende esta páxina poderás engadir, eliminar e editar as iconas que os usuarios poden engadir aos seus temas ou mensaxes. Estas iconas son xeralmente amosadas ao lado do título do tema na lista do foro, ou nos asuntos da mensaxes publicadas nas listas de tema. Tamén podes instalar e crear novos paquetes de iconas.',
	'ACP_SMILIES_EXPLAIN'	=> 'As emoticonas adoitan ser pequenas, ás veces utilízanse imaxes animadas para transmitir emocións ou sentimentos. Dende esta páxina podes engadir, eliminar e editar as emoticonas que os usuarios poden pór nas súas mensaxes. Asemade podes crear e instalar novos paquetes de emoticonas.',
	'ADD_SMILIES'			=> 'Engadir varias emoticonas',
	'ADD_SMILEY_CODE'		=> 'Engadir código de emoticona adicional',
	'ADD_ICONS'				=> 'Engadir varias iconas',
	'AFTER_ICONS'			=> 'Logo de %s',
	'AFTER_SMILIES'			=> 'Logo de %s',

	'CODE'						=> 'Código',
	'CURRENT_ICONS'				=> 'Iconas actuais',
	'CURRENT_ICONS_EXPLAIN'		=> 'Elixe que facer coas iconas instaladas actualmente.',
	'CURRENT_SMILIES'			=> 'Cariñas actuais',
	'CURRENT_SMILIES_EXPLAIN'	=> 'Elixe que facer coas emoticonas instaladas actualmente.',

	'DISPLAY_ON_POSTING'		=> 'Amosar durante a publicación',
	'DISPLAY_POSTING'			=> 'Na páxina de publicación',
	'DISPLAY_POSTING_NO'		=> 'Non na páxina de publicación',

	'EDIT_ICONS'				=> 'Editar iconas.',
	'EDIT_SMILIES'				=> 'Editar emoticonas',
	'EMOTION'					=> 'Emoción',
	'EXPORT_ICONS'				=> 'Exportar e descargar icons.pak',
	'EXPORT_ICONS_EXPLAIN'		=> '%sPremendo nesta ligazón, a configuración para as túas iconas instaladas será empaquetada como <samp>icons.pak</samp> co cal unha vez descargada pode ser usada para crear un ficheiro <samp>.zip</samp> ou <samp>.tgz</samp> contendo todas as túas iconas ademais do ficheiro de configuración de <samp>icons.pak</samp>.',
	'EXPORT_SMILIES'			=> 'Exportar e descargar smilies.pak',
	'EXPORT_SMILIES_EXPLAIN'	=> '%sPremendo nesta ligazón, a configuración para os teus risoños instalados comprimirase dentro de <samp>smilies.pak</samp> que unha vez descargado pode ser usado para crear un arquivo <samp>.zip</samp> ou <samp>.tgz</samp> que conterá todos os teus risoños e máis este arquivo de configuración do <samp>smilies.pak</samp>%s.',

	'FIRST'			=> 'Primeiro',

	'ICONS_ADD'				=> 'Engadir unha nova icona',
	'ICONS_ADDED'			=> array(
		0	=> 'Non se engadiron iconas.',
		1	=> 'A icona foi engadida correctamente.',
		2	=> 'As iconas foron engadidas correctamente.',
	),
	'ICONS_CONFIG'			=> 'Configuración das iconas',
	'ICONS_DELETED'			=> 'A icona foi eliminada correctamente.',
	'ICONS_EDIT'			=> 'Editar a icona',
	'ICONS_EDITED'			=> array(
		0	=> 'Non se actualizou icona ningunha.',
		1	=> 'A icona foi actualizada correctamente.',
		2	=> 'As iconas foron actualizadas correctamente.',
	),
	'ICONS_HEIGHT'			=> 'Altura da icona',
	'ICONS_IMAGE'			=> 'Imaxe da icona',
	'ICONS_IMPORTED'		=> 'O paquete de iconas foi instalado correctamente.',
	'ICONS_IMPORT_SUCCESS'	=> 'O paquete de iconas foi importado correctamente.',
	'ICONS_LOCATION'		=> 'Ubicación da icona',
	'ICONS_NOT_DISPLAYED'	=> 'As seguintes iconas non son amosadas na páxina de publicación de mensaxes',
	'ICONS_ORDER'			=> 'Orde de iconas',
	'ICONS_URL'				=> 'Ficheiro de imaxe da icona',
	'ICONS_WIDTH'			=> 'Ancho da icona',
	'IMPORT_ICONS'			=> 'Instalar paquete de iconas',
	'IMPORT_SMILIES'		=> 'Instalar paquete de risoños',

	'KEEP_ALL'			=> 'Manter todo',

	'MASS_ADD_SMILIES'	=> 'Engadir varias emoticonas',

	'NO_ICONS_ADD'		=> 'Non hai iconas dispoñíbeis para engadir.',
	'NO_ICONS_EDIT'		=> 'Non hai iconas dispoñíbeis para modificar.',
	'NO_ICONS_EXPORT'	=> 'Non tes iconas coas que crear un paquete.',
	'NO_ICONS_PAK'		=> 'Non se atoparon paquetes de iconas.',
	'NO_SMILIES_ADD'	=> 'Non hai emoticonas dispoñibles para engadir.',
	'NO_SMILIES_EDIT'	=> 'Non hai emoticonas dispoñibles para modificar.',
	'NO_SMILIES_EXPORT'	=> 'Non tes emoticonas cos que crear un paquete.',
	'NO_SMILIES_PAK'	=> 'Non se atoparon paquetes de emoticonas.',

	'PAK_FILE_NOT_READABLE'		=> 'Non se puido ler o arquivo <samp>.pak</samp>.',

	'REPLACE_MATCHES'	=> 'Substituír coincidencias',

	'SELECT_PACKAGE'			=> 'Seleccionar un ficheiro de paquete',
	'SMILIES_ADD'				=> 'Engadir un risoño novo',
	'SMILIES_ADDED'				=> array(
		0	=> 'Non se engadiron emoticonas.',
		1	=> 'A emoticona foi engadida correctamente.',
		2	=> 'As emoticonas foron engadidas correctamente.',
	),
	'SMILIES_CODE'				=> 'Código de emoticona',
	'SMILIES_CONFIG'			=> 'Configuración de emoticonas',
	'SMILIES_DELETED'			=> 'A emoticona foi eliminada correctamente.',
	'SMILIES_EDIT'				=> 'Editar emoticonas',
	'SMILIE_NO_CODE'			=> 'Ignorouse a emoticona “%s”, xa que non se inseriu código ningún.',
	'SMILIE_NO_EMOTION'			=> 'Ignorouse a emoticona “%s”, xa que non se inseriu sentimento ningún.',
	'SMILIE_NO_FILE'			=> 'Ignorouse a emoticona “%s”, xa que non se atopou o arquivo.',
	'SMILIES_EDITED'			=> array(
		0	=> 'Non se actualizou emoticona ningunha.',
		1	=> 'A emoticona actualizouse correctamente.',
		2	=> 'As emoticonas foron actualizadas correctamente.',
	),
	'SMILIES_EMOTION'			=> 'Emoción',
	'SMILIES_HEIGHT'			=> 'Altura da emoticona',
	'SMILIES_IMAGE'				=> 'Imaxe da emoticona',
	'SMILIES_IMPORTED'			=> 'O paquete de emoticonas foi instalado correctamente.',
	'SMILIES_IMPORT_SUCCESS'	=> 'O paquete de emoticonas foi importado correctamente.',
	'SMILIES_LOCATION'			=> 'Localización da emoticona',
	'SMILIES_NOT_DISPLAYED'		=> 'As seguintes emoticona non se amosan na páxina de publicación de mensaxes',
	'SMILIES_ORDER'				=> 'Orde de emoticonas',
	'SMILIES_URL'				=> 'Ficheiro de imaxe da emoticona',
	'SMILIES_WIDTH'				=> 'Largo da emoticona',

	'TOO_MANY_SMILIES'			=> array(
		1	=> 'Acadouse o límite de %d emoticona.',
		2	=> 'Acadouse o límite de %d emoticonas.',
	),

	'WRONG_PAK_TYPE'	=> 'O paquete especificado non contén os datos axeitados.',
));

// Word censors
$lang = array_merge($lang, array(
	'ACP_WORDS_EXPLAIN'		=> 'Dende este panel de control podes engadir, editar, e eliminar palabras que serán automaticamente censuradas no teu foro. Aínda así, permitirase o rexistro de nomes de usuario que conteñan esas palabras. Os asteriscos (*) son aceptados no campo de palabras, p.e. *men* rexeitará amencer, man* rexeitará manta, *man rexeitará superman.',
	'ADD_WORD'				=> 'Engadir nova palabra',

	'EDIT_WORD'		=> 'Editar censor de palabras',
	'ENTER_WORD'	=> 'Debes inserir unha palabra e a súa substituta.',

	'NO_WORD'	=> 'Non se seleccionou ningunha palabra para editar.',

	'REPLACEMENT'	=> 'Substituta',

	'UPDATE_WORD'	=> 'Actualizar censor de palabras',

	'WORD'				=> 'Palabra',
	'WORD_ADDED'		=> 'O censor de palabras foi correctamente engadido.',
	'WORD_REMOVED'		=> 'O censor de palabras foi correctamente eliminado.',
	'WORD_UPDATED'		=> 'O censor de palabras foi correctamente actualizado.',
));

// Ranks
$lang = array_merge($lang, array(
	'ACP_RANKS_EXPLAIN'		=> 'Usando este formulario podes engadir, editar, ver e borrar rangos. Podes tamén crear rangos personalizados que poden ser aplicados a algún usuario coa utilidade de administración de usuario.',
	'ADD_RANK'				=> 'Engadir novo rango',

	'MUST_SELECT_RANK'		=> 'Debes seleccionar un rango.',

	'NO_ASSIGNED_RANK'		=> 'Sen rango especial asignado.',
	'NO_RANK_TITLE'			=> 'Non especificaches un título para o rango.',
	'NO_UPDATE_RANKS'		=> 'O rango foi eliminado correctamente. Porén as contas de usuario que usen este rango non foron actualizadas. Terás que reiniciar o rango nesas contas.',

	'RANK_ADDED'			=> 'O rango foi engadido correctamente.',
	'RANK_IMAGE'			=> 'Imaxe do rango',
	'RANK_IMAGE_EXPLAIN'	=> 'Usa isto para definir unha pequena imaxe asociada ao rango. A ruta refírese ao directorio raíz phpBB.',
	'RANK_IMAGE_IN_USE'		=> '(En uso)',
	'RANK_MINIMUM'			=> 'Mensaxes mínimas',
	'RANK_REMOVED'			=> 'O rango foi eliminado correctamente.',
	'RANK_SPECIAL'			=> 'Estabelecer como rango especial',
	'RANK_TITLE'			=> 'Título do rango',
	'RANK_UPDATED'			=> 'O rango foi actualizado correctamente.',
));

// Disallow Usernames
$lang = array_merge($lang, array(
	'ACP_DISALLOW_EXPLAIN'	=> 'Dende aquí podes controlar os nomes de usuario que non poden ser usados. Os nomes de usuario prohibidos poden levar o carácter asterisco *.',
	'ADD_DISALLOW_EXPLAIN'	=> 'Podes prohibir un nome de usuario empregando * coma comodín.',
	'ADD_DISALLOW_TITLE'	=> 'Engadir un nome prohibido',

	'DELETE_DISALLOW_EXPLAIN'	=> 'Podes eliminar un nome de usuario prohibido seleccionándoo na lista e premendo en enviar',
	'DELETE_DISALLOW_TITLE'		=> 'Eliminar nome de usuario prohibido',
	'DISALLOWED_ALREADY'		=> 'O nome que introduciches xa está prohibido.',
	'DISALLOWED_DELETED'		=> 'Eliminouse correctamente o nome de usuario prohibido.',
	'DISALLOW_SUCCESSFUL'		=> 'Engadiuse correctamente o nome de usuario prohibido.',

	'NO_DISALLOWED'				=> 'Non hai nomes de usuario prohibidos.',
	'NO_USERNAME_SPECIFIED'		=> 'Non seleccionaches ou inseriches un nome de usuario co cal operar.',
));

// Reasons
$lang = array_merge($lang, array(
	'ACP_REASONS_EXPLAIN'	=> 'Dende aquí podes xestionar os motivos empregados nas denuncias e rexeitamento de mensaxes. Hai unha razón por defecto (marcada cun *) que non podes eliminar, esa razón normalmente úsase nas mensaxes personalizadas se non se adapta a ningún dos motivos. ',
	'ADD_NEW_REASON'		=> 'Engadir novo motivo',
	'AVAILABLE_TITLES'		=> 'Razóns localizadas dispoñibles',

	'IS_NOT_TRANSLATED'			=> 'O motivo <strong>non</strong> foi localizado.',
	'IS_NOT_TRANSLATED_EXPLAIN'	=> 'O motivo <strong>non</strong> foi localizado. Se queres proporcionar a forma localizada, especifica a clave correcta da sección de motivos dos arquivos de idiomas.',
	'IS_TRANSLATED'				=> 'O motivo foi localizado.',
	'IS_TRANSLATED_EXPLAIN'		=> 'O motivo foi localizado. Se o título que escribiches aquí está especificado na sección de informes de motivos dos arquivos de idiomas, empregarase o formulario do título e descrición localizado.',

	'NO_REASON'					=> 'O motivo non foi atopado.',
	'NO_REASON_INFO'			=> 'Tes que especificar un título e unha descrición para este motivo.',
	'NO_REMOVE_DEFAULT_REASON'	=> 'Non podes eliminar o motivo por defecto "Outra"',

	'REASON_ADD'				=> 'Engadir motivo',
	'REASON_ADDED'				=> 'Motivo engadido correctamente.',
	'REASON_ALREADY_EXIST'		=> 'Xa existe un motivo con ese título, introduce outro título.',
	'REASON_DESCRIPTION'		=> 'Descrición do motivo',
	'REASON_DESC_TRANSLATED'	=> 'Visualizar descrición do motivo',
	'REASON_EDIT'				=> 'Editar motivo',
	'REASON_EDIT_EXPLAIN'		=> 'Aquí podes engadir ou editar un motivo. Se o motivo está traducido, a versión localizada será usada no canto da descrición introducida aquí.',
	'REASON_REMOVED'			=> 'Motivo eliminado correctamente.',
	'REASON_TITLE'				=> 'Título do motivo',
	'REASON_TITLE_TRANSLATED'	=> 'Visualizar título do motivo',
	'REASON_UPDATED'			=> 'Motivo actualizado correctamente.',

	'USED_IN_REPORTS'		=> 'Usado nos informes/denuncias',
));