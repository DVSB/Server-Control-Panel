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
?>
<?php $template_user = $_SESSION['zUsername']; ?>
<?php $domain = str_replace('www.', '', $_SERVER['HTTP_HOST']); ?>
<?php include('lang/' . GetPrefdLang($personalinfo['ap_language_vc']) . '.php'); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
        <title>ZPanel &gt; <?php echo strtoupper($template_user); ?> - <?php echo $domain; ?></title>
        <link rel="shortcut icon" type="image/x-icon" href="{{zp:templatepath}}/inc/favicon.ico">
        <link href="{{zp:templatepath}}/inc/6.css" rel="stylesheet" type="text/css">
        <link href="{{zp:templatepath}}/inc/jqf1.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="{{zp:templatepath}}/inc/jquery.min.js"></script>
        <script type="text/javascript" language="javascript" src="{{zp:templatepath}}/inc/jquery.cookie.js"></script>
        <script type="text/javascript" src="{{zp:templatepath}}/inc/init.js"></script>
        <script type="text/javascript" src="{{zp:templatepath}}/inc/jqf1.english.js"></script>
        <script type="text/javascript" src="{{zp:templatepath}}/inc/jquery_jclock-1_2_0_js.txt"></script>
    </head>
    <body>

        <div id="header">
            <div id="header_overlay" class="center">
                <a href="index.php"><img src="{{zp:templatepath}}/inc/zp_logo6.png" border="0"></a>
                <div id="links">
                    <A title="Main Page" href="index.php"><img src="{{zp:templatepath}}/images/home.png"/></A>
                    <A title="My Account" href="?c=account&p=my_account"><img src="{{zp:templatepath}}/images/account.png"/></A>
                    <A title="Change Password" href="?c=account&p=password_assistant"><img src="{{zp:templatepath}}/images/pass.png"/></A>
                    <A title="Log off ZPanel" href="login.php?logout"><img src="{{zp:templatepath}}/images/logout.png"/></A>
                    <br>
                    <div id="time">Server time is: <b><?php echo date('l F jS\, Y'); ?></b><div id="jclock"><div class="jclock"></div></div></div>
                </div>
            </div>
        </div>

        <div id="content" align="center">
            <br>
            <table align="center" class="mainlayout" width="98%" border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td width="15px" align="left"><img src="{{zp:templatepath}}/images/mainlayout_tleft.png" border="0"></td><td width="100%" background="{{zp:templatepath}}/images/mainlayout_tcenter.png"></td><td width="15px"><img src="{{zp:templatepath}}/images/mainlayout_tright.png" border="0"></td>
                </tr>

                <tr>
                    <td bgcolor="#FFFFFF" style="border-left:solid 1px #CCC"></td>
                    <td>

                        <table class="mainlayout_content" width="100%" border="0" cellpadding="0" cellspacing="0">
                            <tr valign="top">
                                <td class="mainlayout_content" width="100%" bgcolor="#FFFFFF">{{zp:content}}</td>
                                <td style="padding-right:0px" width="200px" bgcolor="#FFFFFF">

                                    <table class="statsdata" border="0" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <th>Account Information</th>
                                        </tr>
                                        <tr valign="top">
                                            <td>

                                                <div>
                                                    <table width="100%" border="0" cellspacing="0">
                                                        <tbody><tr>
                                                                <td nowrap="nowrap"><img src="{{zp:templatepath}}/images/raquo.png" border="0"> <strong><?php echo ucwords($lang['109']); ?>:</strong></td>
                                                                <td nowrap="nowrap"><span class="Side_Info">{{account:username}}</span></td>
                                                            </tr>
                                                            <tr>
                                                                <td nowrap="nowrap"><img src="{{zp:templatepath}}/images/raquo.png" border="0"> <strong><?php echo ucwords($lang['13']); ?></strong></td>
                                                                <td nowrap="nowrap">{{account:fullname}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td nowrap="nowrap"><img src="{{zp:templatepath}}/images/raquo.png" border="0"> <strong><?php echo ucwords($lang['14']); ?></strong></td>
                                                                <td nowrap="nowrap"><a href="./?c=account&p=my_account" title="Update your contact email address">{{account:email}}</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td nowrap="nowrap"><img src="{{zp:templatepath}}/images/raquo.png" border="0"> <strong><?php echo ucwords($lang['77']); ?>:</strong></td>
                                                                <td nowrap="nowrap"><span class="Side_Info">{{package:name}}</span></td>
                                                            </tr>
                                                            <tr>
                                                                <td nowrap="nowrap"><img src="{{zp:templatepath}}/images/raquo.png" border="0"> <strong><?php echo ucwords($lang['303']); ?>:</strong></td>
                                                                <td nowrap="nowrap"><span class="Side_Info">{{account:type}}</span></td>
                                                            </tr>
                                                            <tr>
                                                                <td nowrap="nowrap">&nbsp;</td>
                                                                <td nowrap="nowrap">&nbsp;</td>
                                                            </tr>
                                                            <tr>
                                                                <td nowrap="nowrap"><img src="{{zp:templatepath}}/images/raquo.png" border="0"> <strong><?php echo ucwords($lang['304']); ?>:</strong></td>
                                                                <td nowrap="nowrap">{{progbar:diskspace}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td nowrap="nowrap">&nbsp;</td>
                                                                <td nowrap="nowrap" valign="top"><img src="{{zp:templatepath}}/inc/drop.gif" width="10" height="8"> <span class="Side_Info">{{usage:diskspace}}</span> / <span class="Side_Info">{{quota:diskspace}}</span>&nbsp;</td>
                                                            </tr>
                                                            <tr>
                                                                <td nowrap="nowrap"><img src="{{zp:templatepath}}/images/raquo.png" border="0"> <strong><?php echo ucwords($lang['305']); ?>:</strong></td>
                                                                <td nowrap="nowrap">{{progbar:bandwidth}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td nowrap="nowrap">&nbsp;</td>
                                                                <td nowrap="nowrap" valign="top"><img src="{{zp:templatepath}}/inc/drop.gif" width="10" height="8"><span class="Side_Info"> {{usage:bandwidth}}</span> / <span class="Side_Info">{{quota:bandwidth}}</span>&nbsp;</td>
                                                            </tr>
                                                            <tr>
                                                                <td nowrap="nowrap">&nbsp;</td>
                                                                <td nowrap="nowrap">&nbsp;</td>
                                                            </tr>
                                                            <tr>
                                                                <td nowrap="nowrap"><img src="{{zp:templatepath}}/images/raquo.png" border="0"> <strong><?php echo ucwords($lang['5']); ?></strong></td>
                                                                <td nowrap="nowrap"><span class="Side_Info">{{usage:domains}}</span> / <span class="Side_Info">{{quota:domains}}</span>&nbsp;</td>
                                                            </tr>
                                                            <tr>
                                                                <td nowrap="nowrap"><img src="{{zp:templatepath}}/images/raquo.png" border="0"> <strong><?php echo ucwords($lang['6']); ?></strong></td>
                                                                <td nowrap="nowrap"><span class="Side_Info">{{usage:subdomains}}</span> / <span class="Side_Info">{{quota:subdomains}}</span>&nbsp;</td>
                                                            </tr>
                                                            <tr>
                                                                <td nowrap="nowrap"><img src="{{zp:templatepath}}/images/raquo.png" border="0"> <strong><?php echo ucwords($lang['7']); ?></strong></td>
                                                                <td nowrap="nowrap"> <span class="Side_Info">{{usage:parkeddomains}}</span> / <span class="Side_Info">{{quota:parkeddomains}}</span></td>
                                                            </tr>
                                                            <tr>
                                                                <td nowrap="nowrap"><img src="{{zp:templatepath}}/images/raquo.png" border="0"> <strong><?php echo ucwords($lang['8']); ?></strong></td>
                                                                <td nowrap="nowrap"><span class="Side_Info">{{usage:ftpaccounts}}</span> / <span class="Side_Info">{{quota:ftpaccounts}}</span>&nbsp;</td>
                                                            </tr>
                                                            <tr>
                                                                <td nowrap="nowrap"><img src="{{zp:templatepath}}/images/raquo.png" border="0"> <strong><?php echo ucwords($lang['9']); ?></strong></td>
                                                                <td nowrap="nowrap"><span class="Side_Info">{{usage:mysql}}</span> / <span class="Side_Info">{{quota:mysql}}</span>&nbsp;</td>
                                                            </tr>
                                                            <tr>
                                                                <td nowrap="nowrap"><img src="{{zp:templatepath}}/images/raquo.png" border="0"> <strong><?php echo ucwords($lang['306']); ?>:</strong></td>
                                                                <td nowrap="nowrap"><span class="Side_Info">{{usage:mailboxes}}</span> / <span class="Side_Info">{{quota:mailboxes}}</span>&nbsp;</td>
                                                            </tr>
                                                            <tr>
                                                                <td nowrap="nowrap"><img src="{{zp:templatepath}}/images/raquo.png" border="0"> <strong><?php echo ucwords($lang['307']); ?>:</strong></td>
                                                                <td nowrap="nowrap"><span class="Side_Info">{{usage:forwarders}}</span> / <span class="Side_Info">{{quota:forwarders}}</span>&nbsp;</td>
                                                            </tr>
                                                            <tr>
                                                                <td nowrap="nowrap"><img src="{{zp:templatepath}}/images/raquo.png" border="0"> <strong><?php echo ucwords($lang['12']); ?></strong></td>
                                                                <td nowrap="nowrap"><span class="Side_Info">{{usage:distlists}} / {{quota:distlists}}</span></td>
                                                            </tr>
                                                        </tbody></table>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Server Information</th>
                                        </tr>
                                        <tr valign="top">
                                            <td>
                                                <div>
                                                    <table width="100%" border="0" cellspacing="0">
                                                        <tbody><tr>
                                                                <td nowrap="nowrap"><img src="{{zp:templatepath}}/images/raquo.png" border="0"> <strong><?php echo ucwords($lang['221']); ?>:</strong></td>
                                                                <td nowrap="nowrap"><span class="Side_Info">{{server:userip}}</span></td>
                                                            </tr>
                                                            <tr>
                                                                <td nowrap="nowrap"><img src="{{zp:templatepath}}/images/raquo.png" border="0"> <strong><?php echo ucwords($lang['308']); ?>:</strong></td>
                                                                <td nowrap="nowrap"><span class="Side_Info">{{server:serverip}}</span></td>
                                                            </tr>
                                                            <tr>
                                                                <td nowrap="nowrap"><img src="{{zp:templatepath}}/images/raquo.png" border="0"> <strong><?php echo ucwords($lang['393']); ?>:</strong></td>
                                                                <td nowrap="nowrap"><span class="Side_Info">{{server:osname}}</span></td>
                                                            </tr>
                                                            <tr>
                                                                <td nowrap="nowrap"><img src="{{zp:templatepath}}/images/raquo.png" border="0"> <strong><?php echo ucwords($lang['309']); ?>:</strong></td>
                                                                <td nowrap="nowrap"><span class="Side_Info">{{server:verapache}}</span></td>
                                                            </tr>
                                                            <tr>
                                                                <td nowrap="nowrap"><img src="{{zp:templatepath}}/images/raquo.png" border="0"> <strong><?php echo ucwords($lang['310']); ?>:</strong></td>
                                                                <td nowrap="nowrap"><span class="Side_Info">{{server:verphp}}</span></td>
                                                            </tr>
                                                            <tr>
                                                                <td nowrap="nowrap"><img src="{{zp:templatepath}}/images/raquo.png" border="0"> <strong><?php echo ucwords($lang['311']); ?>:</strong></td>
                                                                <td nowrap="nowrap"><span class="Side_Info">{{server:vermysql}}</span></td>
                                                            </tr>
                                                            <tr>
                                                                <td nowrap="nowrap"><img src="{{zp:templatepath}}/images/raquo.png" border="0"> <strong><?php echo ucwords($lang['313']); ?>:</strong></td>
                                                                <td nowrap="nowrap">{{server:verzpanel}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td nowrap="nowrap" colspan="2"><img src="{{zp:templatepath}}/images/raquo.png" border="0"> <strong><?php echo ucwords($lang['35']); ?>:</strong> {{server:uptime}}</td>
                                                            </tr>
                                                        </tbody></table>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>


                    </td>
                    <td bgcolor="#FFFFFF" style="border-right:solid 1px #CCC"></td>
                </tr>

                <tr>
                    <td width="15px" align="left"><img src="{{zp:templatepath}}/images/mainlayout_bleft.png" border="0"></td><td width="100%" background="{{zp:templatepath}}/images/mainlayout_bcenter.png"></td><td width="15px"><img src="{{zp:templatepath}}/images/mainlayout_bright.png" border="0"></td>
                </tr>

            </table>


            <table align="center" class="footer" width="95%" border="0" cellpadding="0" cellspacing="0">
                <tr class="copypower">
                    <td class="copypower">Copyright &copy; 2004-2011 <a href="http://www.zpanelcp.com/" target="_blank">ZPanel Project</a>.<br></td>
                </tr>
            </table>

        </div>
    </body></html>
