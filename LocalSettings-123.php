<?php
# This file was automatically generated by the MediaWiki 1.31.1
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

$wgSitename = "BIT-Clinic";

## The URL base path to the directory containing the wiki;
## defaults for all runtime URL paths are based off of this.
## For more information on customizing the URLs
## (like /w/index.php/Page_title to /wiki/Page_title) please see:
## https://www.mediawiki.org/wiki/Manual:Short_URL
$wgScriptPath = "";

## The protocol and server name to use in fully-qualified URLs
$wgServer = "http://10.1.139.123:8088";

## The URL path to static resources (images, scripts, etc.)
$wgResourceBasePath = $wgScriptPath;

## The URL path to the logo.  Make sure you change this from the default,
## or else you'll overwrite your logo when you upgrade!
$wgLogo = "$wgResourceBasePath/resources/assets/wiki.png";

## UPO means: this is also a user preference option

$wgEnableEmail = true;
$wgEnableUserEmail = true; # UPO

$wgEmergencyContact = "apache@10.1.139.123";
$wgPasswordSender = "apache@10.1.139.123";

$wgEnotifUserTalk = true; # UPO
$wgEnotifWatchlist = true; # UPO
$wgEmailAuthentication = true;

## Database settings
$wgDBtype = "mysql";
$wgDBserver = "database";
$wgDBname = "my_wiki";
$wgDBuser = "root";
$wgDBpassword = "passwordthat1use";

# MySQL specific settings
$wgDBprefix = "";

# MySQL table options to use during installation or update
$wgDBTableOptions = "ENGINE=InnoDB, DEFAULT CHARSET=binary";

## Shared memory settings
$wgMainCacheType = CACHE_MEMCACHED;
$wgMemCachedServers = [ 'mem:11211' ];

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

$wgSecretKey = "f5bf64c6e8f8ab32bb219839efddb875184dba8825c0dc58c6e5f8d42bb83b29";

# Changing this will log out all existing sessions.
$wgAuthenticationTokenVersion = "1";

# Site upgrade key. Must be set to a string (default provided) to turn on the
# web installer while LocalSettings.php is in place
$wgUpgradeKey = "57e35c01df6f1e4b";

## For attaching licensing metadata to pages, and displaying an
## appropriate copyright notice / icon. GNU Free Documentation
## License and Creative Commons licenses are supported so far.
$wgRightsPage = ""; # Set to the title of a wiki page that describes your license/copyright
$wgRightsUrl = "https://creativecommons.org/licenses/by/4.0/";
$wgRightsText = "知识共享署名";
$wgRightsIcon = "$wgResourceBasePath/resources/assets/licenses/cc-by.png";

# Path to the GNU diff3 utility. Used for conflict resolution.
$wgDiff3 = "/usr/bin/diff3";

