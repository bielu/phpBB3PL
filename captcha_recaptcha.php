<?php
/**
*
* captcha_qa [Polski]
*
* @package language
* @version $Id$
* @copyright (c) 2012 phpBBSite.pl
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* NIE ZMIENIAĆ
*/
if (!defined('IN_PHPBB'))
{
  exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// INFORMACJA DLA DEWELOPERÓW
// Wszystkie pliki językowe powinny zostać zakodowane w UTF-8 bez BOM.

$lang = array_merge($lang, array(
	'RECAPTCHA_LANG'				=> 'pl',
	'RECAPTCHA_NOT_AVAILABLE'		=> 'By móc zacząć korzystać z reCaptcha, musisz najpierw założyć konto na <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'CAPTCHA_RECAPTCHA'				=> 'reCaptcha',
	'RECAPTCHA_INCORRECT'			=> 'Wprowadzony kod potwierdzający okazał się nieprawidłowy',

	'RECAPTCHA_PUBLIC'				=> 'Publiczny klucz reCaptcha',
	'RECAPTCHA_PUBLIC_EXPLAIN'		=> 'Twój publiczny klucz reCaptcha. Klucze można otrzymać na <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',
	'RECAPTCHA_PRIVATE'				=> 'Prywatny klucz reCaptcha',
	'RECAPTCHA_PRIVATE_EXPLAIN'		=> 'Twój prywatny klucz reCaptcha. Klucze można otrzymać na <a href="http://www.google.com/recaptcha">www.google.com/recaptcha</a>.',

	'RECAPTCHA_EXPLAIN'				=> 'By zapobiedz ingerencji robotów spamujących w forum, aby kontynuować wymagane jest przepisanie dwóch słów do pola tekstowego pod nimi.',
));

?>
