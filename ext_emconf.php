<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "cal_introduction".
 *
 * Auto generated 22-11-2014 10:02
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
	'title' => 'Calendar Base Introduction Package',
	'description' => 'This package delivers a new website tree and shows all out-of-the-box features of the Calendar Base extension and its addon extensions like caldav and cal_ts_service.',
	'category' => 'distribution',
	'version' => '1.1.0',
	'state' => 'beta',
	'uploadfolder' => 0,
	'createDirs' => '',
	'clearcacheonload' => 1,
	'author' => 'Mario Matzulla',
	'author_email' => 'mario@matzullas.de',
	'author_company' => '',
	'constraints' => 
	array (
		'depends' => 
		array (
			'typo3' => '6.2.0-6.2.99',
			'bootstrap_package' => '6.2.0-6.2.99',
			'realurl' => '1.12.8-1.12.99',
			//'wec_map' => '3.1.1-3.1.99',
			'cal' => '1.9.2-1.9.99',
			'cal_ts_service' => '2.0.0-2.1.99',
			'caldav' => '1.0.0-1.9.99',
			'sr_feuser_register' => '3.1.3-3.1.99',
		),
		'conflicts' => 
		array (
		),
		'suggests' => 
		array (
		),
	),
);