# The following permissions were set based on your choice in the installer
$wgGroupPermissions['*']['createaccount'] = false;
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
wfLoadExtension( 'AJAXPoll' );
wfLoadExtension( 'AntiSpoof' );
wfLoadExtension( 'CategoryTree' );
wfLoadExtension( 'CheckUser' );
wfLoadExtension( 'Cite' );
wfLoadExtension( 'CiteThisPage' );
wfLoadExtension( 'CodeEditor' );
wfLoadExtension( 'CodeMirror' );
wfLoadExtension( 'ConfirmEdit' );
require_once "$IP/extensions/ContributionScores/ContributionScores.php";
wfLoadExtension( 'Disambiguator' );
wfLoadExtension( 'Echo' );
wfLoadExtension( 'Gadgets' );
require_once "$IP/extensions/googleAnalytics/googleAnalytics.php";
wfLoadExtension( 'HostStats' );
wfLoadExtension( 'ImageMap' );
require_once "$IP/extensions/Info/Info.php";
wfLoadExtension( 'InputBox' );
wfLoadExtension( 'Interwiki' );
wfLoadExtension( 'Linter' );
wfLoadExtension( 'LocalisationUpdate' );
wfLoadExtension( 'Math' );
wfLoadExtension( 'MobileFrontend' );
wfLoadExtension( 'MsUpload' );
wfLoadExtension( 'MultiBoilerplate' );
wfLoadExtension( 'MultimediaViewer' );
wfLoadExtension( 'Nuke' );
wfLoadExtension( 'OATHAuth' );
wfLoadExtension( 'ParserFunctions' );
wfLoadExtension( 'PdfHandler' );
wfLoadExtension( 'PinyinSort' );
wfLoadExtension( 'Poem' );
wfLoadExtension( 'Renameuser' );
wfLoadExtension( 'ReplaceText' );
wfLoadExtension( 'RevisionSlider' );
wfLoadExtension( 'Score' );
wfLoadExtension( 'SimpleMathJax' );
require_once "$IP/extensions/SocialProfile/SocialProfile.php";
wfLoadExtension( 'SpamBlacklist' );
wfLoadExtension( 'SyntaxHighlight_GeSHi' );
wfLoadExtension( 'Thanks' );
wfLoadExtension( 'TitleBlacklist' );
wfLoadExtension( 'UserMerge' );
wfLoadExtension( 'VisualEditor' );
wfLoadExtension( 'WikiEditor' );
wfLoadExtension( 'WikiLove' );


# End of automatically generated settings.
# Add more configuration options below.





######################　be carefull when you try to modify the code above
######################  the code above are genenrated when you install(init) the wiki
########################----------- self custom configuration below---------#####
###################### the code below are make by us

#######  Start  of  Extension:ConfirmEdit

# 在默认配置中也有这个配置, 也许需要删除原有的, 也许不需要
// require_onces([ 'ConfirmEdit', 'ConfirmEdit/ReCaptchaNoCaptcha' ]);
// $wgCaptchaClass = 'ReCaptchaNoCaptcha';
// $wgReCaptchaSiteKey = '6Lf1iGkUAAAAAJ1CVwO4LNqrNvN5KV9xMG91CtAu';
// $wgReCaptchaSecretKey = '6Lf1iGkUAAAAAPD3gQI9J1J70eA765wRwTqE_OND';
wfLoadExtension( 'ConfirmEdit/QuestyCaptcha' );
$wgCaptchaClass = 'QuestyCaptcha';

// Add your questions in LocalSettings.php using this format
$wgCaptchaQuestions[] = array( 'question' => "A question?", 'answer' => ["An Answer", "An Answer."]);
$wgCaptchaQuestions[] = array( 'question' => 'How much wood would a woodchuck chuck if a woodchuck could chuck wood?', 'answer' => 'as much wood as...' );
$wgCaptchaQuestions[] = array( 'question' => "What is this wiki's name?", 'answer' => "BITNP-Clinic" );
$wgCaptchaQuestions[] = array( 'question' => "我们大学的缩写是？", "anser" => array('bit','BIT','北理工','北理') );
// You can also provide several acceptable answers to a given question (the answers shall be in lowercase):
$wgCaptchaQuestions[] = array( 'question' => "2 + 2 - 2 - 2 + 2 + 2?", 'answer' => array( '4', 'four' ) );
$wgCaptchaQuestions[] = array( 'question' => "良乡最北边的教学楼是什么", 'answer' => array( '丹枫', '丹枫楼' ) );

#######  End of Extension:ConfirmEdit

require_once( "$IP/extensions/MobileFrontend/MobileFrontend.alias.php" );
$wgMFAutodetectMobileView = true;

######## Start of Memcached settings
$wgMainCacheType = CACHE_MEMCACHED;
$wgParserCacheType = CACHE_MEMCACHED; # optional
$wgMessageCacheType = CACHE_MEMCACHED; # optional
$wgMemCachedServers = array( "mem:11211" );

$wgSessionsInObjectCache = true; # optional
$wgSessionCacheType = CACHE_MEMCACHED; # optional

