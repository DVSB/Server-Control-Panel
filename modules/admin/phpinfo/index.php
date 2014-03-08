<?php

/**
 *
 * ZPanel - A Cross-Platform Open-Source Web Hosting Control panel.
 * 
 * @package ZPanel
 * @version $Id$
 * @author Bobby Allen - ballen@zpanelcp.com
 * @copyright (c) 2008-2011 ZPanel Group - http://www.zpanelcp.com/
 * @license http://opensource.org/licenses/gpl-3.0.html GNU Public License v3
 *
 * This program (ZPanel) is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */
include('conf/zcnf.php');
include('lang/' . GetPrefdLang($personalinfo['ap_language_vc']) . '.php');
include('inc/zAccountDetails.php');
?>
<div id="contentwrapper_phpinfo" style="width:600px">
<?php
echo $lang['53'];
echo "<br>&raquo; <a href=\"apps/phpinfo/\" target=\"_blank\" title=\"" . $lang['54'] . "\">" . $lang['54'] . "</a>";
echo "<br>";
ob_start();
phpinfo(INFO_GENERAL);
$info = ob_get_contents();
ob_end_clean();
$info = preg_replace('%^.*<body>(.*)</body>.*$%ms', '$1', $info);
$info = str_replace('<img border="0"', '<img style="display: none;"', $info);
echo $info;

?>
</div>
