<?php

    use Coco\commandBuilder\command\Ls;

    require '../vendor/autoload.php';

    $ls = Ls::getIns();

    //ls /etc -h -al
    $ls->target('/etc')->readable()->addFlag('al');

    echo $ls;