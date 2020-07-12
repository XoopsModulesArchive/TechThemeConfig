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

// $Id: xoops_version.php,v 1.1 2004/01/29 14:45:23 buennagel Exp $
//  ------------------------------------------------------------------------ //
//                XOOPS - PHP Content Management System                      //
//                    Copyright (c) 2000 XOOPS.org                           //
//                       <http://www.xoops.org/>                             //
//  ------------------------------------------------------------------------ //
//  This program is free software; you can redistribute it and/or modify     //
//  it under the terms of the GNU General Public License as published by     //
//  the Free Software Foundation; either version 2 of the License, or        //
//  (at your option) any later version.                                      //
//                                                                           //
//  You may not change or alter any portion of this comment or credits       //
//  of supporting developers from this source code or any supporting         //
//  source code which is considered copyrighted (c) material of the          //
//  original comment or credit authors.                                      //
//                                                                           //
//  This program is distributed in the hope that it will be useful,          //
//  but WITHOUT ANY WARRANTY; without even the implied warranty of           //
//  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            //
//  GNU General Public License for more details.                             //
//                                                                           //
//  You should have received a copy of the GNU General Public License        //
//  along with this program; if not, write to the Free Software              //
//  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA //
//  ------------------------------------------------------------------------ //
//T-Tech Inc. TechThemeConfig version 1.0
$modversion['name'] = "TechThemeConfig";
$modversion['version'] = 2.00;
$modversion['description'] = "Tech Themes Configuration Manager.";
$modversion['author'] = "Danni & Tommy <br /> Of  T-Tech Inc.<br />( http://www.t-tech.org/ )";
$modversion['credits'] = "Danni & Tommy <br />Of T-Tech Inc";
$modversion['license'] = "GNU see LICENSE";
$modversion['official'] = 1;
$modversion['image'] = "images/admin.gif";
$modversion['dirname'] = "TechThemeConfig";
$modversion['hasMain'] = 0;
$modversion['hasAdmin'] = 1;
$modversion['adminindex'] = "admin/index.php";
$modversion['dirname'] = "TechThemeConfig";
$modversion['sqlfile']['mysql'] = "sql/mysql.sql";
$modversion['tables'][0] = "themeconfig";
$modversion['tables'][1] = "themeconfiglinks";
?>