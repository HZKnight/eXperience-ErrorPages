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
?>

<html>
    
    <head>
        <title><?=$subject[$result]?></title>
        
        <style>
            #box {
                -moz-box-shadow:5px 5px 2px #cccccc;
                -webkit-box-shadow:5px 5px 2px #cccccc;
                box-shadow:5px 5px 2px #cccccc;
            }
            
            body {
                background: -moz-linear-gradient(100% 100% 180deg, #C6DAF2, #EAFAFF);
                background: -webkit-gradient(linear, right top, left bottom, from(#C6DAF2), to(#EAFAFF));
                border-top: 3px solid #85B0E4;
                margin: 0px;
	        test-color:#000000;
                background-color: #ffffff;
                font: 14px/100% Arial, Helvetica, sans-serif;
            }
            
            .side{
                background: -moz-linear-gradient(100% 100% 100deg, #EAFAFF, #3399FF);
                background: -webkit-gradient(linear, right top, left bottom, from(#3399FF), to(#EAFAFF));
            }
            
            .button {
                display: inline-block;
                zoom: 1; /* zoom and *display = ie7 hack for display:inline-block */
                *display: inline;
                vertical-align: baseline;
                margin: 2px 0px;
                outline: none;
                cursor: pointer;
                text-align: center;
                text-decoration: none;
                font: 14px/100% Arial, Helvetica, sans-serif;
                padding: .5em 2em .55em;
                text-shadow: 0 1px 1px rgba(0,0,0,.3);
                -webkit-border-radius: .5em; 
                -moz-border-radius: .5em;
                border-radius: .5em;
                -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.2);
                -moz-box-shadow: 0 1px 2px rgba(0,0,0,.2);
                box-shadow: 0 1px 2px rgba(0,0,0,.2);
            }
            
            .button:hover {
                text-decoration: none;
            }
            
            .button:active {
                position: relative;
                top: 1px;
            }
            
            /* white */
            .white {
                color: #606060;
                border: solid 1px #b7b7b7;
                background: #fff;
                background: -webkit-gradient(linear, left top, left bottom, from(#fff), to(#ededed));
                background: -moz-linear-gradient(top,  #fff,  #ededed);
                filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#ededed');
            }
            .white:hover {
                background: #ededed;
                background: -webkit-gradient(linear, left top, left bottom, from(#fff), to(#dcdcdc));
                background: -moz-linear-gradient(top,  #fff,  #dcdcdc);
                filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#dcdcdc');
            }
            .white:active {
                color: #999;
                background: -webkit-gradient(linear, left top, left bottom, from(#ededed), to(#fff));
                background: -moz-linear-gradient(top,  #ededed,  #fff);
                filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#ededed', endColorstr='#ffffff');
            }
            
            .small{
                font: 11px/100% Arial, Helvetica, sans-serif;
                text-align: center;
                width: 100%;
                margin: 5px;
            }
            
            table {
                font: 14px/100% Arial, Helvetica, sans-serif;
            }
        </style>
    
    </head>

    <body>

        <table border="0" cellpadding="0" cellspacing="0" height="80%" width="100%">
            <tr>
                <td valign="center">

                    <table width="550" bgcolor="#6699ff" border="0" align="center" cellspacing="1" cellpadding="5" color="#000000" id="box">
                        <tr>
                            <td class="side" valign="top">
                                <img src="./assets/images/error.png" alt="error" width="70px" />
                            </td>
                            <td bgcolor="#ffffff">
                                <center>
                                    <span style="font-weight: 600; color: #CC0000;">
                                        <img src ='./assets/images/logo.png' alt='$nomesito'>
                                        <br />
                                        Errore <?=$result?>
                                    </span>
                                    <br />
                                    <p style="text-align: justify">
                                        <?=$msg[$result]?>
                                    </p>
                                </center>
                                
                                <div style="width:100%; text-align:right;"> 
                                    <a href="<?=$ritornahome?>" class="button white"><img src="assets/images/home.png" width="16px" /> Vai alla Home Page</a>
                                </div>
                                
                            </td>
                        </tr>
                    </table>
                    <div class="small">
                        <strong>&copy;<?=date('Y')?> <?=$nomesito ?></strong> - Powered by Experience ErrorPages Ver.0.1.0
                    </div>
                    
                </td>
            </tr>
        </table>
    </body>
</html>