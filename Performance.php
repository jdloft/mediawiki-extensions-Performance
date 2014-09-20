<?php
/**
 * Performance - flexible utility panel for MediaWiki
 *
 * @file
 * @ingroup Extensions
 * @author Jamison Lofthouse, 2014
 * @license GNU General Public Licence 2.0 or later
 */

# Alert the user that this is not a valid entry point to MediaWiki if they try to access the special pages file directly.
if ( !defined( 'MEDIAWIKI' ) ) {
	echo <<<EOT
To install this extension, put the following line in LocalSettings.php:
require_once( "$IP/extensions/Echo/Echo.php" );
EOT;
	exit( 1 );
}

# Credits
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
$dir = dirname( __FILE__ ) . '/';
$wgAutoloadClasses['PerformanceHooks'] = $dir . '/Performance.hooks.php';
$wgAutoloadClasses['SpecialPerformance'] = $dir . '/specials/SpecialPerformance.php';
$wgMessagesDirs['Performance'] = $dir . '/i18n';
$wgExtensionMessagesFiles['PerformanceAliases'] = $dir . '/Performance.alias.php';

// Register hooks
//$wgHooks['NameOfHook'][] = 'PerformanceHooks::onNameOfHook';

// Register special pages
$wgSpecialPages['Performance'] = 'SpecialPerformance';
$wgSpecialPageGroups['Performance'] = 'other';

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

	'localBasePath' => $dir,
	'remoteExtPath' => 'Performance',
);
*/

/* Configuration */

// Enable Foo
//$wgBoilerPlateEnableFoo = true;
