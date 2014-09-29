<?php
    namespace HZErrorPage;

    /* 
     * -------------------------------------------------------------------------
     * HZEroorPage ver.0.1.0
     * -------------------------------------------------------------------------
     */
    /**
     * Personalizzed server error pages
     * 
     * @author Luca Liscio <info@h0model.org>
     * @version 0.1.0  
     * @copyright (C)2013,  Luca Liscio
     * @license http://www.gnu.org/licenses/agpl-3.0.html GNU/AGPL3
     */
    /* 
     * This program is free software: you can redistribute it and/or modify
     * it under the terms of the GNU Affero General Public License as
     * published by the Free Software Foundation, either version 3 of the
     * License, or (at your option) any later version.
     *
     * This program is distributed in the hope that it will be useful,
     * but WITHOUT ANY WARRANTY; without even the implied warranty of
     * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
     * GNU Affero General Public License for more details.
     *
     * You should have received a copy of the GNU Affero General Public License
     * along with this program.  If not, see <http://www.gnu.org/licenses/>.
     */
    
    require_once 'config.inc.php';
    require_once 'lib/function.inc.php';
    require_once 'lib/Browscap.php';

    $bc = new Browscap('tmp');
    
    $result = $_GET['err'];

    if ($result != "400" && $result != "401" && $result != "403" && $result != "404" && $result != "500"){ 
        $result="000";
    }

    require_once 'template/error.tpl';

    if ($log[$result] == 'Y') notifica("L",$result);

    if ($email[$result] == 'Y') notifica("M",$result);

?>