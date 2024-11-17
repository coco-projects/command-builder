<?php

    use Coco\commandBuilder\command\Kill;

    require '../vendor/autoload.php';

    $command = Kill::getIns();

    $command->signal(Kill::SIGN_9_KILL)->sendToPid(12345);

    echo $command;

