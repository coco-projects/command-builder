<?php

    use Coco\commandBuilder\command\Ls;

    require '../vendor/autoload.php';

    $ls = Ls::getIns();

    //ls /etc -d -h -al
    $ls->target('/etc')->humanReadable()->addFlag('al');

    echo $ls;