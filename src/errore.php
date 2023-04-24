<?php
    
    /* 
     * errore.php
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

    namespace Experience\ErrorPages;
    
    use phpbrowscap\Browscap;
    
    /**
     * Personalizzed server error pages
     * 
     * @author  lucliscio <lucliscio@h0model.org>
     * @version v0.1.0  2023/04/24 07:56:20
     * @copyright Copyright 2023 HZKnight
     * @copyright Copyright 2013 Luca Liscio
     * @license http://www.gnu.org/licenses/agpl-3.0.html GNU/AGPL3
     *   
     * @package eXperience
     * @subpackage ErrorPages
     * @filesource
     */

    require_once 'lib/logger/hzlogger.class.php';
    require_once 'config.inc.php';
    require_once 'lib/function.inc.php';
    require_once 'lib/Browscap.php';

    $log[] = Core\HZLogger::getLogger('arturo');
    $log[] = Core\HZLogger::getLogger("debora");

    /* echo "<pre>";
    var_dump(Core\HZLogger::$_instace);
    echo "</pre>"; */
    
    $bc = new Browscap('./temp/cache/');
    $bc->doAutoUpdate = false;
    
    $result = (array_key_exists('err', $_GET)) ? $_GET['err'] : "000";

    if ($result != "400" && $result != "401" && $result != "403" && $result != "404" && $result != "500"){ 
        $result="000";
    }

    require_once 'assets/template/error.tpl';

    if ($log[$result] == 'Y') notifica("L",$result);

    if ($email[$result] == 'Y') notifica("M",$result);

?>
