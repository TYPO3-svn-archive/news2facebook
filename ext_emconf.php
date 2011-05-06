<?php

########################################################################
# Extension Manager/Repository config file for ext "newsnews2facebook".
#
# Auto generated 07-05-2011 10:31
#
# thanks to in2code for the initial extension news2facebook
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'news2facebook',
	'description' => 'Adds Open Graph Meta Tags to tt_news: Tell Facebook which image and which text should be shown',
	'category' => 'plugin',
	'shy' => 0,
	'version' => '0.1.0',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'beta',
	'uploadfolder' => 1,
	'createDirs' => 'uploads/tx_news2facebook/',
	'modify_tables' => '',
	'clearcacheonload' => 0,
	'lockType' => '',
	'author' => 'Sebatian Felix Schwarz',
	'author_email' => 'tako-id@takomat.com',
	'author_company' => 'takomat',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'cms' => '',
			'extbase' => '',
			'fluid' => '',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:24:{s:12:"ext_icon.gif";s:4:"596a";s:17:"ext_localconf.php";s:4:"c94b";s:14:"ext_tables.php";s:4:"327a";s:14:"ext_tables.sql";s:4:"d55b";s:16:"locallang_db.xml";s:4:"a67e";s:42:"Classes/Controller/OpengraphController.php";s:4:"ab3a";s:34:"Classes/Domain/Model/Opengraph.php";s:4:"7abf";s:49:"Classes/Domain/Repository/OpengraphRepository.php";s:4:"cdc4";s:31:"Configuration/TCA/OpenGraph.php";s:4:"61d2";s:48:"Configuration/TypoScript/Opengraph/constants.txt";s:4:"9c11";s:44:"Configuration/TypoScript/Opengraph/setup.txt";s:4:"2aea";s:40:"Configuration/TypoScript/Share/setup.txt";s:4:"1792";s:39:"Resources/Private/Images/TYPO3_Logo.gif";s:4:"d9b8";s:39:"Resources/Private/Images/TYPO3_Logo.png";s:4:"3fc3";s:40:"Resources/Private/Language/locallang.xml";s:4:"4ada";s:82:"Resources/Private/Language/locallang_csh_tx_news2facebook_domain_model_opengraph.xml";s:4:"2be7";s:43:"Resources/Private/Language/locallang_db.xml";s:4:"3bbd";s:38:"Resources/Private/Layouts/default.html";s:4:"63ce";s:42:"Resources/Private/Partials/formErrors.html";s:4:"f5bc";s:47:"Resources/Private/Templates/Opengraph/Show.html";s:4:"8f2d";s:35:"Resources/Public/Icons/relation.gif";s:4:"e615";s:64:"Resources/Public/Icons/tx_news2facebook_domain_model_opengraph.gif";s:4:"905a";s:36:"Tests/Domain/Model/OpenGraphTest.php";s:4:"1a6a";s:14:"doc/manual.sxw";s:4:"d3f2";}',
);

?>