######## end of Memcached settings

######## Start of Extension:hoststats
$wgGroupPermissions['sysop']['hoststats'] = true;
######## end of Extension:hoststats



######## Start of Extension:UserCheck
// 使管理员也拥有权限
$wgGroupPermissions['sysop']['checkuser'] = true;

$wgGroupPermissions['sysop']['checkuser-log'] = true;
######## end of Extension:UserCheck

######## Start of Extension:InterWiki
$wgGroupPermissions['sysop']['interwiki'] = true;

######## End of Extension:InterWiki

######## Start of Extension:MsUpload
$wgDefaultUserOptions['usebetatoolbar'] = 1;
######## End of Extension:MsUpload

######## Start of Extension:Usermerge
$wgGroupPermissions['sysop']['usermerge'] = true;
######## end of Extension:MsUpload

######## Start of Extension:CodeMirror
# Enables use of CodeMirror by default but still allow users to disable it
$wgDefaultUserOptions['usecodemirror'] = 1;
######## end of Extension:CodeMirror
######## Start of Extension:AJAXPoll

# anons
# default: anons cannot vote and will never see results
$wgGroupPermissions['*']['ajaxpoll-vote'] = false;
$wgGroupPermissions['*']['ajaxpoll-view-results'] = false;
$wgGroupPermissions['*']['ajaxpoll-view-results-before-vote'] = false;

# users
# default: users can vote and can see poll results - when they have voted
$wgGroupPermissions['user']['ajaxpoll-vote'] = true;
$wgGroupPermissions['user']['ajaxpoll-view-results'] = true;

######## End of Extension:AJAXPoll


#############  Start of Extension:lilypond

wfLoadExtension( 'Score' );
$wgScoreLilyPond = '/usr/local/bin/lilypond'; /* required */
$wgScoreAbc2Ly = '/usr/local/bin/abc2ly'; /* if you want ABC to LilyPond conversion */
$wgScoreTimidity = '/usr/bin/timidity'; /* if you want MIDI to Vorbis conversion */
$wgScoreTrim = true; /* Set to false if you don't want score trimming */

########  End of Extension:lilypond

#############  Start of Extension:lilypond

$wgDefaultAvatar = '/resources/assets/bitnp-trans.png';


########  End of Extension:lilypond

// OPTIONAL: Enable VisualEditor's experimental code features
$wgDefaultUserOptions['visualeditor-enable-experimental'] = 0;
// require_once "$IP/extensions/VisualEditor/VisualEditor.php";

$wgVisualEditorRestbaseURL = 'https://10.1.139.123:7231/localhost/v1/page/html/';
$wgVisualEditorFullRestbaseURL = 'http://10.1.139.123:7231/localhost/v1/';
$wgVirtualRestConfig['modules']['restbase'] = [
 'url' => 'http://restbase:7231',
 'domain' => 'localhost',
  'parsoidCompat' => true
  ];

$wgVirtualRestConfig['modules']['parsoid'] = array(
    // URL to the Parsoid instance
    // Use port 8142 if you use the Debian package
    'url' => 'http://parsoid:8000/',
    // Parsoid "domain", see below (optional)
    'domain' => 'localhost',
    // Parsoid "prefix", see below (optional)
    'prefix' => 'localhost'
);

$wgDefaultUserOptions['visualeditor-enable'] = 1;

###### math
// ensure 'mathml'; is added to the $wgMathValidModes array;
$wgMathValidModes[] = 'mathml';

// Set Mathoid as default rendering option;
$wgDefaultUserOptions['math'] = 'mathml';
$wgMathMathMLUrl = 'http://mathmoid:10044/'; # IP of Mathoid server
$wgMathFullRestbaseURL = 'http://restbase:7231/localhost/v1/';
#####




$wgLogo="/resources/assets/bitnp-trans.png";
$wgFavicon = "/resources/assets/favicon.ico";
