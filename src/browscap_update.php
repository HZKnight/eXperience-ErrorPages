<?php

    /* 
     * browscap_update.php
     *                                    
     *                                         __  __                _                     
     *                                      ___\ \/ /_ __   ___ _ __(_) ___ _ __   ___ ___ 
     *                                     / _ \\  /| '_ \ / _ \ '__| |/ _ \ '_ \ / __/ _ \
     *                                    |  __//  \| |_) |  __/ |  | |  __/ | | | (_|  __/
     *                                     \___/_/\_\ .__/ \___|_|  |_|\___|_| |_|\___\___|
     *                                              |_| HZKnight free PHP Scripts            
     *      
     *                                           lucliscio <lucliscio@h0model.org>, ITALY
     *
     * EroorPage ver.0.1.0
     * 
     * -------------------------------------------------------------------------------------------
     * Lincense
     * -------------------------------------------------------------------------------------------
     * Copyright (C)2023 HZKnight
     *
     * This program is free software: you can redistribute it and/or modify
     * it under the terms of the GNU Affero General Public License as published by
     * the Free Software Foundation, either version 3 of the License, or
     * (at your option) any later version.
     *
     * This program is distributed in the hope that it will be useful,
     * but WITHOUT ANY WARRANTY; without even the implied warranty of
     * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
     * GNU Affero General Public License for more details.
     *
     * You should have received a copy of the GNU Affero General Public License
     * along with this program.  If not, see <http://www.gnu.org/licenses/agpl-3.0.html>.
     * -------------------------------------------------------------------------------------------
     */

    /**
     * Personalizzed server error pages config file
     * 
     * @author  lucliscio <lucliscio@h0model.org>
     * @version v1.0.0  2013/04/24 07:56:20
     * @copyright Copyright 2023 HZKnight
     * @copyright Copyright 2013 Luca Liscio
     * @license http://www.gnu.org/licenses/agpl-3.0.html GNU/AGPL3
     *   
     * @package eXperience
     * @subpackage ErrorPages
     * @filesource
     */

    use phpbrowscap\Browscap;
    require_once 'lib/Browscap.php';

    ini_set('memory_limit', '-1');

    echo "<h1>Browscap Updater <small>Ver. 1.0</small></h1>";
    echo "<h2>Step 1 - Cleaning cache ....</h2>";

    foreach (new DirectoryIterator('./temp/cache/') as $fileInfo) {
    if(!$fileInfo->isDot()) {
        echo $fileInfo->getPathname()."...";
        unlink($fileInfo->getPathname());
        echo "DELETED"."<br>";
    }
    }

    echo "<h2>Step 2 - Updating browscap ....</h2>";
    $browscap = new Browscap('./temp/cache/');
    $browscap->updateCache();

    echo "END";
?>
