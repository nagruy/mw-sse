# mw-sse
MediaWiki Simple Security Extension

This extension send an email to the user, if any attempts to log ocurs.

Download mw-sse directory, rename it to MwSSE and move it to $MEDIA_WIKI_PATH/extensions/ directory

Add the following two lines in LocalSettings.php

wfLoadExtension( 'MwSSE' );
$wgHooks['AuthManagerLoginAuthenticateAudit'][] = 'MwSSEHooks::onlogBadLogin';

For more info: https://www.mediawiki.org/wiki/Extension:MwSSE
