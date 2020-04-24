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

// Common
$lang = array_merge($lang, array(
	'ACP_ADMINISTRATORS'		=> 'Administradores',
	'ACP_ADMIN_LOGS'			=> 'Rexistro (log) de administración',
	'ACP_ADMIN_ROLES'			=> 'Roles de administración',
	'ACP_ATTACHMENTS'			=> 'Adxuntos',
	'ACP_ATTACHMENT_SETTINGS'	=> 'Configuración de adxuntos',
	'ACP_AUTH_SETTINGS'			=> 'Autenticación',
	'ACP_AUTOMATION'			=> 'Automatización',
	'ACP_AVATAR_SETTINGS'		=> 'Configuración de avatares',

	'ACP_BACKUP'				=> 'Copia de respaldo',
	'ACP_BAN'					=> 'Prohibicións',
	'ACP_BAN_EMAILS'			=> 'Prohibir correos',
	'ACP_BAN_IPS'				=> 'Prohibir IPs',
	'ACP_BAN_USERNAMES'			=> 'Prohibir acceso a usuarios',
	'ACP_BBCODES'				=> 'BBCodes',
	'ACP_BOARD_CONFIGURATION'	=> 'Configuración do sitio',
	'ACP_BOARD_FEATURES'		=> 'Funcionalidades do sitio',
	'ACP_BOARD_MANAGEMENT'		=> 'Xestión do sitio',
	'ACP_BOARD_SETTINGS'		=> 'Axustes do sitio',
	'ACP_BOTS'					=> 'Spiders/Robots',

	'ACP_CAPTCHA'				=> 'CAPTCHA',

	'ACP_CAT_CUSTOMISE'			=> 'Personalizar',
	'ACP_CAT_DATABASE'			=> 'Base de datos',
	'ACP_CAT_DOT_MODS'			=> 'Extensións',
	'ACP_CAT_FORUMS'			=> 'Foros',
	'ACP_CAT_GENERAL'			=> 'Xeral',
	'ACP_CAT_MAINTENANCE'		=> 'Mantemento',
	'ACP_CAT_PERMISSIONS'		=> 'Permisos',
	'ACP_CAT_POSTING'			=> 'Publicando',
	'ACP_CAT_STYLES'			=> 'Estilos',
	'ACP_CAT_SYSTEM'			=> 'Sistema',
	'ACP_CAT_USERGROUP'			=> 'Usuarios e Grupos',
	'ACP_CAT_USERS'				=> 'Usuarios',
	'ACP_CLIENT_COMMUNICATION'	=> 'Comunicación do cliente',
	'ACP_COOKIE_SETTINGS'		=> 'Configuracións das cookies',
	'ACP_CONTACT'				=> 'Páxina de contacto',
	'ACP_CONTACT_SETTINGS'		=> 'Configuración da páxina de contacto',
	'ACP_CRITICAL_LOGS'			=> 'Rexistro (log) de erros',
	'ACP_CUSTOM_PROFILE_FIELDS'	=> 'Campos do perfil á medida',

	'ACP_DATABASE'				=> 'Xestión de bases de datos',
	'ACP_DISALLOW'				=> 'Impedir',
	'ACP_DISALLOW_USERNAMES'	=> 'Prohibir nomes de usuario',

	'ACP_EMAIL_SETTINGS'		=> 'Configuración do Correo-e',
	'ACP_EXTENSION_GROUPS'		=> 'Xestionar extensión dos grupos',
	'ACP_EXTENSION_MANAGEMENT'	=> 'Xestión de extensións',
	'ACP_EXTENSIONS'			=> 'Xestionar extensións',

	'ACP_FORUM_BASED_PERMISSIONS'	=> 'Permisos baseados no foro',
	'ACP_FORUM_LOGS'				=> 'Rexistros (logs) do foro',
	'ACP_FORUM_MANAGEMENT'			=> 'Administración de foros',
	'ACP_FORUM_MODERATORS'			=> 'Moderadores do foro',
	'ACP_FORUM_PERMISSIONS'			=> 'Permisos do foros',
	'ACP_FORUM_PERMISSIONS_COPY'	=> 'Copiar permisos do foro',
	'ACP_FORUM_ROLES'				=> 'Roles no foro',

	'ACP_GENERAL_CONFIGURATION'		=> 'Configuración xeral',
	'ACP_GENERAL_TASKS'				=> 'Tarefas xerais',
	'ACP_GLOBAL_MODERATORS'			=> 'Moderadores globáis',
	'ACP_GLOBAL_PERMISSIONS'		=> 'Permisos globáis',
	'ACP_GROUPS'					=> 'Grupos',
	'ACP_GROUPS_FORUM_PERMISSIONS'	=> 'Permisos de grupo no foro',
	'ACP_GROUPS_MANAGE'				=> 'Xestionar grupos',
	'ACP_GROUPS_MANAGEMENT'			=> 'Xestión de grupos',
	'ACP_GROUPS_PERMISSIONS'		=> 'Permisos dos grupos',
	'ACP_GROUPS_POSITION'			=> 'Xestiona as posicións no grupo',

	'ACP_HELP_PHPBB'			=> 'Axuda a phpBB',

	'ACP_ICONS'					=> 'Iconas de tema',
	'ACP_ICONS_SMILIES'			=> 'Iconas/emoticonas de tema',
	'ACP_INACTIVE_USERS'		=> 'Usuarios inactivos',
	'ACP_INDEX'					=> 'Índice do PCA (Panel de Control do Administrador)',

	'ACP_JABBER_SETTINGS'		=> 'Configuración de Jabber',

	'ACP_LANGUAGE'				=> 'Xestión de idiomas',
	'ACP_LANGUAGE_PACKS'		=> 'Paquetes de idioma',
	'ACP_LOAD_SETTINGS'			=> 'Opcións de carga',
	'ACP_LOGGING'				=> 'Iniciando sesión',

	'ACP_MAIN'					=> 'Índice do P.C. do Administrador',

	'ACP_MANAGE_ATTACHMENTS'			=> 'Xestiona adxuntos',
	'ACP_MANAGE_ATTACHMENTS_EXPLAIN'	=> 'Aquí podes atopar e eliminar os arquivos adxuntos das mensaxes, tanto do foro coma nas privadas.',

	'ACP_MANAGE_EXTENSIONS'		=> 'Administración de extensións para adxuntos',
	'ACP_MANAGE_FORUMS'			=> 'Administración de foros',
	'ACP_MANAGE_RANKS'			=> 'Administración de rangos',
	'ACP_MANAGE_REASONS'		=> 'Administración de denuncias e denegacións',
	'ACP_MANAGE_USERS'			=> 'Administración de usuarios',
	'ACP_MASS_EMAIL'			=> 'Correo masivo',
	'ACP_MESSAGES'				=> 'Mensaxes',
	'ACP_MESSAGE_SETTINGS'		=> 'Configuración de mensaxes privadas',
	'ACP_MODULE_MANAGEMENT'		=> 'Administración de módulos',
	'ACP_MOD_LOGS'				=> 'Rexistro (log) do moderador',
	'ACP_MOD_ROLES'				=> 'Roles do moderador',

	'ACP_NO_ITEMS'				=> 'Aínda non hai elementos.',

	'ACP_ORPHAN_ATTACHMENTS'	=> 'Adxuntos orfos',

	'ACP_PERMISSIONS'			=> 'Permisos',
	'ACP_PERMISSION_MASKS'		=> 'Máscaras de permisos',
	'ACP_PERMISSION_ROLES'		=> 'Roles para permisos',
	'ACP_PERMISSION_TRACE'		=> 'Traza de permisos',
	'ACP_PHP_INFO'				=> 'Información de PHP',
	'ACP_POST_SETTINGS'			=> 'Configuración das mensaxes',
	'ACP_PRUNE_FORUMS'			=> 'Purgar foros',
	'ACP_PRUNE_USERS'			=> 'Purgar usuarios',
	'ACP_PRUNING'				=> 'Purgando',

	'ACP_QUICK_ACCESS'			=> 'Acceso rápido',

	'ACP_RANKS'					=> 'Rangos',
	'ACP_REASONS'				=> 'Denuncias e denegacións',
	'ACP_REGISTER_SETTINGS'		=> 'Configuración de rexistro de usuario',

	'ACP_RESTORE'				=> 'Restaurar',

	'ACP_FEED'					=> 'Xestión do fluxo',
	'ACP_FEED_SETTINGS'			=> 'Configuración do fluxo',

	'ACP_SEARCH'				=> 'Configuración da procura',
	'ACP_SEARCH_INDEX'			=> 'Índice da procura',
	'ACP_SEARCH_SETTINGS'		=> 'Opcións da procura',

	'ACP_SECURITY_SETTINGS'		=> 'Opcións de seguridade',
	'ACP_SERVER_CONFIGURATION'	=> 'Configuración do servidor',
	'ACP_SERVER_SETTINGS'		=> 'Opcións do servidor',
	'ACP_SIGNATURE_SETTINGS'	=> 'Opcións de sinatura',
	'ACP_SMILIES'				=> 'Emoticonas',
	'ACP_STYLE_MANAGEMENT'		=> 'Xestión de estilos',
	'ACP_STYLES'				=> 'Estilos',
	'ACP_STYLES_CACHE'			=> 'Purgar caché',
	'ACP_STYLES_INSTALL'		=> 'Instalar estilos',

	'ACP_SUBMIT_CHANGES'		=> 'Enviar trocos',

	'ACP_TEMPLATES'				=> 'Modelos',
	'ACP_THEMES'				=> 'Temas',

	'ACP_UPDATE'					=> 'Actualizando',
	'ACP_USERS_FORUM_PERMISSIONS'	=> 'Permisos de usuario para foro',
	'ACP_USERS_LOGS'				=> 'Rexistro (log) de usuario',
	'ACP_USERS_PERMISSIONS'			=> 'Permisos de usuario',
	'ACP_USER_ATTACH'				=> 'Adxuntos',
	'ACP_USER_AVATAR'				=> 'Avatar',
	'ACP_USER_FEEDBACK'				=> 'Comentarios (feedback)',
	'ACP_USER_GROUPS'				=> 'Grupos',
	'ACP_USER_MANAGEMENT'			=> 'Administración de usuarios',
	'ACP_USER_OVERVIEW'				=> 'Resumo',
	'ACP_USER_PERM'					=> 'Permisos',
	'ACP_USER_PREFS'				=> 'Preferencias',
	'ACP_USER_PROFILE'				=> 'Perfil',
	'ACP_USER_RANK'					=> 'Rango',
	'ACP_USER_ROLES'				=> 'Roles do usuario',
	'ACP_USER_SECURITY'				=> 'Seguridade do usuario',
	'ACP_USER_SIG'					=> 'Sinatura',
	'ACP_USER_WARNINGS'				=> 'Advertencias',

	'ACP_VC_SETTINGS'					=> 'Medidas contra spambots',
	'ACP_VC_CAPTCHA_DISPLAY'			=> 'Previsualización da imaxe CAPTCHA',
	'ACP_VERSION_CHECK'					=> 'Comprobar a existencia de actualizacións',
	'ACP_VIEW_ADMIN_PERMISSIONS'		=> 'Ver permisos administrativos',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS'	=> 'Ver permisos para moderar o foro',
	'ACP_VIEW_FORUM_PERMISSIONS'		=> 'Ver permisos baseados no foro',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS'	=> 'Ver permisos de moderación globáis',
	'ACP_VIEW_USER_PERMISSIONS'			=> 'Ver permisos baseados no usuario',

	'ACP_WORDS'					=> 'Censura de palabras',

	'ACTION'				=> 'Acción',
	'ACTIONS'				=> 'Accións',
	'ACTIVATE'				=> 'Activar',
	'ADD'					=> 'Engadir',
	'ADMIN'					=> 'Administración',
	'ADMIN_INDEX'			=> 'Índice de administración',
	'ADMIN_PANEL'			=> 'Panel de Control de Administración',

	'ADM_LOGOUT'			=> 'Pechar sesión PCA',
	'ADM_LOGGED_OUT'		=> 'Sesión finalizada no Panel de Control da Administración (PCA)',

	'BACK'					=> 'Atrás',

	'CONTAINER_EXCEPTION' => 'phpBB atopou un problema construíndo o contenedor debido a unha extensión instalada. Por isto, desactiváronse todas as extensións. Por favor trata de purgar a caché. Todas as extensións reactivaranse automaticamente toda vez o erro se resolva. Se este erro persiste, por favor visita <a href="https://www.phpbb.com/support">phpBB.com</a> para atopar axuta.',
	'EXCEPTION' => 'Excepción',

	'COLOUR_SWATCH'			=> 'Mostra de cor segura para web',
	'CONFIG_UPDATED'		=> 'Configuración actualizada con éxito',
	'CRON_LOCK_ERROR'		=> 'Non se puido obter o bloqueo para a tarefa programada.',
	'CRON_NO_SUCH_TASK'		=> 'Non se puido atopar a tarefa programada “%s”.',
	'CRON_NO_TASK'			=> 'Non se precisa lanzar ningunha tarefa programada agora mesmo.',
	'CRON_NO_TASKS'			=> 'Non se atopou tarefa programada ningunha.',
	'CURRENT_VERSION'		=> 'Versión actual',

	'DEACTIVATE'				=> 'Desactivar',
	'DIRECTORY_DOES_NOT_EXIST'	=> 'A ruta "%s" non existe',
	'DIRECTORY_NOT_DIR'			=> 'A ruta "%s" non é un directorio.',
	'DIRECTORY_NOT_WRITABLE'	=> 'A ruta "%s" non ten permisos para escritura',
	'DISABLE'					=> 'Deshabilitar',
	'DOWNLOAD'					=> 'Descargar',
	'DOWNLOAD_AS'				=> 'Descargar como',
	'DOWNLOAD_STORE'			=> 'Descargar ou almacenar ficheiro',
	'DOWNLOAD_STORE_EXPLAIN'	=> 'Podes descargar o arquivo directamente ou gardalo no directorio <samp>store/</samp> do servidor.',
	'DOWNLOADS'					=> 'Descargas',

	'EDIT'					=> 'Editar',
	'ENABLE'				=> 'Habilitar',
	'EXPORT_DOWNLOAD'		=> 'Descargar',
	'EXPORT_STORE'			=> 'Almacenar',

	'GENERAL_OPTIONS'		=> 'Opcións xeráis',
	'GENERAL_SETTINGS'		=> 'Axustes xeráis',
	'GLOBAL_MASK'			=> 'Máscara de permisos global',

	'INSTALL'				=> 'Instalar',
	'IP'					=> 'IP do usuario',
	'IP_HOSTNAME'			=> 'Enderezos IP ou hosts',

	'LATEST_VERSION'		=> 'Última versión',
	'LOAD_NOTIFICATIONS'			=> 'Amosar Notificacións',
	'LOAD_NOTIFICATIONS_EXPLAIN'	=> 'Amosa as lista de notificacións en cada páxina (típicamente na cabeceira).',
	'LOGGED_IN_AS'			=> 'Iniciaches sesión como:',
	'LOGIN_ADMIN'			=> 'Para acceder á administración debes estar autenticado.',
	'LOGIN_ADMIN_CONFIRM'	=> 'Para acceder á administración debes autenticarte de novo.',
	'LOGIN_ADMIN_SUCCESS'	=> 'Fuches autenticado correctamente e agora serás redireccionado ao Panel de Control da Administración',
	'LOOK_UP_FORUM'			=> 'Selecciona un foro',
	'LOOK_UP_FORUMS_EXPLAIN'=> 'Podes seleccionar máis dun foro.',

	'MANAGE'				=> 'Xestionar',
	'MENU_TOGGLE'			=> 'Agochar ou amosar o menú lateral',
	'MORE'					=> 'Máis',			// Not used at the moment
	'MORE_INFORMATION'		=> 'Máis información »',
	'MOVE_DOWN'				=> 'Baixar',
	'MOVE_UP'				=> 'Subir',

	'NOTIFY'				=> 'Notificación',
	'NO_ADMIN'				=> 'Non estás autorizado a administrar este sitio.',
	'NO_EMAILS_DEFINED'		=> 'Non se atoparon enderezos de correo válidos',
	'NO_FILES_TO_DELETE'	=> 'Os adxuntos que marcaches para eliminar non existen.',
	'NO_PASSWORD_SUPPLIED'	=> 'Tes que inserir o teu contrasinal para poderes acceder ao Panel de Control da Administración.',	

	'OFF'					=> 'Desactivado',
	'ON'					=> 'Activado',

	'PARSE_BBCODE'						=> 'Procesar BBCode',
	'PARSE_SMILIES'						=> 'Procesar emoticonas',
	'PARSE_URLS'						=> 'Procesar ligazóns',
	'PERMISSIONS_TRANSFERRED'			=> 'Permisos transferidos',
	'PERMISSIONS_TRANSFERRED_EXPLAIN'	=> 'Agora mesmo estás empregando os permisos de %1$s. Podes navegar no foro cos permisos deste usuario pero non podes acceder ao Panel de Control de Administración xa que non se transferiron os permisos de administración. Podes <a href="%2$s"><strong>volver á túa configuración de permisos</strong></a> en calquera momento.',
	'PROCEED_TO_ACP'					=> '%sIr ao Panel de Control de Administración%s',

	'RELEASE_ANNOUNCEMENT'		=> 'Anuncio',
	'REMIND'							=> 'Lembrar',
	'REPARSE_LOCK_ERROR'				=> 'O procesado xa está en marcha por outro proceso.',
	'RESYNC'							=> 'Sincronizar de novo',

	'RUNNING_TASK'			=> 'Executando tarefa: %s.',
	'SELECT_ANONYMOUS'		=> 'Seleccionar usuario anónimo',
	'SELECT_OPTION'			=> 'Escolle opción',

	'SETTING_TOO_LOW'		=> 'O valor inserido para o axuste “%1$s” é pequeno de máis. O valor mínimo permitido é %2$d.',
	'SETTING_TOO_BIG'		=> 'O valor inserido para o axuste “%1$s” é grande de máis. O valor máximo permitido é %2$d.',
	'SETTING_TOO_LONG'		=> 'O valor inserido para o axuste “%1$s” é longo de máis. A lonxitude máxima permitida é %2$d.',
	'SETTING_TOO_SHORT'		=> 'O valor inserido para o axuste “%1$s” é curto de máis. A lonxitude mínima permitida é %2$d.',

	'SHOW_ALL_OPERATIONS'	=> 'Amosar todas as operacións',

	'TASKS_NOT_READY'			=> 'Tarefas que non están listas:',
	'TASKS_READY'			=> 'Tarefas listas:',
	'TOTAL_SIZE'			=> 'Tamaño total',

	'UCP'					=> 'Panel de Control do Usuario',
	'URL_INVALID'			=> 'A URL proporcionada para o axuste “%1$s” non é válida.',
	'USERNAMES_EXPLAIN'		=> 'Pon cada nome de usuario nunha liña distinta',
	'USER_CONTROL_PANEL'	=> 'Panel de Control do Usuario',

	'UPDATE_NEEDED'			=> 'O sistema está desactualizado.',
	'UPDATE_NOT_NEEDED'		=> 'O sistema está ao día.',
	'UPDATES_AVAILABLE'		=> 'Actualizacións dispoñibles:',

	'WARNING'				=> 'Advertencia',
));

