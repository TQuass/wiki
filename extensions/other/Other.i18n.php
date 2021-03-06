<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Taylor
 * Date: 3/1/14
 * Time: 8:41 AM
 * To change this template use File | Settings | File Templates.
 */


$wgOtherMessages = array();

$wgOtherMessages['en'] = array(
    'newuserlog' => "from IP $1",
    'acct_creation_throttleall_hit' => "To discourage spammers, we limit the number of new user accounts that can be added over a short period of time.  Please wait a couple of minutes and try again.",
    'pedigree' => "Pedigree-Map",
    'pedigreetip' => "A 5-generation pedigree chart with a map",
    'share' => "Email this page",
    'emailtip' => "E-mail this page to a friend or relative",
    'Findduplicates' => "Find duplicates",
    'CompareParents' => "Compare parents",
    'CompareSpouses' => "Compare spouses",
    'CompareHusbands' => "Compare husbands",
    'CompareWives' => "Compare wives",
    'treeupdate' => "Trees",//copied from Messages.php
    'treeupdatetip' => "Select the tree(s) this page belongs to.",
    'treesupdatedtitle' => "Trees updated",
    //$treesUpdatedMsg found under Hooks 475:24
    'treeupdatetitle' => "Update trees",
    'treeupdatetext' => "A Tree at WeRelate is a collection of pages.  You can create a new tree by selecting ''Trees'' in the ''My Relate'' menu.\n\nCheck the boxes next to the tree(s) to which you want this page to belong.",
    'treeupdatebutton' => "Update",//copied from Messages.php
    'treeupdatebuttontip' => "Update the tree(s) this page belongs to, and optionally include relatives.",
    'checkboxtree' => "Please check the box next to the tree(s) you want to add the pages to.",
    'emailrequired' => "Email address is required",
    'invalidusername' => "Your user name should not be an email address",
    //$msgld found under SpecialAddPage, 77:31
    'invalidtitle' => "Invalid characters in title",
    'CompareHelp' => "<wr_a class=\"popup\" href=\"/wiki/Help:Merging_pages\">Additional Help</wr_a>\n\n* <font color=\"green\">Green</font> the information matches exactly\n* <font color=\"yellow\">Yellow</font> the information is a partial match\n* <font color=\"red\">Red</font> the information differs\n\nCheck the Match box below the pages you want to merge, then click on the \"Prepare to merge\" button at the bottom of the page.\n\nNote:If a pair of children are incorrectly matched, you can click the drop-down box under their name and choose a different child to match to.",
    'myrelate-infoboxtext' => "This is your communications center within WeRelate.  From here you can\n* create a profile telling others about your research interests,\n* read messages that have been left for you,\n* find potential relatives and friends in your network,\n* identify the pages on your watchlist that have changed,\n* review your contributions, and\n* create User Pages that only you can edit.",
    'viewprofiletip' => "View information you have entered about yourself",
    'checkmessagestip' => "Read messages that others have left on your discussion page",
    'editprofiletip' => "Edit your profile information",
    'preferencestip' => "Change your password, email address, and other settings",
    'networkmsg' => "Find your distant cousins.",
    'networktip' => "Find others with similar research interests",
    'watchlistchanged' => "<b>$1</b> page(s) on your Watchlist have unseen changes.",
    'watchlisttip' => "Review changes others have made to the pages you are watching",
    'NumberOfContributions' => "<b>$1</b> edits in the past $2 days",
    'contributionstip' => "Review the changes you have made to pages",
    'shareemailpagetext' => "Use the form below to send your email.  Enter email addresses or WeRelate user names separated by commas on the \"To\" line. The e-mail address you entered in your user preferences will appear as the \"From\" address of the mail, so the recipient(s) will be able to reply.",
    'defshareemailsubject' => "Take a look at this page on WeRelate.org",
    'defshareemailtext' => "WeRelate.org makes it easy for us to work together to build our family tree.  Click on the link below to see the page: \n\n$1\n\nOnce you register you'll be able to add information to this page as well.  I'll be notified of changes that you make, and you'll be notified of changes that I make.",
    'largegedcom' => "This file appears to be larger than the maximum allowable size of 5,000 people.  Another reason you might be seeing this message is if you're trying to upload a file that is larger than 12 megabytes, which generally means that it is not a GEDCOM.  See [[Help:GEDCOM]] for more information.",
    'importgedcomtext' => "{|\n|valign=\"top\" width=\"42%\"|\n==Instructions==\n\nUse this form to import your GEDCOM file.  [[Help:GEDCOM|Click here]] for help creating a GEDCOM.\n\n* [[Help:GEDCOM#How should I prepare my data for GEDCOM upload.3F|Click here]] for tips on preparing your GEDCOM for upload.\n\n* To upload your GEDCOM, click on the ''Browse'' button and select the GEDCOM file to upload.\n\n* To re-import an updated GEDCOM, you need to [[Help:Family Tree Explorer|delete your tree]] first so that you don't create a bunch of duplicate pages. Please wait 2 hours between deleting your tree and uploading a new gedcom.  Eventually you'll be able to re-import an updated GEDCOM into an existing tree.\n\n* GEDCOM's containing up to 5,000 people can be uploaded.  If you have a larger GEDCOM, we recommend that you upload just the portion that you're most interested in or split it into smaller files.\n\n* Pages for the people, families, and sources in your GEDCOM will be added to your tree.  (Living people are [[Help:GEDCOM#What about living people listed in my GEDCOM.3F|handled specially]].)  A message will appear on your talk page when your GEDCOM has finished importing, usually in about an hour.\n||&nbsp;\n|valign=\"top\" width=\"57%\"|\n=='''Important! Please read before submitting a GEDCOM'''==\n<u>Towards a Single Tree</u>. WeRelate is different from most family tree websites.  By contributing to WeRelate you are helping to create a '''single, unified family tree''' with one page for each person that combines the '''best''' information from all contributors.\n\n<u>Quality of Content & Participation</u>. Ultimately, we seek pages that are well documented with strong sources; therefore you are strongly encouraged to '''include source information''' in your uploaded GEDCOM.\n::<font color=red>'''Uploaded GEDCOMs that contain no dates will not be accepted.'''</font><br>\n\n<u>Collaborative Space</u>. WeRelate takes a shared approach to genealogy.  By uploading your GEDCOM, you are contributing your work to a larger collaborative effort. Multiple people may be working on the same pages, including those you contribute. In addition, we hope that you will '''monitor the pages''' created (one for each person and family in your GEDCOM), '''respond to others' comments''' on the pages, and '''help merge''' pages when duplicate pages are found.\n\n<u>Unsure? Take a test drive</u>. If you are not yet sure that the WeRelate '''wiki''' style of research is for you, we encourage you to enter a few people by hand or to upload a small GEDCOM file containing people that you want to work on cooperatively.  Once you find that you like wiki genealogy, you can upload a larger GEDCOM.\n\n<u>The Fine, but Important, Print</u>. You irrevocably agree to release your contributions under the [http://creativecommons.org/licenses/by-sa/3.0/ Creative Commons Attribution/Share-Alike License 3.0] and the [http://www.gnu.org/copyleft/fdl.html GFDL]. Others can add to, edit, download, and redistribute your contributions.  You agree to be credited, at minimum, through a hyperlink or URL when your contributions are reused in any form. See the [[WeRelate:Terms of Use|Terms of Use]] for details.\n\nYou are promising that you wrote this yourself, or that it is available under terms consistent with the Terms of Use, and you agree to follow any relevant licensing requirements.  <strong>DO NOT SUBMIT COPYRIGHTED WORK WITHOUT PERMISSION!</strong>\n|}",
    'MergeHelp' => "<wr_a class=\"popup\" href=\"/wiki/Help:Merging_pages\">Additional Help</wr_a><br>\nClick the circle directly below the page title you want to keep.\n\nCheck the box to the left of ''each item'' that you would like to keep on the merged page.<br>\n\nPress the Merge button at the bottom of the page to merge the pages.",
    //$label on other/SpecialMerge.php
    'Networkfor'=> "Network for $1",
    'networkcontent' => "The following users are watching the same Person and Family pages as '''$1'''.\nPeople watching the same pages are generally related or working on the same lines.\n\n\nClick the ''Watched Pages in Common'' number to see the pages being watched by both users.",
    'networkusercontent' => "Watched pages in common: $1 and $2",
    'searchend' => "==Instructions==\n\n*Limit your search to a particular type of page by clicking on the '''Namespace''' drop-down.\n** Additional search fields are available when searching specific namespaces.\n** For example, '''to search people''', change the Namespace to \"Person\".\n* If you check '''Exact matches only''', you can sort pages by '''title''' or '''date modified'''.\n* If you are signed in, search pages you are watching or not watching by clicking '''Watched''' or '''Unwatched'''.\n* Recent edits you've made that haven't been indexed yet are listed on the left.\n* [[Help:Search|More search tips]]",
    //this is having problems in the code, and I don't know why
    'treesupdatedtextdeferred' => "this is not the text that should be here",
    'includerelatives' => "==Include relatives==",
    '==trees==' => "==Trees==",
    'linksnotallowed' => "<b>Links to other websites are not allowed</b>",
    'includerelativespotentially' => ":'''''Warning''': including relatives can add potentially many people to your tree and to your watchlist.''",
    'relativescheckedtrees' => ":Add the following relatives to the checked trees.",
    'includedecendantsfor' => "Include descendants for $1 generations",
    'includeancestorsfor' => "Include ancestors for $1 generations",//$variable = $ancGenerations
    'alsoancestorschildren' => "Also include ancestors' children",
    'SimilarNamesProjectLink' => "Don't like the names that are close matches? [[WeRelate:Variant names project|Change them]]",
    'ShowDuplicatesTitle' => "Possible duplicates for $1",
    'pastnotrefplected' => "<p>Changes made in the past 24 hours are not reflected</p>",
    'usernotfound' => "User not found",
    'noduplicatesfound' => "<p>No possible duplicates found.</p>",
    'logonviewduplocates' => "You need to log in to view your possible duplicates<br/><br/>",
    'sharetreesubject' => "Help me build our family tree at WeRelate.org",
    'sharetreetext' => "WeRelate.org makes it easy for us to work together to build our family tree.  Click on the link below to see our tree so far:\n\n$1\n\nOnce you register you can save this tree as your own and we'll both be able to add information to the pages online. We can add new families and individuals, upload pictures, view maps of our ancestors' events, and more.  I'll be notified of changes that you make, and you'll be notified of changes that I make.\n\n\nTo save this tree as your own:\n\n* Create an account on WeRelate by clicking the \"Create account\" button in the upper right corner.\n\n* Click on the link above to launch the Family Tree Explorer.\n\n* In the \"File\" menu of the Family Tree Explorer, select \"Copy tree\" and give the tree the name you want.  By doing this, you will be notified whenever a change is made to any of the pages in the tree.  Likewise, I will be notified of changes that you make.\n\n* In the future, you can launch the Family Tree Explorer on this tree by selecting \"Trees\" from the \"MyRelate\" menu and clicking on the \"launch FTE\" link next to the tree you just copied.",
    'TreeRenameMsg' => "If you want to merge this tree into one of your other trees, enter the name of that tree exactly below; otherwise, enter a new name for this tree.",
    'TreeDeleteMsg' => "Are you sure you want to delete your '''$1''' family tree?\nDeleting your tree will '''delete''' all of the pages in your tree that are not\nin another one of your trees and are not being watched by someone else\nPlease review the tree <span class=\"plainlinks\">[{{SERVER}}/wiki/Special:TreeDeletionImpact?tree=$2&user=$3 deletion impact]</span> if you have not already done so.",
    'missingtitle' => "Please enter the title of a person or family page (include the \"Person:\" or \"Family:\")",//!! line 31 in getJSONData
    'browsepagestext' => "Browse pages in your watchlist (typically includes all pages that you have created or edited), or browse all pages on WeRelate.\n\n''Namespace'' corresponds to the type of page; e.g., Main (articles), Person, Family, or Image.  \n\nEach type of page also has an associated \"talk\" page. Browse talk pages by selecting the corresponding Talk namespace.",
    'personorfamilypagetitle' => "Person or Family page title:",//!! line 51 in getJSONData
    'watcherarraytext' => "Who's watching",
    'watcherarraytitle' => "Who's watching this page",
    'titlewithcollon' => "Title: ",
    'addpage' => "Add Page",
    'addpageinstructionsstep01' => "Step 1. Enter what you know",
    'addpagetitlearticle' => "Add an Article",
    'addpagetitle_' => "Add a $1",
    'addpagetitlepage' => "Add a page",
    'addpagetitle' => "Add $1",
    'browsepages' => "Browse Pages",
    'semiprotectedistrusted' => ".  As someone who is trusted you can go ahead and update them, but please remember that semi-protected pages are likely to have good content already.",
    'semiprotectedisnottrusted' => ", meaning they cannot be changed here. You can match them, but if you want to add information to them you will need to edit them later.",
    'watchedpages' => "Watched pages",
    'pleasewait' => "Please Wait",
    'titlecasesensitive' => "Title is case-sensitive",
    'pagefromlist' => "Choose a page from the list",
    'sourcetype:' => "Source type:",
    'treesupdatedtext' => "The tree(s) to which this page belongs have been updated.",
    'matchinggedcomfam' => "Matching GEDCOM families",
    'merge' => "Merge",
    'family' => "Family",

    //should this be included in WeRelate's i18n.php file?
    'comparestepcheckboxes' => " is a two-step process.  In this compare step, check the boxes above the matching pages.",
    'comparestep2mchildren' => "<P>To match children, choose the child number to match with.</P>",
    //^ switch to matchchildrennumber
    'scrollmatchfamily' => "<p>Then scroll to the bottom of the page and click \"Match\" to match this family.</p><p>In the next step you'll be given a chance to update the matched pages with information from your GEDCOM</p>",
    'thenclickp2m' => "<p>Then click \"Prepare to merge\" at the bottom of the page.</p><p>In the next step you\ll be given a chance to decide what information to keep on the merged page.</p>",
    //find ^, then switch clickpreparemerge
    'greenmeans' => "<p><font color=\"green\">Green</font> boxes mean the information is specific and matches exactly.</p>",
    'yellowmeans' => "<p><font color=\"yellow\">Yellow</font> boxes mean the information is non-specific (missing some pieces) or is a partial match.</p>",
    'redmeans' => "<p><font color=\"red\">Red</font> boxes mean the information differs.</p>",
    'child' => "Child $1",
    'matchwithchild' => "Match with child $1",
    //1008 in special compare - is this
    //'notamatch' => "Not a match'   wfMsg('notamatch')
    'donotmergew' => "<br><b>Do not merge with</b><br>",
    'disabled' => "disabled",
    'preparetoupdate' => "Prepare to update",
    'GEDfamnotmatch' => "GEDCOM family does not match any of the families shown",
    'preparetomerge' => "Prepare to merge",
    'notifynottomerge' => "Notify others not to merge the selected ",
    //put these in weRelate.i18n.php ?
    'families' => "families",
    'people' => "people",
    'preparetocombineselected' => "Prepare to combine the selected ",
    'semiprotectedbelow' => "<br><font color=\"red\">Semi-protected</font> (see below)",
    'notamatch' => "Not a Match",
    'match' => "Match",
    'comparefamilies' => "Compare Families",
    'enterfamilycompare' => "Enter the titles of Family pages to compare:",
    'go' => "Go",
    'title' => "Title",
    'add' => "Add",
    //'titlecreatedby' => "<tr><th>Title</th><th>Created</th><th>Last modified</th><th>by</th>",
    'created' => "Created",
    'lastmodified' => "Last Modified",
    'by' => "by",
    'or' => "or",
    'comparepeople' => "Compare People",
    'entertitlescompare' => "Enter the titles of Person pages to compare:",
    'viewyourprofile' => "View your profile",
    'edit' => "edit",
    'lastmessage:' => "last message: ",
    '_by_' => " by ",
    'readmessage' => "Read messages",
    'editpreferences' => "Edit preferences",
    'addnewuserpage' => "Add a new user page",
    'adduserpage' => "Add user page",
    'viewnetwork' => "View network",
    'viewwatchlist' => "View watchlist",
    'viewcontributions' => "View contributions",
    'view' => "view",
    'launchFTE' => "launch FTE",
    'waitingforreview' => "Waiting for review",
    'createrenamedeleteemail' => "Create, rename, delete, and email trees",
    'managetrees' => "Manage trees",
    'missingemailusername' => "Missing or invalid recipient email address / user name",
    'email' => "Email",
    'specialemailsent' => "SpecialEmail email sent to: ",
    'havegedcomalready' => "You have a GEDCOM already in process",
    'waitforearlier' => "Before importing a new GEDCOM you need to wait for your earlier GEDCOM to finish importing",
    'clickhere' => "Click here",
    'reviewearliergedcom' => "to review (or delete) your earlier GEDCOM",
    'administratorshouldreview' => "Please be patient; an Administrator should review your earlier GEDCOM and finalize the import within the next 24 hours",
    'errorduringupload' => "Error during upload.",
    'enternametree' => "Please enter a name for your new tree",
    'namecontainsnotallowed' => "Sorry, that name contains characters that are not allowed in a tree name",
    'ifplacesassumed' => "$1 &nbsp; if places in your GEDCOM don't have countries, this country will be assumed",
    'updatepages' => "Update pages",
    'mergepages' => "Merge pages",
    'unabletomerge' => "Unable to merge",
    'backtocompare' => "Press the <b>back</b> button on your browser to go back to the Compare page.",
    'pagesnotamatch' => "The following pages have been marked <i>not a match</i> with ",
    'followingincludedfamily' => "In addition to people listed above, the following will also be included in the target family",
    'update' => "Update",
    'updatepagesinformation' => "Update the existing page(s) with the checked information from your GEDCOM",
    'createpagepreparation' => "Create page in preparation for merge",
    'adddatagedcom' => "Add data from gedcom",
    'mergedwith' => "merged with $1",
    'merged_into' => "Merged $1 into $2",
    //'into' => " into ",
    'membersotherfamilies' => "members of other families",
    'merge[[targettitle]]' => "Merge [[$1]]",
    'followingincludedinfamily' => "In addition to the people listed above, the following have also been included in the target family",
    'gedcomaddedimported' => "(GEDCOM people listed will be added when the GEDCOM is imported)",
    'reviewundomerge' => "Review/undo merge",
    'showmoreduplicates' => "Show more duplicates",
    'clickreviewtoreview' => "You must click on a \"review\" link on Recent Changes or a page history in order to review the merge.",
    'mergecancelled' => "Merge Cancelled",
    'backorselect' => "<p>You can use the <b>back</b> button on your browser to navigate back to where you were, or select an item from the menu.</p>",
    'addnomergetemplate' => "Add nomerge template",
    'notloggedsessionlost' => "Not logged in, or session data lost; please try again.",
    'mergetargetinvalid' => "Something is wrong.  The merge target is invalid.",
    'followingcannotmerged' => "The following pages cannot be merged. (see comments on the talk page):",
    'family:' => "Family:",
    'person:' => "Person:",
    '_multiplemustbemerged' => "<b>$1</b> appears in multiple rows.'.
        ' If the same person appears in different families, they must be merged together in the same row.",
    '_notfoundcannotmerged' => "<b>$1</b> not found.  This page cannot be merged.",
    '_differentgendercannotmerged' => "<b>$1</b> has a different gender than the page(s) being merged.  These people cannot be merged.",
    '_appearshusbandwife' => "<b>$1</b> appears as both a husband and a wife.  These families cannot be merged.",
    '_appearshusbandchild' => "<b>$1</b> appears as both a husband and a child.  These families cannot be merged.",
    '_appearswifechild' => "<b>$1</b> appears as both a wife and a child.  These families cannot be merged.",
    '_appearsparentspouse' => "<b>$1</b> appears as both a parent family and a spouse family. These people cannot be merged.",
    'nocheckboxesmerge' => "<b>No pages to merge.</b> You need to check the boxes above the pages you want to merge.",
    'toomanymerge' => "<b>Too many pages to merge.</b> Sorry - you can merge up to $1 pages into a single page.'.
        ' If you need to merge more, please divide them into groups of $1, merge the pages in each group, then merge the groups.",
    'missinggedcomid' => "Something's wrong - we're missing the GEDCOM id; please refresh your browser and try again.",
    'peoplelistedadded' => "(GEDCOM people listed will be added when the GEDCOM imported)",
    'combineonlychecked' => "Combine the pages, keeping only the checked information",
    'createpageinpreparation' => "Create page in preparation for merge",
    'inmergeof' => " in merge of [[$1]]",
    'notes' => "notes",
    'sources' => "sources",
    'images' => "images",
    'selectedmarkedpatrolled'=> "<p>The selected $1 has been marked as patrolled.</p>",
    'changestoundo' => "changes to undo",
    'editlowercase' => "edit",
    'changestoundotext' => "<p>For each page listed above, click on the <b>changes to undo</b> link to see what changes need to be manually undone:\n<ol>\n<li>For each item that was removed in the merge (listed on the left side of the screen in yellow), you need to add that item back to the page.</li>\n<li>For each item that was added in the merge (listed on the right side of the screen in green), you need to remove that item from the page.</li>\n</ol></p>\n<p>Once you know which items need to be added/removed, click on the <b>edit</b> link to edit the page and add/remove the items.</p>\n<p>Additional notes:\n<ul>\n<li>Some of the items may have been added/removed already.</li>\n<li>You can ignore place changes that simply fill in missing place levels.</li>\n<li>When reviewing changes to Family pages, you can ignore changes to personal information (birth, death, etc.) associated with the family members: <i>husband</i>, <i>wife</i>, or <i>child</i>.\nJust re-add family members that were removed in the merge, and remove ones that were added.</li>\n</ul></p>\n<p>If you have questions, send an email to <b>solveig@quass.org</b> containing the titles of the pages listed above and the URL appearing at the top of your browser window and we will finish the unmerge for you.</p>\n",
    'leftrightshowsmerge' => "<p>The columns on the left show pages that were merged.</p>\n<p>The column on the right shows the result of the merge.</p>\n<p>If you disagree, leave a message for the person who performed the merge or click on the <i>Unmerge</i> button at the bottom of the screen.</p>",
    'notfound' => "Not found",
    'alreadymerged' => "Already merged",
    'mergetargettext' => "$1$2",
    'pagebeendeleted' => "Page has been deleted",
    'mergebeenundone' => "Merge has been undone",
    'unmerge' => "Unmerge",
    'comment' => "comment",
    'searchpossiblematches' => "Search for possible matches",
    'searchwerelate' => "Search WeRelate",
    'needthreetitle' => "Need at least three non-wildcard letters in Title",
    'needthreeauthor' => "Need at least three non-wildcard letters in Author",
    'cannotwildcardkeywords' => "Cannot use wildcards in the Keywords field",
    'needthreegivenname' => "Need at least three non-wildcard letters in Givenname",
    'needthreesurname' => "Need at least three non-wildcard letters in Surname",
    'threefathergivenname' => "Need at least three non-wildcard letters in Father Givenname",
    'threefathersurname' => "Need at least three non-wildcard letters in Father Surname",
    'threemothergivenname' => "Need at least three non-wildcard letters in Mother Givenname",
    'threemothersurname' => "Need at least three non-wildcard letters in Mother Surname",
    'threespousegivenname' => "Need at least three non-wildcard letters in Spouse Givenname",
    'threespousesurname' => "Need at least three non-wildcard letters in Spouse Surname",
    'threehusbandgivenname' => "Need at least three non-wildcard letters in Husband Givenname",
    'threehusbandsurname' => "Need at least three non-wildcard letters in Husband Surname",
    'threewifegivenname' => "Need at least three non-wildcard letters in Wife Givenname",
    'threewifesurname' => "Need at least three non-wildcard letters in Wife Surname",

    'selectpageclick' => "Select one of the pages below, or click <a href=\"javascript:void(0);\" onClick=\"$1\">Add Page</a> to create a new page</b>",
    //'pleasewait' => "Please Wait",
    'searchnotmatchdocuments' => "Your search did not match any documents.",
    'compare' => "Compare",
    'checkedpageswith' => "checked pages with ",
    'watched' => "Watched",
    'unwatched' => "Unwatched",
    'fathergiven:' => "Father given: ",
    'mothergiven:' => "Mother given: ",
    'spousegiven:' => "Spouse given: ",
    'surname:' => "Surname: ",
    'gender:' => "Gender: ",
    'search:' => "Search: ",
    'sortby' => "Sort by",
    'maidenname:' => "Maiden name: ",
    'marriagedate:' => "Marriage date: ",
    'locatedin:' => "Located in:",
    'searchlowercase' => "search",
    'namespace:' => "Namespace: ",
    'author:' => "Author: ",
    'author:nospace' => "Author:",
    'title:' => "Title: ",
    'title:nospace' => "Title:",
    'placecovered:' => "Place covered:",
    'publisher:' => "Publisher:",
    'placesissued' => "Place issued:",
    'covers:' => "Covers:",
    'givenname:' => "Given name: ",
    'wifegivenname:' => "Wife given name: ",
    'place:' => "Place: ",
    'includeplacesfor' => " Include sources for <input type=\"checkbox\" name=\"sub\"$1/>subordinate places <input type=\"checkbox\" name=\"sup\"$1/>superior places",
    'deathdate:' => "Death date: ",
    'birthdate:' => "Birth date: ",
    'wifegiven:' => "Wife given: ",
    'husbandgiven:' => "Husband given: ",
    'placename:' => "Place name: ",
    'subject:' => "Subject: ",
    'availability:' => "Availablity: ",
    'pagetitle:' => "Page title: ",
    'keywords:' => "Keywords: ",
    'search' => "Search",
    'steptworeview' => "Step 2. Review possible matches. Select a match or click Add Page",
    'resultsperpage' => "results per page",
    'condensed' => "condensed",
    // $rowsSelector results per page <input type="checkbox" name="cv"$condensedChecked>condensed</td><td align="right" colspan=4>$ecpSelector <input type="submit" value="Search"/>
    'experimentalgoalpurpose' => "This is an experimental Web search engine for genealogy.  It currently contains over 5,000,000 pages that were crawled in 2006.\nOur goal is to extend it significantly in the future as time and resources allow.\n\nUnlike a general-purpose search engine, we target only content that is relevant to genealogy.",
    'searchinstructionsbeta' => "<font size=\"+1\"><b>Search over 5,000,000 genealogy Web pages</b></font>\n\n==Instructions==\n* Enter the terms you are looking for in the \"Keywords\" field.\n* You can limit your search to a particular website by entering ''site:'' followed by the name of the website.\nFor example, ''site:familysearch.org'' searches just the items in the family history library catalog.\n\n==Beta Alerts==\nDue to a bug in our Web crawl, approximately 25% of the pages you'll get back are ''not'' genealogical.\nWe'll never achieve 100% accuracy, but we hope to decrease the number of non-relevant pages significantly over the coming months.\n\nCurrently we do not distinguish between words used as names, places, or dictionary terms.  So if you search for the surname ''Brown'' you'llalso get back pages for ''Brown County'' or even the color brown.  We plan to fix this in the coming months.\n\n\nWe expect to increase the number of web pages we search significantly over the next year.",
    'websearch' => "Web Search",
    'help' => "Help",
    'opennewwindow' => "open in new window",
    'connecttreeothers' => "<p><b>Connect your tree to others</b> by clicking on a person or family in the list to compare it to others that are likely to be duplicates.</p>\n'.'<p>Once you find possible duplicates you can compare them in more detail and then merge them together.</p>\n'.'<p>When you've finished, click on <a href=\"/wiki/Special:Network\">Network</a> in the <i>MyRelate</i> menu to find out which users you are now related to!</p>\n'.'<p>(<a href=\"/wiki/Help:Merging_pages\">more help</a>)</p>\n",
    'personfamilytitle' => "Person or Family page title: ",
    'alreadytreenamed' => "You already have a tree named $1",
    '_notvalidtree' => "$1 is not a valid tree name",
    'errorcreating_' => "Error creating $1",
    '_wascreated' => "$1 was created",
    'treename' => "Tree name",
    'renamedmergedto' => "$1'.('$2' ? ' was merged into ' : ' was renamed to '). '$3. It will take about an hour to re-index the pages so that they are searchable under the new '.('$2' ? 'tree.' : 'name.')",
    /*old code:
                $msg = $this->name.($renameExisting ? ' was merged into ' : ' was renamed to ').$this->newName.
                       ".  It will take about an hour to re-index the pages so that they are searchable under the new ".
                       ($renameExisting ? 'tree.' : 'name.');
    */
    'treealreadynamed' => "This tree is already named $1",
    'surewanttomerge' => "Are you sure you want to merge <b>$1</b> into <b>$2</b>?<br>",
    'yes' => "Yes",
    'no' => "No",
    'newname' => "New name",
    'newtree' => "New tree",
    'areyousure' => "Are you sure?",
    'renamemergetree' => "Rename/Merge tree: $1",
    'errordeleting' => "Error deleting $1",
    'isbeingdeleted' => " is being deleted",
    'treenotfound' => "Tree not found",
    'gedcombeingcreated' => "Your GEDCOM file is being created.  This typically takes 10-30 minutes.  You will receive a message on your talk page when the GEDCOM is ready.",
    'cannotdownloadgedcom' => "You cannot download this GEDCOM",
    'gedcomnotfound' => "GEDCOM file not found",
    'downloadgedcomuploaded' => "Download the GEDCOM that you uploaded to WeRelate",
    'name' => "Name",
    'pages' => "Pages",
    'inportgedcoms' => "Imported GEDCOMs",
    'exportgedcom' => "Export a GEDCOM",
    'renameslashmergetree' => "Rename / Merge tree",
    'relatednotintree' => "Related pages not in tree",
    'otherwatchers' => "Other watchers",
    'emailshare' => "E-mail (share)",
    'deletionimpact' => "Deletion impact",
    'createnewtree' => "Create a new family tree",
    'unsubscribedemailtext' => "<h2>You have been Unsubscribed</h2>\n<p>You will no longer receive email notifications of changes to your Talk page or the pages on your watchlist, and other WeRelate users will not be able to send you email.</p>\n<p>You can still see which pages have changed since you last visited them by clicking on <b>MyRelate</b> in the blue menu bar, then on <b>Watchlist</b>.</p>\n<p>If you want to turn email back on, you can do so by clicking on <b>MyRelate</b>, then on <b>Preferences</b>, and checking the boxes for \n<ul>\n<li>E-mail me when a page I'm watching is changed\n<li>E-mail me when my user talk page is changed\n<li>Enable e-mail from other users\n</ul></p>\n<p>If you would like to remove your account at WeRelate, please send email to <a href=\"mailto:'.'$1'.'\">$1</a>.</p>",
    'loginviewdashboard' => "You need to log in to view your dashboard<br/><br/>",
    'createyourprofile' => "<b>Create your profile</b>",
    'contributions' => "Contributions",
    'surnamegivenauthor' => "<i>surname, given name(s) of first author</i>",
    'titlenosubtitle' => "<i>title only, no subtitle</i>",
    'governmentchurchrecords' => "<i>for government/church records</i>",
    'nameplaceadd' => "Name of the place to add",
    'countystatelocated' => "County, District, or State in which the place is located",
    'largermap' => "Larger map",
    'makepaymentspaypal' => "Make payments with PayPal - it's fast, free and secure!",
    'senttoaddresses' => "Sent to $1 addresses",
    'welcome!' => "Welcome!",
    'allpages' => " All pages",
    'nextpage' => "Next page",
    'person' => "Person",
    'defaultcountry:' => "Default country:",
    'followingsuccessfullyunmerged' => "The following pages have been successfully unmerged:",
    'mergeperformedby' => "Merge performed by: $1 $2",
    '_unmerge' => "unmerge",
    'unmergereason' => "Unmerge reason: ",
    'viewpedigree' => "View pedigree",
    '_pedigree_' => "Pedigree",
    'birthplaces'=> "Birth Places",
    'viewbirthmap' => "View birth places on a map",
    'deathplaces' => "Death Places",
    'viewdeathmap' => "View death places on a map",
    'allplaces' => "All Places",
    'vieweventmap' => "View all event places on a map",
    'timeline' => "Timeline",
    'viewpeopletimeline' => "View people as timeline",
    'thumbnails' => "Thumbnails",
    'viewpeoplethumbnails' => "View people as thumbnails",
    'details' => "Details",
    'viewdetails' => "View details",
    'coverage' => "Coverage",
    'placetitle:' => "Place title: ",

    //'addpageend' => "Enter the person's <b>given name</b>, <b>surname</b>, and <b>gender</b>, along with their birth and death information if you know it.  The preferred format for dates is D MMM YYYY (ie 2 Jan 1900)./n</p><p>Please use proper names without titles or \"nicknames\".  Women should be entered with their <b>maiden</b>, not married name./n</p><p>Please create pages for <b><a href=\"/wiki/Help:Person_pages#Can_I_create_person_pages_for_living_persons.3F\" title=\"Help:Person pages\">non-living people</a></b> only./n</p><p>If you haven't already, you may want to watch the <a href=\"/wiki/Help:Person_page_video\" title=\"Help:Person page video\">creating a person page tutorial video</a>./n</p><p>Here is an <a href=\"/wiki/Person:Ella_Grey_%281%29\" title=\"Person:Ella Grey (1)\">example person page</a>./n</p><div class=\"printfooter\">",
    //debugging addons
    /*
     'All' => "All",
    'Person' => "Person",
    'Family' => "Family",
    'Portal' => "Portal",
    'Article' => "Article",
    'Image' => "Image",
    'MySource' => "MySource",
    'Source' => "Source",
    'Transcript' => "Transcript",
    'Repository' => "Repository",
    'Place' => "Place",
    'User' => "User",
    'Category' => "Category",
    'Surname' => "Surname",
    'Givenname' => "Givenname",
    'Help' => "Help",
    'WeRelate' => "WeRelate",
    'Template' => "Template",
    'MediaWiki' => "MediaWiki",

    */
);
?>