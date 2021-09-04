<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2013 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 */

if (!defined('e107_INIT')) { exit; }
if(!defined("USER_WIDTH")){ define("USER_WIDTH","width:95%;margin-left:auto;margin-right:auto"); }

$sc_style['LASTEDIT']['pre'] = LAN_FORUM_2016.' ';

$sc_style['LASTEDITBY']['pre'] = ' '.LAN_FORUM_2017.' ';
$sc_style['LASTEDITBY']['post'] = '';

$sc_style['LEVEL']['pre'] = "";
$sc_style['LEVEL']['post'] = "";

$sc_style['ATTACHMENTS']['pre'] = "<div>";
$sc_style['ATTACHMENTS']['post'] = "</div>";

$sc_style['ANON_IP']['pre'] = "";
$sc_style['ANON_IP']['post'] = "";


$sc_style['CUSTOMTITLE']['pre'] = "<small>";
$sc_style['CUSTOMTITLE']['post'] = "</small>";


$sc_style['USER_EXTENDED']['location.text_value']['mid'] = ": ";
$sc_style['USER_EXTENDED']['location.text_value']['post'] = "<br />";




$FORUMSTART = '<a id="top"></a> 

	<div class="gb-full">
		<div>{BACKLINK}</div>
	</div>

    <div class="gb-full">
        <div class="gb-80"><h3>{THREADNAME}</h3></div>
        <div class="gb-20">{TRACK}{BUTTONS}</div>
    </div>
    <div class="gb-full">
		<div>{NEXTPREV}</div>
	</div>
	<div class="gb-full">
		<div>{MESSAGE}</div>
	</div>    
     
	'." 
  
	<table style='".USER_WIDTH."'>
	<tr>
	<td style='width:60%; text-align: left'>
	{GOTOPAGES}
	</td>
	<td style='width:40%; text-align:right; white-space: nowrap'>
	{BUTTONS}
	</td>
	</tr>
	<tr>
	<td style='width:60%; text-align: left'>
 
	{MODERATORS}
	 
	</td>
	<td style='width:40%; text-align:right'>
	{THREADSTATUS}
	</td>
	</tr>
	</table>

 
	<table style='".USER_WIDTH."' class='table-borderless fborder table'>
	<tr>
	<td style='width:20%; text-align:center' class='fcaption'>
	{LAN=AUTHOR}
	</td>
	<td style='width:80%; text-align:center' class='fcaption'>
	{LAN=FORUM_2015}
	</td>
	</tr>";

$FORUMTHREADSTYLE = "<tr>
	<td class='forumheader' style='vertical-align:middle'>
	{NEWFLAG}
	{POSTER}
	{ANON_IP}
	</td>
	<td class='forumheader' style='vertical-align:middle'>
	<table cellspacing='0' cellpadding='0' style='width:100%' class='table-forumthreadstyle' >
	<tr>
	<td class='smallblacktext'>
	{THREADDATESTAMP}
	</td>
	<td style='text-align:right'>
 	{EMAILITEM} {PRINTITEM} {REPORTIMG}{EDITIMG}{QUOTEIMG}
	</td>
	</tr>
	</table>
	</td>
	</tr>
	<tr>
	<td class='forumheader3' style='vertical-align:top'>
	{CUSTOMTITLE}
	{AVATAR}
 
	{LEVEL=special}
	{LEVEL=pic}
	{LEVEL=userid}
	{JOINED}
	{USER_EXTENDED=location.text_value}
	{POSTS}
 
	</td>
	<td class='forumheader3' style='vertical-align:top'>{POLL}
	{POST}
	{ATTACHMENTS}
	{LASTEDIT}{LASTEDITBY=link}
	{SIGNATURE}
	</td>
	</tr>
	<tr>
	 <td class='finfobar'>
	<span class='smallblacktext'>
	{TOP}
	</span>
	</td>
	<td class='finfobar' style='vertical-align:top'>
	<table cellspacing='0' cellpadding='0' style='width:100%' class='table-finfobar'>
	<tr>
	<td>
	{PROFILEIMG}
	 {EMAILIMG}
	 {WEBSITEIMG}
	 {PRIVMESSAGE}
	</td>
	<td style='text-align:right'>
	{MODOPTIONS}
	</td>
	</tr>
	</table>
	</td>
	</tr>
	<tr>
	<td colspan='2'>
	</td>
	</tr>";

$FORUMEND = "<tr><td colspan='2' class='forumheader3' style='text-align:center'>{QUICKREPLY}</td></tr></table> 

	<table style='".USER_WIDTH."' >
	<tr>
	<td style='width:80%'>{GOTOPAGES}
	</td>
	<td style='width:20%; text-align: right; white-space: nowrap'>
	{BUTTONS}
	</td>
	</tr>
	<tr>
	<td colspan ='2'>
	{FORUMJUMP}
	</td>
	</tr>
	</table>
 ";

	/*
	<div style='text-align:center' class='spacer'>
	<a href='".e_PLUGIN."rss_menu/rss.php?8.1.".e_QUERY."'><img src='".e_PLUGIN."rss_menu/images/rss1.png' alt='{LAN=FORUM_0012}' style='vertical-align: middle; border: 0;' /></a> <a href='".e_PLUGIN."rss_menu/rss.php?8.2.".e_QUERY."'><img src='".e_PLUGIN."rss_menu/images/rss2.png' alt='{LAN=FORUM_0013}' style='vertical-align: middle; border: 0;' /></a> <a href='".e_PLUGIN."rss_menu/rss.php?8.3.".e_QUERY."'><img src='".e_PLUGIN."rss_menu/images/rss3.png' alt='{LAN=433}' style='vertical-align: middle; border: 0;' /></a>
	</div>
	*/

	