// PHP info
$lang = array_merge($lang, array(
	'ACP_PHP_INFO_EXPLAIN'	=> 'Esta páxina proporciona información da versión de PHP instalada no servidor. Inclúe detalles dos módulos cargados, variables dispoñíbeis e axustes por defecto. Esta información pode ser útil para diagnosticar problemas. Ten en conta que algunhas compañías de hospedaxe web limitarán a información que se amose aquí por motivos de seguridade. Recoméndase non dar detalles dos datos desta páxina agás cando sexan preguntados polo servizo de soporte ou por membros do <a href="https://www.phpbb.com/about/team/">equipo oficial de phpBB</a> nos foros de soporte.',

	'NO_PHPINFO_AVAILABLE'	=> 'No se puido determinar a túa configuración de PHP. A función phpinfo() foi deshabilitada por motivos de seguridade.',
));

// Logs
$lang = array_merge($lang, array(
	'ACP_ADMIN_LOGS_EXPLAIN'	=> 'Aquí lístanse as accións levadas a cabo polos administradores. Podes ordenalas por usuario, data, IP ou acción. Se tes os permisos axeitados tamén podes eliminar operacións individuais ou o rexistro completo.',
	'ACP_CRITICAL_LOGS_EXPLAIN'	=> 'Aquí lístanse as accións levadas a cabo polo propio sistema. Este rexistro proporciónache información que podes usar para arranxar problemas específicos, coma por exemplo correos non enviados. Podes ordenar por nome de usuario, data, IP ou acción. Se tes os permisos axeitados tamén podes borrar as operacións individuais ou o rexistro completo.',
	'ACP_MOD_LOGS_EXPLAIN'		=> 'Aquí lístanse as accións levadas a cabo polos moderadores nos foros e mensaxes, así como as accións levadas a cabo cos usuarios, incluíndo as prohibicións. Podes ordenar por nome de usuario, data, IP ou acción. Se tes os permisos axeitados tamén podes borrar accións individuais ou o rexistro completo.',
	'ACP_USERS_LOGS_EXPLAIN'	=> 'Aquí lístanse todas as accións realizadas por usuarios ou a usuarios (denunias, advertencias e notas).',
	'ALL_ENTRIES'				=> 'Todas as entradas',

	'DISPLAY_LOG'	=> 'Visualizar entradas dende as previas',

	'NO_ENTRIES'	=> 'Non hai entradas no rexistro (log) para este período',

	'SORT_IP'		=> 'Enderezo IP',
	'SORT_DATE'		=> 'Data',
	'SORT_ACTION'	=> 'Acción de rexistro',
));

