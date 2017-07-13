# mw-sse
MediaWiki Simple Security Extension

This extension send an email to the user, if any attempts to log ocurs.

save MwSSE.hooks.php and extension.json in $MEDIA_WIKI_PATH/extensions/MwSSE/ directory

Add the following two lines in LocalSettings.php
wfLoadExtension( 'MwSSE' );
$wgHooks['AuthManagerLoginAuthenticateAudit'][] = 'MwSSEHooks::onlogBadLogin';
