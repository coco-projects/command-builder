<?php

    use Coco\commandBuilder\command\Pkill;

    require '../vendor/autoload.php';

    $command = Pkill::getIns();
    $command->matchFullProcessName()->signal(Pkill::SIGN_15_TERM)->pattern('"55"');


    echo $command;

