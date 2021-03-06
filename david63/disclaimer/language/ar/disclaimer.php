<?php
/**
*
* @package Disclaimer Extension
* @copyright (c) 2014 david63
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
* Translated By : Basil Taha Alhitary - www.alhitary.net
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
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'DISCLAIMER'				=> 'إخلاء المسئولية',
	'DISCLAIMER_TEXT'			=> '<h3>إخلاء المسئولية</h3>
	<p>الآراء والتعليقات المنشورة في هذا الموقع تُعبر عن رأي كاتبها وليس بالضرورة تعكس رأي إدارة %1$s.<br /><br />لا تتحمل إدارة %1$s أي مسئولية عن أي نصيحة أو توصية من أي عضو أو زائر لـ %1$s بحيث نتجت عن ذلك أي خسارة لأحد أعضاء %1$s أو لأي شخص آخر , وتحت أي ظرف أو طريقة كانت.<br /><br />بالإضافة إلى أن إدارة %1$s غير ( ولن تكون ) مسئولة عن أي محتوى موقع الكتروني آخر قام بنسخ أو نقل محتوى من %1$s.</p>',
));

?>