// Index page
$lang = array_merge($lang, array(
	'ADMIN_INTRO'				=> 'Moitas grazas por elixir o phpBB para os teus foros. Esta pantalla amosarache un rápido resumo das diversas estatísticas do teu sistema. As ligazóns da parte esquerda da pantalla permitiranche controlar todos os axustes. Cada páxina terá instrucións sobre como usar as ferramentas correspondentes.',
	'ADMIN_LOG'					=> 'Acción de administrador rexistrado',
	'ADMIN_LOG_INDEX_EXPLAIN'	=> 'Aquí pode obter unha vista das últimas cinco accións levadas a cabo polos administradores. Unha copia completa do rexistro pódese ver desde o elemento apropiado do menú ou seguindo a ligazón de embaixo.',
	'AVATAR_DIR_SIZE'			=> 'Tamaño do directorio para os avatares',

	'BOARD_STARTED'		=> 'Sistema iniciado',
	'BOARD_VERSION'		=> 'Versión do sistema',

	'DATABASE_SERVER_INFO'	=> 'Servidor da base de datos',
	'DATABASE_SIZE'			=> 'Tamaño da base de datos',

	// Environment configuration checks, mbstring related
	'ERROR_MBSTRING_FUNC_OVERLOAD'					=> 'A sobrecarga de funcións non está configurada correctamente',
	'ERROR_MBSTRING_FUNC_OVERLOAD_EXPLAIN'			=> 'Debe configurarse <var>mbstring.func_overload</var> cun valor de 0 ou 4. Podes verificar o valor actual na páxina de <samp>información de PHP</samp>.',
	'ERROR_MBSTRING_ENCODING_TRANSLATION'			=> 'A codificación de caracteres transparente non está configurada correctamente',
	'ERROR_MBSTRING_ENCODING_TRANSLATION_EXPLAIN'	=> 'Debe configurarse <var>mbstring.encoding_translation</var> cun valor de 0. Podes verificar o valor actual na páxina de <samp>información de PHP</samp>.',
	'ERROR_MBSTRING_HTTP_INPUT'						=> 'A conversión de caracteres HTTP de entrada non está configurada correctamente',
	'ERROR_MBSTRING_HTTP_INPUT_EXPLAIN'				=> 'Debe configurarse <var>mbstring.http_input</var> co valor <samp>pass</samp>. Podes verificar o valor actual na páxina de <samp>información de PHP</samp>.',
	'ERROR_MBSTRING_HTTP_OUTPUT'					=> 'A conversión de caracteres HTTP de saída non está configurada correctamente',
	'ERROR_MBSTRING_HTTP_OUTPUT_EXPLAIN'			=> 'debe configurarse <var>mbstring.http_output</var> co valor <samp>pass</samp>. Podes verificar o valor actual na páxina de <samp>información de PHP</samp>.',

	'FILES_PER_DAY'		=> 'Anexos por día',
	'FORUM_STATS'		=> 'Estatísticas xeráis',

	'GZIP_COMPRESSION'	=> 'Compresión GZip',

	'NO_SEARCH_INDEX'	=> 'O backend de procuras seleccionado non ten un indice.<br />Por favor crea un índice para “%1$s” na sección %2$síndice de procutas%3$s.',
	'NOT_AVAILABLE'		=> 'Non dispoñible',
	'NUMBER_FILES'		=> 'Número de adxuntos',
	'NUMBER_POSTS'		=> 'Número de mensaxes',
	'NUMBER_TOPICS'		=> 'Número de temas',
	'NUMBER_USERS'		=> 'Número de usuarios',
	'NUMBER_ORPHAN'		=> 'Anexos orfos',

	'PHP_VERSION'		=> 'Versión de PHP',
	'PHP_VERSION_OLD'	=> 'A versión de  PHP que hai instalada neste servidor (%1$s) non vai ser soportada en futuras versións do phpBB. A versión mínima requirida será a %2$s. %3$sDetalles%4$s',

	'POSTS_PER_DAY'		=> 'Mensaxes por día',

	'PURGE_CACHE'			=> 'Purgar a caché',
	'PURGE_CACHE_CONFIRM'	=> 'Estás seguro de querer purgar a caché?',
	'PURGE_CACHE_EXPLAIN'	=> 'Purgar todos os elementos relacionados coa caché, incluídos calquera arquivo de modelos ou peticións.',
	'PURGE_CACHE_SUCCESS'	=> 'Caché purgada correctamente.',

	'PURGE_SESSIONS'			=> 'Purgar todas as sesións',
	'PURGE_SESSIONS_CONFIRM'	=> 'Estás seguro de querer purgar todas as sesións? Isto forzará o remate das sesións de todos os usuarios.',
	'PURGE_SESSIONS_EXPLAIN'	=> 'Purga todas as sesións. Isto forzará o remate de todas as sesións dos usuarios truncando a táboa de sesións.',
	'PURGE_SESSIONS_SUCCESS'	=> 'Sesións purgadas correctamente.',

	'RESET_DATE'					=> 'Reiniciar data de inicio',
	'RESET_DATE_CONFIRM'			=> 'Estás seguro de querer reiniciar a data de inicio do sitio?',
	'RESET_DATE_SUCCESS'				=> 'Data de inicio do foro reiniciada',
	'RESET_ONLINE'					=> 'Reiniciar contador de usuarios conectados',
	'RESET_ONLINE_CONFIRM'			=> 'Estas seguro de querer reiniciar o contador da maior cantidade de usuarios conectados?',
	'RESET_ONLINE_SUCCESS'				=> 'Contador da maior cantidade de usuarios conectados reiniciado',
	'RESYNC_POSTCOUNTS'				=> 'Sincronizar contadores de mensaxes',
	'RESYNC_POSTCOUNTS_EXPLAIN'		=> 'Só se considerarán as mensaxes publicadas actualmente. Non se contarán as mensaxes purgadas.',
	'RESYNC_POSTCOUNTS_CONFIRM'		=> 'Estás seguro de querer sincronizar o contador de mensaxes?',
	'RESYNC_POSTCOUNTS_SUCCESS'			=> 'Sincronizado contador de mensaxes',
	'RESYNC_POST_MARKING'			=> 'Recalcula os temas marcados',
	'RESYNC_POST_MARKING_CONFIRM'	=> 'Estás certo de querer sincronizar os temas marcados?',
	'RESYNC_POST_MARKING_EXPLAIN'	=> 'Primeiro tira a marca do todos os temas e logo marca correctamente aqueles que rexistraron algunha actividade nos últimos seis meses.',
	'RESYNC_POST_MARKING_SUCCESS'	=> 'Sincronizados temas marcados',
	'RESYNC_STATS'					=> 'Sincronizar estatísticas',
	'RESYNC_STATS_CONFIRM'			=> 'Estás seguro de querer sincronizar as estatísticas?',
	'RESYNC_STATS_EXPLAIN'			=> 'Recalcula o número total de mensaxes, temas, usuarios e arquivos.',
	'RESYNC_STATS_SUCCESS'			=> 'estatísticas sincronizadas',
	'RUN'							=> 'Executar agora',

	'STATISTIC'					=> 'Estatística',
	'STATISTIC_RESYNC_OPTIONS'	=> 'Sincronizar ou reiniciar estatísticas',

	'TIMEZONE_INVALID'	=> 'A zona horaria que seleccionaches é inválida.',
	'TIMEZONE_SELECTED'	=> '(seleccionada actualmente)',
	'TOPICS_PER_DAY'	=> 'Temas por día',

	'UPLOAD_DIR_SIZE'	=> 'Tamaño de anexos enviados',
	'USERS_PER_DAY'		=> 'Usuarios por día',

	'VALUE'							=> 'Valor',
	'VERSIONCHECK_FAIL'				=> 'Non se puido obter a información da última versión.',
	'VERSIONCHECK_FORCE_UPDATE'		=> 'Comprobar versión de novo',
	'VERSION_CHECK'					=> 'Comprobación de versión',
	'VERSION_CHECK_EXPLAIN'			=> 'Comproba se a túa instalación de phpBB está ao día.',
	'VERSIONCHECK_INVALID_ENTRY'	=> 'A información da última versión contén unha entrada non soportada.',
	'VERSIONCHECK_INVALID_URL'		=> 'A información da última versión contén unha URL non válida.',
	'VERSIONCHECK_INVALID_VERSION'	=> 'A información da última versión contén unha versión non válida.',
	'VERSION_NOT_UP_TO_DATE_ACP'	=> 'A túa instalación de phpBB installation está desactualizada.<br />Embaixo tes un enlace ao anuncio de lanzamento, que contén máis información así como instruccións para actualizarte.',
	'VERSION_NOT_UP_TO_DATE_TITLE'	=> 'A túa instalación de phpBB installation está desactualizada.',
	'VERSION_UP_TO_DATE_ACP'		=> 'A túa instalación de phpBB installation está ao día. De momento non hai máis actualizacións dispoñibles.',
	'VIEW_ADMIN_LOG'				=> 'Ver rexistro (log) do administrador',
	'VIEW_INACTIVE_USERS'			=> 'Ver usuarios inactivos',

	'WELCOME_PHPBB'			=> 'Benvido a phpBB',
	'WRITABLE_CONFIG'		=> 'O teu arquivo de configuración (config.php) ten actualmente permisos de escritura para todo o mundo. Recomendámosche encarecidamente que mudes os permisos a 640 ou, polo menos, a 644 (por exemplo: <a href="http://en.wikipedia.org/wiki/Chmod" rel="external">chmod</a> 640 config.php).',
));

