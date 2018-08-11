<?php
# This file was automatically generated by the MediaWiki 1.31.0
# installer. If you make manual changes, please keep track in case you
# need to recreate them later.
#
# See includes/DefaultSettings.php for all configurable settings
# and their default values, but don't forget to make changes in _this_
# file, not there.
#
# Further documentation for configuration settings may be found at:
# https://www.mediawiki.org/wiki/Manual:Configuration_settings

# Protect against web entry
if ( !defined( 'MEDIAWIKI' ) ) {
	exit;
}


## Uncomment this to disable output compression
# $wgDisableOutputCompression = true;

$wgSitename = "BIT-wiki";

## The URL base path to the directory containing the wiki;
## defaults for all runtime URL paths are based off of this.
## For more information on customizing the URLs
## (like /w/index.php/Page_title to /wiki/Page_title) please see:
## https://www.mediawiki.org/wiki/Manual:Short_URL
$wgScriptPath = "";

## The protocol and server name to use in fully-qualified URLs
$wgServer = "http://no-171.tk:8088";

## The URL path to static resources (images, scripts, etc.)
$wgResourceBasePath = $wgScriptPath;

## The URL path to the logo.  Make sure you change this from the default,
## or else you'll overwrite your logo when you upgrade!
$wgLogo = "$wgResourceBasePath/resources/assets/wiki.png";

## UPO means: this is also a user preference option

$wgEnableEmail = true;
$wgEnableUserEmail = true; # UPO

$wgEmergencyContact = "apache@no-171.tk";
$wgPasswordSender = "apache@no-171.tk";

$wgEnotifUserTalk = true; # UPO
$wgEnotifWatchlist = true; # UPO
$wgEmailAuthentication = true;

## Database settings
$wgDBtype = "mysql";
$wgDBserver = "59.110.233.235";
$wgDBname = "my_wiki";
$wgDBuser = "root";
$wgDBpassword = "password";

# MySQL specific settings
$wgDBprefix = "";

# MySQL table options to use during installation or update
$wgDBTableOptions = "ENGINE=InnoDB, DEFAULT CHARSET=binary";

## Shared memory settings
$wgMainCacheType = CACHE_ACCEL;
$wgMemCachedServers = [];

## To enable image uploads, make sure the 'images' directory
## is writable, then set this to true:
$wgEnableUploads = true;
$wgUseImageMagick = true;
$wgImageMagickConvertCommand = "/usr/bin/convert";

# InstantCommons allows wiki to use images from https://commons.wikimedia.org
$wgUseInstantCommons = true;

# Periodically send a pingback to https://www.mediawiki.org/ with basic data
# about this MediaWiki instance. The Wikimedia Foundation shares this data
# with MediaWiki developers to help guide future development efforts.
$wgPingback = true;

## If you use ImageMagick (or any other shell command) on a
## Linux server, this will need to be set to the name of an
## available UTF-8 locale
$wgShellLocale = "C.UTF-8";

## Set $wgCacheDirectory to a writable directory on the web server
## to make your wiki go slightly faster. The directory should not
## be publically accessible from the web.
#$wgCacheDirectory = "$IP/cache";

# Site language code, should be one of the list in ./languages/data/Names.php
$wgLanguageCode = "zh-cn";

$wgSecretKey = "6faabbe8ac910f65dff3a1c63169cef7d318872f43f7d1538ce0d67da8304774";

# Changing this will log out all existing sessions.
$wgAuthenticationTokenVersion = "1";

# Site upgrade key. Must be set to a string (default provided) to turn on the
# web installer while LocalSettings.php is in place
$wgUpgradeKey = "10cb01f57fd79ef6";

## For attaching licensing metadata to pages, and displaying an
## appropriate copyright notice / icon. GNU Free Documentation
## License and Creative Commons licenses are supported so far.
$wgRightsPage = ""; # Set to the title of a wiki page that describes your license/copyright
$wgRightsUrl = "";
$wgRightsText = "";
$wgRightsIcon = "";

# Path to the GNU diff3 utility. Used for conflict resolution.
$wgDiff3 = "/usr/bin/diff3";

# The following permissions were set based on your choice in the installer
$wgGroupPermissions['*']['edit'] = false;

## Default skin: you can change the default skin. Use the internal symbolic
## names, ie 'vector', 'monobook':
$wgDefaultSkin = "vector";

# Enabled skins.
# The following skins were automatically enabled:
wfLoadSkin( 'MinervaNeue' );
wfLoadSkin( 'MonoBook' );
wfLoadSkin( 'Timeless' );
wfLoadSkin( 'Vector' );


