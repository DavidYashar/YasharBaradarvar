<?php
function autoLoader($className) {
    include  $className . '.php';

}


spl_autoload_register('autoLoader');


?>