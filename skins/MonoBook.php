<?php
/**
 * MonoBook nouveau
 *
 * Translated from gwicke's previous TAL template version to remove
 * dependency on PHPTAL.
 *
 * @todo document
 * @package MediaWiki
 * @subpackage Skins
 */

if( !defined( 'MEDIAWIKI' ) )
	die( -1 );

/** */
require_once('includes/SkinTemplate.php');

/**
 * Inherit main code from SkinTemplate, set the CSS and template filter.
 * @todo document
 * @package MediaWiki
 * @subpackage Skins
 */
class SkinMonoBook extends SkinTemplate {
	/** Using monobook. */
	function initPage( &$out ) {
		SkinTemplate::initPage( $out );
		$this->skinname  = 'monobook';
		$this->stylename = 'monobook';
		$this->template  = 'MonoBookTemplate';
	}

// WERELATE - copied from SkinTemplate
	function buildPersonalUrls() {
		global $wgTitle, $wgShowIPinHeader;

		$fname = 'SkinTemplate::buildPersonalUrls';
		$pageurl = $wgTitle->getLocalURL();
		wfProfileIn( $fname );

		/* set up the default links for the personal toolbar */
		$personal_urls = array();
		if ($this->loggedin) {
			$personal_urls['userpage'] = array(
				'text' => $this->username,
				'href' => &$this->userpageUrlDetails['href'],
				'class' => $this->userpageUrlDetails['exists']?false:'new',
				'active' => ( $this->userpageUrlDetails['href'] == $pageurl )
			);
         $personal_urls['preferences'] = array(
            'text' => wfMsg('settings'),
            'href' => $this->makeNSUrl('Preferences', '', NS_SPECIAL),
         );
		}
      else {
			if( $wgShowIPinHeader && isset(  $_COOKIE[ini_get("session.name")] ) ) {
				$personal_urls['anonlogin'] = array(
					'text' => wfMsg('userlogin'),
					'href' => $this->makeSpecialUrl('Userlogin', 'returnto=' . $this->thisurl ),
					'active' => ( NS_SPECIAL == $wgTitle->getNamespace() && 'Userlogin' == $wgTitle->getDBkey() )
				);
			} else {
				$personal_urls['login'] = array(
					'text' => wfMsg('userlogin'),
					'href' => $this->makeSpecialUrl('Userlogin', 'returnto=' . $this->thisurl ),
					'active' => ( NS_SPECIAL == $wgTitle->getNamespace() && 'Userlogin' == $wgTitle->getDBkey() )
				);
			}
			$personal_urls['newuser'] = array(
					'text' => wfMsg('createaccount'),
					'href' => $this->makeSpecialUrl('Userlogin', 'type=signup&returnto=' . $this->thisurl )
			);
		}
      $personal_urls['donate'] = array(
         'text' => wfMsg('volunteer'),
         'href' => $this->makeNSUrl('Maintenance', '', NS_PORTAL)
      );
      $personal_urls['help'] = array();
      if ($this->loggedin) {
			$personal_urls['logout'] = array(
				'text' => wfMsg('userlogout'),
				'href' => $this->makeSpecialUrl( 'Userlogout',
					$wgTitle->getNamespace() === NS_SPECIAL && $wgTitle->getText() === 'Preferences' ? '' : "returnto={$this->thisurl}"
				)
			);
      }
		wfRunHooks( 'PersonalUrls', array( &$personal_urls, &$wgTitle ) );
		wfProfileOut( $fname );
		return $personal_urls;
	}
}

/**
 * @todo document
 * @package MediaWiki
 * @subpackage Skins
 */
class MonoBookTemplate extends QuickTemplate {
   function getMenuText($text, $target) {
      $msg = str_replace(' ','&nbsp;',htmlspecialchars(wfMsg($text)));
      $value = "<li id=\"menu-{$text}\">";
      if (is_array($target)) {
         $value .= "<span class=\"wr-menu-more\">$msg</span>▼<ul>";
         foreach ($target as $innerText => $innerTarget) {
            $hdr = '';
            if (substr($innerText,0,1) == '-') {
               $value .= "<li class=\"wr-menu-sep\"><span class=\"wr-menu-sep\">&nbsp;</span></li>";
               $innerText = substr($innerText,1);
            }
            $msg = str_replace(' ','&nbsp;',htmlspecialchars(wfMsg($innerText)));
            $value .= "<li id=\"menu-{$innerText}\"><a href=\"{$innerTarget}\">$msg</a></li>";
         }
         $value .= "</ul>";
      }
      else {
         $value .= "<a href=\"{$target}\">$msg</a>";
      }
      $value .= "</li>";
      return $value;
   }

