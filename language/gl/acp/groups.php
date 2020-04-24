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
	'ACP_GROUPS_MANAGE_EXPLAIN'		=> 'Dende este panel podes administrar todos os teus grupos de usuarios. Podes eliminar, crear e editar os grupos existentes. A maiores, podes escoller líderes de grupo, mudar o estado do grupo entre aberto/oculto/pechado e seleccionar o nome e descrición do grupo.',
	'ADD_GROUP_CATEGORY'			=> 'Engadir categoría',
	'ADD_USERS'						=> 'Engadir usuarios',
	'ADD_USERS_EXPLAIN'				=> 'Aquí podes engadir novos usuarios ao grupo. Podes escoller se o grupo se converte no novo grupo predeterminado para os usuarios escollidos. Adicionalmente podes definilos como líderes do grupo. Introduce cada nome de usuario nunha liña distinta.',

	'COPY_PERMISSIONS'				=> 'Copiar permisos dende',
	'COPY_PERMISSIONS_EXPLAIN'		=> 'Unha vez creado, o grupo terá os mesmos permisos que o que selecciones aquí.',
	'CREATE_GROUP'					=> 'Crear novo grupo',

	'GROUPS_NO_MEMBERS'				=> 'Este grupo non ten usuarios ',
	'GROUPS_NO_MODS'				=> 'Non hai líderes de grupo definidos',

	'GROUP_APPROVE'					=> 'Aprobar',
	'GROUP_APPROVED'				=> 'Membros Aprobados',
	'GROUP_AVATAR'					=> 'Avatar do grupo',
	'GROUP_AVATAR_EXPLAIN'			=> 'Esta imaxe será amosada no Panel de Control de Grupos.',
	'GROUP_CATEGORY_NAME'			=> 'Nome da categoría',
	'GROUP_CLOSED'					=> 'Pechado',
	'GROUP_COLOR'					=> 'Cor do grupo',
	'GROUP_COLOR_EXPLAIN'			=> 'Define a cor na que aparecerán os nomes de usuario dos membros, déixao en branco para a cor por defecto de usuario.',
	'GROUP_CONFIRM_ADD_USERS'		=> array(
		1	=> 'Estás seguro de querer engadir o usuario %2$s ao grupo?',
		2	=> 'Estás seguro de querer engadir os usuarios %2$s ao grupo?',
	),
	'GROUP_CREATED'					=> 'Grupo creado correctamente',
	'GROUP_DEFAULT'					=> 'Predeterminado',
	'GROUP_DEFS_UPDATED'			=> 'Configuración de grupo predeterminado para todos os membros seleccionados.',
	'GROUP_DELETE'					=> 'Eliminar',
	'GROUP_DELETED'					=> 'Grupo eliminado e grupos predeterminados de usuario estabelecidos correctamente.',
	'GROUP_DEMOTE'					=> 'Degradar',
	'GROUP_DESC'					=> 'Descrición do grupo',
	'GROUP_DETAILS'					=> 'Pormenores do grupo',
	'GROUP_EDIT_EXPLAIN'			=> 'Aquí podes editar un grupo existente. Podes trocar o seu nome, descrición e tipo (aberto, pechado etc). Podes configurar tamén algunhas opcións xerais do grupo como a cor, rango etc. Os trocos feitos aquí anulan a configuración actual dos usuarios. Ten en conta que os membros do grupo poden facer caso omiso da configuración do avatar do grupo agás que estabelezas os permisos de usuario axeitados.',
	'GROUP_ERR_USERS_EXIST'			=> 'Os usuarios especificados xa son membros deste grupo',
	'GROUP_FOUNDER_MANAGE'			=> 'Só xestión do fundador',
	'GROUP_FOUNDER_MANAGE_EXPLAIN'	=> 'Restrinxir xestión deste grupo só aos fundadores. Os usuarios que teñan permisos de grupo seguirán a poder ver este do mesmo xeito ca os membros que o forman.',
	'GROUP_HIDDEN'					=> 'Oculto',
	'GROUP_LANG'					=> 'Idioma do grupo',
	'GROUP_LEAD'					=> 'Líderes do grupo',
	'GROUP_LEADERS_ADDED'			=> 'Novos líderes engadidos ao grupo correctamente.',
	'GROUP_LEGEND'					=> 'Amosar grupo na lenda',
	'GROUP_LIST'					=> 'Membros actuais',
	'GROUP_LIST_EXPLAIN'			=> 'Esta é unha lista completa de todos os membros que pertencen actualmente a este grupo. Podes eliminar membros (agás en certos grupos especiais) ou engadir máis.',
	'GROUP_MEMBERS'					=> 'Membros do grupo',
	'GROUP_MEMBERS_EXPLAIN'			=> 'Esta é unha listaxe completa de todos os membros deste grupo. Inclúe seccións separadas para líderes, membros actuais e pendentes. Dende aquí podes xestionar todos os aspectos que atinxen aos membros e os seus roles. Para degradar a un líder, pero manténdoo no grupo, mellor usa Degradar en lugar de Borrar. Do mesmo xeito usa Promocionar para converter en líder a un membro do grupo.',
	'GROUP_MESSAGE_LIMIT'			=> 'Límite de mensaxes privadas do grupo por cartafol',
	'GROUP_MESSAGE_LIMIT_EXPLAIN'	=> 'Esta configuración anula o límite de mensaxes por usuario. Un valor de O significa que se utilizará o límite por defecto.',
	'GROUP_MODS_ADDED'				=> 'Novos líderes de grupo engadidos correctamente.',
	'GROUP_MODS_DEMOTED'			=> 'Líderes de grupo degradados correctamente.',
	'GROUP_MODS_PROMOTED'			=> 'Membros do grupo promocionados correctamente.',
	'GROUP_NAME'					=> 'Nome do grupo',
	'GROUP_NAME_TAKEN'				=> 'O nome de grupo que inseriches xa está en uso. Escolle outro distinto.',
	'GROUP_OPEN'					=> 'Aberto',
	'GROUP_PENDING'					=> 'Membros pendentes',
	'GROUP_MAX_RECIPIENTS'			=> 'Número máximo permitido de destinatarios por mensaxe privada',
	'GROUP_MAX_RECIPIENTS_EXPLAIN'	=> 'O número máximo de destinatarios permitido nunha mensaxe privada. Se insires 0, empregarase a configuración xeral.',
	'GROUP_OPTIONS_SAVE'			=> 'Opcións estendidas do grupo',
	'GROUP_PROMOTE'					=> 'Promocionar a xefe de grupo',
	'GROUP_RANK'					=> 'Rango do grupo',
	'GROUP_RECEIVE_PM'				=> 'Grupo habilitado para recibir mensaxes privadas',
	'GROUP_RECEIVE_PM_EXPLAIN'		=> 'Ten en conta que os grupos ocultos non poden recibir mensaxes, independentemente da configuración deste parámetro.',
	'GROUP_REQUEST'					=> 'Solicitude',
	'GROUP_SETTINGS_SAVE'			=> 'Configuración xeral de grupos',
	'GROUP_SKIP_AUTH'				=> 'Excluír ao líder do grupo dos permisos',
	'GROUP_SKIP_AUTH_EXPLAIN'		=> 'Se activas esta opción, o líder do grupo xa non herdará os permisos do grupo.',
	'GROUP_SPECIAL'					=> 'Predefinido',
	'GROUP_TEAMPAGE'				=> 'Amosa o grupo na páxina do equipo',
	'GROUP_TYPE'					=> 'Tipo de grupo',
	'GROUP_TYPE_EXPLAIN'			=> 'Isto determina que usuarios poden unirse ou ver este grupo.',
	'GROUP_UPDATED'					=> 'Preferencias do grupo actualizadas con éxito.',

	'GROUP_USERS_ADDED'				=> 'Novo usuarios engadidos ao grupo correctamente.',
	'GROUP_USERS_EXIST'				=> 'Os usuarios seleccionados xa son membros.',
	'GROUP_USERS_REMOVE'			=> 'Usuarios eliminados do grupo e novas predeterminacións estabelecidas correctamente.',
	'GROUP_USERS_INVALID'			=> 'Non se engadiu usuario ningún ao grupo xa que estes usuarios non existen: %s',

	'LEGEND_EXPLAIN'				=> 'Estes son os grupos que se amosarán na lenda de grupo:',
	'LEGEND_SETTINGS'				=> 'Axustes de lenda',
	'LEGEND_SORT_GROUPNAME'			=> 'Ordenar lenda polo nome do grupo',
	'LEGEND_SORT_GROUPNAME_EXPLAIN'	=> 'A orde embaixo ignorarase cando se active esta opción.',

	'MANAGE_LEGEND'			=> 'Xestiona a lenda dun grupo',
	'MANAGE_TEAMPAGE'		=> 'Xestiona a páxina do equipo',
	'MAKE_DEFAULT_FOR_ALL'	=> 'Estabelecer o grupo predeterminado para todos os membros',
	'MEMBERS'				=> 'Membros',

	'NO_GROUP'					=> 'Non se especificou grupo ningún',
	'NO_GROUPS_ADDED'			=> 'Aínda non hai grupos.',
	'NO_GROUPS_CREATED'			=> 'Aínda non se creou grupo ningún.',
	'NO_PERMISSIONS'			=> 'Non copiar permisos',
	'NO_USERS'					=> 'Non inseriches usuario ningún.',
	'NO_USERS_ADDED'			=> 'Non se engadiron usuarios ao grupo.',
	'NO_VALID_USERS'			=> 'Non inseriches usuario ningún ao que se lle poida aplicar esta acción.',

	'PENDING_MEMBERS'			=> 'Pendentes',

	'SELECT_GROUP'				=> 'Escolle un grupo',
	'SPECIAL_GROUPS'			=> 'Grupos predefinidos',
	'SPECIAL_GROUPS_EXPLAIN'	=> 'Os grupos predefinidos son grupos especiais, non se poden borrar ou modificar directamente. Porén, si podes engadirlles usuarios e alterar axustes basicos.',

	'TEAMPAGE'					=> 'Páxina de equipo',
	'TEAMPAGE_DISP_ALL'			=> 'Todos os membros',
	'TEAMPAGE_DISP_DEFAULT'		=> 'Só o grupo por defecto do usuario',
	'TEAMPAGE_DISP_FIRST'		=> 'Só primeira membresía',
	'TEAMPAGE_EXPLAIN'			=> 'Estes son os grupos que se amosarán na páxina de equipo:',
	'TEAMPAGE_FORUMS'			=> 'Amosar foros moderados',
	'TEAMPAGE_FORUMS_EXPLAIN'	=> 'Se se activa, amosarase unha liña con todos os foros nos que o moderador ten permisos. Pode supor unha carga para a base de datos en foros grandes.',
	'TEAMPAGE_MEMBERSHIPS'		=> 'Amosa a que grupo pertence un usuario',
	'TEAMPAGE_SETTINGS'			=> 'Axustes da páxina de equipo',
	'TOTAL_MEMBERS'				=> 'Membros',

	'USERS_APPROVED'				=> 'Usuarios aprobados correctamente.',
	'USER_DEFAULT'					=> 'User default',
	'USER_DEF_GROUPS'				=> 'Grupos definidos polo usuario',
	'USER_DEF_GROUPS_EXPLAIN'		=> 'Estes son grupos creados por ti ou por outro administrador. Podes xestionar os participantes así como editar as propiedades do grupo ou incluso eliminar o grupo.',
	'USER_GROUP_DEFAULT'			=> 'Estabelecer como grupo por defecto',
	'USER_GROUP_DEFAULT_EXPLAIN'	=> 'Dicindo si aquí configurarás este grupo como o grupo por defecto para usuarios engadidos.',
	'USER_GROUP_LEADER'				=> 'Escoller como líder de grupo',
));