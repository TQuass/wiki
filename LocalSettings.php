<?php

# This file was automatically generated by the MediaWiki installer.
# If you make manual changes, please keep track in case you need to
# recreate them later.

$IP=realpath(dirname(__FILE__));
ini_set( "include_path", ".:$IP:$IP/includes:$IP/languages" );
require_once("includes/DefaultSettings.php" );
$wgDBhost           = getenv('DB_HOST');
$wgDBserver         = $wgDBhost;
$wgDBname           = getenv('DB_NAME');
$wgDBuser           = getenv('DB_USER');
$wgDBpassword       = getenv('DB_PASSWORD');
$wrHostName         = getenv('WEB_HOST');
$wrSearchHost       = getenv('SEARCH_HOST');
$wrSearchPort       = getenv('SEARCH_PORT');
$wrSearchPath       = getenv('SEARCH_PATH');
$wrPlaceSearchHost  = $wrSearchHost;
$wrPlaceSearchPort  = $wrSearchPort;
$wgUploadPath       = getenv('UPLOAD_PATH');
$wgUploadDirectory  = getenv('UPLOAD_DIR');
$wrRecaptchaPublicKey = getenv('RECAPTCHA_PUBLIC_KEY');
$wrRecaptchaPrivateKey = getenv('RECAPTCHA_PRIVATE_KEY');
$wrGedcomUploadDirectory = getenv('GEDCOM_DIR').'/ged';
$wrGedcomInprocessDirectory = getenv('GEDCOM_DIR').'/inprocess';
$wrGedcomXMLDirectory = getenv('GEDCOM_DIR').'/xml';
$wrGedcomExportDirectory = getenv('GEDCOM_DIR').'/export';
$wrGedcomArchiveDirectory = getenv('GEDCOM_ARCHIVE_DIR');
$wgEmergencyContact = getenv('EMERGENCY_CONTACT');
$wgPasswordSender	= getenv('EMERGENCY_CONTACT');
$wgGoogleMapKey = getenv('GOOGLE_MAP_KEY');
$wgUseGoogleAnalytics = getenv('USE_GOOGLE_ANALYTICS');
$wgFileStore['deleted']['directory'] = getenv('DELETED_IMAGES_DIR');
$wgDebugLogFile = getenv('LOG_DIR').'/mw-debug.log';
$wgRateLimitLog = getenv('LOG_DIR').'/rate-limit.log';
$wgUseMemCached = getenv('USE_MEMCACHED');
$wgMemCachedServers = array( getenv('MEMCACHED_SERVER') );
$wgProxyKey = getenv('PROXY_KEY');
$wrAdCode = getenv('AD_CODE');
$wgUseImageMagick = getenv('USE_IMAGE_MAGICK');
$wgImageMagickConvertCommand = getenv('IMAGE_MAGICK_CONVERT_COMMAND');
$wgDiff3 = getenv('DIFF3_COMMAND');
$wrBotUserID = getenv('BOT_USER_ID');
$wrAdminUserName = getenv('ADMIN_USER_NAME');

# If PHP's memory limit is very low, some operations may fail.
# let php.ini control the memory
# ini_set( 'memory_limit', '32M' );

if ( $wgCommandLineMode ) {
	if ( isset( $_SERVER ) && array_key_exists( 'REQUEST_METHOD', $_SERVER ) ) {
		die( "This script must be run from the command line\n" );
	}
} elseif ( empty( $wgNoOutputBuffer ) ) {
	## Compress output if the browser supports it
	if( !ini_get( 'zlib.output_compression' ) ) @ob_start( 'ob_gzhandler' );
}

# $wgSiteNotice = '<b>NOTICE: WeRelate will be going down at 10:15pm Pacific time, 1:15am Eastern time</b>';

$wgSitename         = "WeRelate";

$wgScriptPath	    = "/w";
$wgScript           = "$wgScriptPath/index.php";
$wgRedirectScript   = "$wgScriptPath/redirect.php";

## If using PHP as a CGI module, use the ugly URLs
$wgArticlePath      = "/wiki/$1";
# $wgArticlePath      = "$wgScript?title=$1";

$wgStylePath        = "$wgScriptPath/skins";
$wgStyleDirectory   = "$IP/skins";
$wgLogo             = "$wgStylePath/common/images/new-wr-logo-sm.png";

$wgEnableEmail = true;
$wgEnableUserEmail = true;

### DQ added
$wrIconCircleFilePath = $wgStyleDirectory.'/common/images/maps/balloon-48-circle.png';
$wrIconMaskFilePath = $wgStyleDirectory.'/common/images/maps/balloon-48-mask.png';

