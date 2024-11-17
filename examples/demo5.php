<?php

    use Coco\commandBuilder\command\Grep;

    require '../vendor/autoload.php';

    $command = Grep::getIns();

    $command->usePerlRegex()->ignoreCase()->withFilename()->pattern('hello')->target('./dir');

    //grep -P -i -H hello ./dir
    echo $command;

