<?php
/**
 * Performance - flexible utility panel for MediaWiki
 *
 * @file
 * @ingroup Extensions
 * @author Jamison Lofthouse, 2014
 * @license GNU General Public Licence 2.0 or later
 */

$wgExtensionCredits['other'][] = array(
	'path' => __FILE__,
	'name' => 'Performance',
	'author' => array(
		'Jamison Lofthouse',
	),
	'version'  => '0.0.0 Pre-release',
	'url' => 'https://www.mediawiki.org/wiki/Manual:Extensions',
	'descriptionmsg' => 'performance-desc',
);

/* Setup */

// Register files
$wgAutoloadClasses['PerformanceHooks'] = __DIR__ . '/Performance.hooks.php';
//$wgAutoloadClasses['SpecialHelloWorld'] = __DIR__ . '/specials/SpecialHelloWorld.php'; // Retained for reference
$wgMessagesDirs['Performance'] = __DIR__ . '/i18n';
$wgExtensionMessagesFiles['PerformanceAlias'] = __DIR__ . '/Performance.i18n.alias.php';

// Register hooks
//$wgHooks['NameOfHook'][] = 'PerformanceHooks::onNameOfHook';

// Register special pages
//$wgSpecialPages['HelloWorld'] = 'SpecialHelloWorld';
//$wgSpecialPageGroups['HelloWorld'] = 'other';

// Register modules
/*
$wgResourceModules['ext.BoilerPlate.foo'] = array(
	'scripts' => array(
		'modules/ext.BoilerPlate.foo.js',
	),
	'styles' => array(
		'modules/ext.BoilerPlate.foo.css',
	),
	'messages' => array(
	),
	'dependencies' => array(
	),

	'localBasePath' => __DIR__,
	'remoteExtPath' => 'Performance',
);
*/

/* Configuration */

// Enable Foo
//$wgBoilerPlateEnableFoo = true;
