<?php die('Unauthorized access.'); ?>a:35:{s:2:"id";s:1:"1";s:4:"type";s:8:"document";s:11:"contentType";s:9:"text/html";s:9:"pagetitle";s:24:"MODx CMS Install Success";s:9:"longtitle";s:45:"Welcome to the MODx Content Management System";s:11:"description";s:0:"";s:5:"alias";s:12:"minimal-base";s:9:"published";s:1:"1";s:8:"pub_date";s:1:"0";s:10:"unpub_date";s:1:"0";s:6:"parent";s:1:"0";s:8:"isfolder";s:1:"0";s:9:"introtext";s:0:"";s:7:"content";s:1644:"<h3>Install Successful!</h3><p>You have successfully installed and configured MODx. We hope you find this site an adequate starting configuration for many small business, organization or personal websites; just change out the template and add your own content and snippets, and you'll be good to go! </p><h3>Getting Help</h3><p>The <a href="http://modxcms.com/modx-team.html" target="_blank">team behind MODx</a> strives to contantly add to and refine the documentation to help you get up to speed with MODx:</p><ul>    <li>For basic instructions on integrating custom templates into MODx, please see the <a target="_blank" href="http://modxcms.com/designer-guide.html">Designer's Guide</a>. </li>    <li>For an introduction to working in MODx from the content editors perspectve, see the <a target="_blank" href="http://modxcms.com/editor-guide.html">Content Editor's Guide</a>. </li>    <li>For a detailed overview of the backend &quot;manager&quot; and setting up Users and Groups, please peruse the <a target="_blank" href="http://modxcms.com/developers-guide.html">Administration Guide</a>.</li>    <li>For developers, architecture and API documentation can be found in the <a target="_blank" href="http://modxcms.com/administration-guide.html">Developer's Guide</a>.</li>    <li>And if someone has installed this site for you, but you're curious as to the steps they went through, please see the <a target="_blank" href="http://modxcms.com/getting-started.html">Getting Started Guide</a>.</li></ul><p>And don't forget, you can always learn and ask questions at the <a href="http://www.modxcms.com/forums" target="_blank">MODx forums</a>. ";s:8:"richtext";s:1:"1";s:8:"template";s:1:"3";s:9:"menuindex";s:1:"0";s:10:"searchable";s:1:"1";s:9:"cacheable";s:1:"1";s:9:"createdby";s:1:"1";s:9:"createdon";s:10:"1130304721";s:8:"editedby";s:1:"1";s:8:"editedon";s:10:"1130304927";s:7:"deleted";s:1:"0";s:9:"deletedon";s:1:"0";s:9:"deletedby";s:1:"0";s:9:"menutitle";s:12:"Base Install";s:7:"donthit";s:1:"0";s:11:"haskeywords";s:1:"0";s:11:"hasmetatags";s:1:"0";s:10:"privateweb";s:1:"0";s:10:"privatemgr";s:1:"0";s:13:"content_dispo";s:1:"0";s:8:"hidemenu";s:1:"0";s:17:"__MODxDocGroups__";s:0:"";}<!--__MODxCacheSpliter__-->
		<html><head><title>MODx Content Manager  &raquo; </title>
		<style>TD, BODY { font-size: 11px; font-family:verdana; }</style>
		<script type='text/javascript'>
			function copyToClip()
			{
				holdtext.innerText = sqlHolder.innerText;
				Copied = holdtext.createTextRange();
				Copied.execCommand('Copy');
			}
		</script>
		</head><body>
		<h3 style='color:red'>&laquo; MODx Parse Error &raquo;</h3>
			<table border='0' cellpadding='1' cellspacing='0'>
			<tr><td colspan='3'>MODx encountered the following error while attempting to parse the requested resource:</td></tr>
			<tr><td colspan='3'><b style='color:red;'>&laquo; Execution of a query to the database failed - You have an error in your SQL syntax near '?_REQUEST[option]=com_content )
					AND (sc.privateweb=0)
					LIMIT 1 ' at line 4 &raquo;</b></td></tr><tr><td colspan='3'><b style='color:#999;font-size: 9px;'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SQL:&nbsp;<span id='sqlHolder'>SELECT sc.parent
					FROM `blackmasks_com_-_modx`.modx_site_content sc
					LEFT JOIN `blackmasks_com_-_modx`.modx_document_groups dg on dg.document = sc.id
					WHERE (sc.id=1index2.php?_REQUEST[option]=com_content )
					AND (sc.privateweb=0)
					LIMIT 1 </span></b>
			<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='javascript:copyToClip();' style='color:#821517;font-size: 9px; text-decoration: none'>[Copy SQL to ClipBoard]</a><textarea id='holdtext' style='display:none;'></textarea></td></tr><tr><td>&nbsp;</td></tr><tr><td colspan='3'><b>Parser timing</b></td></tr><tr><td>&nbsp;&nbsp;MySQL: </td><td><i>[^qt^] s</i></td><td>(<i>[^q^] Requests</i>)</td></tr><tr><td>&nbsp;&nbsp;PHP: </td><td><i>[^p^] s</i></td><td>&nbsp;</td></tr><tr><td>&nbsp;&nbsp;Total: </td><td><i>[^t^] s</i></td><td>&nbsp;</td></tr></table></body></html>