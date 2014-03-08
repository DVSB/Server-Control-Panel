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
# Now we need to declare and cleanup some variables
$acc_fk = $useraccount['ac_id_pk'];
$fullname = Cleaner("i", $_POST['inFullname']);
$email_address = Cleaner("i", $_POST['inEmail']);
$postal_address = Cleaner("i", $_POST['inAddress']);
$postal_code = Cleaner("i", $_POST['inPostalCode']);
$phone = Cleaner("i", $_POST['inPhone']);
$returnurl = $_POST['inReturnURL'];
$language = $_POST['inTranslation'];

# Now we simply update the account details based on the current session.
DataExchange("w", $z_db_name, "UPDATE z_personal SET ap_fullname_vc='" . $fullname . "', ap_email_vc='" . $email_address . "', ap_address_tx='" . $postal_address . "', ap_postcode_vc='" . $postal_code . "', ap_phone_vc='" . $phone . "', ap_language_vc='" . $language . "' WHERE ap_acc_fk=" . $acc_fk . "");

$returnurl = GetNormalModuleURL($returnurl) . "&r=ok";
header("location: " . $returnurl . "");
exit;
?>