   function getActionMenuText($key, $action) {
      $key = htmlspecialchars($key);
      $class = (string)$action['class'] ? ' class="'.htmlspecialchars($action['class']).'"' : '';
      $href = $action['href'];
      $title = (string)$action['title'] ? ' title="'.htmlspecialchars($action['title']).'"' : '';
      $text = str_replace(' ','&nbsp;',htmlspecialchars($action['text']));
      return <<<END
<li id="actions-$key"$class>
  <a href="$href" rel="nofollow"$title>$text</a>
</li>
END;
   }

	/**
	 * Template filter callback for MonoBook skin.
	 * Takes an associative array of data set from a SkinTemplate-based
	 * class, and a wrapper for MediaWiki's localization database, and
	 * outputs a formatted page.
	 *
	 * @access private
	 */
	function execute() {
		// Suppress warnings to prevent notices about missing indexes in $this->data
		wfSuppressWarnings();
// WERELATE - added vml namespace
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xml:lang="<?php $this->text('lang') ?>" lang="<?php $this->text('lang') ?>" dir="<?php $this->text('dir') ?>">
  <?php
  global $wgTitle, $wgUser, $wgUseGoogleAnalytics, $wgOut, $wgScriptPath, $wgArticle, $wgRequest;

  $sk = $wgUser->getSkin();
  $ns = $wgTitle->getNamespace();
  $titleString = $wgTitle->getText();
  $noTitlePage = false;
  $overrideTitle = '';
  $suppressAds = ($wgRequest->getVal('action') == 'edit' || !$this->data['notspecialpage'] || ($ns == NS_MAIN && $titleString == 'Main Page'));
  if ($wgRequest->getVal('msg')) {
     $this->data['msg'] = wfMsg($wgRequest->getVal('msg'));
  }
  $mainPage = ($ns == NS_MAIN && $titleString == 'Main Page');
  if ($mainPage) {
  		$overrideTitle = '<span class="wr-maintitle">The World\'s Largest Genealogy Wiki</span>';
  }
  $menulinks = array('home' => '/wiki/Main_Page',
  							'search' => array('all' => '/wiki/Special:Search', 'articles' => '/wiki/Special:Search/Article', 'people' => '/wiki/Special:Search/Person',
  										'images' => '/wiki/Special:Search/Image', 'sources' => '/wiki/Special:Search/Source', 'places' => '/wiki/Special:Search/Place'),
                     'list' => array('people' => ($wgUser->isLoggedIn() ? '/wiki/Special:ListPages/' . urlencode($wgUser->getName()) : '/wiki/Special:Userlogin'),
                                     'contributions' => ($wgUser->isLoggedIn() ? '/wiki/Special:Contributions/' . urlencode($wgUser->getName()) : '/wiki/Special:Userlogin')),
  							'add' => array('article' => '/wiki/Special:AddPage/Article', 'person' => '/wiki/Special:AddPage/Person',
										'family' => '/wiki/Special:AddPage/Family', 'image' => '/wiki/Special:Upload',
										'mysource' => '/wiki/Special:AddPage/MySource', 'source' => '/wiki/Special:AddPage/Source',
                              'transcript' => '/wiki/Special:AddPage/Transcript',
										'repository' => '/wiki/Special:AddPage/Repository', 'place' => '/wiki/Special:AddPage/Place',
										'userpage' => '/wiki/Special:AddPage/User',
										'otherpage' => '/wiki/Special:AddPage', '-importgedcom' => '/wiki/Special:ImportGedcom'),
  							'myrelate' => array('dashboard' => '/wiki/Special:Dashboard',
										'network' => ($wgUser->isLoggedIn() ? '/wiki/Special:Network/' . urlencode($wgUser->getName()) : '/wiki/Special:Userlogin'), 
										'watchlist' => ($wgUser->isLoggedIn() ? '/wiki/Special:Watchlist/' . urlencode($wgUser->getName()) : '/wiki/Special:Userlogin'),
  										'userprofile' => ($wgUser->isLoggedIn() ? '/wiki/User:' . urlencode($wgUser->getName()) : '/wiki/Special:Userlogin'),
  										'talkpage' => ($wgUser->isLoggedIn() ? '/wiki/User_talk:' . urlencode($wgUser->getName()) : '/wiki/Special:Userlogin'), 
  										'trees' => '/wiki/Special:Trees', 
  										'showduplicates' => ($wgUser->isLoggedIn() ? '/wiki/Special:ShowDuplicates/' . urlencode($wgUser->getName()) : '/wiki/Special:Userlogin'), 
  										'-launchfte' => '/fte'),
  							'admin' => array('recentchanges' => '/wiki/Special:Recentchanges', 
  										'nominate' => '/wiki/WeRelate:Featured_page_nominations', 'logs' => '/wiki/Special:Log',
										'newimages' => '/wiki/Special:Newimages', 'reviewneeded' => '/wiki/Category:Review_needed',
                              'gedcomreview' => '/wiki/Special:Gedcoms', 'speedydelete' => '/wiki/Category:Speedy_Delete',
                              'nameslog' => '/wiki/Special:NamesLog',
										'browseall' => '/wiki/Special:Browse', 'comparepages' => '/wiki/Special:Compare',
										'specialpages' => '/wiki/Special:Specialpages'),
                     );
  $helpLinks = array('contents' => '/wiki/Help:Contents', 'search' => '/wiki/Special:Search/Help', 'faq' => '/wiki/Help:FAQ',
  							'support' => '/wiki/WeRelate_talk:Support', 'portals' => '/wiki/Portal:Community', 'watercooler' => '/wiki/WeRelate_talk:Watercooler', 'suggestions'=>'/wiki/WeRelate:Suggestions');
  $moreActions = array('protect', 'unprotect','delete', 'share','pedigree', 'match', 'compare-parents', 'compare-spouses', 'compare-husbands', 'compare-wives');
  ?>
<head>
	<meta http-equiv="Content-Type" content="<?php $this->text('mimetype') ?>; charset=<?php $this->text('charset') ?>" />
	<?php $this->html('headlinks') ?>
	<title><?php $this->text('pagetitle') ?></title>
   <link rel="stylesheet" type="text/css" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.12/themes/redmond/jquery-ui.css">
   <style type="text/css" media="all">/*<![CDATA[*/ @import "<?php $this->text('stylepath') ?>/<?php $this->text('stylename') ?>/main.70.css"; /*]]>*/</style>
	<link rel="stylesheet" type="text/css" <?php if(empty($this->data['printable']) ) { ?>media="print"<?php } ?> href="<?php $this->text('stylepath') ?>/common/commonPrint.7.css" />
   <script type="<?php $this->text('jsmimetype') ?>" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
   <script type="<?php $this->text('jsmimetype') ?>" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js"></script>
   <script type="<?php $this->text('jsmimetype') ?>" src="<?php echo $wgScriptPath; ?>/jquery.json-2.3.min.1.js"></script>
   <script type="<?php $this->text('jsmimetype') ?>" src="<?php echo $wgScriptPath; ?>/jquery.ezpz_hint.min.2.js"></script>
   <script type="<?php $this->text('jsmimetype') ?>" src="<?php echo $wgScriptPath; ?>/jquery.plugins.4.js"></script>
<?php
//   jquery.bgiframe.min.1.js separator.js
//   jquery.clickmenu.yui.3.js separator.js
//   jquery.cluetip.yui.1.js separator.js
//   jstorage.min.1.js separator.js
?>
   <script type="text/javascript">var addthis_config = {pubid: 'ra-4dac29732a79195f', services_exclude: 'print'};</script>
   <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#acync=1"></script>
   <script type="<?php $this->text('jsmimetype') ?>" src="<?php $this->text('stylepath' ) ?>/common/wikibits.yui.30.js"></script>
<!-- Head Scripts -->
<?php $this->html('headscripts') ?>
   <?php	if($this->data['trackbackhtml']) print $this->data['trackbackhtml']; ?>
</head>
<body id="www-werelate-org" <?php if($this->data['body_ondblclick']) { ?>ondblclick="<?php $this->text('body_ondblclick') ?>"<?php }
   if ($this->data['body_onload'] || $wgOut->getOnloadHandler()) { ?>onload="<?php if ($this->data['body_onload']) { $this->text('body_onload'); ?>;<?php }
	if ($wgOut->getOnloadHandler()) { echo htmlspecialchars($wgOut->getOnloadHandler()); } ?>;"<?php } ?>>
<div id="wr-header">
   <div id="wr-logo">
      <a href="/" title="<?php $this->msg('mainpage') ?>"><img src="<?php $this->text('logopath') ?>"/></a>
      <div class="wr-sidebar-separator"></div>
   </div>
   <div id="wr-navtitle">
      <div id="wr-navigation">
         <div class="portlet" id="wr-menu">
            <h5><?php echo 'Menu'; ?></h5>
            <div class="nav-body">
               <ul id="wr-menulist">
               <?php
               foreach( $menulinks as $text => $target) {
                  echo $this->getMenuText($text, $target);
               }
               ?>
               </ul>
            </div>
         </div>
         <div class="portlet" id="wr-personal">
            <h5><?php $this->msg('personaltools') ?></h5>
            <div class="nav-body">
               <ul id="wr-personallist">
               <?php
               foreach($this->data['personal_urls'] as $key => $item) {
                  if ($key == 'help') {
                     echo $this->getMenuText($key, $helpLinks);
                  }
                  else {
               ?>
                  <li id="personal-<?php echo htmlspecialchars($key) ?>"<?php if ($item['active']) { ?> class="active"<?php } ?>>
                     <a href="<?php	echo htmlspecialchars($item['href']) ?>"<?php if(!empty($item['class'])) { ?> class="<?php
                        echo htmlspecialchars($item['class']) ?>"<?php } ?>><?php	echo htmlspecialchars($item['text']) ?></a>
                  </li>
               <?php
                  }
               }
               ?>
               </ul>
            </div>
         </div>
      </div>
      <div id="wr-titlearea">
         <div id="wr-searchbox">
            <form method="get" action="/wiki/Special:Search">
               <input type="hidden" name="go" value="true"/>
               <input class="wr-searchbox-text" type="text" title="Search" name="k"/>
               <button type="submit" title="Search WeRelate">&nbsp;</button>
            </form>
         </div>
         <?php if(!$noTitlePage) {
            $firstHeadingClass = ($ns == NS_PERSON || $ns == NS_FAMILY ? "firstHeadingPersonFamily" : "firstHeading");
         ?>
            <div id="wr-title">
                <h1 class="<?php echo $firstHeadingClass; ?>"><?php if ($overrideTitle) { echo $overrideTitle; } else { $this->data['displaytitle']!=""?$this->text('title'):$this->html('title'); } ?></h1>
            </div>
         <?php } ?>
         <div id="contentSub"><?php
         $this->html('subtitle');
         if ($wgRequest->getVal('target') && !$wgRequest->getVal('action') && $this->data['notspecialpage']) {
            echo '<div style="color:red; margin:4px 8px">To select this page: click the <i>Back</i> button on your browser (if using Chrome, right-click and select <i>Back</i>), then click <i>Select</i></div>';
         }
         if ($wgTitle->getNamespace() == NS_USER && strpos($wgTitle->getText(), '/') === false) {
            $userName = $wgTitle->getText();
            $userTalk = Title::newFromText($userName, NS_USER_TALK);
              echo '<div id="wr-leavemessage"><ul><li>'.$sk->makeKnownLinkObj($userTalk, "Leave a message for $userName", "action=edit&section=new").'</li></ul></div>';
         }
         else if (!$mainPage && !$wgTitle->isTalkPage() && $wgTitle->getTalkPage()->getArticleId() != 0) {
              echo '<div id="wr-leavemessage"><ul><li>'.$sk->makeKnownLinkObj($wgTitle->getTalkPage(), "View the talk page").'</li></ul></div>';
         }
         ?></div>
         <?php if($this->data['sitenotice']) { ?><div id="siteNotice"><?php $this->html('sitenotice') ?></div><?php } ?>
         <?php if($this->data['undelete']) { ?><div id="contentSub2"><?php $this->html('undelete') ?></div><?php } ?>
         <?php if($this->data['newtalk'] ) { ?><div class="usermessage"><?php $this->html('newtalk')  ?></div><?php } ?>
         <?php if($this->data['msg'] ) { ?><div class="usermessage"><?php $this->html('msg')  ?></div><?php } ?>
      </div>
   </div>
</div><div id="wr-content"<?php if ($this->data['nav_urls']['print']) { echo ' class="wr-articleview"';} ?>>
   <div id="bodyContent">
      <table id="sdlayout">
         <tr>
            <td id="infobox">
            <?php
            if ($this->data['notspecialpage']) {
               ?><div class="portlet" id="wr-actions">
                  <h5><?php $this->msg('views') ?></h5>
                  <div class="nav-body">
                     <ul id="wr-actionslist">
                     <?php
                     $moreActionsList = array();
                     foreach($this->data['content_actions'] as $key => $tab) {
                        if (in_array($key, $moreActions)) {
                           $moreActionsList[$key] = $tab;
                        }
                        else {
                           echo $this->getActionMenuText($key, $tab);
                        }
                     }
            //         	$moreActionsList['recentchangeslinked'] = array('href' => $this->data['nav_urls']['recentchangeslinked']['href'], 'text' => wfMsg('recentchangeslinked'));
            //          $moreActionsList['whatlinkshere'] = array('href' => $this->data['nav_urls']['whatlinkshere']['href'], 'text' => wfMsg('whatlinkshere'));
                     foreach (array('whatlinkshere', 'emailuser', 'contributions', 'blockip', 'print') as $special) { // 'permalink'
                        if ($this->data['nav_urls'][$special]) {
                           if ($special == 'contributions' || $special == 'whatlinkshere') {
                              echo $this->getActionMenuText($special, array('href'=>$this->data['nav_urls'][$special]['href'], 'text' => wfMsg($special)));
                           }
                           else {
                              $moreActionsList[$special] = array('href' => $this->data['nav_urls'][$special]['href'], 'text' => wfMsg($special));
                           }
                        }
                     }
                     ?>
                     <li id="actions-more"><span class="wr-menu-more">more</span>▼<ul>
                     <?php foreach($moreActionsList as $key => $tab) {
                        echo $this->getActionMenuText($key, $tab);
                     } ?>
                     </ul></li>
                     </ul>
                  </div>
               </div>
               <div class="wr-sidebar-separator"></div>
               <div class="portlet" id="wr-watchers">
                  <h5>Watchers</h5>
                  <div class="nav-body"><?php
                     $watchers = StructuredData::getWatchers($wgTitle, 0, 6);
                     if (count($watchers) == 0) {
                        $watchers[] = '<li>no watchers</li>';
                     }
                     $firstFive = array_slice($watchers, 0, 5);
                     echo '<ul>'.join('',$firstFive).'</ul>';
                     if (count($watchers) > 5) {
                        $watchersUrl = '/w/index.php?'.http_build_query(
                           array('action' => 'ajax', 'rs'=>'wfGetWatchers',
                                 'rsargs' => 'title='.$wgTitle->getPrefixedText().'|offset=5'));
                        echo "<ul class=\"wr-watchers-showall\"><li><a href=\"$watchersUrl\">[show all]</a></li></ul>";
                     }
                  ?></div>
               </div>
               <div class="portlet" id="wr-morelikethis">
                  <?php
                     $moreLikeThis = StructuredData::getMoreLikeThis($wgTitle);
                     if (count($moreLikeThis) > 0) {
                        echo '<h5>Browse</h5><div class="nav-body morelikethis"><ul>';
                        foreach ($moreLikeThis as $more) {
                           echo '<li>'.$more['link'];
                           if (count($more['places']) > 0) {
                              echo '<ul>';
                              foreach ($more['places'] as $place) {
                                 echo '<li>in '.$place.'</li>';
                              }
                              echo '</ul>';
                           }
                           echo '</li>';
                        }
                        echo '</ul></div>';
                     }
                  ?>
               </div>
               <?php
               if ($mainPage) {
               ?><div id="awards"><?php
                  echo wfMsg('awards');
               ?></div><?php
               }
            }
            else {
               global $wrSidebarHtml;
               echo $wrSidebarHtml;
            } ?>
            </td>
            <td id="contentbox">
               <!-- start content -->
               <a name="top" id="top"></a>
               <?php $this->html('bodytext') ?>
               <a name="bottom" id="bottom"></a>
               <?php if($this->data['catlinks']) { ?><div id="catlinks"><?php $this->html('catlinks') ?></div><?php } ?>
               <!-- end content -->
            </td>
            <?php if (!$suppressAds) { ?>
               <td id="adbox">
                  <div id="ads">
                     <?php
                        global $wrAdCode;
                        if (@$wrAdCode) {
                           echo $wrAdCode;
                        }
                     ?>
                  </div>
               </td>
            <?php } ?>
         </tr>
      </table>
   </div>
</div>
<div class="visualClear"></div>
<div id="wr-footer">
	<div id="wr-footer-bg"></div>
   <div id="wr-poweredby">
      <?php /* WERELATE - added */ if ($ns == NS_SOURCE) { ?>
		<div id="f-opendirectoryico">
		<table border="0" cellpadding="2"><tr><td align=center><font face="sans-serif, Arial, Helvetica" size="2">Portions from the<br>Open Directory Project</font></td>
		<td><table border="0" cellpadding="3" cellspacing="0" style="background-color: #336600;">
		<tr>
		<td>
		<table width="100%" cellpadding="2" cellspacing="0" border="0" style="background-color: #336600;">
		<tr align="center">
		<td><font face="sans-serif, Arial, Helvetica" size="2" color="#FFFFFF">Help build the largest human-edited directory on the web.</font></td>
		</tr>
		<tr bgcolor="#CCCCCC" align="center">
		<td><font face="sans-serif, Arial, Helvetica" size="2">
		<a href="http://dmoz.org/cgi-bin/add.cgi?where=Society/Genealogy" style="text-decoration: underline">Submit a Site</a> -
		<a href="http://dmoz.org/about.html" style="text-decoration: underline"><b>Open Directory Project</b></a> -
		<a href="http://dmoz.org/cgi-bin/apply.cgi?where=Society/Genealogy" style="text-decoration: underline">Become an Editor</a> </font>
		</td></tr>
		</table>
		</td>
		</tr>
		</table>
		</td></tr></table>
		</div>
	   <?php } elseif($this->data['poweredbyico']) { ?><div id="f-poweredbyico"><?php $this->html('poweredbyico') ?></div><?php } ?>
   </div>
   <div id="wr-footer-content">
		<ul id="f-list">
      <?php
      $footerlinks = array(
			array('lastmod', 'viewcount', 'numberofwatchingusers', 'credits'),
         array('copyright'),
			array('privacy', 'about', 'disclaimer', 'tagline'),
		);
      foreach ($footerlinks as $links) {
         echo '<ul>';
		   foreach( $links as $aLink ) {
			   if( $this->data[$aLink] ) { ?>
				   <li id="<?php echo$aLink?>"><?php $this->html($aLink) ?></li>
            <?php }
         }
         echo '</ul>';
		} ?>
		</ul>
      <?php $this->html('reporttime') ?>
   </div>
</div>
<script type="<?php $this->text('jsmimetype') ?>">
var pageRevid=<?php echo ($wgArticle != null ? $wgArticle->getRevIdFetched() : 0) ?>;
var treeNames="<?php echo htmlspecialchars(implode('|', $this->data['trees'])); ?>";
var userName="<?php echo ($wgUser->isLoggedIn() ? htmlspecialchars($wgUser->getName()) : ''); ?>";
var userId="<?php echo ($wgUser->isLoggedIn() ? htmlspecialchars($wgUser->getID()) : ''); ?>";
var skin='<?php $this->text('skinname')?>';
var stylepath='<?php $this->text('stylepath')?>';</script>
<?php if ($wgUseGoogleAnalytics) { ?>
   <script src="http://www.google-analytics.com/urchin.js" type="text/javascript"></script>
   <script type="text/javascript"> _uacct = "UA-251952-1"; urchinTracker();</script>
<?php } ?>
</body></html>
<?php
	wfRestoreWarnings();
	} // end of execute() method
} // end of class
?>
