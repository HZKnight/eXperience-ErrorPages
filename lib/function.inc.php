<?php
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

    function notifica ($action, $result)
    {
        global $bc, $_SERVER, $_GET, $logerrori, $subject, $notifica, $nomesito, $REQUEST_URI, $REMOTE_ADDR, $HTTP_USER_AGENT, $REDIRECT_ERROR_NOTES, $SERVER_NAME,$HTTP_REFERER;

        $date=date("D j M G:i:s T Y");
        $agent=$bc->getBrowser();

        $url = "";
        if (array_key_exists('url', $_GET)) {
            $url = $_GET['url'];
        }
        
        if ($action == "L") { 
            $message = "[$date] [client: $REMOTE_ADDR ({$agent->Parent} - {$agent->Platform})] (http://".$_SERVER['HTTP_HOST'].$url.") Errore ".$_GET['err']."\n";
            
            $fp = fopen($logerrori,"a+");
            fwrite($fp, $message);
            fclose($fp);
        } else {
            $message = " 

                    ------------------------------------------------------------------------------

                    Sito:\t\t$nomesito ($SERVER_NAME)

                    Codice Errore:\t$result $subject[$result] 

                    Accaduto il:\t$date

                    Url in errore:\t$REQUEST_URI

                    Indirizzo IP del browser:\t$REMOTE_ADDR

                    Browser:\t$HTTP_USER_AGENT

                    Pagina di provenienza:\t http://".$_SERVER['HTTP_HOST'].$url."

                    ------------------------------------------------------------------------------";

            mail("$notifica", "[ Errore del server: $subject[$result] ]", $message,

                "From: auto_message@h0model.org\r\n"

                ."X-Mailer: PHP/" . phpversion());

        }

    }

?>