$wgServerName = $wrHostName;
$wgServer = 'http://'.$wgServerName;
$wgDisableTextSearch=true;
$wgDefaultUserOptions['enotifwatchlistpages'] = 1;
$wgDefaultUserOptions['watchcreations'] = 1;
$wgDefaultUserOptions['watchdefault'] = 1;
$wgDefaultUserOptions['imagesize'] = 1; // so we can fit the infobox next to them
$wgImageLimits = array (
	array(320,240),
	array(480,360),
	array(640,480),
	array(800,600),
	array(1024,768),
	array(1280,1024) );
$wgMaxDefaultImageWidth = 500;
$wgSaveDeletedFiles = true;
$wgEnableSorbs = true;
$wgNewUserNotifEmailTargets = array();
# check for new blacklist every six hours
$wgSpamBlacklistSettings = array('warningTime' => 21200, 'warningChance' => 10, 'expiryTime' => 21800);
$wgFileExtensions = array( 'png', 'gif', 'jpg', 'jpeg', 'svg', 'doc', 'pdf', 'xls', 'txt', 'tiff', 'tif');
$wgUploadSizeWarning = 2048 * 1024;
$wgGroupPermissions['*'    ]['edit']            = false;
$wgGroupPermissions['user']['deletedhistory']  = true; // can view deleted history entries, but not see or restore the text
$wgAvailableRights[] = 'undelete';
$wgGroupPermissions['sysop']['undelete']          = true;
$wgGroupPermissions['user']['reupload'] = false;
$wgGroupPermissions['user']['reupload-shared'] = false;
$wgGroupPermissions['patroller']['patrol'] = true;

$wgJobRunRate = 0; // run jobs using maintenance/runJobs.php
$wgShowIPinHeader = false;
$wgCheckDBSchema = false;
$wgAntiLockFlags = ALF_NO_LINK_LOCK | ALF_NO_BLOCK_LOCK;
$wgDisableCounters = true;
$wgDisableTextSearch = true;
$wgDisableSearchContext = true;
$wgDisableSearchUpdate = true;
$wgNamespacesWithSubpages[NS_MAIN]=true;
$wgWantedPagesThreshold = 10;

$wgMainCacheType = CACHE_MEMCACHED;
$wgMessageCacheType = CACHE_MEMCACHED;
$wgParserCacheType = CACHE_MEMCACHED;
$wgMemCachedPersistent = true;
$wgCacheEpoch = '20030516000000';
$wgMemCachedDebug   = false;
$wgMiserMode = true;
# ajax
$wgUseAjax = true;
$wgAjaxExportList = array();

/* Are the following settings worthwhile ??? */
# $wgSessionsInMemcached = true;
# $wgEnableSidebarCache = true;
# $wgUseFileCache = true; // maybe this one? - caches files for anonymous users?
# $wgUseGzip = true;
# $wgUseWatchlistCache = false; /* doesn't work if you change #days */
# $wgWLCacheTimeout = 60;

$wgRateLimits = array(
	'edit' => array(
		'anon'   => null, // for any and all anonymous edits (aggregate)
		'user'   => array(20,240), // for each logged-in user
		'newbie' => null, // for each recent account; overrides 'user'
		'ip'     => null, // for each anon and recent account
		'subnet' => null, // ... with final octet removed
		'night'   => array(20,240), // aggregate at night
		),
	'move' => array(
		'user'   => array(10,240),
		'newbie' => null,
		'ip'     => null,
		'subnet' => null,
		'night'   => array(20,240), // aggregate at night
		),
	'mailpassword' => array(
		'anon' => array(3,60),
		),
	'createaccount' => array(
	   'anon' => array(5,240),
	   ),
	);
$wrNightBegin = 60000; // 12pm MDT +6, 11pm MST +7
$wrNightEnd  = 120000; //  6am MDT +6,  5am MST +7
$wgRateLimitsExcludedGroups = array( 'sysop', 'bureaucrat', 'bot' );
/** Number of accounts each IP address may create, 0 to disable.
 * Requires memcached */
$wgAccountCreationThrottle = 5; // number of users per IP per 24 hours

$wgUseTidy = false;
$wgTidyBin = '/usr/bin/tidy';
$wgTidyConf = $IP.'/extensions/tidy/tidy.conf';

## For a detailed description of the following switches see
## http://meta.wikimedia.org/Enotif and http://meta.wikimedia.org/Eauthent
## There are many more options for fine tuning available see
## /includes/DefaultSettings.php
## UPO means: this is also a user preference option
$wgUseEnotif = true;
$wgEnotifUserTalk = true; # UPO
$wgEnotifWatchlist = true; # UPO
$wgEnotifMinorEdits = true;
$wgEmailAuthentication = true;
$wgEmailConfirmToEdit=true;

$wgDBprefix         = "";

