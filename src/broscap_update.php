<?php
/*
 * -------------------------------------------------------------------------------------------
 * Licence
 * -------------------------------------------------------------------------------------------
 * Copyright (C)2022 HZKnight
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
 */

/**
* Browscap updater
* 
*  @author  lucliscio <lucliscio@h0model.org>
*  @version v 1.0
*  @copyright Copyright 2022 HZKnight
*  @license http://www.gnu.org/licenses/agpl-3.0.html GNU/AGPL3
*   
*  @package Experience ErrorPages
*  @filesource
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
