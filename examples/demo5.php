<?php

    use Coco\commandBuilder\command\Grep;

    require '../vendor/autoload.php';

    $command = Grep::getIns();

    $command->usePerlRegex()->ignoreCase()->withFilename()->useFile('aa.txt');

    echo $command;