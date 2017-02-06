<?php
/**
*
* @package Site Logo Extension
* @copyright (c) 2014 david63
*
* French translation by cabot (http://forums.phpbb-fr.com/cabot-u109637/)
* * @license GNU General Public License, version 2 (GPL-2.0)
*
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
//
// Some characters you may want to copy&paste:
// ’ « » “ ” …
//

$lang = array_merge($lang, array(
	'BANNER_HEIGHT'						=> 'Hauteur de la bannière',
	'BANNER_HEIGHT_EXPLAIN'				=> 'Ce paramètre définit la taille de la zone pour l’image de bannière du site. Il peut être nécessaire de redimensionner l’image actuelle afin de l’adapter à cet espace, sinon elle risque de ne pas s’afficher correctement.',
	'BANNER_OPTIONS'					=> 'Options de la bannière',
	'BANNER_RADIUS'						=> 'Arrondi de la bannière',
	'BANNER_RADIUS_EXPLAIN'				=> 'Définit le nombre de pixels pour arrondir les coins de la bannière. Si vous définissez cette valeur sur 0, la bannière aura des coins carrés.',

	'CLICK_TO_SELECT'					=> 'Cliquer dans le champ pour sélectionner une couleur.',

	'EXTENDED_SITE_DESCRIPTION'			=> 'Description de site étendue',
	'EXTENDED_SITE_DESCRIPTION_EXPLAIN'	=> 'Cela vous permet de créer une description de site plus grande que celle d’origine limitée à 255 caractères et <strong>remplacera</strong> la description de site standard.<br /><strong>Note :</strong> Si les données saisies sont trop longues, il peut y avoir des « effets secondaires » inattendus - la plupart de ceux-ci peuvent être corrigés en ajustant certaines des autres options.',

	'HEADER_COLOUR'						=> 'Couleur de la barre d’en-tête',
	'HEADER_COLOUR_EXPLAIN'				=> 'Selectionner une couleur de fond pour l’en-tête.<br />Le réglage de cette option appliquera, dans la mesure du possible, le même ajustement de dégradé que celui utilisé dans « prosilver ».<br /><em>Défaut = #12A3EB</em>',
	'HEADER_OPTIONS'					=> 'Options d’en-tête',

	'LOGO_CENTRE'						=> 'Centre',
	'LOGO_LEFT'							=> 'Gauche',
	'LOGO_RIGHT'						=> 'Droite',

	'OVERRIDE_COLOUR'					=> 'Couleur de remplacement',
	'OVERRIDE_COLOUR_EXPLAIN'			=> 'Sélectionnez une couleur qui remplacera celles définies dans le style pour le nom et la description du site.',

	'PIXELS'							=> 'px',

	'REMOVE_HEADER_BAR'					=> 'Supprimer le bloc d’en-tête',
	'REMOVE_HEADER_BAR_EXPLAIN'			=> 'Cette option empêche l’affichage du bloc d’en-tête.',

	'SEARCH_OPTIONS'					=> 'Options de la boîte de recherche',
	'SITE_BACKGROUND'					=> 'Arrière-plan du site',
	'SITE_BACKGROUND_IMAGE'				=> 'Chemin de l’image en arrière-plan',
	'SITE_BACKGROUND_IMAGE_EXPLAIN'		=> 'Si vous souhaitez utiliser une image distante comme arrière-plan, entrez son URL complète, sinon saisissez son emplacement.<br /><em>ex. http://un_site.org/image.png - ou<br />images/image.jpg</em>',
	'SITE_LOGO_EXPLAIN'					=> 'Vous pouvez définir ici les options du logo personnalisé, ajouter une bannière personnalisée, utiliser une description étendue ou ajouter un arrière-plan à votre forum.',
	'SITE_LOGO_BANNER_IMAGE'			=> 'Chemin d’accès à la bannière personnalisée',
	'SITE_LOGO_BANNER_IMAGE_EXPLAIN'	=> 'Si vous souhaitez utiliser une image distante comme bannière, entrez son URL complète, sinon saisissez son emplacement.<br /><em>ex. http://un_site.org/banniere.png - ou<br />images/banniere.jpg</em>',
	'SITE_LOGO_HEIGHT'					=> 'Hauteur du logo',
	'SITE_LOGO_HEIGHT_EXPLAIN'			=> 'Laisser ce champ vide pour utiliser la hauteur par défaut.<br /><em>La hauteur par défaut du logo est 52px.</em>',
	'SITE_LOGO_IMAGE'					=> 'Chemin du logo personnalisé',
	'SITE_LOGO_IMAGE_EXPLAIN'			=> 'Laisser ce champ vide pour utiliser le logo par défaut.<br />Si vous souhaitez utiliser une image distante comme logo, entrez son URL complète, sinon saisissez son emplacement.<br /><em>ex. http://un_site.org/logo.png - ou<br />images/logo.jpg</em>',
	'SITE_LOGO_LEFT'					=> 'Coins gauche',
	'SITE_LOGO_LEFT_EXPLAIN'			=> 'Arrondit les coins gauche pour correspondre à la bannière.',
	'SITE_LOGO_OPTIONS'					=> 'Options du logo',
	'SITE_LOGO_PIXELS'					=> 'Arrondi du logo',
	'SITE_LOGO_PIXELS_EXPLAIN'			=> 'Définit le nombre de pixels pour arrondir les coins du logo.<br /><em>La valeur par défaut pour prosilver est 7px.</em>',
	'SITE_LOGO_POSITION'				=> 'Position du logo',
	'SITE_LOGO_REMOVE'					=> 'Supprimer le logo',
	'SITE_LOGO_REMOVE_EXPLAIN'			=> 'Cette option empêche l’affichage du logo.',
	'SITE_LOGO_RESPONSIVE'				=> 'Rendre responsive',
	'SITE_LOGO_RESPONSIVE_EXPLAIN'		=> 'Permet l’adaptabilité des options du logo aux appareils mobiles et aux tablettes.',
	'SITE_LOGO_RIGHT'					=> 'Coins droit',
	'SITE_LOGO_RIGHT_EXPLAIN'			=> 'Arrondit les coins droit pour correspondre à la bannière.',
	'SITE_LOGO_SIZE_EXPLAIN'			=> '<strong>Note : ces paramètres définissent la taille de la zone d’affichage du logo. Il peut être nécessaire de redimensionner l’image actuelle afin de l’adapter à cet espace, sinon elle risque de ne pas s’afficher correctement..</strong>',
	'SITE_LOGO_URL'						=> 'Lien du logo',
	'SITE_LOGO_URL_EXPLAIN'				=> 'Le lien vers lequel l’utilisateur sera redirigé en cliquant sur le logo, saisissez simplement l’emplacement du lien.<br /><em>ex. mon_site/ma_page.php - ou<br />http://un_site.org/ma_page.html</em><br /><strong>Laisser ce champ vide pour utiliser le lien par défaut du forum.</strong>',
	'SITE_LOGO_WIDTH'					=> 'Largeur du logo',
	'SITE_LOGO_WIDTH_EXPLAIN'			=> 'Laisser ce champ vide pour utiliser la largeur par défaut.<br /><em>La largeur par défaut du logo est 149px.</em>',
	'SITE_NAME_BELOW'					=> 'Nom et description du site sous le logo',
	'SITE_NAME_BELOW_EXPLAIN'			=> 'Déplace le nom et la description du site sous le logo. Cela déplacera également la boîte de recherche vers la barre de navigation. Le texte sera positionné comme le logo (gauche/centre/droite).',
	'SITE_NAME_SUPRESS'					=> 'Supprimer l’affichage du texte',
	'SITE_NAME_SUPRESS_EXPLAIN'			=> 'Cette option empêche l’affichage du nom et de la description du site.',
	'SITE_SEARCH_IN_NAVBAR'				=> 'Déplacer la boîte de recherche vers la barre de navigation',
	'SITE_SEARCH_IN_NAVBAR_EXPLAIN'		=> 'Déplace la boîte de recherche vers la barre de navigation supérieure.<br />Cela peut être utile lorsque vous utilisez l’option de bannière personnalisée.',
	'SITE_SEARCH_REMOVE'				=> 'Supprimer la boîte de recherche',
	'SITE_SEARCH_REMOVE_EXPLAIN'		=> 'Cette option supprimera la boîte de recherche du bloc d’en-tête.',

	'TEXT_OPTIONS'						=> 'Options de texte',

	'USE_BANNER'						=> 'Utiliser une bannière personnalisée',
	'USE_BANNER_EXPLAIN'				=> 'Ajoute une bannière personnalisée à l’en-tête du forum.',
	'USE_EXTENED_SITE_DESC'				=> 'Utiliser une description de site étendue',
	'USE_EXTENED_SITE_DESC_EXPLAIN'		=> 'Remplace la description standard du site par une descripttion étendue.',
	'USE_HEADER_COLOURS'				=> 'Personnaliser les couleurs du bloc d’en-tête',
	'USE_HEADER_COLOURS_EXPLAIN'		=> 'Utilise des couleurs personnalisées pour le bloc d’en-tête.<br /><strong>Note : cette option n’aura aucun effet si <em>Supprimer le bloc d’en-tête</em> a été sélectionné.</strong>',
	'USE_SOLID_HEADER_COLOURS'			=> 'Utiliser une couleur unie',
	'USE_SOLID_HEADER_COLOURS_EXPLAIN'	=> 'Utilise une couleur de fond unie à la place du dégradé pour le bloc d’en-tête.<br />Cette option nécessite que <em>Personnaliser les couleurs du bloc d’en-tête</em> soit paramétrée sur « Oui ».',
	'USE_OVERRIDE_COLOUR'				=> 'Remplacer la couleur par défaut',
	'USE_OVERRIDE_COLOUR_EXPLAIN'		=> 'Autorise le remplacement de la couleur à utiliser pour le nom et la description du site.',
	'USE_SITE_BACKGROUND'				=> 'Utiliser un arrière-plan',
	'USE_SITE_BACKGROUND_EXPLAIN'		=> 'Ajoute une image en arrière-plan de votre forum.',
));