# Enabled extensions. Most of the extensions are enabled by adding
# wfLoadExtensions('ExtensionName');
# to LocalSettings.php. Check specific extension documentation for more details.
# The following extensions were automatically enabled:
wfLoadExtension( 'AntiSpoof' );
// require_once "$IP/extensions/Arrays/Arrays.php";
wfLoadExtension( 'CategoryTree' );
// wfLoadExtension( 'CheckUser' );
wfLoadExtension( 'Cite' );
// wfLoadExtension( 'CiteThisPage' );
wfLoadExtension( 'CodeEditor' );
require_once "$IP/extensions/ContributionScores/ContributionScores.php";
// wfLoadExtension( 'Disambiguator' );
wfLoadExtension( 'Echo' );
// wfLoadExtension( 'Gadgets' );
// require_once "$IP/extensions/googleAnalytics/googleAnalytics.php";
// wfLoadExtension( 'ImageMap' );
wfLoadExtension( 'InputBox' );
// wfLoadExtension( 'Interwiki' );
wfLoadExtension( 'LocalisationUpdate' );
wfLoadExtension( 'Math' );
require_once "$IP/extensions/MinervaNeue/MinervaNeue.php";
wfLoadExtension( 'MobileFrontend' );
wfLoadExtension( 'MsUpload' );
// wfLoadExtension( 'MultimediaViewer' );
wfLoadExtension( 'Nuke' );
// wfLoadExtension( 'OATHAuth' );
wfLoadExtension( 'ParserFunctions' );
// wfLoadExtension( 'PdfHandler' );
// wfLoadExtension( 'PinyinSort' );
wfLoadExtension( 'Poem' );
wfLoadExtension( 'Renameuser' );
wfLoadExtension( 'ReplaceText' );
// wfLoadExtension( 'RevisionSlider' );
// wfLoadExtension( 'SpamBlacklist' );
wfLoadExtension( 'SyntaxHighlight_GeSHi' );
wfLoadExtension( 'Thanks' );
// wfLoadExtension( 'TitleBlacklist' );
// wfLoadExtension( 'UserMerge' );
wfLoadExtension( 'VisualEditor' );
wfLoadExtension( 'WikiEditor' );
wfLoadExtension( 'WikiLove' );


# End of automatically generated settings.
# Add more configuration options below.




#######  Start  of  Extension:ConfirmEdit

# 在默认配置中也有这个配置, 也许需要删除原有的, 也许不需要
// wfLoadExtension( ['ConfirmEdit','ConfirmEdit/ReCaptcha'] );
// require_once "$IP/extensions/ConfirmEdit/ConfirmEdit.php";
// require_once "$IP/extensions/ConfirmEdit/ReCaptcha.php";

// $wgCaptchaClass = 'ReCaptcha';
// $wgReCaptchaPublicKey = '6LfEemkUAAAAACUO_Qssbdj2s4JNZPABq_cv-Q29';
// $wgReCaptchaPrivateKey = '6LfEemkUAAAAAGT5Zctds15qic_3EA4arE-_EiNW';

#######  End of Extension:ConfirmEdit

wfLoadExtension( 'MobileFrontend' );
$wgMFAutodetectMobileView = true;

######## Start of Memcached settings
$wgMainCacheType = CACHE_MEMCACHED;
$wgParserCacheType = CACHE_MEMCACHED; # optional
$wgMessageCacheType = CACHE_MEMCACHED; # optional
$wgMemCachedServers = array( "mem:11211" );

$wgSessionsInObjectCache = true; # optional
$wgSessionCacheType = CACHE_MEMCACHED; # optional

######## Start of Memcached settings






// OPTIONAL: Enable VisualEditor's experimental code features
#$wgDefaultUserOptions['visualeditor-enable-experimental'] = 1;
require_once "$IP/extensions/VisualEditor/VisualEditor.php";

$wgVisualEditorRestbaseURL = 'https://59.110.233.235:7231/localhost/v1/page/html/';
$wgVisualEditorFullRestbaseURL = 'http://59.110.233.235:7231/localhost/';
// $wgVirtualRestConfig['modules']['restbase'] = [
// 	'url' => 'http://59.110.233.235:7231',
// 	'domain' => 'localhost',
//   'parsoidCompat' => true
//   ];

$wgVirtualRestConfig['modules']['parsoid'] = array(
    // URL to the Parsoid instance
    // Use port 8142 if you use the Debian package
    'url' => 'http://59.110.233.235:8000/',
    // Parsoid "domain", see below (optional)
    'domain' => 'localhost',
    // Parsoid "prefix", see below (optional)
    'prefix' => 'localhost'
);

$wgDefaultUserOptions['visualeditor-enable'] = 1;
$wgLogo="/resources/assets/bit.jpg";

