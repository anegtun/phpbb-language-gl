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
	'ACP_SEARCH_INDEX_EXPLAIN'				=> 'Aquí podes xestionar os índices do servidor de procura. Como normalmente empregarás un só servidor podes eliminar todos os índices que non uses. Logo de alterar algunha das opcións de procura (p.e. o número mínimo/máximo de caracteres) paga a pena refacer o índice para que reflicta estes trocos.',
	'ACP_SEARCH_SETTINGS_EXPLAIN'			=> 'Aquí podes definir que servidor de procura usar para indexar mensaxes e executar procuras. Podes fixar varias opcións que poden influír na cantidade de procesos necesarios. Algunhas destas opcións son as mesmas para todos os servidores de procura.',

	'COMMON_WORD_THRESHOLD'					=> 'Límite de palabra común',
	'COMMON_WORD_THRESHOLD_EXPLAIN'			=> 'As palabras que estean contidas nunha porcentaxe elevada de mensaxes consideraranse comúns. As palabras comúns son ignoradas nas consultas de procura. Selecciona cero para desactivar tal cousa. Só ten efecto se hai máis de 100 mensaxes. Se queres reconsiderar algunhas palabras que actualmente se contemplan como comúns, deberás recrear o índice.',
	'CONFIRM_SEARCH_BACKEND'				=> 'Estás seguro de querer mudar a un servidor de procura distinto? Despois de mudar a servidor de procura deberás crear un novo índice para o mesmo. Se non pensas volver a empregar o antigo servidor de procura podes eliminar o vello índice asociado ao mesmo co obxecto de liberar recursos do sistema.',
	'CONTINUE_DELETING_INDEX'				=> 'Continúa o proceso de eliminación de índices previos',
	'CONTINUE_DELETING_INDEX_EXPLAIN'		=> 'Comezou un proceso de eliminación de índices. Para acceder á páxina indexada de procura, precisas completar o proceso primeiro ou paralo.',
	'CONTINUE_INDEXING'						=> 'Continúa o proceso de indexado previo',
	'CONTINUE_INDEXING_EXPLAIN'				=> 'Comezou un proceso de indexación. Para acceder á páxina indexada de procura, precisas completar o proceso primeiro ou paralo.',
	'CREATE_INDEX'							=> 'Crear índice',

	'DELETE_INDEX'							=> 'Eliminar índice',
	'DELETING_INDEX_IN_PROGRESS'			=> 'Borrado de índice en proceso',
	'DELETING_INDEX_IN_PROGRESS_EXPLAIN'	=> 'O servidor está actualmente limpando o seu índice. Isto pode levar varios minutos.',

	'FULLTEXT_MYSQL_INCOMPATIBLE_DATABASE'	=> 'O servidor de texto completo MySQL só pode ser usado con MySQL4 ou superior.',
	'FULLTEXT_MYSQL_NOT_SUPPORTED'			=> 'Os índices de texto completo só se poden empregar con táboas MyISAM ou InnoDB. Precísase MySQL 5.6.8 ou superior para procuras de texto completo en táboas InnoDB',
	'FULLTEXT_MYSQL_TOTAL_POSTS'			=> 'Número total de mensaxes indexados',
	'FULLTEXT_MYSQL_MIN_SEARCH_CHARS_EXPLAIN'	=> 'As palabras con, polo menos, esta cantidade de caracteres serán indexadas para as procuras. Ti ou o teu host só podedes mudar esta configuración mudando a configuración mysql.',
	'FULLTEXT_MYSQL_MAX_SEARCH_CHARS_EXPLAIN'	=> 'As palabras con menos ou con esta cantidade de caracteres serán indexadas para as procuras. Ti ou o teu host só podedes mudar esta configuración mudando a configuración mysql.',

	'FULLTEXT_POSTGRES_INCOMPATIBLE_DATABASE'	=> 'O servidor de texto completo PostgreSQL só pode ser usado con PostgreSQL.',
	'FULLTEXT_POSTGRES_TOTAL_POSTS'			=> 'Número total de mensaxes indexadas',
	'FULLTEXT_POSTGRES_VERSION_CHECK'		=> 'Versión de PostgreSQL',
	'FULLTEXT_POSTGRES_TS_NAME'				=> 'Perfil de configuración de procura de texto completo:',
	'FULLTEXT_POSTGRES_MIN_WORD_LEN'			=> 'Tamaño de palabra mínimo para as palabras clave',
	'FULLTEXT_POSTGRES_MAX_WORD_LEN'			=> 'Tamaño de palabra máximo para as palabras clave',
	'FULLTEXT_POSTGRES_VERSION_CHECK_EXPLAIN'		=> 'Este servidor de texto completo precisa PostgreSQL 8.3 ou superior.',
	'FULLTEXT_POSTGRES_TS_NAME_EXPLAIN'				=> 'O perfil de configuración empregado para determinar o parser e o diccionario.',
	'FULLTEXT_POSTGRES_MIN_WORD_LEN_EXPLAIN'			=> 'Palabras con al menos estes caracteres incluiranse na consulta á base de datos.',
	'FULLTEXT_POSTGRES_MAX_WORD_LEN_EXPLAIN'			=> 'Palabras con non máis destes caracteres incluiranse na consulta á base de datos.',

	'FULLTEXT_SPHINX_CONFIGURE'				=> 'Configura os seguintes axustes para xerar un ficheiro de configuración Sphinx',
	'FULLTEXT_SPHINX_DATA_PATH'				=> 'Ruta ao directorio de datos',
	'FULLTEXT_SPHINX_DATA_PATH_EXPLAIN'		=> 'Usarase para almacenar os índices e os ficheiros de rexistro. Deberías ubicar este directorio fóra dunha ruta accesible por web, e debería ter unha barra / ao final.',
	'FULLTEXT_SPHINX_DELTA_POSTS'			=> 'Número de mensaxes no índice delta',
	'FULLTEXT_SPHINX_HOST'					=> 'Host do demonio Sphinx',
	'FULLTEXT_SPHINX_HOST_EXPLAIN'			=> 'Host no que o demonio de procuras de Sphinx (searchd) está escoitando. Déixao baleiro para empregar "localhost".',
	'FULLTEXT_SPHINX_INDEXER_MEM_LIMIT'		=> 'Límite de memoria do indexador',
	'FULLTEXT_SPHINX_INDEXER_MEM_LIMIT_EXPLAIN'	=> 'Este número debería ser sempre menor á RAM do servidor. Se experimentas problemas de rendemento quizáis sexa porque o indexador consume demasiados recursos. Podería axudar que baixaras a memoria asignada ao indexador.',
	'FULLTEXT_SPHINX_MAIN_POSTS'			=> 'Número de mensaxes no índice principal',
	'FULLTEXT_SPHINX_PORT'					=> 'Porto do demonio Sphinx',
	'FULLTEXT_SPHINX_PORT_EXPLAIN'			=> 'Porto no que o demonio de procuras de Sphinx (searchd) está escoitando. Déixao en branco para empregar o porto por defecto "9312"',
	'FULLTEXT_SPHINX_WRONG_DATABASE'		=> 'A procura con Sphinx para phpBB só soporta MySQL e PostgreSQL.',
	'FULLTEXT_SPHINX_CONFIG_FILE'			=> 'Ficheiro de configuración de Sphinx',
	'FULLTEXT_SPHINX_CONFIG_FILE_EXPLAIN'	=> 'O contido xerado do ficheiro de configuración de Sphinx. É preciso pegar estes datos no "sphinx.conf". Reempraza [dbuser] e [dbpassword] coas túas credenciáis de base de datos.',
	'FULLTEXT_SPHINX_NO_CONFIG_DATA'		=> 'Non se definiu a ruta ao directorio de datos de Sphinx. Por favor define a ruta e xera o ficheiro de configuración.',

	'GENERAL_SEARCH_SETTINGS'				=> 'Configuración xeral da procura',
	'GO_TO_SEARCH_INDEX'					=> 'Ir á páxina de índices de procura',

	'INDEX_STATS'							=> 'Índexar estatísticas',
	'INDEXING_IN_PROGRESS'					=> 'Indexado en proceso',
	'INDEXING_IN_PROGRESS_EXPLAIN'			=> 'O servidor de procura está actualmente indexando todas as mensaxes. Isto pode demorar dende uns minutos até unhas horas dependendo da cantidade de mensaxes.',

	'LIMIT_SEARCH_LOAD'						=> 'Límite de carga para a páxina de procuras',
	'LIMIT_SEARCH_LOAD_EXPLAIN'				=> 'Se a carga do sistema no último minuto excede este valor a páxina de procuras desconectarase. Un valor de 1.0 significa aproximadamente o 100% de utilización dun procesador. Isto só funciona en servidores baseados en UNIX.',

	'MAX_SEARCH_CHARS'						=> 'Número de caracteres máximo para indexar',
	'MAX_SEARCH_CHARS_EXPLAIN'				=> 'As palabras que excedan este tamaño non se indexarán.',
	'MAX_NUM_SEARCH_KEYWORDS'				=> 'Número máximo de palabras chave permitidas',
	'MAX_NUM_SEARCH_KEYWORDS_EXPLAIN'		=> 'Número máximo de palabras que pode procurar un usuario. Pon 0 para non ter límite.',
	'MIN_SEARCH_CHARS'						=> 'Número de caracteres mínimo para indexar',
	'MIN_SEARCH_CHARS_EXPLAIN'				=> 'As palabras que excedan este menos destes caracteres non se indexarán.',
	'MIN_SEARCH_AUTHOR_CHARS'				=> 'Mínimo número de caracteres no nome do autor',
	'MIN_SEARCH_AUTHOR_CHARS_EXPLAIN'		=> 'Os usuarios deberán inserir como mínimo esta cantidade de caracteres cando fagan unha procura por autor empregando comodíns. Se o nome do autor é máis curto ca este número aínda poderás procurar as mensaxes do autor inserindo o seu nome completo.',

	'PROGRESS_BAR'							=> 'Barra de progreso',

	'SEARCH_GUEST_INTERVAL'					=> 'Intervalo de saturación (flood) para as procuras dos convidados',
	'SEARCH_GUEST_INTERVAL_EXPLAIN'			=> 'Número de segundos que os convidados deben agardar entre dúas procuras. Se un convidado fixo unha procura, os demais deberán agardar até que remate o intervalo de tempo.',
	'SEARCH_INDEX_CREATE_REDIRECT'			=> array(
		2	=> 'Indexáronse todas as mensaxes publicadas ata o id %2$d, das cales %1$d estaban neste paso.<br />',
	),
	'SEARCH_INDEX_CREATE_REDIRECT_RATE'		=> array(
		2	=> 'O ratio de indexación é de aproximadamente %1$.1f mensaxes por segundo.<br />Indexación en proceso…',
	),
	'SEARCH_INDEX_DELETE_REDIRECT'			=> array(
		2	=> 'Todas as mensaxes publicadas ata o id %2$d foron eliminadas do índice de procura, das cales %1$d estaban neste paso',
	),
	'SEARCH_INDEX_DELETE_REDIRECT_RATE'		=> array(
		2	=> 'O ratio de borrado é de aproximadamente %1$.1f mensaxes por segundo.<br />Borrado en progreso…',
	),
	'SEARCH_INDEX_CREATED'					=> 'Indexadas correctamente todas as mensaxes na base de datos.',
	'SEARCH_INDEX_REMOVED'					=> 'Eliminado correctamente o índice de procura deste servidor.',
	'SEARCH_INTERVAL'						=> 'Intervalo de saturación (flood) para procuras de usuarios',
	'SEARCH_INTERVAL_EXPLAIN'				=> 'Número de segundos que os usuarios deben agardar entre procuras. Este intervalo é verificado de xeito independente para cada usuario.',
	'SEARCH_STORE_RESULTS'					=> 'Buscar resultado en toda a caché',
	'SEARCH_STORE_RESULTS_EXPLAIN'			=> 'A caché de resultados de procura expirará despois deste tempo, en segundos. Escolle 0 se queres desactivar a caché.',
	'SEARCH_TYPE'							=> 'Servidor de procuras',
	'SEARCH_TYPE_EXPLAIN'					=> 'phpBB permíteche escoller o servidor empregado para facer procuras de texto no contido das mensaxes. De xeito predeterminado, a procura empregará o método de texto completo propio de phpBB.',
	'SWITCHED_SEARCH_BACKEND'				=> 'Cambiaches o servidor de procuras. Para usar o novo asegúrate que existe un índice para o sistema escollido.',

	'TOTAL_WORDS'							=> 'Número total de palabras indexadas',
	'TOTAL_MATCHES'							=> 'Indexado número total de palabras relacionadas co comentario',

	'YES_SEARCH'							=> 'Activar facilidades de procura',
	'YES_SEARCH_EXPLAIN'					=> 'Activar funcionalidade de recoñecemento de usuario, incluíndo procura de membros.',
	'YES_SEARCH_UPDATE'						=> 'Activar actualización de texto completo',
	'YES_SEARCH_UPDATE_EXPLAIN'				=> 'Actualización de índices de texto completo ao enviar mensaxes, anúlase se a procura está desactivada.',
));