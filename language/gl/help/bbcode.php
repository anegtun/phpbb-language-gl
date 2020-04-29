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

$lang = array_merge($lang, array(
	'HELP_BBCODE_BLOCK_IMAGES'	=> 'Amosar imaxes nas mensaxes',
	'HELP_BBCODE_BLOCK_INTRO'	=> 'Introdución',
	'HELP_BBCODE_BLOCK_LINKS'	=> 'Crear ligazóns',
	'HELP_BBCODE_BLOCK_LISTS'	=> 'Xerando listas',
	'HELP_BBCODE_BLOCK_OTHERS'	=> 'Outras cuestións',
	'HELP_BBCODE_BLOCK_QUOTES'	=> 'Citar e xerar texto con ancho fixo',
	'HELP_BBCODE_BLOCK_TEXT'	=> 'Formato do texto',

	'HELP_BBCODE_IMAGES_ATTACHMENT_ANSWER'	=> 'Agora podes engadir adxuntos en calquera parte dunha mensaxe utilizando a nova etiqueta BBCode <strong>[attachment=][/attachment]</strong>, sempre que a funcionalidade de adxuntos fose previamente activada e dispoñas dos permisos axeitados para poder crear adxuntos. Dentro da pantalla de publicación hai unha caixa despregable para inserir adxuntos.',
	'HELP_BBCODE_IMAGES_ATTACHMENT_QUESTION'	=> 'Engadir adxuntos nunha mensaxe',
	'HELP_BBCODE_IMAGES_BASIC_ANSWER'	=> 'phpBB BBcode incorpora unha etiqueta para incluír imaxes nas túas mensaxes. Dúas cousas importantes a lembrar ao usar esta etiqueta son: a moitos usuarios non lles gusta ver moitas imaxes nas mensaxes, e a imaxe amosada debe estar dispoñible en internet (non pode só existir no teu dispositivo por exemplo, a menos que teñas un servidor web!). Para amosar unha imaxe debes arrodear a URL da imaxe coas etiquetas <strong>[img][/img]</strong>. Por exemplo: :<br /><br /><strong>[img]</strong>https://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/img]</strong><br /><br /> Como se di na sección das URL podes inserir unha imaxe nunha etiqueta <strong>[url][/url]</strong> se así o desexas, p.e.<br /><br /><strong>[url=https://www.phpbb.com/][img]</strong>https://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/img][/url]</strong><br /><br /> xeraría :<br /><br /><a href="https://www.phpbb.com/"><img src="https://www.phpbb.com/theme/images/logos/blue/160x52.png" alt="" /></a>',
	'HELP_BBCODE_IMAGES_BASIC_QUESTION'	=> 'Pór unha imaxe nunha mensaxe',

	'HELP_BBCODE_INTRO_BBCODE_ANSWER'	=> 'BBCode é unha linguaxe semellante a HTML. Que poidas utilizar o BBCode nas túas mensaxes no foro é decisión do administrador. En calquera caso, podes desactivar o BBCode individualmente para cada mensaxe mediante o formulario de publicación. BBCode é semellante en estilo ao HTML, as etiquetas están arrodeadas por corchetes [ e ] en lugar de &lt; e &gt; e ofrecen un maior control sobre que e como se amosa o contido. Dependendo do patrón de aparencia (template) que esteas a usar, podes atopar que engadir BBCode nas túas mensaxes é máis sinxelo, usando a interface de botóns sobre a área de mensaxe no formulario de publicación. A seguinte guía pode serche de utilidade.',
	'HELP_BBCODE_INTRO_BBCODE_QUESTION'	=> 'Que é o BBCode?',

	'HELP_BBCODE_LINKS_BASIC_ANSWER'	=> 'phpBB BBCode permite crear URIs (Uniform Resource Indicators), mellor coñecidas coma URLs, de diversos xeitos.<ul><li>A primeira forma é mediante a etiqueta <strong>[url=][/url]</strong>, o que escribas tralo signo = fará que o contido entre as dúas etiquetas sexa unha URL. Por exemplo para ligar a phpBB.com poderías usar:<br /><br /><strong>[url=https://www.phpbb.com/]</strong>Visita phpBB!<strong>[/url]</strong><br /><br />Isto xerará a seguinte ligazón, <a href="https://www.phpbb.com/">Visite phpBB!</a> Podes comprobar que a ligazón aparecerá na mesma xanela ou nunha nova dependendo da configuración do navegador do usuario.</li><li>Se queres que a URL apareza como ligazón pódelo facer usando:<br /><br /><strong>[url]</strong>https://www.phpbb.com/<strong>[/url]</strong><br /><br />Isto xerará a seguinte ligazón, <a href="https://www.phpbb.com/">https://www.phpbb.com/</a></li><li>Alén diso, phpBB ofrece algo chamado <i>Ligazóns Máxicas</i>, que convirte calquera URL válida nunha ligazón sen que teñas que usar ningunha etiqueta ou incluso sen o cabeceiro http://. Por exemplo escribindo www.phpbb.com na túa mensaxe amosarase automaticamente como <a href="http://www.phpbb.com/">www.phpbb.com</a> ao visualizar a mensaxe.</li><li>O mesmo pódese aplicar ao enderezo de correo, tamén se pode especificar un enderezo explicitamente, por exemplo:<br /><br /><strong>[email]</strong>alguen@dominio.gal<strong>[/email]</strong><br /><br />que amosa <a href="mailto:alguen@dominio.gal">alguen@dominio.gal</a> ou podes só escribir alguen@dominio.gal na mensaxe que será automaticamente convertida ao ler a mensaxe.</li></ul>Como co resto das etiquetas BBCode podes inserir as URLs dentro de calquera das outras etiquetas como <strong>[img][/img]</strong> (ver seguinte entrada), <strong>[b][/b]</strong> etc. Como nas etiquetas de formato debes asegurarte de seguir a orde correcta de apertura e pechado de etiquetas, por exemplo:<br /><br /><strong>[url=https://www.phpbb.com/][img]</strong>https://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/url][/img]</strong><br /><br /> <span style="text-decoration: underline">non</span> é correcto, e pode levar a que as túas mensaxes sexan borradas. Ten coidado.',
	'HELP_BBCODE_LINKS_BASIC_QUESTION'	=> 'Ligar a outro sitio',

	'HELP_BBCODE_LISTS_ORDERER_ANSWER'	=> 'O segundo tipo de lista, unha lista ordenada dáche o control sobre o que aparece diante de cada compoñente. Para crear unha lista ordenada usa <strong>[list=1][/list]</strong> para crear unha lista numerada ou <strong>[list=a][/list]</strong> para unha lista alfabética. Ao igual que nas listas non ordenadas, cada compoñente especifícase usando <strong>[*]</strong>. Por exemplo: <br /><br /><strong>[list=1]</strong><br /><strong>[*]</strong>Ir de compras<br /><strong>[*]</strong>Mercar patacas<br /><strong>[*]</strong>Recoller encargo<br /><strong>[/list]</strong><br /><br /> xerará: <ol style="list-style-type: decimal;"><li>Ir de compras</li><li>Mercar patacas</li><li>Recoller encargo</li></ol>Namentres que para a lista alfabética usarías: <br /><br /><strong>[list=a]</strong><br /><strong>[*]</strong>Primeira resposta<br /><strong>[*]</strong>Segunda resposta<br /><strong>[*]</strong>Terceira resposta<br /><strong>[/list]</strong><br /><br />dando lugar a <ol style="list-style-type: lower-alpha"><li>Primeira resposta</li><li>Segunda resposta</li><li>Terceira resposta</li></ol><strong>[list=A]</strong><br /><strong>[*]</strong>Primeira resposta<br /><strong>[*]</strong>Segunda resposta<br /><strong>[*]</strong>Terceira resposta<br /><strong>[/list]</strong><br /><br />xeraría <ol style="list-style-type: upper-alpha"><li>Primeira resposta</li><li>Segunda resposta</li><li>Terceira resposta</li></ol>',
	'HELP_BBCODE_LISTS_ORDERER_QUESTION'	=> 'Crear lista ordenada',
	'HELP_BBCODE_LISTS_UNORDERER_ANSWER'	=> 'Unha lista non ordenada presenta cada membro de forma secuencial nunha liña marcándoos cun punto. Para crear unha lista non ordenada úsase <strong>[list][/list]</strong> e defínese cada membro da lista con <strong>[*]</strong>. Por exemplo para crear unha lista de cores usaríase:<br /><br /><strong>[list]</strong><br /><strong>[*]</strong>Vermello<br /><strong>[*]</strong>Azul<br /><strong>[*]</strong>Amarelo<br /><strong>[/list]</strong><br /><br />Que orixinaría a seguinte lista:<ul><li>Vermello</li><li>Azul</li><li>Amarelo</li></ul><br />De xeito alternativo podes especificar listas con puntos empregando <strong>[list=disc][/list]</strong>, <strong>[list=circle][/list]</strong>, ou <strong>[list=square][/list]</strong>.',
	'HELP_BBCODE_LISTS_UNORDERER_QUESTION'	=> 'Crear lista non ordenada',

	'HELP_BBCODE_OTHERS_CUSTOM_ANSWER'	=> 'Se eres un administrador deste foro, e tes os permisos axeitados, podes engadir novas etiquetas BBCodes a través da sección BBCodes personalizados.',
	'HELP_BBCODE_OTHERS_CUSTOM_QUESTION'	=> 'Podo engadir a miña propia etiqueta?',

	'HELP_BBCODE_QUOTES_CODE_ANSWER'	=> 'Se queres crear un fragmento de código ou calquera cousa que requira un largo predefinido, p.e. o tipo de letra Courier, deberías inserir o texto entre etiquetas <strong>[code][/code]</strong>, p.e. <br><br><strong>[code]</strong>echo "Isto é código";<strong>[/code]</strong><br><br> Calquera formato incluído entre etiquetas <strong>[code][/code]</strong> consérvase cando o visualizas posteriormente.',
	'HELP_BBCODE_QUOTES_CODE_QUESTION'	=> 'Datos do código de saída de datos ou do largo predefinido',
	'HELP_BBCODE_QUOTES_TEXT_ANSWER'	=> 'Hai dúas formas de citar textos, con referencia ou sen ela.<ul><li> Cando utilizas a función Citar para responder a unha mensaxe no foro, decataríaste de que o texto da mensaxe aparece na xanela de escribir mensaxe arrodeado polo bloque de etiquetas <strong>[quote=&quot;&quot;][/quote]</strong>. Este método permíteche citar cunha referencia á persoa ou o que ti escollas pór! Por exemplo, para citar un anaco de texto que escribiu o Sr. Mol, sería <br /><br /><strong>[quote=&quot;Sr. Mol&quot;]</strong>O texto do Sr. Mol viría aquí<strong>[/quote]</strong><br /><br />No texto amosado engádese automaticamente Sr. Mol escribiu: antes do texto. Lembra que <strong>debes</strong> usar as &quot;&quot; para arrodear con &quot;&quot; o nome de quen estás a citar, son obrigatorias.</li><li>O segundo método permíteche citar sen referencia. Para facelo, escribe o texto entre as etiquetas <strong>[quote][/quote]</strong>. Cando vexas a mensaxe só aparecerá citado o texto.</li></ul>',
	'HELP_BBCODE_QUOTES_TEXT_QUESTION'	=> 'Citar textos en respostas',

	'HELP_BBCODE_TEXT_BASIC_ANSWER'	=> 'BBCode inclúe etiquetas para permitirche cambiar os estilos básicos do teu texto máis rapidamente. Isto conséguese do seguinte xeito: <ul><li>Para texto groso introdúzao entre <strong>[b][/b]</strong>, ex. <br /><br /><strong>[b]</strong>Ola<strong>[/b]</strong><br /><br />será <strong>Ola</strong></li><li>Para subliñar <strong>[u][/u]</strong>, por exemplo:<br /><br /><strong>[u]</strong>Bos días<strong>[/u]</strong><br /><br />será <u>Bos días</u></li><li>Para texto en cursiva <strong>[i][/i]</strong>, ex.<br /><br />Isto é <strong>[i]</strong>Xenial!<strong>[/i]</strong><br /><br />será Isto é <i>Xenial!</i></li></ul>',
	'HELP_BBCODE_TEXT_BASIC_QUESTION'	=> 'Como crear textos en letra grosa, cursiva e subliñados',
	'HELP_BBCODE_TEXT_COLOR_ANSWER'	=> 'Para variar a cor ou o tamaño dos textos poderás usar as seguintes etiquetas. Ten en conta que a aparencia coa que se amosa depende do navegador do usuario e do sistema: <ul><li>Cambiar a cor do texto conséguese meténdoo entre<strong>[color=][/color]</strong>. Podes especificar o nome da cor en inglés (ex. red, blue, yellow etc.) ou o seu valor hexadecimal, ex. #FFFFFF, #000000. Por exemplo, para crear un texto en vermello poderías usar:<br /><br /><strong>[color=red]</strong>Ola!<strong>[/color]</strong><br /><br />ou<br /><br /><strong>[color=#FF0000]</strong>Ola!<strong>[/color]</strong><br /><br />os dous amosarían <span style="color:red">Ola!</span></li><li>Cambiar o tamaño do texto conséguese dun xeito semellante usando <strong>[size=][/size]</strong>. Esta etiqueta depende do estilo seleccionado polo usuario pero o formato recomendado é un valor numérico que representa o tamaño de xeito porcentual, comezando por 20 (moi pequeno) até o 200 (moi grande). Por exemplo:<br /><br /><strong>[size=30]</strong>PEQUENO<strong>[/size]</strong><br /><br />normalmente será <span style="font-size:30%;">PEQUENO</span><br /><br />mentres:<br /><br /><strong>[size=200]</strong>XIGANTE!<strong>[/size]</strong><br /><br />será <span style="font-size:200%;">XIGANTE!</span></li></ul>',
	'HELP_BBCODE_TEXT_COLOR_QUESTION'	=> 'Como mudar a cor ou tamaño do texto',
	'HELP_BBCODE_TEXT_COMBINE_ANSWER'	=> 'Si queres, por exemplo, chamar a atención de alguén podes usar:<br /><br /><strong>[size=200][color=red][b]</strong>MÍRAME!<strong>[/b][/color][/size]</strong><br /><br />que amosará <span style="color:red;font-size:200%;"><strong>MÍRAME!</strong></span><br /><br />Non che recomendamos pór moito texto deste xeito! Lembra que é responsabilidade túa, do que escribe, asegurarse de que as etiquetas están pechadas correctamente. Por exemplo, sería incorrecto:<br /><br /><strong>[b][u]</strong>Isto está mal<strong>[/b][/u]</strong>',
	'HELP_BBCODE_TEXT_COMBINE_QUESTION'	=> 'Podo combinar etiquetas de formato?',
));
