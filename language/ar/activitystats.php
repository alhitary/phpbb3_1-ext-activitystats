<?php
/**
*
* @package phpBB Extension - Activity Stats
* @copyright (c) 2014 Robet Heim
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
* Translated by Basil Taha Alhitary - www.alhitary.net
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
// for the normal sites
	'ACTIVITY_STATS'					=> 'إحصائيات اليوم',
	'ACTIVITY_STATS_LATEST1'			=> 'في',
	'ACTIVITY_STATS_LATEST2'			=> '',//used for parts like o'clock in the timedisplay (last at vw:xy "o'clock")

	'ACTIVITY_STATS_NEW_TOPICS'			=> 'المواضيع الجديدة <strong>%d</strong>',
	'ACTIVITY_STATS_NEW_POSTS'			=> 'المشاركات الجديدة <strong>%d</strong>',
	'ACTIVITY_STATS_NEW_USERS'			=> 'الأعضاء الجُدد <strong>%d</strong>',

	'ACTIVITY_STATS_TOTAL'				=> array(
		0		=> 'إجمالي الأعضاء المتصلين كان <strong>0</strong> عضو :: ',
		1		=> 'إجمالي الأعضاء المتصلين كان <strong>%d</strong> عضو :: ',
		2		=> 'إجمالي الأعضاء المتصلين كان <strong>%d</strong> أعضاء :: ',
	),
	'ACTIVITY_STATS_REG_USERS'			=> array(
		0		=> '0 مسجلين',
		1		=> '%d مسجل',
		2		=> '%d مسجلين',
	),
	'ACTIVITY_STATS_HIDDEN'				=> array(
		0		=> '0 مخفي',
		1		=> '%d مخفي',
		2		=> '%d مخفيين',
	),
	'ACTIVITY_STATS_BOTS'				=> array(
		0		=> '0 محرك بحث',
		1		=> '%d محرك بحث',
		2		=> '%d محركات بحث',
	),
	'ACTIVITY_STATS_GUESTS'				=> array(
		0		=> '0 زائر',
		1		=> '%d زائر',
		2		=> '%d زائرين',
	),

	'ACTIVITY_STATS_WORD'				=> ' و',
	'ACTIVITY_STATS_EXP'				=> 'المعلومات التالية تعتمد على نشاط الأعضاء خلال الـ24 ساعة',
	'ACTIVITY_STATS_EXP_TIME'			=> array(
		0		=> 'المعلومات التالية تعتمد على نشاط الأعضاء في هذه اللحظة.', // h=m=s=0 
		1		=> 'المعلومات التالية تعتمد على نشاط الأعضاء خلال الفترة الماضية ', // first non zero value is 1
		2		=> 'المعلومات التالية تعتمد على نشاط الأعضاء خلال الفترة الماضية ', // first non zero value is >1
	),
	'ACTIVITY_STATS_HOURS'				=> array(
		0		=> '',
		1		=> '%%s %1$s ساعة',
		2		=> '%%s %1$s ساعات',
	),
	'ACTIVITY_STATS_MINUTES'			=> array(
		0		=> '',
		1		=> '%%s %1$s دقيقة',
		2		=> '%%s %1$s دقائق',
	),
	'ACTIVITY_STATS_SECONDS'			=> array(
		0		=> '',
		1		=> '%%s %1$s ثانية',
		2		=> '%%s %1$s ثواني',
	),
	'ACTIVITY_STATS_RECORD'				=> 'أكبر عدد للأعضاء المتصلين كان <strong>%1$s</strong> في %2$s',
	'ACTIVITY_STATS_RECORD_TIME'		=> 'أكبر عدد للأعضاء المتصلين كان <strong>%1$s</strong> بين %2$s و %3$s',
));
