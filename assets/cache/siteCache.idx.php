<?php
$c=&$this->config;
$c['manager_theme'] = "MODx";
$c['settings_version'] = "0.9.1";
$c['server_offset_time'] = "0";
$c['server_protocol'] = "http";
$c['manager_language'] = "english";
$c['etomite_charset'] = "iso-8859-1";
$c['site_name'] = "Black Masks";
$c['site_start'] = "2";
$c['error_page'] = "1";
$c['unauthorized_page'] = "1";
$c['site_status'] = "1";
$c['site_unavailable_message'] = "The site is currently unavailable";
$c['track_visitors'] = "0";
$c['resolve_hostnames'] = "1";
$c['top_howmany'] = "10";
$c['default_template'] = "3";
$c['old_template'] = "3";
$c['publish_default'] = "1";
$c['cache_default'] = "1";
$c['search_default'] = "1";
$c['friendly_urls'] = "0";
$c['friendly_url_prefix'] = "";
$c['friendly_url_suffix'] = ".html";
$c['friendly_alias_urls'] = "1";
$c['use_alias_path'] = "0";
$c['use_udperms'] = "1";
$c['udperms_allowroot'] = "0";
$c['use_captcha'] = "0";
$c['captcha_words'] = "MODx,Access,Better,BitCode,Cache,Desc,Design,Excell,Enjoy,URLs,TechView,Gerald,Griff,Humphrey,Holiday,Intel,Integration,Joystick,Join(),Tattoo,Genetic,Light,Likeness,Marit,Maaike,Niche,Netherlands,Ordinance,Oscillo,Parser,Phusion,Query,Question,Regalia,Righteous,Snippet,Sentinel,Template,Thespian,Unity,Enterprise,Verily,Veri,Website,WideWeb,Yap,Yellow,Zebra,Zygote";
$c['emailsender'] = "you@yourdomain.com";
$c['emailsubject'] = "Your login details";
$c['signupemail_message'] = "Hello [+uid+] Here are your login details for [+sname+] Content Manager:Username: [+uid+]Password: [+pwd+]Once you log into the Content Manager at [+surl+], you can change your password.Regards,Site Administrator";
$c['websignupemail_message'] = "Hello [+uid+] Here are your login details for [+sname+]:Username: [+uid+]Password: [+pwd+]Once you log into [+sname+] at [+surl+], you can change your password.Regards,Site Administrator";
$c['webpwdreminder_message'] = "Hello [+uid+]To active you new password click the following link:[+surl+]If successful you can use the following password to login:Password:[+pwd+]If you did not request this email then please ignore it.Regards,Site Administrator";
$c['number_of_logs'] = "100";
$c['number_of_messages'] = "30";
$c['number_of_results'] = "20";
$c['use_editor'] = "1";
$c['use_browser'] = "1";
$c['rb_base_dir'] = "/home/106143/domains/blackmasks.com/html/assets/";
$c['rb_base_url'] = "https://blackmasks.com/assets/";
$c['which_editor'] = "FCKEditor";
$c['fck_editor_toolbar'] = "standard";
$c['fck_editor_autolang'] = "0";
$c['editor_css_path'] = "";
$c['editor_css_selectors'] = "";
$c['strip_image_paths'] = "0";
$c['upload_files'] = "jpg,gif,png,ico,txt,php,html,htm,xml,js,css,cache,zip,gz,rar,z,tgz,tar,htaccess,bmp,mp3,mp4,aac,wav,au,wmv,avi,mpg,mpeg,pdf,psd,doc,xls,txt";
$c['upload_maxsize'] = "1048576";
$c['show_preview'] = "1";
$c['filemanager_path'] = "/home/106143/domains/blackmasks.com/html/";
$c['theme_refresher'] = "";
$c['manager_layout'] = "4";
$c['custom_contenttype'] = "text/css,text/html,text/javascript,text/plain,text/xml";
$c['site_id'] = "440aa1eb1277c";
$c['site_unavailable_page'] = "";
$c['txt_custom_contenttype'] = "";
$c['allow_duplicate_alias'] = "0";
$c['automatic_alias'] = "0";
$c['fck_editor_style'] = "";
$c['fck_editor_toolbar_customset'] = "['Bold','Italic','Underline','-','Link','Unlink']";
$this->aliasListing = array();
$a = &$this->aliasListing;
$d = &$this->documentListing;
$d['minimal-base'] = 1;
$a[1] = array('id' => 1, 'alias' => 'minimal-base', 'path' => '');
$d['index'] = 2;
$a[2] = array('id' => 2, 'alias' => 'index', 'path' => '');
$c = &$this->contentTypes;
$c[1] = 'text/html';
$c[2] = 'text/html';
$c[3] = 'text/html';
$c[4] = 'text/html';
$c[5] = 'text/html';
$c[6] = 'text/html';
$c[7] = 'text/html';
$c[8] = 'text/html';
$c[9] = 'text/html';
$c[10] = 'text/html';
$c[11] = 'text/html';
$c[12] = 'text/html';
$c[13] = 'text/html';
$c[14] = 'text/html';
$c[15] = 'text/html';
$c[16] = 'text/html';
$c[17] = 'text/html';
$c[18] = 'text/html';
$c[19] = 'text/html';
$c[20] = 'text/html';
$c[21] = 'text/html';
$c[22] = 'text/html';
$c[23] = 'text/html';
$c[24] = 'text/html';
$c[25] = 'text/html';
$c[26] = 'text/html';
$c[28] = 'text/html';
$c = &$this->chunkCache;
$c['WebLoginSideBar'] = '<!-- #declare:separator <hr> --> 
<!-- login form section-->
<form method="post" name="loginfrm" action="[+action+]" style="margin: 0px; padding: 0px;"> 
<input type="hidden" value="[+rememberme+]" name="rememberme"> 
<table border="0" cellspacing="0" cellpadding="0">
<tr>
<td>
<table border="0" cellspacing="0" cellpadding="0">
  <tr>
	<td><b>User:</b></td>
	<td><input type="text" name="username" tabindex="1" onkeypress="return webLoginEnter(document.loginfrm.password);" size="5" style="width: 100px;" value="[+username+]" /></td>
  </tr>
  <tr>
	<td><b>Password:</b></td>
	<td><input type="password" name="password" tabindex="2" onkeypress="return webLoginEnter(document.loginfrm.cmdweblogin);" size="5" style="width: 100px;" value="" /></td>
  </tr>
  <tr>
	<td><label for="chkbox" style="cursor:pointer">Remember me:&nbsp; </label></td>
	<td>
	<table width="100%"  border="0" cellspacing="0" cellpadding="0">
	  <tr>
		<td valign="top"><input type="checkbox" id="chkbox" name="chkbox" tabindex="4" size="1" value="" [+checkbox+] onClick="webLoginCheckRemember()" /></td>
		<td align="right">									
		<input type="submit" value="[+logintext+]" name="cmdweblogin" /></td>
	  </tr>
	</table>
	</td>
  </tr>
  <tr>
	<td colspan="2"><a href="#" onclick="webLoginShowForm(2);return false;">Forget Password?</a></td>
  </tr>
</table>
</td>
</tr>
</table>
</form>
<hr>
<!-- log out hyperlink section -->
<a href=\'[+action+]\'>[+logouttext+]</a>
<hr>
<!-- Password reminder form section -->
<form name="loginreminder" method="post" action="[+action+]" style="margin: 0px; padding: 0px;">
<input type="hidden" name="txtpwdrem" value="0" />
<table border="0">
	<tr>
	  <td>Enter the email address of your account <br />below to receive your password:</td>
	</tr>
	<tr>
	  <td><input type="text" name="txtwebemail" size="24" /></td>
	</tr>
	<tr>
	  <td align="right"><input type="submit" value="Submit" name="cmdweblogin" />
	  <input type="reset" value="Cancel" name="cmdcancel" onclick="webLoginShowForm(1);" /></td>
	</tr>
  </table>
</form>

';
$c['Footer'] = '<p class="footer">
    <a href="[~4~]">About Us</a> | <a href="[~4~]">Contact Us</a> | Copyright &copy; Black Masks Publication. All rights reserved. [[NiceDate]]
</p>
';
$c['Main_Image'] = '[[Image?src_tv=`Article_Main_Image`&width=`440` &height=`440`]]';
$c['Main_Teaser'] = '<div class="splash_greybox">
	<h2>Talent and Tenacity:<br>Ka\'Ramuu Kush</h2>
	<p>Ka\'Ramuu Kush tenaciously carves out a career that embraces the triple disciplines of acting, directing and producing.</p>
	<a href = "[~6~]">read more</a>
</div>';
$c['Global_Nav'] = '<table width=502 bgcolor="#000000" cellspacing=0 cellpadding=0 border=0>
	<tr>
		<td width=100><div class="navbutton"><a href="[~3~]">features</div></td>
		<td width=100><div class="navbutton_r"><a href = "[~8~]">arts hotline</a></div></td>
		<td width=100><div class="navbutton_r"><a href="[~5~]">subscribe now</a></div></td>
		<td width=100><div class="navbutton_r"><a href = "[~9~]">back issues</a></div></td>
		<td width=102><div class="navbutton"><a href = "[~4~]">about us</a></div></td>
	</tr>
</table>
';
$c['Main_SubscribeNow'] = '<div class="splash_redbox">
<h2 class="white">Subscribe now!</h2>
<p>Have Black Masks delivered direct to your door.</p>
<a href = "[~5~]">subscribe now</a>
</div>';
$c['Breadcrumb'] = '<div class="breadcrumb">[[PageTrail? &amp;sep=` : `]]</div>';
$c['Article_Main_Image'] = '[[Image?src_tv=`Article_Main_Image`&width=`140`]]
<div class="redbox">
[*Article_Main_Caption*]
</div>	  
';
$c['Author_Byline'] = '<p><b>by <a href="#author">[*Author*]</a></b></p>';
$c['Internal_SubscribeNow'] = '<div class="callout_top">
	<h3>Subscribe Now!</h3>
	<p>Have Black Masks delivered directly to your home.</p>
	<div align=right><a class="callout_link" href="[~5~]">Subscribe Now</a></div>
</div>
';
$c['Internal_Nav_01'] = '<table width=502 bgcolor="#000" cellspacing=0 cellpadding=0 border=0>
<tr>
	<td width=1 valign="bottom"><img src="images/dot_white.gif" alt="" width=1 height=1></td>
	<td width=1 bgcolor="#ffffff"></td>
	<td width=96 bgcolor="#cc0000"><div class="navbutton_selected"><a href = "[~3~]">features</a></div></td>
	<td width=1 bgcolor="#ffffff"></td>
	<td width=1 valign="bottom"><img src="images/dot_white.gif" alt="" width=1 height=1></td>
	<td width=100><div class="navbutton"><a href = "[~8~]">arts hotline</a></div></td>
	<td width=100><div class="navbutton_r"><a href="[~5~]">subscribe now</a></div></td>
	<td width=100><div class="navbutton_r"><a href = "[~9~]">back issues</a></div></td>
	<td width=102><div class="navbutton_r"><a href = "[~4~]">about us</a></div></td>
</tr>
</table>
';
$c['Internal_Nav_05'] = '<table width=502 bgcolor="#000000" cellspacing=0 cellpadding=0 border=0>
<tr>
	<td width=100><div class="navbutton"><a href = "[~3~]">features</a></div></td>
	<td width=100><div class="navbutton_r"><a href = "[~8~]">arts hotline</a></div></td>
	<td width=100><div class="navbutton_r"><a href="[~5~]">subscribe now</a></div></td>
        <td width=100><div class="navbutton_r"><a href = "[~9~]">back issues</a></div></td>
	<td width=1 valign=bottom><img src="images/dot_white.gif" width=1 height=1></td>
	<td width=1 bgcolor="#ffffff"></td>
	<td width=98 bgcolor="#cc0000"><div class="navbutton_selected"><a href = "[~4~]">about us</a></div></td>
	<td width=1 bgcolor="#ffffff"></td>
	<td width=1 valign=bottom><img src="images/dot_white.gif" width=1 height=1></td>
</tr>
</table>

';
$c['Staff'] = '<h2>Staff and Contributors</h2>
	<div class="greybox">
		<p><b>Publisher and Editor</b><br>Beth Turner</p>
		<p><b>Special Advisor to the Publisher</b><br>Niamani Mutima</p>
		<p><b>Advertising Designer</b><br>Rod Ivey</p>
		<p><b>Design Consultant</b><br>Gilbert Fletcher<br>Kaigani Turner</p>
		<p><b>Guest Editors</b><br/>
			Woodie King, Jr.<br/>
			Pamela S. Booker<br/>
			Ardencie Hall<br/>
			Kym Richardson<br/>
			Kim Tooks<br/>
			Jeanette Toomer<br/>
		</p>
		<p><b>Contributing Editors</b><br/>
			Breena Clarke<br/>
			Stephen Coleman<br/>
			Rhett S. Jones<br/>
			Vera J. Katz<br/>
			Niamani Mutima<br/>
			Shauneille Perry<br/>
			Count Stovall<br/>
		</p>
		<p><b>Editorial Intern</b><br>Angie Brown</p>
		<p><b>Logo Design</b><br>Billy Graham</p>
		<p><b class="dk_red">Website Design</b><br/> by <a href="http://www.kaigani.com">Kaigani</a></p>
		</div>
';
$c['Current_Address'] = 'Black Masks<br/>
P.O. Box 7334<br/>
Athens, GA 30604<br/>';
$c['Author_Bio'] = '<a name="author"></a>
<div class="greybox">
	<p><b>[*Author*]</b> [*Author_Bio*]</p>
</div>
';
$c['Article_Image_01'] = '<div class="img_w_caption_callout">
[[Image?src_tv=`Article_Image_01`&width=`182`]]<br/>
[*Article_Caption_01*]
</div>
 
';
$c['Article_Image_02'] = '<div class="img_w_caption_callout">
[[Image?src_tv=`Article_Image_02`&width=`182`]]<br/>
[*Article_Caption_02*]
</div>
 
';
$c['Internal_Nav_04'] = '<table width=502 bgcolor="#000000" cellspacing=0 cellpadding=0 border=0>
<tr>
	<td width=100><div class="navbutton"><a href = "[~3~]">features</a></div></td>
	<td width=100><div class="navbutton_r"><a href = "[~8~]">arts hotline</a></div></td>
	<td width=100><div class="navbutton_r"><a href="[~5~]">subscribe now</a></div></td>
	<td width=1 valign=bottom><img src="images/dot_white.gif" width=1 height=1></td>
	<td width=1 bgcolor="#ffffff"></td>
	<td width=96 bgcolor="#cc0000"><div class="navbutton_selected"><a href = "[~9~]">back issues</a></div></td>
	<td width=1 bgcolor="#ffffff"></td>
	<td width=1 valign=bottom><img src="images/dot_white.gif" width=1 height=1></td>
	<td width=102><div class="navbutton"><a href = "[~4~]">about us</a></div></td>
</tr>
</table>

';
$c['Internal_Nav_03'] = '<table width=502 bgcolor="#000000" cellspacing=0 cellpadding=0 border=0>
<tr>
	<td width=100><div class="navbutton"><a href = "[~3~]">features</a></div></td>
	<td width=100><div class="navbutton_r"><a href = "[~8~]">arts hotline</a></div></td>
	<td width=1 valign=bottom><img src="images/dot_white.gif" width=1 height=1></td>
	<td width=1 bgcolor="#ffffff"></td>
	<td width=96 bgcolor="#cc0000"><div class="navbutton_selected"><a href="[~5~]">subscribe now</a></div></td>
	<td width=1 bgcolor="#ffffff"></td>
	<td width=1 valign=bottom><img src="images/dot_white.gif" width=1 height=1></td>
	<td width=100><div class="navbutton_l"><a href = "[~9~]">back issues</a></div></td>
	<td width=102><div class="navbutton"><a href = "[~4~]">about us</a></div></td>
</tr>
</table>

';
$c['Internal_Nav_02'] = '<table width=502 bgcolor="#000000" cellspacing=0 cellpadding=0 border=0>
<tr>
	<td width=100><div class="navbutton"><a href = "[~3~]">features</a></div></td>
	<td width=1 valign=bottom><img src="images/dot_white.gif" width=1 height=1></td>
	<td width=1 bgcolor="#ffffff"></td>
	<td width=96  bgcolor="#cc0000"><div class="navbutton_selected"><a href = "[~8~]">arts hotline</a></div></td>
	<td width=1 bgcolor="#ffffff"><img src="images/dot_white.gif" width=1 height=1></td>
	<td width=1 valign=bottom><img src="images/dot_white.gif" width=1 height=1></td>
	<td width=100><div class="navbutton"><a href="[~5~]">subscribe now</a></div></td>
	<td width=100><div class="navbutton_r"><a href = "[~9~]">back issues</a></div></td>
	<td width=102><div class="navbutton_r"><a href = "[~4~]">about us</a></div></td>
</tr>
</table>

';
$c['Feature_Teaser'] = '<h2>[+longtitle+]</h2>
<p>[+summary+]</p>
<p><a href="[~[+id+]~]">read more</a></p> ';
$c['BackIssue'] = '<h2>[+longtitle+]</h2>
<p>[+summary+]</p>
<p><a href="[~[+id+]~]">read more</a></p> ';
$c['BackIssues_Nav'] = '<div class="greybox">
	<p><b class="dk_red">Browse by Volume</b></p>
	<p class="callout_list">

[[00SimpleList?&tpl=`LHS_Nav_Links` &startID=`9`]]

</p>
</div>';
$c['LHS_Nav_Links'] = '<a href="[~[+id+]~]">[+title+]</a><br/> ';
$s = &$this->snippetCache;
$s['Personalize'] = '#::::::::::::::::::::::::::::::::::::::::
# Snippet Name: Personalize 
# Short Desc: basic personalization for logged in users
# Version: 1.0
# Created By: Ryan Thrash (modx@vertexworks.com)
#
# Date: December 1, 2005
#
# Changelog: 
# Dec 1, 05 -- initial release
#
#::::::::::::::::::::::::::::::::::::::::
# Description: 	
#	Checks to see if users belong to a certain group and 
#	displays the specified chunk if they do. Performs several
#	sanity checks and allows to be used multiple times on a page.
#	Only meant to be used once per page.
#
# Params:
#	&message [string] (optional)
#		simple message to prepend in front of the username
#
#	&wrapper [string] (optional) 
#		optional element to wrap the message in
#
#	&class [string] (optional) 
#		optional name of the class for the wrapper element
#
#	&ph [boolean] ( optional ) 
#		if set, outputs to the ph name passed in, instead 
#		of directly returning the output
#
# Example Usage:
#
#	[[Personalize? &message=`Welcome back, ` &wrapper=`h3` &class=`welcome`]]
#
#	For a logged in user John, would return: 
#	<h3 class="welcome">Welcome back, John</h3>
#
#::::::::::::::::::::::::::::::::::::::::

# is there a class defined?
$class = (isset($class))? \' class="\'.$class.\'"\' : \'\';

# build the wrappers as needed
if (isset($wrapper)) {
	$w1 = \'<\'.$wrapper.$class.\'>\' ;
	$w2 = \'</\'.$wrapper.\'>\';
} else {
	$w1 = \'\';
	$w2 = \'\';
}

# add in the message
$message = (isset($message))? $message : \'\';

# do the work
$o = \'\';
$test = $modx->getLoginUserName();
$o = ($test)? "$w1$message$test$w2" : \'\';

