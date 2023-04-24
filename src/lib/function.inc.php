<?php
 
    /* 
     * function.inc.php
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
     * Personalizzed server error pages function files
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

    function notifica ($action, $result)
    {
        global $bc, $_SERVER, $_GET, $logerrori, $subject, $notifica, $nomesito, $REQUEST_URI, $REMOTE_ADDR, $HTTP_USER_AGENT, $REDIRECT_ERROR_NOTES, $SERVER_NAME,$HTTP_REFERER;

        $date=date("D j M G:i:s T Y");
        $agent=$bc->getBrowser();

        $url = "";
        if (array_key_exists('url', $_GET)) {
            $url = $_GET['url'];
        }

        $err = (array_key_exists('err', $_GET)) ? $_GET['err'] : "000";
        
        if ($action == "L") { 
            $message = "[$date] [client: {$_SERVER['REMOTE_ADDR']} ({$agent->Parent} - {$agent->Platform})] (http://".$_SERVER['HTTP_HOST'].$url.") Errore ".$err."\n";
            
            $fp = fopen($logerrori,"a+");
            fwrite($fp, $message);
            fclose($fp);
        } else {
            $message = " 

                    ------------------------------------------------------------------------------

                    Sito:\t\t$nomesito ({$_SERVER['SERVER_NAME']})

                    Codice Errore:\t$result $subject[$result] 

                    Accaduto il:\t$date

                    Url in errore:\t{$_SERVER['REQUEST_URI']}

                    Indirizzo IP del browser:\t{$_SERVER['REMOTE_ADDR']}

                    Browser:\t{$_SERVER['HTTP_USER_AGENT']}

                    Pagina di provenienza:\t http://".$_SERVER['HTTP_HOST'].$url."

                    ------------------------------------------------------------------------------";

            mail("$notifica", "[ Errore del server: $subject[$result] ]", $message,

                "From: auto_message@h0model.org\r\n"

                ."X-Mailer: PHP/" . phpversion());

        }

    }

?>
