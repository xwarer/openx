<?php

/*
+---------------------------------------------------------------------------+
| OpenX v${RELEASE_MAJOR_MINOR}                                                                |
| =======${RELEASE_MAJOR_MINOR_DOUBLE_UNDERLINE}                                                                |
|                                                                           |
| Copyright (c) 2003-2009 OpenX Limited                                     |
| For contact details, see: http://www.openx.org/                           |
|                                                                           |
| This program is free software; you can redistribute it and/or modify      |
| it under the terms of the GNU General Public License as published by      |
| the Free Software Foundation; either version 2 of the License, or         |
| (at your option) any later version.                                       |
|                                                                           |
| This program is distributed in the hope that it will be useful,           |
| but WITHOUT ANY WARRANTY; without even the implied warranty of            |
| MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the             |
| GNU General Public License for more details.                              |
|                                                                           |
| You should have received a copy of the GNU General Public License         |
| along with this program; if not, write to the Free Software               |
| Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA |
+---------------------------------------------------------------------------+
$Id: market-inactive.php 31004 2009-01-16 10:42:22Z andrew.hill $
*/

require_once 'market-common.php';
require_once MAX_PATH .'/lib/OX/Admin/Redirect.php';

// Security check
OA_Permission::enforceAccount(OA_ACCOUNT_ADMIN);


/*-------------------------------------------------------*/
/* Display page                                          */
/*-------------------------------------------------------*/

    $oMarketComponent = OX_Component::factory('admin', 'oxMarket');
    //check if you can see this page (pluigin should be inactive in this case)
    $oMarketComponent->checkRegistered();
    $oMarketComponent->checkActive(false);

    //header
    phpAds_PageHeader("openx-market",'','../../');

    //get template and display form
    $oTpl = new OA_Plugin_Template('market-inactive.html','openXMarket');

    $aDeactivationStatus = $oMarketComponent->getInactiveStatus();
    $oTpl->assign('deactivationStatus', $aDeactivationStatus['code']);
    $oTpl->assign('deactivationStatusMessage', $aDeactivationStatus['message']);

    $oTpl->assign('publisherSupportEmail', $oMarketComponent->getConfigValue('publisherSupportEmail'));

    $oTpl->display();

    //footer
    phpAds_PageFooter();

?>