if (isset($ph)) {
	$modx->setPlaceholder($ph,$o);
} else {
	return $o;
}';
$s['MemberCheck'] = '#::::::::::::::::::::::::::::::::::::::::
# Snippet name: MemberCheck 
# Short Desc: checks logged in groups and displays a chunk
# Version: 1.0
# Created By Ryan Thrash (vertexworks.com)
# Sanitized By Jason Coward (opengeek.com)
#
# Date: November 29, 2005
#
# Changelog: 
# Nov 29, 05 -- initial release
#
#::::::::::::::::::::::::::::::::::::::::
# Description: 	
#	Checks to see if users belong to a certain group and 
#	displays the specified chunk if they do. Performs several
#	sanity checks and allows to be used multiple times on a page.
#
# Params:
#	&groups [array] (REQUIRED)
#		array of webuser group-names to check against
#
#	&chunk [string] (REQUIRED)
#		name of the chunk to use if passes the check
#
#	&ph [string] (optional)
#		name of the placeholder to set instead of directly retuning chunk
#
#	&debug [boolean] (optional | false) 
#		turn on debug mode for extra troubleshooting
#
# Example Usage:
#
#	[[MemberCheck? &groups=`siteadmin, registered users` &chunk=`privateSiteNav` &ph=`MemberMenu` &debug=`true`]]
#
#	This would place the \'members-only\' navigation store in the chunk \'privateSiteNav\'
#	into a placeholder (called \'MemberMenu\'). It will only do this as long as the user 
#	is logged in as a webuser and is a member of the \'siteadmin\' or the \'registered users\'
#	groups. The optional debug parameter can be used to display informative error messages 
#	when configuring this snippet for your site. For example, if the developer had 
#	mistakenly typed \'siteowners\' for the first group, and none existed with debug mode on, 
#	it would have returned the error message: The group siteowners could not be found....
#
#::::::::::::::::::::::::::::::::::::::::

# debug parameter
$debug = isset($debug)? $debug: false;

# check if inside manager
if ($m = $modx->insideManager()) {
	return \'\'; # don\'t go any further when inside manager
}

if(!isset($groups)) {
	return $debug? \'<p>Error: No Group Specified</p>\': \'\';
} 

