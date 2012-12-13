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
	'CAPTCHA_QA'				=> 'Q&amp;A',
	'CONFIRM_QUESTION_EXPLAIN'	=> 'To pytanie ma na celu zabezpieczenie forum przed atakiem robotów spamujących.',
	'CONFIRM_QUESTION_WRONG'	=> 'Udzielono niepoprawnej odpowiedzi na zadane pytanie.',

	'QUESTION_ANSWERS'			=> 'Odpowiedzi',
	'ANSWERS_EXPLAIN'			=> 'Wprowadź poprawne odpowiedzi na powyższe pytanie. Jedna odpowiedź na linię.',
	'CONFIRM_QUESTION'			=> 'Pytanie',

	'ANSWER'					=> 'Odpowiedź',
	'EDIT_QUESTION'				=> 'Edytuj pytanie',
	'QUESTIONS'					=> 'Pytania',
	'QUESTIONS_EXPLAIN'			=> 'For every form submission where you have enabled the Q&amp;A plugin, users will be asked one of the questions specified here. To use this plugin at least one question must be set in the default language. These questions should be easy for your target audience to answer but beyond the ability of a bot capable of running a Google™ search. Using a large and regularly changed set of questions will yield the best results. Enable the strict setting if your question relies on mixed case, punctuation or whitespace.',
	'QUESTION_DELETED'			=> 'Pytanie usunięte',
	'QUESTION_LANG'				=> 'Język',
	'QUESTION_LANG_EXPLAIN'		=> 'Język, w którym to pytanie i odpowiedzi na nie jest zapisane.',
	'QUESTION_STRICT'			=> 'Sprawdzaj dokładnie',
	'QUESTION_STRICT_EXPLAIN'	=> 'Włączy, by sprawdzać również wielkość liter, interpunkcję i odstępy.',

	'QUESTION_TEXT'				=> 'Pytanie',
	'QUESTION_TEXT_EXPLAIN'		=> 'Pytanie, które zostanie zadane użytkownikowi.',

	'QA_ERROR_MSG'				=> 'Wypełnij wszystkie pola i udziel przynajmniej jednej odpowiedzi.',
	'QA_LAST_QUESTION'			=> 'Dopóki wtyczka Q&amp;A jest aktywna, nie można usunąć wszystkich pytań.',

));

?>