// Inactive Users
$lang = array_merge($lang, array(
	'INACTIVE_DATE'					=> 'Data de inactividade',
	'INACTIVE_REASON'				=> 'Motivo',
	'INACTIVE_REASON_MANUAL'		=> 'Conta desactivada polo administrador',
	'INACTIVE_REASON_PROFILE'		=> 'Trocos no perfil',
	'INACTIVE_REASON_REGISTER'		=> 'Contas rexistradas recentemente',
	'INACTIVE_REASON_REMIND'		=> 'Forzada reactivación da conta do usuario',
	'INACTIVE_REASON_UNKNOWN'		=> 'Descoñecido',
	'INACTIVE_USERS'				=> 'Usuarios inactivos',
	'INACTIVE_USERS_EXPLAIN'		=> 'Isto é unha listaxe de usuarios que se rexistraron pero cuxas contas están inactivas. Podes activalos, borralos ou lembrarlles que teñen a activación pendente (enviándolles un correo).',
	'INACTIVE_USERS_EXPLAIN_INDEX'	=> 'Esta é unha listaxe dos dez últimos usuarios rexistrados que teñen contas inactivas. Un usuario está inactivo ben porque se configurou a activación de contas e o usuario aínda non a activou, ou ben porque foi desactivado. Tes dispoñible unha listaxe completa dende o elemento apropiado do menú ou seguindo a ligazón de embaixo onde podes activar, eliminar ou avisar (por correo) a estes usuarios.',

	'NO_INACTIVE_USERS'	=> 'Ningún usuario inactivo',

	'SORT_INACTIVE'		=> 'Data de inactividade',
	'SORT_LAST_VISIT'	=> 'Última visita',
	'SORT_REASON'		=> 'Motivo',
	'SORT_REG_DATE'		=> 'Data de rexistro',
	'SORT_LAST_REMINDER'=> 'Lembrado por última vez',
	'SORT_REMINDER'		=> 'Lembranza enviada',

	'USER_IS_INACTIVE'		=> 'Usuario inactivo',
));

// Help support phpBB page
$lang = array_merge($lang, array(
	'EXPLAIN_SEND_STATISTICS'	=> 'Por favor, envía información relativa á configuración do teu servidor e do teu taboleiro para o phpBB con vistas á unha análise estatística. Toda a información que poida identificarte a ti ou ao teu sitio foi eliminada - os datos son completamente <strong>anónimos</strong>. As decisións sobre as futuras versións do phpBB baséanse nesta información e as estatísticas fanse públicas. Tamén se comparten estes datos co proxecto PHP, a linguaxe de programación coa que se desenvolve phpBB.',
	'EXPLAIN_SHOW_STATISTICS'	=> 'Empregando o seguinte botón podes previsualizar todas as variables que van ser transmitidas.',
	'DONT_SEND_STATISTICS'		=> 'Volve ao Panel de Control de Administración se non queres enviar información estatística a phpBB.',
	'GO_ACP_MAIN'				=> 'Ir á páxina de inicio do Panel de Control de Adminsitración',
	'HIDE_STATISTICS'			=> 'Agochar detalles',
	'SEND_STATISTICS'			=> 'Enviar estatísticas',
	'SEND_STATISTICS_LONG'		=> 'Enviar información estatística',
	'SHOW_STATISTICS'			=> 'Amosar detalles',
	'THANKS_SEND_STATISTICS'	=> 'Moitas grazas por enviar a túa información.',
	'FAIL_SEND_STATISTICS'		=> 'phpBB non puido enviar as estatísticas',
));