if(!isset($chunk)) { return $debug? \'<p>Error: No Chunk Specified</p>\': \'\'; }

# turn comma-delimited list of groups into an array
$groups = explode(\',\', $groups);

if (!class_exists(\'MemberCheck\')) {
	class MemberCheck {
		static $instance = NULL;
		var $allGroups = NULL;
		var $debug;
		
		function getInstance($debug=false) {
			global $modx;
			if (self::$instance == NULL) {
				self::$instance= new MemberCheck($debug);
			}
			return self::$instance;
		}
	
		function MemberCheck($debug=false) {
			global $modx;
			$this->debug= $debug;
			if ($debug) {
				$this->allGroups= array(); 
				$tableName= $modx->getFullTableName(\'webgroup_names\');
				$sql= "SELECT name FROM $tableName";
				if ($rs= $modx->db->query($sql)) {
					while ($row= $modx->db->getRow($rs)) {
						array_push($this->allGroups, stripslashes($row[\'name\']));
					}
				}
			}
		}
		
		function isValidGroup($groupName) {
			$isValid = !(array_search($groupName, $this->allGroups)===false);
			return $isValid;
		}
		
		function getMemberChunk(&$groups,$chunk) {
			global $modx;
			$o= \'\';
			if (is_array($groups)) {
				for ($i=0; $i<count($groups); $i++) {
					$groups[$i]= trim($groups[$i]);
					if ($this->debug) {
						if (!$this->isValidGroup($groups[$i])) return "<p>The group <strong>" . $groups[$i] . "</strong> could not be found...</p>";
					}
				}
				
				$check = $modx->isMemberOfWebGroup($groups);
				
				$chunkcheck = $modx->getChunk($chunk);
				
				$o.= ($check && $chunkcheck)? $chunkcheck : \'\';
				if (!$chunkcheck) $o.= $this->debug? "<p>The chunk <strong>$chunk</strong> not found...</p>": \'\';
			} else {
				$o.= "<p>No valid group names were specified!</p>";
			}
			return $o;
		}
	}
}

$memberCheck= MemberCheck::getInstance($debug);
return $memberCheck->getMemberChunk($groups, $chunk);
';
$s['DateTime'] = '/**
 * DateTime 
 * Makes a date and time... thingy.
 *
 */
 

if(!isset($timestamp)) {
    $timestamp=time();
}

return strftime("%d-%m-%Y %H:%M:%S", $timestamp);';
$s['GetStats'] = '/*
 *	GetStats 
 *	Fetches the visitor statistics totals from the database
 *
 */
 

$tmpArray = $modx->getSiteStats();

$output = "
<table width=\'100%\' cellspacing=\'1\' bgcolor=\'#003399\'>
    <tr class=\'fancyRow\'>
        <td width=\'25%\'>&nbsp;</td>
        <td width=\'25%\'><b>Page Impressions</b></td>
        <td width=\'25%\'><b>Visits</b></td>
        <td width=\'25%\'><b>Visitors</b></td>
    </tr>
    <tr>
        <td class=\'fancyRow2\'><b>Today</b></td>
        <td bgcolor=\'white\'>".number_format($tmpArray[\'piDay\'])."</td>
        <td bgcolor=\'white\'>".number_format($tmpArray[\'viDay\'])."</td>
        <td bgcolor=\'white\'>".number_format($tmpArray[\'visDay\'])."</td>
    </tr>
    <tr>
        <td class=\'fancyRow2\'><b>This Month</b></td>
        <td bgcolor=\'white\'>".number_format($tmpArray[\'piMonth\'])."</td>
        <td bgcolor=\'white\'>".number_format($tmpArray[\'viMonth\'])."</td>
        <td bgcolor=\'white\'>".number_format($tmpArray[\'visMonth\'])."</td>
    </tr>
    <tr>
        <td class=\'fancyRow2\'><b>All Time</b></td>
        <td bgcolor=\'white\'>".number_format($tmpArray[\'piAll\'])."</td>
        <td bgcolor=\'white\'>".number_format($tmpArray[\'viAll\'])."</td>
        <td bgcolor=\'white\'>".number_format($tmpArray[\'visAll\'])."</td>
    </tr>
</table>
";

return $output;';
$s['ContactForm'] = '// Email / Contact Form
// Simple XHTML validating email form, that sends different subjects and messages. 
// people in a company.
//
// Version 1.0
// September 9, 2005
// ryan@vertexworks.com
//

// DO NOT ALTER THE FOLLOWING TWO LINES
$subject_array = array();
$recipient_array = array();

///////////////////////////////////
//  <-----  BEGIN CONFIG  ----->
///////////////////////////////////
// Edit only what\'s between the quotation marks in the lines below.
// These will be the subjects that your users can choose from popup
// lists. You can have as many as you want. Each one must be set up like so:
// $subject_array[] = "What You Want This Choice To Be";
// Make sure to remove empty ones that you aren\'t using. Just delete the entire line.

// Generic email to use for all parts. You can edit
// the individual instances for more control.
// Defaults to the built-in email notification account which is set in the System Configuration.
// Can be set by using as follows:
// [[ContactForm? &sendTo=`ryan@vertexworks.com`]]
$email = (isset($sendTo))? $sendTo : \'[(emailsender)]\';


// enter "static" in order to use the static subject line
$subject_type = "static";
$static_subject = "[Web Inquiry] ".$modx->config[\'site_url\'];

// Otherwise use an array of possible subjects
$subject_array[] = "Survey Info";
$subject_array[] = "Company Info";
$subject_array[] = "Other Info";

// Recipient ... add or remove lines as needed
// Format (as few or as many as desired): 
// $recipient_array["Your Text Here"] = \'someone@someplace.com\';
$recipient_array["General Inquiries"] = "$email";
$recipient_array["Press or Interview Request"] = "$email";
$recipient_array["Partnering Opportunities"] = "$email";

// enter "static" in order to use the solo recipient
$recipient_type = "";
$static_recipient = "$email";

// Instructions 
$instructions = "Please select the type of message you\'d like to send so we can route it properly. All fields are required.";

// Success Message
$success = "Thanks for contacting [(site_url)]. Someone will get back to you soon. You may submit another message in the form below.";

// Class for containing Success Message <p>
$successClass = "message";

// Failure <p> class
$failClass = "error";

// Empy Field failure message
$emptyFields = "One of the fields was left blank. Please put something in all fields.";

// General failure message
$generalFail = "Sorry, there was an error! Please try again later.";

// Bad email failure message
$failedEmail= (isset($_POST[\'email\']))? $_POST[\'email\']: \'\';
$emailFail = "The email address you supplied ({}) does not appear to be valid. Please try again.";

// Debug mode for testing
$debug = false;

//  <-----  END CONFIG  ----->
///////////////////////////////////
$SendMail = \'\';
if ($debug && $_POST) {
	$SendMail .= "POST variables from Document ID [*id*]:\\n";
	foreach ($_POST as $key => $value) {
		$SendMail .= "\\t$key => $value\\n";
	}
}

$from= \'\';
$from_email= \'\';
$message= \'\';

$postSend= isset($_POST[\'send\'])? $_POST[\'send\']: \'false\';
if ($postSend == \'true\') { 
    $to = ($recipient_type=="static") ? $static_recipient : $_POST[\'to\'];
    $from = $_POST[\'name\'];
    $from_email = $_POST[\'email\'];
    $the_subject = ($subject_type=="static") ? "$static_subject" : $_POST[\'subject\'];
    $message = $_POST[\'message\'];
    if ( ($from == \'\')||($from_email == \'\')||($message == \'\') ) {
        $SendMail .= "<p class=\\"$failClass\\">$emptyFields</p>";
    } elseif (eregi("^[_a-z0-9-]+(\\.[_a-z0-9-]+)*@[a-z0-9-]+(\\.[a-z0-9-]+)*(\\.[a-z]{2,3})$", $from_email)) {
        $subject = $the_subject;
        $headers = "From: $from <$from_email>\\r\\n";
        
        // clean out potential tomfoolery...
        $message = $modx->stripTags($message);
        
        $body = "Name: $from\\nEmail: $from_email\\nMessage:\\n\\n" . $message;
        if (mail($to, $subject, $body, $headers)) {
            $SendMail .= "<p class=\\"$successClass\\">$success</p>";
            $SendMail .= ($debug) ? "<p>$to\\n$headers\\n$subject\\n$body</p>" : \'\';
            $from="";
            $from_email="";
            $message="";
        } else {
            $SendMail .= "<p class=\'$failClass\'>$generalFail</p>";
            $send = "false";
        }
    } else {
        $SendMail .= "<p class=\\"$failClass\\">$emailFail</p>";
        $send = "false";
    } 
} else {
    $SendMail .= "<p>$instructions</p>";
}
$SendMail .=<<<EOD
<div class="emailform">



    <form method="post" name="EmailForm" id="EmailForm" action="[~[*id*]~]" >
        <fieldset>
            <h3>[(sitename)] Contact Form</h3>
            <input type="hidden" name="send" value="true" />
            <label for="name">Your Name: <input type="text" name="name" id="name" size="30" value="$from" /></label>

            <label for="email">Your Email Address: <input type="text" name="email" id="email" size="30" value="$from_email" /></label>

            <label for="to">Regarding:</label> 
            <select name="to" id="to">
EOD;

        foreach ($recipient_array as $key=>$value) {
            $SendMail .= "<option value=\\"{$value}\\">{$key}</option>\\n";
        }

$SendMail .=<<<EOD
            </select>

            <label for="message">Message: 
            <textarea cols="50" rows="10" name="message" id="message">$message</textarea>
            </label>
            
            <label>&nbsp;</label><input type="submit" value="Send this Message" class="button" />
        </fieldset>
    </form>
</div>
EOD;

return $SendMail;
';
$s['DropMenu'] = '// ###########################################
// DropMenu                                  #
// ###########################################
// Configurable menu / navigation builder using UL tags
// Offers optional DIV wrappers for top level and nested menus (useful for hover zones)
// as well as configurable classes for the DIV, UL, and LI elements.  It even
// marks ancestors of and the current element with a hereClass (indicating you are here 
// and in this area of the site).  Also applies .last CSS class to final LI in each UL.
//
// Developed by Vertexworks.com and Opengeek.com
// Feel free to use if you keep this header and credits in place
//
// Inspired by List Site Map by Jaredc, SimpleList by Bravado, 
// and ListMenuX by OpenGeek
//
// Configuration parameters:
// 
// &menuName        - name of a placeholder for placing the output in the layout
// &topnavClass     - CSS class for styling the class assigned to the outermost UL
// 
// TO DO: configuration parameters above, more usage examples, CSS examples, output indenting

// ###########################################
// Usage Examples                            #
// ###########################################
// Creates menu with wrapping DIV with id=myMenu, starting at the site root, two levels deep,
// with descriptions next to the links, and nested UL elements with class=nestedLinks; output
// of menu can be placed in layout using placeholder named myMenu ( e.g. [ +myMenu+ ] )
// [[DropMenu? &menuName=`myMenu` &startDoc=`0` &levelLimit=`2` &topdiv=`true` &showDescription=`true` &subnavClass=`nestedLinks`]]
//
// Creates topMenu from site root, including only 1 level, with class=topMenubar applied to the top level UL
// and class=activeLink applied to current page LI
// [[DropMenu? &menuName=`topMenu` &startDoc=`0` &levelLimit=`1` &topnavClass=`topMenubar` &here=`activeLink`]]
//
// Creates dropmenu 3 levels deep, with DIV wrappers around all nested lists styled with class=hoverZone
// and currentPage LI styled with class=currentPage
// [[DropMenu? &levelLimit=3 &subdiv=true &subdivClass=hoverZone &subnavClass=menuZone &here=currentPage]]
//
// Creates dropmenu of infinite levels, ordered by menutitle in descending order
// [[DropMenu?orderBy=menutitle&orderDesc=true]]

// ###########################################
// Configuration parameters                  #
// ###########################################

// $phMode [ true | false ]
// Whether you want it to output a [+placeholder+] or simply return the output.
// Defaults to false.
$phMode = false;

// $menuName [ string ]
// Sets the name of the menu, placeholder, and top level DIV id (if topdiv 
// option is true). Set to "dropmenu" by default.
$phName = (!isset($phName)) ? \'dropmenu\' : "$phName";

// $siteMapRoot [int]
// The parent ID of your root. Default 0. Can be set in 
// snippet call with startDoc (to doc id 10 for example):
// [[DropMenu?startDoc=10]]
$siteMapRoot = 0;

// $removeNewLines [ true | false ]
// If you want new lines removed from code, set to true. This is generally
// better for IE when lists are styled vertically. 
$removeNewLines = (!isset($removeNewLines)) ? false : ($removeNewLines==true);

// $maxLevels [ int ]
// Maximum number of levels to include. The default 0 will allow all
// levels. Also settable with snippet variable levelLimit:
// [[DropMenu?levelLimit=2]]
$maxLevels = 0;


// $textOfLinks [ string ]
// What database field do you want the actual link text to be?
// The default is pagetitle because it is always a valid (not empty)
// value, but if you prefer it can be any of the following:
// menutitle, id, pagetitle, description, parent, alias, longtitle, introtext
// TO DO: set text to be first non-empty of an array of options
$textOfLinks = (!isset($textOfLinks)) ? \'menutitle\' : "$textOfLinks";

// $titleOfLinks [ string ]
// What database field do you want the title of your links to be?
// The default is pagetitle because it is always a valid (not empty)
// value, but if you prefer it can be any of the following:
// menutitle, id, pagetitle, description, parent, alias, longtitle, introtext
$titleOfLinks = (!isset($titleOfLinks)) ? \'description\' : "$titleOfLinks";

// $pre [ string ]
// Text to append before links inside of LIs
$pre = (!isset($pre)) ? \'\' : "$pre";

// $post [ string ]
// Text to append before links inside of LIs
$post = (!isset($post)) ? \'\' : "$post";

// $selfAsLink [ true | false ]
// Define if the current page should be a link (true) or not (false)
$selfAsLink = (!isset($selfAsLink)) ? false : ($selfAsLink==true);

// $hereClass [ string ]
// CSS Class for LI and A when they are the currently selected page, as well
// as any ancestors of the current page (YOU ARE HERE)
$hereClass = (!isset($hereClass)) ? \'here\' : $hereClass;



// $showDescription [true | false]
// Specify if you would like to include the description
// with the page title link.
$showDescription = (!isset($showDescription)) ? false : ($showDescription==true);

// $descriptionField [ string ]
// What database field do you want the description to be?
// The default is description. If you specify a field, it will attempt to use it
// first then fall back until it finds a non-empty field in description, introtext,
// then longtitle so it really tries not be empty. It can be any of the following:
// menutitle, id, pagetitle, description, parent, alias, longtitle, introtext
// TO DO: set description to the first non-empty of an array of options
$descriptionField = (!isset($descriptionField)) ? \'description\' : "$descriptionField";


// $topdiv [ true | false ]
// Indicates if the top level UL is wrapped by a containing DIV block
$topdiv = (!isset($topdiv)) ? false : ($topdiv==true);

// $topdivClass [ string ]
// CSS Class for DIV wrapping top level UL
$topdivClass = (!isset($topdivClass)) ? \'topdiv\' : "$topdivClass";

// $topnavClass [ string ]
// CSS Class for the top-level (root) UL
$topnavClass = (!isset($topnavClass)) ? \'topnav\' : "$topnavClass";



// $useCategoryFolders [ true | false ]
// If you want folders without any content to render without a link to be used
// as "category" pages (defaults to true). In order to use Category Folders, 
// the template must be set to (blank) or it won\'t work properly.
$useCategoryFolders = (!isset($useCategoryFolders)) ? true : "$useCategoryFolders";

// $categoryClass [ string ]
// CSS Class for folders with no content (e.g., category folders)
$categoryClass = (!isset($categoryClass)) ? \'category\' : "$categoryClass";



// $subdiv [ true | false ]
// Indicates if nested UL\'s should be wrapped by containing DIV blocks
// This is useful for creating "hover zones" 
// (see http://positioniseverything.net/css-dropdowns.html for a demo)
// TO CONSIDER: Setting a subdiv class at all turns on hover DIVs?
$subdiv = (!isset($subdiv)) ? false : ($subdiv==true);

// $subdivClass [ string ]
// CSS Class for DIV blocks wrapping nested UL elements
$subdivClass = (!isset($subdivClass)) ? \'subdiv\' : "$subdivClass";



// $orderBy [ string ]
// Document field to sort menu by
$orderBy = (!isset($orderBy)) ? \'menuindex\' : "$orderBy";

// $orderDesc [true | false]
// Order results in descending order?  default is false
$orderDesc = (!isset($orderDesc)) ? false : ($orderDesc==true);

// ###########################################
// End config, the rest takes care of itself #
// ###########################################

$debugMode = false;

// Initialize
$MakeMap = "";
$siteMapRoot = (isset($startDoc)) ? $startDoc : $siteMapRoot;
$maxLevels = (isset($levelLimit)) ? $levelLimit : $maxLevels;
$ie = ($removeNewLines) ? \'\' : "\\n";
//Added by Remon: (undefined variables php notice)
$activeLinkIDs = array();
$subnavClass = \'\';

// Overcome single use limitation on functions
global $MakeMap_Defined;

if (!isset ($MakeMap_Defined)) {
	function filterHidden($var) {
		return (!$var[\'hidemenu\']==1);
	}
	function filterEmpty($var) {
	    return (!empty($var));
	}
	function MakeMap($modx, $listParent, $listLevel, $description, $titleOfLinks, $maxLevels, $inside, $pre, $post, $selfAsLink, $ie, $activeLinkIDs, $topdiv, $topdivClass, $topnavClass, $subdiv, $subdivClass, $subnavClass, $hereClass, $useCategoryFolders, $categoryClass, $showDescription, $descriptionField, $textOfLinks, $orderBy, $orderDesc, $debugMode) {
		// Added by Remon. Define this variable _here_ ;-)
		$output = \'\';

		$children = $modx->getActiveChildren($listParent, $orderBy, (!$orderDesc) ? \'ASC\' : \'DESC\', \'id, pagetitle, description, isfolder, parent, alias, longtitle, menutitle, hidemenu, introtext, content_dispo, contentType, type, template\');
		// filter out the content that is set to be hidden from menu snippets
		$children = array_filter($children, "filterHidden");
		$numChildren = count($children);

		if (is_array($children) && !empty($children)) {

			// determine if it\'s a top category or not
			$toplevel = !$inside;

			// build the output
			$topdivcls = (!empty($topdivClass)) ? \' class="\'.$topdivClass.\'"\' : \'\';
			$topdivblk = ($topdiv) ? "<div$topdivcls>" : \'\';
			$topnavcls = (!empty($topnavClass)) ? \' class="\'.$topnavClass.\'"\' : \'\';
			$subdivcls = (!empty($subdivClass)) ? \' class="\'.$subdivClass.\'"\' : \'\';
			$subdivblk = ($subdiv) ? "<div$subdivcls>$ie" : \'\';
			$subnavcls = (!empty($subnavClass)) ? \' class="\'.$subnavClass.\'"\' : \'\';
			$output = ($toplevel) ? "$topdivblk<ul$topnavcls>$ie" : "$ie$subdivblk<ul$subnavcls>$ie";

			//loop through and process subchildren
			foreach ($children as $child) {
				// figure out if it\'s a containing category folder or not 
				$numChildren --;
				$isFolder = $child[\'isfolder\'];
			    $itsEmpty = ($isFolder && ($child[\'template\'] == \'0\'));
				$itm = "";

                // if menutitle is blank fall back to pagetitle for menu link
                $textOfLinks = (empty($child[\'menutitle\'])) ? \'pagetitle\' : "$textOfLinks"; 

			    // If at the top level
				if (!$inside) 
				{
					$itm .= ((!$selfAsLink && ($child[\'id\'] == $modx->documentIdentifier)) || ($itsEmpty && $useCategoryFolders)) ? 
					        $pre.$child[$textOfLinks].$post . (($debugMode) ? \' self|cat\' : \'\') : 
					        \'<a href="[~\'.$child[\'id\'].\'~]" title="\'.$child[$titleOfLinks].\'">\'.$pre.$child[$textOfLinks].$post.\'</a>\';
					$itm .= ($debugMode) ? \' top\' : \'\';
				}
				
				// it\'s a folder and it\'s below the top level
				elseif ($isFolder && $inside) 
				{
				    
					$itm .= ($itsEmpty && $useCategoryFolders) ?
					        $pre.$child[$textOfLinks].$post . (($debugMode) ? \'subfolder T\': \'\') :
					        \'<a href="[~\'.$child[\'id\'].\'~]" title="\'.$child[$titleOfLinks].\'">\'.$pre.$child[$textOfLinks].$post.\'</a>\'. (($debugMode) ? \' subfolder F\' :\'\');        					
				}
				
				// it\'s a document inside a folder
				else 
				{
					$itm .= ($child[\'alias\'] > \'0\' && !$selfAsLink && ($child[\'id\'] == $modx->documentIdentifier)) ? $child[$textOfLinks] : \'<a href="[~\'.$child[\'id\'].\'~]" title="\'.$child[$titleOfLinks].\'">\'.$child[$textOfLinks].\'</a>\';
					$itm .= ($debugMode) ? \' doc\' : \'\';
				}
				$itm .= ($debugMode)? "$useCategoryFolders $isFolder $itsEmpty" : \'\';
   					
				// loop back through if the doc is a folder and has not reached the max levels
				if ($isFolder && (($maxLevels == 0) || ($maxLevels > $listLevel +1))) {
					$itm .= MakeMap($modx, $child[\'id\'], $listLevel +1, $description, $titleOfLinks, $maxLevels, true, $pre, $post, $selfAsLink, $ie, $activeLinkIDs, $topdiv, $topdivClass, $topnavClass, $subdiv, $subdivClass, $subnavClass, $hereClass, $useCategoryFolders, $categoryClass, $showDescription, $descriptionField, $textOfLinks, $orderBy, $orderDesc, $debugMode);
				}

				if ($itm && !$selfAsLink && ($child[\'id\'] == $modx->documentIdentifier)) {
					$output .= "    <li class=\\"$hereClass". ($numChildren == 0 ? \' last\' : \'\')."\\">$itm</li>$ie";
				}
				elseif ($itm) {
					// Added by Remon
					// define it here:
					$class = \'\';
					if ($numChildren == 0) {
						$class = \'last\';
					}
					if (is_array($activeLinkIDs)) {
						if (in_array($child[\'id\'], $activeLinkIDs)) {
							$class .= ($class ? \' \' : \'\').$hereClass;
						}
					}
					// it\'s an empty folder and using Category Folders
					if ($useCategoryFolders && $itsEmpty) {
						$class .= ($class ? \' \' : \'\').$categoryClass;
					}
					if ($class) {
						$class = \' class="\'.$class.\'"\';
					}
					
					// TO DO: set description to the first non-empty of an array of options
					if ($showDescription && (!empty($child[\'$descriptionField\']))) {
					    $desc = " &ndash; ".$child[\'$descriptionField\'];
					} elseif ($showDescription && (!empty($child[\'description\']))) {
					    $desc = \' &ndash; \' . $child[\'description\'];
					} elseif ($showDescription && (!empty($child[\'introtext\']))) {
					    $desc = \' &ndash; \' . $child[\'introtext\'];
					} elseif ($showDescription && (!empty($child[\'longtitle\']))) {
					    $desc = \' &ndash; \' . $child[\'longtitle\'];
					} else {
					    $desc = \'\';
					}
					
					$output .= "<li$class>$itm$desc</li>$ie";
					$class = \'\';
				}
			}
			$output .= "</ul>$ie";
			$output .= ($toplevel) ? (($topdiv) ? "</div>$ie" : "") : (($subdiv) ? "</div>$ie" : "");
		}
		return $output;
	}
	$MakeMap_Defined = true;
}

$currentID = $modx->documentIdentifier;
$parentID = $currentID;

// find the parent docs of the current "you-are-here" doc
// used in the logic to mark parents as such also
while ($parentID != $siteMapRoot && $parentID != 0) {
	$parent = $modx->getParent($parentID, 0);
	if ($parent) {
		$parentID = $parent[\'id\'];
		$activeLinkIDs[] = $parentID;
	} else {
		$parentID = 0;
	}
}

if ($phMode) {
    // output to a [+placeholder+]
    $modx->setPlaceholder($phName, MakeMap($modx, $siteMapRoot, 0, $showDescription, $titleOfLinks, $maxLevels, false, $pre, $post, $selfAsLink, $ie, $activeLinkIDs, $topdiv, $topdivClass, $topnavClass, $subdiv, $subdivClass, $subnavClass, $hereClass, $useCategoryFolders, $categoryClass, $showDescription, $descriptionField, $textOfLinks, $orderBy, $orderDesc, $debugMode));

} else {
    // return the output a "usual"
    return MakeMap($modx, $siteMapRoot, 0, $showDescription, $titleOfLinks, $maxLevels, false, $pre, $post, $selfAsLink, $ie, $activeLinkIDs, $topdiv, $topdivClass, $topnavClass, $subdiv, $subdivClass, $subnavClass, $hereClass, $useCategoryFolders, $categoryClass, $showDescription, $descriptionField, $textOfLinks, $orderBy, $orderDesc, $debugMode);

}
';
$s['FlexSearchForm'] = '// -----------------------
// Snippet: FlexSearchForm
// -----------------------
// Version: 0.6j
// Date: 2005.02.01
// jaredc@honeydewdesign.com
//
// This snippet was designed to create a search form
// that is highly flexible in how it is presented. It
// can be used as both a small, subtle, persistent
// search field element, as well as present the search
// results. All elements are branded with classes
// for easy CSS styling.

// CONFIGURE

  // MAIN SNIPPET SETUP OPTIONS
  // --------------------------

   // $searchStyle [ \'relevance\' | \'partial\' ]
   // This option allows you to decide to use a faster,
   // relevance sorted search (\'relevance\') which WILL NOT
   // inlclude partial matches. Or use a slower, but
   // more inclusive search (\'partial\') that will include
   // partial matches. Results will NOT be sorted based on
   // relevance.
   //
   // This option contributed by Rich from Snappy Graffix Media to 
   // allow partial matching and LIKE matching of the search term.
   // sam@snappygraffix.com
   $searchStyle = \'relevance\';
   
   // $useAllWords [ true | false ]
   // If you want only documents which contain ALL words in the 
   // search string, set to true. Otherwise, the search will return
   // all pages with ONE or more of the search words (which can be 
   // a LOT more pages).
   $useAllWords = true;

   // $showSearchWithResults [1 | 0]
   // If you would like to turn off the search
   // form when showing results you can set
   // this to false. Can also be set in template
   // by using the snippet variable: FSF_showForm
   // like this (1=true, 0=false):
   // [[FlexSearchForm?FSF_showForm=0]]
   $showSearchWithResults = 1;

   // $resultsPage [int]
   // The default behavior is to show the results on
   // the current page, but you may define the results
   // page any way you like. The priority is:
   //
   // 1- snippet variable - set in page template like this:
   //    [[FlexSearchForm?FSF_landing=int]]
   //    where int is the page id number of the page you want
   //    your results on
   // 2- querystring variable FSF_form
   // 3- variable set here
   // 4- use current page
   //
   // This is VERY handy when you want to put the search form in
   // a discrete and/or small place on your page- like a side
   // column, but don\'t want all your results to show up there!
   // Set to results page or leave 0 as default
   $resultsPage = 0;

   // $showResults [1 | 0] (as passed in snippet variable ONLY)
   // You can define whether this snippet will show the results
   // of the search with it. Do this by assigning the snippet
   // variable FSF_showResults as:
   // [[FlexSearchForm?FSF_showResults=0]]
   //
   // This is useful in situations where you want to show the
   // search results in a different place than the search form.
   // In that type of situation, you would include two of these
   // snippets on the same page, one showing results, and one
   // showing the form.
   //
   // Default is true.

   // $grabMax [ int ]   
   // Set to the max number of records you would like on
   // each page. Set to 0 if unlimited.
   $grabMax = 10;

   // $pageLinkSeparator [ string ]
   // What you want, if anything, between your page link numbers
   $pageLinkSeparator = " | ";

   // $stripHTML [ true | false ]
   // Allow HTML characters in the search? Probably not.
   $stripHTML = true;
		
   // $stripSnip [ true | false ]
   // Strip out snippet calls etc from the search string?
   $stripSnip = true;
   
   // $stripSnippets [ true | false ]
   // Strip out snippet names so users will not be able to "search"
   // to see what snippets are used in your content. This is a 
   // security benefit, as users will not be able to search for what pages
   // use specific snippets.
   $stripSnippets = true;
   
   // $xhtmlStrict [ true | false ]
   // If you want this form to validate as XHTML Strict compliance, then
   // this needs to be true, but IE has a fieldset bug that I don\'t know
   // a workaround for. So you can set this to false to avoid it.
   $xhtmlStrict = false;

   // $minChars [ int ]
   // Minimum number of characters to require for a word to be valid for
   // searching. MySQL will typically NOT search for words with less than
   // 4 characters (relevance mode). If you have $useAllWords = true and
   // a three or fewer word appears in the search string, the results will
   // always be 0. Setting this drops those words from the search in THAT
   // CIRCUMSTANCE ONLY (relevance mode, useAllWords=true).
   $minChars = 4;


  // LANGUAGE AND LABELS
  // --------------------------

   // $resultsIntroFailure
   // If nothing is found for the search. You should give the user
   // some indication that the search was a failure.
   $resultsIntroFailure = \'There were no search results. Please try using more general terms to get more results.\';

   // $searchButtonText [string]
   // Label the search button what
   // you wish
   $searchButtonText = \'Go!\';
   
   // $boxText [ string ]
   // What, if anything, you want to have in the search box when the
   // form first loads. When clicked, it will disappear. This uses 
   // JavaScript. If you don\'t want this feature or the JavaScript,
   // just set to empty string: \'\'
   $boxText = \'Search here...\';

   // $introMessage [ string ]
   // This is the text that will show up if the person arrives
   // at the search page without having done a search first.
   // You can leave this as an empty string if you like.
   $introMessage = \'Please enter a search term to begin your search.\';
   
   // $resultsFoundTextSingle, $resultsFoundTextMultiple [ string patttern ]
   // The string that will tell the user how many results were found.
   // two variables will be provided at runtime:
   // %d    The number of results found (integer)
   // %s    The search string itself.
   $resultsFoundTextSingle = \'%d result found for "%s".\';
   $resultsFoundTextMultiple = \'%d results found for "%s".\';
   
   // $paginationTextSinglePage and $paginationTextMultiplePages [ string ]
   // The text that comes before the links to other pages. In this
   // example, "Result pages: " was the $paginationTextMultiplePages:
   // Result pages: 1 | 2 | 3 | 4
   // Page numbers will only appear if there is more than one page.
   $paginationTextSinglePage = \'\';
   $paginationTextMultiplePages = \'Result pages: \';

// Styles
// These styles are included in this snippet:
//
// .FSF_form{}
// .FSF_input {}
// .FSF_submit {}
//
// .FSF_SearchResults {}
// .FSF_resultsIntroFailure{}
// .FSF_result {}
// .FSF_resultLink {}
// .FSF_resultDescription {}
// .FSF_pagination
// .FSF_intro

// -------------
// End configure
// -------------

// establish whether to show the form or not
$showSearchWithResults = (isset($FSF_showForm))? $FSF_showForm : $showSearchWithResults;

// establish whether to show the results or not
$showResults = (isset($FSF_showResults))? $FSF_showResults : true;

// establish results page
if (isset($FSF_landing)){ // set in snippet
  $searchAction = "[~".$FSF_landing."~]";
} elseif ($resultsPage > 0){ // locally set
  $searchAction = "[~".$resultsPage."~]";
}  else { //otherwise
  $searchAction = "[~".$modx->documentIdentifier."~]";
}

// Set newline variable
$newline = "\\n";

// Initialize search string
$searchString = \'\';

// CLEAN SEARCH STRING
if ( isset($_POST[\'search\']) || isset($_GET[\'FSF_search\']) ){
  // Prefer post to get
  $searchString = (isset($_POST[\'search\']))? $_POST[\'search\'] : urldecode($_GET[\'FSF_search\']) ;
  // block sensitive search patterns
  $searchString =
  (
  $searchString != "{{" &&
  $searchString != "[[" &&
  $searchString != "[!" &&
  $searchString != "[(" &&
  $searchString != "[~" &&
  $searchString != "[*" 
  )
  ?
  $searchString : "" ;

  // Remove dangerous tags and such

  // Strip HTML too
  if ($stripHTML){
    $searchString = strip_tags($searchString);
  }

  // Regular expressions of things to remove from search string
  $modRegExArray[] = \'~\\[\\[(.*?)\\]\\]~\';   // [[snippets]]
  $modRegExArray[] = \'~\\[!(.*?)!\\]~\';     // [!noCacheSnippets!]
  $modRegExArray[] = \'!\\[\\~(.*?)\\~\\]!is\'; // [~links~]
  $modRegExArray[] = \'~\\[\\((.*?)\\)\\]~\';   // [(settings)]
  $modRegExArray[] = \'~{{(.*?)}}~\';       // {{chunks}}
  $modRegExArray[] = \'~\\[\\*(.*?)\\*\\]~\';   // [*attributes*]
  
  // Remove modx sensitive tags
  if ($stripSnip){
    foreach ($modRegExArray as $mReg){
      $searchString = preg_replace($mReg,\'\',$searchString);
    }
  }

  // Remove snippet names
  if ($stripSnippets && $searchString != \'\'){
    // get all the snippet names
    $tbl = $modx->dbConfig[\'dbase\'] . "." . $modx->dbConfig[\'table_prefix\'] . "site_snippets";
    $snippetSql = "SELECT $tbl.name FROM $tbl;";
    $snippetRs = $modx->dbQuery($snippetSql);
    $snippetCount = $modx->recordCount($snippetRs);
    $snippetNameArray = array();
    for ($s = 0; $s < $snippetCount; $s++){
      $thisSnippetRow = $modx->fetchRow($snippetRs);
      $snippetNameArray[] = strtolower($thisSnippetRow[\'name\']);
    }
    // Split search into strings
    $searchWords = explode(\' \',$searchString);
    $cleansedWords = \'\';
    foreach($searchWords as $word){
      if ($word != \'\' && 
          !in_array(strtolower($word),$snippetNameArray) &&
            ((!$useAllWords) ||
            ($searchStyle == \'partial\') ||
            (strlen($word) >= $minChars && $useAllWords && $searchStyle == \'relevance\'))
         ){
        $cleansedWords .= $word.\' \';
      }
    }
    // Remove last space
    $cleansedWords = substr($cleansedWords,0,(strlen($cleansedWords)-1));
    
    $searchString = $cleansedWords;
  }

} // End cleansing search string

// check querystring
$validSearch = ($searchString != \'\')? true : false ;

//check for offset
$offset = (isset($_GET[\'FSF_offset\']))? $_GET[\'FSF_offset\'] : 0;

// initialize output
$SearchForm = \'\';

// establish form
if (($validSearch && ($showSearchWithResults)) || $showSearchWithResults){
  $SearchForm .= \'<form class="FSF_form" action="\'.$searchAction.\'" method="post">\';
  $SearchForm .= ($xhtmlStrict)? \'<fieldset><legend>Search</legend>\' : \'\' ;
  // decide what goes in search box
  $searchBoxVal = ($searchString == \'\' && $boxText != \'\')? $boxText : $searchString ;
  $SearchForm .= \'<input class="FSF_input" type="text" name="search" value="\'.$searchBoxVal.\'"  \';
  $SearchForm .= ($boxText)? \'onfocus="this.value=(this.value==\\\'\'.$boxText.\'\\\')? \\\'\\\' : this.value ;" />\' : \'/>\';
  $SearchForm .= \'<input class="FSF_submit" type="submit" name="sub" value="\'.$searchButtonText.\'" />\';
  $SearchForm .= ($xhtmlStrict)? \'</fieldset>\' : \'\';
  $SearchForm .= \'</form>\'.$newline;
}

if ($showResults) {
  if($validSearch) {
    $search = explode(" ", $searchString);
    $tbl = $modx->dbConfig[\'dbase\'] . "." . $modx->dbConfig[\'table_prefix\'] . "site_content";

    if ($searchStyle == \'partial\'){
      $sql = "SELECT id, pagetitle, description ";
      $sql .= "FROM $tbl ";
      $sql .= "WHERE ";
      if (count($search)>1 && $useAllWords){
        foreach ($search as $searchTerm){
          $sql .= "(pagetitle LIKE \'%$searchString%\' OR description LIKE \'%$searchString%\' OR content LIKE \'%$searchTerm%\') AND ";
        }
      } else {
        $sql .= "(pagetitle LIKE \'%$searchString%\' OR description LIKE \'%$searchString%\' OR content LIKE \'%$searchString%\') AND ";
      }
      $sql .= "$tbl.published = 1 AND $tbl.searchable=1 AND $tbl.deleted=0;";
    } else {
      $sql = "SELECT id, pagetitle, description ";
      $sql .= "FROM $tbl WHERE ";
      if (count($search)>1 && $useAllWords){
        foreach ($search as $searchTerm){
          $sql .= "MATCH (pagetitle, description, content) AGAINST (\'$searchTerm\') AND ";
        }
      } else {
        $sql .= "MATCH (pagetitle, description, content) AGAINST (\'$searchString\') AND ";
      }
      $sql .= "$tbl.published = 1 AND $tbl.searchable=1 AND $tbl.deleted=0;";
    }

    $rs = $modx->dbQuery($sql);
    $limit = $modx->recordCount($rs);

    if($limit>0) {
      $SearchForm .= \'<div class="FSF_searchResults">\'.$newline;

      // pagination
      if ($grabMax > 0){
        $numResultPages = ceil($limit/$grabMax);
        $resultPageLinks = \'<span class="FSF_pages">\';
        $resultPageLinks .= ($limit>$grabMax)? $paginationTextMultiplePages : $paginationTextSinglePage ;
        $resultPageLinkNumber = 1;
        for ($nrp=0;$nrp<$limit && $limit > $grabMax;$nrp+=$grabMax){
          if($offset == ($resultPageLinkNumber-1)*$grabMax){
            $resultPageLinks .= $resultPageLinkNumber;
          } else {
            $resultPageLinks .= \'<a href="[~\' . $modx->documentObject[\'id\'] . \'~]&FSF_offset=\' . $nrp . \'&FSF_search=\' . urlencode($searchString) . \'">\' . $resultPageLinkNumber . \'</a>\';
          }
          $resultPageLinks .= ($nrp+$grabMax < $limit)? $pageLinkSeparator : \'\' ;
          $resultPageLinkNumber++;
        }
        $resultPageLinks .= "</span>".$newline;
        $SearchForm .= \'<p class="FSF_pagination">\';
        $resultsFoundText = ($limit > 1)? $resultsFoundTextMultiple : $resultsFoundTextSingle ;
        $SearchForm .= sprintf($resultsFoundText,$limit,$searchString);
        $SearchForm .= \'<br />\'.$resultPageLinks."</p>".$newline;
      } // end if grabMax

      // search results
      $useLimit = ($grabMax > 0)? $offset+$grabMax : $limit;
      for ($y = $offset; ($y < $useLimit) && ($y<$limit); $y++) {
        $moveToRow = mysql_data_seek($rs,$y);
        $SearchFormsrc=$modx->fetchRow($rs);
        $SearchForm.=\'<div class="FSF_result">\'.$newline;
        $SearchForm.=\'<a class="FSF_resultLink" href="[~\'.$SearchFormsrc[\'id\'].\'~]" title="\' . $SearchFormsrc[\'pagetitle\'] . \'">\' . $SearchFormsrc[\'pagetitle\'] . "</a>".$newline;
        $SearchForm.=$SearchFormsrc[\'description\']!=\'\' ? \'<span class="FSF_resultDescription">\' . $SearchFormsrc[\'description\'] . "</span>".$newline : "" ;
        $SearchForm.=\'</div><!--end FlexSearchResult-->\'.$newline;
      }
      $SearchForm.=\'<p class="FSF_pagination">\'.$resultPageLinks.\'</p>\';
      $SearchForm.=\'</div><!--end FlexSearchResults-->\'.$newline;
    } else {
      $SearchForm.=\'<p class="FSF_resultsIntroFailure">\'.$resultsIntroFailure.\'</p>\';
    } // end if records found

  } else if (!$validSearch && isset($_POST[\'sub\'])) {

    // message to show if search was performed but for something invalid
    $SearchForm .= \'<p class="FSF_resultsIntroFailure">\'.$resultsIntroFailure.\'</p>\';
    
  } else { // end if validSearch

    $SearchForm .= \'<p class="FSF_intro">\'.$introMessage.\'</p>\';

  } // end if not validSearch
} // end if showResults

return $SearchForm;
';
$s['NewsFeed'] = '/**
*	NewsFeed for MODx v3
*	Created by Raymond Irving, August 2005
*	Code made RSS valid and enhanced by Mark Kaplan, September-October 2005
*	Tag-closing feature by Greg Matthews
*
*	Enable RSS2 news feed from your website
*
*	Snippet Parameters [default]:
* 
*      &defaultauthor    - Default username to use when missing or not available. 
*                          Defaults to the initial admin user account. [string] 
*                          Example: &defaultauthor=`Admin <youremail@yoursite.com>`
*
*		&makerss	- set to 0 to generate a link to the feed. Defaults to 1
*		
*		(available when &makerss=1)
*		&newsfolder	- Folder id where news items are to be stored. Example &newsfolder=`2`. If &newsfolder is missing the current document id will 	be used.
*		&topitems	- set the top number of items to be listed in news feed. [20]
*		&copyright	- set copyright information
* 		&ttl		- set how often should feed readers check for new material (in seconds) -- mostly ignored by readers.
*		&trunc         - truncate to summary posts? if set to false, shows entire post [true]
*		&truncSplit    - use the special "splitter" format to truncate for summary posts [true]
*		&truncAt       - the split-point splitter itself [<!-- splitter -->]
*		&truncLen      - if you don\'t have a splitter or you turn that off explicitly, the number 
*                        of characters of the blog to show for summary if not using splitter [450] 
*                        However, if you have a summary of the post, it will use that instead. 
*		&pubOnly    - display published documents [true]
*		(available when &makerss=0)
*		&showlink	- set to 1 to show feed link. Defaults to 1 
*		&linkid		- set the document id for the rss new feed. (available when &makerss=0)
*		&commentschunk - if you\'re using comments, the name of the chunk used to format them
*/


// get folder id where we should look for news else look in current document
$folder = isset($newsfolder) ? intval($newsfolder):$modx->documentIdentifier;

// get current document id
$docid = $modx->documentIdentifier;

// set subscribe mode
$makerss = isset($makerss) ? $makerss:1;

// set link id
$linkid = isset($linkid) ? intval($linkid): 0;

// set show link mode
$showlink = isset($showlink) ? $showlink: 1;

// set top items
$topitems = isset($topitems) ? $topitems : 20;

// set copyright info
$copyright = isset($copyright) ? $copyright:\'\';

// set ttl value
$ttl = ($ttl) ? intval($ttl):120;

// set lentoshow
$lentoshow = isset($truncLen) ? $truncLen : 450;

$trunc = isset($truc) ? $trunc : true;
    // should there be summary/short version of the posts?

$truncsplit = isset($trucSplit) ? $truncSplit : true;
    // should the post be summarized at the "splitter"?

$splitter = isset($trucAt) ? $truncAt : "<!-- splitter -->";
    // where to split the text 
    
$showPublishedOnly = isset($pubOnly) ? $pubOnly : true;
    // allows you to show unpublished docs if needed for some reason...

$commentschunk = isset($commentschunk)? \'{{\'.$commentschunk.\'}}\' : \'\';
    // if you\'re using comments, the name of the chunk used to format them
	
// functions start here
function closeTags($text) { 
    $openPattern = "/<([^\\/].*?)>/";   
    $closePattern = "/<\\/(.*?)>/"; 
    $endOpenPattern = "/<([^\\/].*?)$/"; 
    $endClosePattern = "/<(\\/.*?[^>])$/"; 
    $endTags=\'\'; 
     
    //$text=preg_replace($endOpenPattern,\'\',$text); 
    //$text=preg_replace($endClosePattern,\'\',$text); 
    preg_match_all($openPattern,$text,$openTags); 
    preg_match_all($closePattern,$text,$closeTags); 
    
    //print_r($openTags); 
    //print_r($closeTags); 
    
    $c=0; 
    $loopCounter = count($closeTags[1]);  //used to prevent an infinite loop if the html is malformed 
    while($c<count($closeTags[1]) && $loopCounter) { 
        $i=0; 
        while($i<count($openTags[1])) { 
             
            $tag = trim($openTags[1][$i]); 
             
            if(strstr($tag,\' \')) { 
                $tag = substr($tag,0,strpos($tag,\' \'));    
            } 
            //echo $tag.\'==\'.$closeTags[1][$c]."\\n"; 
            if($tag==$closeTags[1][$c]) { 
                $openTags[1][$i]=\'\'; 
                $c++; 
                break; 
            }    
            $i++; 
        } 
        $loopCounter--; 
    } 
     
    $results = $openTags[1]; 
     
    if(is_array($results)) {  
    $results = array_reverse($results); 
         
        foreach($results as $tag) { 
    
            $tag = trim($tag); 
             
            if(strstr($tag,\' \')) { 
                $tag = substr($tag,0,strpos($tag,\' \'));    
            }    
            if(!stristr($tag,\'br\') && !stristr($tag,\'img\') && !empty($tag)) { 
                $endTags.= \'</\'.$tag.\'>\'; 
            } 
        }    
    } 
    return $text.$endTags; 
}
   
// switch block
switch ($makerss) {
	case true:	// generate rss2xml
		$link = $modx->config[\'site_url\'].$modx->makeUrl($modx->documentIdentifier); // url to current page
		$output .=  \'<?xml version="1.0" encoding="ISO-8859-1"?>\'."\\n".
		\'<rss version="2.0">\'."\\n".
		\'	<channel>\'."\\n".
		\'		<title>\'.$modx->documentObject[\'pagetitle\'].\'</title>\'."\\n".
		\'		<link>\'.$link.\'</link>\'."\\n".
		\'		<description>\'.$modx->documentObject[\'introtext\'].\'</description>\'."\\n".
		\'		<language>en</language>\'."\\n".
		\'		<copyright>\'.$copyright.\'</copyright>\'."\\n".
		\'		<ttl>\'.$ttl.\'</ttl>\'."\\n";
		
		$callby = ($showPublishedOnly)? \'getActiveChildren\' : \'getAllChildren\';
	
		$ds = $modx->$callby($folder, \'createdon\', \'DESC\', $fields=\'id, pagetitle, description, introtext, content, createdon, createdby\');
		
		$limit=count($ds);
		if($limit>0) { 
			$limit = $topitems<$limit ? $topitems : $limit; 
			for ($i = 0; $i < $limit; $i++) { 
				
				if ($ds[$i][\'createdby\']<0) {
					// get web user name
					$tbl = $modx->getFullTableName("web_user_attributes");
					$sql = "SELECT fullname, email FROM $tbl WHERE $tbl.id = \'".abs($ds[$i][\'createdby\'])."\'"; 
				}
				else {
					// get manager user name
					$tbl = $modx->getFullTableName("user_attributes");
					$sql = "SELECT fullname, email  FROM $tbl WHERE $tbl.id = \'".$ds[$i][\'createdby\']."\'"; 
				}
				
    				$rs2 = $modx->dbQuery($sql);
    				$limit2 = $modx->recordCount($rs2); 
    				if($limit2<1) { 
							// get manager user name
						$btbl = $modx->getFullTableName("user_attributes");
						$bsql = "SELECT fullname, email  FROM $btbl WHERE $btbl.id = \'1\'"; 
						$brs = $modx->dbQuery($bsql);
						$blimit = $modx->recordCount($brs);
						$bdsuser = $modx->fetchRow($brs); 
    					$username = "".$bdsuser[\'fullname\']." <".$bdsuser[\'email\'].">";
								}
    				else { 
    					$dsuser = $modx->fetchRow($rs2); 
    					$username = "".$dsuser[\'fullname\']." <".$dsuser[\'email\'].">";
    				} 
				
		// determine and show summary
				    
		// contains the splitter and use splitter is on
if ((strstr($ds[$i][\'content\'], $splitter)) && $truncsplit) {
            $summary = array();
            
            // HTMLarea/XINHA encloses it in paragraph\'s
            $summary = explode(\'<p>\'.$splitter.\'</p>\',$ds[$i][\'content\']);
            
            // For TinyMCE or if it isn\'t wrapped inside paragraph tags
            $summary = explode($splitter,$summary[\'0\']); 

            $summary = $summary[\'0\'];
            $summary = closeTags($summary);
            
        // fall back to the summary text    
		} else if (strlen($ds[$i][\'introtext\'])>0) {
			$summary = $ds[$i][\'introtext\'];
			
		// fall back to the summary text count	
		// skipping this because of ease of breaking in the middle of an A tag... 
		// so it\'s not a good idea. If you must have this, then uncomment
		// } else if(strlen($ds[$i][\'content\']) > $lentoshow) { 
		// 	$summary = substr($ds[$i][\'content\'], 0, $lentoshow).\'...\'; 
		//
		
		// and back to where we started if all else fails (short post)
		} else { 
			$summary = $ds[$i][\'content\']; 
		}  
		
		// summary is turned off
		if ($trunc == false) {
		    $summary = $ds[$i][\'content\']; 
	    }
				
				
				$strippedsummary = str_replace($commentschunk,\'\',$summary); 

				$link = $modx->config[\'site_url\'].$modx->makeUrl($ds[$i][\'id\']);
				$output .= \'		<item>\'."\\n".
				\'			<title>\'.$ds[$i][\'pagetitle\'].\'</title>\'."\\n".
				\'			<link>\'.$link.\'</link>\'."\\n".
				\'			<description><![CDATA[\'.$strippedsummary.\']]></description>\'."\\n".
				\'			<pubDate>\'.date("r", $ds[$i][\'createdon\']).\'</pubDate>\'."\\n".
				\'			<guid>\'.$link.\'</guid>\'."\\n".
				\'			<author>\'.htmlspecialchars($username).\'</author>\'."\\n".
				\'			</item>\'."\\n";
			} 
		}
		$output .= \'	</channel>\'."\\n".
		\'</rss>\';
		break;
	
	default:	// defaul mode
		$output = \'\';
		$title = $modx->documentObject[\'pagetitle\'];
		$link = $modx->config[\'site_url\'].$modx->makeUrl($linkid);
		$modx->regClientCSS(\'<link rel="alternate" type="application/rss+xml" title="\'.$title.\'" href="\'.$link.\'" />\');
        if($showlink) $output = \'<a href="\'.$link.\'">\'.$title.\'</a>\';
		break;
}

return $output;';
$s['NewsListing'] = '/**
 * Snippet Name: NewsListing
 * Short Desc: Displays News Articles and Blog Posts
 * Created By: The MODx Project
 * Version: 4.4
 * 
 * Displays posts with full support for pagination (paging of content in increments) and Template Variables
 *
 * Important Notes
 *	When in pagination mode (&paginate = 1) always call the snippet uncached in the [!NewsListing!] format
 *	Also, in pagination mode, make sure to use the placeholders for navigation!
 *	To display tv\'s make sure you use the tv prefix! 
 *	For example, if you have the template variable author you would put [+tvauthor+] in your template.
 *
 * Snippet placeholders:
 *		[+next+] - next button
 *		[+previous+] - previous button
 *		[+prevnextsplitter+] - splitter if always show is 0
 *		[+pages+] - page list
 *		[+totalpages+] - total number of pages
 *		[+start+] - the # of the first item shown
 *		[+stop+] - the # of the last item shown
 *		[+total+] - the total # of items
 *
 * Example of placeholder use:
 *		Showing <strong>[+start+]</strong> - <strong>[+stop+]</strong> of <strong>[+total+]</strong> Articles<br /><div id="nl_pages">[+previous+] [+pages+] [+next+]</div>
 *
 * Example CSS:
 *		<style type="text/css">
 *		#nl_pages {margin-top: 10px;}
 *		#nl_pages #nl_currentpage {border: 1px solid blue;padding: 2px; margin: 2px; background-color: rgb(90, 132, 158); color: white;}
 *		#nl_pages .nl_off {border: 1px solid #CCCCCC; padding: 2px; margin: 2px}
 *		#nl_pages a {border: 1px solid rgb(203, 227, 241);; padding: 2px; margin: 2px; text-decoration: none; color: black;}
 *		#nl_pages a:hover {border: 1px solid #000066; background-color: white; }
 *		#nl_archivelist ul{list-style-type: none; margin-left: 15px; padding-left: 0px;}
 *		#nl_archivelist ul ul{list-style-type: square;margin-left: 	35px;}
 *		.nl_month {font-weight: bold;}
 *		</style>
 *
 *  Snippet parameters [default] :
 *      &startID       - the folder containing the posts [the document called from]
 *      &paginate      - paginate [0]
 *      &prv		   - chunk to be used inside the previous link ["&lt; Previous"]
 *      &nxt		   - chunk to be used inside the next link ["Next &gt;"]
 *      &alwaysshow    - always show previous or next links (if enabled, hyperlink will be removed when prev/next page is not available, | delimiter will not be inserted) [0]
 *      &prevnextsplitter        - character delimiter to use to separate previous next links if alwaysshow is 0  ["|"]
 *      &summarize     - number of posts to list partially/fully [3]
 *      &total         - max number of posts to retrieve [all posts] 
 *      &increment     - # of items to advance by each time the previous or next links are clicked [10] 
 *      &trunc         - truncate to summary posts? if set to false, shows entire post [true]
 *      &truncSplit    - use the special "splitter" format to truncate for summary posts [true]
 *      &truncAt       - the split-point splitter itself [<!-- splitter -->]
 *      &truncText     - text for the summary "show more" link
 *      &truncLen      - number of characters to show in the doc summary [300]
 *      &truncOffset   - negative offset to use to fall back when splitting mid-open tag [30]
 *                     
 *      &comments      - whether or not the posts have comments [false]  
 *      &commText      - comments link text ["Read Comments"]  
 *                     
 *      &tpl           - name of the chunk to use for the summary view template  
 *      &dateformat    - the format for the summary date (see http://php.net/strftime ) [%d-%b-%y %H:%M]
 *      &datetype      - the date type to display (values can be createdon, pub_date, editedon) [&sortby | "createdon"]
 *      &pubOnly       - only show Published posts [true]
 *      &emptytext     - text to use when no news items are found
 *      &showarch      - show archive listing? [true]
 *      &archplaceholder -output archive (older posts section) as a placeholder called archive [0]
 *      &archivetext   - text to use for the Post Archives listing ["Older Items"]
 *      &commentschunk - if you\'re using comments, the name of the chunk used to format them
 *      &sortby        - field to sort by (reccomended values include createdon, pub_date, editedon; reverts to createdon if value is invalid) ["createdon"]
 *      &sortdir       - direction to sort by ["desc"]
 *      &debug	       - enables debug output [0]
 * 
 *  Modified by Mark Kaplan, Susan Ottwell, Raymond Irving, Greg Matthews and Ryan Thrash:
 *	10-Dec-2005 restored ability to split after N charcacters without splitting inside an open tag (such as img, a href, etc.)
 *	06-Dec-2005 added xhtml strict month based archives, added nl_ prefix to all styles, minor fixes and documentation cleanup
 *	05-Dec-2005 added support for pages and TVs!
 *	03-Dec-2005 added pagination from NewsArchive (Mark)
 *	01-Dec-2005 cleaned up code and parameters for 0.9.1 release and improved debug code (Mark)
 *	25-Nov-2005 added multisort capabilities (Jason/Mark)
 *	25-Nov-2005 added ability to call useful parts of the document object in a template via [+documentobject+] (Mark)
 *	24-Nov-2005 added [+longtitle+] by Paul
 *	11-Nov-2005 showarch added
 *	04-Nov-2005 various improvements and bugfixes
 *	21-Oct-2005 footer/header removed from summaries
 *	12-Oct-2005 malformed tag-closing mojo and more cleanups
 *	11-Oct-2005 many updates inc. showPublishedOnly, summary splitter, configs and default template format
 *	22-Sept-2005 add &linktext support
 *	22-Sept-2005 add template support. Fields - [+title+],[+summary+],[+author+],[+date+],[+link+]
 *	19-April-2005 add introtext field support
 *
 *
 *  To Do: 
 *      comment counts where applicable
 *      evaluate date formats/server offsets
 *      query optimizations
 *      show in menu if needed ?
 *
 *  Credits:
 *      Now "goes to eleven" thanks to Mark Kaplan 
 *      Month archives based on code from the "event-list" snippet by kastor
 *      Enhancements by Raymond Irving, Ryan Thrash and tag-closing mojo by Greg Matthews 
 *      Original code by Alex with improvements by LePrince, mrruben5, lloyd_barrett
 */
 
$paginate = isset($paginate)? $paginate : 0;
	// paginatation enabled or disabled

$furls = $modx->config[\'friendly_urls\'];
	// are furls enabled
	
$resourceparent = isset($startID) ? $startID : $modx->documentIdentifier;
    // the folder that contains post entries 

$nrposts = isset($summarize) ? $summarize : 3;
    // number of posts of which to show a summary 
    // remainder (to nrtotal) go as an arhived/other posts list
         
$trunc = isset($trunc) ? $trunc : true;
    // should there be summary/short version of the posts?

$truncsplit = isset($truncSplit) ? $truncSplit : true;
    // should the post be summarized at the "splitter"?

$splitter = isset($truncAt) ? $truncAt : "<!-- splitter -->";
    // where to split the text 

$lentoshow = isset($truncLen) ? $truncLen : 300;
    // how many characters to show of blogs 

$lenoffset = isset($truncOffest) ? $truncOffset : 30;
    // how many characters to show of blogs 

$tpl = isset($tpl) ? $modx->getChunk($tpl):\'
    <div class="nl_summaryPost">
        <h3><a href="[~[+id+]~]">[+title+]</a></h3>
        <div>[+summary+]</div>
        <p>[+link+]</p>
        <div style="text-align:right;">by <strong>[+author+]</strong> on [+date+]</div>
    </div>
\';
    // optional user defined chunk name to format the summary posts

$showPublishedOnly = isset($pubOnly) ? $pubOnly : true;
    // allows you to show unpublished docs if needed for some reason...

$showInMenuOnly = isset($menuOnly) ? $menuOnly : true;
    // allows you to show docs marked not to show in the menus 
    // if needed for some reason...
    // TO BE IMPLEMENTED
    
$linktext = isset($truncText)? $truncText : "More on this story...";
    // text to be displayed in news link

$emptytext = isset($emptytext)? $emptytext : \'<p>No entries found.</p>\';
    // text to be displayed when there are no results

$comments = isset($comments)? $comments : false;
    // can the posts have comments?

$commText = isset($commText)? $commText : \'Comments\';
    // text to be used for the comments link

$date = isset($dateformat)? $dateformat :"%d-%b-%y %H:%M";
    // format for the summary post date format
	
$showarch = isset($showarch)? $showarch : true;
  // whether or not to show the Post Archives listing

$archtxt = isset($archivetext)? $archivetext :"Older Items";
    // text to use for the Post Archives listing

$commentschunk = isset($commentschunk)? \'{{\'.$commentschunk.\'}}\' : \'\';
    // if you\'re using comments, the name of the chunk used to format them

$sortdir = isset($sortdir) ? strtoupper($sortdir) : \'DESC\';
    // get sort dir

if (isset($sortby) && ($sortby == "createdon" || $sortby == "editedon" || $sortby == "pub_date" || $sortby == "unpub_date" || $sortby =="deletedon")) {
	$dt = $sortby;
} else if (isset($datetype)) {
	$dt = $datetype;
} else {
	$dt = "createdon";
}

$datetype = $dt;
	// date type to display (values can be createdon, pub_date, editedon)	
	
$start= isset($_GET[\'start\'])? $_GET[\'start\']: 0;
	// get post # to start at

$debug = isset($debug)? $debug : 0;
    // for testing only

$output = \'\';
    // initialize the output variable 
	
$debugtext = \'\';
    // initialize the debugtext variable 

$prv = isset($prv)? $modx->getChunk($prv) : "&lt; Previous";
	// get the chunk code to be used inside the previous <a> tag.
    
$nxt = isset($nxt)? $modx->getChunk($nxt) : "Next &gt;";
	// get the chunk code to be used inside the next <a> tag.

$alwaysshow = isset($alwaysshow)? $alwaysshow : 0;
	// determine whether or not to always show previous next links

$archplaceholder = isset($archplaceholder)? $archplaceholder : 0;
	// output archive (older posts section) as a placeholder called [+archive+]
	
$prevnextsplitter = isset($prevnextsplitter)? $prevnextsplitter : "|";
	// splitter to use of always show is disabled
	
// Check for valid field to sort by
	
$columns = $modx->db->query("show columns from ".$modx->getFullTableName(\'site_content\'));
while($dbfield = $modx->db->getRow($columns))
   $dbfields[] = $dbfield[\'Field\'];
if(isset($sortby) && in_array($sortby,$dbfields)) {
   $sortby = $sortby;
} else {
   $sortby = "createdon";
}

if ($sortby != 	"pub_date" && $sortby != "unpub_date" && $sortby != "editedon" && $sortby != "deletedon") {

// API Method (allows for everything except pub_date, unpub_date, editedon, deletedon)
	$debugtext = "Using the API Method (allows for everything except pub_date, unpub_date, editedon, deletedon) <br />";
	$callby = ($showPublishedOnly)? \'getActiveChildren\' : \'getAllChildren\';
	$resource = $modx->$callby($resourceparent, $sortby, $sortdir, $fields=\'*\');
	
} else {

// SQL Method (alows for all possibilites but is slower)
	$debugtext = "Using the SQL Method (alows for all possibilites but is slower) <br />";
	$tblContent= $modx->db->config[\'table_prefix\'] . \'site_content\';
	$activeClause= $showPublishedOnly? \'AND published = 1\': \'\'; 
	$query= "SELECT id , type , contentType , pagetitle , longtitle , description , alias , published , IF(pub_date > 0, pub_date, createdon) as pub_date, IF(unpub_date > 0, unpub_date, createdon) as unpub_date , parent , isfolder , introtext , content , richtext , template , menuindex , searchable , cacheable , createdby , createdon, editedby , IF(editedon > 0, editedon, createdon) as editedon, deleted , IF(deletedon > 0, deletedon, createdon) as deletedon, deletedby , menutitle , donthit , haskeywords , hasmetatags , privateweb , privatemgr , content_dispo , hidemenu  FROM $tblContent WHERE parent = $resourceparent $activeClause ORDER BY $sortby $sortdir";
	
	if (!$rs= $modx->db->query($query)) {
		return \'\';
	}
	while ($row= $modx->db->getRow($rs)) {
		$resource[]= $row;
	}
}

$recordcount = count($resource);
$output .= ($recordcount < 1)? $emptytext."\\n" : \'\';  

$nrtotal = isset($total) ? $total : $recordcount;
    // total number of posts to retrieve 
	
$limit = min( $recordcount, $nrtotal ); 	

if ($recordcount < $nrposts)
{
	$stop = $recordcount;
} else {
	$stop = $nrposts;
}

if ($nrtotal > $recordcount) {$nrtotal = $recordcount;}

if ($debug == 1) {
	// rudimentary debugging output
	$output .= "Number supposed to be summarized (nrposts/count): $nrposts<br />Total supposed to be returned: $stop<br />Count of total in db (count): $recordcount<br />Sort by (sortby): $sortby <br />Sort direction (sortdir): $sortdir <br/ >$debugtext";
}

// function used to clean all the open HTML tags inside summary posts
// useful so it won\'t break layouts due to there being open tags like 
// OL, UL, DIV, H1 or maybe even A tags for example
if(!function_exists(\'html_substr\')) {

	function html_substr($posttext, $minimum_length, $length_offset) {
	   // The approximate length you want the concatenated text to be
	   // $minimum_length = 200;
	   // The variation in how long the text can be
	   // in this example text length will be between 200-20=180 characters
	   // and the character where the last tag ends
	   // $length_offset = 20;
	   // Reset tag counter & quote checker
	   $tag_counter = 0;
	   $quotes_on = FALSE;
	   // Check if the text is too long
	   if (strlen($posttext) > $minimum_length) {
	       // Reset the tag_counter and pass through (part of) the entire text
	       for ($i = 0; $i < strlen($posttext); $i++) {
	           // Load the current character and the next one
	           // if the string has not arrived at the last character
	           $current_char = substr($posttext,$i,1);
	           if ($i < strlen($posttext) - 1) {
	               $next_char = substr($posttext,$i + 1,1);
	           }
	           else {
	               $next_char = "";
	           }
	           // First check if quotes are on
	           if (!$quotes_on) {
	               // Check if it\'s a tag
	               // On a "<" add 3 if it\'s an opening tag (like <a href...)
	               // or add only 1 if it\'s an ending tag (like </a>)
	               if ($current_char == "<") {
	                   if ($next_char == "/") {
	                                       $tag_counter++;
	                   }
	                   else {
	                       $tag_counter = $tag_counter + 3;
	                   }
	               }
	               // Slash signifies an ending (like </a> or ... />)
	               // substract 2
	               if ($current_char == "/") $tag_counter = $tag_counter - 2;
	               // On a ">" substract 1
	               if ($current_char == ">") $tag_counter--;
	               // If quotes are encountered, start ignoring the tags
	               // (for directory slashes)
	               if ($current_char == "\\"") $quotes_on = TRUE;
	           }
	           else {
	               // IF quotes are encountered again, turn it back off
	               if ($current_char == "\\"") $quotes_on = FALSE;
	           }

	           // Check if the counter has reached the minimum length yet,
	           // then wait for the tag_counter to become 0, and chop the string there
	           if ($i > $minimum_length - $length_offset && $tag_counter == 0) {
	               $posttext = substr($posttext,0,$i + 1) . "...";
	               return $posttext;
	           }
	       }
	   }
	             return $posttext;
	}


}
// function used to clean all the open HTML tags inside summary posts
// useful so it won\'t break layouts due to there being open tags like 
// OL, UL, DIV, H1 or maybe even A tags for example
if(!function_exists(\'closeTags\')) {
	function closeTags($text) {
		global $debug;
	    $openPattern = "/<([^\\/].*?)>/";   
	    $closePattern = "/<\\/(.*?)>/"; 
	    $endOpenPattern = "/<([^\\/].*?)$/"; 
	    $endClosePattern = "/<(\\/.*?[^>])$/"; 
	    $endTags=\'\'; 
     
	    preg_match_all($openPattern,$text,$openTags); 
	    preg_match_all($closePattern,$text,$closeTags); 
    
	    if ($debug == 1) {
	        print_r($openTags); 
	        print_r($closeTags); 
	    }
    
	    $c=0; 
	    $loopCounter = count($closeTags[1]);  //used to prevent an infinite loop if the html is malformed 
	    while($c<count($closeTags[1]) && $loopCounter) { 
	        $i=0; 
	        while($i<count($openTags[1])) { 
	            $tag = trim($openTags[1][$i]); 
             
	            if(strstr($tag,\' \')) { 
	                $tag = substr($tag,0,strpos($tag,\' \'));    
	            } 
	            if ($debug == 1) { echo $tag.\'==\'.$closeTags[1][$c]."\\n"; } 
	            if($tag==$closeTags[1][$c]) { 
	                $openTags[1][$i]=\'\'; 
	                $c++; 
	                break; 
	            }    
	            $i++; 
	        } 
	        $loopCounter--; 
	    } 
     
	    $results = $openTags[1]; 
     
	    if(is_array($results)) {  
	    $results = array_reverse($results); 
         
	        foreach($results as $tag) { 
	            $tag = trim($tag); 
             
	            if(strstr($tag,\' \')) { 
	                $tag = substr($tag,0,strpos($tag,\' \'));    
	            }    
	            if(!stristr($tag,\'br\') && !stristr($tag,\'img\') && !empty($tag)) { 
	                $endTags.= \'</\'.$tag.\'>\'; 
	            } 
	        }    
	    } 
	    return $text.$endTags; 
	}
} // end if function exists

if ($nrposts > 0) { 

	// Start Pagination
	if ($paginate == 1) {
		if ($furls == 0) {
			$char = "&";
		} else if($furls == 1) {
			$char = "?";
		}
		$currentpageid = $modx->documentObject[\'id\'];
		$next = $start + $nrposts;

		$nextlink = "<a href=\'[~$currentpageid~]".$char."start=$next\'>".$nxt."</a>";
		$previous = $start - $nrposts;
		$previouslink = "<a href=\'[~$currentpageid~]".$char."start=$previous\'>".$prv."</a>";
		$limten = $nrposts + $start;
		if ($alwaysshow == 1) {
			$previousplaceholder = "<span class=\'nl_off\'>".$prv."</span>";
			$nextplaceholder = "<span class=\'nl_off\'>".$nxt."</span>";
		} else {
			$previousplaceholder = "";
			$nextplaceholder = "";
		}
		$split = "";
		if ($previous > -1 && $next < $nrtotal) $split = $prevnextsplitter;
		if ($previous > -1) $previousplaceholder = $previouslink;
		if ($next < $nrtotal) $nextplaceholder = $nextlink;
		if ($start < $nrtotal) $stop = $limten;
		if ($limten > $nrtotal){$limiter = $nrtotal;} else {$limiter = $limten;}
	
		$totalpages=ceil($nrtotal/$nrposts);
	
		for ($x=0; $x<=$totalpages-1; $x++) {
			$inc = $x * $nrposts;
			$display = $x+1;
			if($inc != $start) {
				$pages .= "<a class=\\"nl_page\\" href=\'[~$currentpageid~]".$char."start=$inc\'>$display</a>";
			} else {
				$pages .= "<span id=\\"nl_currentpage\\">$display</span>";
			}	
		}

		$modx->setPlaceholder(\'next\',$nextplaceholder);
		$modx->setPlaceholder(\'previous\',$previousplaceholder);
		$modx->setPlaceholder(\'prevnextsplitter\',$split);
		$modx->setPlaceholder(\'start\',$start+1);
		$modx->setPlaceholder(\'stop\',$limiter);
		$modx->setPlaceholder(\'total\',$nrtotal);
		$modx->setPlaceholder(\'pages\',$pages);
		$modx->setPlaceholder(\'totalpages\',$totalpages);	

		if ($start < $nrtotal) $stop = $limten;
	}
	// End Pagination
	
	if ($debug == 1) $output .= "Start at $start and stop at $stop (stop)/$nrtotal (total)";
	for ($x = $start; $x < $stop; $x++) { 
		if ($x <= $nrtotal && $x <= $nrtotal-1) {
		if ($resource[$x][\'createdby\']<0) {
			// get web user name
			$tbl = $modx->getFullTableName("web_users");
			$sql = "SELECT username FROM $tbl WHERE $tbl.id = \'".abs($resource[$x][\'createdby\'])."\'"; 
		}
		else {
			// get manager user name
			$tbl = $modx->getFullTableName("manager_users");
			$sql = "SELECT username FROM $tbl WHERE $tbl.id = \'".$resource[$x][\'createdby\']."\'";
		}
		$link = \'\';
        //perform the query
		$rs2 = $modx->dbQuery($sql);
		$limit2 = $modx->recordCount($rs2); 
		if($limit2<1) { 
			$username = "anonymous"; 
		} else { 
			$resourceuser = $modx->fetchRow($rs2); 
			$username = $resourceuser[\'username\']; 
		} 
		// determine and show summary
		
		// summary is turned off
		if (!$trunc) {
		    $summary = $resource[$x][\'content\']; 
		    
		// contains the splitter and use splitter is on
		} else if ((strstr($resource[$x][\'content\'], $splitter)) && $truncsplit) {
            $summary = array();
            
            // HTMLarea/XINHA encloses it in paragraph\'s
            $summary = explode(\'<p>\'.$splitter.\'</p>\',$resource[$x][\'content\']);
            
            // For TinyMCE or if it isn\'t wrapped inside paragraph tags
            $summary = explode($splitter,$summary[\'0\']); 

            $summary = $summary[\'0\'];
            // $link = \'<a href="[~\'.$resource[$x][\'id\'].\'~]">\'.$linktext.\'</a>\';

        // fall back to the summary text    
		} else if (strlen($resource[$x][\'introtext\'])>0) {
			$summary = $resource[$x][\'introtext\'];
			// $link = \'<a href="[~\'.$resource[$x][\'id\'].\'~]">\'.$linktext.\'</a>\';
			
		// fall back to the summary text count of characters	
		} else if(strlen($resource[$x][\'content\']) > $lentoshow) { 
		 	$summary = substr($resource[$x][\'content\'], 0, $lentoshow).\' ...\'; 
		
		// and back to where we started if all else fails (short post)
		} else { 
			$summary = $resource[$x][\'content\']; 
		}  
		
		// Post-processing to clean up summaries
		$summary = html_substr($summary,$lentoshow,$lenoffset);
		$summary = closeTags($summary);
		$summary = str_replace($commentschunk,\'\',$summary); 
		
		// Build the "show more" link
		$link = \'<a href="[~\'.$resource[$x][\'id\'].\'~]">\'.$linktext.\'</a>\';
        

    // Output debug info
	if ($debug == 1) $output .= \'<p><strong>Document Data for "\'.$resource[$x][\'pagetitle\'].\'"</strong></p><textarea name="Document Data" rows="5" readonly>\';
		// Set placeholders for document object
		foreach ($resource[$x] as $docVar => $docVarValue) {
			$modx->setPlaceholder($docVar, $docVarValue); 
			
			if ($debug == 1 && $docVar != "content"){			
			$output .= $docVar." = ".htmlspecialchars($docVarValue)." \\n";
		}
	}
			  
	if ($debug == 1) $output .= \'</textarea>\';
	
	// Set tv placeholders
	preg_match_all(\'~\\[\\+tv(.*?)\\+\\]~\', $tpl, $matches);
	$cnt = count($matches[1]);
		for($i=0; $i<$cnt; $i++) {
			$value = $modx->getTemplateVarOutput($idname=array($matches[1][$i]), $docid=$resource[$x][\'id\'], $published=$resource[$x][\'published\']);
			$v = $value[$matches[1][$i]];
			$modx->setPlaceholder("tv".$matches[1][$i], $v); 
		}

	// Set placeholders that can be used in the Chunk
	
		// Set placeholders for backwards compadibility and custom fields
		$modx->setPlaceholder(\'title\', $resource[$x][\'pagetitle\']);
		$modx->setPlaceholder(\'summary\', $summary); 
		$modx->setPlaceholder(\'link\', $link); 
		$modx->setPlaceholder(\'author\', $username); 
		$modx->setPlaceholder(\'date\', strftime($date, $resource[$x][$datetype])); 
		 
    // Expand the chunk code, and replace Placeholders
	if ($debug != 1) $output .= $modx->mergePlaceholderContent($modx->mergeChunkContent($tpl));

	} 
}} 
$archivehtml = "";
if ($debug == 1) $output .= "<br />Generate arcive (if true): $stop<$nrtotal and $showarch == true<br />";

if($stop<$nrtotal && $showarch == true) {

$displayeds = 0;
$lastMonth = -1;
$archivehtml .= "<h3>$archtxt</h3><div id=\\"nl_archivelist\\"><ul>";
for ($i = $stop; $i < $nrtotal; $i++) {
	$unixdate = $resource[$i][$datetype];
		$dateArray = getdate($unixdate);
		$curMonth = $dateArray[\'mon\'];
		$month = strftime("%B %Y", $resource[$i][$datetype]);
		if ($curMonth != $lastMonth) {
			if ($lastMonth != -1) {
				$archivehtml .= \'</ul></li>\';
			}
			$archivehtml .= \'<li><span class="nl_month">\'.$month.\'</span><ul>\';
		}
		
		$archivehtml .= "<li class=\\"nl_archpost\\"><a href=\'[~".$resource[$i][\'id\']."~]\'>".$resource[$i][\'pagetitle\']."</a> (<span class=\\"nl_date\\">".strftime($date, $resource[$i][$datetype])."</span>)</li>";
		++$displayeds;
		$lastMonth  = $curMonth;

}
$archivehtml .= "</ul></li></ul></div>";
}

if ($archplaceholder == 1)
{
	$modx->setPlaceholder(\'archive\', $archivehtml); 
}
else if($showarch == true && $paginate != 1)
{
	$output .= $archivehtml;
}
else
{
	$output .= "";
}

return $output;';
$s['NewsPublisher'] = '#::::::::::::::::::::::::::::::::::::::::
#
#  Snippet Name: NewsPublisher 
#  Short Desc: Create articles directly from front end (news, blogs, PR, etc.)
#  Created By: Raymond Irving (xwisdom@yahoo.com), August 2005
#
#  Version: 1.3
#  Modified: December 13, 2005
#
#  Changelog: 
#    Dec 13, 05 -- Now inherrits web/manager docgroups thanks to Jared Carlow
#
#::::::::::::::::::::::::::::::::::::::::
#  Description: 	
#    Checks to see if users belong to a certain group and 
#    displays the specified chunk if they do. Performs several
#    sanity checks and allows to be used multiple times on a page.
#    Only meant to be used once per page.
#::::::::::::::::::::::::::::::::::::::::
#  
#  Parameters:
#    &folder      - folder id where comments are stored
#    &makefolder  - set to 1 to automatically convert the parent document to a folder. Defaults to 0
#    &postid      - document id to load after posting news item. Defaults to the page created
#    &canpost     - comma delimitted web groups that can post comments. leave blank for public posting
#    &badwords    - comma delimited list of words not allowed in post
#    &template    - name of template to use for news post
#    &headertpl   - header template (chunk name) to be inserted at the begining of the news content
#    &footertpl   - footer template (chunk name) to be inserted at the end of the news content
#    &formtpl     - form template (chunk name)
#    &rtcontent   - name of a richtext content form field 
#    &rtsummary   - name of a richtext summary form field 
#    &showinmenu  - sets the flag to true or false (1|0) as to whether or not it shows in the menu. defaults to false (0)
#    &aliastitle  - set to 1 to use page title as alias suffix. Defaults to 0 - date created.
#    &clearcache  - when set to 1 the system will automatically clear the site cache after publishing an article.
#  
#::::::::::::::::::::::::::::::::::::::::

// get user groups that can post articles
$postgrp = isset($canpost) ? explode(",",$canpost):array();
$allowAnyPost = count($postgrp)==0 ? true : false;

// get clear cache
$clearcache	 = isset($clearcache) ? 1:0;

// get alias title
$aliastitle	 = isset($aliastitle) ? 1:0;

// get folder id where we should store articles
// else store in current document
$folder = isset($folder) ? intval($folder):$modx->documentIdentifier;

// set rich text content field
$rtcontent = isset($rtcontent) ? $rtcontent:\'content\';

// set rich text summary field
$rtsummary = isset($rtsummary) ? $rtsummary:\'introtext\';

// get header
$header = isset($headertpl) ? "{{".$headertpl."}}":\'\';

// get footer
$footer = isset($footertpl) ? "{{".$footertpl."}}":\'\';

// get postback status
$isPostBack = isset($_POST[\'NewsPublisherForm\']) ? true:false;

// get badwords
if(isset($badwords)) {
    $badwords = str_replace(\' \',\'\', $badwords);
    $badwords = "/".str_replace(\',\',\'|\', $badwords)."/i";
}

// get menu status
$hidemenu = isset($showinmenu) && $showinmenu==1 ? 0 : 1;

// get template
$template = isset($template) ? $modx->db->getValue(\'SELECT id FROM \'.$modx->getFullTableName(\'site_templates\').\' WHERE templatename=\\\'\'.mysql_escape_string($template).\'\\\'\'):$modx->config[\'default_template\'];

$message = \'\';

// get form template
if(isset($formtpl)) $formTpl = $modx->getChunk($formtpl);
if(empty($formTpl)) $formTpl = \'
    <form name="NewsPublisher" method="post">
        <input name="NewsPublisherForm" type="hidden" value="on" />
        Page title:<br /><input name="pagetitle" type="text" size="40" value="[+pagetitle+]" /><br />
        Long title:<br /><input name="longtitle" type="text" size="40" value="[+longtitle+]" /><br />
        Description:<br /><input name="description" type="text" size="40" value="[+description+]" /><br />
        Published date:<br /><input name="pub_date" type="text" value="[+pub_date+]" size="40" readonly="readonly" />
        <a onClick="nwpub_cal1.popup();" onMouseover="window.status=\\\'Select date\\\'; return true;" onMouseout="window.status=\\\'\\\'; return true;" style="cursor:pointer; cursor:hand"><img align="absmiddle" src="manager/media/images/icons/cal.gif" width="16" height="16" border="0" alt="Select date" /></a>
        <a onClick="document.NewsPublisher.pub_date.value=\\\'\\\'; return true;" onMouseover="window.status=\\\'Remove date\\\'; return true;" onMouseout="window.status=\\\'\\\'; return true;" style="cursor:pointer; cursor:hand"><img align="absmiddle" src="manager/media/images/icons/cal_nodate.gif" width="16" height="16" border="0" alt="Remove date"></a><br />
        Unpublished date:<br /><input name="unpub_date" type="text" value="[+unpub_date+]" size="40" readonly="readonly" />
        <a onClick="nwpub_cal2.popup();" onMouseover="window.status=\\\'Select date\\\'; return true;" onMouseout="window.status=\\\'\\\'; return true;" style="cursor:pointer; cursor:hand"><img align="absmiddle" src="manager/media/images/icons/cal.gif" width="16" height="16" border="0" alt="Select date" /></a>
        <a onClick="document.NewsPublisher.unpub_date.value=\\\'\\\'; return true;" onMouseover="window.status=\\\'Remove date\\\'; return true;" onMouseout="window.status=\\\'\\\'; return true;" style="cursor:pointer; cursor:hand"><img align="absmiddle" src="manager/media/images/icons/cal_nodate.gif" width="16" height="16" border="0" alt="Remove date"></a><br />
        Summary:<br /><textarea name="introtext" cols="50" rows="5">[+introtext+]</textarea><br />
        Content:<br /><textarea name="content" cols="50" rows="8">[+content+]</textarea><br />
        <input name="send" type="submit" value="Submit" />
    </form>
    <script language="JavaScript" src="manager/media/script/datefunctions.js"></script>
    <script type="text/javascript">
        var elm_txt = {}; // dummy
        var pub = document.forms["NewsPublisher"].elements["pub_date"];
        var nwpub_cal1 = new calendar1(pub,elm_txt);
        nwpub_cal1.path="[(base_url)]manager/media/";
        nwpub_cal1.year_scroll = true;
        nwpub_cal1.time_comp = true;	

        var unpub = document.forms["NewsPublisher"].elements["unpub_date"];
        var nwpub_cal2 = new calendar1(unpub,elm_txt);
        nwpub_cal2.path="[(base_url)]manager/media/";
        nwpub_cal2.year_scroll = true;
        nwpub_cal2.time_comp = true;	
    </script>\';


// switch block
switch ($isPostBack) {
    case true:
        // process post back
        // remove magic quotes from POST
        if(get_magic_quotes_gpc()){
            $_POST = array_map("stripslashes", $_POST);
        }	
        if(trim($_POST[\'pagetitle\'])==\'\') $modx->webAlert(\'Missing page title.\');
        elseif($_POST[$rtcontent]==\'\') $modx->webAlert(\'Missing news content.\');
        else {
            // get created date
            $createdon = time();

            // set alias name of document used to store articles
            if(!$aliastitle) $alias = \'article-\'.$createdon;
            else {
                $alias = $modx->stripTags($_POST[\'pagetitle\']);
                $alias = strtolower($alias);
                $alias = preg_replace(\'/&.+?;/\', \'\', $alias); // kill entities
                $alias = preg_replace(\'/[^\\.%a-z0-9 _-]/\', \'\', $alias);
                $alias = preg_replace(\'/\\s+/\', \'-\', $alias);
                $alias = preg_replace(\'|-+|\', \'-\', $alias);
                $alias = trim($alias, \'-\');			
                $alias = \'article-\'.$modx->db->escape($alias);
            }

            $user = $modx->getLoginUserName();
            $userid = $modx->getLoginUserID();
            if(!$user && $allowAnyPost) $user = \'anonymous\';

            // check if user has rights
            if(!$allowAnyPost && !$modx->isMemberOfWebGroup($postgrp)) {
                return \'You are not allowed to publish articles\';
            }

            $allowedTags = \'<p><br><a><i><em><b><strong><pre><table><th><td><tr><img><span><div><h1><h2><h3><h4><h5><font><ul><ol><li><dl><dt><dd>\';

            // format content
            $content = $modx->stripTags($_POST[$rtcontent],$allowedTags);
            $content = str_replace(\'[+user+]\',$user,$content);
            $content = str_replace(\'[+createdon+]\',strftime(\'%d-%b-%Y %H:%M\',$createdon),$content);
            foreach($_POST as $n=>$v) {
                if(!empty($badwords)) $v = preg_replace($badwords,\'[Filtered]\',$v); // remove badwords
                $v = $modx->stripTags(htmlspecialchars($v));
                $v = str_replace("\\n",\'<br />\',$v);
                $content = str_replace(\'[+\'.$n.\'+]\',$v,$content);
            }

            $title = mysql_escape_string($modx->stripTags($_POST[\'pagetitle\']));
            $longtitle = mysql_escape_string($modx->stripTags($_POST[\'longtitle\']));
            $description = mysql_escape_string($modx->stripTags($_POST[\'description\']));
            $introtext = mysql_escape_string($modx->stripTags($_POST[$rtsummary],$allowedTags));
            $pub_date = $_POST[\'pub_date\'];
            $unpub_date = $_POST[\'unpub_date\'];
            $published = 1;

            // check published date
            if($pub_date=="") {
                $pub_date="0";
            } else {
                list($d, $m, $Y, $H, $M, $S) = sscanf($pub_date, "%2d-%2d-%4d %2d:%2d:%2d");
                $pub_date = strtotime("$m/$d/$Y $H:$M:$S");

                if($pub_date < $createdon) {
                    $published = 1;
                }    elseif($pub_date > $createdon) {
                    $published = 0;	
                }
            }

            // check unpublished date
            if($unpub_date=="") {
                $unpub_date="0";
            } else {
                list($d, $m, $Y, $H, $M, $S) = sscanf($unpub_date, "%2d-%2d-%4d %2d:%2d:%2d");
                $unpub_date = strtotime("$m/$d/$Y $H:$M:$S");
                if($unpub_date < $createdon) {
                    $published = 0;
                }
            }

            // set menu index
            $mnuidx = $modx->db->getValue(\'SELECT MAX(menuindex)+1 as \\\'mnuidx\\\' FROM \'.$modx->getFullTableName(\'site_content\').\' WHERE parent=\\\'\'.$folder.\'\\\'\');
            if($mnuidx<1) $mnuidx = 0;

            // post news content
            $flds = array(
                \'pagetitle\'     => $title,
                \'longtitle\'     => $longtitle,
                \'description\' => $description,
                \'introtext\'     => $introtext,
                \'alias\'             => $alias,
                \'parent\'            => $folder, 
                \'createdon\'     => $createdon,
                \'createdby\'     => ($userid>0 ? $userid * -1:0),
                \'editedon\'        => \'0\',
                \'editedby\'        => \'0\',
                \'published\'     => $published,
                \'pub_date\'        => $pub_date,
                \'unpub_date\'    => $unpub_date,
                \'deleted\'         => \'0\',
                \'hidemenu\'        => $hidemenu,
                \'menuindex\'     => $mnuidx,
                \'template\'        => $template,
                \'content\'         => mysql_escape_string($header.$content.$footer)
            );
            $redirectid = $modx->db->insert($flds,$modx->getFullTableName(\'site_content\'));

            // Doc group thing
            // look in save_content.processor.php for tips (or below)
            $lastInsertId = $modx->db->getInsertId();

            // Get doc groups based on $folder (parent id)
            $parentDocGroupsSql = "SELECT * FROM " . $modx->getFullTableName(\'document_groups\'). " where document=".$folder;
            $parentDocGroupsRs = $modx->db->query($parentDocGroupsSql);
            $parentDocGroupsLimit = $modx->db->getRecordCount($parentDocGroupsRs);
            for ($pdgi = 0; $pdgi < $parentDocGroupsLimit; $pdgi++) { 
                $currentDocGroup = $modx->db->getRow($parentDocGroupsRs);
                $parentDocGroupsArray[$pdgi] = $currentDocGroup[\'document_group\'];
            }

            // put the document in the document_groups it should be in
            // check that up_perms are switched on!
            if($modx->config[\'use_udperms\']==1) {
                if(is_array($parentDocGroupsArray)) {
                    foreach ($parentDocGroupsArray as $dgKey=>$dgValue) {
                        $insertDocSql = "INSERT INTO ".$modx->getFullTableName(\'document_groups\')."(document_group, document) values(".stripslashes($dgValue).", $lastInsertId)";
                        $insertDocRs = $modx->db->query($insertDocSql);
                        if(!$insertDocRs){
                            exit;
                        }
                    } // end foreach
                } // end if doc group array exists
            } // end if perms are used

            // Handle privateweb
            $modx->db->query("UPDATE ".$modx->getFullTableName("site_content")." SET privateweb = 0 WHERE id=\'$lastInsertId\';");
            $privatewebSql =    "
                SELECT DISTINCT modx_document_groups.document_group 
                FROM modx_document_groups, modx_webgroup_access 
                WHERE 
                modx_document_groups.document_group = modx_webgroup_access.documentgroup 
                AND 
                modx_document_groups.document = $lastInsertId;";
                $privatewebIds = $modx->db->getColumn("document_group",$privatewebSql);
                if(count($privatewebIds)>0) {
                    $modx->db->query("UPDATE ".$modx->getFullTableName("site_content")." SET privateweb = 1 WHERE id = $lastInsertId;");	
                }

                // And privatemgr
                $modx->db->query("UPDATE ".$modx->getFullTableName("site_content")." SET privatemgr = 0 WHERE id=\'$lastInsertId\';");
                $privatemgrSql =    "
                    SELECT DISTINCT modx_document_groups.document_group 
                    FROM modx_document_groups, modx_membergroup_access 
                    WHERE 
                    modx_document_groups.document_group = modx_membergroup_access.documentgroup 
                    AND 
                    modx_document_groups.document = $lastInsertId;";
                    $privatemgrIds = $modx->db->getColumn("document_group",$privatemgrSql);
                    if(count($privatemgrIds)>0) {
                        $modx->db->query("UPDATE ".$modx->getFullTableName("site_content")." SET privatemgr = 1 WHERE id = $lastInsertId;");	
                    }
            // end of document_groups stuff!

            if(!empty($makefolder)) {
                // convert parent into folder
                $modx->db->update(array(\'isfolder\'=>\'1\'),$modx->getFullTableName(\'site_content\'),\'id=\\\'\'.$folder.\'\\\'\');
            }

            // empty cache
            if($clearcache==1){
                include_once $modx->config[\'base_path\']."manager/processors/cache_sync.class.processor.php";
                $sync = new synccache();
                $sync->setCachepath("assets/cache/");
                $sync->setReport(false);
                $sync->emptyCache(); // first empty the cache		
            }

            // get redirect/post id
            $redirectid = $modx->db->getValue(\'SELECT id as \\\'redirectid\\\' FROM \'.$modx->getFullTableName(\'site_content\').\' WHERE createdon=\\\'\'.$createdon.\'\\\'\');
            $postid = isset($postid) ? $postid:$redirectid;

            // redirect to post id
            $modx->sendRedirect($modx->makeUrl($postid));
        }

    default: 
        // display news form
        // check if user has rights to post comments
        if(!$allowAnyPost && !$modx->isMemberOfWebGroup($postgrp)) {
            $formTpl = \'\';
        } else {
            foreach($_POST as $n=>$v) {
                $formTpl = str_replace(\'[+\'.$n.\'+]\',$v,$formTpl);
            }
        }
        // return form
        return $message.$formTpl;
        break;
}';
$s['UserComments'] = '/**
 *
 *	Name: UserComments
 *	Desc: Append User Comments to any Document
 *	Created by Raymond Irving, July 2005
 *
 *	Version: 1.1
 *	Updated: December 8, 2005
 *	
 *	Changes:
 *	Dec 8, 05 - Fixed ability to specify the comments to display (remote show via passing in &docid) by modx@vertexworks.com
 *
 *	Parameters:
 *		&displaytpl		- display template (chunk name)
 *		&formtpl		- form template (chunk name)
 *
 *		&canpost		- comma delimitted web groups that can post comments. leave blank for public posting
 *		&canview		- comma delimitted web groups that can view comments. leave blank for public viewing
 *		&badwords		- comma delimited list of words not allowed in post
 *		&makefolder		- set to 1 to automatically convert the parent document to a folder. Defaults to 0
 *		&folder			- folder id where comments are stored
 *		&docid			- document id to use where comments are stored ... use for "remote comment displays"
 *		&tagid			- a unique id used to identify or tag user comments on a page where multiple comments are required. 
 *		&freeform		- set this option to 1 to use the [+UserComments.Form+] placholder to relocate the comment form. 
 *
 *		&postcss		- sets the css class used to format the comment block DIV
 *		&titlecss		- sets the css class used to format the comment title DIV
 *		&codecss		- sets the css class used to format code tags
 *		&numbecss		- sets the css class used to format the comment number DIV
 *		&authorcss		- sets the css class used identify author\'s comments
 *		&ownercss		- sets the css class used identify the owner\'s comments
 *		&altrowcss		- sets the css class used identify author\'s comments
 * 
 *		&dateformat		- sets php date format for new comments (see http://php.net/strftime for formatting options)
 *		&sortorder		- sort the comments in either ascending order (when set to 0) or descending order (when set to 1). Defaults to descending (1)
 *		&recentposts	- set the number of recent posts to be displayed. set to 0 to show all post. Defaults to 0
 *
 */
 
// redirect to host document if an attempt was 
// made to display the document containing the comments
if(isset($hostid)) {
	$url = $modx->makeUrl($hostid);
	$modx->sendRedirect($url);
	exit;
}

// set to true to echo out variables before the comment block for troubleshooting
$debug = false;

// get user groups that can post & view comments
$postgrp = isset($canpost) ? explode(",",$canpost):array();
$viewgrp = isset($canview) ? explode(",",$canview):array();
$allowAnyPost = count($postgrp)==0 ? true : false;
$allowAnyView = count($viewgrp)==0 ? true : false;

// get current document id (if set, show-only mode)
$docid = isset($docid) ? intval($docid):$modx->documentIdentifier;

// get folder id where we should store comments 
// else store in current document
$folder = isset($folder) ? intval($folder):$docid;

// get free form option
$freeform = isset($freeform) && $freeform==1 ? 1:0;

// get tagid
$tagid = isset($tagid) ? preg_replace("/[^A-z0-9_\\-]/",\'\',$tagid):\'\';

// set alias name of document used to store comments
$alias = \'usrcmt-\'.$docid.($tagid ? \'-\'.$tagid:\'\');

// get sort order
$sortorder = isset($sortorder) ? $sortorder : 1;

// get comment block style/class
$postcss = isset($postcss) ? \' class="\'.$postcss.\'[+altrowclass+][+authorclass+]"\' : \' style="font-size:11px;line-height: 17px;white-space:normal;width:100%;background-color:#eee;color: #111;padding:5px;margin-bottom:10px;" class="[+altrowclass+][+authorclass+]"\';

// get post title class
$titlecss = isset($titlecss) ? \' class="\'.$titlecss.\'"\' : \' style="width:100%;background-color:#c0c0c0;padding:2px;margin-bottom:5px;"\';

// get post number class
$numbercss = isset($numbercss) ? \' class="\'.$numbercss.\'"\' : \' style="float:right; padding: 0 0 20px 20px;font-size:24px;color:#ccc;font-weight:bold;"\';

// get code style/class
$codecss = isset($codecss) ? \' class="\'.$codecss.\'"\' : \' style="background-color:#eee;border-top:2px solid #e0e0e0;margin:0;"\';

// get author class
$authorcss = isset($authorcss) ? \' \'.$authorcss : \'\';

// get owner\'s class
$ownercss = isset($ownercss) ? \' \'.$ownercss : \'\';

// get alt row style/class
$altrowcss = isset($altrowcss) ? \' \'.$altrowcss : \'\';

// get date format
$dateformat = isset($dateformat) ? $dateformat : \'%e%b%Y %I:%M%p\';

// set recent post value
$recentposts = isset($recentposts) ? $recentposts : 0;

// get badwords
if(isset($badwords)) {
	$badwords = str_replace(\' \',\'\', $badwords);
	$badwords = "/".str_replace(\',\',\'|\', $badwords)."/i";
}

// set splitter
$splitter = \'<!--Comment-Spliter:\'.$docid.\'-->\';

// get postback status
$isPostBack = isset($_POST[\'UserCommentForm\'.$tagid]) ? true:false;

// get display template
if(isset($displaytpl)) $displayTpl = $modx->getChunk($displaytpl);
if(empty($displaytpl)) $displayTpl = \'
[+UID:[+uid+]+]<div[+postclass+]>
   <div[+numberclass+]>
     [+postnumber+]
   </div>
	<div[+titleclass+]>
		<strong>[+subject+]</strong><span>[+user+] [+createdon+]</span>
	</div>
	<div class="content">
		[+comment+]
	</div>

</div>
\';

// get form template
if(isset($formtpl)) $formTpl = $modx->getChunk($formtpl);
if(empty($formTpl)) $formTpl = \'
<form method="post" action="[~[*id*]~]">
	<input name="[+tagname+]" type="hidden" value="on" />
	Subject:<br /><input name="subject" type="text" size="40" value="" /><br />
	Comment:<br /><textarea name="comment" cols="50" rows="8"></textarea><br />
	<input name="send" type="submit" value="Submit" />
</form>
\';


// switch block
switch ($isPostBack) {
	case true:	// process post backs
		if($_POST[\'comment\']!=\'\') {
			
			// get user\'s id and name
			$uid = $modx->getLoginUserID();
			$user = $modx->getLoginUserName();
			if(!$user && $allowAnyPost) $user = \'anonymous\';

			// check if user has rights
			if(!$allowAnyPost && !$modx->isMemberOfWebGroup($postgrp)) {
				return \'You are not allowed to post comments\';
			}

			$createdon = time();

// format comment title, classes and/or styles
			$comment = str_replace(\'[+user+]\',$user,$displayTpl);
			$comment = str_replace(\'[+uid+]\',$uid,$comment);
			$comment = str_replace(\'[+postclass+]\',$postcss,$comment);
			$comment = str_replace(\'[+titleclass+]\',$titlecss,$comment);
			$comment = str_replace(\'[+numberclass+]\',$numbercss,$comment);
			$comment = str_replace(\'[+createdon+]\',strftime($dateformat,$createdon),$comment);			
			// check for author\'s comments
			if($uid && ($uid*-1)==$modx->documentObject[\'createdby\']) {
				$comment = str_replace(\'[+authorclass+]\',$authorcss,$comment);
			}
            
            // deal with code tags and bad words
			foreach($_POST as $n=>$v) {
				if(!empty($badwords)) $v = preg_replace($badwords,\'[Filtered]\',$v); // remove badwords
				$v = $modx->stripTags(htmlspecialchars($v));
				if($n==\'comment\' && strpos($v,\'[code]\')!==false){
					// preserve code
					preg_match_all("|\\[code\\](.*)\\[/code\\]|Uis",$v,$matches);
					for ($i=0;$i<count($matches[0]);$i++) {
						$tag = $matches[0][$i];
						$text = $matches[1][$i];
						$v = str_replace($tag,\'<pre\'.$codecss.\'>\'.$text.\'</pre>\',$v);
					}
				}
				$v = str_replace("\\r",\'\',$v);
				$v = str_replace("\\n",\'<br />\',$v);
				$comment = str_replace(\'[+\'.$n.\'+]\',$v,$comment);
			}

			$comment = str_replace($splitter,\'\',$comment); // remove splitter from comment

			// save comment
			$sql = \'SELECT pagetitle FROM \'.$modx->getFullTableName(\'site_content\').\' WHERE parent=\\\'\'.$folder.\'\\\' AND alias=\\\'\'.$alias.\'\\\' LIMIT 1\';
			if($modx->db->getValue($sql)) {
				// update comments
				$sql = 	\' UPDATE \'.$modx->getFullTableName(\'site_content\').
						\' SET content = CONCAT(\\\'\'.$comment.$splitter.\'\\\',content)\'.
						\' WHERE parent=\\\'\'.$folder.\'\\\' AND alias=\\\'\'.$alias.\'\\\'\';
				$modx->db->query($sql);
			}
			else {
				// create new comment page
				$doc = $modx->getDocument($docid);
				$title = mysql_escape_string($doc[\'pagetitle\']).\' - User comments\';
				$flds = array(
					\'pagetitle\'	=> $title,
					\'alias\'		=> $alias,
					\'parent\'	=> $folder, 
					\'createdon\' => $createdon,
					\'createdby\' => \'0\',
					\'editedon\' 	=> \'0\',
					\'editedby\' 	=> \'0\',
					\'published\' => \'1\',
					\'deleted\' 	=> \'0\',
					\'hidemenu\' 	=> \'1\',
					\'template\' 	=> \'0\',
					\'content\' 	=> $comment.$splitter.\'[[\'.$modx->getSnippetName().\'? &hostid=`\'.$docid.\'`]]\'
				);
				$modx->db->insert($flds,$modx->getFullTableName(\'site_content\'));
				if(!empty($makefolder)) {
					// convert parent into folder
					$modx->db->update(array(\'isfolder\'=>\'1\'),$modx->getFullTableName(\'site_content\'),\'id=\\\'\'.$folder.\'\\\'\');
				}
			}
		}
	
	default:	// display comments
		// check if user has rights to view comments
		if(!$allowAnyView && !$modx->isMemberOfWebGroup($viewgrp)) {
			$comment = \'\';
		}
		else {

			$uid = $modx->getLoginUserID();

			// get comments
			$ds = $modx->db->select(\'content\',$modx->getFullTableName(\'site_content\'),\' parent=\\\'\'.$folder.\'\\\' AND alias=\\\'\'.$alias.\'\\\'\');
			$content = $modx->db->getValue($ds);

			// split content into separate comments
			$parts = explode($splitter,$content);
			array_pop($parts);
			
			// count comments
			$count = count($parts);			
			$modx->setPlaceholder("UserComments.Count",$count);

			// handle recent post
			$offset = 0;
			if($recentposts>0) {
				$parts = array_slice($parts,0,$recentposts);
				$offset = $count-$recentposts;
				$count = $recentposts;
			}
			
			// prepare comments
			if($sortorder==0) $parts = array_reverse($parts);
			for($i=0;$i<$count;$i++) {
				$part = $parts[$i];
				$num = ($sortorder==1) ? $count-$i:$i+1;
				$part = str_replace(\'[+postnumber+]\',$num+$offset,$part);
				if($altrowcss && ($i % 2)==0) $part = str_replace(\'[+altrowclass+]\',$altrowcss,$part);
				// check for owner\'s comments
				if($uid && strpos($part,\'[+UID:\'.$uid.\'+]\')!==false) $part = str_replace(\'[+authorclass+]\',$ownercss,$part);
				$parts[$i] = $part;
			}
			
			$comments = implode("",$parts);
			
		}
		// check if user has rights to post comments
		if(!$allowAnyPost && !$modx->isMemberOfWebGroup($postgrp)) {
			$formTpl = \'\';
		}
		else{
			$formTpl = str_replace(\'[+tagname+]\',\'UserCommentForm\'.$tagid,$formTpl);
		}

		$troubleshooting = ($debug)? "alias: $alias - folder: $folder - docid: $docid - tag: $tagid":\'\';

		// return comments along with form
		return $troubleshooting.$comments.($freeform ? $modx->setPlaceholder(\'UserComments.Form\',$formTpl):$formTpl);
		break;
}
';
$s['PoweredBy'] = '/*
 *	PoweredBy 
 *	A little link to MODx
 *
 */
 
$version = $modx->getVersionData();
return "Powered by MODx<b> ".$version[\'version\']."</b> ".( $version[\'code_name\']!="" ? "<i>(".$version[\'code_name\'].")</i>.":"");';
$s['PageTrail'] = '/*
 * PageTrail - updated to work with MODx
 *
 * Properties:
 *
 *	&sep 	- page trail separator
 *	&style	- inline style
 *	&class	- style sheet name
 */
 
// edited by Kai etomite - modx

$sep = isset($sep) ? $sep :" &raquo; ";
$style = isset($style) ? " style=\\"$style\\" " :"";
$class = isset($class) ? " class=\\"$class\\" " :"";

// end config
$ptarr = array();
$cid = $modx->documentObject[\'id\'];
$ptarr[] = $modx->documentObject[\'pagetitle\'];

while ($parent=$modx->getParent($cid)) {
    $ptarr[] = "<a $class $style href=\'[~".$parent[\'id\']."~]\'>".$parent[\'pagetitle\']."</a>";
    $cid = $parent[\'id\'];
}

$ptarr = array_reverse($ptarr);
return join($ptarr, $sep);';
$s['PageTrailProps'] = '&sep=Separator;string; &style=Style;string; &class=Class;string; ';
$s['Image'] = '/*
 *  Name: Image
 *  Description: Renders an image tag with automatic height, width and alt
 *  Properties: &src_tv=Source Template Variable Name;string; &id=HTML ID Attribute;string; &class=HTML Class Attribute;string;
 *   &width=force width, &height=enforce height
 */

if(isset($src_tv)){

 $base = $_SERVER[\'DOCUMENT_ROOT\'];
 $tv = $modx->getTemplateVar($src_tv);
 $src = $tv[\'value\'];
 $url = parse_url($src);
 $path = $url[\'path\'];
 $file = $base.\'/\'.$path;
 
 $alt = basename($file);
 $alt = ereg_replace(\'_\',\'\',$alt);
 $alt = ereg_replace(\'^(.*)\\.[a-zA-Z]*$\',\'\\\\1\',$alt);
 $alt = ucfirst($alt);

 if(file_exists($file) && !is_dir($file)) {

  list($w, $h) = getimagesize($file);
  $w = isset($width) ? $width : $w;
  $h = isset($height) ? $height : $h;

  $id_html = isset($id) ? "id=\'$id\'" : "";
  $class_html = isset($class) ? "class=\'$class\'" : "";
 
$html = <<<EOD
<img {$id_html} {$class_html} src="{$src}" alt="{$alt}" width="{$w}" height="{$h}" />
EOD;

 }

 return $html;

}';
$s['WebLogin'] = '# WebLogin 1.0
# Created By Raymond Irving 2004
#::::::::::::::::::::::::::::::::::::::::
# Usage: 	
#	Allows a web user to login to the website
#
# Params:	
#	&loginhomeid 	- (Optional)
#		redirects the user to first authorized page in the list.
#		If no id was specified then the login home page id or 
#		the current document id will be used
#
#	&logouthomeid 	- (Optional)
#		document id to load when user logs out	
#
#	&pwdreqid 	- (Optional)
#		document id to load after the user has submited
#		a request for a new password
#
#	&pwdactid 	- (Optional)
#		document id to load when the after the user has activated
#		their new password
#
#	&logintext		- (Optional) 
#		Text to be displayed inside login button (for built-in form)
#
#	&logouttext 	- (Optional)
#		Text to be displayed inside logout link (for built-in form)
#	
#	&tpl			- (Optional)
#		Chunk name or document id to as a template
#				  
#	Note: Templats design:
#			section 1: login template
#			section 2: logout template 
#			section 3: password reminder template 
#
#			See weblogin.tpl for more information
#
# Examples:
#
#	[[WebLogin? &loginhomeid=`8` &logouthomeid=`1`]] 
#
#	[[WebLogin? &loginhomeid=`8,18,7,5` &tpl=`Login`]] 

# Set Snippet Paths 
$snipPath = $modx->config[\'base_path\'] . "assets/snippets/";

# check if inside manager
if ($m = $modx->insideManager()) {
	return \'\'; # don\'t go any further when inside manager
}

# deprecated params - only for backward compatibility
if(isset($loginid)) $loginhomeid=$loginid;
if(isset($logoutid)) $logouthomeid = $logoutid;
if(isset($template)) $tpl = $template;

# Snippet customize settings
$liHomeId	= isset($loginhomeid)? explode(",",$loginhomeid):array($modx->config[\'login_home\'],$modx->documentIdentifier);
$loHomeId	= isset($logouthomeid)? $logouthomeid:$modx->documentIdentifier;
$pwdReqId	= isset($pwdreqid)? $pwdreqid:0;
$pwdActId	= isset($pwdactid)? $pwdactid:0;
$loginText	= isset($logintext)? $logintext:\'Login\';
$logoutText	= isset($logouttext)? $logouttext:\'Logout\';
$tpl		= isset($tpl)? $tpl:"";

# System settings
$webLoginMode = isset($_REQUEST[\'webloginmode\'])? $_REQUEST[\'webloginmode\']: \'\';
$isLogOut		= $webLoginMode==\'lo\' ? 1:0;
$isPWDActivate	= $webLoginMode==\'actp\' ? 1:0;
$isPostBack		= count($_POST) && isset($_POST[\'cmdweblogin\']);
$txtPwdRem 		= isset($_REQUEST[\'txtpwdrem\'])? $_REQUEST[\'txtpwdrem\']: 0;
$isPWDReminder	= $isPostBack && $txtPwdRem==\'1\' ? 1:0;

$site_id = isset($site_id)? $site_id: \'\';
$cookieKey = substr(md5($site_id."Web-User"),0,15);

# Start processing
include_once $snipPath."weblogin/weblogin.common.inc.php";
include_once ($modx->config[\'base_path\'] . "manager/includes/crypt.class.inc.php");

if ($isPWDActivate || $isPWDReminder || $isLogOut || $isPostBack) {
	# include the logger class
	include_once $modx->config[\'base_path\'] . "manager/includes/log.class.inc.php";
	include_once $snipPath."weblogin/weblogin.processor.inc.php";
}

include_once $snipPath."weblogin/weblogin.inc.php";

# Return
return $output;
';
$s['WebLoginProps'] = '&loginhomeid=Login Home Id;string; &logouthomeid=Logout Home Id;string; &logintext=Login Button Text;string; &logouttext=Logout Button Text;string; &tpl=Template;string; ';
$s['WebChangePwd'] = '# WebChangePwd 1.0
# Created By Raymond Irving April, 2005
#::::::::::::::::::::::::::::::::::::::::
# Usage: 	
#	Allows a web user to change his/her password from the website
#
# Params:	
#
#	&tpl			- (Optional)
#		Chunk name or document id to use as a template
#				  
#	Note: Templats design:
#			section 1: change pwd template
#			section 2: notification template 
#
# Examples:
#
#	[[WebChangePwd? &tpl=`ChangePwd`]] 

# Set Snippet Paths 
$snipPath  = (($modx->insideManager())? "../":"");
$snipPath .= "assets/snippets/";

# check if inside manager
if ($m = $modx->insideManager()) {
	return \'\'; # don\'t go any further when inside manager
}


# Snippet customize settings
$tpl		= isset($tpl)? $tpl:"";

# System settings
$isPostBack		= count($_POST) && isset($_POST[\'cmdwebchngpwd\']);

# Start processing
include_once $snipPath."weblogin/weblogin.common.inc.php";
include_once $snipPath."weblogin/webchangepwd.inc.php";

# Return
return $output;



';
$s['WebChangePwdProps'] = '&tpl=Template;string; ';
$s['WebSignup'] = '# WebSignup 1.1
# Created By Raymond Irving April, 2005
#::::::::::::::::::::::::::::::::::::::::
# Usage: 	
#	Allows a web user to signup for a new web account from the website
#	This snippet provides a basic set of form fields for the signup form
#	You can customize this snippet to create your own signup form
#
# Params:	
#
#	&tpl		- (Optional) Chunk name or document id to use as a template
#	&groups		- Web users groups to be assigned to users
#				  
#	Note: Templats design:
#			section 1: signup template
#			section 2: notification template 
#
# Examples:
#
#	[[WebSignup? &tpl=`SignupForm` &groups=`NewsReaders,WebUsers`]] 

# Set Snippet Paths 
$snipPath = $modx->config[\'base_path\'] . "assets/snippets/";

# check if inside manager
if ($m = $modx->insideManager()) {
	return \'\'; # don\'t go any further when inside manager
}


# Snippet customize settings
$tpl = isset($tpl)? $tpl:"";

# setup web groups
$groups = isset($groups) ? explode(\',\',$groups):array();
for($i=0;$i<count($groups);$i++) $groups[$i] = trim($groups[$i]);

# System settings
$isPostBack		= count($_POST) && isset($_POST[\'cmdwebsignup\']);

$output = \'\';

# Start processing
include_once $snipPath."weblogin/weblogin.common.inc.php";
include_once $snipPath."weblogin/websignup.inc.php";

# Return
return $output;
';
$s['WebSignupProps'] = '&tpl=Template;string; ';
$s['NiceDate'] = '/**
 * NiceDate 
 * Writes current date in the format dd-MON-yyyy.
 *
 */
 

if(!isset($timestamp)) {
    $timestamp=time();
}

return strftime("%d-%b-%Y", $timestamp);';
$s['00SimpleList'] = '/**
 * Snippet Name: SimpleList
 * Short Desc: Returns a simple list of objects by a parent ID, 1 level deep -- each formatted by &tpl template chunk
 * Created By: Kai Turner
 * Version: 1.0
 *
 *
 *
 *  Snippet parameters [default] :
 *      &startID       - the folder containing the posts [the document called from]
 *                                       
 *      &tpl           -  name of the chunk to use to format each document in the list  
 *
 *      &dateformat    - the format for the summary date (see http://php.net/strftime ) [%d-%b-%y %H:%M]
 *      &datetype      - the date type to display (values can be createdon, pub_date, editedon) [&sortby | "createdon"]
 *      &pubOnly       - only show Published posts [true]
 *      &emptytext     - text to use when no news items are found
 *      &sortby        - field to sort by -- default: pagetitle(recomended values include createdon, pub_date, editedon; reverts to createdon if value is invalid) ["createdon"]
 *      &sortdir       - direction to sort by, default \'asc\' ["desc"]
 *      &debug	       - enables debug output [0]
 * 
 *
 */
 
$furls = $modx->config[\'friendly_urls\'];
	// are furls enabled
	
$resourceparent = isset($startID) ? $startID : $modx->documentIdentifier;
    // the folder that contains post entries 
	
// Templates for sections .........................................
         
$tpl = isset($tpl) ? $modx->getChunk($tpl):\'
    <div class="my_post">
        <h3><a href="[~[+id+]~]">[+title+]</a></h3>
        <div>[+summary+]</div>
        <p><a href="[~[+id+]~]">read more</a></p> 
\';

// .................................................................

$showPublishedOnly = isset($pubOnly) ? $pubOnly : true;
    // allows you to show unpublished docs if needed for some reason...

$showInMenuOnly = isset($menuOnly) ? $menuOnly : true;
    // allows you to show docs marked not to show in the menus 
    // if needed for some reason...
    // TO BE IMPLEMENTED
    
$emptytext = isset($emptytext)? $emptytext : \'<p>No entries found.</p>\';
    // text to be displayed when there are no results


$date = isset($dateformat)? $dateformat :"%d-%b-%y %H:%M";
    // format for the summary post date format
	

$sortdir = isset($sortdir) ? strtoupper($sortdir) : \'ASC\';
    // get sort dir

if (isset($sortby) && ($sortby == "createdon" || $sortby == "editedon" || $sortby == "pub_date" || $sortby == "unpub_date" || $sortby =="deletedon")) {
	$dt = $sortby;
} else if (isset($datetype)) {
	$dt = $datetype;
} else {
	$dt = "pagetitle";
}

$datetype = $dt;
	// date type to display (values can be createdon, pub_date, editedon)	
	
$start= isset($_GET[\'start\'])? $_GET[\'start\']: 0;
	// get post # to start at

$debug = isset($debug)? $debug : 0;
    // for testing only

$output = \'\';
    // initialize the output variable 
	
$debugtext = \'\';
    // initialize the debugtext variable 
		
// Check for valid field to sort by
	
$columns = $modx->db->query("show columns from ".$modx->getFullTableName(\'site_content\'));
while($dbfield = $modx->db->getRow($columns))
   $dbfields[] = $dbfield[\'Field\'];
if(isset($sortby) && in_array($sortby,$dbfields)) {
   $sortby = $sortby;
} else {
   $sortby = "createdon";
}

if ($sortby != 	"pub_date" && $sortby != "unpub_date" && $sortby != "editedon" && $sortby != "deletedon") {

// API Method (allows for everything except pub_date, unpub_date, editedon, deletedon)
	$debugtext = "Using the API Method (allows for everything except pub_date, unpub_date, editedon, deletedon) <br />";
	$callby = ($showPublishedOnly)? \'getActiveChildren\' : \'getAllChildren\';
	$resource = $modx->$callby($resourceparent, $sortby, $sortdir, $fields=\'*\');
	
} else {

// SQL Method (alows for all possibilites but is slower)
	$debugtext = "Using the SQL Method (alows for all possibilites but is slower) <br />";
	$tblContent= $modx->db->config[\'table_prefix\'] . \'site_content\';
	$activeClause= $showPublishedOnly? \'AND published = 1\': \'\'; 
	$query= "SELECT id , type , contentType , pagetitle , longtitle , description , alias , published , IF(pub_date > 0, pub_date, createdon) as pub_date, IF(unpub_date > 0, unpub_date, createdon) as unpub_date , parent , isfolder , introtext , content , richtext , template , menuindex , searchable , cacheable , createdby , createdon, editedby , IF(editedon > 0, editedon, createdon) as editedon, deleted , IF(deletedon > 0, deletedon, createdon) as deletedon, deletedby , menutitle , donthit , haskeywords , hasmetatags , privateweb , privatemgr , content_dispo , hidemenu  FROM $tblContent WHERE parent = $resourceparent $activeClause ORDER BY $sortby $sortdir";
	
	if (!$rs= $modx->db->query($query)) {
		return \'\';
	}
	while ($row= $modx->db->getRow($rs)) {
		$resource[]= $row;
	}
}

$recordcount = count($resource);
$output .= ($recordcount < 1)? $emptytext."\\n" : \'\';  

$nrtotal = $recordcount;
    // total number of posts to retrieve 
	
$limit = min( $recordcount, $nrtotal ); 	


	$stop = $recordcount;


if ($debug == 1) {
	// rudimentary debugging output
	$output .= "Total supposed to be returned: $stop<br />Count of total in db (count): $recordcount<br />Sort by (sortby): $sortby <br />Sort direction (sortdir): $sortdir <br/ >$debugtext";
}

	
// MAIN LOOP FOR Iterating links(in $resource variable)
	
// main loop .....................................

for ($x = $start; $x < $stop; $x++) { 
			
// ---- Main Link formatting loop -----------------

				// determine and show summary
				$summary = $resource[$x][\'introtext\']; 
		
    			// Output debug info
				if ($debug == 1) $output .= \'<p><strong>Document Data for "\'.$resource[$x][\'pagetitle\'].\'"</strong></p><textarea name="Document Data" rows="5" readonly>\';

				// Set placeholders for document object
				foreach ($resource[$x] as $docVar => $docVarValue) {
					$modx->setPlaceholder($docVar, $docVarValue); 
			
						if ($debug == 1 && $docVar != "content"){			
							$output .= $docVar." = ".htmlspecialchars($docVarValue)." \\n";
						}
				}
	
			  
				if ($debug == 1) $output .= \'</textarea>\';
	
				// Set TV placeholders from group link template
				preg_match_all(\'~\\[\\+tv(.*?)\\+\\]~\', $tpl_group_link, $matches);
				$cnt = count($matches[1]);
				for($i=0; $i<$cnt; $i++) {
					$value = $modx->getTemplateVarOutput($idname=array($matches[1][$i]), $docid=$resource[$x][\'id\'], $published=$resource[$x][\'published\']);
					$v = $value[$matches[1][$i]];
					$modx->setPlaceholder("tv".$matches[1][$i], $v); 
				}

				// Set placeholders that can be used in the Chunk
	
				// Set placeholders for backwards compadibility and custom fields
				$modx->setPlaceholder(\'title\', $resource[$x][\'pagetitle\']);
				$modx->setPlaceholder(\'summary\', $summary); 
				$modx->setPlaceholder(\'link\', $link); 
				$modx->setPlaceholder(\'author\', $username); 
				$modx->setPlaceholder(\'date\', strftime($date, $resource[$x][$datetype])); 
		 
    			// Expand the chunk code, and replace Placeholders
				$output .= $modx->mergePlaceholderContent($modx->mergeChunkContent($tpl)); 
			
} // end for loop


return $output;';
$p = &$this->pluginCache;
$p['FCKEditor'] = '/**
 * FCKEditor - RichText Editor Plugin
 * Written By Raymond Irving - June 22, 2005
 * Modified By Jeff Whitfield - October 13, 2005
 *
 * Both frontend and backend interface provided
 *
 * Configuration:
 * &webset=Web Toolbars;string;[\'Bold\',\'Italic\',\'Underline\',\'-\',\'Link\',\'Unlink\']
 *
 * Version 2.1.2
 * FCKeditor v2.1.1
 *
 */

// When used from the web front-end 
// FCK will display the selected toolbar or custom buttons
$webToolbarSet = isset($webset) ? $webset:"basic";
$webCustomToolbar = isset($webcustom) && ($webset == "custom") ? $webcustom:"";

// getFCKEditorSettings function
if (!function_exists(\'getFCKEditorSettings\')) {
	function getFCKEditorSettings() {
		global $_lang;
		global $use_editor;
		global $displayStyle;
		global $fck_editor_style;
		global $fck_editor_toolbar;
		global $fck_editor_toolbar_customset;
		global $fck_editor_autolang;

		// language settings
		$_lang[\'FCKEditor_settings\'] = "FCKEditor Settings";
		$_lang[\'fck_editor_style_title\'] = "XML Style:";
		$_lang["fck_editor_style_message"] = "Enter the path and file name to the FCKEditor xml style selector file.The best way to enter the path is to enter the path from the root of your server, for example: /assets/plugins/fckeditor/fckstyles.xml. If you do not wish to load a stylesheet into the editor, leave this field blank.";
		$_lang[\'fck_editor_toolbar_title\'] = "Toolbar set:";
		$_lang[\'fck_editor_toolbar_message\'] = "Here you can select which toolbar set to use with FCKEditor.  Choose Basic for limited options, Standard for more options,  Advance for all the available options or Custom to customize your toolbar.";
		$_lang[\'fck_editor_custom_toolbar\'] = "Custom toolbar:";
		$_lang[\'fck_editor_custom_message\'] = "Use this option to customize the toolbar set for the FCKEditor. Here you should enter the javascript syntax supported by the editor. For Example, use [\'Bold\',\'Italic\',\'-\',\'Link\'] to display the Bold, Italic and Link icons . Each icon must be separated by a comma (,) and grouped using the [] bracket.";
		$_lang[\'fck_editor_autolang_title\'] = "Auto Language:";
		$_lang[\'fck_editor_autolang_message\'] = "Select the \'Yes\' option to have the FCKEditor automatically detect the language used by the browser and load the appropriate language files. FCKEditor language files must be added to the \'assets/plugins/fckeditor/editor/lang\' folder";

		$display = $use_editor==1 ? $displayStyle : \'none\';
		$cusDisplay = $use_editor==1 && $fck_editor_toolbar==\'custom\' ? $displayStyle : \'none\';
		
		$basTool = !isset($fck_editor_toolbar) || $fck_editor_toolbar==\'default\' ? "selected=\'selected\'" : "";
		$stnTool = $fck_editor_toolbar==\'standard\' ? "selected=\'selected\'" : "";
		$advTool = $fck_editor_toolbar==\'advanced\' ? "selected=\'selected\'" : "";
		$cusTool = $fck_editor_toolbar==\'custom\' ? "selected=\'selected\'" : "";
		$tbCustomset = isset($fck_editor_toolbar_customset) ? htmlspecialchars($fck_editor_toolbar_customset) : "[\'Bold\',\'Italic\',\'Underline\',\'-\',\'Link\',\'Unlink\']";
		$xmlStyle = isset($fck_editor_style) ? htmlspecialchars($fck_editor_style) : "";
		$autoLang = isset($fck_editor_autolang) ? $fck_editor_autolang : 0;
		$autoNo = ($fck_editor_autolang==\'0\' || !isset($fck_editor_autolang)) ? \'checked="checked"\' : \'\';
		$autoYes = $fck_editor_autolang==\'1\' ? \'checked="checked"\' : \'\';

		return <<<FCKEditor_HTML_Settings
		<table id=\'editorRow_FCKEditor\' style="width:inherit;" border="0" cellspacing="0" cellpadding="3"> 
		  <tr class=\'row1\' style="display: $display;"> 
            <td colspan="2" class="warning" style="color:#707070; background-color:#eeeeee"><h4>{$_lang["FCKEditor_settings"]}<h4></td> 
          </tr> 
          <tr class=\'row1\' style="display: $display"> 
            <td nowrap class="warning"><b>{$_lang["fck_editor_autolang_title"]}</b></td> 
            <td> <input onChange="documentDirty=true;" type="radio" name="fck_editor_autolang" value="1" $autoYes /> 
              {$_lang[\'yes\']}<br /> 
              <input onChange="documentDirty=true;" type="radio" name="fck_editor_autolang" value="0" $autoNo /> 
              {$_lang[\'no\']} </td> 
          </tr> 
          <tr class=\'row1\' style="display: $display"> 
            <td width="200">&nbsp;</td> 
            <td class=\'comment\'>{$_lang["fck_editor_autolang_message"]}</td> 
          </tr> 
		  <tr class=\'row1\' style="display: $display"> 
            <td colspan="2"><div class=\'split\'></div></td> 
          </tr> 
          
          <tr class=\'row1\' style="display: $display"> 
            <td nowrap class="warning"><b>{$_lang["fck_editor_style_title"]}</b></td> 
            <td><input onChange="documentDirty=true;" type=\'text\' maxlength=\'255\' style="width: 300px;" name="fck_editor_style" value="$xmlStyle" /> 
			</td> 
          </tr> 
          <tr class=\'row1\' style="display: $display"> 
            <td width="200">&nbsp;</td> 
            <td class=\'comment\'>{$_lang["fck_editor_style_message"]}</td> 
          </tr> 
		  <tr class=\'row1\' style="display: $display"> 
            <td colspan="2"><div class=\'split\'></div></td> 
          </tr> 
          <tr class=\'row1\' style="display: $display"> 
            <td nowrap class="warning"><b>{$_lang["fck_editor_toolbar_title"]}</b></td> 
            <td>
            <select name="fck_editor_toolbar" onChange="documentDirty=true;if(this.selectedIndex==3) showHide(/fck_customset/,1); else showHide(/fck_customset/,0);">
					<option value="basic" $basTool>{$_lang["basic"]}</option>
					<option value="standard" $stnTool>{$_lang["standard"]}</option>
					<option value="advanced" $advTool>{$_lang["advanced"]}</option>
					<option value="custom" $cusTool>{$_lang["custom"]}</option>
				</select>
			</td> 
          </tr> 
          <tr class=\'row1\' style="display: $display"> 
            <td width="200">&nbsp;</td> 
            <td class=\'comment\'>{$_lang["fck_editor_toolbar_message"]}</td> 
          </tr> 
		  <tr class=\'row1\' style="display: $display"> 
            <td colspan="2"><div class=\'split\'></div></td> 
          </tr> 
          <tr id=\'fck_customset1\' class=\'row3\' style="display: $cusDisplay"> 
            <td nowrap class="warning"><b>{$_lang["fck_editor_custom_toolbar"]}</b></td> 
            <td>
            <input name="fck_editor_toolbar_customset" type="text" style="width:300px;" maxlength=\'65000\' onChange="documentDirty=true;" value="$tbCustomset" />
			</td> 
          </tr> 
          <tr id=\'fck_customset2\' class=\'row3\' style="display: $cusDisplay"> 
            <td width="200">&nbsp;</td> 
            <td class=\'comment\'>{$_lang["fck_editor_custom_message"]}</td> 
          </tr> 
		  <tr id=\'fck_customset3\' class=\'row3\' style="display: $cusDisplay"> 
            <td colspan="2"><div class=\'split\'></div></td> 
          </tr> 
		</table>
FCKEditor_HTML_Settings;
	}
}


// getFCKEditorScript function
if (!function_exists(\'getFCKEditorScript\')) {
	function getFCKEditorScript($elmList,$tbWebSet=\'\',$tbCustomSet=\'\',$width=\'100%\',$height=\'400\') {
		global $base_url;
		global $site_url;
		global $use_browser;
		global $editor_css_path;
		global $fck_editor_toolbar;
		global $fck_editor_toolbar_customset;
		global $fck_editor_autolang;
		
		$toolbar = $tbCustomSet ? "custom" : ($tbWebSet ? $tbWebSet : $fck_editor_toolbar);
		$tbCustomSet = "[ ".($tbCustomSet ? $tbCustomSet:$fck_editor_toolbar_customset)." ]"; // remember [[snippets]] detection :)
		$autoLang = $fck_editor_autolang ? \'true\': \'false\';
		$editor_css_path = !empty($editor_css_path) ? $editor_css_path : $base_url."assets/plugins/fckeditor/editor/css/fck_editorarea.css";
		
		$width = str_replace("px","",$width);
		$height = str_replace("px","",$height);
		
		// build fck instances
		$fckInstances= \'\';
		foreach($elmList as $fckInstance) {
			$fckInstanceObj = "oFCK" . $fckInstance;
			$fckInstances .= "<script language=\'javascript\' type=\'text/javascript\'>".
					"var $fckInstanceObj = new FCKeditor(\'$fckInstance\');".
					"$fckInstanceObj.Width = \'".$width."\';".
					"$fckInstanceObj.Height = \'".$height."\';".
					"$fckInstanceObj.BaseHref = \'".$site_url."\';".
					"$fckInstanceObj.BasePath = \'".$base_url."assets/plugins/fckeditor/\';".
					"$fckInstanceObj.Config[\'ImageBrowser\'] = ".($use_browser==1 ? "true":"false").";".
					"$fckInstanceObj.Config[\'ImageBrowserURL\'] = FCKImageBrowserURL;".
					"$fckInstanceObj.Config[\'LinkBrowser\'] = ".($use_browser==1 ? "true":"false").";".
					"$fckInstanceObj.Config[\'LinkBrowserURL\'] = FCKLinkBrowserURL;".
					"$fckInstanceObj.Config[\'FlashBrowser\'] = ".($use_browser==1 ? "true":"false").";".
					"$fckInstanceObj.Config[\'FlashBrowserURL\'] = FCKFlashBrowserURL;".
					"$fckInstanceObj.Config[\'SpellChecker\'] = \'SpellerPages\';".
					"$fckInstanceObj.Config[\'CustomConfigurationsPath\'] = \'".$base_url."assets/plugins/fckeditor/custom_config.js\';".
					"$fckInstanceObj.ToolbarSet = \'".$toolbar."\';".
					"$fckInstanceObj.Config[\'EditorAreaCSS\'] = FCKEditorAreaCSS;".
					"$fckInstanceObj.ReplaceTextarea();".
					"</script>\\n";
		}
		return <<<FCKEditor_SCRIPT
		<script language="javascript" type="text/javascript" src="{$base_url}assets/plugins/fckeditor/fckeditor.js"></script>
		<script language="javascript" type="text/javascript">
			var FCKImageBrowserURL = \'{$base_url}manager/media/browser/mcpuk/browser.html?Type=images&Connector={$base_url}manager/media/browser/mcpuk/connectors/php/connector.php&ServerPath={$base_url}\';
			var FCKLinkBrowserURL = \'{$base_url}manager/media/browser/mcpuk/browser.html?Connector={$base_url}manager/media/browser/mcpuk/connectors/php/connector.php&ServerPath={$base_url}\';
			var FCKFlashBrowserURL = \'{$base_url}manager/media/browser/mcpuk/browser.html?Type=flash&Connector={$base_url}manager/media/browser/mcpuk/connectors/php/connector.php&ServerPath={$base_url}\';
			var FCKCustomToolbarSet = {$tbCustomSet};
			var FCKAutoLanguage = {$autoLang};
			var FCKEditorAreaCSS = \'{$editor_css_path}\';
			function FCKeditor_OnComplete(edtInstance) {
				if (edtInstance){ // to-do: add better listener
					edtInstance.AttachToOnSelectionChange(tvOnFCKChangeCallback);
				}
			};
			
			function tvOnFCKChangeCallback(edtInstance) {
				if (edtInstance) {
					elm = edtInstance.LinkedField;
					if(elm && elm.onchange) elm.onchange();
				}
			}
		</script>
		$fckInstances
FCKEditor_SCRIPT;
	}
}


// Handle event

$e = &$modx->Event; 
switch ($e->name) { 
	case "OnRichTextEditorRegister":
		$e->output("FCKEditor");
		break;

	case "OnRichTextEditorInit":
		if($editor=="FCKEditor") {
			if(isset($forfrontend)||$modx->isFrontend()) $html = getFCKEditorScript($elements,$webToolbarSet,$webCustomToolbar,$width,$height);
			else $html = getFCKEditorScript($elements);
			$e->output($html);
		}		
		break;

	case "OnInterfaceSettingsRender":
		$html = getFCKEditorSettings();
		$e->output($html);
		break;

   default :    
      return; // stop here - this is very important. 
      break; 
}';
$p['FCKEditorProps'] = '&webset=Web Toolbar Set;list;basic,standard,advanced,custom;custom &webcustom=Custom Web Toolbar;textarea;[\'Bold\',\'Italic\',\'Underline\',\'-\',\'Link\',\'Unlink\'] ';
$p['QuickEdit'] = '/*
 *  Written by: Adam Crownoble
 *  Contact: adam@obledesign.com
 *  Created: 8/14/2005
 *  Updated: 11/27/2005 - Added support for show Manager & Help links option
 *  Updated: 12/05/2005 - Added support for editable fields as a module configuration option
 *  For: MODx cms (modxcms.com)
 *  Name: QuickEdit
 *  Description: Renders QuickEdit links in the frontend
 *  Shared parameters from: QuickEdit module
 *  Events: OnParseDocument, OnWebPagePrerender
 */

/*
                             License

QuickEdit - A MODx module which allows the editing of content via
            the frontent of the site
Copyright (C) 2005  Adam Crownoble

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA

*/

// Don\'t do anything if we aren\'t logged in
if(!isset($_SESSION[\'mrgValidated\'])) {

 // Set configuration variables if not already set
 if(!isset($mod_path)) { $mod_path = \'assets/modules/quick_edit\'; }
 if(!isset($show_manager_link)) { $show_manager_link = 1; }
 if(!isset($show_help_link)) { $show_help_link = 1; }
 if(!isset($editable)) { $editable = \'pagetitle,longtitle,description,content,alias,introtext,menutitle,published,hidemenu,menuindex,searchable,cacheable\'; }

 // If we can\'t find the module files...
 if(!file_exists($mod_path)) {

  // Only log the error if we haven\'t already logged it...
  if(!isset($GLOBALS[\'quick_edit_not_found_sent\'])) {

   // Set a global variable so that we can only log this once
   $GLOBALS[\'quick_edit_not_found_sent\'] = true;

   // Log an error
   $error_message = \'<strong>QuickEdit module not found!</strong></p><p>Edit the QuickEdit module, click the Configuration tab and change the Module Path to point to the module.</p>\';
   $modx->logEvent(0, 3, $error_message, \'QuickEditor\');

  }

 } else {

  // Set globals from QE Module\'s shared paramaters so we can get them from the frontend
  $GLOBALS[\'qe_show_manager_link\'] = $show_manager_link;
  $GLOBALS[\'qe_show_help_link\'] = $show_help_link;
  $GLOBALS[\'qe_editable\'] = $editable;

  // Set the mod_path as a global variable
  $GLOBALS[\'quick_edit_path\'] = $mod_path;
  include_once($mod_path.\'/output.class.inc.php\');

  $outputObject = new Output;

  switch($modx->Event->name) {

   case \'OnParseDocument\' :

    $outputObject->output = $modx->documentOutput;

    // Merge QuickEdit comment into the output
    $outputObject->mergeTags();

    break;

   case \'OnWebPagePrerender\' :

    $outputObject->output = &$modx->documentOutput;

    include_once($mod_path.\'/module.class.inc.php\');
    $module = new Module;
    $module->getIdFromDependentPluginName($modx->Event->activePlugin);

    // Replace QuickEdit comments with QuickEdit links
    $outputObject->mergeLinks($module->id);

    break;

  }

  // Set the event output
  $modx->documentOutput = $outputObject->output;

  // Logout ?
  $qe_logout= (isset($_GET[\'QuickEdit_logout\'])? $_GET[\'QuickEdit_logout\']: \'\');
  if($qe_logout == \'logout\') {
   $_SESSION = array();
  }

 }

}
';
$p['QuickEditProps'] = ' &mod_path=Module Path (from site root);string;assets/modules/quick_edit &show_manager_link=Show Manager Link;int;1 &show_help_link=Show Help Link;int;1 &editable=Editable Fields;string;pagetitle,longtitle,description,content,alias,introtext,menutitle,published,hidemenu,menuindex,searchable,cacheable';
$e = &$this->pluginEvent;
$e['OnInterfaceSettingsRender'] = array('FCKEditor');
$e['OnParseDocument'] = array('QuickEdit');
$e['OnRichTextEditorInit'] = array('FCKEditor');
$e['OnRichTextEditorRegister'] = array('FCKEditor');
$e['OnWebPagePrerender'] = array('QuickEdit');
?>