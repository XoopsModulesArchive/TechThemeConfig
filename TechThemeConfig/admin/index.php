<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>TechThemeConfig Version II</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
.style1 {font-size: x-small}
</style>
</head>
<body>
<script>
	function doSubmit(strMessage){
		var Do;Do = confirm(strMessage);
		if(Do == true){document.themeconfig.submit();}else{}
	}
</script>
<?php
//    Project: TechThemeConfig
//    Author: Danni & Tommy
//    Date: March 20 2004
//    Contact: http://t-tech.org
//
//    Copyright (C) 2004 T-Tech Inc.
//
//    This program is free software; you can redistribute it and/or modify
//    it under the terms of the GNU General Public License as published by
//    the Free Software Foundation; either version 2 of the License, or
//    (at your option) any later version.
//
//    This program is distributed in the hope that it will be useful,
//    but WITHOUT ANY WARRANTY; without even the implied warranty of
//    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//    GNU General Public License for more details.
//
//    You should have received a copy of the GNU General Public License
//    along with this program; if not, write to the Free Software
//    Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA
	include "../../../mainfile.php";
	include "../../../include/cp_header.php";
		if(file_exists("../language/".$xoopsConfig['language']."/admin.php")){
			include "../language/".$xoopsConfig['language']."/admin.php";
		}else{
			include "../language/english/admin.php";
		}
	xoops_cp_header();
	function target($target_name, $value){
		$targets = "<select name=\"$target_name\" size=\"1\">\n";
			if($value == 0||$value!=1||$value!=2||$value!=3||$value!=4){$targets.="<option value=\"0\" selected>Default</option>\n";}else{$targets.="<option value=\"0\">Default</option>\n";}
			if($value == 1){$targets.="<option value=\"1\" selected>_top</option>\n";}else{$targets.="<option value=\"1\">_top</option>\n";}
			if($value == 2){$targets.="<option value=\"2\" selected>_self</option>\n";}else{$targets.="<option value=\"2\">_self</option>\n";}
		  	if($value == 3){$targets.="<option value=\"3\" selected>_blank</option>\n";}else{$targets.="<option value=\"3\">_blank</option>\n";}
		  	if($value == 4){$targets.="<option value=\"4\" selected>_parent</option>\n";}else{$targets.="<option value=\"4\">_parent</option>\n";}
		$targets.="</select>";
		return $targets;
	}
	$link = mysql_connect(XOOPS_DB_HOST, XOOPS_DB_USER, XOOPS_DB_PASS);
	$db_select = mysql_select_db(XOOPS_DB_NAME);
		if($op == "themeconfigsave"){
			$results[0] = mysql_query("UPDATE `".XOOPS_DB_PREFIX."_themeconfig` SET `sitename` = '$xsitename',`siteurl` = '$xsiteurl',`siteslogan` = '$xsiteslogan',`scroll1` = '$scroll1text',`scroll2` = '$scroll2text' WHERE `id` = '1' LIMIT 1 ;", $link);
			$results[1]  = mysql_query("UPDATE `".XOOPS_DB_PREFIX."_themeconfiglinks` SET `text` = '$link1text',`url` = '$link1url',`target` = '$link1target' WHERE `id` = '1' LIMIT 1 ;", $link);
			$results[2]  = mysql_query("UPDATE `".XOOPS_DB_PREFIX."_themeconfiglinks` SET `text` = '$link2text',`url` = '$link2url',`target` = '$link2target' WHERE `id` = '2' LIMIT 1 ;", $link);
			$results[3]  = mysql_query("UPDATE `".XOOPS_DB_PREFIX."_themeconfiglinks` SET `text` = '$link3text',`url` = '$link3url',`target` = '$link3target' WHERE `id` = '3' LIMIT 1 ;", $link);
			$results[4]  = mysql_query("UPDATE `".XOOPS_DB_PREFIX."_themeconfiglinks` SET `text` = '$link4text',`url` = '$link4url',`target` = '$link4target' WHERE `id` = '4' LIMIT 1 ;", $link);
			$results[5]  = mysql_query("UPDATE `".XOOPS_DB_PREFIX."_themeconfiglinks` SET `text` = '$link5text',`url` = '$link5url',`target` = '$link5target' WHERE `id` = '5' LIMIT 1 ;", $link);
			$results[6]  = mysql_query("UPDATE `".XOOPS_DB_PREFIX."_themeconfiglinks` SET `text` = '$link6text',`url` = '$link6url',`target` = '$link6target' WHERE `id` = '6' LIMIT 1 ;", $link);
			$results[7]  = mysql_query("UPDATE `".XOOPS_DB_PREFIX."_themeconfiglinks` SET `text` = '$link7text',`url` = '$link7url',`target` = '$link7target' WHERE `id` = '7' LIMIT 1 ;", $link);
			$results[8]  = mysql_query("UPDATE `".XOOPS_DB_PREFIX."_themeconfiglinks` SET `text` = '$link8text',`url` = '$link8url',`target` = '$link8target' WHERE `id` = '8' LIMIT 1 ;", $link);
			$results[9]  = mysql_query("UPDATE `".XOOPS_DB_PREFIX."_themeconfiglinks` SET `text` = '$link9text',`url` = '$link9url',`target` = '$link9target' WHERE `id` = '9' LIMIT 1 ;", $link);
			$results[10]  = mysql_query("UPDATE `".XOOPS_DB_PREFIX."_themeconfiglinks` SET `text` = '$link10text',`url` = '$link10url',`target` = '$link10target' WHERE `id` = '10' LIMIT 1 ;", $link);
			unset($results);
		}
	$result = mysql_query("SELECT * FROM `".XOOPS_DB_PREFIX."_themeconfig` WHERE `id` = '1'", $link);
		while($row = mysql_fetch_array($result, MYSQL_ASSOC)){
			$xsitename 		 = $row["sitename"];
			$xsiteurl  		 = $row["siteurl"];
			$xslogan   		 = $row["siteslogan"];
			$scroll1text	 = $row["scroll1"];
			$scroll2text	 = $row["scroll2"];
		}
		unset($row);
		unset($result);
	$result = mysql_query("SELECT * FROM `".XOOPS_DB_PREFIX."_themeconfiglinks`", $link);
		$i = 1;
		while($row = mysql_fetch_array($result,MYSQL_ASSOC)){
			$links['text'][$i]    = $row['text'];
			$links['url'][$i]     = $row['url'];
			$links['target'][$i]  = $row['target'];
			$i++;
		}
		unset($result);
		unset($i);
		unset($row);
	echo "
	<p align=\"center\">
	<h4>TechThemeConfig version 2.0 Admin Console</h4>
	<a href=\"../help/index.html\" target=\"_new\" class=\"style1\">Click Here For Help Document </a>
	</p>
	<form name=\"themeconfig\" method=\"GET\" enctype=\"application/x-www-form-urlencoded\">
	<input type=\"hidden\" name=\"op\" value=\"themeconfigsave\">
		<table align=\"center\" width=\"100%\" cellspacing=\"1\" cellpadding=\"2\">
		  <tr>
			<td valign=\"top\" align=\"center\">
			<font size=\"3\" color=\"#000000\"><strong>General Configuration</strong></font>
			<br><br>
				<table class=\"head\">
				  <tr class=\"even\">
					<td valign=\"top\"><font color=\"#000000\" size=\"2\">Site name:&nbsp;</font></td>
					<td valign=\"top\"><input name=\"xsitename\" type=\"text\" value=\"".urldecode($xsitename)."\"></td>
				  </tr>
				  <tr class=\"odd\">
					<td valign=\"top\"><font color=\"#000000\" size=\"2\">Site url:&nbsp;</font></td>
					<td valign=\"top\"><input name=\"xsiteurl\" type=\"text\" value=\"".urldecode($xsiteurl)."\"></td>
				  </tr>
				  <tr class=\"even\">
					<td valign=\"top\"><font color=\"#000000\" size=\"2\">Site slogan:&nbsp;</font></td>
					<td valign=\"top\"><input name=\"xsiteslogan\" type=\"text\" value=\"".urldecode($xslogan)."\"></td>
				  </tr>
				</table>
			</td>
		  </tr>
		  <tr>
			<td valign=\"top\" align=\"center\">
			<font color=\"#000000\" size=\"3\"><strong>Links Configuration</strong></font>
			<br><br>
			<table class=\"head\">";
			$tbclass = "even";
			for($i=1;$i<11;$i++){
				 echo 	"<tr class=\"$tbclass\">"
						."<td valign=\"top\"><font color=\"#000000\" size=\"2\">Link $i:&nbsp;</font></td>"
						."<td valign=\"top\"><input name=\"link".$i."url\" type=\"text\" value='".urldecode($links["url"][$i])."'></td>"
						."<td valign=\"top\"><font color=\"#000000\" size=\"2\">Target:&nbsp;</font></td>"
						."<td>";
						echo target("link".$i."target", $links["target"][$i]);
				 echo   "</td>"
						."<td><font color=\"#000000\" size=\"2\">Text:&nbsp;</font></td>"
						."<td><input name=\"link".$i."text\" type=\"text\" value=\"".urldecode($links["text"][$i])."\"></td>"
						."</tr>";
				if($tbclass=="even"){$tbclass="odd";}else{$tbclass="even";}
				}
			unset($tbclass);
			unset($i);
	echo "</table>
		   </td>
		  </tr>
		  <tr>
			<td valign=\"top\" align=\"center\">
			<font color=\"#000000\" size=\"3\"><strong>Misc Configuration</strong></font>
			<br><br>
				<table class=\"head\">
				  <tr class=\"even\">
					<td valign=\"top\"><font color=\"#000000\" size=\"2\">Scrolling Text #1:&nbsp;</font></td>
					<td valign=\"top\"><input name=\"scroll1text\" type=\"text\" value=\"".urldecode($scroll1text)."\" size=\"40%\"></td>
				  </tr>
				  <tr class=\"odd\">
					<td valign=\"top\"><font color=\"#000000\" size=\"2\">Scrolling Text #2:&nbsp;</font></td>
					<td valign=\"top\"><input name=\"scroll2text\" type=\"text\" value=\"".urldecode($scroll2text)."\" size=\"40%\"></td>
				  </tr>
			    </table>
			</td>
		  </tr>
		  <tr>
			<td valign=\"top\" align=\"center\">
				<table class=\"head\">
				<tr>
					<td><img src=\"../images/done.gif\" OnClick=\"doSubmit('Your new setting will now be saved.');\"></td>
					<td><img src=\"../images/oops.gif\" OnClick=\"document.themeconfig.reset();\"></td>
				</tr>
				</table>
			</td>
		  </tr>
		</table>
		</form>";
	xoops_cp_footer();
?>
</body>
</html>