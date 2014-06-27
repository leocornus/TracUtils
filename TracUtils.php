<?php
/**
 * TracUtils extension
 *
 */

/**
 * Protect against register_globals vulnerabilities.
 * This line must be present before any global variable is referenced.
 */
if ( !defined( 'MEDIAWIKI' ) ) {
    die( "This is not a valid entry point.\n" );
}

// Extension credits that show up on Special:Version
$wgExtensionCredits['specialpage'][] = array(
    'path' => __FILE__,
    'name' => 'TracUtils',
    'version' => '0.1.0',
    'author' => array( 'Sean Chen' ),
    'url' => 'https://github.com/leocornus/TracUtils',
    'descriptionmsg' => 'tracutils-desc',
    'description' => 'utilities for reference Trac project on MediaWiki'
);

$dir = dirname(__FILE__) . '/';
// ticket Tag.
$wgAutoloadClasses['TicketTag'] = $dir . 'TicketTag.php';
$wgHooks['ParserFirstCallInit'][] = 'TicketTag::registerParserHook';