# If you're on MySQL 3.x, this next line must be FALSE:
$wgDBmysql4 = true;

## To enable image uploads, make sure the 'images' directory
## is writable, then uncomment this:
$wgEnableUploads		= true;
$wgUseImageResize		= true;

## If you want to use image uploads under safe mode,
## create the directories images/archive, images/thumb and
## images/temp, and make them all writable. Then uncomment
## this, if it's not already uncommented:
# $wgHashedUploadDirectory = false;

## If you have the appropriate support software installed
## you can enable inline LaTeX equations:
# $wgUseTeX			= true;
$wgMathPath         = "{$wgUploadPath}/math";
$wgMathDirectory    = "{$wgUploadDirectory}/math";
$wgTmpDirectory     = "{$wgUploadDirectory}/tmp";

$wgLocalInterwiki   = $wgSitename;

$wgLanguageCode = "en";

## Default skin: you can change the default skin. Use the internal symbolic
## names, ie 'standard', 'nostalgia', 'cologneblue', 'monobook':
# $wgDefaultSkin = 'monobook';

## For attaching licensing metadata to pages, and displaying an
## appropriate copyright notice / icon. GNU Free Documentation
## License and Creative Commons licenses are supported so far.
$wgEnableCreativeCommonsRdf = true;
$wgRightsPage = ""; # Set to the title of a wiki page that describes your license/copyright
$wgRightsUrl = "http://www.gnu.org/copyleft/fdl.html";
$wgRightsText = "GNU Free Documentation License 1.2";
$wgRightsIcon = "${wgStylePath}/common/images/gnu-fdl.png";
# $wgRightsCode = "gfdl"; # Not yet used

### DQ added
/**
 * Additional namespaces. If the namespaces defined in Language.php and
 * Namespace.php are insufficient, you can create new ones here, for example,
 * to import Help files in other languages.
 * PLEASE  NOTE: Once you delete a namespace, the pages in that namespace will
 * no longer be accessible. If you rename it, then you can access them through
 * the new namespace name.
 *
 * Custom namespaces should start at 100 to avoid conflicting with standard
 * namespaces, and should always follow the even/odd main/talk pattern.
 */
#$wgExtraNamespaces =
#	array(100 => "Hilfe",
#	      101 => "Hilfe_Diskussion",
#	      102 => "Aide",
#	      103 => "Discussion_Aide"
#	      );
define('NS_GIVEN_NAME', 100);
define('NS_GIVEN_NAME_TALK', 101);
define('NS_SURNAME', 102);
define('NS_SURNAME_TALK', 103);
define('NS_SOURCE', 104);
define('NS_SOURCE_TALK', 105);
define('NS_PLACE', 106);
define('NS_PLACE_TALK', 107);
define('NS_PERSON', 108);
define('NS_PERSON_TALK', 109);
define('NS_FAMILY', 110);
define('NS_FAMILY_TALK', 111);
define('NS_MYSOURCE', 112);
define('NS_MYSOURCE_TALK', 113);
define('NS_REPOSITORY', 114);
define('NS_REPOSITORY_TALK', 115);
define('NS_PORTAL', 116);
define('NS_PORTAL_TALK', 117);
define('NS_TRANSCRIPT', 118);
define('NS_TRANSCRIPT_TALK', 119);
$wgNamespacesWithSubpages[NS_SOURCE]=true;
$wgNamespacesWithSubpages[NS_MYSOURCE]=true;
$wgNamespacesWithSubpages[NS_TRANSCRIPT]=true;
$wgNamespacesWithSubpages[NS_PROJECT]=true;

$wgExtraNamespaces =
	array(	NS_GIVEN_NAME => "Givenname",
		NS_GIVEN_NAME_TALK => "Givenname_talk",
		NS_SURNAME => "Surname",
		NS_SURNAME_TALK => "Surname_talk",
		NS_SOURCE => "Source",
		NS_SOURCE_TALK => "Source_talk",
		NS_PLACE => "Place",
		NS_PLACE_TALK => "Place_talk",
		NS_PERSON => "Person",
		NS_PERSON_TALK => "Person_talk",
		NS_FAMILY => "Family",
		NS_FAMILY_TALK => "Family_talk",
		NS_MYSOURCE => "MySource",
		NS_MYSOURCE_TALK => "MySource_talk",
		NS_REPOSITORY => "Repository",
		NS_REPOSITORY_TALK => "Repository_talk",
		NS_PORTAL => "Portal",
		NS_PORTAL_TALK => "Portal_talk",
		NS_TRANSCRIPT => "Transcript",
		NS_TRANSCRIPT_TALK => "Transcript_talk",
	);

