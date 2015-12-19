<?php
    use phpbrowscap\Browscap;
    require_once 'lib/Browscap.php';
    
    ini_set('memory_limit', '-1');

    $browscap = new Browscap('tmp');
    $browscap->updateCache();
?>
