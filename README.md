# mw-sse
MediaWiki Simple Security Extension

save MwSSE.hooks.php and extension.json in $MEDIA_WIKI_PATH/extensions/MwSSE/ directory

Add the following two lines in LocalSettings.php
wfLoadExtension( 'MwSSE' );
$wgHooks['AuthManagerLoginAuthenticateAudit'][] = 'MwSSEHooks::onlogBadLogin';