$FORUMEND .= "	
	<div class='nforumdisclaimer' style='text-align:center'>Powered by <b>e107 Forum System</b></div> ";

$FORUMREPLYSTYLE = "<tr>
	<td class='forumheader' style='vertical-align:middle'>
	{NEWFLAG}
	{POSTER}
	{ANON_IP}
	</td>
	<td class='forumheader' style='vertical-align:middle'>
	<table cellspacing='0' cellpadding='0' style='width:100%' class='table-borderless'>
	<tr>
	<td class='smallblacktext'>
	{THREADDATESTAMP}
	</td>
	<td style='text-align:right'>
	{REPORTIMG}{EDITIMG}{QUOTEIMG}
	</td>
	</tr>
	</table>
	</td>
	</tr>
	<tr>
	<td class='forumheader3' style='vertical-align:top'>
	{CUSTOMTITLE}
	{AVATAR}
	<div class='smalltext'>
	{LEVEL=special}
	{LEVEL=pic}
	{LEVEL=userid}
	{JOINED}
	{USER_EXTENDED=location.text_value}
	{POSTS}
	</div>
	</td>
	<td class='forumheader3' style='vertical-align:top'>{POST}
	{ATTACHMENTS}
	{LASTEDIT}{LASTEDITBY}
	{SIGNATURE}
	</td>
	</tr>
	<tr>
	 <td class='finfobar'>
	<span class='smallblacktext'>
	{TOP}
	</span>
	</td>
	<td class='finfobar' style='vertical-align:top'>
	<table cellspacing='0' cellpadding='0' style='width:100%' class='table-borderless'>
	<tr>
	<td>
	{PROFILEIMG}
	 {EMAILIMG}
	 {WEBSITEIMG}
	 {PRIVMESSAGE}
	</td>
	<td style='text-align:right'>
	{MODOPTIONS}
	</td>
	</tr>
	</table>
	</td>
	</tr>
	<tr>
	<td colspan='2'>
	</td>
	</tr>";

$FORUMDELETEDSTYLE = "<tr>
	<td class='forumheader' style='vertical-align:middle'>
	{POSTER}
	{ANON_IP}
	</td>
	<td class='forumheader' style='vertical-align:middle'>
	<table cellspacing='0' cellpadding='0' style='width:100%' class='table-borderless'>
	<tr>
	<td class='smallblacktext'>
	{THREADDATESTAMP}
	</td>
	<td style='text-align:right'>
	</td>
	</tr>
	</table>
	</td>
	</tr>
	<tr>
	<td class='forumheader3' style='vertical-align:top' colspan='2'>
	{POSTDELETED}
	</td>
	</tr>
	<tr>
	<td class='finfobar'>
	<span class='smallblacktext'>
	</span>
	</td>
	<td class='finfobar' style='vertical-align:top' colspan='2'>
	<table cellspacing='0' cellpadding='0' style='width:100%' class='table-borderless'>
	<tr>
	<td>
	</td>
	<td style='text-align:right'>
	{MODOPTIONS}
	</td>
	</tr>
	</table>
	</td>
	</tr>
	<tr>
	<td colspan='2'>
	</td>
	</tr>";


$FORUM_CRUMB['sitename']['value'] = "<a class='forumlink' href='{SITENAME_HREF}'>{SITENAME}</a>";
$FORUM_CRUMB['sitename']['sep'] = " :: ";

$FORUM_CRUMB['forums']['value'] = "<a class='forumlink' href='{FORUMS_HREF}'>{FORUMS_TITLE}</a>";
$FORUM_CRUMB['forums']['sep'] = " :: ";

$FORUM_CRUMB['parent']['value'] = "<a class='forumlink' href='{PARENT_HREF}'>{PARENT_TITLE}</a>"; 
$FORUM_CRUMB['parent']['sep'] = " :: ";

$FORUM_CRUMB['subparent']['value'] = "<a class='forumlink' href='{SUBPARENT_HREF}'>{SUBPARENT_TITLE}</a>";
$FORUM_CRUMB['subparent']['sep'] = " :: ";

$FORUM_CRUMB['forum']['value'] = "<a class='forumlink' href='{FORUM_HREF}'>{FORUM_TITLE}</a>";


 
$FORUM_VIEWTOPIC_TEMPLATE['caption'] =  $FORUMCAPTION;
$FORUM_VIEWTOPIC_TEMPLATE['start'] = $FORUMSTART;
$FORUM_VIEWTOPIC_TEMPLATE['thread'] =  $FORUMTHREADSTYLE;
$FORUM_VIEWTOPIC_TEMPLATE['end'] =  $FORUMEND;
$FORUM_VIEWTOPIC_TEMPLATE['replies']  = $FORUMREPLYSTYLE ;
$FORUM_VIEWTOPIC_TEMPLATE['deleted'] =  $FORUMDELETEDSTYLE;