// Log Entries
$lang = array_merge($lang, array(
	'LOG_ACL_ADD_USER_GLOBAL_U_'		=> '<strong>Modificados permisos de usuario para usuarios</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_U_'		=> '<strong>Modificados permisos de usuario para grupos</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_M_'		=> '<strong>Modificados permisos de moderación global para usuarios</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_M_'		=> '<strong>Modificados permisos de moderación global para grupos</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_A_'		=> '<strong>Modificados permisos de administración para usuarios</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_A_'		=> '<strong>Modificados permisos de administración para grupos</strong><br />» %s',

	'LOG_ACL_ADD_ADMIN_GLOBAL_A_'		=> '<strong>Modificados administradores</strong><br />» %s',
	'LOG_ACL_ADD_MOD_GLOBAL_M_'			=> '<strong>Modificados moderadores globáis</strong><br />» %s',

	'LOG_ACL_ADD_USER_LOCAL_F_'			=> '<strong>Modificado acceso do usuario ao foro</strong> de %1$s<br />» %2$s',
	'LOG_ACL_ADD_USER_LOCAL_M_'			=> '<strong>Modificado acceso do usuario ao foro como moderador</strong> de %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_F_'		=> '<strong>Modificado acceso do grupo ao foro</strong> de %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_M_'		=> '<strong>Modificado acceso do grupo ao foro como moderador</strong> de %1$s<br />» %2$s',

	'LOG_ACL_ADD_MOD_LOCAL_M_'			=> '<strong>Modificados moderadores</strong> de %1$s<br />» %2$s',
	'LOG_ACL_ADD_FORUM_LOCAL_F_'		=> '<strong>Modificados permisos do foro</strong> %1$s<br />» %2$s',

	'LOG_ACL_DEL_ADMIN_GLOBAL_A_'		=> '<strong>Administradores eliminados</strong><br />» %s',
	'LOG_ACL_DEL_MOD_GLOBAL_M_'			=> '<strong>Moderadores globáis eliminados</strong><br />» %s',
	'LOG_ACL_DEL_MOD_LOCAL_M_'			=> '<strong>Moderadores eliminados</strong> de %1$s<br />» %2$',
	'LOG_ACL_DEL_FORUM_LOCAL_F_'		=> '<strong>Eliminados permisos no foro</strong> %1$s<br />» %2$s',

	'LOG_ACL_TRANSFER_PERMISSIONS'		=> '<strong>Permisos transferidos</strong><br />» %s',
	'LOG_ACL_RESTORE_PERMISSIONS'		=> '<strong>Permisos propios devoltos despois de utilizar permisos do usuario</strong><br />» %s',

	'LOG_ADMIN_AUTH_FAIL'		=> '<strong>Intento erróneo de acceso á administración</strong>',
	'LOG_ADMIN_AUTH_SUCCESS'	=> '<strong>Acceso correcto á administración</strong>',

	'LOG_ATTACHMENTS_DELETED'	=> '<strong>Adxuntos do usuario eliminados</strong><br />» %s',

	'LOG_ATTACH_EXT_ADD'		=> '<strong>Extensión adxunta engadida ou editada</strong><br />» %s',
	'LOG_ATTACH_EXT_DEL'		=> '<strong>Extensión adxunta eliminada</strong><br />» %s',
	'LOG_ATTACH_EXT_UPDATE'		=> '<strong>Extensión adxunta actualizada</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_ADD'	=> '<strong>Engadido grupo de extensión</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_EDIT'	=> '<strong>Editado grupo de extensión</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_DEL'	=> '<strong>Eliminado grupo de extensión</strong><br />» %s',
	'LOG_ATTACH_FILEUPLOAD'		=> '<strong>Ficheiro orfo transferido á mensaxe</strong><br />» ID %1$d - %2$s',
	'LOG_ATTACH_ORPHAN_DEL'		=> '<strong>Ficheiros orfos eliminados</strong><br />» %s',

	'LOG_BAN_EXCLUDE_USER'	=> '<strong>Usuario excluído das prohibicións</strong> polo motivo "<em>%1$s</em>"<br />» %2$s ',
	'LOG_BAN_EXCLUDE_IP'	=> '<strong>IP excluída das prohibicións</strong> polo motivo "<em>%1$s</em>"<br />» %2$s ',
	'LOG_BAN_EXCLUDE_EMAIL' => '<strong>Correo excluído das prohibicións</strong> polo motivo "<em>%1$s</em>"<br />» %2$s ',
	'LOG_BAN_USER'			=> '<strong>Prohibido acceso ao usuario</strong> polo motivo "<em>%1$s</em>"<br />» %2$s',
	'LOG_BAN_IP'			=> '<strong>IP prohibida</strong> polo motivo "<em>%1$s</em>"<br />» %2$s',
	'LOG_BAN_EMAIL'			=> '<strong>Correo prohibido</strong> pola razón "<em>%1$s</em>"<br />» %2$s',
	'LOG_UNBAN_USER'		=> '<strong>Levantada prohibición de acceso ao usuario</strong><br />» %s',
	'LOG_UNBAN_IP'			=> '<strong>Levantada prohibición da IP</strong><br />» %s',
	'LOG_UNBAN_EMAIL'		=> '<strong>Levantada prohibición do correo</strong><br />» %s',

	'LOG_BBCODE_ADD'		=> '<strong>Engadido novo BBCode</strong><br />» %s',
	'LOG_BBCODE_EDIT'		=> '<strong>BBCode editado</strong><br />» %s',
	'LOG_BBCODE_DELETE'		=> '<strong>BBCode eliminado</strong><br />» %s',
	'LOG_BBCODE_CONFIGURATION_ERROR'	=> '<strong>Erro configurando BBCode</strong>: %1$s<br />» %2$s',

	'LOG_BOT_ADDED'		=> '<strong>Engadido novo bot</strong><br />» %s',
	'LOG_BOT_DELETE'	=> '<strong>Bot eliminado</strong><br />» %s',
	'LOG_BOT_UPDATED'	=> '<strong>Actualizado bot existente</strong><br />» %s',

	'LOG_CLEAR_ADMIN'		=> '<strong>Rexistro (log) de administración borrado</strong>',
	'LOG_CLEAR_CRITICAL'	=> '<strong>Rexistro (log) de erros borrado</strong>',
	'LOG_CLEAR_MOD'			=> '<strong>Rexistro (log) do moderador borrado</strong>',
	'LOG_CLEAR_USER'		=> '<strong>Rexistro (log) de usuario borrado</strong><br />» %s',
	'LOG_CLEAR_USERS'		=> '<strong>Rexistros (log) de usuarios borrados</strong>',

	'LOG_CONFIG_ATTACH'			=> '<strong>Axustes de anexos modificada</strong>',
	'LOG_CONFIG_AUTH'			=> '<strong>Axustes de autenticación modificados</strong>',
	'LOG_CONFIG_AVATAR'			=> '<strong>Axustes de avatares modificados</strong>',
	'LOG_CONFIG_COOKIE'			=> '<strong>Axustes de cookies modificados</strong>',
	'LOG_CONFIG_EMAIL'			=> '<strong>Axustes de correos modificadas</strong>',
	'LOG_CONFIG_FEATURES'		=> '<strong>Funcionalidades modificadas</strong>',
	'LOG_CONFIG_LOAD'			=> '<strong>Axustes de carga modificados</strong>',
	'LOG_CONFIG_MESSAGE'		=> '<strong>Axustes de mensaxes privadas modificados</strong>',
	'LOG_CONFIG_POST'			=> '<strong>Axustes de mensaxes modificados</strong>',
	'LOG_CONFIG_REGISTRATION'	=> '<strong>Axustes do rexistro de usuario modificados</strong>',
	'LOG_CONFIG_FEED'			=> '<strong>Axustes de fluxos de sindicación modificados</strong>',
	'LOG_CONFIG_SEARCH'			=> '<strong>Axustes de procura modificados</strong>',
	'LOG_CONFIG_SECURITY'		=> '<strong>Axustes de seguridade modificados</strong>',
	'LOG_CONFIG_SERVER'			=> '<strong>Axustes de servidor modificados</strong>',
	'LOG_CONFIG_SETTINGS'		=> '<strong>Axustes do sitio modificados</strong>',
	'LOG_CONFIG_SIGNATURE'		=> '<strong>Axustes de sinatura modificados</strong>',
	'LOG_CONFIG_VISUAL'			=> '<strong>Axustes anti-spambot modificados</strong>',

	'LOG_APPROVE_TOPIC'			=> '<strong>Tema aprobado</strong><br />» %s',
	'LOG_BUMP_TOPIC'			=> '<strong>Tema reactivado por usuario</strong><br />» %s',
	'LOG_DELETE_POST'			=> '<strong>Eliminada a mensaxe “%1$s” escrita por %2$s pola seguinte razón</strong><br />» %3$s',
	'LOG_DELETE_SHADOW_TOPIC'	=> '<strong>Tema oculto eliminado</strong><br />» %s',
	'LOG_DELETE_TOPIC'			=> '<strong>Eliminado o tema “%1$s” escrito por %2$s pola seguinte razón</strong><br />» %3$s',
	'LOG_FORK'					=> '<strong>Tema copiado</strong><br />» de %s',
	'LOG_LOCK'					=> '<strong>Tema bloqueado</strong><br />» %s',
	'LOG_LOCK_POST'				=> '<strong>Mensaxe bloqueada</strong><br />» %s',
	'LOG_MERGE'					=> '<strong>Mensaxes fusionadas</strong> no tema<br />»%s',
	'LOG_MOVE'					=> '<strong>Tema movido</strong><br />» de %1$s a %2$s',
	'LOG_MOVED_TOPIC'			=> '<strong>Tema movido</strong><br />» %s',
	'LOG_PM_REPORT_CLOSED'		=> '<strong>Pechada denuncia sobre mensaxe privada</strong><br />» %s',
	'LOG_PM_REPORT_DELETED'		=> '<strong>Eliminada denuncia sobre mensaxe privada</strong><br />» %s',
	'LOG_POST_APPROVED'			=> '<strong>Mensaxe aprobada</strong><br />» %s',
	'LOG_POST_DISAPPROVED'		=> '<strong>Mensaxe “%1$s” escrita por %3$s rexeitada polo seguinte motivo</strong><br />» %2$s',
	'LOG_POST_EDITED'			=> '<strong>Editada mensaxe “%1$s” escrita por %2$s pola seguinte razón</strong><br />» %3$s',
	'LOG_POST_RESTORED'			=> '<strong>Mensaxe restaurada</strong><br />» %s',
	'LOG_REPORT_CLOSED'			=> '<strong>Informe pechado</strong><br />» %s',
	'LOG_REPORT_DELETED'		=> '<strong>Informe eliminado</strong><br />» %s',
	'LOG_RESTORE_TOPIC'			=> '<strong>Restaurado tema “%1$s” escrito por </strong><br />» %2$s',
	'LOG_SOFTDELETE_POST'		=> '<strong>Borrado brando da mensaxe “%1$s” escrito por “%2$s” pola seguinte razón</strong><br />» %3$s',
	'LOG_SOFTDELETE_TOPIC'		=> '<strong>Borrado brando do tema “%1$s” escrito por “%2$s” pola seguinte razón</strong><br />» %3$s',
	'LOG_SPLIT_DESTINATION'		=> '<strong>Mensaxes divididas movidas</strong><br />» a %s',
	'LOG_SPLIT_SOURCE'			=> '<strong>Mensaxes divididas</strong><br />» desde %s',

	'LOG_TOPIC_APPROVED'		=> '<strong>Tema aprobado</strong><br />» %s',
	'LOG_TOPIC_RESTORED'		=> '<strong>Tema restaurado</strong><br />» %s',
	'LOG_TOPIC_DISAPPROVED'		=> '<strong>Tema “%1$s” escrito por “%3$s” rexeitado polo seguinte motivo</strong><br />%2$s',
	'LOG_TOPIC_RESYNC'			=> '<strong>Contadores de temas sincronizados</strong><br />» %s',
	'LOG_TOPIC_TYPE_CHANGED'	=> '<strong>Tipo de tema cambiado</strong><br />» %s',
	'LOG_UNLOCK'				=> '<strong>Tema desbloqueado</strong><br />» %s',
	'LOG_UNLOCK_POST'			=> '<strong>Mensaxe desbloqueada</strong><br />» %s',

	'LOG_DISALLOW_ADD'		=> '<strong>Engadido nome de usuario desautorizado </strong><br />» %s',
	'LOG_DISALLOW_DELETE'	=> '<strong>Elimiando nome de usuario desautorizado</strong>',

	'LOG_DB_BACKUP'			=> '<b>Copia de respaldo da base de dados</b>',
	'LOG_DB_DELETE'			=> '<strong>Copia de respaldo da base de datos eliminada</strong>',
	'LOG_DB_RESTORE'		=> '<b>Restaurar copia de respaldo da base de dados</b>',

	'LOG_DOWNLOAD_EXCLUDE_IP'	=> '<strong>Excluído IP/host da a listaxe de descargas</strong><br />» %s',
	'LOG_DOWNLOAD_IP'			=> '<strong>Engadido IP/host á listaxe de descargas</strong><br />» %s',
	'LOG_DOWNLOAD_REMOVE_IP'	=> '<strong>Eliminado IP/host da listaxe de descargas</strong><br />» %s',

	'LOG_ERROR_JABBER'		=> '<strong>Erro co Jabber</strong><br />» %s',
	'LOG_ERROR_EMAIL'		=> '<strong>Erro co correo</strong><br />» %s',
	'LOG_ERROR_CAPTCHA'		=> '<strong>Erro no CAPTCHA</strong><br />» %s',

	'LOG_FORUM_ADD'							=> '<strong>Creado novo foro</strong><br />» %s',
	'LOG_FORUM_COPIED_PERMISSIONS'			=> '<strong>Permisos do foro copiados</strong> de %1$s<br />» %2$s',
	'LOG_FORUM_DEL_FORUM'					=> '<strong>Foro borrado</strong><br />» %s',
	'LOG_FORUM_DEL_FORUMS'					=> '<strong>Foros e os seus subforos eliminados</strong><br />» %s',
	'LOG_FORUM_DEL_MOVE_FORUMS'				=> '<strong>Foros borrados e subforos movidos</strong> a %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS'				=> '<strong>Foros borrados e mensaxes movidas </strong> a %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_FORUMS'		=> '<strong>Foros e os seus subforos eliminados, mensaxes movidas</strong> a %1$s<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_MOVE_FORUMS'	=> '<strong>Foros borrados, mensaxes movidos</strong> a %1$s <strong>e subforos</strong> a %2$s<br />» %3$s',
	'LOG_FORUM_DEL_POSTS'					=> '<strong>Foro e mensaxes eliminados</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_FORUMS'			=> '<strong>Foros eliminados, as súas mensaxes e subforos</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_MOVE_FORUMS'		=> '<strong>Eliminados foros e as súas mensaxes, movidos subforos</strong> a %1$s<br />» %2$s',
	'LOG_FORUM_EDIT'						=> '<strong>Detalles do foro editados</strong><br />» %s',
	'LOG_FORUM_MOVE_DOWN'					=> '<strong>Foros movidos</strong> %1$s <strong>debaixo</strong> %2$s',
	'LOG_FORUM_MOVE_UP'						=> '<strong>Foros movidos</strong> %1$s <strong>enriba</strong> %2$s',
	'LOG_FORUM_SYNC'						=> '<strong>Foro sincronizado</strong><br />» %s',

	'LOG_GENERAL_ERROR'	=> '<strong>Houbo un erro xeral</strong>: %1$s <br />» %2$s',

	'LOG_GROUP_CREATED'		=> '<strong>Creado novo grupo de usuarios</strong><br />» %s',
	'LOG_GROUP_DEFAULTS'	=> '<strong>Grupo por defecto para membros</strong><br />» %s',
	'LOG_GROUP_DELETE'		=> '<strong>Grupo de usuarios borrado</strong><br />» %s',
	'LOG_GROUP_DEMOTED'		=> '<strong>Líderes degradados no grupo de usuario</strong> %1$s<br />» %2$s',
	'LOG_GROUP_PROMOTED'	=> '<strong>Membros promocionados a líder no grupo de usuario</strong> %1$s<br />» %2$s',
	'LOG_GROUP_REMOVE'		=> '<strong>Membros eliminados do o grupo de usuario</strong> %1$s<br />» %2$s',
	'LOG_GROUP_UPDATED'		=> '<strong>Detalles do grupo de usuario actualizados</strong><br />» %s',
	'LOG_MODS_ADDED'		=> '<strong>Engadido novo líder ao grupo de usuario</strong> %1$s<br />» %2$s',
	'LOG_USERS_ADDED'		=> '<strong>Engadidos novos membros ao grupo de usuario</strong> %1$s<br />» %2$s',
	'LOG_USERS_APPROVED'	=> '<strong>Usuarios aprobados no grupo de usuario</strong> %1$s<br />» %2$s',
	'LOG_USERS_PENDING'		=> '<strong>Hai usuarios que solicitaron unírense ao grupo “%1$s” e precisan ser aprobados</strong><br />» %2$s',

	'LOG_IMAGE_GENERATION_ERROR'	=> '<strong>Erro ao tentar crear unha imaxe</strong><br />» Erro en %1$s na liña %2$s: %3$s',

	'LOG_INACTIVE_ACTIVATE'	=> '<strong>Activados usuarios inactivos</strong><br />» %s',
	'LOG_INACTIVE_DELETE'	=> '<strong>Borrados usuarios inactivos</strong><br />» %s',
	'LOG_INACTIVE_REMIND'	=> '<strong>Enviar correos recordatorios a usuarios inactivos</strong><br />» %s',
	'LOG_INSTALL_CONVERTED'	=> '<strong>Convertido de phpBB %1$s a %2$s</strong>',
	'LOG_INSTALL_INSTALLED'	=> '<strong>phpBB %s instalado</strong>',

	'LOG_IP_BROWSER_FORWARDED_CHECK'	=> '<strong>/Fallo na comprobación da sesión contra a IP/navegador/X_FORWARDED_FOR</strong><br />»A IP do usuario "<em>%1$s</em>" comprobada contra a IP na sesión "<em>%2$s</em>", cadea do navegador do usuario"<em>%3$s</em>" comprobada contra a cadea do navegador na sesión "<em>%4$s</em>", e X_FORWARDED_FOR do usuario"<em>%5$s</em>" comprobado contra X_FORWARDED_FOR na sesión "<em>%6$s</em>".',

	'LOG_JAB_CHANGED'			=> '<strong>Conta Jabber trocada</strong>',
	'LOG_JAB_PASSCHG'			=> '<strong>Contrasinal Jabber trocado</strong>',
	'LOG_JAB_REGISTER'			=> '<strong>Conta Jabber rexistrada</strong>',
	'LOG_JAB_SETTINGS_CHANGED'	=> '<strong>Modificada configuración de Jabber</strong>',

	'LOG_LANGUAGE_PACK_DELETED'		=> '<strong>Borrado paquete de idioma</strong><br />» %s',
	'LOG_LANGUAGE_PACK_INSTALLED'	=> '<strong>Instalado paquete de idioma</strong><br />» %s',
	'LOG_LANGUAGE_PACK_UPDATED'		=> '<strong>Actualizados detalles do paquete de idioma</strong><br />» %s',
	'LOG_LANGUAGE_FILE_REPLACED'	=> '<strong>Reemprazado ficheiro de idioma</strong><br />» %s',
	'LOG_LANGUAGE_FILE_SUBMITTED'	=> '<strong>Arquivo de idioma enviado e gardado no cartafol de almacenaxe</strong><br />» %s',

	'LOG_MASS_EMAIL'		=> '<strong>Correo masivo enviado</strong><br />» %s',

	'LOG_MCP_CHANGE_POSTER'	=> '<strong>Cambiado póster do tema "%1$s"</strong><br />» desde %2$s a %3$s',

	'LOG_MODULE_DISABLE'	=> '<strong>Módulo desactivado</strong>',
	'LOG_MODULE_ENABLE'		=> '<strong>Módulo activado</strong>',
	'LOG_MODULE_MOVE_DOWN'	=> '<strong>Módulo baixado</strong><br />» %s',
	'LOG_MODULE_MOVE_UP'	=> '<strong>Módulo subido</strong><br />» %s',
	'LOG_MODULE_REMOVED'	=> '<strong>Módulo eliminado</strong><br />» %s',
	'LOG_MODULE_ADD'		=> '<strong>Módulo engadido</strong><br />» %s',
	'LOG_MODULE_EDIT'		=> '<strong>Módulo editado</strong><br />» %s',

	'LOG_A_ROLE_ADD'		=> '<strong>Engadido rol de administración</strong><br />» %s',
	'LOG_A_ROLE_EDIT'		=> '<strong>Rol de administración editado</strong><br />» %s',
	'LOG_A_ROLE_REMOVED'	=> '<strong>Rol de administración eliminado</strong><br />» %s',
	'LOG_F_ROLE_ADD'		=> '<strong>Engadido rol para o foro</strong><br />» %s',
	'LOG_F_ROLE_EDIT'		=> '<strong>Editado rol para o foro</strong><br />» %s',
	'LOG_F_ROLE_REMOVED'	=> '<strong>Eliminado rol para o foro</strong><br />» %s',
	'LOG_M_ROLE_ADD'		=> '<strong>Engadido rol de moderador</strong><br />» %s',
	'LOG_M_ROLE_EDIT'		=> '<strong>Editado rol de moderador</strong><br />» %s',
	'LOG_M_ROLE_REMOVED'	=> '<strong>Eliminado rol de moderador</strong><br />» %s',
	'LOG_U_ROLE_ADD'		=> '<strong>Engadido rol de usuario</strong><br />» %s',
	'LOG_U_ROLE_EDIT'		=> '<strong>Editado rol de usuario</strong><br />» %s',
	'LOG_U_ROLE_REMOVED'	=> '<strong>Eliminado rol de usuario</strong><br />» %s',

	'LOG_PLUPLOAD_TIDY_FAILED'		=> '<strong>Non se puido abrir %1$s para limpalo, comproba os permisos.</strong><br />Excepción: %2$s<br />Traza: %3$s',

	'LOG_PROFILE_FIELD_ACTIVATE'	=> '<strong>Activado campo de perfil</strong><br />» %s',
	'LOG_PROFILE_FIELD_CREATE'		=> '<strong>Engadido campo de perfil</strong><br />» %s',
	'LOG_PROFILE_FIELD_DEACTIVATE'	=> '<strong>Desactivado campo de perfil</strong><br />» %s',
	'LOG_PROFILE_FIELD_EDIT'		=> '<strong>Trocado campo de perfil</strong><br />» %s',
	'LOG_PROFILE_FIELD_REMOVED'		=> '<strong>Eliminado campo de perfil</strong><br />» %s',

	'LOG_PRUNE'					=> '<strong>Foros purgados</strong><br />» %s',
	'LOG_AUTO_PRUNE'			=> '<strong>Foros auto-purgados</strong><br />» %s',
	'LOG_PRUNE_SHADOW'		=> '<strong>Temas ocultos auto-purgados</strong><br />» %s',
	'LOG_PRUNE_USER_DEAC'		=> '<strong>Usuarios desactivados</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_DEL'	=> '<strong>Purgados usuarios e mensaxes eliminadas</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_ANON'	=> '<strong>Purgados usuarios e mensaxes conservadas</strong><br />» %s',

	'LOG_PURGE_CACHE'			=> '<strong>Caché purgada</strong>',
	'LOG_PURGE_SESSIONS'		=> '<strong>Sesións purgadas</strong>',

	'LOG_RANK_ADDED'		=> '<strong>Novo rango engadido</strong><br />» %s',
	'LOG_RANK_REMOVED'		=> '<strong>Rango eliminado</strong><br />» %s',
	'LOG_RANK_UPDATED'		=> '<strong>Rango actualizado</strong><br />» %s',

	'LOG_REASON_ADDED'		=> '<strong>Engadido motivo</strong><br />» %s',
	'LOG_REASON_REMOVED'	=> '<strong>Eliminado motivo</strong><br />» %s',
	'LOG_REASON_UPDATED'	=> '<strong>Actualizado motivo</strong><br />» %s',

	'LOG_REFERER_INVALID'		=> '<strong>Validación de Referrer incorrecta</strong><br />»O Referrer era “<em>%1$s</em>”. A petición foi rexeitada e a sesión forzada a rematarse.',
	'LOG_RESET_DATE'			=> '<strong>Reiniciada data de comezo do sistema</strong>',
	'LOG_RESET_ONLINE'			=> '<strong>Reiniciado contados de maior cantidade de usuarios conectados</strong>',
	'LOG_RESYNC_FILES_STATS'	=> '<strong>Sincronizadas estatísticas dos ficheiros</strong>',
	'LOG_RESYNC_POSTCOUNTS'		=> '<strong>Contadores de mensaxes sincronizados</strong>',
	'LOG_RESYNC_POST_MARKING'	=> '<strong>Temas marcados sincronizados</strong>',
	'LOG_RESYNC_STATS'			=> '<strong>Mensaxes, temas e estatísticas do usuario sincronizadas</strong>',

	'LOG_SEARCH_INDEX_CREATED'	=> '<strong>Creado índice de procura para</strong><br />» %s',
	'LOG_SEARCH_INDEX_REMOVED'	=> '<strong>Eliminado índice de procura para</strong><br />» %s',
	'LOG_SPHINX_ERROR'			=> '<strong>Erro de Sphinx</strong><br />» %s',
	'LOG_STYLE_ADD'				=> '<strong>Engadido estilo novo</strong><br />» %s',
	'LOG_STYLE_DELETE'			=> '<strong>Borrado estilo</strong><br />» %s',
	'LOG_STYLE_EDIT_DETAILS'	=> '<strong>Editado estilo</strong><br />» %s',
	'LOG_STYLE_EXPORT'			=> '<strong>Estilo exportado</strong><br />» %s',

	// @deprecated 3.1
	'LOG_TEMPLATE_ADD_DB'			=> '<strong>Engadiuse un novo conxunto de modelos á base de datos</strong><br />» %s',
	// @deprecated 3.1
	'LOG_TEMPLATE_ADD_FS'			=> '<strong>Engadir un novo conxunto de modelos ao sistema de ficheiros</strong><br />» %s',
	'LOG_TEMPLATE_CACHE_CLEARED'	=> '<strong>Eliminadas da caché as versións dos ficheiros de modelos no xogo <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_DELETE'			=> '<strong>Eliminouse o conxunto de modelos</strong><br />» %2$s',
	'LOG_TEMPLATE_EDIT'				=> '<strong>Editouse o grupo de modelos</strong><br />» %2$s',
	'LOG_TEMPLATE_EDIT_DETAILS'		=> '<strong>Detalles do conxunto de modelos editados</strong><br />» %s',
	'LOG_TEMPLATE_EXPORT'			=> '<strong>Conxunto de modelos editado</strong><br />» %s',
	// @deprecated 3.1
	'LOG_TEMPLATE_REFRESHED'		=> '<strong>Conxunto de modelos actualizado</strong><br />» %s',

	// @deprecated 3.1
	'LOG_THEME_ADD_DB'			=> '<strong>Novo tema engadido á base de datos</strong><br />» %s',
	// @deprecated 3.1
	'LOG_THEME_ADD_FS'			=> '<strong>Novo tema engadido ao sistema de ficheiros</strong><br />» %s',
	'LOG_THEME_DELETE'			=> '<strong>Tema eliminado</strong><br />» %s',
	'LOG_THEME_EDIT_DETAILS'	=> '<strong>Detalles do tema editados</strong><br />» %s',
	'LOG_THEME_EDIT'			=> '<strong>Tema editado<em>%1$s</em></strong><br />» Clase modificada <em>%2$s</em>',
	'LOG_THEME_EDIT_FILE'		=> '<strong>Tema editado <em>%1$s</em></strong><br />» Arquivo modificado <em>%2$s</em>',
	'LOG_THEME_EXPORT'			=> '<strong>Tema exportado</strong><br />» %s',
	// @deprecated 3.1
	'LOG_THEME_REFRESHED'		=> '<strong>Tema actualizado</strong><br />» %s',

	'LOG_UPDATE_DATABASE'	=> '<strong>Base de datos actualizada da versión %1$s á versión %2$s</strong>',
	'LOG_UPDATE_PHPBB'		=> '<strong>phpBB actualizado da versión %1$s á versión %2$s</strong>',

	'LOG_USER_ACTIVE'		=> '<strong>Usuario activado</strong><br />» %s',
	'LOG_USER_BAN_USER'		=> '<strong>Prohibido acceso a usuario dende a xestión de usuarios</strong> polo motivo "<em>%1$s</em>"<br />» %2$s',
	'LOG_USER_BAN_IP'		=> '<strong>IP prohibida dende a xestión de usuarios</strong> polo motivo "<em>%1$s</em>"<br />» %2$s',
	'LOG_USER_BAN_EMAIL'	=> '<strong>Correo prohibido dende a xestión de usuarios</strong> polo motivo "<em>%1$s</em>"<br />» %2$s',
	'LOG_USER_DELETED'		=> '<strong>Usuario eliminado</strong><br />» %s',
	'LOG_USER_DEL_ATTACH'	=> '<strong>Eliminados todos os anexos feitos polo usuario</strong><br />» %s',
	'LOG_USER_DEL_AVATAR'	=> '<strong>Eliminado o avatar do usuario</strong><br />» %s',
	'LOG_USER_DEL_OUTBOX'	=> '<strong>Caixa de saída do usuario baleirada</strong><br />» %s',
	'LOG_USER_DEL_POSTS'	=> '<strong>Eliminadas todas as mensaxes feitas polo usuario</strong><br />» %s',
	'LOG_USER_DEL_SIG'		=> '<strong>Sinatura do usuario eliminada</strong><br />» %s',
	'LOG_USER_INACTIVE'		=> '<strong>Usuario desactivado</strong><br />» %s',
	'LOG_USER_MOVE_POSTS'	=> '<strong>Mensaxes de usuario trasladados</strong><br />» enviados por "%1$s" ao foro "%2$s"',
	'LOG_USER_NEW_PASSWORD'	=> '<strong>Trocado o contrasinal do usuario</strong><br />» %s',
	'LOG_USER_REACTIVATE'	=> '<strong>Re-activación da conta de usuario forzada</strong><br />» %s',
	'LOG_USER_REMOVED_NR'	=> '<strong>Eliminada a marca de novo rexistrado ao usuario</strong><br />» %s',

	'LOG_USER_UPDATE_EMAIL'	=> '<strong>O correo do usuario "%1$s" mudou </strong><br />» de "%2$s" a "%3$s"',
	'LOG_USER_UPDATE_NAME'	=> '<strong>Nome de usuario trocado</strong><br />» de "%1$s" a "%2$s"',
	'LOG_USER_USER_UPDATE'	=> '<strong>Actualizados detalles do usuario</strong><br />» %s',

	'LOG_USER_ACTIVE_USER'		=> '<strong>Activada a conta do usuario</strong>',
	'LOG_USER_DEL_AVATAR_USER'	=> '<strong>Eliminado o avatar do usuario</strong>',
	'LOG_USER_DEL_SIG_USER'		=> '<strong>Eliminada a sinatura do usuario</strong>',
	'LOG_USER_FEEDBACK'			=> '<strong>Comentario do usuario engadido</strong><br />» %s',
	'LOG_USER_GENERAL'			=> '<strong>Entrada engadida:</strong><br />» %s',
	'LOG_USER_INACTIVE_USER'	=> '<strong>Conta do usuario desactivada</strong>',
	'LOG_USER_LOCK'				=> '<strong>Tema bloqueado polo propio usuario</strong><br />» %s',
	'LOG_USER_MOVE_POSTS_USER'	=> '<strong>Transferidas todas as mensaxes ao foro "%s"</strong>',
	'LOG_USER_REACTIVATE_USER'	=> '<strong>Reactivación da conta de usuario forzado</strong>',
	'LOG_USER_UNLOCK'			=> '<strong>Tema desbloqueado polo propio usuario </strong><br />» %s',
	'LOG_USER_WARNING'			=> '<strong>Engadido aviso a usuario</strong><br />»%s',
	'LOG_USER_WARNING_BODY'		=> '<strong>O aviso seguinte foi enviado a este usuario</strong><br />»%s',

	'LOG_USER_GROUP_CHANGE'			=> '<strong>Usuario cambiou de grupo predeterminado</strong><br />» %s',
	'LOG_USER_GROUP_DEMOTE'			=> '<strong>Usuario degradado como líder do grupo de usuarios</strong><br />» %s',
	'LOG_USER_GROUP_JOIN'			=> '<strong>Usuario unido ao grupo</strong><br />» %s',
	'LOG_USER_GROUP_JOIN_PENDING'	=> '<strong>Usuario apuntado a grupo precisa ser aprobado</strong><br />» %s',
	'LOG_USER_GROUP_RESIGN'			=> '<strong>Usuario renunciou como membro do grupo</strong><br />» %s',

	'LOG_WARNING_DELETED'		=> '<strong>Eliminado aviso ao usuario</strong><br />» %s',
	'LOG_WARNINGS_DELETED'		=> array(
		1 => '<strong>Eliminado aviso ao usuario</strong><br />» %1$s',
		2 => '<strong>Eliminados %2$d avisos ao usuario</strong><br />» %1$s', // Example: '<strong>Deleted 2 user warnings</strong><br />» username'
	),
	'LOG_WARNINGS_DELETED_ALL'	=> '<strong>Eliminados todos os avisos ao usuario</strong><br />» %s',

	'LOG_WORD_ADD'			=> '<strong>Engadida censura de palabras</strong><br />» %s',
	'LOG_WORD_DELETE'		=> '<strong>Eliminada censura de palabras</strong><br />» %s',
	'LOG_WORD_EDIT'			=> '<strong>Editada censura de palabras</strong><br />» %s',

	'LOG_EXT_ENABLE'	=> '<strong>Extensión habilitada</strong><br />» %s',
	'LOG_EXT_DISABLE'	=> '<strong>Extensión deshabilitada</strong><br />» %s',
	'LOG_EXT_PURGE'		=> '<strong>Datos da extensión eliminados</strong><br />» %s',
	'LOG_EXT_UPDATE'	=> '<strong>Extensión actualizada</strong><br />» %s',
));