$wgSortedNamespaces =
	array ( NS_MAIN, NS_TALK, NS_PORTAL, NS_PORTAL_TALK, NS_PERSON, NS_PERSON_TALK, NS_FAMILY, NS_FAMILY_TALK, NS_IMAGE, NS_IMAGE_TALK,
		NS_MYSOURCE, NS_MYSOURCE_TALK, NS_SOURCE, NS_SOURCE_TALK, NS_TRANSCRIPT, NS_TRANSCRIPT_TALK, NS_REPOSITORY, NS_REPOSITORY_TALK, NS_PLACE, NS_PLACE_TALK,
		NS_USER, NS_USER_TALK, NS_CATEGORY, NS_CATEGORY_TALK, NS_SURNAME, NS_SURNAME_TALK, NS_GIVEN_NAME, NS_GIVEN_NAME_TALK, 
		NS_HELP, NS_HELP_TALK, NS_PROJECT, NS_PROJECT_TALK, NS_TEMPLATE, NS_TEMPLATE_TALK, NS_MEDIAWIKI, NS_MEDIAWIKI_TALK
	);

# extensions
# order is important! Source and UserPage contain names and places so they
# must precede Name and Place
require_once("$IP/extensions/structuredNamespaces/Source.php");
require_once("$IP/extensions/structuredNamespaces/MySource.php");
require_once("$IP/extensions/structuredNamespaces/Repository.php");
require_once("$IP/extensions/structuredNamespaces/Transcript.php");
require_once("$IP/extensions/structuredNamespaces/UserPage.php");
require_once("$IP/extensions/structuredNamespaces/ArticlePage.php");
require_once("$IP/extensions/structuredNamespaces/Name.php");
require_once("$IP/extensions/structuredNamespaces/Place.php");
require_once("$IP/extensions/structuredNamespaces/Person.php");
require_once("$IP/extensions/structuredNamespaces/Family.php");
require_once("$IP/extensions/structuredNamespaces/SDImage.php");
require_once("$IP/extensions/structuredNamespaces/SpecialPlaceMap.php");
require_once("$IP/extensions/structuredNamespaces/ESINHandler.php");
require_once("$IP/extensions/familytree/FamilyTree.php");
require_once("$IP/extensions/familytree/FamilyTreeAjaxFunctions.php");
require_once("$IP/extensions/familytree/FamilyTreePropagator.php");
require_once("$IP/extensions/familytree/SpecialShowFamilyTree.php");
require_once("$IP/extensions/familytree/SpecialTreeRelated.php");
require_once("$IP/extensions/familytree/SpecialTreeDeletionImpact.php");
require_once("$IP/extensions/familytree/SpecialTreeCountWatchers.php");
require_once("$IP/extensions/gedcom/GedcomAjaxFunctions.php");
require_once("$IP/extensions/gedcom/SpecialGedcomPage.php");
require_once("$IP/extensions/gedcom/SpecialGedcoms.php");
require_once("$IP/extensions/gedcom/GedcomExportJob.php");
require_once("$IP/extensions/names/SpecialNames.php");
require_once("$IP/extensions/names/SpecialNamesLog.php");
require_once("$IP/extensions/other/SpecialDashboard.php");
require_once("$IP/extensions/other/SpecialShowPedigree.php");
require_once("$IP/extensions/other/GetPedigreeData.php");
require_once("$IP/extensions/other/SpecialTrees.php");
require_once("$IP/extensions/other/SpecialBrowse.php");
require_once("$IP/extensions/other/SpecialAddPage.php");
require_once("$IP/extensions/other/SpecialAddSubpage.php");
require_once("$IP/extensions/other/SpecialSearch.php");
require_once("$IP/extensions/other/SpecialImportGedcom.php");
require_once("$IP/extensions/other/SpecialNetwork.php");
require_once("$IP/extensions/other/SpecialEmail.php");
require_once("$IP/extensions/other/SpecialUnsubscribe.php");
require_once("$IP/extensions/other/SpecialCompare.php");
require_once("$IP/extensions/other/SpecialMerge.php");
require_once("$IP/extensions/other/SpecialShowDuplicates.php");
require_once("$IP/extensions/other/SpecialReviewMerge.php");
require_once("$IP/extensions/other/SpecialList.php");
require_once("$IP/extensions/other/IndexAjaxFunctions.php");
require_once("$IP/extensions/other/ListAjaxFunctions.php");
require_once("$IP/extensions/other/Hooks.php");
require_once("$IP/extensions/other/GetTreeData.php");
require_once("$IP/extensions/cite/Cite.php");
#require_once("$IP/extensions/NewUserNotif/NewUserNotif.php");
#require_once("$IP/extensions/SpamBlacklist/SpamBlacklist.php"); calls parser twice, which messes up Cite
require_once("$IP/extensions/RenameUser/SpecialRenameuser.php");
?>
