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

    #Notifica di errore al webmaster. 
    $notifica="assistenza@h0model.org";

    #Nome del sito
    $nomesito="H0Model.Org";

    #Link per tornare alla home od ad una pagina a scelta.
    $ritornahome="http://www.h0model.org/site/";

    #Percorso file di log degli errori, permessi da settare a 777
    $logerrori="log/errore.txt";

    #Oggetto della mail di notifica: e' anche il titolo della pagina corrispondente.
    $subject = array ( 
         '000' => 'Errore sconosciuto',
         '400' => 'Errore 400',
         '401' => 'Non autorizzato',
         '403' => 'Errore 403',
         '404' => 'File non trovato',
         '500' => 'Errore interno del server'
    );

    # N = nessun avviso  Y = avvisami in caso di errore.
    $email = array (
        '000' => 'Y',
        '400' => 'Y',
        '401' => 'Y',
        '403' => 'Y',
        '404' => 'Y',
        '500' => 'Y'
    );

    # N per non scrivere log Y per scrivere
    $log = array (
        '000' => 'Y',
        '400' => 'Y',
        '401' => 'Y',
        '403' => 'Y',
        '404' => 'Y',
        '500' => 'Y'
    );


    ###################################################################
    #
    # messaggi di errore.
    #
    ###################################################################

    $url = "";
    if (array_key_exists('url', $_GET)) {
        $url = $_GET['url'];
    }

    #Pagina che appare con errore 400
    $msg['400'] = "
    L'indrizzo richiesto (http://".$_SERVER['HTTP_HOST'].$url.")
    non &egrave; un indirizzo valido.";


    #Pagina che appare con errore 401
    $msg['401'] = "
    Accesso alla pagina richiesta (http://".$_SERVER['HTTP_HOST'].$url.") negato.
    <br/> Per accedere a questa pagina &egrave; necessario disporre delle autorizzazioni necessarie e aver effettuato il logn al sito.
    <br /><br />
    Abbiamo rilevato e registrato l'errore, cercheremo di risolverlo quanto prima se &egrave; causato da un problema del sistema.";


    #Pagina che appare con errore 403
    $msg['403'] = " 
    L'accesso all'indirizzo richiesto (http://".$_SERVER['HTTP_HOST'].$url.") non &egrave; consentito.";


    #Pagina che appare con errore 404
    $msg['404'] = "
    L'indirizzo richiesto (http://".$_SERVER['HTTP_HOST'].$url.") non &egrave; disponibile sul server.  
    Se non &egrave; stato commesso un errore di digitazione, probabilmente avete memorizzato in una precedente visita al nostro sito un link non pi&ugrave; esistente. 
    <br/><br/>
    Abbiamo rilevato questo errore e risolveremo quanto prima il problema in caso si tratti di pagina non raggiungibile.";


    #Pagina che appare con errore 500
    $msg['500'] = " 
    Ci di spiace ma non siamo in grado di soddisfare la sua richiesta (http://".$_SERVER['HTTP_HOST'].$url.") 
    perch&egrave; si  &egrave; verificato un errore imprevisto sul server.
    <br /><br />
    Abbiamo rilevato e registrato l'errore in modo da poter risolvere il problema quanto prima.";

    
    #Pagina che appare con errore sconosciuto
    $msg['000'] = "
    L'indirizzo richiesto (http://".$_SERVER['HTTP_HOST'].$url.")  
    restituisce un errore sconosciuto.
    <br /><br />
    Abbiamo rilevato e registrato l'errore, cercheremo di risolverlo quanto prima.";

?>