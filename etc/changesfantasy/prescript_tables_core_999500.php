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
$Id$
*/
require_once MAX_PATH.'/etc/changesfantasy/script_tables_core_parent.php';

class prescript_tables_core_999500 extends script_tables_core_parent
{
    function prescript_tables_core_999500()
    {
    }

    function execute_destructive($aParams)
    {
        $this->init($aParams);
        $this->_log('*********** constructive ****************');
        $this->_logExpected();
        return true;
    }

    function _logExpected()
    {
        $aExistingTables = $this->oDBUpgrade->_listTables();
        $prefix = $this->oDBUpgrade->prefix;
        $msg = $this->_testName('A');
        if (!in_array($prefix.'klapaucius', $aExistingTables))
        {
            $this->_log($msg.' table '.$prefix.'klapaucius does not exist in database therefore changes_tables_core_999500 will not be able to alter table '.$prefix.'klapaucius');
        }
        else
        {
            $this->_log($msg.' remove field text_field from '.$prefix.'klapaucius');

            $msg = $this->_testName('B');
            $this->_log($msg.' remove primary key constraint klapaucius_pkey '.$prefix.'klapaucius');
        }
    }

}

?>