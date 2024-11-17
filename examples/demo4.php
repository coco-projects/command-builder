<?php

    use Coco\commandBuilder\abstract\NamedCommand;
    use Coco\commandBuilder\command\Nohup;

    require '../vendor/autoload.php';

    $command = NamedCommand::getIns('/etc/some-bin');

    $command->addOption('op1');
    $command->addFlag('flag1');

    $command->addOption('op2', 'value1');
    $command->addFlag('flag3', 'value2');

    $nohup = Nohup::getIns()->runBackend();
    $nohup->setSubCommand($command);

    echo $nohup;
    echo PHP_EOL;
    echo $command;