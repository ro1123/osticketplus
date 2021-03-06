<?php
/*********************************************************************
    offline.php

    Offline page...modify to fit your needs.

    Peter Rotich <peter@osticket.com>
    Copyright (c)  2006-2010 osTicket
    http://www.osticket.com

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

    vim: expandtab sw=4 ts=4 sts=4:
    $Id: $
**********************************************************************/
require_once('client.inc.php');
if($cfg && !$cfg->isHelpDeskOffline()) { 
    @header('Location: index.php'); //Redirect if the system is online.
    include('index.php');
    exit;
}
?>
<html>
<head>
<title><?= _('Support Ticket System') ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body bgcolor="#FFFFFF" text="#000000" >
<table width="60%" cellpadding="5" cellspacing="0" border="0">
	<tr><td>
        <p>
         <h3><?= _('Support Ticket System Offline') ?></h3>
         
         <?= _('Thank you for your interest in contacting us.') ?><br>
         <?= _('Our helpdesk is offline at the moment, please check back at a later time.') ?>
        </p>
    </td></tr>
</table>
</body>
</html>
